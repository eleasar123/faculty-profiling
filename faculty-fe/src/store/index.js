import Vue from "vue";
import Vuex from "vuex";
//import { createStore } from 'vuex'
import axios from "axios";
import userLogin from "./modules/userLogin";
import pds from "./modules/pdsInfo";
import esat from "./modules/esat";
import ipcrf from "./modules/ipcrf";
Vue.use(Vuex);

// const AUTH_TOKEN = sessionStorage.getItem('userToken')
axios.defaults.baseURL = "http://127.0.0.1:8000/api/";
// axios.defaults.headers.common['Authorization'] = AUTH_TOKEN;
axios.defaults.headers.common["Content-Type"] = "application/json";

// Create a new store instance.
export default new Vuex.Store({
  modules: {
    userLogin,
    pds,
    esat,
    ipcrf,
  },
  state: {
    users: [],
    userProfile: [],
    // return {
    count: 0,
    // }
  },
  mutations: {
    increment() {
      this.state.count++;
    },
    setUser(data) {
      this.state.users = JSON.parse(data).data;
    },
  },
  getters: {
    doneTodosCount(state, getters) {
      return getters.doneTodos.length;
    },
  },
  actions: {
    uploadFile(context, file) {
      console.log([...file]);
      return axios
        .post("pds/handleImage", file, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          console.log(response.data);
          context;
        })
        .catch((error) => {
          console.log(error.response.data);
        });
    },

    downloadFile(filename) {
      return axios
        .get("employee/downloadAttachment?filename=" + filename)
        .response((response) => {
          let blob = new Blob([response.data], {
            type: "application/octet-stream",
          });
          let ref = this.state.ref;
          ref.current.href = URL.createObjectURL(blob);
          ref.current.download = filename;
          ref.current.click();
        });
    },
    downloadAttachment(context, file) {
      console.log([...file]);
      return axios
        .get("employee/downloadAttachment?filename=", file, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          console.log(response.data);
          context;
        })
        .catch((error) => {
          console.log(error.response.data);
        });
    },
  },
});

// const app = createApp({ /* your root component */ })

// // Install the store instance as a plugin
// app.use(store)
