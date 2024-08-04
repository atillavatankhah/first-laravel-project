<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//create new product route
Route::get('/product',[\App\Http\Controllers\ProductController::class,'create']);
