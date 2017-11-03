<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Image;
use App\Category_prod;
use App\Category_recipe;
use App\Composition;
use App\Product;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function recipe(){
        $recipe = Recipe::all();
       return view('recipe')->with(['recipe'=>$recipe]);
    }

    public function add(){
        $category_recipes = Category_recipe::select(['id','name'])->get();
        $category_prods = Category_prod::select(['id','name'])->get();
        $products=Product::select(['id','name'])->get();
        return view('addRecipe')->with(['category_recipes'=>$category_recipes,'category_prods'=>$category_prods,'products'=>$products]);
    }
    public function store(Request $request){
        $recipe = new Recipe;
        $recipe->name = $request->name;
        if ($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename =time().'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->save( public_path('/uploads/recipes/').$filename );
            $recipe->photo = $filename;}else{
            $recipe->photo = null;
        }

        $lastrecipe = Recipe::count();
        $recipe->category = $request->category;
        $recipe->description =$request->description;
        $recipe->text = $request->text;

        $recipe->save();
        for($i = 1;$i<=$request->amount;$i++){
            $composition = new Composition;
        if($lastrecipe == 0){
            $composition->id_recipe = 1;
        }else{
            $composition->id_recipe = $lastrecipe + 1;
        }
            $composition->id_product = $request->get('item'.$i);
            $composition->amount = $request->get('itemAmount'.$i);
            $composition->save();
        }
        return redirect('/recipe');
    }

    public function page($id){
        $recipe = Recipe::where('id',$id)->first();
        $products = DB::select("select products.name FROM products,compositions,recipes WHERE products.id = compositions.Id_product AND compositions.id_recipe=".$id." AND recipes.id = compositions.id_recipe");
        return view('page')->with(['recipe'=>$recipe,'products'=>$products]);
    }
}