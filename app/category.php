<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="category";
    public function product(){
    	return $this->hasMany('App\product','fk_category_id','id');
    }

}

