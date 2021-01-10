<?php
use Illuminate\Support\Facades\Route;

Route::get('education', [educationController::class,'education'])->name('admin.education');