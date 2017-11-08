<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function chapters(){
        return $this->hasMany('App\Chapter','id_recipe');
    }

    public function compositions(){
        return $this->belongsToMany('App\Product','compositions','id_recipe','id_product');
    }
}
