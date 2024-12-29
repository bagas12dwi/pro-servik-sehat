<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FormulirUserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

// Auth 
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/finish', function () {
    return view('global.finish-submit');
})->name('finish');

// User 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('booking', BookingController::class)->names('booking');
Route::get('/listBooking', [BookingController::class, 'listBooking'])->name('booking.list');
Route::get('/formulir/{booking}', [FormulirUserController::class, 'index'])->name('formulir.user');
Route::post('/formulir', [FormulirUserController::class, 'store'])->name('formulir.store');


// Admin 
Route::prefix('admin')->group(function () { 
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('admin.dashboard');
});