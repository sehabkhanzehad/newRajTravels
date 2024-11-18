<?php

use App\Http\Controllers\dashboard\AuthController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\website\PackageController;
use App\Http\Controllers\dashboard\website\WebsiteController;
use App\Http\Controllers\homepage\HomepageController;
use App\Http\Controllers\homepage\LanguageController;
use Illuminate\Support\Facades\Route;

// Language Switcher
Route::get('/lang/{locale}', [LanguageController::class, 'switchLanguage'])->name('lang.switch');

// Homepage Routes
Route::group(['as' => 'homepage.'], function () {
    Route::get("/", [HomepageController::class, "index"])->name("index");
    Route::post("/search", action: [HomepageController::class, "search"])->name("search");


    Route::get('/package/{slug}', [HomepageController::class, 'showPackage'])->name('package.show');
});

// Auth Routes
Route::group(['as' => 'auth.'], function () {
    // Auth Routes Pages
    Route::get("/sign-in", [AuthController::class, "showSignInPage"])->name("signin-page");

    // Auth Routes API
    Route::post("/sign-in", [AuthController::class, "signIn"])->name("signin");
    Route::get("/sign-out", [AuthController::class, "signOut"])->name("signout");
});

// Dashboard Routes
Route::middleware('AuthCheck')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboardPage'])->name('home');

    Route::group(['prefix' => 'website', 'as' => 'website.'], function () {
        Route::get("/", [WebsiteController::class, "showWebsitePage"])->name("home");


        Route::get('/packages', [PackageController::class, 'showPackagesPage'])->name('packages');
        // create package
        Route::get('/packages-create', [PackageController::class, 'createPackage'])->name('packages.create');
        Route::post('/packages', [PackageController::class, 'storePackage'])->name('packages.store');
        Route::get('/package-list', [PackageController::class, 'getPackages'])->name( 'packages.list');
        Route::get('/packages/{id}', [PackageController::class, 'singlePackage'])->name('packages.single');
        Route::get('/packages/{slug}', [PackageController::class, 'showPackage'])->name('packages.show');
        Route::get('/packages/{id}/edit', [PackageController::class, 'editPackage'])->name('packages.edit');
        Route::post('/packages/{package}', [PackageController::class, 'updatePackage'])->name('packages.update');
        Route::delete('/packages/{id}', [PackageController::class, 'deletePackage'])->name('packages.delete');

    });
});
