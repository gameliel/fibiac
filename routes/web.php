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

Route::get('/', 'PagesController@index')->name('home');
Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('faq', 'PagesController@faq')->name('faq');
Route::get('listing', 'PagesController@listing')->name('listing');
Route::get('pricing', 'PagesController@pricing')->name('pricing');
Route::post('contact', 'ContactController@store');

//my listing crud section
Route::resource('listings', 'ListingController');

// authentication route secton
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
