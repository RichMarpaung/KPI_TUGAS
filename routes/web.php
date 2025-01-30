<?php

use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\KnowledgeBaseController;
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



Route::resource('knowledge_base', KnowledgeBaseController::class);
Route::post('/store', [ImageUploadController::class,'store'])->name('simpan');
Route::post('/upload-image', [App\Http\Controllers\ImageUploadController::class, 'upload'])->name('upload.image');

