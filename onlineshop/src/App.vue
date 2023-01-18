<template>
  <div>
    <navBar msg="Online Shop"></navBar>
    <router-view></router-view>
    <!-- <Dashboard></Dashboard> -->
    <Footer/>
  </div>
  
</template>

<script>
//import LogIn from "./components/LogIn.vue";
//import SignUp from './components/SignUp.vue';

import navBar from "./components/Navbar.vue"
import Footer from "./components/Footer.vue"
import Dashboard from './components/Dashboard.vue'

export default {
  name: 'App',
  components: {
    navBar,
    Footer,
    Dashboard
  }
}
</script>