@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List Product</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name Category</th>
                        <th>Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
            @foreach($product as $pr)    
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>{{$pr->id}}</td>
                        <td> 
                            <?php
                                $category =DB::table("category")->where("id",$pr->fk_category_id)->first();
                                 echo $category->name;
                            ?>
                        </td>
                        <td>
                            {{$pr->nameproduct}}
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$pr->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/editproduct/{{$pr->id}}">Edit</a></td>
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


