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
    return redirect('/ae-en');
});

Route::any('/{lang}', ['uses' => 'PageLoadController@home'])->name('fpmarkets.sc.home');
Route::any('/{lang}/{page_uri}', 'PageLoadController@initiate')->where('page_uri', '(.*)');

Route::get('/{page_uri}', 'PageLoadController@decide');

/* Test */

Route::get('/breadcrumb', 'SimpleFunctionsController@create_breadcrumbs');

Route::get('/test', 'PageLoadController@test');