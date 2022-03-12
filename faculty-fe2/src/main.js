import { createApp,h } from 'vue'
import App from './App.vue'
import router from './router/index.js'
import store from './store/index.js'
import '@/assets/css/main.css';
import axios from 'axios';
import VueAxios from 'vue-axios'
axios.defaults.baseURL = "http://localhost:8000";
const app =createApp({
    render: ()=>h(App)
})
app.use(router)
app.use(store)
app.use(VueAxios, axios)
app.mount('#app')


