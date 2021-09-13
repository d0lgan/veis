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
                    <div @click="changeCategory(category)" v-for="(category, key) in categories" class="category" :class="{'active-category': category.id === select_category.id }">{{ category.title }} <span class="px-2" v-if="key < categories.length - 1">/</span></div>
                </div>
                <carousel-3d :key="key" :controls-visible="true" :width="500" :height="400">
                    <slide v-for="(article, i) in select_articles" :index="i" :key="i" class="slide" v-if="i < select_articles.length">
                        <div class="col-12 image">
                            <img :src="`/house/uploads/` + article.image" alt="">

                        </div>

                        <div class="title text-center p-3">
                            <a href="#">
                                {{ article.title }}
                            </a>
                        </div>
                        <div class="desc px-3">
                            {{ checkDesc(article.short_description) }}
                        </div>

                        <div class="more p-3 mt-2">
                            <a :href="'/blog/' + article.id" class="details py-2 px-4">
                                {{ translate.more }}
                            </a>
                            <a :href="'/blog-category/' + article.category_id" class="all py-2 ml-4">
                                {{ translate.all_articles }} <img :src="`/images/next.svg`" alt="" class="ml-2">
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
        props: [
            'categories',
            'articles',
            'translate'
        ],
        components: {
            Carousel3d,
            Slide
        },
        data(){
            return{
                select_category: this.categories[0],
                select_articles: [],
                key: this.categories[0].id,
                size_text: 120
                /*categories: [
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
                ]*/
            }
        },
        watch:{
            /*active_articles(val){
                this.active_articles = val;
            }*/
        },
        methods:
        {
            changeCategory: function (cat) {
                this.select_category = cat;

                this.select_articles = [];

                for(let i = 0;i < this.articles.length;i++){
                    if(this.articles[i].category_id === this.select_category.id){

                        this.select_articles.push(this.articles[i]);

                    }

                }
                this.key = this.select_category.id;
                /*let articles = [];
                this.active_category = id;
                this.articles.forEach((item) => {
                   if(item.category === id){
                       articles.push(item);
                   }
                });
                this.active_articles = articles;*/

            },
            checkDesc: function (text) {
                this.key = this.select_category.id+1;
                if(text.length > this.size_text){
                    return text.slice(0, this.size_text) + '...';
                }else{
                    return text;
                }

            }
        },
        mounted() {
            this.key = this.categories[0].id+1;
            this.changeCategory(this.select_category);

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
        font-size: 12px;
        color: #171717;
        border: 1px solid #171717;
    }
    .title a
    {
        color: #171717;
        font-size: 17px;
        font-family: 'MontserratSemiBold', sans-serif;
    }
    .title:hover a
    {
       text-decoration: underline;
    }
    .desc
    {
        font-family: 'MontserratMed', sans-serif;
        font-size: 16px;
        color: #171717;
    }
    .all
    {
        font-size: 13px;
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
        font-size: 22px;
        font-weight: bold;
        color: #989898;
    }

    .nav-item .nav-link
    {
        font-family: 'MontserratExtraBold', sans-serif;
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
    .category
    {
        font-family: 'MontserratBold', sans-serif;
        color: #989898;
        font-size: 11px;
        cursor: pointer;
    }
    .active-category
    {
        color: #171717;
    }
</style>
