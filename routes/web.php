<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
