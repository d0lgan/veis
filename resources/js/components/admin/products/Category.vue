<template>
    <div>


        <select class="form-control" name="category_id" v-model="selected">
            <option  v-for="category in categories" :value="category.id">
                {{ category.title_ru }}
            </option>
        </select>

<!--        {{ default_category }}-->


    </div>
</template>

<script>
    export default {

        props: {
            categories: Array,
            default_category: Number
        },

        data() {
            return {
                selected: this.default_category

            }
        },
        watch: {
            selected(val) {
                this.$root.$emit('eventing', val);
            },
            default_category(val){
                this.selected = val;
            }
        }
    }
</script>
