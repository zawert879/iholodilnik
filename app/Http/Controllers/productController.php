<?php

namespace App\Http\Controllers;
use App\category_prod;
use App\fridge;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;
use Psy\Util\Json;


class productController extends Controller
{
    public function add(){
        $category = category_prod::all();

        return  view('addProduct')->with(['category_prods'=>$category]);
    }
    public function basket(){
        $products = DB::select("SELECT products.id AS product_id,products.name,products.photo,category_prods.name AS category_name FROM products,category_prods WHERE products.id_categoty_prod=category_prods.id");
//        dump($products);
        return view(    'basket')->with(['products'=>$products]);
    }

    public function store(Request $request){

        $data = $request->all();
        $products = new product;
        $products->fill($data);
        $products->save();

        return redirect('/basket');
    }
    public function card(Request $request)
    {
        $qq = product::select(['id'])->get();
        foreach ($qq as $item) {
            $buff = $item->id;
            if ($request->get("$buff")){
                $fridge = new fridge;
                $fridge->owner = Auth::user()->id;
                $fridge->product= $buff;
                $fridge-> save();
            }
        }
        return redirect('/fridge');
    }

    public function addRecipe(){

        return  view('addRecipe');

    }

    public function storeRecipe(Request $request){
        $data = $request->all();
        $products = new category_prod;
        $products->fill($data);
        $products->save();
        return redirect('/basket');
    }
}