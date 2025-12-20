<?php

use Illuminate\Support\Facades\Route;

// Portfolio Domain
Route::domain(config('domains.portfolio'))->group(function () {
    Route::get('/', function () {
        return view('portfolio.me');
    })->name('portfolio.me');
});

// Articles Domain
Route::domain(config('domains.articles'))->group(function () {
    Route::get('/', function () {
        return view('articles.home');
    })->name('articles.home');
    Route::get('/{slug}', function () {
        return view('articles.view');
    })->name('articles.view');
});

// Admin Domain
Route::domain(config('domains.admin'))->group(function () {
    Route::get('/articles/all', function () {
        return view('articles.index');
    })->name('articles.index');
    Route::get('/articles/composer', function () {
        return view('articles.composer');
    })->name('articles.composer');
});

// Fallback route 
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
