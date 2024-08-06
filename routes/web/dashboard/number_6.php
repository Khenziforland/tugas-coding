<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\Number6Controller;

Route::group(
    [
        'as' => 'dashboard.number-6',
        'prefix' => 'dashboard/nomor-6',
    ],
    function () {
        Route::get('', [Number6Controller::class, 'index'])
            ->name('index');

        Route::get('datatable', [Number6Controller::class, 'datatable'])
            ->name('datatable');
    }
);
