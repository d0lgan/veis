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
                <div class="product__king first__kind xs-hidden">
                    <pre><span class="product__king_active" @click="productKingWindow = 'left'">{{ getLang ? leftStock.title_ru : leftStock.title_uk }}</span>  /  <span @click="productKingWindow = 'right'">{{ getLang ? rightStock.title_ru : rightStock.title_uk }}</span></pre>
                </div>

                <div class="king__window" v-if="productKingWindow == 'left'">
                    <div class="product__name">
                        <pre><span class="product__name_active" @click="productNameWindow = 'gloves'">{{ translate.gloves }}</span>   /   <span @click="productNameWindow = 'glasses'">{{ translate.sunglasses }}</span>   /   <span @click="productNameWindow = 'bags'">{{ translate.bags }}</span>   /   <span @click="productNameWindow = 'umbrellas'">{{ translate.umbrellas }}</span></pre>
                    </div>
                    <div class="product__block" v-if="productNameWindow == 'gloves'">

                    </div>

                    <div class="product__block" v-if="productNameWindow == 'glasses'">
                        <div class="product__inner">
                            <div v-for="product in leftGlasses.slice(0, 4)">
                                    <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div v-for="product in leftGlasses.slice(4, 8)">
                                <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                            </div>
                        </div>
                    </div>

                    <div class="product__block"  v-if="productNameWindow == 'bags'">

                    </div>

                    <div class="product__block"  v-if="productNameWindow == 'umbrellas'">

                    </div>
                </div>

                <div class="king__window" v-if="productKingWindow == 'right'">
                    <div class="product__name">
                        <pre><span class="product__name_active" @click="productNameWindow = 'gloves'">{{ translate.gloves }}</span>   /   <span @click="productNameWindow = 'glasses'">{{ translate.sunglasses }}</span>   /   <span @click="productNameWindow = 'bags'">{{ translate.bags }}</span>   /   <span @click="productNameWindow = 'umbrellas'">{{ translate.umbrellas }}</span></pre>
                    </div>
                    <div class="product__block" v-if="productNameWindow == 'gloves'">

                    </div>

                    <div class="product__block" v-if="productNameWindow == 'glasses'">
                        <div class="product__inner">
                            <div v-for="product in rightGlasses.slice(0, 4)">
                                <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                            </div>
                        </div>
                        <div class="product__inner">
                            <div v-for="product in rightGlasses.slice(4, 8)">
                                <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                            </div>
                        </div>
                    </div>

                    <div class="product__block"  v-if="productNameWindow == 'bags'">

                    </div>

                    <div class="product__block"  v-if="productNameWindow == 'umbrellas'">

                    </div>
                </div>


                <div class="product__btn_box">
                    <a class="intro__btn" href="#/">{{ translate.show_all }} <span>{{ translate.gloves }}</span></a>
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
            'leftGlasses',
            'rightGlasses',
        ],
        data() {
            return {
                productKingWindow: 'left',
                productNameWindow: 'gloves',
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
        }
    }
</script>

<style scoped>

</style>