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

use App\Recipe;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add/Product','ProductController@add');
Route::post('/add/Product','ProductController@store')->name('productStore');

Route::get('/add/categoryprod','ProductController@addCategoryProd');
Route::post('/add/categoryprod','ProductController@storeCategoryProd')->name('categoryProdStore');

Route::get('/recipe','RecipeController@recipe');
Route::get('/add/recipe','RecipeController@add');
Route::post('/add/recipe','RecipeController@store')->name('ricipeStore');

Route::get('/add/categoryRecipe','RecipeController@addCategoryRecipe');
Route::post('/add/categoryRecipe','RecipeController@storeCategoryRecipe')->name('categoryRecipeStore');


Route::get('recipe/{id}','RecipeController@page');

Route::post('/user/update_photo','UserController@photo')->name('userPhoto');//обновление фото профиля

Route::get('/fridge','FrigeController@fridge');

Route::post('/card','ProductController@card')->name('productCard');//отправка из корзины в холодильник

Route::get('/basket','ProductController@basket');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/mobile/{id}',function($id){
    $recipe = Recipe::where('id',$id)
        ->with('chapters')
        ->with('compositions')
        ->first();

    return view('mobile')->with(['recipe'=>$recipe,'products' => $recipe->first()->compositions,'chapters' => $recipe->first()->chapters]);
});
