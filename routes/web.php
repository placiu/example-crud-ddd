<?php

use Domains\Vehicles\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::resource('vehicles', VehicleController::class);

Route::get('/', function () {
    return 'Hi!';
});
