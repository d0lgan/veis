<template>
    <div class="root">

        <section class="product">
            <div class="mobile__product">
                <div class="media__foot_iteam">
                    <span>{{ getLang ? leftStock.title_ru : leftStock.title_uk }}</span>
                    <img src="/assets/front/img/down_white.png">
                </div>
                <div class="media__foot_hide">
                    <a href="#/" v-for="(dropdown, key) in dropdowns" @click="dropKey = key; dropStock = 'left'">{{ getLang ? dropdown.title_ru.toUpperCase() : dropdown.title_uk.toUpperCase() }}</a>
                </div>

                <div class="media__foot_iteam">
                    <span>{{ getLang ? rightStock.title_ru : rightStock.title_uk }}</span>
                    <img src="/assets/front/img/down_white.png">
                </div>
                <div class="media__foot_hide">
                    <a href="#/" v-for="(dropdown, key) in dropdowns" @click="dropKey = key; dropStock = 'right'">{{ getLang ? dropdown.title_ru.toUpperCase() : dropdown.title_uk.toUpperCase() }}</a>
                </div>
            </div>
            <div class="conteiner">
                <div class="product__king xs-hidden">
                    <pre><span :class="{ product__king_active: dropStock == 'left' }" @click="dropStock = 'left'">{{ getLang ? leftStock.title_ru : leftStock.title_uk }}</span>  /  <span :class="{ product__king_active: dropStock == 'right' }" @click="dropStock = 'right'">{{ getLang ? rightStock.title_ru : rightStock.title_uk }}</span></pre>
                </div>

                <div class="king__window">
                    <div class="product__name">
                        <pre style="display: flex; align-items: center; justify-content: center;">
                            <div v-for="(dropdown, key) in dropdowns">{{ key != 0 ? '/' : ''}}<span :class="{ product__name_active: key == dropKey }"
                                      @click="dropKey = key">{{ getLang ? dropdown.title_ru.toUpperCase() : dropdown.title_uk.toUpperCase() }}</span></div>
                        </pre>
                    </div>

                    <!--<div class="product__block" v-show="dropStock == 'left'">
                        <site-products-slider-component v-for="(dropdown, key1) in dropdowns" v-show="key1 == dropKey" :key="key1" :locale="locale" :products="dropdown.products.left" :translate="translate"></site-products-slider-component>
                    </div>

                    <div class="product__block" v-show="dropStock == 'right'">
                        <site-products-slider-component v-for="(dropdown, key2) in dropdowns" v-show="key2 == dropKey" :key="key2" :locale="locale" :products="dropdown.products.right" :translate="translate"></site-products-slider-component>
                    </div>-->

                    <carousel :navigationEnabled="true" :perPageCustom="[[500, 1], [800, 2], [1100, 3], [1500, 4], [1700, 5]]" navigationNextLabel="" navigationPrevLabel="">
                        <slide v-for="product in products" :key="product.id">
                            <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                        </slide>
                    </carousel>


                </div>

                <div class="product__btn_box">
                    <a class="intro__btn" style="margin-right: 0px !important;" :href="getLang ? dropdowns[dropKey].link_ru : dropdowns[dropKey].link_uk">{{ translate.show_all }} <span>{{ getLang ? dropdowns[dropKey].title_ru : dropdowns[dropKey].title_uk }}</span></a>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import { Carousel, Slide } from 'vue-carousel';

    export default {
        name: "ProductsCard",
        components: {
            Carousel,
            Slide
        },
        props: [
            'locale',
            'translate',
            'leftStock',
            'rightStock',
            'dropdowns',
        ],
        data() {
            return {
                products: [],
                dropKey: 0,
                dropStock: 'left',
                date: '',
            }
        },
        methods: {
            zeroPadding: function (num, digit) {
                var zero = '';
                for (var i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            },

            changeDrop: function () {
                if (this.dropStock == 'left') {
                    this.products = this.dropdowns[this.dropKey].products.left;
                } else if (this.dropStock == 'right') {
                    this.products = this.dropdowns[this.dropKey].products.right;
                }
            }
        },
        watch: {

            dropKey: function (val) {
                this.changeDrop();
            },

            dropStock: function (val) {
                this.changeDrop();
            }

        },
        computed: {
            getLang: function() {
                if (this.locale == 'ru') {
                    return true;
                } else if (this.locale == 'uk') {
                    return false;
                }
            }
        },

        mounted() {
            var cd = new Date();
            this.date = this.zeroPadding(cd.getFullYear(), 4) + '-' + this.zeroPadding(cd.getMonth()+1, 2) + '-' + this.zeroPadding(cd.getDate(), 2);

            this.changeDrop();
            },

    }
</script>

<style scoped>
    .product__iteam {
        margin: 0 auto 98px auto !important;
    }

    @media (max-width: 560px) {
        .conteiner {
            max-width: calc(100% - 50px); }
    }
</style>
