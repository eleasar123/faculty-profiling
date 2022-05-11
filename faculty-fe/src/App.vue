<template>
  <v-app>
  <Navbar/>
    <v-main class="ma-4">
      <router-view></router-view>
    </v-main>
   
  </v-app>
 
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
  }),
};
</script>
