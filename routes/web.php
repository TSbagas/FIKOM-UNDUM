<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavController;

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
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'Login'])->name("login");
    Route::post('/ceklogin', [AuthController::class, 'CekLogin']);
    Route::get('/register', [AuthController::class, 'Register']);
    Route::post('/simpanuser', [AuthController::class, 'SimpanUser']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'Logout']);
    Route::get('/beranda', [NavController::class, 'Beranda']);
    Route::get('/sejarah', [NavController::class, 'SejarahFikom']);
    Route::get('/dosen', [NavController::class, 'Dosen']);
    Route::get('/users', [NavController::class, 'Users']);


});



