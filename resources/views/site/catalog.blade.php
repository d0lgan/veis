@extends('layouts.site.layout_with_short_header')

@section('title', 'Каталог - Veis')

@section('content')
    <div class="catalog__btns">
        <button class="catalog__btns-item" data-filters-opener>
            ФИЛЬТР
            <img src="/assets/front/img/sliders-h.png" alt="">
        </button>
        <div class="catalog__btns-item mob-select-btn">
            <select>
                <option value="" hidden selected>СОРТИРОВАТЬ</option>
                <option value="">
                    НОВИНКИ
                </option>
                <option value="">
                    ОТ ДЕШЕВЫХ К ДОРОГИМ
                </option>
                <option value="">
                    ОТ ДОРОГИХ К ДЕШЕВЫМ
                </option>
            </select>
            <img src=" /img/sort.png" alt="">

        </div>

        </button>
    </div>

    <div class="breadcrumbs">
        <div class="conteiner">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">ИНТЕРНЕТ МАГАЗИН</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">ПЕРЧАТКИ </a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">АВТОМОБИЛЬНЫЕ </a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">МУЖСКИЕ</a>
                </li>

            </ul>
        </div>
    </div>

    <site-catalog-component></site-catalog-component>

    <section class="consul">
        <img src="assets/front/img/consul.png" class="consul__foto">
        <div class="consul__block">
            <h2>ХОЧЕШЬ ПОЛУЧИТЬ ПОЛНУЮ<br> КОНСУЛЬТАЦИЮ О ТОВАРЕ И НОВИНКАХ?</h2>
            <form action="" method="" class="consul__block_input">
                <input type="text" placeholder="Ваш E-Mail">
                <input type="submit" value="Отправить" name="">
            </form>
        </div>
        <img src="assets/front/img/consul2.png" class="consul__foto2">
    </section>
    <section class="about">
        <div class="conteiner">
            <h2 class="about__title">ИНТЕРНЕТ МАГАЗИН АКСЕССУАРОВ В УКРАИНЕ – VEIS</h2>
            <p class="about__text">Мы – интернет магазин качественных перчаток и брендовых аксессуаров «Veis» предлагаем широкий ассортимент товаров в наличии. На страницах сайта вы сможете найти кожаные перчатки для женщин и мужчин на любую погоду, автомобильные перчатки, очки, зонты.</p>
            <div class="about__view_more">
                <span>Читать далее</span>
                <img src="assets/front/img/down.svg">
            </div>
        </div>
    </section>
@endsection