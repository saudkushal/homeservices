<?php

use App\Http\Controllers\frontend\DisplayController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\ReviewsController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\BlogcontentController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\frontend\ImginfoController;
use App\Http\Controllers\frontend\UserloginController;
use App\Http\Controllers\frontend\UsersignupController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/display', [DisplayController::class, 'index'])->name("display")->middleware("customer");
Route::get('/about', [AboutController::class, 'index'])->name("about")->middleware("customer");
Route::get('/services', [ServicesController::class, 'index'])->name("services")->middleware("customer");
Route::get('/imginfo/{id}', [ImginfoController::class, 'index'])->name("imginfo")->middleware("customer");

Route::get('/reviews', [ReviewsController::class, 'index'])->name("reviews")->middleware("customer");
Route::get('/blog', [BlogController::class, 'index'])->name("blog")->middleware("customer");
Route::get('contact', [ContactController::class, 'index'])->name("contact")->middleware("customer");
Route::get('/blogcontent/{id}', [BlogcontentController::class, 'index'])->name("blogcontent")->middleware("customer");
Route::post('reviewstore',[ReviewsController::class, 'store'])->name("reviewstore")->middleware("customer");
Route::get('review/create',[ReviewsController::class, 'create'])->name("review/create")->middleware("customer");
Route::get('/search',[SearchController::class, 'index'])->name("search")->middleware("customer");
Route::get('/userlogin', [UserloginController::class, 'index'])->name("userlogin");
Route::get('userlogin/store', [UserloginController::class, 'store'])->name("userlogin/store");
Route::post("ulogin", [UserloginController::class,"login"])->name("ulogin");
Route::post("ulogout", [UserloginController::class,"logout"])->name("ulogout")->middleware("customer");
Route::get('/usersignup', [UsersignupController::class, 'index'])->name("usersignup");




