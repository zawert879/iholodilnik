<?php

namespace App\Http\Controllers;

use App\category_prod;
use App\category_recipe;
use App\composition;
use App\recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function recipe(){
       return view('recipe');
    }

    public function add(){
        $category_recipes = category_recipe::all();

        return view('addRecipe')->with(['category_recipes'=>$category_recipes]);
    }
    public function store(Request $request){
//        $composition

    }
}