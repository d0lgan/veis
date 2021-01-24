<template>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a class="list-group-item" v-for="category in categories" :href="category.slug">{{ category.data[locale].title }}</a>
            </div>
            <ul class="list-group mt-3">
                <li class="list-group-item active">{{ translate.price }}</li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-5 form-group">
                            <label for="from">{{ translate.from }}</label>
                            <input type="text" v-model="min_price" id="from" class="form-control">
                        </div>
                        <div class="col-md-2 form-group d-flex align-items-center">
                            -
                        </div>
                        <div class="col-md-5 form-group">
                            <label for="to">Дo</label>
                            <input type="text" v-model="max_price" id="to" class="form-control">
                        </div>
                    </div>
                </li>
            </ul>
            <ul v-if="manufacturers.length > 0" class="list-group mt-3">
                <li class="list-group-item active">{{ translate.manufacturers }}</li>
                <li  v-for="(manufacturer, key_m) in manufacturers" class="list-group-item py-1 px-4">
                    <div class="form-check">
                        <input v-model="check_manufactures[key_m].check" type="checkbox" class="form-check-input" :id="manufacturer.id">
                        <label class="form-check-label" :for="manufacturer.id">{{ manufacturer.title }}</label>
                    </div>
                </li>
            </ul>
            <ul v-for="(group, index) in groups_attributes" class="list-group mt-3">
                <li class="list-group-item active">{{ group.title }}</li>
                <li v-for="(attr, key) in group.attributes" class="list-group-item py-1 px-4">
                    <div class="form-check">
                        <input v-model="check_attributes[checkSelectAttr(attr.id)].check" type="checkbox" class="form-check-input" :id="attr.id">
                        <label class="form-check-label" :for="attr.id">{{ attr.title }}</label>
                    </div>
                </li>
            </ul>
            <ul v-if="tags.length > 0" class="list-group mt-3">
                <li class="list-group-item active">Теги</li>
                <li v-for="(tag, key) in tags" class="list-group-item py-1 px-4">
                    <div class="form-check">
                        <input v-model="check_tags[key].check" type="checkbox" class="form-check-input" :id="tag.id">
                        <label class="form-check-label" :for="tag.id">{{ tag.name }}</label>
                    </div>
                </li>
            </ul>
            <div class="btn btn-primary col-md-12 mt-3" @click="searchProduct()">{{ translate.apply }}</div>
        </div>
        <div class="col-md-9">
            <div class="row justify-content-end">
                <div class="form-group col-3">
                    <label for="sort_count">{{ translate.count_to_page }}</label>
                    <select id="sort_count" class="form-control" v-model="sort_count" @change="countPages()">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div v-if="count_products !==  0" class="row" :key="update">
                <div  v-for="(product, key_p) in products" class="col-lg-4 col-md-6 mb-4" >
                    <div class="card h-100">
                        <a :href="'/product/' + product.slug">
                            <img v-if="product.image" class="mx-auto d-block" style="max-width: 200px !important;" :src="'/house/uploads/' + product.image" :alt="product.alt ? product.alt : product.data[locale].meta">
                            <img v-else class="mx-auto d-block p-5" style="max-width: 200px !important;" :src="'/house/uploads/veis.svg'" :alt="product.data[locale].meta">
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



                            <img v-if="product.relations.length > 0" v-for="relation in product.relations" @click="getRelationProduct(relation.id, key_p)" :src="'/house/uploads/' + relation.image" class="col-md-4" alt="">

<!--                            <img :src="'/house/uploads/' + image.name" class="col-md-4" v-for="image in product.galleries">-->

                            <div v-if="settings.shop_buy" class="btn btn-primary col-md-12" @click="addToCart(product)">{{ translate.to_cart }}</div>
                        </div>
                        <!--<div class="card-footer">
                            <div class="clearfix">
                                <small class="text-muted float-left">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>-->
                    </div>
                </div>
                    <!--<img v-if="product.image" class="card-img-top" :src="'/house/uploads/' + product.image"
                         alt="Card image cap">
                    <img v-else class="card-img-top" :src="'/house/uploads/no_image.png'" alt="Card image cap">
                    <div class="card-body">
                        <a :href="'/product/' + product.slug" class="card-title">{{ product.data[locale].title }}</a>
                        <p class="card-text">{{ product.price }} грн</p>
                        <div class="btn btn-primary" @click="addToCart(product.id)">Add Cart</div>
                    </div>-->
            </div>
            <div v-else class="row">
                <div class="col-md-12 h2">
                    Продуктов нет
                </div>
            </div>
        </div>
        <div class="col-md-9 offset-md-3 d-flex justify-content-center align-items-center" v-if="count_pages > 1">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link"tabindex="-1">Previous</a>
                    </li>
                    <li v-for="(count, key) in count_pages" class="page-item" :class="{'active':current_page === key}">
                        <a class="page-link" @click="selectPage(key)">{{ count }}</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Category",
        props:[
            'prod',
            'categories',
            'manufacturers',
            'groups',
            'category',
            'tags',
            'locale',
            'settings',
            'count_p',
            'translate'
        ],
        data(){
          return{
              products: this.prod,
              min_price: 0,
              max_price: 0,
              price: 50,
              check_attributes: [],
              check_tags: [],
              select_attributes: [],
              select_group_attributes: [],
              select_tags: [],
              select_manufactures: [],
              check_manufactures: [],
              groups_attributes: this.groups,
              date: new Date(),
              now: null,
              sort_count: 10,
              count_products: this.count_p,
              count_pages: 0,
              current_page: 0,
              skip: 0,
              update: 0
          }
        },
        watch:{

            products(val){
                this.products = val;
                if(this.products && this.products.length > 0){
                    for(let i = 0;i < this.products.length;i++){
                        if(this.products[i].undiscounted > this.max_price){
                            this.max_price = this.prod[i].undiscounted;
                        }
                    }
                }

            }
        },
        methods:{
            checkSelectAttr: function (id) {
                for (let i = 0;i < this.check_attributes.length;i++){
                    if(this.check_attributes[i].id === id){
                        return i;
                    }
                }
            },
            addToCart: function(product){

                // let item = this.products.find(product => product.id === id);

                this.$store.commit('addToCart', product);


            },
            clearCart: function(){
                localStorage.removeItem('cart');
            },
            test: function(){

            },
            searchProduct: function () {
                let man = [];
                for(let i = 0;i < this.check_manufactures.length;i++){
                    if(this.check_manufactures[i].check === true){
                        man.push(this.check_manufactures[i]);
                    }
                }

                let attr = [];
                for(let i = 0;i < this.check_attributes.length;i++){
                    if(this.check_attributes[i].check === true){
                        attr.push(this.check_attributes[i]);
                    }
                }

                let tag = [];
                for(let i = 0;i < this.check_tags.length;i++){
                    if(this.check_tags[i].check === true){
                        tag.push(this.check_tags[i]);
                    }
                }

                axios.post('/api/filter/searchProduct', {man: man, attr: attr, tag: tag, min_price: this.min_price, max_price: this.max_price, category_id: this.category.id, loc: this.locale, skip: this.skip, take: parseInt(this.sort_count)}).then((res) => {
                    this.products = res.data.select_products;
                    this.count_products = res.data.count_p;
                    this.count_pages = Math.ceil(this.count_products / this.sort_count);
                });


            },
            countPages: function(){
                this.count_pages = Math.ceil(this.count_products / this.sort_count);
                this.selectPage(0);
            },
            selectPage: function(key){
                this.current_page = key;
                this.skip = this.sort_count * key;

                this.searchProduct();
            },
            checkSelectAttributes: function(id){

                if(this.select_attributes.find(x => x === id)){
                    return true
                }else{
                    return false;
                }

            },
            checkSelectGroupAttributes: function(id){

                if(this.select_group_attributes.find(x => x === id)){
                    return true
                }else{
                    return false;
                }

            },
            checkSelectTags: function(id){

                if(this.select_tags.find(x => x === id)){
                    return true
                }else{
                    return false;
                }

            },
            checkSelectManufacturers: function(id){

                if(this.select_manufactures.find(x => x === id)){
                    return true
                }else{
                    return false;
                }

            },
            getSelectAttributes: function(){

                this.products.forEach((item) => {
                    item.selected_attr.forEach((attr) => {
                        attr.selected.forEach((sel) => {
                            if(!this.select_attributes.find(x => x === sel)){
                                this.select_attributes.push(sel);
                            }
                        });
                    });
                });
            },
            getSelectGroupAttribute: function(){
                this.products.forEach((item) => {
                    item.selected_attr.forEach((attr) => {
                        if(!this.select_group_attributes.find(x => x === attr.id)){
                            this.select_group_attributes.push(attr.id);
                        }
                    });
                });
            },
            getSelectTags: function(){
                this.products.forEach((item) => {
                    item.tags.forEach((tag) => {
                        if(!this.select_tags.find(x => x === tag.id)){
                            this.select_tags.push(tag.id);
                        }
                    });
                });

            },
            getSelectManufacturers: function(){
                this.products.forEach((item) => {
                    if(!this.select_manufactures.find(x => x === item.manufacturer_id)){
                        this.select_manufactures.push(item.manufacturer_id);
                    }
                });

            },
            comparison: function(date){
                if(new Date(date) > new Date(this.now)){
                    return true;
                }else{
                    return false;
                }

            },
            getRelationProduct: function (id, key) {
                let prod = this.products;
                axios.post('/api/order/getProduct', {id: id, loc: this.locale}).then((res) => {
                    prod[key] = res.data;
                    this.products = prod;
                    this.update++;
                });
            }
        },
        mounted() {
            this.now = this.date.getFullYear() + '-' + (this.date.getMonth()+1) + '-' + this.date.getDate();

            if(this.products && this.products.length > 0){
                for(let i = 0;i < this.products.length;i++){
                    if(this.products[i].undiscounted > this.max_price){
                        this.max_price = this.prod[i].undiscounted;
                    }
                }
            }

            if(this.manufacturers && this.manufacturers.length > 0){
                for(let i = 0;i < this.manufacturers.length;i++){
                    this.check_manufactures.push({id: this.manufacturers[i].id, check: false});
                }
            }

            if(this.tags && this.tags.length > 0){
                for(let i = 0;i < this.tags.length;i++){
                    this.check_tags.push({id: this.tags[i].id, check: false});
                }
            }

            if(this.groups && this.groups.length > 0){
                for(let i = 0;i < this.groups.length;i++){
                    for(let j = 0;j < this.groups[i].attributes.length;j++) {
                        this.check_attributes.push({id: this.groups[i].attributes[j].id, check: false});
                    }
                }
            }

            /*this.getSelectAttributes();
            this.getSelectGroupAttribute();
            this.getSelectTags();
            this.getSelectManufacturers();*/
            this.countPages();
        }
    }
</script>

<style scoped>

</style>