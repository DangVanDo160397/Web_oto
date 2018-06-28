@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Admin user
                    <small>List user</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                        <!-- <th>PassWord</th> -->
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
              
                <tbody>
                    @foreach($admin as $ad)
                    <tr class="odd gradeX" align="center">
                        <td>{{$ad->id}}</td>
                        <td>{{$ad->name}}</td>
                        <td>{{$ad->email}}</td>
                        <td>
                           @if($ad->level==1){{"Admin"}}
                            @else{{"User"}}
                           @endif
                        </td>
                        
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/admin/delete/{{$ad->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/admin/edituser/{{$ad->id}}">Edit</a></td>
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


