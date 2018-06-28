<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('admin/login','UserController@getlogin');
Route::post('admin/login','UserController@postlogin');
Route::get('admin/logout','UserController@logout');

// Routes::controller([
// 	'auth'=>'Auth\AuthController',
// 	'password'=>'Auth\ResetPasswordController',
// 	]);

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	
		Route::get('home',function(){
		return view('admin.layoutadmin.index');
	});

	Route::group(['prefix'=>'category'],function(){
		Route::get('danhsach','CategoryController@danhsach');
		Route::get('addcategory','CategoryController@addcategory');
		Route::post('addcategory','CategoryController@postcategory');
		Route::get('delete/{id}','CategoryController@deletecategory');
		Route::get('editcategory/{id}','CategoryController@editcategory');
		Route::post('editcategory/{id}','CategoryController@posteditcategory');
	});
	Route::group(['prefix'=>'product'],function(){
		Route::get('danhsach','ProductController@danhsach');
		Route::get('addproduct','ProductController@addproduct');
		Route::post('addproduct','ProductController@postproduct');
		Route::get('delete/{id}','ProductController@deleteproduct');
		Route::get('editproduct/{id}','ProductController@editproduct');
		Route::post('editproduct/{id}','ProductController@posteditproduct');
	});
	Route::group(['prefix'=>'detail'],function(){
		Route::get('danhsach','DetailController@danhsach');

		Route::get('adddetail','DetailController@adddetail');
		Route::post('Adddetail','DetailController@postadddetail');

		Route::get('delete/{id}','DetailController@deletedetail');
		Route::get('editdetail/{id}','DetailController@editdetail');
		Route::post('editdetail/{id}','DetailController@postdetail');
	});
	Route::group(['prefix'=>'slide'],function(){
		Route::get('danhsach','SlideController@danhsach');

		Route::get('addslide','SlideController@addslide');
		Route::post('addslide','SlideController@postslide');

		Route::get('delete/{id}','SlideController@deleteslide');

		Route::get('editslide/{id}','SlideController@editslide');
		Route::post('editslide/{id}','SlideController@posteditslide');

	});
	Route::group(['prefix'=>'admin'],function(){
		Route::get('danhsach','UserController@danhsach');

		Route::get('adduser','UserController@adduser');
		Route::post('adduser','UserController@postuser');

		Route::get('delete/{id}','UserController@deleteuser');

		Route::get('edituser/{id}','UserController@edituser');
		Route::post('edituser/{id}','UserController@postedituser');
	});
	Route::group(['prefix'=>'khachhang'],function(){
		Route::get('khachhang','LienheController@danhsach');
		Route::get('lienhe','LienheController@getlienhe');
		Route::post('lienhe','LienheController@postlienhe');
		Route::get('delete/{id}','LienheController@deletelienhen');
	});
		
	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('danhsach','TintucController@danhsach');

		Route::get('addtintuc','TintucController@addtintuc');
		Route::post('potsttintuc','TintucController@potsttintuc');

		Route::get('delete/{id}','TintucController@deletetintuc');

		Route::get('edittintuc/{id}','TintucController@edittintuc');
		Route::post('edittintuc/{id}','TintucController@postedittintuc');

	});
	Route::group(['prefix'=>'view'],function(){
		Route::get('view','PageController@view');
	});

});

Route::post('search','PageController@search');


// Route::get('trangchu',function(){
// 	// dd("ok");
// 	return view('page.index');
// });



Route::get('loaitin/{id}','PageController@loaitin');

Route::get('trangchu','PageController@trangchu');

Route::get('chitiet/{id}','PageController@chitiet');


Route::get('chitiet2/{id}','PageController@chitiet2');


Route::get('hienthi/{id}','PageController@trangweb');

Route::get('lienhe','PageController@lienhe');

Route::get('click','PageController@click');

Route::get('tintuc','PageController@tintuc');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
