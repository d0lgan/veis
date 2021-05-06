<template>
    <div class="root">
        <a :href="'/' + locale + '/basket'" style="display: block; text-decoration: none;">
            <div class="media__head_cart" :title="'В корзине ' + $store.state.cartCount + ' товаров'">
                <img class="cart__icon" src="/assets/front/img/cart.svg">
                <span v-if="$store.state.cartCount != 0">{{ $store.state.cartCount }}</span>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        name: "BusketElement",
        props: [
            'locale'
        ]
    }
</script>

<style scoped>

</style>