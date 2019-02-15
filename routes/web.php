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

//rotta di test
//arg1: url della rotta
//arg2: 'NomeController@funzioneDaRichiamareInQuelController'
//->name: assegna un nome alla rotta da cui potrà essere puntata nelle views
Route::get('/today', 'TodayController@laDataDiOggi')->name('rottaOggi');
