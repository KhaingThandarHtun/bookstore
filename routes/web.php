<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
     return view('home');
});

Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
Route::resource('categories', CategoryController::class);
Route::resource('articles', ArticleController::class);

Route::get('/users/create',[UserController::class,'create']);
Route::post('/users/create',[UserController::class,'store']);