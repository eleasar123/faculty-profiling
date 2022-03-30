<template>
  <v-app>
    <v-card>
      <v-tabs
        mt-5
        v-model="tab"
        background-color="blue accent-4"
        centered
        dark
        icons-and-text
      >
        <v-tabs-slider></v-tabs-slider>

        <v-tab href="#subscribe">
          C1
          <!-- <v-icon>mdi-phone</v-icon> -->
        </v-tab>

        <v-tab href="#contact"> C2 </v-tab>

        <v-tab href="#c3"> C3 </v-tab>

        <v-tab href="#c4"> C4 </v-tab>
      </v-tabs>


      <v-tabs-items v-model="tab">
          <!-- this is the content for c1 tab -->
        <v-tab-item :key="1" value="subscribe">
          <v-card flat>
            <v-card-text>c1</v-card-text>
          </v-card>
        </v-tab-item>

        <!-- this is the content for c2 tab -->
        <v-tab-item :key="2" value="contact">
          <v-card flat>
            <v-card-text>c2</v-card-text>
          </v-card>
        </v-tab-item>

        <!-- this is the content for c3 tab -->
        <v-tab-item :key="3" value="c3">
          <v-card flat>
            <v-card-text>c3</v-card-text>
          </v-card>

          <!-- this is the content for c5 tab -->
        </v-tab-item>
        <v-tab-item :key="4" value="c4">
          <v-card flat>
            <v-card-text>c4</v-card-text>
          </v-card>
        </v-tab-item>
      </v-tabs-items>
    </v-card>
  </v-app>
</template>

<script>
// @ is an alias to /src
export default {
  data() {
    return {
      tab: "subscribe",
    };
  },
};
</script>
