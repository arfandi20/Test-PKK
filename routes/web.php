<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
Route::resource('/kategori', KategoriController::class);
Route::get('deletekategori/{id}', [KategoriController::class, 'destroy'])->name('deletekategori');

Route::resource('/produk', ProdukController::class);
Route::get('deleteproduk/{id}', [ProdukController::class, 'destroy'])->name('deleteproduk');

Route::resource('/post', PostController::class);
Route::get('deletepost/{id}', [PostController::class, 'destroy'])->name('deletepost');

});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::resource('/user', UserController::class);
    Route::get('deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');
});

Route::get('beranda', [PostController::class, 'beranda']);

Route::get('rekomendasi', function () {
    return view('rekomendasi');
});