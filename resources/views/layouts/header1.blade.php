<div id="preloader"></div>

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="{{ route('site.index') }}">
                                <h1><span>O</span>ST</h1>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="{{ route('site.index') }}">@lang('home.Главная')</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{ route('site.index') }}">@lang('home.O нас')</a>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('home.проектов')<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('site.web') }}" >@lang('home.веб-приложения')</a></li>
                                        <li><a href="{{ route('site.android') }}" >@lang('home.приложения для Androidm')</a></li>
                                        <li><a href="{{ route('site.video') }}">@lang('home.3DM приложения')</a></li>
                                    </ul>
                                </li>

                                <li >
                                    <a class="page-scroll" href="{{ route('site.contact') }}">@lang('home.Kонтакт')</a>
                                </li>

                                <?php if (App::isLocale('uz')) { ?>
                                <li><a href="locale/ru">Ru</a></li>
                                <?php }elseif (App::isLocale('ru')){ ?>
                                <li><a href="locale/uz">Uz</a></li>
                                <?php } ?>


                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>
