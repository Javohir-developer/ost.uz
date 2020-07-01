@extends('layouts.layout')
@section('content')
<?php $product = DB::table('products')->take(1)->orderby('id', 'desc')->get();?>

<!-- start banner Area -->
{{--<section class="banner-area relative" id="home" style="background: url({{asset('front/img/header-bg.jpg')}}) right;background-size: cover;">--}}
<section class="banner-area relative" id="home" style="background: url({{asset('front/img1/site7.jpg')}}) right;background-size: cover;">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-12 col-md-12">
                <h4 class="text-white text-uppercase">Discover the Colorful World</h4>
                <h1 class="text-uppercase">
                    Build Your Dream
                </h1>
                <p class="text-white pt-20 pb-20">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                    or incididunt ut labore et dolore magna aliqua. Ut enim ad minim..
                </p>
                <a href="#" class="primary-btn header-btn text-uppercase">Discover Now</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start about Area -->
<section class="about-area" id="about">
    <div class="container-fluid">
        <div class="row justify-content-start align-items-center">
            <?php foreach ($product as $p): ?>
            <div class="col-lg-6 about-left no-padding">
{{--                <img class="img-fluid" src="{{asset('front/img/about-img.jpg')}}" alt="">--}}
                <img class="img-fluid" src="{{url('/images/'.$p->image)}}" alt="Image"/>
            </div>
            <div class="col-lg-6 about-right no-padding">
                <h1><?= $p->title;?></h1>
                <p class="pb-20 pt-20">
                    <?= $p->about;?></p>
                <div class="about-detials flex-row d-flex">
                    <div class="single-about">
                        <span class="lnr lnr-diamond"></span>
                        <a href="#"><h4 class="pb-20 pt-20">Expert Services</h4></a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology.
                        </p>
                    </div>
                    <div class="single-about">
                        <span class="lnr lnr-phone"></span>
                        <a href="#"><h4 class="pb-20 pt-20">Great Support</h4></a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology.
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End about Area -->


<!-- start service Area-->
<section class="service-area pt-100 pb-150" id="offer">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">What we can offer for you</h1>
                    <p>Who are in extremely love with eco friendly system..</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sigle-service col-lg-3 col-md-6">
                <span class="lnr lnr-rocket"></span>
                <a href="#"><h4>User friendly Admin</h4></a>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn primary-border circle">View Details</a>
            </div>
            <div class="sigle-service col-lg-3 col-md-6">
                <span class="lnr lnr-magic-wand"></span>
                <a href="#"><h4>Full Responsive</h4></a>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn primary-border circle">View Details</a>
            </div>
            <div class="sigle-service col-lg-3 col-md-6">
                <span class="lnr lnr-gift"></span>
                <a href="#"><h4>Full Documentation</h4></a>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn primary-border circle">View Details</a>
            </div>
            <div class="sigle-service col-lg-3 col-md-6">
                <span class="lnr lnr-phone"></span>
                <a href="#"><h4>Resonable Pricing</h4></a>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn primary-border circle">View Details</a>
            </div>

        </div>
    </div>
</section>



<!-- Start protfolio Area -->
<section class="protfolio-area section-gap" id="portfolio">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Our Recent Works may impress you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 single-portfolio">
                <img class="image img-fluid" src="{{asset('front/img/p1.jpg')}}" alt="">
                <a href="img/p1.jpg" class="img-pop-up">
                    <div class="middle">
                        <div class="text"><span class="lnr lnr-frame-expand"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 single-portfolio">
                <img class="image img-fluid" src="{{asset('front/img/p2.jpg')}}" alt="">
                <a href="img/p2.jpg" class="img-pop-up">
                    <div class="middle">
                        <div class="text"><span class="lnr lnr-frame-expand"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 single-portfolio">
                <img class="image img-fluid" src="{{asset('front/img/p3.jpg')}}" alt="">
                <a href="img/p3.jpg" class="img-pop-up">
                    <div class="middle">
                        <div class="text"><span class="lnr lnr-frame-expand"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-8 single-portfolio">
                <img class="image img-fluid" src="{{asset('front/img/p4.jpg')}}" alt="">
                <a href="img/p4.jpg" class="img-pop-up">
                    <div class="middle">
                        <div class="text"><span class="lnr lnr-frame-expand"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 single-portfolio">
                <img class="image img-fluid" src="{{asset('front/img/p5.jpg')}}" alt="">
                <a href="img/p5.jpg" class="img-pop-up">
                    <div class="middle">
                        <div class="text"><span class="lnr lnr-frame-expand"></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 single-portfolio">
                <img class="image img-fluid" src="{{asset('front/img/p6.jpg')}}" alt="">
                <a href="img/p6.jpg" class="img-pop-up">
                    <div class="middle">
                        <div class="text"><span class="lnr lnr-frame-expand"></span></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End protfolio Area -->


<!-- Start fact Area -->
<section class="facts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col single-fact">
                <h1 class="counter">2536</h1>
                <p>Projects Completed</p>
            </div>
            <div class="col single-fact">
                <h1 class="counter">6784</h1>
                <p>Really Happy Clients</p>
            </div>
            <div class="col single-fact">
                <h1 class="counter">1059</h1>
                <p>Total Tasks Completed</p>
            </div>
            <div class="col single-fact">
                <h1 class="counter">2239</h1>
                <p>Cups of Coffee Taken</p>
            </div>
            <div class="col single-fact">
                <h1 class="counter">435</h1>
                <p>In House Professionals</p>
            </div>
        </div>
    </div>
</section>
<!-- end fact Area -->

<!-- Start recent-work Area -->
<section class="recent-work-area section-gap" id="work">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Our Recent Works may impress you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-recent-work align-items-end d-flex" style="background: url({{asset('front/img/w1.jpg')}}) center;background-size:cover;background-repeat: no-repeat;">
                    <div class="content">
                        <a href="#"><h4 class="text-white">Portable latest Fashion for  <br>
                                young women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                        </p>
                        <div class="flex-row d-flex">
                            <div class="thumb">
                                <img src="{{asset('front/img/user.jpg')}}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#"><h6 class="text-white">Nettie Mullins</h6></a>
                                <span>
												13th Dec
											</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-recent-work align-items-end d-flex" style="background: url({{asset('front/img/w2.jpg')}}) center;	background-size:cover;background-repeat: no-repeat;">
                    <div class="content">
                        <a href="#"><h4 class="text-white">Portable latest Fashion for  <br>
                                young women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                        </p>
                        <div class="flex-row d-flex">
                            <div class="thumb">
                                <img src="{{asset('front/img/user.jpg')}}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#"><h6 class="text-white">Nettie Mullins</h6></a>
                                <span>
												13th Dec
											</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-recent-work align-items-end d-flex" style="background: url({{asset('front/img/w3.jpg')}}) center; 	background-size:cover;background-repeat: no-repeat;">
                    <div class="content">
                        <a href="#"><h4 class="text-white">Portable latest Fashion for  <br>
                                young women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                        </p>
                        <div class="flex-row d-flex">
                            <div class="thumb">
                                <img src="{{asset('front/img/user.jpg')}}" alt="">
                            </div>
                            <div class="desc">
                                <a href="#"><h6 class="text-white">Nettie Mullins</h6></a>
                                <span>
												13th Dec
											</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End recent-work Area -->


<!-- Start brand Area -->
<section class="brand-area">
    <div class="container">
        <div class="row logo-wrap">
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="{{asset('front/img/l1.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="{{asset('front/img/l2.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="{{asset('front/img/l3.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="{{asset('front/img/l4.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="{{asset('front/img/l5.png')}}" alt="">
            </a>
        </div>
    </div>
</section>
<!-- End brand Area -->

<!-- Start Contact Area -->
<section class="contact-area" id="contact">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-start">
            <div class="col-lg-6 col-md-12 contact-left no-padding">
                <div style=" width:100%;height: 545px;" id="map"></div>
            </div>
            <div class="col-lg-6 col-md-12 pt-100 pb-100">
                <form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
                    <h1>You can drop us a line</h1>
                    <p class="pt-10 pb-50">Who are in extremely love with eco friendly system.</p>
                    <input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
                    <input name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" class="common-input mt-10" required="" type="subject">
                    <textarea class="common-textarea mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                    <button class="pull-right primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                    <div class="mt-10 alert-msg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- start footer Area -->

<!-- End footer Area -->

@endsection

