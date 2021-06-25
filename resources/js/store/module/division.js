import toast from "../../services/Notification";
import axios from "axios"
import auth from "./auth";
import authAxios from "../../_helper/axiosAuth";
// axios.defaults.headers.common["Authorization"] = 'Bearer'+auth.state.token
    // instance.defaults.headers.common['Authorization'] = 'Bearer'+auth.state.token

export default {
    namespaced:true,
    state:{
        divisionData: '',
        selectedDivision: {
            DivisionId:'',
            DivisionCode:'',
            DivisionNameEnglish:'',
            DivisionNameBangla:'',
            Note:'',
            RecordStatus:'',
            RecordVersion:'',
        }
    },
    mutations:{
        SET_DiVISION_ID(state,data){
            state.selectedDivision.DivisionId = data
        },
        SET_DiVISION_CODE(state,data){
            state.selectedDivision.DivisionCode = data
        },
        SET_DIVISION_NAME_ENGLISH(state,data){
            state.selectedDivision.DivisionNameEnglish = data
        },
        SET_DIVISION_NAME_BANGLA(state,data){
            state.selectedDivision.DivisionNameBangla = data
        },
        SET_DIVISION_NOTE(state,data){
            state.selectedDivision.Note = data
        },
        SET_RECORD_STATUS(state,data){
            state.selectedDivision.RecordStatus = data
        },
        SET_RECORD_VERSION(state,data){
            state.selectedDivision.RecordVersion = data
        },
        SET_DIVISION_DATA(state,payload){
            state.divisionData = payload
        },

        SET_SELECTED_DIVISION_EMPTY(state){
            state.selectedDivision = {
                DivisionId:'',
                DivisionCode:'',
                DivisionNameEnglish:'',
                DivisionNameBangla:'',
                Note:'',
                RecordStatus:'',
                RecordVersion:'',
            }
        },
        setSelectDivision(state,DivisionCode){
            let division =  state.divisionData.data.find(function (x) {
                return x.DivisionCode === DivisionCode
            })
            state.selectedDivision.DivisionId= division.DivisionId
            state.selectedDivision.DivisionCode= division.DivisionCode
            state.selectedDivision.DivisionNameEnglish= division.DivisionNameEnglish
            state.selectedDivision.DivisionNameBangla= division.DivisionNameBangla
            state.selectedDivision.Note= division.Note
            state.selectedDivision.RecordStatus= division.RecordStatus
            state.selectedDivision.RecordVersion= division.RecordVersion

        }
    },
    actions:{
        setDivisionData({ commit, state }){
            authAxios.get('/division').then((res)=>{
                commit('SET_DIVISION_DATA',res.data)
            }).catch((error)=>{
                console.log(error)
            })
        },
        changePage({ commit, state },page){
            console.log('Working')
            authAxios.get('/division?page='+page).then((res)=>{
                commit('SET_DIVISION_DATA',res.data)
            }).catch((error)=>{
                console.log(error)
            })
        },
        addDivision({commit,state}){
            authAxios.post('/division',state.selectedDivision).then(res=>{
                commit('SET_DIVISION_DATA',res.data)
                commit('SET_SELECTED_DIVISION_EMPTY',res.data)
                toast.success('Division add successfully')
            })
        },
        editDivision({commit,state}){
            authAxios.put('/division/'+state.selectedDivision.DivisionCode+'?page='+state.divisionData.current_page,state.selectedDivision).then(res=>{
                commit('SET_DIVISION_DATA',res.data)
            })
        },
    }
}
