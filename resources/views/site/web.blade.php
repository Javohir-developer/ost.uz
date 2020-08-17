@extends('layouts.layout1')
@section('content')
    <?php use
    Illuminate\Support\Facades\DB;
    $product = DB::table('products')->get();
    ?>
    <div class="header-bg-web page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                <h1 class="title2">@lang('home.веб-приложения')</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Blog Area -->
    <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
            <div class="blog-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            {{--                            <h2>@lang('home.Последние новости')</h2>--}}
                            <h2>@lang('home.проектов')</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                <?php foreach ($product as $products): ?>
                <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="<?php $products->link; ?>">
                                    <img class="img-fluid" src="{{url('/images/'.$products->image)}}" alt="Image"/>
                                </a>
                            </div>

                            <div class="blog-text">
                                <h4>
                                    <a href="<?php echo $products->link; ?>"><?php echo $products->title; ?></a>
                                </h4>
                                <p>
                                    <?php echo $products->about; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start single blog -->
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
