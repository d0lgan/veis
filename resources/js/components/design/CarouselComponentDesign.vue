<template>
    <div class="col-12">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="blog-tab" data-toggle="tab" href="#blog" role="tab" aria-controls="blog" aria-selected="true">БЛОГ</a>
            </li>
            <li class="nav-item">
                /
            </li>
            <li class="nav-item">
                <a class="nav-link" id="instagram-tab" data-toggle="tab" href="#instagram" role="tab" aria-controls="instagram" aria-selected="false">INSTAGRAM</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="blog" role="tabpanel" aria-labelledby="blog-tab">

                <div class="blog-categories row col-12 justify-content-center">
                    <div @click="changeCategory(category.id)" v-for="(category, key) in categories" class="category" :class="{'active-category': category.id === active_category }">{{ category.title }} <span class="px-2" v-if="key < categories.length - 1">/</span></div>
                </div>
                <carousel-3d :controls-visible="true" :width="500" :height="400">
                    <slide v-for="(article, i) in active_articles" :index="i" :key="i" class="slide" v-if="i < active_articles.length">
                        <div class="col-12 image">
                            <img :src="`/images/1.png`" alt="">

                        </div>

                        <div class="title text-center p-3">
                            <a href="#">
                                {{ article.title }}
                            </a>
                        </div>
                        <div class="desc px-3">
                            {{ article.desc }}
                        </div>

                        <div class="more p-3 mt-2">
                            <a href="#" class="details py-2 px-4">
                                ПОДРОБНЕЕ
                            </a>
                            <a href="#" class="all py-2 ml-4">
                                Смотреть все статьи <img :src="`/images/next.svg`" alt="" class="ml-2">
                            </a>
                        </div>
                    </slide>
                </carousel-3d>
            </div>
            <div class="tab-pane fade" id="instagram" role="tabpanel" aria-labelledby="instagram-tab">...</div>
        </div>

    </div>
</template>

<script>
    import { Carousel3d, Slide } from 'vue-carousel-3d';
    export default {
        name: "CarouselComponent",
        components: {
            Carousel3d,
            Slide
        },
        data(){
            return{
                categories: [
                    {id: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ'},
                    {id: 2, title: 'КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ'},
                    {id: 3, title: 'TIFOSI - ВЕДУЩИЙ БРЕНД НА РЫНКЕ'},
                ],
                articles: [
                    {id: 1, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 2, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 3, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 4, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 5, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 6, category: 2, title: 'КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ1', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 7, category: 2, title: 'КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ2', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 8, category: 2, title: 'КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ3', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 9, category: 2, title: 'КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ4', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 10, category: 2, title: 'КАК ВЫБРАТЬ ПОДАРОК ЖЕНЩИНЕ5', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 11, category: 3, title: 'TIFOSI - ВЕДУЩИЙ БРЕНД НА РЫНКЕ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 12, category: 3, title: 'TIFOSI - ВЕДУЩИЙ БРЕНД НА РЫНКЕ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 13, category: 3, title: 'TIFOSI - ВЕДУЩИЙ БРЕНД НА РЫНКЕ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 14, category: 3, title: 'TIFOSI - ВЕДУЩИЙ БРЕНД НА РЫНКЕ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                    {id: 15, category: 3, title: 'TIFOSI - ВЕДУЩИЙ БРЕНД НА РЫНКЕ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: 'woman.jpg'},
                ],
                active_category: 1,
                active_articles: [
                    {id: 1, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 2, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 3, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 4, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 5, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                    {id: 6, category: 1, title: 'КАЧЕСТВЕННЫЕ И СТИЛЬНЫЕ АВТОМОБИЛЬНЫЕ ПЕРЧАТКИ', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, atque autem dolorem magni neque non?', image: '1.png'},
                ]
            }
        },
        watch:{
            active_articles(val){
                this.active_articles = val;
            }
        },
        methods:
        {
            changeCategory: function (id) {
                let articles = [];
                this.active_category = id;
                this.articles.forEach((item) => {
                   if(item.category === id){
                       articles.push(item);
                   }
                });
                this.active_articles = articles;

            }
        },
        mounted() {
        }
    }
</script>

<style scoped>
    a
    {
        text-decoration: none;
    }
    .slide
    {
        background: white;
    }
    .image
    {
        height: 50%;
    }
    .image img
    {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }
    .details
    {
        color: #171717;
        border: 1px solid #171717;
    }
    .title a
    {
        color: #171717;
        font-weight: bold;
    }
    .title:hover a
    {
       text-decoration: underline;
    }
    .all
    {
        color: #171717;
    }
    .all img
    {
        width: 17px;
    }
    .nav-tabs
    {
        border: none;
    }
    .nav-item
    {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        font-weight: bold;
        color: #989898;
    }
    .nav-item .nav-link
    {
        color: #989898;
        background: transparent;
        border: none;
    }
    .nav-item .active
    {
        color: #171717;
        border: none;
        background: transparent;
    }
    .blog-categories
    {
        color: #989898;
        font-size: 10px;
        font-weight: bold;
        cursor: pointer;
    }
    .active-category
    {
        color: #171717;
    }
    .active-category span
    {
        color: #989898;
    }
</style>
