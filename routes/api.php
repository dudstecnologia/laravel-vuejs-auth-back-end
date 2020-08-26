<?php

use Illuminate\Support\Facades\Route;

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', 'UserController@user');
    Route::get('logout', 'UserController@logout');
});
