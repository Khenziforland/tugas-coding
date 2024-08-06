<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        $data =
            [
                ['transaction_date' => '2023-09-01', 'customer_id' => 1, 'product_id' => 1, 'quantity' => 3],
                ['transaction_date' => '2023-09-01', 'customer_id' => 3, 'product_id' => 2, 'quantity' => 4],
                ['transaction_date' => '2023-09-01', 'customer_id' => 4, 'product_id' => 1, 'quantity' => 3],
                ['transaction_date' => '2023-09-01', 'customer_id' => 3, 'product_id' => 5, 'quantity' => 2],
                ['transaction_date' => '2023-09-01', 'customer_id' => 3, 'product_id' => 3, 'quantity' => 4],
                ['transaction_date' => '2023-09-02', 'customer_id' => 1, 'product_id' => 1, 'quantity' => 1],
                ['transaction_date' => '2023-09-02', 'customer_id' => 1, 'product_id' => 1, 'quantity' => 3],
                ['transaction_date' => '2023-09-02', 'customer_id' => 1, 'product_id' => 2, 'quantity' => 5],
                ['transaction_date' => '2023-09-02', 'customer_id' => 4, 'product_id' => 4, 'quantity' => 5],
                ['transaction_date' => '2023-09-02', 'customer_id' => 5, 'product_id' => 4, 'quantity' => 2],
                ['transaction_date' => '2023-09-03', 'customer_id' => 2, 'product_id' => 1, 'quantity' => 3],
                ['transaction_date' => '2023-09-03', 'customer_id' => 1, 'product_id' => 5, 'quantity' => 4],
                ['transaction_date' => '2023-09-03', 'customer_id' => 4, 'product_id' => 4, 'quantity' => 4],
                ['transaction_date' => '2023-09-03', 'customer_id' => 1, 'product_id' => 5, 'quantity' => 3],
                ['transaction_date' => '2023-09-03', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 5],
                ['transaction_date' => '2023-09-03', 'customer_id' => 1, 'product_id' => 1, 'quantity' => 2],
                ['transaction_date' => '2023-09-03', 'customer_id' => 2, 'product_id' => 2, 'quantity' => 2],
                ['transaction_date' => '2023-09-03', 'customer_id' => 4, 'product_id' => 1, 'quantity' => 3],
                ['transaction_date' => '2023-09-04', 'customer_id' => 4, 'product_id' => 4, 'quantity' => 5],
                ['transaction_date' => '2023-09-04', 'customer_id' => 5, 'product_id' => 3, 'quantity' => 5],
                ['transaction_date' => '2023-09-04', 'customer_id' => 5, 'product_id' => 4, 'quantity' => 4],
                ['transaction_date' => '2023-09-04', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 2],
                ['transaction_date' => '2023-09-05', 'customer_id' => 5, 'product_id' => 4, 'quantity' => 1],
                ['transaction_date' => '2023-09-05', 'customer_id' => 4, 'product_id' => 1, 'quantity' => 4],
                ['transaction_date' => '2023-09-05', 'customer_id' => 3, 'product_id' => 3, 'quantity' => 4],
                ['transaction_date' => '2023-09-05', 'customer_id' => 2, 'product_id' => 5, 'quantity' => 4],
                ['transaction_date' => '2023-09-05', 'customer_id' => 3, 'product_id' => 5, 'quantity' => 2],
                ['transaction_date' => '2023-09-05', 'customer_id' => 5, 'product_id' => 2, 'quantity' => 5],
                ['transaction_date' => '2023-09-06', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 2],
                ['transaction_date' => '2023-09-06', 'customer_id' => 3, 'product_id' => 5, 'quantity' => 5],
                ['transaction_date' => '2023-09-06', 'customer_id' => 3, 'product_id' => 4, 'quantity' => 1],
                ['transaction_date' => '2023-09-06', 'customer_id' => 3, 'product_id' => 4, 'quantity' => 5],
                ['transaction_date' => '2023-09-06', 'customer_id' => 4, 'product_id' => 1, 'quantity' => 4],
                ['transaction_date' => '2023-09-06', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 2],
                ['transaction_date' => '2023-09-06', 'customer_id' => 3, 'product_id' => 4, 'quantity' => 1],
                ['transaction_date' => '2023-09-07', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 5],
                ['transaction_date' => '2023-09-07', 'customer_id' => 2, 'product_id' => 5, 'quantity' => 4],
                ['transaction_date' => '2023-09-07', 'customer_id' => 2, 'product_id' => 1, 'quantity' => 3],
                ['transaction_date' => '2023-09-07', 'customer_id' => 1, 'product_id' => 5, 'quantity' => 4],
                ['transaction_date' => '2023-09-07', 'customer_id' => 1, 'product_id' => 5, 'quantity' => 4],
                ['transaction_date' => '2023-09-07', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 3],
                ['transaction_date' => '2023-09-07', 'customer_id' => 2, 'product_id' => 4, 'quantity' => 5],
                ['transaction_date' => '2023-09-07', 'customer_id' => 5, 'product_id' => 2, 'quantity' => 4],
                ['transaction_date' => '2023-09-07', 'customer_id' => 3, 'product_id' => 3, 'quantity' => 2],
                ['transaction_date' => '2023-09-08', 'customer_id' => 3, 'product_id' => 2, 'quantity' => 5],
                ['transaction_date' => '2023-09-08', 'customer_id' => 4, 'product_id' => 5, 'quantity' => 5],
                ['transaction_date' => '2023-09-08', 'customer_id' => 1, 'product_id' => 2, 'quantity' => 1],
                ['transaction_date' => '2023-09-09', 'customer_id' => 3, 'product_id' => 5, 'quantity' => 2],
                ['transaction_date' => '2023-09-09', 'customer_id' => 5, 'product_id' => 3, 'quantity' => 5],
                ['transaction_date' => '2023-09-09', 'customer_id' => 4, 'product_id' => 3, 'quantity' => 2],
                ['transaction_date' => '2023-09-10', 'customer_id' => 2, 'product_id' => 2, 'quantity' => 3],
                ['transaction_date' => '2023-09-10', 'customer_id' => 3, 'product_id' => 2, 'quantity' => 4],
                ['transaction_date' => '2023-09-10', 'customer_id' => 1, 'product_id' => 2, 'quantity' => 4],
                ['transaction_date' => '2023-09-10', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 5],
                ['transaction_date' => '2023-09-10', 'customer_id' => 2, 'product_id' => 4, 'quantity' => 2],
                ['transaction_date' => '2023-09-11', 'customer_id' => 3, 'product_id' => 2, 'quantity' => 3],
                ['transaction_date' => '2023-09-11', 'customer_id' => 2, 'product_id' => 1, 'quantity' => 1],
                ['transaction_date' => '2023-09-11', 'customer_id' => 5, 'product_id' => 5, 'quantity' => 1],
                ['transaction_date' => '2023-09-11', 'customer_id' => 1, 'product_id' => 4, 'quantity' => 3],
                ['transaction_date' => '2023-09-12', 'customer_id' => 2, 'product_id' => 5, 'quantity' => 3],
                ['transaction_date' => '2023-09-12', 'customer_id' => 3, 'product_id' => 4, 'quantity' => 3],
                ['transaction_date' => '2023-09-12', 'customer_id' => 2, 'product_id' => 1, 'quantity' => 1],
                ['transaction_date' => '2023-09-13', 'customer_id' => 1, 'product_id' => 5, 'quantity' => 4],
                ['transaction_date' => '2023-09-13', 'customer_id' => 3, 'product_id' => 3, 'quantity' => 5],
                ['transaction_date' => '2023-09-13', 'customer_id' => 3, 'product_id' => 2, 'quantity' => 4],
                ['transaction_date' => '2023-09-13', 'customer_id' => 5, 'product_id' => 5, 'quantity' => 2],
                ['transaction_date' => '2023-09-13', 'customer_id' => 3, 'product_id' => 3, 'quantity' => 2],
                ['transaction_date' => '2023-09-13', 'customer_id' => 2, 'product_id' => 2, 'quantity' => 3],
                ['transaction_date' => '2023-09-14', 'customer_id' => 4, 'product_id' => 5, 'quantity' => 5],
                ['transaction_date' => '2023-09-14', 'customer_id' => 2, 'product_id' => 4, 'quantity' => 3],
                ['transaction_date' => '2023-09-14', 'customer_id' => 2, 'product_id' => 2, 'quantity' => 4],
                ['transaction_date' => '2023-09-14', 'customer_id' => 5, 'product_id' => 4, 'quantity' => 4],
                ['transaction_date' => '2023-09-14', 'customer_id' => 4, 'product_id' => 3, 'quantity' => 2],
                ['transaction_date' => '2023-09-14', 'customer_id' => 4, 'product_id' => 5, 'quantity' => 2],
                ['transaction_date' => '2023-09-14', 'customer_id' => 2, 'product_id' => 2, 'quantity' => 1],
                ['transaction_date' => '2023-09-14', 'customer_id' => 5, 'product_id' => 2, 'quantity' => 2],
                ['transaction_date' => '2023-09-15', 'customer_id' => 2, 'product_id' => 5, 'quantity' => 3],
                ['transaction_date' => '2023-09-15', 'customer_id' => 2, 'product_id' => 5, 'quantity' => 2],
                ['transaction_date' => '2023-09-15', 'customer_id' => 5, 'product_id' => 5, 'quantity' => 1],
                ['transaction_date' => '2023-09-15', 'customer_id' => 1, 'product_id' => 3, 'quantity' => 2],
                ['transaction_date' => '2023-09-15', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 1],
                ['transaction_date' => '2023-09-15', 'customer_id' => 4, 'product_id' => 3, 'quantity' => 3],
                ['transaction_date' => '2023-09-15', 'customer_id' => 1, 'product_id' => 3, 'quantity' => 3],
                ['transaction_date' => '2023-09-16', 'customer_id' => 4, 'product_id' => 5, 'quantity' => 2],
                ['transaction_date' => '2023-09-17', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 1],
                ['transaction_date' => '2023-09-17', 'customer_id' => 1, 'product_id' => 3, 'quantity' => 4],
                ['transaction_date' => '2023-09-17', 'customer_id' => 1, 'product_id' => 1, 'quantity' => 4],
                ['transaction_date' => '2023-09-17', 'customer_id' => 1, 'product_id' => 1, 'quantity' => 3],
                ['transaction_date' => '2023-09-17', 'customer_id' => 4, 'product_id' => 3, 'quantity' => 2],
                ['transaction_date' => '2023-09-18', 'customer_id' => 3, 'product_id' => 4, 'quantity' => 2],
                ['transaction_date' => '2023-09-18', 'customer_id' => 4, 'product_id' => 4, 'quantity' => 4],
                ['transaction_date' => '2023-09-18', 'customer_id' => 5, 'product_id' => 1, 'quantity' => 5],
                ['transaction_date' => '2023-09-18', 'customer_id' => 3, 'product_id' => 2, 'quantity' => 2],
                ['transaction_date' => '2023-09-19', 'customer_id' => 3, 'product_id' => 5, 'quantity' => 3],
                ['transaction_date' => '2023-09-19', 'customer_id' => 1, 'product_id' => 5, 'quantity' => 5],
                ['transaction_date' => '2023-09-19', 'customer_id' => 2, 'product_id' => 4, 'quantity' => 4],
                ['transaction_date' => '2023-09-20', 'customer_id' => 1, 'product_id' => 3, 'quantity' => 5],
                ['transaction_date' => '2023-09-20', 'customer_id' => 2, 'product_id' => 5, 'quantity' => 4],
                ['transaction_date' => '2023-09-20', 'customer_id' => 1, 'product_id' => 1, 'quantity' => 4],
                ['transaction_date' => '2023-09-20', 'customer_id' => 2, 'product_id' => 2, 'quantity' => 2],
            ];

        foreach ($data as $row) {
            Transaction::create($row);
        }
    }
}
