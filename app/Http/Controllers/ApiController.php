<?php

namespace App\Http\Controllers;

use App\Category_prod;
use App\Composition;
use App\Product;
use App\Recipe;
use App\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class ApiController extends Controller
{
    public function index(){
        return view('documentApi');
    }

    public function recipes(){
        $recipe = Recipe::with('chapters')
            ->with('compositions')
            ->get();

        return $recipe;
    }

    public function recipe($id){
        return Recipe::where('id',$id)->with('chapters')
            ->with('compositions')
            ->get();
    }
    public function product($id){
        return Product::find($id);
    }
    public function products(){
        return Product::all();
    }
    public function category_prod($id){
        return Category_prod::find($id);
    }
    public function category_prods(){
        return Category_prod::all();
    }

}
