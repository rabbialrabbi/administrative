<template>
    <div>
        <form @submit.prevent="addArea">
            <div class="row sub_table-body">
                <table>
                    <tr>
                        <th>এলাকা ধরন আই ডি</th>
                        <td class="clone">:</td>
                        <td><input type="text" v-model="areaDataToInsert.AreaTypeId"></td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন কোড</th>
                        <td class="clone">:</td>
                        <td><input type="text" v-model="areaDataToInsert.AreaTypeCode"></td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন নাম (ইংলিশ)</th>
                        <td class="clone">:</td>
                        <td><input type="text" v-model="areaDataToInsert.AreaTypeNameEnglish"></td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন নাম (বাংলা)</th>
                        <td class="clone">:</td>
                        <td><input type="text" v-model="areaDataToInsert.AreaTypeNameBangla"></td>
                    </tr>
                    <tr>
                        <th>নোট</th>
                        <td class="clone">:</td>
                        <td><input type="text" v-model="areaDataToInsert.Note"></td>
                    </tr>
                    <tr>
                        <th>রেকর্ড স্ট্যাটাস</th>
                        <td class="clone">:</td>
                        <td><input type="text" v-model="areaDataToInsert.RecordStatus"></td>
                    </tr>
                    <tr>
                        <th>রেকর্ড ভার্সন</th>
                        <td class="clone">:</td>
                        <td><input type="text" v-model="areaDataToInsert.RecordVersion"></td>
                    </tr>
                </table>

            </div>
            <div class=" row sub_table-bottom">
                <div class="row sub_table-button">
                    <div class="col-8"><p>Messages: {{notify}}</p></div>
                    <div class="col-4">
                        <input type="submit" value="অ্যাড">
                        <button onclick="clearSubTable(event)">পিছনে</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    let mainTable;
    export default {
        props:{
            mainTable:Function,
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
