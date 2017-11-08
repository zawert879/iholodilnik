<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','id_category_prod'];

    public function product(){
        return $this->belongsTo('Composition');
    }
}
