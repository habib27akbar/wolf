<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('profil', ProfilController::class);
Route::resource('production', ProductionController::class);
Route::resource('certificate', CertificateController::class);
Route::resource('product', ProductController::class);
Route::resource('news', NewsController::class);
Route::resource('contact', ContactController::class);
