<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//////////////////////////////////////////////////////////////////////////////////////////////// App routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

//////////////////////////////////////////////////////////////////////////////////////////////// Website routes
Route::get('/', 'WebsiteController@index')->name('home');
Route::get('/faq', 'WebsiteController@faq')->name('faq');
Route::get('/about_us', 'WebsiteController@about_us')->name('about_us');
Route::get('/event', 'WebsiteController@event')->name('event');
Route::get('/contact_us', 'WebsiteController@contact_us')->name('contact_us');

//////////////////////////////////////////////////////////////////////////////////////////////// Auth routes
Auth::routes();

// Back Office Route
Route::prefix('my_space')
  ->middleware('auth')
  ->group(function () {
    Route::get('/', 'PagesController@index');
    Route::get('/profil', 'PagesController@profil');
    Route::get('/profil', 'PagesController@profil');
    Route::get('/user', 'PagesController@user');
    Route::get('/waiting', 'PagesController@waiting');
    Route::get('/title', 'PagesController@title');
    Route::get('/media', 'PagesController@media');
    Route::get('/contributions', 'PagesController@contributions');
    Route::get('/events', 'PagesController@events');
    Route::get('/repetition', 'PagesController@repetition');
    Route::get('/event_type', 'PagesController@event_type');
    Route::get('/actuality', 'PagesController@actuality');
    Route::get('/actuality_cat', 'PagesController@actuality_cat');

    Route::resource('/chorale', 'ChoraleController');
    Route::resource('/tools', 'ToolsController');
    Route::resource('/title', 'TitleController');
  });

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


