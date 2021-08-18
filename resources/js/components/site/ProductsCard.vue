<template>
    <div class="root">
        <section class="product">
            <div class="mobile__product">
                <div class="media__foot_iteam">
                    <span>{{ getLang ? leftStock.title_ru : leftStock.title_uk }}</span>
                    <img src="/assets/front/img/down_white.png">
                </div>
                <div class="media__foot_hide">
                    <a href="#/" @click="productNameWindow = 'gloves'">{{ translate.gloves }}</a>
                    <a href="#/" @click="productNameWindow = 'glasses'; productKingWindow = 'left';">{{ translate.sunglasses }}</a>
                    <a href="#/" @click="productNameWindow = 'bags'">{{ translate.bags }}</a>
                    <a href="#/" @click="productNameWindow = 'umbrellas'">{{ translate.umbrellas }}</a>
                </div>

                <div class="media__foot_iteam">
                    <span>{{ getLang ? rightStock.title_ru : rightStock.title_uk }}</span>
                    <img src="/assets/front/img/down_white.png">
                </div>
                <div class="media__foot_hide">
                    <a href="#/" @click="productNameWindow = 'gloves'">{{ translate.gloves }}</a>
                    <a href="#/" @click="productNameWindow = 'glasses'; productKingWindow = 'right';">{{ translate.sunglasses }}</a>
                    <a href="#/" @click="productNameWindow = 'bags'">{{ translate.bags }}</a>
                    <a href="#/" @click="productNameWindow = 'umbrellas'">{{ translate.umbrellas }}</a>
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
                        <div class="product-more__sliderbox">
                            <span class="slider-arrow prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M24 0h1L.794 30.984 25 61l-.955.008L0 32v-2z" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <div class="product-more__slider">
                                <div v-for="product in leftGlasses" v-if="product.price || product.availability || product.image">
                                    <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                                </div>
                            </div>
                            <span class="slider-arrow next">
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
                        <div class="product-more__sliderbox">
                            <span class="slider-arrow prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M24 0h1L.794 30.984 25 61l-.955.008L0 32v-2z" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <div class="product-more__slider">
                                <div v-for="product in rightGlasses" v-if="product.price || product.availability || product.image">
                                    <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
                                </div>
                            </div>
                            <span class="slider-arrow next">
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
        },

        updated () {
            $('.product-more__slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: false,
                arrows: true,
                dots: false,
                prevArrow: '.product-more__sliderbox .prev',
                nextArrow: '.product-more__sliderbox .next',
                responsive: [
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                ]
            });
        }
    }
</script>

<style scoped>

</style>