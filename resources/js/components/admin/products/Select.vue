<template>
    <div>
        <label class="typo__label">Дополнительные категории:</label>
        <multiselect v-model="value" tag-placeholder="Add this as new tag" placeholder="Выберите категорию"
                     label="title_ru" track-by="id" :options="options" :multiple="true" :taggable="false"
        ></multiselect>

        <input type="hidden" name="categories" :value="JSON.stringify(value)" />

    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect'

    export default {
        components: {
            Multiselect
        },
        data () {
            return {
                value: this.default,
                options: this.categories
            }
        },
        watch:{
            default(val){
                val.forEach((elem) => {
                    elem['title'] = elem['title_ru'];
                });
                this.value = val;
            },
            categories(val){
                val.forEach((elem) => {
                    elem['title'] = elem['title_ru'];
                });
                this.options = val;
            },
            value(){
                this.$root.$emit('value', this.value);
            }
        },
        props: {
            categories: Array,
            default: Array
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>