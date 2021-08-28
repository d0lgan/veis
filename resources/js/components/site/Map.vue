<template>
    <div class="container">
        <div class="breadcrumbs">
            <div class="holder">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru' : '/'" class="breadcrumbs__link">{{ translate.store }}</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="" class="breadcrumbs__link" >{{ translate.map.toUpperCase() }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="product-card">
            <div class="holder">
                <div class="product-card__head">
                    <a :href="back" class="back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="20" viewBox="0 0 8 20">
                            <g>
                                <g>
                                    <path fill="#5c5c5c" d="M7 0h1L1 10l7 9v1L0 10z" />
                                </g>
                            </g>
                        </svg>
                        {{ translate.back }}
                    </a>
                </div>
            </div>
        </section>

        <div class="wrap">
            <div class="store">
                <h1>ИНТЕРНЕТ МАГАЗИН</h1>
            </div>

            <div class="cats">
                <div class="cat">
                    <span class="category_title">» <a :href="getLang ? '/ru' : '/'">{{ translate.main }}</a></span>
                </div>
            </div>

            <div class="cats">
                <div class="cat">
                    <span class="category_title">» <a :href="getLang ? '/ru/about' : '/about'">{{ getLang ? 'О нас' : 'Про нас' }}</a></span>
                </div>
            </div>

            <div class="cats">
                <div class="cat">
                    <span class="category_title">» <a :href="getLang ? '/ru/catalog' : '/catalog'">{{ translate.catalog }}</a></span>
                </div>
            </div>

            <div class="cats">
                <div class="cat">
                    <span class="category_title">» <a :href="getLang ? '/ru/info' : '/info'">{{ translate.info }}</a></span>
                </div>
            </div>

            <div class="cats">
                <div class="cat">
                    <span class="category_title">» <a :href="getLang ? '/ru/blog' : '/blog'">{{ translate.blog }}</a></span>
                </div>
            </div>

            <div class="cats" v-if="mainCats.length" v-for="mainCat in mainCats">
                <div class="cat">
                    <span class="category_title">» <a :href="getLang ? '/ru/category/' + mainCat.slug_ru : '/category/' + mainCat.slug_uk">{{ getLang ? mainCat.title_ru : mainCat.title_uk }}</a></span>
                    <div class="second_layer" v-if="mainCat.secondLayer.length" v-for="subCat in mainCat.secondLayer">
                        <span>-<a :href="getLang ? '/ru/category/' + subCat.slug_ru : '/category/' + subCat.slug_uk" class="second">{{ getLang ? subCat.title_ru : subCat.title_uk }}</a></span>
                        <div class="third_layer" v-if="subCat.thirdLayer.length" v-for="subSubCat in subCat.thirdLayer">
                            <span>- <a :href="getLang ? '/ru/category/' + subSubCat.slug_ru : '/category/' + subSubCat.slug_uk" class="third">{{ getLang ? subSubCat.title_ru : subSubCat.title_uk }}</a></span>
                            <div class="fourth_layer" v-if="subSubCat.fourthLayer.length" v-for="sssCat in subSubCat.fourthLayer">
                                <span>- <a :href="getLang ? '/ru/category/' + sssCat.slug_ru : '/category/' + sssCat.slug_uk" class="third">{{ getLang ? sssCat.title_ru : sssCat.title_uk }}</a></span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cats">
                <div class="cat">
                    <span class="category_title">» {{ translate.manufacturers }}</span>
                    <div class="second_layer" v-for="manufacturer in manufacturers">
                        <span>-<a :href="getLang ? '/ru/manufacturer/' + manufacturer.slug_ru : '/manufacturer/' + manufacturer.slug_uk" class="second">{{ getLang ? manufacturer.title_ru : manufacturer.title_uk }}</a></span>

                    </div>
                </div>
            </div>

            <div class="cats">
                <div class="cat">
                    <span class="category_title">» {{ translate.tags }}</span>
                    <div class="second_layer" v-for="tag in tags">
                        <span>-<a :href="getLang ? '/ru/tag/' + tag.slug_ru : '/tag/' + tag.slug_uk" class="second">{{ getLang ? tag.title_ru : tag.title_uk }}</a></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Map",
        props: [
            'locale',
            'translate',
            'mainCats',
            'back',
            'manufacturers',
            'tags'
        ],
        data(){
            return{

            }
        },
        methods: {
        },
        computed: {
            console: () => console,
            window: () => window,

            getLang: function() {
                if (this.locale == 'ru') {
                    return true;
                } else if (this.locale == 'uk') {
                    return false;
                }
            },
        },

        mounted() {


        }
    }
</script>

<style>
    .container {
        padding-bottom: 35px;
    }

    .fourth_layer {
        padding-left: 15px;
    }
</style>