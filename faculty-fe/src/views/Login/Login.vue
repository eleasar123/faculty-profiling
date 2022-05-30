<template>
<!-- <template style="border:solid 2px black"> -->
<!-- <v-container height="100vh" fluid class="pa-0 ma-0" style="border:solid 2px black"> -->
  <div>
  <v-img  style="height:100vh;width:100%" :src="require('../../assets/landingBg.gif')">


      <v-col md="5" style="float:right">
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
          <br>
          <v-col style="width:65%; margin:auto" >
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
   
</v-img>
</div>
<!-- </v-container> -->
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
        showSuccessResponse(title ) {
            this.$swal.fire(
             { title: title}
            )
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
          this.showSuccessResponse("Successfully Signed In!");
        window.location.href = '/personalDataSheet'
      
        // this.$router.push("/personalDataSheet");
      }else{
        console.log(returnedData.data)
         this.showErrorResponse("Log In Failed", returnedData.data[0].message);
      }
    },

    // login(data){
    //     this.$router.push('localhost:8000/'+ data)
    // }
  },
};
</script>

