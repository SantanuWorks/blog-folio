<?php

use Illuminate\Support\Facades\Route;

Route::domain(config('domains.admin'))
    ->middleware(['web'])
    ->group(function () {
        Route::get('{any}', function () {
            return view('admin.app');
        })->where('any', '.*');
    });
