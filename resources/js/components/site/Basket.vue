<template>
    <div class="root">
        <section class="cart">
            <form @submit.prevent="confirmOrder()">
            <div class="holder cart__holder">
                <div class="cart__block">
                    <div class="cart__head mobile-hidden">
                        <h3 class="cart__title">
                            {{ translate.basket.form }}
                        </h3>
                        <p class="cart__subtitle">
                            {{ translate.basket.fill }}
                        </p>
                    </div>
                    <div class="cart__head cart__head--mob desktop-hidden">
                        <div>
                            <h3 class="cart__title">
                                {{ translate.basket.fastForm }}

                            </h3>
                            <p class="cart__subtitle">
                                {{ translate.basket.fill }}
                            </p>
                        </div>
                        <p class="form-open" data-form-opener>
                            {{ translate.basket.fullForm }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9">
                                <g>
                                    <g>
                                        <path fill="#2a2a2f"
                                              d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/>
                                    </g>
                                </g>
                            </svg>
                        </p>
                    </div>
                    <div class="cart__body">
                        <div class="cart__form cart__form--mob desktop-hidden">
                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.data }}
                                </div>
                                <div class="inputbox">
                                    <label for="name">
                                        {{ translate.basket.name }}
                                    </label>
                                    <input  v-model="order.name" required name="name" @focusout="updateOrder()" type="text"
                                            class="input">
                                </div>
                            </div>
                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.connection }}
                                </div>
                                <div class="inputbox">
                                    <label for="">
                                        {{ translate.basket.phone }}
                                    </label>
                                    <input v-model="order.phone" required name="phone" @focusout="updateOrder(false, true)" type="text"
                                           class="input <!--phone-->">
                                </div>
                            </div>
                        </div>
                        <div class="cart__form cart__form--full">
                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.userData }}
                                </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.surname }}
                                        </label>
                                        <input type="text" @focusout="updateOrder()" v-model="order.surname"
                                               class="input">
                                    </div>
                                    <div class="inputbox">
                                        <label for="name">
                                            {{ translate.basket.name }}
                                        </label>
                                        <input  v-model="order.name" required name="name" @focusout="updateOrder()" type="text"
                                               class="input">
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.fatherland }}
                                        </label>
                                        <input type="text" class="input" @focusout="updateOrder()" v-model="order.fatherland">
                                    </div>
                                    <div class="inputbox">
                                        <label for="phone">
                                            {{ translate.basket.phone }}
                                        </label>
                                        <input v-model="order.phone" required name="phone" @focusout="updateOrder(false, true)" type="text"
                                               class="input <!--phone-->">
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            E-mail
                                        </label>
                                        <input v-model="order.email" @focusout="updateOrder(false, true)" type="text"
                                               class="input">
                                    </div>

                            </div>
                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.wayToDel }}
                                </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.option }}
                                        </label>
                                        <div class="select select-custom">
                                            <div class="select-inner" style="padding-left: 10px;"
                                                 @click="openDels = !openDels;"
                                            >{{ del }}</div>
                                            <select>
                                                <option value="1">В отделении Новой Почты</option>
                                                <option value="2">В отделении Укр Почты</option>
                                                <option value="3">В отделении Meest Express</option>
                                            </select>

                                            <div class="select-wrapper" data-select="2" v-show="openDels"
                                                 style="width: 293px;">
                                                <div class="select-content">
                                                    <ul class="select-options">
                                                        <li class="select-option-item" @click="openDels = false; order.delivery = 'nova'; del = translate.basket.novaDel;">
                                                            {{ translate.basket.novaDel }}
                                                        </li>
                                                        <li class="select-option-item" @click="openDels = false; order.delivery = 'ukr'; del = translate.basket.ukrDel;">
                                                            {{ translate.basket.ukrDel }}
                                                        </li>
                                                        <li class="select-option-item" @click="openDels = false; order.delivery = 'pickup'; del = translate.basket.pickupDel;">
                                                            {{ translate.basket.pickupDel }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.city }}
                                            <img src="/assets/front/img/uploading.gif" alt="loading..." class="upload-gif" v-show="loadingCities">
                                        </label>
                                        <div class="select select-custom">
                                            <div class="select-inner">
                                                <input v-model="keywordCity"
                                                       @keydown="debouncedGetAnswerCity()"
                                                       @focusout="updateOrder(); closeCitiesWithDelay();"
                                                       @focusin="openCities = true; openPoints = false;"
                                                       type="text"
                                                       class="input-search"
                                                       :placeholder="translate.basket.chooseCity"
                                                >
                                            </div>
                                            <div class="select-wrapper" data-select="2" v-show="openCities"
                                                 style="">
                                                <div class="select-content">
                                                    <ul class="select-options">
                                                        <li class="select-option-item"
                                                            v-for="wareCity in cities"
                                                            @click="city = wareCity; keywordCity = (getLang ? wareCity.DescriptionRu : wareCity.Description);">
                                                            {{ getLang ? wareCity.DescriptionRu : wareCity.Description }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="inputbox">
                                        <label for="">
                                            {{ order.delivery == 'nova' ? translate.basket.department : translate.basket.address }}
                                            <img v-if="order.delivery == 'nova'" src="/assets/front/img/uploading.gif" alt="loading..." class="upload-gif" v-show="loadingPoints">
                                        </label>
                                        <div class="select select-custom">
                                            <div :class="'select-inner' + (order.delivery != 'nova' ? 'without-arrow' : '')">
                                                <input v-if="order.delivery == 'nova'"
                                                       v-model="keywordPoint"
                                                       @keydown="debouncedGetAnswerPoint()"
                                                       @focusout="updateOrder(); closePointsWithDelay();"
                                                       @focusin="openPoints = true; openCities = false;"
                                                       type="text" class="input-search"
                                                       :placeholder="translate.basket.choosePoint"
                                                >
                                                <input v-else
                                                       v-model="keywordPoint"
                                                       @focusout="updateOrder(); closePointsWithDelay();"
                                                       @focusin="openPoints = true; openCities = false;"
                                                       type="text" class="input-search"
                                                       :placeholder="translate.basket.chooseAddress"
                                                >
                                            </div>

                                            <div class="select-wrapper" data-select="2" v-show="openPoints && order.delivery == 'nova'"
                                                 style="">
                                                <div class="select-content">
                                                    <ul class="select-options">
                                                        <li class="select-option-item" v-for="avPoint in points" @click="point = avPoint; keywordPoint = avPoint; openPoints = false;">
                                                            {{ avPoint }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.comment }}
                                        </label>
                                        <textarea class="textarea" @focusout="updateOrder();" v-model="order.comment"></textarea>
                                    </div>

                            </div>

                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.wayToPay }}
                                </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.choose }}
                                        </label>
                                        <div class="select select-custom">
                                            <div class="select-inner"
                                                 @focusout="closeWaysWithDelay();"
                                                 @click="openWays = !openWays;" style="padding-left: 10px;">{{ way }}</div>
                                            <select v-model="order.way_to_pay">
                                                <option v-for="wayToPay in wayToPays" :value="wayToPay.id">{{ wayToPay.title_ru }}</option>
                                            </select>

                                            <div class="select-wrapper" data-select="2" v-show="openWays"
                                                 style="width: 293px;">
                                                <div class="select-content">
                                                    <ul class="select-options">
                                                        <li class="select-option-item" v-for="wayToPay in wayToPays" @click="order.way_to_pay = wayToPay.id; way = getLang ? wayToPay.title_ru : wayToPay.title_uk; openWays = false">
                                                            {{ getLang ? wayToPay.title_ru : wayToPay.title_uk }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="small-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>


                            </div>


                        </div>
                        <div class="cart__itoges cart__itoges--mob desktop-hidden">
                            <button type="submit" class="product-card__btn product-card__btn--buy">
                                <img src="/assets/front/img/cart__white.png" alt="">
                                <span class="product-card__btn-inner">{{ translate.basket.pay }}</span>
                            </button>
                            <div class="cart__itoges-text">
                                <p class="cart__itoges-textwrap" v-if="totalPrice >= settings.free_shipping">
                                    {{ translate.basket.delCost }} <span>{{ translate.basket.free }}</span>
                                </p>
                                <p class="cart__itoges-pricewrap">
                                    {{ translate.basket.price }} <span>{{ totalPrice }}</span> грн
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart__block">
                    <div class="cart__head">
                        <h3 class="cart__title">
                            {{ translate.basket.yourProducts }}
                        </h3>
                        <p class="cart__subtitle">
                            {{ translate.basket.fullList }}
                        </p>
                    </div>
                    <div class="cart__body">
                            <div class="cart__products">
                                <div v-for="(product, key_p) in products">
                                    <div class="cart__item" v-for="example in product.quantity">
                                        <div class="cart__item-info">
                                            <a :href="'/' + locale + '/product/' + product.slug_ru"
                                               class="cart__item-title" v-if="locale == 'ru'">
                                                {{ product.title_ru}}
                                            </a>
                                            <a :href="'/' + '/product/' + product.slug_uk"
                                               class="cart__item-title" v-if="locale == 'uk'">
                                                {{ product.title_uk }}
                                            </a>
                                            <p class="cart__item-subtitle">
                                                {{ product.manufacturer_title }}
                                            </p>
                                            <p class="cart__item-subtitle" style="margin-bottom: 0px !important;"
                                               v-for="option in product.options" v-if="product.length != 0">
                                                {{ findSelectedOption(option) }}
                                            </p>
                                            <!--<div class="cart__item-chars">
                                                <p>
                                                    Кол-во: <span>{{ product.quantity }}</span>
                                                </p>
                                            </div>-->
                                        </div>

                                        <a href="#" class="cart__item-img">
                                            <img v-if="product.image" :src="`/house/uploads/` + product.image" alt="">
                                        </a>

                                        <p class="cart__item-price">
                                            {{ product.price }} грн
                                        </p>

                                        <div class="cart__item-remove" @click="removeProduct(product.id)"
                                             title="Убрать товар из корзины">
                                            <img src="/assets/front/img/buy_close.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cart__itoges mobile-hidden">
                                <button type="submit" class="product-card__btn product-card__btn--buy">
                                    <img src="/assets/front/img/cart__white.png" alt="">
                                    <span class="product-card__btn-inner">{{ translate.basket.pay }}</span>
                                </button>
                                <div class="cart__itoges-text">
                                    <p class="cart__itoges-textwrap" v-if="totalPrice >= settings.free_shipping">
                                        {{ translate.basket.delCost }} <span>{{ translate.basket.free }}</span>
                                    </p>
                                    <p class="cart__itoges-pricewrap">
                                        {{ translate.basket.price }} <span>{{ totalPrice }}</span> грн
                                    </p>
                                </div>
                            </div>
                            <a href="/" class="back-btn cart__back">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                                    <g>
                                        <g>
                                            <path fill="#5c5c5c" d="M7 0h1L1 10l7 9v1L0 10z"></path>
                                        </g>
                                    </g>
                                </svg>
                                {{ translate.basket.back }}
                            </a>
                    </div>
                </div>
            </div>
            </form>
        </section>

        <div id="confirm" class="modal-pay">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">{{ translate.basket.thanks }}</h3>
                        <a :href="getLang ? '/ru' : '/'" title="Close" class="close-pay">×</a>
                    </div>
                    <div class="modal-body">
                        <p>{{ translate.basket.confirm }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import axios from "axios";

    export default {
        name: "Basket",
        props: [
            'translate',
            'locale',
            'settings',
            'wayToPays',
        ],
        data() {
            return {
                products: this.$store.state.cart,
                totalPrice: this.$store.state.totalPrice,
                /*delivery: this.settings.point_deliveries !== '0' ? 'carrier' : 'pickup',
                region: '',
                warehouse: '',*/
                comment: '',
                id: 0,
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
                openWays: false,
                openDels: false,
                way: '',
                del: '',
                /*regions: this.regi,
                warehouses: [],*/
                confirm: false,
                orderCreated: false,
                error: false,
                order: {
                    id: 0,
                    name: '',
                    surname: '',
                    fatherland: '',
                    phone: '',
                    email: '',
                    delivery: '',
                    way_to_pay: '',
                    region: '',
                    city: '',
                    warehouse: '',
                    status: 'Новый',
                    comment: '',
                    confirm: false,
                    total: ''
                }
            }
        },
        watch: {
            /*region(val){
                axios.post('/api/order/selectCities', {ref: val}).then((res) => {
                    this.cities = res.data;
                    this.warehouses = [];
                });
            },
            city(val){
                axios.post('/api/order/selectWarehouses', {ref: val}).then((res) => {
                    this.warehouses = res.data;
                });
            }*/
            keywordCity(newVal) {
                this.keywordPoint = "";
                this.order.city = newVal;
            },

            keywordPoint(newVal) {
                this.order.warehouse = newVal;
            },

            city() {
                this.debouncedGetAnswerPoint();
            },
        },

        methods: {
            createOrder: function (confirm = false) {
                this.order.total = this.totalPrice;
                this.order.comment = this.comment;

                axios.post('/api/order/createOrder', {
                    products: this.$store.state.cart,
                }).then((res) => {
                    this.order.id = res.data;
                    axios.get('/api/order/updateOrder', {
                        params: {
                            order: this.order,
                            confirm: this.order.confirm,
                        }
                    }).then((res) => {
                        this.id = res.data.id;
                    });
                });
            },
            updateOrder: function (confirm = false, usefulData = false) {
                /*this.order.delivery = this.delivery;
                this.order.city = this.city;
                this.order.warehouse = this.warehouse;
                this.order.region = this.region;*/
                if (this.products.length) {
                    if (usefulData == true && this.orderCreated == false) {
                        this.createOrder(confirm);
                        this.orderCreated = true;
                    } else if (this.orderCreated == true) {
                        this.order.total = this.totalPrice;

                        axios.get('/api/order/updateOrder', {
                            params: {
                                order: this.order,
                                confirm: confirm,
                            }
                        }).then((res) => {
                            this.id = res.data.id;
                        });
                    }
                }
            },
            confirmOrder: function () {
                this.order.confirm = 1;
                this.updateOrder(true);
                this.$store.commit('clearCart');
                if (this.locale == 'ru') {
                    window.location.href = '/ru/basket#confirm';
                } else if (this.locale == 'uk') {
                    window.location.href = '/basket#confirm';
                }

            },



            removeProduct: function (id) {
                this.$store.commit('removeFromCart', id);
                this.updateTotalPrice();
            },

            updateTotalPrice: function () {
                this.totalPrice = 0;
                this.products.forEach(product => {
                    this.totalPrice += parseInt(product.totalPrice);
                });
            },

            closeError() {
                this.error = false;
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

            closeWaysWithDelay() {
                setTimeout(() => this.openWays = false, 300);
            },

            closePointsWithDelay() {
                setTimeout(() => this.openPoints = false, 300);
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

            getValuePrice: function (id, key) {

                let item;

                for (let i = 0;i < this.products[key].options.length;i++){
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

            findSelectedOption: function (option) {
                let value = option.product_values.find(value => value.value_option_id === parseInt(option.select));
                let title = (this.getLang ? option.option.title_ru : option.option.title_uk) + ': ' + (this.getLang ? value.value_option.value_ru : value.value_option.value_uk);


                return title;
            }

            /*confirmOrder: function () {

                console.log(1);
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
                    console.log(2);
                }

                this.order.confirm = this.confirm;
                this.$store.commit('clearCart');
            },*/
        },
        mounted() {
            if (!Number.isInteger(this.totalPrice)) {
                this.updateTotalPrice();
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
        },

        computed: {
            getLang: function () {
                if (this.locale == 'ru') {
                    return true;
                } else if (this.locale == 'uk') {
                    return false;
                }
            },
        }
    }
</script>

<style scoped>
    /* свойства модального окна по умолчанию */
    @media screen and (max-width: 640px) {
    body {
        padding-top: 20px !important;
    }
    }
    .modal-pay {
        position: fixed; /* фиксированное положение */
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.5); /* цвет фона */
        z-index: 99999;
        opacity: 0; /* по умолчанию модальное окно прозрачно */
        -webkit-transition: opacity 200ms ease-in;
        -moz-transition: opacity 200ms ease-in;
        transition: opacity 200ms ease-in; /* анимация перехода */
        pointer-events: none; /* элемент невидим для событий мыши */
        margin: 0;
        padding: 0;
    }
    /* при отображении модального окно */
    .modal-pay:target {
        opacity: 1; /* делаем окно видимым */
        pointer-events: auto; /* элемент видим для событий мыши */
        overflow-y: auto; /* добавляем прокрутку по y, когда элемент не помещается на страницу */
    }
    /* ширина модального окна и его отступы от экрана */
    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px;
    }
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 30px auto; /* для отображения модального окна по центру */
        }
    }
    /* свойства для блока, содержащего контент модального окна */
    .modal-content {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.2);
        border-radius: .3rem;
        outline: 0;
    }
    @media (min-width: 768px) {
        .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
            box-shadow: 0 5px 15px rgba(0,0,0,.5);
        }
    }
    /* свойства для заголовка модального окна */
    .modal-header {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 15px;
        border-bottom: 1px solid #eceeef;
    }
    .modal-title {
        margin-top: 0;
        margin-bottom: 0;
        line-height: 1.5;
        font-size: 1.25rem;
        font-weight: 500;
    }
    /* свойства для кнопки "Закрыть" */
    .close-pay {
        float: right;
        font-family: sans-serif;
        font-size: 24px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
        text-decoration: none;
    }
    /* свойства для кнопки "Закрыть" при нахождении её в фокусе или наведении */
    .close:focus, .close:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        opacity: .75;
    }
    /* свойства для блока, содержащего основное содержимое окна */
    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 15px;
        overflow: auto;
    }

    .upload-gif {
        height: 17px;
        width: 26px;
        display: inline;
        margin: 4px 0px -4px 0px;
    }
</style>
