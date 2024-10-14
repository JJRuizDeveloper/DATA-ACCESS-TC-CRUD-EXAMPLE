<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::post('/store', [ProductController::class, 'store'])->name('product.store');
Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');