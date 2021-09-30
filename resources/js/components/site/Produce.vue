s<template>
    <div class="container">
        <div class="breadcrumbs">
            <div class="holder">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru' : '/'" class="breadcrumbs__link">{{ translate.store }}</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru/catalog' : '/catalog'" class="breadcrumbs__link">{{ translate.catalog }} </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru/category/' + product.category.slug_ru : '/category/' + product.category.slug_uk" class="breadcrumbs__link">{{ firstThreeLetterInProduct(product).toUpperCase() }}</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="" class="breadcrumbs__link">{{ restLetterInProduct(product).toUpperCase() }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <section class="product-card">
            <!--<div class="product-card__headmob desktop-hidden">
                <div id="prod-timer-mob"></div>
                <div class="product-card__tag">
            <span class="product-card__tag-text">
                {{ translate.sale }}
            </span>
                </div>
            </div>-->
            <div class="holder">
                <div class="product-card__head">
                    <a :href="back" class="back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                            <g>
                                <g>
                                    <path fill="#5c5c5c" d="M7 0h1L1 10l7 9v1L0 10z" />
                                </g>
                            </g>
                        </svg>
                        {{ translate.back }}
                    </a>

                    <div class="product-card__head-box">
                        <div class="product-card__head-text">
                            <h2 class="product-card__head-title">{{ firstThreeLetterInProduct(product) }}</h2>
                            <p class="product-card__head-textwrap">{{ restLetterInProduct(product) }}</p>
                            <a :href="getLang ? '/ru/manufacturer/' + product.manufacturer.slug_ru : '/manufacturer/' + product.manufacturer.slug_uk" class="product-card__head-textwrap">{{ getLang ? product.manufacturer.title_ru : product.manufacturer.title_uk }}</a>
                        </div>
                        <div v-if="(!product.end_stock && product.percent) || (product.end_stock && (product.end_stock > dateForDiscount))">
                            <div class="mobile-hidden" id="prod-timer-mob"></div>
                            <div class="product-card__tag mobile-hidden">
                                <span class="product-card__tag-text">
                                    {{ translate.sale }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card__wrapper">
                    <div class="product-card__demo sticky-box">
                        <div class="product-card__slider">
                            <div class="product-card__slider-item">
                                <a data-fancybox="prod_gallery" :href="`/house/uploads/` + product.image">
                                    <img :src="`/house/uploads/` + product.image" alt="">
                                </a>
                            </div>
                            <div class="product-card__slider-item" v-for="image in product.galleries">
                                <a data-fancybox="prod_gallery" :href="`/house/uploads/` + image.name">
                                    <img :src="'/house/uploads/' + image.name" alt="">
                                </a>
                            </div>

                        </div>
                        <div class="product-card__slider-navbox">
                    <span class="slider-arrow prev" style="margin-top: -220px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                            <g>
                                <g>
                                    <path fill="#5c5c5c" d="M24 0h1L.794 30.984 25 61l-.955.008L0 32v-2z" />
                                </g>
                            </g>
                        </svg>
                    </span>
                            <div class="product-card__slider-nav">
                                <div class="product-card__slider-nav__item">
                                    <img :src="`/house/uploads/` + product.image" alt="">
                                </div>

                                <div class="product-card__slider-nav__item" v-for="image in product.galleries">
                                    <img :src="'/house/uploads/' + image.name" alt="">
                                </div>
                            </div>
                            <span class="slider-arrow next" style="margin-top: -220px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                            <g>
                                <g>
                                    <path fill="#5c5c5c" d="M.795 61.008L0 61l24.206-30.016L0 0l.955-.008L25 30v2z" />
                                </g>
                            </g>
                        </svg>
                    </span>
                        </div>
                    </div>

                    <div class="product-card__wrap">
                        <div class="sticky-box product-card__wrapbox product-card__wrapbox--bordered">
                            <div class="product-card__flexer product-card__pricebox" v-if="product.price != 0">
                                <div class="product-card__prices"
                                     v-if="(!product.end_stock && product.percent) || (product.end_stock && (product.end_stock > dateForDiscount))"
                                >
                                    <p class="text-price text-price--new">{{ translate.price }} {{ product.price }} грн</p>
                                    <p class="text-price text-price--old">{{ product.undiscounted }} грн</p>
                                </div>

                                <div class="product-card__prices" v-else>
                                    <p class="text-price text-price--fix">{{ translate.price }} {{ product.price }} грн</p>
                                </div>

                                <!--<div class="product-card__timerbox">
                                    <p class="product-card__timerbox-title">
                                        Акция закончиться через:
                                    </p>
                                    <div id="prod-timer"></div>
                                </div>-->
                            </div>

                            <div class="product-card__flexer product-card__btns">
                                <a href="#" class="product-card__btn product-card__btn--buy" v-if="product.availability == 1" @click="addToCart()">
                                    <img src="/assets/front/img/cart__white.png" alt="">
                                    <span class="product-card__btn-inner">{{ translate.to_cart }}</span>
                                </a>

                                <a href="#" class="product-card__btn product-card__btn--sold" v-if="product.availability == 0">
                                    <img src="/assets/front/img/cart__black.jpg" alt="">
                                    <span class="product-card__btn-inner">{{ translate.no_availability }}</span>
                                </a>

                                <a href="#" class="product-card__btn product-card__btn--default" data-modal-open="colors" v-if="product.how_size != null">
                                    <span class="product-card__btn-inner"></span>
                                    {{ getLang ? product.how_size_ru : product.how_size_uk }}
                                </a>
                            </div>
                        </div>


                        <div class="product-card__wrapbox options" v-if="product.options.length">
                            <p class="options__title">{{ translate.select_options }}</p>
                            <div class="product-card__flexer" style="justify-content: flex-start !important;">
                                <div class="select select-custom" v-for="option in product.options">
                                    <div class="select-inner" style="padding-left: 10px;"></div>
                                    <select>
                                        <option value="0">Выберите {{ option.option.title_ru }}</option>
                                        <option value="2" v-for="value in option.product_values">{{ value.value_option.value_ru }}</option>
                                    </select>

                                </div>
                            </div>
                        </div>


                        <div class="product-card__description" style="margin-bottom: 20px !important;">
                            <div v-if="glasses" class="product-card__description-body" style="display: block;">
                                <div class="params">
                                    <div class="params__item" v-if="this.product.lens_height">
                                        <img src="/assets/front/img/prod.jpg" alt="">
                                        <p>{{ this.product.lens_height }} мм</p>
                                    </div>
                                    <div class="params__item" v-if="this.product.lens_width">
                                        <img src="/assets/front/img/prod2.jpg" alt="">
                                        <p>{{ this.product.lens_width }} мм</p>
                                    </div>
                                    <div class="params__item" v-if="this.product.bridge_width">
                                        <img src="/assets/front/img/prod3.jpg" alt="">
                                        <p>{{ this.product.bridge_width }} мм</p>
                                    </div>
                                    <div class="params__item" v-if="this.product.long_arms">
                                        <img src="/assets/front/img/prod4.jpg" alt="">
                                        <p>{{ this.product.long_arms }} мм</p>
                                    </div>
                                    <div class="params__item"  v-if="this.product.frame_width">
                                        <img src="/assets/front/img/prod5.jpg" alt="">
                                        <p>{{ this.product.frame_width }} мм</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card__description">
                            <div class="product-card__description-head">
                                <h3 class="product-card__title">» {{ translate.desc }}</h3>

                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9"><g><g><path fill="#2a2a2f" d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/></g></g></svg>
                            </div>
                            <div class="product-card__description-body" v-if="attributes[0]">
                                <div class="prod-table">
                                    <div class="prod-table__row" v-for="attribute in attributes">
                                        <p class="prod-table__title">{{ ucFirst(attribute.title) }}:
                                        </p>
                                        <div style="display: flex;" :class="{ intheline: attribute.title == 'Особливості' || attribute.title == 'Особенности' || attribute.title == 'Уникальность' || attribute.title == 'Унікальність' }">
                                            <p class="prod-table__text" :class="{ mar: attribute.selected.length > 1 }" v-for="(select, key) in attribute.selected">
                                                {{ ucFirst(selectAttr(attribute.selected[key], attribute.params)) }}
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-card__description" v-if="additional.additional_title || additional.additional">
                            <div class="product-card__description-head">
                                <h3 class="product-card__title">» {{ additional.additional_title }}</h3>
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9"><g><g><path fill="#2a2a2f" d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/></g></g></svg>
                            </div>
                            <div class="product-card__description-body">
                                <p class="product-card__description-text" v-html="additional.additional">

                                </p>
                            </div>
                        </div>

                        <div class="product-card__description">
                            <div class="product-card__description-head">
                                <h3 class="product-card__title">» {{ translate.free_del }}</h3>
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9"><g><g><path fill="#2a2a2f" d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/></g></g></svg>
                            </div>
                            <div class="product-card__description-body">
                                <p class="product-card__description-text" v-html="translate.free_del_text">

                                </p>
                            </div>
                        </div>
                        <div class="product-card__description">
                            <div class="product-card__description-head">
                                <h3 class="product-card__title">» {{ translate.guarantee }}</h3>
                                <a href="#" class="red-link">{{ translate.more }}</a>
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9"><g><g><path fill="#2a2a2f" d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/></g></g></svg>
                            </div>
                            <div class="product-card__description-body">
                                <p class="product-card__description-text">
                                    {{ translate.guarantee_text }}
                                </p>
                            </div>
                        </div>
                        <div class="product-card__description" v-if="product.description_ru || product.description_uk">
                            <div class="product-card__description-head">
                                <h3 class="product-card__title">» {{ translate.about_prod }}</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9"><g><g><path fill="#2a2a2f" d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/></g></g></svg>
                            </div>
                            <div class="product-card__description-body">
                                <p class="product-card__description-text" v-if="locale == 'ru'" v-html="product.description_ru"></p>
                                <p class="product-card__description-text" v-if="locale == 'uk'" v-html="product.description_uk"></p>
                            </div>
                        </div>
                        <!--<div class="product-card__description" v-if="product.how_size_ru || product.how_size_uk">
                            <div class="product-card__description-head">
                                <h3 class="product-card__title">» {{ translate.add_info }}</h3>
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9"><g><g><path fill="#2a2a2f" d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/></g></g></svg>
                            </div>
                            <div class="product-card__description-body">
                                <p class="product-card__description-text">
                                    {{ locale == 'ru' ? product.how_size_ru : product.how_size_uk }}
                                </p>
                            </div>
                        </div>-->
                        <!--<div class="product-card__description">
                            <div class="product-card__description-head">
                                <h3 class="product-card__title">» ДОПОЛНИТЕЛЬНОЕ ПОЛЕ №2</h3>
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9"><g><g><path fill="#2a2a2f" d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/></g></g></svg>
                            </div>
                            <div class="product-card__description-body">
                                <p class="product-card__description-text">
                                    14 дней на возврат, если товар Вам не подошел и 30 дней гарантии на сезон
                                    согласно законодательства.
                                </p>
                            </div>
                        </div>-->
                        <div class="product-card__description" v-if="product.tags" style="margin-bottom: 30px !important;
  padding-bottom: 6px;
  border-bottom: 1px solid #e6e6e6;
  margin-bottom: 12px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative; ">
                            <div class="">
                                <div class="hashtags">
                                    <a :href="getLang ? '/ru/catalog?t=' + tag.slug_ru : '/catalog?t=' + tag.slug_uk " v-for="tag in product.tags">
                                        <span>{{(locale == 'ru' ? tag.title_ru : tag.title_uk) + ' '}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="articul mobile-hidden" v-if="product.vendor_code">
                                <span>Артикул: {{product.vendor_code}}</span>
                        </div>
                        <a href="#" class="product-card__btn product-card__btn--consultation" style="width: 99%;">
                            <img src="/assets/front/img/phone.png" alt="">
                            <span class="product-card__btn-inner"></span>
                            {{ translate.free_consul_1 }}<span class="mobile-hidden">&nbsp;{{ translate.free_consul_2 }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <viewed-component :locale="locale" :translate="translate"></viewed-component>

        <!--<section class="reviews">
            <div class="holder reviews__holder">
                <h2 class="section-title reviews__title">{{ translate.reviews }}</h2>
                <div class="reviews__wrapper">
                    <div class="review">
                        <span class="review__date">20 апреля 2021</span>
                        <div class="review__images">
                            <div class="arrow prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M24 0h1L.794 30.984 25 61l-.955.008L0 32v-2z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="review__images-slider">
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="arrow next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M.795 61.008L0 61l24.206-30.016L0 0l.955-.008L25 30v2z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="review__rating">
                            <div class="review__rating-stars">
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star"></div>
                                <div class="review__rating-star"></div>
                            </div>
                            <span class="review__rating-text">
                            3/5
                        </span>
                        </div>

                        <p class="review__product">
                            СУМКА ИЗ НАТУРАЛЬНОЙ КОЖИ
                        </p>
                        <div class="reviews__body">
                            <p class="review__text">
                                © Свою интересную жизнь волос я рассказывала в отзыве на Шампунь этой марки.
                            </p>
                            <div class="review__textbox">
                                <div class="review__textbox-title">
                                    <img src="/assets/front/img/plus-square.png" alt="">
                                    <p>Плюсы</p>
                                </div>
                                <p class="review__text">
                                    решила оставить волосы в покое и отрастить свой натуральный цвет, а что
                                </p>
                            </div>
                            <div class="review__textbox">
                                <div class="review__textbox-title">
                                    <img src="/assets/front/img/minus-square.png" alt="">
                                    <p>Минусы</p>
                                </div>
                                <p class="review__text">
                                    решила оставить волосы в покое и отрастить свой натуральный  варто  ...
                                </p>
                            </div>
                        </div>


                        <p class="review__name">
                            Дмитрий Ножкин
                        </p>
                        <div class="review__links">
                            <a href="#" class="review__more">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="21" viewBox="0 0 9 21"><g><g><path fill="#5c5c5c" d="M.78 20.336l-.253-.11 7.58-9.787L.581.668.832.56l7.441 9.664.003-.004.253.109-.088.113.033.043-.1.044z"/></g></g></svg>
                            </a>
                            <a href="#" class="review__share">
                                поделится
                                <img src="/assets/front/img/share-square.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="review">
                        <span class="review__date">20 апреля 2021</span>
                        <div class="review__images">
                            <div class="arrow prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M24 0h1L.794 30.984 25 61l-.955.008L0 32v-2z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="review__images-slider">
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="arrow next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M.795 61.008L0 61l24.206-30.016L0 0l.955-.008L25 30v2z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="review__rating">
                            <div class="review__rating-stars">
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star"></div>
                                <div class="review__rating-star"></div>
                            </div>
                            <span class="review__rating-text">
                            3/5
                        </span>
                        </div>

                        <p class="review__product">
                            СУМКА ИЗ НАТУРАЛЬНОЙ КОЖИ
                        </p>
                        <div class="reviews__body">
                            <p class="review__text">
                                © Свою интересную жизнь волос я рассказывала в отзыве на Шампунь этой марки.
                            </p>
                            <div class="review__textbox">
                                <div class="review__textbox-title">
                                    <img src="/assets/front/img/plus-square.png" alt="">
                                    <p>Плюсы</p>
                                </div>
                                <p class="review__text">
                                    решила оставить волосы в покое и отрастить свой натуральный цвет, а что
                                </p>
                            </div>
                            <div class="review__textbox">
                                <div class="review__textbox-title">
                                    <img src="/assets/front/img/minus-square.png" alt="">
                                    <p>Минусы</p>
                                </div>
                                <p class="review__text">
                                    решила оставить волосы в покое и отрастить свой натуральный  варто  ...
                                </p>
                            </div>
                        </div>


                        <p class="review__name">
                            Дмитрий Ножкин
                        </p>
                        <div class="review__links">
                            <a href="#" class="review__more">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="21" viewBox="0 0 9 21"><g><g><path fill="#5c5c5c" d="M.78 20.336l-.253-.11 7.58-9.787L.581.668.832.56l7.441 9.664.003-.004.253.109-.088.113.033.043-.1.044z"/></g></g></svg>
                            </a>
                            <a href="#" class="review__share">
                                поделится
                                <img src="/assets/front/img/share-square.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="review">
                        <span class="review__date">20 апреля 2021</span>
                        <div class="review__images">
                            <div class="arrow prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M24 0h1L.794 30.984 25 61l-.955.008L0 32v-2z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="review__images-slider">
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="arrow next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M.795 61.008L0 61l24.206-30.016L0 0l.955-.008L25 30v2z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="review__rating">
                            <div class="review__rating-stars">
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star"></div>
                                <div class="review__rating-star"></div>
                            </div>
                            <span class="review__rating-text">
                            3/5
                        </span>
                        </div>

                        <p class="review__product">
                            СУМКА ИЗ НАТУРАЛЬНОЙ КОЖИ
                        </p>
                        <div class="reviews__body">
                            <p class="review__text">
                                © Свою интересную жизнь волос я рассказывала в отзыве на Шампунь этой марки.
                            </p>
                            <div class="review__textbox">
                                <div class="review__textbox-title">
                                    <img src="/assets/front/img/plus-square.png" alt="">
                                    <p>Плюсы</p>
                                </div>
                                <p class="review__text">
                                    решила оставить волосы в покое и отрастить свой натуральный цвет, а что
                                </p>
                            </div>
                            <div class="review__textbox">
                                <div class="review__textbox-title">
                                    <img src="/assets/front/img/minus-square.png" alt="">
                                    <p>Минусы</p>
                                </div>
                                <p class="review__text">
                                    решила оставить волосы в покое и отрастить свой натуральный  варто  ...
                                </p>
                            </div>
                        </div>


                        <p class="review__name">
                            Дмитрий Ножкин
                        </p>
                        <div class="review__links">
                            <a href="#" class="review__more">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="21" viewBox="0 0 9 21"><g><g><path fill="#5c5c5c" d="M.78 20.336l-.253-.11 7.58-9.787L.581.668.832.56l7.441 9.664.003-.004.253.109-.088.113.033.043-.1.044z"/></g></g></svg>
                            </a>
                            <a href="#" class="review__share">
                                поделится
                                <img src="/assets/front/img/share-square.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="review">
                        <span class="review__date">20 апреля 2021</span>
                        <div class="review__images">
                            <div class="arrow prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M24 0h1L.794 30.984 25 61l-.955.008L0 32v-2z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="review__images-slider">
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                                <div class="review__images-slide">
                                    <a data-fancybox="review_gallery" href="/img/review.jpg">
                                        <img src="/assets/front/img/review.jpg" alt="">
                                    </a>
                                    <div class="review__images-hover">
                                        <img src="/assets/front/img/search-plus.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="arrow next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M.795 61.008L0 61l24.206-30.016L0 0l.955-.008L25 30v2z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="review__rating">
                            <div class="review__rating-stars">
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star review__rating-star&#45;&#45;active"></div>
                                <div class="review__rating-star"></div>
                                <div class="review__rating-star"></div>
                            </div>
                            <span class="review__rating-text">
                            3/5
                        </span>
                        </div>

                        <p class="review__product">
                            СУМКА ИЗ НАТУРАЛЬНОЙ КОЖИ
                        </p>
                        <div class="reviews__body">
                            <p class="review__text">
                                © Свою интересную жизнь волос я рассказывала в отзыве на Шампунь этой марки.
                            </p>
                            <div class="review__textbox">
                                <div class="review__textbox-title">
                                    <img src="/assets/front/img/plus-square.png" alt="">
                                    <p>Плюсы</p>
                                </div>
                                <p class="review__text">
                                    решила оставить волосы в покое и отрастить свой натуральный цвет, а что
                                </p>
                            </div>
                            <div class="review__textbox">
                                <div class="review__textbox-title">
                                    <img src="/assets/front/img/minus-square.png" alt="">
                                    <p>Минусы</p>
                                </div>
                                <p class="review__text">
                                    решила оставить волосы в покое и отрастить свой натуральный  варто  ...
                                </p>
                            </div>
                        </div>


                        <p class="review__name">
                            Дмитрий Ножкин
                        </p>
                        <div class="review__links">
                            <a href="#" class="review__more">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="21" viewBox="0 0 9 21"><g><g><path fill="#5c5c5c" d="M.78 20.336l-.253-.11 7.58-9.787L.581.668.832.56l7.441 9.664.003-.004.253.109-.088.113.033.043-.1.044z"/></g></g></svg>
                            </a>
                            <a href="#" class="review__share">
                                поделится
                                <img src="/assets/front/img/share-square.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <a class="intro__btn reviews__btn" href="#/">{{ translate.leave_review }}</a>
            </div>
        </section>-->



        <div class="modal-box colors-modal" data-modal-name="colors">
            <div class="modal-box__bg" data-modal-closer></div>
            <div class="modal-box__wrapper">
                <img src="/assets/front/img/buy_close.svg" alt="" class="closer" data-modal-closer>
                <div class="modal-box__wrap">
                    <img :src="'/house/uploads/' + product.how_size" alt="" style="width: 83%">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Produce",
        props: [
            'product',
            'additional',
            'locale',
            'attributes',
            'back',
            'settings',
            'translate',
            'translate_watch',
            'page'
        ],
        data(){
            return{
                select : false,
                date: new Date(),
                now: null,
                error: false,
                confirm: false,
                free_shipping: false,
                glasses: false,
                dateForDiscount: '',
            }
        },
        methods: {
            getValues: function (id, values) {

                let name = values.find(value => value.id === id);

                return name.value;
            },
            selectValue: function (e, id) {

                if(e.target.value === ''){
                    this.product.options[id].select = null;
                }else{
                    this.product.options[id].select = e.target.value;
                }

            },
            selectAttr: function (id, params) {

                let name = params.find(param => param.id === id);
                if (this.locale == 'ru') {
                    return name.item_name_ru;
                } else if (this.locale == 'uk') {
                    return name.item_name_uk;
                }

            },
            addToCart: function () {
                if(this.product.availability){
                    let sel = true;

                    for(let i = 0;i < this.product.options.length;i++){
                        if(this.product.options[i].option.need === '1'){
                            if(this.product.options[i].select === null){
                                sel = false;
                            }
                        }
                    }
                    let self = this;
                    if(sel){
                        this.$store.commit('addToCart', this.product);
                        this.error = false;
                        this.confirm = true;

                        setTimeout(function(){
                            self.confirm = false;
                        }, 2000);
                    }else{
                        this.confirm = false;
                        this.error = true;
                        setTimeout(function(){
                            self.error = false;
                        }, 2000);
                    }
                }


            },
            checkCart(){
                /*let cart = JSON.parse(window.localStorage.getItem('cart'));

                if(cart.length > 0){
                    if(cart.find(item => item.id === this.product.id)){
                        this.select = true;
                    }
                }*/
            },
            ucFirst: function (str) {
                if (!str) return str;

                return str[0].toUpperCase() + str.slice(1);
            },
            comparison: function(date){

                if(new Date(date) < new Date(this.now)){
                    return true;
                }else{
                    return false;
                }

            },
            closeError(){

                this.error = false;

            },
            goBack: function () {
                window.location = this.back;
            },
            currentPrice: function (price) {

                if(price >= this.settings.free_shipping){
                    this.free_shipping = true;
                }

                return price;

            },
            zeroPadding: function (num, digit) {
                var zero = '';
                for (var i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            },

            firstThreeLetterInProduct(product) {
                if (this.locale == 'ru') {
                    return product.title_ru.split( " " ).slice(0, 3).join(' ');
                } else {
                    return product.title_uk.split( " " ).slice(0, 3).join(' ');
                }
            },

            restLetterInProduct(product) {
                if (this.locale == 'ru') {
                    return product.title_ru.split( " " ).slice(3).join(' ');
                } else {
                    return product.title_uk.split( " " ).slice(3).join(' ');
                }
            },
        },
        computed: {
            console: () => console,
            window: () => window,

            getLang: function() {
                if (this.locale == 'ru') {
                    return true;
                } else if (this.locale == 'uk') {
                    return false;
                }
            },
        },

        mounted() {
            let viewed = localStorage.getItem('viewed');
            if(viewed){
                viewed = JSON.parse(viewed);
                let p = viewed.find(x => x === this.product.id);
                if(!p){
                    viewed.push(this.product.id);
                    localStorage.setItem('viewed', JSON.stringify(viewed));
                }
            }else{
                let p = [];
                p.push(this.product.id);
                localStorage.setItem('viewed', JSON.stringify(p));
            }

            if(this.product.lens_height || this.product.lens_width || this.product.bridge_width || this.product.long_arms || this.product.frame_width)
            {
                this.glasses = true;
            }

            this.checkCart();
            this.now = this.date.getFullYear() + '-' + (this.date.getMonth()+1) + '-' + this.date.getDate() + ' ' + this.date.getHours() + ':' + this.date.getMinutes();

            // проверяем дополнительные сведения
            if (this.additional) {
                if (typeof this.additional.uk !== 'undefined') {
                    this.additional = this.additional.uk;
                } else if (typeof this.additional.ru !== 'undefined') {
                    this.additional = this.additional.ru;
                }
            }

            // Устанавливаем текущую дату для проверки акции
            var cd = new Date();
            this.dateForDiscount = this.zeroPadding(cd.getFullYear(), 4) + '-' + this.zeroPadding(cd.getMonth()+1, 2) + '-' + this.zeroPadding(cd.getDate(), 2);


        }
    }
</script>

<style>
    .intheline {
        display: flex;
        flex-direction: column;
    }

    .mar {
        margin: 6px 4px;
    }

    .articul {
        margin-bottom: 30px;
        color: #989898;
        font-size: 14px;
        font-weight: 350;
    }

</style>
