<template>


    <div class="m-b-50">
        <div class="overview-wrap d-flex m-b-40">
            <h2 class="title-1">Статистика</h2>
            <div class="d-flex align-items-center">
                <div class="form-inline m-r-20">
                    <label class="m-r-10" for="from">От</label>
                    <input type="date" class="form-control" id="from" v-model="from">
                </div>
                <div class="form-inline m-r-20">
                    <label class="m-r-10" for="to">До</label>
                    <input type="date" class="form-control" id="to" v-model="to">
                </div>
                <button @click="getStatistics()" class="au-btn au-btn-icon au-btn--blue">Применить</button>
            </div>
        </div>

        <div class="d-flex w-100 justify-content-around">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2><strong>{{ stat.contacts }}</strong></h2>
                                <span><strong>Запросов</strong></span>
                            </div>
                        </div>
                        <div class="overview-chart">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                            <div class="text">
                                <h2><strong>{{ stat.sales }}</strong></h2>
                                <span><strong>Продаж</strong></span>
                            </div>
                        </div>
                        <div class="overview-chart">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                            <div class="text">
                                <h2><strong>{{ stat.orders }}</strong></h2>
                                <span><strong>Заказов</strong></span>
                            </div>
                        </div>
                        <div class="overview-chart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






</template>





























<!-- <template>
    <div class="col-md-12 my-5 border border-secondary position-relative p-5">
        <h3 class="position-absolute" style="top:-35px; left:15px; padding: 0 10px;">Test</h3>
        <div class="col-md-7 offset-5 form-inline">
            <div class="form-inline mr-4">
                <label for="from">От</label>
                <input type="date" class="form-control" id="from" v-model="from">
            </div>
            <div class="form-inline mr-4">
                <label for="to">До</label>
                <input type="date" class="form-control" id="to" v-model="to">
            </div>
            <div @click="getStatistics()" class="btn btn-primary">Применить</div>
        </div>
        <div class="col-md-12 form-inline mt-5 ">
            <div class="col-4">
                <div class="jumbotron w-100 p-5 border border-secondary">
                    <div class="row">
                        <div class="col-5 d-flex align-items-center"><h3>Заказов</h3></div>
                        <div class="col-7 text-success"><h2>{{ stat.orders }}</h2></div>
                    </div>
                    <div class="row d-flex justify-content-center mt-4">
                        <a href="/admin/orders" class="btn btn-primary">Посмотреть</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="jumbotron w-100 p-5 border border-secondary">
                    <div class="row">
                        <div class="col-5 d-flex align-items-center"><h3>Продаж</h3></div>
                        <div class="col-7 text-success"><h2>{{ stat.sales }}</h2></div>
                    </div>
                    <div class="row d-flex justify-content-center mt-4">
                        <a href="/admin/orders" class="btn btn-primary">Посмотреть</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="jumbotron w-100 p-5 border border-secondary">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center"><h3>Запросов</h3></div>
                        <div class="col-6 text-success"><h2>{{ stat.contacts }}</h2></div>
                    </div>
                    <div class="row d-flex justify-content-center mt-4">
                        <a href="/admin/contacts" class="btn btn-primary">Посмотреть</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template> -->

<script>
    import axios from "axios";

    export default {
        name: "Statistics",
        data(){
            return{
                from: null,
                to: null,
                stat: {sales: 0, orders:0}
            }
        },
        methods:{
            getStatistics: function () {
                axios.post('/api/statistics/getStatistics', {from: this.from, to: this.to}).then((res) => {
                    this.stat = res.data;
                });
            }
        },
        mounted() {
            this.getStatistics();
        }
    }
</script>

<style scoped>

</style>
