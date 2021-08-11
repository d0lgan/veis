<template>
    <div class="col-md-12">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li v-if="categories.length > 0" class="nav-item">
                <a :class="{active : categories.length > 0}" class="nav-link" id="new-items-tab" data-toggle="tab" href="#new-items" role="tab" aria-controls="new-items" aria-selected="true">{{ settings.data[locale].new }}</a>
            </li>
            <li v-if="sell_categories.length > 0" class="nav-item">
                <a :class="{active : categories.length === 0 && sell_categories.length > 0}" class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">{{ settings.data[locale].sell }}</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div  v-if="categories.length > 0" :class="{active : categories.length > 0, show : categories.length > 0}" class="tab-pane fade" id="new-items" role="tabpanel" aria-labelledby="new-items-tab">
                <div class="col-md-12 d-flex justify-content-center">
                    <div v-for="cat in categories" class="p-2"><span @click="selectProducts(cat)" :class="{'sel': cat.id === select_category.id}" class="cat">{{ cat.data[locale].title }}</span></div>
                </div>
                <div :key="update_n" class="row">
                    <div v-for="(product, key_p) in select_products" class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <a :href="'/product/' + product.slug">
                                <img v-if="product.image" class="mx-auto d-block" style="max-width: 200px !important;" :src="'/house/uploads/' + product.image">
                                <img v-else class="mx-auto d-block p-4" style="max-width: 200px !important;" :src="'/house/uploads/veis.svg'">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a :href="'product/' + product.slug">{{ product.data[locale].title }}</a>
                                </h4>

                                <div v-if="product.status_stock" class="col-md-12 h2">
                                    <div class="row">
                                        <span class="col-6"><s>{{product.price}}₴</s></span><span class="text-danger col-6">{{product.price_stock}}₴</span>
                                    </div>
                                </div>
                                <div v-else-if="product.percent !== null && product.undiscounted > 0" class="col-md-12 h2">
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

                                <img v-if="product.relations.length > 0" v-for="relation in product.relations" @click="getRelationProduct(relation.id, key_p, 'new')" :src="'/house/uploads/' + relation.image" class="col-md-4" alt="">
<!--                                <img :src="'/house/uploads/' + image.name" class="col-md-4" v-for="image in product.galleries">-->

                                <div v-if="settings.shop_buy" class="btn btn-primary" @click="addToCart(product)">{{ translate.to_cart }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <a :href="'category/' + select_category.slug" class="btn btn-primary">Показать все {{ select_category.data[locale].title }}</a>
                </div>
            </div>
            <div :key="update_s" v-if="sell_categories.length > 0" :class="{active : categories.length === 0 && sell_categories.length > 0 || tab_sale === true, show : categories.length === 0 && sell_categories.length > 0 || tab_sale === true}" class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                <div class="col-md-12 d-flex justify-content-center">
                    <div v-for="sell_cat in sell_categories" class="p-2"><span @click="selectSellProducts(sell_cat)" :class="{'sel': sell_cat.id === select_sell_category.id}" class="cat">{{ sell_cat.data[locale].title }}</span></div>
                </div>
                <div :key="update_s" class="row">
                    <div v-for="(product, key_p) in select_sell_products" class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <a :href="'/product/' + product.slug">
                                <img v-if="product.image" class="mx-auto d-block" style="max-width: 200px !important;" :src="'/house/uploads/' + product.image">
                                <img v-else class="mx-auto d-block p-4" style="max-width: 200px !important;" :src="'/house/uploads/veis.svg'">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a :href="'product/' + product.slug">{{ product.data[locale].title }}</a>
                                </h4>

                                <div v-if="product.status_stock" class="col-md-12 h2">
                                    <div class="row">
                                        <span class="col-6"><s>{{product.price}}₴</s></span><span class="text-danger col-6">{{product.price_stock}}₴</span>
                                    </div>
                                </div>
                                <div v-else-if="product.percent !== null && product.undiscounted > 0" class="col-md-12 h2">
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

                                <img v-if="product.relations.length > 0" v-for="relation in product.relations" @click="getRelationProduct(relation.id, key_p, 'sell')" :src="'/house/uploads/' + relation.image" class="col-md-4" alt="">
<!--                                <img :src="'/house/uploads/' + image.name" class="col-md-4" v-for="image in product.galleries">-->

                                <div v-if="settings.shop_buy" class="btn btn-primary" @click="addToCart(product)">{{ translate.to_cart }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <a :href="'category/' + select_sell_category.slug" class="btn btn-primary">Показать все {{ select_sell_category.data[locale].title }}</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import axios from "axios";

    export default {
        name: "UniversalComponent",
        props:[
            'locale',
            'categories',
            'products',
            'sell_products',
            'sell_categories',
            'settings',
            'translate'
        ],
        data(){
            return{
                select_category: this.categories[0],
                select_products: [],
                select_sell_category: this.sell_categories[0],
                select_sell_products: [],
                date: new Date(),
                now: null,
                update_n: 10000,
                update_s: 0,
                tab_sale: false
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
            selectSellProducts: function (cat) {

                this.select_sell_category = cat;

                this.select_sell_products = [];

                for(let i = 0;i < this.sell_products.length;i++){

                    if(this.sell_products[i].category_id === cat.id && this.select_sell_products.length <= 10){
                        this.select_sell_products.push(this.sell_products[i]);
                    }

                }
            },
            addToCart: function(product){
                this.$store.commit('addToCart', product);

            },
            comparison: function(date){
                if(new Date(date) > new Date(this.now)){
                    return true;
                }else{
                    return false;
                }

            },
            getRelationProduct: function (id, key, type) {
                axios.post('/api/order/getProduct', {id: id, loc: this.locale}).then((res) => {
                    if(type === 'new'){
                        this.tab_sale = false;
                        this.select_products[key] = res.data;
                        this.update_n++;
                    }else if(type === 'sell'){
                        this.tab_sale = true;
                        this.select_sell_products[key] = res.data;
                        this.update_s++;
                    }

                });
            }
        },
        mounted() {
            this.selectProducts(this.select_category);
            this.selectSellProducts(this.select_sell_category);
            this.now = this.date.getFullYear() + '-' + (this.date.getMonth()+1) + '-' + this.date.getDate();
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