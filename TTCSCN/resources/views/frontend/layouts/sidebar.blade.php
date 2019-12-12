
<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--Head-->
@include('frontend.partials.head')
<!--/Head-->
<body class="home-one">

@include('frontend.partials.header')
<div class="shop-with-sidebar">
    <div class="container">
        <div class="row">
            @include('frontend.partials.sidebar')
            @yield('content')
        </div>
    </div>
</div>
@include('frontend.partials.footer')




</body>
</html>
