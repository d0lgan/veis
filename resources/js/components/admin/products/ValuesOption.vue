<template>
    <div class="">
        <div class="row">

            <div class="col-md-12 form-group">
                <ul class="nav nav-tabs" id="language">
                    <li v-for="(lang, key) in langs" class="nav-item" :class="{active: key === 0}"><a
                        :href="`#language_main_` + lang.locate_code" data-toggle="tab" class="nav-link" :class="{active: key === 0}"
                        >
                        <img style="height: 25px;" v-if="lang.locate_code === 'ru'" src="/images/russia.svg" alt="">
                        <img style="height: 25px;" v-else src="/images/ukraine.svg" alt="">
                    </a></li>
                </ul>

                <div class="tab-content">
                    <div v-for="(lang, key) in langs" class="tab-pane" :class="{active: key === 0}"
                         :id="`language_main_` + lang.locate_code">
                        <div class="form-group">
                            <label for="title_ru">Название {{ lang.locate_code }}</label>
                            <input type="text" :name="`title_` + lang.locate_code" id="title_ru" class="form-control" required :placeholder="lang.locate_code" v-model="option.title[lang.locate_code]">
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="type">Тип</label>
                <select name="type" id="type" required="required" class="form-control" v-model="select"  @change="clear(select)">
                    <option v-for="type in types" :selected="selectedValue(type.value)" :value="type.value">{{ type.name }}</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="need">Требовать</label>
                <select name="need" id="need" required="required" v-model="option.need" class="form-control">
                    <option value="0">Не требовать</option>
                    <option value="1">Требовать</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="sort">Сортировка</label>
                <input type="text" name="sort" id="sort" required="required" class="form-control" v-model="option.sort">
            </div>
            <div class="form-group col-md-3">
                <label for="public_main">Отображение</label>
                <select name="public_main" id="public_main" required="required" v-model="option.public_main" class="form-control">
                    <option value="0">Нет</option>
                    <option value="1">Да</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row d-flex justify-content-between align-items-center mt-4 mb-2">
                    <h3 class="col-10">Значение опции</h3>

                    <div class="col-2 d-flex justify-content-center">
                        <div class="d-flex justify-content-center align-items-center" style="width: 35px;height: 35px; background-color: #249d3d; border-radius: 50%; cursor: pointer;" @click="addItem()"><i style="color: #fff" class="fas fa-plus"></i></div>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <ul class="nav nav-tabs" id="language_value">
                        <li v-for="(lang, key) in langs" class="nav-item" :class="{active: key === 0}"><a
                            :href="`#language_value_` + lang.locate_code" data-toggle="tab" class="nav-link" :class="{active: key === 0}"
                            >
                            <img style="height: 25px;" v-if="lang.locate_code === 'ru'" src="/images/russia.svg" alt="">
                            <img style="height: 25px;" v-else src="/images/ukraine.svg" alt="">
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div v-for="(lang, key) in langs" class="tab-pane" :class="{active: key === 0}"
                             :id="`language_value_` + lang.locate_code">
                            <div  v-for="(item, key) in items">
                                <div class="row no-gutters d-flex justify-content-between align-items-center">
                                    <input type="hidden" v-model="item.id" name="idv[]">

                                    <div class="col-10 d-flex justify-content-between">
                                        <div class="form-group p-0 col-md-4" v-if="select == 'checkbox'">
                                            <label :for="'value_' + key">Значение {{ lang.locate_code }}</label>
                                            <input type="text" required="required" :placeholder="lang.locate_code" :name="`value_` + lang.locate_code + `[]`" :id="'value_' + key" v-model="item.value[lang.locate_code]" class="form-control">
                                        </div>

                                        <div v-if="item.image === null" class="form-group p-0 col-md-2">
                                            <label :for="'img_' + key">Изображение</label>
                                            <input @change="addImage($event, key)" type="file" :id="'img_' + key" class="form-control">
                                        </div>
                                        <div v-else class="col-md-2">
                                            <img class="col-md-11" :src="'/house/uploads/' + item.image + '?time=' + time" alt="" style="max-height:100px; width:auto;"><i @click="deleteImage(key, item.image)" class="fa fa-times text-danger closer"></i>
                                        </div>
                                        <input type="hidden" name="image[]" :value="item.image">
                                        <div class="form-group col-md-2">
                                            <label :for="'public_' + key">Отображение</label>
                                            <select name="public[]" :id="'public_' + key" required="required" v-model="item.public" class="form-control">
                                                <option value="0">Нет</option>
                                                <option value="1">Да</option>
                                            </select>
                                        </div>
                                        <div class="form-group p-0 col-md-2">
                                            <label :for="'sort_value_' + key">Сортировка</label>
                                            <input type="text" name="sorting[]" required :id="'sort_value_' + key" class="form-control" :value="item.sorting">
                                        </div>
                                    </div>

                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 35px;height: 35px; background-color: #e1e1e1; border-radius: 50%; cursor: pointer;" @click="deleteItem(key, item.id)"><i class="far fa-trash-alt m-0 p-0"></i></div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <input type="hidden" v-model="deleted" name="deleted">
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "ValuesOption",
        props:[
            'value',
            'optio',
            'langs'
        ],
        data() {
            if(this.optio && this.value){
                return{
                    title: this.optio.title,
                    sort: this.optio.sort,
                    option: this.optio,
                    items: this.value,
                    select: this.optio.type,
                    types: [
                        {name:'Чекбокс', value:'checkbox'}
                    ],
                    time: Math.ceil(Math.random() * 10000),
                    deleted: []
                }
            }else{
                return{
                    title: '',
                    sort: '',
                    option: {title: {'ru' : '', 'uk' : ''}, type: 'checkbox', sort: '', need: 0, public_main: 1},
                    items: [{id: 0, value: {'ru' : '', 'uk' : ''}, image: null, sorting: 1}],
                    select: 'checkbox',
                    types: [
                        {name:'Чекбокс', value:'checkbox'}
                    ],
                    deleted: []
                }
            }
        },
        watch: {
            items(val){
                console.log(val);
            }
        },
        methods: {
            addItem: function () {
                let max = 1;
                for(let i = 0; i < this.items.length; i++){
                    if(max < this.items[i].sorting){
                        max = this.items[i].sorting;
                    }
                    max++;
                }
                this.items.push({id: 0, value: {'ru' : '', 'uk' : ''}, image: null, sorting: max});
                console.log(this.items);
            },
            clear: function (type) {
                if(this.value !== undefined && type === this.option.type){
                    this.items = this.value;
                }else{
                    this.items = [
                        {id: 0, value: {'ru' : '', 'uk' : ''}, image: '', sorting: 1}
                    ]
                }

            },
            selectedValue: function(value){
                if(this.option.value === value){
                    return true;
                }else{
                    return false;
                }
            },
            load: function(item){
            },
            deleteItem: function (key, id) {
                this.items.splice(key, 1);
                if(id > 0){
                    this.deleted.push(id);
                }
            },
            addImage: function (event, key) {
                let form = new FormData();
                let file = event.target.files[0];
                form.append('image', file);


                axios.post('/api/fastEdit/addOptionImage', form,{headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                    this.items[key].image = res.data;
                });
            },
            deleteImage:function (key, name) {

                axios.post('/api/fastEdit/deleteOptionImage', {file: name}).then((res) => {
                    if(res.data === true){
                        this.items[key].image = null;
                    }
                });

            }
        },
        mounted() {
            console.log(this.items);
            this.time =  Math.ceil(Math.random() * 10000)
        }
    }
</script>

<style scoped>
    .closer
    {
        cursor: pointer;
    }
</style>
