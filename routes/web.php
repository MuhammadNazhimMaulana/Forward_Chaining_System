<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\{HomeController};
use App\Http\Controllers\Auth\{AuthController};

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth
Route::middleware('guest')->prefix('auth')->group(function () {
    // Login
    Route::get('/', [AuthController::class, 'login']);
});

// Process Login
Route::post('auth/login', [AuthController::class, 'authLogin']);
Route::post('/logout', [AuthController::class, 'logout']);

// Home
Route::prefix('home')->group(function () {
    // Home
    Route::get('/', [HomeController::class, 'home_admin']);
});