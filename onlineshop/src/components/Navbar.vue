<template>
    <div>

      <nav class="navbar navbar-expand-lg bg-body-tertiary text-bg-primary">
        <div class="container-fluid">
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li v-if="!$store.state.user" class="nav-item link-light">
                <a class="nav-link  active" aria-current="page">
                  <router-link to="/Login">LogIn</router-link>
                </a>
              </li>
              <li v-if="!$store.state.user" class="nav-item link-light">
                <div class="nav-link ">
                  <router-link to="/Registrieren">Registrieren</router-link>
                </div>
              </li>
              <li v-if="$store.state.user" class="nav-item link-light">
                <div class="nav-link ">
                  <router-link to="/Dashboard">Dashboard</router-link>
                </div>
              </li>
              <li v-if="$store.state.user" class="av-item link-light">
                <div class="nav-link ">
                  <!-- <router-link @click="logout">Logout</router-link> -->
                  <a @click="logout">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </template>
    
    <script>
    
    export default {
      name: 'navBar',
      methods: {
        logout(){
          this.$store.commit('logout');
          this.$router.push('/Login');
        }  
      }
    }
    </script>
  
    <style>
      .nav-link a{
        text-decoration: none;
        color: white;
      }

      .nav-link a:hover{
        padding: 5px;
        text-decoration: underline;
        color: white;
      }
     
    </style>