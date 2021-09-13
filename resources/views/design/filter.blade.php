@extends('layouts.design.app')
@include('layouts.design.header')
@section('content')
    <div class="filter">
        @yield('header')
        <div class="breadcrumbs d-flex px-5 py-3">
            <a class="step px-3 pl-4">ИНТЕРНЕТ МАГАЗИН</a>/
            <a class="step px-3">ПЕРЧАТКИ</a>/
            <a class="step px-3">АВТОМОБИЛЬНЫЕ</a>/
            <a class="step px-3">МУЖСКИЕ</a>
        </div>
        <div class="px-5">
                <div class="main row d-flex align-items-start">
                    <div class="col-md-4 col-xl-3 pr-0 left">
                        <div class="categories px-4 mb-4 py-2">
                            <div class="more-arrow main-category d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#cat" aria-expanded="false" aria-controls="cat">
                                <div class="title">ПЕРЧАТКИ</div>
                                <img src="{{asset('/images/download.svg')}}" alt="">
                            </div>
                            <div class="collapse multi-collapse p-0" id="cat">
                                <div class="category">
                                    ОЧКИ
                                </div>
                                <div class="category">
                                    СУМКИ
                                </div>
                                <div class="category">
                                    ЗОНТЫ
                                </div>
                                <div class="category">
                                    ПОРТФЕЛИ
                                </div>
                                <div class="category">
                                    КОШЕЛЬКИ
                                </div>
                            </div>
                        </div>

                        <div class="attributes px-4 py-3 attributes-first">
                            <div class="group mb-3">
                                <div class="more-arrow more-arrow-up title d-flex justify-content-between align-items-center mb-1" data-toggle="collapse" data-target="#attr1" aria-expanded="true" aria-controls="attr1">
                                    <span>ТИП</span>
                                    <img src="{{asset('/images/download.svg')}}" alt="">
                                </div>
                                <div class="collapse multi-collapse show p-0" id="attr1">
                                    <div class="attribute d-flex select">
                                        <div class="title mr-1">АВТОМОБИЛЬНЫЕ</div>/
                                        <div class="count ml-1">32</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">ДЛИННЫЕ</div>/
                                        <div class="count ml-1">10</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">КЛАСИЧЕСКИЕ</div>/
                                        <div class="count ml-1">127</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">МИТЕНКИ</div>/
                                        <div class="count ml-1">11</div>
                                    </div>
                                </div>

                            </div>
                            <div class="group mb-3">
                                <div class="more-arrow more-arrow-up title d-flex justify-content-between align-items-center mb-1" data-toggle="collapse" data-target="#attr2" aria-expanded="true" aria-controls="attr2">
                                    <span>ДЛЯ КОГО</span>
                                    <img src="{{asset('/images/download.svg')}}" alt="">
                                </div>
                                <div class="collapse multi-collapse show p-0" id="attr2">
                                    <div class="attribute d-flex select">
                                        <div class="title mr-1">МУЖСКИЕ</div>/
                                        <div class="count ml-1">999</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">ЖЕНСКИЕ</div>/
                                        <div class="count ml-1">752</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">УНИСЕКС</div>/
                                        <div class="count ml-1">361</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">ДЕТСКИЕ</div>/
                                        <div class="count ml-1">94</div>
                                    </div>
                                </div>

                            </div>
                            <div class="group mb-3">
                                <div class="more-arrow title d-flex justify-content-between align-items-center mb-1" data-toggle="collapse" data-target="#attr3" aria-expanded="false" aria-controls="attr3">
                                    <span>ПРОИЗВОДИТЕЛЬ</span>
                                    <img src="{{asset('/images/download.svg')}}" alt="">
                                </div>
                                <div class="collapse multi-collapse p-0" id="attr3">
                                    <div class="attribute d-flex select">
                                        <div class="title mr-1">AIRTON</div>/
                                        <div class="count ml-1">999</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">DOPPLER</div>/
                                        <div class="count ml-1">752</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">ESPIRT</div>/
                                        <div class="count ml-1">361</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">FARE</div>/
                                        <div class="count ml-1">94</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <design-range-component></design-range-component>
                        <div class="attributes px-4 py-3">
                            <div class="group mb-3">
                                <div class="more-arrow title d-flex justify-content-between align-items-center mb-1" data-toggle="collapse" data-target="#attr4" aria-expanded="false" aria-controls="attr4">
                                    <span>ТИП</span>
                                    <img src="{{asset('/images/download.svg')}}" alt="">
                                </div>
                                <div class="collapse multi-collapse p-0" id="attr4">
                                    <div class="attribute d-flex select">
                                        <div class="title mr-1">АВТОМОБИЛЬНЫЕ</div>/
                                        <div class="count ml-1">32</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">ДЛИННЫЕ</div>/
                                        <div class="count ml-1">10</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">КЛАСИЧЕСКИЕ</div>/
                                        <div class="count ml-1">127</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">МИТЕНКИ</div>/
                                        <div class="count ml-1">11</div>
                                    </div>
                                </div>
                            </div>
                            <div class="group mb-3">
                                <div class="more-arrow title d-flex justify-content-between align-items-center mb-1" data-toggle="collapse" data-target="#attr5" aria-expanded="false" aria-controls="attr5">
                                    <span>ДЛЯ КОГО</span>
                                    <img src="{{asset('/images/download.svg')}}" alt="">
                                </div>
                                <div class="collapse multi-collapse p-0" id="attr5">
                                    <div class="attribute d-flex select">
                                        <div class="title mr-1">МУЖСКИЕ</div>/
                                        <div class="count ml-1">999</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">ЖЕНСКИЕ</div>/
                                        <div class="count ml-1">752</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">УНИСЕКС</div>/
                                        <div class="count ml-1">361</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">ДЕТСКИЕ</div>/
                                        <div class="count ml-1">94</div>
                                    </div>
                                </div>
                            </div>
                            <div class="group mb-3">
                                <div class="more-arrow title d-flex justify-content-between align-items-center mb-1" data-toggle="collapse" data-target="#attr6" aria-expanded="false" aria-controls="attr6">
                                    <span>ПРОИЗВОДИТЕЛЬ</span>
                                    <img src="{{asset('/images/download.svg')}}" alt="">
                                </div>
                                <div class="collapse multi-collapse p-0" id="attr6">
                                    <div class="attribute d-flex select">
                                        <div class="title mr-1">AIRTON</div>/
                                        <div class="count ml-1">999</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">DOPPLER</div>/
                                        <div class="count ml-1">752</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">ESPIRT</div>/
                                        <div class="count ml-1">361</div>
                                    </div>
                                    <div class="attribute d-flex">
                                        <div class="title mr-1">FARE</div>/
                                        <div class="count ml-1">94</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clear px-md-2 px-xl-4 py-3 d-flex justify-content-center align-items-center">
                            <span class="mr-2">СБРОСИТЬ ФИЛЬТР</span> <i class="fas fa-times-circle"></i>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-9 col-md-8 pl-5">
                        <div class="row m-0">
                            <div id="top" class="col-sm-12 col-md-12 top mb-4 py-3 row m-0 px-0 d-flex justify-content-between">
                                <div class="left row m-0 d-flex col-8">
                                    <div class="select-attr d-flex justify-content-center align-items-center mr-3">
                                        <span class="mr-2">АВТОМОБИЛЬНЫЕ</span><i class="fas fa-times-circle"></i>
                                    </div>
                                    <div class="select-attr d-flex justify-content-center align-items-center mr-3">
                                        <span class="mr-2">МУЖСКИЕ</span><i class="fas fa-times-circle"></i>
                                    </div>
                                    <div class="select-attr d-flex justify-content-center align-items-center mr-3">
                                        <span class="mr-2">AIRTON</span><i class="fas fa-times-circle"></i>
                                    </div>
                                    <div class="select-attr d-flex justify-content-center align-items-center mr-3">
                                        <span class="mr-2">БЕЗ ПОДКЛАДКИ</span><i class="fas fa-times-circle"></i>
                                    </div>
                                    <div class="select-attr d-flex justify-content-center align-items-center mr-3">
                                        <span class="mr-2">ОБЛЕГАЮЩИЕ</span><i class="fas fa-times-circle"></i>
                                    </div>
                                </div>

                                <div id="right" class="right col-4 p-0">
                                    <div class="sort">
                                        <div id="main-sort" class="main-sort d-flex justify-content-end align-items-center pr-3">
                                            <span class="mr-3">НОВИНКИ</span><img id="sort-down-arrow" src="{{asset('/images/download.svg')}}" alt=""><img id="sort-up-arrow" src="{{asset('/images/up-arrow.svg')}}" alt="">
                                        </div>
                                        <div id="drop-sort" class="drop row m-0 w-100">
                                            <span>ОТ ДЕШЕВЫХ К ДОРОГИМ</span>
                                            <span>ОТ ДОРОГИХ К ДЕШЕВЫМ</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 row mid">

                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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
                                <div class="filter-product-wrap col-sm-6 col-md-6 col-xl-3 mb-4 p-0">
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                        <div class="angle"></div>
                                    </div>
                                    <div class="filter-product d-flex flex-column align-items-center">
                                        <div class="image d-flex justify-content-center align-items-center py-2">
                                            <img src="{{asset('/images/glaves.png')}}" alt="">
                                        </div>
                                        <div class="title mt-4 text-center px-2">Солнцезащитные очки</div>
                                        <div class="vendor w-100 text-center">Polaroid 5687156871</div>
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


                                <div class="col-sm-6 col-md-6 col-xl-3 more d-flex mb-5 flex-column align-items-center">
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
                    <div class="offset-xl-3 col-xl-9 col-sm-12 row bottom d-flex justify-content-center align-items-center mb-5">
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
