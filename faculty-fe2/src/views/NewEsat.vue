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

        <v-tab href="#contact"> Part I </v-tab>

        <v-tab href="#c3"> Part II </v-tab>

        <v-tab href="#c4"> Part III </v-tab>
      </v-tabs>

      <v-tabs-items v-model="tab">
        <v-tab-item :key="1" value="subscribe">
          <v-card flat>
            <img
              :src="require('../assets/esatlogo.png')"
              width="100px"
              height="100px"
            />
            <h3 class="text-center font-weight-bold">
              ELECTRONIC SELF-ASSESSMENT TOOL
            </h3>
            <h3 class="text-center font-weight-bold">SY 2020-2021</h3>
            <br />
            <v-card-text
              >This tool is designed for you to reflect on the different
              objectives related to your professional work. You should
              accomplish this tool prior to the beginning of the school year and
              use to reflect on your performance throughout the RPMS cycle. The
              result of your self-assessment will guide you on which RPMS
              objectives to improve and on what areas you need to improve and on
              what areas you need coaching and mentoring.
            </v-card-text>
            <v-card-text
              >Other school personnel, including the School Head, are not
              allowed to see the results of this tool. However, you can discuss
              with them your IPCRF-Development Plan (IPCRF-DP) based on your
              self-assessment.</v-card-text
            >
            <v-card-text
              >Please accomplish this tool individually and submit the file to
              copy to the School Head or Department Head for the school-wide
              consolidation. Please print a copy of the result for the
              preparation of your IPCRF-DP.</v-card-text
            >
          </v-card>
          <v-btn class="float-right mb-4 me-4">START</v-btn>
        </v-tab-item>
        <v-tab-item :key="2" value="contact">
          <v-card flat>
            <v-card-text>
              <h2 class="font-weight-bold text-center">
                Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
              </h2>
            </v-card-text>
            <h2 class="font-weight-regular text-center">
              Teacher I-III, SPET I-IV, Instructor I-II, Special Science Teacher
              I-II (Proficient Teachers)
            </h2>

            <!-- <h2 class="font-weight-bold mt-6 ml-10">PART I. DEMOGRAPHIC PROFILE</h2> -->
            <v-container class="grey lighten-5 fluid">
              <h2 class="font-weight-bold mt-6">PART I. DEMOGRAPHIC PROFILE</h2>
              <v-simple-table dense>
                <template v-slot:default>
                  <thead>
                    <tr>
                      
                    </tr>
                  </thead>
                </template>

              </v-simple-table>
              <v-row class="mt-5">
                <v-col>
                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Name of Employee:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field v-model="employeeName" solo></v-text-field>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Employee ID:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field v-model="employeeId" solo></v-text-field>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Position:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Employment Status:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Age:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field v-model="employeeAge" solo></v-text-field>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Sex:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>

                  <v-col> </v-col>
                </v-col>
                <v-col order="12">
                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Region:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Division:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>District/Municipality:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field
                        v-model="employeeMunicipality"
                        solo
                      ></v-text-field>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>School ID:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field v-model="schoolId" solo></v-text-field>
                    </v-col>
                  </v-row>
                  <v-row>
                    <v-col cols="6">
                      <v-subheader>School Name:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field v-model="schoolName" solo></v-text-field>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>School Type:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select
                        :items="items"
                        label="School Type"
                        solo
                      ></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>School Size:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select
                        :items="items"
                        label="School Size"
                        solo
                      ></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Curricular Classification:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select
                        :items="items"
                        label="Curricular Classification"
                        solo
                      ></v-select>
                    </v-col>
                  </v-row>
                </v-col>
                <v-col order="1">
                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Number of Years in Teaching:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader
                        >Specify Highest Degree Obtained:</v-subheader
                      >
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Highest Degree Obtained:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field
                        v-model="highestDegreeObtained"
                        solo
                      ></v-text-field>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Level Taught:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6">
                      <v-subheader>Grade Level taught:</v-subheader>
                    </v-col>
                    <v-col cols="6">
                      <v-select :items="items" solo></v-select>
                    </v-col>
                  </v-row>
                </v-col>
              </v-row>
            </v-container>
          </v-card>

          <v-card>
            <v-container class="grey lighten-5">
              <v-row no-gutters>
                <v-col>
                  <v-card class="pa-2" outlined tile>
                    <h4 class="text-center">AREA(S) OF SPECIALIZATION</h4>
                    <h5 class="text-center grey--text">
                      Please tick all the boxes that apply.
                    </h5>

                    <v-card flat>
                      <v-card-text>
                        <v-container fluid>
                          <v-row>
                            <v-col cols="12" lg="6" md="4">
                              <v-checkbox
                                v-model="english"
                                label="English"
                                value="English"
                              ></v-checkbox>

                              <v-checkbox
                                v-model="filipino"
                                label="Filipino"
                                value="Filipino"
                              ></v-checkbox>

                              <v-checkbox
                                v-model="mathematics"
                                label="Mathematics"
                                value="Mathematics"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="generalScience"
                                label="General Science"
                                value="General Science"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="biology"
                                label="Biology"
                                value="Biology"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="chemistry"
                                label="Chemistry"
                                value="Chemistry"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="physics"
                                label="Physics"
                                value="Physics"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="socialScience"
                                label="Social Science"
                                value="Social Science"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="earlyChildhoodEducation"
                                label="Early Childhood Education"
                                value="Early Childhood Education"
                              ></v-checkbox>
                            </v-col>
                            <v-col cols="12" lg="5" md="4">
                              <v-checkbox
                                v-model="valuesEducation"
                                label="Values Education"
                                value="Values Education"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="sped"
                                label="SPED"
                                value="SPED"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="music"
                                label="Music"
                                value="Music"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="arts"
                                label="Arts"
                                value="Arts"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="physicalEducation"
                                label="Physical Education"
                                value="Physical Education"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="health"
                                label="Health"
                                value="Health"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="TLE_HE_TVL"
                                label="TLE/HE/TVL"
                                value="TLE/HE/TVL"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="selected"
                                label="Others"
                                value="Others"
                              ></v-checkbox>
                              <v-text-field
                                v-model="specifyAreaofSpecialization"
                                label="Specify"
                                solo
                              ></v-text-field>
                            </v-col>
                          </v-row>
                        </v-container>
                      </v-card-text>
                    </v-card>
                  </v-card>
                </v-col>
                <v-col order="12">
                  <v-card class="pa-2" outlined tile>
                    <h4 class="text-center">SUBJECT(S) TAUGHT</h4>
                    <h5 class="text-center grey--text">
                      Please tick all the boxes that appply.
                    </h5>

                    <v-card flat>
                      <v-card-text>
                        <v-container fluid>
                          <v-row>
                            <v-col cols="12" lg="6" md="4">
                              <v-checkbox
                                v-model="MotherTongue"
                                label="Mother Tongue"
                                value="Mother Tongue"
                              ></v-checkbox>

                              <v-checkbox
                                v-model="Filipino"
                                label="Filipino"
                                value="Filipino"
                              ></v-checkbox>

                              <v-checkbox
                                v-model="English"
                                label="English"
                                value="English"
                              ></v-checkbox>

                              <v-checkbox
                                v-model="Mathematics"
                                label="Mathematics"
                                value="Mathematics"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="Science"
                                label="Science"
                                value="Science"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="AralingPanlipunan"
                                label="Araling Panlipunan"
                                value="Araling Panlipunan"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="EdukasyonSaPagpapakatao"
                                label="Edukasyon sa Pagpapakatao"
                                value="Edukasyon sa Pagpapakatao"
                              ></v-checkbox>
                            </v-col>
                            <v-col cols="12" lg="6" md="4">
                              <v-checkbox
                                v-model="Mapeh"
                                label="MAPEH"
                                value="MAPEH"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="TLE_HE"
                                label="TLE/HE"
                                value="TLE/HE"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="EPP_LE_HE"
                                label="EPP-LE/HE"
                                value="EPP-LE/HE"
                              ></v-checkbox>
                              <v-checkbox
                                v-model="specialPrograms"
                                label="Special Programs (i.e. Journalism and Foreign Language) "
                                value="Special Programs"
                              ></v-checkbox>

                              <v-checkbox
                                v-model="selected"
                                label="Others"
                                value="Others"
                              ></v-checkbox>
                              <v-text-field
                                v-model="specifySubjectsTaught"
                                label="Specify"
                                solo
                              ></v-text-field>
                            </v-col>
                          </v-row>
                        </v-container>
                      </v-card-text>
                    </v-card>
                  </v-card>
                </v-col>
              </v-row>
            </v-container>
            <v-btn class="float-right mb-4 me-4 mt-5">NEXT</v-btn>
          </v-card>
        </v-tab-item>

        <v-tab-item :key="3" value="c3">
          <v-card flat>
            <v-card-text>
              <h2 class="font-weight-bold text-center">
                Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
              </h2>
            </v-card-text>
            <h2 class="font-weight-regular text-center">
              Teacher I-III, SPET I-IV, Instructor I-II, Special Science Teacher
              I-II (Proficient Teachers)
            </h2>
            <v-container class="grey lighten-5 fluid">
              <h2 class="font-weight-bold mt-6">PART II. OBJECTIVES</h2>
              <v-row>
                <v-col>
                  <v-card outlined tile>
                    INSTRUCTIONS: There are two columns for every objective.
                    Please click one circle in each column corresponding to how
                    you rate your<b> [1] level of capability </b> and
                    <b> [2] priority for development</b> for each objective.
                  </v-card>
                </v-col>
              </v-row>
            </v-container>

            <v-container class="grey lighten-5">
              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2 text-center font-weight-bold">
                    OBJECTIVES
                  </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 text-center font-weight-bold"
                    outlined
                    tile
                  >
                    Level of Capability
                  </v-card>
                </v-col>
                <v-col order="last text-center font-weight-bold">
                  <v-card class="pa-2" outlined tile>
                    Priority for Development
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class=""> </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 text-center font-weight-bold"
                    outlined
                    tile
                  >
                    <v-row>
                      <v-col > Low </v-col>
                      <v-col> Moderate </v-col>
                      <v-col> High </v-col>
                      <v-col> Very High </v-col>
                    </v-row>
                  </v-card>
                </v-col>
                <v-col order="last text-center font-weight-bold">
                  <v-card class="pa-2" outlined tile>
                    <v-row>
                      <v-col> Low </v-col>
                      <v-col> Moderate </v-col>
                      <v-col> High </v-col>
                      <v-col> Very High </v-col>
                    </v-row>
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class=""> </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 text-center font-weight-bold"
                    outlined
                    tile
                  >
                    <v-row>
                      <v-col > 1 </v-col>
                      <v-col> 2 </v-col>
                      <v-col> 3 </v-col>
                      <v-col>  4 </v-col>
                    </v-row>
                  </v-card>
                </v-col>
                <v-col order="last text-center font-weight-bold">
                  <v-card class="pa-2" outlined tile>
                    <v-row>
                      <v-col > 1 </v-col>
                      <v-col> 2 </v-col>
                      <v-col> 3 </v-col>
                      <v-col>  4 </v-col>
                    </v-row>
                  </v-card>
                </v-col>
              </v-row>
              <v-row>
                <v-col cols="12">
                  <v-card class="pa-2 font-weight-bold" outlined tile>
                    1.Content Knowledge and Pedagogy (PPST Domain 1)
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    1.1 Applied knowledge of content within and across
                    curriculum teaching areas. (PPST Indicator 1.1.2)
                  </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability1" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="development1" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    1.2 Ensured the positive use of ICT to facilitate the
                    teaching and learning learning process. (PPST Indicator
                    1.3.2)
                  </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability2" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="developmet2" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    1.3 Applied a range of teaching strategies to develop
                    critical and creative thinking, as well as other higher
                    order thinking skills. (PPST Indicator 1.5.2)
                  </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability3" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="developmet3" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>
              <!-- 2 -->

              <v-row>
                <v-col cols="12">
                  <v-card class="pa-2 font-weight-bold" outlined tile>
                    2. Diversity of Learners & Assessment and Reporting (PPST
                    Domain 2 and Domain 5)
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    2.1 Established a learner-centered culture by using teaching
                    strategies that respond to their linguistic, cultural,
                    socio-economic and religious backgrounds.
                  </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability4" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="develoment4" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    2.2 Planned and delivered teaching strategies that are
                    responsive to the special educational needs of learners in
                    difficult circumstances, including: geographic isolation;
                    chronic illness; displacement due to armed conflict, urban
                    resettlement or disasters; child labor practices. (PPST
                    Indicator 3.4.2)
                  </v-card>
                </v-col>

                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability5" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="develoment5" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    2.3 Used strategies for providing timely, accurate and
                    constructive feedback to improve learner performance. (PPST
                    Indicator 5.3.2)
                  </v-card>
                </v-col>

                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability6" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="development6" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <!-- 3 -->

              <v-row>
                <v-col cols="12">
                  <v-card class="pa-2 font-weight-bold" outlined tile>
                    3. Curriculum and Planning (PPST Domain 4)
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    3.1 Selected, developed, organized and used appropriate
                    teaching and learning resources, including ICT, to address
                    learning goals. (PPST Indicator 4.5.2)
                  </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability7" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="develoment7" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    3.2 Set achievable and appropriate learning outcomes that
                    are aligned with learning competencies. (PPST Indicator
                    4.2.2)
                  </v-card>
                </v-col>

                <v-col>
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability8" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="develoment8" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <!-- 4 -->

              <v-row>
                <v-col cols="12">
                  <v-card class="pa-2 font-weight-bold" outlined tile>
                    4. Community Linkages and Professional Engagement & Personal
                    Growth and Professional Development (PPST Domain 6 and 7)
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    4.1 Built relationships with parents/guardians and the wider
                    school community to facilitate involvement in the educative
                    process. (PPST Indicator 6.2.2)
                  </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability9" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="development9" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    4.2 Participates in professional networks to share knowledge
                    and to enhance practice. (PPST Indicator 7.3.2)
                  </v-card>
                </v-col>

                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability10" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="development10" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    4.3 Developed a personal improvement plan based on
                    reflection of one’s practice and ongoing professional
                    learning. (PPST Indicator 7.4.2)
                  </v-card>
                </v-col>

                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability11" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="development11" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>

              <!-- 5 -->

              <v-row>
                <v-col cols="12">
                  <v-card class="pa-2 font-weight-bold" outlined tile>
                    PLUS FACTOR
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" lg="6" md="4">
                  <v-card class="pa-2" outlined tile>
                    5.1 Performed various related works/activities that
                    contribute to the teaching-learning process.
                  </v-card>
                </v-col>
                <v-col>
                  <v-card
                    class="pa-2 md-3 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="capability12" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
                <v-col order="last">
                  <v-card
                    class="pa-2 d-flex justify-space-around"
                    outlined
                    tile
                  >
                    <v-radio-group v-model="development12" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </v-card>
                </v-col>
              </v-row>
              <!-- comments -->

              <v-row>
                <v-col cols="12">
                  <v-card class="pa-2 font-weight-bold" outlined tile>
                    Personal Comments
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" lg="12" md="8">
                  <v-col cols="12" lg="12" md="8">
                    <v-text-field
                      v-model="personalComments"
                      label=""
                      solo
                      outlined
                      dense
                    ></v-text-field>

                    <v-btn class="float-right mb-4 me-4 mt-5">Next</v-btn>
                  </v-col>
                </v-col>
              </v-row>
            </v-container>
          </v-card>
        </v-tab-item>

        <v-tab-item :key="4" value="c4">
          <v-card flat>
            <v-card-text>
              <h2 class="font-weight-bold text-center">
                Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
              </h2>
            </v-card-text>
            <h2 class="font-weight-regular text-center">
              Teacher I-III, SPET I-IV, Instructor I-II, Special Science Teacher
              I-II (Proficient Teachers)
            </h2>
          </v-card>

          <v-container class="grey lighten-5 fluid">
            <h2 class="font-weight-bold mt-6">
              PART III. CORE BEHAVIORAL COMPETENCIES
            </h2>

            <v-row>
              <v-col>
                <v-card outlined tile>
                  INSTRUCTIONS: Please tick the box of the competency indicators
                  that you demontrated during the performance cycle.
                </v-card>
                <h3>1. SELF-MANAGEMENT</h3>
                <v-spacer></v-spacer>
                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="selfManagement1"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        1
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Sets personal goals and directions, needs and
                        development.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="selfManagement2"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        2
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Undertakes personal actions and behavior that are clear
                        and purposive and takes into account personal goals and
                        values congruent to that of the organization.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="selfManagement3"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        3
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Displays emotional maturity and enthusiasm for and is
                        challenged by higher goals.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="selfManagement4"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        4
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Prioritizes work tasks and schedules (through Gantt
                        charts, checklist, etc) achieve goals.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="selfManagement5"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        5
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Sets high quality, challenging, realistic goals for self
                        and others.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>
                <!-- 2 -->
                <h3>2.PROFESSIONALISM AND ETHICS</h3>
                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="professionalAndEthics1"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        1
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Demonstrates the values and behavior enshrined in the
                        Norms and Conduct and Ethical Standards for public
                        officials and employees. (RA 6713)
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="professionalAndEthics2"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        2
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Practices ethical and professional behavior and conduct
                        taking into account the impact of his/her actions and
                        decisions.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="professionalAndEthics3"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        3
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Maintains a professional image: being trustworthy,
                        regularity of attendance and punctuality, good grooming
                        and communication.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="professionalAndEthics4"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        4
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Makes personal sacrifices to meet the organization’s
                        needs.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="professionalAndEthics5"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        5
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Act with a sense of urgency and responsibility to meet
                        the organization’s needs, improve system and help others
                        improve their effectiveness.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <!-- 3 -->
                <h3>3. RESULTS FOCUS</h3>
                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="resultsFocus1"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        1
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Achieves results with optimal use of time and resources
                        most of the time.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="resultsFocus2"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        2
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Avoids rework, mistakes and wastage through effective
                        work methods by placing organizational needs before
                        personal needs.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="resultsFocus3"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        3
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Delivers error-free outputs most of the time by
                        conforming to standard operating procedures correctly
                        and consistently. Able to produce very satisfactory
                        quality work in terms of usefulness/acceptability and
                        completeness with no supervision required.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="resultsFocus4"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        4
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Expresses the desire to do better and may express
                        frustration at waste or efficiency. May focus on new or
                        more precise ways of meeting goals set.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="resultsFocus5"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        5
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Makes specific changes in the system or in own work
                        methods to improve performance. Examples may include
                        doing something better,faster, at a lower cost, more
                        efficiently, or improving quality, customer
                        satisfaction, morale, without setting any specific goal.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <!-- 4 -->

                <h3>4. TEAMWORK</h3>
                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox v-model="teamwork1" hide-details></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        1
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Willingly does his/her share of responsibility.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox v-model="teamwork2" hide-details></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        2
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Promotes collaboration and removes barriers to teamwork
                        and goal accomplishment across the organization.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox v-model="teamwork3" hide-details></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        3
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Applies negotiation principles in arriving at win-win
                        agreements.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox v-model="teamwork4" hide-details></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        4
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Drives consensus and team ownership of decisions.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox v-model="teamwork5" hide-details></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        5
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Works constructively and collaboratively with others and
                        across organizations to accomplish organizational goals
                        and objectives.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <!-- 5 -->

                <h3>5. SERVICE ORIENTATION</h3>
                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="serviceOrientation1"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        1
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Can explain and articulate organizational directions,
                        issues and problems.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="serviceOrientation2"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        2
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Takes personal responsibility for dealing with and/or
                        correcting customer service issues and concerns.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="serviceOrientation3"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        3
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Initiates activities that promote advocacy for men and
                        women empowerment.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="serviceOrientation4"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        4
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Participates in updating office vision, mission,
                        mandates and strategies based on DepEd strategies and
                        directions.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="serviceOrientation5"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        5
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Develops and adopts services improvement program through
                        simplified procedures that will further enhance service
                        delivery.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <!-- 6 -->

                <h3>6. INNOVATION</h3>
                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="innovation1"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        1
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Examines the root cause of problems and suggests
                        effective solutions. Foster new ideas, processes and
                        suggests better ways to do things(cost and/or operaional
                        effeciency).
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="innovation2"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        2
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Demonstrates an ability to think "beyond the box".
                        Continuosly focuses on improving personal productivity
                        to create higher value and results.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="innovation3"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        3
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Promote a creative climate and inspires co-workers to
                        develop original ideas or solutions.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="innovation4"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        4
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Translates creative thinking into tangible changes and
                        solutions that improve the work unit and organization.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-card outlined tile>
                  <v-row no-gutters>
                    <v-col md="1" class="d-flex justify-center">
                      <v-checkbox
                        v-model="innovation5"
                        hide-details
                      ></v-checkbox>
                    </v-col>
                    <v-col lg="1">
                      <v-card class="pa-2 text-center" outlined tile>
                        5
                      </v-card>
                    </v-col>
                    <v-col>
                      <v-card class="pa-2" outlined tile>
                        Uses ingenious methods to accomplish responsibilities.
                        Demonstrates resourcefulness and the ability to succeed
                        with minimal resources.
                      </v-card>
                    </v-col>
                  </v-row>
                </v-card>

                <v-row no-gutters>
                  <v-col cols="12" sm="6" md="8"> </v-col>
                  <v-col cols="4" md="4">
                    <v-btn class="float-right mb-4 me-4 mt-5">FINISH</v-btn>
                  </v-col>
                </v-row>
              </v-col>
            </v-row>
          </v-container>
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
      employeeName: "",
      employeeId: "",
      employeeAge: "",
      employeeMunicipality: "",
      schoolId: "",
      schoolName: "",
      highestDegreeObtained: "",

      english: "",
      filipino: "",
      mathematics: "",
      generalScience: "",
      biology: "",
      chemistry: "",
      physics: "",
      socialScience: "",
      earlyChildhoodEducation: "",
      valuesEducation: "",
      sped: "",
      music: "",
      arts: "",
      physicalEducation: "",
      health: "",
      tle_he_tvl: "",
      specifyAreaofSpecialization: "",

      MotherTongue: "",
      Filipino: "",
      English: "",
      Mathematics: "",
      Science: "",
      AralingPanlipunan: "",
      EdukasyonSaPagpapakatao: "",
      Mapeh: "",
      TLE_HE: "",
      EPP_LE_HE: "",
      specialPrograms: "",
      specifySubjectsTaught: "",

      capability1: "",
      development1: "",
      capability2: "",
      development2: "",
      capability3: "",
      development3: "",
      capability4: "",
      development4: "",
      capability5: "",
      development5: "",
      capability6: "",
      development6: "",
      capability7: "",
      development7: "",
      capability8: "",
      development8: "",
      capability9: "",
      development9: "",
      capability10: "",
      development10: "",
      capability11: "",
      development11: "",
      capability12: "",
      development12: "",
      personalComments: "",

      teamwork1: "",
      teamwork2: "",
      teamwork3: "",
      teamwork4: "",
      teamwork5: "",

      serviceOrientation1: "",
      serviceOrientation2: "",
      serviceOrientation3: "",
      serviceOrientation4: "",
      serviceOrientation5: "",

      innovation1: "",
      innovation2: "",
      innovation3: "",
      innovation4: "",
      innovation5: "",

      tab: "subscribe",
    };
  },
};
</script>
