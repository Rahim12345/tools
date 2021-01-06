<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\loginController;


Route::get('/login',[loginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class,'postLogin'])->name('post.login');
