<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/product', [MainController::class, 'index'])->name('index');
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('/', [MainController::class, 'product'])->name('product');
