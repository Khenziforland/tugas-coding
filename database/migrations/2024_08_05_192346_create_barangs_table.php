<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();

            $table->string('name')
                ->nullable()
                ->comment('Nama Barang');
            $table->bigInteger('stock')
                ->comment('Stok');
            $table->bigInteger('quantity_sold')
                ->comment('Jumlah Terjual');
            $table->dateTime('transaction_datetime')
            ->comment('Tanggal Transaksi');
            $table->string('item_type')
                ->nullable()
                ->comment('Jenis Barang');
                
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
