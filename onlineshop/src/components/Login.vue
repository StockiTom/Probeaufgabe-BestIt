<template>
  <div>
    <h1>LogIn</h1>
    
    <form style="width: 40%; margin-left: auto; margin-right: auto;">
      <div class="row mb-3">
        <label for="inputUser1" class="col-sm-2 col-form-label">Benutzername:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser1">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword2" class="col-sm-2 col-form-label">Passwort:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword2">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">LogIn</button>
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

    h1{
        margin-top: 2%;
        margin-bottom: 2%;
      }

  </style>