<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>Страница не найдена</title>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">

</head>

<body>

<section class="notfound">
    <div class="holder notfound__holder">
        {{--<a href="/" class="notfound__logo">
            <img src="{{ asset("assets/front/img/VEIS_COLLECTION.png") }}" alt="">
        </a>
        <img class="notfound__img" src="{{ asset("assets/front/img/404.png") }}" alt="">--}}
        <div class="searchbox">
            <input type="text" placeholder="Введите ваш запрос">
            {{--<button class="search">
                <img src="{{ asset("assets/front/img/search.svg") }}" alt="">
            </button>
            <button class="closer">
                <img src="{{ asset("assets/front/img/close.svg") }}" alt="">
            </button>--}}
        </div>
        <div class="notfound__wrap">
            <h3 class="notfound__title">К сожалению запрашиваемая Вами страница не найдена</h3>
            <p class="notfound__text">через 5 секунд мы перенесем Вас на главную.</p>
        </div>
    </div>
</section>


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