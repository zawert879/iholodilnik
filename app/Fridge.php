<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fridge extends Model
{
    protected $fillable =['owner','product'];
}
