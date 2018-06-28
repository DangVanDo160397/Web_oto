<?php 
	namespace App\Http\ViewComposers;
	use Illuminate\View\View;
	use App\category;


	class Menuleft{

		 public function compose (View $view){
		 	$category=category::all();
		 	$view->with('category',$category);
		 }
	}

 ?>