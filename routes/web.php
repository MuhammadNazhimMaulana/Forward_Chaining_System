<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\{HomeController};
use App\Http\Controllers\Auth\{AuthController};
use App\Http\Controllers\CRUD\{RuleController, PenyakitController, GejalaController};

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

// Home Admin
Route::prefix('home')->group(function () {
    // Home
    Route::get('/', [HomeController::class, 'home_admin']);

    // CRUD Rule
    Route::prefix('rule')->group(function () {
        Route::get('/', [RuleController::class, 'index']);
    });

    // CRUD Gejala
    Route::prefix('gejala')->group(function () {
        Route::get('/', [GejalaController::class, 'index']);
    });

    // CRUD Penyakit
    Route::prefix('penyakit')->group(function () {
        Route::get('/', [PenyakitController::class, 'index']);
    });

});

// Home Admin
Route::prefix('user')->group(function () {
    // Home
    Route::get('/home', [HomeController::class, 'home_user']);
});