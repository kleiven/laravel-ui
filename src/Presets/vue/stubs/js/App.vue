<template>

 <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">
        <small class="font-weight-lighter">Scaffolded by</small> kleiven\laravel-ui</h3>
      <nav class="nav nav-masthead justify-content-center">
          
          <router-link to="/" class="nav-link" active-class="active" exact>Home</router-link>
          <router-link to="/art" class="nav-link" active-class="active">Value of art</router-link>
          
      </nav>
    </div>
  </header>

      <router-view></router-view>
  
  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p><a href="https://github.com/kleiven/laravel-ui"><img src="/img/GitHub-Mark/PNG/GitHub-Mark-Light-32px.png" class="mr-2">kleiven\laravel-ui on Github</a></p>
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