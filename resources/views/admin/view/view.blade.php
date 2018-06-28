@extends('admin.layoutadmin.index')
@section('noidung')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">View Sản Phẩm
                   
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên Xe</th>
                        <th>Số lượt xem</th>
                    </tr>
                </thead>
                    @foreach ($detail as $dt)      
                    <?php
                        $product =DB::table("product")->where("id",$dt->fk_product)->first();
                        //dd ($product->nameproduct);
                         //echo ($product->nameproduct) ;
                    ?>           
                    <tbody>
                        <tr class="odd gradeX" align="center">
                            <td>
                              {{$product->nameproduct ?? 'Giá trị chưa tồn tại'}}
                            </td>
                            <td > 
                               {{ $dt->click }}
                            </td>
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


