<template>
    <div>
      <h1>Registrieren</h1>

      <form style="width: 40%; margin-left: auto; margin-right: auto;" @submit.prevent="handleSubmit"> <!-- Prevent don't refresh-->
        <div class="row mb-3">
          <label for="inputUser1" class="col-sm-2 col-form-label">Benutzername:</label>
          <div class="col-sm-10">
            <input type="text" v-model="user" class="form-control" id="inputUser1">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputName2" class="col-sm-2 col-form-label">Vorname:</label>
          <div class="col-sm-10">
            <input type="text" v-model="firstname" class="form-control" id="inputName2">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputLastName3" class="col-sm-2 col-form-label">Nachname:</label>
          <div class="col-sm-10">
            <input type="text" v-model="lastname" class="form-control" id="inputLastName3">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">E-Mail:</label>
          <div class="col-sm-10">
            <input type="email" v-model="email" class="form-control" id="inputEmail2">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Passwort:</label>
          <div class="col-sm-10">
            <input type="password" v-model="password" class="form-control" id="inputPassword3">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Passwort wiederholen:</label>
          <div class="col-sm-10">
            <input type="password" v-model="password_confirm" class="form-control" id="inputPassword4">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Registrieren</button>
      </form>


    </div>
  </template>
    
    <script>

    import axios from 'axios'

    
    
    export default {
      name: 'SignUp',
      data(){
        return{
          user: '',
          firstname: '',
          lastname: '',
          email: '',
          password: '',
          password_confirm: ''
        }
      },
      methods: {
        handleSubmit(){
          const data={
            user: this.user,
            firstname: this.firstname,
            lastname: this.lastname,
            email: this.email,
            password: this.password,
            password_confirm: this.password_confirm
          }

          axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';

          axios.post('http://localhost/Projekt/',data)
               .then(
                  res=>{
                    console.log(res)
                  }
               ).catch(
                  err=>{
                    console.log(err)
                  }
               )

        }
      }
    }
    </script>
  
    <style>
      
      h1{
        margin-top: 2%;
        margin-bottom: 2%;
      }

      input{
        width: auto;
      }

      label{
        margin-right: 3px;
      }

    </style>