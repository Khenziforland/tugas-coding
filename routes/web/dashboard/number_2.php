<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\Number2Controller;

Route::group(
    [
        'as' => 'dashboard.number-2',
        'prefix' => 'dashboard/nomor-2',
    ],
    function () {
        Route::get('', [Number2Controller::class, 'index'])
            ->name('index');

        Route::get('datatable', [Number2Controller::class, 'datatable'])
            ->name('datatable');
    }
);
