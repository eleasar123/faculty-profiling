<template>
  <!-- <head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

</head> -->
  <div id="app" class="d-flex justify-center">
   
          <v-card max-width="450px" class="mx-auto bg" elevation="2">
            <v-img
              class=""
              height="200px"
              src="http://unblast.com/wp-content/uploads/2021/09/Real-Estate-Agent-Illustration.jpg"
              gradient="150deg, rgb(185 224 255 / 58%) 0%, rgb(243 220 246 / 52%) 35%, rgb(223 255 242 / 74%) 74%"
            >
            </v-img>
            <v-row justify="center">
              <v-col
                align-self="start"
                class="d-flex justify-center align-center pa-0"
                cols="12"
              >
                <v-avatar
                  class="profile avatar-center-heigth avatar-shadow"
                  color="grey"
                  size="164"
                >
                  <v-btn @click="updateImage" class="upload-btn" x-large icon>
                    <v-icon> mdi-camera </v-icon>
                  </v-btn>
                  <input
                    ref="uploader"
                    class="d-none"
                    type="file"
                    :v-model="image"
                    accept="image/*"
                    :change="onFileChanged"
                  />
                  <v-img :src="profile"></v-img>
                </v-avatar>
              </v-col> </v-row
            ><br />
            <!-- <v-list-item color="#0000" class="profile-text-name ma-4 pt-16">
              <v-list-item-content>
                <v-list-item-title class="text-h6">
                {{user.name}}
                </v-list-item-title>

                <v-list-item-subtitle>{{user.email}} <br> {{user.role}}</v-list-item-subtitle>
              </v-list-item-content>
              <v-list-item-action>
                <v-btn class="mx-2" fab dark color="indigo" small>
                  <v-icon dark>
                    mdi-plus
                  </v-icon>
                </v-btn>
              </v-list-item-action>
            </v-list-item> -->
            <br /><br /><br />  <br />
             <v-list-item-content>
                <v-list-item-title class="text-h6 text-center">
               USER PROFILE 
                </v-list-item-title>

              
              </v-list-item-content>
          
            <v-card-subtitle>
            
              <v-btn style="float: right" v-on:click="saveBio" icon>
                <v-icon small>{{ bioIcon }}</v-icon>
              </v-btn>
            </v-card-subtitle>

            <p v-if="!editBio" class="pl-6 pr-6 pt-0">
              {{ Bio }}
            </p>
            <!-- <v-textarea v-model="Bio" rows="2" v-if="editBio" label="Edit Profile" class="pa-6"></v-textarea> -->

            <v-spacer></v-spacer>
            <v-text-field
              class=" pl-6"
              v-model="user.name"
              prepend-icon="person"
              label="Name"
              :readonly="!editBio"
            ></v-text-field>

             <v-text-field
              class="pr-10 pl-6"
              v-model="user.email"
              prepend-icon="mdi-email"
              label="Email"
              :readonly="!editBio"
            ></v-text-field>

            <v-text-field
              class="pr-10 pl-6"
              v-model="user.role"
              prepend-icon="mdi-account-check"
              label="Role"
              :readonly="!editBio"
            ></v-text-field>

            <v-card-title style="text-align:center">Security Questions:</v-card-title>
            <v-text-field
              class="pr-10 pl-6"
              v-model="securityQ1"
              
              label="When was the last time you had exercise?"
              :readonly="!editBio"
            ></v-text-field>
             <v-text-field
              class="pr-10 pl-6"
              v-model="securityQ2"
              
              label="What is your next goal in life?"
              :readonly="!editBio"
            ></v-text-field>
            <v-text-field
              class="pr-10 pl-6"
              v-model="securityQ3"
              
              label="Who is your first love?"
              :readonly="!editBio"
            ></v-text-field>
     
            <v-spacer></v-spacer>

            <!-- <v-row>
              <v-col cols="6" class="text-end">
                <v-list-item-content class="sutitles">
                  <v-list-item-title class="text-h6">
                    1002
                  </v-list-item-title>
                  <v-list-item-subtitle class="text-caption">Curtidas</v-list-item-subtitle>
                </v-list-item-content>
              </v-col>
              <v-col cols="6" class="text-start">
                <v-list-item-content class="sutitles">
                  <v-list-item-title class="text-h6">
                    10
                  </v-list-item-title>
                  <v-list-item-subtitle class="text-caption">Seguindo</v-list-item-subtitle>
                </v-list-item-content>
              </v-col>
            </v-row> -->
            <!--<v-row>
              <v-col class="d-flex justify-end align-right pa-2" cols="6">
                <v-btn rounded color="primary" dark>
                  Agendar um Horário
                </v-btn>
              </v-col>
              <v-col class="d-flex justify-left align-left pa-2" cols="6">
                <v-btn rounded color="primary" dark>
                  Contato
                </v-btn>
              </v-col>
            </v-row>-->
          </v-card>
   
  </div>

  <!-- 
<v-container fluid v-if="showProfile == true"> 
  <v-card
    :loading="loading"
    class="mx-auto ma-2"
    
    max-width="50%"
  >
<v-card-title class="align-items-center" style="display:block;text-align:center;">USER PROFILE</v-card-title>

  <v-container class="ma-1 pa-1">
     <v-avatar
            class="profile align-items-center"
            style="display:block;margin-left:auto;margin-right:auto"
            color="white"
            size="200"
            tile
          >
            <v-img :src="user.profile" style="border-radius:100px "></v-img>
          </v-avatar>
  </v-container>

    

    <v-card-text class="text-center">
     
      <div class="ml-2 ma-2 text-subtitle-1"><strong>Name:</strong>&nbsp;&nbsp;&nbsp;&nbsp;
        {{user.name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       <strong>Email:</strong>&nbsp;&nbsp;&nbsp;&nbsp;{{user.email}}</div>
       <div class="ml-2 ma-2"><strong>Password:</strong>&nbsp;&nbsp;&nbsp;&nbsp;{{user.email}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Role:</strong>&nbsp;&nbsp;&nbsp;&nbsp;{{user.role}}</div>

    </v-card-text>

    <v-divider class="mx-4"></v-divider>

    <v-card-title style="text-align:center">Security Questions</v-card-title>

    
      <v-container class="ma-2" style=" border-radius: 25px;max-width:95%;display:block;margin-left:auto;margin-right:auto"
        fluid
      >
      <v-row cols=12>
        <v-col sm="8" cols="8">When was the last time you had exercise?
              </v-col>
              <v-col sm="4" cols="4"><div>{{securityQ1}}</div></v-col>
      </v-row>
        
     <v-row cols=12>
        <v-col sm="8" cols="8">What is your next goal in life?
              </v-col>
              <v-col sm="4" cols="4"><div>{{securityQ2}}</div></v-col>
      </v-row>
       <v-row cols=12>
        <v-col sm="8" cols="8">Who is your first love?
              </v-col>
              <v-col sm="4" cols="4"><div>{{securityQ3}}</div></v-col>
      </v-row>


     </v-container>
   

    <v-card-actions>
      <v-btn
        color="deep-purple lighten-2"
        text
        @click="back"
      >
        Back
      </v-btn>
       <v-btn
        color="deep-purple lighten-2"
        text
        @click="editInfo"
      >
        Edit Info
      </v-btn>
    </v-card-actions>
  </v-card>
  </v-container> -->
  <!-- <v-container v-else-if="editProfile" fluid> 
  <v-card
    class="mx-auto"
    color="#26c6da"
    dark
    max-width="400"
  >
    <v-card-title>
      <v-icon
        large
        left
      >
        mdi-twitter
      </v-icon>
      <span class="text-h6 font-weight-light">Twitter</span>
    </v-card-title>

    <v-card-text class="text-h5 font-weight-bold">
      "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
    </v-card-text>

    <v-card-actions>
      <v-list-item class="grow">
        <v-list-item-avatar color="grey darken-3">
          <v-img
            class="elevation-6"
            alt=""
            src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
          ></v-img>
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title>Evan You</v-list-item-title>
        </v-list-item-content>

        <v-row
          align="center"
          justify="end"
        >
          <v-icon class="mr-1">
            mdi-heart
          </v-icon>
          <span class="subheading mr-2">256</span>
          <span class="mr-1">·</span>
          <v-icon class="mr-1">
            mdi-share-variant
          </v-icon>
          <span class="subheading">45</span>
        </v-row>
      </v-list-item>
    </v-card-actions>
  </v-card>

  </v-container>  -->
</template>
<style>
.avatar-center-heigth {
  position: absolute;
}

.profile-text-name {
  margin-top: 70px;
}

.sutitles {
  margin: 5px;
  padding: 16px;
}
.upload-btn {
  position: absolute !important;
  z-index: 999;
  top: 121px;
  color: cadetblue;
  background: blueviolet;
  background: rgb(125, 198, 163);
  background: linear-gradient(
    50deg,
    rgba(125, 198, 163, 1) 0%,
    rgba(35, 216, 227, 1) 72%
  );
}

.bg {
  background: rgb(255, 197, 185);
  background: linear-gradient(
      0deg,
      rgba(255, 197, 185, 0.711922268907563) 0%,
      rgba(220, 246, 223, 0.6671043417366946) 35%,
      rgba(255, 255, 255, 0.7539390756302521) 74%
    ),
    url(http://unblast.com/wp-content/uploads/2021/09/Real-Estate-Agent-Illustration.jpg);
}

.avatar-shadow {
  box-shadow: 0px 0px 10px 0px rgba(50, 12, 112, 0.75);
  -webkit-box-shadow: 0px 0px 10px 0px rgba(50, 12, 112, 0.75);
  -moz-box-shadow: 0px 0px 10px 0px rgba(50, 12, 112, 0.75);
}
</style>

<script>
export default {
  data() {
    return {
      user: "",
      profile: "",
      name: this,
      role: "",
      email: "",
      password: '',
      securityQ1: "",
      securityQ2: "",
      securityQ3: "",
      editProfile: false,
      showProfile: true,
      bioIcon: "mdi-pencil",
      image:"",
    };
  },
 
  created() {
    console.log()
    this.user = JSON.parse(sessionStorage.getItem("user_session"))
    this.profile = JSON.parse(sessionStorage.getItem("user_session")).profile
    this.securityQ1 = JSON.parse(sessionStorage.getItem("security_question"))[0]
        .question_one
    this.securityQ2 = JSON.parse(sessionStorage.getItem("security_question"))[0]
        .question_two
    this.securityQ3 = JSON.parse(sessionStorage.getItem("security_question"))[0]
        .question_three
  },
  methods: {
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
    saveBio() {
      this.editBio = !this.editBio;
      this.bioIcon = "mdi-content-save";
      if (!this.editBio) {
        this.bioIcon = "mdi-pencil";

        alert("Successfully Saved!");
      }
    },
    updateImage() {
      this.isSelecting = true;
      window.addEventListener(
        "focus",
        () => {
          this.isSelecting = false;
        },
        { once: true }
      );

      this.$refs.uploader.click();
    },
    async onFileChanged(e) {
      this.selectedFile = e.target.files[0];
      console.log(this.image)
      let image = new FormData();
      image.append('image', this.image)
      const returnedData = await this.$store.dispatch('updateImage');
      if(returnedData){
        console.log(true)
      }
      // do something
    },
  },
};
</script>
