<?php

use Illuminate\Support\Facades\Route;
// Controller
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;


Route::get('/', [MainController::class, 'home'])
    -> name('home');
Route::get('/product/show/{product}', [ProductController::class, 'productShow'])
    -> name('product.show');
