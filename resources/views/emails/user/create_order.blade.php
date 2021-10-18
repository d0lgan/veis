<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Магазин SHOP!</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<!--    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">-->
    <link rel="stylesheet" href="{{ asset('assets/front/css/email.css') }}">

</head>
<body>

<div class="header">
    <div class="dark-line">
        <div class="wrap">
            <div class="head-wrap">
                <div class="info-block">
                    <img src="{{ asset('assets/front/img/email__dog.png') }}">
                    <span>{{ $receive_email }}</span>
                </div>
                <div class="logo-wrap">
                    <a href="{{ route('home') }}" class="logo media__head_logo">VEIS<br><span>COLLECTION</span></a>
                </div>
                <div class="info-block">
                    <img src="{{ asset("assets/front/img/vodafone.png") }}" alt="vodafone">
                    <span>{{ $phone_site_2 }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<container>
    <div class="wrap">
        <div class="gray-block">

            <div class="details">
                <div class="details-wrap">
                    <img src="{{ asset("assets/front/img/bag.png") }}" alt="">
                    <span>Детали Вашего заказа: № {{ $order->id }}</span>
                </div>
            </div>

            <div class="ordered-products">
                <h1>Ваши заказанные товары</h1>
                <span class="full-list gray-text">Полный список заказанных Вами товаров в нашем интернет-магазине <a href="{{ route('home') }}">veis.dp.ua</a></span>
            </div>

            <div class="products">
                <div class="product">
                    <div class="data">
                        <span class="title">Сумка из натур кожи</span>
                        <div class="model gray-text">Polaroid 53454534</div>
                        <div class="attributes gray-text">
                            <span>Цвет: Красный</span>
                            <span>Размер: 6</span>
                            <span>Подкладка: Шерсть</span>
                        </div>
                    </div>
                    <div class="img_price">
                        <img src="{{ asset("assets/front/img/brands__foto2.jpg") }}" alt="">
                        <span>4542 грн</span>
                    </div>
                </div>
                <div class="product">
                    <div class="data">
                        <span class="title">Сумка из натур кожи</span>
                        <div class="model gray-text">Polaroid 53454534</div>
                        <div class="attributes gray-text">
                            <span>Цвет: Красный</span>
                            <span>Размер: 6</span>
                            <span>Подкладка: Шерсть</span>
                        </div>
                    </div>
                    <div class="img_price">
                        <img src="{{ asset("assets/front/img/brands__foto2.jpg") }}" alt="">
                        <span>4542 грн</span>
                    </div>
                </div>
            </div>

            <div class="total">
                <div class="more">
                    <a class="btn-more">
                        <span>Купить ещё</span>
                        <img src="{{ asset("assets/front/img/brand__icon.svg") }}" alt="">
                    </a>
                </div>

                <div class="price">
                    <div class="price-row left">
                        <span class="del gray-text">Стоимость доставки:</span>
                        <span class="total_price">К оплате:</span>
                    </div>
                    <div class="price-row right">
                        <span class="del gray-text">бесплатно</span>
                        <span class="total_price">19493 грн</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="gray-block">

<!--                TODO: ДОВЕРСТАТЬ БЛОКИ ДАННЫЕ ПОКУПАТЕЛЯ И ФУТЕР
            + ПРАВКИИИИИИИИИИИИИ-->

        </div>
    </div>
</container>

<!--<h1>Уважаемый (-ая) {{$order->name}}</h1>
<hr>

<p>Ваш заказ приянт в обработку! ожидайте звонка</p>-->

{{--<a href="{{route('profile')}}" class="btn btn-info btn-fill btn-wd">Перейти к заказам</a>--}}
</body>
</html>



