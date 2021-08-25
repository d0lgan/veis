<template>
    <div class="col-md-12">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="blog-tab" data-toggle="tab" href="#blog" role="tab" aria-controls="blog" aria-selected="true">Блог</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="instagram-tab" data-toggle="tab" href="#instagram" role="tab" aria-controls="instagram" aria-selected="false">Instagram</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="blog" role="tabpanel" aria-labelledby="blog-tab">
                <div class="col-md-12 d-flex justify-content-center">
                    <div v-for="cat in categories" class="p-2"><span @click="selectArticles(cat)" :class="{'sel': cat.id === select_category.id}" class="cat">{{ cat.title }}</span></div>
                </div>
                <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true">

                    <ul class="uk-slider-items uk-grid">
                        <li v-for="article in select_articles" class="uk-width-3-4">
                            <div class="uk-panel">
                                <img :src="'/house/uploads/' + article.image" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                    <h3 class="uk-margin-remove">{{ article.title }}</h3>
                                    <p class="uk-margin-remove">{{ article.short_desc }}</p>
                                    <a :href="'/blog/' + article.id" class="btn btn-secondary">Подробнее</a>
                                    <a :href="'/blog-category/' + article.category_id" class="btn btn-link">Смотреть все статьи ></a>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-slidenav-large uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-slidenav-large uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>
            </div>
            <div class="tab-pane fade" id="instagram" role="tabpanel" aria-labelledby="instagram-tab">Instagram</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "BlogComponent",
        props:[
            'categories',
            'articles'
        ],
        data(){
            return{
                select_category: this.categories[0],
                select_articles: []
            }
        },
        methods:{
            selectArticles:function (cat) {

                this.select_category = cat;

                this.select_articles = [];

                for(let i = 0;i < this.articles.length;i++){

                    if(this.articles[i].category_id === this.select_category.id){

                        this.select_articles.push(this.articles[i]);

                    }

                }

            }
        },
        mounted() {
            this.selectArticles(this.select_category);
        }
    }
</script>

<style scoped>
    .cat{
        cursor: pointer;
    }
    .sel
    {
        color: red;
    }
    .slider
    {
        max-height: 200px;
    }
</style>