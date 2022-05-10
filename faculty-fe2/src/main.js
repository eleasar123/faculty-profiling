import Vue from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify';
import store from './store/index'
import Axios from 'axios'

Vue.config.productionTip = false
Vue.prototype.$axios = Axios;

new Vue({
    // el: "#esat",
    // data: {
    //     privacyNote: false,
    //     showPart1: false,
    //     showPart2: false,
    //     showPart3: false,
    //     showPrint: false,
    //     esatCard: false,
    // },
    router,
    vuetify,
    store,
    render: h => h(App)
}).$mount('#app')