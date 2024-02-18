<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [KamusController::class, 'index']);
Route::post('/register', 'KamusController@register');
Route::post('/login', 'KamusController@login');
Route::post('/check-meaning', 'KamusController@checkMeaning');
Route::get('/history', 'KamusController@history');
Route::get('/', function () {
    return view('welcome');
});
