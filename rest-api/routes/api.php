<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('products',[ProductController::class,'index']);
Route::post('products',[ProductController::class,'store']);
Route::get('products/{id}',[ProductController::class,'show']);
Route::get('products/{id}/edit',[ProductController::class,'edit']);
Route::put('products/{id}/edit',[ProductController::class,'update']);
Route::delete('products/{id}/delete',[ProductController::class,'destroy']);

Route::get('categories',[CategoryController::class,'index']);
Route::post('categories',[CategoryController::class,'store']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::get('categories/{id}/edit',[CategoryController::class,'edit']);
Route::put('categories/{id}/edit',[CategoryController::class,'update']);
Route::delete('categories/{id}/delete',[CategoryController::class,'destroy']);

