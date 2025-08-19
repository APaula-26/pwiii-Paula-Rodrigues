<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paulinha', function () {
    return view('teste');
});

Route::get('/Ministeriodasaude', function () {
    return view('CarretadoCaps');
});

Route::get('/AgostoLilas', function () {
    return view('ProtejaJa');
});