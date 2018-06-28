@extends('admin.layoutadmin.index')
@section('noidung')
<style> 
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}</style>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Admin user
                    <small>Danh Sách Khách Hàng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Họ Và Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ghi Chu</th>
                        <th>Địa Chỉ</th>
                        <th>Date Đăng ký tư vấn</th>
                        <th>Xử lý</th>
                        <th>Delete</th>
                    </tr>
                </thead>
              
                <tbody>
                    @foreach($khachhang as $kh)
                    <tr class="odd gradeX" align="center">
                        <td>{{$kh->id}}</td>
                        <td>{{$kh->name}}</td>
                        <td>{{$kh->email}}</td>
                        <td>{{$kh->sdt}}</td>
                        <td>{{$kh->content}}</td>
                        <td>{{$kh->diachi}} </td>
                        <td> 
                       {{$kh->created_at}}
                        </td>
                        <td>
                            <label class="switch">
                              <input type="checkbox" checked>
                              <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/delete/{{$kh->id}}">  Delete</a></td>
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


