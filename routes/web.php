<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//create new product route
//Route::get('/product',[\App\Http\Controllers\ProductController1::class,'index']);
//Route::post('create',[\App\Http\Controllers\ProductController1::class,'store']);

Route::resource('products', \App\Http\Controllers\ProductController::class);
