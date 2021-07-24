<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/", function(){
    return Inertia::render("Home");
})->name("home");
Route::get("login", [AuthController::class, "showLoginForm"])->name("showLoginForm")->middleware("guest");
Route::post("login", [AuthController::class, "authenticate"])->name("login");
Route::post("logout", [AuthController::class, "logout"])->name("logout");


Route::get("register", [UserController::class, "showRegisterForm"])->name("showRegisterForm");
Route::post("register", [UserController::class, "register"])->name("register");
