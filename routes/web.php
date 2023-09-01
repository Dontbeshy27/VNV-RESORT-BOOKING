<?php

use App\Http\Controllers\BookingController;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

    Route::get('/bookings', [BookingController::class, 'index'])->name("bookings.index");
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/bookings/create', [BookingController::class, 'create'])->name("bookings.create");

    Route::get('/bookings/{booking}', [BookingController::class, 'show'])->name("bookings.show");
    Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name("bookings.edit");
    Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');

    Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');