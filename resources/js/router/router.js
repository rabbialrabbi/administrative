import Vue from "vue";
import VueRouter from "vue-router";
// import bodyComponent from "../components/layout/body"
import RegisterComponent from "../views/auth/RegisterComponent";
import LoginComponent from "../views/auth/LoginComponent";
import divisionComponent from "../views/division/divisionComponent";
import TestComponent from "../components/resource/TestComponent";
import districtComponent from "../views/district/districtComponent";
Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes : [
        {
            path:'/login',
            component: LoginComponent,
            name:'login',
            meta:{
                title:'Login'
            }
        },
        {
            path:'/spa/division',
            component: divisionComponent,
            name:'division',
            meta:{
                title:'Login',
                isAuth: true
            }
        },
        {
            path:'/spa/upazila',
            component: TestComponent,
            name:'upazila',
            meta:{
                title:'Login'
            }
        }
    ]
})
