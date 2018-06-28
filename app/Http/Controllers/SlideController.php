<?php

namespace App\Http\Controllers;
use App\slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function danhsach(){
    	$slide=slide::all();
    	return view('admin.slide.ListSlide',['slide'=>$slide]);
    }
    public function addslide(){
    	return view('admin.slide.AddSlide');
    }
    public function postslide(Request $request){
    	$slide=new slide();
    	$slide->name=$request->name;
    	if($request->hasFile('imageslide')){
            $file=$request->file('imageslide');
            $anh=$file->getClientOriginalName();
            $imageslide=str_random(4)."_".$anh;
           
            $file->move("image/slide",$imageslide);
            $slide->imageslide=$imageslide;
        }
            else{
                $slide->imageslide="";
        }
        $slide->save();
        return redirect('admin/slide/addslide');
        // echo $slide;
    }
    public function deleteslide($id){
    	$slide=slide::find($id);
    	$slide->delete();
    	return redirect('admin/slide/danhsach');
    }
    public function editslide($id){
    	$slide=slide::find($id);
    	return view('admin.slide.editslide',['slide'=>$slide]);
    }
    public function posteditslide($id,Request $request){
    	$slide=slide::find($id);
    	$slide->name=$request->name;
    	if($request->hasFile('imageslide')){
            $file=$request->file('imageslide');
            $anh=$file->getClientOriginalName();
            $imageslide=str_random(4)."_".$anh;
            while (file_exists("image/slide/".$imageslide)) {
                 $imageslide=str_random(4)."_".$anh;
            }
            $file->move("image/slide",$imageslide);
            $slide->imageslide="$imageslide";
        }
        $slide->save();
    	return redirect('admin/slide/editslide/'.$id);
	}

  
  
}
