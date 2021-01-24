<template>
    <div class="col-md-12">
        <div class="row d-flex flex-column">
            <div v-if="images.main" class="d-flex align-items-start">
                <div class="form-group">
                    <label for="image">Главное изображение</label> 
                    <input v-if="images.main.name === ''" @change="addImage($event)" style="width: 300px;" ref="file" type="file" class="form-control" name="image" id="image">
                    <div v-else class="d-flex align-items-center" style="width: 300px;">
                        <img style="width: 228px" :src="'/house/uploads/' + images.main.name + '?time=' + time " alt=""> 
                        <div class="d-flex justify-content-center align-items-center ml-3" style="width: 40px;height: 40px; background-color: #e1e1e1; border-radius: 50%; cursor: pointer;" @click="deleteMainImage()"><i class="far fa-trash-alt m-0 p-0"></i></div>
                    </div>
                </div>
                
                <div class="form-group col-7">
                   	<div class="d-flex justify-content-between">
                        <label>Альтернативный текст</label>

                        <div @click="changeTab" class="tabs d-flex">
                            <div class="mx-2" :class="{ tabActive: tab == 'ru' }"><img style="height: 20px; cursor: pointer;" src="/public/images/russia.svg"></div>
                            <div class="mx-2" :class="{ tabActive: tab == 'uk' }"><img style="height: 20px; cursor: pointer;" src="/public/images/ukraine.svg"></div>
                        </div>
                    </div>
                   	<input type="text" class="form-control" v-model="images.main.alt">
                </div>

            </div>
            <div  v-if="this.images.main.tmp_name !== ''" >
                <div class="btn btn-primary" @click="reestablish()">Восстановить</div>
            </div>
        </div>
        
        <div class="d-flex align-items-center mb-3">
            <h5 style="width: 228px;"><b>Доп. изображения</b></h5>
            <div class="d-flex justify-content-center align-items-center" :class="{disabled:disabled}" style="width: 40px;height: 40px; background-color: #249d3d; border-radius: 50%; cursor: pointer;" @click="addArrayImage()"><i style="color: #fff" class="fas fa-plus"></i></div>
        </div>

        <div v-for="(image, index) in images.gallery" class="row">
            <div v-if="image.name !== ''" class="col-md-12 row d-flex align-items-between">
                <img style="width: 195px" :src="'/house/uploads/' + image.name + '?time=' + time " alt=""> 
                <div class="d-flex justify-content-center align-items-center mx-5" style="width: 40px;height: 40px; background-color: #e1e1e1; border-radius: 50%; cursor: pointer;" @click="deleteArrayImage(index, image.name)"><i class="far fa-trash-alt m-0 p-0"></i></div>
                <div class="form-group col-2 mr-3">
                    <label for="sort">Сортировка</label>
                    <input id="sort" type="text" class="form-control" v-model="image.sort">
                </div>
                <div class="form-group">

	               	<div class="d-flex justify-content-between">
                        <label>Альтернативный текст</label>

                        <div @click="changeTab" class="tabs d-flex">
                            <div class="mx-2" :class="{ tabActive: tab == 'ru' }"><img style="height: 20px; cursor: pointer;" src="/public/images/russia.svg"></div>
                            <div class="mx-2" :class="{ tabActive: tab == 'uk' }"><img style="height: 20px; cursor: pointer;" src="/public/images/ukraine.svg"></div>
                        </div>
                    </div>
	               	<input type="text" class="form-control">

                </div>

            </div>
            <div v-else class="form-group col-md-12 d-flex">
                <input class="form-control col-11" @change="addGalleryImage(index, Date.now(), $event)" type="file" name="gallery[]">
            </div>
        </div>
        <input type="hidden" name="gallery" :value="JSON.stringify(images.gallery)">
        <input type="hidden" name="image" :value="JSON.stringify(images.main)">
        <!-- <div class="btn btn-primary mt-3" v-if="!isModal" @click="saveImages()">Сохранить</div> -->
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Gallery",
        props:[
            'product_images',
            'fastEdit',
            'product_id',

            'isModal'
        ],

        created() {
            this.$root.$refs.imageSave = this;
        },

        data(){
            return{
                images: this.product_images !== undefined ? this.product_images : {main : {name:'', tmp_name: '', alt: ''}, gallery:[]},
                time: Math.ceil(Math.random() * 10000),
                disabled: false,
                tab: 'ru',
                isModal: this.isModal
            }
        },
        watch:{
          product_images(val){
              this.images = val;
              this.disabled = false;
          }
        },
        methods:{
            addImage: function (event) {

                let form = new FormData();
                let file = event.target.files[0];
                form.append('image', file);

                axios.post('/api/fastEdit/addMainImage', form,{headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                    this.images.main.name = res.data;
                    if(this.images.main.tmp_name !== ''){
                        this.deleteImage(this.images.main.tmp_name);
                        this.images.main.tmp_name = '';
                    }
                });

            },
            addGalleryImage: function(index, key, event){
                let form = new FormData();
                let file = event.target.files[0];
                form.append('image', file);
                form.append('key', key);

                axios.post('/api/fastEdit/addGalleryImage', form,{headers:{'Content-Type': 'multipart/form-data'}}).then((res) => {
                    this.images.gallery[index].name = res.data;
                    this.disabled = false;
                });
            },
            addArrayImage: function () {
                this.images.gallery.unshift({name: '', sort: null, alt: ''});
                this.disabled = true;
            },
            deleteArrayImage: function (index, name) {
                this.deleteImage(name);
                this.$delete(this.images.gallery, index);
            },
            deleteMainImage: function () {

                this.time = Math.ceil(Math.random() * 10000);
                this.images.main.tmp_name = this.images.main.name;
                this.images.main.name = '';
            },
            reestablish: function () {
                this.images.main.name = this.images.main.tmp_name;
                this.images.main.tmp_name = '';
            },
            deleteImage: function(name){
                axios.post('/api/fastEdit/deleteImage', {file: name}).then((res) => {

                });
            },
            saveImages: function () {
                axios.post('/api/fastEdit/saveImage', {images: this.images, product_id: this.product_id}).then((res) => {
                    console.log(res.data)
                });

                console.log('img saved');
            },
            changeTab: function (event) {

                this.tab == 'ru' ? this.tab = 'uk' : this.tab = 'ru';
            }
        },
        mounted() {

        }
    }

</script>

<style scoped>

    .tabs img {
        border-bottom: 2px solid transparent;
    }

    .tabActive img {
        border-bottom-color: grey;
    }

</style>