<template>
    <li class="nav-item mr-3">
        <a class="nav-link"  href="/cart">
            <img width="16px;" src="/images/icon/cart.svg" alt="">
            <span style="position:relative;left: -4px;top:-7px;" class="badge badge-warning ">
            {{ $store.state.cartCount }}
            </span>
        </a>
    </li>
</template>

<script>
    export default {
        name: "NavCart"
    }
</script>

<style scoped>

</style>