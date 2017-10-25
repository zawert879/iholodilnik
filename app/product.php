<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
protected $fillable = ['name','id_categoty_prod','photo'];
}
