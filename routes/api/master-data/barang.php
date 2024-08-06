<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\MasterData\BarangControllerApi;

Route::group(
    [
        'as' => 'api.master-data.barang',
        'middleware' => [],
        'prefix' => 'master-data/barang',
    ],
    function () {
        Route::get('', [BarangControllerApi::class, 'index'])
            ->middleware(['api'])
            ->name('index');

        Route::get('{id}', [BarangControllerApi::class, 'show'])
            ->middleware(['api'])
            ->name('show');

        Route::post('', [BarangControllerApi::class, 'store'])
            ->middleware(['api'])
            ->name('store');

        Route::put('{id}', [BarangControllerApi::class, 'update'])
            ->middleware(['api'])
            ->name('update');

        Route::delete('{id}', [BarangControllerApi::class, 'destroy'])
            ->middleware(['api'])
            ->name('destroy');
    }
);
