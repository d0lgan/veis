<template>
    <div>
        <label class="typo__label">{{ title }}</label>
        <multiselect v-model="value" tag-placeholder="Add this as new tag" placeholder="Выберите"
                     :label="titleOrName + '_ru'" track-by="id" :options="options" :multiple="true" :taggable="false"
        ></multiselect>

        <input type="hidden" :name="name ? name : 'categories'" :value="JSON.stringify(value)" />

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
                    elem['title'] = elem[this.titleOrName + '_ru'];
                });
                this.value = val;
            },
            categories(val){
                val.forEach((elem) => {
                    elem['title'] = elem[this.titleOrName + '_ru'];
                });
                this.options = val;
            },
            value(){
                if (this.title == 'Выберите теги') {
                    this.$root.$emit('tags', this.value);
                } else {
                    this.$root.$emit('value', this.value);
                }
            }
        },
        props: {
            categories: Array,
            default: Array,
            title: String,
            titleOrName: String,
            name: {
                required: false,
            }
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>