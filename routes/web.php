<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::view('/', 'home');
// Ctl+Shift+f gives a search input to find any file in the project
