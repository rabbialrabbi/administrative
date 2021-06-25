require('./bootstrap');
import administrativeArea from './components/app';
import router from "./router/router";
import store from "./store/index";
import auth from "./store/module/auth";

import {ValidationProvider, ValidationObserver} from "vee-validate/dist/vee-validate.full.esm";

window.Vue = require('vue');

Vue.component('ValidationObserver',ValidationObserver)
Vue.component('ValidationProvider',ValidationProvider)



router.beforeEach(function (to,from,next){
    console.log(to.meta.isAuth)
    if( !to.meta.isAuth || to.name === 'login'){
        next()
    }else {
        if(!localStorage.getItem('token')){
            next('/login')
        }
        next()
    }

})




const app = new Vue({
    el: '#app',
    router,
    store,
    components:{
        administrativeArea:administrativeArea,
    }
});
