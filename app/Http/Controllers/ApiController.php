<?php

namespace App\Http\Controllers;

use App\recipe;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        return view('documentApi');
    }

    public function recipes(){
        return recipe::all();
    }

    public function recipe($id){
        return recipe::find($id);
    }

}
