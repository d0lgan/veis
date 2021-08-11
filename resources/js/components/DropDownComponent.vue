<template>
    <dropdown :class-name="'my-class'">
        <template slot="btn">Категории</template>
        <template slot="body">
            <ul style="list-style:none;margin:0;padding:0;">
                <li v-for="(category, index) in categories" :key="index">
                    <dropdown :trigger="'hover'" :role="'sublist'" :align="'right'">

                        <template slot="btn"><a href="">{{ category.title }}</a></template>


                        <template slot="body">
                            <ul style="list-style:none;margin:0;padding:0;">
                                <dropdown :trigger="'hover'" :role="'sublist'" :align="'right'">
                                    <template :class-name="'list-group-item'" slot="btn">Sublist right</template>
                                    <template slot="body">Sublist content</template>
                                </dropdown>
                            </ul>
                        </template>

                    </dropdown>
                </li>
            </ul>
        </template>
    </dropdown>
</template>

<style>
    .my-class-bp__btn {
        display: flex;
        justify-content: space-between;
        background: #fff;
        width: 100%;
        padding: 10px;
    }

    .my-class-bp__btn--active {
        //background: red;
    }

    .my-class-bp__body {
        width: 100px;
        padding: 10px;
    }

</style>

<script>
    import Dropdown from 'bp-vuejs-dropdown'

    export default {
        components: {
            Dropdown
        },
        props: {
            categories: Array
        }
    }
</script>
