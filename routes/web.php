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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth', 'prefix' => 'profile'], function () {
    Route::get('/', 'ProfileController@show')->name('profile');
});

Route::resource('/item-infos', 'ItemInfoController', ['only' => ['index', 'show']]);

Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('layouts.admin.app');
    })->name('admin');

    Route::resource('/items', 'ItemController', ['as' => 'admin']);
    Route::resource('/item-infos', 'ItemInfoController', ['as' => 'admin']);
    Route::resource('/item-states', 'ItemStateController', ['as' => 'admin']);
    Route::resource('/item-types', 'ItemTypeController', ['as' => 'admin']);
});