<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('auth.login');
});

Route::get('/registrasi', function() {
    return view('auth.regis');
});

Route::get('/dashboard', function() {
    return view('pages.home');
});
