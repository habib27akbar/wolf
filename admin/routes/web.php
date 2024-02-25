<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\SliderController;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/login', [AuthController::class, 'form_login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('authenticate');
Route::get('/register', [AuthController::class, 'form_regist']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('slider', SliderController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('about', AboutController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('production', ProductionController::class);
    Route::resource('certificate', CertificateController::class);
    Route::resource('product', ProductController::class);
    Route::resource('product_detail', ProductDetailController::class);
    Route::resource('katalog', KatalogController::class);
});
