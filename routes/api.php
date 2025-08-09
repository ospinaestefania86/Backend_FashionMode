<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/productos', [ProductController::class, 'index']);
Route::get('/productos/{id}', [ProductController::class, 'show']);
Route::post('/productos', [ProductController::class, 'store']);
Route::put('/productos/{id}', [ProductController::class, 'update']);
Route::delete('/productos/{id}', [ProductController::class, 'destroy']);
