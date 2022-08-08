<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\MenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PengemudiController;
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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/login/xxx', [LoginController::class, 'xxx']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan');
Route::get('/kendaraan/new', [KendaraanController::class, 'edit']);
Route::get('/kendaraan/{kendaraan}', [KendaraanController::class, 'edit']);
Route::post('/kendaraan', [KendaraanController::class, 'store']);
Route::delete('/kendaraan/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

Route::get('/pengemudi', [PengemudiController::class, 'index'])->name('pengemudi');
Route::get('/pengemudi/new', [PengemudiController::class, 'edit']);
Route::get('/pengemudi/{pengemudi}', [PengemudiController::class, 'edit']);
Route::post('/pengemudi', [PengemudiController::class, 'store']);
Route::delete('/pengemudi/{pengemudi}', [PengemudiController::class, 'destroy'])->name('pengemudi.destroy');

Route::get('/test', function () {
    return view('auth.login');
});
