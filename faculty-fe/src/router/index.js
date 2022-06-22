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
import ArticlesPage from '../views/CodingInterview/ArticlesPage'
import ViewIpcrf from '../views/ViewIpcrf.vue';
import ForgotPass from '@/views/Login/ForgotPass.vue';
import UserProfile from '@/views/Profile/UserProfile.vue'
Vue.use(VueRouter);

const routes = [{
        path: '/',
        name: 'personalData',
        component: PersonalData
    },

    //routes for article page
{
  path: "/articles",
  name: "ArticlesPage",
  component: ArticlesPage
},
{
  path: "/viewIprcf",
  name: "viewIpcrf",
  component: ViewIpcrf
},
  
  {
    path: "/login",
    name: "login",
    component: Login,
  },
  {
    path: "/forgotPass",
    name: "forgotPass",
    component: ForgotPass,
  },
  {
    path: "/userProfile",
    name: "userProfile",
    component: UserProfile,
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