<template>
    <div>
        <form id="saveDivision" @submit.prevent="editSubmit">
            <div class="row sub_table-body">

                <area-subtable>
                    <td slot="id"><input type="text" name="AreaTypeId" :value="areaDetails.AreaTypeId"></td>
                    <td slot="code"><input type="text" name="AreaTypeCode" v-model="areaDetails.AreaTypeCode"></td>
                    <td slot="nameEnglish"><input type="text" name="AreaTypeNameEnglish" v-model="areaDetails.AreaTypeNameEnglish"></td>
                    <td slot="nameBangla"><input type="text" name="AreaTypeNameBangla" v-model="areaDetails.AreaTypeNameBangla"></td>
                    <td slot="note"><input type="text" name="Note" v-model="areaDetails.Note"></td>
                    <td slot="status"><input type="text" name="RecordStatus" v-model="areaDetails.RecordStatus"></td>
                    <td slot="version"><input type="text" name="RecordVersion" v-model="areaDetails.RecordVersion"></td>
                </area-subtable>

            </div>
            <div class=" row sub_table-bottom">
                <div class="row sub_table-button">
                    <div class="col-8"><p>Message: {{notify}}</p></div>
                    <div class="col-4">
                        <input type="submit" name="submit" value="আপডেট">
                        <button @click="loadAreaView">পিছনে</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import areaSubtable from "../template/divisionSubSection";

    export default {
        data(){
            return{
                notify:''
            }
        },
        components:{
            areaSubtable:areaSubtable
        },
        props:{
            areaDetails:{},
            mainTable:Function,
            loadSubTable:Function
        },
        methods:{
            editSubmit(){
                var info = this.areaDetails;
                axios.patch('/areatype/update',info).then((response)=>{
                    this.notify = response.data;
                    this.mainTable()


                })
            },
            loadAreaView(){
                this.loadSubTable(this.areaDetails.AreaTypeCode)
            }
        }
    }
</script>

<style scoped>

</style>
