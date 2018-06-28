<?php

namespace App\Http\Controllers;
use App\tintuc;
use Illuminate\Http\Request;

class TintucController extends Controller
{ public function danhsach(){
    	$tintuc=tintuc::all();
    	return view('admin.tintuc.listtintuc',['tintuc'=>$tintuc]);
    }
    public function addtintuc(){
    	return view('admin.tintuc.addtintuc');
    }

    public function potsttintuc(Request $request){


    	 $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
        ],[
            'content.required'=>'Không được để trống title',
            'title.required'=>'Không được để trống content'
           
        ]);
    	$tintuc=new tintuc();
    	$tintuc->content=$request->content;
    	$tintuc->title=$request->title;
        //
         if($request->hasFile('image')){
            $file=$request->file('image');
            $anh=$file->getClientOriginalName();
            $image=str_random(4)."_".$anh;
            while (file_exists("image/tintuc/".$image)) {
                 $image=str_random(4)."_".$anh;
            }
            $file->move("image/tintuc",$image);
            $tintuc->image=$image;
            }else{
                $tintuc->image="";
        }

        $tintuc->save();
        return redirect('admin/tintuc/addtintuc')>with('thongbao','Thêm Thành Công');
        // echo $slide;
        }
    public function deletetintuc($id){
    	$tintuc=tintuc::find($id);
    	$tintuc->delete();
    	return redirect('admin/tintuc/danhsach');
    }
    public function edittintuc ($id){
    	$tintuc=tintuc::find($id);
    	return view('admin.tintuc.edittintuc',['tintuc'=>$tintuc] );
    }
    public function postedittintuc($id,Request $request){
		$tintuc=new tintuc();
    	$tintuc->content=$request->content;
    	$tintuc->title=$request->title;
        
         if($request->hasFile('image')){
            $file=$request->file('image');
            $anh=$file->getClientOriginalName();
            $image=str_random(4)."_".$anh;
            while (file_exists("image/tintuc/".$image)) {
                 $image=str_random(4)."_".$anh;
            }
            $file->move("image/tintuc",$image);
            $tintuc->image=$image;
            }else{
                $tintuc->image="";
        }

        $tintuc->save();
    	return redirect('admin/tintuc/edittintuc/'.$id);
	}
}
