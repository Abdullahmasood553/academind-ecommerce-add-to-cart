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

Route::get('/', 'ProductController@index')->name('product.index');
Route::get('/add_to_cart/{id}', 'ProductController@add_to_cart')->name('add_to_cart');
   



Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('profile', 'UserController@getProfile')->name('user.profile');
        Route::get('/checkout', 'ProductController@getCheckout')->name('checkout');
        Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');
        Route::get('/getCart', 'ProductController@getCart')->name('getCart');
        Route::get('logout', 'UserController@getLogout')->name('user.logout');
    });
});


Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'guest'], function() {


    Route::get('register', 'UserController@getSignUp')->name('user.register');
    Route::post('register', 'UserController@postSignUp');

    Route::get('login', 'UserController@getSignIn')->name('user.login');
    Route::post('login', 'UserController@postSignIn');
    });    
});    
