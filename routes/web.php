<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); 
});
Route::get('/login', function () {
    return view('login'); 
});
Route::get('/register', function () {
    return view('register'); 
});
Route::get('/materi', function () {
    return view('materi'); 
});
Route::get('/about', function () {
    return view('about'); 
});
Route::get('/assesment', function () {
    return view('assesment'); 
});
Route::get('/voc', function () {
    return view('ass-voc/voc'); 
});
Route::get('/pelayaran', function () {
    return view('ass-pelayaran/pelayaran'); 
});
Route::get('/kolonialisme', function () {
    return view('ass-kolonial/kolonial'); 
});

