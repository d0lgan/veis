<template>
    <div>
        <v-select class="style-chooser" v-model="selected" label="title_ru" :reduce="group_attributes => group_attributes.id" :options="group_attributes">
            <template #search="{attributes, events}">
                <input
                  class="vs__search"
                  :required="!selected"
                  v-bind="attributes"
                  v-on="events"
                />
            </template>
        </v-select>
        <small v-if="categories.length > 0">Группа пренадлежит: <strong v-for="category in categories">{{ category.title_ru }} </strong></small>
        <input type="hidden" :value="selected" name="group_attribute_id">
    </div>
</template>

<script>
    import 'vue-select/dist/vue-select.css';
    export default {
        name: "GroupAttributes",
        props:[
            'group',
            's'
        ],
        data(){
            return{
                selected: this.s !== undefined ? this.s : 0,
                group_attributes: this.group,
                categories: []

            }
        },
        watch:{
            selected(val){
                 if(val !== null){
                      let group = this.group_attributes.find(x => x.id === val);
                      this.categories = group.categories;
                 }else{
                      this.categories = [];
                 }

            }
        },
        methods:{

        },
        mounted() {
            console.log('test');

            this.group_attributes.forEach((item) => {
                if(item.categories.length > 0){
                    item.title += ' - ';
                    item.categories.forEach((cat, key) => {
                        if(item.categories.length === 1){
                            item.title_ru +=  ' (' + cat.title_ru + ')'
                        }else{
                            if(key === 0){
                                item.title_ru +=  ' (' + cat.title_ru + ', '
                            }else if(key === item.categories.length - 1){
                                item.title_ru +=  cat.title_ru + ')'
                            }else{
                                item.title_ru += cat.title_ru + ', '
                            }
                        }


                    });
                    // item.title = item.title.substring(0, item.title.length - 2);
                }

            });
        }
    }
</script>

<style scoped>
    .style-chooser .vs__search::placeholder,
    .style-chooser .vs__dropdown-toggle,
    .style-chooser .vs__dropdown-menu {
        background: #dfe5fb;
        border: none;
        color: #394066;
        text-transform: lowercase;
        font-variant: small-caps;
    }

    .style-chooser .vs__clear,
    .style-chooser .vs__open-indicator {
        fill: #394066;
    }
</style>