<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Veis') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app_design.js') }}" defer></script>

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('fonts/Montserrat/Montserrat-Bold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Montserrat/Montserrat-Regular.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Montserrat/Montserrat-ExtraBold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themify/themify-icons.css') }}">

    <!-- Styles -->
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />--}}
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <link href="{{ asset('css/app_design.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <main>
            <div class="container-fluid p-0">
                @yield('content')
                @yield('footer')
            </div>
        </main>
    </div>
{{--    <script src="https://kit.fontawesome.com/226334c91f.js" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit-icons.min.js"></script>--}}

    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script>
        $(document).mouseup(function (e){
            let div = $("#main-number");
            let search = $("#search-input");
            let sort = $("#main-sort");
            if (!div.is(e.target)
                && div.has(e.target).length === 0 && !search.is(e.target) && !sort.is(e.target)  && sort.has(e.target).length === 0) {
                $('#main-number').removeClass('select-number');
                $('body').css({'margin-right' : 0}).removeClass('show-modal');
                $('#light').show();
                $('#header-wrap').hide();
                $('#big-header-wrap').hide();
                $('#dark').hide();
                $('#drop').hide();
                $('#number-arrow-down').show();
                $('#number-arrow-up').hide();
                $('#contact-arrow-up').hide();
                $('#contact-arrow-down').show();
                $('#main-sort').removeClass('sort-drop');
                $('#sort-up-arrow').hide();
                $('#sort-down-arrow').show();
                $('#drop-sort').removeClass('show-drop');
                $('#right').removeClass('sort-index');
            }
        });

        $(document).ready(function () {
            let div = document.createElement('div');

            div.style.overflowY = 'scroll';
            div.style.width = '50px';
            div.style.height = '50px';

            // мы должны вставить элемент в документ, иначе размеры будут равны 0
            document.body.append(div);
            let scrollWidth = div.offsetWidth - div.clientWidth;

            div.remove();

            $('#delete-icon').toggleClass('focus-search');
            $('.more-arrow').on('click', function () {
                $(this).toggleClass('more-arrow-up');
            });
            $('.number-arrow').on('click', function () {
                $(this).toggleClass('number-arrow-up');
            });
            $('#show-on-map').on('click', function () {
                $('#map').slideDown();
            });
            $('#show-on-map-footer').on('click', function () {
                $('#map').slideToggle();
            });
            $('#buy').on('click', function () {
                $('#buy').toggle();
                $('#cart').toggle();
                setTimeout(function () {
                    $('#cart').toggle();
                    $('#buy').toggle();
                }, 2000);
            });
            $('#contacts').on('click',function () {
                let nav = $('nav').height();
                let height = $(window).height() - (nav - $(window).scrollTop());
                let big_height = $(window).height() - (nav -$(window).scrollTop());
                /*$('body').addClass('show-modal');
                $('#big-header-wrap').css({'height' : big_height + 'px'}).show();
                $('#header-wrap').css({'height' : height + 'px'}).show();*/
                if(!$('#dropdown-menu').hasClass('show')){
                    $('body').css({'margin-right' : scrollWidth + 'px'}).addClass('show-modal');
                    $('#big-header-wrap').css({'height' : big_height + 'px'}).show();
                    $('#header-wrap').css({'height' : height + 'px'}).show();
                    $('#contact-arrow-up').show();
                    $('#contact-arrow-down').hide();
                }
            });

            $('#main-number').on('click', function () {
                let nav = $('nav').height();
                let height = $(window).height() - (nav - $(window).scrollTop());
                let big_height = $(window).height() - (nav -$(window).scrollTop());
                if(!$('#main-number').hasClass('select-number')){
                    $('#main-number').addClass('select-number');
                    $('#number-arrow-down').hide();
                    $('#number-arrow-up').show();
                    $('body').css({'margin-right' : scrollWidth + 'px'}).addClass('show-modal');
                    $('#light').hide();
                    $('#big-header-wrap').css({'height' : big_height + 'px'}).show();
                    $('#header-wrap').css({'height' : height + 'px'}).show();
                    $('#dark').show();
                    $('#drop').show();
                    $('#main-sort').removeClass('sort-drop');
                    $('#sort-up-arrow').hide();
                    $('#sort-down-arrow').show();
                    $('#drop-sort').removeClass('show-drop');
                    $('#right').removeClass('sort-index');
                }else{
                    $('#main-number').removeClass('select-number');
                    $('body').css({'margin-right' : 0}).removeClass('show-modal');
                    $('#light').show();
                    $('#number-arrow-down').show();
                    $('#number-arrow-up').hide();
                    $('#big-header-wrap').css({'height' : big_height + 'px'}).hide();
                    $('#header-wrap').css({'height' : height + 'px'}).hide();
                    $('#dark').hide();
                    $('#drop').hide();
                }


            });

            /*$('#header-wrap').on('click', function () {
                $('#main-number').removeClass('select-number');
                $('body').removeClass('show-modal');
                $('#light').show();
                $('#header-wrap').hide();
                $('#dark').hide();
                $('#drop').hide();
            });

            $('#big-header-wrap').on('click', function () {
                $('#main-number').toggleClass('select-number');
                $('body').toggleClass('show-modal');
                $('#light').toggle();
                $('#big-header-wrap').toggle();
                $('#dark').toggle();
                $('#drop').toggle();
            });*/

            /*$('#search-input').on('mouseover', function () {
                $(this).parent().parent('.search').removeClass('search-not-border').addClass('search-border');
                $('#search-icon').css({'color' : 'white'})
            }).on('mouseleave', function () {
                $(this).parent().parent('.search').removeClass('search-border').addClass('search-not-border');
                $('#search-icon').css({'color' : '#6a6a6a'})
            });*/

            $('#main-sort span, #main-sort img').on('click', function () {
                // let height = $(window).height() - ($('nav').height() - $(window).scrollTop());
                $('#right').toggleClass('sort-index');
                $('#main-sort').toggleClass('sort-drop');
                $('#sort-up-arrow').toggle();
                $('#sort-down-arrow').toggle();
                $('#drop-sort').toggleClass('show-drop');
                // $('body').toggleClass('show-modal');
                // $('#header-wrap').css({'height' : height + 'px'}).toggle();
            });

            $('#search-input').on('focus', function () {
                let nav = $('nav').height();
                let height = $(window).height() - (nav - $(window).scrollTop());
                let big_height = $(window).height() - (nav -$(window).scrollTop());
                $('#main-number').removeClass('select-number');
                $('#search-input').toggleClass('focus-search');
                $('#light').show();
                $('#dark').hide();
                $('#drop').hide();
                $('#number-arrow-down').show();
                $('#number-arrow-up').hide();
                $('body').css({'margin-right' : scrollWidth + 'px'}).addClass('show-modal');
                $('#search-icon').toggle();
                $('#big-header-wrap').css({'height' : big_height + 'px'}).show();
                $('#header-wrap').css({'height' : height + 'px'}).show();
                $('#delete-icon').toggle();
                $('#results').toggle();

                $('#main-sort').removeClass('sort-drop');
                $('#sort-up-arrow').hide();
                $('#sort-down-arrow').show();
                $('#drop-sort').removeClass('show-drop');
                $('#right').removeClass('sort-index');


            }).on('focusout', function () {
                $('#search-input').removeClass('focus-search');
                $('body').css({'margin-right' : 0}).removeClass('show-modal');
                $('#search-icon').toggle();
                $('#big-header-wrap').hide();
                $('#header-wrap').hide();
                $('#delete-icon').toggle();
                $('#results').toggle();
            }).on('mouseover', function () {
                $(this).parent().parent('.search').removeClass('search-not-border').addClass('search-border');
                $('#search-icon').css({'color' : 'white'})
            }).on('mouseleave', function () {
                $(this).parent().parent('.search').removeClass('search-border').addClass('search-not-border');
                $('#search-icon').css({'color' : '#6a6a6a'})
            });
        });
    </script>
</body>
</html>
