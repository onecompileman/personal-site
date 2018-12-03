<?php

use App\Blog;
use Illuminate\Http\Request;


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

Route::get('/blogs', function(Request $request) {
    $blogs = Blog::where('title', 'LIKE','%'.$request->get('search').'%')->where('is_published', 1)->orderBy('id', 'desc')->paginate(5);
    return view('pages.blogs', compact(['blogs']));
})->name('blogs');

Route::get('blogs/{id}', function($id) {
    $blog = Blog::findOrFail($id);
    return view('pages.blog', compact('blog'));
})->name('blog');

// Contacts Routes
Route::resource('/contacts', 'ContactController');


Auth::routes();

Route::get('/admin', 'BlogController@index')->name('blogs');

Route::get('/admin/blogs-create', 'BlogController@create')->name('blog-create');

Route::post('/admin/blogs', 'BlogController@store')->name('blog-store');
Route::get('/admin/blogs/{id}', 'BlogController@edit')->name('blog-edit');
Route::put('/admin/blogs/{id}/update', 'BlogController@update')->name('blog-update');
Route::get('/admin/blogs/{id}/delete', 'BlogController@destroy')->name('blog-delete');

Route::get('/admin/projects', 'ProjectController@index')->name('projects');
Route::get('/admin/projects/create', 'ProjectController@create')->name('project-create');
Route::post('/admin/projects', 'ProjectController@store')->name('project-store');

