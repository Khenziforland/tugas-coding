<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use EloquentFilter\Filterable;

use App\Filters\ProductFilter;

use App\Helpers\HashHelper;

use App\Traits\PaginateData;

class Product extends Model
{
    use Filterable, HasFactory, PaginateData, SoftDeletes;

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
     ** The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'hash_id',
        'total_transaction',
    ];

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
        return $this->provideFilter(ProductFilter::class);
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
     ** Get total transaction attribute.
     *
     * @return string
     */
    public function getTotalTransactionAttribute()
    {
        $transaction = Transaction::where('product_id', $this->id)
            ->count();

        return $transaction;
    }

    /*
    |-----------------------------------------------------------------------------
    | STATIC METHOD(s)
    | ----------------------------------------------------------------------------
    | // ! write your static method(s) below, to maintain code readability
    */

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
