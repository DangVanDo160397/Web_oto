<?php

namespace App\Http\Controllers;
use App\detail;
use App\product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function danhsach(){
    	$detail=detail::all();
    	// $product=product::all();
        // dd($product->nameproduct);
    	return view('admin.detail.Listdetail',['detail'=>$detail]);
    }
    public function adddetail(){
    	$product=product::all();
    	return view('admin.detail.Adddetail',['product'=>$product]);

    }
    public function postadddetail(Request $request){
       
        $this->validate($request,[
            'name'=>'required|min:3|max:100',
            'title'=>'required|min:3|max:1000',
            'decription'=>'required|min:3|max:1000',
            'content'=>'required|min:3|max:100000',
            
        ],[
            'name.required'=>'Không được để trống Name Detail',
            'name.min'=>'Tối thiểu 3 kí tự',
            'name.max'=>'Tối đa 100 kí tự',
             'title.required'=>'Không được để trống Title Detail',
            'title.min'=>'Tối thiểu 3 kí tự',
            'title.max'=>'Tối đa 1000 kí tự',
             'decription.required'=>'Không được để trống decription Detail',
            'decription.min'=>'Tối thiểu 3 kí tự',
            'decription.max'=>'Tối đa 1000 kí tự',
              'content.required'=>'Không được để trống content Detail',
            'content.min'=>'Tối thiểu 3 kí tự',
            'content.max'=>'Tối đa 1000 kí tự'
        ]);
    	$detail= new detail();
    	$detail->fk_product=$request->fk_product;
    	$detail->name=$request->name;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $anh=$file->getClientOriginalName();
            $image=str_random(4)."_".$anh;
            while (file_exists("image/detail/".$image)) {
                 $image=str_random(4)."_".$anh;
            }
            $file->move("image/detail",$image);
            $detail->image=$image;
            }else{
                $detai->image="";
        }
    	$detail->title=$request->title;
    	$detail->decription=$request->decription;
    	$detail->content=$request->content;
        $detail->view=$request->view;
    	$detail->masp=$request->masp;
    	$detail->save();

    	return redirect('admin/detail/adddetail')->with('thongbao','Thêm Thành Công');
    	
    }

  
    public function deletedetail($id){
        $detail=detail::find($id);
        $detail->delete();
        return redirect('admin/detail/danhsach');
    }
    public function editdetail($id){
        $detail=detail::find($id);
        return view('admin.detail.editdetail',['detail'=>$detail]);
       
    }
    public function postdetail($id,Request $request){
        $detail=detail::find($id);
          $this->validate($request,[
            'namea'=>'required|min:3|max:100',
            'title'=>'required|min:3|max:1000',
            'decription'=>'required|min:3|max:1000',
            'content'=>'required|min:3|max:100000',
            
        ],[
            'namea.required'=>'Không được để trống Name ',
            'namea.min'=>'Tối thiểu 3 kí tự',
            'namea.max'=>'Tối đa 100 kí tự',
             'title.required'=>'Không được để trống Title Detail',
            'title.min'=>'Tối thiểu 3 kí tự',
            'title.max'=>'Tối đa 1000 kí tự',
             'decription.required'=>'Không được để trống decription Detail',
            'decription.min'=>'Tối thiểu 3 kí tự',
            'decription.max'=>'Tối đa 1000 kí tự',
              'content.required'=>'Không được để trống content Detail',
            'content.min'=>'Tối thiểu 3 kí tự',
            'content.max'=>'Tối đa 1000 kí tự'
        ]);
        $detail->fk_product=$request->fk_product;
        $detail->name=$request->namea;
        
           if($request->hasFile('image')){
            $file=$request->file('image');
            $anh=$file->getClientOriginalName();
            $image=str_random(4)."_".$anh;
            while (file_exists("image/detail/".$image)) {
                 $image=str_random(4)."_".$anh;
            }
            $file->move("image/detail",$image);
            $detail->image=$image;
           }
        $detail->title=$request->title;
        $detail->decription=$request->decription;
        $detail->content=$request->content;
        $detail->view=$request->view;
        $detail->masp=$request->masp;
        $detail->save();
        return redirect('admin/detail/editdetail/'.$id)->with('thongbao','Sửa Thành Công');
        // echo $detail;
        
    }

}
