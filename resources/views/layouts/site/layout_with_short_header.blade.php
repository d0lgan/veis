<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">

</head>

<body>
<div id="app">

<div class="header">
    <header>
        <div class="conteiner">
            <div class="top__head">
                <nav>
                    <a href="#/">Доставка</a>
                    <a href="#/">Оплата</a>
                    <a href="#/">Гарантия и возврат</a>
                    <div class="head__contact">
                        <span>Контакты</span>
                        <img src="assets/front/img/down_white.png" alt="down_white.png">
                    </div>
                    <div class="contact__hide">
                        <div class="contact__iteam">
                            <img src="assets/front/img/kievstar_black.jpg">
                            <a href="tel:380672740200">
                                +38 (067) 27-40-200
                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="assets/front/img/vodafone_black.jpg">
                            <a href="tel:380952740200">
                                +38 (095) 27-40-200
                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="assets/front/img/life_black.jpg">
                            <a href="tel:380732740200">
                                +38 (073) 27-40-200
                            </a>
                        </div>
                        <a href="mailto:dnepr.veis@gmail.com" class="contact__email">dnepr.veis@gmail.com</a>
                        <div class="contact__iteam contact__margin">
                            <img  src="assets/front/img/phone.jpg">
                            <div class="contact__content">
                                <p class="contact__title">Звоните нам</p>
                                <p class="contact__text">с 08:00 до 21:00 (пн.-пт.)</p>
                                <p class="contact__text">и с 09.00 до 20:00 (сб,-вс.)</p>
                            </div>
                        </div>
                        <div class="contact__iteam2">
                            <img src="assets/front/img/marker.jpg">
                            <div class="contact__content">
                                <p class="contact__title">Мы находимся:</p>
                                <p class="contact__text">г. Днепро 49000 ул. Солидарная 2</p>
                                <a href="#/">Показать на карте » </a>
                            </div>
                        </div>
                    </div>
                    <a href="#/">Блог</a>
                </nav>
                <div class="top__head_info">
                    <p class="work__info">График работы с 08 – 21 (пн.-пт.) и с 09 – 20 (сб.-вс.) </p>
                    <img class="cart__icon" src="assets/front/img/cart.svg">
                    <p class="lang__info"><a href="#/">UA</a> | <a href="#/">RU</a></p>
                </div>
            </div>
            <div class="media__head">
                <div class="media__head_cart">
                    <img src="assets/front/img/cart.svg">
                    <span>5</span>
                </div>

                <a href="index.html" class="logo media__head_logo">VEIS<br><span>COLLECTION</span></a>

                <div class="media__head_burger">
                    <span class="top"></span>
                    <span class="center"></span>
                    <span class="bottom"></span>
                    <img src="assets/front/img/down.svg" style="display: none;">
                </div>
            </div>
        </div>
    </header>

    <div class="media__modal">
        <div class="conteiner">
            <div class="media__modal_iteam">
                <a href="#/">Доставка</a>
                <a href="#/">Оплата</a>
                <a href="#/">Гарантия и возврат</a>
                <div class="head__contact  modal__hide">
                    <span>Контакты</span>
                    <img src="assets/front/img/down_white.png" alt="">
                    <div class="contact__hide">
                        <div class="contact__iteam">
                            <img src="assets/front/img/kievstar_black.jpg">
                            <a href="tel:380672740200">
                                +38 (067) 27-40-200
                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="assets/front/img/vodafone_black.jpg">
                            <a href="tel:380952740200">
                                +38 (095) 27-40-200
                            </a>
                        </div>
                        <div class="contact__iteam">
                            <img src="assets/front/img/life_black.jpg">
                            <a href="tel:380732740200">
                                +38 (073) 27-40-200
                            </a>
                        </div>
                        <a href="mailto:dnepr.veis@gmail.com" class="contact__email">dnepr.veis@gmail.com</a>
                        <div class="contact__iteam contact__margin">
                            <img src="assets/front/img/phone.jpg">
                            <div class="contact__content">
                                <p class="contact__title">Звоните нам</p>
                                <p class="contact__text">с 08:00 до 21:00 (пн.-пт.)</p>
                                <p class="contact__text">и с 09.00 до 20:00 (сб,-вс.)</p>
                            </div>
                        </div>
                        <div class="contact__iteam2">
                            <img src="assets/front/img/marker.jpg">
                            <div class="contact__content">
                                <p class="contact__title">Мы находимся:</p>
                                <div class="contact__desktop">
                                    <p class="contact__text">г. Днепро 49000 ул. Солидарная 2</p>
                                    <a href="#/">Показать на карте » </a>
                                </div>
                                <div class="contant__tablet">
                                    <a href="#/" class="contact__text">г. Днепро 49000 ул. Солидарная 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#/">Блог</a>
            </div>
            <a href="#/" class="hide__btn">перезвоните мне</a>
        </div>
    </div>
    <div class="bottom__head bottom__head--min">
        <div class="conteiner">
            <div class="bottom__block">
                <div class="map__head_input head__search">
                    <input id="head__input" type="text" placeholder="Введите ваш запрос">

                    <svg id="seacrh" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
                    <img class="close__icon" src="assets/front/img/close.svg" alt="close">

                    <div class="head__hide">
                        <p>САПОГИ ЗИМНИЕ НА КАБЛУКЕ</p>
                        <p>БОТИНКИ ЗИМНИЕ НА НИЗКОМ ХОДУ</p>
                        <p>ТУФЛИ НА КАБЛУКЕ</p>
                        <p>ТУФЛИ НА КАБЛУКЕ ВЫСОКОМ</p>
                        <div class="head__btn">посмотреть все результаты 987</div>
                    </div>
                </div>
                <a href="index.html" class="logo logo--min media__logo_hide">VEIS<br><span>COLLECTION</span></a>
                <div class="block__number">
                    <div class="head__box">
                        <img class="vodafone__icon" id='foto' src="assets/front/img/kievstar.svg" alt="vodafone">
                        <p id="phone">+38 (067) 27-40-200</p>
                        <img class="rotate" src="assets/front/img/down_white.png" alt="">
                    </div>
                    <div class="number__hide">
                        <div class="number__block">
                            <a href="tel:380672740200" class="number__iteam">
                                <img class="vodafone__icon" src="assets/front/img/kievstar_black.jpg" alt="vodafone">
                                <p>+38 (067) 27-40-200</p>
                            </a>
                            <img src="assets/front/img/down.svg" title="Свернуть окно" class="down__icon">
                        </div>
                        <a href="tel:380952740200" class="number__iteam">
                            <img class="vodafone__icon" src="assets/front/img/vodafone_black.jpg" alt="vodafone">
                            <p>+38 (095) 27-40-200</p>
                        </a>
                        <a href="tel:380732740200" class="number__iteam">
                            <img class="vodafone__icon" src="assets/front/img/life_black.jpg" alt="vodafone">
                            <p>+38 (073) 27-40-200</p>
                        </a>
                        <a href="#/" class="hide__btn">перезвоните мне</a>
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
            <div class="foot__title">КАТАЛОГ</div>
            <a href="#/">ЖЕНСКИЕ ПЕРЧАТКИ</a>
            <a href="#/">МУЖСКИЕ ПЕРЧАТКИ</a>
            <a href="#/">СУМКИ ЖЕНСКИЕ</a>
            <a href="#/">СУМКИ МУЖСКИЕ</a>
            <a href="#/">АКСЕССУАРЫ</a>
            <a href="#/">ОЧКИ СОЛНЦЕЗАЩИТНЫЕ </a>
            <a href="#/">ОЧКИ СПОРТИВНЫЕ</a>
            <a href="#/">АКЦИЯ</a>
        </div>
        <div class="foot__iteam2">
            <div class="foot__title">О МАГАЗИНЕ</div>
            <a href="#/">О нас</a>
            <a href="#/">Статьи</a>
            <a href="#/">Отзывы</a>
            <a href="#/">Карта сайта</a>

            <div class="foot__subtitle">Мы находимся:</div>
            <a href="#">г. Днепро 49000 ул. Солидарная 2</a>
            <a href="#/" class="show__map">Показать на карте » </a>
        </div>
        <div class="foot__iteam3">
            <div class="foot__title">ПОКУПАТЕЛЯМ</div>
            <a href="#/">Доставка</a>
            <a href="#/">Оплата</a>
            <a href="#/">Гарантия</a>
            <a href="#/">Возврат</a>
            <a href="#/">Аксессуары</a>
        </div>
        <div class="foot__iteam4">
            <div class="foot__title">КОНТАКТЫ</div>
            <div class="foot__iteam_box">
                <img src="assets/front/img/kievstar.svg">
                <a href="tel:380672740200">+38 (067) 27-40-200</a>
            </div>
            <div class="foot__iteam_box">
                <img src="assets/front/img/vodafone.svg">
                <a href="tel:380952740200">+38 (095) 27-40-200</a>
            </div>
            <div class="foot__iteam_box">
                <img src="assets/front/img/life.svg">
                <a href="tel:380732740200">+38 (073) 27-40-200</a>
            </div>
            <div class="foot__iteam_block">
                <a href="mailto:dnepr.veis@gmail.com">dnepr.veis@gmail.com</a>

                <div class="foot__subtitle2">Звоните нам:</div>
                <p>с 08:00 до 21:00 (пн.-пт.)</p>
                <p>с 09.00 до 20:00 (сб,-вс.)</p>
            </div>
        </div>
    </div>
    <div class="media__foot">
        <div class="media__foot_iteam">
            <span>КАТАЛОГ</span>
            <img src="assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <a href="#/">ЖЕНСКИЕ ПЕРЧАТКИ</a>
            <a href="#/">МУЖСКИЕ ПЕРЧАТКИ</a>
            <a href="#/">СУМКИ ЖЕНСКИЕ</a>
            <a href="#/">СУМКИ МУЖСКИЕ</a>
            <a href="#/">АКСЕССУАРЫ</a>
            <a href="#/">ОЧКИ СОЛНЦЕЗАЩИТНЫЕ </a>
            <a href="#/">ОЧКИ СПОРТИВНЫЕ</a>
            <a href="#/">АКЦИЯ</a>
        </div>

        <div class="media__foot_iteam">
            <span>О МАГАЗИНЕ</span>
            <img src="assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <a href="#/">О нас</a>
            <a href="#/">Статьи</a>
            <a href="#/">Отзывы</a>
            <a href="#/">Карта сайта</a>
        </div>

        <div class="media__foot_iteam">
            <span>ПОКУПАТЕЛЯМ</span>
            <img src="assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <a href="#/">Доставка</a>
            <a href="#/">Оплата</a>
            <a href="#/">Гарантия</a>
            <a href="#/">Возврат</a>
            <a href="#/">Аксессуары</a>
        </div>

        <div class="media__foot_iteam">
            <span>КОНТАКТЫ</span>
            <img src="assets/front/img/down_white.png">
        </div>
        <div class="media__foot_hide">
            <div class="foot__iteam_box">
                <img src="assets/front/img/kievstar.svg">
                <a href="tel:380672740200">+38 (067) 27-40-200</a>
            </div>
            <div class="foot__iteam_box">
                <img src="assets/front/img/vodafone.svg">
                <a href="tel:380952740200">+38 (095) 27-40-200</a>
            </div>
            <div class="foot__iteam_box">
                <img src="assets/front/img/life.svg">
                <a href="tel:380732740200">+38 (073) 27-40-200</a>
            </div>
            <div class="foot__iteam_box">
                <a href="mailto:dnepr.veis@gmail.com">dnepr.veis@gmail.com</a>
            </div>
        </div>
    </div>
    <div class="foot__down">
        <div class="media__down">
            <div class="foot__logo">VEIS</div>
            <p>© 2017-2020 ИНТЕРНЕТ МАГАЗИН VEIS ВСЕ ПРАВА ЗАЩИЩЕНЫ</p>
            <p>Мы в социальных сетях –</p>
        </div>
        <div class="media__social">
            <a href="#/">
                <img src="assets/front/img/facebook.png">
            </a>
            <a href="#/">
                <img src="assets/front/img/instagram.png">
            </a>
            <a href="#/">
                <img src="assets/front/img/telegram.png">
            </a>
            <a href="#/">
                <img src="assets/front/img/viber.png">
            </a>
        </div>
    </div>
    <div class="media__foot_info">
        <div class="media__info_iteam">
            <a href="index.html" class="logo media__logo">VEIS<br><span>COLLECTION</span></a>
        </div>
        <div class="media__info_iteam"><a href="#">г. Днепро 49000 ул. Солидарная 2</a></div>

        <div class="media__info_iteam">
            © 2017-2020 ИНТЕРНЕТ МАГАЗИН VEIS ВСЕ ПРАВА ЗАЩИЩЕНЫ
        </div>
    </div>
</footer>

<div class="black__over"></div>

</div>
<script src="{{ asset('js/app.js') }}"></script>
<!-- <script type="text/javascript" src="js/jquery.js" defer></script>
-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js?ver=5.5.3" id="range-js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="{{ asset('assets/front/js/front.js') }}"></script>




</body>

</html>