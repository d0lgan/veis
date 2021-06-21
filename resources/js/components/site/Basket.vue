<template>
    <div class="root">
        <section class="cart">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="9" viewBox="0 0 19 9"><g><g><path fill="#2a2a2f" d="M-.01 1V0l9.5 7.6L18.992 0v1l-9 7.2V9l-.5-.4-.5.4v-.8z"/></g></g></svg>
                        </p>
                    </div>
                    <div class="cart__body">
                        <div class="cart__form cart__form--mob desktop-hidden">
                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.data }}
                                </div>
                                <div class="inputbox">
                                    <label for="">
                                        {{ translate.basket.name }}
                                    </label>
                                    <input required type="text" class="input">
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
                                    <input required type="text" class="input phone">
                                </div>
                            </div>
                        </div>
                        <div class="cart__form cart__form--full">
                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.userData }}
                                </div>
                                <form action="">
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.surname }}
                                        </label>
                                        <input type="text" class="input">
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.name }}
                                        </label>
                                        <input required type="text" class="input">
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.fatherland }}
                                        </label>
                                        <input type="text" class="input">
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.phone }}
                                        </label>
                                        <input required type="text" class="input phone">
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            E-mail
                                        </label>
                                        <input type="text" class="input">
                                    </div>
                                </form>

                            </div>
                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.wayToDel }}
                                </div>
                                <form action="">
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.option }}
                                        </label>
                                        <div class="select select-custom">
                                            <div class="select-inner"></div>
                                            <select>
                                                <option value="1">В отделении Новой Почты</option>
                                                <option value="2">В отделении Укр Почты</option>
                                                <option value="3">В отделении Meest Express</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.city }}
                                        </label>
                                        <div class="select select-custom">
                                            <div class="select-inner"></div>
                                            <select>
                                                <option value="1">Одесса</option>
                                                <option value="2">Киев</option>
                                                <option value="3">Львов</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.department }}
                                        </label>
                                        <div class="select select-custom">
                                            <div class="select-inner"></div>
                                            <select>
                                                <option value="1">10</option>
                                                <option value="2">11</option>
                                                <option value="3">15</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.comment }}
                                        </label>
                                        <textarea class="textarea"></textarea>
                                    </div>

                                </form>
                            </div>

                            <div class="cart__form-col">
                                <div class="cart__form-title">
                                    {{ translate.basket.wayToPay }}
                                </div>
                                <form action="">
                                    <div class="inputbox">
                                        <label for="">
                                            {{ translate.basket.choose }}
                                        </label>
                                        <div class="select select-custom">
                                            <div class="select-inner"></div>
                                            <select>
                                                <option value="1">Оплата картой VISA. MasterCard</option>
                                                <option value="2">Оплата картой VISA. MasterCard</option>
                                                <option value="3">Оплата картой VISA. MasterCard</option>
                                            </select>
                                        </div>
                                    </div>
                                    <p class="small-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>

                                </form>
                            </div>


                        </div>
                        <div class="cart__itoges cart__itoges--mob desktop-hidden">
                            <a href="#" class="product-card__btn product-card__btn--buy">
                                <img src="img/cart__white.png" alt="">
                                <span class="product-card__btn-inner">{{ translate.basket.pay }}</span>
                            </a>
                            <div class="cart__itoges-text">
                                <p class="cart__itoges-textwrap">
                                    {{ translate.basket.delCost }} <span>{{ translate.basket.free }}</span>
                                </p>
                                <p class="cart__itoges-pricewrap">
                                    {{ translate.basket.price }}   <span>{{ totalPrice }}</span> грн
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
                        <form action="">
                            <div class="cart__products">
                                <div v-for="(product, key_p) in products">
                                    <div class="cart__item" v-for="example in product.quantity">
                                        <div class="cart__item-info">
                                            <a :href="'/' + locale + '/produce/' + product.slug_ru" class="cart__item-title" v-if="locale == 'ru'">
                                                {{ product.title_ru}}
                                            </a>
                                            <a :href="'/' + locale + '/produce/' + product.slug_uk" class="cart__item-title" v-if="locale == 'uk'">
                                                {{ product.title_uk }}
                                            </a>
                                            <p class="cart__item-subtitle">
                                                {{ product.manufacturer_title }}
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

                                        <div class="cart__item-remove" @click="removeProduct(product, key_p)" title="Убрать товар из корзины">
                                            <img src="/assets/front/img/buy_close.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cart__itoges mobile-hidden">
                                <a href="#" class="product-card__btn product-card__btn--buy">
                                    <img src="img/cart__white.png" alt="">
                                    <span class="product-card__btn-inner">{{ translate.basket.pay }}</span>
                                </a>
                                <div class="cart__itoges-text">
                                    <p class="cart__itoges-textwrap">
                                        {{ translate.basket.delCost }} <span>{{ translate.basket.free }}</span>
                                    </p>
                                    <p class="cart__itoges-pricewrap">
                                        {{ translate.basket.price }}   <span>{{ totalPrice }}</span> грн
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
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "Basket",
        props: [
            'locale',
            'translate',
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
            removeProduct: function (product, key_p) {
                if (product.quantity > 1) {
                    this.changeQuantity(key_p, 'minus')
                } else if (product.quantity == 1) {
                    this.$store.commit('removeFromCart', product.id);
                }
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
            console.log(this.products);
            this.now = this.date.getFullYear() + '-' + (this.date.getMonth()+1) + '-' + this.date.getDate();
            this.updatePrice();

        }
    }

</script>

<style scoped>

</style>