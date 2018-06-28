@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>List Slide</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slide</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
         
                <tbody>
                    @foreach($slide as $sl)
                    <tr class="odd gradeX" align="center">
                        <td>
                            {{$sl->id}}
                        </td>
                        <td > 
                            {{$sl->name}}
                        </td>
                        <td>
                            <img style="width: 100px;" src="image/slide/{{$sl->imageslide}}" alt="">
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/slide/delete/{{$sl->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slide/editslide/{{$sl->id}}">Edit</a></td>
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


