<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about/team', function () {
    return view('team');
})->name('about-team');

Route::get('/sign-in', function () {
    return view('sign-in');
})->name('sign-in');

Route::post('/sign-in/submit','SigninController@submit')->name('sign-in-form');
Route::post('/sign-up/submit','SIgnupController@submit')->name('sign-up-form');

Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');

Route::get('/art', function () {
    return view('art');
})->name('art');
