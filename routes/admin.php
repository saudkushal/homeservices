<?php
use App\Http\Controllers\admin\CustThoughtController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ReviewsController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\SlinkController;

Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post("login", [LoginController::class,"login"])->name("authlogin");
Route::post("logout", [LoginController::class,"logout"])->name("authlogout")->middleware("admin");
Route::resource('services', ServiceController::class);
Route::resource('custthought', CustThoughtController::class);
Route::resource('review', ReviewsController::class);
Route::resource('blog', BlogController::class);
Route::resource('ccc', ContactController::class);
Route::resource('slink', SlinkController::class);





