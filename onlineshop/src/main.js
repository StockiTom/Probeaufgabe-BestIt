import { createApp } from 'vue'
import App from './App.vue'

import {createRouter, createWebHashHistory} from "vue-router"

import LogIn from "./components/LogIn"
import SignUp from "./components/SignUp"


const app = createApp(App)

const routes=[
    {path: "/",component: LogIn},
    {path: "/Registrieren",component: SignUp}
]

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
    linkActiveClass: "active"
})

app.use(router)
app.mount("#app");