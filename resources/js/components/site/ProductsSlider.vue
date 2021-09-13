<template>

    <div class="product-more__sliderbox">
        <span class="slider-arrow prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                <g>
                    <g>
                        <path fill="#5c5c5c" d="M24 0h1L.794 30.984 25 61l-.955.008L0 32v-2z" />
                    </g>
                </g>
            </svg>
        </span>

        <div class="product-more__slider">
            <div v-for="product in products">
                <site-product-elem-component :product="product" :translate="translate" :locale="locale"></site-product-elem-component>
            </div>
        </div>

        <span class="slider-arrow next">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61">
                <g>
                    <g>
                        <path fill="#5c5c5c" d="M.795 61.008L0 61l24.206-30.016L0 0l.955-.008L25 30v2z" />
                    </g>
                </g>
            </svg>
        </span>
    </div>
</template>

<script>
    export default {
        name: "ProductsSlider",

        props: [
            'locale',
            'translate',
            'products',
        ],


    }
</script>

<style scoped>

</style>