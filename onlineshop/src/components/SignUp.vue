<template>
    <div>
      <h1>{{msg}}</h1>
      <form>
        <label >Benutzername: </label>
        <input 
          type="text"
          id="benutzername"
          placeholder="USERNAME"><br>
        <label >E-Mail: </label>
        <input 
          type="text"
          id="email"
          placeholder="E-MAIL"><br>
        <label>Passwort: </label>
        <input 
          type="password"
          id="passwort"
          placeholder="PASSWORT"><br>
          <label>Passwort wiederholen: </label>
          <input 
            type="password"
            id="passwortwh"><br>
        <button class="primary" type="submit">Anmelden</button>
      </form>
    </div>
  </template>
    
    <script>
    
    export default {
      name: 'SignUp',
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
    </style>