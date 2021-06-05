import Vue from "vue";
import VueRouter from "vue-router";
import bodyComponent from "../components/layout/body"
import divisionComponent from "../views/division/divisionComponent";
import TestComponent from "../components/resource/TestComponent";
import districtComponent from "../views/district/districtComponent";
Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes : [
        {
            path:'/spa/',
            component: bodyComponent,
            name:'home'
        },
        {
            path:'/spa/division',
            component: divisionComponent,
            name:'division'
        },
        {
            path:'/spa/upazila',
            component: TestComponent,
            name:'upazila'
        }
    ]
})
