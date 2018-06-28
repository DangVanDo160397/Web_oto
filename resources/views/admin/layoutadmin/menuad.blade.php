  <div id="wrapper">
     <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
         <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                 
                </button>
                <a class="navbar-brand" href="trangchu">Duc-Chinh</a>
            </div>
          
            <ul class="nav navbar-top-links navbar-right">
                 @if(Auth::check())
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>Xin Chào:
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                   
                       {{--  <li><a href=""><i class="fa fa-user fa-fw"></i> </a>
                        </li> --}}
                       <!--  <li><a href=""><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                       {{--  <li class="divider"></li> --}}
                        <li>
                            <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        </li>
                       
                    </ul>

                    <!-- /.dropdown-user -->
                </li>
                 @endif
            </ul>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="trangchu"><i class="fa fa-dashboard fa-fw"></i> Table</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admin/category/danhsach">List Category</a>
                            </li>
                            <li>
                                <a href="admin/category/addcategory">Add Category</a>
                            </li>
                           
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="admin/product/danhsach">List Product</a>
                            </li>
                            <li>
                                <a href="admin/product/addproduct">Add Product</a>
                            </li>
                           
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Detail<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="admin/detail/danhsach">List Detail</a>
                            </li>
                            <li>
                                <a href="admin/detail/adddetail">Add Detail</a>
                            </li>
                           
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Slide<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                                <a href="admin/slide/danhsach">List Slide</a>
                            </li>
                            <li>
                                <a href="admin/slide/addslide">Add Slide</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                                <a href="admin/admin/danhsach">List User</a>
                            </li>
                            <li>
                                <a href="admin/admin/adduser">Add User</a>
                            </li>
                          
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Khách Hàng<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                                <a href="admin/khachhang/khachhang">List Khách Hàng</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li> 
                      <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Số lượt xem sản phẩm<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                                <a href="admin/view/view">List view</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li> 
                      <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Tin Tức<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                                <a href="admin/tintuc/danhsach">List Tin Tức</a>
                            </li>
                              <li>
                                <a href="admin/tintuc/addtintuc">Add Tin Tức</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li> 

                  
                   
                </ul>
        </div>
    </div>
    </div>
            