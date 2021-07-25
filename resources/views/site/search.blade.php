@extends('layouts.site.layout_with_long_header')
@section('title', $locale == 'ru' ? $page->title_ru : $page->title_uk)

@section('content')

    <site-search-page-component :translate="{{json_encode($translate)}}" :locale="{{json_encode($locale)}}" :query="{{json_encode($query)}}"></site-search-page-component>

<section class="consul">
    <img src="/assets/front/img/consul.png" class="consul__foto">
    <div class="consul__block">
        <h2>ХОЧЕШЬ ПОЛУЧИТЬ ПОЛНУЮ<br> КОНСУЛЬТАЦИЮ О ТОВАРЕ И НОВИНКАХ?</h2>
        <form action="" method="" class="consul__block_input">
            <input type="text" placeholder="Ваш E-Mail">
            <input type="submit" value="Отправить" name="">
        </form>
    </div>
    <img src="/assets/front/img/consul2.png" class="consul__foto2">
</section>
{{--<section class="about">
    <div class="conteiner">
        <h2 class="about__title">ИНТЕРНЕТ МАГАЗИН АКСЕССУАРОВ В УКРАИНЕ – VEIS</h2>
        <p class="about__text">Мы – интернет магазин качественных перчаток и брендовых аксессуаров «Veis» предлагаем широкий ассортимент товаров в наличии. На страницах сайта вы сможете найти кожаные перчатки для женщин и мужчин на любую погоду, автомобильные перчатки, очки, зонты.</p>
        <div class="about__view_more">
            <span>Читать далее</span>
            <img src="/assets/front/img/down.svg">
        </div>
    </div>
</section>--}}
@endsection