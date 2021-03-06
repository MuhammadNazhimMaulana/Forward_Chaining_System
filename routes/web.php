<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\{HomeController};
use App\Http\Controllers\User\{UserController};
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
        Route::post('/', [RuleController::class, 'store_rule']);
        Route::put('/update/{id}', [RuleController::class, 'update_rule']);
        Route::delete('/delete/{id}', [RuleController::class, 'delete_rule']);
    });

    // CRUD Gejala
    Route::prefix('gejala')->group(function () {
        Route::get('/', [GejalaController::class, 'index']);
        Route::post('/', [GejalaController::class, 'store_gejala']);
        Route::put('/update/{id}', [GejalaController::class, 'update_gejala']);
        Route::delete('/delete/{id}', [GejalaController::class, 'delete_gejala']);
    });

    // CRUD Penyakit
    Route::prefix('penyakit')->group(function () {
        Route::get('/', [PenyakitController::class, 'index']);
        Route::post('/', [PenyakitController::class, 'store_penyakit']);
        Route::put('/update/{id}', [PenyakitController::class, 'update_penyakit']);
        Route::delete('/delete/{id}', [PenyakitController::class, 'delete_penyakit']);
    });

});

// Home Admin
Route::prefix('user')->group(function () {
    // Home
    Route::get('/home', [HomeController::class, 'home_user']);

    // Konsultasi 
    Route::get('/konsultasi', [UserController::class, 'index_list']);
    Route::post('/konsultasi', [UserController::class, 'konsultasi']);
    Route::post('/konsultasi-save', [UserController::class, 'simpanKonsultasi']);
});