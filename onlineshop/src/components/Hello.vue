<template>
  <div>
    <!--Ist nur eine Startseite mit 2 Links (Registrieren && Login)-->
    <h1>Hallo!</h1>
    <p><router-link to="/Registrieren">Neu Anmelden</router-link> oder <router-link to="/Login">Einloggen</router-link> um das Dashboard zusehen</p>
  </div>
</template>
  
  <script>

  
  export default {
    name: 'Hello',
  }
  </script>

  <style>
    div{
      text-align: center;
    }

    h1{
        margin-top: 2%;
        margin-bottom: 2%;
      }
    
    .alert{
      margin: 5px;
    }

  </style>