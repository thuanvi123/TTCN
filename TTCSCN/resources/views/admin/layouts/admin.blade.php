
<!DOCTYPE HTML>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--head-->
@include('admin.partials.head')
<!--//head-->
<body >




    <div class="right_col" role="main">
        @yield('content')
    </div>


</div>
<!-- Main js -->
@include('admin.partials.mai-js')
</body>
</html>