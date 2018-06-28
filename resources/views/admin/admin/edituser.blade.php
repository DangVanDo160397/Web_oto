@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Edit User:{{$admin->name}}</small>
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
                <form action="admin/admin/edituser/{{$admin->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                       	<div class="form-group">
                        <label>Nameuser</label>
                        <input class="form-control" name="name" placeholder="Nameuser" value="{{$admin->name}}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email1" placeholder="Email" value="{{$admin->email}}" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" value="passwordsss"/>
                    </div>
                     <div class="form-group">
                        <label>Confluent Password</label>
                        <input  type="password"  class="form-control" name="passwordagain" placeholder="password" value="passwordsss" />
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <label class="radio-inline">
                            <input type="radio" name="level" value="0" checked="">User
                        </label>
                     	<label class="radio-inline">
                            <input type="radio" name="level" value="1" checked="">Admin
                        </label>
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