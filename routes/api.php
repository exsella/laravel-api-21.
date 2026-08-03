<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');