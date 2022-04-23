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
              label="  Enter your Email"
              id="email"
              type="email"
              placeholder="Enter your Email"
              rounded solo dense
            ></v-text-field>
            <v-text-field
           
            prepend-inner-icon="mdi-account-outline"
              label="Enter your Password"
              id="password"
              type="password"
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
export default {
  name: "LogIn",
  data() {
    return {};
  },
  methods: {
    async getDetails() {
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
      const data = {
        email,
        password,
      };
      const returnedData = await this.$store.dispatch("loginLocally", data);
      console.log(returnedData.data[0].message);
      if (returnedData.data[0].message === "Credentials matched!") {
        localStorage.setItem("userData", data);
        sessionStorage.setItem("userData", data);
        this.$router.push("/home");
      }
    },

    // login(data){
    //     this.$router.push('localhost:8000/'+ data)
    // }
  },
};
</script>

