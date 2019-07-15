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

Route::get('/', 'HomeController@index');

// Route::get('agallery', function () {
//     return view('pages/user/agallery');
// });

Route::get('agallery','UserController@agallery')->name('agallery');

Route::get('apaket','UserController@apaket')->name('apaket');

Route::get('home','AdminController@index')->name('home');


Route::get('gallery','GalleryController@index')->name('gallery');
Route::get('gallery/create', 'GalleryController@create')->name('gallery.create');
Route::get('gallery/edit/{gallery}', 'GalleryController@edit')->name('gallery.edit');
Route::post('gallery/create', 'GalleryController@store')->name('gallery.store');
Route::patch('gallery/edit/{gallery}', 'GalleryController@update')->name('gallery.update');
Route::get('gallery/destroy/{gallery}', 'GalleryController@destroy')->name('gallery.destroy');


Route::get('paket','PaketController@index')->name('paket');
Route::get('paket/create', 'PaketController@create')->name('paket.create');
Route::post('paket/create', 'PaketController@store')->name('paket.store');
Route::get('paket/edit/{paket}', 'PaketController@edit')->name('paket.edit');
Route::patch('paket/edit/{paket}', 'PaketController@update')->name('paket.update');
Route::get('paket/destroy/{paket}', 'PaketController@destroy')->name('paket.destroy');


Route::get('about','AdminController@about')->name('about');
Route::get('pesan','AdminController@pesan')->name('pesan');

Route::get('user','UserController@index');

Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login')->name('get.login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');

