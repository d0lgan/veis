<template>
    <div class="col-md-12">
        <div class="alert alert-success notification" v-if="notification">OK
            <button type="button" class="close" @click="notification = false">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-3 form-group">
                <label for="category">Категория</label>
                <category-component :default_category="product.category_id"
                                    :categories="categories_json"></category-component>
            </div>
            
            <div class="col-md-6 form-group">
                <div id="app">
                    <select-component :default="product.categories"
                                      :categories="categories_json"
                                      id="category"></select-component>
                </div>
            </div> 

            <div class="col-md-3 form-group">
                <label>Сортировка</label>
                <input class="form-control" v-model="sort" type="text" name="">
            </div>
            <!-- <div class="col-md-4 form-group">
                <label for="suppliers">Поставщики</label>
                <select v-model="supplier" name="supplier" id="suppliers" class="form-control">
                    <option v-for="supplier in suppliers" :value="supplier.id">{{ supplier.title }}</option>
                </select>
            </div> -->
        </div>
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="manufacturers">Производитель</label>
                <select v-model="data.manufacturer_id" name="manufacturer_id" id="manufacturers" class="form-control">
                    <option v-for="manufacturer in manufacturers" :value="manufacturer.id">{{ manufacturer.title }}</option>
                </select>
            </div>
            <div class="col-md-3 form-group">
                <label for="vendor_code">Артикул</label>
                <input v-model="data.vendor_code" required class="form-control" type="text" name="vendor_code"
                       id="vendor_code">
            </div>

            <div class="form-group col-md-2">
                <label for="type_stock">Тип</label>
                <select name="type" id="type" class="form-control">
                    <option value="null">Обычный</option>
                    <option :selected="product.type == 'recommended'" value="recommended">Рекомендуемый</option>
                    <option :selected="product.type == 'hit'" value="hit">Хит продаж</option>
                    <option :selected="product.type == 'new'" value="new">Новинка</option>
                    <option :selected="product.type == 'sell'" value="sell">Обмен</option>
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="availability">Наличие</label>
                <select v-model="data.availability" name="availability" id="availability"
                        class="form-control">
                    <option value="1">В наличии </option>
                    <option value="0">Нет в наличии </option>
                    <option value="2">Ожидается</option>
                </select>
            </div>

            <div class="form-group col-md-2 d-flex align-items-end">
                <label for="public">Отображение</label>
                <label class="switch switch-3d switch-success ml-3">
                    <input type="checkbox" v-model="public" value="1" name="public" class="switch-input" id="public">
                    <span class="switch-label"></span>
                    <span class="switch-handle"></span>
                </label>
            </div>

            <!-- <div class="col-md-3 form-group">
                <label for="model">Модель</label>
                <input v-model="data.model" class="form-control" type="text" name="model" id="model">
            </div> -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron p-3">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="ude">УДЕ</label>
                            <input v-model="ude" @change="changePrice()" class="form-control" type="text" name="ude"
                                   id="ude">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="course">Курс</label>
                            <input v-model="course" @change="changePrice()" class="form-control" type="text" name="course"
                                   id="course">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="price">Цена</label>
                            <input v-model="price" class="form-control" type="text" name="price"
                                   id="price">
                        </div>
    
                        <div class="form-group col-md-1">
                            <label for="percent">%</label>
                            <input v-model="percent" @change="changePrice()" class="form-control" type="text" name="percent"
                                   id="percent">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="undiscounted">Цена без скидки</label>
                            <input v-model="undiscounted" class="form-control" type="text" name="undiscounted"
                                   id="undiscounted">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="stock">Акция</label>
                            <input v-model="stock" type="text" name="stock" id="stock"
                                   class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="type_stock">Тип</label>
                            <select name="type_stock" id="type_stock"
                                    class="form-control">
                                <option value="percent">%</option>
                                <option value="number">Цена</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="start_stock">От</label>
                            <datetime-component :i="'start_stock'" id="start_stock" :val="start_stock" :name="'start_stock'"></datetime-component>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="end_stock">До</label>
                            <datetime-component :i="'end_stock'" id="end_stock" :val="end_stock" :name="'end_stock'"></datetime-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-1">
            <strong class="form-label">Размеры очки</strong>

            <div class="row d-flex justify-content-between">
                <div class="form-group col-md-2">
                    <label for="" class="form-label">Высота линзы (мм)</label>
                    <input type="text" class="form-control"/>
                </div>

                <div class="form-group col-md-2">
                    <label for="" class="form-label">Ширина линзы (мм)</label>
                    <input type="text" class="form-control"/>
                </div>
                
                <div class="form-group col-md-2">
                    <label for="" class="form-label">Ширина моста (мм)</label>
                    <input type="text" class="form-control"/>
                </div>
                
                <div class="form-group col-md-2">
                    <label for="" class="form-label">Длинна дужки (мм)</label>
                    <input type="text" class="form-control"/>
                </div>
                
                <div class="form-group col-md-3">
                    <label for="" class="form-label">Ширина оправы (мм)</label>
                    <input type="text" class="form-control"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <strong class="form-label">Теги</strong>

            <select name="" id="" class="form-control">
                <option value="">Зима</option>
                <option value="">Весна</option>
                <option value="">Летний</option>
                <option value="">Осень</option>
            </select>
        </div>

        <!-- <div class="btn btn-primary" @click="saveData()">Сохранить</div> -->
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Data",
        props:[
            'product',
            'categories_json',
            'manufacturers',
            'suppliers',
            'product_categories',
            'default_category',
            'settings'
        ],

        created() {
            this.$root.$refs.dataSave = this;
        },

        data(){
            return{
                data: [],
                categories: [],
                notification: false,
                ude: 0,
                course: 0,
                price: 0,
                percent: 0,
                stock: 0,
                undiscounted: 0,
                end_stock: null,
                start_stock: null,
                supplier : null,
                public: 1,
                sort: 0
            }
        },
        methods:{
            saveData(){
                this.data.ude = this.ude;
                this.data.course = this.course;
                this.data.price = this.price;
                this.data.percent = this.percent;
                this.data.stock = this.stock;
                this.data.undiscounted = this.undiscounted;
                this.data.start_stock = this.start_stock;
                this.data.end_stock = this.end_stock;
                this.data.supplier = this.supplier;
                this.data.public = this.public;
                this.data.sort = this.sort;
                axios.post('/api/fastEdit/saveData', {product: this.data, categories: this.categories}).then((res) => {
                    if(res.data === true){
                        this.notification = true;
                        this.$root.$emit('groupPrice', this.value);
                    }

                    console.log(res.data);
                });

                console.log('data saved');
            },
            changePrice: function () {
                if(this.ude !== null && this.course !== null){
                    this.price = Math.ceil(this.ude * this.course);
                }

                if(this.percent !== null && this.price !== null){
                    this.undiscounted = Math.ceil((this.price / (100 - this.percent)) * 100);
                }

            }
        },
        watch:{
            product(val){
                this.data = val;
                this.ude = this.data.ude;
                this.course = this.data.course;
                this.price = this.data.price;
                this.percent = this.data.percent;
                this.stock = this.data.stock;
                this.undiscounted = this.data.undiscounted;
                this.start_stock = this.data.start_stock;
                this.end_stock = this.data.end_stock;
                this.supplier = this.data.supplier;
            }
        },
        mounted() {
            this.$root.$on('eventing', (data) => {
                this.data.category_id = data;
            });

            this.$root.$on('value', (data) => {
                this.categories = data;
            });

            this.$root.$on('startDate', (data) => {
                this.data.start_stock = data;
            });

            this.$root.$on('endDate', (data) => {
                this.data.end_stock = data;
            });



        }
    }
</script>

<style scoped>

</style>