<template>
   <nav>
       <v-app-bar  color="#000328" dark app >
           <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
          
           <v-spacer></v-spacer>

            <!-- <v-avatar>
      <img
        src="http://127.0.0.1:8000/storage/profiles/personal-photo/image.png"
        alt="user"
        style="border-radius:50px ; height:10vh;width:40px;margin-left:40px"

      >
      <span style="font-size:12px ;margin-right:30px">{{user}}</span>
    </v-avatar> -->
           
      <img
        src="http://127.0.0.1:8000/storage/profiles/personal-photo/image.png"
        alt="user"
        style="border-radius:100px ; height:40px;width:40px;margin-right:20px"

      >
      <span style="font-size:14px ;margin-right:30px"> {{user}}</span>

            
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
          <v-list-item-title >{{link.text}} </v-list-item-title>
        </v-list-item>
         <v-btn text @click="logOut">
                <span style="font-size:14px"> Sign Out</span>
                <v-icon right></v-icon>
             </v-btn>
      </v-list>
            </v-menu>
           
       </v-app-bar>
      
      <v-navigation-drawer  v-model="drawer" dark app color="#00063F">
          <v-layout column align-center>
             <br><br>
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
     user:JSON.parse(sessionStorage.user_session).role,
      drawer: true,
      links :[
         {icon: 'person', text:'Personal Data Sheet', route: '/personalDataSheet'},
          {icon: 'person', text:'ESAT',  route: '/esat'},
          {icon: 'folder', text:'Manage IPCRF', route: '/manageIpcrf' ,items: [
            { title: 'List Item' }
          ]}
          
      ],
    
     
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
