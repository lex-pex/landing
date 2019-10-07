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

Route::group(['prefix' => '/', 'middleware' => ['counter', 'web']], function () {

    Auth::routes();

    Route::get('/', 'IndexController@index');

    Route::post('/feedback', 'MessageController@feedback')->name('feedback');

    Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function () {

        Route::get('/', 'AdminController@panel')->name('panel');
        Route::get('/calendar', 'AdminController@calendar');
        Route::get('/feedback', 'AdminController@feedback');
        Route::get('/feedback/read/{id}', 'MessageController@readFeedback');
        Route::post('/feedback/del/{item}', 'MessageController@messageDel')->name('messageDel');

    });

});

