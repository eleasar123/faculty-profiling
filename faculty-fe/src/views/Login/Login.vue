<template>
  <v-img :src="require('../../assets/landingBg.gif')">

    <v-layout>
      <v-spacer></v-spacer>
      <v-col md="5">
        <form ref="form">
          <p class="text-center font-weight-bold"><br><br><br><br><br>
            <img
              :src="require('../../assets/lnhslogo.png')"
              width="100px"
              height="100px"
            />
          </p>

          <h3 class="text-center font-weight-bold white--text">LUT-OD NHS FACULTY</h3>
          <h3 class="text-center font-weight-bold white--text">PROFILING SYSTEM</h3><br>
          <v-col>
            <v-text-field
            prepend-inner-icon="mdi-email-outline"
              label="Enter email"
              id="email"
              type="email"
              v-model="email"
              placeholder=""
              rounded 
              solo 
              dense
            ></v-text-field>
            <v-text-field
            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
            prepend-inner-icon="mdi-account-outline"
              v-model="password"
              label="Enter password"
              :type="show1 ? 'text' : 'password'"
              rounded 
              solo 
              flat
              dense
              @click:append="show1 = !show1"
            ></v-text-field>
          </v-col>

          <p class="text-center font-weight-bold">
            <v-btn
              type="button"
              class="mt-2"
              color="info"
              value="log in"
             
              rounded
              dense
              @click="getDetails()"
              >Sign in</v-btn
            >
          </p>
        </form>
      </v-col>
    </v-layout>
</v-img>
</template>
<script>
export default {
  name: "LogIn",
  data() {
    return {
      userData: [],
      email: '',
      password: '',
       show1: false,
      rules: {
          required: value => !!value || 'Required.',
          min: v => v.length >= 8 || 'Min 8 characters',
          emailMatch: () => (`The email and password you entered don't match`),
        },
    };
  },
  created(){
//hfhaksjdhkj
this.password = ''
  },
  methods: {
    async getDetails() {
      const email = this.email;
      const password = this.password;
      const data = {
        email,
        password,
      };
      console.log(data)
      const returnedData = await this.$store.dispatch("loginLocally", data);
      console.log(returnedData);
      if (returnedData.data[0].message === "Credentials matched!") {
        // localStorage.setItem("userData", data);
        // sessionStorage.setItem("userData", data);
        // this.$router.push("/personalData");
        window.location= '/personalData'
      }
    },

    // login(data){
    //     this.$router.push('localhost:8000/'+ data)
    // }
  },
};
</script>

