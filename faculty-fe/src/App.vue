<template>
  <v-main>
  <v-app v-if="userData!==null">
    <Navbar></Navbar>
    <v-content class="ma-6 pa-2">
        <router-view></router-view>
    </v-content>
   
  </v-app>
 <v-app v-else>
      <router-view></router-view>
  </v-app>
 </v-main>
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
