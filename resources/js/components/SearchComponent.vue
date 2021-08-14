     <template>
    <div>
        <div class="map__head_input head__search">
<!--            <input id="head__input" type="text" placeholder="{{ __('site.menu.query') }}">-->
            <input id="head__input" type="text" v-model.trim="request" v-on:keyup.enter="redirect()" :placeholder="getLang ? 'Введите запрос' : 'Введіть запит'">

            <svg id="seacrh" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
            <img class="close__icon" src="/assets/front/img/close.svg" alt="close">


            <div class="head__hide" v-show="products">
                <p v-for="product in products.slice(0, 4)"><a style="color: #000; text-decoration: none;" :href="getLang ? ('/ru/produce/' + product.slug_ru) : ('/produce/' + product.slug_uk)">{{ getLang ? product.title_ru : product.title_uk }}</a></p>
                <a @click="redirect()"><div class="head__btn">{{ getLang ? 'посмотреть все результаты' : 'подивитися всі результати' }} {{ countProducts }}</div></a>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                request: null,
                products: [],
                countProducts: 0,
                selected: {
                    query: '',
                    page: 0,
                    fakePageForMoreProducts: 0,
                    limit: 11,
                }

            };
        },

        props: [
            'locale',
        ],

        watch: {
            request(value) {
                if (value.length >= 2) {
                    this.selected.query = this.request;
                    this.debouncedGetAnswer()
                }
            }
        },

        created: function () {
            // _.debounce — это функция lodash, позволяющая ограничить то,
            // насколько часто может выполняться определённая операция.
            // В данном случае мы ограничиваем частоту обращений к yesno.wtf/api,
            // дожидаясь завершения печати вопроса перед отправкой ajax-запроса.
            // Узнать больше о функции _.debounce (и её родственнице _.throttle),
            // можно в документации: https://lodash.com/docs#debounce
            this.debouncedGetAnswer = _.debounce(this.loadProducts, 500)
        },

        methods: {
            loadProducts: function () {

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

            redirect: function () {
                if (this.getLang) {
                    window.location.href = window.location.origin + '/ru/search?q=' + this.request;
                } else if (!this.getLang) {
                    window.location.href = window.location.origin + '/search?q=' + this.request;
                }

            }
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
                /*if ((this.countProducts - ((this.selected.page + 1) * 11 + ((this.selected.fakePageForMoreProducts - this.selected.page) * 12))) >= 12) {
                    return 12;
                } else {
                    return (this.countProducts - ((this.selected.page + 1) * 11 + ((this.selected.fakePageForMoreProducts - this.selected.page) * 12)));
                }*/
                return 12;
            },
        },
    }
</script>
<style>/*
    .search {
        border-radius: 5px;
        border: 1px solid #eee;
        padding: 20px;
        position: absolute;
        width: 100%;
        top: 100%;
        left: 0;
        background: #fff;
        z-index: 10;
    }*/
</style>