<template>
    <div class="col-md-12">
        <div class="alert alert-success notification" v-if="notification">OK
            <button type="button" class="close" @click="notification = false">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="w-100 d-flex justify-content-between align-items-end mb-3">

            <div class="form-group col-md-10 m-0 p-0">
                <label for="option">Опция</label>
                <select class="form-control" name="title" id="option" v-model="select">
                    <option v-for="(option, key) in options" :value="key">{{ option.title_ru}}
                    </option>
                </select>
            </div>

            <div class="col-md-2 pl-4 pr-0">
                <input type="button" class="btn btn-primary form-control" value="Добавить" @click="addOption()">
            </div>
        </div>
        <div class="w-100" v-if="selected !== []">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" v-for="(selecte, key) in selected">
                    <a class="d-flex align-items-center nav-link" :class="{'active': key === tab}" style="color: #000" :id="selecte.option.id" data-toggle="tab"
                       :href="`#` + selecte.option.title_ru.split(' ').join('')" role="tab" :aria-controls="selecte.option.id" aria-selected="true">{{
                        selecte.option.title_ru }} <div class="ml-2 d-flex justify-content-center align-items-center" style="width: 25px;height: 25px; background-color: #e1e1e1; border-radius: 50%; cursor: pointer;" @click="deleteOption(key)"><i class="far fa-trash-alt m-0 p-0" style="font-size: 12px; color: #808080"></i></div>
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div v-for="(selecte, key_selected) in selected" class="tab-pane fade" :class="{'show active in': key_selected === tab}" :id="selecte.option.title_ru.split(' ').join('')" role="tabpanel" :aria-labelledby="selecte.option.id + `-tab`">
                    <div v-for="(selec, key_selec) in selecte.values" class="jumbotron jumbotron-fluid p-0 mb-1">
                        <div class="row p-3 d-flex" :class="{ '': key_selec === 0, 'justify-content-center': key_selec !== 0 }">
                        	<div v-if="key_selec === 0" class="col-1 d-flex justify-content-center align-items-end">
                        		<div class="d-flex justify-content-center align-items-center" style="width: 40px;height: 40px; background-color: #249d3d; border-radius: 50%; cursor: pointer;" @click="appendOption(selecte.option.id, key_selected)"><i style="color: #fff; font-size: 16px !important" class="fas fa-plus"></i></div>
                        	</div>
                            <!--<div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="need">Требовать</label>
                                    <select name="need_option[]" id="need" class="form-control" @change="changeValue($event, key_selec, key_selected, 'need_option')">
                                        <option :selected="selecte.product_values[key_selec].need_option === 'no'" value="no">Не требовать</option>
                                        <option :selected="selecte.product_values[key_selec].need_option === 'yes'" value="yes">Требовать</option>
                                    </select>
                                </div>
                            </div>-->
                            <div class="row col-10 d-flex justify-content-center align-items-center" :class="{ '': key_selec === 0, 'ml-5': key_selec !== 0 }">
                                <div class="form-group mb-0 col-md-4">
                                    <label :for="`value_` + key_selec">Значение опции</label>
                                    <select class="form-control" @change="changeValue($event, key_selec, key_selected, 'value_option')" name="value_option[]" :id="`value_` + key_selec">
                                        <option  v-for="(sel, key_val) in selec" :value="sel.id" :selected="selecte.product_values[key_selec].value_option_id === sel.id">{{ sel.value_ru }}</option>
                                    </select>
                                </div>
                                <div class="form-group mb-0 col-md-4">
                                    <label :for="`price_` + key_selec">Цена</label>
                                    <input type="text" @focusout="changeValue($event, key_selec, key_selected, 'price_option')" class="form-control" name="price_option[]" :id="`price_` + key_selec" :value="selecte.product_values[key_selec].price_option ? selecte.product_values[key_selec].price_option : ''">
                                </div>
                                <div class="form-group mb-0 col-md-4">
                                    <label :for="`operation_` + key_selec">Операция</label>
                                    <select class="form-control" @change="changeValue($event, key_selec, key_selected, 'operation_option')" name="operation_option[]" :id="`operation_` + key_selec">
                                        <option :selected="selecte.product_values[key_selec].operation_option === 'plus'" value="plus">+</option>
                                        <option :selected="selecte.product_values[key_selec].operation_option === 'minus'" value="minus">-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex col-1 justify-content-center align-items-end">
                            	<div class="d-flex justify-content-center align-items-center" style="width: 40px;height: 40px; background-color: #e1e1e1; border-radius: 50%; cursor: pointer;" @click="deleteValue(key_selected, key_selec)"><i class="far fa-trash-alt m-0 p-0" style="font-size: 16px !important; color: #808080"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
      	<!-- <div class="btn btn-primary" v-if="!isModal" @click="saveValue()">Сохранить</div> -->
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Option",
        props: {
            options: Array,
            product_selected:Array,
            fastEdit: Boolean,
            product_id: Number,

            isModal: Boolean
        },
        created() {
        	this.$root.$refs.saveOption = this;
        },
        data() {
            return {
                select: '',
                selected: this.product_selected !== undefined ? this.product_selected : [],
                tab: 0,
                notification: false,
                product_id: this.product_id,

                isModal: this.isModal
            }
        },
        watch:{
            product_selected(val){
                this.selected = val;
            }
        },
        methods: {
            addOption: function () {
                if(this.select !== ''){
                    if (this.selected.length !== 0) {
                        let check = true;
                        let id = null;
                        for (let i = 0; i < this.selected.length; i++) {
                            if (this.selected[i].option.id === this.options[this.select].id) {
                                check = false;
                                id = i;
                            }
                        }
                        if (check) {
                            this.selected.push({option:this.options[this.select],values: [this.options[this.select].values], product_values:[{operation_option: 'plus', price_option: '', value_option_id: this.options[this.select].values[0].id}]});
                        }else{
                            this.selected[id].values.push(this.options[this.select].values);
                            this.selected[id].product_values.push({operation_option: 'plus', price_option: '', value_option_id: this.options[this.select].values[0].id});
                        }
                    } else {
                        this.selected.push({option:this.options[this.select], values:[this.options[this.select].values], product_values:[{operation_option: 'plus', price_option: '', value_option_id: this.options[this.select].values[0].id}]});
                    }
                    this.select = '';

                }
                this.tab = this.selected.length-1;
            },
            appendOption: function(id, key){
                for(let i = 0;i < this.options.length;i++){
                    if(this.options[i].id === id){
                        this.selected[key].values.push(this.options[i].values);
                        this.selected[key].product_values.push({operation_option: 'plus', price_option: '', value_option_id: this.options[i].values[0].id});
                    }
                }
            },
            check: function (key) {
                for (let i = 0; i < this.selected.length; i++) {
                    if (this.selected[i].id === key) {
                        return true;
                    }
                }
            },
            deleteOption: function (key) {
                if(!this.selected[key+1]){
                    this.tab = key-1;
                }
                this.selected.splice(key, 1);

            },
            deleteValue: function (key, key_selec) {
                if(this.selected[key].values.length === 1 || this.selected[key].product_values.length === 1 ){
                    this.deleteOption(key);
                }else{

                    this.selected[key].values.splice(key_selec, 1);
                    this.selected[key].product_values.splice(key_selec, 1);
                }


            },
            changeValue: function (event, id, ids, name) {
                if(name === 'value_option'){
                    this.selected[ids].product_values[id].value_option_id = event.target.value;
                }
                else if(name === 'price_option'){
                    this.selected[ids].product_values[id].price_option = event.target.value;
                }
                else if(name === 'operation_option'){
                    this.selected[ids].product_values[id].operation_option = event.target.value;
                }
            },
            saveValue: function () {
                axios.post('/api/fastEdit/saveValueOption', {product_id: this.product_id, values: this.selected}).then((res) => {
                    if(res.data === true){
                        this.notification = true;
                    }

                });

                console.log('saved');
            }
        },
        mounted() {
        }
    }
</script>

<style scoped>
    .delete
    {
        padding: 0 7px;
        border-radius: 50%;
        background: white;
        border: 1px solid #d9534f;
        color: #d9534f;
        font-weight: bold;
    }

    .notification{
        width: 100%;
        z-index: 10;
    }
</style>