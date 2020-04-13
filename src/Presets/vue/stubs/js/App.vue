<template>

 <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">kleiven\laravel-ui</h3>
      <nav class="nav nav-masthead justify-content-center">
          
          <router-link to="/" class="nav-link" active-class="active" exact>Home</router-link>
          <router-link to="/documentation" class="nav-link" active-class="active">Documentation</router-link>
                
      
      </nav>
    </div>
  </header>
      <router-view></router-view>
  

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>

</template>

<script>
export default {

}
</script>

<style>

</style>