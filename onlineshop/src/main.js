import { createApp } from 'vue'
import App from './App.vue'

import {createRouter, createWebHashHistory} from "vue-router"

import LogIn from "./components/LogIn"
import SignUp from "./components/SignUp"

import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js'


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

/*const cors = require('cors');
const corsConfig = {
  credentials: true,
  origin: true,
};
app.use(cors(corsConfig));*/


app.use(bootstrap)

app.use(router)
app.mount("#app");