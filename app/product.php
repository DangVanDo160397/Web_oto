<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     protected $table="product";

  	public function category(){
    	return $this->belongsTo('App\category','fk_category_id','id');
    }
    public function details(){
    	return $this->hasMany('App\Detail', 'fk_product','id');
    }

}
