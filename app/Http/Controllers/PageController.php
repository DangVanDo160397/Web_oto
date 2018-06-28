<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\category;
use App\slide;
use App\product;
use App\detail;
use App\khachhang;
use App\tintuc;
class PageController extends Controller
{
	function __construct(){
		 $category=category::all();
		 $slide=slide::all();
		 // $product=product::all();
		 // $detail=detail::all();
		 view()->share('category',$category);
		 view()->share('slide',$slide);
		 // view()->share('product',$product);
		 // view()->share('detail',$detail);
	}

	function trangchu(){
		$category1 = category::all();
		
	    return view('page.trangchu', compact('category1'));
	    
	}


	function trangweb($id){
		$category=category::find($id);
		// dd($category);
		return view('layout.content',['category1'=>$category]);
	}


	function chitiet($id){
		// $product=product::where('fk_category_id',$id)->get();
		$detail=detail::where('fk_product', $id)->get();

		$detail[0]->click=$detail[0]->click+1;
		$detail[0]->save();

		return view ('layout.chitiet',['detail'=>$detail[0]]);
	}
	function view(){
		// $detail=detail::where('fk_product', $id)->get();
		$detail=detail::all();
		// dd($detail);
		return view('admin.view.view',['detail'=>$detail]);
	}

	function chitiet2($id){
		$category=category::find($id);
		$product=product::where('fk_category_id',$id)->get();
		return view ('layout.chitiet2',['product'=>$product,'category'=>$category]);
	}


	function lienhe(){
		return view('layout.lienhe');
	}
	
	function tintuc(){
		$tintuc=tintuc::all();

		return view('layout.tintuc',['tintuc'=>$tintuc]);
	}

	function search(Request $request){
		$keysearch= $request->keysearch;
		
		$product=DB::table('product')
		->join('detail','detail.fk_product','=','product.id')
		->select('product.id','nameproduct','decription','view','title')
		->where('nameproduct','like',"%$keysearch%")->orwhere('view','like',"%$keysearch%")->orwhere('title','like',"%$keysearch%")->orwhere('decription' ,'like',"%$keysearch%")->get();
		
		return view('layout.timkiem',['product'=>$product,'keysearch'=>$keysearch]);

		// dd($product);
			// $product=product::where('nameproduct','like',"%keysearch%");
		// $detail=detail::where('decription' ,'like',"%keysearch%")->orwhere('view','like',"%keysearch%")->orwhere('title','like',"%keysearch%");
		}

	
  	
}
