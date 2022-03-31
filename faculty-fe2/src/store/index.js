import Vue from 'vue'
import Vuex from 'vuex'
//import { createStore } from 'vuex'
import axios from 'axios'
import userLogin from './modules/userLogin'
import pds from './modules/pdsInfo'
import esat from './modules/esat'
import ipcrf from './modules/ipcrf'
Vue.use(Vuex);
axios.defaults.baseURL = "http://localhost:8000/";
// axios.create({
//   baseURL: "http://localhost:8000/",
//   // timeout: 1000,
//   // headers: { "X-Custom-Header": "faculty-profiling" },
// });
// Create a new store instance.
export default new Vuex.Store({
  modules:{
    userLogin,
    pds,
    esat,
    ipcrf,
  },
  // state: {
  //   users:[],
  //   userProfile: [],
  //   // return {
  //   count: 0
  //   // }
  // },
  // mutations: {
  //   increment () {
  //     this.state.count++
  //   },
  //   setUser(data){
  //     this.state.users = JSON.parse(data).data;
  //   }
  // },
  // getters:{
  //   doneTodosCount (state, getters) {
  //     return getters.doneTodos.length
  //   }
  // },
  // actions:{
  //   increment (context) {
  //     context.commit('increment')
  //   },
  //   getUsers(){
  //     return axios.get('user').then((response) => response.data)
  //     .catch((error) => {
  //       return error.response
  //     })
  //   },
    // login(data){
    //   return axios.post('login', data).then((response) => {
    //     this.setUser(data)
    //     return response} )
    //   .catch((error) => {
    //     console.log(error)
    //   })
    // }
  // },
})
//axios.get('http://localhost:8000/user/').then((response) => console.log(response.data))
// const app = createApp({ /* your root component */ })

// // Install the store instance as a plugin
// app.use(store)
