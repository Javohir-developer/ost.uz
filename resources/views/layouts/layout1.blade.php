    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>OST</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:site_name" content="ost.articles.uz">
        <meta property="og:title" content="OST">
        <meta property="og:locale" content="uz-UZ">
        <meta property="og:type" content="page">
        <meta property="og:url" content="http://ost.articles.uz/">
        <meta property="og:image" content="{{URL::asset('files/img/logo.png')}}">
        <meta property="og:description"  content="OST - Orient Software Team IT olamiga biz bilan birga.">
        <link rel="shortcut icon" href="{{URL::asset('files/img/logo.png')}}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('files/lib/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/lib/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/lib/owlcarousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/lib/owlcarousel/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/lib/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/lib/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/lib/venobox/venobox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/css/nivo-slider-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/css/responsive.css')}}">
    </head>

        <body data-spy="scroll" data-target="#navbar-example">
            @include('layouts.header1')
            @yield('content')
            @include('layouts.footer')
        </body>

    <script type="text/javascript" src="{{asset('files/lib/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/venobox/venobox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/knob/jquery.knob.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/wow/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/parallax/parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/easing/easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/nivo-slider/js/jquery.nivo.slider.js')}}" ></script>
    <script type="text/javascript" src="{{asset('files/lib/appear/jquery.appear.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/contactform/contactform.js')}}"></script>
    <script type="text/javascript" src="{{asset('files/js/main.js')}}"></script>
</html>
