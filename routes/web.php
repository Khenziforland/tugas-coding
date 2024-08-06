<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Halo";
})->name('login');

require __DIR__ . '/web/dashboard/number_1.php';
require __DIR__ . '/web/dashboard/number_2.php';
require __DIR__ . '/web/dashboard/number_3.php';
require __DIR__ . '/web/dashboard/number_4.php';
require __DIR__ . '/web/dashboard/number_5.php';
require __DIR__ . '/web/dashboard/number_6.php';
