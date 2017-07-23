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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',
    ['as' => 'index', 'uses' => 'HomeController@getIndex']);
Route::post('/',
    ['as' => 'sendForm', 'uses' => 'HomeController@postIndex']);


Route::get('movies', function () {
    return view('form');
});
Auth::routes();

Route::get('/home', 'HomeController@getIndex');
