<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', [MenuController::class, 'about'])->name('about');

Route::get('/profile/{name?}', [MenuController::class, 'profile'])->name('profile');

Route::view('/services', 'services', ['title' => 'Layanan Kami'])->name('services');

Route::get('/contact', [MenuController::class, 'contactForm'])->name('contact.form');
Route::post('/contact', [MenuController::class, 'submitContact'])->name('contact.submit');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [MenuController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/settings', [MenuController::class, 'settings'])->name('admin.settings');
});

Route::redirect('/contact-us', '/contact')->name('contact.redirect');
