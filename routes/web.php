<?php

use Domains\Cars\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::resource('cars', CarController::class);

Route::get('/', function () {
    return 'Hi!';
});
