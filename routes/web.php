<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Soal 3 (praktik): tambahkan 1 route baru sederhana di bawah ini,
// misalnya Route::get('/ping', ...) yang mengembalikan teks "pong".

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
Route::put('/produk/{id}', [ProdukController::class, 'update']);
Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);
Route::get('/produk/{id}', [ProdukController::class, 'show']);
