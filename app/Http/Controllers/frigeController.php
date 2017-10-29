<?php

namespace App\Http\Controllers;

use App\fridge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class frigeController extends Controller
{
    public function fridge(){
        if (Auth::check()){
            $authUser = Auth::user()->id;

            $fridge = DB::select('SELECT products.name as product_name,category_prods.name AS category_name,products.photo FROM fridges,products,category_prods WHERE fridges.product=products.id AND fridges.owner='.$authUser.' AND products.id_categoty_prod=category_prods.id');
//        dump($fridge);
            return view('fridge')->with(['fridge'=>$fridge]);
        }
        else{
            return view('fridge');
        }

    }
}
