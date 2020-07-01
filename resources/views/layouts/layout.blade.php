<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <title>LaravelDemo</title>
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/linearicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/main.css')}}">
    </head>
        <body>
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </body>
    <script type="text/javascript" src="{{asset('front/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('front/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script type="text/javascript" src="{{asset('front/js/easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/hoverIntent.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/superfish.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/superfish.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/mail-script.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
</html>
