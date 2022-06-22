<template>
  <v-container>
    <br>
    <v-btn @click="back" class="float-left">Back</v-btn>
    <v-card class="text-center ml-auto mr-auto ma-6 pa-2" style="width: 70%">
      <v-card-title class="text-center" style="margin-left: 35%">
        FORGOT PASSWORD
      </v-card-title>
      <v-form ref="form1">
        <v-row cols="12">
          <v-col cols="6" sm="6">
            <v-text-field
              v-model="securityQ1"
              type="text"
              :rules="required"
          
              rounded
              label="When was the last time you had exercise?"
              filled
              dense
            ></v-text-field>
            <v-text-field
              v-model="securityQ2"
              :rules="required"
              rounded
              label="What is your next goal in life?"
              filled
              dense
            ></v-text-field>
            <v-text-field
              v-model="securityQ3"
              :rules="required"
              rounded
              label="What is the full name of your first love?"
              filled
              dense
            ></v-text-field>
          </v-col>
          <v-col cols="6" sm="6">
            <v-text-field
              prepend-inner-icon="mdi-email-outline"
              label="  Enter your Email"
              v-model="email"
              type="readonly"
              :rules="required"
              placeholder="Enter your Email"
              rounded
              filled
              dense
            ></v-text-field>
            <v-text-field
              :append-icon="value ? 'visibility' : 'visibility_off'"
              @click:append="() => (value = !value)"
              :type="value ? 'password' : 'text'"
              prepend-inner-icon="mdi-lock-open"
              v-model="password"
              :rules="required"
              label="Enter your Password"
              rounded
              filled
              dense
            ></v-text-field>
            <v-text-field
              :append-icon="value ? 'visibility' : 'visibility_off'"
              @click:append="() => (value = !value)"
              :type="value ? 'password' : 'text'"
              prepend-inner-icon="mdi-lock-open"
              v-model="confirmPassword"
              :rules="confirmPass"
              rounded
              label="Re-type Password"
              filled
              dense
            ></v-text-field>
          </v-col>
          <v-card-actions class="text-center" style="margin-left: 40%">
            <v-btn
              class="pa-2 mb-2"
              color="info"
              rounded
              dense
              @click.prevent="changePass"
              >Change Pass</v-btn
            >
          </v-card-actions>
        </v-row>
      </v-form>
    </v-card>
  </v-container>
</template>

<script>
import PromptAlert from "@/utils/Prompt";
export default {
  data() {
    return {
      loginPage: true,
      forgotPass: false,
      mixins: [PromptAlert],
      value: String,
      email: "",
      password: "",
      required: [(v) => !!v || "Field is required"],
      confirmPass: [
        (v) => !!v || "Field is required",
        (v) => v == this.password || "Password does not match",
      ],
      confirmPassword: "",
      securityQ1: "",
      securityQ2: "",
      securityQ3: "",
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

    back() {
      this.$router.push("/login");
    },

    forgotPassButton() {
      console.log("clicked");
      this.loginPage = false;
      this.forgotPass = true;
    },

    async changePass() {
      if (this.$refs.form1.validate()) {
        const email = this.email;
        const password = this.password;

        const securityQ1 = this.securityQ1;
        const securityQ2 = this.securityQ2;
        const securityQ3 = this.securityQ3;
        const data = {
          email,
          password,
          securityQ1,
          securityQ2,
          securityQ3,
        };
        console.log(data);

        const returnedData = await this.$store.dispatch("changePass", data);
        console.log(returnedData);
        if (returnedData.data === "success") {
   
          this.showSuccessResponse("Successfully changed password!");
          this.$router.push("/login");
        } else {
          console.log(returnedData.data);
          this.showErrorResponse("Changing Failed", returnedData.data);
        }
      }
    },
  },
  created() {},
};
</script>
