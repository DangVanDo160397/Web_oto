<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
     protected $table="detail";
      public function product(){
    	return $this->belongsTo('App\product','fk_product','id');
    }
}
