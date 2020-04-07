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

        <component :is="currentComponent" v-if="currentComponent" v-bind="loadProps"></component>


<!--        <area-view-->
<!--            :showCondition="isAreaView"-->
<!--            :areaDetails="areaDetails"-->
<!--            :loadAreaEdit="loadAreaEdit"-->
<!--        v-bind="test">-->
<!--        </area-view>-->

<!--        <area-add-->
<!--            :mainTable="mainTable">-->
<!--        </area-add>-->

<!--        <area-edit-->
<!--            :showCondition="isAreaEdit"-->
<!--            :areaDetails="areaDetails"-->
<!--            :mainTable="mainTable"-->
<!--            :loadSubTable="loadSubTable">-->
<!--        </area-edit>-->

    </div>
</div>
</template>

<script>
    import $ from 'jquery'
    import paginator from "../resource/pagination";
    import areaView from "./body/areaView";
    import areaAdd from "./body/areaAdd";
    import areaEdit from "./body/areaEdit";

    export default {
        data(){
            return {
                i:[],
                currentComponent:false,
                areaList:'',
                isAreaView:false,
                isAreaAdd:false,
                isAreaEdit:false,
                subTableList:'',
                isSubTableView:false,
                areaDetails:'',
                notify:''
            }
        },
        components:{
            areaView:areaView,
            areaAdd:areaAdd,
            areaEdit:areaEdit
        },

        computed:{
          loadProps(){
              if(this.currentComponent === 'area-add'){
                  return{
                      mainTable:this.mainTable
                  }
              }else if(this.currentComponent === 'area-view'){
                  return {
                        areaDetails:this.areaDetails,
                        loadAreaEdit:this.loadAreaEdit,
                  }
              }else if(this.currentComponent === 'area-edit'){
                  return {
                      areaDetails:this.areaDetails,
                      mainTable:this.mainTable,
                      loadSubTable:this.loadSubTable
                  }
              }
          }
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
                this.currentComponent = 'area-view'
                this.isSubTableView = true
                axios.get('/areatype/show/'+key).then((response)=>{
                    this.areaDetails = response.data[0]
                })
            },
            loadAreaInput(){
                this.isSubTableView = true
                this.currentComponent = 'area-add'
            },
            loadAreaEdit(){
                this.isSubTableView = true
                this.currentComponent= 'area-edit'
            },
            hideSubTable(){
                this.isSubTableView = false
            }

        },
    }
</script>

<style scoped>

</style>
