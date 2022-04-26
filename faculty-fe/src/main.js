import Vue from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify';
import store from './store/index'
import Axios from 'axios'
import Print from 'vue-print-nb'
// Global instruction 
Vue.use(Print);
Vue.config.productionTip = false
Vue.prototype.$axios = Axios;

new Vue({
  router,
  vuetify,
  store,
  render: h => h(App)
}).$mount('#app')
