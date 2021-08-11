<template>
    <div>
        <datetime :id="i" v-model="valu" :formatted="`YYYY-MM-DD HH:mm`" :format="`YYYY-MM-DD HH:mm`"></datetime>
        <input type="hidden" v-model="valu" :name="name" >
    </div>
</template>

<script>
    import 'vue-ctk-date-time-picker/dist/vue-ctk-date-time-picker.css';
    export default {
        name: "DateTime",
        props:[
            'name',
            'val',
            'k',
            'i'
        ],
        data(){
            return{
                valu: this.val
            }
        },
        watch:{
            val(val){
                this.valu = val;
            },
            valu(val){
                if(this.name === 'start_stock'){
                    this.$root.$emit('startDate', val);
                }else{
                    this.$root.$emit('endDate', val);
                }
            }
        },
        mounted() {
        }
    }
</script>

<style scoped>

</style>