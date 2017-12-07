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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);


    Route::group(['middleware' => 'guest'], function () {
        Route::get('/user/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup' 
        ]);
        
        Route::post('/user/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup' 
        
        ]);
        
        Route::get('/user/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);
        
        Route::post('/user/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
            
        ]);
        
    });

    Route::group(['middleware' => 'auth' ], function (){
        Route:: get('/user/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);
        
        Route:: get('/user/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });


