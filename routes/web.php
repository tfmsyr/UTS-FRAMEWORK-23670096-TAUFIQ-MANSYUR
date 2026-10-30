<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

Route::get('/', [LandingController::class, 'index'])->name('landing.home');
Route::get('/activities', [LandingController::class, 'activities'])->name('landing.activities');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/blog', [LandingController::class, 'blog'])->name('landing.blog');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');
Route::get('/testimonial', [LandingController::class, 'testimonial'])->name('landing.testimonial');

Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::view('/calendar', 'admin.calendar')->name('calendar');
    Route::view('/forms', 'admin.forms.elements')->name('forms');
    Route::view('/tables', 'admin.tables.datatables')->name('tables');
    Route::view('/sweetalerts', 'admin.ui.sweetalerts')->name('sweetalerts');
    Route::view('/login', 'admin.pages.login')->name('login');
});