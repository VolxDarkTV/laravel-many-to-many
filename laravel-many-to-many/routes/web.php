<?php

use Illuminate\Support\Facades\Route;
// Controller
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;


Route::get('/', [MainController::class, 'home'])
    -> name('home');

    // Show
Route::get('/product/show/{product}', [ProductController::class, 'productShow'])
    -> name('product.show');

    // Create
Route::get('product/create', [ProductController::class, 'productCreate'])
    -> name('product.create');
    // Store
Route::post('product/store', [ProductController::class, 'productStore'])
    -> name('product.store');