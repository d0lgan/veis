@extends('layouts.design.app')
@include('layouts.design.big-header')
@section('content')

    <div class="search">
        @yield('header')
        <div class="breadcrumbs d-flex px-5 py-3 flex-column flex-sm-row">
            <div>
                <a class="step px-3 pl-xl-4">ИНТЕРНЕТ МАГАЗИН</a>/
            </div>
            <div>
                <a class="step px-3">ПЕРЧАТКИ</a>/
            </div>
            <div>
                <a class="step px-3">АВТОМОБИЛЬНЫЕ</a>/
            </div>
            <div>
                <a class="step px-3">МУЖСКИЕ</a>
            </div>
        </div>
        <div class="px-5">
            <div class="px-4">
                <div class="search-top row m-0 d-flex align-items-center py-3">
                    <div class="col-md-3 left p-0 d-flex align-items-center">
                        <img src="{{ asset('images/left-arrow.svg') }}" alt=""><span class="d-inline align-middle">Вернуться обратно</span>
                    </div>
                    <div class="col-md-7 mid d-flex justify-content-sm-center justify-content-md-start">
                        <div class="search-from d-flex align-items-center">
                            ПОИСК ПО СЛОВУ:
                        </div>
                        <div class="word ml-2">АВТОМОБИЛЬНЫЕ</div>
                    </div>
                    <div class="col-md-2 right d-flex justify-content-end p-0">
                        <div class="find d-flex align-items-center">
                            <span>НАЙДЕНО 987</span>
                        </div>
                    </div>
                </div>
                <div class="main row mt-4">
                    <div class="col-sm-12">
                        <div class="row m-0">
                            <div class="col-md-12 row mid">
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="offset-xl-1 filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="filter-product-wrap col-sm-6 col-md-3 col-xl-2 mb-5 p-0">
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
                                            <div class="col-4 p-3 d-flex justify-content-center align-items-center next">
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
                                <div class="col-sm-6 col-md-6 col-xl-2 more d-flex mb-5 flex-column align-items-center">
                                    <div class="number mt-4">
                                        24
                                    </div>
                                    <div class="title text-center">ПОКАЗАТЬ ЕЩЕ</div>
                                    <div class="desc mt-4">
                                        <div class="title text-center">В ЭТОЙ КАТЕГОРИИ</div>
                                        <div class="under text-center">всего 1712 товаров в категории</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 row bottom d-flex justify-content-center align-items-center mb-5">
                        <div class="prev col-sm-3 offset-xl-1 col-xl-2 p-0 d-flex justify-content-center align-items-center">
                            <img src="{{asset('/images/left-arrow.svg')}}" alt="">
                            <span>ПРЕДЫДУЩАЯ</span>
                        </div>
                        <div class="pagination col-sm-6 col-xl-4 d-flex justify-content-center align-items-center">
                            <div class="page d-flex justify-content-center align-items-center">
                                1
                            </div>
                            <div class="page d-flex justify-content-center align-items-center">
                                2
                            </div>
                            <div class="page d-flex justify-content-center align-items-center select">
                                3
                            </div>
                            <div class="page d-flex justify-content-center align-items-center">
                                4
                            </div>
                            <div class="page d-flex justify-content-center align-items-center">
                                5
                            </div>
                            <div class="dots d-flex justify-content-center align-items-center">
                                ...
                            </div>
                            <div class="page d-flex justify-content-center align-items-center">
                                72
                            </div>
                        </div>
                        <div class="next col-sm-3 col-xl-2 p-0 d-flex justify-content-center align-items-center">
                            <span>СЛЕДУЮЩАЯ</span>
                            <img src="{{asset('/images/next.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            <div class="title col-12 px-5 py-4">СТАТЬЯ ДЛЯ ЭТОЙ СТРАНИЦЫ</div>
            <div class="desc col-12 px-5">Мы – интернет магазин качественных перчаток и брендовых аксессуаров "Veis" предлагаем широкий ассортимент товаров в наличии. На страницах сайта вы сможете найти кожаные</div>
            <div class="desc col-12 px-5 collapse multi-collapse" id="more">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur, deleniti dolorum, eveniet ex iure non officia optio placeat quae quam vitae, voluptate. Cumque, repellendus sunt. Aliquid culpa dignissimos doloremque, doloribus enim est hic laborum magnam obcaecati omnis quis quod quos sequi! Commodi doloremque fugiat quod. Consequuntur quod repellat sunt.</div>
            <div class="more-arrow more d-flex justify-content-center col-12" data-toggle="collapse" data-target="#more" aria-expanded="false" aria-controls="more">Читать далее <img src="{{ asset('images/download.svg') }}" alt="" class="ml-1"></div>
        </div>
        @include('layouts.design.footer')
    </div>
@endsection
