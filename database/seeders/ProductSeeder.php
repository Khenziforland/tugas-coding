<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        $data = [
            ['name' => 'Laptop', 'price' => '2000.00'],
            ['name' => 'Smartphone', 'price' => '1000.00'],
            ['name' => 'Tablet', 'price' => '1500.00'],
            ['name' => 'Printer', 'price' => '500.00'],
            ['name' => 'Mouse', 'price' => '100.00'],
        ];

        foreach ($data as $row) {
            Product::create($row);
        }
    }
}
