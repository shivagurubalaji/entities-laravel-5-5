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

Route::any('/{entity}/{lang}', ['uses' => 'PageLoadController@home'])->name('fpmarkets.sc.home');

Route::get('/breadcrumb', 'SimpleFunctionsController@create_breadcrumbs');

Route::get('/test', 'PageLoadController@test');
