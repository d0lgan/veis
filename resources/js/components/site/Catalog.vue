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
                        <a :href="getLang ? '/ru' : '/uk'" class="breadcrumbs__link">{{ translate.store }}</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru/catalog' : '/uk/catalog'" class="breadcrumbs__link">{{ translate.catalog }} </a>
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
                        <button class="catalog__btns-item">
                            {{ translate.use_filter }}
                        </button>
                    </div>
                    <div class="catalog-filters__box">
                        <div class="catalog-filters__block catalog-filters__block--mainlinks">
                            <div class="catalog-filters__block-head activee">
                                <p class="catalog-filters__type">{{ translate.glasses }}</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="8" viewBox="0 0 20 8"><g><g><path fill="#5c5c5c" d="M-.01.254L.1 0l9.902 7.574 9.885-7.52.11.25-9.777 7.437.004.003-.11.253-.116-.088-.043.033-.043-.099z"></path></g></g></svg>
                            </div>
                            <div style="display: none;" class="catalog-filters__block-body">
                                <a href="#" class="catalog-filters__type">{{ translate.gloves }}</a>
                                <a href="#" class="catalog-filters__type">{{ translate.umbrellas }}</a>
                                <a href="#" class="catalog-filters__type">{{ translate.bags }}</a>
                                <a href="#" class="catalog-filters__type">{{ translate.portfolios }}</a>
                                <a href="#" class="catalog-filters__type">{{ translate.wallets }}</a>
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
                        <div class="catalog-filters__block" v-for="filter in filters.slice(0, 5)" :key="filter.id">
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
                        <div class="catalog-filters__slider-box">
                            <input type="text" hidden :value="maxValPrice" id="maxValPrice">
                            <span class="catalog-filters__slider-val catalog-filters__slider-val--min" ref="start">0</span>
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
                        <div class="catalog-filters__block" v-for="filter in filters.slice(5)" :key="filter.id">
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
                                    <span class="catalog-filters__item-name">{{ getLang ? tag.name_ru : tag.name_uk }}  </span> /
                                    <span class="catalog-filters__item-num">{{ tag.products_count }}</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div style="padding: 22px 18px 22px 40px;" @click="pageNumber = 0">
                        <a href="#" class="product-card__btn product-card__btn--default" @click="loadProducts">
                            <span class="product-card__btn-inner">{{ translate.use_filter }}</span>
                        </a>
                    </div>

                    <button class="catalog__clear" @click="clear">{{ translate.reset }}
                        <img src="/assets/front/img/close-tag.png" alt="">
                    </button>
                </div>

                <div class="catalog__box" style="width: 100%;">
                    <div class="catalog__head">
                        <div class="catalog__tags">
                            <div class="catalog__tag">
                                <span class="catalog__tag-text">Кол-во продуктов: {{ countProducts }}</span>
                            </div>
                            <!-- Тут я прохожусь по свойству selected.sel_filters
                            и не пускаю дальшк если в элементе свойства пусто или пустой массив. -->
                            <div class="catalog__tag" v-for="(filter, index) in selected.sel_filters" v-if="!(filter == undefined || ((typeof filter !== 'undefined') ? (filter.length == 0) : false))">
                                <span class="catalog__tag-text" style="margin-right: 5px;">{{ getNameForUnclearFilter(index) }}</span>
                                <!-- Тут я прохожусь по выбранным свойствам фильтра а именно по их айдишникам -->
                                <div v-for="filterId in filter">
                                    <!-- А тут я сравниваю выбранный айди с айдишниками из абсолютно всех фильтров пришедших с бека (props "filters") -->
                                    <div v-for="valFil in filters" class="catalog__tag__img" @click="pageNumber = 0">
                                        <div v-for="attr in valFil.attributes" v-if="attr.id == filterId" @click="deleteParam(filterId)" class="catalog__tag">
                                            <span class="catalog__tag-text">{{ attr.name_ru }}</span>
                                            <img :src="'/assets/front/img/close-tag.png'" alt="сlose">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="catalog__tag" v-for="selTags in selected.tags">
                                <div class="catalog__tag catalog__tag__img" v-for="tag in tags" @click="deleteTag(selected.tags, selTags)" v-if="selTags == tag.id">
                                    <span class="catalog__tag-text">{{ getLang ? tag.name_ru : tag.name_uk }}</span>
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

                        <!--<a :href="getLang ? '/produce/' + product.slug_ru : '/uk/produce/' + product.slug_uk" style="display: flex; align-items: center; flex-direction: column; text-decoration: none; margin: 15px 15px 0 0">

                        <img :src="'/house/uploads/' + product.image" style="width: 94%;">

                        <p class="product__text">{{ firstThreeLetterInProduct(product) }}</p>
                        &lt;!&ndash;<p class="product__number">{{ translate.color }} <span v-for="attr in product.attributes">
                                <span v-if="attr.group_attribute_id == 18">{{ getLang ? attr.name_ru : attr.name_uk}} </span>
                            </span></p>&ndash;&gt;
                        <p class="product__number">{{ restLetterInProduct(product) }}</p>

                        <div v-if="(!product.end_stock && product.percent) || (product.end_stock && (product.end_stock > date))">
                            <p class="product__prise lowprise">{{ product.undiscounted }} грн</p>
                            <p class="lowprise__number">{{ translate.price }} {{ product.price }} грн</p>
                        </div>
                        <p class="product__prise" v-else>{{ translate.price }} {{ product.price }} грн</p>

                        &lt;!&ndash;<div class="product__foto_btn">New</div>&ndash;&gt;

                        <div class="product__hide">
                            <div class="product__hide_inner">
                                <div class="product__hide_colors">
                                    <img class="product__hide_iteam" :src="'/house/uploads/' + img.name" alt="" v-for="img in product.galleries" v-if="!(img.name.substr(0, 7) == 'futlyar')">
                                    &lt;!&ndash;<div class="product__icon_box">
                                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                                    </div>&ndash;&gt;
                                </div>
                            </div>

                            <div v-if="(!product.end_stock && product.percent) || (product.end_stock && (product.end_stock > date))">
                                <p class="product__hide_prise lowprise">{{ product.undiscounted }} грн</p>
                                <div class="product__hide_prise lowprise__number">
                                    {{ translate.price }} {{ product.price }} грн
                                </div>
                            </div>
                            <div class="product__hide_prise" v-else>
                                {{ translate.price }} {{ product.price }} грн
                            </div>
                            <div class="product__hide_box">
                                <span>{{ translate.watch }}</span>

                                <div class="product__cart_box">
                                    <img src="/assets/front/img/cart.svg" alt="">
                                    <a href="#">{{ translate.buy }}</a>
                                </div>
                            </div>
                        </div>
                        </a>
                    -->
                        <site-product-elem-component v-for="product in products" :key="product.id" :product="product" :translate="translate" :locale="locale"></site-product-elem-component>

                        <div class="catalog__more" @click="loadMoreProducts()" v-if="pageCount - selected.fakePageForMoreProducts > 1">
                            <span class="catalog__more-link"></span>
                            <div class="catalog__more-main">
                                <span class="catalog__more-num">{{ getMoreProductsNumber }}</span>
                                <span class="catalog__more-num catalog__more-num--small">ПОКАЗАТЬ ЕЩЕ</span>
                            </div>
                            <p class="product__text">В ЭТОЙ КАТЕГОРИИ</p>
                            <p class="product__number">всего <span>{{ countProducts }}</span> товаров в категории</p>
                        </div>
                    </div>

                    <a href="" class="btn__more" @click="loadMoreProducts()">ПОКАЗАТЬ ЕЩЕ  {{ getMoreProductsNumber }}</a>

                    <div class="pagination">
                        <a href="#" class="pagination__view pagination__view--prev" @click="prevPage()" v-if="!(pageNumber == 0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                                <g>
                                    <g>
                                        <path fill="#5c5c5c" d="M7 0h1L1 10l7 10H7L0 10z" />
                                    </g>
                                </g>
                            </svg>
                            {{ translate.prev }}
                        </a>
                        <ul class="pagination__list">
                            <!--<li class="pagination__item">
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
                            <li class="pagination__item pagination__item&#45;&#45;separator">
                                ...
                            </li>
                            <li class="pagination__item">
                                <a class="pagination__num" href="">72</a>
                            </li>-->
                            <li class="pagination__item" v-if="pageNumber >= 5" :class="{ active: pageNumber == 0 }">
                                <a class="pagination__num" href="#" @click="pageNumber = 0">1</a>
                            </li>

                            <li class="pagination__item" v-for="index in pageCount" :class="{ active: pageNumber == index - 1 }" v-if="(Math.abs(pageNumber + 1 - index) <= 4)">
                                <a class="pagination__num" href="#" @click="pageNumber = index - 1" v-if="(Math.abs(pageNumber + 1 - index) <= 3)">{{ index }}</a>
                                <span class="pagination__item__separator" v-if="Math.abs(pageNumber + 1 - index) == 4">...</span>
                            </li>

                            <li class="pagination__item" v-if="pageCount - pageNumber > 5" :class="{ active: pageNumber == pageCount - 1 }">
                                <a class="pagination__num" href="#" @click="pageNumber = pageCount - 1">{{ pageCount }}</a>
                            </li>
                        </ul>
                        <a href="#" class="pagination__view pagination__view--next" @click="nextPage()" v-if="!(pageNumber + 1 == pageCount)">
                            {{ translate.next }}
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
    </div>
</template>

<script>
    export default {
        name: "Catalog",
        data: function () {

            return {
                // Свойства товаров
                tags: [],
                sale: false,
                maxValPrice: 9999,
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
            // Локальный язык
            locale: {
                type: String,
                required: false,
                default: 'ru'
            },
        },

        mounted() {
            this.loadProducts();
            this.loadTags();


            window.history.pushState(null, null, 'catalog?page=' + (this.pageNumber + 1));

            console.log(1);

            var cd = new Date();
            this.date = this.zeroPadding(cd.getFullYear(), 4) + '-' + this.zeroPadding(cd.getMonth()+1, 2) + '-' + this.zeroPadding(cd.getDate(), 2);
        },

        methods: {
            copyFiltersToSelected: function (filters) {
                for (let filter of filters) {
                    let idStr = filter.id.toString()
                    // this.selected.sel_filters[filter.id] = [];
                    this.selected.sel_filters[idStr] = [];
                }
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

                /*this.selected.sel_filters.forEach((filter) => {
                    if (filter.length) {
                        filter.forEach((id) => {
                            if (filterId == id) {
                                filter.splice(filter.indexOf(id), 1);
                            }
                        });
                    }
                });*/

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
                axios.get('/api/getForCatalogGlasses/tags')
                    .then((response) => {
                        this.tags = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            // Получить со стороннего АПИ максимально возможную цену
            loadMaxValPrice: function () {
                axios.get('/api/getMaxValPrice')
                    .then((response) => {
                        console.log(response.data);
                        this.maxValPrice = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            // Слежение за изменениями ползунка цены
            watchPrice: function () {
                this.prices = setInterval(() => {
                    this.selected.prices[0] = Number(this.$refs.start.innerText);
                    this.selected.prices[1] = Number(this.$refs.end.innerText);
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

            paginatedData() {
                const start = this.pageNumber * this.size,
                    end = start + this.size;
                return this.products.slice(start, end);
            },

            zeroPadding: function (num, digit) {
                var zero = '';
                for (var i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            },


            clear: function() {
                this.copyFiltersToSelected(this.filters);
                this.selected.tags = [];
                this.selected.sale = false;
            },
        },

        watch: {
            pageNumber: function (newPageNumber, oldPageNumber) {
                this.selected.page = newPageNumber;
                this.selected.fakePageForMoreProducts = newPageNumber;
                this.loadProducts();

                window.history.pushState(null, null, 'catalog?page=' + (this.pageNumber + 1));
            },


        },

        computed: {
            console: () => console,

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
            this.loadMaxValPrice();
            this.copyFiltersToSelected(this.filters);
            this.watchPrice();
        }
    }
</script>

<style scoped>

</style>