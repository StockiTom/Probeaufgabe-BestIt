<template>
    <div>

      <nav class="navbar navbar-expand-lg bg-body-tertiary text-bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand link-light" href="#">Online Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item link-light">
                <a class="nav-link  active" aria-current="page"><router-link to="/">LogIn</router-link></a>
              </li>
              <li class="nav-item link-light">
                <div class="nav-link "><router-link to="/Registrieren">Registrieren</router-link></div>
              </li>
              <li class="nav-item link-light">
                <div class="nav-link "><router-link to="/Dashboard">Dashboard</router-link></div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </template>
    
    <script>
    
    export default {
      name: 'navBar'
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