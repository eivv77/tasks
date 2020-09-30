<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('tags.index');
//});


Route::post("/tags",[\App\Http\Controllers\TagController::class,"store"]);
Route::get("/tags",[\App\Http\Controllers\TagController::class,"index"]);
Route::post('/tags/update/{id}', [\App\Http\Controllers\TagController::class,"update"]);
Route::post('/tags/destroy/{id}', [\App\Http\Controllers\TagController::class,"destroy"]);
Route::post('/tags/{id}', [\App\Http\Controllers\TagController::class,"show"]);

Route::post('/categories', [\App\Http\Controllers\CategoriesController::class,"store"]);
Route::get("/categories",[\App\Http\Controllers\CategoriesController::class,"index"]);
Route::post('/categories/update/{id}', [\App\Http\Controllers\CategoriesController::class,"update"]);
Route::post('/categories/destroy/{id}', [\App\Http\Controllers\CategoriesController::class,"destroy"]);





