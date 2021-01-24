<template>
    <div class="container">
        <div class="row">
            <div v-if="error" class="alert alert-danger alert-dismissible fade show fixed-top" role="alert">
                Не все поля заполнены
                <button @click="closeError()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div v-if="confirm" class="alert alert-success alert-dismissible fade show fixed-top" role="alert">
                Заказ оформлен
            </div>
            <div class="col-12 h1">
                {{ translate.checkout }}
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-7">
                <div class="col-md-12 h3">
                    {{ translate.contacts }}
                </div>
                <div class="form-group col-md-7">
                    <label for="name">{{ translate.name }}</label>
                    <input v-model="order.name" @focusout="updateOrder()" type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group col-md-7">
                    <label class="form-label">{{ translate.surname }}</label>
                    <input class="form-control" @focusout="updateOrder()" type="text" v-model="order.surname" id="surname" name="surname">
                </div>
                <div class="form-group col-md-7">
                    <label for="phone">Телефон</label>
                    <input v-model="order.phone" @focusout="updateOrder()" type="number" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group col-md-7">
                    <label for="email">E-mail</label>
                    <input v-model="order.email" @focusout="updateOrder()" type="text" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-12 h3">
                    {{ translate.products }}
                </div>
                <div v-for="product in products" class="col-md-12 border border-secondary p-3 mt-3">
                    <div class="row">
                        <div class="col-md-3">
                            <img v-if="product.image" :src="`/house/uploads/` + product.image" alt="" class="col-md-12">
                            <img v-else :src="`/house/uploads/veis.svg`" alt="" class="col-md-12">
                        </div>
                        <div class="col-md-5 h6 name">
                            <a :href="'/product/' + product.slug">{{ product.title }}</a>
                        </div>
                        <div class="col-md-2">
                            {{ product.quantity }}шт.
                        </div>
                        <div class="col-md-2">
                            {{ product.totalPrice }}₴
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-end mt-3 h3">
                    {{ translate.total }}: {{ totalPrice }}₴
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="col-md-12 h3">
                    Доставка
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div v-if="this.settings.point_deliveries !== '0'" class="form-group col-md-2">
                            <input @change="updateOrder()" type="radio" name="delivery" value="carrier" v-model="delivery" id="carrier">
                            <label for="carrier">{{ translate.carrier }}</label>
                        </div>
                        <div class="form-group col-md-2">
                            <input @change="updateOrder()" type="radio" name="delivery" value="pickup" v-model="delivery" id="pickup">
                            <label for="pickup">{{ translate.pickup }}</label>
                        </div>
                    </div>
                    <div v-if="delivery === 'carrier' && this.settings.point_deliveries !== '0'" class="row">
                        <div class="form-group col-md-7">
                            <label for="region">Область</label>
                            <select v-model="region" name="region" id="region" class="form-control">
                                <option v-for="reg in regions" :value="reg.ref">{{ reg.description_ru }}</option>
                            </select>
                        </div>
                        <div v-if="cities.length > 0" class="form-group col-md-7">
                            <label for="city">{{ translate.city }}</label>
                            <select @change="updateOrder()" v-model="city" name="city" id="city" class="form-control">
                                <option v-for="cit in cities" :value="cit.ref">{{ cit.description_ru }}</option>
                            </select>
                        </div>
                        <div v-if="warehouses.length > 0" class="form-group col-md-7">
                            <label for="warehouse">{{ translate.warehouses }}</label>
                            <select @change="updateOrder()" v-model="warehouse" name="warehouse" id="warehouse" class="form-control">
                                <option v-for="war in warehouses" :value="war.ref">{{ war.description_ru }}</option>
                            </select>
                        </div>
                    </div>
                    <div v-if="delivery === 'pickup'" class="row">
                        <div class="form-group col-md-7">
                            <label for="region">{{ translate.address }}</label>
                            <input type="text" disabled :value="translate.address_pickup" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="col-md-12 h3">
                    {{ translate.comment }}
                </div>
                <div class="form-group col-md-12">
                    <textarea @change="updateOrder()" name="comment" v-model="comment" id="" cols="30" rows="10" class="form-control" style="resize:none"></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div @click="confirmOrder()" class="btn btn-success col-md-2">{{ translate.send }}</div>
            </div>

        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Order",
        props:[
            'regi',
            'settings',
            'translate',
            'locate'
        ],
        data(){
            return{
                products : this.$store.state.cart,
                totalPrice : this.$store.state.totalPrice,
                delivery: this.settings.point_deliveries !== '0' ? 'carrier' : 'pickup',
                region: '',
                city: '',
                warehouse: '',
                comment: '',
                id: 0,
                regions: this.regi,
                cities: [],
                warehouses: [],
                confirm: false,
                error: false,
                order: {id: 0, name: '', phone: '', email: '', delivery: '', region: '', city: '', warehouse: '', status: 'Ожидает', comment: '', confirm: false, total: ''}
            }
        },
        watch:{
            region(val){
                axios.post('/api/order/selectCities', {ref: val}).then((res) => {
                    this.cities = res.data;
                    this.warehouses = [];
                });
            },
            city(val){
                axios.post('/api/order/selectWarehouses', {ref: val}).then((res) => {
                    this.warehouses = res.data;
                });
            }
        },

        methods:{
            createOrder: function () {

                axios.post('/api/order/createOrder', {products: this.$store.state.cart}).then((res) => {
                    this.order.id = res.data;
                });

            },
            updateOrder: function (confirm = false) {
                this.order.total = this.totalPrice;
                this.order.delivery = this.delivery;
                this.order.city = this.city;
                this.order.warehouse = this.warehouse;
                this.order.comment = this.comment;
                this.order.region = this.region;

                if(this.order.name.length === 0 ||  this.order.phone.length === 0){
                    this.error = false;
                    let self = this;
                    setTimeout(function(){
                        self.error = false;
                    }, 2000);
                }

                if(this.error === false){
                    axios.post('/api/order/updateOrder', {order: this.order, confirm: confirm}).then((res) => {
                        this.id = res.data.id;
                    });
                }
            },
            getLang: function(){
                axios.post('/api/order/getLang', {products: this.products, locate: this.locate}).then((res) => {
                    this.products = res.data;
                    console.log(res.data);
                });
            },
            confirmOrder: function () {

                if(this.order.name && this.order.surname && this.order.phone){
                    if(this.order.delivery === 'carrier'){
                        if(this.order.city && this.order.warehouse){
                            this.confirm = true;
                        }else{
                            this.error = true;
                        }
                    }else{
                        this.confirm = true;
                    }
                }else{
                    this.error = true;
                }

                if(this.confirm && !this.error){
                    this.order.confirm = this.confirm;
                    this.updateOrder(true);
                    this.$store.commit('clearCart');

                    setTimeout(function(){
                        window.location.href = '/'
                    }, 2000);

                }


            },
            closeError(){

                this.error = false;

            }
        },
        mounted() {
            this.createOrder();
            this.getLang();
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
    .name
    {
        word-wrap: break-word;
    }
</style>