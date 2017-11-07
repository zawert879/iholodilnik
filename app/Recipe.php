<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function chapters(){
        return $this->hasMany('App\Chapter','id_recipe');
    }
    public function compositions(){
        return $this->hasManyThrough('App\Composition','App\Product','id_recipe');
    }
}
