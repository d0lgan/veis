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
                            <div class="value">{{ $order->email }}</div>
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
                                <div class="value">{{ $order->comment }}</div>
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
                    <span>+38 (334) 45-54-320</span>
                    <span>+38 (334) 45-54-320</span>
                    <span>+38 (334) 45-54-320</span>
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
                    <span>г. Днепро 49000</span>
                    <span>ул. Солидарная 2</span>
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



