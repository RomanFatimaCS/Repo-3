<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('/stats', function () {return view('components.stats');})->name('stats');
Route::view('/page2', 'page2')->name('page2');
Route::view('/page3', 'page3')->name('page3'); 
Route::view('/page4', 'page4')->name('page4');
Route::view('/page5', 'page5')->name('page5');