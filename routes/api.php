<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;

Route::get('/product', [ProductController::class, 'index'])->name('product');