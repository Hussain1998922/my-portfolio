<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/index',[HomeController::class,'index'])->name('home');
Route::get('/feature',[HomeController::class,'feature'])->name('feature');
use App\Http\Controllers\PageController;

Route::get('/cv', [HomeController::class, 'cv'])->name('cv');
Route::get('/home', function () {
    return view('home');
});

