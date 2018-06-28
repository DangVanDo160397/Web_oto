<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\khachhang;
use Mail;
class LienheController extends Controller
{
    var $email;
 	public function danhsach(){

    	$khachhang =khachhang::all();
    	return view('admin.khachhang.khachhang',['khachhang'=>$khachhang]);
    	
    }
    public function getlienhe(){
    	return view('layout.lienhe',['khachhang'=>$khachhang]);
    }
    public function postlienhe(Request $request){
    	$this->validate($request,
    		[
    			'name'=>'required',
    			'email'=>'required',
    			'diachi'=>'required',
    			'sdt'=>'required',
    			'content'=>'required',
    		],[
    			'name.required'=>'Không được để trống Tên',
    			'email.required'=>'Không được để trống Email',
    			'diachi.required'=>'Không được để trống địa chỉ',
    			'sdt.required'=>'Không được để trống nội dung liên hệ'
    		]);

    	$khachhang=new khachhang();
    	$khachhang->name=$request->name;
    	$khachhang->email=$request->email;
    	$khachhang->diachi=$request->diachi;
    	$khachhang->sdt=$request->sdt;
    	$khachhang->content=$request->content;
        $this->email=$request->email;
    	$khachhang->save();	
    	return redirect('lienhe')->with('thongbao','Đăng ký Thành Công ,Cty sẽ liên hệ với bạn sớm nhất ');
    	// echo $khachhang;
        //send
        Mail::send('admin.khachhang.khachhang',array('name'=>$request->name,'email'=>$request->email,'diachi'=>$request->diachi,'sdt'=>$request->sdt,'content'=>$request->content),function($message){
            $message->to('daochinh12021996@gmail.com','Visitor')->subject('ddawng');
        });
    }

    

     public function deletelienhen($id){
        $khachhang=khachhang::find($id);
        $khachhang->delete();
        return redirect('admin/khachhang/khachhang');
    }

}
