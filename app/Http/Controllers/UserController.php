<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class UserController extends Controller
{
    public function photo(Request $request){

        if ($request->hasFile('photo')){
        $photo = $request->file('photo');
            $filename =time().'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->resize(300,300)->save( public_path('/uploads/avatars/').$filename );
            Auth::user()->photo = $filename;
            Auth::user()->save();
            return redirect('/');
        }
        else{return redirect('/user');}



    }
}
