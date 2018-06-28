<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function danhsach(){
    	$category=category::all();
	    return view('admin.category.ListCategory',['category'=>$category]);
    }
    //them
    public function addcategory(){
    	return view('admin.category.AddCategory');
    }
    public function postcategory(Request $request){
        $this->validate($request,[
                'Namecategory'=>'required|unique:category,name|min:3|max:100'
            ],[
                'Namecategory.required'=>'Bạn chưa  nhập tên Category, Không được để trống :D',
                'Namecategory.unique'=>'Trùng category',
                'Namecategory.min'=>'Tối thiểu Category phải có 3 kí tự',
                'Namecategory.max'=>'Tối đa Category phải có 100 kí tự',
            ]);
    	$category=new category();
    	$category->name=$request->Namecategory;
    	$category->save();
    	return redirect('admin/category/addcategory')->with('thongbao','Thêm Thành Công');
    }
    //  xoa
    public function deletecategory($id){
    	$category=category::find($id);
    	$category->delete();
    	return redirect('admin/category/danhsach');

    }
    //edit
    public function editcategory($id){
    	$category=category::find($id);
	    return view('admin.category.EditCategory',['category'=>$category]);

    }
    public function posteditcategory($id,Request $request){
    	$category=category::find($id);
        $this->validate($request,[
                 'eidtcategory'=>'required|unique:category,name|min:3|max:100'
            ],[
                'eidtcategory.required'=>'Bạn chưa  nhập tên Category, Không được để trống :D',
                'eidtcategory.unique'=>'Đã tồn tại category ',
                'eidtcategory.min'=>'Tối thiểu Category phải có 3 kí tự',
                'eidtcategory.max'=>'Tối đa Category phải có 100 kí tự',
            ]);
    	$category->name=$request->eidtcategory;
    	$category->save();
    	return redirect('admin/category/editcategory/'.$id)->with('thongbao','Sửa Thành Công');

    }

}
