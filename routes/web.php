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



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/lang/{lang}','LanguageController@switchLang');

Route::get('/','FrontController@index');
Route::get('/portfolio', 'FrontController@portfolio')->name('portfolio');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/calcKcal', 'FrontController@calckcal')->name('calcKcal');
Route::get('/order', 'FrontController@order')->name('order');
 Route::get('/productinfo/{id}','FrontController@productinfo');

Route::resource('order','OrderController');
Route::resource('about','AboutUsController');
Route::group(['middleware' => ['auth']], function () {
 Route::get('/admin','AdminHomeController@index');
 Route::get('/contact_edit','AdminHomeController@contact')->name('contact_edit');
 Route::post('/contact_edit','AdminHomeController@store')->name('contact_store');
 
 Route::resource('/carousel','CarouselController');
 Route::resource('/product','ProductController');
});

