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


/****************Characters Route*******************/

Route::get('/character/{id}', 'CharactersController@getCharacterById')->where('id', '[0-9]+');

Route::get('/characters/{id}', 'CharactersController@getAllCharacters')->where('id', '[0-9]+');

Route::get('/previouspaginate/{paginate}', 'CharactersController@getPreviousCharactersPaginate')->where('paginate', '[0-9]+');

Route::get('/nextpaginate/{paginate}', 'CharactersController@getNextCharactersPaginate')->where('paginate', '[0-9]+');

/****************Planets Route*********************/




/****************Starships Route*********************/
