<template>
<<<<<<< HEAD
  
  <div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/login">Login</router-link>
  </div>
  <router-view></router-view>
=======
  <v-app>
  <Navbar/>
    <v-content class="ma-4">
      <router-view></router-view>
    </v-content>
   
  </v-app>
 
>>>>>>> f313ffb1b5504ac31cccdf1418c01d98c2c5aa17
</template>

<script>

<<<<<<< HEAD

export default{
  name: 'App',
  // components: () => {
    
  // }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
=======
import Navbar from '@/components/Navbar'

export default {
  name: 'App',

  components: {
   Navbar
  },

  data: () => ({
    //
  }),
};
</script>
>>>>>>> f313ffb1b5504ac31cccdf1418c01d98c2c5aa17
