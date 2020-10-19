<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@index');
Route::get('/get', 'WelcomeController@getAll');
Route::get('/get/{code}', 'WelcomeController@get');
Route::get('/viewers', 'WelcomeController@getUsers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store');

// restaurants
Route::get('/getAllRestaurant', 'WelcomeController@getRestaurantInfo');
Route::get('/getRestaurantInfo/{restaurantId}', 'WelcomeController@getRestaurantInfo');