@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail
                    <small>List Detail</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name Product</th>
                        <th>Trị Giá</th>
                        <th>Image</th>
                        <th>Tóm Tắt</th>
                        <th>Xuất Xứ</th>
                        <th>Content</th>
                        <th>Tên xe</th>
                        <th>Mã sp</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>

           @foreach($detail as $dt)
                <tbody>
                        <?php
                            $product =DB::table("product")->where("id",$dt->fk_product)->first();
                            //dd ($product->nameproduct);
                             //echo ($product->nameproduct) ;
                        ?> 
                    <tr class="odd gradeX" align="center">
                        <td> 
                            {{$dt->id}}
                        </td>
                        <td>           
                           {{--  {!!empty($product->product["nameproduct"]->nameproduct)? : $product->product["nameproduct"]->nameproduct!!} --}}
                            {{$product->nameproduct ?? 'nameproduct'}}
                       </td>
                        <td>
                            {{$dt->name}}
                        </td>
                        <td>
                            <img width="100px" src="image/detail/{{$dt->image}}" alt="">
                        </td>
                        <td>
                            {{$dt->title}}
                        </td>
                        <td>
                            {{$dt->decription}}
                        </td>
                        <td>
                            {{$dt->content}}
                        </td>
                        <td>
                            {{$dt->view}}
                        </td>
                        <td>
                            {{$dt->masp}}
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/detail/delete/{{$dt->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/detail/editdetail/{{$dt->id}}">Edit</a></td>
                    </tr>
                </tbody>
            @endforeach 
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection