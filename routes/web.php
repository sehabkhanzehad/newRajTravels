<?php

use App\Http\Controllers\dashboard\AuthController;
use App\Http\Controllers\dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

// Auth Routes Pages
Route::get("/sign-in", [AuthController::class, "showSignInPage"])->name("auth.signin-page");

// Auth Routes API
Route::post("/sigdn-in", [AuthController::class, "signIn"])->name("auth.signin");
Route::get("/sign-out", [AuthController::class, "signOut"])->name("auth.signout");



Route::get("/dashboard", [DashboardController::class, "showDashboardPage"])->name("dashboard");







Route::get('/', function () {
    return view('dashboard.pages.index');
})->name("dashboard.home");





Route::get("/dashboard/website", function(){
    return view("dashboard.website.pages.index");
})->name("website.home");
