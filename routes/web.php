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

//Route::resource('/items', \App\Http\Controllers\ItemController::class, ['only' => ['index', 'show']]);
//Route::resource('/item-infos', \App\Http\Controllers\ItemInfoController::class, ['only' => ['index', 'show']]);
//Route::resource('/item-states', \App\Http\Controllers\ItemStateController::class, ['only' => ['index', 'show']]);
//Route::resource('/item-types', \App\Http\Controllers\ItemTypeController::class, ['only' => ['index', 'show']]);
//Route::resource('/users', \App\Http\Controllers\UserController::class, ['only' => ['index', 'show']]);

Route::get('/items', function () {
    return view('items.index', ['items' => \App\Item::paginate(20)]);
})->name('items.index');
Route::get('/items/{item}', function (\App\Item $item) {
    return view('items.show', ['item' => $item]);
})->name('items.show');

Route::get('/item-infos', function () {
    return view('item-infos.index', ['itemInfos' => \App\ItemInfo::paginate(20)]);
})->name('item-infos.index');
Route::get('/item-infos/{item_info}', function (\App\ItemInfo $itemInfo) {
    return view('item-infos.show', ['itemInfo' => $itemInfo]);
})->name('item-infos.show');

/* no use of listing this stuff
 |Route::get('/item-states', function () {
 |    return view('item-states.index', ['itemStates' => \App\ItemState::paginate(20)]);
 |})->name('item-states.index');
 */
Route::get('/item-states/{item_state}', function (\App\ItemState $itemState) {
    return view('item-states.show', ['itemState' => $itemState]);
})->name('item-states.show');

/* no use of listing this stuff either
 |Route::get('/item-types', function () {
 |    return view('item-types.index', ['itemTypes' => \App\ItemType::paginate(20)]);
 |})->name('item-types.index');
 */
Route::get('/item-types/{item_type}', function (\App\ItemType $itemType) {
    return view('item-types.show', ['itemType' => $itemType]);
})->name('item-types.show');

/* no use of listing this stuff either
 |Route::get('/statuses', function () {
 |    return view('statuses.index', ['statuses' => \App\Statu::paginate(20)]);
 |})->name('statuses.index');
 */
Route::get('/statuses/{status}', function (\App\Status $status) {
    return view('statuses.show', ['status' => $status]);
})->name('statuses.show');

/*
 | Admin
 */

Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('layouts.admin.app');
    })->name('admin');

    Route::resource('/items', ItemController::class, ['as' => 'admin']);
    Route::resource('/item-infos', ItemInfoController::class, ['as' => 'admin']);
    Route::resource('/item-states', ItemStateController::class, ['as' => 'admin']);
    Route::resource('/item-types', ItemTypeController::class, ['as' => 'admin']);
    Route::resource('/users', UserController::class, ['as' => 'admin']);
    Route::resource('/statuses', StatusController::class, ['as' => 'admin']);
});