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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

  Route::get('/top', function () {
    return view('roomAll');
  });

  Route::get('/MyPage', function () {
    return view('MyPage');
  });

  Route::get('/follow', function () {
    return view('follow');
  });

  Route::get('/followeds', function () {
    return view('followeds');
  });

  Route::get('/new', function () {
    return view('createNew');
  });

  Route::get('/gurucha', function () {
    return view('gurucha');
  });

  Route::get('/onechat', function () {
    return view('onechat');
  });