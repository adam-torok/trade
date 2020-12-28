<?php

use Illuminate\Support\Facades\Route;

// Landing page and footer links
Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('home');
Route::get('/impresszum', [App\Http\Controllers\LandingController::class, 'impressum'])->name('impressum');;
Route::get('/about', [App\Http\Controllers\LandingController::class, 'about'])->name('about');;
Route::get('/advertising', [App\Http\Controllers\LandingController::class, 'advertising'])->name('advertising');;
Route::get('/sitemap', [App\Http\Controllers\LandingController::class, 'sitemap'])->name('sitemap');;
Route::get('/partners', [App\Http\Controllers\LandingController::class, 'partners'])->name('partners');;
Route::get('/faq', [App\Http\Controllers\LandingController::class, 'faq'])->name('faq');;
Route::get('/help', [App\Http\Controllers\LandingController::class, 'help'])->name('help');;

//Profile page

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'updateProfilePicture'])->name('updateProfilePicture');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
