@extends('layouts.layout')

@section('content')

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{URL::asset('files/img/slider/slider1.jpg')}}" alt="" title="#slider-direction-1" />
                <img src="{{URL::asset('files/img/slider/slider2.jpg')}}" alt="" title="#slider-direction-3" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                </div>
                                <!-- layer 2 -->
                                <div cfa fa-codelass="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 style="color: white;" class="title2">@lang('home.Мы поможем вам. Центр развития бизнеса')</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">@lang('home.Смотрите Услуги')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content text-center">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">@lang('home.Лучшая ИТ-информация')</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">@lang('home.Мы находимся в бизнесе получения качественного ИТ-сервиса')</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">@lang('home.Смотрите Услуги')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2> ORIENT SOFTWARE TEAM</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-left">
                        <div class="single-well">
                            <a href="#">
                                <img style="border-radius: 20px !important; max-width: 93% !important;" src="{{URL::asset('files/img/about/img3.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <a href="#">
                                <h4 class="sec-head">@lang('home.O нас')</h4>
                            </a>
                            <p>
                                @lang('home.организация, предоставляющая комплексные ИТ-решения и услуги. С начала своей деятельности мы специализируемся на продвижении современных технологий и решений от ведущих мировых производителей, предоставляя в основном следующие услуги')
                            </p>
                            <ul>
                                <li>
                                    <i class="fa fa-check"></i> @lang('home.Пакет дизайна интерьера')
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> @lang('home.высококачественные IOS-приложения')
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> @lang('home.приложения для Android')
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> @lang('home.видео высокого качества')
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End col-->
            </div>
        </div>
    </div>
    <!-- End About area -->


    <!-- Start Service area -->
    <div id="services" class="services-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline services-head text-center">
                        <h2>@lang('home.наши сервисы')</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="services-contents">
                    <!-- Start Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-code"></i>
                                    </a>
                                    <h4>@lang('home.Веб-сайты и системы')</h4>
                                    <p>
                                        @lang('home.Landing page, интернет-магазины, корпоративные сайты, CRM системы')
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-android" aria-hidden="true"></i>

                                    </a>
                                    <h4>@lang('home.Создание мобильных приложений')</h4>
                                    <p>
                                        @lang('home.Приложения для системы Android, приложения для системы iOS, родные приложения (React, Vue Native, IONIC)')
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-camera-retro"></i>
                                    </a>
                                    <h4>@lang('home.Дизайн и технологии 3D') </h4>
                                    <p>
                                        @lang('home.Главная / дизайн UX, 3D моделирование и визуализация, VFX (Autodesk 3Ds Max, Maya, AE)')
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service area -->

    <!-- Start portfolio Area -->
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>@lang('home.Наше портфолио')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="awesome-project-content">
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{URL::asset('files/img/portfolio/Frame200.jpg')}}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{URL::asset('files/img/portfolio/Frame200.jpg')}}">
                                            <h4>Time Registration</h4>
                                            <span>@lang('home.веб-приложения1')</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{URL::asset('files/img/portfolio/Frame201.jpg')}}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{URL::asset('files/img/portfolio/Frame201.jpg')}}">
                                            <h4>Elektron universitet</h4>
                                            <span>@lang('home.веб-приложения1')</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{URL::asset('files/img/portfolio/Frame202.jpg')}}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{URL::asset('files/img/portfolio/Frame202.jpg')}}">
                                            <h4>Videokonferensiya</h4>
                                            <span>@lang('home.веб-приложения1')</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{URL::asset('files/img/portfolio/Frame203.jpg')}}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{URL::asset('files/img/portfolio/Frame203.jpg')}}">
                                            <h4>online test</h4>
                                            <span>@lang('home.веб-приложения1')</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{URL::asset('files/img/portfolio/Frame204.jpg')}}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{URL::asset('files/img/portfolio/Frame204.jpg')}}">
                                            <h4>Study Avtostart</h4>
                                            <span>@lang('home.веб-приложения')</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{URL::asset('files/img/portfolio/Frame205.jpg')}}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{URL::asset('files/img/portfolio/Frame205.jpg')}}">
                                            <h4>Avtostart.uz</h4>
                                            <span>@lang('home.веб-приложения1')</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{URL::asset('files/img/portfolio/Frame206.jpg')}}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{URL::asset('files/img/portfolio/Frame206.jpg')}}">
                                            <h4>Ombor</h4>
                                            <span>@lang('home.веб-приложения1')</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{URL::asset('files/img/portfolio/Frame207.jpg')}}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{URL::asset('files/img/portfolio/Frame207.jpg')}}">
                                            <h4>pager</h4>
                                            <span>@lang('home.веб-приложения1')</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- single-awesome-project start -->
                </div>
            </div>
        </div>
    </div>
    <!-- awesome-portfolio end -->


    <!-- Start Testimonials -->
    <div class="testimonials-area">
        <div class="testi-inner area-padding">
            <div class="testi-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start testimonials Start -->
                        <div class="testimonial-content text-center">
                            <a class="quate" href="#">OST</a>
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel">
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            @lang('home.мы создадим ваш сайт в высоком качестве')
                                        </p>
                                        <h6>@lang('home.a1')</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            @lang('home.Мы находимся в бизнесе получения качественного ИТ-сервиса')
                                        </p>
                                        <h6>@lang('home.a2')</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            @lang('home.мы создадим ваш Android приложение в высоком качестве')
                                        </p>
                                        <h6>@lang('home.a3')</h6>
                                    </div>
                                </div>
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            @lang('home.мы создадим ваш Android приложение в высоком качестве')
                                        </p>
                                        <h6>@lang('home.a4')</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                            </div>
                        </div>
                        <!-- End testimonials end -->
                    </div>
                    <!-- End Right Feature -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->


    <!-- Start Blog Area -->
    <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
            <div class="blog-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>@lang('home.Последние новости')</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="http://stude.articles.uz/">
                                    <img src="{{URL::asset('files/img/blog/news4.png')}}" alt="">
                                </a>
                            </div>

                            <div class="blog-text">
                                <h4>
                                    <a href="http://stude.articles.uz/">Study @lang('home.веб-приложения')</a>
                                </h4>
                                <p>
                                    Study @lang('home.Этот мессенджер многофункциональный и обладает всеми функциями приложения telegram, которое доступно для Android IOS и веб-приложений.')....
                                </p>
                            </div>
                            <span>
									<a href="http://stude.articles.uz/" class="ready-btn">@lang('home.Выучить больше')</a>
								</span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left Blog-->
                    <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="https://pager.uz/">
                                    <img src="{{URL::asset('files/img/blog/new2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="https://pager.uz/">Pager</a>
                                </h4>
                                <p>
                                    Pager @lang('home.Это веб-приложение предназначено для учебных центров. Это веб-приложение отлично работает')...
                                </p>
                            </div>
                            <span>
									<a href="https://pager.uz/" class="ready-btn">@lang('home.Выучить больше')</a>
								</span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left Blog-->
                    <!-- Start Right Blog-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="https://ombor.articles.uz/">
                                    <img src="{{URL::asset('files/img/portfolio/port1.png')}}" alt="">
                                </a>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="https://ombor.articles.uz/">Ombor @lang('home.веб-приложения')</a>
                                </h4>
                                <p>
                                    Ombor @lang('home.Это веб-приложение разработано для торговых центров и складов, это приложение является многофункциональным') ....
                                </p>
                            </div>
                            <span>
									<a href="https://ombor.articles.uz/" class="ready-btn">@lang('home.Выучить больше')</a>
								</span>
                        </div>
                    </div>
                    <!-- End Right Blog-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Suscrive Area -->
    <div class="suscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                    <div class="suscribe-text text-center">
                        <h3>@lang('home.Добро пожаловать на Orient software team')</h3>
                        <a class="sus-btn" href="#">OST</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Suscrive Area -->
    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>@lang('home.Связаться с нами')</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    @lang('home.Вызов'): +99871 220 20 30<br>
                                    <span>@lang('home.С понедельника по пятницу (с 9 утра до 5 вечера)')</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email:  ost.info10@gmail.com<br>
                                    <span>Web: ostnews.articles.uz/</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    @lang('home.Расположение'): Yunusabad 8kv ul<br>
                                    <span> Rixsiliy 49 dom 47 kv</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Start Google Map -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->



                        <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3A89e57f55018c72ea846a6c657507fd854a728678fb6aecc0e181e8be48d53972&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
                    </div>
                    <!-- End Google Map -->

                    <!-- Start  contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form contact-form">
                            <div id="sendmessage">@lang('home.Ваше сообщение отправлено. Спасибо!')</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="@lang('home.Ваше имя')" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="@lang('home.Ваше Email')" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="@lang('home.Тема')" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="@lang('home.Сообщение')"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit">@lang('home.Отправить сообщение')</button></div>
                            </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
@endsection
