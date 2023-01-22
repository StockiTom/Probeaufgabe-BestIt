import { createApp } from 'vue'
import App from './App.vue'

import {createRouter, createWebHashHistory} from "vue-router"

import LogIn from "./components/LogIn"
import SignUp from "./components/SignUp"
import Dashboard from "./components/Dashboard"

import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js'
import store from './store'

//import store from './store/store';


const app = createApp(App).use(store)

const routes=[
    {path: "/LogIn",component: LogIn, meta: {auth: false}},
    {path: "/Registrieren",component: SignUp,meta: {auth: false}},
    {path: "/Dashboard",component: Dashboard,meta: {auth: true}} 
]

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
    linkActiveClass: "active"
})

/*router.beforeEach((to, from, next) =>{
    if(to.meta.auth && store.getters[`auth/${IS_USER_ATHENTICATE_GETTER}`]){
        next('/');
    }else if ()
});*/

app.use(bootstrap)

app.use(router)
app.mount("#app");