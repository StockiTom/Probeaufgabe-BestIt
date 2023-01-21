<template>
  <div>
    <h1>Dashboard</h1>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card-text"><strong>Price: 25€</strong></p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card-text"><strong>Price: 35€</strong></p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card-text"><strong>Price: 45€</strong></p>
      </div>
    </div>
    
  </div>
</template>
  
  <script>
  
  import axios from 'axios';

  export default {
    name: 'Dashboard'
  }
  </script>

  <style>

    .card{
      margin: 10px;
      float: left;
    }
  </style>