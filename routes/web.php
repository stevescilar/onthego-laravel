<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAccountController;
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

// resource routes
// Product
Route::resource('product', ProductController::class)->only(['create','store', 'edit', 'update', 'destroy'])->middleware('auth');

Route::resource('product', ProductController::class)->except(['create','store', 'edit', 'update', 'destroy']);
// Customers
Route::resource('customer', CustomerController::class)->only(['index','show'])->middleware('auth');


// login
Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::DELETE('logout', [AuthController::class, 'destroy'])->name('logout');

Route::resource('user-account',UserAccountController::class)->only(['create','store']);
