import { createApp } from 'vue'
import App from './App.vue'

import {createRouter, createWebHashHistory} from "vue-router"

import LogIn from "./components/LogIn"
import SignUp from "./components/SignUp"
import Dashboard from "./components/Dashboard"

import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js'


const app = createApp(App)



const routes=[
    {path: "/",component: LogIn},
    {path: "/Registrieren",component: SignUp},
    {path: "/Dashboard",component: Dashboard}
]

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
    linkActiveClass: "active"
})

app.use(bootstrap)

app.use(router)
app.mount("#app");