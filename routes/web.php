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
    return view('welcome');
});
Route::get('/addProduct','productController@add');
Route::post('/addProduct','productController@store')->name('productStore');

Route::get('/addRecipe','productController@addRecipe');
Route::post('/addRecipe','productController@storeRecipe')->name('recipeStore');


Route::post('/user/update_photo','UserController@photo')->name('userPhoto');//обновление фото профиля

Route::get('/fridge','frigeController@fridge');

Route::post('/card','productController@card')->name('productCard');//отправка из корзины в холодильник

Route::get('/basket','productController@basket');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
