@extends('layouts.design.app')
@include('layouts.design.header')
@section('content')
    <div class="order">
        @yield('header')
        <div class="px-5">
            <div class="px-4 row m-0 pt-4">
                <div class="col-md-12 col-xl-6 left p-0">
                    <div class="top pb-3 col-12 p-0">
                        <div class="title">ФОРМА ЗАКАЗА</div>
                        <div class="under">Заполните форму, чтоб мы могли связаться с вами для уточнения заказа.</div>
                    </div>
                    <div class="main row py-4">
                        <div class="col-md-6 col-xl-5">
                            <div class="title mb-2">ИНФОРМАЦИЯ</div>
                            <div class="form-group">
                                <label for="name">Имя*</label>
                                <input id="name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Фамилия</label>
                                <input id="name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Телефон*</label>
                                <input id="phone" type="text" class="form-control phone" placeholder="+38(___)___-__-__">
                            </div>
                            <div class="form-group">
                                <label for="email">Почта</label>
                                <input id="email" type="text" class="form-control">
                            </div>
                            <div class="title mb-2 mt-4">СПОСОБ ОПЛАТЫ</div>
                            <div class="form-group">
                                <label for="delivery">Выберите подходящий для Вас вариант</label>
                                <select name="" id="delivery" class="form-control">
                                    <option value="">В отделении Новой Почты</option>
                                </select>
                            </div>
                            <div class="comment">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae qui, quos! Adipisci beatae enim expedita fuga nostrum quasi saepe, veniam?
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="title mb-2">СПОСОБ ОТПРАВКИ</div>
                            <div class="form-group">
                                <label for="delivery">Вариант доставки</label>
                                <select name="" id="delivery" class="form-control">
                                    <option value="">В отделении Новой Почты</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="delivery">Город</label>
                                <select name="" id="delivery" class="form-control">
                                    <option value="">Город</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="delivery">Отделение Новой Почты</label>
                                <select name="" id="delivery" class="form-control">
                                    <option value="">Отделение Новой Почты</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="com">Ваш комментарий</label>
                                <textarea name="com" id="com" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6 right">
                    <div class="top pb-3 col-12 p-0">
                        <div class="title">ВАШИ ОТОБРАНЫЕ ТОВАРЫ</div>
                        <div class="under">Полный список отобраных товаров, отредактируйте и нажмите кнопку - заказать.</div>
                    </div>
                    <div class="main row pt-2 m-0">
                        <div class="product mt-2 row m-0">
                            <div class="col-sm-7 row m-0 px-0 py-3">
                                <div class="col-12 p-0 title">СУМКА ИЗ НАТУРАЛЬНОЙ КОЖИ</div>
                                <div class="col-12 p-0 vendor mb-5">Polaroid 5687156871</div>
{{--                                <div class="col-12 p-0 change mt-3">Изменить | выбрать другую опцию</div>--}}
                            </div>
                            <div class="col-sm-2 image d-flex p-0 pb-3 justify-content-center align-items-center">
                                <img src="{{ asset('/images/1.png') }}" alt="">
                            </div>
                            <div class="col-sm-3 pr-0 row m-0 d-flex justify-content-around align-items-center">
                                <div class="price col-9 p-0 text-center">4239 грн</div>
                                <div class="delete col-3 p-0 text-right"><i class="fas fa-times-circle"></i></div>
                            </div>
                        </div>
                        <div class="product mt-2 row m-0">
                            <div class="col-sm-7 row m-0 px-0 py-3">
                                <div class="col-12 p-0 title">СУМКА ИЗ НАТУРАЛЬНОЙ КОЖИ</div>
                                <div class="col-12 p-0 vendor mb-5">Polaroid 5687156871</div>
{{--                                <div class="col-12 p-0 change mt-3">Изменить | выбрать другую опцию</div>--}}
                            </div>
                            <div class="col-sm-2 image d-flex p-0 pb-3 justify-content-center align-items-center">
                                <img src="{{ asset('/images/1.png') }}" alt="">
                            </div>
                            <div class="col-sm-3 pr-0 row m-0 d-flex justify-content-around align-items-center">
                                <div class="price col-9 p-0 text-center">4239 грн</div>
                                <div class="delete col-3 p-0 text-right"><i class="fas fa-times-circle"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom row pt-2 m-0">
                        <div class="buy col-md-5 py-2 d-flex justify-content-center align-items-center">
                            <img class="shopping-bag mr-3" src="{{ asset('/images/shopping-bag.svg') }}" alt="">
                            СДЕЛАТЬ ПОКУПКУ
                        </div>
                        <div class="pay col-md-7 row m-0">
                            <div class="col-7 delivery p-0 text-right">Стоимость доставки: </div>
                            <div class="col-5 delivery-pay p-0 text-center">бесплатно</div>
                            <div class="col-7 total p-0 text-right">К ОПЛАТЕ: </div>
                            <div class="col-5 total-price p-0 text-center">19582 грн</div>
                        </div>

                        <div class="col-md-6 back mt-4 py-3 mt-xl-5 py-xl-5 p-0 d-flex align-items-center">
                            <img src="{{ asset('images/left-arrow.svg') }}" alt=""><span class="d-inline align-middle">Вернуться обратно в магазин</span>
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
        @include('layouts.design.footer')
    </div>
@endsection
