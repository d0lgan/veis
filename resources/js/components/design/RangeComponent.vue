<template>
    <div class="price px-4 py-3">
        <div class="title mb-1">
            ЦЕНА
        </div>
        <div class="range row m-0 d-flex">
            <input class="min col-md-2 p-0" type="text" v-model="value[0]">
            <vue-range-slider :key="key" class="slide col-md-8 px-2" ref="slider"
                              :slider-style="{background: 'black', boxShadow: 'none', borderRadius: 0}"
                              :process-style="{background: '#2A2A2F'}" :focus-style="{boxShadow: 'none'}"
                              :use-keyboard="false" v-model="value" :enable-cross="false" :min="min" :max="max"
                              :tooltip-style="{display: 'none'}" :width="70" :height="2" :dot-height="15"
                              :dot-width="2"></vue-range-slider>
            <input class="min col-md-2 p-0" type="text" v-model="value[1]">
        </div>
        <div class="under mt-1">
            ТОВАР ПО АКЦИИ
        </div>
    </div>
</template>

<script>
    import 'vue-range-component/dist/vue-range-slider.css'
    import VueRangeSlider from 'vue-range-component'

    export default {
        name: "RangeComponent",
        components: {
            VueRangeSlider
        },
        data() {
            return {
                min: 0,
                max: 9999,
                value: [0, 0],
                key: 10
            }
        },
        watch: {

        },
        methods:
        {

        },
        mounted() {
            this.value[0] = this.min;
            this.value[1] = this.max;
        }
    }
</script>

<style scoped>
    input
    {
        border: none;
    }
    input:focus
    {
        border: none;
        outline: none;
    }
    .price .title
    {
        font-family: MontserratBold, sans-serif;
    }

    .price .range
    {
        font-size: 11px;
    }

    .price .under
    {
        font-family: MontserratReg, sans-serif;
        font-size: 11px;
    }
</style>
