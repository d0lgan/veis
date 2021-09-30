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

                            <div class="form-group">
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
                                <div class="form-group col-md-12">
                                    <label for="trans">Перевозчик</label>
                                    <select name="trans" id="trans" class="form-control" v-model="order.delivery">
                                        <option :value="'nova'">Новая почта</option>
                                        <option :value="'ukr'">Укр почта</option>
                                        <option :value="'pickup'">Другое (самовывоз)</option>
                                    </select>
                                </div>

                                <div class="inputbox">
                                    <label for="">
                                        Город
                                        <img src="/assets/front/img/uploading.gif" alt="loading..." class="upload-gif" v-show="loadingCities">
                                    </label>
                                    <div class="select select-custom">
                                        <div class="select-inner">
                                            <input v-model="keywordCity"
                                                   @keydown="debouncedGetAnswerCity()"
                                                   @focusout="closeCitiesWithDelay();"
                                                   @focusin="openCities = true; openPoints = false;"
                                                   type="text"
                                                   class="input-search"
                                                   placeholder="Пусто"
                                            >
                                        </div>
                                        <div class="select-wrapper" data-select="2" v-show="openCities"
                                             style="">
                                            <div class="select-content">
                                                <ul class="select-options">
                                                    <li class="select-option-itemm"
                                                        v-for="wareCity in cities"
                                                        @click="city = wareCity; keywordCity = wareCity.Description;">
                                                        {{ wareCity.Description }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="inputbox">
                                    <label for="">
                                        {{ order.delivery == 'nova' ? 'Отделение' : 'Адрес' }}
                                        <img v-if="order.delivery == 'nova'" src="/assets/front/img/uploading.gif" alt="loading..." class="upload-gif" v-show="loadingPoints">
                                    </label>
                                    <div class="select select-custom">
                                        <div class="select-inner">
                                            <input v-if="order.delivery == 'nova'"
                                                   v-model="keywordPoint"
                                                   @keydown="debouncedGetAnswerPoint()"
                                                   @focusout="closePointsWithDelay();"
                                                   @focusin="openPoints = true; openCities = false;"
                                                   type="text" class="input-search"
                                                   placeholder="Пусто"
                                            >
                                            <input v-else
                                                   v-model="keywordPoint"
                                                   @focusout="closePointsWithDelay();"
                                                   @focusin="openPoints = true; openCities = false;"
                                                   type="text" class="input-search"
                                                   placeholder="Пусто"
                                            >
                                        </div>

                                        <div class="select-wrapper" data-select="2" v-show="openPoints && order.delivery == 'nova'"
                                             style="">
                                            <div class="select-content">
                                                <ul class="select-options">
                                                    <li class="select-option-itemm" v-for="avPoint in points" @click="point = avPoint; keywordPoint = avPoint; openPoints = false;">
                                                        {{ avPoint }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="w-100 p-3 tab-pane" id="products" style="background-color: #fff">
                        <div>
                            <div class="form-group position-relative">
                                <label for="search">Поиск товара</label>
                                <div class="d-flex">
                                    <input v-model="keywords" type="text" id="search" class="form-control">
                                    <div class="m-l-5 btn btn-secondary d-flex justify-content-center align-items-center" @click="clearSearch()"><span style="font-weight: bold;" aria-hidden="true"><i class="fas fa-times"></i></span></div>
                                </div>
                                <div class="position-absolute m-t-10 search w-100 d-flex justify-content-between" v-if="keywords">
                                    <div class="col-md-10 h-auto" v-show="result.length === 0">
                                        Ничего не найдено
                                    </div>
                                    <div class="w-100 d-flex flex-column">
                                        <!-- col-md-12 py-3 result border-bottom border-secondary -->
                                        <div v-for="(res, key_r) in result" class="h-auto result" @click="addProduct(key_r)">
                                            <div class="col-md-9"><strong>{{ res.title_ru }}</strong></div>
                                            <div class="col-md-3">{{ res.price }} грн</div>
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
                                                <option>{{ option.option.title_ru }} <span v-if="option.option.need === '1'">(Обязательная функция)</span></option>
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
                                <select name="pay" v-model="order.way_to_pay" id="pay" class="form-control">
                                    <option v-for="wayToPay in wayToPays" :value="wayToPay.id">{{ wayToPay.title_ru }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div>
                                <label class="form-label" for="comment">Комментарий</label>
                                <!--<p class="form-control disabled">{{ order.comment || "Нет комментариев" }}</p>-->
                            </div>
                            <textarea name="comment" placeholder="Нет комментариев" v-model="order.comment" cols="30" rows="10" class="form-control" style="resize:none">{{ order.comment }}</textarea>
                        </div>
                        <!--<div class="mt-3" v-if="cr === true">
                            <div class="form-group">
                            	<label class="form-label" for="stat">Статус</label>

                                <select v-model="order.status" name="stat" id="stat" class="form-control">
                                    <option value="Ожидает" selected>Ожидает</option>&lt;!&ndash;
                                    <option v-for="status in statuses" :value="status.title">{{ status.title }}</option>&ndash;&gt;
                                </select>
                            </div>
                        </div>-->
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
            /*'cities',
            'warehouse',*/
            'create',
            'statuses',
            'wayToPays'
        ],
        data(){
            return{
                order: this.ord ? this.ord :  {id: 0, name: '', fatherland: '', surname: '', phone: '', email: '', delivery: '', way_to_pay: '', region: '', city: '', warehouse: '', comment: '', products: '', confirm: 1, total: '', status: 'Новый'},
                products : this.prod ? this.prod : [],
                totalPrice : 0,
                aWayToPay: this.ord && this.ord.wayToPay ? this.ord.wayToPay : '',
                region: this.ord && this.ord.region ? this.ord.region : '',
                warehouse: this.ord && this.ord.warehouse ? this.ord.warehouse : '',
                comment: this.ord ? this.ord.comment : '',
                regions: this.regi ? this.regi : [],
                status: '',
                warehouses: this.warehouse ? this.warehouse : [],
                confirm: false,
                error: false,
                result: [],
                keywords: '',
                cr: this.create ? this.create : false,
                date: new Date(),
                now: null,

                city: '',
                point: '',
                keywordCity: '',
                keywordPoint: '',
                cities: [],
                points: [],
                loadingCities: false,
                loadingPoints: false,
                openPoints: false,
                openCities: false,

                selected: {
                    query: '',
                    page: 0,
                    fakePageForMoreProducts: 0,
                    limit: 11,
                }
            }
        },
        watch:{
            keywordCity(newVal) {
                this.order.city = newVal;
            },

            keywordPoint(newVal) {
                this.order.warehouse = newVal;
            },

            city() {
                this.debouncedGetAnswerPoint();
            },

            keywords(value) {
                if (value.length >= 2) {
                    this.selected.query = this.keywords;
                    this.debouncedGetAnswer()
                }
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

                /*if(!parseInt(e.target.value)){
                    this.products[key].options[id].select = null;
                }else{
                    this.products[key].options[id].select = e.target.value;
                }*/
                // this.updatePrice(key);



                /*if(e.target.checked){
                    this.products[key].selected_options.push(id);
                }else{
                    this.products[key].selected_options.splice(this.products[key].selected_options.findIndex(item => item === id), 1);
                }*/
            },

            loadCities() {
                if (this.keywordCity != '') {
                    this.loadingCities = true;

                    axios.get('/api/novaPoshta/cities', {
                        params: {
                            locale: this.locale,
                            keyword: this.keywordCity,
                        },
                    })
                        .then((response) => {
                            this.cities = response.data.cities;
                            this.loadingCities = false;
                        })
                        .catch(function (error) {
                            console.log(error);
                        });

                }
            },

            loadPoints() {
                if (this.city) {
                    this.loadingPoints = true;
                    axios.get('/api/novaPoshta/refs', {
                        params: {
                            locale: this.locale,
                            ref: this.city.Ref,
                            keyword: this.keywordPoint,
                        },
                    })
                        .then((response) => {
                            this.points = response.data.points;
                            this.loadingPoints = false;
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            },

            closeCitiesWithDelay() {
                setTimeout(() => this.openCities = false, 300);
            },

            closePointsWithDelay() {
                setTimeout(() => this.openPoints = false, 300);
            },
            getValues: function (id, values) {

                let name = values.find(value => value.id === id);

                return name.value_ru;
            },
            updatePrice: function (key = null) {

                if(key){
                    this.products[key].totalPrice = this.products[key].quantity * this.products[key].currentPrice;

                    this.products[key].options.forEach(option => {
                        let value = option.product_values.find(val => val.value_option_id === parseInt(option.select));
                        console.log(value);
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

                this.order.total = this.totalPrice
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
                this.updateOrder(true);
                this.confirm = true;
                setTimeout(function(){
                    window.location.href = '/admin/orders'
                }, 1500);
            },
            updateOrder: function (confirm = false) {
                this.order.total = this.totalPrice;

                let prods = [];
                for (let i = 0; i < this.products.length; i++) {
                    prods.push({
                        'product': this.products[i].id,
                        'count': this.products[i].quantity,
                        'currentPrice': this.products[i].price,
                    });
                }

                prods = JSON.stringify(prods);
                this.order.products = prods;
                console.log(prods);

                if (this.ord) {
                    axios.get('/api/order/updateOrder', {
                        params: {
                            order: this.order,
                            products: this.order.products,
                        }
                    }).then((res) => {

                    });
                } else {
                    axios.post('/api/order/createOrder', {
                        products: [],
                    }).then((res) => {
                        this.order.id = res.data;
                        axios.get('/api/order/updateOrder', {
                            params: {
                                order: this.order,
                                products: this.order.products,
                            }
                        }).then((res) => {

                        });
                    });
                }
            },
            searchProduct: function () {
                axios.get('/api/getForCatalogGlasses/search', {
                    params: this.selected
                })
                    .then((response) => {
                        this.result = response.data.products;
                        this.countProducts = response.data.countProducts;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

            },
            addProduct: function (key) {

                let id = this.result[key].id;

                axios.post('/api/order/getProduct', {id: id}).then((res) => {


                    let id = this.products.findIndex(item => item.id === res.data.id);

                    if(id !== -1){
                        this.products[id].quantity++;
                    }else{
                        this.products.push(res.data);
                    }

                    this.updateTotalPrice();
                    this.keywords = '';
                });
            },
            deleteProduct: function (key) {

                this.products.splice(key, 1);

                this.updateTotalPrice();
            },
            clearSearch: function () {

                this.keywords = '';

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

            if (this.order.city) {
                this.keywordCity = this.order.city;
            }

            if (this.order.warehouse) {
                this.keywordPoint = this.order.warehouse;
            }
        },


        created() {
            // _.debounce — это функция lodash, позволяющая ограничить то,
            // насколько часто может выполняться определённая операция.
            // В данном случае мы ограничиваем частоту обращений к yesno.wtf/api,
            // дожидаясь завершения печати вопроса перед отправкой ajax-запроса.
            // Узнать больше о функции _.debounce (и её родственнице _.throttle),
            // можно в документации: https://lodash.com/docs#debounce
            this.debouncedGetAnswerCity = _.debounce(this.loadCities, 1000);
            this.debouncedGetAnswerPoint = _.debounce(this.loadPoints, 1000);
            this.debouncedGetAnswer = _.debounce(this.searchProduct, 800)
        },
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

    .h-auto {
        background-color: white;
        z-index: 100001;
    }

    .upload-gif {
        height: 17px;
        width: 26px;
        display: inline;
        margin: 4px 0px -4px 0px;
    }
    .inputbox {
        margin: 0 30px;
        min-width: 300px;
    }
    .select-custom:hover .select-inner {
        background: none;
        border-color: #999999; }
    .select-custom .select-inner {
        width: 100%;
        min-height: 39px;
        height: 100%;
        background-color: #f8f8f8;
        transition: all .2s ease;
        border: 1px solid  #f8f8f8; }

    .select.select-open .select-inner {
        border-color: #000; }
    .input-search {
        border: 0px;
        background-color: #f8f8f8;
        width: 100%;
        height: 39px;
        color: #171717;
        font-size: 14px;
        padding: 0 8px;
        font-weight: 400;
        transition: all .2s ease;
        -webkit-appearance: none; }
    .input-search:focus {
        background: #f8f8f8;
        border: 0px; }
    .input-search:hover {
        background: none;
        border-color: #999999; }
    .select-wrapper {
        z-index: 1001;
    }
    .select-wrapper .select-content .select-options {
        border-radius: 0 !important;
        list-style: none;
    }

    .select-wrapper .select-content .select-options .select-option-itemm {
        color: #171717;
        font-size: 16px;
        font-weight: 400;
        cursor: pointer; }

    .select-wrapper .select-content .select-options .select-option-itemm:hover {
        background-color: #f8f8f8; }

    .select-wrapper .select-content .select-options .select-option-itemm.item-active {
        background-color: #f8f8f8 !important;
        color: #171717; }
</style>
