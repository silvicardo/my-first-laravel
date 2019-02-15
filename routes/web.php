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
Route::get('/today', function () {

  //Passaggio var con compact

  $adesso = date("Y-m-d H:i:s");

  return view('oggi', compact('adesso'));
});
