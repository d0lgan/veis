<template>
    <div class="col-md-12">
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="box-shadow: 0 0 10px 5px rgba(0, 0, 0, 25%); width: 500px !important; margin: 0 auto">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalTitle">Подтвердите сохранение</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Сохранить измененные данные для выбраных товаров?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Нет</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" @click="saveGroupData()">Да</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-success notification" v-if="notification">OK
            <button type="button" class="close" @click="notification = false">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-danger notification" v-if="error">{{ error_text }}
            <button type="button" class="close" @click="error = false">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-3 form-group">
                <label for="category">Категория</label>
                <category-component :default_category="0"
                                    :categories="categories_json"></category-component>
            </div>
            
            <div class="col-md-6 form-group">
                <div id="app">
                    <select-component :default="null"
                                      :categories="categories_json"
                                      id="category"></select-component>
                </div>
            </div> 

            <div class="col-md-3 form-group">
                <label>Сортировка</label>
                <input class="form-control" v-model="sort" type="text" name="">
            </div>


            <!-- <div class="col-md-4 form-group">
                <label for="category">Категория</label>
                <category-component :default_category="0"
                                    :categories="categories_json"></category-component>
            </div>
            <div class="col-md-4 form-group">
                <label for="manufacturers">Производитель</label>
                <select v-model="data.manufacturer_id" name="manufacturer_id" id="manufacturers" class="form-control">
                    <option v-for="manufacturer in manufacturers" :value="manufacturer.id">{{ manufacturer.title }}</option>
                </select>
            </div>

            <div class="col-md-4 form-group">
                <label for="suppliers">Поставщики</label>
                <select v-model="data.supplier_id" name="supplier" id="suppliers" class="form-control">
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
                <input v-model="data.vendor_code" class="form-control" type="text" name="vendor_code"
                       id="vendor_code">
            </div>

            <div class="form-group col-md-2">
                <label for="type_stock">Тип</label>
                <select v-model="data.type" name="type" id="type" class="form-control">
                    <option value="null">Обычный</option>
                    <option value="recommended">Рекомендуемый</option>
                    <option value="hit">Хит продаж</option>
                    <option value="new">Новинка</option>
                    <option value="sell">Обмен</option>
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



            <!-- <div class="col-md-6 form-group">
                <div id="app">
                    <select-component :default="null"
                                      :categories="categories_json"
                                      id="category"></select-component>
                </div>
            </div>
            <div class="col-md-3 form-group">
                <label for="vendor_code">Артикул</label>
                <input v-model="data.vendor_code" class="form-control" type="text" name="vendor_code"
                       id="vendor_code">
            </div>

            <div class="col-md-3 form-group">
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
                            <input v-model="data.ude" @change="changePrice()" class="form-control" type="text" name="ude"
                                   id="ude">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="course">Курс</label>
                            <input v-model="data.course" @change="changePrice()" class="form-control" type="text" name="course"
                                   id="course">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="price">Цена</label>
                            <input v-model="data.price" class="form-control" type="text" name="price"
                                   id="price">
                        </div>
    
                        <div class="form-group col-md-1">
                            <label for="percent">%</label>
                            <input v-model="data.percent" @change="changePrice()" class="form-control" type="text" name="percent"
                                   id="percent">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="undiscounted">Цена без скидки</label>
                            <input v-model="data.undiscounted" class="form-control" type="text" name="undiscounted"
                                   id="undiscounted">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="stock">Акция</label>
                            <input type="text" name="stock" v-model="data.stock" id="stock"
                                   class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="type_stock">Тип</label>
                            <select v-model="data.type_stock" name="type_stock" id="type_stock"
                                    class="form-control">
                                <option value="percent">%</option>
                                <option value="number">Цена</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="start_stock">От</label>
                            <datetime-component :i="'start_stock_group'" id="start_stock_group" :name="'start_stock'"></datetime-component>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="end_stock">До</label>
                            <datetime-component :i="'end_stock_group'" id="end_stock_group" :name="'end_stock'"></datetime-component>
                        </div>
                    </div>




                    <!-- <div class="row">
                        <div class="form-group col-md-4">
                            <label for="ude">УДЕ</label>
                            <input v-model="data.ude" @change="changePrice()" class="form-control" type="text" name="ude"
                                   id="ude">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="course">Курс</label>
                            <input v-model="data.course" @change="changePrice()" class="form-control" type="text" name="course"
                                   id="course">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="price">Цена</label>
                            <input v-model="data.price" class="form-control" type="text" name="price"
                                   id="price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="percent">%</label>
                            <input v-model="data.percent" @change="changePrice()" class="form-control" type="text" name="percent"
                                   id="percent">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="undiscounted">Цена без скидки</label>
                            <input v-model="data.undiscounted" class="form-control" type="text" name="undiscounted"
                                   id="undiscounted">
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- <div class="col-md-12">
                <div class="row">
                    <div class="jumbotron col-md-12 p-5">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="stock">Акция</label>
                                <input type="text" name="stock" v-model="data.stock" id="stock"
                                       class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="type_stock">Тип</label>
                                <select v-model="data.type_stock" name="type_stock" id="type_stock"
                                        class="form-control">
                                    <option value="percent">%</option>
                                    <option value="number">Цена</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="start_stock_group">От</label>
                                <datetime-component :i="'start_stock_group'" id="start_stock_group" :name="'start_stock'"></datetime-component>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="end_stock_group">До</label>
                                <datetime-component :i="'end_stock_group'" id="end_stock_group" :name="'end_stock'"></datetime-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="availability">Наличие</label>
                        <select v-model="data.availability" name="availability" id="availability"
                                class="form-control">
                            <option value="1">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="public">Активен</label>
                        <select v-model="data.public" name="public" id="public" class="form-control">
                            <option value="1">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                </div>
            </div> -->
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


        <!-- <div class="row">
            <div class=" col-md-3 form-group">
                <label for="type">Тип</label>
                <select name="type" v-model="data.type" id="type" class="form-control">
                    <option value="null">Обычный</option>
                    <option value="recommended">Рекомендуемый</option>
                    <option value="hit">Хит продаж</option>
                    <option value="new">{{settings.new}}</option>
                    <option value="sell">{{settings.sell}}</option>
                </select>
            </div>
        </div> -->
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "GroupData",
        props: [
            'categories_json',
            'manufacturers',
            'suppliers',
            'settings',
            'selected_products'
        ],
        watch:{
            /*manufacturers(val){
                this.data.manufacturer_id = val[0].id;
            },
            categories_json(val){
                this.data.category_id = val[0].id;
            },
            suppliers(val){
                if(val.length > 0){
                    this.data.supplier_id = val[0].id;
                }

            }*/
        },
        data(){
            return{
                data: {ude: null, course: null,price: null, percent: null, undiscounted: null, stock: null, start_stock: null, end_stock: null, type_stock: 'percent', category_id: 0, manufacturer_id: 0, supplier_id: 0, vendor_code: null, model: null,public: null, availability: null, type: ''},
                categories: [],
                notification: false,
                error: false,
                error_text: '',
                public: 1,
                sort: 0
            }
        },
        methods:{
            saveGroupData: function () {

                if(this.error === false){
                    axios.post('/api/fastEdit/groupPrice', {select_products: this.selected_products, data: this.data, categories: this.categories, public: this.public, sort: this.sort}).then((res) => {
                        console.log(res.data);
                        if(res.data === true){
                            this.$root.$emit('groupPrice', this.value);
                        }
                    });

                }
            },
            changePrice: function () {
                if(this.data.ude !== null && this.data.course !== null){
                    this.data.price = Math.ceil(this.data.ude * this.data.course);
                }

                if(this.data.percent !== null && this.data.price !== null){
                    this.data.undiscounted = Math.ceil((this.data.price / (100 - this.data.percent)) * 100);
                }

            },
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