<template>
    <div>
        <form id="saveDivision" @submit.prevent="editSubmit">
            <div class="row sub_table-body">
                <table>
                    <tr>
                        <th>এলাকা ধরন আই ডি</th>
                        <td class="clone">:</td>
                        <td><input type="text" name="AreaTypeId" :value="areaDetails.AreaTypeId"></td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন কোড</th>
                        <td class="clone">:</td>
                        <td><input type="text" name="AreaTypeCode" v-model="areaDetails.AreaTypeCode"></td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন নাম (ইংলিশ)</th>
                        <td class="clone">:</td>
                        <td><input type="text" name="AreaTypeNameEnglish" v-model="areaDetails.AreaTypeNameEnglish"></td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন নাম (বাংলা)</th>
                        <td class="clone">:</td>
                        <td><input type="text" name="AreaTypeNameBangla" v-model="areaDetails.AreaTypeNameBangla"></td>
                    </tr>
                    <tr>
                        <th>নোট</th>
                        <td class="clone">:</td>
                        <td><input type="text" name="Note" v-model="areaDetails.Note"></td>
                    </tr>
                    <tr>
                        <th>রেকর্ড স্ট্যাটাস</th>
                        <td class="clone">:</td>
                        <td><input type="text" name="RecordStatus" v-model="areaDetails.RecordStatus"></td>
                    </tr>
                    <tr>
                        <th>রেকর্ড ভার্সন</th>
                        <td class="clone">:</td>
                        <td><input type="text" name="RecordVersion" v-model="areaDetails.RecordVersion"></td>
                    </tr>
                </table>
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
    export default {
        data(){
            return{
                notify:''
            }
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
