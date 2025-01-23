<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/syarat', function () {
    return view('syarat');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/coba', function () {
    return view('panduan');
});

