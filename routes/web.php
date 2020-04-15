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
    return view('top');
});


Route::group(['prefix' => 'member'], function() {
    Route::get('bosyu/create', 'Member\BosyuController@add')->middleware('auth');
    Route::post('bosyu/create', 'Member\BosyuController@create')->middleware('auth');
    Route::get('bosyu/edit', 'Member\BosyuController@edit')->middleware('auth');
    Route::post('bosyu/edit', 'Member\BosyuController@update')->middleware('auth');
    Route::get('bosyu/index', 'Member\BosyuController@index');
    Route::get('bosyu/delete', 'Member\BosyuController@delete')->middleware('auth');
    Route::get('/content/{id}', 'Member\BosyuController@content')->middleware('auth');

    
});

Route::group(['prefix' => 'member'], function() {
    Route::get('capture/create', 'Member\CaptureController@add')->middleware('auth');
    Route::post('capture/create', 'Member\CaptureController@create')->middleware('auth');
    Route::get('capture/edit','Member\CaptureController@edit')->middleware('auth');
    Route::post('capture/edit', 'Member\CaptureController@update');
    Route::get('capture', 'Member\CaptureController@index')->middleware('auth');
    Route::get('capture/delete', 'Member\CaptureController@delete')->middleware('auth');
    Route::get('/page/{id}', 'Member\CaptureController@show')->middleware('auth');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'BosyuController@index');

Route::resource('comments', 'CommentsController')->middleware('auth');
