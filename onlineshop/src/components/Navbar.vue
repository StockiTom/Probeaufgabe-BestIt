<template>
    <div>
      <h1>{{msg}}</h1>
      <img src="../assets/logo.png"/>
      <div><router-link to="/">LogIn</router-link></div>
      <div><router-link to="/Registrieren">SignUp</router-link></div>
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