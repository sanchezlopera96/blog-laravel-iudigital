<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/message', function () {
    return "Hello, I'm using the laravel framework version 10";
});

Route::get('/message/{name}', function ($name) {
    return "Hello, I'm $name";
});

Route::get('/message-v2/guest/{name?}', function ($name = "Usuario visitante, no identificado") {
    return "Hello, I'm $name";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/categories', CategoryController::class);

Route::resource('/posts', PostController::class);