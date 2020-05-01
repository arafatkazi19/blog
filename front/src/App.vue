<template>
  <div id="app">

    <!-- /.header -->
    <test></test>

    <!-- /.container -->
    <router-view></router-view>
    
    <!-- Footer -->
    <my-footer></my-footer>



  </div>
</template>

<script>
import Header from './components/includes/Header';
import Footer from './components/includes/Footer';

export default {
  name: 'App',
  components :{
    'test': Header,
    'my-footer': Footer
    
  }
}
</script>

<style>

</style>
