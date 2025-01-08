<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;

Route::get('/', [HomeController::class, 'index']);  // Home page route
Route::get('/about', [AboutController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
