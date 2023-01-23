<template>
    <div>
      <!--Zeigt den Footer an-->
      <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
        <small>Copyright &copy; Online Shop</small>
        </div>
    </footer>
    </div>
  </template>
    
    <script>
    
    export default {
      name: 'Footer',
      props: {
        msg: String,
      },
      methods: {
  
      }
    }
    </script>
  
    <style>
      
      footer{
        position: fixed;
        bottom: 0;
        width: 100%;
      }
     
    </style>