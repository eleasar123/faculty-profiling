<template>
  <div class="team">
    <h1 class="subheading grey--text">Manage Ipcrf</h1>
    <v-container >
      <v-layout row wrap>
         <v-flex
        sm6
        xs12
        md6
        lg3
      >
       <v-card class="ma-3">
          <v-list-item  >
            <v-list-item-avatar
              tile
              class="mt-n7"
            >
            <v-sheet color="green" width="80" height="80" elevation="10">
                  <v-icon dark large>store</v-icon>
            </v-sheet>
            </v-list-item-avatar>
            <v-list-item-content>
              <div class="overline text-right">Faculty User</div>
              <v-list-item-title class="headline mb-1 text-center" >2</v-list-item-title>
              <div><v-divider></v-divider></div>
            </v-list-item-content> 
          </v-list-item>
   
         </v-card>
      </v-flex>
  
       
      </v-layout>
    </v-container>
  </div>
</template>

<script>
// @ is an alias to /src


export default {
  name: 'team',
  components: {
   
  },
  data : () => ({
    team: [
      {name: 'Iyad', role: 'web developer', avatar:'/img1.png'},
      {name: 'Reda', role: 'Graphic designer', avatar:'/img2.png'},
      {name: 'Zineb', role: 'web developer', avatar:'/img3.png'},
      {name: 'Hu TechGroup', role: 'Desktop developer', avatar:'/img4.png'},
    ]
  }),
}
</script>
