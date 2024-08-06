<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\Number4Controller;

Route::group(
    [
        'as' => 'dashboard.number-4',
        'prefix' => 'dashboard/nomor-4',
    ],
    function () {
        Route::get('', [Number4Controller::class, 'index'])
            ->name('index');

        Route::get('datatable', [Number4Controller::class, 'datatable'])
            ->name('datatable');
    }
);
