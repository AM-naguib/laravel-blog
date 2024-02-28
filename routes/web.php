<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
Route::get("/",[HomeController::class,"index"])->name("home.index");

Route::get("/posts/search",[PostController::class,"search"])->name("posts.search");
Route::resource("posts", PostController::class);
Route::resource("categories", CategoryController::class);



Route::resource('users', UserController::class);
