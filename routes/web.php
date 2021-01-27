<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect('bookings');
});

Route::resource('bookings',App\Http\Controllers\BookingController::class);
Route::post('bookings/update_cal',[App\Http\Controllers\BookingController::class,'update_cal'])->name('bookings.update_cal');


