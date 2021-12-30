<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\Barang_KeluarController;
use App\Http\Controllers\PeeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\Laporan_PeminjamanController;

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
    return view('welcome');
});


Auth::routes(
    [
        'register' => true
    ]
    );

//hanya untuk role admin
//Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
  //  Route::get('/', function(){
   //     return 'halaman admin';
 //});
  // Route::get('profile', function(){
     //  return 'halaman profile admin';
   //});
//});

//hanya untuk role pengguna
//Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function(){
   // Route::get('/', function(){
     //   return 'halaman pengguna';
   // });
    //Route::get('profile', function(){
    //    return 'halaman profile pengguna';
  //  });
//});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
      Route::get('buku', function(){
        return view ('buku.index');
   });
Route::get('pengarang', function(){
    return view('pengarang.index');
});
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('buku', function(){
      return view ('buku.index');
 })->middleware(['role:admin|pengguna']);

    Route::get('pengarang', function(){
      return view ('pengarang.index');
 })->middleware(['role:admin']);
});

//project

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){


    Route::resource('barang', BarangController::class);
    Route::resource('barang_masuk', BarangMasukController::class);
    Route::resource('barang_keluar', Barang_KeluarController::class);
    Route::resource('peminjaman', PeminjamanController::class);
    Route::resource('pengembalian', PengembalianController::class);
    Route::resource('laporan_peminjaman', Laporan_PeminjamanController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
