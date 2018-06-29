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

Route::get('/', 'PagesController@main')->name('main');

Route::get('{page}/{subpage?}', 'PagesController@pages')
    ->where(['page' => '[a-z]+', 'subpage' => '[a-z_]+']);


Route::post('/call', 'FeedbackController@call')->name('call');