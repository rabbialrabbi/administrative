<template>
    <div>
        click Section to see the details
    </div>
</template>

<script>
    // import areaView from "./body/areaView";
    // import areaAdd from "./body/areaAdd";
    // import areaEdit from "./body/areaEdit";
    import divisionSubSection from "./template/divisionSubSection";
    import {mapState, mapActions, mapMutations} from 'vuex'

    export default {
        data() {
            return {
                i: [],
                currentComponent: false,
                areaList: '',
                isAreaView: false,
                isAreaAdd: false,
                isAreaEdit: false,
                subTableList: '',
                isSubTableView: false,
                areaDetails: '',
                notify: '',
            }
        },

    }
</script>

<style scoped>

</style>
