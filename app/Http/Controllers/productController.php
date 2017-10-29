<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class productController extends Controller
{
    public function add(){
        return  view('add');;
    }
    public function basket(){
        $products = DB::select("SELECT products.id AS product_id,name,photo,id_categoty_prod,category_name FROM products,category_prods WHERE products.id_categoty_prod=category_prods.id");
        dump($products);
        return view('basket')->with(['products'=>$products]);
    }

    public function store(Request $request){
        $data = $request->all();
        $products = new product;
        $products->fill($data);


        $products->save();

        return redirect('/basket');
    }
    public function card(Request $request){
        dump($request->all());
    }
}