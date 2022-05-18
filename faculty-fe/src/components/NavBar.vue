<template>
   <nav>
       <v-app-bar  color="#000328" dark app >
           <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
          
           <v-spacer></v-spacer>
           <v-menu offset-y>
      <template v-slot:activator="{ on }">
        <v-btn
          text
          v-on="on"
        >
          <v-icon left>expand_more</v-icon>
           
        </v-btn>
      </template>
      <v-list flat>
        <v-list-item v-for="link in links"  :key="link.text" router :to="link.route" active-class="border">
          <v-list-item-title >{{link.text}}</v-list-item-title>
        </v-list-item>
      </v-list>
            </v-menu>
            <v-btn text @click="logOut">
                <span>Exit</span>
                <v-icon right></v-icon>
             </v-btn>
       </v-app-bar>
      <v-navigation-drawer  v-model="drawer" dark app color="#00063F">
          <v-layout column align-center>
               <v-flex class="mt-5"> 
              
                     <img  :src="require('../assets/lnhslogo.png')" width="100px" height="100px"/>
                    <p class="white--text subheading mt-1 text-center">Lut-od NHS <br> Faculty Profiling <br>System</p>
               </v-flex>
               <!-- <v-flex class="mt-4 mb-4">
                <Popup />
               </v-flex> -->
          </v-layout>
          <v-list flat>
              <v-list-item v-for="link in links"  :key="link.text" router :to="link.route" active-class="border" >
                  <v-list-item-action>
                     <v-icon >{{link.icon}}</v-icon>
                  </v-list-item-action>
                  <v-list-item-content >
                      <v-list-item-title >{{link.text}}</v-list-item-title>
                  </v-list-item-content>
              </v-list-item>
          </v-list>
      </v-navigation-drawer>
   </nav>
</template>
<script>
//import Popup from './Popup.vue'
export default {
   data: () => ({
      drawer: true,
      links :[
          {icon: 'person', text:'ESAT',  route: '/esat'},
          {icon: 'folder', text:'Personal Data Sheet', route: '/personalDataSheet'},
          {icon: 'folder', text:'Manage IPCRF', route: '/manageIpcrf' ,items: [
            { title: 'List Item' }
          ]}
          
      ]
     
    }),
    created(){
      if(JSON.parse(sessionStorage.getItem("user_session")).role == 'Admin'){
        this.links.push({icon: 'dashboard', text:'Manage User', route: '/manageUser'},)
      }
    },
    methods: {
      logOut(){
        this.$store.dispatch('logout')
      }
    },

 
    components: {
   // Popup
  },

   
}
</script>
<style scoped>
.border {
  border-left: 4px  solid #EBECF0;
  
}
</style>
