<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\PostController;
use App\Http\Controllers\Media\BannerController;
use App\Http\Controllers\News\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//DASHBOARD ADMIN
Route::resource('/banner', BannerController::class);

Route::resource('/kategori', KategoriController::class);

Route::resource('/post', PostController::class);
