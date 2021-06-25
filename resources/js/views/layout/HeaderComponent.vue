<template>
    <div class="row header">
        <div class="col-2 header_logo">
            <img :src="'./storage/logo/bdlogo.png'" alt="Logo Bangladesh" width="100px" height="100px">
        </div>
        <div class="col-7 header_middle">
            <h1 class="pb-2">বাংলাদেশ কৃষি আবহাওয়া তথ্য পোর্টাল</h1>
            <p>কৃষি আবহাওয়া তথ্য পদ্ধতি উন্নতকরণ প্রকল্প</p>
            <p>কৃষি সম্প্রসারণ অধিদপ্তর</p>
        </div>
        <div class="col-3 header_right">
            <div class="header_right-part_top">
                <p><span>ইংলিশ</span>
                    <span class="pl-4">বাংলা</span></p>
            </div>
            <div class="header_right-part_bottom">
                <p>সোমবার মার্চ ০৪, ২০১৯</p>
                <p>ব্যবহারকারিঃ জনাব এসান উদ্দিন আহমেদ</p>
                <p>(অ্যাডমিনিস্ট্রেটর) । <a href="" @click.prevent="Logout"> লগ আউট</a></p>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapState, mapActions, mapMutations} from 'vuex'
    import router from "../../router/router";
    export default {
        computed:{
        },
        methods:{
            ...mapActions('auth',['LogOut']),
            ...mapMutations('global',['SET_IS_ACTIVE']),
            Logout(){
                router.push('/login')
                this.LogOut()
                this.SET_IS_ACTIVE({modal: false,name: 'login'})
            }
        }
    }
</script>

<style scoped>

</style>
