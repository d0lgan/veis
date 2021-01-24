<template>
    <div>


        <div style="position:relative" class="d-flex align-items-center">
            <input class="form-control mr-4" v-model.trim="keywords" type="text" placeholder="Поиск по магазину"
                   aria-label="Search">
            <form style="margin-left:-53px" action="">
                <button style="margin:0;padding:0;color: #000;" class="btn btn-link">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div v-show="results" class="search" style="">
                <div style="padding: 15px 0px;" v-for="(res,index) in results" :key="index">
                    <a style="color: #333;text-transform:none;" :href="'/product/' + res.slug ">
                        <img height="60" :src="'http://icreative/house/uploads/' + res.image" alt=""> {{ res.title }}
                        (<b>{{ res.undiscounted }} грн.</b>)
                    </a>
                </div>

                <div class="clearfix">
                    <div class="float-right">
                        <span @click="results = false" style="cursor: pointer" class="text-danger">× Закрыть</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                keywords: null,
                results: false
            };
        },

        watch: {
            keywords(value) {
                if (value.length >= 3) {
                    this.fetch();
                }
            }
        },

        methods: {
            fetch() {
                axios.post('/api/searching', {q: this.keywords})
                    .then((response) => {
                        this.results = response.data;
                    })
                    .catch(error => {});
            }
        }
    }
</script>
<style>
    .search {
        border-radius: 5px;
        border: 1px solid #eee;
        padding: 20px;
        position: absolute;
        width: 100%;
        top: 100%;
        left: 0;
        background: #fff;
        z-index: 10;
    }
</style>