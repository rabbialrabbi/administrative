<template>
    <div class="container-fluid">
        <header-component></header-component>
        <div class="row">
            <div class="col-2 ">
                <div class="side-bar">
                    <h4>পরামর্শ ব্যবস্থাপনা </h4>
                    <router-link to="/spa/division"><p class="text-uppercase">Division</p></router-link>
                    <router-link to="/spa/district"><p class="text-uppercase">District</p></router-link>
                    <router-link to="/spa/upazila"><p class="text-uppercase">Upazila</p></router-link>
                </div>
            </div>
            <div class="col-10">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import HeaderComponent from "./HeaderComponent";

    export default {
        name: "AppLayout",
        components:{
            HeaderComponent
        }
    }
</script>

<style scoped>

</style>
