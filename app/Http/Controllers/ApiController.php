<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        return view('documentApi');
    }

    public function recipes(){
        return Recipe::all();
    }

    public function recipe($id){
        return Recipe::find($id);
    }

}
