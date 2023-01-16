<template>
  <div>
    <h1>{{msg}}</h1>
    <form>
      <label >Benutzername: </label>
      <input 
        type="text"
        id="benutzername"
        placeholder="USERNAME"><br>
      <label>Passwort: </label>
      <input 
        type="password"
        id="passwort"
        placeholder="PASSWORT"><br>
      <button type="submit">Anmelden</button>
    </form>
      <span><router-link to="/Registrieren">Neu Anmelden</router-link></span>
    
  </div>
</template>
  
  <script>
  
  export default {
    name: 'LogIn',
    props: {
      msg: String,
    },
    methods: {

    }
  }
  </script>

  <style>
    div{
      text-align: center;
    }
    form{
      margin: 5px;
    }

    span{
      text-decoration-color: green;
    }

  </style>