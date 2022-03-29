<template>
<div>
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
    
         </v-container >

  <v-data-table  
    :headers="headers"
    :items="desserts"
    sort-by="name"
    class="elevation-1 mt-5"
  >
  
    <template v-slot:top>
      <v-toolbar
        flat
      >
        <v-toolbar-title>Manage User</v-toolbar-title>
        <!-- <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider> -->
        <v-spacer></v-spacer>
        <v-dialog
          v-model="dialog"
          max-width="500px"
        >
          <template v-slot:activator="{ on, attrs }">
        
            <v-btn
              color="primary"
              dark
              class="mb-2 mr-5" 
              v-bind="attrs"
              v-on="on"
            >
             Add User
            </v-btn>
          </template>
       
          <v-card>
            <v-card-title>
              <span class="text-h5">{{ formTitle }}</span>
            </v-card-title>

            <v-card-text>
              <v-container>
                <v-row>
                  
                  <v-col
                    cols="12"
                    sm="6"
                  >
                        <v-text-field
                          v-model="editedItem.name"
                          label="Full Name"
                          variant="outlined"
                          readonly
                        ></v-text-field>
                  </v-col>
                      <v-col
                    cols="12"
                    sm="6"
                  >
                        <v-text-field
                          v-model="editedItem.email"
                          label="Email Address"
                          variant="outlined"
                          readonly
                        ></v-text-field>
                  </v-col><br>

                    <v-col
                    cols="12"
                    sm="6"
                  >
                        <v-text-field
                          v-model="editedItem.password"
                          label="Password"
                          variant="outlined"
                          readonly
                        ></v-text-field>
                  </v-col>
                  
              

                </v-row>
              </v-container>
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                color="blue darken-1"
                text
                @click="close"
              >
                Cancel
              </v-btn>
              <v-btn
                color="blue darken-1"
                text
                @click="save"
              >
                Save
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
        <v-dialog v-model="dialogDelete"   max-width="500px" >
          <v-card>
            <v-card-title class="text-h6 ">Are you sure you want to delete this item?</v-card-title>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="closeDelete">Cancel</v-btn>
              <v-btn color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
              <v-spacer></v-spacer>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-toolbar>
    </template>
    <template v-slot:item.actions="{ item }">
      <v-icon
        small
        class="mr-2"
        @click="editItem(item)"
      >
        mdi-pencil
      </v-icon>
      <v-icon
        small
        @click="deleteItem(item)"
      >
        mdi-delete
      </v-icon>
    </template>
    <template v-slot:no-data>
      <v-btn
        color="primary"
        @click="initialize"
      >
        Reset
      </v-btn>
    </template>
  </v-data-table>
  </div>
</template>

<script>
  export default {
    data: () => ({
      dialog: false,
      dialogDelete: false,
      headers: [
        { text: 'Full Name', value: 'name' },
        { text: 'Email Address', value: 'email' },
        { text: 'Password', value: 'password' },
        { text: 'Actions', value: 'actions', sortable: false },
      ],
      desserts: [],
      editedIndex: -1,
      editedItem: {
        name: '',
        email: '',
        password: '',
     
      },
      defaultItem: {
        name: '',
        email: '',
        password: '',
    
      },
    }),
    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'Add User' : 'Edit User Details'
      },
    },
    watch: {
      dialog (val) {
        val || this.close()
      },
      dialogDelete (val) {
        val || this.closeDelete()
      },
    },
    created () {
      this.initialize()
    },
    methods: {
      initialize () {
        this.desserts = [
          {
            name: 'Leslie Marie Reyes',
           
            email: 'lesh@gmail.com',
            password: 12345,
            
          },
          {
            name: 'Eleasar Patot',
         
            email: 'elsa@gmail.com',
            password: 12345,
         
          },
          {
            name: 'Jolly Borbon',
          
            email: 'jolly@gmail.com',
            password: 12345,
          
          },
          {
            name: 'Dexter Tampioc',
           
            email: 'dexter@gmail.com',
            password: 12345,
        
          },
         
        ]
      },
      editItem (item) {
        this.editedIndex = this.desserts.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true
      },
      deleteItem (item) {
        this.editedIndex = this.desserts.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialogDelete = true
      },
      deleteItemConfirm () {
        this.desserts.splice(this.editedIndex, 1)
        this.closeDelete()
      },
      close () {
        this.dialog = false
        this.$nextTick(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        })
      },
      closeDelete () {
        this.dialogDelete = false
        this.$nextTick(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        })
      },
      save () {
        if (this.editedIndex > -1) {
          Object.assign(this.desserts[this.editedIndex], this.editedItem)
        } else {
          this.desserts.push(this.editedItem)
        }
        this.close()
      },
    },
  }
</script>