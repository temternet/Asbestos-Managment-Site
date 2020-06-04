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

    Route::get('/', 'DashboardCtrl@index');
    Route::get('/dashboard', 'DashboardCtrl@index');
    Route::get('/account', 'AccountCtrl@index');
    Route::get('/premises/{premid?}', 'PremisesCtrl@index');
    Route::get('/new_record', 'PremisesCtrl@create');
    Route::get('/edit_record', 'PremisesCtrl@edit');
    Route::get('/record_updated', 'PremisesCtrl@update');
    //Route::get('/new_record', 'Ctrl@create');
    //Route::get('/edit_record', 'Ctrl@update');


    //Auth::routes();
    //Route::get('/', 'HomeController@index')->name('home');
?>