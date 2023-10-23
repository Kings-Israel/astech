<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/careers', function () {
    return view('career');
})->name('careers');

Route::get('/developer-hub', function () {
    return view('developer-hub');
})->name('developer-hub');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
