<template>
<v-container> 
  <v-card>
    <v-card-title>
      Store Inventory
      
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
      :items="products"
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
          <span class="text-h5">Products Inventory</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-row>
              <v-col
                cols="12"
                sm="6"
                md="4"
              >
               <label>Product Name:<span style='color:red'>*</span></label>
                <v-text-field
                   hint="Input the product name"
                   v-model="productName"
                  required
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                sm="6"
                md="4"
              >
               <label>Type:<span style='color:red'>*</span></label>
                <v-text-field
                  v-model="type"
                  hint="Input the product type"
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                sm="6"
                md="4"
              >
              <label>Quantity:<span style='color:red'>*</span></label>
                <v-text-field
                  hint="Input the quantity"
                  type="number"
                  v-model="quantity"
                  required
                ></v-text-field>
              </v-col>
              
            </v-row>
          </v-container>
          <small>*indicates required field</small>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            color="blue darken-1"
            text
            @click="cancel"
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
</v-container>
</template>

<script>
import moment from 'moment';
  export default {
    data () {
      return {
        products: [],
        productName: "",
        type: "",
        createdAt: "",
        updatedAt: "",
        quantity: "",
        dialog: false,
        id: "",
        search: '',
        edit: false,
        create: false,
        headers: [
          {
            text: 'ID',
            align: 'start',
            sortable: false,
            value: 'id',
          },
          { text: 'Product Name', value: 'name' },
          { text: 'Type', value: 'type' },
          { text: 'Quantity', value: 'quantity' },
           { text: 'Created At', value: 'createdAt' },
          { text: 'Updated At', value: 'updatedAt' },
          { text: 'Actions', value: "actions", sortable: false},
        ],
      }
    },
    created() {
      this.initializeData();
    },
    methods:{
      async initializeData(){
        this.products = []
        const returnedData = await this.$store.dispatch('retrieveProducts');
        console.log(returnedData);
        for (const items of returnedData.data){
          items.updatedAt = moment(items.updatedAt).format("LL")
          items.createdAt = moment(items.createdAt).format("LL")
          this.products.push(items)
        }
        console.log(this.products)
        
      },
      cancel(){
        this.productName = ""
        this.type = ""
        this.quantity = ""
        this.dialog = false
      },
      async save(){
        const data = {
          id: this.id,
          name: this.productName,
          type: this.type,
          quantity: this.quantity,
          updatedAt: this.updatedAt,
          createdAt: this.createdAt
        }
        console.log(this.productName, this.type, this.quantity)
        if(this.create == true){
           const returnedData = await this.$store.dispatch('createProduct', data)
            console.log(returnedData)
            this.create = false 
        }else{
          const returnedData = await this.$store.dispatch('updateProduct', data)
        console.log(returnedData)
        
        }
        
        this.dialog = false 
        this.initializeData()
        
      },
      editItem(data){
        this.id =data.id
        this.dialog =true
        this.productName = data.name
        this.type = data.type
        this.quantity = data.quantity
        console.log(data)
      },
     async deleteItem(data){
        console.log(data)
        const returnedData = await this.$store.dispatch('deleteProduct', data)
        if(returnedData){
          console.log(returnedData)
           this.initializeData()
        }
       
      },
      async createItem(){
        this.productName = ""
        this.type = ""
        this.quantity = ""
        this.create = true
        this.dialog = true
      },
    }
    
  }
</script>