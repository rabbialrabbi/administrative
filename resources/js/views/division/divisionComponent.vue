<template>
    <div class="body">
        <div class="row body_top">
            <div class="col-2"><h3>প্রশাসনিক</h3></div>
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
                <tr class="divi-table" v-for="(area, index) in divisionData.data" :key="index">
                    <td>{{((parseInt(divisionData.current_page)-1)*10)+(index+1)}}</td>
                    <td>{{area.DivisionId}}</td>
                    <td>{{area.DivisionCode}}</td>
                    <td>{{area.DivisionNameBangla}}</td>
                    <td>{{area.DivisionNameEnglish}}</td>
                    <td>{{area.Note}}</td>
                    <td>{{area.RecordStatus}}</td>
                    <td>{{area.RecordVersion}}</td>
                    <td><i class="fas fa-eye" @click="loadDivisionViewTable(area.DivisionCode)"></i></td>
                </tr>
            </table>
        </div>

        <div class="row body_pagination">
            <div class="col-8 paginator js-paginator d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item" :class=" divisionData.current_page <=1 ?'disabled':''">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item" v-for="page in divisionData.last_page">
                            <a class="page-link"
                               href="javascript:void(0)"
                               @click.prevent="changePage(page)">{{page}}
                            </a>
                        </li>
                        <li class="page-item" :class=" divisionData.current_page == divisionData.last_page?'disabled':''">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-4">
                <button class="btn btn-success" @click="loadDivisionAddTable()">অ্যাড</button>
            </div>
        </div>

        <!--Add section-->
        <div v-if="isActive.status && isActive.name === 'add-division'">
            <div class="row body_top">
                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                <div class="col-1 clone">:</div>
                <div class="col-8"><h3>এলাকা</h3></div>
            </div>
            <ValidationObserver v-slot="{ handleSubmit,reset }" ref="addDivisionForm" >
                <form @submit.prevent="handleSubmit(AddDivision)">
                    <div class="row sub_table-body">
                        <division-subsection>
                            <td slot="DivisionId">
                                <ValidationProvider name="Division Id" rules="required|numeric" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="DivisionId">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="DivisionCode">
                                <ValidationProvider name="Division Code" rules="required|numeric" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="DivisionCode">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="DivisionNameEnglish">
                                <ValidationProvider name="Division Name English" rules="required|alpha" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="DivisionNameEnglish">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="DivisionNameBangla">
                                <ValidationProvider name="Division Name Bangla" rules="required" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="DivisionNameBangla">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="Note">
                                <ValidationProvider name="Note" rules="required" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="Note">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="RecordStatus">
                                <ValidationProvider name="Record Status" rules="required" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="RecordStatus">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="RecordVersion">
                                <ValidationProvider name="Record Version" rules="required" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="RecordVersion">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                        </division-subsection>
                    </div>
                    <div class=" row sub_table-bottom">
                        <div class="row sub_table-button">
                            <div class="col-8"><p>Messages:</p></div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-success">যোগ করুন</button>
                                <button class="btn btn-warning" @click.prevent="setIsActive({name:'',status:false})" >পিছনে</button>
                            </div>
                        </div>
                    </div>
                </form>
            </ValidationObserver>

        </div>


        <!--View Section-->
        <div v-if="isActive.status && isActive.name === 'view-division'">
            <div class="row body_top">
                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                <div class="col-1 clone">:</div>
                <div class="col-8"><h3>এলাকা</h3></div>
            </div>
            <form>
                <div class="row sub_table-body">
                    <division-subsection>
                        <td slot="DivisionId">
                            {{selectedDivision.DivisionId}}
                        </td>
                        <td slot="DivisionCode">
                            {{selectedDivision.DivisionCode}}
                        </td>
                        <td slot="DivisionNameEnglish">
                            {{selectedDivision.DivisionNameEnglish}}
                        </td>
                        <td slot="DivisionNameBangla">
                            {{selectedDivision.DivisionNameBangla}}
                        </td>
                        <td slot="Note">
                            {{selectedDivision.Note}}
                        </td>
                        <td slot="RecordStatus">
                            {{selectedDivision.RecordStatus}}
                        </td>
                        <td slot="RecordVersion">
                            {{selectedDivision.RecordVersion}}
                        </td>
                    </division-subsection>

                </div>
                <div class=" row sub_table-bottom">
                    <div class="row sub_table-button">
                        <div class="col-8"><p>Messages:</p></div>
                        <div class="col-4">
                            <button class="btn btn-success" @click.prevent="loadDivisionEditTable()">পরিবর্তন করুন</button>
                            <button class="btn btn-warning" @click.prevent="setIsActive({name:'',status:false})">পিছনে</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--View Section-->
        <div v-if="isActive.status && isActive.name === 'edit-division'">
            <div class="row body_top">
                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                <div class="col-1 clone">:</div>
                <div class="col-8"><h3>এলাকা</h3></div>
            </div>
            <ValidationObserver v-slot="{ handleSubmit,reset }" ref="editDivisionForm" >
                <form @submit.prevent="handleSubmit(editDivision)">
                    <div class="row sub_table-body">
                        <division-subsection>
                            <td slot="DivisionId">
                                <ValidationProvider name="Division Id" rules="required|numeric" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="DivisionId">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="DivisionCode">
                                <ValidationProvider name="Division Code" rules="required|numeric" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="DivisionCode" disabled>
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="DivisionNameEnglish">
                                <ValidationProvider name="Division Name English" rules="required|alpha" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="DivisionNameEnglish">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="DivisionNameBangla">
                                <ValidationProvider name="Division Name Bangla" rules="required" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="DivisionNameBangla">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="Note">
                                <ValidationProvider name="Note" rules="required" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="Note">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="RecordStatus">
                                <ValidationProvider name="Record Status" rules="required" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="RecordStatus">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                            <td slot="RecordVersion">
                                <ValidationProvider name="Record Version" rules="required" v-slot="{ errors,validated }">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid':errors[0],'is-valid':validated && !errors[0]}" v-model="RecordVersion">
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </div>
                                </ValidationProvider>
                            </td>
                        </division-subsection>

                    </div>
                    <div class=" row sub_table-bottom">
                        <div class="row sub_table-button">
                            <div class="col-8"><p>Messages:</p></div>
                            <div class="col-4">
                                <button class="btn btn-success">পরিবর্তন করুন</button>
                                <button class="btn btn-warning" @click.prevent="backToView()">পিছনে</button>
                            </div>
                        </div>
                    </div>
                </form>
            </ValidationObserver>

        </div>


    </div>
</template>

<script>
    import divisionSubSection from "../../components/layout/template/divisionSubSection";
    import { required, minLength, between, numeric } from 'vuelidate/lib/validators'
    import {mapState, mapGetters, mapActions, mapMutations} from 'vuex'

    export default {
        name: "division",
        data(){
            return {
            }
        },
        created() {
            this.setDivisionData()
        },
        computed: {
            ...mapState('division',['divisionData','selectedDivision']),
            ...mapState(['isActive']),
            DivisionId:{
              get(){
                  return this.selectedDivision.DivisionId
              },
              set(val){
                  this.SET_DiVISION_ID(val)
              }
            },
            DivisionCode:{
                get(){
                    return this.selectedDivision.DivisionCode
                },
                set(val){
                    this.SET_DiVISION_CODE(val)
                }
            },
            DivisionNameEnglish:{
                get(){
                    return this.selectedDivision.DivisionNameEnglish
                },
                set(val){
                    this.SET_DIVISION_NAME_ENGLISH(val)
                }
            },
            DivisionNameBangla:{
                get(){
                    return this.selectedDivision.DivisionNameBangla
                },
                set(val){
                    this.SET_DIVISION_NAME_BANGLA(val)
                }
            },
            Note:{
                get(){
                    return this.selectedDivision.Note
                },
                set(val){
                    this.SET_DIVISION_NOTE(val)
                }
            },
            RecordStatus:{
                get(){
                    return this.selectedDivision.RecordStatus
                },
                set(val){
                    this.SET_RECORD_STATUS(val)
                }
            },
            RecordVersion:{
                get(){
                    return this.selectedDivision.RecordVersion
                },
                set(val){
                    this.SET_RECORD_VERSION(val)
                }
            },
        },
        validations: {
            DivisionId: {
                required,
                numeric
            },
            DivisionCode: {
                required,
                numeric
            }
        },
        methods: {
            ...mapMutations('division',['SET_SELECTED_DIVISION_EMPTY','setSelectDivision',
                'SET_DiVISION_ID',
                'SET_DiVISION_CODE',
                'SET_DIVISION_NAME_ENGLISH',
                'SET_DIVISION_NAME_BANGLA',
                'SET_DIVISION_NOTE',
                'SET_RECORD_STATUS',
                'SET_RECORD_VERSION',
            ]),
            ...mapActions(['setIsActive']),
            ...mapActions('division',['addDivision','changePage','setDivisionData','editDivision']),
            AddDivision(){
                this.addDivision()
                this.$refs.addDivisionForm.reset();
            },
            loadDivisionAddTable(){
                this.SET_SELECTED_DIVISION_EMPTY()
                this.setIsActive({name:'add-division',status:true})
            },
            loadDivisionViewTable(DivisionCode){
               this.setSelectDivision(DivisionCode)
               this.setIsActive({name:'view-division',status:true})
            },
            loadDivisionEditTable(){
                this.setIsActive({name:'edit-division',status:true})
                this.addDivisionFormData = this.selectedDivision
            },
            backToView(){
                this.setSelectDivision(this.selectedDivision.DivisionCode)
                this.setIsActive({name:'view-division',status:true})
            }
        },
        components: {
            DivisionSubsection: divisionSubSection
        },
    }
</script>

<style scoped>

</style>
