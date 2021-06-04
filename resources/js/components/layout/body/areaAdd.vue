<template>
    <div>
        <form @submit.prevent="addArea">
            <div class="row sub_table-body">
                <area-subtable>
                    <td slot="id"><input type="text" v-model="areaDataToInsert.AreaTypeId"></td>
                    <td slot="code"><input type="text" v-model="areaDataToInsert.AreaTypeCode"></td>
                    <td slot="nameEnglish"><input type="text" v-model="areaDataToInsert.AreaTypeNameEnglish"></td>
                    <td slot="nameBangla"><input type="text" v-model="areaDataToInsert.AreaTypeNameBangla"></td>
                    <td slot="note"><input type="text" v-model="areaDataToInsert.Note"></td>
                    <td slot="status"><input type="text" v-model="areaDataToInsert.RecordStatus"></td>
                    <td slot="version"><input type="text" v-model="areaDataToInsert.RecordVersion"></td>
                </area-subtable>

            </div>
            <div class=" row sub_table-bottom">
                <div class="row sub_table-button">
                    <div class="col-8"><p>Messages: {{notify}}</p></div>
                    <div class="col-4">
                        <input type="submit" value="অ্যাড">
                        <button @click="hideSubTable">পিছনে</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import areaSubtable from "../template/divisionSubSection";
    export default {
        props:{
            mainTable:Function,
            hideSubTable:Function
        },
        data(){
            return{
                notify:'',
                areaDataToInsert:{
                    AreaTypeId:'',
                    AreaTypeCode:'',
                    AreaTypeNameEnglish:'',
                    AreaTypeNameBangla:'',
                    Note:'',
                    RecordStatus:'',
                    RecordVersion:'',
                },
            }
        },
        components:{
          areaSubtable:areaSubtable
        },
        methods:{
            addArea(event){
                var info = this.areaDataToInsert;
                axios.post('/areatype/create',info).then((response)=>{
                    this.notify = response.data;
                    info.AreaTypeId = info.AreaTypeCode = info.AreaTypeNameBangla = info.AreaTypeNameEnglish = info.Note = info.RecordStatus = info.RecordVersion = '';
                    this.mainTable()
                })
            }
        }
    }
</script>

<style scoped>

</style>
