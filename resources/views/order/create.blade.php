@extends('layouts.admin.app')
@section('content')
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h2 class="sub-header">Создание Заказа</h2>
                        <div class="col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12 border border-secondary mt-4 position-relative p-3"
                                         style="height: 280px;">
                                        <h4 class="position-absolute" style="background: white; top: -20px;">Данные
                                            заказа</h4>
                                        <div class="form-group">
                                            <label for="user">Выбрать клиента</label>
                                            <input type="text" id="user" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12 border border-secondary mt-4 position-relative p-3"
                                         style="height: 280px;">
                                        <h4 class="position-absolute" style="background: white; top: -20px;">
                                            Доставка</h4>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <input type="radio" checked name="radio" id="radio1">
                                                <label for="radio1">Перевозчик</label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="radio" name="radio" id="radio2">
                                                <label for="radio2">Самовывоз</label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="radio" name="radio" id="radio3">
                                                <label for="radio3">Другое</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="trans">Перевозчик</label>
                                                <select name="trans" id="trans" class="form-control">
                                                    <option value="">Новая почта</option>
                                                    <option value="">Укрпочта</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="city">Город</label>
                                                <select name="trans" id="city" class="form-control">
                                                    <option value="">Киев</option>
                                                    <option value="">Харьков</option>
                                                    <option value="">Нью-Йорк</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="sklad">Склад</label>
                                                <select name="trans" id="sklad" class="form-control">
                                                    <option value="">Киев, Дарнцкий р-н, Отделение №5</option>
                                                    <option value="">Киев, Дарнцкий р-н, Отделение №5</option>
                                                    <option value="">Киев, Дарнцкий р-н, Отделение №5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12 border border-secondary mt-4 position-relative p-3">
                                        <h4 class="position-absolute" style="background: white; top: -20px;">Товары</h4>
                                        <div class="form-group col-md-12">
                                            <label for="search">Поиск товара</label>
                                            <input type="text" id="search" class="form-control">
                                        </div>
                                        <div class="col-md-12 border border-secondary p-3 mt-2">
                                            <div class="col-md-8">Очки Polaroid | 1 шт</div>
                                            <div class="col-md-3">250 грн</div>
                                            <div class="col-md-1 border border-secondary">X</div>
                                        </div>
                                        <div class="col-md-12 border border-secondary p-3 mt-2">
                                            <div class="col-md-8">Очки Polaroid | 1 шт</div>
                                            <div class="col-md-3">250 грн</div>
                                            <div class="col-md-1 border border-secondary">X</div>
                                        </div>
                                        <div class="col-md-12 border border-secondary p-3 mt-2">
                                            <div class="col-md-8">Очки Polaroid | 1 шт</div>
                                            <div class="col-md-3">250 грн</div>
                                            <div class="col-md-1 border border-secondary">X</div>
                                        </div>
                                        <div class="col-md-12 border border-secondary p-3 mt-2">
                                            <div class="col-md-8">Очки Polaroid | 1 шт</div>
                                            <div class="col-md-3">250 грн</div>
                                            <div class="col-md-1 border border-secondary">X</div>
                                        </div>
                                        <div class="col-md-4 offset-8 mt-2">Итого: 1000грн</div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12 border border-secondary mt-4 position-relative p-3">
                                        <h4 class="position-absolute" style="background: white; top: -20px;">Оплата</h4>
                                        <div class="form-group">
                                            <label for="pay">Вид оплаты</label>
                                            <select name="pay" id="pay" class="form-control">
                                                <option value="">Наличными при получении</option>
                                                <option value="">Наличными при получении</option>
                                                <option value="">Наличными при получении</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 border border-secondary mt-4 position-relative p-3">
                                        <h4 class="position-absolute" style="background: white; top: -20px;">Коментарий</h4>
                                        <div class="col-md-12 py-3">
                                            Идейные соображения высшего порядка, а также новая модель организационной деятельности позволяет оценить значение соответствующий условий активизации. Товарищи! реализация намеченных плановых заданий позволяет выполнять важные задания по разработке дальнейших направлений развития.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <div class="form-group">
                                            <select name="stat" id="stat" class="form-control">
                                                <option value="">В работе</option>
                                                <option value="">Ожидает</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 offset-2 mt-4">
                                        <div class="btn btn-primary px-5">Обновить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection