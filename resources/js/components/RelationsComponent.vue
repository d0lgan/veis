<template>
    <div>

        <div v-if="products.length > 0" class="col-md-12 h2">Похожие товары</div>
        <carousel :perPage="4">
            <slide v-for="product in products" :key="product.id" >
                <div class="card h-100" style="margin: 0 20px 0 20px;">
                    <a :href="'/product/' + product.slug">
                        <img class="mx-auto d-block" style="max-width: 200px !important;" :src="'/house/uploads/' + product.image" :alt="product.title">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a :href="'/product/' + product.slug">{{ product.data[locale].title }}</a>
                        </h4>

                        <div v-if="comparison(product.end_stock)" class="col-md-12 h2">
                            <div class="row">
                                <span class="col-6"><s>{{product.undiscounted}}₴</s></span><span class="text-danger col-6">{{product.price}}₴</span>
                            </div>
                        </div>
                        <div v-else class="col-md-12 h2">
                            <div class="row">
                                <div class="col-12">
                                    {{product.undiscounted}}₴
                                </div>
                            </div>
                        </div>


                        <img :src="'/house/uploads/' + image.name" class="col-md-4" v-for="image in product.galleries">

                        <div v-if="settings.shop_buy" class="btn btn-primary" @click="addToCart(product)">Add Cart</div>
                    </div>
                </div>
            </slide>
        </carousel>
    </div>
</template>

<script>
    import axios from "axios";
    import { Carousel, Slide } from 'vue-carousel';

    export default {
        name: "RelationsComponent",
        components: {
            Carousel,
            Slide
        },
        props:[
            'locale',
            'settings',
            'product_id'
        ],
        data(){
            return{
                products: [],
                categories: [],
                select_products: [],
                date: new Date(),
                now: null,
                select_category: null,
            }
        },
        watch:{
            products(val){
                this.products = val;
            }
        },
        methods:{
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
            getRelations: function () {

                axios.post('/api/fastEdit/getRelation', {product_id: this.product_id, loca: this.locale, front: true}).then((res) => {
                    this.products = res.data;
                });

            }
        },
        mounted() {
            this.now = this.date.getFullYear() + '-' + (this.date.getMonth()+1) + '-' + this.date.getDate();

            this.getRelations();
        }
    }
</script>

<style scoped>

</style>