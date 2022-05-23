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
          <v-col   style="width:70%; margin:auto" >
            <v-text-field
            prepend-inner-icon="mdi-email-outline"
              label="  Enter your Email"
              v-model="email"
              type="email"
              required

              placeholder="Enter your Email"
              rounded solo dense
            ></v-text-field>
            <v-text-field
         
             :append-icon="value ? 'visibility' : 'visibility_off'"
              @click:append="() => (value = !value)"
              :type="value ? 'password' : 'text'"
              prepend-inner-icon="mdi-lock-open"
              label="Enter your Password"
              v-model="password"
              required
              placeholder="Enter your Password"
              rounded solo dense
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
import PromptAlert from "@/utils/Prompt";
export default {
  name: "LogIn",
  data() {
    return {
      mixins:[PromptAlert],
      value: String,
      email: '',
      password: '',
    };
  },
  methods: {
     showErrorResponse(title, message) {
            this.$swal.fire({
                icon: "error",
                title: title,
                text: message
            })
        },
    async getDetails() {
      const email = this.email
      const password = this.password
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
        window.location.href = '/personalDataSheet'
        // this.$router.push("/personalDataSheet");
      }else{
         this.showErrorResponse("Log In Failed", returnedData.data[0].message);
      }
    },

    // login(data){
    //     this.$router.push('localhost:8000/'+ data)
    // }
  },
};
</script>

