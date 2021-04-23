require('./bootstrap');

import Vue from 'vue';

import Vuetify from 'vuetify';

import es from 'vuetify/src/locale/es.ts';
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'

import LoginComponent from './components/admin/LoginComponent.vue';
// import CompanyTableComponent from './components/admin/CompanyTableComponent.vue';
// import ProductTableComponent from './components/admin/ProductTableComponent.vue';
// import ProductFormComponent from './components/admin/ProductFormComponent.vue';

import ExampleComponent from './components/ExampleComponent';

Vue.use(Vuetify);

const vuetify = new Vue({
    el: '#admin',
    data: () => ({
        drawer: null
    }),
    vuetify: new Vuetify({
        icons: {
            iconFont: 'mdi'
        },
        lang: {
            locales: { es },
            current: 'es'
        }
    }),
    components: {
        'example-component': ExampleComponent,
        'login-component': LoginComponent,
        // 'company-table-component': CompanyTableComponent,
        // 'product-table-component': ProductTableComponent,
        // 'product-form-component': ProductFormComponent,
    }
});
