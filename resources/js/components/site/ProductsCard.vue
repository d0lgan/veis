<template>
    <div class="root">
        <section class="product">
            <div class="mobile__product">
                <div class="media__foot_iteam">
                    <span>{{ getLang ? leftStock.title_ru : leftStock.title_uk }}</span>
                    <img src="/assets/front/img/down_white.png">
                </div>
                <div class="media__foot_hide">
                    <a href="#/">{{ translate.gloves }}</a>
                    <a href="#/">{{ translate.sunglasses }}</a>
                    <a href="#/">{{ translate.bags }}</a>
                    <a href="#/">{{ translate.umbrellas }}</a>
                </div>

                <div class="media__foot_iteam">
                    <span>{{ getLang ? rightStock.title_ru : rightStock.title_uk }}</span>
                    <img src="/assets/front/img/down_white.png">
                </div>
                <div class="media__foot_hide">
                    <a href="#/">{{ translate.gloves }}</a>
                    <a href="#/">{{ translate.sunglasses }}</a>
                    <a href="#/">{{ translate.bags }}</a>
                    <a href="#/">{{ translate.umbrellas }}</a>
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
                    <div class="product__block">
                        <site-products-slider-component :locale="locale" :key1="componentKey" :products="products" :translate="translate"></site-products-slider-component>
                    </div>
                </div>

                <div class="product__btn_box">
                    <a class="intro__btn" :href="getLang ? dropdowns[dropKey].link_ru : dropdowns[dropKey].link_uk">{{ translate.show_all }} <span>{{ getLang ? dropdowns[dropKey].title_ru : dropdowns[dropKey].title_uk }}</span></a>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "ProductsCard",
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
                componentKey: 0,
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

            forceRender: function () {
                this.componentKey += 1;
            },

            changeDrop: function () {
                if (this.dropStock == 'left') {
                    this.products = this.dropdowns[this.dropKey].products.left;
                } else if (this.dropStock == 'right') {
                    this.products = this.dropdowns[this.dropKey].products.right;
                }

                this.forceRender();
            }
        },
        watch: {
            dropKey: function () {
                this.changeDrop();
            },
            dropStock: function () {
                this.changeDrop();
            },
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

</style>