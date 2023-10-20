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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::get('/index', [BookingController::class, 'index'])->name('index.index');
Route::get('/contact', [BookingController::class, 'contact'])->name('contact.contact');
Route::get('/gallery', [BookingController::class, 'gallery'])->name('gallery.gallery');




