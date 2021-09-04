<template>
    <div class="root">
        <div class="catalog__btns">
            <button class="catalog__btns-item" data-filters-opener>
                {{ translate.filter }}
                <img src="/assets/front/img/sliders-h.png" alt="">
            </button>
            <div class="catalog__btns-item mob-select-btn">
                <select>
                    <option value="" hidden selected>{{ translate.sort }}</option>

                    <option value="">
                        {{ translate.newest }}
                    </option>
                    <option value="">
                        {{ translate.price_asc }}
                    </option>
                    <option value="">
                        {{ translate.price_desc }}
                    </option>
                </select>
                <img src="/assets/front/img/sort.png" alt="">
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="conteiner">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru' : '/'" class="breadcrumbs__link">{{ translate.store }}</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru/catalog' : '/catalog'" class="breadcrumbs__link">{{ translate.catalog }} </a>
                    </li>
                    <li class="breadcrumbs__item" v-if="instantCategory && !instantRedirect">
                        <a :href="window.location.href" class="breadcrumbs__link">{{ getLang ? instantCategory.title_ru.toUpperCase() : instantCategory.title_uk.toUpperCase() }} </a>
                    </li>
                    <li class="breadcrumbs__item" v-if="instantManufacturer">
                        <a :href="window.location.href" class="breadcrumbs__link">{{ getLang ? instantManufacturer.title_ru.toUpperCase() : instantManufacturer.title_uk.toUpperCase() }} </a>
                    </li>
                    <li class="breadcrumbs__item" v-if="instantTag">
                        <a :href="window.location.href" class="breadcrumbs__link">{{ getLang ? instantTag.title_ru.toUpperCase() : instantTag.title_uk.toUpperCase() }} </a>
                    </li>
                    <li class="breadcrumbs__item" v-if="instantRedirect">
                        <a :href="window.location.href" class="breadcrumbs__link">{{ getLang ? instantRedirect.title_ru.toUpperCase() : instantRedirect.title_uk.toUpperCase() }} </a>
                    </li>
                </ul>
            </div>
        </div>


        <section class="catalog">
            <div class="holder catalog__holder">
                <div class="catalog-filters">
                    <div class="catalog__btns">
                        <button class="catalog__btns-item" data-filters-closer>
                            {{ translate.cancel }}
                        </button>
                        <button class="catalog__btns-item" data-filters-closer @click="loadProducts()">
                            {{ translate.use_filter }}
                        </button>
                    </div>
                    <div class="catalog-filters__box">
                        <div class="catalog-filters__block catalog-filters__block--mainlinks" v-if="dropdown.length">
                            <div class="catalog-filters__block-head activee">
                                <a class="catalog-filters__type" :href="getLang ? dropdown[0].link_ru : dropdown[0].link_uk">{{ getLang ? dropdown[0].title_ru : dropdown[0].title_uk }}</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"></path></g></g></svg>
                            </div>
                            <div style="display: none;" class="catalog-filters__block-body">
                                <a v-for="elem in dropdown.slice(1, dropdown.length)" :href="getLang ? elem.link_ru : elem.link_uk" class="catalog-filters__type">{{ getLang ? elem.title_ru : elem.title_uk}}</a>
                            </div>
                        </div>

                    </div>
                    <div class="catalog-filters__box">
                        <!--<div class="catalog-filters__block">
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
                        </div>-->
                        <div class="catalog-filters__block" v-for="filter in filters.slice(0, 5)" :key="filter.id" v-if="isFilterHasProducts(filter)">
                            <div class="catalog-filters__block-head activee">
                                <span style="text-transform: uppercase;">{{ getLang ? filter.title_ru : filter.title_uk }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                            </div>
                            <div class="catalog-filters__block-body"  style="display: none;">
                                <label class="catalog-filters__item" v-for="attr in filter.attributes" :key="attr.id" v-if="attr.products_count">
                                    <input name="type" type="checkbox" :value="attr.id" v-model="selected.sel_filters[filter.id]">
                                    <span class="catalog-filters__item-name">{{ getLang ? attr.name_ru : attr.name_uk }} </span> /
                                    <span class="catalog-filters__item-num">{{ attr.products_count }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-filters__slider">
                        <p class="catalog-filters__slider-title">
                            {{ translate.priceUp }}
                        </p>

                        <div class="catalog-filters__slider-box"><!--
                            <input type="text" hidden :value="maxValPrice" id="maxValPrice">-->
                            <span class="catalog-filters__slider-val catalog-filters__slider-val--min" ref="start">{{ minValPrice }}</span>
                            <div id="slider-range" class="catalog-filters__slider-slider"></div>
                            <span class="catalog-filters__slider-val catalog-filters__slider-val--max" ref="end">{{ maxValPrice }}</span>
                        </div>

                    </div>
                    <label class="catalog-filters__radio">
                        <div class="radio">
                            <input type="checkbox" :value="sale" v-model="selected.sale">
                            <span></span>
                        </div>
                        {{ translate.is_sale }}
                    </label>


                    <div class="catalog-filters__box">
                        <div class="catalog-filters__block" v-for="filter in filters.slice(5)" :key="filter.id" v-if="isFilterHasProducts(filter)">
                            <div class="catalog-filters__block-head activee">
                                <span style="text-transform: uppercase;">{{ getLang ? filter.title_ru : filter.title_uk }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                            </div>
                            <div class="catalog-filters__block-body"  style="display: none;">
                                <label class="catalog-filters__item" v-for="attr in filter.attributes" :key="attr.id" v-if="attr.products_count">
                                    <input name="type" type="checkbox" :value="attr.id" v-model="selected.sel_filters[filter.id]">
                                    <span class="catalog-filters__item-name">{{ getLang ? attr.name_ru : attr.name_uk }} </span> /
                                    <span class="catalog-filters__item-num">{{ attr.products_count }}</span>
                                </label>
                            </div>
                        </div>


                        <div class="catalog-filters__block">
                            <div class="catalog-filters__block-head activee">
                                <span>{{ translate.tags }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"/></g></g></svg>
                            </div>
                            <div class="catalog-filters__block-body" style="display: none;">
                                <label class="catalog-filters__item" v-for="tag in tags" :key="tag.id" v-if="tag.products_count">
                                    <input name="type" type="checkbox" :value="tag.id" v-model="selected.tags">
                                    <span class="catalog-filters__item-name">{{ getLang ? tag.title_ru : tag.title_uk }}  </span> /
                                    <span class="catalog-filters__item-num">{{ tag.products_count }}</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div style="padding: 22px 18px 22px 40px;" class="use-filters" @click="pageNumber = 0">
                        <span class="product-card__btn product-card__btn--default" style="width: 100% !important;" @click="loadProducts(); scrollToTop();">
                            <span class="product-card__btn-inner">{{ translate.use_filter }}</span>
                        </span>
                    </div>
                    <button class="catalog__clear" @click="clear">{{ translate.reset }}
                        <img src="/assets/front/img/close-tag.png" alt="">
                    </button>
                </div>

                <div class="catalog__box" style="width: 100%;">
                    <div class="catalog__head">
                        <div class="catalog__tags">
                            <!--<div class="catalog__tag">
                                <span class="catalog__tag-text">Кол-во продуктов: {{ countProducts }}</span>
                            </div>-->
                            <div class="catalog__tag" v-if="instantCategory && !instantRedirect">
                                <a :href="getLang ? '/ru/catalog' : '/catalog'" style="text-decoration: none">
                                    <div class="catalog__tag catalog__tag__img">
                                        <span class="catalog__tag-text">{{ getLang ? instantCategory.title_ru.toUpperCase() : instantCategory.title_uk.toUpperCase() }}</span>
                                        <img :src="'/assets/front/img/close-tag.png'" alt="">
                                    </div>
                                </a>
                            </div>

                            <!--<div class="catalog__tag" v-if="instantTag">
                                <a :href="getLang ? '/ru/catalog' : '/catalog'" style="text-decoration: none">
                                    <div class="catalog__tag catalog__tag__img">
                                        <span class="catalog__tag-text">{{ getLang ? instantTag.title_ru.toUpperCase() : instantTag.title_uk.toUpperCase() }}</span>
                                        <img :src="'/assets/front/img/close-tag.png'" alt="">
                                    </div>
                                </a>
                            </div>-->

                            <div class="catalog__tag" v-if="instantManufacturer">
                                <a :href="getLang ? '/ru/catalog' : '/catalog'" style="text-decoration: none">
                                    <div class="catalog__tag catalog__tag__img">
                                        <span class="catalog__tag-text">{{ getLang ? instantManufacturer.title_ru.toUpperCase() : instantManufacturer.title_uk.toUpperCase() }}</span>
                                        <img :src="'/assets/front/img/close-tag.png'" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="catalog__tag" v-if="instantRedirect">
                                <a :href="getLang ? '/ru/catalog' : '/catalog'" style="text-decoration: none">
                                    <div class="catalog__tag catalog__tag__img">
                                        <span class="catalog__tag-text">{{ getLang ? instantRedirect.title_ru.toUpperCase() : instantRedirect.title_uk.toUpperCase() }}</span>
                                        <img :src="'/assets/front/img/close-tag.png'" alt="">
                                    </div>
                                </a>
                            </div>

                            <!-- Тут я прохожусь по свойству selected.sel_filters
                            и не пускаю дальшк если в элементе свойства пусто или пустой массив. -->
                            <div class="catalog__tag" v-for="(filter, index) in selected.sel_filters" v-if="!(filter == undefined || ((typeof filter !== 'undefined') ? (filter.length == 0) : false))">
                                <span class="catalog__tag-text" style="margin-right: 5px;">{{ getNameForUnclearFilter(index) }}</span>
                                <!-- Тут я прохожусь по выбранным свойствам фильтра а именно по их айдишникам -->
                                <div v-for="filterId in filter">
                                    <!-- А тут я сравниваю выбранный айди с айдишниками из абсолютно всех фильтров пришедших с бека (props "filters") -->
                                    <div v-for="valFil in filters" class="catalog__tag__img" @click="pageNumber = 0">
                                        <div v-for="attr in valFil.attributes" v-if="(attr.id == filterId)" v-show="!isThisInstantAttr(attr.id)" @click="deleteParam(filterId)" class="catalog__tag">
                                            <span class="catalog__tag-text">{{ getLang ? attr.name_ru : attr.name_uk }}</span>
                                            <img :src="'/assets/front/img/close-tag.png'" alt="сlose">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="catalog__tag" v-for="selTags in selected.tags">
                                <div class="catalog__tag catalog__tag__img" v-for="tag in tags" @click="deleteTag(selected.tags, selTags)" v-if="selTags == tag.id">
                                    <span class="catalog__tag-text">{{ getLang ? tag.title_ru : tag.title_uk }}</span>
                                    <img :src="'/assets/front/img/close-tag.png'" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="catalog__sorter">
                            <div class="select_mate" data-mate-select="active">
                                <select name="" onchange="" onclick="return false;" id="">
                                    <option value="">{{ translate.newest }}</option>
                                    <option value="1">{{ translate.price_asc }}</option>
                                    <option value="2">{{ translate.price_desc }}</option>
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
                        <site-product-elem-component v-for="product in products" :key="product.id" :product="product" :translate="translate" :locale="locale"></site-product-elem-component>

                        <div class="catalog__more" @click="loadMoreProducts()" v-if="pageCount - selected.fakePageForMoreProducts > 1">
                            <span class="catalog__more-link"></span>
                            <div class="catalog__more-main">
                                <span class="catalog__more-num">{{ getMoreProductsNumber }}</span>
                                <span class="catalog__more-num catalog__more-num--small">{{ translate.show_more }}</span>
                            </div>
                            <p class="product__text">{{ translate.in_this_cat }}</p>
                            <p class="product__number">{{ translate.all1 }} <span>{{ countProducts }}</span> {{ translate.all2 }}</p>
                        </div>
                    </div>

                    <span class="btn__more" @click="loadMoreProducts()" v-if="getMoreProductsNumber > 0">{{ translate.show_more }}  {{ getMoreProductsNumber }}</span>

                    <div class="pagination">
                        <span class="pagination__view pagination__view--prev" @click="prevPage()" v-if="!(pageNumber == 0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                                <g>
                                    <g>
                                        <path fill="#5c5c5c" d="M7 0h1L1 10l7 10H7L0 10z" />
                                    </g>
                                </g>
                            </svg>
                            {{ translate.prev }}
                        </span>
                        <ul class="pagination__list">
                            <li class="pagination__item" v-if="pageNumber >= 5" :class="{ active: pageNumber == 0 }">
                                <span class="pagination__num" href="#" @click="pageNumber = 0">1</span>
                            </li>

                            <li class="pagination__item" v-for="index in pageCount" :class="{ active: pageNumber == index - 1 }" v-if="(Math.abs(pageNumber + 1 - index) <= 4)">
                                <span class="pagination__num" href="#" @click="pageNumber = index - 1" v-if="(Math.abs(pageNumber + 1 - index) <= 3)">{{ index }}</span>
                                <span class="pagination__item__separator" v-if="Math.abs(pageNumber + 1 - index) == 4">...</span>
                            </li>

                            <li class="pagination__item" v-if="pageCount - pageNumber > 5" :class="{ active: pageNumber == pageCount - 1 }">
                                <span class="pagination__num" href="#" @click="pageNumber = pageCount - 1">{{ pageCount }}</span>
                            </li>
                        </ul>
                        <span class="pagination__view pagination__view--next" @click="nextPage()" v-if="!(pageNumber + 1 == pageCount)">
                            {{ translate.next }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                                <g>
                                    <g>
                                        <path fill="#5c5c5c" d="M1 20H0l7-10L0 0h1l7 10z" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </div>
                </div>

            </div>
        </section>
    </div>
</template>

<script>
    import $ from 'jquery';
    import 'jquery-ui-dist/jquery-ui'
    import 'jquery-ui-dist/jquery-ui.css'
    window.jQuery = $;

    export default {
        name: "Catalog",
        data: function () {
            return {
                // Свойства товаров
                tags: [],
                sale: false,
                minValPrice: 0,
                maxValPrice: 99999,
                // Все товары
                products: [],
                countProducts: 0,
                // Пагинация
                pageNumber: 0,
                leftEllipsis: false,
                rightEllipsis: false,
                // Для работы с датой
                date: '',
                selected: {
                    sel_filters: [],
                    IdOfInstantCategory: null,
                    IdOfInstantManufacturer: null,
                    IdOfInstantTag: null,
                    childCategories: [],
                    prices: [0, 9999], // [start, end]
                    tags: [],
                    sale: false,
                    page: 0,
                    fakePageForMoreProducts: 0,
                    limit: 11,
                }
            }
        },

        props:{
            size:{
                type: Number,
                required: false,
                default: 11
            },
            //Перевод фраз:
            translate: {
                type: Object,
                required: false
            },
            //Фильтры
            filters: {
                required: true
            },

            // Выпадающий список
            dropdown: {
                required: true
            },

            // Локальный язык
            locale: {
                type: String,
                required: false,
                default: 'ru'
            },
            // Предопределённая ксатегория
            instantCategory: {
                required: false,
                default: null,
            },
            // Дочерние категории
            childCategories: {
                required: false,
                default: [],
            },
            // Предопределенный производитель
            instantManufacturer: {
                required: false,
                default: [],
            },
            // Предопределенный тег
            instantTag: {
                required: false,
                default: [],
            },
            // Предопределенный редирект
            instantRedirect: {
                required: false,
                default: [],
            }
        },


        mounted() {
            let url = new URL(window.location.href);

            if (url.searchParams.has('page')) {
                if (!isNaN(url.searchParams.get('page'))) {
                    this.pageNumber = +url.searchParams.get('page') - 1;
                }
            }

            if (url.searchParams.has('f')) {
                let params = url.searchParams.get('f').split('_');
                for (let param of params) {
                    for (let filter of this.filters) {
                        for (let attr of filter.attributes) {
                            if (attr.slug_ru == param || attr.slug_uk == param) {
                                this.selected.sel_filters[filter.id].push(attr.id);
                            }
                        }
                    }
                }
            }

            // Автовыбранные атрибуты для категории
            if (this.instantCategory) {
                for (let instAttr of this.instantCategory.attributes) {
                    for (let filter of this.filters) {
                        for (let attr of filter.attributes) {
                            if (attr.id == instAttr.id) {
                                this.selected.sel_filters[filter.id].push(attr.id);
                            }
                        }
                    }
                }
            }

            // Автовыбранные атрибуты и номер страницы для редиректа
            if (this.instantRedirect) {
                for (let instAttr of this.instantRedirect.attributes) {
                    for (let filter of this.filters) {
                        for (let attr of filter.attributes) {
                            if (attr.id == instAttr.id) {
                                this.selected.sel_filters[filter.id].push(attr.id);
                            }
                        }
                    }
                }

                if (this.instantRedirect.page != null || this.instantRedirect.page != 0) {
                    this.pageNumber = this.instantRedirect.page - 1;
                }

                if (this.instantRedirect.sail != null || this.instantRedirect.sail == 1) {
                    this.selected.sale = true;
                }
            }


            if (url.searchParams.has('min')) {
                this.$refs.start.innerText = url.searchParams.get('min');
                this.selected.prices[0] = url.searchParams.get('min');
            }
            if (url.searchParams.has('max')) {
                this.$refs.end.innerText = url.searchParams.get('max');
                this.selected.prices[1] = url.searchParams.get('max');
            }
            if (url.searchParams.has('sale')) {
                if (url.searchParams.get('sale') == '1') {
                    this.selected.sale = true;
                }
            }

            if (this.instantCategory) {
                this.selected.IdOfInstantCategory = this.instantCategory.id;
            }
            this.selected.childCategories = this.childCategories;

            if (this.instantManufacturer) {
                this.selected.IdOfInstantManufacturer = this.instantManufacturer.id;
            }

            // Проверка является ли страница ссылкой dropdown'а (разворачивающийся элемент)
            if (this.dropdown) {
                for (var key in this.dropdown) {
                    if (this.dropdown[key].link_ru == url.pathname || this.dropdown[key].link_uk == url.pathname) {
                        let mainElem = this.dropdown[key];
                        this.dropdown.splice(key, 1);
                        this.dropdown.unshift(mainElem);
                    }
                }
            }

            var cd = new Date();
            this.date = this.zeroPadding(cd.getFullYear(), 4) + '-' + this.zeroPadding(cd.getMonth()+1, 2) + '-' + this.zeroPadding(cd.getDate(), 2);


            this.loadTags();
        },


        methods: {
            copyFiltersToSelected: function (filters) {
                for (let filter of filters) {
                    let idStr = filter.id.toString()
                    // this.selected.sel_filters[filter.id] = [];
                    this.selected.sel_filters[idStr] = [];
                }
            },

            isFilterHasProducts: function (filter) {
                for (let attr of filter.attributes) {
                    if (attr.products_count != 0) {
                        return true;
                    }
                }
                return false;
            },

            // Удаление выбранного фильтра (который отображается в верхней панели)
            deleteParam: function (filterId) {
                for (let filter of this.selected.sel_filters) {
                    if (!(typeof filter === 'undefined')) {
                        if (filter.length) {
                            for (let id of filter) {
                                if (filterId == id) {
                                    filter.splice(filter.indexOf(id), 1);
                                }
                            }
                        }
                    }
                }
                this.loadProducts();
            },

            // Отдельное удаление выбранного тега
            deleteTag: function (group, id) {
                group.splice(group.indexOf(id), 1);
                this.loadProducts();
            },

            // Подгрузка товаров по выбранным фильтрам
            loadProducts: function () {
                this.selected.page = this.pageNumber;
                this.selected.fakePageForMoreProducts = this.pageNumber;

                axios.get('/api/getForCatalogGlasses/products', {
                    params: this.selected
                })
                    .then((response) => {
                        this.products = response.data.products;
                        this.countProducts = response.data.countProducts;
                        this.loading = false;

                        // Обнуление страницы если ?page= больше чем кол-во страниц
                        if (this.pageNumber + 1 > this.pageCount) {
                            this.pageNumber = 0;
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            // Загрузка товаров по кнопке "показать ещё"
            loadMoreProducts: function () {
                this.selected.fakePageForMoreProducts += 1;

                axios.get('/api/getForCatalogGlasses/products', {
                    params: this.selected
                })
                    .then((response) => {
                        this.products = this.products.concat(response.data.products);
                        this.countProducts = response.data.countProducts;
                        this.loading = false;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            loadTags: function () {
                axios.get('/api/getForCatalogGlasses/tags', {
                    params: {
                        instantCategories: this.childCategories,
                        idOfInstantManufacturer: this.instantManufacturer ? this.instantManufacturer.id : null
                    },
                })
                    .then((response) => {
                        this.tags = response.data;

                        let url = new URL(window.location.href);

                        if (url.searchParams.has('t')) {
                            let tags = url.searchParams.get('t').split('_');

                            for (let sel_tag of tags) {
                                for (let tag of this.tags) {
                                    if (tag.slug_ru == sel_tag || tag.slug_uk == sel_tag) {
                                        this.selected.tags.push(tag.id);
                                    }
                                }
                            }
                        } else if (this.instantRedirect) {
                            for (let sel_tag of this.instantRedirect.tags) {
                                for (let tag of this.tags) {
                                    if (tag.id == sel_tag.id) {
                                        this.selected.tags.push(tag.id);
                                    }
                                }
                            }
                        }

                        if (this.instantTag) {
                            for (let tag of this.tags) {
                                if (tag.id == this.instantTag.id) {
                                    this.selected.tags.push(tag.id);
                                }
                            }
                        }

                        // Загружаю продукты в инстансе тегов.
                        this.loadProducts();

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            // Получить со стороннего АПИ возможные цены
            loadValPrice: function () {
                axios.get('/api/getValPrice', {
                    params: {
                        instantCategories: this.childCategories,
                        idOfInstantManufacturer: this.instantManufacturer ? this.instantManufacturer.id : null,
                        idOfInstantTag: this.instantTag ? this.instantTag.id : null,
                    },
                })
                    .then((response) => {
                        let url = new URL(window.location.href);

                        this.maxValPrice = response.data.max;
                        this.minValPrice = response.data.min;

                        $("#slider-range").slider({
                            range: true,
                            min: this.minValPrice,
                            max: this.maxValPrice,
                            values: [
                                url.searchParams.has('min') ? url.searchParams.get('min') : this.minValPrice,
                                url.searchParams.has('max') ? url.searchParams.get('max') : this.maxValPrice
                            ],
                            slide: function( event, ui ) {
                                $(this).parent().find('.catalog-filters__slider-val--min').text(ui.values[0]);
                                $(this).parent().find('.catalog-filters__slider-val--max').text(ui.values[1]);
                            }
                        });
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            // Слежение за изменениями ползунка цены
            watchPrice: function () {
                this.prices = setInterval(() => {
                    let isItNewData = false;
                    if (this.selected.prices[0] != Number(this.$refs.start.innerText) || this.selected.prices[1] != Number(this.$refs.end.innerText)) {
                        isItNewData = true;
                    }
                    this.selected.prices[0] = Number(this.$refs.start.innerText);
                    this.selected.prices[1] = Number(this.$refs.end.innerText);

                    let url = new URL(window.location.href);

                    if (this.minValPrice != this.selected.prices[0]) {
                        url.searchParams.set('min', this.selected.prices[0]);
                    } else if (this.minValPrice == this.selected.prices[0]) {
                        url.searchParams.delete('min');
                    }
                    if (this.maxValPrice != this.selected.prices[1]) {
                        url.searchParams.set('max', this.selected.prices[1]);
                    } else if (this.maxValPrice == this.selected.prices[1]) {
                        url.searchParams.delete('max');
                    }

                    if (isItNewData) {
                        history.pushState(null, null, url);
                    }
                }, 1000)
            },

            // Кнопки "следующая страница" и "предыдущая страница"
            nextPage(){
                this.pageNumber++;
            },
            prevPage(){
                this.pageNumber--;
            },

            // Получить первые два слова для тайтла товара
            firstTwoLetterInProduct(product) {
                if (this.locale == 'ru') {
                    return product.title_ru.split( " " ).slice(0, 2).join(' ');
                } else {
                    return product.title_uk.split( " " ).slice(0, 2).join(' ');
                }
            },

            restLetterInProduct(product) {
                if (this.locale == 'ru') {
                    return product.title_ru.split( " " ).slice(2).join(' ');
                } else {
                    return product.title_uk.split( " " ).slice(2).join(' ');
                }
            },

            // Получить названия в верхнем баре для тех фильтров которые имеют не ясное обозначение
            // Если нужно отобразить градиент, то в баре будет "Градиент: да"
            getNameForUnclearFilter(id) {
                switch (id) {
                    case 15:
                        for (let filter of this.filters) {
                            if (filter.id == 15) {
                                let title = (this.locale == 'ru' ? filter.title_ru : filter.title_uk) + ': ';
                                return title;
                            }
                        }
                        break;
                    case 18:
                        for (let filter of this.filters) {
                            if (filter.id == 18) {
                                let title = (this.locale == 'ru' ? filter.title_ru : filter.title_uk) + ': ';
                                return title;
                            }
                        }
                        break;
                    case 19:
                        for (let filter of this.filters) {
                        if (filter.id == 19) {
                            let title = (this.locale == 'ru' ? filter.title_ru : filter.title_uk) + ': ';
                            return title;
                        }
                    }
                        break;
                    case 20:
                        for (let filter of this.filters) {
                            if (filter.id == 20) {
                                let title = (this.locale == 'ru' ? filter.title_ru : filter.title_uk) + ': ';
                                return title;
                            }
                        }

                        break;
                }
            },
            isThisInstantAttr: function (attrId) {
                if (this.instantCategory) {
                    if (this.instantCategory.attributes) {
                        for (let attr of this.instantCategory.attributes) {
                            if (attr.id == attrId) {
                                return true;
                            }
                        }
                    }
                    return false;
                }

                return false;
            },

            /*
            paginatedData() {
                const start = this.pageNumber * this.size,
                    end = start + this.size;
                return this.products.slice(start, end);
            },*/

            zeroPadding: function (num, digit) {
                var zero = '';
                for (var i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            },


            clear: function() {
                if (this.instantCategory || this.childCategories || this.instantManufacturer || this.instantTag || this.instantRedirect) {
                    if (this.locale == 'ru') {
                        window.location.href = window.location.origin + '/ru/catalog';
                    } else if (this.locale == 'uk') {
                        window.location.href = window.location.origin + '/catalog';
                    }
                }

                this.copyFiltersToSelected(this.filters);
                this.selected.tags = [];
                this.selected.sale = false;
            },

            generateUrlWithFilters: function () {
                let url = new URL(window.location.href);

                let attrs = [];
                for (let filter of this.filters) {
                    if (this.selected.sel_filters[filter.id].length != 0) {

                        for (let sel_fil of this.selected.sel_filters[filter.id]) {
                            for (let attr of filter.attributes) {
                                if (sel_fil == attr.id) {
                                    attrs.push(this.getLang ? attr.slug_ru : attr.slug_uk)
                                }
                            }
                        }


                    }
                }
                attrs = attrs.join('_');
                if (url.searchParams.has('f')) {
                    if (attrs == '') {
                        url.searchParams.delete('f');
                    } else {
                        url.searchParams.set('f', attrs);
                    }
                } else {
                    url.searchParams.append('f', attrs);
                }

                history.pushState(null, null, url);
            },

            generateUrlWithTags: function () {
                let url = new URL(window.location.href);
                // Обработчик для тегов (отдельно)
                let tags = [];
                for (let sel_tag of this.selected.tags) {
                    for (let tag of this.tags) {
                        if (tag.id == sel_tag) {
                            tags.push(this.getLang ? tag.slug_ru : tag.slug_uk)
                        }
                    }
                }
                tags = tags.join('_');
                if (url.searchParams.has('t')) {
                    if (tags == '') {
                        url.searchParams.delete('t');
                    } else {
                        url.searchParams.set('t', tags);
                    }
                } else {
                    url.searchParams.append('t', tags);
                }
                history.pushState(null, null, url);
            },

            scrollToTop: function () {
                $("body,html").animate({
                    scrollTop: 100
                }, 400);
            }
        },

        watch: {
            pageNumber: function (newPageNumber, oldPageNumber) {
                this.selected.page = newPageNumber;
                this.selected.fakePageForMoreProducts = newPageNumber;

                let url = new URL(window.location.href);
                if (url.searchParams.has('page')) {
                    if (newPageNumber == 0) {
                        url.searchParams.delete('page');
                    } else {
                        url.searchParams.set('page', newPageNumber + 1);
                    }
                } else {
                    url.searchParams.append('page', newPageNumber + 1);
                }
                history.pushState(null, null, url);


                this.loadProducts();
                this.scrollToTop();
            },
            'selected.sel_filters': {
                handler: function (oldVal, newVal) {
                    this.generateUrlWithFilters();
                },
                deep: true,
            },
            'selected.tags': {
                handler: function (oldVal, newVal) {
                    this.generateUrlWithTags();
                },
                deep: true,
            },
            'selected.sale': {
                handler: function (oldVal, newVal) {
                    let url = new URL(window.location.href);


                    if (this.selected.sale == true) {
                        url.searchParams.set('sale', '1');
                    } else if (this.selected.sale == false) {
                        url.searchParams.delete('sale');
                    }

                    history.pushState(null, null, url);
                },
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

            pageCount: function () {
                let l = this.countProducts,
                    s = this.size;
                return Math.ceil(l/s);
                // оригинал
                // return Math.floor(l/s);
            },

            sortKey: function() {
                return this.selectSort.split(':')[0];
            },

            sortDir: function() {
                return this.selectSort.split(':')[1];
            },

            getMoreProductsNumber: function () {
                if ((this.countProducts - ((this.selected.page + 1) * 11 + ((this.selected.fakePageForMoreProducts - this.selected.page) * 12))) >= 12) {
                    return 12;
                } else {
                    return (this.countProducts - ((this.selected.page + 1) * 11 + ((this.selected.fakePageForMoreProducts - this.selected.page) * 12)));
                }
            },
        },

        beforeDestroy () {
            clearInterval(this.selected.prices)
        },

        created () {
            /*let url = new URL(window.location.href);
            for (let filter of this.filters) {
                if (url.searchParams.has(filter.slug_ru)) {
                    for (let selectedParam of url.searchParams.get(filter.slug_ru).split('_')) {
                        for (let attr of filter.attributes) {
                            if (attr.slug_ru == selectedParam) {
                                this.selected.sel_filters[filter.id].push(attr.id);
                            }
                        }
                    }
                }
            }*/


            this.loadValPrice();
            this.copyFiltersToSelected(this.filters);
            this.watchPrice();
        }
    }
</script>

<style scoped>

</style>