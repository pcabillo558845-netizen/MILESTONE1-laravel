<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('e-resources', \App\Http\Controllers\EResourceController::class);

