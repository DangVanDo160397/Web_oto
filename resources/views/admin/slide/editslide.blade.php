@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail
                    <small>Edit:{{$slide->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/slide/editslide/{{$slide->id}}" method="POST"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                         <div class="form-group">
                        <label>Name Slide</label>
	                        <input class="form-control" name="name" placeholder="Name Slide" value="{{$slide->name}}" />
	                    </div>
	                    <div class="form-group">
	                        <label>Slide</label>
	                        <p><img src="image/slide/{{$slide->imageslide}}" alt=""></p>
	                       	<input type="file" name="imageslide">
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