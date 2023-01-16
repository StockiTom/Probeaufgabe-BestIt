<template>
    <div>
      <h1>Registrieren</h1>

      <form style="width: 40%; margin-left: auto; margin-right: auto;">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Benutzername:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUser1">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">E-Mail:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail2">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Passwort:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Passwort wiederholen:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword4">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Registrieren</button>
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
      
      h1{
        margin-top: 2%;
        margin-bottom: 2%;
      }
    </style>