<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Описание">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ pagetitle()->get()}} - {{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.3/dist/css/uikit.min.css" />--}}
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <!--vue-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app_site.css') }}">
    <link rel="stylesheet" href="{{ asset('themify/themify-icons.css') }}">

    <!--vue-->

    {{--<link href="{{ asset('css/app_site.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tree_category.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prod_image_slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_site.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css"
          rel="stylesheet"/>
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.gallery.min.css" type="text/css"
          rel="stylesheet"/>--}}

    @yield('head')
    @yield('css')
</head>
<body>
<div id="app">
    {{--<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Каталог <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach($categories_menu_top as $category)
                                <li><a href="{{URL('category',$category->slug)}}">{{$category->title}}</a></li>
                            @endforeach
                            <li><a href="{{route('categories')}}">Карта сайта</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('service')}}">Услуги</a>
                    <li><a href="{{route('about')}}">О нас</a></li>
                    <li><a href="{{route('contact')}}">Контакты</a></li>
                    <li>
                        <!--ПОИСК ПО САЙТУ-->
                        <search-component></search-component>
                        <!--//ПОИСК ПО САЙТУ-->
                    </li>
                    <li><a href="{{route('favorites')}}"><i class="fa fa-star" aria-hidden="true"></i>
                            Избранное</a></li>
                </ul>


            --}}{{--{{dd(collect(Session::get('cart'))['items'])}}--}}{{--
            <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                    <!-- Small button group -->
                    <li class="btn-group">
                        <button class="cart_up" type="button" data-toggle="dropdown">
                            <a href="{{route('shopping-cart')}}"><i class="fa fa-shopping-cart"></i>
                                <span class="badge">
                                        <CART>
                                            @if(Session::has('cart'))
                                                {{Session::get('cart')->totalQty}}
                                            @else
                                                {{'0'}}
                                            @endif
                                        </CART>
                                        </span>
                            </a>
                        </button>
                        <ul class="dropdown-menu">
                            @if(Session::has('cart'))
                                <div class="table_cart">
                                    <div class="itog">
                                        <ul>
                                            <li>Товаров: {{collect(Session::get('cart'))['totalQty']}} шт.</li>
                                            <li>Сумма: {{collect(Session::get('cart'))['totalPrice']}} грн.</li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <li><a href="{{route('shopping-cart')}}">Перейти в корзину</a></li>
                            <li><a href="{{route('checkout')}}">Оформить заказ</a></li>
                        </ul>
                    </li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Войти</a></li>
                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }}<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <!--проверка на роль-->
                                @if(Auth::check())
                                    @if(Auth::user()->roles[0]->name == 'admin')
                                        <li>
                                            <a href="{{route('admin-home-index')}}">Админка</a>
                                        </li>
                                    @endif
                                @endif
                                <li>
                                    <a href="{{route('profile')}}">Личный кабинет</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        Выйти
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li>
                        @include('layouts.site.language')
                    </li>
                </ul>
                </ul>
            </div>
        </div>
        @yield('nav')
    </nav>--}}
    <div style="z-index:1;" class="bg-secondary w-100 p-2">
        {{--<div class="container">
            <div class="row">
                <div class="col-lg-3">

                </div>

                <div class="col-lg-9">
                    <search-component></search-component>
                </div>
            </div>

        </div>--}}
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="navbar-nav">

                    {{--<a class="nav-item nav-link" href="{{ route('about') }}">@lang('navbar.about')</a>
                    <a class="nav-item nav-link" href="{{ route('contact') }}">@lang('navbar.contacts')</a>--}}

                    @include('layouts.site.language')

                </div>

                <ul class="navbar-nav ml-auto">

                    <li  class="nav-item mr-4">
                        <a class="nav-link"  href="{{ route('favorites') }}">
                            <img width="16px;" src="{{ asset('images/icon/star.svg') }}" alt="">
                        </a>
                    </li>


                    {{--<li class="nav-item mr-3">
                       <a class="nav-link"  href="{{ route('shopping-cart') }}">
                           <img width="16px;" src="{{ asset('images/icon/cart.svg') }}" alt="">
                           <span style="position:relative;left: -4px;top:-7px;" class="badge badge-warning ">
                               {{ collect(Session::get('cart'))['totalQty'] ?? 0 }}
                           </span>
                       </a>
                    </li>--}}
                    <site-nav-cart-component></site-nav-cart-component>

                    <li class="nav-item">
                        <div class="dropdown">

                            <a class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
                                <img width="16px;" src="{{ asset('images/icon/user.svg') }}" alt="">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                @if (Auth::guest())
                                    <a href="{{ route('login') }}" class="dropdown-item" type="button">@lang('navbar.login')</a>
                                    <a href="{{ route('register') }}" class="dropdown-item" type="button">@lang('navbar.registration')</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" type="button">@lang('navbar.forgot')</a>
                                @else

                                    @if(Auth::user()->roles[0]->name == 'admin')
                                        <a class="dropdown-item" href="{{ route('admin-home-index') }}">@lang('navbar.admin_panel')</a>
                                    @endif
                                    {{--<a href="{{ route('profile') }}" class="dropdown-item" type="button">@lang('navbar.profile')</a>--}}
                                    <div class="dropdown-divider"></div>
                                        <form method="post" class="dropdown-item" action="{{ route('logout') }}">
                                            @csrf
                                            <button style="padding:0;margin:0;" type="submit" class="dropdown-item btn btn-link">@lang('navbar.logout')</button>
                                        </form>
                                @endif


                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{--@if ($errors->any())
        <div class="alert alert-info informer">
            <ul>
                @foreach ($errors->all() as $error)
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}

    @if($site_on_of)
        @yield('close_site')
    @else
        <div class="container-fluid">
            @yield('content')
        </div>
    @endif

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; iCreative 2020</p>
        </div>
        <!-- /.container -->
    </footer>
</div>

{{--<!-- Footer -->
    <footer class="page-footer font-small indigo">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">О нас</h5>

                    <p>Текст</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Страницы</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Услуги</a>
                        </li>
                        <li>
                            <a href="#!">О нас</a>
                        </li>
                        <li>
                            <a href="#!">Контакты</a>
                        </li>
                        <li>
                            <a href="#!">Избранное</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Аккаунт</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Мои данные</a>
                        </li>
                        <li>
                            <a href="#!">Мои отзывы</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Контакты</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">{{$adres_site}}</a>
                        </li>
                        <li>
                            <a href="#!">{{$phone_site_1}}</a>
                        </li>
                        <li>
                            <a href="#!">{{$phone_site_2}}</a>
                        </li>
                        <li>
                            <a href="#!">{{$email_site}}</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            {{ config('app.name', 'Laravel') }}
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

</div>--}}

{{--<script src="{{ asset('js/app_site.js') }}"></script>--}}
{{--<script src="{{ asset('js/tree_category.js') }}"></script>
<script src="{{ asset('js/prod_image_slider.js') }}"></script>--}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

<script src="https://kit.fontawesome.com/226334c91f.js" crossorigin="anonymous"></script>

<!--vue-->
<script src="{{ asset('js/app.js') }}"></script>
<!--vue-->
{{--<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.3/dist/js/uikit-icons.min.js"></script>--}}

<script src="{{ asset('js/uikit.min.js') }}"></script>
<script src="{{ asset('js/uikit-icons.min.js') }}"></script>

{{--<script src="//code.jquery.com/jquery-latest.js"></script>--}}
{{--<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js" type="text/javascript"
        charset="utf-8"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.gallery.min.js" type="text/javascript"
        charset="utf-8"></script>--}}

{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>--}}


@yield('js')
@yield('modal')

</body>
</html>
