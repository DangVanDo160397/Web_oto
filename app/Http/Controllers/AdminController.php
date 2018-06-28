<?php

namespace App\Http\Controllers;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function danhsach()
    {
    	$admin=admin::all();
    	return view('admin.admin.listadmin',['admin'=>$admin]);
    }
    public function adduser(){
    	return view('admin.admin.adduser');
    }
    public function postuser(Request $request){
    	$this->validate($request,[
    		'name'=>'required|min:3',
    		'email1'=>'required|unique:admin,email',
    		'password'=>'required|min:3|max:30',
    		'passwordagain'=>'required|same:password'
    	],[
    		'name.required'=>'Tên không được để trống',
    		'name.min'=>'Tên ít nhất 3 kí tự',
    		'email1.email'=>'Chưa nhập đúng định dạng mail',
    		'email1.required'=>'Email không được để trống',
    		'email1.unique'=>'Email chưa tồn tại',
    		'password.required'=>'Pass không được để trống',
    		'password.min'=>'Pass ít nhất 3 kí tự',
    		'password.max'=>'Pass không quá 30 kí tự',
    		'passwordagain.required'=>'Chưa nhập lại pass',
    		'passwordagain.same'=>'Pass không trùng'


    	]);

    	$admin=new admin;
    	$admin->name=$request->name;
    	$admin->email=$request->email1;
    	$admin->password=bcrypt($request->password);
    	$admin->level=$request->level;

    	$admin->save();
    	return redirect('admin/admin/adduser')->with('thongbao','Thêm thành công!!!!!');
    
    }
    public function deleteuser($id){
    	$admin=admin::find($id);
    	$admin->delete();
    	return redirect('admin/admin/danhsach');
    }
    public function edituser($id){
    	$admin=admin::find($id);
    	return view('admin.admin.edituser',['admin'=>$admin]);

    }
    public function postedituser($id,Request $request){
    	$admin=admin::find($id);

    	$this->validate($request,[
    		'name'=>'required|min:3',
    		'email1'=>'required|unique:admin,email',
    		'password'=>'required|min:3|max:30',
    		'passwordagain'=>'required|same:password'
    	],[
    		'name.required'=>'Tên không được để trống',
    		'name.min'=>'Tên ít nhất 3 kí tự',
    		'email1.email'=>'Chưa nhập đúng định dạng mail',
    		'email1.required'=>'Email không được để trống',
    		'email1.unique'=>'Email chưa tồn tại',
    		'password.required'=>'Pass không được để trống',
    		'password.min'=>'Pass ít nhất 3 kí tự',
    		'password.max'=>'Pass không quá 30 kí tự',
    		'passwordagain.required'=>'Chưa nhập lại pass',
    		'passwordagain.same'=>'Pass không trùng'


    	]);
    	$admin->name=$request->name;
    	$admin->email=$request->email1;
    	$admin->password=bcrypt($request->password);
    	$admin->level=$request->level;
    	$admin->save();

    	return redirect('admin/admin/edituser/'.$id)->with('thongbao','Sửa thành công');
    	// echo $admin;
    }

}
