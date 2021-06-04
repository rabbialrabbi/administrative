require('./bootstrap');
import administrativeArea from './components/app';
import router from "./router/router";
import store from "./store/index";

import {ValidationProvider, ValidationObserver} from "vee-validate/dist/vee-validate.full.esm";

window.Vue = require('vue');

Vue.component('ValidationObserver',ValidationObserver)
Vue.component('ValidationProvider',ValidationProvider)

import Vuex from 'vuex'






const app = new Vue({
    el: '#app',
    router,
    store,
    components:{
        administrativeArea:administrativeArea
    }
});
