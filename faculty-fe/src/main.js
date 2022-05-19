import Vue from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify';
import store from './store/index'
import Axios from 'axios'
import Print from 'vue-print-nb'
import VueHtmlToPaper from 'vue-html-to-paper';

const options = {
  name: '_blank',
//   specs: [
//     'fullscreen=yes',
//     'titlebar=yes',
//     'scrollbars=yes'
//   ],
  styles: [
    '../../assets/css/main.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
    // 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
    'https://unpkg.com/kidlat-css/css/kidlat.css',
    'material-design-icons-iconfont/dist/material-design-icons.css'
    
  ],
  timeout: 0, // default timeout before the print window appears
  autoClose: true, // if false, the window will not close after printing
  windowTitle: window.document.title, // override the window title
}

Vue.use(VueHtmlToPaper, options);

//or, using the defaults with no stylesheet
//Vue.use(VueHtmlToPaper);
// Global instruction 
Vue.use(Print);
Vue.config.productionTip = false
Vue.prototype.$axios = Axios;
//import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap and BootstrapVue CSS files (order is important) , 
// import 'bootstrap/dist/css/bootstrap.css'
//import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
 //Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
//Vue.use(IconsPlugin)
new Vue({

    router,
    vuetify,
    store,
    render: h => h(App)
}).$mount('#app')