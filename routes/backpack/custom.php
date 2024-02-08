<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\WaterController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ProfileController;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

}); // this should be the absolute last line of this file

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers',
], function () { // custom admin routes
    Route::crud('logo', 'LogoCrudController');
    Route::crud('settings', 'SettingCrudController');
    Route::crud('about', 'AboutCrudController');
    Route::crud('director', 'DirectorCrudController');
    Route::crud('mission', 'MissionCrudController');
    Route::crud('products', 'ProductCrudController');
    Route::crud('water', 'WaterCrudController');

});

Route::group([
    'prefix' => '',
    'middleware' => ['web'],
    'namespace' => 'App\Http\Controllers\Frontend',
], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::get('right', [ProductController::class, 'index'])->name('right');
    Route::get('water', [WaterController::class, 'index'])->name('water');

    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::get('contact', [ContactController::class, 'store'])->name('contact');

});
