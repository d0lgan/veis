<template>
    <div class="w-100">
        <div style="width: 30%; margin-left: auto;" v-if="error" class="alert alert-danger show fixed-bottom strong" role="alert">
            Не все поля заполнены
            <button @click="closeError()" type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div style="width: 30%; margin-left: auto;" v-if="confirm" class="alert alert-success show fixed-bottom" role="alert">
            Заказ сохранен
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="w-100">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <strong v-if="cr === false">Заказ №{{ order.id }}</strong>
                <strong v-else>Создание заказа</strong>


                <div class="d-flex">
                    <button type="submit" @click="confirmOrder()" class="btn mr-3 save"><i class="far fa-save"></i></button>
                    <a href="/admin/orders" class="btn back"><i class="fas fa-reply-all"></i></a>
                </div>
            </div>


            <ul class="nav nav-tabs d-flex justify-content-start px-3" id="myTab">
                <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab"><strong>Основное</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="#delivery" data-toggle="tab"><strong>Доставка</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="#products" data-toggle="tab"><strong>Товары</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="#payment" data-toggle="tab"><strong>Оплата</strong></a></li>
            </ul>

            <div class="d-flex flex-column tab-content">

                    <div class="w-100 p-3 tab-pane active" id="main" style="background-color: #fff">
                        <div>
                            <div class="form-group" v-if="cr === false">
                                <label class="form-label">Тип заказа:</label>
                                <p class="form-control disabled">{{ order.type || "Тип заказа не указан" }}</p>
                            </div>

                            <div class="form-group" v-if="cr === false">
                                <label class="form-label">Дата:</label>
                                <p class="form-control disabled">{{ order.created_at }}</p>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Фамилия:</label>
                                <input class="form-control" type="text" value="order.surname" v-model="order.surname" name="surname">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Имя:</label>
                                <input class="form-control" type="text" value="order.name" v-model="order.name" name="name">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Отчество:</label>
                                <input class="form-control" type="text" v-model="order.fatherland" value="" name="">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Телефон:</label>
                                <input class="form-control" type="text" value="order.phone" v-model="order.phone" name="">
                            </div>

                            <div class="form-group">
                                <label class="form-label">E-mail:</label>
                                <input class="form-control" type="text" value="order.email" v-model="order.email" name="">
                            </div>

                            <div class="form-group" v-if="cr === false">
                                <label class="form-label">Статус:</label>
                                <select v-model="order.status" name="status" id="stat" class="form-control">
                                    <option v-for="(status, index) in statuses" v-bind:key="index" :selected="order.status == status.title" :value="status.title">{{ status.title }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 p-3 tab-pane" id="delivery" style="background-color: #fff">
                        <div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input type="radio" name="delivery" v-model="delivery" checked value="carrier" id="carrier">
                                    <label for="carrier">Перевозчик</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="radio" name="delivery" v-model="delivery" value="pickup" id="pickup">
                                    <label for="pickup">Самовывоз</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="radio" name="delivery" id="other">
                                    <label for="other">Другое</label>
                                </div>
                            </div>
                            <div class="row" v-if="delivery === 'carrier'">
                                <div class="form-group col-md-12">
                                    <label for="trans">Перевозчик</label>
                                    <select name="trans" id="trans" class="form-control">
                                        <option value="">Новая почта</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Город</label>
                                    <input class="form-control" type="text" v-model="order.city" name="city">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Отделение</label>
                                    <input class="form-control" type="text" v-model="order.warehouse" name="warehouse">
                                </div>
                            </div>
                            <div v-if="delivery === 'pickup'" class="row">
                                <div class="form-group col-md-12">
                                    <label for="region">Адрес</label>
                                    <input type="text" disabled value="Адрес самовывоза" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 p-3 tab-pane" id="products" style="background-color: #fff">
                        <div>
                            <div class="form-group position-relative">
                                <label for="search">Поиск товара</label>
                                <div class="d-flex">
                                    <input v-model="keywords" @input="searchProduct($event)" type="text" id="search" class="form-control">
                                    <div class="m-l-5 btn btn-secondary d-flex justify-content-center align-items-center" @click="clearSearch()"><span style="font-weight: bold;" aria-hidden="true"><i class="fas fa-times"></i></span></div>
                                </div>
                                <div class="position-absolute m-t-10 search w-100 d-flex justify-content-between" v-if="keywords">
                                    <div class="col-md-10" v-show="result.length === 0">
                                        Ничего не найдено
                                        {{ res }}
                                        {{ products }}
                                    </div>
                                    <div class="w-100 d-flex flex-column">
                                        <!-- col-md-12 py-3 result border-bottom border-secondary -->
                                        <div v-for="(res, key_r) in result" class="h-auto result m-b-10" @click="addProduct(key_r)">
                                            <div class="col-md-9"><strong>{{ res.title_ru }}</strong></div>
                                            <div v-if="res.status_stock" class="col-md-3">{{ res.price_stock }} грн</div>
                                            <div v-else class="col-md-3">{{ res.price }} грн</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-for="(product, key_p) in products" class="mt-2">
                                <div class="border p-4 position-relative mb-3">
                                    <div class="row">
                                        <div class="d-flex w-100 align-items-center">
                                            <div class="col-md-8"><strong class="form-label">{{ product.title_ru }}</strong> <br> <input class="form-control d-inline col-2" type="number" @change="changeQuantity($event, key_p)" :value="product.quantity"> шт</div>
                                            <div class="form-label">{{ getPrice(key_p) }} грн</div>
    <!--                                        <div class="col-md-3">{{ product.totalPrice }} грн</div>-->

                                            <div class="d-flex justify-content-center align-items-center" style="position: absolute; right: 10px; top: 10px; width: 40px;height: 40px; background-color: #e1e1e1; border-radius: 50%; cursor: pointer;" @click="deleteProduct(key_p)"><i class="far fa-trash-alt m-0 p-0"></i></div>
                                            <!-- <div style="right: 10px; top: 10px;" class="position-absolute btn btn-danger align-self-center" @click="deleteProduct(key_p)"><span style="font-weight: bold;" aria-hidden="true">×</span></div> -->
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select required v-for="(option, key_o) in product.options" @change="selectValue($event, key_o, key_p)" class="form-control my-2">
                                                <option>{{ option.option.title }} <span v-if="option.option.need === '1'">(Обязательная функция)</span></option>
                                                <option  v-for="(val, key) in option.product_values" :value="val.value_option_id" :selected="parseInt(val.value_option_id) === parseInt(option.select)">
                                                    {{ getValues(val.value_option_id, option.values[key]) }}
                                                    <span v-if="val.price_option > 0">
                                                    (<span v-if="val.operation_option === 'plus'">+</span>
                                                    <span v-else>-</span> <span class="font-weight-bold">{{ val.price_option }}₴</span>)
                                                    </span>
                                                </option>
                                            </select>
                                            <!--<ul v-for="(option, key_o) in product.options" class="list-group mt-3 mb-0 col-md-12">
                                                <li class="list-group-item">{{ option.option.title }}</li>
                                                <li v-for="(val, key) in option.product_values" class="list-group-item py-1 px-4">
                                                    <div class="form-check">
                                                        <input type="checkbox" :checked="checkSelectedOptions(val.id, key_p)" @change="selectValue($event, val.id, key_p)" class="form-check-input"
                                                               :id="val.value_option_id">
                                                        <label class="form-check-label ml-4" :for="val.value_option_id">
                                                            {{ getValues(val.value_option_id, option.values[key]) }}
                                                            (<span v-if="val.operation_option === 'plus'">+</span>
                                                            <span v-else>-</span> <span class="font-weight-bold">{{ val.price_option }}₴</span>)
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 offset-8 mt-2">Итого: {{ totalPrice }}грн</div>

                        </div>
                    </div>

                    <div class="w-100 p-3 tab-pane" id="payment" style="background-color: #fff">
                        <div>
                            <div class="form-group">
                                <label for="pay">Вид оплаты</label>
                                <select name="pay" id="pay" class="form-control">
                                    <option value="">Наложеный платеж</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div v-if="cr === false">
                                <label class="form-label">Комментарий</label>
                                <p class="form-control disabled">{{ order.comment || "Нет комментариев" }}</p>
                            </div>
                            <textarea v-else name="" placeholder="Комментарий" v-model="comment" cols="30" rows="10" class="form-control" style="resize:none"></textarea>
                        </div>
                        <div class="mt-3" v-if="cr === true">
                            <div class="form-group">
                            	<label class="form-label" for="stat">Статус</label>

                                <select v-model="order.status" name="stat" id="stat" class="form-control">
                                    <option value="Ожидает" selected>Ожидает</option><!--
                                    <option v-for="status in statuses" :value="status.title">{{ status.title }}</option>-->
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</template>

<script>
    import vSelect from "vue-select";
    import axios from "axios";

    export default {
        components: {
            vSelect
        },
        name: "Order",
        props: [
            'ord',
            'prod',
            'regi',
            'cities',
            'warehouse',
            'create',
            'statuses'
        ],
        data(){
            return{
                order: this.ord ? this.ord :  {id: 0, name: '', fatherland: '', surname: '', phone: '', email: '', delivery: '', region: '', city: '', warehouse: '', comment: '', confirm: false, total: '', status: 'Ожидает'},
                products : this.prod ? this.prod : [],
                totalPrice : 0,
                delivery: this.ord ? this.ord.delivery : 'carrier',
                region: this.ord && this.ord.region ? this.ord.region : '',
                city: this.ord && this.ord.city ? this.ord.city : '',
                warehouse: this.ord && this.ord.warehouse ? this.ord.warehouse : '',
                comment: this.ord ? this.ord.comment : '',
                regions: this.regi ? this.regi : [],
                status: '',
                cities: this.cit ? this.cit : [],
                warehouses: this.warehouse ? this.warehouse : [],
                confirm: false,
                error: false,
                result: [],
                keywords: null,
                cr: this.create ? this.create : false,
                date: new Date(),
                now: null
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
            getPrice: function (key) {

                let prod = this.products[key];
                let price = prod.currentPrice * prod.quantity;
                let selected_options = prod.selected_options;
                let options = prod.options;

                this.products[key].options.forEach(option => {
                    let value = option.product_values.find(val => val.value_option_id === parseInt(option.select));
                    if(value){

                        if(value.operation_option === 'minus'){
                            price -= parseInt(value.price_option) * prod.quantity;
                        }else{
                            price += parseInt(value.price_option) * prod.quantity;
                        }
                    }

                });

                /*for(let i = 0;i < selected_options.length;i++){
                    for(let o = 0;o < options.length;o++){
                        let pr = options[o].product_values.find(item => item.value_option_id === parseInt(selected_options[i]));
                        if(pr){
                           if(pr.operation_option === 'minus'){
                               price -= parseInt(pr.price_option * this.products[key].quantity);
                           }else{
                               price += parseInt(pr.price_option * this.products[key].quantity);
                           }
                        }
                    }

                }*/
                return price;

            },
            checkSelectedOptions: function (id, key) {

                if(this.products[key].selected_options.findIndex(i => i === id) !== -1){
                    return true;
                }

            },
            selectValue: function(e, id, key){

                if(!parseInt(e.target.value)){
                    this.products[key].options[id].select = null;
                }else{
                    this.products[key].options[id].select = e.target.value;
                }
                /*if(e.target.checked){
                    this.products[key].selected_options.push(id);
                }else{
                    this.products[key].selected_options.splice(this.products[key].selected_options.findIndex(item => item === id), 1);
                }*/
                this.updatePrice(key);

            },
            getValues: function (id, values) {

                let name = values.find(value => value.id === id);

                return name.value;
            },
            updatePrice: function (key = null) {

                if(key){
                    this.products[key].totalPrice = this.products[key].quantity * this.products[key].currentPrice;

                    this.products[key].options.forEach(option => {
                        let value = option.product_values.find(val => val.value_option_id === parseInt(option.select));
                        if(value){

                            if(value.operation_option === 'minus'){
                                this.products[key].totalPrice -= parseInt(value.price_option) * this.products[key].quantity;
                            }else{
                                this.products[key].totalPrice += parseInt(value.price_option) * this.products[key].quantity;
                            }
                        }

                    });

                }else{
                    for(let i = 0;i < this.products.length;i++){
                        this.products[i].totalPrice = this.products[i].quantity * this.products[i].currentPrice;

                        this.products[i].options.forEach(option => {
                            let value = option.product_values.find(val => val.value_option_id === parseInt(option.select));
                            if(value){

                                if(value.operation_option === 'minus'){
                                    this.products[i].totalPrice -= parseInt(value.price_option) * this.products[i].quantity;
                                }else{
                                    this.products[i].totalPrice += parseInt(value.price_option) * this.products[i].quantity;
                                }

                            }

                        });
                    }
                }
                this.updateTotalPrice();

            },
            saveTotalPrice: function () {
                this.$store.commit('saveTotalPrice', this.totalPrice);
                this.updateCart();
                this.createOrder();
            },
            updateTotalPrice: function () {

                this.totalPrice = 0;

                for(let i = 0;i < this.products.length;i++){
                    this.totalPrice += this.getPrice(i);
                }
            },
            getValuePrice: function (id, key) {

                let item;

                for(let i = 0;i < this.products[key].options.length;i++){
                    if(this.products[key].options[i].product_values.find(op => op.id === id)){
                        item = this.products[key].options[i].product_values.find(op => op.id === id);
                    }
                }

                if(item.operation_option === "minus"){
                    return -parseInt(item.price_option) * this.products[key].quantity;
                }else{
                    return  parseInt(item.price_option) * this.products[key].quantity;
                }

            },
            confirmOrder: function () {
                if(this.order.name && this.order.surname && this.order.phone){
                    if(this.delivery === 'carrier'){
                        if(this.city && this.warehouse){
                            this.confirm = true;
                            this.error = false;
                        }else{
                            this.error = true;
                        }
                    }else{
                        this.confirm = true;
                        this.error = false;
                    }
                }else{
                    this.error = true;
                }

                if(this.confirm && !this.error){
                    this.order.confirm = this.confirm;
                    this.updateOrder(true);
                    this.$store.commit('clearCart');

                    setTimeout(function(){
                        window.location.href = '/admin/orders'
                    }, 2000);

                }


            },
            updateOrder: function (confirm = false) {
                this.order.total = this.totalPrice;
                this.order.delivery = this.delivery;
                this.order.region = this.region;
                axios.get('/api/order/updateOrder', {
                    params: {
                        order: this.order,
                    }
                }).then((res) => {

                });
            },
            searchProduct: function (e) {

                this.keywords = e.target.value;

                axios.post('/api/searching', {q: this.keywords}).then((res) => {
                    this.result = res.data;
                });
            },
            addProduct: function (key) {

                let id = this.result[key].id;

                axios.post('/api/order/getProduct', {id: id}).then((res) => {

                    /*let id = this.products.findIndex(item => item.id === res.data.id);

                    if(id !== -1){
                        this.products[id].quantity++;
                    }else{
                        this.products.push(res.data);
                    }*/

                    this.products.push(res.data);
                    this.updateTotalPrice();
                    this.keywords = null;
                });
            },
            deleteProduct: function (key) {

                this.products.splice(key, 1);

                this.updateTotalPrice();
            },
            clearSearch: function () {

                this.keywords = null;

            },
            closeError(){

                this.error = false;

            },
            changeQuantity: function (e, key) {

                this.products[key].quantity = parseInt(e.target.value);
                this.updatePrice(key);

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
            this.updatePrice();
        }
    }
</script>

<style scoped>
    .result:hover
    {
        background: lightgray;
        cursor: pointer;
        color: white;
    }

    .al
    {
        z-index: 1000 !important;
    }
</style>