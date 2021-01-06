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
Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

//Showing user page
Route::get('/user/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('user');
//Advertising
Route::get('/ps', [App\Http\Controllers\AdvertController::class, 'playstation'])->name('adverts.ps');
Route::get('/xbox', [App\Http\Controllers\AdvertController::class, 'xbox'])->name('adverts.xbox');
Route::get('/nintendo', [App\Http\Controllers\AdvertController::class, 'nintendo'])->name('adverts.nintendo');

Route::get('/adverts/', [App\Http\Controllers\AdvertController::class, 'index'])->name('adverts.index');
Route::get('/adverts/create', [App\Http\Controllers\AdvertController::class, 'create'])->name('advert.create')->middleware('auth');
Route::post('/adverts/create', [App\Http\Controllers\AdvertController::class, 'store'])->name('advert.create')->middleware('auth');
Route::get('/adverts/{advert}', [App\Http\Controllers\AdvertController::class, 'show'])->name('advert.show');
Route::get('/adverts/edit/{advert}', [App\Http\Controllers\AdvertController::class, 'edit'])->name('advert.edit')->middleware('auth');
Route::patch('/adverts/edit/{id}', [App\Http\Controllers\AdvertController::class, 'update'])->name('advert.edit')->middleware('auth');
Route::delete('/adverts/{id}', [App\Http\Controllers\AdvertController::class, 'destroy'])->name('advert.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chats', [App\Http\Controllers\ContactsController::class, 'index'])->name('chats');;
Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'get']);
Route::get('/conversations/{id}', [App\Http\Controllers\ContactsController::class, 'getMessagesFor']);
Route::post('/conversations/send', [App\Http\Controllers\ContactsController::class, 'send']);

