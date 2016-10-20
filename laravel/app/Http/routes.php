<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::any('/','HomeController@index');
// Route::any('inserts','HomeController@inserts');
// Route::any('show','HomeController@show');


Route::any('/','HomeController@chufa');
Route::any('chufa1','HomeController@chufa1');
Route::any('chufa/del','HomeController@chufadel');
Route::any('chufa/upd','HomeController@chufaupd');
Route::any('chufa/upd1','HomeController@chufaupd1');

