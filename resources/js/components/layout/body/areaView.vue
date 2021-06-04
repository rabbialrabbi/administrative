<template>
    <div>
        <div class="row sub_table-body">
            <area-subtable>
                <td slot="id">{{areaDetails.AreaTypeId}}</td>
                <td slot="code">{{areaDetails.AreaTypeCode}}</td>
                <td slot="nameEnglish">{{areaDetails.AreaTypeNameEnglish}}</td>
                <td slot="nameBangla">{{areaDetails.AreaTypeNameBangla}}</td>
                <td slot="note">{{areaDetails.Note}}</td>
                <td slot="status">{{areaDetails.RecordStatus}}</td>
                <td slot="version">{{areaDetails.RecordVersion}}</td>
            </area-subtable>
        </div>
        <div class=" row sub_table-bottom">
            <div class="row sub_table-button">
                <div class="col-8"><p>Message: {{notify}}</p></div>
                <div class="col-4">
                    <button id="editDivision" @click="loadAreaEdit()">এডিট</button>
                    <button id="deleteDivision" @click="destory()">ডিলিট</button></div>
            </div>
        </div>
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
        props:{
            areaDetails:{
                default:{}
            },
            loadAreaEdit:Function,
            hideSubTable:Function,
            mainTable:Function
        },
        components:{
            areaSubtable:areaSubtable
        },
        methods:{
            destory(){
                if(confirm("Want To Delete the Data")){
                    axios.delete('/areatype/'+this.areaDetails.AreaTypeCode).then((response)=>{
                        this.mainTable();
                        this.hideSubTable()
                    })
                }else{
                    this.notify = "Cancel Delete"
                }

            }
        }
    }
</script>

<style scoped>

</style>
