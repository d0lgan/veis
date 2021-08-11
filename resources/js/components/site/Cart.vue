<template>
    <div class="container">
        <div class="row">
            <div class="col-12 h1">
                Корзина <span v-if="products.length === 0">пуста</span>
            </div>
            <div v-if="products.length > 0" class="col-md-12">
                <div v-for="(product, key_p) in products" class="col-md-12 border border-secondary p-4 mt-4 rounded">
                    <div class="row">
                        <div class="col-md-3">
                            <img v-if="product.image" :src="`/house/uploads/` + product.image" alt="" class="col-md-12">
                            <img v-else :src="`/house/uploads/veis.svg`" alt="" class="col-md-12">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-11 h5">
                                    <a :href="'/product/' + product.slug">{{ product.title }}</a>
                                </div>
                                <div class="col-md-1">
                                    <span @click="removeProduct(product.id)" class="rounded-circle border border-danger h6 text-danger d-flex justify-content-center align-items-center w-50 h-50 p-1 delete">X</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mt-2">
                                    <div class="bg-warning py-2 px-3 h5 d-inline-block">
                                        <span>{{ product.currentPrice }}₴</span>
                                        <!--<span v-if="comparison(product.end_stock)">{{ product.price }}₴</span>
                                        <span v-else>{{product.undiscounted}}₴</span>-->

                                    </div>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                    <div class="row">
                                        <div class="col-md-3 d-flex justify-content-center align-items-center"><span @click="changeQuantity(key_p, 'minus')" class="rounded border border-secondary py-1 px-3 qua font-weight-bold">-</span></div>
                                        <input type="number" min="1"  class="col-md-6 text-center rounded border border-secondary" @change="checkQuantity(key_p)" v-model="product.quantity"/>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center"><span @click="changeQuantity(key_p, 'plus')" class="rounded border border-secondary py-1 px-3 qua font-weight-bold">+</span></div>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center align-items-center h5">
                                    {{ product.totalPrice }}₴
                                </div>
                            </div>
                            <div class="row">
                                <ul  class="list-group mt-3 col-md-12">
                                    <li v-for="(option, key_o) in product.options" v-if="option.select !== null" class="list-group-item">
                                        {{ option.option.title }} : {{ getValues(option.select, option.values[0]) }}
                                    </li>

                                </ul>
                            </div>
                            <!--<div class="row">
                                <ul v-for="(option, key_o) in product.options" class="list-group mt-3 col-md-12">
                                    <li class="list-group-item">{{ option.option.title }}</li>
                                    <li v-for="(val, key) in option.product_values" class="list-group-item py-1 px-4">
                                        <div class="form-check">
                                            <input type="checkbox" :checked="checkSelectedOptions(val.id, key_p)" @change="selectValue($event, val.id, key_p)" class="form-check-input"
                                                   :id="val.value_option_id">
                                            <label class="form-check-label" :for="val.value_option_id">
                                                {{ getValues(val.value_option_id, option.values[key]) }}
                                                (<span v-if="val.operation_option === 'plus'">+</span>
                                                <span v-else>-</span> <span class="font-weight-bold">{{ val.price_option }}₴</span>)
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div v-if="totalPrice >= settings.free_shipping" class="col-md-5 offset-7 bg-success mt-4 h3 d-flex justify-content-center align-items-center text-light py-3">
                    Бесплатная доставка
                </div>
                <div class="offset-7 col-md-5 bg-warning mt-4 py-3 px-5">
                    <div class="row">
                        <div class="col-md-3 h3">Итого:</div>
                        <div class="col-md-9 h3 d-flex justify-content-end">{{ totalPrice }}₴</div>
                    </div>
                    <div class="row">
                        <a href="/order" @click="saveTotalPrice()" class="offset-2 col-md-8 btn btn-success">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Cart",
        props:[
            'settings'
        ],
        data(){
          return{
              products : this.$store.state.cart,
              totalPrice: 0,
              date: new Date(),
              now: null,
          }
        },
        methods:{
            changeQuantity: function (key, act){

                if(act === 'minus'){
                    if(this.products[key].quantity > 1){
                        this.products[key].quantity -= 1;
                    }
                }else{
                    this.products[key].quantity++;
                }
                this.updateCart();
                this.updatePrice(key);

            },
            checkQuantity: function (key) {
                if(this.products[key].quantity < 1){
                    this.products[key].quantity = 1;
                }

                this.updatePrice(key);
            },
            updatePrice: function (key = null) {
                if(key){
                    this.products[key].totalPrice = this.products[key].quantity * this.products[key].currentPrice;

                    if(this.products[key].selected_options.length !== 0){
                        this.products[key].selected_options.forEach(item => {
                            this.products[key].totalPrice += this.getValuePrice(item, key);
                        });
                    }
                }else{
                    for(let i = 0;i < this.products.length;i++){
                        this.products[i].totalPrice = this.products[i].quantity * this.products[i].currentPrice;

                        if(this.products[i].selected_options.length !== 0){
                            this.products[i].selected_options.forEach(item => {
                                this.products[i].totalPrice += this.getValuePrice(item, i);
                            });
                        }
                    }
                }

                this.updateTotalPrice();

            },
            selectValue: function(e, id, key){
                if(e.target.checked){
                    this.products[key].selected_options.push(id);
                }else{
                    this.products[key].selected_options.splice(this.products[key].selected_options.findIndex(item => item === id), 1);
                }
                this.updateCart();
                this.updatePrice(key);

            },
            getValues: function (id, values) {

                let name = values.find(value => value.id === parseInt(id));

                return name.value;
            },
            updateTotalPrice: function () {

                this.totalPrice = 0;

                this.products.forEach(product => {
                    this.totalPrice += parseInt(product.totalPrice);
                });

            },
            getValuePrice: function (id, key) {

                let item;

                for(let i = 0;i < this.products[key].options.length;i++){
                    if(this.products[key].options[i].product_values.find(op => op.id === id)){
                        item = this.products[key].options[i].product_values.find(op => op.id === id);
                    }
                }

                if(item.operation_option === "minus"){
                    return -parseInt(item.price_option * this.products[key].quantity);
                }else{
                    return parseInt(item.price_option * this.products[key].quantity);
                }

            },
            removeProduct: function (id) {
                this.$store.commit('removeFromCart', id);
                this.updateTotalPrice();
            },
            checkSelectedOptions: function (id, key) {

                if(this.products[key].selected_options.findIndex(i => i === id) !== -1){
                    return true;
                }

            },
            updateCart: function () {
                this.$store.commit('updateCart', this.products);
            },
            saveTotalPrice: function () {
                this.$store.commit('saveTotalPrice', this.totalPrice);
                this.updateCart();
                this.createOrder();
            },
            comparison: function(date){

                if(new Date(date) > new Date(this.now)){
                    return true;
                }else{
                    return false;
                }

            }
        },
        mounted() {
            this.now = this.date.getFullYear() + '-' + (this.date.getMonth()+1) + '-' + this.date.getDate();
            this.updatePrice();

        }
    }
</script>

<style scoped>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance: textfield;
    }
    .qua
    {
        cursor: pointer;
    }
    .delete
    {
        cursor: pointer;
    }
</style>