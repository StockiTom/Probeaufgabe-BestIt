<template>
  <div>
    <h1>Dashboard</h1>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card-text"><strong>Price: 25€</strong></p>
      </div>
    </div>
    
  </div>
</template>
  
  <script>
  
  import axios from 'axios';

  export default {
    name: 'Dashboard',
    async created(){
      const response = await axios.get('http://127.0.0.1:81/Projekt/get_products.php/');
    }
  }
  </script>

  <style>

    .card{
      margin: 10px;
      float: left;
    }
  </style>