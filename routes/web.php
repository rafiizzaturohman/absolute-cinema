<?php

// use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/', function () {
    return view('bioskop.menu');
})
    ->name('bioskopMenu');

Route::get('/article1', function () {
    return view('articles.article1');
})
    ->name('article1');

Route::get('/article2', function () {
    return view('articles.article2');
})
    ->name('article2');
    
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
    