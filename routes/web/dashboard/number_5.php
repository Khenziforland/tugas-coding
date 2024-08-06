<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\Number5Controller;

Route::group(
    [
        'as' => 'dashboard.number-5',
        'prefix' => 'dashboard/nomor-5',
    ],
    function () {
        Route::get('', [Number5Controller::class, 'index'])
            ->name('index');

        Route::get('datatable', [Number5Controller::class, 'datatable'])
            ->name('datatable');
    }
);
