<template>
  <div>
    <h1>LogIn</h1>
    
    <form style="width: 40%; margin-left: auto; margin-right: auto;" @submit.prevent="handleSubmit">

      <!--Hier werden die Message angezeigt-->
      <div v-if="message" class="alert alert-danger" role="alert">
        {{message}}
      </div>

      <div class="row mb-3">
        <label for="inputUser1" class="col-sm-2 col-form-label">Benutzername:</label>
        <div class="col-sm-10">
          <input type="text" required v-model="user" class="form-control" id="inputUser1">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword2" class="col-sm-2 col-form-label">Passwort:</label>
        <div class="col-sm-10">
          <input type="password" required v-model="password" class="form-control" id="inputPassword2">
        </div>
      </div>
      <span>Du hast noch keinen Account? <router-link to="/Registrieren">Neu Anmelden</router-link></span><br>
      <button type="submit" class="btn btn-primary">LogIn</button>
    </form>
    
  </div>
</template>
  
  <script>

  import axios from 'axios'
  
  export default {
    name: 'LogIn',
    data(){
      return{
        user: '',
        password: '',
        message: '',
      }
      
    },
    methods: {
      /**Diese Methode wird aufgerufen wenn Submit-Button gedrückt worden**/
      async handleSubmit(){
        /**User und Passwort werden an get.php per POST geschickt**/
        const response = await axios.post('http://127.0.0.1:81/Projekt/get.php/',{
            username: this.user,
            password: this.password,
          });

          /**Wenn LoginDaten sind richtig kommt man zum Dashboard sonst kommt man zu Login**/
          if(response.data=="Success"){
            this.$store.commit('login',this.user); //im store wird der User im state gespeichert
            this.$router.push('/Dashboard');
          }else{
            this.message="Benutzername oder Passwort ist falsch";
            this.$router.push('/Login');
          }
          
      }
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
    
    .alert{
      margin: 5px;
    }

  </style>