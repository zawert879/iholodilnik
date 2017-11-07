<?php

namespace App\Http\Controllers;

use App\Chapter;
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

    public function addCategoryRecipe(){
        return view('addCategoryRecipe');
    }

    public function storeCategoryRecipe(Request $request){
        $data = $request->all();
        $category = new Category_recipe;
        $category->fill($data);
        $category->save();
        return redirect('/recipe');
    }

    public function store(Request $request){
//        dump($request->all());
        $recipe = new Recipe;
        $recipe->name = $request->name;  /////////////////// название
        if ($request->hasFile('photo')){  ///////////// фото
            $photo = $request->file('photo');
            $filename =time().'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->save( public_path('/uploads/recipes/').$filename );
            $recipe->photo = $filename;}else{
            $recipe->photo = null;
        }
        $lastrecipe = Recipe::count();
        $recipe->category = $request->category; /////////// категория
        $recipe->description =$request->description; ////// описание
        $recipe->save();
//        dump($recipe);
        if ($request->charter_text){
            foreach ($request->charter_text as $item => $value){
//                dump($item);
//                dump($value);
//                dump($request->charter_timer[$item]);

                $chapter = new Chapter;
                if($lastrecipe == 0){
                    $chapter->id_recipe = 1;
                }else{
                    $chapter->id_recipe = $lastrecipe + 1;
                }
                $chapter->text = $request->charter_text[$item];
                    if ($request->hasFile('charter_photo.'.$item)){  ///////////// фото
                        $photo = $request->file('charter_photo.'.$item);
                        $filename =time().'.'.$photo->getClientOriginalExtension();
                        Image::make($photo)->save( public_path('/uploads/recipes/').$filename );
                        $chapter->photo = $filename;
                    }
                    else{
                        $chapter->photo = null;
                    }
//                    $chapter->photo = $request->charter_photo[$item];

                if ($request->chapter_timer){
                    $chapter->timer = $request->charter_timer[$item];
                }
//                dump($chapter);
                $chapter->save();
            }
        }/////////////////////// table => charters //////этапы готовки
        if ($request->item){
            foreach ($request->item as $item => $value){
//                dump($value);
//                dump($request->itemAmount[$item]);
                $composition = new Composition;
                if($lastrecipe == 0){
                    $composition->id_recipe = 1;
                }else{
                    $composition->id_recipe = $lastrecipe + 1;
                }
                $composition->id_product = $request->item[$item];
                $composition->amount= $request->itemAmount[$item];
//                dump($composition);
                $composition->save();
            }
        } ////////////////////////////// table => composition ///ингридинты
        return redirect('/recipe');
    }

    public function page($id){
        $recipe = Recipe::where('id',$id)->first();
        $composition = Composition::where('id_recipe',$id)->get();
        $charters = Chapter::where('id_recipe',$id)->get();

//        dump($recipe);

//        dump($charters);
//        $products = DB::select("select products.name FROM products,compositions,recipes WHERE products.id = compositions.Id_product AND compositions.id_recipe=".$id." AND recipes.id = compositions.id_recipe");
        return view('page')->with(['recipe'=>$recipe,'composition'=>$composition,'charters'=>$charters]);
    }
}