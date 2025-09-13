<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/products', ['ProductController::class', 'index'])->name('products.index');
Route::get('/products/create', ['ProductController::class', 'create'])->name('products.create');
Route::post('/products', ['ProductController::class', 'store'])->name('products.store');
Route::post('/products/{product}', ['ProductController::class', 'show'])->name('products.show');
Route::post('/products{product}/edit', ['ProductController::class', 'edit'])->name('products.edit');
Route::put('/products/{product}', ['ProductController::class', 'update'])->name('products.update');
Route::delete('/products/{product}', ['ProductController::class', 'destroy'])->name('products.destroy');
 