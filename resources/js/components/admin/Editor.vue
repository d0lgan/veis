<template>
    <div class="w-100">
        <vue-ckeditor v-model="editorData" :config="config"></vue-ckeditor>
        <input class="w-100" type="hidden" :name="name" v-model="editorData">

    </div>

</template>

<script>

    export default {
        name: "Editor",
        props:[
            'name',
            'h',
            'v'
        ],
        data(){
            return{
                // editor: ClassicEditor,
                editorData: this.v !== undefined ? this.v : '',
                config: {
                    height: this.h !== undefined ? this.h : 200,
                }
            }
        }
    }
</script>

<style scoped>

</style>