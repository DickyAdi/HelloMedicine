<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerPremiumController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\edukasiController;
use App\Http\Controllers\rsTerdekatController;
use App\Http\Controllers\apotekterdekatController;
use App\Http\Controllers\dashAdmin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\spesialisController;
use App\Http\Controllers\pembayaranController;

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

Route::get('/', [homeController::class, 'index']) ->middleware('auth');
Route::get('/konsultasi', [KonsultasiController::class, 'index'])->middleware('auth');
Route::get('/konsultasi/{spesialis:spesialis}', [KonsultasiController::class, 'show'])->middleware('auth');
Route::get('pembayaran/{dokter:nama}', [pembayaranController::class, 'index'])->middleware('auth');
Route::get('/edukasi', [edukasiController::class, 'find3'])->middleware('auth');
Route::get('/artikel', [edukasiController::class, 'index'])->middleware('auth');
Route::get('/artikel/{edukasi:title}', [edukasiController::class, 'show'])->middleware('auth');
Route::get('/rsterdekat', [rsTerdekatController::class, 'index'])->middleware('auth');
Route::get('/apotekterdekat', [apotekterdekatController::class, 'index'])->middleware('auth');
Route::get('/dashAdmin', [dashAdmin::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);