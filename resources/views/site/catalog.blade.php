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
    <section class="catalog">
        <div class="holder catalog__holder">
            <div class="catalog-filters">
                <div class="catalog__btns">
                    <button class="catalog__btns-item" data-filters-closer>
                        ОТМЕНА
                    </button>
                    <button class="catalog__btns-item">
                        ПРИМЕНИТЬ
                    </button>
                </div>
                <div class="catalog-filters__box">
                    <div class="catalog-filters__block catalog-filters__block--mainlinks">
                        <div class="catalog-filters__block-head activee">
                            <p class="catalog-filters__type">ПЕРЧАТКИ</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"></path></g></g></svg>
                        </div>
                        <div style="display: none;" class="catalog-filters__block-body">
                            <a href="#" class="catalog-filters__type">ОЧКИ</a>
                            <a href="#" class="catalog-filters__type">ЗОНТЫ</a>
                            <a href="#" class="catalog-filters__type">СУМКИ</a>
                            <a href="#" class="catalog-filters__type">ПОРТФЕЛИ</a>
                            <a href="#" class="catalog-filters__type">КОШЕЛЬКИ</a>
                        </div>
                    </div>

                </div>
                <div class="catalog-filters__box">
                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>ТИП</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body" style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">АВТОМОБИЛЬНЫЕ</span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ДЛИННЫЕ </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">КЛАССИЧЕСКИЕ </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">АВМИТЕНКИ ТОМОБИЛЬНЫЕ</span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>
                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>ТИП</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body"  style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">АВТОМОБИЛЬНЫЕ</span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ДЛИННЫЕ </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">КЛАССИЧЕСКИЕ </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">АВМИТЕНКИ ТОМОБИЛЬНЫЕ</span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>

                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>ДЛЯ КОГО</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body"  style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">МУЖСКИЕ </span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ЖЕНСКИЕ </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">УНИСЕКС  </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ДЕТСКИЕ </span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>

                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>ПРОИЗВОДИТЕЛЬ</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body"  style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">AIRTON  </span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">DOPPLER  </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ESPRIT  </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">FARE </span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>
                </div>

                <div class="catalog-filters__slider">
                    <p class="catalog-filters__slider-title">
                        ЦЕНА
                    </p>
                    <div class="catalog-filters__slider-box">
                        <span class="catalog-filters__slider-val catalog-filters__slider-val--min">1175</span>
                        <div id="slider-range" class="catalog-filters__slider-slider"></div>
                        <span class="catalog-filters__slider-val catalog-filters__slider-val--max">8500</span>
                    </div>

                </div>
                <label class="catalog-filters__radio">
                    <div class="radio">
                        <input type="checkbox">
                        <span></span>
                    </div>
                    товар по акции
                </label>


                <div class="catalog-filters__box">
                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>ФОРМА ОПРАВЫ</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body"  style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ОБЛЕГАЮЩИЕ</span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ПРЯМОУГОЛЬНЫЕ  </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">КВАДРАТНЫЕ  </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">МАСКА </span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>

                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>ДЛЯ КОГО</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body"  style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">МУЖСКИЕ </span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ЖЕНСКИЕ </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">УНИСЕКС  </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ДЕТСКИЕ </span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>

                    <div class="catalog-filters__block">
                        <div class="catalog-filters__block-head activee">
                            <span>ТЕГИ</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                        </div>
                        <div class="catalog-filters__block-body"  style="display: none;">
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ЗИМА   </span> /
                                <span class="catalog-filters__item-num">32</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ОСЕНЬ   </span> /
                                <span class="catalog-filters__item-num">43</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ЛЕТО  </span> /
                                <span class="catalog-filters__item-num">11</span>
                            </label>
                            <label class="catalog-filters__item">
                                <input name="type" type="checkbox">
                                <span class="catalog-filters__item-name">ВЕСНА </span> /
                                <span class="catalog-filters__item-num">23</span>
                            </label>

                        </div>
                    </div>
                </div>

                <button class="catalog__clear">Сбросить фильтр
                    <img src="assets/front/img/close-tag.png" alt="">
                </button>
            </div>

            <div class="catalog__box">
                <div class="catalog__head">
                    <div class="catalog__tags">
                        <div class="catalog__tag">
                            <span class="catalog__tag-text">АВТОМОБИЛЬНЫЕ</span>
                            <img src="assets/front/img/close-tag.png" alt="">
                        </div>
                        <div class="catalog__tag">
                            <span class="catalog__tag-text">МУЖСКИЕ</span>
                            <img src="assets/front/img/close-tag.png" alt="">
                        </div>
                        <div class="catalog__tag">
                            <span class="catalog__tag-text">AIRTON</span>
                            <img src="assets/front/img/close-tag.png" alt="">
                        </div>
                        <div class="catalog__tag">
                            <span class="catalog__tag-text">БЕЗ ПОДКЛАДКИ</span>
                            <img src="assets/front/img/close-tag.png" alt="">
                        </div>
                        <div class="catalog__tag">
                            <span class="catalog__tag-text">ОБЛЕГАЮЩИЕ</span>
                            <img src="assets/front/img/close-tag.png" alt="">
                        </div>

                    </div>

                    <div class="catalog__sorter">
                        <div class="select_mate" data-mate-select="active">
                            <select name="" onchange="" onclick="return false;" id="">
                                <option value=""> НОВИНКИ</option>
                                <option value="1">ОТ ДЕШЕВЫХ К ДОРОГИМ</option>
                                <option value="2">ОТ ДОРОГИХ К ДЕШЕВЫМ</option>
                            </select>
                            <p class="selecionado_opcion" onclick="open_select(this)"></p><span onclick="open_select(this)"
                                                                                                class="icon_select_mate">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.102 0l9.9 7.575 9.886-7.52.11.25-9.778 7.437.004.003-.11.252L10 7.91l-.043.033-.044-.099z"/></g></g></svg></span>
                            <div class="cont_list_select_mate">
                                <ul class="cont_select_int"> </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog__products">


                    <div class="product__iteam">
                        <img src="assets/front/img/product__foto.png">

                        <p class="product__text">Сумка из натуральной кожи</p>
                        <p class="product__number">020265, цвет голубой</p>
                        <p class="product__prise">цена 1699 грн</p>

                        <div class="product__foto_btn">New</div>

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto2.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto3.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto4.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <div class="product__icon_box">
                                        <img class="product__hide_icon" src="assets/front/img/next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product__hide_prise">
                                цена 1699 грн
                            </div>
                            <div class="product__hide_box">
                                <a href="#/">посмотреть</a>

                                <div class="product__cart_box">
                                    <img src="assets/front/img/cart.svg" alt="">
                                    <a href="#/">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__iteam">
                        <img src="assets/front/img/product__foto.png">

                        <p class="product__text">Сумка из натуральной кожи</p>
                        <p class="product__number">020265, цвет голубой</p>
                        <p class="product__prise">цена 1699 грн</p>

                        <div class="product__foto_btn">New</div>

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto2.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto3.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto4.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <div class="product__icon_box">
                                        <img class="product__hide_icon" src="assets/front/img/next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product__hide_prise">
                                цена 1699 грн
                            </div>
                            <div class="product__hide_box">
                                <a href="#/">посмотреть</a>

                                <div class="product__cart_box">
                                    <img src="assets/front/img/cart.svg" alt="">
                                    <a href="#/">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__iteam">
                        <img src="assets/front/img/product__foto.png">

                        <p class="product__text">Сумка из натуральной кожи</p>
                        <p class="product__number">020265, цвет голубой</p>
                        <p class="product__prise">цена 1699 грн</p>

                        <div class="product__foto_btn">New</div>

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto2.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto3.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto4.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <div class="product__icon_box">
                                        <img class="product__hide_icon" src="assets/front/img/next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product__hide_prise">
                                цена 1699 грн
                            </div>
                            <div class="product__hide_box">
                                <a href="#/">посмотреть</a>

                                <div class="product__cart_box">
                                    <img src="assets/front/img/cart.svg" alt="">
                                    <a href="#/">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__iteam">
                        <img src="assets/front/img/product__foto.png">

                        <p class="product__text">Сумка из натуральной кожи</p>
                        <p class="product__number">020265, цвет голубой</p>
                        <p class="product__prise">цена 1699 грн</p>

                        <div class="product__foto_btn">New</div>

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto2.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto3.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto4.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <div class="product__icon_box">
                                        <img class="product__hide_icon" src="assets/front/img/next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product__hide_prise">
                                цена 1699 грн
                            </div>
                            <div class="product__hide_box">
                                <a href="#/">посмотреть</a>

                                <div class="product__cart_box">
                                    <img src="assets/front/img/cart.svg" alt="">
                                    <a href="#/">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__iteam">
                        <img src="assets/front/img/product__foto.png">

                        <p class="product__text">Сумка из натуральной кожи</p>
                        <p class="product__number">020265, цвет голубой</p>
                        <p class="product__prise">цена 1699 грн</p>

                        <div class="product__foto_btn">New</div>

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto2.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto3.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto4.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <div class="product__icon_box">
                                        <img class="product__hide_icon" src="assets/front/img/next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product__hide_prise">
                                цена 1699 грн
                            </div>
                            <div class="product__hide_box">
                                <a href="#/">посмотреть</a>

                                <div class="product__cart_box">
                                    <img src="assets/front/img/cart.svg" alt="">
                                    <a href="#/">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__iteam">
                        <img src="assets/front/img/product__foto.png">

                        <p class="product__text">Сумка из натуральной кожи</p>
                        <p class="product__number">020265, цвет голубой</p>
                        <p class="product__prise">цена 1699 грн</p>

                        <div class="product__foto_btn">New</div>

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto2.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto3.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto4.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <div class="product__icon_box">
                                        <img class="product__hide_icon" src="assets/front/img/next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product__hide_prise">
                                цена 1699 грн
                            </div>
                            <div class="product__hide_box">
                                <a href="#/">посмотреть</a>

                                <div class="product__cart_box">
                                    <img src="assets/front/img/cart.svg" alt="">
                                    <a href="#/">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__iteam">
                        <img src="assets/front/img/product__foto.png">

                        <p class="product__text">Сумка из натуральной кожи</p>
                        <p class="product__number">020265, цвет голубой</p>
                        <p class="product__prise">цена 1699 грн</p>

                        <div class="product__foto_btn">New</div>

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto2.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto3.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto4.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <div class="product__icon_box">
                                        <img class="product__hide_icon" src="assets/front/img/next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product__hide_prise">
                                цена 1699 грн
                            </div>
                            <div class="product__hide_box">
                                <a href="#/">посмотреть</a>

                                <div class="product__cart_box">
                                    <img src="assets/front/img/cart.svg" alt="">
                                    <a href="#/">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__iteam">
                        <img src="assets/front/img/product__foto.png">

                        <p class="product__text">Сумка из натуральной кожи</p>
                        <p class="product__number">020265, цвет голубой</p>
                        <p class="product__prise">цена 1699 грн</p>

                        <div class="product__foto_btn">New</div>

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto2.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto3.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto4.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <img class="product__hide_iteam" src="assets/front/img/hidden_foto5.jpg" alt="">
                                    <div class="product__icon_box">
                                        <img class="product__hide_icon" src="assets/front/img/next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product__hide_prise">
                                цена 1699 грн
                            </div>
                            <div class="product__hide_box">
                                <a href="#/">посмотреть</a>

                                <div class="product__cart_box">
                                    <img src="assets/front/img/cart.svg" alt="">
                                    <a href="#/">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__more">
                        <a href="#" class="catalog__more-link"></a>
                        <div class="catalog__more-main">
                            <span class="catalog__more-num">24</span>
                            <span class="catalog__more-num catalog__more-num--small">ПОКАЗАТЬ ЕЩЕ</span>
                        </div>
                        <p class="product__text">В ЭТОЙ КАТЕГОРИИ</p>
                        <p class="product__number">всего <span>1712</span> товаров в категории</p>
                    </div>
                </div>

                <a href="" class="btn__more">ПОКАЗАТЬ ЕЩЕ  24 </a>

                <div class="pagination">
                    <a href="" class="pagination__view pagination__view--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                            <g>
                                <g>
                                    <path fill="#5c5c5c" d="M7 0h1L1 10l7 10H7L0 10z" />
                                </g>
                            </g>
                        </svg>
                        предыдущая
                    </a>
                    <ul class="pagination__list">
                        <li class="pagination__item">
                            <a class="pagination__num" href="">1</a>
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__num" href="">2</a>
                        </li>
                        <li class="pagination__item active">
                            <a class="pagination__num" href="">3</a>
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__num" href="">4</a>
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__num" href="">5</a>
                        </li>
                        <li class="pagination__item pagination__item--separator">
                            ...
                        </li>
                        <li class="pagination__item">
                            <a class="pagination__num" href="">72</a>
                        </li>
                    </ul>
                    <a href="" class="pagination__view pagination__view--next">
                        следующая
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                            <g>
                                <g>
                                    <path fill="#5c5c5c" d="M1 20H0l7-10L0 0h1l7 10z" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>


        </div>
    </section>

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