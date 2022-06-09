<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerPremiumController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\edukasiController;
use App\Http\Controllers\rsterdekatController;
use App\Http\Controllers\apotekterdekatController;

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

Route::get('/', [homeController::class, 'index']);
Route::get('/konsultasi', [KonsultasiController::class, 'index']);
Route::get('/edukasi', [edukasiController::class, 'index']);
Route::get('/rsterdekat', [rsterdekatController::class, 'index']);
Route::get('/apotekterdekat', [apotekterdekatController::class, 'index']);
