<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        $data = [
            'name' => 'Fikri Sabriansyah',
            'email' => 'fikrisabriansyah@gmail.com',
            'phone_number_code' => '62',
            'phone_number' => '85741982123',
            'password' => Hash::make('fikrisabriansyah'),
        ];

        $user = User::create($data);
        $user->assignRole('Super Admin');

        $data = [
            'name' => 'Reyhan Savero',
            'email' => 'reyhansavero@gmail.com',
            'phone_number_code' => '62',
            'phone_number' => '85641435423',
            'password' => Hash::make('reyhansavero'),
        ];

        $user = User::create($data);
        $user->assignRole('Super Admin');

        $phoneNumber = $faker->e164PhoneNumber();
        $phoneNumber = str_replace('+', '', $phoneNumber);
        $phoneNumber = '8' . $phoneNumber;

        $data = [
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'phone_number_code' => '62',
            'phone_number' => $phoneNumber,
            'password' => Hash::make('superadmin'),
        ];

        $user = User::create($data);
        $user->assignRole('Super Admin');
    }
}
