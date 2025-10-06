<?php

use Illuminate\Support\Facades\Route;

// Route group dengan prefix "pages"
Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/program', function () {
        return view('program');
    })->name('program');

    Route::get('/our-team', function () {
        return view('ourteam');
    })->name('ourteam');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});

// Redirect contoh
Route::redirect('/homepage', '/');

// Route parameter contoh
Route::get('/program/{name}', function ($name) {
    return "Kamu membuka program: " . ucfirst($name);
});

// Fallback kalau route tidak ditemukan
Route::fallback(function () {
    return view('404');
});
