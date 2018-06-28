@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail
                    <small>Add Detail</small>
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
                <form action="admin/detail/Adddetail" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Name Product</label>

                        <select name="fk_product" class="form-control" id="">
                            @foreach($product as $pro)
                            <option value="{{$pro->id}}">{{$pro->nameproduct}}</option>
                            @endforeach
                        </select>             
                    </div>
                    <div class="form-group">
                        <label>Trị giá</label>
                        <input class="form-control" name="name" placeholder="Trị giá" />
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                       <input type="file" name="image">
                       <!--  <input class="form-control" name="image" placeholder="Image" /> -->
                    </div>
                    <div class="form-group">
                        <label>Thuộc dòng xe</label>
                        <input class="form-control" name="title" placeholder="Thuộc dòng xe" />
                    </div>
                    <div class="form-group">
                        <label>Xuất Xứ</label>
                        <input class="form-control" name="decription" placeholder="Xuất Xứ" />
                    </div>
                    <div class="form-group">
                        <label>Contentn(Tạo bảng thì để max-width =780px)</label>
                        <textarea name="content" class="form-control ckeditor" id="editor1" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tóm Tắt</label>
                        <input class="form-control" name="view" placeholder="" />
                    </div>
                     <div class="form-group">
                        <label>Mã san phẩm</label>
                        <input class="form-control" name="masp" placeholder="" />
                    </div>
                    <button type="submit" class="btn btn-default">Add Detail</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection