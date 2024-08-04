<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product',[\App\Http\Controllers\ProductController::class,'index']);
