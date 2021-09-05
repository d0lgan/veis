<template>
    <div class="col-md-12">
        <div class="form-group col-md-12">
            <div class="alert alert-success notification" v-if="notification">OK
                <button type="button" class="close" @click="notification = false">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <label for="search">Поиск товара</label>
            <div class="d-flex">
                <input v-model="keywords" type="text" id="search" class="form-control">
                <div class="m-l-5 btn btn-secondary d-flex justify-content-center align-items-center" @click="clearSearch()"><span style="font-weight: bold;" aria-hidden="true"><i class="fas fa-times"></i></span></div>
            </div>
            <div class="search w-100" v-if="keywords">
                <div class="col-md-10" v-show="result.length === 0">
                    Ничего не найдено
                </div>
                <div v-for="(res, key_r) in result" class="col-md-12 py-3 result border-bottom border-secondary" @click="addProduct(key_r)">
                    <div class="col-md-9">{{ res.title_ru }}</div>
                    <div class="col-md-3">{{ res.price }} грн</div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div v-for="(rel, idx) in relations" class="col d-flex justify-content-between align-items-center p-3 mt-2 border">
                <div class="col-md-11">{{ rel.title_ru }}</div>
                <div class="d-flex justify-content-center align-items-center" style="width: 30px;height: 30px; background-color: #e1e1e1; border-radius: 50%; cursor: pointer;" @click="deleteProduct(idx)"><i style="font-size: .875rem" class="far fa-trash-alt m-0 p-0"></i></div>
                <!-- <div @click="deleteProduct" class="col-md-1"><i class="fa fa-times"></i></div> -->
            </div>
        </div>
        <!-- <div class="col-md-12">
            <div @click="saveRelation()" class="col-md-2 offset-10 btn btn-primary">Сохранить</div>
        </div> -->

    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Relation",
        props:[
            'relations',
            'product_id'
        ],
        created() {
            this.$root.$refs.relSave = this;

            // _.debounce — это функция lodash, позволяющая ограничить то,
            // насколько часто может выполняться определённая операция.
            // В данном случае мы ограничиваем частоту обращений к yesno.wtf/api,
            // дожидаясь завершения печати вопроса перед отправкой ajax-запроса.
            // Узнать больше о функции _.debounce (и её родственнице _.throttle),
            // можно в документации: https://lodash.com/docs#debounce
            this.debouncedGetAnswer = _.debounce(this.searchProduct, 700)
        },
        data(){
            return{
                keywords: null,
                notification: false,
                result: [],
            }
        },
        watch: {
            keywords(value) {
                if (value.length >= 2) {
                    this.debouncedGetAnswer()
                }
            },
            product_id() {
                this.notification = false;
            }
        },
        methods:{
            searchProduct: function () {
                axios.post('/api/searching', {q: this.keywords}).then((res) => {
                    this.result = res.data;
                });
            },
            clearSearch: function () {
                this.keywords = null;
            },

            addProduct: function (key) {
                let id = this.result[key].id;

                axios.post('/api/order/getProduct', {id: id}).then((res) => {
                    this.relations.push(res.data);
                });
            },
            deleteProduct: function (key) {

                this.relations.splice(key, 1);

            },
            saveRelation: function () {

                axios.post('/api/fastEdit/saveRelation', {id: this.product_id, products: this.relations}).then((res) => {
                    this.keywords = null;
                    this.notification = true;
                });

            }
        },
        mounted() {

        }
    }
</script>

<style scoped>
    .result:hover
    {
        background: #5658567d;
        cursor: pointer;
        color: white;
    }

    .selected {
        background: #4fa63e;
        cursor: pointer;
        color: white;
    }
</style>