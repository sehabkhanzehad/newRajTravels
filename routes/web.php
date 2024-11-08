<?php

use App\Http\Controllers\dashboard\AuthController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\homepage\HomepageController;
use App\Http\Controllers\homepage\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/lang/{locale}', [LanguageController::class, 'switchLanguage'])->name('lang.switch');




Route::group(['as' => 'homepage.'], function () {
    Route::get("/", [HomepageController::class, "index"] )->name("index");
    Route::post("/search", action: [HomepageController::class, "search"])->name("search");
});





Route::group(['as' => 'auth.'], function () {
    // Auth Routes Pages
    Route::get("/sign-in", [AuthController::class, "showSignInPage"])->name("signin-page");

    // Auth Routes API
    Route::post("/sign-in", [AuthController::class, "signIn"])->name("signin");
    Route::get("/sign-out", [AuthController::class, "signOut"])->name("signout");
});

Route::middleware('AuthCheck')->prefix('dashboard')->name('dashboard.')->group(function () {

    Route::get('/', [DashboardController::class, 'showDashboardPage'])->name('home');

    Route::group(['prefix' => 'website', 'as' => 'website.'], function () {
        Route::get("/", function () {
            return view("dashboard.website.pages.index");
        })->name("home");
    });
});
