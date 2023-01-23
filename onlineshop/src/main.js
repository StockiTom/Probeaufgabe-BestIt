import { createApp } from 'vue'
import App from './App.vue'

import {createRouter, createWebHashHistory} from "vue-router"

import LogIn from "./components/LogIn"
import SignUp from "./components/SignUp"
import Dashboard from "./components/Dashboard"
import Hello from "./components/Hello"

import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js'
import store from './store'

const app = createApp(App).use(store)

const routes=[
    {path: "/",component: Hello, meta: {auth: false}},
    {path: "/Login",component: LogIn, meta: {auth: false}},
    {path: "/Registrieren",component: SignUp,meta: {auth: false}},
    {path: "/Dashboard",component: Dashboard,meta: {auth: true}} 
]

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes
    /*linkActiveClass: "active"*/
})

/*router.beforeEach((to, from) =>{
    console.log(from);
    console.log(to);


    if(to.meta.auth===true && from.path !== '/Login'){
        return false; 
    }else if (to.meta.auth===true && from.path == '/Login' && store.state.user){
        return true;
    }else if (to.meta.auth===true && from.path == '/Login' && !store.state.user){
        return false;
    } else {
        return true;
    }

})*/

router.beforeEach((to, from) =>{
    console.log(from);
    console.log(to);


    if (to.meta.auth===true && store.state.user){
        return true;
    }else if (to.meta.auth===true && !store.state.user){
        return false;
    } else {
        return true;
    }

})


app.use(bootstrap)

app.use(router)
app.mount("#app");