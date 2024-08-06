<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\Number1Controller;

Route::group(
    [
        'as' => 'dashboard.number-1',
        'prefix' => 'dashboard/nomor-1',
    ],
    function () {
        Route::get('', [Number1Controller::class, 'index'])
            ->name('index');

        Route::get('datatable', [Number1Controller::class, 'datatable'])
            ->name('datatable');
    }
);
