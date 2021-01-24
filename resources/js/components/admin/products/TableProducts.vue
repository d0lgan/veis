<template>
    
    <div class="col-md-12 p-t-10">
        <!-- DATA TABLE -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="title-2 m-0">Товары</h3>
            <div class="table-data__tool-right d-flex m-0">
                <a title="Добавить" :href="`/admin-products/create/`" class="mr-1 btn btn-success au-btn--small text-center rounded">
                    <i class="fas fa-plus mr-0"></i></a>
                
                <a title="Настройки" href="#" class="mr-1 btn btn-primary au-btn--small text-center rounded" data-toggle="modal" data-target="#settingModal"><i class="fas fa-sliders-h mr-0"></i></a>

                <a title="Скопировать" href="#" class="mr-1 btn btn-info au-btn--small text-center rounded" @click="replicateProduct()"><i class="fas fa-copy"></i></a>

                <a title="Удалить выбранные товары" href="#" class="mr-1 btn btn-danger au-btn--small text-center rounded" data-toggle="modal" data-target="#deleteModal" ><i class="far fa-trash-alt"></i></a>
                <a href="#" class="mr-1 btn btn-secondary au-btn--small text-center rounded" data-toggle="modal" data-target="#groupPriceModal" @click="getGroupData()"><i class="fas fa-gavel"></i></a>







                <select name="" id="" style="padding: 0 25px; height: 40px !important" class="form-control w-100 h-100" @change="countPages()" v-model="sort_count">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <!-- Delete modal -->
            <div id="deleteModal" class="modal fade" data-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Удаление</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            Вы действительно хотите удалить выбранные товары?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Нет</button>
                            <button type="button" data-dismiss="modal" @click="deleteProduct()" class="btn btn-danger">Да</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Settings modal -->
            <div id="settingModal" class="modal fade" data-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Настройки отображения</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <ul>
                                <li v-for="(header, key) in headers" class="col-md-6" v-if="header.key !== 'checkbox'">
                                    <input :checked="header.public" @change="changePublic(key)" type="checkbox" :id="header.key">
                                    <label :for="header.key">{{ header.name }}</label>
                                </li>
                            </ul>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Data modal -->
            <div class="modal fade" id="dataModal" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between align-items-center">
                            <h5 class="modal-title">Настройки данных</h5>
                            
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" @click="saveDataComp()" class="btn save saveOptions mr-3"><i class="far fa-save"></i></a>

                                <a href="javascript:void(0)" class="btn back mr-2" data-dismiss="modal"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <data-component ref="dataSave" :product="product" :categories_json="categories_json" :manufacturers="manufacturers" :suppliers="suppliers" :fastEdit="true" :product_categories="product_categories" :settings="settings"></data-component>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Group Price modal -->

            <div id="groupPriceModal" class="modal fade" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between align-items-center">
                            <h5 class="modal-title">Груповое изменение</h5>
                            
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#successModal" class="btn save saveOptions mr-3"><i class="far fa-save"></i></a>
                                
                                <a href="javascript:void(0)" class="btn back mr-2" data-dismiss="modal"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <group-data-component :categories_json="categories_json" :manufacturers="manufacturers" :suppliers="suppliers" :settings="settings" :selected_products="selectedProduct()"></group-data-component>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Relation modal -->
            <div id="relationModal" class="modal fade" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between align-items-center">
                            <h5 class="modal-title">Настройки данных</h5>

                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" @click="relSaveData()" class="btn save saveOptions mr-3"><i class="far fa-save"></i></a>
                                
                                <a href="javascript:void(0)" class="btn back mr-2" data-dismiss="modal"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <relation-component ref="relSave" :product_id="product_id" :fastEdit="true" :relations="relations"></relation-component>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Option modal -->
            <div id="optionModal" class="modal fade" data-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between align-items-center">
                            <h5 class="modal-title">Настройки опций</h5>

                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" @click="saveOption()" class="btn save saveOptions mr-3"><i class="far fa-save"></i></a>
                                
                                <a href="javascript:void(0)" class="btn back mr-2" data-dismiss="modal"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <option-component ref="saveOption" :isModal="true" :options="options" :product_selected="selected_options" :fastEdit="true" :product_id = "product_id"></option-component>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Image modal -->
            <div id="imageModal" class="modal fade" data-backdrop="static">
                <div class="modal-dialog modal-dialog-scrollable" style="max-width: auto !important">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Настройки изображений</h5>
                            
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" @click="saveImage()" class="btn save saveOptions mr-3"><i class="far fa-save"></i></a>
                                
                                <a href="javascript:void(0)" class="btn back mr-2" data-dismiss="modal"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <gallery-component ref="imageSave" :isModal="true" :product_id="product_id" :product_images="images" :fastEdit="true"></gallery-component>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Attribute modal -->

            <div id="attributeModal" class="modal fade" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between align-items-center">
                            <h5 class="modal-title">Настройки атрибутов</h5>
                            
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" @click="saveAttr()" class="btn save saveOptions mr-3"><i class="far fa-save"></i></a>
                                
                                <a href="javascript:void(0)" class="btn back mr-2" data-dismiss="modal"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <attributes-component ref="saveAttribute" :isModal="true" :product_id="product_id" :default_category="default_category" :selected_attr="selected_attr" :fastEdit="true" :prod="product"></attributes-component>
                        </div>
                    </div>
                </div>
            </div>













            <!-- <label class="au-checkbox">
                <input @change="allCheck()" v-model="allChecked" type="checkbox">
                <span class="au-checkmark"></span>
            </label> 

            <div class="table-data__tool-left d-flex">
                <div class="rs-select2--light rs-select2--md h-100 srw">
                    <div class="h-100 sr" v-model="headers" v-for="header in headers" v-if="header.key === 'title'">
                        <input type="text" placeholder="Поиск" v-model="header.value" style="background-color: #9ea3a7; color: #fff" class="inp form-control w-100 h-100"> 
                        <i class="fas fa-search sr_icon" style="color: #fff"></i>
                    </div>
                </div>
                <button class="au-btn-filter d-flex justify-content-center align-items-center text-center" style="padding: auto !important; background-color: #9ea3a7" @click="searchProducts()">
                    <i class="far fa-trash-alt" style="color: #fff"></i>
                </button>
            </div>

        -->







        </div>


        <div class="table-responsive table-responsive-data2" style="overflow-x: scroll;">
            <table class="products table table-data2 product_table">
                <thead>
                    <draggable v-model="headers" tag="tr">
                        <th v-for="header in headers" v-if="header.public" scope="col" :style="{width: header.key == 'image' ? header.w + 3 + 'px' : header.w + 'px'}" :key="header.key" class="padding align-middle text-center">
                            <label class="au-checkbox" v-if="header.key === 'checkbox'">
                                <input @change="allCheck()" v-model="allChecked" type="checkbox">
                                <span class="au-checkmark" style="top: -5px"></span>
                            </label>


                            <!-- <input @change="allCheck()" v-model="allChecked" type="checkbox" v-if="header.key === 'checkbox'"> -->
                            <span :style="{'width': header.w + 3 + 'px', 'cursor': 'pointer', 'font-size': '10px'}" v-else-if="header.key === 'image'" class="d-flex justify-content-start align-items-center">Изобр-е <i class="fas fa-chevron-down" style="font-size: 10px"></i></span>

                            <span :style="{'width': 'auto', 'font-size': '10px', 'cursor': 'pointer'}" v-else-if="header.key === 'title'" class="d-flex justify-content-start align-items-center">{{header.name}} <i class="fas fa-chevron-down" style="font-size: 10px"></i></span>

                            <span :style="{'width': header.w+'px', 'font-size': '10px', 'cursor': 'pointer'}" v-else-if="header.key === 'category_title'" class="d-flex justify-content-start align-items-center">Катег-ия <i class="fas fa-chevron-down" style="font-size: 10px"></i></span>

                            <span :style="{'width': header.w+'px', 'font-size': '10px', 'cursor': 'pointer'}" v-else-if="header.key === 'manufacturer_title'" class="d-flex justify-content-start align-items-center">Произв-ль <i class="fas fa-chevron-down" style="font-size: 10px"></i></span>

                            <span :style="{'width': 'auto', 'font-size': '10px', 'cursor': 'pointer'}" v-else-if="header.key === 'vendor_code'" class="d-flex justify-content-start align-items-center">{{header.name}} <i class="fas fa-chevron-down" style="font-size: 10px"></i></span>
                            <span :style="{'width': 'auto', 'font-size': '10px', 'cursor': 'pointer'}" v-else-if="header.key === 'stock'" class="d-flex justify-content-start align-items-center">{{header.name}} <i class="fas fa-chevron-down" style="font-size: 10px"></i></span>
                            <span :style="{'width': 'auto', 'font-size': '10px', 'cursor': 'pointer'}" v-else-if="header.key === 'tags'" class="d-flex justify-content-start align-items-center">{{header.name}} <i class="fas fa-chevron-down" style="font-size: 10px"></i></span>

                            <span :style="{'width': header.w+'px', 'font-size': '10px'}" v-else-if="header.key === 'public'" class="d-flex justify-content-start align-items-center">Отображ-ие</span>
<!--                            <img v-if="header.key === 'image'" :src="'/house/uploads/' + image.name + '?time=' + time "  alt="">-->
                            <!-- <input v-else type="text" :placeholder="header.name" v-model="header.value" :style="{width: header.w + 'px'}" class="inp form-control w-100"> 
                            {key: 'public', name: "Отображение", public: true, value: '', w: 100},-->


                            <span style="font-size: 10px" v-else>{{ header.name }}</span>
                        </th>
                        <th class="padding align-middle d-flex justify-content-end ">
                            <div style="height: 35px" v-model="headers" v-for="header in headers" v-if="header.key === 'title'" class="d-flex">
                                <div class="rs-select2--light rs-select2--md srw" style="height: 35px">
                                    <div class="sr" style="height: 35px" v-model="headers" v-for="header in headers" v-if="header.key === 'title'">
                                        <input type="text" placeholder="Поиск" v-model="header.value" style="background-color: #9ea3a7; color: #fff; border-radius: 3px" class="inp form-control w-100 h-100"> 
                                        <i class="fas fa-search sr_icon" style="color: #fff; cursor: pointer;" @click="searchProducts()"></i>
                                    </div>
                                </div>

                                <button class="au-btn-filter ml-2 d-flex justify-content-center align-items-center text-center" style="height: 35px !important; padding: auto !important; background-color: #9ea3a7" @click="clearSearch()">
                                    <i class="far fa-trash-alt m-0 p-0" style="color: #fff; font-size: 14px !important;"></i>
                                </button>
                            </div>
                        </th>
                    </draggable>
                </thead>
                <tbody>
                    <template v-for="product in products">
                        <tr v-model="products">
                            <td class="padding align-middle" v-for="header in headers" v-if="header.public" :style="{'width': header.w + 'px', 'word-break': header.key == 'category_title' ? 'break-all' : 'normal'}" :key="header.key" style="font-size: 12px">
                                <label class="au-checkbox" v-if="header.key === 'checkbox'">
                                    <input @change="toggleCheck(product.id)" v-model="checked[checkArray(product.id)].check" type="checkbox">
                                    <span class="au-checkmark" style="top: -5px"></span>
                                </label>

                                <!-- <input v-model="checked[checkArray(product.id)].check" type="checkbox" @change="toggleCheck(product.id)"  v-if="header.key === 'checkbox'"> -->
                                <span :style="{'width': header.w + 'px'}" v-if="header.key === 'image'">
                                    <img v-if="product.image" :src="`/house/uploads/` + product.image + '?time=' + time " class="image" >
                                    <img v-else :src="`/house/uploads/veis.svg`" alt="" class="image" >
                                </span>
                                <!-- <span :style="{'width': header.w + 'px', 'font-size': '10px'}" v-else-if="header.key === 'availability'">{{ availability(product[header.key]) }}</span>
                                <span :style="{'width': header.w + 'px', 'font-size': '10px'}" v-else-if="header.key === 'public'" :class="{'text-success': product[header.key] === 1, 'text-danger': product[header.key] === 0}">{{ public(product[header.key]) }}</span> -->

                                <span :style="{'width': header.w + 'px', 'font-size': '11px'}" :class="{'text-success': product[header.key] === 1, 'text-danger': product[header.key] === 0}" v-else-if="header.key === 'availability'">{{ availability(product[header.key]) }}</span>

                                <!-- <span class="d-flex justify-content-center" v-else-if="header.key === 'availability'">
                                    <label class="au-checkbox" v-if="product[header.key] == ''">
                                        <input type="checkbox" name="">
                                        <span class="au-checkmark" style="top: -5px; left: -5px"></span>
                                    </label>

                                    <label class="au-checkbox" v-else>
                                        <input type="checkbox" name="" checked>
                                        <span class="au-checkmark" style="top: -5px; left: -5px"></span>
                                    </label>
                                </span>
 -->
                                <span class="d-flex justify-content-center" v-else-if="header.key === 'public'">
                                    <label class="au-checkbox" style="margin-left: -9px" v-if="product[header.key] == ''">
                                        <input type="checkbox" disabled="disabled" name="">
                                        <span class="au-checkmark" style="top: -5px"></span>
                                    </label>

                                    <label class="au-checkbox" style="margin-left: -9px" v-else>
                                        <input type="checkbox" name="" disabled="disabled" checked>
                                        <span class="au-checkmark" style="top: -5px"></span>
                                    </label>
                                </span>

                                <span :style="{'width': header.w + 'px', 'font-size': '10px'}" v-else-if="header.key === 'type'" >{{ type(product[header.key]) }}</span>
                                <span v-else-if="header.key === 'title'" style="text-align: left !important;">{{ product[header.key]}}</span>
                                <span class="text-left" v-else :style="{'width': header.w + 'px','font-size': '10px'}">{{ product[header.key]}}</span>
                            </td>
                            <td class="align-middle" style="padding: 10px !important">
                                <div class="table-data-feature d-flex">




                                    <a href="#" data-toggle="modal" data-target="#attributeModal" @click="getAttribute(product.id, product.category_id)" style="width: 25px; height: 25px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Аттрибуты">
                                        <span style="color: #808080; font-size: 15px; font-weight: bold">A</span>
                                    </a>

                                    <a href="#" data-toggle="modal" data-target="#imageModal" @click="getImage(product.id)" style="width: 25px; height: 25px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Изображение">
                                        <span style="color: #808080; font-size: 15px; font-weight: bold">I</span>
                                    </a>

                                    <a href="#" data-toggle="modal" data-target="#optionModal" @click="getOption(product.id)" style="width: 25px; height: 25px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Опций">
                                        <span style="color: #808080; font-size: 15px; font-weight: bold">O</span>
                                    </a>

                                    <a href="#" data-toggle="modal" data-target="#relationModal" @click="getRelation(product.id)" style="width: 25px; height: 25px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Допполнительно">
                                        <span style="color: #808080; font-size: 15px; font-weight: bold">R</span>
                                    </a>

                                    <a href="#" data-toggle="modal" data-target="#dataModal" @click="getData(product.id)" style="width: 25px; height: 25px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Данные">
                                        <span style="color: #808080; font-size: 15px; font-weight: bold">D</span>
                                    </a>

                                    <!--<a :href="'/product/' + product.slug_ru" style="width: 25px; height: 25px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Посмотреть"><i style="font-size: 12px" class="far fa-eye"></i></a>
-->
                                    <a :href="`/admin-products/`+ product.id + `/edit`" style="width: 25px; height: 25px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" title="Редактировать">
                                        <i style="font-size: 12px; text-decoration: none;" class="fas fa-pencil-alt"></i>
                                    </a>



                                    <!-- <span title="Настройки атрибутов" data-toggle="modal" data-target="#attributeModal" @click="getAttribute(product.id, product.category_id)" class="btn btn-primary au-btn--small text-center rounded mr-2"><i class="fas fa-link"></i></span>

                                    <span title="Настройки изображений" data-toggle="modal" data-target="#imageModal" @click="getImage(product.id)" class="btn btn-primary au-btn--small text-center rounded mr-2"><i class="fas fa-file-image"></i></span>

                                    <span title="Настройки опций" data-toggle="modal" data-target="#optionModal" @click="getOption(product.id)"  class="btn btn-primary au-btn--small text-center rounded mr-2"><i class="fas fa-filter"></i></span>

                                    <span title="Настройки данных" data-toggle="modal" data-target="#relationModal" @click="getRelation(product.id)" class="btn btn-primary au-btn--small text-center rounded mr-2"><i class="fas fa-cogs"></i></span>

                                    <span title="Настройки данных" data-toggle="modal" data-target="#dataModal" @click="getData(product.id)" class="btn btn-primary au-btn--small text-center rounded mr-2"><i class="fas fa-table"></i></span>

                                    <a :href="'/product/' + product.slug" class="btn btn-secondary au-btn--small text-center rounded"><i class="far fa-eye"></i></a> -->
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                    </template>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->

        <div class="row justify-content-center m-b-30 m-t-30">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" @click="currentPage(current_page - 1)" :class="{disabled: (current_page - 1) < 0}">
                        <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li v-for="(page, key) in count_pages" class="page-item" @click="currentPage(key)" :class="{active : key === current_page}">
                        <a class="page-link">{{ page }}</a>
                    </li>
                    <li class="page-item" @click="currentPage(parseInt(current_page) + 1)" :class="{disabled: (parseInt(current_page) + 1) >= count_pages}">
                        <a class="page-link" aria-label="Next">

                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

</template>













































<temp>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="w-100">

                        <h2 class="title-1 m-b-25">Товары</h2>

                        <div class="row m-b-20">
                            <div class="top offset-5 col-2 d-flex justify-content-between border border-secondary align-items-center mr-2">
                                <a type="button" :href="`/admin-products/create/`"><i class="fas fa-plus-square"></i></a>
                                <span data-toggle="modal" data-target="#settingModal"><i class="fas fa-sliders-h"></i></span>
                                <span @click="replicateProduct()"><i class="far fa-copy"></i></span>
                                <span data-toggle="modal" data-target="#deleteModal" ><i class="far fa-trash-alt"></i></span>
                                <span data-toggle="modal" data-target="#groupPriceModal" @click="getGroupData()"><i class="fas fa-gavel"></i></span>
                            </div>

                            <select name="" id="" class="col-md-1 form-control" @change="countPages()" v-model="sort_count">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>

                        <!-- Button trigger @click="deleteProduct()"modal -->

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!--<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Вы действительно хотите удалить выбранные товары?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Нет</button>
                                        <button type="button" data-dismiss="modal" @click="deleteProduct()" class="btn btn-primary">Да</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Setting Modal -->
                        <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="settingModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="settingModalLabel">Настройки отображения</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li v-for="(header, key) in headers" class="col-md-6" v-if="header.key !== 'checkbox'">
                                                <input :checked="header.public" @change="changePublic(key)" type="checkbox" :id="header.key">
                                                <label :for="header.key">{{ header.name }}</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Data Modal-->
                        <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="dataModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="dataModalLabel">Настройки данных</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <data-component :product="product" :categories_json="categories_json" :manufacturers="manufacturers" :suppliers="suppliers" :fastEdit="true" :product_categories="product_categories" :settings="settings"></data-component>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Relation Modal-->
                        <div class="modal fade" id="relationModal" tabindex="-1" role="dialog" aria-labelledby="relationModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="relationModalLabel">Настройки данных</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <relation-component :product_id="product_id" :fastEdit="true" :relations="relations"></relation-component>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Attribute Modal-->
                        <div class="modal fade" id="attributeModal" tabindex="-1" role="dialog" aria-labelledby="attributeModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="attributeModalLabel">Настройки атрибутов</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <attributes-component :product_id="product_id" :default_category="default_category" :selected_attr="selected_attr" :fastEdit="true" :prod="product"></attributes-component>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Option Modal-->
                        <div class="modal fade" id="optionModal" tabindex="-1" role="dialog" aria-labelledby="optionModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="optionModalLabel">Настройки изображений</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <option-component :options="options" :product_selected="selected_options" :fastEdit="true" :product_id = "product_id"></option-component>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Image Modal-->
                        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel">Настройки опций</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <gallery-component :product_id="product_id" :product_images="images" :fastEdit="true"></gallery-component>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Group Price-->
                        <div class="modal fade" id="groupPriceModal" tabindex="-1" role="dialog" aria-labelledby="groupPriceModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="groupPriceModalLabel">Груповое изменение цен</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <group-data-component :categories_json="categories_json" :manufacturers="manufacturers" :suppliers="suppliers" :settings="settings" :selected_products="selectedProduct()"></group-data-component>
                                        <!--<div class="col-md-12">
                                            <div class="jumbotron">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="ude">УДЕ</label>
                                                        <input v-model="ude" @change="changePrice()" class="form-control" type="text" name="ude"
                                                               id="ude">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="course">Курс</label>
                                                        <input v-model="course" @change="changePrice()" class="form-control" type="text" name="course"
                                                               id="course">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="price">Цена</label>
                                                        <input v-model="price" class="form-control" type="text" name="price"
                                                               id="price">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="percent">%</label>
                                                        <input v-model="percent" @change="changePrice()" class="form-control" type="text" name="percent"
                                                               id="percent">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="undiscounted">Цена без скидки</label>
                                                        <input v-model="undiscounted" class="form-control" type="text" name="undiscounted"
                                                               id="undiscounted">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
            <!--                            <div class="btn btn-primary" @click="saveGroupPrice()">Сохранить</div>-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>









                        <div class="table-responsive table-responsive-data2 zindex-dropdown">
                            <table class="table table-data2 zindex-dropdown">
                                <thead>
                                    <draggable v-model="headers" tag="tr">
                                        <th v-for="header in headers" v-if="header.public" scope="col" :style="{width: header.w + 'px'}" :key="header.key" class="header">
                                            <input @change="allCheck()" v-model="allChecked" type="checkbox" v-if="header.key === 'checkbox'">
                                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'image'">Изображение</span>
                <!--                            <img v-if="header.key === 'image'" :src="'/house/uploads/' + image.name + '?time=' + time "  alt="">-->
                                            <input v-else type="text" :placeholder="header.name" v-model="header.value" :style="{width: header.w + 'px'}" class="inp form-control w-100">
                <!--                            <span v-else>{{ header.name }}</span>-->
                                        </th>
                                        <th class="d-flex">
                                            <div class="btn btn-primary sea" @click="searchProducts()">Искать</div>
                                            <div class="btn btn-danger" @click="clearSearch()">X</div>

                                        </th>
                                        <th></th>
                                    </draggable>
                                </thead>
                                <tbody>
                                    <tr class="mb-10" v-model="products" v-for="product in products">
                                        <td :style="{'width': header.w + 'px'}" v-for="header in headers" v-if="header.public" :key="header.key">
                                            <input v-model="checked[checkArray(product.id)].check" type="checkbox" @change="toggleCheck(product.id)"  v-if="header.key === 'checkbox'">
                                            <span :style="{'width': header.w + 'px'}" v-if="header.key === 'image'">
                                                <img v-if="product.image" :src="`/house/uploads/` + product.image + '?time=' + time " class="image">
                                                <img v-else :src="`/house/uploads/veis.svg`" alt="" class="image">
                                            </span>
                                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'availability'">{{ availability(product[header.key]) }}</span>
                                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'public'" :class="{'text-success': product[header.key] === 1, 'text-danger': product[header.key] === 0}">{{ public(product[header.key]) }}</span>
                                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'type'" >{{ type(product[header.key]) }}</span>
                                            <span v-else :style="{'width': header.w + 'px'}">{{ product[header.key]}}</span>
                                        </td>
                                        <td>
                                            <span data-toggle="modal" data-target="#attributeModal" @click="getAttribute(product.id, product.category_id)" class="btn btn-primary">A</span>
                                            <span data-toggle="modal" data-target="#imageModal" @click="getImage(product.id)" class="btn btn-primary">I</span>
                                            <span data-toggle="modal" data-target="#optionModal" @click="getOption(product.id)"  class="btn btn-primary">O</span>
                                            <span data-toggle="modal" data-target="#relationModal" @click="getRelation(product.id)" class="btn btn-primary">S</span>
                                            <span data-toggle="modal" data-target="#dataModal" @click="getData(product.id)" class="btn btn-primary">D</span>
                                            <a :href="'/product/' + product.slug_ru" class="btn btn-primary"><i class="far fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <p><a class="btn btn-warning" :href="`/admin-products/`+ product.id + `/edit`"><i
                                                    class="fas fa-pencil-alt"></i></a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

















































































                       <!--  <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <draggable v-model="headers" tag="tr">
                                        <th v-for="header in headers" v-if="header.public" scope="col" :style="{width: header.w + 'px'}" :key="header.key" class="header">
                                            <input @change="allCheck()" v-model="allChecked" type="checkbox" v-if="header.key === 'checkbox'">
                                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'image'">Изображение</span>
                
                                            <input v-else type="text" :placeholder="header.name" v-model="header.value" :style="{width: header.w + 'px'}" class="inp form-control w-100">
                
                                        </th>
                                        <th class="d-flex">
                                            <div class="btn btn-primary sea" @click="searchProducts()">Искать</div>
                                            <div class="btn btn-danger" @click="clearSearch()">X</div>

                                        </th>
                                        <th></th>
                                    </draggable>
                                </thead>
                                <tbody>
                                    <tr v-model="products" v-for="product in products">
                                        <td :style="{'width': header.w + 'px'}" v-for="header in headers" v-if="header.public" :key="header.key">
                                            <input v-model="checked[checkArray(product.id)].check" type="checkbox" @change="toggleCheck(product.id)"  v-if="header.key === 'checkbox'">
                                            <span :style="{'width': header.w + 'px'}" v-if="header.key === 'image'">
                                                <img v-if="product.image" :src="`/house/uploads/` + product.image + '?time=' + time " class="image">
                                                <img v-else :src="`/house/uploads/veis.svg`" alt="" class="image">
                                            </span>
                                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'availability'">{{ availability(product[header.key]) }}</span>
                                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'public'" :class="{'text-success': product[header.key] === 1, 'text-danger': product[header.key] === 0}">{{ public(product[header.key]) }}</span>
                                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'type'" >{{ type(product[header.key]) }}</span>
                                            <span v-else :style="{'width': header.w + 'px'}">{{ product[header.key]}}</span>
                                        </td>
                                        <td>
                                            <span data-toggle="modal" data-target="#attributeModal" @click="getAttribute(product.id, product.category_id)" class="btn btn-primary">A</span>
                                            <span data-toggle="modal" data-target="#imageModal" @click="getImage(product.id)" class="btn btn-primary">I</span>
                                            <span data-toggle="modal" data-target="#optionModal" @click="getOption(product.id)"  class="btn btn-primary">O</span>
                                            <span data-toggle="modal" data-target="#relationModal" @click="getRelation(product.id)" class="btn btn-primary">S</span>
                                            <span data-toggle="modal" data-target="#dataModal" @click="getData(product.id)" class="btn btn-primary">D</span>
                                            <a :href="'/product/' + product.slug" class="btn btn-primary"><i class="far fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <p><a class="btn btn-warning" :href="`/admin-products/`+ product.id + `/edit`"><i
                                                    class="fas fa-pencil-alt"></i></a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->





                        <div class="row justify-content-center m-b-30">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item" @click="currentPage(current_page - 1)" :class="{disabled: (current_page - 1) < 0}">
                                        <a class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li v-for="(page, key) in count_pages" class="page-item" @click="currentPage(key)" :class="{active : key === current_page}">
                                        <a class="page-link">{{ page }}</a>
                                    </li>
                                    <li class="page-item" @click="currentPage(parseInt(current_page) + 1)" :class="{disabled: (parseInt(current_page) + 1) >= count_pages}">
                                        <a class="page-link" aria-label="Next">

                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</temp>





















































































<temp>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
            <h2 class="title-1 m-b-25">Товары</h2>
            <div class="row">
                <div class="top offset-5 col-2 d-flex justify-content-between border border-secondary align-items-center mr-2">
                    <a type="button" :href="`/admin-products/create/`"><i class="fas fa-plus-square"></i></a>
                    <span data-toggle="modal" data-target="#settingModal"><i class="fas fa-sliders-h"></i></span>
                    <span @click="replicateProduct()"><i class="far fa-copy"></i></span>
                    <span data-toggle="modal" data-target="#deleteModal" ><i class="far fa-trash-alt"></i></span>
                    <span data-toggle="modal" data-target="#groupPriceModal" @click="getGroupData()"><i class="fas fa-gavel"></i></span>
                </div>

                <select name="" id="" class="col-md-1 form-control" @change="countPages()" v-model="sort_count">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <!-- Button trigger @click="deleteProduct()"modal -->

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!--<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Вы действительно хотите удалить выбранные товары?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Нет</button>
                            <button type="button" data-dismiss="modal" @click="deleteProduct()" class="btn btn-primary">Да</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Setting Modal -->
            <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="settingModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="settingModalLabel">Настройки отображения</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li v-for="(header, key) in headers" class="col-md-6" v-if="header.key !== 'checkbox'">
                                    <input :checked="header.public" @change="changePublic(key)" type="checkbox" :id="header.key">
                                    <label :for="header.key">{{ header.name }}</label>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Data Modal-->
            <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="dataModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dataModalLabel">Настройки данных</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <data-component :product="product" :categories_json="categories_json" :manufacturers="manufacturers" :suppliers="suppliers" :fastEdit="true" :product_categories="product_categories" :settings="settings"></data-component>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Relation Modal-->
            <div class="modal fade" id="relationModal" tabindex="-1" role="dialog" aria-labelledby="relationModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="relationModalLabel">Настройки данных</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <relation-component :product_id="product_id" :fastEdit="true" :relations="relations"></relation-component>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Attribute Modal-->
            <div class="modal fade" id="attributeModal" tabindex="-1" role="dialog" aria-labelledby="attributeModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="attributeModalLabel">Настройки атрибутов</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <attributes-component :product_id="product_id" :default_category="default_category" :selected_attr="selected_attr" :fastEdit="true" :prod="product"></attributes-component>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Option Modal-->
            <div class="modal fade" id="optionModal" tabindex="-1" role="dialog" aria-labelledby="optionModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="optionModalLabel">Настройки изображений</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <option-component :options="options" :product_selected="selected_options" :fastEdit="true" :product_id = "product_id"></option-component>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Image Modal-->
            <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModalLabel">Настройки опций</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <gallery-component :product_id="product_id" :product_images="images" :fastEdit="true"></gallery-component>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Group Price-->
            <div class="modal fade" id="groupPriceModal" tabindex="-1" role="dialog" aria-labelledby="groupPriceModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="groupPriceModalLabel">Груповое изменение цен</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <group-data-component :categories_json="categories_json" :manufacturers="manufacturers" :suppliers="suppliers" :settings="settings" :selected_products="selectedProduct()"></group-data-component>
                            <!--<div class="col-md-12">
                                <div class="jumbotron">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="ude">УДЕ</label>
                                            <input v-model="ude" @change="changePrice()" class="form-control" type="text" name="ude"
                                                   id="ude">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="course">Курс</label>
                                            <input v-model="course" @change="changePrice()" class="form-control" type="text" name="course"
                                                   id="course">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="price">Цена</label>
                                            <input v-model="price" class="form-control" type="text" name="price"
                                                   id="price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="percent">%</label>
                                            <input v-model="percent" @change="changePrice()" class="form-control" type="text" name="percent"
                                                   id="percent">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="undiscounted">Цена без скидки</label>
                                            <input v-model="undiscounted" class="form-control" type="text" name="undiscounted"
                                                   id="undiscounted">
                                        </div>
                                    </div>
                                </div>
                            </div>-->
<!--                            <div class="btn btn-primary" @click="saveGroupPrice()">Сохранить</div>-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table table-data2 ">
                    <thead>
                    <draggable v-model="headers" tag="tr">
                        <th v-for="header in headers" v-if="header.public" scope="col" :style="{width: header.w + 'px'}" :key="header.key" class="header">
                            <input @change="allCheck()" v-model="allChecked" type="checkbox" v-if="header.key === 'checkbox'">
                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'image'">Изображение</span>
<!--                            <img v-if="header.key === 'image'" :src="'/house/uploads/' + image.name + '?time=' + time "  alt="">-->
                            <input v-else type="text" :placeholder="header.name" v-model="header.value" :style="{width: header.w + 'px'}" class="inp">
<!--                            <span v-else>{{ header.name }}</span>-->
                        </th>
                        <th class="d-flex">
                            <div class="btn btn-primary sea" @click="searchProducts()">Искать</div>
                            <div class="btn btn-danger" @click="clearSearch()">X</div>

                        </th>
                        <th></th>
                    </draggable>
                    </thead>
                    <tbody>
                    <tr v-model="products" v-for="product in products">
                        <td :style="{'width': header.w + 'px'}" v-for="header in headers" v-if="header.public" :key="header.key">
                            <input v-model="checked[checkArray(product.id)].check" type="checkbox" @change="toggleCheck(product.id)"  v-if="header.key === 'checkbox'">
                            <span :style="{'width': header.w + 'px'}" v-if="header.key === 'image'">
                                <img v-if="product.image" :src="`/house/uploads/` + product.image + '?time=' + time " class="image">
                                <img v-else :src="`/house/uploads/veis.svg`" alt="" class="image">
                            </span>
                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'availability'">{{ availability(product[header.key]) }}</span>
                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'public'" :class="{'text-success': product[header.key] === 1, 'text-danger': product[header.key] === 0}">{{ public(product[header.key]) }}</span>
                            <span :style="{'width': header.w + 'px'}" v-else-if="header.key === 'type'" >{{ type(product[header.key]) }}</span>
                            <span v-else :style="{'width': header.w + 'px'}">{{ product[header.key]}}</span>
                        </td>
                        <td>
                            <span data-toggle="modal" data-target="#attributeModal" @click="getAttribute(product.id, product.category_id)" class="btn btn-primary">A</span>
                            <span data-toggle="modal" data-target="#imageModal" @click="getImage(product.id)" class="btn btn-primary">I</span>
                            <span data-toggle="modal" data-target="#optionModal" @click="getOption(product.id)"  class="btn btn-primary">O</span>
                            <span data-toggle="modal" data-target="#relationModal" @click="getRelation(product.id)" class="btn btn-primary">S</span>
                            <span data-toggle="modal" data-target="#dataModal" @click="getData(product.id)" class="btn btn-primary">D</span>
                            <a :href="'/product/' + product.slug_ru" class="btn btn-primary"><i class="far fa-eye"></i></a>
                        </td>
                        <td>
                            <p><a class="btn btn-warning" :href="`/admin-products/`+ product.id + `/edit`"><i
                                    class="fas fa-pencil-alt"></i></a></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item" @click="currentPage(current_page - 1)" :class="{disabled: (current_page - 1) < 0}">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li v-for="(page, key) in count_pages" class="page-item" @click="currentPage(key)" :class="{active : key === current_page}">
                            <a class="page-link">{{ page }}</a>
                        </li>
                        <li class="page-item" @click="currentPage(parseInt(current_page) + 1)" :class="{disabled: (parseInt(current_page) + 1) >= count_pages}">
                            <a class="page-link" aria-label="Next">

                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</temp>

<script>
    import draggable from "vuedraggable";
    import axios from "axios";

    export default {
        name: "table-column-example",
        display: "Table Column",
        order: 9,
        components: {
            draggable
        },
        props: [
            'prod',
            'settings',
            'count_p',
            'categories',
            'manufacturers'
        ],
        data() {
            return {
                headers: [
                    {key: 'checkbox', name: "Чекбокс", public: true, value: '', w: 30},
                    {key: 'image', name: "Изображение", public: true, value: '', w: 50},
                    {key: 'title_ru', name: "Название RU", public: true, value: '', w: 200},
                    {key: 'title_uk', name: "Название UK", public: true, value: '', w: 200},
                    {key: 'category_title', name: "Категория", public: true, value: '', w: 60},
                    {key: 'manufacturer_title', name: "Производитель", public: true, value: '', w: 70},
                    {key: 'vendor_code', name: "Артикул", public: true, value: '', w: 70},
                    {key: 'ude', name: "УДЕ", public: false, value: '', w: 50},
                    {key: 'course', name: "Курс", public: false, value: '', w: 50},
                    {key: 'price', name: "Цена", public: true, value: '', w: 80},
                    {key: 'percent', name: "%", public: true, value: '', w: 30},
                    {key: 'undiscounted', name: "Без скидки", public: true, value: '', w: 80},
                    {key: 'stock', name: "Акция", public: true, value: '', w: 50},
                    {key: 'availability', name: "Наличие", public: true, value: '', w: 90},
                    {key: 'tags', name: "Теги", public: true, value: '', w: 90},
                    {key: 'sort', name: "Сортировка", public: true, value: '', w: 90},
                    {key: 'lens_height', name: "В.линзы", public: false, value: '', w: 50},
                    {key: 'lens_width', name: "Ш.линзы", public: false, value: '', w: 50},
                    {key: 'bridge_width', name: "Ш.моста", public: false, value: '', w: 50},
                    {key: 'long_arms', name: "Д.дужки", public: false, value: '', w: 50},
                    {key: 'frame_width', name: "Ш.оправы", public: false, value: '', w: 50},
                    {key: 'type', name: "Тип", public: true, value: '', w: 90},
                    {key: 'public', name: "Отображение", public: false, value: '', w: 70},
                ],
                dragging: false,
                hidden: [],
                allChecked: false,
                checked: [],
                check: 0,
                checkbox: 'checkbox',
                selected_attr: [],
                default_category: 0,
                product_id: 0,
                selected_options: [],
                options: [],
                product: [],
                categories_json: [],
                manufacturers: [],
                suppliers: [],
                product_categories: [],
                images: [],
                products: this.prod,
                ude: null,
                course: null,
                price: null,
                percent: null,
                undiscounted: null,
                relations: [],
                count_products: this.count_p,
                sort_count: 10,
                count_pages: 0,
                current_page: 0,
                skip: 0,
                time: Math.ceil(Math.random() * 10000),
                select_headers: [],
                product_image: ''
            }
        },
        watch:{
            products(val){
                this.products = val;
                this.checked = [];
                for(let i = 0;i < this.products.length;i++){
                    this.checked.push({id:this.products[i].id, check: false});
                }
            }
        },
        methods: {
            saveOption: function () {
                this.$root.$refs.saveOption.saveValue();
            },

            saveAttr: function () {
                this.$root.$refs.saveAttribute.saveAttr();
            },

            saveDataComp: function () {
                this.$root.$refs.dataSave.saveData();
            },

            saveImage: function () {
                this.$root.$refs.imageSave.saveImages();
            },
            relSaveData: function () {
                this.$root.$refs.relSave.saveRelation();
            },



            availability: function (data) {
                if (data === 1) {
                    return 'В наличии';
                } else if (data === 2) {
                    return 'Ожидается';
                } else{
                    return 'Нет в наличии';
                }
            },
            public: function (data) {
                if (data === 1) {
                    return 'Включено'
                } else {
                    return 'Отключено'
                }
            },
            changePublic: function (key) {
                this.headers[key].public = !this.headers[key].public;
            },
            toggleCheck: function (id) {

                this.checked[this.checked.findIndex(x => x.id === id)].check = this.checked[this.checked.findIndex(x => x.id === id)].check;
                this.allChecked = false;

            },
            allCheck: function () {

                for(let i = 0;i < this.checked.length;i++){
                    this.checked[i].check = this.allChecked;
                }
            },
            checkArray: function (id) {

                for (let i = 0; i < this.checked.length; i++) {
                    if (this.checked[i].id === id) {
                        return i;
                    }
                }
            },
            getAttribute: function (id, category_id) {
                axios.post('/api/fastEdit/getAttributes', {product_id: id}).then((res) => {
                    if(res.data !== null){
                        this.selected_attr = res.data.selected_attr;
                    }else{
                        this.selected_attr = [];
                    }
                    this.product = res.data.product;
                });
                this.default_category = category_id;

                this.product_id = id;
            },
            getOption: function (id) {
                this.product_id = id;
                axios.post('/api/fastEdit/getOption').then((res) => {
                    this.options = res.data;
                });

                axios.post('/api/fastEdit/getSelectedOption', {product_id: id}).then((res) => {
                    this.selected_options = res.data;
                });

            },
            getImage: function(id){
                this.product_id = id;
                axios.post('/api/fastEdit/getImage', {product_id: id}).then((res) => {
                    this.images = res.data;
                });
            },
            getData: function (id) {
                this.product_id = id;

                axios.post('/api/fastEdit/getData', {product_id: id}).then((res) => {
                    this.product = res.data.product;
                    this.categories_json = res.data.categories_json;
                    this.manufacturers = res.data.manufacturers;
                    this.suppliers = res.data.suppliers;
                    this.product_categories = res.data.product_categories;
                });

            },
            getGroupData: function () {

                axios.post('/api/fastEdit/getGroupData').then((res) => {
                    this.categories_json = res.data.categories_json;
                    this.manufacturers = res.data.manufacturers;
                    this.suppliers = res.data.suppliers;
                });

            },
            getRelation: function(id){

                this.product_id = id;
                axios.post('/api/fastEdit/getRelation', {product_id: id}).then((res) => {
                    this.relations = res.data;
                });

            },
            replicateProduct: function () {

                axios.post('/api/fastEdit/replicateProduct', {select_product: this.selectedProduct()}).then((res) => {
                    this.currentPage(0);
                    /*this.products = res.data;
                    this.allChecked = false;*/
                });

            },
            deleteProduct: function(){
                axios.post('/api/fastEdit/deleteProduct', {select_product: this.selectedProduct()}).then((res) => {
                    this.products = res.data;
                    this.currentPage(0);
                });
            },
            selectedProduct: function () {
                let select_product = [];
                for(let i = 0;i < this.checked.length;i++){
                    if(this.checked[i].check === true){
                        select_product.push(this.checked[i]);
                    }
                }
                return select_product;
            },
            changePrice: function () {
                if(this.ude !== null && this.course !== null){
                    this.price = Math.ceil(this.ude * this.course);
                }

                if(this.percent !== null && this.price !== null){
                    this.undiscounted = Math.ceil((this.price / (100 - this.percent)) * 100);
                }

            },
            saveGroupPrice: function () {
                axios.post('/api/fastEdit/groupPrice', {select_products: this.selectedProduct(), ude: this.ude, course: this.course, price: this.price, percent: this.percent, undiscounted: this.undiscounted}).then((res) => {
                    let select_header = [];

                    this.headers.forEach((item) => {
                        if(item.value){
                            select_header.push(item);
                        }
                    });
                    if(select_header.length > 0){
                        this.searchProducts();
                    }else{
                        this.clearSearch();
                    }
                });
            },
            searchProducts: function () {

                this.headers.forEach((item) => {
                    if(item.value){
                        this.select_headers.push(item);
                    }
                });
                this.countPages(0);

            },
            countPages:function (key){
                this.count_pages = Math.ceil(this.count_products / this.sort_count);

                this.currentPage(key);
            },
            currentPage:function (key){
                this.current_page = key;
                this.skip = this.sort_count * key;
                this.search();
            },
            search: function(){
                axios.post('/api/filter/searchTableProduct', {headers: this.select_headers, skip: this.skip, take: this.sort_count}).then((res) => {
                    this.products = res.data.products;
                    this.count_products = res.data.count_p;
                    this.count_pages = Math.ceil(this.count_products / this.sort_count);
                });
                this.allChecked = false;
            },
            clearSearch: function () {
                this.headers.forEach((item) => {
                    item.value = '';
                });
                axios.post('/api/filter/getAllProducts').then((res) => {
                    this.products = res.data;
                    this.count_products = this.products.length;
                    this.countPages(0);
                });
                this.allChecked = false;
            },
            type: function (data) {
                if(data === null || data === 'null'){
                    return 'Обычный';
                }else if(data === 'recommended'){
                    return 'Рекомендуемый';
                }else if(data === 'hit'){
                    return 'Хит продаж';
                }else if(data === 'new'){
                    return 'Новинка';
                }else if(data === 'sell'){
                    return 'Обмен';
                }
            }

        },
        mounted() {
            this.$root.$on('groupPrice', (data) => {
                this.countPages(this.current_page);
            });

            for(let i = 0;i < this.prod.length;i++) {
                this.checked.push({id: this.prod[i].id, check: false});
            }
            this.count_pages = Math.ceil(this.count_products / 10);
        }
    };
</script>
<style scoped>
    *:focus
    {
        outline: none;
    }
    .sea {
        width: 200px;
    }

    .header {
        cursor: pointer;
    }

    li
    {
        list-style: none;
    }
    .image
    {
        width: 85px;
    }
    .inp
    {
        width: 100px;
        font-size: 11px;
        color: black;
    }
    .top
    {
        border-radius: 5px;
    }
    .top i
    {
        font-size: 21px;
        color: black;
    }
    .top i:hover
    {
        cursor: pointer;
    }
</style>