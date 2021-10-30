<!DOCTYPE html>
@php $locale = $__env->yieldContent('locale') @endphp
<html lang="{{ $locale }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112408707-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112408707-3');
    </script>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <meta name="description" content="{{ isset(app()->view->getSections()['meta']) ? trim(app()->view->getSections()['meta'], '<p></p>') : '' }}">
    <link rel="icon" type="image/png" href="https://veis.dp.ua/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" sizes="32x32" href="https://veis.dp.ua/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://veis.dp.ua/apple-touch-icon.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">

    @if($locale == 'ru')
        <link rel="alternate" href="{{ route('setlocale', ['lang' => 'uk']) }}" hreflang="ua">
    @elseif($locale == 'uk')
        <link rel="alternate" href="{{ route('setlocale', ['lang' => 'ru']) }}" hreflang="ru">
    @endif

    <meta name="google-site-verification=PsXb8ortvDDFs4oLiZWmYjLQroo-_mG01IOu7yZdmBI">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">
    @yield('css')
<!-- Google Tag Manager -->

    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PWXDM7L');</script>
    <!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWXDM7L"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="app">

<div class="header">
    <header>
        <div class="conteiner">
            <div class="top__head">
                <nav style="padding-right: 60px">
                    <a href="{{ route('info', ['tab' => 'delivery']) }}">{{ __('site.menu.delivery') }}</a>
                    <a href="{{ route('info', ['tab' => 'pay']) }}">{{ __('site.menu.pay') }}</a>
                    <a href="{{ route('info', ['tab' => 'guarantee']) }}">{{ __('site.menu.guarantee') }}</a>
                    <div class="head__contact">
                        <span>{{ __('site.menu.contacts') }}</span>
                        <img src="{{ asset("assets/front/img/down_white.png") }}">
                    </div>
                    <div class="contact__hide">
                        <div class="contact__iteam">
                            <img src="{{ asset("assets/front/img/kievstar_black.jpg") }}">
                            <a href="tel:380672740200">
                                {{ $phone_site_1 }}
                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="{{ asset("assets/front/img/vodafone_black.jpg") }}">
                            <a href="tel:380952740200">
                                {{ $phone_site_2 }}
                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="{{ asset("assets/front/img/life_black.jpg") }}">
                            <a href="tel:380732740200">
                                {{ $phone_site_3 }}
                            </a>
                        </div>
                        <a href="mailto:dnepr.veis@gmail.com" class="contact__email">{{ $receive_email }}</a>
                        <div class="contact__iteam contact__margin">
                            <img  src="{{ asset("assets/front/img/phone.jpg") }}">
                            <div class="contact__content">
                                <p class="contact__title">{{ __('site.menu.call') }}</p>
                                <p class="contact__text">с 08:00 до 21:00 (пн.-пт.)</p>
                                <p class="contact__text">и с 09.00 до 20:00 (сб,-вс.)</p>
                            </div>
                        </div>
                        <div class="contact__iteam2">
                            <img src="{{ asset("assets/front/img/marker.jpg") }}">
                            <div class="contact__content">
                                <p class="contact__title">{{ __('site.menu.geo') }}</p>
                                <p class="contact__text">{{ $locale == 'uk' ? $address_site_uk : $address_site_ru }}</p>
                                <a href="{{ route('map') }}">{{ __('site.menu.map') }} » </a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="top__head_info">
                    <p class="work__info">{{ __('site.menu.schedule') }}</p>

                    <site-basket-element-component :locale="{{ json_encode(App::getLocale()) }}"></site-basket-element-component>

                    <p class="lang__info"><a href="{{ route('setlocale', ['lang' => 'uk']) }}" class="{{ App::getLocale() == 'uk' ? 'active-language' : '' }}">UA</a> | <a href="{{ route('setlocale', ['lang' => 'ru']) }}" class="{{ App::getLocale() == 'ru' ? 'active-language' : '' }}">RU</a></p>
                </div>
            </div>
            <div class="media__head">

                <site-basket-element-component :locale="{{ json_encode(App::getLocale()) }}"></site-basket-element-component>

                <a href="{{ route('home') }}" class="logo media__head_logo">VEIS<br><span>COLLECTION</span></a>

                <div class="media__head_burger">
                    <span class="top"></span>
                    <span class="center"></span>
                    <span class="bottom"></span>
                    <img src="{{ asset("assets/front/img/down.svg") }}" style="display: none;">
                </div>
            </div>
        </div>
    </header>

    <div class="media__modal">
        <div class="conteiner">
            <div class="media__modal_iteam">
                <a href="{{ route('info', ['tab' => 'delivery']) }}">{{ __('site.menu.delivery') }}</a>
                <a href="{{ route('info', ['tab' => 'pay']) }}">{{ __('site.menu.pay') }}</a>
                <a href="{{ route('info', ['tab' => 'guarantee']) }}">{{ __('site.menu.guarantee') }}</a>
                <div class="head__contact  modal__hide">
                    <span>{{ __('site.menu.contacts') }}</span>
                    <img src="{{ asset("assets/front/img/down_white.png") }}" alt="">
                    <div class="contact__hide">
                        <div class="contact__iteam">
                            <img src="{{ asset("assets/front/img/kievstar_black.jpg") }}">
                            <a href="tel:380672740200">
                                {{ $phone_site_1 }}
                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="{{ asset("assets/front/img/vodafone_black.jpg") }}">
                            <a href="tel:380952740200">
                                {{ $phone_site_2 }}
                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="{{ asset("assets/front/img/life_black.jpg") }}">
                            <a href="tel:380732740200">
                                {{ $phone_site_3 }}
                            </a>
                        </div>
                        <a href="mailto:{{ $receive_email }}" class="contact__email">{{ $receive_email }}</a>
                        <div class="contact__iteam contact__margin">
                            <img src="{{ asset("assets/front/img/phone.jpg") }}">
                            <div class="contact__content">
                                <p class="contact__title">{{ __('site.menu.call') }}</p>
                                <p class="contact__text">с 08:00 до 21:00 (пн.-пт.)</p>
                                <p class="contact__text">и с 09.00 до 20:00 (сб,-вс.)</p>
                            </div>
                        </div>
                        <div class="contact__iteam2">
                            <img src="{{ asset("assets/front/img/marker.jpg") }}">
                            <div class="contact__content">
                                <p class="contact__title">{{ __('site.menu.geo') }}</p>
                                <div class="contact__desktop">
                                    <p class="contact__text">{{ $locale == 'uk' ? $address_site_uk : $address_site_ru }}</p>
                                    <a href="{{ route('map') }}">{{ __('site.menu.map') }} » </a>
                                </div>
                                <div class="contant__tablet">
                                    <a href="#/" class="contact__text">{{ $locale == 'uk' ? $address_site_uk : $address_site_ru }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#/" class="hide__btn">{{ __('site.menu.call_me') }}</a>

            <p class="lang__info"><a href="{{ route('setlocale', ['lang' => 'uk']) }}" class="{{ App::getLocale() == 'uk' ? 'active-language' : '' }}">UA</a> | <a href="{{ route('setlocale', ['lang' => 'ru']) }}" class="{{ App::getLocale() == 'ru' ? 'active-language' : '' }}">RU</a></p>

        </div>
    </div>
    <div class="bottom__head bottom__head--min">
        <div class="conteiner">
            <div class="bottom__block">

                <search-component :locale="{{ json_encode(App::getLocale()) }}"></search-component>

                <a href="{{ route('home') }}" class="logo logo--min media__logo_hide">VEIS<br><span>COLLECTION</span></a>
                <div class="block__number">
                    <div class="head__box">
                        <img class="vodafone__icon" id='foto' src="{{ asset("assets/front/img/kievstar.svg") }}" alt="vodafone">
                        <p id="phone">{{ $phone_site_1 }}</p>
                        <img class="rotate" src="{{ asset("assets/front/img/down_white.png") }}" alt="">
                    </div>
                    <div class="number__hide">
                        <div class="number__block">
                            <a href="tel:380672740200" class="number__iteam">
                                <img class="vodafone__icon" src="{{ asset("assets/front/img/kievstar_black.jpg") }}" alt="vodafone">
                                <p>{{ $phone_site_1 }}</p>
                            </a>
                            <img src="{{ asset("assets/front/img/down.svg") }}" title="Свернуть окно" class="down__icon">
                        </div>
                        <a href="tel:380952740200" class="number__iteam">
                            <img class="vodafone__icon" src="{{ asset("assets/front/img/vodafone_black.jpg") }}" alt="vodafone">
                            <p>{{ $phone_site_2 }}</p>
                        </a>
                        <a href="tel:380732740200" class="number__iteam">
                            <img class="vodafone__icon" src="{{ asset("assets/front/img/life_black.jpg") }}" alt="vodafone">
                            <p>{{ $phone_site_3 }}</p>
                        </a>
                        <a href="#/" class="hide__btn">{{ __('site.menu.call_me') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

<footer>
        <div class="foot__inner">
            <div class="foot__iteam">
                <div class="foot__title">{{ __('site.footer.catalog') }}</div>
                <a href="#/">{{ __('site.footer.female_gloves') }}</a>
                <a href="#/">{{ __('site.footer.male_gloves') }}</a>
                <a href="#/">{{ __('site.footer.female_bags') }}</a>
                <a href="#/">{{ __('site.footer.male_bags') }}</a>
                <a href="#/">{{ __('site.footer.accessories') }}</a>
                <a href="{{ route('catalog', ['f' => 'sontsezakhysni']) }}">{{ __('site.footer.sunglasses') }}</a>
                <a href="#/">{{ __('site.footer.sportglasses') }}</a>
                <a href="#/">{{ __('site.footer.sail') }}</a>
            </div>
            <div class="foot__iteam2">
                <div class="foot__title">{{ __('site.footer.about_magazine') }}</div>
                <a href="{{ route('about') }}">{{ __('site.footer.about_us') }}</a>
                <a href="#/">{{ __('site.footer.articles') }}</a>
                <a href="#/">{{ __('site.footer.replies') }}</a>
                <a href="{{ route('map') }}">{{ __('site.footer.map') }}</a>

                <div class="foot__subtitle">{{ __('site.menu.geo') }}</div>
                <a href="#">{{ $locale == 'uk' ? $address_site_uk : $address_site_ru }}</a>
                <a href="{{ route('map') }}" class="show__map">{{ __('site.menu.map') }} » </a>
            </div>
            <div class="foot__iteam3">
                <div class="foot__title">{{ __('site.footer.buyers') }}</div>
                <a href="{{ route('info', ['tab' => 'delivery']) }}">{{ __('site.menu.delivery') }}</a>
                <a href="{{ route('info', ['tab' => 'pay']) }}">{{ __('site.menu.pay') }}</a>
                <a href="{{ route('info', ['tab' => 'guarantee']) }}">{{ __('site.menu.guarantee') }}</a>
                <a href="{{ route('info', ['tab' => 'return']) }}">{{ __('site.footer.return') }}</a>
                <a href="#/">{{ __('site.footer.accessories_lower') }}</a>
            </div>
            <div class="foot__iteam4">
                <div class="foot__title">{{ __('site.footer.contacts') }}</div>
                <div class="foot__iteam_box">
                    <img src="/assets/front/img/kievstar.svg">
                    <a href="tel:380672740200">{{ $phone_site_1 }}</a>
                </div>
                <div class="foot__iteam_box">
                    <img src="/assets/front/img/vodafone.svg">
                    <a href="tel:380952740200">{{ $phone_site_2 }}</a>
                </div>
                <div class="foot__iteam_box">
                    <img src="/assets/front/img/life.svg">
                    <a href="tel:380732740200">{{ $phone_site_3 }}</a>
                </div>
                <div class="foot__iteam_block">
                    <a href="mailto:{{ $receive_email }}">{{ $receive_email }}</a>

                    <div class="foot__subtitle2">{{ __('site.menu.call') }}</div>
                    <p>с 08:00 до 21:00 (пн.-пт.)</p>
                    <p>с 09.00 до 20:00 (сб,-вс.)</p>
                </div>
            </div>
        </div>
        <div class="media__foot">
            <div class="media__foot_iteam">
                <span>КАТАЛОГ</span>
                <img src="/assets/front/img/down_white.png">
            </div>
            <div class="media__foot_hide">
                <a href="#/">{{ __('site.footer.female_gloves') }}</a>
                <a href="#/">{{ __('site.footer.male_gloves') }}</a>
                <a href="#/">{{ __('site.footer.female_bags') }}</a>
                <a href="#/">{{ __('site.footer.male_bags') }}</a>
                <a href="#/">{{ __('site.footer.accessories') }}</a>
                <a href="{{ route('catalog', ['f' => $locale == 'ru' ? 'solntsezashchitnyye' : 'sontsezakhysni']) }}">{{ __('site.footer.sunglasses') }}</a>
                <a href="#/">{{ __('site.footer.sportglasses') }}</a>
                <a href="#/">{{ __('site.footer.sail') }}</a>
            </div>

            <div class="media__foot_iteam">
                <span>{{ __('site.footer.about_magazine') }}</span>
                <img src="/assets/front/img/down_white.png">
            </div>
            <div class="media__foot_hide">
                <a href="{{ route('about') }}">{{ __('site.footer.about_us') }}</a>
                <a href="#/">{{ __('site.footer.articles') }}</a>
                <a href="#/">{{ __('site.footer.replies') }}</a>
                <a href="{{ route('map') }}">{{ __('site.footer.map') }}</a>
            </div>

            <div class="media__foot_iteam">
                <span>{{ __('site.footer.buyers') }}</span>
                <img src="/assets/front/img/down_white.png">
            </div>
            <div class="media__foot_hide">
                <a href="{{ route('info', ['tab' => 'delivery']) }}">{{ __('site.menu.delivery') }}</a>
                <a href="{{ route('info', ['tab' => 'pay']) }}">{{ __('site.menu.pay') }}</a>
                <a href="{{ route('info', ['tab' => 'guarantee']) }}">{{ __('site.menu.guarantee') }}</a>
                <a href="{{ route('info', ['tab' => 'return']) }}">{{ __('site.footer.return') }}</a>
                <a href="#/">{{ __('site.footer.accessories_lower') }}</a>
            </div>

            <div class="media__foot_iteam">
                <span>{{ __('site.footer.contacts') }}</span>
                <img src="/assets/front/img/down_white.png">
            </div>
            <div class="media__foot_hide">
                <div class="foot__iteam_box">
                    <img src="/assets/front/img/kievstar.svg">
                    <a href="tel:380672740200">{{ $phone_site_1 }}</a>
                </div>
                <div class="foot__iteam_box">
                    <img src="/assets/front/img/vodafone.svg">
                    <a href="tel:380952740200">{{ $phone_site_2 }}</a>
                </div>
                <div class="foot__iteam_box">
                    <img src="/assets/front/img/life.svg">
                    <a href="tel:380732740200">{{ $phone_site_3 }}</a>
                </div>
                <div class="foot__iteam_box">
                    <a href="mailto:{{ $receive_email }}">{{ $receive_email }}</a>
                </div>
            </div>
        </div>
        <div class="foot__down">
            <div class="media__down">
                <div class="foot__logo">VEIS</div>
                <p>© 2017-2021 {{ __('site.footer.copyright') }}</p>
                <p>{{ __('site.footer.social') }} –</p>
            </div>
            <div class="media__social">
                <a href="#/">
                    <img src="/assets/front/img/facebook.png">
                </a>
                <a href="#/">
                    <img src="/assets/front/img/instagram.png">
                </a>
                <a href="#/">
                    <img src="/assets/front/img/telegram.png">
                </a>
                <a href="#/">
                    <img src="/assets/front/img/viber.png">
                </a>
            </div>
        </div>
        <div class="media__foot_info">
            <div class="media__info_iteam">
                <a href="{{ route('home') }}" class="logo media__logo">VEIS<br><span>COLLECTION</span></a>
            </div>
            <div class="media__info_iteam"><a href="#">{{ $locale == 'uk' ? $address_site_uk : $address_site_ru }}</a></div>

            <div class="media__info_iteam">
                © 2017-2021 {{ __('site.footer.copyright') }}
            </div>
        </div>
    </footer>

<div class="black__over"></div>

</div>
<!-- <script type="text/javascript" src="js/jquery.js" defer></script>
-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js?ver=5.5.3" id="range-js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

@yield('js')

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/front.js') }}"></script>

</body>

</html>
