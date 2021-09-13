<template>
    <div class="row">
            <a  v-for="category in categories" :href="'category/'+ category.slug " class="col-md-6 p-2">
                <div class="col-md-12 category p-2 row">
                    <div class="col-md-6">
                        <img :src="'/house/uploads/' + category.image" alt="">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center h3 text">
                        {{ category.data[locale].title }}
                    </div>
                </div>

            </a>


    </div>
</template>

<script>
    export default {
        name: "CategoriesComponent",
        props:[
            'categories',
            'locale'
        ],
        mounted() {
        }
    }
</script>

<style scoped>
    a
    {
        text-decoration: none;
    }
    .category
    {
        background: #E9E9E9;
    }
    .category:hover
    {
        background: #D3D3D3;
        cursor: pointer;
    }
    .text
    {
        color: #363636;
    }
    .category:hover .text
    {
        color: white;
    }
</style>