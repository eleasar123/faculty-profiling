<template>

  <v-app>

    <v-content class="ma-4">
      <router-view></router-view>
    </v-content>
   
  </v-app>

</template>

<script>

// import Navbar from '@/components/NavBar.vue'

export default {
  name: 'App',

  components: {
  // Navbar
  },

  data: () => ({
    ////
    userData:JSON.parse(sessionStorage.getItem("userData"))
  }),
  created(){
    console.log(this.userData)
    if(this.userData==null){
      this.$router.push("/login");
    }else{
      this.$router.push("/home")
    }
  }
};
</script>
