<template>
  <v-container>
   <v-container >
      <v-layout row wrap>
         <v-flex
        sm6
        xs12
        md6
        lg3
      >
       <v-card class="ma-3"  >
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
              <div class="overline text-right">Faculty Admin</div>
              <v-list-item-title class="headline mb-1 text-center" >{{countAdmin}}</v-list-item-title>
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
       <v-card class="ma-3 justify-center">
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
              <div class="overline text-right">Faculty Teacher</div>
              <v-list-item-title class="headline mb-1 text-center" >{{countTeachers}}</v-list-item-title>
              <div><v-divider></v-divider></div>
            </v-list-item-content> 
          </v-list-item>
   
         </v-card>
      </v-flex>
    
      </v-layout>
    
</v-container >
<v-card>
    <v-card-title>
      Manage Users
      
      <v-btn class="ml-5" @click="createItem">Create</v-btn>
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
  <v-data-table
      :headers="headers"
      :items="users"
      :search="search"
    >
    <template v-slot:[`item.actions`]="{ item }">
            <v-btn small class="mr-2 primary" @click="editItem(item)">
              Edit
            </v-btn>
            <v-btn small class="mr-2 btn error" @click="deleteItem(item)">
              Delete
            </v-btn>
          </template>
    </v-data-table>
  </v-card>


  <v-row justify="center" v-if="dialog==true">
    <v-dialog
      v-model="dialog"
      persistent
      max-width="600px"
    >
      <template v-slot:activator="{}">
        <!-- <v-btn
          color="primary"
          dark
          v-bind="attrs"
          v-on="on"
        >
        </v-btn> -->
      </template>
      <v-card>
        <v-card-title>
          <span class="text-h5">User</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form ref="form">
            <v-row>
              <v-col
                cols="12"
                sm="6"
                md="6"
              >
               <label>Name:<span style='color:red'>*</span></label>
                <v-text-field
                   hint="Input the user name"
                   v-model="name"
                   :rules="required"
                  required
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                sm="6"
                md="6"
              >
               <label>Password:<span style='color:red'>*</span></label>
                <v-text-field
                  v-model="password"
                  :rules="required"
                  hint="Input the user password"
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col
                cols="12"
                sm="6"
                md="6"
              >
              <label>Role:<span style='color:red'>*</span></label>
                <v-text-field
                  hint="Input the user role"
                  v-model="role"
                  :rules="required"
                  required
                ></v-text-field>
              </v-col>
               <v-col
                cols="12"
                sm="6"
                md="6"
              >
              <label>Photo:<span style='color:red'>*</span></label>
                <v-file-input
                  hint="Input the user photo"
                  v-model="photo"
                  :rules="required"
                  required
                ></v-file-input>
              </v-col>
            </v-row>
             <v-row>
              <v-col
                cols="12"
                sm="6"
                md="6"
              >
              <label>Email:<span style='color:red'>*</span></label>
                <v-text-field
                  hint="Input the user email"
                  v-model="email"
                  :rules="required"
                  required
                ></v-text-field>
              </v-col>
              
            </v-row>
            </v-form>
          </v-container>
          <small><span style="color: red">*&nbsp;</span>indicates required field</small>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            color="blue darken-1"
            text
            @click="close"
          >
            Close
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
  </v-row>
  <v-row justify="center" v-if="deleteDialog == true">
    
    <v-dialog
      v-model="deleteDialog"
      max-width="290"
    >
      <v-card>
        <v-card-title class="text-h5">
          Confirmation
        </v-card-title>

        <v-card-text>
         Are you sure you want to delete?
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>

          <v-btn
            color="green darken-1"
            text
            @click="deleteDialog = false"
          >
            Disagree
          </v-btn>

          <v-btn
            color="green darken-1"
            text
            @click="agree = true"
          >
            Agree
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
  </v-container>
</template>

<script>
  export default {
    data: () => ({
      search: '',
      agree: false,
      dialog: false,
      deleteDialog: false,
      headers: [
        { text: 'Full Name', value: 'name' },
        { text: 'Email Address', value: 'email' },
        { text: 'Password', value: 'password' },
        { text: 'Role', value: 'role' },
         { text: 'Photo', value: 'photo' },
        { text: 'Actions', value: 'actions', sortable: false },
      ],
      editedIndex: -1,
        id: '',
        name: '',
        email: '',
        password: '',
        role: '',
        photo: '',
      
      countTeachers: '',
      countAdmin: '',
    users: [],
    required: [
        v => !!v || 'Field is required',
       
      ],
    formData: '',
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
      this.initializeData()
    },
    methods: {
      async initializeData () {
        const role = JSON.parse(sessionStorage.user_session).role
        console.log(role)
     
          let userData = await this.$store.dispatch('retrieveUserProfile') 
          console.log(userData)
          if(userData){
            this.users = []
            for(const user of userData.data){
              this.users.push(user)
              if(user.role == "Admin"){
                this.countAdmin++
              }else{
                this.countTeachers++
              }
              console.log(user)
            }
            console.log(this.users)
          }
        
      },
      async deleteItem(data){
        console.log(data)
        this.dialogDelete = true
        if(this.agree == true){
          const returnedData = await this.$store.dispatch('deleteProduct', data)
        if(returnedData){
          console.log(returnedData)
           this.initializeData()
        }
        }
        
       
      },
      
      close () {
        this.dialog = false
        this.$nextTick(() => {
          this.editedItem = Object.assign({})
          this.editedIndex = -1
        })
      },
      editItem(data){
        console.log(data)
        this.id = data.id
        this.name =data.name
        this.email = data.email
        this.password = data.password
        this.role = data.role
        this.photo = data.profile
        this.dialog =true
      },
       async createItem(){
        this.create = true
        this.dialog = true
      },
     async save(){
       if(this.$refs.form.validate()==true){
        console.log("reached")
        let formData = new FormData()
        
        formData.append('id', this.id)  
        formData.append('name', this.name) 
        formData.append('email', this.email) 
        formData.append('password', this.password)  
        formData.append('role', this.role,)  
        formData.append('photo', this.photo)  

        if(this.create == true){
          console.log(this.create)
           const returnedData = await this.$store.dispatch('createUser', formData)
            console.log(returnedData)
            this.create = false 
        }else {
          console.log(formData)
          const returnedData = await this.$store.dispatch('updateUser', formData)
          console.log(returnedData)
        
        }
        this.name =''
        this.email = ''
        this.password = ''
        this.role = ''
        this.photo = ''
        this.dialog = false 
        this.initializeData()
        
      }
       },
    },
  }
</script>