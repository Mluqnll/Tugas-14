<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin1Controller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Produk1Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualController;

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

Route::get('web',[HomeController::class,'index']);
Route::get('shop',[HomeController::class,'produk']);
Route::resource('register', RegisterController::class);
Route::post('filter/produk', [HomeController::class,'filter']);
Route::post('filter/harga', [HomeController::class,'harga']);
// Route::get('test',[HomeController::class,'test']);


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('/', AdminController::class);
    Route::resource('user',UserController::class);
    Route::post('produk/filter', [ProdukController::class,'filter']);
    Route::resource('kategori',KategoriController::class);
    Route::resource('produk',ProdukController::class);
    Route::resource('pembeli',PembeliController::class);
    Route::resource('penjual',PenjualController::class);
    Route::get('test-alamat', [AdminController::class, 'cekAlamat']);
});

Route::resource('penjual', Admin1Controller::class);
Route::resource('produk',Produk1Controller::class);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);