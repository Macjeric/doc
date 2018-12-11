<?php

use Illuminate\Support\Facades\Redis;

// use Symfony\Component\Routing\Route;

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
    $like = Redis::get("likes/count");

    return view('welcome')->withLike($like);

});

Route::get('/likes/count', function () {

    Redis::incr("likes/count");

    return back();
});



Route::get('themes', 'ThemesController@index');
Route::get('themes/uni/mu', 'ThemesController@create');
Route::get('themes/uni/sua', 'ThemesController@show');
Route::get('themes/uni/udsm', 'ThemesController@store');
Route::get('themes/uni/iaa', 'ThemesController@edit');
Route::get('themes/uni/ifm', 'ThemesController@update');

// 2013
Route::get('themes/download/1', 'DownloadsController@index');
Route::get('themes/download/2', 'DownloadsController@create');
Route::get('themes/download/3', 'DownloadsController@store');
Route::get('themes/download/4', 'DownloadsController@show');

Route::get('themes/download/5', 'DownloadsController@edit');
Route::get('themes/download/6', 'DownloadsController@update');
Route::get('themes/download/7', 'DownloadsController@destroy');
Route::get('themes/download/8', 'DownloadsController@iaagroupref');

// 2007
Route::get('themes/download/9', 'DownloadsController@muind07');
Route::get('themes/download/10', 'DownloadsController@muindref07');
Route::get('themes/download/11', 'DownloadsController@mugrp07');
Route::get('themes/download/12', 'DownloadsController@mugrpref07');




Route::get('themes/download/13', 'DownloadsController@ind07iaa');
Route::get('themes/download/14', 'DownloadsController@ind07iaaref');
Route::get('themes/download/15', 'DownloadsController@iaagrp');
Route::get('themes/download/16', 'DownloadsController@iaagroupref07');











Route::post('themes', 'ThemesController@store');
// Route::resource('themes/download', 'DownloadsController@store');
// Route::get('themes/download', 'SampleController@index');
// Route::get('download', 'DownloadsController@index');
Route::get('themes/download?_token=54i5TQfW4pfT8FiYi5V5FfBFmYN7GVEuE9fOACDw&theme-type=CP-only&university=MU&msoffice=w2016', 'SampleController@four');





Route::post('/documents', function () {

    request()->file('document')->store('documents');

    return back();
});