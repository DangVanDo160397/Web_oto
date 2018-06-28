<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;
class ViewController extends Controller

{
    public function view(){

    	$detail=detail::all();
		// dd($detail);
		return view('admin.view.view',['detail'=>$detail]);
    	
    	
    }
}
