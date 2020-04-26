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

    Route::get('/', 'PagesCtrl@index');
    Route::get('/dashboard', 'PagesCtrl@dashboard', 'DashboardCtrl');
    Route::get('/account', 'PagesCtrl@account');
    Route::get('/premises', 'PagesCtrl@premises');
    Route::get('/edit_record', 'PagesCtrl@editRecord');

?>