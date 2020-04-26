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

    //Route::get('/', 'DashboardCtrl@index');
    Route::get('/dashboard', 'DashboardCtrl@index');
    Route::get('/account', 'PagesCtrl@account');
    Route::get('/premises/{premid?}', 'PremisesCtrl@index');
    Route::get('/edit_record', 'PagesCtrl@editRecord');


    Auth::routes();
    Route::get('/', 'HomeController@index')->name('home');
?>