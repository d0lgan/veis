<template>
    <div class="product__iteam">
        <a :href="getLang ? '/produce/' + product.slug_ru : '/uk/produce/' + product.slug_uk" style="display: flex; align-items: center; flex-direction: column; text-decoration: none; margin: 15px 15px 0 0">

        <img :src="'/house/uploads/' + product.image" style="width: 94%;">

        <p class="product__text">{{ firstThreeLetterInProduct(product) }}</p>
        <!--<p class="product__number">{{ translate.color }} <span v-for="attr in product.attributes">
                <span v-if="attr.group_attribute_id == 18">{{ getLang ? attr.name_ru : attr.name_uk}} </span>
            </span></p>-->
        <p class="product__number">{{ restLetterInProduct(product) }}</p>

        <div v-if="product.price != 0">
            <div v-if="(!product.end_stock && product.percent) || (product.end_stock && (product.end_stock > date))">
                <p class="product__prise lowprise">{{ product.undiscounted }} грн</p>
                <p class="lowprise__number">{{ translate.price }} {{ product.price }} грн</p>
            </div>
            <p class="product__prise" v-else>{{ translate.price }} {{ product.price }} грн</p>
        </div>


        <!--<div class="product__foto_btn">New</div>-->

        <div class="product__hide">
            <div class="product__hide_inner">
                <div class="product__hide_colors">
                    <img class="product__hide_iteam" :src="'/house/uploads/' + img.name" alt="" v-for="img in product.galleries" v-if="!(img.name.substr(0, 7) == 'futlyar')">
                    <!--<div class="product__icon_box">
                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                    </div>-->
                </div>
            </div>

            <div v-if="product.price != 0">
                <div v-if="(!product.end_stock && product.percent) || (product.end_stock && (product.end_stock > date))">
                    <p class="product__hide_prise lowprise">{{ product.undiscounted }} грн</p>
                    <div class="product__hide_prise lowprise__number">
                        {{ translate.price }} {{ product.price }} грн
                    </div>
                </div>
                <div class="product__hide_prise" v-else>
                    {{ translate.price }} {{ product.price }} грн
                </div>
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
    </div>
</template>

<script>
    export default {

        name: "ProductElem",

        props: [
            'translate',
            'product',
            'locale',
        ],

        methods: {
            firstThreeLetterInProduct(product) {
                if (this.locale == 'ru') {
                    return product.title_ru.split(" ").slice(0, 3).join(' ');
                } else {
                    return product.title_uk.split(" ").slice(0, 3).join(' ');
                }
            },

            restLetterInProduct(product) {
                if (this.locale == 'ru') {
                    return product.title_ru.split(" ").slice(3).join(' ');
                } else {
                    return product.title_uk.split(" ").slice(3).join(' ');
                }
            }
        },

        computed: {
            getLang: function() {
                if (this.locale == 'ru') {
                    return true;
                } else if (this.locale == 'uk') {
                    return false;
                }
            },
        },


    }
</script>

<style scoped>

</style>