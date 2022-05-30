<template>
  <v-container>
    <v-container v-if="showTable == true">
      <v-card>
        <v-card-title>
          <p>Individual Performance and Commitment and Review Form</p>
          <v-spacer></v-spacer>
          <v-text-field
            label="Search"
            style="width: 50px; margin-top: 10px"
            append-icon="mdi-magnify"
            v-model="search"
            filled
            rounded
            dense
          ></v-text-field>
       <v-btn class=" ml-5   pa-2"  @click="createIpcrf">Create</v-btn>
        </v-card-title>
        <v-data-table
          :headers="headers"
          :items="ipcrfDemographicProfile"
          :search="search"
          :loading="loading"
          loading-text="Please wait while loading data..."
        >
          <template v-slot:[`item.actions`]="{ item }">
            <v-icon small class="mr-2" @click="viewItem(item)">
              mdi-eye
            </v-icon>
          </template>
        </v-data-table>
      </v-card>
    </v-container>
    <v-container class="pa-4" v-if="show == true && showTable == false">
      <!-- START OF ENCODING -->
      <!--  -->
      <!-- END OF ENCODING -->
      <!-- start of part 1 display -->
      <v-tabs>
        <v-tab>Part 1 - Proficient</v-tab>
        <v-tab-item>
          <v-container fluid id="printMePart1">
            <table id="table" style="width: 100%">
              <tr class="row1">
                <td
                  id="tdata"
                  colspan="6"
                  class="pt-4"
                  style="background-color: #ddd9c3"
                >
                  <p style="text-align: center">
                    <b
                      >INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM (IPCRF)
                      for Teacher I-III, SPET I-IV, Special Science Teacher
                      I-II</b
                    >
                  </p>
                </td>
              </tr>
              <tr class="row1">
                <td id="tdata" style="line-height: 5px">
                  <p>Name of Employee:</p>
                </td>
                <td id="tdata" style="width: 20%">
                  <p>{{ ipcrfDemographicProfile.name_of_employee }}</p>
                </td>
                <td id="tdata" style="line-height: 5px">
                  <p>Name of Rater:</p>
                </td>
                <td id="tdata" style="width: 20%">
                  <p>{{ ipcrfDemographicProfile.rater }}</p>
                </td>
              </tr>
              <tr class="row1">
                <td id="tdata" style="line-height: 5px">
                  <p>Position:</p>
                </td>
                <td id="tdata" style="line-height: 5px">
                  <p>{{ ipcrfDemographicProfile.position }}</p>
                </td>
                <td id="tdata" style="line-height: 5px">
                  <p>Position:</p>
                </td>
                <td id="tdata" style="">
                  <p>{{ ipcrfDemographicProfile.rater_position }}</p>
                </td>
              </tr>
              <tr class="row1">
                <td id="tdata" style="line-height: 5px">
                  <p>Bureau/Center/Service/Division:</p>
                </td>
                <td id="tdata" style="line-height: 5px">
                  <p>{{ ipcrfDemographicProfile.division }}</p>
                </td>
                <td id="tdata" style="line-height: 5px">
                  <p>Date of Review::</p>
                </td>
                <td id="tdata" style="line-height: 5px">
                  <p>{{ ipcrfDemographicProfile.date_of_review }}</p>
                </td>
              </tr>
              <tr class="row1">
                <td id="tdata" style="line-height: 5px">
                  <p>Rating Period:</p>
                </td>
                <td id="tdata" style="line-height: 5px">
                  <p>{{ ipcrfDemographicProfile.rating_period }}</p>
                </td>
                <td id="tdata" colspan="2" style="line-height: 5px"></td>
              </tr>
            </table>
            <br />
            <div class="ePart2">
              <table
                id="table"
                style="width: 100%; text-align: center; font-weight: bold"
              >
                <tr class="row1 mt-2">
                  <td id="tdata" colspan="6" style="line-height: 5px">
                    <p>TO BE FILLED OUT DURING PLANNING</p>
                  </td>
                  <td id="tdata" colspan="11" style="line-height: 5px">
                    <p>TO BE FILLED OUT DURING EVALUATION</p>
                  </td>
                </tr>
                <tr
                  class="row1 light-green lighten-2"
                  style="width: 100%; text-align: center; font-weight: bold"
                >
                  <td id="tdata" rowspan="2" style="line-height: 5px">
                    <p>MFO's</p>
                  </td>
                  <td id="tdata" rowspan="2" style="line-height: 5px">
                    <p>KRAs</p>
                  </td>
                  <td id="tdata" rowspan="2" style="line-height: 5px">
                    <p>Objectives</p>
                  </td>
                  <td id="tdata" rowspan="2" style="line-height: 5px">
                    <p>Timeline</p>
                  </td>
                  <td id="tdata" rowspan="2">
                    <p>Weight per KRA</p>
                  </td>
                  <td
                    id="tdata"
                    colspan="6"
                    rowspan="1"
                    style="line-height: 5px"
                  >
                    <p>Performance Indicator</p>
                  </td>
                  <td id="tdata" rowspan="2">
                    <p>Actual Result</p>
                  </td>
                  <td id="tdata" colspan="4" style="line-height: 5px">
                    <p>Rating</p>
                  </td>
                  <td id="tdata" rowspan="2" style="line-height: 5px">
                    <p>Score</p>
                  </td>
                </tr>
                <tr
                  class="row1 light-green lighten-2"
                  style="text-align: center; font-weight: bold"
                >
                  <td id="tdata" style="line-height: 5px">
                    <p>QET</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>
                      Outstanding <br /><br /><br />
                      <br />5
                    </p>
                  </td>
                  <td id="tdata" style="line-height: 15px">
                    <p>
                      Very Satisfactory
                      <br />
                      4
                    </p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>
                      Satisfactory<br /><br />
                      <br /><br />
                      3
                    </p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>
                      Unsatisfactory <br /><br />
                      <br /><br />
                      2
                    </p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>
                      Poor <br /><br />
                      <br />
                      <br />
                      1
                    </p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>Q</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>E</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>T</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>AVE</p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" rowspan="36">
                    <p>Basic Education Services</p>
                  </td>
                  <td id="tdata" rowspan="9">
                    <p>1. Content Knowledge and Pedagogy</p>
                  </td>
                  <td id="tdata" rowspan="3">
                    <p>
                      1. Applied knowledge of content within and across
                      curriculum teaching areas.
                    </p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="weightPerKra" rowspan="9">
                    <p>24%</p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Demonstrated Level 7 in Objective 1 as shown in COT rating
                      sheets/interobserver agreement forms
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Demonstrated Level 6 in Objective 1 as shown in COT rating
                      sheets/interobserver agreement forms
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Demonstrated Level 5 in Objective 1 as shown in COT rating
                      sheets/interobserver agreement forms
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Demonstrated Level 4 in Objective 1 as shown in COT rating
                      sheets/interobserver agreement forms
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>
                      Demonstrated Level 3 in Objective 1 as shown in COT rating
                      sheets/interobserver agreement forms or No acceptable
                      evidence was shown
                    </p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[0]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>{{ ipcrfEncodingPart1[0].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[0].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score1">
                    <p>
                      {{ ipcrfEncodingPart1[0].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>

                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="eff6 pa-1 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="timeline6 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <!-- end of row1 -->
                <!-- start of row 2 -->
                <tr>
                  <td id="tdata" rowspan="3">
                    <p>
                      2. Ensured the positive use of ICT to facilitate the
                      teaching and learning process
                    </p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p></p>
                  </td>

                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Ensured that the ICT used redefine and transform learning
                      experiences and are documented properly and consistently
                      using any referencing style as shown in the submitted
                      learning material
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Ensured that the ICT used augment and enrich learning
                      experiences and are documented properly and consistently
                      using any referencing style as shown in the submitted
                      learning material
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Ensured that the ICT used modify processes and improve
                      learning experiences and are documented properly and
                      consistently using any referencing style as shown in the
                      submitted learning material
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Ensured that ICT are used but do not create a new learning
                      experience and/or are documented but not consistent with
                      one referencing style as shown in the submitted learning
                      material
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[1]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q2">
                    <p>{{ ipcrfEncodingPart1[1].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="e2 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="t2 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave2">
                    <p>
                      {{
                        ipcrfEncodingPart1[1].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score2">
                    <p>
                      {{ ipcrfEncodingPart1[1].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="eff6 pa-1 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" colspan="2" class="eff6 blue-grey darken-4">
                    <p></p>
                  </td>
                </tr>
                <!-- end of row 2 -->
                <tr>
                  <td id="tdata" rowspan="3">
                    <p>
                      3. Applied a range of teaching strategies to develop
                      critical and creative thinking, as well as other
                      higher-order thinking skills.
                    </p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p></p>
                  </td>

                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Ensured that the ICT used redefine and transform learning
                      experiences and are documented properly and consistently
                      using any referencing style as shown in the submitted
                      learning material
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Ensured that the ICT used augment and enrich learning
                      experiences and are documented properly and consistently
                      using any referencing style as shown in the submitted
                      learning material
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Ensured that the ICT used modify processes and improve
                      learning experiences and are documented properly and
                      consistently using any referencing style as shown in the
                      submitted learning material
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Ensured that ICT are used but do not create a new learning
                      experience and/or are documented but not consistent with
                      one referencing style as shown in the submitted learning
                      material
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[2]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q2">
                    <p>{{ ipcrfEncodingPart1[2].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="e2 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="t2 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave2">
                    <p>
                      {{
                        ipcrfEncodingPart1[2].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score3">
                    <p>
                      {{ ipcrfEncodingPart1[2].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="eff6 pa-1 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" colspan="2" class="eff6 blue-grey darken-4">
                    <p></p>
                  </td>
                </tr>

                <!-- Start Number 2 -->
                <tr class="row1">
                  <td id="tdata" rowspan="9">
                    <p>2. Diversity of Learners & Assessment and Reporting</p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      4. Established a learnercentered culture by using teaching
                      strategies that respond to their linguistic, cultural,
                      socioeconomic and religious backgrounds
                    </p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="weightPerKra" rowspan="9">
                    <p>24%</p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Utilized effective teaching strategies that are
                      appropriate in responding to learners’ linguistic,
                      cultural, socioeconomic, or religious backgrounds at an
                      individual level* as shown in the submitted learning
                      material
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Utilized effective teaching strategies that are
                      appropriate in responding to learners’ linguistic,
                      cultural, socioeconomic, or religious backgrounds at a
                      group level* as shown in the submitted learning material
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Utilized an effective teaching strategy that is
                      appropriate in responding to learners’ linguistic,
                      cultural, socioeconomic, or religious backgrounds as shown
                      in the submitted learning material
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Utilized a teaching strategy or strategies that partially
                      respond to learners’ linguistic, cultural, socioeconomic,
                      or religious backgrounds as shown in the submitted
                      learning material
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[3]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>{{ ipcrfEncodingPart1[3].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[3].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score4">
                    <p>
                      {{ ipcrfEncodingPart1[3].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="eff6 pa-1 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="timeline6 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      5. Planned and delivered teaching strategies that are
                      responsive to the special educational needs of learners in
                      difficult circumstances*, including: geographic isolation;
                      chronic illness; displacement due to armed conflict, urban
                      resettlement or disasters; child abuse and child labor
                      practices
                    </p>
                  </td>

                  <td id="tdata" class="weightPerKra" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Demonstrated Level 7 in Objective 5 as shown in COT rating
                      sheets/interobserver a greement forms
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Utilized effective teaching strategies that are
                      appropriate in responding to learners’ linguistic,
                      cultural, socioeconomic, or religious backgrounds at a
                      group level* as shown in the submitted learning material
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Utilized an effective teaching strategy that is
                      appropriate in responding to learners’ linguistic,
                      cultural, socioeconomic, or religious backgrounds as shown
                      in the submitted learning material
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Utilized a teaching strategy or strategies that partially
                      respond to learners’ linguistic, cultural, socioeconomic,
                      or religious backgrounds as shown in the submitted
                      learning material
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[4]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>{{ ipcrfEncodingPart1[4].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[4].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score6">
                    <p>
                      {{ ipcrfEncodingPart1[4].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="eff6 pa-1 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="timeline6 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      6. Used strategies for providing timely, accurate and
                      constructive feedback to improve learner performance
                    </p>
                  </td>
                  <td id="tdata" class="weightPerKra" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Provided learners with accurate, and specific and directed
                      constructive feedback* as shown in the evidence submitted
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Provided learners with accurate, and specific constructive
                      feedback as shown in the evidence submitted
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Provided learners with accurate, and general constructive
                      feedback as shown in the evidence submitted
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Provided learners with inaccurate and/or destructive
                      feedback as shown in the evidence submitted
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[5]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>{{ ipcrfEncodingPart1[5].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1">
                    <p>{{ ipcrfEncodingPart1[5].ipcrf_numerical_ratings_t }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[5].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score7">
                    <p>
                      {{ ipcrfEncodingPart1[5].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="eff6 pa-1 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1">
                    <p>
                      MOV submitted shows feedback given within 5 working days
                      from submission**
                    </p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1">
                    <p>
                      MOV submitted shows feedback given within 6-10 working
                      days from submission**
                    </p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1">
                    <p>
                      MOV submitted shows feedback given within 11-20 working
                      days from submission**
                    </p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1">
                    <p>
                      MOV submitted shows feedback given beyond 20 working days
                      from submission**
                    </p>
                  </td>
                  <td id="tdata" class="timeline6">
                    <p>No evidence was shown</p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" rowspan="6">
                    <p>3. Curriculum and Planning</p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      7. Selected, developed, organized and used appropriate
                      teaching and learning resources, including ICT, to address
                      learning goals
                    </p>
                  </td>

                  <td id="tdata" class="weightPerKra" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="weightPerKra" rowspan="6">
                    <p>16%</p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Demonstrated Level 7 in Objective 7 as shown in COT rating
                      sheets/interobserver agreement forms
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Demonstrated Level 6 in Objective 7 as shown in COT rating
                      sheets/interobserver agreement forms
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Demonstrated Level 5 in Objective 7 as shown in COT rating
                      sheets/interobserver agreement forms
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Demonstrated Level 4 in Objective 7 as shown in COT rating
                      sheets/interobserver agreement forms
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>
                      Demonstrated Level 3 in Objective 7 as shown in COT rating
                      sheets/interobserver agreement forms or No acceptable
                      evidence was shown
                    </p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[6]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>{{ ipcrfEncodingPart1[6].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" colspan="1" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[6].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score8">
                    <p>
                      {{ ipcrfEncodingPart1[2].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="eff6 pa-1 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="timeline6 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <!-- End Number7 -->

                <!-- Start Number 8 -->
                <tr class="row1">
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      8. Set achievable and appropriate learning outcomes that
                      are aligned with learning competencies
                    </p>
                  </td>

                  <td id="tdata" class="weightPerKra" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      All of the learning outcomes set are aligned with the
                      learning competencies as shown in the MOV submitted
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Majority of the learning outcomes set are aligned with the
                      learning competencies as shown in the MOV submitted
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Half of the learning outcomes set are aligned with the
                      learning competencies as shown in the MOV submitted
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Less than half of the learning outcomes set are aligned
                      with the learning competencies as shown in the MOV
                      submitted
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[7]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>{{ ipcrfEncodingPart1[7].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[7].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score10">
                    <p>
                      {{ ipcrfEncodingPart1[7].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="eff6 pa-1 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="timeline6 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <!-- End Number 3 -->
                <!-- Start Number 4 -->

                <tr class="row1">
                  <td id="tdata" rowspan="9">
                    <p>
                      4. Community Linkages and Professional Engagement &
                      Personal Growth and Professional Development
                    </p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      9. Built relationships with parents/ guardians and the
                      wider school community to facilitate involvement in the
                      educative process
                    </p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="weightPerKra" rowspan="9">
                    <p>24%</p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Sustained engagement with parents/ guardians and/ or wider
                      school community to facilitate involvement in the
                      educative process as evidenced by 2 or more of MOV no. 1
                      or 2
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Secured collaboration with parents/ guardians and/ or
                      wider school community to facilitate involvement in the
                      educative process as evidenced by one MOV no. 1 or 2
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Communicated with and obtained response from parents/
                      guardians and/ or wider school community to facilitate
                      involvement in the educative process as evidenced by MOV
                      No. 3
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Communicated with parents/ guardians and/or wider school
                      community to facilitate involvement in the educative
                      process but received no response/reply as evidenced by MOV
                      No. 3
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[8]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>{{ ipcrfEncodingPart1[8].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3">
                    <p>{{ ipcrfEncodingPart1[8].ipcrf_numerical_ratings_e }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave1">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="score11">
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1">
                    <p>Submitted any 4 of the acceptable MOV*</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1">
                    <p>Submitted any 3 of the acceptable MOV*</p>
                  </td>
                  <td id="tdata" class="eff4 pa-1">
                    <p>Submitted any 2 of the acceptable MOV*</p>
                  </td>
                  <td id="tdata" class="eff5 pa-1">
                    <p>Submitted any 1 of the acceptable MOV</p>
                  </td>
                  <td id="tdata" class="eff6 pa-1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="timeline6 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      10. Participated in professional networks to share
                      knowledge and to enhance practice
                    </p>
                  </td>

                  <td id="tdata" class="weightPerKra" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Participated in any professional network/ activity that
                      requires output* and proof of implementation ** within the
                      school to share knowledge and to enhance practice as
                      evidenced by the submitted MOV
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Participated in any professional network/ activity that
                      requires output* and proof of implementation ** within the
                      department/grade level to share knowledge and to enhance
                      practice as evidenced by the submitted MOV
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Participated in any professional network/ activity that
                      requires output* to share knowledge and to enhance
                      practice as evidenced by the submitted MOV
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Participated in any professional network/ activity that
                      does not require output to share knowledge and to enhance
                      practice as evidenced by the submitted MOV
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[9]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>{{ ipcrfEncodingPart1[9].ipcrf_numerical_ratings_q }}</p>
                  </td>
                  <td id="tdata" rowspan="3">
                    <p>{{ ipcrfEncodingPart1[9].ipcrf_numerical_ratings_e }}</p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[9].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score13">
                    <p>
                      {{ ipcrfEncodingPart1[9].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1">
                    <p>Submitted 4 different kinds of acceptable MOV***</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1">
                    <p>Submitted 3 different kinds of acceptable MOV***</p>
                  </td>
                  <td id="tdata" class="eff4 pa-1">
                    <p>Submitted 2 different kinds of acceptable MOV***</p>
                  </td>
                  <td id="tdata" class="eff5 pa-1">
                    <p>Submitted 1 of the acceptable MOV</p>
                  </td>
                  <td id="tdata" class="eff6 pa-1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="timeline6 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      11. Developed a personal improvement plan based on
                      reflection of one’s practice and ongoing professional
                      learning
                    </p>
                  </td>
                  <td id="tdata" class="weightPerKra" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Updated the Development Plan and approved by the rater
                      during Phase II of the RPMS cycle
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Discussed progress on the Development Plan with the rater
                      to check whether Development Needs were addressed
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Accomplished the Development Plan from learning objectives
                      up to resources needed to address Development Needs during
                      Phase I of the RPMS cycle
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Accomplished the Strengths and Development Needs portion
                      of the Development Plan after self-assessment at the
                      beginning of the school year
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[10]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>
                      {{ ipcrfEncodingPart1[10].ipcrf_numerical_ratings_q }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3">
                    <p>
                      {{ ipcrfEncodingPart1[10].ipcrf_numerical_ratings_e }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[10].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score13">
                    <p>
                      {{ ipcrfEncodingPart1[10].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1">
                    <p>
                      Submitted the IPCRF-DP with any 4 of the acceptable
                      Supporting MOV*
                    </p>
                  </td>
                  <td id="tdata" class="eff2 pa-1">
                    <p>
                      Submitted the IPCRF-DP with any 3 of the acceptable
                      Supporting MOV*
                    </p>
                  </td>
                  <td id="tdata" class="eff4 pa-1">
                    <p>
                      Submitted the IPCRF-DP with any 2 of the acceptable
                      Supporting MOV*
                    </p>
                  </td>
                  <td id="tdata" class="eff5 pa-1">
                    <p>
                      Submitted the IPCRF-DP with any 1 of the acceptable
                      Supporting MOV
                    </p>
                  </td>
                  <td id="tdata" class="eff6 pa-1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td
                    id="tdata"
                    colspan="2"
                    class="timeline6 blue-grey darken-4"
                  >
                    <p></p>
                  </td>
                </tr>
                <!-- End Number 4 -->

                <!-- Start Number 5 -->
                <tr class="row1">
                  <td id="tdata" rowspan="3">
                    <p>5. Plus Factor</p>
                  </td>
                  <td id="tdata" class="timelineObj1" rowspan="3">
                    <p>
                      12. Performed various related works/ activities that
                      contribute to the teaching-learning process
                    </p>
                  </td>

                  <td id="tdata" class="weightPerKra" rowspan="3">
                    <p></p>
                  </td>
                  <td id="tdata" class="weightPerKra" rowspan="3">
                    <p>16%</p>
                  </td>
                  <td id="tdata" class="quality1">
                    <p>Quality</p>
                  </td>
                  <td id="tdata" class="outstanding1">
                    <p>
                      Performed at least 1 related work/activity that
                      contributed to the teaching-learning process beyond the
                      school/ Community Learning Center (CLC) as evidenced by
                      submitted MOV
                    </p>
                  </td>
                  <td id="tdata" class="verySatisfactory1">
                    <p>
                      Performed at least 1 related work/activity that
                      contributed to the teaching-learning process within the
                      school/ Community Learning Center (CLC) as evidenced by
                      submitted MOV
                    </p>
                  </td>
                  <td id="tdata" class="satisfactory1">
                    <p>
                      Performed at least 1 related work/activity that
                      contributed to the teaching-learning process within the
                      learning area/ department as evidenced by submitted MOV
                    </p>
                  </td>
                  <td id="tdata" class="unsatisfactory1">
                    <p>
                      Performed at least 1 related work/activity that
                      contributed to the teaching-learning process within the
                      class as evidenced by submitted MOV
                    </p>
                  </td>
                  <td id="tdata" class="poor1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" rowspan="1" class="actualResult">
                    <p>
                      {{
                        ipcrfEncodingPart1[11]
                          .ipcrf_numerical_ratings_adjectival_rating
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="q1">
                    <p>
                      {{ ipcrfEncodingPart1[11].ipcrf_numerical_ratings_q }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="e1">
                    <p>
                      {{ ipcrfEncodingPart1[11].ipcrf_numerical_ratings_e }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" colspan="1" rowspan="3" class="ave1">
                    <p>
                      {{
                        ipcrfEncodingPart1[11].ipcrf_numerical_ratings_average
                      }}
                    </p>
                  </td>
                  <td id="tdata" rowspan="3" class="score8">
                    <p>
                      {{ ipcrfEncodingPart1[11].ipcrf_numerical_ratings_score }}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="eff1 pa-1">
                    <p>Efficiency</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1">
                    <p>Submitted any 4 of the acceptable MOV*</p>
                  </td>
                  <td id="tdata" class="eff2 pa-1">
                    <p>Submitted any 3 of the acceptable MOV*</p>
                  </td>
                  <td id="tdata" class="eff4 pa-1">
                    <p>Submitted any 2 of the acceptable MOV*</p>
                  </td>
                  <td id="tdata" class="eff5 pa-1">
                    <p>Submitted any 1 of the acceptable MOV</p>
                  </td>
                  <td id="tdata" class="eff6 pa-1">
                    <p>No acceptable evidence was shown</p>
                  </td>
                  <td id="tdata" colspan="2" class="eff6 pa-1">
                    <p></p>
                  </td>
                </tr>
                <tr>
                  <td id="tdata" class="timeline1 pa-1">
                    <p>Timeliness</p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline6 blue-grey darken-4">
                    <p></p>
                  </td>
                  <td id="tdata" class="timeline6">
                    <p></p>
                  </td>
                </tr>
                <!-- End Number 5 Obj -->
                <!-- Startof Ratingfor overall accomplishment -->
                <tr>
                  <td class="timeline6" colspan="12">
                    <p style="float: right" class="mr-2 mt-2">
                      Rating for Overall Accomplishment
                    </p>
                  </td>
                  <td id="tdata" class="ratingTotal" colspan="4">
                    <p>{{ ipcrfEncodingPart1[0].adjectival_rating }}</p>
                  </td>
                  <td id="tdata" class="ratingAverage">
                    <p>{{ ipcrfEncodingPart1[0].final_rating }}</p>
                  </td>
                </tr>
                <!-- End of Ratingfor overall accomplishment -->
              </table>
              <br />
              <br />
            </div>
            <!-- START OF ADJECTIVAL RATING -->
            <div>
              <table style="width: 50%; text-align: center">
                <tr>
                  <td id="tdata" colspan="2">ADJECTIVAL RATING EQUIVALENCES</td>
                </tr>

                <tr>
                  <td id="tdata">RANGE</td>
                  <td id="tdata">ADJECTIVAL RATING</td>
                </tr>
                <tr>
                  <td id="tdata">4.500-5.000</td>
                  <td id="tdata">OUTSTANDING</td>
                </tr>
                <tr>
                  <td id="tdata">3.500-4.499</td>
                  <td id="tdata">VERY SATISFACTORY</td>
                </tr>
                <tr>
                  <td id="tdata">2.500-3.499</td>
                  <td id="tdata">SATISFACTORY</td>
                </tr>
                <tr>
                  <td id="tdata">1.500-2.499</td>
                  <td id="tdata">UNSATISFACTORY</td>
                </tr>
                <tr>
                  <td id="tdata">below 1.499</td>
                  <td id="tdata">POOR</td>
                </tr>
              </table>
            </div>

            <!-- END OF ADJECTIVAL RATING -->
            <!-- Part 1 Display Signatures -->

            <div class="pa-10 ml-9" style="text-align: center">
              <v-row>
                <v-col>
                  <v-text-field
                    v-model="ipcrfDemographicProfile.name_of_employee"
                    readonly
                    class="text-center"
                    style="width: 200px; height: 100px; margin-left: 80px"
                  >
                  </v-text-field>

                  <h5 class="pa-2" style="margin-left: 80px">Ratee</h5>
                </v-col>
                <v-col>
                  <v-text-field
                    readonly
                    class="text-center"
                    v-model="ipcrfDemographicProfile.rater"
                    style="width: 200px; height: 100px; margin-left: 40px"
                  >
                  </v-text-field>

                  <h5 class="pa-2" style="margin-right: 10px">Rater</h5>
                </v-col>

                <v-col>
                  <v-text-field
                    v-model="ipcrfEncodingPart1[11].approving_authority"
                    readonly
                    class="text-center"
                    style="width: 200px; height: 100px; margin-left: 40px"
                  >
                    <!-- <p class="mt-6">{{ part_approvingAuthority }}</p> -->
                  </v-text-field>

                  <h5 class="pa-2" style="margin-left: -20px">
                    Approving Authority
                  </h5>
                </v-col>
              </v-row>
            </div>

            <br /><br />
          </v-container>
          <v-btn
            v-print="printObjPart1"
            style="margin-left: 45%; margin-right: auto"
            >Print</v-btn
          >
        </v-tab-item>
        <v-tab>Part II</v-tab>
        <v-tab-item>
          <!-- End of Display Signatures  -->

          <!-- end of part 1 display -->
          <!-- start of part 2 display -->

          <table id="table" style="width: 100%">
            <tr class="row1">
              <td id="tdata" colspan="6" class="grey lighten-2 pt-4 pb-0">
                <p style="text-align: center"><b>PART II: COMPETENCIES</b></p>
              </td>
            </tr>

            <tr class="row1">
              <td id="tdata" colspan="6" style="line-height: 5px">
                <p>
                  Instructions: Please indicate the number of competency
                  indicators that you demonstrated during the performance cycle.
                </p>
              </td>
            </tr>
            <tr class="row1">
              <td id="tdata">
                <p><b>CORE BEHAVIORAL COMPETENCIES</b></p>
              </td>
            </tr>
            <tr>
              <td id="tdata">
                <b>Self-Management</b> <br />
                1. Sets personal goals and directions, needs and development.
                <br />
                2. Undertakes personal actions and behavior that are clear and
                purposive and takes into account personal goals and values
                congruent to that of the organization. <br />
                3. Displays emotional maturity and enthusiasm for and is
                challenged by higher goals. <br />
                4. Prioritizes work tasks and schedules (through Gantt chants,
                checklists, etc.) to achieve goals.
                <br />
                5. Sets high quality, challenging, realistic goals for self and
                others.
              </td>

              <td id="tdata" colspan="1" style="width: 5%; text-align: center">
                {{ countSelfManagement }}
              </td>
              <td id="tdata" colspan="3">
                <b> Teamwork</b> <br />
                1. Willingly does his/her share of responsibility. <br />
                2. Promotes collaboration and removes barrier to teamwork and
                goal accomplishment across the organization.
                <br />
                3. Applies negotiation principles in arriving at win-win
                agreements.
                <br />
                4. Drives consensus and team ownership of decisions.
                <br />
                5. Works constructively and collaboratively with others and
                across organizations to accomplish organization goals and
                objectives.
              </td>
              <td id="tdata" colspan="1" style="width: 5%; text-align: center">
                {{ countTeamwork }}
              </td>
            </tr>
            <tr>
              <td id="tdata">
                <b>Professionalism and Ethics</b> <br />
                1. Demonstrates the values and behavior enshrined in the Norms
                and Conduct and Ethical Standards for Public Officials and
                Employees (RA 6713). <br />
                2. Practices ethical and professional behavior and conduct
                taking into account the impact of his/her actions and decisions.
                <br />
                3. Maintains a professional image: being trustworthy, regularity
                of attendance and punctuality, good grooming and communication.
                <br />
                4. Makes personal sacrifices to meet the organization’s needs.
                <br />
                5. Acts with a sense of urgency and responsibility to meet the
                organization’s needs, improve system and help others improve
                their effectiveness.
              </td>

              <td id="tdata" colspan="1" style="width: 5%; text-align: center">
                {{ countProfessional }}
              </td>
              <td id="tdata" colspan="3">
                <b> Service Orientation</b> <br />
                1. Can explain and articulate organizational directions, issues
                and problems.
                <br />
                2. Takes personal responsibility for dealing with and/or
                correcting customer service issues and concerns. <br />3.
                Initiates activities that promote advocacy for men and women
                empowerment.
                <br />
                4. Participates in updating office vision, mission, mandates and
                strategies based on DepEd strategies and directions.
                <br />
                5. Develops and adopts service improvement program through
                simplified procedures that will further enhance service
                delivery.
              </td>
              <td id="tdata" colspan="1" style="width: 5%; text-align: center">
                {{ countService }}
              </td>
            </tr>

            <tr>
              <td id="tdata" colspan="1">
                <b>Results Focus</b> <br />
                1. Achieves results with optimal use of time and resources most
                of the time.
                <br />
                2. Avoids rework, mistakes and wastage through effective work
                methods by placing organizational needs before personal needs.
                <br />3. Delivers error-free outputs most of the time by
                conforming to standard operating procedures correctly and
                consistently. Able to produce very satisfactory quality work in
                terms of usefulness/acceptability and completeness with no
                supervision required. <br />
                4. Expresses a desire to do better and may express frustration
                at waste or inefficiency. May focus on new or more precise ways
                of meeting goals set.
                <br />
                5. Makes specific changes in the system or in own work methods
                to improve performance. Examples may include doing something
                better, faster, at a lower cost, more efficiently, or improving
                quality, customer satisfaction, morale, without setting any
                specific goal.
              </td>

              <td id="tdata" colspan="1" style="width: 5%; text-align: center">
                {{ countResults }}
              </td>
              <td id="tdata" colspan="3">
                <b> Innovation</b> <br />
                1. Examines the root cause of problems and suggests effective
                solutions. Foster new ideas, processes and suggests better ways
                to do things (cost and/or operational efficiency). <br />
                2. Demonstrates an ability to think “beyond the box”.
                Continuously focuses on improving personal productivity to
                create higher value and results.
                <br />3. Promotes a creative climate and inspires co-workers to
                develop original ideas or solutions.
                <br />
                4. Translates creative thinking into tangible changes and
                solutions that improve the work unit and organization.
                <br />
                5. Uses ingenious methods to accomplish responsibilities.
                Demonstrates resourcefulness and the ability to succeed with
                minimal resources.
              </td>
              <td id="tdata" colspan="1" style="width: 5%; text-align: center">
                {{ countInnovation }}
              </td>
            </tr>
            <tr class="row1">
              <td id="tdata" colspan="6">
                <p>
                  Note: The assessment in the demonstration of competencies
                  shall not be reflected in the final rating. These competencies
                  are monitored to inform professional development plans (DepEd
                  Order No. 2, s. 2015, p. 9).
                </p>
              </td>
            </tr>
          </table>
          <v-btn
            v-print="printObjPart1"
            style="margin-top: 20px; margin-right: auto; margin-left: 45%"
            >Print</v-btn
          >
        </v-tab-item>
        <v-tab>Part 3</v-tab>
        <v-tab-item>
          <br />
          <!-- start of part 3 competencies -->

          <table id="table" class="pa-0" style="width: 100%; text-align: left">
            <tr class="row1">
              <td id="tdata" colspan="6" class="grey lighten-2 pt-4 pb-0">
                <p style="text-align: center">
                  <b
                    >Teacher I-III, SPET I-IV, Special Science Teacher I-II
                    (Proficient Teacher)</b
                  >
                </p>
              </td>
            </tr>
            <tr>
              <td id="tdata" rowspan="2" colspan="1">
                <p>
                  Name of Employee:<span class="ml-4">{{
                    ipcrfDemographicProfile.name_of_employee
                  }}</span>
                </p>
                <p>
                  Position:<span class="ml-4">{{
                    ipcrfDemographicProfile.position
                  }}</span>
                </p>
                <p>
                  Bureau/Center/Service/Division:<span class="ml-4">{{
                    ipcrfDemographicProfile.division
                  }}</span>
                </p>
                <p>
                  Rating Period:<span class="ml-4">{{
                    ipcrfDemographicProfile.rating_period
                  }}</span>
                </p>
              </td>
            </tr>
            <tr>
              <td id="tdata" rowspan="2" colspan="2">
                <p>
                  Name of Rater:<span class="ml-4">{{
                    ipcrfDemographicProfile.rater
                  }}</span>
                </p>
                <p>
                  Position:
                  <span class="ml-4">{{
                    ipcrfDemographicProfile.rater_position
                  }}</span>
                </p>

                <p>
                  Date of Review:
                  <span class="ml-4">{{
                    ipcrfDemographicProfile.date_of_review
                  }}</span>
                </p>
              </td>
            </tr>

            <caption>
              Part III. SUMMARY OF RATINGS FOR DISCUSSION
            </caption>
          </table>
          <table id="table" class="content" style="width: 100%">
            <tr class="light-green lighten-2">
              <td id="tdata" rowspan="2"><p>KRA</p></td>
              <td id="tdata" rowspan="2">
                <p>Weight per KRA</p>
              </td>
              <td id="tdata" rowspan="2">
                <p>Objectives</p>
              </td>
              <td id="tdata" rowspan="2"><p>Weight per Objective</p></td>
              <td id="tdata" rowspan="1" colspan=" 4">
                <p>Numerical Ratings</p>
              </td>
              <td id="tdata" rowspan="2">
                <p>Score</p>
              </td>
              <td id="tdata" rowspan="2">
                <p>Adjectival Rating</p>
              </td>
            </tr>

            <tr class="light-green lighten-2">
              <td id="tdata">Q</td>
              <td id="tdata">E</td>
              <td id="tdata">T</td>
              <td id="tdata">AVE</td>
            </tr>

            <tr class="displayKra1">
              <td id="tdata" rowspan="3">KRA 1</td>
              <td id="tdata">24%</td>

              <td id="tdata">Objective 1</td>
              <td id="tdata">8%</td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[0].ipcrf_numerical_ratings_q }}</p>
              </td>

              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[0].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[0].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[0]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="blank2">
              <td id="tdata">24%</td>

              <td id="tdata">Objective 2</td>
              <td id="tdata">8%</td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[1].ipcrf_numerical_ratings_q }}</p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>

              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[1].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[1].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[1]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="blank2">
              <td id="tdata">24%</td>

              <td id="tdata">Objective 2</td>
              <td id="tdata">8%</td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[2].ipcrf_numerical_ratings_q }}</p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>

              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[2].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[2].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[2]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="displayKra2">
              <td id="tdata" rowspan="3">KRA 2</td>
              <td id="tdata">24%</td>

              <td id="tdata">Objective 3</td>
              <td id="tdata">8%</td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[3].ipcrf_numerical_ratings_q }}</p>
              </td>

              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[3].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[3].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[3]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="kra2Blank1">
              <td id="tdata">24%</td>

              <td id="tdata">Objective 2</td>
              <td id="tdata">8%</td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[4].ipcrf_numerical_ratings_q }}</p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>

              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[4].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[4].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[4]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="kra2Blank2">
              <td id="tdata">24%</td>

              <td id="tdata">Objective 2</td>
              <td id="tdata">8%</td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[5].ipcrf_numerical_ratings_q }}</p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[5].ipcrf_numerical_ratings_t }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[5].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[5].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[5]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="displayKra2">
              <td id="tdata" rowspan="2">KRA 3</td>
              <td id="tdata">24%</td>

              <td id="tdata">Objective 3</td>
              <td id="tdata">8%</td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[6].ipcrf_numerical_ratings_q }}</p>
              </td>

              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[6].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[6].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[6]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="kra3Blank1">
              <td id="tdata">24%</td>

              <td id="tdata">Objective 2</td>
              <td id="tdata">8%</td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[7].ipcrf_numerical_ratings_q }}</p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>

              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[7].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[7].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[7]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="displayKra4">
              <td id="tdata" rowspan="3">KRA 4</td>
              <td id="tdata">24%</td>

              <td id="tdata">Objective 3</td>
              <td id="tdata">8%</td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[8].ipcrf_numerical_ratings_q }}</p>
              </td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[8].ipcrf_numerical_ratings_e }}</p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[8].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[8].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[8]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="kra4Blank1">
              <td id="tdata">24%</td>

              <td id="tdata">Objective 2</td>
              <td id="tdata">8%</td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[9].ipcrf_numerical_ratings_q }}</p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[9].ipcrf_numerical_ratings_e }}</p>
              </td>

              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[9].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[9].ipcrf_numerical_ratings_score }}</p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[9]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="kra4Blank2">
              <td id="tdata">24%</td>

              <td id="tdata">Objective 2</td>
              <td id="tdata">8%</td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[10].ipcrf_numerical_ratings_q }}</p>
              </td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[10].ipcrf_numerical_ratings_e }}</p>
              </td>

              <td id="tdata" class="grey darken-2"><p></p></td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[10].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[10].ipcrf_numerical_ratings_score }}
                </p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[10]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <tr class="displayKra4">
              <td id="tdata">Plus Factor</td>
              <td id="tdata">24%</td>

              <td id="tdata">Objective 3</td>
              <td id="tdata">8%</td>
              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[11].ipcrf_numerical_ratings_q }}</p>
              </td>

              <td id="tdata">
                <p>{{ ipcrfEncodingPart1[11].ipcrf_numerical_ratings_e }}</p>
              </td>
              <td id="tdata" class="grey darken-2">
                <p></p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[11].ipcrf_numerical_ratings_average }}
                </p>
              </td>
              <td id="tdata">
                <p>
                  {{ ipcrfEncodingPart1[11].ipcrf_numerical_ratings_score }}
                </p>
              </td>
              <td id="tdata">
                <p>
                  {{
                    ipcrfEncodingPart1[11]
                      .ipcrf_numerical_ratings_adjectival_rating
                  }}
                </p>
              </td>
            </tr>
            <!-- Final Rating Area -->
            <tr class="finalRating light-green lighten-2">
              <td id="tdata" colspan="2" rowspan="2">
                FINAL PERFORMANCE RESULTS
              </td>
              <td id="tdata" colspan="4" rowspan="2">
                Accomplishments of KRAs and Objectives
              </td>

              <td id="tdata" colspan="2">Final Rating</td>
              <td id="tdata" colspan="2">Adjectival Rating</td>
            </tr>
            <tr class="finalRating light-green lighten-2">
              <td id="tdata" colspan="2">
                <p>{{ ipcrfEncodingPart1[11].final_rating }}</p>
              </td>
              <td id="tdata" colspan="2">
                <p>{{ ipcrfEncodingPart1[11].adjectival_rating }}</p>
              </td>
            </tr>
          </table>
          <br />

          <!-- Part 3 Display Signatures -->

          <div class="pa-10 ml-9" style="text-align: center">
            <v-row>
              <v-col>
                <v-text-field
                  readonly
                  v-model="ipcrfDemographicProfile.name_of_employee"
                  style="width: 200px; height: 100px; margin-left: 80px"
                >
                </v-text-field>

                <h5 class="pa-2" style="margin-left: 80px">Ratee</h5>
              </v-col>
              <v-col>
                <v-text-field
                  readonly
                  v-model="ipcrfDemographicProfile.rater"
                  style="width: 200px; height: 100px; margin-left: 40px"
                >
                </v-text-field>

                <h5 class="pa-2" style="margin-right: 10px">Rater</h5>
              </v-col>

              <v-col>
                <v-text-field
                  readonly
                  style="width: 200px; height: 100px; margin-left: -20px"
                  v-model="ipcrfEncodingPart1[11].approving_authority"
                >
                </v-text-field>

                <h5 class="pa-2" style="margin-left: -20px">
                  Approving Authority
                </h5>
              </v-col>
            </v-row>
          </div>
          <br /><br />
          <v-btn
            v-print="printObjPart1"
            style="margin-top: 10px; margin-right: auto; margin-left: 45%"
            >Print</v-btn
          >
        </v-tab-item>
        <v-tab>Part 4</v-tab>
        <v-tab-item>
          <!-- End of Part 3 Display -->
          <div>
            <br />
            <p style="text-align: center">
              <b>PART IV: DEVELOPMENTAL PLANS</b>
            </p>
            <table id="table" style="width: 100%">
              <tbody>
                <td id="tdata" rowspan="2" colspan="2">
                  <p>
                    <b>NOTE:</b> <br />
                    This sheet shall be accomplished during: i) Phase I:
                    Performance Planning and Commitment, based on the results of
                    e-SAT; and ii) Phase II: Performance Monitoring and
                    Coaching, based on the agreements on the Performance
                    Monitoring and Coaching Form and Mid-year Review Form; and
                    iii) Phase IV: Performance Rewarding and Development
                    Planning, based on the actual results of IPCRF.
                    <br />
                    The Ratee can modify the cell (i.e., add rows) to reflect
                    his/her development needs and strengths.
                  </p>
                </td>
              </tbody>
            </table>
            <br />
            <table id="table" style="width: 100%">
              <tr style="text-align: center" class="grey lighten-2">
                <td id="tdata" rowspan="2">Strengths</td>
                <td id="tdata" rowspan="2">Development Needs</td>

                <td id="tdata" colspan="2">
                  Action Plan <br />
                  (Recommended Development Intervention)
                </td>
                <td id="tdata" rowspan="2">Timeline</td>
                <td id="tdata" rowspan="2">Resources Needed</td>
              </tr>

              <tr class="grey lighten-2">
                <td id="tdata">Learning Objectives</td>
                <td id="tdata">Intervention</td>
              </tr>
              <tr>
                <td
                  id="tdata"
                  colspan="6"
                  class="pt-4 grey lighten-2"
                  style="line-height: 5px"
                >
                  <p>A. Core Competencies</p>
                </td>
              </tr>
              <!-- Start of functional content -->
              <tr style="height: 100px">
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.strengths_functional }}</p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.development_needs_functional }}</p>
                </td>
                <td id="tdata">
                  <p>
                    {{ ipcrfDevelopmentPlan.learning_objectives_functional }}
                  </p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.intervention_functional }}</p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.timeline_functional }}</p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.resources_needed_functional }}</p>
                </td>
              </tr>
              <!-- End of functional content -->
              <tr>
                <td
                  id="tdata"
                  colspan="6"
                  class="grey lighten-2"
                  style="line-height: 5px"
                >
                  <p>B. Core Behavioral</p>
                </td>
              </tr>
              <!-- Start of Core Behavioral -->
              <tr style="height: 100px">
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.strengths_core }}</p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.development_needs_core }}</p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.learning_objectives_core }}</p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.intervention_core }}</p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.timeline_core }}</p>
                </td>
                <td id="tdata">
                  <p>{{ ipcrfDevelopmentPlan.resources_needed_core }}</p>
                </td>
              </tr>
              <!-- End of Core Behavioral -->
              <tr style="height: 100px">
                <td id="tdata" colspan="6" class="mt-4">
                  <p>
                    Feedback:<span class="ml-4">{{
                      ipcrfDevelopmentPlan.feedback
                    }}</span>
                  </p>
                </td>
              </tr>
            </table>
            <!-- This is the signature part in part 4 -->
            <div class="pa-10 ml-9" style="text-align: center">
              <v-row>
                <v-col>
                  <v-text-field
                    v-model="ipcrfDevelopmentPlan.ratee"
                    style="width: 200px; height: 100px; margin-left: 80px"
                  >
                  </v-text-field>

                  <h5 class="pa-2" style="margin-left: 80px">RATEE</h5>
                </v-col>
                <v-col>
                  <v-text-field
                    v-model="ipcrfDevelopmentPlan.rater"
                    style="width: 200px; height: 100px; margin-left: 40px"
                  >
                  </v-text-field>

                  <h5 class="pa-2" style="margin-right: 10px">RATER</h5>
                </v-col>

                <v-col>
                  <v-text-field
                    v-model="ipcrfDevelopmentPlan.approving_authority"
                    style="width: 200px; height: 100px; margin-left: 40px"
                  >
                  </v-text-field>

                  <h5 class="pa-2" style="margin-left: -20px">
                    APPROVING AUTHORITY
                  </h5>
                </v-col>
              </v-row>
            </div>
            <br />
            <table id="table" style="width: 100%">
              <tbody>
                <td id="tdata" rowspan="2" colspan="2">
                  <p>
                    <b>NOTE:</b> <br />
                    When all Parts of the IPCRF are accomplished, the Ratee must
                    submit the file copy of his or her IPCRF electronic form to
                    the Department Head or School Head for the school-wide
                    consolidation. He or she must print all the pages of this
                    form and submit to the Personnel Division of the school to
                    be attached to his or her 201 personnel file.
                  </p>
                </td>
              </tbody>
            </table>
          </div>
          <v-btn
            v-print="printObjPart1"
            style="margin-top: 20px; marign-right: auto; margin-left: 45%"
            >Print</v-btn
          >
        </v-tab-item>
      </v-tabs>
      <v-btn class="ma-6 float-left" @click="back">Back</v-btn>
      <v-btn class="ma-6 float-right" @click="editItems">Edit</v-btn>
    </v-container>

    <!--Container for rendering the view for update and create in ipctf -->
    <v-container
      v-if="create == true || edit == true"
      fluid width="100vw"
    >
      <!--start for create and fill up encoding-->
      <v-alert
        :value="alert"
        dense
        class="float-right"
        text
        style="
          position: fixed;
          width: fit-content;
          background: red;
          right: 60px;
          top: 70px;
          z-index: 1;
        "
        type="success"
      >
        Saved Successfully!
      </v-alert>
      <v-btn @click="back" v-if="edit == true">Back</v-btn>
      <v-card class="pa-0 pa-0 ma-1" width="100vw">
        <v-tabs>
          <!-- Encoding Page -->
          <v-tab> Encoding</v-tab>
          <v-tab-item>
            <v-card-title
              label="Search"
              single-line
              hide-details
              class="justify-center"
            >
              <h5 class="text-center">
                IPCRF Rating Encoding Form <br />
                Teacher I-III, SPET I-IV (Proficient Teacher) <br />PART 1:
                INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM
              </h5>
            </v-card-title>
            <v-card class="mx-auto" max-width="800">
              <v-card-text>
                <div class="text--primary">
                  <b> PRIVACY NOTICE:</b><br />
                  By using this tool, you agree to authorize the Department of
                  Education to collect, process, retain, <br />
                  and dispose of your personal information in accordance with
                  the Data Privacy Act of 2012.<br />

                  <b> INSTRUCTIONS: </b> <br />
                  Part 1 shall be accomplished by the Rater during the Phase
                  III: Performance Review and Evaluation of the RPMS Cycle.
                  <br />
                  Fill in empty cells (white) with needed information about the
                  teacher, school and division. <br />

                  COT Rating<br />
                  Encode the COT rating per observation period by doing the
                  following steps:<br />
                  1) Select the subject for COT; 2) Input the COT rating per
                  objective; and 3) Lock COT once finished. <br />

                  QET Rating<br />
                  Once all available COT ratings are inputted, encode your
                  rating for Efficiency and Timeliness. <br />

                  Note: This form automatically transmutes the COT rating to its
                  corresponding in the RPMS 5-point scale. <br />

                  When COT and QET ratings are encoded, click Finalize Part 1.
                  Give the file copy to the teacher concerned.<br />
                  The teacher shall accomplish Parts 2 & 4. <br />
                </div>
              </v-card-text> </v-card
            ><br />
            <v-form ref="part1">
              <v-card>
                <v-simple-table
                  height="auto"
                  class="pa-0 pa-0 ma-5"
                  width="100vw"
                  max-width="100vw"
                >
                  <template v-slot:default>
                    <tbody class="text-center" color="secondary">
                      <!-- row 1 -->
                      <tr>
                        <td colspan="3" style="text-align: left">
                          Name of Employee:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="2">
                          <v-text-field
                            v-model="empName"
                            placeholder="Name"
                            solo
                            :rules="required"
                            dense
                            class="text-center pt-5"
                            type="text"
                          >
                          </v-text-field>
                        </td>
                        <td colspan="3" style="text-align: left">Rater:<span class="red--text text--lighten-1">*</span></td>
                        <td colspan="3">
                          <v-text-field
                            v-model="empRater"
                            placeholder="Rater"
                            solo
                            dense
                            :rules="required"
                            class="text-center pt-5"
                            type="text"
                          >
                          </v-text-field>
                        </td>
                        <td colspan="1" style="text-align: left">Region:<span class="red--text text--lighten-1">*</span></td>
                        <td colspan="1">
                          <v-select
                            :items="regionItems"
                            v-model="empRegion"
                            label="Position"
                            dense
                            :rules="required"
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                      </tr>
                      <!-- Row 2 -->
                      <tr>
                        <td colspan="3" style="text-align: left">Position:<span class="red--text text--lighten-1">*</span></td>
                        <td colspan="2">
                          <v-select
                            :items="empPositionItems"
                            v-model="empPosition"
                            label="Position"
                            dense
                            :rules="required"
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="3" style="text-align: left">Position:<span class="red--text text--lighten-1">*</span></td>
                        <td colspan="3">
                          <v-select
                            :items="raterPositionItems"
                            v-model="empRaterPosition"
                            label="Rater Position"
                            dense
                            :rules="required"
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="1" style="text-align: left">Division:<span class="red--text text--lighten-1">*</span></td>
                        <td colspan="1">
                          <v-select
                            :items="divisionItems"
                            v-model="empDivision"
                            label="Division"
                            dense
                            :rules="required"
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                      </tr>

                      <tr>
                        <td colspan="3" style="text-align: left">
                          Employee ID#:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="2">
                          <v-text-field
                            v-model="empId"
                            placeholder="Employee ID#"
                            solo
                            :rules="required"
                            dense
                            class="text-center pt-5"
                            type="text"
                          >
                          </v-text-field>
                        </td>
                        <td colspan="3" style="text-align: left">
                          Date of Review:
                        </td>
                        <td colspan="3">
                          <v-row>
                            <v-col
                              cols="12"
                              sm="12"
                              md="12"
                              class="text-center"
                            >
                              <v-menu
                                v-model="empDateReviewMenu"
                                :close-on-content-click="false"
                                :nudge-right="40"
                                :rules="required"
                                transition="scale-transition"
                                offset-y
                                min-width="auto"
                              >
                                <template v-slot:activator="{ on, attrs }">
                                  <v-text-field
                                    v-model="computedDateFormattedDateOfReview"
                                    append-icon="mdi-calendar"
                                    readonly
                                    :rules="required"
                                    v-bind="attrs"
                                    v-on="on"
                                  ></v-text-field>
                                </template>
                                <v-date-picker
                                  v-model="empDateReview"
                                  scrollable
                                  @input="empDateReviewMenu = false"
                                >
                                </v-date-picker>
                              </v-menu>
                            </v-col>
                          </v-row>
                        </td>
                        <td colspan="1" style="text-align: left">
                          District/Municipality:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="1">
                          <v-text-field
                            v-model="empDistrict"
                            placeholder="District"
                            solo
                            :rules="required"
                            dense
                            class="text-center pt-5"
                            type="text"
                          >
                          </v-text-field>
                        </td>
                      </tr>
                      <!-- Row 4 -->
                      <tr>
                        <td colspan="3" style="text-align: left">
                          Employment Status:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="2">
                          <v-select
                            :items="employmentStatusItems"
                            v-model="empStatus"
                            label="Status"
                            dense
                            :rules="required"
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="3" style="text-align: left">
                          Rating Period:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="3">
                          <v-select
                            :items="ratingPeriodItems"
                            v-model="empRatingPeriod"
                            placeholder="Rating Period"
                            solo
                            dense
                            :rules="required"
                            class="text-center pt-5"
                            type="text"
                          >
                          </v-select>
                        </td>
                        <td colspan="1" style="text-align: left">School ID:<span class="red--text text--lighten-1">*</span></td>
                        <td colspan="1">
                          <v-text-field
                            v-model="empSchoolId"
                            placeholder="School ID"
                            solo
                            :rules="required"
                            dense
                            class="text-center pt-5"
                            type="text"
                          >
                          </v-text-field>
                        </td>
                      </tr>
                      <!-- Row 5 -->
                      <tr>
                        <td colspan="3" style="text-align: left">Age :<span class="red--text text--lighten-1">*</span></td>
                        <td colspan="2">
                          <v-select
                            :items="ageItems"
                            v-model="empAge"
                            label="Age"
                            :rules="required"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="3" style="text-align: left">
                          School Name:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="3">
                          <v-text-field
                            v-model="empSchoolName"
                            placeholder="School Name"
                            solo
                            :rules="required"
                            dense
                            class="text-center pt-5"
                            type="text"
                          >
                          </v-text-field>
                        </td>
                        <td colspan="1" style="text-align: left">Sex:<span class="red--text text--lighten-1">*</span></td>
                        <td colspan="1">
                          <v-select
                            :items="sexItems"
                            v-model="empSex"
                            :rules="required"
                            label="Sex"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                      </tr>

                      <!-- Row 6 -->
                      <tr>
                        <td colspan="3" style="text-align: left">
                          Level Taught:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="2">
                          <v-select
                            :items="levelTaughtItems"
                            v-model="empLevelTaught"
                            label="Level Taught"
                            dense
                            :rules="required"
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="3" style="text-align: left">
                          No. of Years in Teaching:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="3">
                          <v-select
                            :items="noYrsTeachingItems"
                            v-model="empYearsOfTeaching"
                            label="Years of Teaching"
                            dense
                            :rules="required"
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="1" style="text-align: left">
                          School Type:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="1">
                          <v-select
                            :items="schoolTypeItems"
                            v-model="empSchoolType"
                            :rules="required"
                            label="School Type"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                      </tr>
                      <!-- Row 7 -->
                      <tr>
                        <td colspan="3" style="text-align: left">
                          Grade Level Taught:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="2">
                          <v-select
                            :items="gradeLevelTaughtItems"
                            v-model="empGradeLevelTaught"
                            label="Grade Level"
                            :rules="required"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="3" style="text-align: left">
                          Highest Degree Obtained:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="3">
                          <v-select
                            :items="highestDegreeObtainedItems"
                            v-model="empDegree"
                            :rules="required"
                            label="Grade Level"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="1" style="text-align: left">
                          School Size:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="1">
                          <v-select
                            :items="schoolSizeItems"
                            v-model="empSchoolSize"
                            :rules="required"
                            label="School Size"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                      </tr>

                      <!-- Row8 -->
                      <tr>
                        <td colspan="3" style="text-align: left">
                          Subject Taught:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="2">
                          <v-select
                            :items="subjectTaughtItems"
                            v-model="empSubjectTaught"
                            :rules="required"
                            label="Subject Taught"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>

                        <td colspan="3" style="text-align: left">
                          Area of Specialization:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="3">
                          <v-select
                            :items="areaofSpecializationItems"
                            v-model="empSpecialization"
                            label="Area of Specialization"
                            :rules="required"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                        <td colspan="1" style="text-align: left">
                          Curricular Classification:<span class="red--text text--lighten-1">*</span>
                        </td>
                        <td colspan="1">
                          <v-select
                            :items="curricularClassificationItems"
                            v-model="empCurricularClassification"
                            :rules="required"
                            label="Curricular"
                            dense
                            solo
                            class="text-center pt-5"
                          ></v-select>
                        </td>
                      </tr>
                    </tbody>
                  </template>
                </v-simple-table>

                <!-- first row -->
              </v-card>
            </v-form>
            <!-- START OF KRA TABLE -->
            <v-form ref="part1Admin">
              <v-container fluid>
                <v-simple-table width="100vw">
                  <colgroup>
                    <col id="col1"><col id="col2"><col id="col3"><col id="col4"><col id="col5"><col id="col1">
                    <col id="col6"><col id="col7"><col id="col8"><col id="col9"><col id="col10">
                  </colgroup>
                  <!-- <v-form ref="part"></v-form> -->
                  <tr class="light-green lighten-2">
                    <td id="tdata" rowspan="3"><p>KRA</p></td>
                    <td id="tdata" rowspan="3">
                      <p>Weight per KRA</p>
                    </td>
                    <td id="tdata" rowspan="3">
                      <p>Objectives</p>
                    </td>
                    <td id="tdata" rowspan="3"><p>Weight per Objective</p></td>
                    <td id="tdata" rowspan="3">
                      <p>COT Indicator No.</p>
                    </td>
                    <td id="tdata" colspan="2" rowspan="1"><p>COT 1</p></td>
                    <td id="tdata" colspan="2" rowspan="1"><p>COT 2</p></td>
                    <td id="tdata" colspan="2" rowspan="1"><p>COT 3</p></td>
                    <td id="tdata" colspan="2" rowspan="1"><p>COT 4</p></td>
                    <td id="tdata" rowspan="3">
                      <p>AVE</p>
                    </td>

                    <td id="tdata" rowspan="2" colspan=" 4">
                      <p>IPCRF Numerical Ratings</p>
                    </td>
                    <td id="tdata" rowspan="3">
                      <p>Score</p>
                    </td>
                    <td id="tdata" rowspan="3">
                      <p>Adjectival Rating</p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" colspan="2" rowspan="1">
                      <v-select
                        :items="subjectTaughtItems"
                        v-model="cot1SubjectsTaught"
                        :readonly="ifTeacher"
                        :rules="requiredField"
                        label="Subject"
                        dense
                        solo
                        class="text-center pt-6"
                      ></v-select>
                    </td>
                    <td id="tdata" colspan="2" rowspan="1">
                      <v-select
                        :items="subjectTaughtItems"
                        v-model="cot2SubjectsTaught"
                        :rules="requiredField"
                        :readonly="ifTeacher"
                        label="Subject"
                        dense
                        solo
                        class="text-center pt-6"
                      ></v-select>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" colspan="1" rowspan="1"><p>Rating</p></td>
                    <td id="tdata" colspan="1" rowspan="1"><p>RPMS 5-pt</p></td>
                    <td id="tdata" colspan="1" rowspan="1"><p>Rating</p></td>
                    <td id="tdata" colspan="1" rowspan="1"><p>RPMS 5-pt</p></td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1"><p>Q</p></td>
                    <td id="tdata" colspan="1" rowspan="1"><p>E</p></td>
                    <td id="tdata" colspan="1" rowspan="1"><p>T</p></td>
                    <td id="tdata" colspan="1" rowspan="1"><p>AVE</p></td>
                  </tr>
                  <tr>
                    <td id="tdata" rowspan="3"><p>KRA</p></td>
                    <td id="tdata" rowspan="3">
                      <p>24%</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 1</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1IndicatorObjNo1"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        type="number"
                        min="5"
                        max="10"
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1RatingObjNo1"
                        :rules="requiredField"
                        placeholder=""
                        type="number"
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1RpmsObjNo1"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        type="number"
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot2RatingObjNo1"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        type="number"
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot2RpmsObjNo1"
                        :rules="requiredField"
                        type="number"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateObjectivesAverageNo1"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ1"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo1"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo1"
                        placeholder=""
                        disabled
                        solo
                        @keyup="calculateScore('no1')"
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo1"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating1"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 2 -->
                  <tr>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 2</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ2"
                        :rules="requiredField"
                        placeholder=""
                        @input="calculateAdjectivalRatingNo2"
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo2"
                        placeholder=""
                        disabled
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo2"
                        disabled
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating2"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 3 -->
                  <tr>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 3</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ3"
                        :rules="requiredField"
                        placeholder=""
                        @input="calculateAdjectivalRatingNo3"
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo3"
                        placeholder=""
                        disabled
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo3"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating3"
                        placeholder=""
                        disabled
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 4 -->
                  <tr>
                    <td id="tdata" rowspan="3"><p>KRA 2</p></td>
                    <td id="tdata" rowspan="3">
                      <p>24%</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 4</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ4"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo4"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo4"
                        placeholder=""
                        disabled
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo4"
                        placeholder=""
                        disabled
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating4"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 5 -->
                  <tr>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 5</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1IndicatorObjNo5"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1RatingObjNo5"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1RpmsObjNo5"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot2RatingObjNo5"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot2RpmsObjNo5"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateObjectivesAverageNo5"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ5"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        @input="calculateAdjectivalRatingNo5"
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo5"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo5"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating5"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 6 -->
                  <tr>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 6</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ6"
                        :rules="requiredField"
                        placeholder=""
                        @input="calculateAdjectivalRatingNo6"
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalT6"
                        :rules="requiredField"
                        placeholder=""
                        @input="calculateAdjectivalRatingNo6"
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo6"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo6"
                        placeholder=""
                        solo
                        dense
                        disabled
                        :readonly="ifTeacher"
                        
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating6"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 7 -->
                  <tr>
                    <td id="tdata" rowspan="2"><p>KRA 3</p></td>
                    <td id="tdata" rowspan="2">
                      <p>24%</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 7</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1IndicatorObjNo7"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1RatingObjNo7"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot1RpmsObjNo7"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot2RatingObjNo7"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="cot2RpmsObjNo7"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateObjectivesAverageNo7"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ7"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo7"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo7"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo7"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating7"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 8 -->
                  <tr>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 8</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ8"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo8"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo8"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo8"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating8"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 4 -->
                  <tr>
                    <td id="tdata" rowspan="3"><p>KRA 4</p></td>
                    <td id="tdata" rowspan="3">
                      <p>24%</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 9</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ9"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo9"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalE9"
                        :rules="requiredField"
                        placeholder=""
                        solo
                        @input="calculateAdjectivalRatingNo9"
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo9"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo9"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating10"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 10 -->
                  <tr>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 10</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ10"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo10"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalE10"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo10"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo10"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo10"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating10"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 11 -->
                  <tr>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 11</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ11"
                 
                        @input="calculateAdjectivalRatingNo11"
                        placeholder=""
                        :rules="requiredField"
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalE11"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo11"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo11"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo11"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating11"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- OBJ 12 -->
                  <tr>
                    <td id="tdata" rowspan="1"><p>PLUS FACTOR</p></td>
                    <td id="tdata" rowspan="1">
                      <p>24%</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>Objective 12</p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <p>8%</p>
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalQ12"
                        :rules="requiredField"
                        @input="calculateAdjectivalRatingNo12"
                        placeholder=""
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingIpcrfNumericalE12"
                        :rules="requiredField"
                        placeholder=""
                        @input="calculateAdjectivalRatingNo12"
                        solo
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                    <td
                      id="tdata"
                      colspan="1"
                      rowspan="1"
                      class="grey darken-2"
                    >
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateNumericalRatingsAverageNo12"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="calculateScoreNo12"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                    <td id="tdata" colspan="1" rowspan="1">
                      <v-text-field
                        v-model="encodingAdjectivalRating12"
                        placeholder=""
                        solo
                        dense
                        disabled
                        class="text-center ml-auto mr-auto"
                        :readonly="ifTeacher"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" colspan="5" rowspan="1">
                      <p style="float: right">Date Observed:  <span class="red--text text--lighten-1">*</span></p>
                    </td>
                    <td id="tdata" colspan="2" rowspan="1">
                      <v-row>
                        <v-col cols="12" sm="12" md="12" class="text-center">
                          <v-menu
                            v-model="cot1DateMenu"
                            :close-on-content-click="false"
                            :nudge-right="40"
                            transition="scale-transition"
                            offset-y
                            min-width="auto"
                          >
                            <template v-slot:activator="{ on, attrs }">
                              <v-text-field
                                v-model="computedDateFormattedCot1DateObserved"
                                append-icon="mdi-calendar"
                                
                                :readonly="ifTeacher"
                                :rules="required"
                                v-bind="attrs"
                                v-on="on"
                              ></v-text-field>
                            </template>
                            <v-date-picker
                              v-model="cot1DateObserved"
                              scrollable
                              @input="cot1DateMenu = false"
                            >
                            </v-date-picker>
                          </v-menu>
                        </v-col>
                      </v-row>
                    </td>
                    <td id="tdata" colspan="2" rowspan="1">
                      <v-row>
                        <v-col cols="12" sm="12" md="12" class="text-center">
                          <v-menu
                            v-model="cot2DateMenu"
                            :close-on-content-click="false"
                            :nudge-right="40"
                            transition="scale-transition"
                            offset-y
                            min-width="auto"
                          >
                            <template v-slot:activator="{ on, attrs }">
                              <v-text-field
                                v-model="computedDateFormattedCot2DateObserved"
                                append-icon="mdi-calendar"
                                
                                :readonly="ifTeacher"
                                :rules="required"
                                v-bind="attrs"
                                v-on="on"
                              ></v-text-field>
                            </template>
                            <v-date-picker
                              v-model="cot2DateObserved"
                              scrollable
                              @input="cot2DateMenu = false"
                            >
                            </v-date-picker>
                          </v-menu>
                        </v-col>
                      </v-row>
                    </td>
                    <td id="tdata" colspan="2" rowspan="1"><p></p></td>
                    <td id="tdata" colspan="2" rowspan="1"><p></p></td>
                    <td id="tdata" colspan="5" rowspan="1">
                      <p style="float: right">Final Rating:</p>
                    </td>
                    <td id="tdata" colspan="2" rowspan="1">
                      <v-text-field
                        v-model="calculateFinalRating"
                        placeholder=""
                        solo
                        disabled
                        dense
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" colspan="5" rowspan="1"><p></p></td>
                    <td id="tdata" colspan="2" rowspan="1"><p></p></td>
                    <td id="tdata" colspan="2" rowspan="1"><p></p></td>
                    <td id="tdata" colspan="2" rowspan="1"><p></p></td>
                    <td id="tdata" colspan="2" rowspan="1"><p></p></td>
                    <td id="tdata" colspan="5" rowspan="1">
                      <p style="float: right">Adjectival Rating:</p>
                    </td>
                    <td id="tdata" colspan="2" rowspan="1">
                      <v-text-field
                        v-model="empFinalAdjRating"
                        placeholder=""
                        solo
                        dense
                        disabled
                        :readonly="ifTeacher"
                        class="text-center ml-auto mr-auto"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                </v-simple-table>

                <br />
                <div style="margin-left: 350px">
                  <v-col class="pa-0">
                    <h5 class="pa-2" style="margin-left: 70px">
                      Approving Authority  <span class="red--text text--lighten-1">*</span>
                    </h5>

                    <v-text-field
                      v-model="part1ApprovingAuthority"
                      placeholder="Enter Approving Authority"
                      solo
                      :readonly="ifTeacher"
                      dense
                      class="mb-0"
                      style="width: 300px"
                    >
                    </v-text-field>
                    <v-divider style="width: 300px"></v-divider>
                    
                    <v-select
                      :items="approvingAuthorityPosition"
                      v-model="approvingAuthPosition"
                      label=""
                      dense
                      :readonly="ifTeacher"
                      solo
                      style="width: 300px"
                      class="text-center pt-6"
                    ></v-select>
                  </v-col>
                </div>
              </v-container>
            </v-form>
            <v-card class="mx-auto" max-width="600">
              <v-card-text>
                <div class="text--primary">
                  <b> NOTE:</b><br />

                  When COT and QET ratings are encoded, click Finalize Part 1.
                  Give the file copy to the teacher concerned. The teacher shall
                  accomplish Parts 2 & 4.
                </div>
              </v-card-text>
            </v-card>
            <v-btn
              @click="finalizePart1"
              :loading="loading"
              :readonly="loading"
              class="ml-auto mr-auto mt-5 text-center d-block"
              height="50px"
              >Finalize Part1</v-btn
            >
            <br /><br />
            <v-container class="grey lighten-5">
              <v-card
                class="pa-2 text-center"
                color="grey lighten-2"
                outlined
                tile
              >
                <b>PART 2: CORE BEHAVIORAL COMPETENCIES</b>
              </v-card>
              <br />
              <v-card class="mx-auto" max-width="900">
                <v-card-text>
                  <div class="text--primary">
                    <b> INSTRUCTIONS:</b><br />

                    &nbsp;&nbsp; Part 2 shall be acomplished by the Ratee after
                    the Rater accomplishes Part 1. Please tick the box of the
                    competency indicators that you demonstrated during the
                    performance cycle. The results of your assessment can be
                    found in the PART 2 sheet.
                  </div>
                </v-card-text>
              </v-card>
              <br />

              <v-container fluid>
                <v-row no-gutters>
                  <v-col v-for="n in 2" :key="n" class="text-justify">
                    <v-flex md11 sm6>
                      <v-card v-if="n === 1" class="mx-auto" max-width="500">
                        <v-card-text>
                          <div class="text--primary">
                            <b>Self- Management</b><br />
                            <v-checkbox
                              label="1.Sets personal goals and directions, needs and development."
                              color="black"
                              v-model="selfManagement1"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>

                            <v-checkbox
                              label="2.Undertakes personal actions and behavior that are clear and
                        purposive and takes into account personal goals and values
                        congruent to that of the organization."
                              color="black"
                              v-model="selfManagement2"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>

                            <v-checkbox
                              label="3.Displays emotional maturity and enthusiasm for and is challenged
                        by higher goals."
                              color="black"
                              v-model="selfManagement3"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>

                            <v-checkbox
                              label="4.Prioritizes work tasks and schedules (through Gantt chants,
                        checklists, etc.) to achieve goals."
                              color="black"
                              v-model="selfManagement4"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>

                            <v-checkbox
                              label=" 5.Sets high quality, challenging, realistic goals for self and
                        others. "
                              color="black"
                              v-model="selfManagement5"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                          </div>
                        </v-card-text>
                      </v-card>

                      <v-card v-if="n === 2" class="mx-auto" max-width="500">
                        <v-card-text>
                          <div class="text--primary">
                            <b>Teamwork</b><br />
                            <v-checkbox
                              label="1. Willingly does his/her share of responsibility."
                              color="black"
                              v-model="teamwork1"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label="2.Promotes collaboration and removes barrier to teamwork and goal
                        accomplishment across the organization."
                              color="black"
                              v-model="teamwork2"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label="3.Applies negotiation principles in arriving at win-win
                        agreements."
                              color="black"
                              v-model="teamwork3"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label="4. Drives consensus and team ownership of decisions."
                              color="black"
                              v-model="teamwork4"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 5. Works constructively and collaboratively with others and across
                        organizations to accomplish organization goals and objectives."
                              color="black"
                              v-model="teamwork5"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>

                            <br />
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                  </v-col>
                </v-row>
                <br />
                <v-row no-gutters>
                  <v-col v-for="n in 2" :key="n" class="text-justify">
                    <v-flex md11 sm6>
                      <v-card v-if="n === 1" class="mx-auto" max-width="500">
                        <v-card-text>
                          <div class="text--primary">
                            <b>Professionalism and Ethics</b><br />
                            <v-checkbox
                              label=" 1.Demonstrates the values and behavior enshrined in the Norms and
                        Conduct and Ethical Standards for Public Officials and Employees
                        (RA 6713)."
                              color="black"
                              v-model="prof1"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 2.Practices ethical and professional behavior and conduct taking
                        into account the impact of his/her actions and decisions."
                              color="black"
                              v-model="prof2"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 3.Maintains a professional image: being trustworthy, regularity of
                        attendance and punctuality, good grooming and communication."
                              color="black"
                              v-model="prof3"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 4.Makes personal sacrifices to meet the organization’s needs."
                              color="black"
                              v-model="prof4"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label="  5.Acts with a sense of urgency and responsibility to meet the
                        organization’s needs, improve system and help others improve their
                        effectiveness."
                              color="black"
                              v-model="prof5"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                          </div>
                        </v-card-text>
                      </v-card>

                      <v-card v-if="n === 2" class="mx-auto" max-width="500">
                        <v-card-text>
                          <div class="text--primary">
                            <b>Service Orientation</b><br />
                            <v-checkbox
                              label="  1. Can explain and articulate organizational directions, issues
                        and problems."
                              color="black"
                              v-model="service1"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label="  2. Takes personal responsibility for dealing with and/or
                        correcting customer service issues and concerns."
                              color="black"
                              v-model="service2"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 3. Initiates activities that promote advocacy for men and women
                        empowerment."
                              color="black"
                              v-model="service3"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 4. Participates in updating office vision, mission, mandates and
                        strategies based on DepEd strategies and directions. 
                       "
                              color="black"
                              v-model="service4"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 5. Develops and adopts service improvement program through
                        simplified procedures that will further enhance service delivery.
                       "
                              color="black"
                              v-model="service5"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>

                            <br /><br />
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                  </v-col>
                </v-row>
                <br />
                <v-row no-gutters>
                  <v-col v-for="n in 2" :key="n" class="text-justify">
                    <v-flex md11 sm6>
                      <v-card v-if="n === 1" class="mx-auto" max-width="500">
                        <v-card-text>
                          <div class="text--primary">
                            <b>Results Focus</b><br />
                            <v-checkbox
                              label=" 1. Achieves results with optimal use of time and resources most of
                        the time.
                       "
                              color="black"
                              v-model="results1"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 2. Avoids rework, mistakes and wastage through effective work
                        methods by placing organizational needs before personal needs.
                       "
                              color="black"
                              v-model="results2"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 3. Delivers error-free outputs most of the time by conforming to
                        standard operating procedures correctly and consistently. Able to
                        produce very satisfactory quality work in terms of
                        usefulness/acceptability and completeness with no supervision
                        required.
                       "
                              color="black"
                              v-model="results3"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 4. Expresses a desire to do better and may express frustration at
                        waste or inefficiency. May focus on new or more precise ways of
                        meeting goals set.
                       "
                              color="black"
                              v-model="results4"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label="5. Makes specific changes in the system or in own work methods to
                        improve performance. Examples may include doing something better,
                        faster, at a lower cost, more efficiently, or improving quality,
                        customer satisfaction, morale, without setting any specific goal.
                       "
                              color="black"
                              v-model="results5"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                          </div>
                        </v-card-text>
                      </v-card>

                      <v-card v-if="n === 2" class="mx-auto" max-width="500">
                        <v-card-text>
                          <div class="text--primary">
                            <b>Innovation</b><br />
                            <v-checkbox
                              label=" 1. Examines the root cause of problems and suggests effective
                        solutions. Foster new ideas, processes and suggests better ways to
                        do things (cost and/or operational efficiency).
                       "
                              color="black"
                              v-model="innovation1"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 2. Demonstrates an ability to think “beyond the box”. Continuously
                        focuses on improving personal productivity to create higher value
                        and results.
                       "
                              color="black"
                              v-model="innovation2"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 3. Promotes a creative climate and inspires co-workers to develop
                        original ideas or solutions.
                       "
                              color="black"
                              v-model="innovation3"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 4. Translates creative thinking into tangible changes and
                        solutions that improve the work unit and organization.
                       "
                              color="black"
                              v-model="innovation4"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>
                            <v-checkbox
                              label=" 5. Uses ingenious methods to accomplish responsibilities.
                        Demonstrates resourcefulness and the ability to succeed with
                        minimal resources.
                       "
                              color="black"
                              v-model="innovation5"
                              hide-details
                              :readonly="ifAdmin"
                            ></v-checkbox>

                            <br /><br />
                            <br />
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                  </v-col>
                </v-row>
                <v-alert v-if="alert2==true"
                  type="error"
                  width="fit-content"
                
                  dense
                  class=" ma-6 ml-auto mr-auto mt-5 text-center d-block"
              height="50px"
                  :value="alert2"
                  >Check at least one for each competency</v-alert
                >
              </v-container>

              <br />
              <v-card class="mx-auto" max-width="600">
                <v-card-text>
                  <div class="text--primary">
                    <b> NOTE:</b><br />

                    Click Finalize Part 2 to save your data. You can now proceed
                    to the preparation of the Part IV: Development Plan, based
                    on the results of Part 1 and Part 2 of the IPCRF.
                  </div>
                </v-card-text>
              </v-card>
              <br />
              <v-btn
                @click="finalizePart2"
                :loading="loading"
                :readonly="loading"
                class="ml-auto mr-auto text-center ma-6 ml-auto mr-auto mt-5 text-center d-block"
              
              height="50px"
                >Finalize Part2</v-btn
              >
              <!-- <div class="pa-2" align="center">
              <v-btn color="primary"> PREVIOUS </v-btn>
              <v-btn color="primary" class="ml-2"> NEXT </v-btn>
            </div> -->
            </v-container>
          </v-tab-item>
          <!-- End of Encoding part 1 -->

          <!-- START OF Part 1 Content -->

          <v-tab>Part 1 - Proficient</v-tab>
          <v-tab-item>
            <v-container fluid id="printMePart1">
              <table id="table" style="width: 100%">
                <tr class="row1">
                  <td
                    id="tdata"
                    colspan="6"
                    class="pt-4"
                    style="background-color: #ddd9c3"
                  >
                    <p style="text-align: center">
                      <b
                        >INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM
                        (IPCRF) for Teacher I-III, SPET I-IV, Special Science
                        Teacher I-II</b
                      >
                    </p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" style="line-height: 5px">
                    <p>Name of Employee:</p>
                  </td>
                  <td id="tdata" style="width: 20%">
                    <p>{{ empName }}</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>Name of Rater:</p>
                  </td>
                  <td id="tdata" style="width: 20%">
                    <p>{{ empRater}}</p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" style="line-height: 5px">
                    <p>Position:</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>{{empPosition}}</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>Position:</p>
                  </td>
                  <td id="tdata" style="">
                    <p>{{ empRaterPosition}}</p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" style="line-height: 5px">
                    <p>Bureau/Center/Service/Division:</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>{{ empDivision }}</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>Date of Review::</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>{{ empDateReview }}</p>
                  </td>
                </tr>
                <tr class="row1">
                  <td id="tdata" style="line-height: 5px">
                    <p>Rating Period:</p>
                  </td>
                  <td id="tdata" style="line-height: 5px">
                    <p>{{ empRatingPeriod }}</p>
                  </td>
                  <td id="tdata" colspan="2" style="line-height: 5px"></td>
                </tr>
              </table>
              <br />
              <div class="ePart2">
                <table
                  id="table"
                  style="width: 100%; text-align: center; font-weight: bold"
                >
                  <tr class="row1 mt-2">
                    <td id="tdata" colspan="6" style="line-height: 5px">
                      <p>TO BE FILLED OUT DURING PLANNING</p>
                    </td>
                    <td id="tdata" colspan="11" style="line-height: 5px">
                      <p>TO BE FILLED OUT DURING EVALUATION</p>
                    </td>
                  </tr>
                  <tr
                    class="row1 light-green lighten-2"
                    style="width: 100%; text-align: center; font-weight: bold"
                  >
                    <td id="tdata" rowspan="2" style="line-height: 5px">
                      <p>MFO's</p>
                    </td>
                    <td id="tdata" rowspan="2" style="line-height: 5px">
                      <p>KRAs</p>
                    </td>
                    <td id="tdata" rowspan="2" style="line-height: 5px">
                      <p>Objectives</p>
                    </td>
                    <td id="tdata" rowspan="2" style="line-height: 5px">
                      <p>Timeline</p>
                    </td>
                    <td id="tdata" rowspan="2">
                      <p>Weight per KRA</p>
                    </td>
                    <td
                      id="tdata"
                      colspan="6"
                      rowspan="1"
                      style="line-height: 5px"
                    >
                      <p>Performance Indicator</p>
                    </td>
                    <td id="tdata" rowspan="2">
                      <p>Actual Result</p>
                    </td>
                    <td id="tdata" colspan="4" style="line-height: 5px">
                      <p>Rating</p>
                    </td>
                    <td id="tdata" rowspan="2" style="line-height: 5px">
                      <p>Score</p>
                    </td>
                  </tr>
                  <tr
                    class="row1 light-green lighten-2"
                    style="text-align: center; font-weight: bold"
                  >
                    <td id="tdata" style="line-height: 5px">
                      <p>QET</p>
                    </td>
                    <td id="tdata" style="line-height: 5px">
                      <p>
                        Outstanding <br /><br /><br />
                        <br />5
                      </p>
                    </td>
                    <td id="tdata" style="line-height: 15px">
                      <p>
                        Very Satisfactory
                        <br />
                        4
                      </p>
                    </td>
                    <td id="tdata" style="line-height: 5px">
                      <p>
                        Satisfactory<br /><br />
                        <br /><br />
                        3
                      </p>
                    </td>
                    <td id="tdata" style="line-height: 5px">
                      <p>
                        Unsatisfactory <br /><br />
                        <br /><br />
                        2
                      </p>
                    </td>
                    <td id="tdata" style="line-height: 5px">
                      <p>
                        Poor <br /><br />
                        <br />
                        <br />
                        1
                      </p>
                    </td>
                    <td id="tdata" style="line-height: 5px">
                      <p>Q</p>
                    </td>
                    <td id="tdata" style="line-height: 5px">
                      <p>E</p>
                    </td>
                    <td id="tdata" style="line-height: 5px">
                      <p>T</p>
                    </td>
                    <td id="tdata" style="line-height: 5px">
                      <p>AVE</p>
                    </td>
                  </tr>
                  <tr class="row1">
                    <td id="tdata" rowspan="36">
                      <p>Basic Education Services</p>
                    </td>
                    <td id="tdata" rowspan="9">
                      <p>1. Content Knowledge and Pedagogy</p>
                    </td>
                    <td id="tdata" rowspan="3">
                      <p>
                        1. Applied knowledge of content within and across
                        curriculum teaching areas.
                      </p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="weightPerKra" rowspan="9">
                      <p>24%</p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Demonstrated Level 7 in Objective 1 as shown in COT
                        rating sheets/interobserver agreement forms
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Demonstrated Level 6 in Objective 1 as shown in COT
                        rating sheets/interobserver agreement forms
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Demonstrated Level 5 in Objective 1 as shown in COT
                        rating sheets/interobserver agreement forms
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Demonstrated Level 4 in Objective 1 as shown in COT
                        rating sheets/interobserver agreement forms
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>
                        Demonstrated Level 3 in Objective 1 as shown in COT
                        rating sheets/interobserver agreement forms or No
                        acceptable evidence was shown
                      </p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating1
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ1}}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave1">
                      <p>
                        {{
                          encodingIpcrfRatingAve1
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score1">
                      <p>
                        {{
                          encodingScore1
                        }}
                      </p>
                    </td>
                  </tr>

                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="eff6 pa-1 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="timeline6 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <!-- end of row1 -->
                  <!-- start of row 2 -->
                  <tr>
                    <td id="tdata" rowspan="3">
                      <p>
                        2. Ensured the positive use of ICT to facilitate the
                        teaching and learning process
                      </p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p></p>
                    </td>

                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Ensured that the ICT used redefine and transform
                        learning experiences and are documented properly and
                        consistently using any referencing style as shown in the
                        submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Ensured that the ICT used augment and enrich learning
                        experiences and are documented properly and consistently
                        using any referencing style as shown in the submitted
                        learning material
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Ensured that the ICT used modify processes and improve
                        learning experiences and are documented properly and
                        consistently using any referencing style as shown in the
                        submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Ensured that ICT are used but do not create a new
                        learning experience and/or are documented but not
                        consistent with one referencing style as shown in the
                        submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating2
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q2">
                      <p>
                        {{ encodingIpcrfNumericalQ2 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e2 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="t2 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave2">
                      <p>
                        {{
                          encodingIpcrfRatingAve2
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score2">
                      <p>
                        {{
                          encodingScore2
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="eff6 pa-1 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" colspan="2" class="eff6 blue-grey darken-4">
                      <p></p>
                    </td>
                  </tr>
                  <!-- end of row 2 -->
                  <tr>
                    <td id="tdata" rowspan="3">
                      <p>
                        3. Applied a range of teaching strategies to develop
                        critical and creative thinking, as well as other
                        higher-order thinking skills.
                      </p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p></p>
                    </td>

                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Ensured that the ICT used redefine and transform
                        learning experiences and are documented properly and
                        consistently using any referencing style as shown in the
                        submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Ensured that the ICT used augment and enrich learning
                        experiences and are documented properly and consistently
                        using any referencing style as shown in the submitted
                        learning material
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Ensured that the ICT used modify processes and improve
                        learning experiences and are documented properly and
                        consistently using any referencing style as shown in the
                        submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Ensured that ICT are used but do not create a new
                        learning experience and/or are documented but not
                        consistent with one referencing style as shown in the
                        submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q2">
                      <p>
                        {{ encodingIpcrfNumericalQ3 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e2 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="t2 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave2">
                      <p>
                        {{
                          encodingIpcrfRatingAve3
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score3">
                      <p>
                        {{
                          encodingScore3
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="eff6 pa-1 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" colspan="2" class="eff6 blue-grey darken-4">
                      <p></p>
                    </td>
                  </tr>

                  <!-- Start Number 2 -->
                  <tr class="row1">
                    <td id="tdata" rowspan="9">
                      <p>2. Diversity of Learners & Assessment and Reporting</p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        4. Established a learnercentered culture by using
                        teaching strategies that respond to their linguistic,
                        cultural, socioeconomic and religious backgrounds
                      </p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="weightPerKra" rowspan="9">
                      <p>24%</p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Utilized effective teaching strategies that are
                        appropriate in responding to learners’ linguistic,
                        cultural, socioeconomic, or religious backgrounds at an
                        individual level* as shown in the submitted learning
                        material
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Utilized effective teaching strategies that are
                        appropriate in responding to learners’ linguistic,
                        cultural, socioeconomic, or religious backgrounds at a
                        group level* as shown in the submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Utilized an effective teaching strategy that is
                        appropriate in responding to learners’ linguistic,
                        cultural, socioeconomic, or religious backgrounds as
                        shown in the submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Utilized a teaching strategy or strategies that
                        partially respond to learners’ linguistic, cultural,
                        socioeconomic, or religious backgrounds as shown in the
                        submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating4
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ4}}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave1">
                      <p>
                        {{
                          encodingIpcrfRatingAve4
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score4">
                      <p>
                        {{
                         encodingScore4
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="eff6 pa-1 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="timeline6 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr class="row1">
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        5. Planned and delivered teaching strategies that are
                        responsive to the special educational needs of learners
                        in difficult circumstances*, including: geographic
                        isolation; chronic illness; displacement due to armed
                        conflict, urban resettlement or disasters; child abuse
                        and child labor practices
                      </p>
                    </td>

                    <td id="tdata" class="weightPerKra" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Demonstrated Level 7 in Objective 5 as shown in COT
                        rating sheets/interobserver a greement forms
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Utilized effective teaching strategies that are
                        appropriate in responding to learners’ linguistic,
                        cultural, socioeconomic, or religious backgrounds at a
                        group level* as shown in the submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Utilized an effective teaching strategy that is
                        appropriate in responding to learners’ linguistic,
                        cultural, socioeconomic, or religious backgrounds as
                        shown in the submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Utilized a teaching strategy or strategies that
                        partially respond to learners’ linguistic, cultural,
                        socioeconomic, or religious backgrounds as shown in the
                        submitted learning material
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating5
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ5 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave1">
                      <p>
                        {{
                          encodingIpcrfRatingAve5
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score6">
                      <p>
                        {{
                         encodingScore5
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="eff6 pa-1 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="timeline6 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr class="row1">
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        6. Used strategies for providing timely, accurate and
                        constructive feedback to improve learner performance
                      </p>
                    </td>
                    <td id="tdata" class="weightPerKra" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Provided learners with accurate, and specific and
                        directed constructive feedback* as shown in the evidence
                        submitted
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Provided learners with accurate, and specific
                        constructive feedback as shown in the evidence submitted
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Provided learners with accurate, and general
                        constructive feedback as shown in the evidence submitted
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Provided learners with inaccurate and/or destructive
                        feedback as shown in the evidence submitted
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating6
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ6}}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1">
                      <p>
                        {{ encodingIpcrfNumericalT6 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave1">
                      <p>
                        {{
                          encodingIpcrfRatingAve6
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score7">
                      <p>
                        {{
                        encodingScore6
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="eff6 pa-1 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1">
                      <p>
                        MOV submitted shows feedback given within 5 working days
                        from submission**
                      </p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1">
                      <p>
                        MOV submitted shows feedback given within 6-10 working
                        days from submission**
                      </p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1">
                      <p>
                        MOV submitted shows feedback given within 11-20 working
                        days from submission**
                      </p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1">
                      <p>
                        MOV submitted shows feedback given beyond 20 working
                        days from submission**
                      </p>
                    </td>
                    <td id="tdata" class="timeline6">
                      <p>No evidence was shown</p>
                    </td>
                  </tr>
                  <tr class="row1">
                    <td id="tdata" rowspan="6">
                      <p>3. Curriculum and Planning</p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        7. Selected, developed, organized and used appropriate
                        teaching and learning resources, including ICT, to
                        address learning goals
                      </p>
                    </td>

                    <td id="tdata" class="weightPerKra" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="weightPerKra" rowspan="6">
                      <p>16%</p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Demonstrated Level 7 in Objective 7 as shown in COT
                        rating sheets/interobserver agreement forms
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Demonstrated Level 6 in Objective 7 as shown in COT
                        rating sheets/interobserver agreement forms
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Demonstrated Level 5 in Objective 7 as shown in COT
                        rating sheets/interobserver agreement forms
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Demonstrated Level 4 in Objective 7 as shown in COT
                        rating sheets/interobserver agreement forms
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>
                        Demonstrated Level 3 in Objective 7 as shown in COT
                        rating sheets/interobserver agreement forms or No
                        acceptable evidence was shown
                      </p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating7
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ7 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="3" class="ave1">
                      <p>
                        {{
                          encodingIpcrfRatingAve7
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score8">
                      <p>
                        {{
                         encodingScore7
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="eff6 pa-1 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="timeline6 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <!-- End Number7 -->

                  <!-- Start Number 8 -->
                  <tr class="row1">
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        8. Set achievable and appropriate learning outcomes that
                        are aligned with learning competencies
                      </p>
                    </td>

                    <td id="tdata" class="weightPerKra" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        All of the learning outcomes set are aligned with the
                        learning competencies as shown in the MOV submitted
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Majority of the learning outcomes set are aligned with
                        the learning competencies as shown in the MOV submitted
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Half of the learning outcomes set are aligned with the
                        learning competencies as shown in the MOV submitted
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Less than half of the learning outcomes set are aligned
                        with the learning competencies as shown in the MOV
                        submitted
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating8
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ8 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave1">
                      <p>
                        {{
                         encodingIpcrfRatingAve8
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score10">
                      <p>
                        {{
                          encodingScore8
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="eff5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="eff6 pa-1 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="timeline6 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <!-- End Number 3 -->
                  <!-- Start Number 4 -->

                  <tr class="row1">
                    <td id="tdata" rowspan="9">
                      <p>
                        4. Community Linkages and Professional Engagement &
                        Personal Growth and Professional Development
                      </p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        9. Built relationships with parents/ guardians and the
                        wider school community to facilitate involvement in the
                        educative process
                      </p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="weightPerKra" rowspan="9">
                      <p>24%</p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Sustained engagement with parents/ guardians and/ or
                        wider school community to facilitate involvement in the
                        educative process as evidenced by 2 or more of MOV no. 1
                        or 2
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Secured collaboration with parents/ guardians and/ or
                        wider school community to facilitate involvement in the
                        educative process as evidenced by one MOV no. 1 or 2
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Communicated with and obtained response from parents/
                        guardians and/ or wider school community to facilitate
                        involvement in the educative process as evidenced by MOV
                        No. 3
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Communicated with parents/ guardians and/or wider school
                        community to facilitate involvement in the educative
                        process but received no response/reply as evidenced by
                        MOV No. 3
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating9
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ9 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3">
                      <p>
                        {{ encodingIpcrfNumericalE9}}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave1">
                      <p>{{encodingIpcrfRatingAve9}}</p>
                    </td>
                    <td id="tdata" rowspan="3" class="score11">
                      <p>{{encodingScore9}}</p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1">
                      <p>Submitted any 4 of the acceptable MOV*</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1">
                      <p>Submitted any 3 of the acceptable MOV*</p>
                    </td>
                    <td id="tdata" class="eff4 pa-1">
                      <p>Submitted any 2 of the acceptable MOV*</p>
                    </td>
                    <td id="tdata" class="eff5 pa-1">
                      <p>Submitted any 1 of the acceptable MOV</p>
                    </td>
                    <td id="tdata" class="eff6 pa-1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="timeline6 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr class="row1">
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        10. Participated in professional networks to share
                        knowledge and to enhance practice
                      </p>
                    </td>

                    <td id="tdata" class="weightPerKra" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Participated in any professional network/ activity that
                        requires output* and proof of implementation ** within
                        the school to share knowledge and to enhance practice as
                        evidenced by the submitted MOV
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Participated in any professional network/ activity that
                        requires output* and proof of implementation ** within
                        the department/grade level to share knowledge and to
                        enhance practice as evidenced by the submitted MOV
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Participated in any professional network/ activity that
                        requires output* to share knowledge and to enhance
                        practice as evidenced by the submitted MOV
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Participated in any professional network/ activity that
                        does not require output to share knowledge and to
                        enhance practice as evidenced by the submitted MOV
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                         encodingAdjectivalRating10
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ10 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3">
                      <p>
                        {{ encodingIpcrfNumericalE10}}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave1">
                      <p>
                        {{
                          encodingIpcrfRatingAve10
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score13">
                      <p>
                        {{
                          encodingScore10
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1">
                      <p>Submitted 4 different kinds of acceptable MOV***</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1">
                      <p>Submitted 3 different kinds of acceptable MOV***</p>
                    </td>
                    <td id="tdata" class="eff4 pa-1">
                      <p>Submitted 2 different kinds of acceptable MOV***</p>
                    </td>
                    <td id="tdata" class="eff5 pa-1">
                      <p>Submitted 1 of the acceptable MOV</p>
                    </td>
                    <td id="tdata" class="eff6 pa-1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="timeline6 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <tr class="row1">
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        11. Developed a personal improvement plan based on
                        reflection of one’s practice and ongoing professional
                        learning
                      </p>
                    </td>
                    <td id="tdata" class="weightPerKra" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Updated the Development Plan and approved by the rater
                        during Phase II of the RPMS cycle
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Discussed progress on the Development Plan with the
                        rater to check whether Development Needs were addressed
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Accomplished the Development Plan from learning
                        objectives up to resources needed to address Development
                        Needs during Phase I of the RPMS cycle
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Accomplished the Strengths and Development Needs portion
                        of the Development Plan after self-assessment at the
                        beginning of the school year
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                          encodingAdjectivalRating11
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ11 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3">
                      <p>
                        {{ encodingIpcrfNumericalE11 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" rowspan="3" class="ave1">
                      <p>
                        {{
                          encodingIpcrfRatingAve11
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score13">
                      <p>
                        {{
                          encodingScore11
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1">
                      <p>
                        Submitted the IPCRF-DP with any 4 of the acceptable
                        Supporting MOV*
                      </p>
                    </td>
                    <td id="tdata" class="eff2 pa-1">
                      <p>
                        Submitted the IPCRF-DP with any 3 of the acceptable
                        Supporting MOV*
                      </p>
                    </td>
                    <td id="tdata" class="eff4 pa-1">
                      <p>
                        Submitted the IPCRF-DP with any 2 of the acceptable
                        Supporting MOV*
                      </p>
                    </td>
                    <td id="tdata" class="eff5 pa-1">
                      <p>
                        Submitted the IPCRF-DP with any 1 of the acceptable
                        Supporting MOV
                      </p>
                    </td>
                    <td id="tdata" class="eff6 pa-1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td
                      id="tdata"
                      colspan="2"
                      class="timeline6 blue-grey darken-4"
                    >
                      <p></p>
                    </td>
                  </tr>
                  <!-- End Number 4 -->

                  <!-- Start Number 5 -->
                  <tr class="row1">
                    <td id="tdata" rowspan="3">
                      <p>5. Plus Factor</p>
                    </td>
                    <td id="tdata" class="timelineObj1" rowspan="3">
                      <p>
                        12. Performed various related works/ activities that
                        contribute to the teaching-learning process
                      </p>
                    </td>

                    <td id="tdata" class="weightPerKra" rowspan="3">
                      <p></p>
                    </td>
                    <td id="tdata" class="weightPerKra" rowspan="3">
                      <p>16%</p>
                    </td>
                    <td id="tdata" class="quality1">
                      <p>Quality</p>
                    </td>
                    <td id="tdata" class="outstanding1">
                      <p>
                        Performed at least 1 related work/activity that
                        contributed to the teaching-learning process beyond the
                        school/ Community Learning Center (CLC) as evidenced by
                        submitted MOV
                      </p>
                    </td>
                    <td id="tdata" class="verySatisfactory1">
                      <p>
                        Performed at least 1 related work/activity that
                        contributed to the teaching-learning process within the
                        school/ Community Learning Center (CLC) as evidenced by
                        submitted MOV
                      </p>
                    </td>
                    <td id="tdata" class="satisfactory1">
                      <p>
                        Performed at least 1 related work/activity that
                        contributed to the teaching-learning process within the
                        learning area/ department as evidenced by submitted MOV
                      </p>
                    </td>
                    <td id="tdata" class="unsatisfactory1">
                      <p>
                        Performed at least 1 related work/activity that
                        contributed to the teaching-learning process within the
                        class as evidenced by submitted MOV
                      </p>
                    </td>
                    <td id="tdata" class="poor1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" rowspan="1" class="actualResult">
                      <p>
                        {{
                         encodingAdjectivalRating12
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="q1">
                      <p>
                        {{ encodingIpcrfNumericalQ12 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="e1">
                      <p>
                        {{ encodingIpcrfNumericalE12 }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" colspan="1" rowspan="3" class="ave1">
                      <p>
                        {{
                          encodingIpcrfRatingAve12
                        }}
                      </p>
                    </td>
                    <td id="tdata" rowspan="3" class="score8">
                      <p>
                        {{
                          encodingScore12
                        }}
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="eff1 pa-1">
                      <p>Efficiency</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1">
                      <p>Submitted any 4 of the acceptable MOV*</p>
                    </td>
                    <td id="tdata" class="eff2 pa-1">
                      <p>Submitted any 3 of the acceptable MOV*</p>
                    </td>
                    <td id="tdata" class="eff4 pa-1">
                      <p>Submitted any 2 of the acceptable MOV*</p>
                    </td>
                    <td id="tdata" class="eff5 pa-1">
                      <p>Submitted any 1 of the acceptable MOV</p>
                    </td>
                    <td id="tdata" class="eff6 pa-1">
                      <p>No acceptable evidence was shown</p>
                    </td>
                    <td id="tdata" colspan="2" class="eff6 pa-1">
                      <p></p>
                    </td>
                  </tr>
                  <tr>
                    <td id="tdata" class="timeline1 pa-1">
                      <p>Timeliness</p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline2 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline4 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline5 pa-1 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline6 blue-grey darken-4">
                      <p></p>
                    </td>
                    <td id="tdata" class="timeline6">
                      <p></p>
                    </td>
                  </tr>
                  <!-- End Number 5 Obj -->
                  <!-- Startof Ratingfor overall accomplishment -->
                  <tr>
                    <td class="timeline6" colspan="12">
                      <p style="float: right" class="mr-2 mt-2">
                        Rating for Overall Accomplishment
                      </p>
                    </td>
                    <td id="tdata" class="ratingTotal" colspan="4">
                      <p>{{ empFinalAdjRating }}</p>
                    </td>
                    <td id="tdata" class="ratingAverage">
                      <p>{{ empFinalRating}}</p>
                    </td>
                  </tr>
                  <!-- End of Ratingfor overall accomplishment -->
                </table>
                <br />
                <br />
              </div>
              <!-- START OF ADJECTIVAL RATING -->
              <div>
                <table style="width: 50%; text-align: center">
                  <tr>
                    <td id="tdata" colspan="2">
                      ADJECTIVAL RATING EQUIVALENCES
                    </td>
                  </tr>

                  <tr>
                    <td id="tdata">RANGE</td>
                    <td id="tdata">ADJECTIVAL RATING</td>
                  </tr>
                  <tr>
                    <td id="tdata">4.500-5.000</td>
                    <td id="tdata">OUTSTANDING</td>
                  </tr>
                  <tr>
                    <td id="tdata">3.500-4.499</td>
                    <td id="tdata">VERY SATISFACTORY</td>
                  </tr>
                  <tr>
                    <td id="tdata">2.500-3.499</td>
                    <td id="tdata">SATISFACTORY</td>
                  </tr>
                  <tr>
                    <td id="tdata">1.500-2.499</td>
                    <td id="tdata">UNSATISFACTORY</td>
                  </tr>
                  <tr>
                    <td id="tdata">below 1.499</td>
                    <td id="tdata">POOR</td>
                  </tr>
                </table>
              </div>

              <!-- END OF ADJECTIVAL RATING -->
              <!-- Part 1 Display Signatures -->

              <div class="pa-10 ml-9" style="text-align: center">
                <v-row>
                  <v-col>
                    <v-text-field
                      v-model="empName"
                      readonly
                      class="text-center"
                      style="width: 200px; height: 100px; margin-left: 80px"
                    >
                    </v-text-field>

                    <h5 class="pa-2" style="margin-left: 80px">Ratee</h5>
                  </v-col>
                  <v-col>
                    <v-text-field
                      readonly
                      class="text-center"
                      v-model="empRater"
                      style="width: 200px; height: 100px; margin-left: 40px"
                    >
                    </v-text-field>

                    <h5 class="pa-2" style="margin-right: 10px">Rater</h5>
                  </v-col>

                  <v-col>
                    <v-text-field
                      v-model="part1ApprovingAuthority"
                      readonly
                      class="text-center"
                      style="width: 200px; height: 100px; margin-left: 40px"
                    >
                      <!-- <p class="mt-6">{{ part_approvingAuthority }}</p> -->
                    </v-text-field>

                    <h5 class="pa-2" style="margin-left: -20px">
                      Approving Authority
                    </h5>
                  </v-col>
                </v-row>
              </div>

              <br /><br />
            </v-container>
          </v-tab-item>
          <v-tab>Part II</v-tab>
          <v-tab-item>
            <!-- End of Display Signatures  -->

            <!-- end of part 1 display -->
            <!-- start of part 2 display -->

            <table id="table" style="width: 100%">
              <tr class="row1">
                <td id="tdata" colspan="6" class="grey lighten-2 pt-4 pb-0">
                  <p style="text-align: center"><b>PART II: COMPETENCIES</b></p>
                </td>
              </tr>

              <tr class="row1">
                <td id="tdata" colspan="6" style="line-height: 5px">
                  <p>
                    Instructions: Please indicate the number of competency
                    indicators that you demonstrated during the performance
                    cycle.
                  </p>
                </td>
              </tr>
              <tr class="row1">
                <td id="tdata">
                  <p><b>CORE BEHAVIORAL COMPETENCIES</b></p>
                </td>
              </tr>
              <tr>
                <td id="tdata">
                  <b>Self-Management</b> <br />
                  1. Sets personal goals and directions, needs and development.
                  <br />
                  2. Undertakes personal actions and behavior that are clear and
                  purposive and takes into account personal goals and values
                  congruent to that of the organization. <br />
                  3. Displays emotional maturity and enthusiasm for and is
                  challenged by higher goals. <br />
                  4. Prioritizes work tasks and schedules (through Gantt chants,
                  checklists, etc.) to achieve goals.
                  <br />
                  5. Sets high quality, challenging, realistic goals for self
                  and others.
                </td>

                <td
                  id="tdata"
                  colspan="1"
                  style="width: 5%; text-align: center"
                >
                  {{ countSelfManagement }}
                </td>
                <td id="tdata" colspan="3">
                  <b> Teamwork</b> <br />
                  1. Willingly does his/her share of responsibility. <br />
                  2. Promotes collaboration and removes barrier to teamwork and
                  goal accomplishment across the organization.
                  <br />
                  3. Applies negotiation principles in arriving at win-win
                  agreements.
                  <br />
                  4. Drives consensus and team ownership of decisions.
                  <br />
                  5. Works constructively and collaboratively with others and
                  across organizations to accomplish organization goals and
                  objectives.
                </td>
                <td
                  id="tdata"
                  colspan="1"
                  style="width: 5%; text-align: center"
                >
                  {{ countTeamwork }}
                </td>
              </tr>
              <tr>
                <td id="tdata">
                  <b>Professionalism and Ethics</b> <br />
                  1. Demonstrates the values and behavior enshrined in the Norms
                  and Conduct and Ethical Standards for Public Officials and
                  Employees (RA 6713). <br />
                  2. Practices ethical and professional behavior and conduct
                  taking into account the impact of his/her actions and
                  decisions.
                  <br />
                  3. Maintains a professional image: being trustworthy,
                  regularity of attendance and punctuality, good grooming and
                  communication.
                  <br />
                  4. Makes personal sacrifices to meet the organization’s needs.
                  <br />
                  5. Acts with a sense of urgency and responsibility to meet the
                  organization’s needs, improve system and help others improve
                  their effectiveness.
                </td>

                <td
                  id="tdata"
                  colspan="1"
                  style="width: 5%; text-align: center"
                >
                  {{ countProfessional }}
                </td>
                <td id="tdata" colspan="3">
                  <b> Service Orientation</b> <br />
                  1. Can explain and articulate organizational directions,
                  issues and problems.
                  <br />
                  2. Takes personal responsibility for dealing with and/or
                  correcting customer service issues and concerns. <br />3.
                  Initiates activities that promote advocacy for men and women
                  empowerment.
                  <br />
                  4. Participates in updating office vision, mission, mandates
                  and strategies based on DepEd strategies and directions.
                  <br />
                  5. Develops and adopts service improvement program through
                  simplified procedures that will further enhance service
                  delivery.
                </td>
                <td
                  id="tdata"
                  colspan="1"
                  style="width: 5%; text-align: center"
                >
                  {{ countService }}
                </td>
              </tr>

              <tr>
                <td id="tdata" colspan="1">
                  <b>Results Focus</b> <br />
                  1. Achieves results with optimal use of time and resources
                  most of the time.
                  <br />
                  2. Avoids rework, mistakes and wastage through effective work
                  methods by placing organizational needs before personal needs.
                  <br />3. Delivers error-free outputs most of the time by
                  conforming to standard operating procedures correctly and
                  consistently. Able to produce very satisfactory quality work
                  in terms of usefulness/acceptability and completeness with no
                  supervision required. <br />
                  4. Expresses a desire to do better and may express frustration
                  at waste or inefficiency. May focus on new or more precise
                  ways of meeting goals set.
                  <br />
                  5. Makes specific changes in the system or in own work methods
                  to improve performance. Examples may include doing something
                  better, faster, at a lower cost, more efficiently, or
                  improving quality, customer satisfaction, morale, without
                  setting any specific goal.
                </td>

                <td
                  id="tdata"
                  colspan="1"
                  style="width: 5%; text-align: center"
                >
                  {{ countResults }}
                </td>
                <td id="tdata" colspan="3">
                  <b> Innovation</b> <br />
                  1. Examines the root cause of problems and suggests effective
                  solutions. Foster new ideas, processes and suggests better
                  ways to do things (cost and/or operational efficiency). <br />
                  2. Demonstrates an ability to think “beyond the box”.
                  Continuously focuses on improving personal productivity to
                  create higher value and results.
                  <br />3. Promotes a creative climate and inspires co-workers
                  to develop original ideas or solutions.
                  <br />
                  4. Translates creative thinking into tangible changes and
                  solutions that improve the work unit and organization.
                  <br />
                  5. Uses ingenious methods to accomplish responsibilities.
                  Demonstrates resourcefulness and the ability to succeed with
                  minimal resources.
                </td>
                <td
                  id="tdata"
                  colspan="1"
                  style="width: 5%; text-align: center"
                >
                  {{ countInnovation }}
                </td>
              </tr>
              <tr class="row1">
                <td id="tdata" colspan="6">
                  <p>
                    Note: The assessment in the demonstration of competencies
                    shall not be reflected in the final rating. These
                    competencies are monitored to inform professional
                    development plans (DepEd Order No. 2, s. 2015, p. 9).
                  </p>
                </td>
              </tr>
            </table>
          </v-tab-item>
          <v-tab>Part 3</v-tab>
          <v-tab-item>
            <br />
            <!-- start of part 3 competencies -->

            <table
              id="table"
              class="pa-0"
              style="width: 100%; text-align: left"
            >
              <tr class="row1">
                <td id="tdata" colspan="6" class="grey lighten-2 pt-4 pb-0">
                  <p style="text-align: center">
                    <b
                      >Teacher I-III, SPET I-IV, Special Science Teacher I-II
                      (Proficient Teacher)</b
                    >
                  </p>
                </td>
              </tr>
              <tr>
                <td id="tdata" rowspan="2" colspan="1">
                  <p>
                    Name of Employee:<span class="ml-4">{{
                     empName
                    }}</span>
                  </p>
                  <p>
                    Position:<span class="ml-4">{{
                      empPosition
                    }}</span>
                  </p>
                  <p>
                    Bureau/Center/Service/Division:<span class="ml-4">{{
                      empDivision
                    }}</span>
                  </p>
                  <p>
                    Rating Period:<span class="ml-4">{{
                      empRatingPeriod
                    }}</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td id="tdata" rowspan="2" colspan="2">
                  <p>
                    Name of Rater:<span class="ml-4">{{
                      empRater
                    }}</span>
                  </p>
                  <p>
                    Position:
                    <span class="ml-4">{{
                      empRaterPosition
                    }}</span>
                  </p>

                  <p>
                    Date of Review:
                    <span class="ml-4">{{
                     empDateReview
                    }}</span>
                  </p>
                </td>
              </tr>

              <caption>
                Part III. SUMMARY OF RATINGS FOR DISCUSSION
              </caption>
            </table>
            <table id="table" class="content" style="width: 100%">
              <tr class="light-green lighten-2">
                <td id="tdata" rowspan="2"><p>KRA</p></td>
                <td id="tdata" rowspan="2">
                  <p>Weight per KRA</p>
                </td>
                <td id="tdata" rowspan="2">
                  <p>Objectives</p>
                </td>
                <td id="tdata" rowspan="2"><p>Weight per Objective</p></td>
                <td id="tdata" rowspan="1" colspan=" 4">
                  <p>Numerical Ratings</p>
                </td>
                <td id="tdata" rowspan="2">
                  <p>Score</p>
                </td>
                <td id="tdata" rowspan="2">
                  <p>Adjectival Rating</p>
                </td>
              </tr>

              <tr class="light-green lighten-2">
                <td id="tdata">Q</td>
                <td id="tdata">E</td>
                <td id="tdata">T</td>
                <td id="tdata">AVE</td>
              </tr>

              <tr class="displayKra1">
                <td id="tdata" rowspan="3">KRA 1</td>
                <td id="tdata">24%</td>

                <td id="tdata">Objective 1</td>
                <td id="tdata">8%</td>
                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ1}}</p>
                </td>

                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve1 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore1 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating1
                    }}
                  </p>
                </td>
              </tr>
              <tr class="blank2">
                <td id="tdata">24%</td>

                <td id="tdata">Objective 2</td>
                <td id="tdata">8%</td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ2 }}</p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>

                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve2 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore2 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating2
                    }}
                  </p>
                </td>
              </tr>
              <tr class="blank2">
                <td id="tdata">24%</td>

                <td id="tdata">Objective 2</td>
                <td id="tdata">8%</td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ3 }}</p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>

                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve3 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore3 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating3
                    }}
                  </p>
                </td>
              </tr>
              <tr class="displayKra2">
                <td id="tdata" rowspan="3">KRA 2</td>
                <td id="tdata">24%</td>

                <td id="tdata">Objective 3</td>
                <td id="tdata">8%</td>
                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ4}}</p>
                </td>

                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve4 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore4 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating4
                    }}
                  </p>
                </td>
              </tr>
              <tr class="kra2Blank1">
                <td id="tdata">24%</td>

                <td id="tdata">Objective 2</td>
                <td id="tdata">8%</td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ5 }}</p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>

                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve5}}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore5 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating5
                    }}
                  </p>
                </td>
              </tr>
              <tr class="kra2Blank2">
                <td id="tdata">24%</td>

                <td id="tdata">Objective 2</td>
                <td id="tdata">8%</td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ6 }}</p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalT6 }}</p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve6 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore6 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating6
                    }}
                  </p>
                </td>
              </tr>
              <tr class="displayKra2">
                <td id="tdata" rowspan="2">KRA 3</td>
                <td id="tdata">24%</td>

                <td id="tdata">Objective 3</td>
                <td id="tdata">8%</td>
                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ7}}</p>
                </td>

                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve7 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore7 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating7
                    }}
                  </p>
                </td>
              </tr>
              <tr class="kra3Blank1">
                <td id="tdata">24%</td>

                <td id="tdata">Objective 2</td>
                <td id="tdata">8%</td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ8}}</p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>

                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{encodingIpcrfRatingAve8 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore8 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating8
                    }}
                  </p>
                </td>
              </tr>
              <tr class="displayKra4">
                <td id="tdata" rowspan="3">KRA 4</td>
                <td id="tdata">24%</td>

                <td id="tdata">Objective 3</td>
                <td id="tdata">8%</td>
                <td id="tdata">
                  <p>{{encodingIpcrfNumericalQ9 }}</p>
                </td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalE9}}</p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve9 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{encodingScore9 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                    encodingAdjectivalRating9
                    }}
                  </p>
                </td>
              </tr>
              <tr class="kra4Blank1">
                <td id="tdata">24%</td>

                <td id="tdata">Objective 2</td>
                <td id="tdata">8%</td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ10}}</p>
                </td>
                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalE10 }}</p>
                </td>

                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve10 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore10 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating10
                    }}
                  </p>
                </td>
              </tr>
              <tr class="kra4Blank2">
                <td id="tdata">24%</td>

                <td id="tdata">Objective 2</td>
                <td id="tdata">8%</td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ11 }}</p>
                </td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalE11 }}</p>
                </td>

                <td id="tdata" class="grey darken-2"><p></p></td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve11 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore11 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating11
                    }}
                  </p>
                </td>
              </tr>
              <tr class="displayKra4">
                <td id="tdata">Plus Factor</td>
                <td id="tdata">24%</td>

                <td id="tdata">Objective 3</td>
                <td id="tdata">8%</td>
                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalQ12 }}</p>
                </td>

                <td id="tdata">
                  <p>{{ encodingIpcrfNumericalE12 }}</p>
                </td>
                <td id="tdata" class="grey darken-2">
                  <p></p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingIpcrfRatingAve12 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{ encodingScore12 }}
                  </p>
                </td>
                <td id="tdata">
                  <p>
                    {{
                      encodingAdjectivalRating12
                    }}
                  </p>
                </td>
              </tr>
              <!-- Final Rating Area -->
              <tr class="finalRating light-green lighten-2">
                <td id="tdata" colspan="2" rowspan="2">
                  FINAL PERFORMANCE RESULTS
                </td>
                <td id="tdata" colspan="4" rowspan="2">
                  Accomplishments of KRAs and Objectives
                </td>

                <td id="tdata" colspan="2">Final Rating</td>
                <td id="tdata" colspan="2">Adjectival Rating</td>
              </tr>
              <tr class="finalRating light-green lighten-2">
                <td id="tdata" colspan="2">
                  <p>{{ empFinalRating }}</p>
                </td>
                <td id="tdata" colspan="2">
                  <p>{{ empFinalAdjRating }}</p>
                </td>
              </tr>
            </table>
            <br />

            <!-- Part 3 Display Signatures -->

            <div class="pa-10 ml-9" style="text-align: center">
              <v-row>
                <v-col>
                  <v-text-field
                    readonly
                    v-model="empName"
                    style="width: 200px; height: 100px; margin-left: 80px"
                  >
                  </v-text-field>

                  <h5 class="pa-2" style="margin-left: 80px">Ratee</h5>
                </v-col>
                <v-col>
                  <v-text-field
                    readonly
                    v-model="empRater"
                    style="width: 200px; height: 100px; margin-left: 40px"
                  >
                  </v-text-field>

                  <h5 class="pa-2" style="margin-right: 10px">Rater</h5>
                </v-col>

                <v-col>
                  <v-text-field
                    readonly
                    style="width: 200px; height: 100px; margin-left: -20px"
                    v-model="part1ApprovingAuthority"
                  >
                  </v-text-field>

                  <h5 class="pa-2" style="margin-left: -20px">
                    Approving Authority
                  </h5>
                </v-col>
              </v-row>
            </div>
            <br /><br />
          </v-tab-item>
          <v-tab>Part 4</v-tab>
          <v-tab-item>
            <div id="app">
              <v-app>
                <v-container class="grey lighten-5">
                  <v-card
                    class="pa-2 text-center"
                    color="grey lighten-2"
                    outlined
                    tile
                  >
                    <b> PART IV: DEVELOPMENT PLANS</b>
                  </v-card>

                  <br />

                  <v-card class="mx-auto" max-width="900">
                    <v-card-text>
                      <div class="text--primary">
                        <b> NOTE:</b><br />
                        This sheet shall be accomplished during: i) Phase I:
                        Performance Planning and Commitment, based on the
                        results of e-SAT; and ii)
                        <br />
                        Phase II: Performance Monitoring and Coaching, based on
                        the agreements on the Performance Monitoring and
                        Coaching Form
                        <br />and Mid-year Review Form; and iii) Phase IV:
                        Performance Rewarding and Development Planning, based on
                        the actual results of IPCRF.<br />
                        <br />The Ratee can modify the cell (i.e., add rows) to
                        reflect his/her development needs and strengths.
                      </div>
                    </v-card-text>
                  </v-card>
                  <br />

                  <v-row no-gutters>
                    <v-col
                      v-for="n in 5"
                      :key="n"
                      :cols="n === 3 ? 6 : undefined"
                      class="text-center"
                      outlined
                      tile
                    >
                      <v-card v-if="n === 1" class="pa-8" outlined tile>
                        Strengths <span class="red--text text--lighten-1">*</span>
                      </v-card>
                      <v-card v-else-if="n === 2" class="pa-2" outlined tile
                        ><br />
                        Development Needs <span class="red--text text--lighten-1">*</span>
                      </v-card>
                      <v-card
                        v-else-if="n === 3"
                        class="pa-2 text-center"
                        outlined
                        tile
                      >
                        Action Plan <br />
                        (Recommended Developmental Intervention) <br />
                        Learning Objectives | Intervention <span class="red--text text--lighten-1">*</span>
                        <!-- <v-card class="d-inline pa-2" outlined tile>
                      Learning Objectives
                    </v-card>
                    <v-card class="d-inline pa-2" outlined tile>
                      Intervention
                    </v-card> -->
                      </v-card>
                      <v-card v-else-if="n === 4" class="pa-8" outlined tile>
                        Timeline  <span class="red--text text--lighten-1">*</span>
                      </v-card>
                      <v-card v-else-if="n === 5" class="pa-5" outlined tile>
                        Resources Needed <span class="red--text text--lighten-1">*</span>
                      </v-card>
                    </v-col>
                  </v-row>

                  <div class="d-flex flex-column mb-6">
                    <v-form ref="part4">
                      <v-card class="pa-2" color="grey lighten-2" outlined tile>
                        A. Functional Competencies
                      </v-card>
                      <v-row no-gutters>
                        <v-col
                          v-for="n in 5"
                          :key="n"
                          :cols="n === 3 ? 6 : undefined"
                          class="text-center"
                          outlined
                          tile
                        >
                          <v-card v-if="n === 1" outlined tile>
                            <v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    flat
                                    solo
                                    :rules="required"
                                    :readonly="ifAdmin"
                                    v-model="strengthsFunctional"
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                          <v-card v-else-if="n === 2" outlined tile
                            ><v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    :readonly="ifAdmin"
                                    flat
                                    v-model="developmentNeedsFunctional"
                                    solo
                                    :rules="required"
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                          <v-card
                            v-else-if="n === 3"
                            class="text-center"
                            outlined
                            tile
                          >
                            <v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    :readonly="ifAdmin"
                                    flat
                                    :rules="required"
                                    v-model="learningObjectivesFunctional"
                                    solo
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    flat
                                    v-model="interventionFunctional"
                                    solo
                                    :rules="required"
                                    :readonly="ifAdmin"
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                          <v-card v-else-if="n === 4" outlined tile>
                            <v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    :readonly="ifAdmin"
                                    flat
                                    :rules="required"
                                    v-model="timelineFunctional"
                                    solo
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                          <v-card v-else-if="n === 5" outlined tile>
                            <v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    flat
                                    :rules="required"
                                    :readonly="ifAdmin"
                                    v-model="resourcesNeededFunctional"
                                    solo
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                        </v-col>
                      </v-row>

                      <!-- Core Behavioral Text Area -->
                      <v-card class="pa-2" color="grey lighten-2" outlined tile>
                        B. Core Behavioral Competencies
                      </v-card>

                      <v-row no-gutters>
                        <v-col
                          v-for="n in 5"
                          :key="n"
                          :cols="n === 3 ? 6 : undefined"
                          class="text-center"
                          outlined
                          tile
                        >
                          <v-card v-if="n === 1" outlined tile>
                            <v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    v-model="strengthsCore"
                                    flat
                                    :rules="required"
                                    :readonly="ifAdmin"
                                    solo
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                          <v-card v-else-if="n === 2" outlined tile
                            ><v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    flat
                                    :rules="required"
                                    solo
                                    :readonly="ifAdmin"
                                    v-model="developmentCore"
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                          <v-card
                            v-else-if="n === 3"
                            class="text-center"
                            outlined
                            tile
                          >
                            <v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    flat
                                    :readonly="ifAdmin"
                                    v-model="learningObjectivesCore"
                                    solo
                                    :rules="required"
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    flat
                                    v-model="interventionCore"
                                    solo
                                    :rules="required"
                                    :readonly="ifAdmin"
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                          <v-card v-else-if="n === 4" outlined tile>
                            <v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    flat
                                    :rules="required"
                                    solo
                                    :readonly="ifAdmin"
                                    v-model="timelineCore"
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                          <v-card v-else-if="n === 5" outlined tile>
                            <v-container>
                              <v-row>
                                <v-col>
                                  <v-textarea
                                    auto-grow
                                    flat
                                    :readonly="ifAdmin"
                                    v-model="resourcesNeededCore"
                                    solo
                                    :rules="required"
                                    class="ma-0 pa-0"
                                    hide-details
                                    row-height="15"
                                  ></v-textarea>
                                </v-col>
                              </v-row>
                            </v-container>
                          </v-card>
                        </v-col>
                      </v-row>
                      <!-- Feedback  -->
                      <v-card class="pa-2" outlined tile>
                        Feedback: <span class="red--text text--lighten-1">*</span>
                        <v-container>
                          <v-row>
                            <v-col>
                              <v-textarea
                                auto-grow
                                flat
                                v-model="feedback"
                                solo
                                :rules="required"
                                :readonly="ifAdmin"
                                class="ma-0 pa-0"
                                hide-details
                                row-height="15"
                              ></v-textarea>
                            </v-col>
                          </v-row>
                        </v-container>
                      </v-card>

                      <!-- This is the signature part in part 4 -->
                      <div class="pa-10 ml-9" style="text-align: center">
                        <v-row>
                          <v-col>
                            <v-card
                              class="pa-2"
                              style="
                                width: 250px;
                                height: 100px;
                                margin-left: 20px;
                              "
                            >
                              <v-text-field
                                dense
                                solo
                                :rules="required"
                                flat
                                v-model="rateePart4"
                              >
                              </v-text-field>
                            </v-card>
                            <h5 class="pa-2" style="margin-left: 30px">
                              RATEE <span class="red--text text--lighten-1">*</span>
                            </h5>
                          </v-col>

                          <v-col>
                            <v-card
                              v-model="part4_rater"
                              class="pa-2"
                              style="
                                width: 250px;
                                height: 100px;
                                margin-left: 15px;
                              "
                            >
                              <v-text-field
                                dense
                                solo
                                flat
                                :rules="required"
                                v-model="raterPart4"
                              >
                              </v-text-field>
                            </v-card>
                            <h5 class="pa-2" style="margin-right: 10px">
                              RATER <span class="red--text text--lighten-1">*</span>
                            </h5>
                          </v-col>

                          <v-col>
                            <v-card
                              class="pa-2"
                              style="width: 250px; height: 100px"
                            >
                              <v-text-field
                                dense
                                :readonly="ifAdmin"
                                solo
                                flat
                                :rules="required"
                                v-model="approvingAuthorityPart4"
                              >
                              </v-text-field>
                            </v-card>
                            <h5 class="pa-2" style="margin-left: -70px">
                              APPROVING AUTHORITY <span class="red--text text--lighten-1">*</span>
                            </h5>
                          </v-col>
                        </v-row>
                      </div>
                      <div class="ml-9"></div>
                    </v-form>
                  </div>

                  <v-card class="mx-auto" max-width="800">
                    <v-card-text>
                      <div class="text--primary">
                        <b> NOTE:</b><br />
                        When all Parts of the IPCRF are accomplished, the Ratee
                        must submit the file copy of his or her IPCRF electronic
                        form to the Department Head or School Head for the
                        school-wide consolidation. He or she must print all the
                        pages of this form and submit to the Personnel Division
                        of the school to be attached to his or her 201 personnel
                        file.
                      </div>
                    </v-card-text> </v-card
                  ><br />
                  <v-btn
                    :loading="loading"
                    :readonly="loading"
                    @click="finalizePart4"
                    class="ml-auto mr-auto text-center ma-6 ml-auto mr-auto mt-5 text-center d-block"
              
              height="50px"
                    >Finalize Part 4</v-btn
                  >
                </v-container>
              </v-app>
            </div>
          </v-tab-item>
        </v-tabs>
      </v-card>
    </v-container>
  </v-container>
</template>
<style>
input:disabled {
  color:black;
  font-weight:bold;
  text-decoration: none;
  opacity:1.0
}
.nameOfEmployee {
  width: 300px;
}
.part3 {
  width: 200px;
  text-align: center;
}
.kra {
  text-align: center;

  height: 127px;
}
/* FOR TIMELINE */
.timeline {
  height: 127px;
}
/* FOR THE SCROLLABLE */
.ePart1 {
  display: flex;
  overflow-x: auto;
}
.ePart2 {
  display: flex;
  overflow-x: scroll;
  overflow-y: hidden;
}
.encodingDiv {
  display: flex;
  overflow-x: auto;
}
/* FOR PART 1 QET */

/* FOR PART 1 SCORE */
.part1Score {
  height: 127px;
}
/* .body p {
  font-family: Arial, sans-serif;
  font-size: 10px;
  line-height: 15px;
  color: #333333;
} */
.content {
  text-align: center;
}
#table,
#tdata {
  font-size: 10px;
  border: solid 1px #000;
  padding: 6px;
}
/* table,
th,
td {
  border: solid 1px #000;
  padding: 6px;
  font-size: 12px;
  font-family: Arial, Helvetica, sans-serif;
} */

table {
  border-collapse: collapse;
  caption-side: bottom;
}

caption {
  font-size: 16px;
  font-weight: bold;
  padding-top: 5px;
}
</style>

<script>
// import * as excel from 'excel-formula'
//  var formattedFormula = excelFormulaUtilities.formatFormulaHTML('IF(1+1=2,"true","false")');
//         alert(formattedFormula)
import PromptAlert from "@/utils/Prompt";
export default {
  data() {
    return {
      mixins: [PromptAlert],
      ipcrfIdPart1Demographic: "",
      ipcrfIdPart1EncodingAdmin: "",
      ipcrfIdPart2: "",
      ipcrfIdPart4: "",
      alert: false,
      alert2: false,
      //user:JSON.parse(sessionStorage.getItem('user_session')).role,
      create: false,
      edit: false,
      show: false,
      user: JSON.parse(sessionStorage.getItem("user_session")).role,
      userId: JSON.parse(sessionStorage.getItem("user_session")).id,
      inputType: "",
      ipcrf: [],
      search: "",
      headers: [
        { text: "ID", value: "user_id" },
        {
          text: "Employee Name",
          align: "start",
          sortable: false,
          value: "name_of_employee",
        },
        { text: "Position", value: "position" },
        { text: "Employment Status", value: "employment_status" },

        { text: "Sex", value: "sex" },
        { text: "Rater", value: "rater" },
        { text: "Rater Position", value: "rater_position" },
        { text: "Rating Period", value: "rating_period" },
        { text: "Actions", value: "actions", sortable: false },
      ],
      ratingPeriodItems: [
        "SY 2020-2021",
        "SY 2021-2022",
        "SY 2022-2023",
        "SY 2023-2024",
        "SY 2024-2025",
        "SY 2025-2026",
        "SY 2027-2028",
        "SY 2028-2029",
        "SY 2029-2030",
      ],

      approvingAuthorityPosition: [
        "Schools Division Superintendent",
        "Assistant Schools Division Superintendent",
        "CID Chief",
        "Education Program Supervisor",
        "Education Program Specialist II",
        "Public Schools District Supervisor",
        "Principal IV",
        "Principal III",
        "Principal II",
        "Principal I",
        "Assistant School Principal I",
        "Assistant School Principal II",
        "Special School Principal",
        "Vocational School Administrator I",
        "Vocational School Administrator II",
        "Head Teacher VI",
        "Head Teacher V",
        "Head Teacher III",
        "Head Teacher I",
        "Master Teacher IV",
        "Master Teacher III",
        "Master Teacher II",
        "Master Teacher 1",
        "Officer-in-Charge",
        "Teacher-in-Charge",
      ],
      //part 4 model

      regionItems: [
        "National Capital Region (NCR)",
        "Cordillera Administrative Region (CAR)",
        "I - Ilocos Region",
        "II - Cagayan Valley",
        "III - Central Luzon",
        "IV-A - CALABARZON",
        "IV-B - MIMAROPA",
        "V - Bicol Region",
        "VI - Western Visayas",
        "VII - Central Visayas",
        "VIII - Eastern Visayas",
        "IX - Zamboanga Peninsula",
        "X - Northern Mindanao",
        "XI - Davao Region",
        "XII - SOCCSKSARGEN",
        "XIII - CARAGA Region",
        "Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)",
      ],
      empPositionItems: [
        "Teacher I",
        "Teacher II",
        "Teacher III",
        "Instructor I",
        "Instructor II",
        "SPET I",
        "SPET II",
        "SPET III",
        "SPET IV",
        "SPET V",
        "Master Teacher I",
        "Master Teacher II",
        "Master Teacher III",
        "Master Teacher IV",
        "Special Science Teacher I",
        "Special Science Teacher II",
        "Special Science Teacher III",
        "Special Science Teacher IV",
        "Special Science Teacher V",
      ],
      raterPositionItems: [
        "Education Program Supervisor",
        "Education Program Supervisor II",
        "Public Schools District Supervisor",
        "Principal IV",
        "Principal III",
        "Principal II",
        "Principal I",
        "Assistant School Principal I",
        "Assistant School Principal II",
        "Special School Principal I",
        "Special School Principal II",
        "Vocational School Administrator I",
        "Vocational School Administrator II",
        "Head Teacher VI",
        "Head Teacher V",
        "Head Teacher IV",
        "Head Teacher III",
        "Head Teacher II",
        "Head Teacher I",
        "Master Teacher IV",
        "Master Teacher III",
        "Master Teacher II",
        "Master Teacher I",
        "Officer-in-Charge",
        "Teacher-in-Charge",
      ],
      divisionItems: [
        "Division I",
        "Division II",
        "Division III",
        "Division IV",
        "Division V",
        "Division VI",
        "Division VII",
        "Division VIII",
        "Division IX",
        "Division X",
        "Division XI",
        "Division XII",
        "Division XIII",
        "Division XIV",
        "Division XV",
        "Division XVI",
      ],
      employmentStatusItems: [
        "Regular Permanent",
        "Provisional",
        "Substitute",
        "Contractual",
      ],
      ageItems: [
        "Under 25 years old",
        "25-30",
        "31-35",
        "36-40",
        "41-45",
        "46-50",
        "51-55",
        "Over 55 years old",
      ],
      sexItems: ["Male", "Female"],
      noYrsTeachingItems: ["0-3 years", "4-10 years", "More than 10 years"],
      schoolTypeItems: ["Urban", "Rural"],
      levelTaughtItems: [
        "Elementary",
        "Junior High School",
        "Senior High School",
        "College",
      ],
      highestDegreeObtainedItems: [
        "Bachelor's Degree",
        "Master's Degree",
        "Doctorate Degree",
      ],
      schoolSizeItems: ["Small", "Medium", "Large", "Very Large"],
      gradeLevelTaughtItems: [
        "Kinder",
        "Grade 1",
        "Grade 2",
        "Grade 3",
        "Grade 4",
        "Grade 5",
        "Grade 6",
        "Grade 7",
        "Grade 8",
        "Grade 9",
        "Grade 10",
        "Grade 11",
        "Grade 12",
      ],
      curricularClassificationItems: [
        "Kindergarten",
        "Kinder to Grade 6",
        "Kinder to Grade 10",
        "Kinder to Grade 12",
        "Kinder to Grade 6; Grade 11-12",
        "Kinder to Grade 10 attached to Tertiary",
        "Kinder to Grade 12 attached to Tertiary",
        "Kindergarten; Grade 7-10",
        "Kindergarten; Grade 7-10; Grade 11-12",
        "Kindergarten; Grade 11-12",
        "Grade 1-6",
        "Grade 1-6; Grade 7-10",
        "Grade 1-6; Grade 11-12",
        "Grade 1-6; Grade 7-10; Grade 11-12",
        "Grade 7-10",
        "Grade 7-10; Grade 11-12",
        "Grade 11-12",
        "Community-based Learning Center",
      ],
      subjectTaughtItems: [
        "All Subjects",
        "MTB-MLE",
        "Madrasah ALIVE",
        "Filipino",
        "English",
        "Mathematics",
        "Science",
        "Araling Panlipunan",
        "Edukasyon sa Pagpapakatao",
        "MAPEH",
        "Music",
        "Arts",
        "Physical Education",
        "Health",
        "TLE/EPP-HE",
        "TLE/EPP-LE/Tech-Voc",
        "ALS",
        "IPED",
        "Special Programs",
      ],
      areaofSpecializationItems: [
        "English",
        "Filipino",
        "Mathematics",
        "General Science",
        "Biology",
        "Chemistry",
        "Physics",
        "Social Science",
        "Early Childhood Education",
        "Values Education",
        "SPED",
        "Music",
        "Arts",
        "Physical Education",
        "Health",
        "TLE/HE/TVL",
      ],

      empName: "",
      empRater: "",
      empRegion: "",
      empPosition: "",
      empRaterPosition: "",
      empDivision: "",
      empId: "",
      empDateReview: "",
      empDistrict: "",
      empStatus: "",
      empRatingPeriod: "",
      empSchoolId: "",
      empAge: "",
      empSchoolName: "",
      empSex: "",
      empLevelTaught: "",
      empYearsOfTeaching: "",
      empSchoolType: "",
      empGradeLevelTaught: "",
      empDegree: "",
      empSchoolSize: "",
      empSubjectTaught: "",
      empSpecialization: "",
      empCurricularClassification: "",
      empSchoolYear: "",

      //part 2 fields to be filled out by admin
      cot1SubjectsTaught: "",
      cot2SubjectsTaught: "",
      //cot 1 part 1 variables
      cot1DateObserved: "",
      cot2DateObserved: "",
      // cot1Subject: "",
      cot1IndicatorObjNo1: "",
      cot1IndicatorObjNo2: "",
      cot1IndicatorObjNo3: "",
       cot1IndicatorObjNo4: "",
      cot1IndicatorObjNo5: "",
      cot1IndicatorObjNo6: "",
       cot1IndicatorObjNo7: "",
      cot1IndicatorObjNo8: "",
      cot1IndicatorObjNo9: "",
       cot1IndicatorObjNo10: "",
      cot1IndicatorObjNo11: "",
      cot1IndicatorObjNo12: "",

      cot1RatingObjNo1: "",
      cot1RatingObjNo5: "",
      cot1RatingObjNo7: "",

      cot1RpmsObjNo1: "",
      cot1RpmsObjNo5: "",
      cot1RpmsObjNo7: "",

      //cot 2 part 1 variables
     
      cot2RatingObjNo1: "",
      cot2RatingObjNo5: "",
      cot2RatingObjNo7: "",
      cot2RpmsObjNo1: "",
      cot2RpmsObjNo5: "",
      cot2RpmsObjNo7: "",

      encodingAverageObjNo1: "",
      encodingAverageObjNo5: "",
      encodingAverageObjNo7: "",

      encodingIpcrfNumericalQ1: "",
      encodingIpcrfNumericalQ2: "",
      encodingIpcrfNumericalQ3: "",
      encodingIpcrfNumericalQ4: "",
      encodingIpcrfNumericalQ5: "",
      encodingIpcrfNumericalQ6: "",
      encodingIpcrfNumericalQ7: "",
      encodingIpcrfNumericalQ8: "",
      encodingIpcrfNumericalQ9: "",
      encodingIpcrfNumericalQ10: "",
      encodingIpcrfNumericalQ11: "",
      encodingIpcrfNumericalQ12: "",

      encodingIpcrfNumericalE9: "",
      encodingIpcrfNumericalE10: "",
      encodingIpcrfNumericalE11: "",
      encodingIpcrfNumericalE12: "",

      encodingIpcrfNumericalT6: "",

      encodingIpcrfRatingAve1: "",
      encodingIpcrfRatingAve2: "",
      encodingIpcrfRatingAve3: "",
      encodingIpcrfRatingAve4: "",
      encodingIpcrfRatingAve5: "",
      encodingIpcrfRatingAve6: "",
      encodingIpcrfRatingAve7: "",
      encodingIpcrfRatingAve8: "",
      encodingIpcrfRatingAve9: "",
      encodingIpcrfRatingAve10: "",
      encodingIpcrfRatingAve11: "",
      encodingIpcrfRatingAve12: "",

      encodingScore1: "",
      encodingScore2: "",
      encodingScore3: "",
      encodingScore4: "",
      encodingScore5: "",
      encodingScore6: "",
      encodingScore7: "",
      encodingScore8: "",
      encodingScore9: "",
      encodingScore10: "",
      encodingScore11: "",
      encodingScore12: "",

      encodingAdjectivalRating1: "",
      encodingAdjectivalRating2: "",
      encodingAdjectivalRating3: "",
      encodingAdjectivalRating4: "",
      encodingAdjectivalRating5: "",
      encodingAdjectivalRating6: "",
      encodingAdjectivalRating7: "",
      encodingAdjectivalRating8: "",
      encodingAdjectivalRating9: "",
      encodingAdjectivalRating10: "",
      encodingAdjectivalRating11: "",
      encodingAdjectivalRating12: "",

      // empAdjRating1: "",
      // empAdjRating2: "",

      empFinalRating: "",
      empFinalAdjRating: "",

      part1ApprovingAuthority: "",
      approvingAuthPosition: "",
      cot1DateMenu: false,
      cot2DateMenu: false,
      dateOfReviewMenu: false,

      //part 2 encoding
      selfManagement1: false,
      selfManagement2: false,
      selfManagement3: false,
      selfManagement4: false,
      selfManagement5: false,
      teamwork1: false,
      teamwork2: false,
      teamwork3: false,
      teamwork4: false,
      teamwork5: false,
      prof1: false,
      prof2: false,
      prof3: false,
      prof4: false,
      prof5: false,
      service1: false,
      service2: false,
      service3: false,
      service4: false,
      service5: false,
      results1: false,
      results2: false,
      results3: false,
      results4: false,
      results5: false,
      innovation1: false,
      innovation2: false,
      innovation3: false,
      innovation4: false,
      innovation5: false,

      //part 4 encoding
      strengthsFunctional: "",
      developmentNeedsFunctional: "",
      learningObjectivesFunctional: "",
      interventionFunctional: "",
      timelineFunctional: "",
      resourcesNeededFunctional: "",
      strengthsCore: "",
      developmentCore: "",
      learningObjectivesCore: "",
      interventionCore: "",
      timelineCore: "",
      resourcesNeededCore: "",
      feedback: "",
      rateePart4: "",
      raterPart4: "",
      approvingAuthorityPart4: "",
      showTable: false,
      ipcrfDemographicProfile: [],
      ipcrfEncodingPart1: [],
      ipcrfEncodingPart2: [],
      ipcrfDevelopmentPlan: [],
      countSelfManagement: 0,
      countTeamwork: 0,
      countProfessional: 0,
      countService: 0,
      countResults: 0,
      countInnovation: 0,
      loading: false,
      loader: null,
      required: [(v) => !!v || "Field is required"],
      requiredField: [(v) => !!v || "*"],
      empDateReviewMenu: false,
      printLoading: true,
      printObjPart1: {
        id: "printMePart1",
        // preview: true,
        // previewTitle: "print Title", // The title of the preview window. The default is 打印预览
        // popTitle: "good print",
        extraCss:
          "https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.compat.css, https://cdn.bootcdn.net/ajax/libs/hover.css/2.3.1/css/hover-min.css",

        extraHead:
          '<meta http-equiv="Content-Language"content="en-us"/>, <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">',
      },
    };
  },
  created() {
   
    this.retrieveIpcrf();
    // var formattedFormula = excelFormulaUtilities.formula2JavaScript('=ROUND(IFERROR(SUM(B2,D2,F2,H2)/INDEX(FREQUENCY((D3,E3,F3,G3),0),2),0),3)')
    //  console.log(formattedFormula)
    // var formatted = formula.toJavaScript('=ROUND(IFERROR(SUM(B2,D2,F2,H2)/INDEX(FREQUENCY((D3,E3,F3,G3),0),2),0),3)');
    // console.log(formatted);
  },
  watch: {
    loader() {
      const l = this.loader;
      this[l] = !this[l];

      setTimeout(() => (this[l] = false), 3000);

      this.loader = null;
    },
  },
  computed: {
    calculateObjectivesAverageNo1() {
      console.log(typeof this.cot1RpmsObjNo1);
      return Math.round(
        (Number(this.cot1RpmsObjNo1) + Number(this.cot2RpmsObjNo1)) / 2
      );
    },
    calculateObjectivesAverageNo7() {
      return Math.round(
        (Number(this.cot1RpmsObjNo7) + Number(this.cot2RpmsObjNo7)) / 2
      );
    },
    calculateObjectivesAverageNo5() {
      return Math.round(
        (Number(this.cot1RpmsObjNo5) + Number(this.cot2RpmsObjNo5)) / 2
      );
    },

    calculateNumericalRatingsAverageNo1() {
      return this.encodingIpcrfNumericalQ1;
    },
    calculateNumericalRatingsAverageNo2() {
      return this.encodingIpcrfNumericalQ2;
    },
    calculateNumericalRatingsAverageNo3() {
      return this.encodingIpcrfNumericalQ3;
    },
    calculateNumericalRatingsAverageNo4() {
      return this.encodingIpcrfNumericalQ4;
    },
    calculateNumericalRatingsAverageNo5() {
      return this.encodingIpcrfNumericalQ5;
    },
    calculateNumericalRatingsAverageNo6() {
      return Math.round(
        (Number(this.encodingIpcrfNumericalQ6) +
          Number(this.encodingIpcrfNumericalT6)) /
          2
      );
    },
    calculateNumericalRatingsAverageNo7() {
      return this.encodingIpcrfNumericalQ7;
    },
    calculateNumericalRatingsAverageNo8() {
      return this.encodingIpcrfNumericalQ8;
    },
    calculateNumericalRatingsAverageNo9() {
      return Math.round(
        (Number(this.encodingIpcrfNumericalQ9) +
          Number(this.encodingIpcrfNumericalE9)) /
          2
      );
    },

    calculateNumericalRatingsAverageNo10() {
      return Math.round(
        (Number(this.encodingIpcrfNumericalQ10) +
          Number(this.encodingIpcrfNumericalE10)) /
          2
      );
    },
    calculateNumericalRatingsAverageNo11() {
      return Math.round(
        (Number(this.encodingIpcrfNumericalQ11) +
          Number(this.encodingIpcrfNumericalE11)) /
          2
      );
    },
    calculateNumericalRatingsAverageNo12() {
      return Math.round(
        (Number(this.encodingIpcrfNumericalQ12) +
          Number(this.encodingIpcrfNumericalE12)) /
          2
      );
    },

    calculateScoreNo1() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo1) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo2() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo2) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo3() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo3) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo4() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo4) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo5() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo5) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo6() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo6) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo7() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo7) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo8() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo8) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo9() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo9) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo10() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo10) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo11() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo11) * 0.08
      ).toFixed(3);
    },
    calculateScoreNo12() {
      return Math.floor(
        Number(this.calculateNumericalRatingsAverageNo12) * 0.12
      ).toFixed(3);
    },

    calculateFinalRating() {
      return Number(
        this.calculateScoreNo1 +
          this.calculateScoreNo2 +
          this.calculateScoreNo3 +
          this.calculateScoreNo4 +
          this.calculateScoreNo5 +
          this.calculateScpreNo6 +
          this.calculateScoreNo7 +
          this.calculateScoreNo8 +
          this.calculateScoreNo9 +
          this.calculateScoreNo10 +
          this.calculateScoreNo11 +
          this.calculateScoreNo12
      );
    },

    ifAdmin() {
      return this.user == "Admin";
    },
    ifTeacher() {
      return this.user == "Teacher";
    },
    computedDateFormattedCot1DateObserved() {
      return this.formatDate(this.cot1DateObserved);
    },
    computedDateFormattedCot2DateObserved() {
      return this.formatDate(this.cot2DateObserved);
    },
    computedDateFormattedDateOfReview() {
      return this.formatDate(this.empDateReview);
    },
  },

  methods: {
    calculateAdjectivalRatingNo1() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo1)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating1 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo1)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating1 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo1)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating1 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo1)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating1 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo1)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating1 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo2() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo2)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating2 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo2)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating2 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo2)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating2 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo2)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating2 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo2)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating2 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo3() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo3)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating3 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo3)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating3 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo3)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating3 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo3)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating3 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo3)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating3 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo4() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo4)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating4 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo4)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating4 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo4)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating4 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo4)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating4 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo4)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating4 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo5() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo5)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating5 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo5)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating5 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo5)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating5 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo5)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating5 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo5)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating5 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo6() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo6)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating6 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo6)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating6 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo6)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating6 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo6)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating6 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo6)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating6 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo7() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo7)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating7 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo7)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating7 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo7)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating7 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo7)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating7 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo7)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating7 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo8() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo8)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating8 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo8)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating8 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo8)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating8 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo8)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating8 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo8)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating8 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo9() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo9)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating9 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo9)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating9 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo9)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating9 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo9)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating9 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo9)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating9 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo10() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo10)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating10 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo10)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating10 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo10)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating10 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo10)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating10 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo10)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating10 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo11() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageno11)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating11 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo11)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating11 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo11)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating11 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo11)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating11 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo11)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating11 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateAdjectivalRatingNo12() {
      if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo12)).toFixed(
          3
        ) < 1.499
      ) {
        this.encodingAdjectivalRating12 = "Poor";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo12)).toFixed(
          3
        ) <= 2.499
      ) {
        this.encodingAdjectivalRating12 = "Unsatisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo12)).toFixed(
          3
        ) <= 3.499
      ) {
        this.encodingAdjectivalRating12 = "Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo12)).toFixed(
          3
        ) <= 4.499
      ) {
        this.encodingAdjectivalRating12 = "Very Satisfactory";
      } else if (
        Math.floor(Number(this.calculateNumericalRatingsAverageNo12)).toFixed(
          3
        ) <= 5
      ) {
        this.encodingAdjectivalRating12 = "Outstanding";
      }
      this.calculateFinalAdjectivalRating();
    },
    calculateFinalAdjectivalRating() {
      if (this.calculateFinalRating < 1.499) {
        this.empFinalAdjRating = "Poor";
      } else if (this.calculateFinalRating <= 2.499) {
        this.empFinalAdjRating = "Unsatisfactory";
      } else if (this.calculateFinalRating <= 3.499) {
        this.empFinalAdjRating = "Satisfactory";
      } else if (this.calculateFinalRating <= 4.499) {
        this.empFinalAdjRating = "Very Satisfactory";
      } else if (this.calculateFinalRating <= 5) {
        this.empFinalAdjRating = "Outstanding";
      }
    },
    calculateScore(item) {
      console.log(item, this.calculateNumericalRatingsAverageNo1);
      console.log(
        Math.floor((this.calculateNumericalRatingsAverageNo1 * 0.08).toFixed(3))
      );
    },
    showErrorResponse(title, message) {
      this.$swal.fire({
        icon: "error",
        title: title,
        text: message,
      });
    },
    showWarningResponse(title, message) {
      this.$swal.fire({
        icon: "warning",
        title: title,
        text: message,
      });
    },
    formatDate(date) {
      if (!date) return null;

      const [year, month, day] = date.split("-");
      return `${month}/${day}/${year}`;
    },

    async retrieveIpcrf() {
      this.loading = true;
      if (this.user == "Admin") {
        this.ipcrfDemographicProfile = [];
        // this.ipcrfEncodingPart1 = []
        // this.ipcrfEncodingPart2 =[]
        const returnedAllData = await this.$store.dispatch("retrieveIpcrfInfo");
       
        this.ipcrfDemographicProfile =
          returnedAllData.data.ipcrfDemographicProfile;
        //this.ipcrfEncodingPart1 = returnedAllData.data.ipcrfEncodingPart1
        this.loading = false;
        this.showTable = true;
        this.show = false;
      } else if (this.user == "Teacher") {
        this.ipcrfDemographicProfile = [];
        const returnedAllData = await this.$store.dispatch(
          "retrieveIpcrfInfoById",
          this.userId
        );
       if(returnedAllData){
         this.ipcrfDemographicProfile =
          returnedAllData.data.ipcrfDemographicProfile;

          this.show = false,

          this.loading = false;
          this.showTable = true;
          this.show = false;
        
       }
        
      }

      // const returnedIpcrfData = await this.$store.dispatch("retrieveIpcrfInfoById");
    },
    createIpcrf(){
      this.showTable = false
      this.show = false
      this.edit = false
      this.create = true
      
      
    },

    async viewItem(item) {
      this.showTable = false;
      this.edit = false;
      this.show = true;
      console.log(item);
      const user = item.user_id;
      //const schoolYear = item.rating_period;
      // const data = {
      //   user,
      //   schoolYear,
      // };
      // const returnedData = await this.$store.dispatch(
      //   "retrieveIpcrfInfoBySchoolYear",
      //   data
      // );

      const returnedDataByUser = await this.$store.dispatch(
        "retrieveIpcrfInfoById",
        user
      );
      this.countSelfManagement = 0;
      this.countTeamwork = 0;
      this.countService = 0;
      this.countProfessional = 0;
      this.countResults = 0;
      this.countInnovation = 0;
      this.ipcrfDemographicProfile =
        returnedDataByUser.data.ipcrfDemographicProfile[0];
      this.ipcrfDevelopmentPlan =
        returnedDataByUser.data.ipcrfDevelopmentPlan[0];
      this.ipcrfEncodingPart1 = returnedDataByUser.data.ipcrfEncodingPart1;
      this.ipcrfEncodingPart2 = returnedDataByUser.data.ipcrfEncodingPart2[0];
      console.log(this.ipcrfEncodingPart1);

      //part 3
      let selfManagement = this.ipcrfEncodingPart2.self_management.split(",");
      let teamwork = this.ipcrfEncodingPart2.teamwork.split(",");
      let professionalAndEthics =
        this.ipcrfEncodingPart2.professional_and_ethics.split(",");
      let innovation = this.ipcrfEncodingPart2.innovation.split(",");
      let service = this.ipcrfEncodingPart2.service_orientation.split(",");
      let results = this.ipcrfEncodingPart2.results_focus.split(",");
     // console.log(selfManagement + "self Management", selfManagement.length);
      for (const item of selfManagement) {
        if (item == "1") {
          this.countSelfManagement++;
        }
      }
      for (const item of teamwork) {
        if (item == "1") {
          this.countTeamwork++;
        }
      }

      for (const item of professionalAndEthics) {
        if (item == "1") {
          this.countProfessional++;
        }
      }

      for (const item of innovation) {
        if (item == "1") {
          this.countInnovation++;
        }
      }

      for (const item of service) {
        if (item == "1") {
          this.countService++;
        }
      }

      for (const item of results) {
        if (item == "1") {
          this.countResults++;
        }
      }
    },
    resetFields(){
      this.ipcrfDemographicProfile = []
      this.ipcrfEncodingPart1 = []
      this.ipcrfEncodingPart2 = []
      this.ipcrfIdPart1EncodingAdmin = []
      this.ipcrfDevelopmentPlan = []
        this.alert2 = false
      this.ipcrfIdPart1Demographic = "";
      this.empName = "";
      this.empRater = "";
      this.empRegion = "";
      this.empPosition = "";
      this.empRaterPosition = "";
      this.empDivision = "";
      this.empId = "";
      this.empDateReview = "";
      this.empDistrict = "";
      this.empStatus = "";
      this.empRatingPeriod = "";
      this.empSchoolId = "";
      this.empAge = "";
      this.empSchoolName = "";
      this.empSex = "";
      this.empLevelTaught = "";
      this.empYearsOfTeaching = "";
      this.empSchoolType = this.ipcrfDemographicProfile.school_type;
      this.empGradeLevelTaught =
        this.ipcrfDemographicProfile.grade_level_taught;
      this.empDegree = this.ipcrfDemographicProfile.highest_degree_obtained;
      this.empSchoolSize = this.ipcrfDemographicProfile.school_size;
      this.empSubjectTaught = this.ipcrfDemographicProfile.subject_taught;
      this.empSpecialization =
        this.ipcrfDemographicProfile.area_of_specialization;
      this.empCurricularClassification =
        this.ipcrfDemographicProfile.curricular_classification;
      this.ipcrfDemographicProfile.empSchoolYear =
        this.ipcrfDemographicProfile.rating_period;

      //part1 Admin
      //part 2 fields to be filled out by admin
      this.cot1SubjectsTaught = this.ipcrfEncodingPart1[0].subject_cot1
      this.cot2SubjectsTaught = this.ipcrfEncodingPart1[0].subject_cot2
      //cot 1 part 1 variables
      this.cot1DateObserved = this.ipcrfEncodingPart1[0].date_observed_cot1
      this.cot2DateObserved = this.ipcrfEncodingPart1[0].date_observed_cot2
      // cot1Subject = this.ipcrfEncodingPart1
       this.cot1IndicatorObjNo1 = this.ipcrfEncodingPart1[0].cot_indicator_no
      this.cot1IndicatorObjNo2 = this.ipcrfEncodingPart1[1].cot_indicator_no
      this.cot1IndicatorObjNo3 = this.ipcrfEncodingPart1[2].cot_indicator_no
       this.cot1IndicatorObjNo4 = this.ipcrfEncodingPart1[3].cot_indicator_no
      this.cot1IndicatorObjNo5 = this.ipcrfEncodingPart1[4].cot_indicator_no
      this.cot1IndicatorObjNo6 = this.ipcrfEncodingPart1[5].cot_indicator_no
       this.cot1IndicatorObjNo7 = this.ipcrfEncodingPart1[6].cot_indicator_no
      this.cot1IndicatorObjNo8 = this.ipcrfEncodingPart1[7].cot_indicator_no
      this.cot1IndicatorObjNo9 = this.ipcrfEncodingPart1[8].cot_indicator_no
       this.cot1IndicatorObjNo10 = this.ipcrfEncodingPart1[9].cot_indicator_no
      this.cot1IndicatorObjNo11 = this.ipcrfEncodingPart1[10].cot_indicator_no
      this.cot1IndicatorObjNo12 = this.ipcrfEncodingPart1[11].cot_indicator_no

      this.cot1RatingObjNo1 = this.ipcrfEncodingPart1[0].rating_cot1
      this.cot1RatingObjNo5 = this.ipcrfEncodingPart1[4].rating_cot1
      this.cot1RatingObjNo7 = this.ipcrfEncodingPart1[6].rating_cot1

      this.cot1RpmsObjNo1 = this.ipcrfEncodingPart1[0].rpms_5pt_scale_cot1
      this.cot1RpmsObjNo5 = this.ipcrfEncodingPart1[4].rpms_5pt_scale_cot1
      this.cot1RpmsObjNo7 = this.ipcrfEncodingPart1[6].rpms_5pt_scale_cot1

      //cot 2 part 1 variables
      this.cot2RatingObjNo1 = this.ipcrfEncodingPart1[0].rating_cot2
      this.cot2RatingObjNo5 = this.ipcrfEncodingPart1[4].rating_cot2
      this.cot2RatingObjNo7 = this.ipcrfEncodingPart1[6].rating_cot2
      this.cot2RpmsObjNo1 = this.ipcrfEncodingPart1[0].rpms_5pt_scale_cot1
      this.cot2RpmsObjNo5 = this.ipcrfEncodingPart1[4].rpms_5pt_scale_cot1
      this.cot2RpmsObjNo7 = this.ipcrfEncodingPart1[6].rpms_5pt_scale_cot1

      this.encodingAverageObjNo1 = this.ipcrfEncodingPart1[0].average_cot
      this.encodingAverageObjNo5 = this.ipcrfEncodingPart1[4].average_cot
      this.encodingAverageObjNo7 = this.ipcrfEncodingPart1[5].average_cot

      this.encodingIpcrfNumericalQ1 = this.ipcrfEncodingPart1[0].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ2 = this.ipcrfEncodingPart1[1].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ3 = this.ipcrfEncodingPart1[2].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ4 = this.ipcrfEncodingPart1[3].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ5 = this.ipcrfEncodingPart1[4].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ7 = this.ipcrfEncodingPart1[6].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ8 = this.ipcrfEncodingPart1[7].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_q

      this.encodingIpcrfNumericalE9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_e
      this.encodingIpcrfNumericalE10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_e
      this.encodingIpcrfNumericalE11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_e
      this.encodingIpcrfNumericalE12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_e

      this.encodingIpcrfNumericalT6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_t

      this.encodingIpcrfRatingAve1 = this.ipcrfEncodingPart1[0].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve2 = this.ipcrfEncodingPart1[1].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve3 = this.ipcrfEncodingPart1[2].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve4 = this.ipcrfEncodingPart1[3].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve5 = this.ipcrfEncodingPart1[4].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve7 = this.ipcrfEncodingPart1[6].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve8 = this.ipcrfEncodingPart1[7].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_average

      this.encodingScore1 = this.ipcrfEncodingPart1[0].ipcrf_numerical_ratings_score
      this.encodingScore2 = this.ipcrfEncodingPart1[1].ipcrf_numerical_ratings_score
      this.encodingScore3 = this.ipcrfEncodingPart1[2].ipcrf_numerical_ratings_score
      this.encodingScore4 = this.ipcrfEncodingPart1[3].ipcrf_numerical_ratings_score
      this.encodingScore5 = this.ipcrfEncodingPart1[4].ipcrf_numerical_ratings_score
      this.encodingScore6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_score
      this.encodingScore7 = this.ipcrfEncodingPart1[6].ipcrf_numerical_ratings_score
      this.encodingScore8 = this.ipcrfEncodingPart1[7].ipcrf_numerical_ratings_score
      this.encodingScore9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_score
      this.encodingScore10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_score
      this.encodingScore11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_score
      this.encodingScore12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_score

      this.encodingAdjectivalRating1 = this.ipcrfEncodingPart1[0].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating2 = this.ipcrfEncodingPart1[1].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating3 = this.ipcrfEncodingPart1[2].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating4 = this.ipcrfEncodingPart1[3].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating5 = this.ipcrfEncodingPart1[4].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating7 = this.ipcrfEncodingPart1[6].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating8 = this.ipcrfEncodingPart1[7].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_adjectival_rating

      // empAdjRating1 = this.ipcrfEncodingPart1
      // empAdjRating2 = this.ipcrfEncodingPart1

      this.empFinalRating = this.ipcrfEncodingPart1[0].final_rating
      this.empFinalAdjRating = this.ipcrfEncodingPart1[0].adjectival_rating

      this.part1ApprovingAuthority = this.ipcrfEncodingPart1[0].approving_authority
      this.approvingAuthPosition = this.ipcrfEncodingPart1[0].approver_position

      //part 2
      this.ipcrfIdPart2 = this.ipcrfEncodingPart2.id;
       let selfManagement = this.ipcrfEncodingPart2.self_management.split(",");
      let teamwork = this.ipcrfEncodingPart2.teamwork.split(",");
      let professionalAndEthics =
        this.ipcrfEncodingPart2.professional_and_ethics.split(",");
      let innovation = this.ipcrfEncodingPart2.innovation.split(",");
      let service = this.ipcrfEncodingPart2.service_orientation.split(",");
      let results = this.ipcrfEncodingPart2.results_focus.split(",");

      this.selfManagement1 = selfManagement[0] == '1' ? true : false
      this.selfManagement2 = selfManagement[1] == '1' ? true : false
      this.selfManagement3 = selfManagement[2] == '1' ? true : false
      this.selfManagement4 = selfManagement[3] == '1' ? true : false
      this.selfManagement5 = selfManagement[4] == '1' ? true : false
      this.teamwork1 = teamwork[0] == '1' ? true : false
      this.teamwork2 = teamwork[1] == '1' ? true : false
      this.teamwork3 = teamwork[2] == '1' ? true : false
      this.teamwork4 = teamwork[3] == '1' ? true : false
      this.teamwork5 = teamwork[4] == '1' ? true : false
      this.prof1 = professionalAndEthics[0] == '1' ? true : false
      this.prof2 = professionalAndEthics[1] == '1' ? true : false
      this.prof3 = professionalAndEthics[2] == '1' ? true : false
      this.prof4 = professionalAndEthics[3] == '1' ? true : false
      this.prof5 = professionalAndEthics[4] == '1' ? true : false
      this.service1 = service[0] == '1' ? true : false
      this.service2 = service[1] == '1' ? true : false
      this.service3 = service[2] == '1' ? true : false
      this.service4 = service[3] == '1' ? true : false
      this.service5 = service[4] == '1' ? true : false
      this.innovation1 = innovation[0] == '1' ? true : false
      this.innovation2 = innovation[1] == '1' ? true : false
      this.innovation3 = innovation[2] == '1' ? true : false
      this.innovation4 = innovation[3] == '1' ? true : false
      this.innovation5 = innovation[4] == '1' ? true : false
      this.results1 = results[0] == '1' ? true : false
      this.results2 = results[1] == '1' ? true : false
      this.results3 = results[2] == '1' ? true : false
      this.results4 = results[3] == '1' ? true : false
      this.results5 = results[4] == '1' ? true : false
      //part 4s
      // console.log(typeof(this.ipcrfDevelopmentPlan))
      this.ipcrfIdPart4 =
        typeof this.ipcrfDevelopmentPlan == "undefined"
          ? ""
          : this.ipcrfDevelopmentPlan.id;
      this.strengthsFunctional = this.ipcrfDevelopmentPlan.strengths_functional;
      this.developmentNeedsFunctional =
        this.ipcrfDevelopmentPlan.development_needs_functional;
      this.learningObjectivesFunctional =
        this.ipcrfDevelopmentPlan.learning_objectives_functional;
      this.interventionFunctional =
        this.ipcrfDevelopmentPlan.intervention_functional;
      this.timelineFunctional = this.ipcrfDevelopmentPlan.timeline_functional;
      this.resourcesNeededFunctional =
        this.ipcrfDevelopmentPlan.resources_needed_functional;
      this.strengthsCore = this.ipcrfDevelopmentPlan.strengths_core;
      this.developmentCore = this.ipcrfDevelopmentPlan.development_needs_core;
      this.learningObjectivesCore =
        this.ipcrfDevelopmentPlan.learning_objectives_core;
      this.interventionCore = this.ipcrfDevelopmentPlan.intervention_core;
      this.timelineCore = this.ipcrfDevelopmentPlan.timeline_core;
      this.resourcesNeededCore =
        this.ipcrfDevelopmentPlan.resources_needed_core;
      this.feedback = this.ipcrfDevelopmentPlan.feedback;
      this.rateePart4 = this.ipcrfDevelopmentPlan.ratee;
      this.raterPart4 = this.ipcrfDevelopmentPlan.rater;
      this.approvingAuthorityPart4 =
        this.ipcrfDevelopmentPlan.approving_authority;

      this.show = false;
      this.edit = true;
    },
    editItems() {
      console.log(this.ipcrfDemographicProfile.id);
      this.alert2 = false
      this.ipcrfIdPart1Demographic =
        this.ipcrfDemographicProfile.id == "undefined"
          ? ""
          : this.ipcrfDemographicProfile.id;
      this.empName = this.ipcrfDemographicProfile.name_of_employee;
      this.empRater = this.ipcrfDemographicProfile.rater;
      this.empRegion = this.ipcrfDemographicProfile.region;
      this.empPosition = this.ipcrfDemographicProfile.position;
      this.empRaterPosition = this.ipcrfDemographicProfile.rater_position;
      this.empDivision = this.ipcrfDemographicProfile.division;
      this.empId = this.ipcrfDemographicProfile.employee_id;
      this.empDateReview = this.ipcrfDemographicProfile.date_of_review;
      this.empDistrict = this.ipcrfDemographicProfile.district_municipality;
      this.empStatus = this.ipcrfDemographicProfile.employment_status;
      this.empRatingPeriod = this.ipcrfDemographicProfile.rating_period;
      this.empSchoolId = this.ipcrfDemographicProfile.school_id;
      this.empAge = this.ipcrfDemographicProfile.age;
      this.empSchoolName = this.ipcrfDemographicProfile.school_name;
      this.empSex = this.ipcrfDemographicProfile.sex;
      this.empLevelTaught = this.ipcrfDemographicProfile.level_taught;
      this.empYearsOfTeaching =
        this.ipcrfDemographicProfile.number_of_years_teaching;
      this.empSchoolType = this.ipcrfDemographicProfile.school_type;
      this.empGradeLevelTaught =
        this.ipcrfDemographicProfile.grade_level_taught;
      this.empDegree = this.ipcrfDemographicProfile.highest_degree_obtained;
      this.empSchoolSize = this.ipcrfDemographicProfile.school_size;
      this.empSubjectTaught = this.ipcrfDemographicProfile.subject_taught;
      this.empSpecialization =
        this.ipcrfDemographicProfile.area_of_specialization;
      this.empCurricularClassification =
        this.ipcrfDemographicProfile.curricular_classification;
      this.ipcrfDemographicProfile.empSchoolYear =
        this.ipcrfDemographicProfile.rating_period;

      //part1 Admin
      //part 2 fields to be filled out by admin
      this.cot1SubjectsTaught = this.ipcrfEncodingPart1[0].subject_cot1
      this.cot2SubjectsTaught = this.ipcrfEncodingPart1[0].subject_cot2
      //cot 1 part 1 variables
      this.cot1DateObserved = this.ipcrfEncodingPart1[0].date_observed_cot1
      this.cot2DateObserved = this.ipcrfEncodingPart1[0].date_observed_cot2
      // cot1Subject = this.ipcrfEncodingPart1
       this.cot1IndicatorObjNo1 = this.ipcrfEncodingPart1[0].cot_indicator_no
      this.cot1IndicatorObjNo2 = this.ipcrfEncodingPart1[1].cot_indicator_no
      this.cot1IndicatorObjNo3 = this.ipcrfEncodingPart1[2].cot_indicator_no
       this.cot1IndicatorObjNo4 = this.ipcrfEncodingPart1[3].cot_indicator_no
      this.cot1IndicatorObjNo5 = this.ipcrfEncodingPart1[4].cot_indicator_no
      this.cot1IndicatorObjNo6 = this.ipcrfEncodingPart1[5].cot_indicator_no
       this.cot1IndicatorObjNo7 = this.ipcrfEncodingPart1[6].cot_indicator_no
      this.cot1IndicatorObjNo8 = this.ipcrfEncodingPart1[7].cot_indicator_no
      this.cot1IndicatorObjNo9 = this.ipcrfEncodingPart1[8].cot_indicator_no
       this.cot1IndicatorObjNo10 = this.ipcrfEncodingPart1[9].cot_indicator_no
      this.cot1IndicatorObjNo11 = this.ipcrfEncodingPart1[10].cot_indicator_no
      this.cot1IndicatorObjNo12 = this.ipcrfEncodingPart1[11].cot_indicator_no

      this.cot1RatingObjNo1 = this.ipcrfEncodingPart1[0].rating_cot1
      this.cot1RatingObjNo5 = this.ipcrfEncodingPart1[4].rating_cot1
      this.cot1RatingObjNo7 = this.ipcrfEncodingPart1[6].rating_cot1

      this.cot1RpmsObjNo1 = this.ipcrfEncodingPart1[0].rpms_5pt_scale_cot1
      this.cot1RpmsObjNo5 = this.ipcrfEncodingPart1[4].rpms_5pt_scale_cot1
      this.cot1RpmsObjNo7 = this.ipcrfEncodingPart1[6].rpms_5pt_scale_cot1

      //cot 2 part 1 variables
      this.cot2RatingObjNo1 = this.ipcrfEncodingPart1[0].rating_cot2
      this.cot2RatingObjNo5 = this.ipcrfEncodingPart1[4].rating_cot2
      this.cot2RatingObjNo7 = this.ipcrfEncodingPart1[6].rating_cot2
      this.cot2RpmsObjNo1 = this.ipcrfEncodingPart1[0].rpms_5pt_scale_cot1
      this.cot2RpmsObjNo5 = this.ipcrfEncodingPart1[4].rpms_5pt_scale_cot1
      this.cot2RpmsObjNo7 = this.ipcrfEncodingPart1[6].rpms_5pt_scale_cot1

      this.encodingAverageObjNo1 = this.ipcrfEncodingPart1[0].average_cot
      this.encodingAverageObjNo5 = this.ipcrfEncodingPart1[4].average_cot
      this.encodingAverageObjNo7 = this.ipcrfEncodingPart1[5].average_cot

      this.encodingIpcrfNumericalQ1 = this.ipcrfEncodingPart1[0].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ2 = this.ipcrfEncodingPart1[1].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ3 = this.ipcrfEncodingPart1[2].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ4 = this.ipcrfEncodingPart1[3].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ5 = this.ipcrfEncodingPart1[4].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ7 = this.ipcrfEncodingPart1[6].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ8 = this.ipcrfEncodingPart1[7].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_q
      this.encodingIpcrfNumericalQ12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_q

      this.encodingIpcrfNumericalE9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_e
      this.encodingIpcrfNumericalE10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_e
      this.encodingIpcrfNumericalE11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_e
      this.encodingIpcrfNumericalE12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_e

      this.encodingIpcrfNumericalT6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_t

      this.encodingIpcrfRatingAve1 = this.ipcrfEncodingPart1[0].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve2 = this.ipcrfEncodingPart1[1].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve3 = this.ipcrfEncodingPart1[2].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve4 = this.ipcrfEncodingPart1[3].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve5 = this.ipcrfEncodingPart1[4].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve7 = this.ipcrfEncodingPart1[6].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve8 = this.ipcrfEncodingPart1[7].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_average
      this.encodingIpcrfRatingAve12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_average

      this.encodingScore1 = this.ipcrfEncodingPart1[0].ipcrf_numerical_ratings_score
      this.encodingScore2 = this.ipcrfEncodingPart1[1].ipcrf_numerical_ratings_score
      this.encodingScore3 = this.ipcrfEncodingPart1[2].ipcrf_numerical_ratings_score
      this.encodingScore4 = this.ipcrfEncodingPart1[3].ipcrf_numerical_ratings_score
      this.encodingScore5 = this.ipcrfEncodingPart1[4].ipcrf_numerical_ratings_score
      this.encodingScore6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_score
      this.encodingScore7 = this.ipcrfEncodingPart1[6].ipcrf_numerical_ratings_score
      this.encodingScore8 = this.ipcrfEncodingPart1[7].ipcrf_numerical_ratings_score
      this.encodingScore9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_score
      this.encodingScore10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_score
      this.encodingScore11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_score
      this.encodingScore12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_score

      this.encodingAdjectivalRating1 = this.ipcrfEncodingPart1[0].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating2 = this.ipcrfEncodingPart1[1].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating3 = this.ipcrfEncodingPart1[2].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating4 = this.ipcrfEncodingPart1[3].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating5 = this.ipcrfEncodingPart1[4].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating6 = this.ipcrfEncodingPart1[5].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating7 = this.ipcrfEncodingPart1[6].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating8 = this.ipcrfEncodingPart1[7].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating9 = this.ipcrfEncodingPart1[8].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating10 = this.ipcrfEncodingPart1[9].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating11 = this.ipcrfEncodingPart1[10].ipcrf_numerical_ratings_adjectival_rating
      this.encodingAdjectivalRating12 = this.ipcrfEncodingPart1[11].ipcrf_numerical_ratings_adjectival_rating

      // empAdjRating1 = this.ipcrfEncodingPart1
      // empAdjRating2 = this.ipcrfEncodingPart1

      this.empFinalRating = this.ipcrfEncodingPart1[0].final_rating
      this.empFinalAdjRating = this.ipcrfEncodingPart1[0].adjectival_rating

      this.part1ApprovingAuthority = this.ipcrfEncodingPart1[0].approving_authority
      this.approvingAuthPosition = this.ipcrfEncodingPart1[0].approver_position

      //part 2
      this.ipcrfIdPart2 = this.ipcrfEncodingPart2.id;
       let selfManagement = this.ipcrfEncodingPart2.self_management.split(",");
      let teamwork = this.ipcrfEncodingPart2.teamwork.split(",");
      let professionalAndEthics =
        this.ipcrfEncodingPart2.professional_and_ethics.split(",");
      let innovation = this.ipcrfEncodingPart2.innovation.split(",");
      let service = this.ipcrfEncodingPart2.service_orientation.split(",");
      let results = this.ipcrfEncodingPart2.results_focus.split(",");

      this.selfManagement1 = selfManagement[0] == '1' ? true : false
      this.selfManagement2 = selfManagement[1] == '1' ? true : false
      this.selfManagement3 = selfManagement[2] == '1' ? true : false
      this.selfManagement4 = selfManagement[3] == '1' ? true : false
      this.selfManagement5 = selfManagement[4] == '1' ? true : false
      this.teamwork1 = teamwork[0] == '1' ? true : false
      this.teamwork2 = teamwork[1] == '1' ? true : false
      this.teamwork3 = teamwork[2] == '1' ? true : false
      this.teamwork4 = teamwork[3] == '1' ? true : false
      this.teamwork5 = teamwork[4] == '1' ? true : false
      this.prof1 = professionalAndEthics[0] == '1' ? true : false
      this.prof2 = professionalAndEthics[1] == '1' ? true : false
      this.prof3 = professionalAndEthics[2] == '1' ? true : false
      this.prof4 = professionalAndEthics[3] == '1' ? true : false
      this.prof5 = professionalAndEthics[4] == '1' ? true : false
      this.service1 = service[0] == '1' ? true : false
      this.service2 = service[1] == '1' ? true : false
      this.service3 = service[2] == '1' ? true : false
      this.service4 = service[3] == '1' ? true : false
      this.service5 = service[4] == '1' ? true : false
      this.innovation1 = innovation[0] == '1' ? true : false
      this.innovation2 = innovation[1] == '1' ? true : false
      this.innovation3 = innovation[2] == '1' ? true : false
      this.innovation4 = innovation[3] == '1' ? true : false
      this.innovation5 = innovation[4] == '1' ? true : false
      this.results1 = results[0] == '1' ? true : false
      this.results2 = results[1] == '1' ? true : false
      this.results3 = results[2] == '1' ? true : false
      this.results4 = results[3] == '1' ? true : false
      this.results5 = results[4] == '1' ? true : false
      //part 4s
      // console.log(typeof(this.ipcrfDevelopmentPlan))
      this.ipcrfIdPart4 =
        typeof this.ipcrfDevelopmentPlan == "undefined"
          ? ""
          : this.ipcrfDevelopmentPlan.id;
      this.strengthsFunctional = this.ipcrfDevelopmentPlan.strengths_functional;
      this.developmentNeedsFunctional =
        this.ipcrfDevelopmentPlan.development_needs_functional;
      this.learningObjectivesFunctional =
        this.ipcrfDevelopmentPlan.learning_objectives_functional;
      this.interventionFunctional =
        this.ipcrfDevelopmentPlan.intervention_functional;
      this.timelineFunctional = this.ipcrfDevelopmentPlan.timeline_functional;
      this.resourcesNeededFunctional =
        this.ipcrfDevelopmentPlan.resources_needed_functional;
      this.strengthsCore = this.ipcrfDevelopmentPlan.strengths_core;
      this.developmentCore = this.ipcrfDevelopmentPlan.development_needs_core;
      this.learningObjectivesCore =
        this.ipcrfDevelopmentPlan.learning_objectives_core;
      this.interventionCore = this.ipcrfDevelopmentPlan.intervention_core;
      this.timelineCore = this.ipcrfDevelopmentPlan.timeline_core;
      this.resourcesNeededCore =
        this.ipcrfDevelopmentPlan.resources_needed_core;
      this.feedback = this.ipcrfDevelopmentPlan.feedback;
      this.rateePart4 = this.ipcrfDevelopmentPlan.ratee;
      this.raterPart4 = this.ipcrfDevelopmentPlan.rater;
      this.approvingAuthorityPart4 =
        this.ipcrfDevelopmentPlan.approving_authority;

      this.show = false;
      this.edit = true;

      //console.log(this.ipcrfEncodingPart1, this.ipcrfEncodingPart2, this.ipcrfDevelopmentPlan)
    },

    back() {
      this.retrieveIpcrf();
      this.create = false;
      this.edit = false;
      this.show = false;
      this.showTable = true;
    },

    finalizePart1: async function () {
      if (this.$refs.part1.validate()) {
        this.loading = true;
        this.loader = true;
        const id = this.ipcrfIdPart1Demographic || "";
        const idAdmin = this.ipcrfIdPart1EncodingAdmin || "";
        const user = JSON.parse(sessionStorage.user_session).id;
        const role = JSON.parse(sessionStorage.user_session).role;
        const empName = this.empName;
        const empRater = this.empRater;
        const empRegion = this.empRegion;
        const empPosition = this.empPosition;
        const empRaterPosition = this.empRaterPosition;
        const empDivision = this.empDivision;
        const empId = this.empId;
        const empDateReview = this.empDateReview;
        const empDistrict = this.empDistrict;
        const empStatus = this.empStatus;
        const empRatingPeriod = this.empRatingPeriod;
        const empSchoolId = this.empSchoolId;
        const empAge = this.empAge;
        const empSchoolName = this.empSchoolName;
        const empSex = this.empSex;
        const empLevelTaught = this.empLevelTaught;
        const empYearsOfTeaching = this.empYearsOfTeaching;
        const empSchoolType = this.empSchoolType;
        const empGradeLevelTaught = this.empGradeLevelTaught;
        const empDegree = this.empDegree;
        const empSchoolSize = this.empSchoolSize;
        const empSubjectTaught = this.empSubjectTaught;
        const empSpecialization = this.empSpecialization;
        const empCurricularClassification = this.empCurricularClassification;
        const empSchoolYear = this.schoolYear;

        //part 2 fields to be filled out by admin
        const cot1SubjectsTaught = this.cot1SubjectsTaught;
        const cot2SubjectsTaught = this.cot2SubjectsTaught;
        //cot 1 part 1 variables
        const cot1DateObserved = this.cot1DateObserved;
        const cot2DateObserved = this.cot2DateObserved;
        const cot1IndicatorObjNo1 = this.cot1IndicatorObjNo1;
        const cot1IndicatorObjNo5 = this.cot1IndicatorObjNo5;
        const cot1IndicatorObjNo7 = this.cot1IndicatorObjNo7;

        const cot1RatingObjNo1 = this.cot1RatingObjNo1;
        const cot1RatingObjNo5 = this.cot1RatingObjNo5;
        const cot1RatingObjNo7 = this.cot1RatingObjNo7;

        const cot1RpmsObjNo1 = this.cot1RpmsObjNo1;
        const cot1RpmsObjNo5 = this.cot1RpmsObjNo5;
        const cot1RpmsObjNo7 = this.cot1RpmsObjNo7;

        //cot 2 part 1 variables
        const cot2IndicatorObjNo1 = this.cot2IndicatorObjNo1;
        const cot2IndicatorObjNo5 = this.cot2IndicatorObjNo5;
        const cot2IndicatorObjNo7 = this.cot2IndicatorObjNo7;
        const cot2RatingObjNo1 = this.cot2RatingObjNo1;
        const cot2RatingObjNo5 = this.cot2RatingObjNo5;
        const cot2RatingObjNo7 = this.cot2RatingObjNo7;
        const cot2RpmsObjNo1 = this.cot2RpmsObjNo1;
        const cot2RpmsObjNo5 = this.cot2RpmsObjNo5;
        const cot2RpmsObjNo7 = this.cot2RpmsObjNo7;

        this.encodingAverageObjNo1 = this.calculateObjectivesAverageNo1;
        this.encodingAverageObjNo5 = this.calculateObjectivesAverageNo5;
        this.encodingAverageObjNo7 = this.calculateObjectivesAverageNo7;
        const encodingAverageObjNo1 = this.encodingAverageObjNo1;
        const encodingAverageObjNo5 = this.encodingAverageObjNo5;
        const encodingAverageObjNo7 = this.encodingAverageObjNo7;

        const encodingIpcrfNumericalQ1 = this.encodingIpcrfNumericalQ1;
        const encodingIpcrfNumericalQ2 = this.encodingIpcrfNumericalQ2;
        const encodingIpcrfNumericalQ3 = this.encodingIpcrfNumericalQ3;
        const encodingIpcrfNumericalQ4 = this.encodingIpcrfNumericalQ4;
        const encodingIpcrfNumericalQ5 = this.encodingIpcrfNumericalQ5;
        const encodingIpcrfNumericalQ6 = this.encodingIpcrfNumericalQ6;
        const encodingIpcrfNumericalQ7 = this.encodingIpcrfNumericalQ7;
        const encodingIpcrfNumericalQ8 = this.encodingIpcrfNumericalQ8;
        const encodingIpcrfNumericalQ9 = this.encodingIpcrfNumericalQ9;
        const encodingIpcrfNumericalQ10 = this.encodingIpcrfNumericalQ10;
        const encodingIpcrfNumericalQ11 = this.encodingIpcrfNumericalQ11;
        const encodingIpcrfNumericalQ12 = this.encodingIpcrfNumericalQ12;

        const encodingIpcrfNumericalE9 = this.encodingIpcrfNumericalE9;
        const encodingIpcrfNumericalE10 = this.encodingIpcrfNumericalE10;
        const encodingIpcrfNumericalE11 = this.encodingIpcrfNumericalE11;
        const encodingIpcrfNumericalE12 = this.encodingIpcrfNumericalE12;

        const encodingIpcrfNumericalT6 = this.encodingIpcrfNumericalT6;

        this.encodingIpcrfRatingAve1 = this.calculateNumericalRatingsAverageNo1;
        this.encodingIpcrfRatingAve2 = this.calculateNumericalRatingsAverageNo2;
        this.encodingIpcrfRatingAve3 = this.calculateNumericalRatingsAverageNo3;
        this.encodingIpcrfRatingAve4 = this.calculateNumericalRatingsAverageNo4;
        this.encodingIpcrfRatingAve5 = this.calculateNumericalRatingsAverageNo5;
        this.encodingIpcrfRatingAve6 = this.calculateNumericalRatingsAverageNo6;
        this.encodingIpcrfRatingAve7 = this.calculateNumericalRatingsAverageNo7;
        this.encodingIpcrfRatingAve8 = this.calculateNumericalRatingsAverageNo8;
        this.encodingIpcrfRatingAve9 = this.calculateNumericalRatingsAverageNo9;
        this.encodingIpcrfRatingAve10 =
          this.calculateNumericalRatingsAverageNo10;
        this.encodingIpcrfRatingAve11 =
          this.calculateNumericalRatingsAverageNo11;
        this.encodingIpcrfRatingAve12 =
          this.calculateNumericalRatingsAverageNo12;

        const encodingIpcrfRatingAve1 = this.encodingIpcrfRatingAve1;
        const encodingIpcrfRatingAve2 = this.encodingIpcrfRatingAve2;
        const encodingIpcrfRatingAve3 = this.encodingIpcrfRatingAve3;
        const encodingIpcrfRatingAve4 = this.encodingIpcrfRatingAve4;
        const encodingIpcrfRatingAve5 = this.encodingIpcrfRatingAve5;
        const encodingIpcrfRatingAve6 = this.encodingIpcrfRatingAve6;
        const encodingIpcrfRatingAve7 = this.encodingIpcrfRatingAve7;
        const encodingIpcrfRatingAve8 = this.encodingIpcrfRatingAve8;
        const encodingIpcrfRatingAve9 = this.encodingIpcrfRatingAve9;
        const encodingIpcrfRatingAve10 = this.encodingIpcrfRatingAve10;
        const encodingIpcrfRatingAve11 = this.encodingIpcrfRatingAve11;
        const encodingIpcrfRatingAve12 = this.encodingIpcrfRatingAve12;

        this.encodingScore1 = this.calculateScoreNo1;
        this.encodingScore2 = this.calculateScoreNo2;
        this.encodingScore3 = this.calculateScoreNo3;
        this.encodingScore4 = this.calculateScoreNo4;
        this.encodingScore5 = this.calculateScoreNo5;
        this.encodingScore6 = this.calculateScoreNo6;
        this.encodingScore7 = this.calculateScoreNo7;
        this.encodingScore8 = this.calculateScoreNo8;
        this.encodingScore9 = this.calculateScoreNo9;
        this.encodingScore10 = this.calculateScoreNo10;
        this.encodingScore11 = this.calculateScoreNo11;
        this.encodingScore12 = this.calculateScoreNo12;
        const encodingScore1 = this.encodingScore1;
        const encodingScore2 = this.encodingScore2;
        const encodingScore3 = this.encodingScore3;
        const encodingScore4 = this.encodingScore4;
        const encodingScore5 = this.encodingScore5;
        const encodingScore6 = this.encodingScore6;
        const encodingScore7 = this.encodingScore7;
        const encodingScore8 = this.encodingScore8;
        const encodingScore9 = this.encodingScore9;
        const encodingScore10 = this.encodingScore10;
        const encodingScore11 = this.encodingScore11;
        const encodingScore12 = this.encodingScore12;

        const encodingAdjectivalRating1 = this.encodingAdjectivalRating1;
        const encodingAdjectivalRating2 = this.encodingAdjectivalRating2;
        const encodingAdjectivalRating3 = this.encodingAdjectivalRating3;
        const encodingAdjectivalRating4 = this.encodingAdjectivalRating4;
        const encodingAdjectivalRating5 = this.encodingAdjectivalRating5;
        const encodingAdjectivalRating6 = this.encodingAdjectivalRating6;
        const encodingAdjectivalRating7 = this.encodingAdjectivalRating7;
        const encodingAdjectivalRating8 = this.encodingAdjectivalRating8;
        const encodingAdjectivalRating9 = this.encodingAdjectivalRating9;
        const encodingAdjectivalRating10 = this.encodingAdjectivalRating10;
        const encodingAdjectivalRating11 = this.encodingAdjectivalRating11;
        const encodingAdjectivalRating12 = this.encodingAdjectivalRating12;

        // empAdjRating1 = this.
        // empAdjRating2 = this.
        this.empFinalRating = this.calculateFinalRating;
        const empFinalRating = this.empFinalRating;
        const empFinalAdjRating = this.empFinalAdjRating;

        const part1ApprovingAuthority = this.part1ApprovingAuthority;
        const approvingAuthPosition = this.approvingAuthPosition;
        let data = {
          id,
          idAdmin,
          user,
          role,
          empName,
          empRater,
          empRegion,
          empPosition,
          empRaterPosition,
          empDivision,
          empId,
          empDateReview,
          empDistrict,
          empStatus,
          empRatingPeriod,
          empSchoolId,
          empAge,
          empSchoolName,
          empSex,
          empLevelTaught,
          empYearsOfTeaching,
          empSchoolType,
          empGradeLevelTaught,
          empDegree,
          empSchoolSize,
          empSubjectTaught,
          empSpecialization,
          empCurricularClassification,
          empSchoolYear,

          //part 2 fields to be filled out by admin
          cot1SubjectsTaught,
          cot2SubjectsTaught,
          //cot 1 part 1 variables
          cot1DateObserved,
          cot2DateObserved,
          cot1IndicatorObjNo1,
          cot1IndicatorObjNo5,
          cot1IndicatorObjNo7,

          cot1RatingObjNo1,
          cot1RatingObjNo5,
          cot1RatingObjNo7,

          cot1RpmsObjNo1,
          cot1RpmsObjNo5,
          cot1RpmsObjNo7,

          //cot 2 part 1 variables
          cot2IndicatorObjNo1,
          cot2IndicatorObjNo5,
          cot2IndicatorObjNo7,
          cot2RatingObjNo1,
          cot2RatingObjNo5,
          cot2RatingObjNo7,
          cot2RpmsObjNo1,
          cot2RpmsObjNo5,
          cot2RpmsObjNo7,

          encodingAverageObjNo1,
          encodingAverageObjNo5,
          encodingAverageObjNo7,

          encodingIpcrfNumericalQ1,
          encodingIpcrfNumericalQ2,
          encodingIpcrfNumericalQ3,
          encodingIpcrfNumericalQ4,
          encodingIpcrfNumericalQ5,
          encodingIpcrfNumericalQ6,
          encodingIpcrfNumericalQ7,
          encodingIpcrfNumericalQ8,
          encodingIpcrfNumericalQ9,
          encodingIpcrfNumericalQ10,
          encodingIpcrfNumericalQ11,
          encodingIpcrfNumericalQ12,

          encodingIpcrfNumericalE9,
          encodingIpcrfNumericalE10,
          encodingIpcrfNumericalE11,
          encodingIpcrfNumericalE12,

          encodingIpcrfNumericalT6,

          encodingIpcrfRatingAve1,
          encodingIpcrfRatingAve2,
          encodingIpcrfRatingAve3,
          encodingIpcrfRatingAve4,
          encodingIpcrfRatingAve5,
          encodingIpcrfRatingAve6,
          encodingIpcrfRatingAve7,
          encodingIpcrfRatingAve8,
          encodingIpcrfRatingAve9,
          encodingIpcrfRatingAve10,
          encodingIpcrfRatingAve11,
          encodingIpcrfRatingAve12,

          encodingScore1,
          encodingScore2,
          encodingScore3,
          encodingScore4,
          encodingScore5,
          encodingScore6,
          encodingScore7,
          encodingScore8,
          encodingScore9,
          encodingScore10,
          encodingScore11,
          encodingScore12,

          encodingAdjectivalRating1,
          encodingAdjectivalRating2,
          encodingAdjectivalRating3,
          encodingAdjectivalRating4,
          encodingAdjectivalRating5,
          encodingAdjectivalRating6,
          encodingAdjectivalRating7,
          encodingAdjectivalRating8,
          encodingAdjectivalRating9,
          encodingAdjectivalRating10,
          encodingAdjectivalRating11,
          encodingAdjectivalRating12,

          // empAdjRating1 = this.
          // empAdjRating2 = this.

          empFinalRating,
          empFinalAdjRating,

          part1ApprovingAuthority,
          approvingAuthPosition,
        };
        if (this.create == true) {
          const returnedData = await this.$store.dispatch(
            "createIpcrfPart1",
            data
          );
          console.log(returnedData);
          if (returnedData) {
            this.alert = true;
            setTimeout(() => {
              this.alert = false;
            }, 1500);
          }
        } else {
          data.user = this.ipcrfDemographicProfile.id;
          const returnedData = await this.$store.dispatch(
            "updateIpcrfPart1",
            data
          );
          console.log(returnedData);
          if (returnedData) {
            this.alert = true;
            setTimeout(() => {
              this.alert = false;
            }, 1500);
          }
        }
        // this.retrieveIpcrf();
        this.loading = false;
        this.loader = null;
        // this.show = false;
        // this.showTable = true;
      } else {
        this.showWarningResponse(
          "Finalizing Part 1 Failed",
          "Fill up all required fields"
        );
        console.log(this.$refs.part1.validate());
      }
    },

    finalizePart2: async function () {
      const id = this.ipcrfIdPart2;
      const schoolYear = this.empRatingPeriod;
      const selfManagement1 = this.selfManagement1;
      const selfManagement2 = this.selfManagement2;
      const selfManagement3 = this.selfManagement3;
      const selfManagement4 = this.selfManagement4;
      const selfManagement5 = this.selfManagement5;
      const teamwork1 = this.teamwork1;
      const teamwork2 = this.teamwork2;
      const teamwork3 = this.teamwork3;
      const teamwork4 = this.teamwork4;
      const teamwork5 = this.teamwork5;
      const prof1 = this.prof1;
      const prof2 = this.prof2;
      const prof3 = this.prof3;
      const prof4 = this.prof4;
      const prof5 = this.prof5;
      const service1 = this.service1;
      const service2 = this.service2;
      const service3 = this.service3;
      const service4 = this.service4;
      const service5 = this.service5;
      const results1 = this.results1;
      const results2 = this.results2;
      const results3 = this.results3;
      const results4 = this.results4;
      const results5 = this.results5;
      const innovation1 = this.innovation1;
      const innovation2 = this.innovation2;
      const innovation3 = this.innovation3;
      const innovation4 = this.innovation4;
      const innovation5 = this.innovation5;
      const user = JSON.parse(sessionStorage.getItem("user_session")).id;
      const teamwork = {
        teamwork1,
        teamwork2,
        teamwork3,
        teamwork4,
        teamwork5,
      };
      this.countTeamwork = 0;
      console.log(teamwork);
      for (const item in teamwork) {
        console.log(item);
        if (teamwork[item] != false) {
          this.countTeamwork++;
        }
      }
      console.log(this.countTeamwork);
      const selfManagement = {
        selfManagement1,
        selfManagement2,
        selfManagement3,
        selfManagement4,
        selfManagement5,
      };
      for (const item in selfManagement) {
        if (selfManagement[item] != false) {
          this.countSelfManagement++;
        }
      }

      const professional = {
        prof1,
        prof2,
        prof3,
        prof4,
        prof5,
      };
      for (const item in professional) {
        if (professional[item] != false) {
          this.countProfessional++;
        }
      }

      const service = {
        service1,
        service2,
        service3,
        service4,
        service5,
      };

      for (const item in service) {
        if (service[item] != false) {
          this.countService++;
        }
      }
      const results = {
        results1,
        results2,
        results3,
        results4,
        results5,
      };
      for (const item in results) {
        if (results[item] != false) {
          this.countResults++;
        }
      }

      const innovation = {
        innovation1,
        innovation2,
        innovation3,
        innovation4,
        innovation5,
      };

      for (const item in innovation) {
        if (innovation[item] != false) {
          this.countInnovation++;
        }
      }

      console.log(
        this.countSelfManagement,
        this.countTeamwork,
        this.countProfessional,
        this.countService,
        this.countResults,
        this.countInnovation
      );
      if (
        this.countSelfManagement > 0 &&
        this.countTeamwork > 0 &&
        this.countProfessional > 0 &&
        this.countService > 0 &&
        this.countResults > 0 &&
        this.countInnovation > 0
      ) {
        this.loading = true;
        this.loader = true;
        const data = {
          id,
          user,
          schoolYear,
          selfManagement1,
          selfManagement2,
          selfManagement3,
          selfManagement4,
          selfManagement5,
          teamwork1,
          teamwork2,
          teamwork3,
          teamwork4,
          teamwork5,
          prof1,
          prof2,
          prof3,
          prof4,
          prof5,
          service1,
          service2,
          service3,
          service4,
          service5,
          results1,
          results2,
          results3,
          results4,
          results5,
          innovation1,
          innovation2,
          innovation3,
          innovation4,
          innovation5,
        };
        console.log(data);
        if (this.create) {
          let selfManagement = [selfManagement1,
          selfManagement2,
          selfManagement3,
          selfManagement4,
          selfManagement5,];
      let teamwork = [teamwork1,
          teamwork2,
          teamwork3,
          teamwork4,
          teamwork5,];
      let professionalAndEthics = [ prof1,
          prof2,
          prof3,
          prof4,
          prof5];
      let innovation = [innovation1,
          innovation2,
          innovation3,
          innovation4,
          innovation5];
      let service = [ service1,
          service2,
          service3,
          service4,
          service5];
      let results = [results1,
          results2,
          results3,
          results4,
          results5];
     // console.log(selfManagement + "self Management", selfManagement.length);
      for (const item of selfManagement) {
        if (item == "1") {
          this.countSelfManagement++;
        }
      }
      for (const item of teamwork) {
        if (item == "1") {
          this.countTeamwork++;
        }
      }

      for (const item of professionalAndEthics) {
        if (item == "1") {
          this.countProfessional++;
        }
      }

      for (const item of innovation) {
        if (item == "1") {
          this.countInnovation++;
        }
      }

      for (const item of service) {
        if (item == "1") {
          this.countService++;
        }
      }

      for (const item of results) {
        if (item == "1") {
          this.countResults++;
        }
      }
          const returnedData = await this.$store.dispatch(
            "createIpcrfPart2",
            data
          );
          console.log(returnedData);
          this.alert = true;
          setTimeout(() => {
            this.alert = false;
          }, 1500);
          this.loading = false;
          this.loader = null;
        } else {
          const returnedData = await this.$store.dispatch(
            "updateIpcrfPart2",
            data
          );
          console.log(returnedData);
          this.alert = true;
          setTimeout(() => {
            this.alert = false;
          }, 1500);
          this.loading = false;
          this.loader = null;
        }
      } else {
        this.alert2 = true;
      }
    },

    finalizePart4: async function () {
      if (this.$refs.part4.validate()) {
        this.loading = true;
        this.loader = true;
        const id = this.ipcrfIdPart4;
        const user = JSON.parse(sessionStorage.user_session).id;
        const role = JSON.parse(sessionStorage.user_session).role;
        const strengthsFunctional = this.strengthsFunctional;
        const developmentNeedsFunctional = this.developmentNeedsFunctional;
        const learningObjectivesFunctional = this.learningObjectivesFunctional;
        const interventionFunctional = this.interventionFunctional;
        const timelineFunctional = this.timelineFunctional;
        const resourcesNeededFunctional = this.resourcesNeededFunctional;
        const strengthsCore = this.strengthsCore;
        const developmentCore = this.developmentCore;
        const learningObjectivesCore = this.learningObjectivesCore;
        const interventionCore = this.interventionCore;
        const timelineCore = this.timelineCore;
        const resourcesNeededCore = this.resourcesNeededCore;
        const feedback = this.feedback;
        const rateePart4 = this.rateePart4;
        const raterPart4 = this.raterPart4;
        const approvingAuthorityPart4 = this.approvingAuthorityPart4;
        const empRatingPeriod = this.empRatingPeriod;

        const data = {
          id,
          user,
          role,
          empRatingPeriod,
          strengthsFunctional,
          developmentNeedsFunctional,
          learningObjectivesFunctional,
          interventionFunctional,
          timelineFunctional,
          resourcesNeededFunctional,
          strengthsCore,
          developmentCore,
          learningObjectivesCore,
          interventionCore,
          timelineCore,
          resourcesNeededCore,
          feedback,
          rateePart4,
          raterPart4,
          approvingAuthorityPart4,
        };
        console.log(data);
        if (this.create) {
          const returnedIpcrfData = await this.$store.dispatch(
            "createIpcrfPart4",
            data
          );
          console.log(returnedIpcrfData);
          this.loading = false;
          this.loader = null;
          this.alert = true;
          setTimeout(() => {
            this.alert = false;
            this.retrieveIpcrf();
          }, 1500);
          if (returnedIpcrfData) {
            this.retrieveIpcrf();
            this.create = false
            this.show = false;
            this.showTable = true;
          }
        } else {
          const returnedIpcrfData = await this.$store.dispatch(
            "updateIpcrfPart4",
            data
          );
          console.log(returnedIpcrfData);

          if (returnedIpcrfData) {
            this.loading = false;
            this.loader = null;
            this.alert = true;
            setTimeout(() => {
              this.alert = false;
            }, 1500);
            this.retrieveIpcrf();
            this.edit = false
            this.show = false;
            this.showTable = true;
          }
        }
      }
    },
  },
};
</script>
