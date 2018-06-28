@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail
                    <small>Edit:{{$detail->title}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                  @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="admin/detail/editdetail/{{$detail->id}}" method="POST"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name Product</label>
                            <?php 
                                $product=DB::table("product")->orderBy("id","desc")->get();
                             ?>
                            <select name="fk_product" class="form-control" id="">
                                @foreach($product as $pro)
                                <option @if($pro->id==$detail->fk_product){{'selected'}} @endif value="{{$pro->id}}" >{{$pro->nameproduct}}</option>
                                @endforeach
                            </select>             
                        </div>
                        <div class="form-group">
                            <label>Trị Giá</label>
                            <input class="form-control" name="namea" value="{{$detail->name}}" placeholder="name" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                           <p> <img width="100px" src="image/detail/{{$detail->image}}" alt=""></p>
                             <input type="file" name="image" >
                        </div>
                        <div class="form-group">
                            <label>Thuộc dòng xe</label>
                            <input class="form-control" name="title" placeholder="Title"  value="{{$detail->title}}" />
                        </div>
                        <div class="form-group">
                            <label>Xuất xứ</label>
                            <input class="form-control" name="decription" placeholder="Decription" value="{{$detail->decription}}" />
                        </div>
                        <div class="form-group">
                            <label>Contentn  (Tạo bảng thì để max-width =780px)</label>
                            <textarea name="content" class="form-control ckeditor " id="editor1" >{{$detail->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Tóm Tắt</label>
                            <input class="form-control" name="view" placeholder="View" value="{{$detail->view}}" />
                        </div>
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <input class="form-control" name="masp" placeholder="Mã sản phẩm" value="{{$detail->masp}}" />
                        </div>
                    <button type="submit" class="btn btn-default"> Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection