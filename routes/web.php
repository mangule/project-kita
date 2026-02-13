<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/berita', function () {
    return view('berita');
});
Route::get('/blog', function () {
    return view('blog');
});




