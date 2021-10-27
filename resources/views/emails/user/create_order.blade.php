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

    @php $locale = $__env->yieldContent('locale') @endphp

</head>
<body>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        width: 100%;
        max-width: 1920px;
    }

    .wrap {
        max-width: 920px;
        width: 100%;
        margin: 0 auto;
    }

    .dark-line {
        background-color: #000;
        width: 100%;
        height: 60px;
    }

    .head-wrap {
        display: flex;
        padding: 0 20px;
        justify-content: space-between;
        align-items: center;
        height: 60px;
    }

    .logo-wrap {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo {
        color: #fff;
        font-weight: 850;
        font-size: 28.07px;
        text-align: center;
        line-height: 20px;
        letter-spacing: 13px;
        text-decoration: none !important;
        position: relative;
        z-index: 998; }

    .logo span {
        font-size: 11.08px;
        letter-spacing: 10px;
    }

    .info-block {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .info-block span {
        color: #fff;
        font-size: 14px;
        margin-left: 6px;
    }

    .gray-block {
        padding: 40px 65px;
        display: flex;
        flex-direction: column;
        background-color: #f5f4f5;
        margin-top: 20px;
    }

    .details {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 40px;
    }

    .details-wrap {
        display: flex;
        align-items: center;
    }

    .details-wrap img {
        width: 32px;
        height: 32px;
        margin: 0 10px;
    }

    .details-wrap h1 {
        font-size: 22px;
        font-weight: bold;
    }

    .gray-text {
        color: #7c7c7c;
    }

    .full-list {
        font-size: 15px;
    }

    .ordered-products {
        margin: 20px 0;
    }

    .ordered-products h2 {
        font-size: 24px;
        text-transform: uppercase;
        font-weight: 800;
    }

    .ordered-products span a {
        color: #7c7c7c;
    }

    .products {
        border-bottom: 2px #252529 solid;
        border-top: 2px #252529 solid;
    }

    .product {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px #e6e6e6 solid;
        border-top: 1px #e6e6e6 solid;
    }

    .img_price img {
        height: 90px;
        width: 90px;
    }

    .data .title {
        font-size: 18px;
        text-transform: uppercase;
        font-weight: 800;
    }

    .data .model {
        font-size: 13px;
        margin-bottom: 5px;
    }

    .data .attributes {
        display: flex;
        flex-direction: column;
        font-size: 13px;
    }

    .product .img_price {
        width: 40%;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .img_price span {
        font-size: 18px;
        font-weight: 800;
    }

    .total {
        display: flex;
        justify-content: space-between;
        margin-top: 16px;
    }

    .more {
        width: 33%;
        max-width: 300px;
        height: 55px;
    }

    .btn-more {
        width: 100%;
        height: 100%;
        color: #000;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px #000 solid;
    }

    .btn-more span {
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 700;
        margin: 0 8px;
    }

    .total_price {
        font-size: 21px;
        font-weight: 800;
    }

    .price {
        display: flex;
    }

    .price-row {
        display: flex;
        flex-direction: column;
        margin: 16px 13px;
    }

    .price .left {
        text-align: right;
    }

    .price .right {
        text-align: left;
    }

    .user-data {
        border-top: 2px #252529 solid;
        display: flex;
        padding-top: 30px;
    }

    .user-data .column {
        display: flex;
        flex-direction: column;
        width: 50%;
    }

    .column .cell {
        display: flex;
        justify-content: flex-start;
        font-size: 16px;
        line-height: 19px;
        padding: 6px 5px;
    }

    .column .cell .name {
        max-width: 170px;
        font-weight: 400;
        width: 100%;
        padding-right: 4px;
    }

    .column .cell .value {
        font-weight: 800;
        max-width: 200px;
    }

    /*ФУТЕР*/

    .pre_footer {
        padding: 24px 0;
        display: flex;
        justify-content: space-evenly;
        border-bottom: 2px #252529 solid;
    }

    .pre_footer .column {
        display: flex;
    }

    .pre_footer .column .info {
        display: flex;
        flex-direction: column;
    }

    .pre_footer .column .img {
        margin: 13px 8px 0 0;
    }

    .column .info .title {
        margin-bottom: 5px;
        font-size: 14px;
        font-weight: 800;
    }

    .column .info span {
        font-size: 15px;
        font-weight: 500;
    }

    .media__social {
        padding: 30px 70px;
        width: 100%;
        display: flex;
        justify-content: space-evenly;
    }
</style>

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
                    <span>{{ $phone_site_1 }}</span>
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
                    <h1>Детали Вашего заказа: № {{ $order->id }}</h1>
                </div>
            </div>

            <div class="ordered-products">
                <h2>Ваши заказанные товары</h2>
                <span class="full-list gray-text">Полный список заказанных Вами товаров в нашем интернет-магазине <a href="{{ route('home') }}">veis.dp.ua</a></span>
            </div>

            <div class="products">
                @foreach($products as $product)
                <div class="product">
                    <div class="data">
                        <span class="title">{{ implode(" ", array_slice(explode(" ", $product->title_ru), 0, 2)) }}</span>
                        <div class="model gray-text">{{ implode(" ", array_slice(explode(" ", $product->title_ru), 2)) }}</div>
<!--                        <div class="attributes gray-text">
                            <span>Цвет: Красный</span>
                            <span>Размер: 6</span>
                            <span>Подкладка: Шерсть</span>
                        </div>-->
                    </div>
                    <div class="img_price">
                        <img src="{{ asset("/house/uploads/" . $product->image) }}" alt="" style=" width: 140px; height: 65px; mix-blend-mode: darken; object-fit: contain;">
                        <span>{{ $product->price }} грн</span>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="total">
                <div class="more">
                    <a class="btn-more" href="{{ route('catalog') }}">
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
                        <span class="total_price">{{ $order->total }} грн</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="gray-block">

            <div class="ordered-products">
                <h2>Данные покупателя</h2>
                <span class="full-list gray-text">Кому будет отправлен заказ и каким способом</span>
            </div>

            <div class="user-data">
                <div class="column left">
                    @if(!empty($order->name))
                        <div class="cell">
                            <div class="name">Имя</div>
                            <div class="value">{{ $order->name }}</div>
                        </div>
                    @endif
                    @if(!empty($order->surname))
                        <div class="cell">
                            <div class="name">Фамилия</div>
                            <div class="value">{{ $order->surname }}</div>
                        </div>
                    @endif
                    @if(!empty($order->fatherland))
                        <div class="cell">
                            <div class="name">Отчество</div>
                            <div class="value">{{ $order->fatherland }}</div>
                        </div>
                    @endif
                    @if(!empty($order->phone))
                        <div class="cell">
                            <div class="name">Телефон</div>
                            <div class="value">{{ $order->phone }}</div>
                        </div>
                    @endif
                    @if(!empty($order->name))
                        <div class="cell">
                            <div class="name">Почта</div>
                            <div class="value" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{ $order->email }}</div>
                        </div>
                    @endif
                </div>
                <div class="column right">
                    @if(false)
                        <div class="cell">
                            <div class="name">Доставка</div>
                            <div class="value">{{ $order->email }}</div>
                        </div>
                    @endif
                        @if(!empty($order->city))
                            <div class="cell">
                                <div class="name">Город</div>
                                <div class="value">{{ $order->city }}</div>
                            </div>
                        @endif
                        @if(!empty($order->warehouse))
                            <div class="cell">
                                <div class="name">Отделение</div>
                                <div class="value">{{ $order->warehouse }}</div>
                            </div>
                        @endif
                        @if(!empty($order->comment))
                            <div class="cell">
                                <div class="name">Комментарий</div>
                                <div class="value" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{ $order->comment }}</div>
                            </div>
                        @endif
                        @if(false)
                            <div class="cell">
                                <div class="name">Оплата</div>
                                <div class="value">{{ $order->way_to_pay }}</div>
                            </div>
                        @endif
                </div>

            </div>

        </div>
    </div>
</container>

<footer>
    <div class="wrap">
        <div class="pre_footer">
            <div class="column call">
                <div class="img">
                    <img src="{{ asset("assets/front/img/phone.png") }}" alt="">
                </div>
                <div class="info">
                    <p class="title">Звоните нам</p>
                    <span>{{ $phone_site_1 }}</span>
                    <span>{{ $phone_site_2 }}</span>
                    <span>{{ $phone_site_3 }}</span>
                </div>
            </div>
            <div class="column time">
                <div class="img">
                    <img src="{{ asset("assets/front/img/clock.png") }}" alt="">
                </div>
                <div class="info">
                    <p class="title">График работы</p>
                    <span>08:00 до 21:00 (пн.-пт.)</span>
                    <span>09:00 до 20:00 (сб.-вс.)</span>
                </div>
            </div>
            <div class="column geo">
                <div class="img">
                    <img src="{{ asset("assets/front/img/marker.jpg") }}" alt="">
                </div>
                <div class="info">
                    <p class="title">Мы находимся</p>
                    <span>{{ $locale == 'uk' ? $address_site_uk : $address_site_ru }}</span>
                    <span class="map">Показать на карте &#187;</span>
                </div>
            </div>
        </div>

        <div class="media__social">
            <a href="#/">
                <img src="{{ asset("assets/front/img/facebook-black.png") }}">
            </a>
            <a href="#/">
                <img src="{{ asset("assets/front/img/instagram-black.png") }}">
            </a>
            <a href="#/">
                <img src="{{ asset("assets/front/img/telegram-black.png") }}">
            </a>
            <a href="#/">
                <img src="{{ asset("assets/front/img/viber-black.png") }}">
            </a>
        </div>
    </div>
</footer>

<!--<h1>Уважаемый (-ая) {{$order->name}}</h1>
<hr>

<p>Ваш заказ приянт в обработку! ожидайте звонка</p>-->

{{--<a href="{{route('profile')}}" class="btn btn-info btn-fill btn-wd">Перейти к заказам</a>--}}
</body>
</html>



