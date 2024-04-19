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


Route::get('/tambah-produk', function(){
    return view('Produk.formCreateProduk');
})->name('tambah-produk');

Route::get('/tambah-user', function(){
    return view('User.formCreateuser');
})->name('tambah-user');

Route::post('/login' ,[AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/product', [AdminController::class, 'allProduct'])->name('product');
Route::get('/edit-product/{id}', [AdminController::class, 'editProduct'])->name('edit-product');
Route::get('/user', [AdminController::class, 'allUser'])->name('user');
Route::post('/create-user', [AdminController::class, 'createUser'])->name('create-user');
Route::delete('/delete-user', [AdminController::class, 'deleteUser'])->name('delete-user');
Route::post('/create-product', [AdminController::class, 'createProduct'])->name('create-product');
Route::patch('/update-product/{id}', [AdminController::class, 'updateProduct'])->name('update-product');
Route::delete('/delete-product/{id}', [AdminController::class, 'deleteProduct'])->name('delete-product');
Route::get('/sales', [AdminController::class, 'allSaleData'])->name('sale');
Route::get('/form-create', [AdminController::class, 'formCreateSale'])->name('form-create-sale');
Route::post('/create-sale', [AdminController::class, 'sales'])->name('create-sale');
Route::post('/import-excel-csv-file', [AdminController::class, 'exportExcelCSV'])->name('export-excel');
Route::get('/detail-penjualan/{id}', [AdminController::class, 'detailPenjualan'])->name('detail-penjualan');
Route::get('/export/pdf/{id}', [AdminController::class, 'view_pdf'])->name('export-pdf');
Route::get('/struk/{id}', [AdminController::class, 'struk'])->name('struk');