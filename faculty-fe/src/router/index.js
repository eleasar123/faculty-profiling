import Vue from 'vue'
import VueRouter from 'vue-router'
import PersonalData from '../views/PersonalData.vue'
import ManageUser from '../views/ManageUser.vue'
import ManageIpcrf from '../views/ManageIpcrf.vue'

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
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router