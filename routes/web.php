<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama (Home)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Menu 1: About
Route::get('/about', [MenuController::class, 'about'])->name('about');

// Menu 2: Profile (dengan parameter optional)
Route::get('/profile/{name?}', [MenuController::class, 'profile'])->name('profile');

// Menu 3: Services
Route::view('/services', 'services', ['title' => 'Layanan Kami'])->name('services');

// Menu 4: Contact
Route::get('/contact', [MenuController::class, 'contactForm'])->name('contact.form');
Route::post('/contact', [MenuController::class, 'submitContact'])->name('contact.submit');

// Menu 5: Admin Group
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [MenuController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/settings', [MenuController::class, 'settings'])->name('admin.settings');
});

// Redirect contoh
Route::redirect('/contact-us', '/contact')->name('contact.redirect');