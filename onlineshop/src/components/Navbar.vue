<template>
    <div>
      <!-- <h1>{{msg}}</h1>
      <img src="../assets/logo.png"/>
      <div><router-link to="/">LogIn</router-link></div>
      <div><router-link to="/Registrieren">SignUp</router-link></div> -->

      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Online Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"><router-link to="/">LogIn</router-link></a>
              </li>
              <li class="nav-item">
                <div class="nav-link"><router-link to="/Registrieren">Registrieren</router-link></div>
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
      props: {
        msg: String,
      },
      methods: {
  
      }
    }
    </script>
  
    <style>
     
    </style>