/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');

window.Vue = require('vue');

Vue.component('search-component', require('./components/SearchComponent.vue').default);
Vue.component('carousel-component', require('./components/CarouselComponent.vue').default);
Vue.component('design-carousel-component', require('./components/design/CarouselComponent.vue').default);
Vue.component('design-carousel-component-design', require('./components/design/CarouselComponentDesign.vue').default);
Vue.component('design-range-component', require('./components/design/RangeComponent').default);
Vue.component('design-product-gloves-carousel-component', require('./components/design/GlovesProductCarouselComponent').default);
Vue.component('manufacturer-component', require('./components/ManufacturerComponent.vue').default);
Vue.component('categories-component', require('./components/CategoriesComponent.vue').default);
Vue.component('viewed-component', require('./components/ViewedComponent.vue').default);
Vue.component('relations-component', require('./components/RelationsComponent.vue').default);
Vue.component('universal-component', require('./components/UniversalComponent.vue').default);
Vue.component('module-blog-component', require('./components/BlogComponent.vue').default);

//admin
Vue.component('select-component', require('./components/admin/products/Select.vue').default);
Vue.component('attributes-component', require('./components/admin/products/Attributes.vue').default);
Vue.component('category-component', require('./components/admin/products/Category.vue').default);
Vue.component('drop-down-component', require('./components/DropDownComponent.vue').default);
Vue.component('table-products-component', require('./components/admin/products/TableProducts.vue').default);
Vue.component('values-option-component', require('./components/admin/products/ValuesOption.vue').default);
Vue.component('option-component', require('./components/admin/products/Option.vue').default);
Vue.component('data-component', require('./components/admin/products/Data.vue').default);
Vue.component('group-data-component', require('./components/admin/products/GroupData').default);
Vue.component('relation-component', require('./components/admin/products/Relation.vue').default);
Vue.component('gallery-component', require('./components/admin/products/Gallery.vue').default);
Vue.component('order-component', require('./components/admin/order/Order').default);
Vue.component('blog-component', require('./components/admin/blog/Blog').default);
Vue.component('group-attributes-component', require('./components/admin/attribute/GroupAttributes').default);
Vue.component('editor-component', require('./components/admin/Editor').default);
Vue.component('datetime-component', require('./components/admin/DateTime').default);
Vue.component('color-component', require('./components/admin/Color').default);
Vue.component('statistics-component', require('./components/admin/Statistics').default);
//site
Vue.component('site-category-component', require('./components/site/Category').default);
Vue.component('site-product-component', require('./components/site/Product').default);
Vue.component('site-cart-component', require('./components/site/Cart').default);
Vue.component('site-order-component', require('./components/site/Order').default);
Vue.component('site-nav-cart-component', require('./components/site/NavCart').default);
Vue.component('site-contact-component', require('./components/site/Contact').default);
// Vue.component('site-test-component', require('./components/site/Test').default);

// Пользовательский сайт:
Vue.component('site-catalog-component', require('./components/site/Catalog').default);


import store from '../assets/js/store.js';
const app = new Vue({
    el: '#app',
    store: new Vuex.Store(store)
});



