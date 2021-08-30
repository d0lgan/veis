<template>
    <div class="container">
        <div class="breadcrumbs">
            <div class="holder">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru' : '/'" class="breadcrumbs__link">{{ translate.store }}</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a :href="getLang ? '/ru/info' : '/info'" class="breadcrumbs__link">{{ translate.info.toUpperCase() }} </a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="product product-more">
            <div class="conteiner">
                <h2 class="section-title product-more__title">{{ translate.useful }}</h2>
                <div class="product__name info__changer">
                    <pre><span :class="{ 'product__name_active': tab == 'delivery' }" @click="tab = 'delivery'; openTab(1);">{{ getLang ? tabs.delivery.title_ru.toUpperCase() : tabs.delivery.title_uk.toUpperCase() }}</span>/<span :class="{ 'product__name_active': tab == 'pay' }"  @click="tab = 'pay'; openTab(2);">{{ getLang ? tabs.pay.title_ru.toUpperCase() : tabs.pay.title_uk.toUpperCase() }}</span>/<span :class="{ 'product__name_active': tab == 'return' }"  @click="tab = 'return'; openTab(3);">{{ getLang ? tabs.return.title_ru.toUpperCase() : tabs.return.title_uk.toUpperCase() }}</span>/<span :class="{ 'product__name_active': tab == 'guarantee' }"  @click="tab = 'guarantee'; openTab(4);">{{ getLang ? tabs.guarantee.title_ru.toUpperCase() : tabs.guarantee.title_uk.toUpperCase() }}</span></pre>
                </div>

                <div class="information">
                    <div class="information__item" ref="tab-1" :class="{ 'active': tab == 'delivery' }">
                        <div class="information__item-body">
                            <img src="/assets/front/img/box.png" alt="" class="information__item-img">

                            <h4 class="information__item-title">
                                {{ getLang ? tabs.delivery.title_ru : tabs.delivery.title_uk }}
                            </h4>
                            <p class="information__item-text" v-html="getLang ? tabs.delivery.description_ru : tabs.delivery.description_uk">

                            </p>
                        </div>
                    </div>

                    <div class="information__item" ref="tab-2" :class="{ 'active': tab == 'pay' }">
                        <div class="information__item-body">
                            <img src="/assets/front/img/money-check-alt.png" alt="" class="information__item-img">

                            <h4 class="information__item-title">
                                {{ getLang ? tabs.pay.title_ru : tabs.pay.title_uk }}
                            </h4>
                            <p class="information__item-text" v-html="getLang ? tabs.pay.description_ru : tabs.pay.description_uk">

                            </p>
                        </div>
                    </div>

                    <div class="information__item" ref="tab-3" :class="{ 'active': tab == 'return' }">
                        <div class="information__item-body">
                            <img src="/assets/front/img/map-signs.png" alt="" class="information__item-img">

                            <h4 class="information__item-title">
                                {{ getLang ? tabs.return.title_ru : tabs.return.title_uk }}
                            </h4>
                            <p class="information__item-text" v-html="getLang ? tabs.return.description_ru : tabs.return.description_uk">

                            </p>
                        </div>
                    </div>

                    <div class="information__item" ref="tab-4" :class="{ 'active': tab == 'guarantee' }">
                        <div class="information__item-body">
                            <img src="/assets/front/img/medal.png" alt="" class="information__item-img">

                            <h4 class="information__item-title">
                                {{ getLang ? tabs.guarantee.title_ru : tabs.guarantee.title_uk }}
                            </h4>
                            <p class="information__item-text" v-html="getLang ? tabs.guarantee.description_ru : tabs.guarantee.description_uk">
                                
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "Info",
        props: [
            'locale',
            'translate',
            'tabs',
        ],
        data(){
            return{
                tab: 'delivery',
            }
        },
        methods: {
            createUrlWithTab: function () {
                let url = new URL(window.location.href);
                // Обработчик для тегов (отдельно)
                if (url.searchParams.has('tab')) {
                    if (this.tab == '') {
                        url.searchParams.delete('tab');
                    } else {
                        url.searchParams.set('tab', this.tab);
                    }
                } else {
                    url.searchParams.append('tab', this.tab);
                }
                history.pushState(null, null, url);
            },

            openTab(number_tab) {
                // Получение ссылки на элемент
                let tab = this.$refs[`tab-${number_tab}`];
                // Определение расстояния от начала страницы до нужного элемента
                let top = window.scrollY + tab.getBoundingClientRect().y;
                // Перемотка
                window.scrollTo(0, top)
            }
        },
        watch: {
            tab: function () {
                this.createUrlWithTab();
            }
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
            let url = new URL(window.location.href);
            if (url.searchParams.has('tab')) {
                switch (url.searchParams.get('tab')) {
                    case 'delivery':
                        this.tab = 'delivery';
                        window.scrollTo(0, window.scrollY - 200 + this.$refs[`tab-1`].getBoundingClientRect().y);
                        break;
                    case 'pay':
                        this.tab = 'pay';
                        window.scrollTo(0, window.scrollY - 200 + this.$refs[`tab-2`].getBoundingClientRect().y);
                        break;
                    case 'return':
                        this.tab = 'return';
                        window.scrollTo(0, window.scrollY - 200 + this.$refs[`tab-3`].getBoundingClientRect().y);
                        break;
                    case 'guarantee':
                        this.tab = 'guarantee';
                        window.scrollTo(0, window.scrollY - 200 + this.$refs[`tab-4`].getBoundingClientRect().y);
                        break;
                }
            }
        }

    }
</script>

<style scoped>

</style>