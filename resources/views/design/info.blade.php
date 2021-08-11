@extends('layouts.design.app')
@include('layouts.design.big-header')
@section('content')
    <div class="info">
        @yield('header')
        <div class="breadcrumbs d-flex px-5 py-3 flex-column flex-sm-row">
            <div>
                <a class="step px-3 pl-xl-4">ИНТЕРНЕТ МАГАЗИН</a>/
            </div>
            <div>
                <a class="step px-3">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a>/
            </div>
            <div>
                <a class="step px-3">ДОСТАВКА</a>
            </div>
        </div>
        <div class="main row m-0">
            <design-info-component></design-info-component>
            {{--<div class="faq col-md-12 mt-5">
                <div class="title text-center">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</div>
                <ul class="nav nav-tabs justify-content-center col-md-12" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="true">ДОСТАВКА</a>
                    </li>
                    <li class="nav-item">
                        /
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pay-tab" data-toggle="tab" href="#pay" role="tab" aria-controls="pay" aria-selected="false">ОПЛАТА</a>
                    </li>
                    <li class="nav-item">
                        /
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="back-tab" data-toggle="tab" href="#back" role="tab" aria-controls="back" aria-selected="false">ВОЗВРАТ</a>
                    </li>
                    <li class="nav-item">
                        /
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="garanty-tab" data-toggle="tab" href="#garanty" role="tab" aria-controls="garanty" aria-selected="false">ГАРАНТИЯ</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                        <div class="px-4">
                            <div class="px-5 row m-0">
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-box"></i></div>
                                    <div class="title">ДОСТАВКА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-money-check-alt"></i></div>
                                    <div class="title">ОПЛАТА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-map-signs"></i></div>
                                    <div class="title">ВОЗВРАТ ТОВАРА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-medal"></i></div>
                                    <div class="title">ГАРАНТИЯ</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pay" role="tabpanel" aria-labelledby="pay-tab">
                        <div class="px-4">
                            <div class="px-5 row m-0">
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-box"></i></div>
                                    <div class="title">ДОСТАВКА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-money-check-alt"></i></div>
                                    <div class="title">ОПЛАТА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-map-signs"></i></div>
                                    <div class="title">ВОЗВТРА ТОВАРА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-medal"></i></div>
                                    <div class="title">ГАРАНТИЯ</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="back" role="tabpanel" aria-labelledby="back-tab">
                        <div class="px-4">
                            <div class="px-5 row m-0">
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-box"></i></div>
                                    <div class="title">ДОСТАВКА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-money-check-alt"></i></div>
                                    <div class="title">ОПЛАТА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-map-signs"></i></div>
                                    <div class="title">ВОЗВТРА ТОВАРА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-medal"></i></div>
                                    <div class="title">ГАРАНТИЯ</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="garanty" role="tabpanel" aria-labelledby="garanty-tab">
                        <div class="px-4">
                            <div class="px-5 row m-0">
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-box"></i></div>
                                    <div class="title">ДОСТАВКА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-money-check-alt"></i></div>
                                    <div class="title">ОПЛАТА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-map-signs"></i></div>
                                    <div class="title">ВОЗВТРА ТОВАРА</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia placeat ut vero! Consequatur exercitationem fugiat impedit officiis, omnis reiciendis repudiandae, similique tempora veniam vitae voluptatem?</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="image text-center py-3"><i class="fas fa-medal"></i></div>
                                    <div class="title">ГАРАНТИЯ</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda blanditiis debitis deleniti deserunt enim, et fugit harum, hic in mollitia odit perspiciatis quae quaerat quisquam sit tempora ut voluptates!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>--}}
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
        <design-carousel-component></design-carousel-component>
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
        @include('layouts.design.footer')
    </div>
@endsection
