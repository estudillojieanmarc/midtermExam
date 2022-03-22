<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home',[HomeController::class,'index']);
 
Route::get('/post',[PostController::class,'index']);

Route::get('/about',[AboutController::class,'index']);

Route::get('/contact',[ContactController::class,'index']);
