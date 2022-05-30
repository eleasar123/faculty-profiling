<template>
<!-- <v-main> -->

<!-- <v-container fluid  height="fit-content"  class="ma-0 pa-0"> -->
  <v-app v-if="userData!==null">
    <Navbar></Navbar>
    <v-main>
    <v-content class="ma-6 pa-2 " fluid>
        <router-view></router-view>
    </v-content>
   </v-main>
  </v-app>
 <v-app v-else >
   <v-content >
      <router-view></router-view>
      </v-content>
  </v-app>
 <!-- </v-container> -->
 <!-- </v-main> -->
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
