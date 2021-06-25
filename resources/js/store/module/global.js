export default {
    namespaced:true,
    state:{
        is_active: {
            modal: false,
            name: ''
        },

    },
    mutations:{
        SET_IS_ACTIVE(state,data){
            state.is_active.modal = data.modal
            state.is_active.name = data.name
        }

    },
    actions:{

    }
}
