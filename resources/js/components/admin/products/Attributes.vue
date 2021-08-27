<template>
    <div class="d-flex mb-3 row pr-3">
		<div class="alert alert-success notification col-12" v-if="notification">OK
			<button type="button" class="close" @click="notification = false">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
    	<div class="col-6">
    		<select class="form-control mb-3" v-model="selected">
    		    <option
    		            v-for="group in group_attributes"
    		            v-bind:value="group.id"
    		    >
    		        {{ group.title_ru }}
    		    </option>
    		</select>
    	    <div class="border">
    	        <zoom-on-hover v-if="product.image !== undefined && product.image !== null" :img-normal="`/house/uploads/` + product.image" :scale="2"></zoom-on-hover>
    	    </div>
    	</div>

        <!--<div class="form-group">
            <multiselect v-model="selected" deselect-label="Can't remove this value" track-by="name" label="name" placeholder="Select one" :options="group_attributes" :searchable="false" :allow-empty="false">
            </multiselect>
        </div>-->

        <div class="px-3 col-6 scrollable" style="background-color: #ebebeb;">
        	<div v-if="arr_groups !== []" class="card my-3" v-for="(attr, key_attr) in arr_groups">
        	    <div class="card-header py-1 d-flex justify-content-between align-items-center">
        	    	<span>{{ attr.title_ru }}</span>
                    <!-- <span>{{attr}}</span> -->

        	    	<div @click="deleteAttr(attr.title_ru)" class="d-flex justify-content-center align-items-center ml-3" style="width: 30px;height: 30px; background-color: #e1e1e1; border-radius: 50%; cursor: pointer;"><i class="far fa-trash-alt m-0 p-0"></i></div>
        	    </div>
        	    <div class="card-body" v-if="!attr.params.length">
        	        <p>Атрибутов пока не существует</p>
        	    </div>
        	    <div v-else class="card-body">
        	        <div v-for="(p, key) in attr.params">
        	            <input type="checkbox" class="mr-3" name="attribute_id[]" :checked="inAArray(p.id, attr.selected)" @change="changeAttribute(p.id)" :value="p.id" :id="p.id"><label :for="p.id">{{ p.name_ru }}</label>
        	        </div>
        	    </div>
        	</div>
        </div>

        <!-- <div class="btn btn-primary" v-if="!isModal" @click="saveAttr()">Сохранить</div> -->

    </div>
</template>

<script>
    import axios from 'axios'
    import Multiselect from 'vue-multiselect'
    import vZoom from 'vue-zoom'

    export default {
        props: [
            'default_category',
            'selected_attr',
            'group_attributes_prop',
            'fastEdit',
            'product_id',
            'prod',
            'isModal'
        ],
        components: {
            Multiselect,
            vZoom
        },

        created() {
        	this.$root.$refs.saveAttribute = this;
        },

        data() {
            return {
                group_attributes: this.group_attributes_prop ? this.group_attributes_prop : [],
                selected: null,
                arr_groups: this.selected_attr !== undefined ? this.selected_attr : [],
                attribute_id: [],
                product: this.prod !== undefined ? this.prod : [],
                isModal: this.isModal,
				notification: false,
            }
        },

        watch: {
            selected(val) {
                if (val != null) {
                    axios.post('/api/attributes/attr',
                        {attr: val}).then((res) => {
                        res.data.forEach((item) => {
                            if (this.arr_groups.findIndex(x => x.title_ru === item.title_ru) === -1) {
                                console.log(item);
                            	this.arr_groups.push(item);
                                this.selected = null;
                            }
                        })
                    })
                }
            },
            default_category(){

                this.$root.$on('eventing', data => {
                    axios.post('/api/attributes/group', {category_id: data}).then((res) => {
                        this.group_attributes = res.data
                    });
                });

                if (this.default_category) {
                    axios.post('/api/attributes/group', {category_id: this.default_category}).then((res) => {
                        this.group_attributes = res.data
                    });
                }
            },
            selected_attr(val){
                this.arr_groups = val;
                this.attribute_id = [];

                for(let i = 0;i < this.arr_groups.length;i++){
                    for(let j = 0; j < this.arr_groups[i].selected.length;j++){
                        if(!this.inAArray(this.arr_groups[i].selected[j], this.attribute_id)){
                            this.attribute_id.push(this.arr_groups[i].selected[j]);
                        }
                    }
                }
                console.log(this.arr_groups);
            },
            prod: function (val) {
                this.product = val;
            }
        },


        mounted() {
            this.$root.$on('eventing', data => {
                axios.post('/api/attributes/group', {category_id: data}).then((res) => {
                    this.group_attributes = res.data;
					this.notification = false;
                    // this.arr_groups = [];
                });
            });

            if (this.default_category) {
                axios.post('/api/attributes/group', {category_id: this.default_category}).then((res) => {
                    this.group_attributes = res.data;

					this.notification = false;
                });
            }

        },

        methods: {

            deleteAttr(title_ru) {
                this.arr_groups.splice(this.arr_groups.findIndex(x => x.title_ru === title_ru), 1);
            },
            inAArray: function(id, haystack) {
                let length = haystack.length;
                if(length !== 0){
                    for(let i = 0; i < length; i++) {
                        if(haystack[i] === id) {
                            return true;
                        }
                    }
                }
                return false;
            },
            changeAttribute:function (id) {
                if(this.inAArray(id, this.attribute_id)){
                    this.attribute_id.splice(this.attribute_id.findIndex(x => x === id), 1);
                }else{
                    this.attribute_id.push(id);
                }
            },
            saveAttr: function () {
                axios.post('/api/fastEdit/saveAttr', {product_id: this.product_id, attribute_id: this.attribute_id}).then((res) => {
					if(res.data === true){
						this.notification = true;
					}
                });

                console.log('attr saved');
            }
        }
    }
</script>