import Vue from 'vue'
import Vuex from "vuex";
import division from './module/division'
import auth from "./module/auth";
import global from "./module/global";
Vue.use(Vuex)


export default new Vuex.Store({
    state: {
        isActive:{
            name:'',
            status: false
        },
    },
    mutations: {

        setIsActive(state,status){
            state.isActive.name = status.name
            state.isActive.status = status.status
        },
    },
    actions:{

        setIsActive({commit,state},payload){
            commit('setIsActive',payload)
        }
    },
    modules:{
        division:division,
        auth:auth,
        global:global
    }
})
