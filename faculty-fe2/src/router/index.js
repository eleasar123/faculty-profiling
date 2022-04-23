import Vue from 'vue'
import VueRouter from 'vue-router'
import PersonalData from '../views/PersonalData.vue'
import ManageUser from '../views/ManageUser.vue'
import ManageIpcrf from '../views/ManageIpcrf.vue'
import Login from '../views/Login/Login.vue'
<<<<<<< HEAD
import EsatView from '../views/EsatView.vue'
import NewEsat from '../views/NewEsat.vue'
=======
import PersonalDataSheet from '../views/Profile/PersonalDataSheet.vue'
>>>>>>> 768e60180aa6fd4393e871de4bee76e45c50e1c5
Vue.use(VueRouter)

const routes = [{
        path: '/',
        name: 'personalData',
        component: PersonalData
    },
    {
        path: '/manageUser',
        name: 'manageUser',
        component: ManageUser
            // route level code-splitting
            // this generates a separate chunk (about.[hash].js) for this route
            // which is lazy-loaded when the route is visited.
            //component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
    },
    {
        path: '/manageIpcrf',
        name: 'manageIpcrf',
        component: ManageIpcrf
    },
    {
<<<<<<< HEAD
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/esat',
        name: 'esat',
        component: EsatView
    },
    {
        path: '/newesat',
        name: 'newesat',
        component: NewEsat
    }
=======
      path: '/login',
      name: 'login',
      component: Login
  },
  {
    path: '/personalDataSheet',
    name: 'PersonalDataSheet',
    component: PersonalDataSheet
  },
>>>>>>> 768e60180aa6fd4393e871de4bee76e45c50e1c5
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router