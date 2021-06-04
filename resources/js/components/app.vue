<template>
    <div class="container-fluid">
        <admin-head></admin-head>
        <div class="row">
            <div class="col-2 ">
                <div class="side-bar">
                    <h4>পরামর্শ ব্যবস্থাপনা </h4>
                    <router-link to="/division"><p class="text-uppercase">Division</p></router-link>
                    <router-link to="/district"><p class="text-uppercase">District</p></router-link>
                    <router-link to="/upazila"><p class="text-uppercase">Upazila</p></router-link>
                </div>
            </div>
            <div class="col-10">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import adminHead from './layout/header'
    // import adminSidebar from './layout/sidebar'
    import adminBody from "./layout/body";
    import {mapState,mapActions} from 'vuex'
    export default {
        name: "app.vue",

        // created() {
        //     this.setAdminData()
        // },
        // methods:{
        //     ...mapActions(['setAdminData'])
        // },
        components:{
            adminHead:adminHead,
            // adminSidebar:adminSidebar,
            // adminBody:adminBody,
        }
    }
</script>

<style scoped>

</style>
