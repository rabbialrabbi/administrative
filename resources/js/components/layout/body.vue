<template>
    <div>
    <div class="row body_top">
        <div class="col-2"><h3>প্রশাসনিক</h3> </div>
        <div class="col-1 clone">:</div>
        <div class="col-8"><h3>এলাকা</h3></div>
    </div>
    <div class="row body_search-panel">
        <div class="col-8"></div>
        <div class="col-4">
            <input type="text">
            <input type="text">
            <span class="dropdownIcon">...</span>
        </div>
    </div>

    <div id="indexData" class="row body_bottom">

        <table>
            <tr>
                <th>ক্রমিক</th>
                <th>আই ডি</th>
                <th>কোড</th>
                <th>নাম (ইংলিশ)</th>
                <th>নাম (বাংলা)</th>
                <th>নোট</th>
                <th>রেকর্ড স্ট্যাটাস</th>
                <th>রেকর্ড ভার্সন</th>
                <th>দেখা</th>
            </tr>
            <tr class="divi-table" v-for="area in areaList">
                <td>{{i}}</td>
                <td>{{area.AreaTypeId}}</td>
                <td>{{area.AreaTypeCode}}</td>
                <td>{{area.AreaTypeNameBangla}}</td>
                <td>{{area.AreaTypeNameEnglish}}</td>
                <td>{{area.Note}}</td>
                <td>{{area.RecordStatus}}</td>
                <td>{{area.RecordVersion}}</td>
                <td><i class="fas fa-eye" @click="loadSubTable(area.AreaTypeCode)"></i></td>
            </tr>
            </table>
    </div>

    <div class="row body_pagination">
        <div class="col-8 paginator js-paginator d-flex justify-content-center"></div>
        <div class="col-4">
            <button @click="loadAreaInput">অ্যাড</button>
        </div>
    </div>

    <div id="sub_input" v-if="isSubTableView">
        <div class="row body_top">
            <div class="col-2"><h3>প্রশাসনিক</h3></div>
            <div class="col-1 clone">:</div>
            <div class="col-8"><h3>এলাকা</h3></div>
        </div>



        <div v-if="isAreaView">
            <div class="row sub_table-body">
                <table v-for="area in subTableList" v-model="areaDetails=area">
                    <tr>
                        <th>এলাকা ধরন আই ডি</th>
                        <td class="clone">:</td>
                        <td>{{area.AreaTypeId}}</td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন কোড</th>
                        <td class="clone">:</td>
                        <td>{{area.AreaTypeCode}}</td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন নাম (ইংলিশ)</th>
                        <td class="clone">:</td>
                        <td>{{area.AreaTypeNameEnglish}}</td>
                    </tr>
                    <tr>
                        <th>এলাকা ধরন নাম (বাংলা)</th>
                        <td class="clone">:</td>
                        <td>{{area.AreaTypeNameBangla}}</td>
                    </tr>
                    <tr>
                        <th>নোট</th>
                        <td class="clone">:</td>
                        <td>{{area.Note}}</td>
                    </tr>
                    <tr>
                        <th>রেকর্ড স্ট্যাটাস</th>
                        <td class="clone">:</td>
                        <td>{{area.RecordStatus}}</td>
                    </tr>
                    <tr>
                        <th>রেকর্ড ভার্সন</th>
                        <td class="clone">:</td>
                        <td>{{area.RecordVersion}}</td>
                    </tr>

                </table>
            </div>
            <div class=" row sub_table-bottom">
                <div class="row sub_table-button">
                    <div class="col-8"><p>Message: <span id="message"></span></p></div>
                    <div class="col-4">
                        <button id="editDivision" @click="loadAreaEdit()">এডিট</button>
                        <button id="deleteDivision" key=${AreaType[0].AreaTypeCode}>ডিলিট</button></div>
                </div>
            </div>
        </div>

        <div v-if="isAreaAdd">
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

        <div v-if="isAreaEdit">
            <form id="saveDivision" action="">
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
                            <td><input type="text" name="AreaTypeCode" :value="areaDetails.AreaTypeCode"></td>
                        </tr>
                        <tr>
                            <th>এলাকা ধরন নাম (ইংলিশ)</th>
                            <td class="clone">:</td>
                            <td><input type="text" name="AreaTypeNameEnglish" :value="areaDetails.AreaTypeNameEnglish"></td>
                        </tr>
                        <tr>
                            <th>এলাকা ধরন নাম (বাংলা)</th>
                            <td class="clone">:</td>
                            <td><input type="text" name="AreaTypeNameBangla" :value="areaDetails.AreaTypeNameBangla"></td>
                        </tr>
                        <tr>
                            <th>নোট</th>
                            <td class="clone">:</td>
                            <td><input type="text" name="Note" :value="areaDetails.Note"></td>
                        </tr>
                        <tr>
                            <th>রেকর্ড স্ট্যাটাস</th>
                            <td class="clone">:</td>
                            <td><input type="text" name="RecordStatus" :value="areaDetails.RecordStatus"></td>
                        </tr>
                        <tr>
                            <th>রেকর্ড ভার্সন</th>
                            <td class="clone">:</td>
                            <td><input type="text" name="RecordVersion" :value="areaDetails.RecordVersion"></td>
                        </tr>
                    </table>
                </div>
                <div class=" row sub_table-bottom">
                    <div class="row sub_table-button">
                        <div class="col-8"><p>Message: <span></span></p></div>
                        <div class="col-4">
                            <input type="submit" name="submit" value="আপডেট">
                            <button onclick="clearSubTable(event)">পিছনে</button>
                        </div>
                    </div>
                    </div>
            </form>
        </div>


    </div>
</div>
</template>

<script>
    import $ from 'jquery'
    import areaView from "./body/areaView";
    import paginator from "../resource/pagination";
    export default {
        data(){
            return {
                i:[],
                areaList:'',
                isAreaView:false,
                isAreaAdd:false,
                isAreaEdit:false,
                subTableList:'',
                isSubTableView:false,
                areaDetails:'',
                areaDataToInsert:{
                    AreaTypeId:'',
                    AreaTypeCode:'',
                    AreaTypeNameEnglish:'',
                    AreaTypeNameBangla:'',
                    Note:'',
                    RecordStatus:'',
                    RecordVersion:'',
                },
                notify:''
            }
        },
        components:{
            areaView:areaView
        },
        created() {
            this.mainTable()
        },

        methods:{
            mainTable(){
                axios.get('/areatype/'+0).then((response)=>{
                    this.areaList = response.data.tableData
                })
            },
            loadSubTable(key){
                this.isSubTableView = true
                this.isAreaAdd = false
                this.isAreaEdit=false
                this.isAreaView = true
                axios.get('/areatype/show/'+key).then((response)=>{
                    this.subTableList = response.data
                })
            },
            loadAreaInput(){
                this.isSubTableView = true
                this.isAreaView = false
                this.isAreaEdit=false
                this.isAreaAdd = true
            },
            loadAreaEdit(){
                this.isSubTableView = true
                this.isAreaView = false
                this.isAreaAdd = false
                this.isAreaEdit=true
            },
            addArea(event){
                var info = this.areaDataToInsert
                axios.post('/areatype/create',info).then((response)=>{
                    this.notify = response.data
                    info.AreaTypeId = info.AreaTypeCode = info.AreaTypeNameBangla = info.AreaTypeNameEnglish = info.Note = info.RecordStatus = info.RecordVersion = ''
                    this.mainTable()
                })
            }
        },
    }
</script>

<style scoped>

</style>
