<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--Head-->
@include('frontend.partials.head')
<!--/Head-->
<body class="home-one">

@include('frontend.partials.header')
@yield('content')
@include('frontend.partials.footer')




</body>
</html>
