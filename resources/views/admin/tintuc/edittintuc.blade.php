@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tintuc
                    
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/tintuc/edittintuc/{{$tintuc->id}}" method="POST"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                         <div class="form-group">
                        <label>Title</label>
                            <input class="form-control" name="title" placeholder="Name Slide" value="{{$tintuc->title}}" />
                        </div>
                         <div class="form-group">
                        <label>Contentn(Tạo bảng thì để max-width =780px)</label>
                        <textarea name="content" class="form-control ckeditor" id="editor1" >{{$tintuc->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <p><img  style="width: 100px;height: 100px;" src="image/tintuc/{{$tintuc->image}}" alt=""></p>
                            <input type="file" name="imageslide">
                        </div>
                    <button type="submit" class="btn btn-default">Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection