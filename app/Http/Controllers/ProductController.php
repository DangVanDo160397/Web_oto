<?php
namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function danhsach(){
    	$product =product::all();
    	return view('admin.product.ListProduct',['product'=>$product]);
    }
    
    public function addproduct(){
    	return view('admin.product.AddProduct');
    }
    public function postproduct(Request $request){
        $this->validate($request,[
            'Nameproduct'=>'required|unique:product,Nameproduct|min:3|max:100'
        ],[
            'Nameproduct.required'=>'Không được để trống Name Product',
            'Nameproduct.unique'=>'Trùng rồi',
            'Nameproduct.min'=>'Tối thiểu 3 kí tự',
            'Nameproduct.max'=>'Tối đa 100 kí tự'
        ]);
    	$product=new product();
		$product->nameproduct=$request->Nameproduct;
		$product->fk_category_id=$request->fk_category_id;
    	$product->save();
    	return redirect('admin/product/addproduct')->with('thongbao','Thêm Thành Công');
    }
    public function deleteproduct($id){
    	$product=product::find($id);
    	$product->delete();
    	return redirect('admin/product/danhsach');
    }
    public function editproduct($id){
    	$product=product::find($id);
    	return view('admin.product.EditProduct',['product'=>$product]);
    }
    public function posteditproduct($id,Request $request){
    	$product=product::find($id);
        $this->validate($request,[
                 'nameproduct'=>'required|unique:product,nameproduct|min:3|max:100'
            ],[
                'nameproduct.required'=>'Bạn chưa  nhập tên nameproduct, Không được để trống :D',
                'nameproduct.unique'=>'Đã tồn tại category ',
                'nameproduct.min'=>'Tối thiểu Category phải có 3 kí tự',
                'nameproduct.max'=>'Tối đa Category phải có 100 kí tự',
            ]);
    	$product->nameproduct=$request->nameproduct;
    	$product->fk_category_id=$request->fk_category_id;
    	$product->save();
    	return redirect('admin/product/editproduct/'.$id)->with('thongbao','Thêm Thành Công');
    }
}
