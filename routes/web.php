<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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
    return view('login');
});

Route::get('/dashboard', function(){
    return view('layouts.dashboard');
})->name('dashboard');

// Route::get('/produk', function(){
//     return view('Produk.produk');
// })->name('produk');

Route::get('/tambah-produk', function(){
    return view('Produk.formCreateProduk');
})->name('tambah-produk');

Route::get('/penjualan', function(){
    return view('Penjualan.penjualan');
})->name('penjualan');

Route::get('/tambah-penjualan', function(){
    return view('Penjualan.formCreatePenjualan');
})->name('tambah-penjualan');

// Route::get('/user', function(){
//     return view('User.user');
// })->name('user');

Route::get('/tambah-user', function(){
    return view('User.formCreateuser');
})->name('tambah-user');

Route::post('/login' ,[AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/product', [AdminController::class, 'allProduct'])->name('product');
Route::get('/user', [AdminController::class, 'allUser'])->name('user');
Route::post('/create-user', [AdminController::class, 'createUser'])->name('create-user');
