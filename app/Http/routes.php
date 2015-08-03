<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix'=>'api', 'middleware' => 'auth.basic'], function () {

    Route::group(['prefix'=>'admin', 'middleware' => 'is_admin' ], function () {

        Route::resource('menus', 'MenuController');

    });
});