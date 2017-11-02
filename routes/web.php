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


Route::get('/add/Product','productController@add');
Route::post('/add/Product','productController@store')->name('productStore');

Route::get('/add/categoryprod','productController@addCategoryProd');
Route::post('/add/categoryprod','productController@storeRecipe')->name('categoryProdStore');

Route::get('/recipe','RecipeController@recipe');
Route::get('/add/recipe','RecipeController@add');
Route::post('/add/recipe','RecipeController@store')->name('ricipeStore');



Route::get('recipe/{id}','RecipeController@page');

Route::post('/user/update_photo','UserController@photo')->name('userPhoto');//обновление фото профиля

Route::get('/fridge','frigeController@fridge');

Route::post('/card','productController@card')->name('productCard');//отправка из корзины в холодильник

Route::get('/basket','productController@basket');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
