<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::middleware('guest')->prefix('/login')->name('login')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });

    Route::post('/', LoginController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');

    Route::post('/logout', LogoutController::class)
        ->name('logout');
});
