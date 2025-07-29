<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/test', function () {
    return view('test');
});
