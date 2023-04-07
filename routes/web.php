<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RakController;
use App\Models\Rak;
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
    return view('auth/login');
});


Auth::routes();

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //petugas
    Route::prefix('petugas')->group(function () {
        Route::resource('petugas', PetugasController::class);
    });

    //anggota
    Route::prefix('anggota')->group(function () {
        Route::resource('anggota', AnggotaController::class);
    });

    //rak buku
    Route::prefix('rak-buku')->group(function () {
        Route::resource('rak', RakController::class);
    });

    //buku
    Route::prefix('buku')->group(function () {
        Route::resource('book', BookController::class);
    });

    //peminjaman
    Route::prefix('peminjaman')->group(function () {
        Route::resource('peminjaman', PeminjamanController::class);
    });
});
