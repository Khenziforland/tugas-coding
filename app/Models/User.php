<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use EloquentFilter\Filterable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;

use App\Filters\UserFilter;

use App\Helpers\HashHelper;
use App\Helpers\StorageHelper;

use App\Traits\PaginateData;

class User extends Authenticatable implements HasMedia
{
    use Filterable, InteractsWithMedia, HasApiTokens, HasFactory, HasRoles, Notifiable, PaginateData, SoftDeletes;

    /*
    |-----------------------------------------------------------------------------
    | DECORATOR(s)
    |-----------------------------------------------------------------------------
    | // ! write your decorator(s) below, to maintain code readability
    */

    /**
     ** The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     ** The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     ** The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     ** The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'hash_id',
        'role',
        'profile_file',
    ];

    /**
     ** The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = [];

    /*
    |-----------------------------------------------------------------------------
    | HOOK METHOD(s)
    |-----------------------------------------------------------------------------
    | // ! write your hook method(s) below, to maintain code readability
    */

    /**
     ** Model filter.
     *
     * @return string
     */
    public function modelFilter()
    {
        return $this->provideFilter(UserFilter::class);
    }

    /**
     ** Get hash id attribute.
     *
     * @return string
     */
    public function getHashIdAttribute()
    {
        return HashHelper::encrypt($this->id);
    }

    /**
     ** Get role attribute.
     *
     * @return string
     */
    public function getRoleAttribute()
    {
        return $this->roles->first()->name;
    }

    /**
     ** Get profile file attribute.
     *
     * @return string
     */
    public function getProfileFileAttribute()
    {
        $defaultProfile = config('s3.default_file.profile');
        $result = StorageHelper::getUrlFile('profile', $defaultProfile);

        $employee = Employee::firstWhere('user_id', $this->id);

        if (($employee) and ($employee->gender == 'Laki-laki')) {
            $defaultProfileMale = config('s3.default_file.profile_male');
            $result = StorageHelper::getUrlFile('profile', $defaultProfileMale);
        } else if (($employee) and ($employee->gender == 'Perempuan')) {
            $defaultProfileFemale = config('s3.default_file.profile_female');
            $result = StorageHelper::getUrlFile('profile', $defaultProfileFemale);
        }

        $media = $this->getFirstMedia('user-profile');

        if ($media) {
            $result =  $media->getUrl();
        }

        return $result;
    }

    /*
    |-----------------------------------------------------------------------------
    | STATIC METHOD(s)
    | ----------------------------------------------------------------------------
    | // ! write your static method(s) below, to maintain code readability
    */

    /**
     ** Save profile file.
     *
     * @param $id
     * @param $file
     * @return void
     */
    public static function saveProfileFile($id, $file)
    {
        $timestamp = Carbon::now()->isoFormat('YYYYMMDDHHmmss');
        $uniqueSuffix = uniqid();
        $fileExtension = $file->getClientOriginalExtension();
        $newFileName = "{$timestamp}{$uniqueSuffix}.{$fileExtension}";

        User::firstWhere('id', $id)
            ->addMedia($file)
            ->usingFileName($newFileName)
            ->toMediaCollection('user-profile', 's3');
    }

    /**
     ** Delete profile file.
     * 
     * @param $id
     * @return void
     */
    public static function deleteProfileFile($id)
    {
        User::firstWhere('id', $id)
            ->clearMediaCollection('user-profile');
    }

    /*
    |-----------------------------------------------------------------------------
    | SCOPED METHOD(s)
    | ----------------------------------------------------------------------------
    | // ! write your static method(s) below, to maintain code readability
    */

    /*
    |-----------------------------------------------------------------------------
    | RELATIONAL METHOD(s)
    |-----------------------------------------------------------------------------
    | // ! write your relational method(s) below, to maintain code readability
    */
}
