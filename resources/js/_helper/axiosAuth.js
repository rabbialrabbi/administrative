import axios from 'axios'
import auth from "../store/module/auth";

let token = localStorage.getItem('token')? localStorage.getItem('token'): '';

const instance = axios.create({
    baseURL: '/api',
    // timeout: 1000,
    headers: {'Authorization': 'Bearer '+token}
})

// instance.defaults.headers.common['Authorization'] = 'Bearer'+auth.state.token

export default instance

