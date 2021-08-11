<template>
    <div class="root">
        <i style="color: #a9b3c9; font-size: 25px; margin-bottom: 3px;" class="fas fa-shopping-cart"></i>
        <span class="quantity">{{ orders.length }}</span>
        <div class="email-dropdown js-dropdown">
            <div class="email__title">
                <p>{{ orders.length }} Новых заказа</p>
            </div>
            <div class="email__item">
                <div class="image img-cir img-40">
                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey">
                </div>
                <div class="content">
                    <p>Meeting about new dashboard...</p>
                    <span>Cynthia Harvey, 3 min ago</span>
                </div>
            </div>
            <div class="email__item">
                <div class="image img-cir img-40">
                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey">
                </div>
                <div class="content">
                    <p>Meeting about new dashboard...</p>
                    <span>Cynthia Harvey, Yesterday</span>
                </div>
            </div>
            <div class="email__item">
                <div class="image img-cir img-40">
                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey">
                </div>
                <div class="content">
                    <p>Meeting about new dashboard...</p>
                    <span>Cynthia Harvey, April 12,,2018</span>
                </div>
            </div>
            <div class="email__footer">
                <a href="#">See all emails</a>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "FaShoppingCart",
        data() {
            return {
                orders: [],
            }
        },

        mounted() {
            this.orders = setInterval(() => {
                this.loadOrders();
            }, 3000)

        },

        methods: {
            loadOrders: function () {
                axios.get('/api/getRecentOrders').then((res) => {
                    this.orders = res.data.orders;
                });
            }
        },
    }
</script>

<style scoped>

</style>