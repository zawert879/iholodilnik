<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/','ApiController@index');

//Route::post('register', 'Auth\RegisterController@register');
//Route::post('login', 'Auth\LoginController@login');

//Route::get('/api/users/{id}',);
//Route::get('/api/users/',);
Route::get('recipes/','ApiController@recipes');
Route::get('recipe/{id}','ApiController@recipe');
Route::get('products/','ApiController@products');
Route::get('product/{id}','ApiController@product');
Route::get('category/prods','ApiController@category_prods');
Route::get('category/prod/{id}','ApiController@category_prod');