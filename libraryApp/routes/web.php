<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/myBook',[BookController::class, 'index']);

Route::get('/book', 'App\Http\Controllers\BookController@index');


