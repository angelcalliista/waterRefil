<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TbProductController;
use App\Http\Controllers\TbPelangganController;
use App\Http\Controllers\TbOutletController;
use App\Http\Controllers\TbStokController;
use App\Http\Controllers\TrxHeadController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\jnspemesananController;
use App\Http\Controllers\HomeController;
use RealRashid\SweetAlert\Facades\Alert;

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
    return view('home');
});

// Route::get('/jns-pemesanan', function () {
//     return view('jns-pemesanan');
// });

Route::get('/transaction', function () {
    return view('transaction');
});

Route::resource('/outlets', OutletController::class);

Route::get('/jns-pemesanan', [jnspemesananController::class, 'index']);
Route::post('/jns/tambah', [jnspemesananController::class, 'store']);



Route::group(['middleware' => ['user']], function () {
  
    Route::get('/Home', function () {
        return view('home');
    });
});
Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/dashboard', function () {
        return view('layouts.admin.dashboard');
    });
});


    Route::resource('admin/product', TbProductController::class);
    Route::resource('admin/pelanggan', TbPelangganController::class);
    Route::resource('admin/dashboard', HomeController::class);
    Route::resource('admin/outlet', TbOutletController::class);
    Route::resource('admin/stok', TbStokController::class);
    Route::resource('admin/transaksi', TrxHeadController::class);






Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
