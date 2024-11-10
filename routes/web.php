<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PenulisController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [MateriController::class, 'index'])->name('home');
Route::get('/search/{query}', [MateriController::class, 'search'])->name('search');
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis');
Route::get('/penulis/{penulisId}', [PenulisController::class, 'detail'])->name('penulis.detail');

Route::get('/popular', [MateriController::class, 'popular'])->name('popular');

Route::get('/kategori/{kategoriId}', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/{kategoriId}/materi/{materiId}', [MateriController::class, 'detail'])->name('materi.detail');
