<template>
  <v-container fluid>
  <v-app v-if="userData!==null">
    <Navbar></Navbar>
    <v-content class="ma-4">
      <v-layout>
        <router-view></router-view>
      </v-layout>
    </v-content>
   
  </v-app>
 <v-app v-else>
      <router-view></router-view>
  </v-app>
 </v-container>
</template>

<script>

import Navbar from '@/components/NavBar.vue'

export default {
  name: 'App',

  components: {
   Navbar
  },

  data: () => ({
    //
    userData: JSON.parse(sessionStorage.getItem("user_session")),
    
  }),
  created(){
    console.log(this.userData)
    if(this.userData == null || this.userData == undefined){
      console.log(true)
      this.$router.push('/login')
    }
  }
};
</script>
