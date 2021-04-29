<?php

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


Auth::routes();

Route::get('/',[ \App\Http\Livewire\Home::class, '__invoke'])->name('home');
Route::get('/TambahProduk',[ \App\Http\Livewire\TambahProduk::class, '__invoke'])->name('tambah_produk');
Route::get('/BelanjaUser',[ \App\Http\Livewire\BelanjaUser::class, '__invoke'])->name('belanja_user');
