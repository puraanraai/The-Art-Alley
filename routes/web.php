<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class,'users']);

Route::view('login','login');
Route::view('signup','signup');
Route::view('home','home');
Route::view('bootst','bootst');
