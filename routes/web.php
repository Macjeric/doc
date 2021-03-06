<?php

use Illuminate\Support\Facades\Redis;
// use App\Http\Controllers\DownloadsController;
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

Route::get('one', function () {
    return redirect('https://test.pagesmade.com');
});

// Route::get('/kitchen/graduation', function () {
//     $tickets = Redis::get("orders/ticket");

//     return view('/kitchen/graduation')->withTickets($tickets);

// });


// Route::get('/orders/ticket', function () {
//     Redis::incr("orders/ticket");

//     return back();

// });
// Route::get('/themes/uni/mu',  function () {

//     $downloads = Redis::get("themes/download/{id}") ; 


//     return view('themes/uni/mu')->withDownloads($downloads);
// });
Route::get('kitchen', 'KitchensController@index');
Route::get('kitchen/birthday', 'KitchensController@create');
Route::get('kitchen/graduation', 'KitchensController@graduation');
Route::get('kitchen/wedding', 'KitchensController@wedding');
Route::post('kitchen/graduation', 'KitchensController@store');

// Route::resource('kitchen', 'KitchensController@store');








Route::get('resource/uni/mu/ict/paper', 'SampleController@two' );
Route::get('sports/new/index', 'SampleController@snew' );
Route::get('sports/new/manutd', 'SampleController@manutd' );
Route::get('sports/new/epl', 'SampleController@epl' );






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

// 2019
Route::get('themes/download/17', 'DownloadsController@mu17');
Route::get('themes/download/18', 'DownloadsController@mu18');
Route::get('themes/download/19', 'DownloadsController@mu19');
Route::get('themes/download/20', 'DownloadsController@mu20');

Route::get('themes/download/21', 'DownloadsController@iaa21');
Route::get('themes/download/22', 'DownloadsController@iaa22');
Route::get('themes/download/23', 'DownloadsController@iaa23');
Route::get('themes/download/24', 'DownloadsController@iaa24');







Route::post('themes', 'ThemesController@store');
// Route::resource('themes/download', 'DownloadsController@store');
// Route::get('themes/download', 'SampleController@index');
// Route::get('download', 'DownloadsController@index');
Route::get('themes/download?_token=54i5TQfW4pfT8FiYi5V5FfBFmYN7GVEuE9fOACDw&theme-type=CP-only&university=MU&msoffice=w2016', 'SampleController@four');





Route::post('/documents', function () {

    request()->file('document')->store('documents');

    return back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
