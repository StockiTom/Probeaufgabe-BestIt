<template>
  <div>
    <!--Hier wird das Backend Dashboard angezeigt-->
    <h1>Dashboard</h1>

    <!--Es werden Alle item von get_products in Cards angezeigt -->
    <div v-for="item in items" :key="item.ArticleNumber" class="card" style="width: 18rem;">
      <div class="card-body">
        <img class="card-img-top" :src="require(`@/assets/images/${item.Image}`)">
        <h5 class="card-title">{{item.Name}}</h5>
        <p class="card-text">{{item.ArticleNumber}}</p>
        <p class="card-text">{{item.Description}}</p>
        <p class="card-text"><strong>Price: {{item.Price}}€</strong></p>
      </div>
    </div>
    
  </div>
</template>
  
  <script>
  
  import axios from 'axios';

  export default {
    name: 'Dashboard',
    data(){
      return{
        items: []
      }
    },
    async created(){
      //Hier werden alle Produkte von get_products.php geladen
      const response = await axios.get('http://127.0.0.1:81/Projekt/get_products.php/');
      this.items=response.data;
    }
  }
  </script>

  <style>

    .card{
      margin: 10px;
      float: left;
    }
  </style>