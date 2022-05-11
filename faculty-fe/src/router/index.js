import Vue from "vue";
import VueRouter from "vue-router";
import PersonalData from "../views/PersonalData.vue";
import EsatView from "../views/EsatView.vue";
import ManageUser from "../views/ManageUser.vue";
import ManageIpcrf from "../views/ManageIpcrf.vue";
import Login from "../views/Login/Login.vue";
//import HomeView from "../views/Index.vue";
import PersonalDataSheet from "../views/Profile/PDSUser.vue";
import ViewPds from "../views/Profile/ViewPdsAdmin.vue"
import ProductsInventory from '../views/Test/ProductsInventory'
Vue.use(VueRouter);

const routes = [{
        path: '/',
        name: 'personalData',
        component: PersonalData
    },

  {
    path: "/personalData",
    name: "personalData",
    component: PersonalData,
  },
  {
    path: "/login",
    name: "login",
    component: Login,
  },
  {
    path: "/manageUser",
    name: "manageUser",
    component: ManageUser,
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    //component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: "/manageIpcrf",
    name: "manageIpcrf",
    component: ManageIpcrf,
  },
  {
    path: "/viewPds",
    name: "viewPds",
    component: ViewPds,
  },
  {
    path: "/esat",
    name: "Esat",
    component: EsatView,
  },
  {
    path: "/personalDataSheet",
    name: "PersonalDataSheet",
    component: PersonalDataSheet,
  },
  {
    path: "/products",
    name: "ProductsInventory",
    component: ProductsInventory,
  },
];

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router