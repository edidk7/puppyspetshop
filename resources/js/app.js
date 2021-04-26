require('./bootstrap');

import Vue from 'vue';

import Vuetify from 'vuetify';

import es from 'vuetify/src/locale/es.ts';
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'

import ProductPrincipal from './components/ProductPrincipal';
import ProductSale from './components/ProductSale';

import ExampleComponent from './components/ExampleComponent';

Vue.use(Vuetify);

const vuetify = new Vue({
    el: '#app',
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
        'producto-principal': ProductPrincipal,      
        'product-sale': ProductSale,        
        // 'login-component': LoginComponent,
        // 'company-table-component': CompanyTableComponent,
        // 'product-table-component': ProductTableComponent,
        // 'product-form-component': ProductFormComponent,
    }
});
