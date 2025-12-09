<?php

use Illuminate\Support\Facades\Route;

// Articles routes
Route::get('/articles', function () { return view('articles.home'); })->name('articles.home');
Route::get('/articles/all', function () { return view('articles.index'); })->name('articles.index');
Route::get('/articles/composer', function () { return view('articles.composer'); })->name('articles.composer');
Route::get('/articles/{slug}', function () { return view('articles.view'); })->name('articles.view');

// Portfolio routes
Route::get('/', function () { return view('portfolio.me'); })->name('portfolio.me');

// Fallback route 
Route::fallback(function () { return response()->view('errors.404', [], 404); });
