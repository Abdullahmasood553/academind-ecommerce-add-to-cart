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

// Route::get('/', function () {
//     return view('shop.index');
// });


Route::get('/', 'ProductController@index')->name('product.index');
Route::get('/add_to_cart/{id}', 'ProductController@add_to_cart')->name('add_to_cart');

Route::get('/getCart', 'ProductController@getCart')->name('getCart');

Route::get('/checkout', 'ProductController@getCheckout')->name('checkout');
Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');

// Auth::routes();


Route::get('register', 'UserController@getSignUp')->name('user.register');
Route::post('register', 'UserController@postSignUp');


Route::get('login', 'UserController@getSignIn')->name('user.login');
Route::post('login', 'UserController@postSignIn');


Route::get('profile', 'UserController@getProfile')->name('user.profile');

Route::get('logout', 'UserController@getLogout')->name('user.logout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/user/profile', 'ProductController@profile')->name('profile');
});