<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminTransaksiController;
use App\Http\Controllers\AdminTransaksiDetailController;






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

Route::get('/login', [AdminAuthController::class, 'index']);
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);

Route::get('/', function () {
    $data = [
        'content'   => 'admin.dashboard.index'
    ];
    return view('admin.layout.wrapper', $data);
});

Route::prefix('/admin')->group(function(){

 Route::post('/transaksi/detail/create', [AdminTransaksiDetailController::class, 'create']);
 Route::resource('/transaksi' , AdminTransaksiController::class);
 Route::resource('/produk' , AdminProdukController::class);
 Route::resource('/kategori' , AdminKategoriController::class);
 Route::resource('/user' , AdminUserController::class);

});


