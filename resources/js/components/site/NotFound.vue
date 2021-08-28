<template>
    <section class="notfound">
        <div class="holder notfound__holder">
            <a href="/" class="notfound__logo">
                <img src="/assets/front/img/VEIS_COLLECTION.png" alt="">
            </a>
            <img class="notfound__img" src="/assets/front/img/404.png" alt="">
            <div class="searchbox">
            <input type="text" v-on:keyup.enter="red()" v-model="query" v-on:click="stopTimer()" :placeholder="translate.input">
            <button class="search">
                <img src="/assets/front/img/search.svg" alt="">
            </button>
            <button class="closer">
                <img src="/assets/front/img/close.svg" alt="">
            </button>
            </div>
            <div class="notfound__wrap">
                <h3 class="notfound__title">{{ translate.notFound }}</h3>
                <p class="notfound__text" v-if="onMain"><a :href="locale == 'ru' ? '/ru/' : '/'">{{ translate.onMain }}</a></p>
                <p class="notfound__text" v-else>{{ translate.after }} {{ currentTime }} {{ translate.seconds }}</p>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "NotFound",
        
        data() {
            return {
                currentTime: 6,
                timer: null,
                redirect: null,
                onMain: false,
                query: '',
            }
        },
        props: [
            'translate',
            'locale',
        ],
        mounted() {
            this.startTimer();
            console.log(this.locale);
            this.redirect = setTimeout(() => window.location.href = '/', 6990);
        },
        destroyed() {
            this.stopTimer()
        },
        methods: {
            startTimer() {
                this.timer = setInterval(() => {
                    this.currentTime--;
                }, 1000)
            },
            stopTimer() {
                clearTimeout(this.timer);
                clearTimeout(this.redirect);

                this.onMain = true;
            },

            red: function () {
                if (this.locale == 'ru') {
                    window.location.href = window.location.origin + '/ru/search?q=' + this.query;
                } else if (this.locale == 'uk') {
                    window.location.href = window.location.origin + '/search?q=' + this.query;
                }

            }
        },
        watch: {
            /*currentTime(time) {
                if (time === 0) {
                    this.stopTimer()
                }
            }*/
        },
    }
</script>

<style scoped>

</style>