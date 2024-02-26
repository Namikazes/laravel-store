<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', \App\Http\Controllers\MainController::class)->name('/');

Route::get('/categories', [\App\Http\Controllers\Categories\CategoriesController::class, 'index'])->name('categories');

Route::get('/{category}', [\App\Http\Controllers\Categories\CategoriesController::class, 'show'])->name('category');

Route::get('/products/{product}', [\App\Http\Controllers\Product\ProductController::class, 'index'])->name('products');

