<template>
    <div class="product__iteam">
        <a :href="getLang ? '/ru/product/' + product.slug_ru : '/product/' + product.slug_uk" style="display: flex; align-items: center; flex-direction: column; text-decoration: none; margin: 15px 0 0 0">

        <img :src="'/house/uploads/' + product.image" style="width: 94%;">

        <p class="product__text">{{ firstTwoLetterInProduct(product) }}</p>
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
        <div class="product__foto_btn" v-if="product.stock">{{ product.stock.label }}</div>
        </a>


        <div class="product__hide">
            <div class="product__hide_inner">
                <div class="product__hide_colors" v-if="relations">

                        <img @click="prevPage()" v-if="pageOfRelation > 0" class="product__hide_iteam" src="/assets/front/img/left.svg" style="width: 25%; height: 30px;">

                        <img class="product__hide_iteam" :src="'/house/uploads/' + relation.image" alt=""
                          v-for="(relation, key) in paginatedRelations" @click="swapProduct(key)">

                        <img @click="nextPage()" v-if="pageOfRelation < countOfPages - 1" class="product__hide_iteam" src="/assets/front/img/next.svg" style="width: 25%; height: 30px;">

                    <!--<img class="product__hide_iteam" :src="'/house/uploads/' + img.name" alt="" v-for="img in product.galleries" v-if="!(img.name.substr(0, 7) == 'futlyar')">
                    <div class="product__icon_box">
                        <img class="product__hide_icon" src="/assets/front/img/next.svg" alt="">
                    </div>-->
                </div>
            </div>

            <a :href="getLang ? '/ru/product/' + product.slug_ru : '/product/' + product.slug_uk" style="display: flex; align-items: center; flex-direction: column; text-decoration: none; margin: 15px 0 0 0">

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
                    <object v-if="product.availability == 1" @click="addToCart()">
                        <!--<a :href="getLang ? 'ru/basket' : '/basket'">-->
                        <a href="#">
                            <span>{{ translate.to_cart }}</span>
                        </a>
                    </object>
                    <span v-if="!(product.availability == 1)">{{ translate.no_availability }}</span>
                </div>
            </div>

            </a>
        </div>
    </div>
</template>

<script>
    export default {

        name: "ProductElem",

        data() {
            return {
                fullProduct: [],
                relations: [],
                paginatedRelations: [],
                pageOfRelation: 0,
                countOfPages: 0,
            }
        },
        props: [
            'translate',
            'key1',
            'product',
            'locale',
        ],

        mounted() {
            if (this.product.relations) {
                this.relations = this.product.relations;
            }

            this.countOfPages = Math.floor((this.relations.length - 5) / 4) + 2;

            if (this.relations.length > 6) {
                this.paginatedRelations = this.relations.slice(0, 5);
            } else {
                this.paginatedRelations = this.relations;
            }
        },

        watch: {
            pageOfRelation: function () {
                if (this.pageOfRelation == 0) {
                    this.paginatedRelations = this.relations.slice(0, 5);
                } else if (this.pageOfRelation == this.countOfPages) {

                } else {
                    let lastPageStartIndex = (this.countOfPages - 1) * 4 + 1;
                    this.paginatedRelations = this.relations.slice(lastPageStartIndex);
                }
            }
        },

        methods: {
            nextPage() {
                this.pageOfRelation++;
            },

            prevPage() {
                this.pageOfRelation--;
            },

            firstTwoLetterInProduct(product) {
                if (this.locale == 'ru') {
                    return product.title_ru.split(" ").slice(0, 2).join(' ');
                } else {
                    return product.title_uk.split(" ").slice(0, 2).join(' ');
                }
            },

            restLetterInProduct(product) {
                if (this.locale == 'ru') {
                    return product.title_ru.split(" ").slice(2).join(' ');
                } else {
                    return product.title_uk.split(" ").slice(2).join(' ');
                }
            },

            swapProduct(relationIndex) {
                console.log(relationIndex);

                let mainProd = this.product;
                this.product = this.paginatedRelations[relationIndex];
                this.paginatedRelations.splice(relationIndex, 1, mainProd);
            },

            addToCart: function () {
                axios.get('/api/getProductWithOptions', {
                    params: {
                        'slug': this.product.slug_ru,
                        'locale': this.locale,
                    }
                })
                    .then((response) => {
                        console.log(response.data);
                        this.fullProduct = response.data;

                        if(true){
                            let sel = true;

                            for(let i = 0;i < this.fullProduct.options.length;i++){
                                if(this.fullProduct.options[i].option.need === '1'){
                                    if(this.fullProduct.options[i].select === null){
                                        sel = false;
                                    }
                                }
                            }
                            let self = this;
                            if(sel){
                                this.$store.commit('addToCart', this.fullProduct);
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

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                // if(this.fullProduct.availability){


            },
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
