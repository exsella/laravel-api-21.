<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\AuthController;

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


    // ====================
// ROUTE AUTH
// ====================

Route::prefix('auth')->name('auth.')->group(function () {

    // Register & Login tidak membutuhkan token
    Route::post('/register', [AuthController::class, 'register'])
        ->name('register');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login');

    // Route yang membutuhkan JWT
    Route::middleware('jwt')->group(function () {

        Route::get('/profile', [AuthController::class, 'profile'])
            ->name('profile');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');
    });
});