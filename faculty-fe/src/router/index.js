import Vue from "vue";
import VueRouter from "vue-router";

import Login from /* webpackChunkName: "Login" */ "@/views/Login.vue";

Vue.use(VueRouter);

const routes = [{
        path: "/",
        redirect: "/home",
    },
    {
        path: "/home",
        component: Index,
        meta: {
            auth: true,
        },
        children: [{
                path: "/",
                redirect: "employee",
            }]
        }
    ]