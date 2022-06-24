<template>
  <!-- <template style="border:solid 2px black"> -->
  <!-- <v-container height="100vh" fluid class="pa-0 ma-0" style="border:solid 2px black"> -->

  <v-img
    style="height: 100vh; width: 100%"
    :src="require('../../assets/landingBg.gif')"
  >
    <v-col md="5" style="float: right; overflow-y: auto" >
     
      <!--login form -->
      <v-form ref="form" @submit.prevent>
        <p class="text-center font-weight-bold">
          <br /><br /><br />
          <img
            :src="require('../../assets/lnhslogo.png')"
            width="100px"
            height="100px"
          />
        </p>
        <h3 class="text-center font-weight-bold white--text">
          LUT-OD NHS FACULTY
        </h3>
        <h3 class="text-center font-weight-bold white--text">
          PROFILING SYSTEM
        </h3>
        <br />
 
        <v-col style="width: 65%; margin: auto">
          <v-text-field
          class="inputEmail"
            prepend-inner-icon="mdi-email-outline"
            label="  Enter your Email"
            v-model="email"
            type="email"
            @enter.prevent
            :rules="required"
            placeholder="Enter your Email"
            rounded
            solo
            dense
          ></v-text-field>
          <v-text-field
            :append-icon="value ? 'visibility' : 'visibility_off'"
            @click:append="() => (value = !value)"
            :type="value ? 'password' : 'text'"
            prepend-inner-icon="mdi-lock-open"
            label="Enter your Password"
            v-model="password"
            @enter.prevent
            :rules="required"
            placeholder="Enter your Password"
            rounded
            solo
            dense
          ></v-text-field>
           
        </v-col>
          

        <p class="text-center  font-weight-bold">
          <v-btn 
            type="button"
            class=" signIn "
            color="info"
            value="log in"
            rounded
            dense
 
            @click.prevent="login"
            >Sign in</v-btn >
          
          <v-spacer></v-spacer>

        </p>
      </v-form>
      <button @click.prevent="forgotPassButton" class=" text-center white--text" 
           style="font-size:12px;font-weight:normal;font-style:italic; 
          margin-left: 24%;background-color:transparent; marging-top:270px;
        position:relative;margin-left:200px;z-index:1">
            Forgot Password?
            </button>
    </v-col>



  </v-img>

  <!-- </v-container> -->
</template>

<script>
import PromptAlert from "@/utils/Prompt";
export default {
  name: "LogIn",
  data() {
    return {
      loginPage: true,
      forgotPass: false,
      mixins: [PromptAlert],
      value: String,
      email: "",
      password: "",
      required: [(v) => !!v || "Field is required"],
      confirmPassword: '',
      securityQ1: '',
      securityQ2: '',
      securityQ3: '',
    };
  },
  methods: {
    showErrorResponse(title, message) {
      this.$swal.fire({
        icon: "error",
        title: title,
        text: message,
      });
    },
    showSuccessResponse(title) {
      this.$swal.fire({ title: title });
    },
    async login() {
      if (this.$refs.form.validate()) {
        const email = this.email;
        const password = this.password;
        const data = {
          email,
          password,
        };
        console.log(data);

        const returnedData = await this.$store.dispatch("loginLocally", data);
        console.log(returnedData);
        if (returnedData.data[0].message === "Credentials matched!") {
          // localStorage.setItem("userData", data);
          // sessionStorage.setItem("userData", data);
          this.showSuccessResponse("Successfully Signed In!");
          window.location.href = "/personalDataSheet";

          // this.$router.push("/personalDataSheet");
        } else {
          console.log(returnedData.data);
          this.showErrorResponse("Log In Failed", returnedData.data[0].message);
        }
      }
    },
    back () {
      this.forgotPass = false
      this.loginPage = true
      
    },

    forgotPassButton() {
      this.$router.push('/forgotPass')
    },
  
  },
};
</script>
