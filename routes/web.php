<?php

use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/programs', [WebsiteController::class, 'programs'])->name('programs');
Route::get('/education', [WebsiteController::class, 'education'])->name('education');
Route::get('/songs', [WebsiteController::class, 'songs'])->name('songs');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/leaders', [WebsiteController::class, 'leaders'])->name('leaders');
Route::get('/register', [WebsiteController::class, 'register'])->name('register');
Route::get('/support', [WebsiteController::class, 'support'])->name('support');
Route::get('/privacy', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('/terms', [WebsiteController::class, 'terms'])->name('terms');
