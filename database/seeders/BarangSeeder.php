<?php

namespace Database\Seeders;

use App\Models\Barang;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        $data = [
            'name' => 'Kopi',
            'stock' => 100,
            'quantity_sold' => 10,
            'transaction_datetime' => now(),
            'item_type' => 'Konsumsi',
        ];

        $barang = Barang::create($data);


        $data = [
            'name' => 'Teh',
            'stock' => 100,
            'quantity_sold' => 19,
            'transaction_datetime' => now(),
            'item_type' => 'Konsumsi',
        ];

        $barang = Barang::create($data);


        $data = [
            'name' => 'Pasta Gigi',
            'stock' => 100,
            'quantity_sold' => 20,
            'transaction_datetime' => now(),
            'item_type' => 'Pembersih',
        ];

        $barang = Barang::create($data);


        $data = [
            'name' => 'Sabun Mandi',
            'stock' => 100,
            'quantity_sold' => 30,
            'transaction_datetime' => now(),
            'item_type' => 'Pembersih',
        ];

        $barang = Barang::create($data);

        $data = [
            'name' => 'Sampo',
            'stock' => 100,
            'quantity_sold' => 25,
            'transaction_datetime' => now(),
            'item_type' => 'Pembersih',
        ];

        $barang = Barang::create($data);
    }
}
