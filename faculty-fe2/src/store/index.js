// import { createApp } from 'vue'
import { createStore } from 'vuex'
import axios from 'axios'

// Create a new store instance.
const store = createStore({
  state: {
    user:[],
    userProfile: [],
    // return {
    count: 0
    // }
  },
  mutations: {
    increment (state) {
      state.count++
    }
  },
  actions:{
    increment (context) {
      context.commit('increment')
    }
  },
})
axios.get('http://127.0.0.1:8000/user/').then((response) => console.log(response.data))
// const app = createApp({ /* your root component */ })

// // Install the store instance as a plugin
// app.use(store)

export default store;