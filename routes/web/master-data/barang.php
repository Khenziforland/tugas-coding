<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasterData\BarangController;

Route::group(
    [
        'as' => 'master-data.barang',
        'middleware' => ['auth'],
        'prefix' => 'master-data/barang',
    ],
    function () {
        Route::get('', [BarangController::class, 'index'])
            ->name('index');

        Route::get('datatable', [BarangController::class, 'datatable'])
            ->name('datatable');

        Route::get('tambah-data', [BarangController::class, 'create'])
            ->name('create');

        Route::post('tambah-data', [BarangController::class, 'store'])
            ->name('store');

        Route::get('ubah-data/{id}', [BarangController::class, 'edit'])
            ->name('edit');

        Route::put('ubah-data/{id}', [BarangController::class, 'update'])
            ->name('update');

        Route::delete('hapus-data/{id}', [BarangController::class, 'destroy'])
            ->name('destroy');
    }
);
