<template>
  <v-app>
    <v-card>
        <v-container>
              <v-col> Personal Data Sheet
               </v-col
              >
        </v-container>
      <v-tabs
        mt-3  
        v-model="tab"
        background-color="green darken-4"
        left
        dark
        icons-and-text
      >
        <v-tabs-slider></v-tabs-slider>

        <v-tab href="#c1">
          C1
          <!-- <v-icon>mdi-phone</v-icon> -->
        </v-tab>

        <v-tab href="#c2"> C2 </v-tab>
 
        <v-tab href="#c3"> C3 </v-tab>

        <v-tab href="#c4"> C4 </v-tab>
      </v-tabs>

      <v-tabs-items v-model="tab">
        <!-- this is the content for c1 tab -->
        <v-tab-item :key="1" value="c1">
          <v-card flat>
            <v-card-text>c1</v-card-text>
            <v-container class="grey lighten-5">
              <v-card class="pa-5" outlined tile> hello </v-card>
              <v-card class="pa-5" width="200px" outlined tile> hello </v-card>

              <v-col>
                <v-card class="pa-5" width="200px" outlined tile>
                  hello
                </v-card></v-col
              >
              <v-btn
                color="primary"
                dark
                class="mb-2 mr-5"
                v-bind="attrs"
                v-on="on"
                @click="changeTab2()"
              >
                next
              </v-btn>
            </v-container>
          </v-card>
        </v-tab-item>

        <!-- this is the content for c2 tab -->
        <v-tab-item :key="2" value="c2">
          <v-card flat>
            <v-card-text>c2</v-card-text>
               <v-btn
                color="primary"
                dark
                class="mb-2 mr-5"
                v-bind="attrs"
                v-on="on"
                @click="changeTab1()"
              >
                previous
              </v-btn>
               <v-btn
                color="primary"
                dark
                class="mb-2 mr-5"
                v-bind="attrs"
                v-on="on"
                @click="changeTab3()"
              >
                next
              </v-btn>
             
          </v-card>
        </v-tab-item>

        <!-- this is the content for c3 tab -->
        <v-tab-item :key="3" value="c3">
          <v-card flat>
            <v-card-text>c3</v-card-text>
            
                <v-btn
                color="primary"
                dark
                class="mb-2 mr-5"
                v-bind="attrs"
                v-on="on"
                @click="changeTab2()"
              >
                previous
              </v-btn>

                <v-btn
                color="primary"
                dark
                class="mb-2 mr-5"
                v-bind="attrs"
                v-on="on"
                @click="changeTab4()"
              >
                next
              </v-btn>
             
          </v-card>

          <!-- this is the content for c5 tab -->
        </v-tab-item>
        <v-tab-item :key="4" value="c4">
          <v-card flat>
            <v-card-text>c4</v-card-text>
               <v-btn
                color="primary"
                dark
                class="mb-2 mr-5"
                v-bind="attrs"
                v-on="on"
                @click="changeTab3()"
              >
                previous
              </v-btn>
          </v-card>
        </v-tab-item>
      </v-tabs-items>
    </v-card>
  </v-app>
</template>

<script>
// @ is an alias to /src
export default {

    methods:{
        changeTab1(){
     this.tab='c1'
    },
    changeTab2(){
     this.tab='c2'
    },
    changeTab3(){
     this.tab='c3'
    },
    
    changeTab4(){
     this.tab='c4'
    }
    
  },
  data() {
    return {
      tab: "c1",
    };
  },
};
</script>
