<template>
    <div class="container">
        <div class="breadcrumbs">
            <div class="holder">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru' : '/'" class="breadcrumbs__link">{{ translate.store }}</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="" class="breadcrumbs__link">ПОИСК ПО САЙТУ</a>
                    </li>
                </ul>
            </div>
        </div>

        <section class="results">
            <div class="holder results__holder">
                <div class="results__head">
                    <div class="results__head-box">
                        <a href="/" class="back-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                                <g>
                                    <g>
                                        <path fill="#5c5c5c" d="M7 0h1L1 10l7 9v1L0 10z"></path>
                                    </g>
                                </g>
                            </svg>
                            Вернуться обратно
                        </a>

                        <p class="search-word">
                            ПОИСК: <span>{{ selected.query.toUpperCase() }}</span>
                        </p>
                    </div>
                    <p class="results__head-text">
                        НАЙДЕНО <span>{{ countProducts }}</span>
                    </p>
                </div>

                <div class="results__list">
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
        </section>
    </div>
</template>

<script>
    import $ from "jquery";

    export default {
        name: "SearchPage",
        props: {
            size:{
                type: Number,
                required: false,
                default: 11
            },
            // Запрос:
            query: {
                type: String,
                required: true,
            },
            //Перевод фраз:
            translate: {
                type: Object,
                required: false
            },

            // Локальный язык
            locale: {
                type: String,
                required: false,
                default: 'ru'
            },
        },
        data: function () {
            return {
                // Все товары
                products: [],
                countProducts: 0,
                // Пагинация
                pageNumber: 0,
                selected: {
                    query: '',
                    page: 0,
                    fakePageForMoreProducts: 0,
                    limit: 11,
                }
            }
        },

        mounted() {
            let url = new URL(window.location.href);

            if (url.searchParams.has('page')) {
                if (!isNaN(url.searchParams.get('page'))) {
                    this.pageNumber = +url.searchParams.get('page') - 1;
                }
            }
            this.selected.query = this.query;
            this.loadProducts();

        },

        methods: {
            loadProducts: function () {
                this.selected.page = this.pageNumber;
                this.selected.fakePageForMoreProducts = this.pageNumber;

                axios.get('/api/getForCatalogGlasses/search', {
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
            // Кнопки "следующая страница" и "предыдущая страница"
            nextPage(){
                this.pageNumber++;
            },
            prevPage(){
                this.pageNumber--;
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
    }
</script>

<style scoped>

</style>