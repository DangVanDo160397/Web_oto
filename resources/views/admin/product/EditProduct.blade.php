@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit Product</small>
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
                <form action="admin/product/editproduct/{{$product->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                         <div class="form-group">
                                <label>Name Product</label>
                                <?php 
                                    $category =DB::table("category")->orderBy("id","desc")->get();
                                 ?>
                                <select class="form-control" name="fk_category_id" >
                                    @foreach($category as $cate)
                                                       
                                     <option @if($cate->id==$product->fk_category_id) {{'selected'}}  @endif value="{{$cate->id}}">
                                            {{$cate->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product</label>
                                <input class="form-control" name="nameproduct" value="{{$product->nameproduct}}" />
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