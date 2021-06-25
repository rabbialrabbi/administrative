import toast from "../../services/Notification";
import router from "../../router/router";

export default {
    namespaced:true,
    state:{
        token:'',
        user:'',
        registerViewStatus: false,
        login:{
            email:'',
            password:''
        },
        register:{
            name:'',
            email:'',
            password:'',
            password_confirmation:''
        }

    },
    mutations:{
        SET_TOKEN(state,data){
            state.token = data
        },
        SET_USER(state,data){
            state.user = data
        },
        SET_LOGIN_EMAIL(state,data){
            state.login.email = data
        },
        SET_LOGIN_PASSWORD(state,data){
            state.login.password = data
        },
        SET_REGISTER_NAME(state,data){
            state.register.name = data
        },
        SET_REGISTER_EMAIL(state,data){
            state.register.email = data
        },
        SET_REGISTER_PASSWORD(state,data){
            state.register.password = data
        },
        SET_REGISTER_PASSWORD_CONFIRMATION(state,data){
            state.register.password_confirmation = data
        },

    },
    actions:{
        LoginSubmit({commit,state}){
            axios.post('/api/login',
                state.login
            ).then((res)=>{
                let token = res.data.token
                commit('SET_TOKEN',token)
                localStorage.setItem('token',token)
                router.push('/spa/division')
            }).catch(error=>{
                console.log(error)
            })
        },
        LogOut({commit,state}){
            state.token = ''
            state.login.email = ''
            state.login.password = ''
            localStorage.removeItem('token')
        },
        RegisterSubmit({commit,state}){
            axios.post('/api/register',
                state.register
            ).then((res)=>{
                let token = res.data.token
                let user = res.data.user
                commit('SET_TOKEN',token)
                commit('SET_USER',user)
            }).catch(error=>{
                console.log(error)
            })
        }

    }
}
