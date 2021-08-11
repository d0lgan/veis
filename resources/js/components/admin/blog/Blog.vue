<template>
    <div>
        <div class="w-100">
            <div class="w-100">
                <div class="w-100">
                    <div class="w-100">
                        

                        <div class="w-100 mb-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <strong>Категории</strong>
                                <a type="button" class="btn btn-primary ml-3" :href="`/admin-blog-category/create`">Добавить</a>
                            </div>

                            <div class="w-100">
                                
                                <table class="table table-data2 border-0" style="border-collapse: separate; border-spacing: 0 5px">
                                    <thead>
                                        <tr class="border-left-0 border-right-0">
                                            <th class="align-middle py-2">Название</th>
                                            <th class="align-middle py-2 bg-none"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr v-for="cat in categories">
                                            <td class="align-middle py-1">{{ cat.title }}</td>
                                            <td class="align-middle py-1">

                                                <div class="table-data-feature d-flex justify-content-center">
                                                    <a :href="`/admin-blog-category/` + cat.id + `/edit`" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                        <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                    </a>


                                                   <div @click="deleteCategory(cat.id)" style="cursor: pointer; width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i class="fas fa-trash-alt" style="font-size: 16px; color: #808080"></i></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                

                            </div>
                        </div>






                        <div class="w-100">
                        <div class="mb-4 w-100 d-flex align-items-center justify-content-between">

                        	<div class="col">
                                <strong>Новости</strong>
                            </div>   


                            <div class="datateble-actions col">
                                <div class="row w-100 justify-content-end align-items-center m-0">
                                    <a type="button" class="btn btn-primary ml-3" :href="`/admin-blog/create`">Добавить</a>
                                </div>
                            </div>
                        </div>

                        <div class="w-100">
                        
                            <table class="table table-data2 datatable border-0" >
                                <thead>
                                    <tr class="border-left-0 border-right-0">
                                        <th class="align-middle py-2">Название</th>
                                        <th class="align-middle py-2">Категория</th>
                                        <th class="align-middle py-2 bg-none"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="art in articles">
                                        <td class="align-middle py-1">{{ art.title }}</td>
                                        <td class="align-middle py-1">
                                            <span v-if="art.blog_categories !== null">{{ art.blog_categories.title }}</span>
                                            <span v-else>-</span>
                                        </td>

                                        <td class="align-middle py-1">


                                            <div class="table-data-feature d-flex justify-content-center">
                                                <a :href="`/admin-blog/` + art.id + `/edit`" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                                    <i style="font-size: 16px; color: #808080" class="fas fa-pencil-alt"></i>
                                                </a>


                                                <div @click="deleteArticle(art.id)" style="cursor: pointer; width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Удалить"><i class="fas fa-trash-alt" style="color: #808080"></i></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>










                        <!-- <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>Название</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="cat in categories">
                                        <td>{{ cat.title }}</td>
                                        <td>
                                            <a :href="`/admin-blog-category/` + cat.id + `/edit`" style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center"><i class="fa fa-edit"></i></a>

                                            <div @click="deleteCategory(cat.id)" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->














                       <!--  <div class="col-md-12 mt-4 border border-secondary p-4" style="height: 300px;">
                            <div v-for="cat in categories" class="col-md-12 mb-4 border border-secondary row m-0" style="background: darkgray;">
                                <h4 class="col-md-8">{{ cat.title }}</h4>
                                <div class="col-2 d-flex align-items-center">
                                    <a :href="`/admin-blog-category/` + cat.id + `/edit`" style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center"><i class="fa fa-edit"></i></a>
                                </div>
                                <div class="col-2 d-flex align-items-center">
                                    <div @click="deleteCategory(cat.id)" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></div>
                                </div>

                            </div>
                        </div> -->
                    </div>







                    <!-- <div class="table-responsive col-md-8">
                        <a :href="`/admin-blog/create`" class="btn mb-4 btn-primary">Добавить новость</a>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Категория</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="art in articles">
                                <td>{{ art.title }}</td>
                                <td>
                                    <span v-if="art.blog_categories !== null">{{ art.blog_categories.title }}</span>
                                    <span v-else>-</span>

                                </td>
                                <td class="d-flex">
                                    <a :href="`/admin-blog/` + art.id + `/edit`" style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center"><i class="fa fa-edit"></i></a>
                                    <div @click="deleteArticle(art.id)" style="width: 35px; height: 35px;" class="ml-2 btn btn-danger d-flex justify-content-center align-items-center"><i class="fas fa-trash-alt"></i></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Blog",
        props:[
            'cate',
            'artic'
        ],
        data(){
            return{

                select_category: {id: 0, title: '', image: null, new_image: ''},
                select_article: {id: 0, title: '', category_id: 0, short_desc: '', full_desc: '', image: null, new_image: null},
                categories: this.cate !== undefined ? this.cate : [],
                articles: this.artic !== undefined ? this.artic : [],
                config: {
                    height: this.h !== undefined ? this.h : 200,
                }
            }
        },
        watch:{
            categories(val){
                this.categories = val;
            },
            articles(val){
                this.articles = val;
            }
        },
        methods:{
            addCategoryImage: function (event) {

                this.select_category.new_image = event.target.files[0];

            },
            addArticleImage: function (event) {

                this.select_article.new_image = event.target.files[0];

            },
            createCategory: function(){
                this.select_category = {id: 0, title: '', image: null, new_image: ''}
            },
            createArticle: function(){
                this.select_article = {id: 0, title: '', category_id: 0, short_desc: '', full_desc: '', image: null, new_image: null}
            },
            saveCategory: function () {

                let form = new FormData();
                form.append('id', this.select_category.id);
                form.append('title', this.select_category.title);
                if(this.select_category.new_image === null){
                    form.append('image', this.select_category.image);
                }else{
                    form.append('image', this.select_category.new_image);
                }

                axios.post('/api/blog/createBlogCategory', form,{headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                    this.categories = res.data;
                });

            },
            saveArticle: function () {

                let form = new FormData();
                form.append('id', this.select_article.id);
                form.append('title', this.select_article.title);
                form.append('category_id', this.select_article.category_id);
                form.append('short_desc', this.select_article.short_desc);
                form.append('full_desc', this.select_article.full_desc);
                if(this.select_article.new_image === null){
                    form.append('image', this.select_article.image);
                }else{
                    form.append('image', this.select_article.new_image);
                }
                axios.post('/api/blog/createBlogArticle', form,{headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                    this.articles = res.data;
                });

            },
            editCategory: function (id) {

                let item = this.categories.find(x => x.id === id);

                this.select_category.id = item.id;
                this.select_category.title = item.title;
                this.select_category.image = item.image;
            },
            editArticle: function (id) {

                let item = this.articles.find(x => x.id === id);

                this.select_article.id = item.id;
                this.select_article.title = item.title;
                this.select_article.category_id = item.category_id;
                this.select_article.full_desc = item.full_desc;
                this.select_article.short_desc = item.short_desc;
                this.select_article.image = item.image;

            },
            deleteImage: function (name, type) {

                axios.post('/api/fastEdit/deleteImage', {file: name, id: this.select_article.id, type: type}).then((res) => {
                    if(res.data === true){
                        if(type === 'cat'){
                            this.select_category.image = null;
                        }else if(type === 'art'){
                            this.select_article.image = null;
                        }

                    }
                });

            },
            deleteCategory: function (id) {

                let category = this.categories.find(x => x.id === id);

                /*if(item.image){
                    this.deleteImage(item.image, 'cat')
                }*/

                axios.post('/api/blog/deleteCategory', {category: category}).then((res) => {
                    this.categories = res.data
                });

            },
            deleteArticle: function (id) {

                let article = this.articles.find(x => x.id === id);
                /*if(item.image !== null){

                    this.deleteImage(item.image, 'art')
                }*/
                axios.post('/api/blog/deleteArticle', {article: article}).then((res) => {
                    this.articles = res.data
                });

            }
        },
        mounted() {
        }
    }
</script>

<style scoped>
    .closer
    {
        cursor: pointer;
    }
</style>