<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('categories',[CategoryController::class,'apiIndex']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{category}',[CategoryController::class,'update']);
Route::get('categories/{category}',[CategoryController::class,'show']);
Route::delete('categories/{category}',[CategoryController::class,'destroy']);

Route::apiResource('products',ProductController::class);
Route::get('products/{product}',[ProductController::class,'show']);
