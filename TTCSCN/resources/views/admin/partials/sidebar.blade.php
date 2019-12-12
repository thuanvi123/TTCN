<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>Trang chủ</span></a>
        </div>
        <div class="clearfix"></div>
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a href="{{url('/admin/')}}"><i class="fa fa-home"></i> Home </a>
                    </li>
                    <li><a><i class="fa fa-shopping-basket"></i> Shop <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/shop/category')}}">Danh mục </a></li>
                            <li><a href="{{url('/admin/shop/product')}}">Sản phẩm </a></li>
                            <li><a href="{{url('/admin/shop/order')}}">Đơn hàng </a></li>
                            <li><a href="{{url('/admin/shop/review')}}">Đánh giá</a></li>
                            <li><a href="{{url('/admin/shop/customer')}}">Khách hàng </a></li>
                            <li><a href="{{ url('/admin/shop/shipper') }}"> Nhà vận chuyển</a></li>
                            <li><a href="{{ url('/admin/shop/seller') }}"> Nhà cung cấp</a></li>
                            <li><a href="{{ url('/admin/shop/brand') }}"> Nhãn hiệu</a></li>
                            <li><a href="{{ url('/admin/shop/statistic') }}"> Thống kê</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-first-order"></i>Order <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/shop/product/order')}}">Đặt sản phẩm </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Content <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/content/category')}}">Danh mục </a></li>
                            <li><a href="{{url('/admin/content/post')}}">Bài viết </a></li>
                            <li><a href="{{url('/admin/content/page')}}">Trang  </a></li>
                            <li><a href="{{url('/admin/content/tag')}}">Tag  </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bars"></i> Mennu<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/menu')}}"></a>Menu</li>
                            <li><a href="{{url('/admin/menuitems')}}"></a>Menu items</li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Admin <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/users')}}">Quản trị viên</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Media manager <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/media')}}">Media manager</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-cog"></i>Global settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/config')}}">Global settings</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-envelope-o"></i>Newsletters <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/admin/newsletters')}}">Newsletters</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-picture-o"></i>Banners <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/banners')}}">Banners</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
