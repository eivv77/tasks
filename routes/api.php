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
Route::put('/tags/{id}', [\App\Http\Controllers\TagController::class,"update"]);
Route::delete('/tags/{id}', [\App\Http\Controllers\TagController::class,"destroy"]);
Route::get('/tags/{id}', [\App\Http\Controllers\TagController::class,"show"]);

Route::post('/categories', [\App\Http\Controllers\CategoriesController::class,"store"]);
Route::get("/categories",[\App\Http\Controllers\CategoriesController::class,"index"]);
Route::put('/categories/{id}', [\App\Http\Controllers\CategoriesController::class,"update"]);
Route::delete('/categories/{id}', [\App\Http\Controllers\CategoriesController::class,"destroy"]);
Route::get('/categories/{id}', [\App\Http\Controllers\CategoriesController::class,"show"]);






