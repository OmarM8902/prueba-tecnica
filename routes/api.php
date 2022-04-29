<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'Api'], static function () {
    Route::group(['namespace' => 'Auth', 'prefix' => 'auth' ], function () {
        Route::post('auth-login', 'LoginController@login')->name('login');
    });

    Route::group(['middleware' => 'auth:api', 'namespace' => 'User\Controller', 'prefix' => 'user'], function () {
        Route::post('save-user', 'SaveUserController')->name('save-user');
    });

    /*Route::group(['middleware' => 'auth:api', 'namespace' => 'Offer\Controller', 'prefix' => 'user'], function () {
        Route::post('save-user', 'SaveOfferController')->name('save-offer');
    });*/
});

