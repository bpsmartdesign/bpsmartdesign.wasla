<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// App routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Website routes
Route::get('/', 'WebsiteController@index')->name('home');
Route::get('/faq', 'WebsiteController@faq')->name('faq');
Route::get('/about_us', 'WebsiteController@about_us')->name('about_us');
Route::get('/event', 'WebsiteController@event')->name('event');
Route::get('/contact_us', 'WebsiteController@contact_us')->name('contact_us');

Auth::routes();

// Back Office Route
Route::prefix('my_space')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'PagesController@index');
});

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

