@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tuc
                    <small>List Tin Tuc</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Tittle</th>
                        <th>Content</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
         
                <tbody>
                    @foreach($tintuc as $tt)
                    <tr class="odd gradeX" align="center">
                        <td>
                            {{$tt->id}}
                        </td>
                        <td>
                            <img style="width: 100px;height: 100px;" src="image/tintuc/{{$tt->image}}" alt="">
                        </td>
                        <td > 
                            {{$tt->title}}
                        </td>
                        <td > 
                            {{$tt->content}}
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/delete/{{$tt->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/edittintuc/{{$tt->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
           
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection


