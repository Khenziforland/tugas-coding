<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\Number3Controller;

Route::group(
    [
        'as' => 'dashboard.number-3',
        'prefix' => 'dashboard/nomor-3',
    ],
    function () {
        Route::get('', [Number3Controller::class, 'index'])
            ->name('index');

        Route::get('datatable', [Number3Controller::class, 'datatable'])
            ->name('datatable');
    }
);
