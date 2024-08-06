<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        $data = [
            ['name' => 'John Doe', 'country' => 'USA'],
            ['name' => 'Jane Smith', 'country' => 'UK'],
            ['name' => 'Bob Johnson', 'country' => 'USA'],
            ['name' => 'Robert Martinez', 'country' => 'FRANCE'],
            ['name' => 'George Russel', 'country' => 'UK'],
        ];

        foreach ($data as $row) {
            Customer::create($row);
        }
    }
}
