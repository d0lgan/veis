<template>
    <div>
        <div v-if="products.length > 0" class="col-md-12 h2 mt-5">{{ translate_watch.watched }}</div>
        <div :key="update" v-if="categories.length > 0" :class="{active : categories.length > 0, show : categories.length > 0}" class="tab-pane fade" id="new-items" role="tabpanel" aria-labelledby="new-items-tab">
            <div class="col-md-12 d-flex justify-content-center">
                <div v-for="cat in categories" class="p-2"><span @click="selectProducts(cat)" :class="{'sel': cat.id === select_category.id}" class="cat">{{ cat.title }}</span></div>
            </div>
            <div  class="row">
                <div  v-for="(product, key_p) in select_products" class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <a :href="'/product/' + product.slug">
                            <img v-if="product.image" class="mx-auto d-block" style="max-width: 200px !important;" :src="'/house/uploads/' + product.image" :alt="product.alt ? product.alt : product.data[locale].meta">
                            <img v-else class="mx-auto d-block p-4" style="max-width: 200px !important;" :src="'/house/uploads/veis.svg'" :alt="product.data[local].meta">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a :href="'/product/' + product.slug">{{ product.data[locale].title }}</a>
                            </h4>

                            <div v-if="product.status_stock" class="col-md-12 h2">
                                <div class="row">
                                    <span class="col-6"><s>{{product.price}}₴</s></span><span class="text-danger col-6">{{product.price_stock}}₴</span>
                                </div>
                            </div>
                            <div v-else-if="product.undiscounted !== null && product.undiscounted > 0" class="col-md-12 h2">
                                <div class="row">
                                    <span class="col-6"><s>{{product.undiscounted}}₴</s></span><span class="text-danger col-6">{{product.price}}₴</span>
                                </div>
                            </div>
                            <div v-else class="col-md-12 h2">
                                <div class="row">
                                    <div class="col-12">
                                        {{product.price}}₴
                                    </div>
                                </div>
                            </div>

                            <img v-if="product.relations.length > 0" v-for="relation in product.relations" @click="getRelationProduct(relation.id, key_p)" :src="'/house/uploads/' + relation.image" class="col-md-4" :alt="relation.alt ? relation.alt : relation.meta_h1">
<!--                            <img :src="'/house/uploads/' + image.name" class="col-md-4" v-for="image in product.galleries">-->

                            <div v-if="settings.shop_buy" class="btn btn-primary" @click="addToCart(product)">Add Cart</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <a :href="'category/' + select_category.slug" class="btn btn-primary">{{ translate_watch.show_all }} {{ select_category.title }}</a>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";
    import { Carousel, Slide } from 'vue-carousel';

    export default {
        name: "ViewedComponent",
        components: {
            Carousel,
            Slide
        },
        props:[
            'locale',
            'settings',
            'translate_watch'
        ],
        data(){
            return{
                products: [],
                categories: [],
                select_products: [],
                date: new Date(),
                now: null,
                select_category: null,
                update: 0
            }
        },
        methods:{
            selectProducts: function (cat) {

                this.select_category = cat;

                this.select_products = [];

                for(let i = 0;i < this.products.length;i++){

                    if(this.products[i].category_id === cat.id && this.select_products.length <= 10){
                        this.select_products.push(this.products[i]);
                    }

                }
            },
            comparison: function(date){

                if(new Date(date) > new Date(this.now)){
                    return true;
                }else{
                    return false;
                }

            },
            addToCart: function(product){
                this.$store.commit('addToCart', product);

            },
            getRelationProduct: function (id, key) {
                axios.post('/api/order/getProduct', {id: id, loc: this.locale}).then((res) => {
                    this.select_products[key] = res.data;
                    this.update++;
                });
            }
        },
        mounted() {
            this.now = this.date.getFullYear() + '-' + (this.date.getMonth()+1) + '-' + this.date.getDate();
            let prod = window.localStorage.getItem('viewed');
            if(prod){
                prod = JSON.parse(prod);

                    axios.post('/api/product/getViewed', {prod: prod, loca: this.locale}).then((res) => {
                        this.select_category = res.data.categories[0];
                        this.products = res.data.products;
                        this.categories = res.data.categories;
                        this.selectProducts(this.select_category);
                    });

            }

        }
    }
</script>

<style scoped>
    .cat{
        cursor: pointer;
    }
    .sel
    {
        color: red;
    }
</style>