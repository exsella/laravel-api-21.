<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\KategoriController;

// ====================
// ROUTE PRODUCT
// ====================

Route::get('/product', [ProductController::class, 'index'])
    ->name('product');

Route::post('/product', [ProductController::class, 'store'])
    ->name('product.store');

Route::get('/product/{product}', [ProductController::class, 'show'])
    ->name('product.show');

Route::put('/product/{product}', [ProductController::class, 'update'])
    ->name('product.update');

Route::patch('/product/{product}', [ProductController::class, 'update'])
    ->name('product.patch');

Route::delete('/product/{product}', [ProductController::class, 'destroy'])
    ->name('product.destroy');


// ====================
// ROUTE KATEGORI
// ====================

Route::get('/kategori', [KategoriController::class, 'index'])
    ->name('kategori');

Route::post('/kategori', [KategoriController::class, 'store'])
    ->name('kategori.store');

Route::get('/kategori/{kategori}', [KategoriController::class, 'show'])
    ->name('kategori.show');

Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])
    ->name('kategori.update');

Route::patch('/kategori/{kategori}', [KategoriController::class, 'update'])
    ->name('kategori.patch');

Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])
    ->name('kategori.destroy');