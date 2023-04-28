<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

// resource routes
// Product
Route::resource('product', ProductController::class);

// Customers
Route::resource('customer', CustomerController::class)->only(['index','show']);
