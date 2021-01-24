<template>
    <div class="container">
        <div class="row">
            <div v-if="error" class="alert alert-danger alert-dismissible fade show fixed-top" role="alert">
                {{ translate.select_options }}
                <button @click="closeError()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div v-if="confirm" class="alert alert-success alert-dismissible fade show fixed-top" role="alert">
                {{ translate.added_to_cart }}
            </div>
            <div class="col-md-5">
                <div class="btn btn-primary" @click="goBack()">< {{ translate.back }}</div>
            </div>
            <div class="col-12 h1">
                {{ product.data[locale].title }}
            </div>
            <div class="col-12 text-secondary text-right">
                Артикул:<span class="text-dark">{{ product.vendor_code }}</span>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <img v-if="product.image" :src="`/house/uploads/` + product.image" :alt="product.alt ? product.alt : product.data[locale].meta" class="col-md-12">
                    <img v-else :src="`/house/uploads/veis.svg`" :alt="product.data[locale].meta" class="col-md-12">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                            <ul class="uk-slider-items uk-child-width-1-5 uk-child-width-1-6@s uk-child-width-1-7@m">
                                <li class="border border-secondary mr-2" v-for="image in product.galleries">
                                    <img :src="'/house/uploads/' + image.name" style="color:black" :alt="image.alt ? image.alt : product.data[locale].meta">
                                </li>
                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                               uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                               uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="row ">
                    <span class="d-inline">{{ translate.availability }}:</span>
                    <div v-if="product.availability" class="text-success d-inline-block font-weight-bold pl-5">
                        {{ translate.yes_availability }}
                    </div>
                    <div v-else class="text-danger d-inline-block font-weight-bold pl-5">
                        {{ translate.no_availability }}
                    </div>
                </div>
                <div class="row">
                    <span class="d-inline">{{ translate.manufacturer }}: {{ product.manufacturer_title }}</span>
                </div>
                <div class="row" v-if="product.model">
                    <span class="d-inline">Модель: {{ product.model }}</span>
                </div>
                <div class="row">
                    <span class="d-inline">{{ translate.category }}: {{ product.category_title }}</span>
                </div>
                <div class="row">
                    <div class="col-md-12 border border-secondary p-4">
                        <div class="row">

                            <div  class="col-md-6 h2 pl-5">
                                <div v-if="product.status_stock" class="row">
                                    <span class="col-6"><s>{{product.price}}₴</s></span><span class="text-danger col-6">{{ currentPrice(product.price_stock) }}₴</span>
                                </div>
                                <div v-else-if="product.percent !== null && product.undiscounted > 0" class="row">
                                    <span class="col-6"><s>{{product.undiscounted}}₴</s></span><span class="text-danger col-6">{{ currentPrice(product.price) }}₴</span>
                                </div>
                                <div v-else class="row">
                                    <div class="col-12">
                                        {{ currentPrice(product.price) }}₴
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <button :disabled="!product.availability" class="btn btn-success" @click="addToCart()">
                                    <span v-if="product.availability">{{ translate.to_cart }}</span>
                                    <span v-else>{{ translate.no_availability }}</span>
                                </button>
<!--                                <a v-else href="/cart" class="text-success h5">Товар уже в корзине</a>-->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" v-if="free_shipping">
                    <div class="text-success h1">{{ translate.free_shipping }}</div>
                </div>
                <div class="row" v-if="product.options.length > 0" >
                    <h1>{{ translate.options }}</h1>
                    <div v-for="(option, key_o) in product.options" class="col-md-12 form-group">
                        <label>{{ option.option.title }} <span v-if="option.option.need === '1'">({{ translate.most_option }})</span></label>
                        <select @change="selectValue($event, key_o)" class="form-control my-2">
                            <option :value="null">-- {{ translate.select }} --</option>
                            <option  v-for="(val, key) in option.product_values" :value="val.value_option_id">
                                {{ getValues(val.value_option_id, option.values[key]) }}
                                <span v-if="val.price_option > 0">
                                        (<span v-if="val.operation_option === 'plus'">+</span>
                                    <span v-else>-</span> <span class="font-weight-bold">{{ val.price_option }}₴</span>)
                                    </span>
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row" v-if="attributes[0]">
                    <h1>Характеристики</h1>
                    <table class="table">
                        <tbody>
                        <tr v-for="attribute in attributes">
                            <th>{{ attribute.title }}</th>
                            <td>
                                <div v-for="(select, key) in attribute.selected">
                                    {{ selectAttr(attribute.selected[key], attribute.params) }}
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div v-if="glasses" class="row">
                    <h1>{{ translate.glasses }}</h1>
                    <div class="d-flex col-12 h5" v-if="this.product.lens_height">
                        {{ translate.lens_height }}(мм) : {{ this.product.lens_height }}
                    </div>
                    <div class="d-flex col-12 h5" v-if="this.product.lens_width">
                        {{ translate.lens_width }}(мм) : {{ this.product.lens_width }}
                    </div>
                    <div class="d-flex col-12 h5" v-if="this.product.bridge_width">
                        {{ translate.bridge_width }}(мм) : {{ this.product.bridge_width }}
                    </div>
                    <div class="d-flex col-12 h5" v-if="this.product.long_arms">
                        {{ translate.long_arms }}(мм) : {{ this.product.long_arms }}
                    </div>
                    <div class="d-flex col-12 h5" v-if="this.product.frame_width">
                        {{ translate.frame_width }}(мм) : {{ this.product.frame_width }}
                    </div>
                </div>
                <div class="row" v-if="product.tags[0]">
                    <h1>Теги</h1>
                    <div class="col-12 h5" v-for="tag in product.tags">
                        -{{tag.title}}
                    </div>
                </div>
                <div class="row" v-if="product.data[locale].additional">
                    <h1>{{ product.data[locale].additional_title }}</h1>
                    <div class="col-12 h5">
                        {{ product.data[locale].additional }}
                    </div>
                </div>
                <div class="row" v-if="product.data[locale].how_size">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#howsizeModal">
                        {{ product.data[locale].how_size }}
                    </button>
                    <div class="modal fade" id="howsizeModal" tabindex="-1" role="dialog" aria-labelledby="howsizeModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="howsizeModalTitle">{{ product.data[locale].how_size }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img :src="`/house/uploads/` + product.how_size_image" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 h1">{{ translate.desc }}</div>
            <div class="col-md-12">
                {{ product.data[locale].desc }}
            </div>
        </div>
        <div class="row">
            <viewed-component :translate_watch="translate_watch" :settings="settings" :locale="locale"></viewed-component>
        </div>
        <!--<div class="row">
            <relations-component :locale="locale" :settings="settings" :product_id="product.id"></relations-component>
        </div>-->
        <div class="row">
            <h1>{{ page.title }}</h1>
            <span>{{ page.description }}</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Product",
        props: [
            'product',
            'locale',
            'attributes',
            'back',
            'settings',
            'translate',
            'translate_watch',
            'page'
        ],
        data(){
            return{
                select : false,
                date: new Date(),
                now: null,
                error: false,
                confirm: false,
                free_shipping: false,
                glasses: false
            }
        },
        methods: {
            getValues: function (id, values) {

                let name = values.find(value => value.id === id);

                return name.value;
            },
            selectValue: function (e, id) {

                if(e.target.value === ''){
                    this.product.options[id].select = null;
                }else{
                    this.product.options[id].select = e.target.value;
                }

            },
            selectAttr: function (id, params) {

                let name = params.find(param => param.id === id);
                return name.long_title;
            },
            addToCart: function () {
                if(this.product.availability){
                    let sel = true;

                    for(let i = 0;i < this.product.options.length;i++){
                        if(this.product.options[i].option.need === '1'){
                            if(this.product.options[i].select === null){
                                sel = false;
                            }
                        }
                    }
                    let self = this;
                    if(sel){
                        this.$store.commit('addToCart', this.product);
                        this.error = false;
                        this.confirm = true;

                        setTimeout(function(){
                            self.confirm = false;
                        }, 2000);
                    }else{
                        this.confirm = false;
                        this.error = true;
                        setTimeout(function(){
                            self.error = false;
                        }, 2000);
                    }
                }


            },
            checkCart(){
                /*let cart = JSON.parse(window.localStorage.getItem('cart'));

                if(cart.length > 0){
                    if(cart.find(item => item.id === this.product.id)){
                        this.select = true;
                    }
                }*/
            },
            comparison: function(date){

                if(new Date(date) < new Date(this.now)){
                    return true;
                }else{
                    return false;
                }

            },
            closeError(){

                this.error = false;

            },
            goBack: function () {
                window.location = this.back;
            },
            currentPrice: function (price) {

                if(price >= this.settings.free_shipping){
                    this.free_shipping = true;
                }

                return price;

            }
        },
        mounted() {
            let viewed = localStorage.getItem('viewed');
            if(viewed){
                viewed = JSON.parse(viewed);
                let p = viewed.find(x => x === this.product.id);
                if(!p){
                    viewed.push(this.product.id);
                    localStorage.setItem('viewed', JSON.stringify(viewed));
                }
            }else{
                let p = [];
                p.push(this.product.id);
                localStorage.setItem('viewed', JSON.stringify(p));
            }

            if(this.product.lens_height || this.product.lens_width || this.product.bridge_width || this.product.long_arms || this.product.frame_width)
            {
                this.glasses = true;
            }

            this.checkCart();
            this.now = this.date.getFullYear() + '-' + (this.date.getMonth()+1) + '-' + this.date.getDate() + ' ' + this.date.getHours() + ':' + this.date.getMinutes();

        }
    }
</script>

<style scoped>

</style>