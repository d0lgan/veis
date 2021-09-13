<template>
    <carousel class="slide" :key="5" :paginationEnabled="false" :navigationEnabled="true" navigationPrevLabel="<span class='carousel-nav'><span class='ti-angle-left'></span></span>" navigationNextLabel="<span class='carousel-nav'><span class='ti-angle-right'></span></span>" :perPage="4">
        <slide v-for="c in count" :key="c" class="col-sm-4 col-md-3 col-xl-3 product-wrap">
            <div class="product row">
                <div class="col-md-12 main-image p-4 p-xl-5 d-flex justify-content-center align-items-center">
                    <img :src="`/images/1.png`" alt="">
                </div>
                <div class="title col-12 d-flex justify-content-center">
                    Солнцезащитные очки
                </div>
                <div class="col-12 vendor d-flex justify-content-center">Polaroid 5687156871</div>
                <div class="gallery mt-2 row px-5">
                    <div class="col-md-4 p-1 d-flex justify-content-center align-items-center">
                        <img :src="`/images/1.png`" alt="">
                    </div>
                    <div class="col-md-4 p-1 d-flex justify-content-center align-items-center">
                        <img :src="`/images/1.png`" alt="">
                    </div>
                    <div class="col-md-4 p-1 d-flex justify-content-center align-items-center">
                        <img :src="`/images/1.png`" alt="">
                    </div>
                    <div class="col-md-4 p-1 d-flex justify-content-center align-items-center">
                        <img :src="`/images/1.png`" alt="">
                    </div>
                    <div class="col-md-4 p-1 d-flex justify-content-center align-items-center">
                        <img :src="`/images/1.png`" alt="">
                    </div>
                    <div class="next col-md-4 p-4 d-flex justify-content-center align-items-center">
                        <img :src="`/images/next.svg`" alt="">
                    </div>

                </div>
                <div class="price col-md-12 w-100 row m-0 d-flex justify-content-center align-items-center">
                    <div class="old col-md-12 d-flex justify-content-center align-items-center mt-2"><s>2899 грн</s></div>
                    <div class="current col-md-12 d-flex justify-content-center align-items-center mt-2">цена 1699 грн</div>
                </div>
                <div class="line col-md-12 row m-0 mt-2 d-flex flex-row justify-content-centerp-1">
                    <div class="col-md-12 py-1 col-xl-6 d-flex justify-content-center align-items-center">ПОСМОТРЕТЬ</div>
                    <div class="col-md-12 py-1 col-xl-6 d-flex justify-content-center align-items-center"><img class="mr-2" :src="`/images/shopping-bag.svg`" alt="">КУПИТЬ</div>
                </div>
            </div>
        </slide>
    </carousel>
</template>

<script>
    export default {
        name: "ProductCarouselComponent",
        data(){
            return{
                count: 10
            }
        }
    }
</script>

<style scoped>
    *:focus
    {
        box-shadow: none;
    }
    .shopping-bag
    {
        height: 16px;
    }
    .product-wrap
    {
        position: relative;
        max-height: 100%;
    }
    .product-wrap .product
    {
        position: relative;
    }

    .product-wrap .product .main-image img
    {

    }

    .product-wrap .product .title
    {
        color: #191919;
        font-weight: bold;
        font-size: 13px;
    }
    .product-wrap .product .vendor
    {
        font-size: 12px;
        color: #8D8D8D;
        font-weight: bold;
    }
    .product-wrap .product .price
    {
        /*background: white;*/
    }
    .product-wrap .product .price .old s
    {
        font-weight: bold;
    }

    .product-wrap .product .gallery
    {
        height: 0;
        overflow: hidden;
        /*background: white;*/
    }

    .product-wrap .product .gallery img
    {

    }

    .product-wrap:hover
    {
        background: #F8F8F8;
    }

    .product-wrap:hover .gallery
    {
        overflow: visible;
        height: auto;
        z-index: 10;
    }

    .product-wrap:hover .gallery .price
    {
        background: #F8F8F8;
    }

    .product-wrap:hover .gallery .next img
    {
        height: 40px;
        background: #F8F8F8;
    }

    .product-wrap .product .line
    {
        font-size: 11px;
        background: #2A2A2F;
        color: white;
        height: 0;
        overflow: hidden;
    }

    .product-wrap .product .line img
    {
        height: 15px;
    }

    .slide
    {
        width: 100%;
        height: 750px;
        max-width: 1400px;
    }

    .product-wrap:hover .line
    {
        overflow: visible;
        height: auto;
        z-index: 100;
    }
    @media screen and (max-width: 1400px) {
        .slide
        {
            height: 560px;
        }
    }

    @media screen and (min-width: 1401px) and (max-width: 2000px) {
        .slide
        {
            height: 740px;
        }
    }

    .VueCarousel-navigation-button[data-v-453ad8cd]
    {
        top: 10% !important;
        background: black;
    }

</style>
