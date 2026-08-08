<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    return 'Hello Laravel - Client-Server Technologies Week 02';
});