<template>
    <div>
        <login-component v-if="!token && (is_active.name==='login')"></login-component>
        <register-component v-if="!token && (is_active.name==='register')"></register-component>
        <app-layout v-if="token"></app-layout>
    </div>

</template>

<script>

    import LoginComponent from "../views/auth/LoginComponent";
    import RegisterComponent from "../views/auth/RegisterComponent";
    import AppLayout from "../views/layout/AppLayout";
    // import adminSidebar from './layout/sidebar'
    import adminBody from "./layout/body";
    import {mapState,mapMutations,mapActions} from 'vuex'
    export default {
        name: "app.vue",
        computed:{
            ...mapState('auth',['token']),
            ...mapState('global',['is_active'])
        },
        created() {
            if (!localStorage.getItem('token')){
                this.SET_IS_ACTIVE({
                    modal: true,
                    name: 'login'
                })
            }else {
                this.SET_TOKEN(localStorage.getItem('token'))
            }

        },
        methods:{
            ...mapMutations('global',['SET_IS_ACTIVE']),
            ...mapMutations('auth',['SET_TOKEN'])
        },


        components:{
            LoginComponent,
            AppLayout,
            RegisterComponent
        }
    }
</script>

<style scoped>

</style>
