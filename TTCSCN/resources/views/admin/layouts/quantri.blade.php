<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--head-->
@include('admin.partials.head')
<!--head-->

<body class="nav-md">
<div class="container body">
        <!--sidebar-->

            @include('admin.partials.sidebar')

         <!--/sidebar-->
        <!-- header -->
         @include('admin.partials.header')
        <!-- /header -->

        <!-- page content -->
        <div class="right_col" role="main">
           @yield('content')
        </div>
        <!-- /page content -->


        <!-- footer content -->
           @include('admin.partials.footer')
        <!-- /footer content -->
    </div>
</div>
<!-- Main js -->
@include('admin.partials.mai-js')
<!--/ Main js -->
</body>
</html>
