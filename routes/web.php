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
    return view('pages.home');
})->name('home');

Route::get('/about', function() {
    return view('pages.about-me');
})->name('about');

Route::get('/skills', function() {
    return view('pages.skills');
})->name('skill');

Route::get('/contact-me', function() {
    return view('pages.contact-me');
})->name('contact-me');


// Contacts Routes
Route::resource('/contacts', 'ContactController');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/admin/blogs-create', 'BlogController@create')->name('blog-create');
