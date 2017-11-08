<?php

namespace App\Http\Controllers;
use App\Category_prod;
use App\Fridge;
use App\Product;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;
use Psy\Util\Json;


class ProductController extends Controller
{
    public function add(){
        $category = Category_prod::all();
        return  view('addProduct')->with(['category_prods'=>$category]);
    }
    public function basket(){
//        $products = DB::table('products')
//            ->join('category_prods', 'products.id_categoty_prod', 'category_prods.id')
//            ->select('products.id', 'products.name', 'products.photo', 'category_prods.name')
//            ->get();
//        dd($products);
        $products = DB::select("SELECT products.id AS product_id,products.name,products.photo,category_prods.name AS category_name FROM products,category_prods WHERE products.id_category_prod=category_prods.id");
//        dump($products);
        return view(         'basket')->with(['products'=>$products]);
    }

    public function store(Request $request){


        if ($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename =time().'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->save( public_path('/uploads/products/').$filename );
        }else{
            $filename = null;
        }
        $data = $request->all();
        $products = new Product;
        $products->fill($data);
        $products->photo = $filename;
//        dump($products);
        $products->save();
        return redirect('/basket');
    }
    public function card(Request $request)
    {
//        dd($request);
        $qq = Product::select(['id'])->get();
        foreach ($qq as $item) {
            $buff = $item->id;
            if ($request->get("$buff")){
                $fridge = new Fridge;
                $fridge->owner = Auth::user()->id;
                $fridge->product= $buff;
                $fridge-> save();
            }
        }
        return redirect('/fridge');
    }

    public function addCategoryProd(){

        return  view('addCategoryProd');

    }

    public function storeCategoryProd(Request $request){
        $data = $request->all();
        $category = new Category_prod;
        $category->fill($data);
        $category->save();
        return redirect('/basket');
    }
}