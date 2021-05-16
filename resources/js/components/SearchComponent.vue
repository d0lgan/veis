 <template>
    <div>
        <div class="map__head_input head__search">
<!--            <input id="head__input" type="text" placeholder="{{ __('site.menu.query') }}">-->
            <input id="head__input" type="text" v-model.trim="keywords" placeholder="Введите запрос">

            <svg id="seacrh" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
            <img class="close__icon" src="/assets/front/img/close.svg" alt="close">

            <div class="head__hide" v-show="results">
                <p>САПОГИ ЗИМНИЕ НА КАБЛУКЕ</p>
                <p>БОТИНКИ ЗИМНИЕ НА НИЗКОМ ХОДУ</p>
                <p>ТУФЛИ НА КАБЛУКЕ</p>
                <p>ТУФЛИ НА КАБЛУКЕ ВЫСОКОМ</p>
                <div class="head__btn">посмотреть все результаты 987</div>
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
<style>/*
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
    }*/
</style>