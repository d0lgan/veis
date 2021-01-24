<template>
    <div style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center; border: 1px solid #cacaca;">
        <verte menuPosition="top" v-model="color" model="hex"></verte>
        <input type="hidden" name="color" v-model="color">
    </div>

</template>

<script>
    import 'verte/dist/verte.css';
    export default {
        name: "Color",
        props:[
            'col'
        ],
        data(){
            return{
                color: this.col === undefined ? null : this.col
            }
        }
    }
</script>

<style scoped>

</style>