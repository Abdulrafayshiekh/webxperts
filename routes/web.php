<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::inertia('/home', 'home')->name('home.page');
Route::inertia('/about', 'about')->name('about.page');
