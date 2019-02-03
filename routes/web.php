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


Route::get('/character/{id}', 'WarsController@getInfoTest')->where('id', '[0-9]+');

Route::get('/characters/{id}', 'WarsController@getAllCharacters')->where('id', '[0-9]+');

Route::get('/previouspaginate/{paginate}', 'WarsController@getPreviousCharactersPaginate')->where('paginate', '[0-9]+');

Route::get('/nextpaginate/{paginate}', 'WarsController@getNextCharactersPaginate')->where('paginate', '[0-9]+');
