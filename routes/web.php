<?php

use Illuminate\Support\Facades\Route;

// Portfolio Domain
Route::domain(config('domains.portfolio'))->group(function () {
    Route::get('/', function () { return view('portfolio.me'); })->name('portfolio.me');
});

// Articles Domain
Route::domain(config('domains.articles'))->group(function () {
    Route::get('/', function () { return view('articles.home'); })->name('articles.home');
    Route::get('/{category}/{slug}', function () { return view('articles.view'); })->name('articles.view');
});

// Fallback route 
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
