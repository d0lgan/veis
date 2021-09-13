@extends('layouts.design.app')
@include('layouts.design.header')
@section('content')

    <div class="product-card">
        @yield('header')
        <div class="breadcrumbs d-flex px-5 py-3">
            <a class="step px-3 pl-4">ИНТЕРНЕТ МАГАЗИН</a>/
            <a class="step px-3">ПЕРЧАТКИ</a>/
            <a class="step px-3">АВТОМОБИЛЬНЫЕ</a>/
            <a class="step px-3">МУЖСКИЕ</a>
        </div>
        <div class="px-5">
            <div class="px-4">
                <div class="card-top row m-0 d-flex align-items-center">
                    <div class="col-md-6 left p-0 d-flex align-items-center">
                        <img src="{{ asset('images/left-arrow.svg') }}" alt=""><span class="d-inline align-middle">Вернуться обратно</span>
                    </div>
                    <div class="col-md-6 right d-flex justify-content-between p-0">
                        <div class="title">
                            <div class="name">СУМКА ИЗ НАТУРАЛЬНОЙ КОЖИ</div>
                            <div class="vendor">Poladroid 5687156871</div>
                        </div>
                        <div class="stock d-flex align-items-center">
                            <span>АКЦИЯ</span>
                        </div>
                    </div>
                </div>
                <div class="card-main row m-0">
                    <div class="row m-0">
                        <div class="col-md-6 p-5 left d-flex flex-column align-items-center">
                            <div class="main-img w-100 h-auto d-flex align-items-center justify-content-center">
                                <img class="lens" src="{{ asset('/images/lens.svg') }}" alt="">
                                <img class="p-1 " src="{{ asset('images/1.png') }}" alt="">
                            </div>

                            <div class="col-md-11 gallery mt-5 p-1">
                                <div uk-slider>

                                    <div class="uk-position-relative">

                                        <div class="uk-slider-container uk-light">
                                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@s uk-grid">
                                                <li>
                                                    <img src="{{ asset('images/1.png') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('images/1.png') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('images/1.png') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('images/1.png') }}" alt="">
                                                </li>
                                                <li>
                                                    <img src="{{ asset('images/1.png') }}" alt="">
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="uk-hidden@s uk-light">
                                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                        </div>

                                        <div class="uk-visible@s">
                                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 right">
                            <div class="price-stock row py-3">
                                <div class="col-md-6 price">
                                    <div class="current">цена 1699 грн</div>
                                    <div class="old"><s>2899 грн</s></div>
                                </div>
                                <div class="col-xl-6 pr-0 pl-2 d-flex justify-content-end">
                                    <div class="stock d-flex flex-column px-4 py-1 w-100 justify-content-center align-items-center">
                                        <div class="title">Акция закончиться через:</div>
                                        <div class="timer d-flex">
                                            <div class="days">
                                                <div class="number">23</div>
                                                <div class="sub">Дней</div>
                                            </div><span class="px-3">:</span>
                                            <div class="hours">
                                                <div class="number">08</div>
                                                <div class="sub">Часов</div>
                                            </div><span class="px-3">:</span>
                                            <div class="minutes">
                                                <div class="number">55</div>
                                                <div class="sub">Минут</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="buy-how row ml-0 pb-3">
                                <div class="col-xl-5 p-0">
                                    <div id="buy" class="buy">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img class="shopping-bag mr-3" src="{{asset('/images/shopping-bag.svg')}}" alt=""> В КОРЗИНУ
                                            <img class="cursor" src="{{ asset('/images/cursor.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div id="cart" class="cart">
                                        <div class="d-flex justify-content-center align-items-center">
                                            ДОБАВЛЕНО В КОРЗИНУ
                                            <img class="cursor" src="{{ asset('/images/cursor.svg') }}" alt="">
                                        </div>
                                    </div>

                                </div>
                                <div class="offset-xl-1 col-xl-6 mt-md-3 mt-xl-0 p-0 d-flex justify-content-end">
                                    <div class="how w-100 text-center" data-toggle="modal" data-target="#size">
                                        КАК ОПРЕДЕЛИТЬ РАЗМЕР
                                    </div>
                                    <div class="modal fade" id="size" tabindex="-1" role="dialog" aria-labelledby="sizeTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Как определить размер перчатки</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('/images/razmer-perchatok.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="attributes row pt-4 m-0">
                                <div class="col-md-12 title p-0">
                                    <i class="fas fa-angle-double-right"></i> ОПИСАНИЕ ТОВАРА
                                </div>
                                <div class="attribute col-md-12 row p-0 mt-2">
                                    <div class="col-md-3 title">Верх:</div>
                                    <div class="col-md-9 desc">натуральная кожа</div>
                                </div>
                                <div class="attribute col-md-12 row p-0">
                                    <div class="col-md-3 title">Внутри:</div>
                                    <div class="col-md-9 desc">натуральный мех по всей длине и еще по длинее</div>
                                </div>
                                <div class="attribute col-md-12 row p-0">
                                    <div class="col-md-3 title">Подошва:</div>
                                    <div class="col-md-9 desc">термопластичная резина</div>
                                </div>
                                <div class="attribute col-md-12 row p-0">
                                    <div class="col-md-3 title">Коллекция:</div>
                                    <div class="col-md-9 desc">зима 2019/20</div>
                                </div>
                                <div class="attribute col-md-12 row p-0">
                                    <div class="col-md-3 title">Бренд:</div>
                                    <div class="col-md-9 desc">Prego</div>
                                </div>
                                <div class="attribute col-md-12 row p-0">
                                    <div class="col-md-3 title">Цвет:</div>
                                    <div class="col-md-9 desc">черный</div>
                                </div>
                                <div class="attribute col-md-12 row p-0">
                                    <div class="col-md-3 title">Размер:</div>
                                    <div class="col-md-9 desc">соответствует размеру</div>
                                </div>
                            </div>
                            <div class="attributes row pt-4 m-0">
                                <div class="col-md-12 title p-0">
                                    <i class="fas fa-angle-double-right"></i> БЕСПЛАТНАЯ ДОСТАВКА
                                </div>
                                <div class="desc col-md-12 p-0 mt-2">
                                    Доставка товаров при условии оплаты онлайн или по реквизитам в отделении или по указанному адресу курьером "Новой почты".
                                </div>
                            </div>
                            <div class="attributes row pt-4 m-0">
                                <div class="col-md-12 title p-0">
                                    <i class="fas fa-angle-double-right"></i> ВОЗВРАТ И ГАРАНТИЯ
                                    <a href="#" class="more float-right">Подробнее о возвтрате и гарантии</a>
                                </div>
                                <div class="desc col-md-12 p-0 mt-2">
                                    Доставка товаров при условии оплаты онлайн или по реквизитам в отделении или по указанному адресу курьером "Новой почты".
                                </div>
                            </div>
                            <div class="attributes row pt-4 m-0">
                                <div class="col-md-12 title p-0">
                                    <i class="fas fa-angle-double-right"></i> ДОПОЛНИТЕЛЬНОЕ ПОЛЕ
                                </div>
                            </div>

                        </div>
                        <div class="offset-xl-6 col-xl-6 col-md-12 p-0 mt-5">
                            <div class="call d-flex justify-content-center align-items-center p-2 w-100">
                                <i class="fas fa-phone-alt mr-4"></i><span>БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ ПО ЭТОМУ ТОВАРУ</span>
                            </div>

                        </div>
                    </div>

                    <div class="viewed col-md-12 mt-5">
                        <div class="title text-center">НЕДАВНО ПРОСМОТРЕННОЕ</div>
                        <ul class="nav nav-tabs justify-content-center col-md-12" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="gloves-tab" data-toggle="tab" href="#gloves" role="tab" aria-controls="gloves" aria-selected="true">ПЕРЧАТКИ</a>
                            </li>
                            <li class="nav-item">
                                /
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="false">ПОРТФЕЛИ</a>
                            </li>
                            <li class="nav-item">
                                /
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bags-tab" data-toggle="tab" href="#bags" role="tab" aria-controls="bags" aria-selected="false">СУМКИ</a>
                            </li>
                            <li class="nav-item">
                                /
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="umbrellas-tab" data-toggle="tab" href="#umbrellas" role="tab" aria-controls="umbrellas" aria-selected="false">ЗОНТЫ</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="gloves1" role="tabpanel" aria-labelledby="gloves1-tab">
                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                    <design-product-gloves-carousel-component></design-product-gloves-carousel-component>
                                </div>
{{--                                <design-swiper-component></design-swiper-component>--}}
                            </div>
                            <div class="tab-pane fade" id="portfolio1" role="tabpanel" aria-labelledby="portfolio1-tab">
                            </div>
                            <div class="tab-pane fade" id="bags1" role="tabpanel" aria-labelledby="bags1-tab"></div>
                            <div class="tab-pane fade" id="umbrellas1" role="tabpanel" aria-labelledby="umbrellas1-tab"></div>
                        </div>
                    </div>
                    <div class="description row m-0 pt-3">
                        <div class="title col-12 px-5 pb-4 pt-1">СТАТЬЯ ДЛЯ ЭТОЙ СТРАНИЦЫ</div>
                        <div class="desc col-12 px-5">Мы – интернет магазин качественных перчаток и брендовых аксессуаров "Veis" предлагаем широкий ассортимент товаров в наличии. На страницах сайта вы сможете найти кожаные</div>
                        <div class="desc col-12 px-5 collapse multi-collapse" id="more">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur, deleniti dolorum, eveniet ex iure non officia optio placeat quae quam vitae, voluptate. Cumque, repellendus sunt. Aliquid culpa dignissimos doloremque, doloribus enim est hic laborum magnam obcaecati omnis quis quod quos sequi! Commodi doloremque fugiat quod. Consequuntur quod repellat sunt.</div>
                        <div class="more-arrow more d-flex justify-content-center col-12 mt-3" data-toggle="collapse" data-target="#more" aria-expanded="false" aria-controls="more">Читать далее <img src="{{ asset('images/download.svg') }}" alt="" class="ml-1"></div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.design.footer')
    </div>
@endsection
