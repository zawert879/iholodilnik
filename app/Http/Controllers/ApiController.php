<?php

namespace App\Http\Controllers;

use App\Composition;
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
        return Recipe::find($id);
    }

}
