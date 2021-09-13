@extends('layouts.design.app')
@include('layouts.design.big-header')
@section('content')
    <div class="main">
        @yield('header')
        <div class="uk-position-relative uk-visible-toggle uk-dark slideshow" tabindex="-1" uk-slideshow="min-height: 300; max-height: 900">
            <ul class="uk-slideshow-items" uk-height-viewport="min-height: 600">
                <li class="row slide">
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1 row text-dark">
                        <div class="title offset-2 col-md-10 d-flex flex-column justify-content-center">
                            <span class="d-block font-weight-bold title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</span>
                            <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea fugiat molestiae porro possimus quas quasi quod rem repellat soluta velit. Cupiditate expedita laudantium libero nostrum officiis provident? </span>
                            <div class="d-flex mt-3">
                                <a href="#" class="left-button">ВСЯ КОЛЛЕКЦИЯ</a>
                                <a href="#" class="right-button ml-3">ВСЯ КОЛЛЕКЦИЯ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 row m-0 order-1 order-lg-2 d-flex justify-content-center align-items-center">
                        <img class="col-lg-10 col-6" src="{{ asset('/images/1.png') }}" alt="">
                    </div>
                </li>
                <li class="row slide">
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1 row text-dark">
                        <div class="title offset-2 col-md-10 d-flex flex-column justify-content-center">
                            <span class="d-block font-weight-bold title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</span>
                            <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea fugiat molestiae porro possimus quas quasi quod rem repellat soluta velit. Cupiditate expedita laudantium libero nostrum officiis provident? </span>
                            <div class="d-flex mt-3">
                                <a href="#" class="left-button">ВСЯ КОЛЛЕКЦИЯ</a>
                                <a href="#" class="right-button ml-3">ВСЯ КОЛЛЕКЦИЯ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 row m-0 order-1 order-lg-2 d-flex justify-content-center align-items-center">
                        <img class="col-lg-10 col-6" src="{{ asset('/images/1.png') }}" alt="">
                    </div>
                </li>
                <li class="row slide">
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1 row text-dark">
                        <div class="title offset-2 col-md-10 d-flex flex-column justify-content-center">
                            <span class="d-block font-weight-bold title">БЕЗУПРЕЧНЫЙ ВИД ВСЕГДА!</span>
                            <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea fugiat molestiae porro possimus quas quasi quod rem repellat soluta velit. Cupiditate expedita laudantium libero nostrum officiis provident? </span>
                            <div class="d-flex mt-3">
                                <a href="#" class="left-button">ВСЯ КОЛЛЕКЦИЯ</a>
                                <a href="#" class="right-button ml-3">ВСЯ КОЛЛЕКЦИЯ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 row m-0 order-1 order-lg-2 d-flex justify-content-center align-items-center">
                        <img class="col-lg-10 col-6" src="{{ asset('/images/1.png') }}" alt="">
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-slidenav-large uk-hidden-hover pl-5" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-slidenav-large uk-hidden-hover pr-5" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>
        <div class="offset-md-1 col-md-10 slider-brand">
            <div uk-slider="autoplay: true; autoplay-interval: 1500; pause-on-hover: true">
                <div class="uk-position-relative">
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-grid">
                            <li>
                                <a  href="#">
                                    AIRTON
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    CHANTAL THOMASS
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    DOPPLER
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    ESPRIT
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    AUTOENJOY
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    BOLON
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    CALVIN KLEIN
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    DIOR
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    RAY BAN
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    R2
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    POLAROID
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    CRATONI
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    BONIS
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    WANLIMA
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12 categories px-5 m-0">
            <div class="col-md-6 pb-4">
                <a class="category d-flex py-4">
                    <div class="image col-md-5 col-xl-6 d-flex justify-content-center align-items-center">
                        <img src="{{asset('images/zont.png')}}" alt="">
                    </div>
                    <div class="text col-md-7 offset-xl-1 col-xl-5 row d-flex justify-content-center">
                        <div class="title col-md-12 col-xl-6 pr-xl-2 d-flex justify-content-sm-center justify-content-xl-end align-items-xl-center align-items-sm-end">ЗОНТЫ</div>
                        <div class="more col-md-12 col-xl-6 pl-xl-2 d-flex justify-content-sm-center justify-content-xl-start align-items-xl-center align-items-sm-start">Подробнее <img src="{{asset('images/next.svg')}}" alt=""></div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 pb-4">
                <a class="category d-flex py-4">
                    <div class="image col-md-5 col-xl-6 d-flex justify-content-center align-items-center">
                        <img src="{{asset('images/sumka.png')}}" alt="">
                    </div>
                    <div class="text col-md-7 offset-xl-1 col-xl-5 row d-flex justify-content-center">
                        <div class="title col-md-12 col-xl-6 pr-2 d-flex justify-content-sm-center justify-content-xl-end align-items-xl-center align-items-sm-end">СУМКИ</div>
                        <div class="more col-md-12 col-xl-6 pl-2 d-flex justify-content-sm-center justify-content-xl-start align-items-xl-center align-items-sm-start">Подробнее <img src="{{asset('images/next.svg')}}" alt=""></div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 pb-4">
                <a class="category d-flex py-4">
                    <div class="image col-md-5 col-xl-6 d-flex justify-content-center align-items-center">
                        <img src="{{asset('images/portfel.png')}}" alt="">
                    </div>
                    <div class="text col-md-7 offset-xl-1 col-xl-5 row d-flex justify-content-center">
                        <div class="title col-md-12 col-xl-6 pr-2 d-flex justify-content-sm-center justify-content-xl-end align-items-xl-center align-items-sm-end">ПОРТФЕЛИ</div>
                        <div class="more col-md-12 col-xl-6 pl-2 d-flex justify-content-sm-center justify-content-xl-start align-items-xl-center align-items-sm-start">Подробнее <img src="{{asset('images/next.svg')}}" alt=""></div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 pb-4">
                <a class="category d-flex py-4">
                    <div class="image col-md-5 col-xl-6 d-flex justify-content-center align-items-center">
                        <img src="{{asset('images/koshelek.png')}}" alt="">
                    </div>
                    <div class="text col-md-7 offset-xl-1 col-xl-5 row d-flex justify-content-center">
                        <div class="title col-md-12 col-xl-6 pr-2 d-flex justify-content-sm-center justify-content-xl-end align-items-xl-center align-items-sm-end">КОШЕЛЬКИ</div>
                        <div class="more col-md-12 col-xl-6 pl-2 d-flex justify-content-sm-center justify-content-xl-start align-items-xl-center align-items-sm-start">Подробнее <img src="{{asset('images/next.svg')}}" alt=""></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="universal col-12 mt-5">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="true">НОВИНКИ</a>
                </li>
                <li class="nav-item">
                    /
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="sell-tab" data-toggle="tab" href="#sell" role="tab" aria-controls="sell" aria-selected="false">РАСПРОДАЖА</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active new" id="new" role="tabpanel" aria-labelledby="new-tab">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
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
                        <div class="tab-pane fade show active" id="gloves" role="tabpanel" aria-labelledby="gloves-tab">
                            <div class="row">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 all-category d-flex justify-content-center">
                                    <a href="#">ПОКАЗАТЬ ВСЕ ПЕРЧАТКИ</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                            <div class="row">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 all-category d-flex justify-content-center">
                                    <a href="#">ПОКАЗАТЬ ВСЕ ПОРТФЕЛИ</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bags" role="tabpanel" aria-labelledby="bags-tab">
                            <div class="row">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 all-category d-flex justify-content-center">
                                    <a href="#">ПОКАЗАТЬ ВСЕ СУМКИ</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="umbrellas" role="tabpanel" aria-labelledby="umbrellas-tab">
                            <div class="row">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 all-category d-flex justify-content-center">
                                    <a href="#">ПОКАЗАТЬ ВСЕ ЗОНТЫ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade sell" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="sell-gloves-tab" data-toggle="tab" href="#sell-gloves" role="tab" aria-controls="sell-gloves" aria-selected="true">ПЕРЧАТКИ</a>
                        </li>
                        <li class="nav-item">
                            /
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sell-portfolio-tab" data-toggle="tab" href="#sell-portfolio" role="tab" aria-controls="sell-portfolio" aria-selected="false">ПОРТФЕЛИ</a>
                        </li>
                        <li class="nav-item">
                            /
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sell-bags-tab" data-toggle="tab" href="#sell-bags" role="tab" aria-controls="sell-bags" aria-selected="false">СУМКИ</a>
                        </li>
                        <li class="nav-item">
                            /
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sell-umbrellas-tab" data-toggle="tab" href="#sell-umbrellas" role="tab" aria-controls="sell-umbrellas" aria-selected="false">ЗОНТЫ</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="sell-gloves" role="tabpanel" aria-labelledby="sell-gloves-tab">
                            <div class="row">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/glaves.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 all-category d-flex justify-content-center">
                                    <a href="#">ПОКАЗАТЬ ВСЕ ПЕРЧАТКИ</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sell-portfolio" role="tabpanel" aria-labelledby="sell-portfolio-tab">
                            <div class="row">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/portfel.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/portfel.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 all-category d-flex justify-content-center">
                                    <a href="#">ПОКАЗАТЬ ВСЕ ПОРТФЕЛИ</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sell-bags" role="tabpanel" aria-labelledby="sell-bags-tab">
                            <div class="row">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/sumka.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/sumka.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 all-category d-flex justify-content-center">
                                    <a href="#">ПОКАЗАТЬ ВСЕ СУМКИ</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sell-umbrellas" role="tabpanel" aria-labelledby="sell-umbrellas-tab">
                            <div class="row">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-3 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/zont.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center">Солнцезащитные очки</div>
                                        <div class="vendor">Polaroid 5687156871</div>
                                        <div class="gallery row m-0 px-3">
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 p-2 d-flex justify-content-center align-items-center">
                                                <img src="{{asset('/images/zont.png')}}" alt="">
                                            </div>
                                            <div class="col-4 d-flex justify-content-center align-items-center next">
                                                <img src="{{asset('/images/next.svg')}}" alt="">
                                            </div>

                                        </div>
                                        <div class="price w-100 d-flex justify-content-center align-items-center flex-column">
                                            <div class="old pt-2"><s>2899 грн</s></div>
                                            <div class="current stock">цена 1699 грн</div>
                                        </div>
                                        <div class="line w-100 row">
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center watch">ПОСМОТРЕТЬ</div>
                                            <div class="col-md-12 col-xl-6 py-1 d-flex align-items-center justify-content-center buy"><img class="shopping-bag mr-2" src="{{asset('/images/shopping-bag.svg')}}" alt="">КУПИТЬ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 all-category d-flex justify-content-center">
                                    <a href="#">ПОКАЗАТЬ ВСЕ ЗОНТЫ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-work p-5">
            <div class="col-12 main py-4">
                <div class="title">
                    КАК МЫ РАБОТАЕМ
                </div>
                <div class="desc p-2">
                    Схема работы нашего магазина, от заказа и до получения товара.
                </div>
                <div class="steps row col-12 m-0 py-4">
                    <div class="col-md-2 step p-0">
                        <div class="image"><i class="fas fa-list-alt"></i></div>
                        <div class="desc">ОСТАВЛЯЕТЕ ЗАЯВКУ</div>
                    </div>
                    <div class="col-md-2 step p-0">
                        <div class="image"><i class="fas fa-phone-volume"></i></div>
                        <div class="desc">МЕНЕДЖЕР ПЕРЕЗВАНИВАЕТ</div>
                    </div>
                    <div class="col-md-2 step p-0">
                        <div class="image"><i class="fas fa-check-double"></i></div>
                        <div class="desc">УТОЧНЯЕМ НАЛИЧИЕ</div>
                    </div>
                    <div class="col-md-2 step p-0">
                        <div class="image"><i class="fas fa-box-open"></i></div>
                        <div class="desc">ФОРМИРУЕМ ОТГРУЖАЕМ</div>
                    </div>
                    <div class="col-md-2 step p-0">
                        <div class="image"><i class="fas fa-truck-loading"></i></div>
                        <div class="desc">ОТПРАВЛЯЕМ ЗАКАЗ</div>
                    </div>
                    <div class="col-md-2 step p-0">
                        <div class="image"><i class="fas fa-child"></i></div>
                        <div class="desc">ПОЛУЧЕНИЕ ТОВАРА</div>
                    </div>
                </div>
            </div>

        </div>
        <design-carousel-component-design></design-carousel-component-design>
        <div class="form d-flex justify-content-center align-items-start pt-5">
            <img class="glaves" src="{{ asset('images/glaves.png') }}" alt="">
            <img class="glasses" src="{{ asset('images/sun_glasses.png') }}" alt="">
            <div class="mailing">
                <div class="title mb-4">ХОЧЕШЬ ПОЛУЧИТЬ ПОЛНУЮ КОНСУЛЬТАЦИЮ О ТОВАРЕ И НОВИНКАХ?</div>
                <div class="input d-flex justify-content-center align-items-center">
                    <input type="text" class="py-2 pl-4" placeholder="Ваш E-Mail">
                    <a class="button px-4 py-2 pr-5">Отправить<img src="{{ asset('/images/white_next.svg') }}" alt="" class="mt-1 ml-3"></a>
                </div>
            </div>

        </div>
        <div class="description row m-0 pt-3">
            <div class="title col-12 px-5 py-4">ИНТЕРНЕТ МАГАЗИН АКСЕССУАРОВ В УКРАИНЕ – VEIS</div>
            <div class="desc col-12 px-5">Мы – интернет магазин качественных перчаток и брендовых аксессуаров "Veis" предлагаем широкий ассортимент товаров в наличии. На страницах сайта вы сможете найти кожаные</div>
            <div class="desc col-12 px-5 collapse multi-collapse" id="more">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur, deleniti dolorum, eveniet ex iure non officia optio placeat quae quam vitae, voluptate. Cumque, repellendus sunt. Aliquid culpa dignissimos doloremque, doloribus enim est hic laborum magnam obcaecati omnis quis quod quos sequi! Commodi doloremque fugiat quod. Consequuntur quod repellat sunt.</div>
            <div class="more-arrow more d-flex justify-content-center col-12" data-toggle="collapse" data-target="#more" aria-expanded="false" aria-controls="more">Читать далее <img src="{{ asset('images/download.svg') }}" alt="" class="ml-1"></div>
        </div>
    </div>

    @include('layouts.design.footer')
@endsection

