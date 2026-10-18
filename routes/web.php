<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Student Profile Page
Route::get('/profile', function () {
    return view('profile');
});