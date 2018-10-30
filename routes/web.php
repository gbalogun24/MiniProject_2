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
Route::get('/', 'PagesController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@info')->name('info');
Route::get('/thanks/{firstname}', 'PagesController@thanks')->name('thanks');
Route::get('/about', 'PagesController@about')->name('about');
Auth::routes();
