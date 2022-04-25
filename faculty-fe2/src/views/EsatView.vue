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
        <v-tab href="#c5"> Show Print </v-tab>
      </v-tabs>

      <v-tabs-items v-model="tab">
        <v-tab-item :key="1" value="subscribe">
          <v-card flat>
            <v-container>
              <v-container>
                <v-row no-gutters>
                  <v-col cols="4">
                    <v-img
                      id="esatLogo"
                      :src="require('../assets/esatlogo.png')"
                    ></v-img>
                  </v-col>
                  <v-col cols="6">
                    <v-container id="esatTxt" class="container-fluid">
                      <h3 class="text-center font-weight-bold">
                        ELECTRONIC SELF-ASSESSMENT TOOL
                      </h3>
                      <h3 class="text-center font-weight-bold">SY 2020-2021</h3>
                    </v-container>
                  </v-col>
                </v-row>
              </v-container>
              <v-container id="disclosure">
                <v-card-text class="font-weight-medium">
                  This tool is designed for you to reflect on the different
                  objectives related to your professional work. You should
                  accomplish this tool prior to the beginning of the school year
                  and use to reflect on your performance throughout the RPMS
                  cycle. The result of your self-assessment will guide you on
                  which RPMS objectives to improve and on what areas you need to
                  improve and on what areas you need coaching and mentoring.
                </v-card-text>
                <v-card-text class="font-weight-medium">
                  Other school personnel, including the School Head, are not
                  allowed to see the results of this tool. However, you can
                  discuss with them your IPCRF-Development Plan (IPCRF-DP) based
                  on your self-assessment.
                </v-card-text>
                <v-card-text class="font-weight-medium">
                  Please accomplish this tool individually and submit the file
                  to copy to the School Head or Department Head for the
                  school-wide consolidation. Please print a copy of the result
                  for the preparation of your IPCRF-DP.
                  <v-btn class="float-right mt-2 mb-4 font-weight-black"
                    ><h3>START</h3></v-btn
                  >
                </v-card-text>
              </v-container>
            </v-container>
          </v-card>
        </v-tab-item>
        <v-tab-item :key="2" value="contact">
          <v-card flat>
            <v-container class="bgContainer mt-5">
              <h1 class="heading text-center">
                Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
              </h1>

              <h2 class="heading text-center">
                Teacher I-III, SPET I-IV, Instructor I-II, Special Science
                Teacher I-II (Proficient Teachers)
              </h2>

              <h2 class="heading mt-6">PART I. DEMOGRAPHIC PROFILE</h2>
              <v-simple-table class="table part1" dense>
                <tr class="infoDetails">
                  <td>Name of Employee:</td>
                  <td>
                    <v-text-field
                      class="textField mt-5"
                      solo
                      dense
                      flat
                      v-model="employeeName"
                    ></v-text-field>
                  </td>
                  <td rowspan="8"></td>
                  <td>Number of Years in Teaching:</td>
                  <td>
                    <v-select solo class="mt-5" v-model="yearsInTeaching" :items="items"></v-select>
                  </td>
                  <td rowspan="8"></td>
                  <td>Region:</td>
                  <td>
                    <v-select solo class="mt-5" :items="items" v-model="region"></v-select>
                  </td>
                </tr>
                <tr class="infoDetails">
                  <td>Employee ID:</td>
                  <td>
                    <v-text-field
                      class="mt-5"
                      v-model="employeeId"
                      solo
                      dense
                    ></v-text-field>
                  </td>
                  <td rowspan="2">Highest Degree Obtained:</td>
                  <td>
                    <v-select solo class="mt-5" v-model="highestDegreeObtained" :items="items"></v-select>
                  </td>
                  <td>Division:</td>
                  <td>
                    <v-select solo class="mt-5" :items="items" v-model="division"></v-select>
                  </td>
                </tr>
                <tr class="infoDetails">
                  <td>Position:</td>
                  <td>
                    <v-select solo class="mt-5" v-model="position" :items="items"></v-select>
                  </td>
                  <td>
                    <v-select solo class="mt-5" :items="items"></v-select>
                  </td>
                  <td>District/Municipality:</td>
                  <td>
                    <v-text-field
                      v-model="employeeMunicipality"
                      class="mt-5"
                      solo
                      dense
                    ></v-text-field>
                  </td>
                </tr>
                <tr class="infoDetails">
                  <td>Employment Status:</td>
                  <td>
                    <v-select solo class="mt-5" v-model="employmentStatus" :items="items"></v-select>
                  </td>
                  <td>Level Taught:</td>
                  <td>
                    <v-select solo class="mt-5" v-model="levelTaught" :items="items"></v-select>
                  </td>
                  <td>School ID:</td>
                  <td>
                    <v-text-field
                      v-model="schoolId"
                      class="mt-5"
                      solo
                      dense
                    ></v-text-field>
                  </td>
                </tr>
                <tr class="infoDetails">
                  <td>Age:</td>
                  <td>
                    <v-text-field
                      v-model="employeeAge"
                      class="mt-5"
                      solo
                      dense
                    ></v-text-field>
                  </td>
                  <td>Grade Level taught:</td>
                  <td>
                    <v-select solo class="mt-5" v-model="gradeLevelTaught" :items="items"></v-select>
                  </td>
                  <td>School Name:</td>
                  <td>
                    <v-text-field
                      v-model="schoolName"
                      class="mt-5"
                      solo
                      dense
                    ></v-text-field>
                  </td>
                </tr>
                <tr class="infoDetails">
                  <td>Sex:</td>
                  <td>
                    <v-select solo class="mt-5" v-model="employeeSex" :items="items"></v-select>
                  </td>
                  <td colspan="2"></td>
                  <td>School Type:</td>
                  <td>
                    <v-select
                      solo
                      class="mt-5"
                      :items="items"
                      v-model="schoolType"
                      label="School Type"
                    ></v-select>
                  </td>
                </tr>
                <tr class="infoDetails">
                  <td colspan="6" rowspan="2"></td>
                  <td>School Size:</td>
                  <td>
                    <v-select
                      solo
                      class="mt-5"
                      :items="items"
                      v-model="schoolSize"
                      label="School Size"
                    ></v-select>
                  </td>
                </tr>
                <tr class="infoDetails">
                  <td>Curricular Classification:</td>
                  <td>
                    <v-select
                      solo
                      class="mt-5"
                      :items="items"
                      v-model="curricularClassification"
                      label="Curricular Classification"
                    ></v-select>
                  </td>
                </tr>
              </v-simple-table>

              <!-- <v-row class="mt-5">
                <v-col>
                  <v-simple-table class="table part1">
                    <tr class="infoDetails">
                      <td>Name of Employee:</td>
                      <td>
                        <v-text-field
                          class="textField mt-5"
                          solo
                          dense
                          v-model="employeeName"
                        ></v-text-field>
                      </td>
                    </tr>
                    <tr>
                      <td>Employee ID:</td>
                      <td>
                        <v-text-field
                          class="mt-5"
                          v-model="employeeId"
                          solo
                          dense
                        ></v-text-field>
                      </td>
                    </tr>
                    <tr>
                      <td>Position:</td>
                      <td><v-select solo class="mt-5" :items="items"></v-select></td>
                    </tr>
                    <tr>
                      <td>Employment Status:</td>
                      <td><v-select solo class="mt-5" :items="items"></v-select></td>
                    </tr>
                    <tr>
                      <td>Age:</td>
                      <td>
                        <v-text-field
                          v-model="employeeAge"
                          class="mt-5"
                          solo
                          dense
                        ></v-text-field>
                      </td>
                    </tr>
                    <tr>
                      <td>Sex:</td>
                      <td><v-select solo class="mt-5" :items="items"></v-select></td>
                    </tr>
                  </v-simple-table>
                </v-col>
                <v-col>
                  <v-simple-table class="table part1">
                    <tr>
                      <td>Number of Years in Teaching:</td>
                      <td><v-select :items="items"></v-select></td>
                    </tr>
                    <tr>
                      <td>Highest Degree Obtained:</td>
                      <td><v-select :items="items"></v-select></td>
                    </tr>
                    <tr>
                      <td>Specify Highest Degree Obtained:</td>
                      <td>
                        <v-text-field
                          v-model="highestDegreeObtained"
                        ></v-text-field>
                      </td>
                    </tr>
                    <tr>
                      <td>Level Taught:</td>
                      <td><v-select :items="items"></v-select></td>
                    </tr>
                    <tr>
                      <td>Grade Level taught:</td>
                      <td><v-select :items="items"></v-select></td>
                    </tr>
                  </v-simple-table>
                </v-col>
                <v-col>
                  <v-simple-table class="table part1">
                    <tr>
                      <td>Region:</td>
                      <td><v-select :items="items"></v-select></td>
                    </tr>
                    <tr>
                      <td>Division:</td>
                      <td><v-select :items="items"></v-select></td>
                    </tr>
                    <tr>
                      <td>District/Municipality:</td>
                      <td>
                        <v-text-field
                          v-model="employeeMunicipality"
                          class="mt-5"
                          solo
                          dense
                        ></v-text-field>
                      </td>
                    </tr>
                    <tr>
                      <td>School ID:</td>
                      <td>
                        <v-text-field
                          v-model="schoolId"
                          class="mt-5"
                          solo
                          dense
                        ></v-text-field>
                      </td>
                    </tr>
                    <tr>
                      <td>School Name:</td>
                      <td>
                        <v-text-field
                          v-model="schoolName"
                          class="mt-5"
                          solo
                          dense
                        ></v-text-field>
                      </td>
                    </tr>
                    <tr>
                      <td>School Type:</td>
                      <td>
                        <v-select :items="items" label="School Type"></v-select>
                      </td>
                    </tr>
                    <tr>
                      <td>School Size:</td>
                      <td>
                        <v-select :items="items" label="School Size"></v-select>
                      </td>
                    </tr>
                    <tr>
                      <td>Curricular Classification:</td>
                      <td>
                        <v-select
                          :items="items"
                          label="Curricular Classification"
                        ></v-select>
                      </td>
                    </tr>
                  </v-simple-table>
                </v-col>
              </v-row> -->

              <v-container class="mt-5">
                <v-row>
                  <v-col>
                    <v-card class="bgCard pa-2" outlined tile>
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
                                  v-model="selected1"
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
                <v-row no-gutters>
                  <v-col cols="12" sm="6" md="8"> </v-col>
                  <v-col cols="4" md="4">
                    <v-btn class="float-right mb-4 me-4 mt-5">NEXT</v-btn>
                  </v-col>
                </v-row>
              </v-container>
            </v-container>
          </v-card>
        </v-tab-item>

        <v-tab-item :key="3" value="c3">
          <v-card flat>
            <v-container class="bgContainer mt-5">
              <h1 class="heading text-center">
                Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
              </h1>

              <h2 class="heading text-center">
                Teacher I-III, SPET I-IV, Instructor I-II, Special Science
                Teacher I-II (Proficient Teachers)
              </h2>
              <v-container class="container">
                <h2 class="heading mt-6">PART II. OBJECTIVES</h2>
                <v-row>
                  <v-col>
                    <v-container class="part2Instruction">
                      INSTRUCTIONS: There are two columns for every objective.
                      Please click one circle in each column corresponding to
                      how you rate your<b> [1] level of capability </b> and
                      <b> [2] priority for development</b> for each objective.
                    </v-container>
                  </v-col>
                </v-row>
              </v-container>

              <v-simple-table id="objective" class="table text-center">
                <tr>
                  <td rowspan="3">Objectives</td>
                  <td class="radio" colspan="4">Level of Capability</td>
                  <td class="radio" colspan="4">Priority for Development</td>
                </tr>
                <tr>
                  <td>Low</td>
                  <td>Moderate</td>
                  <td>High</td>
                  <td>Very High</td>
                  <td>Low</td>
                  <td>Moderate</td>
                  <td>High</td>
                  <td>Very High</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                </tr>
              </v-simple-table>

              <v-simple-table class="table">
                <tr>
                  <td class="head" colspan="3">
                    <h2>1.Content Knowledge and Pedagogy (PPST Domain 1)</h2>
                  </td>
                </tr>
                <tr>
                  <td id="description">
                    1.1 Applied knowledge of content within and across
                    curriculum teaching areas. (PPST Indicator 1.1.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability1" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development1" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
                <tr>
                  <td>
                    1.2 Ensured the positive use of ICT to facilitate the
                    teaching and learning learning process. (PPST Indicator
                    1.3.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability2" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development2" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
                <tr>
                  <td>
                    1.3 Applied a range of teaching strategies to develop
                    critical and creative thinking, as well as other higher
                    order thinking skills. (PPST Indicator 1.5.2)
                  </td>
                  <td>
                    <v-radio-group id="radioBtn" v-model="capability3" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td>
                    <v-radio-group id="radioBtn" v-model="development3" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
              </v-simple-table>

              <!-- 2 -->
              <v-simple-table class="table">
                <tr>
                  <td colspan="3" class="head">
                    <h2>
                      2. Diversity of Learners & Assessment and Reporting (PPST
                      Domain 2 and Domain 5)
                    </h2>
                  </td>
                </tr>
                <tr>
                  <td>
                    2.1 Established a learner-centered culture by using teaching
                    strategies that respond to their linguistic, cultural,
                    socio-economic and religious backgrounds.
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability4" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development4" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
                <tr>
                  <td>
                    2.2 Planned and delivered teaching strategies that are
                    responsive to the special educational needs of learners in
                    difficult circumstances, including: geographic isolation;
                    chronic illness; displacement due to armed conflict, urban
                    resettlement or disasters; child labor practices. (PPST
                    Indicator 3.4.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability5" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development5" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
                <tr>
                  <td>
                    2.3 Used strategies for providing timely, accurate and
                    constructive feedback to improve learner performance. (PPST
                    Indicator 5.3.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability6" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development6" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
              </v-simple-table>
              <!-- 3 -->

              <v-simple-table class="table">
                <tr>
                  <td colspan="3" class="head">
                    <h2>3. Curriculum and Planning (PPST Domain 4)</h2>
                  </td>
                </tr>
                <tr>
                  <td>
                    3.1 Selected, developed, organized and used appropriate
                    teaching and learning resources, including ICT, to address
                    learning goals. (PPST Indicator 4.5.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability7" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development7" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
                <tr>
                  <td>
                    3.2 Set achievable and appropriate learning outcomes that
                    are aligned with learning competencies. (PPST Indicator
                    4.2.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability8" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development8" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
              </v-simple-table>

              <!-- 4 -->
              <v-simple-table class="table">
                <tr>
                  <td colspan="3" class="head">
                    <h2>
                      4. Community Linkages and Professional Engagement &
                      Personal Growth and Professional Development (PPST Domain
                      6 and 7)
                    </h2>
                  </td>
                </tr>
                <tr>
                  <td>
                    4.1 Built relationships with parents/guardians and the wider
                    school community to facilitate involvement in the educative
                    process. (PPST Indicator 6.2.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability9" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development9" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
                <tr>
                  <td>
                    4.2 Participates in professional networks to share knowledge
                    and to enhance practice. (PPST Indicator 7.3.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability10" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development10" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
                <tr>
                  <td>
                    4.3 Developed a personal improvement plan based on
                    reflection of one’s practice and ongoing professional
                    learning. (PPST Indicator 7.4.2)
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability11" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development11" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
              </v-simple-table>

              <!-- 5 -->
              <v-simple-table class="table">
                <tr>
                  <td colspan="3" class="head"><h2>PLUS FACTOR</h2></td>
                </tr>
                <tr>
                  <td>
                    5.1 Performed various related works/activities that
                    contribute to the teaching-learning process.
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="capability12" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                  <td class="radio">
                    <v-radio-group id="radioBtn" v-model="development12" row>
                      <v-radio label="" value="low"></v-radio>
                      <v-radio label="" value="moderate"></v-radio>
                      <v-radio label="" value="high"></v-radio>
                      <v-radio label="" value="very high"></v-radio>
                    </v-radio-group>
                  </td>
                </tr>
              </v-simple-table>
              <!-- comments -->
              <v-row no-gutters>
                <v-col cols="12" lg="12" md="8">
                  <v-col cols="12" lg="12" md="8">
                    <v-card class="pa-2 font-weight-bold" outlined tile>
                      Personal Comments
                    </v-card>
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
          <v-container class="bgContainer mt-5">
            <h1 class="text-center">
              Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
            </h1>

            <h2 class="heading text-center">
              Teacher I-III, SPET I-IV, Instructor I-II, Special Science Teacher
              I-II (Proficient Teachers)
            </h2>

            <h2 class="heading mt-6">PART III. CORE BEHAVIORAL COMPETENCIES</h2>

            <v-row>
              <v-col>
                <v-container class="part2Instruction">
                  INSTRUCTIONS: Please tick the box of the competency indicators
                  that you demontrated during the performance cycle.
                </v-container>
                <h3 class="mt-5">1. SELF-MANAGEMENT</h3>
                <v-simple-table class="table">
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="selfManagement1"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>1</td>
                    <td>
                      Sets personal goals and directions, needs and development.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="selfManagement2"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>2</td>
                    <td>
                      Undertakes personal actions and behavior that are clear
                      and purposive and takes into account personal goals and
                      values congruent to that of the organization.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="selfManagement3"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>3</td>
                    <td>
                      Displays emotional maturity and enthusiasm for and is
                      challenged by higher goals.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="selfManagement4"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>4</td>
                    <td>
                      Prioritizes work tasks and schedules (through Gantt
                      charts, checklist, etc) achieve goals.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="selfManagement5"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>5</td>
                    <td>
                      Sets high quality, challenging, realistic goals for self
                      and others.
                    </td>
                  </tr>
                </v-simple-table>

                <!-- 2 -->
                <h3>2.PROFESSIONALISM AND ETHICS</h3>

                <v-simple-table class="table">
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="professionalAndEthics1"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>1</td>
                    <td>
                      Demonstrates the values and behavior enshrined in the
                      Norms and Conduct and Ethical Standards for public
                      officials and employees. (RA 6713)
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="professionalAndEthics2"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>2</td>
                    <td>
                      Practices ethical and professional behavior and conduct
                      taking into account the impact of his/her actions and
                      decisions.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="professionalAndEthics3"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>3</td>
                    <td>
                      Maintains a professional image: being trustworthy,
                      regularity of attendance and punctuality, good grooming
                      and communication.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="professionalAndEthics4"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>4</td>
                    <td>
                      Makes personal sacrifices to meet the organization’s
                      needs.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="professionalAndEthics5"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>5</td>
                    <td>
                      Act with a sense of urgency and responsibility to meet the
                      organization’s needs, improve system and help others
                      improve their effectiveness.
                    </td>
                  </tr>
                </v-simple-table>
                <!-- 3 -->
                <h3>3. RESULTS FOCUS</h3>
                <v-simple-table class="table">
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="resultsFocus1"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>1</td>
                    <td>
                      Achieves results with optimal use of time and resources
                      most of the time.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="resultsFocus2"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>2</td>
                    <td>
                      Avoids rework, mistakes and wastage through effective work
                      methods by placing organizational needs before personal
                      needs.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="resultsFocus3"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>3</td>
                    <td>
                      Delivers error-free outputs most of the time by conforming
                      to standard operating procedures correctly and
                      consistently. Able to produce very satisfactory quality
                      work in terms of usefulness/acceptability and completeness
                      with no supervision required.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="resultsFocus4"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>4</td>
                    <td>
                      Expresses the desire to do better and may express
                      frustration at waste or efficiency. May focus on new or
                      more precise ways of meeting goals set.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="resultsFocus5"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>5</td>
                    <td>
                      Makes specific changes in the system or in own work
                      methods to improve performance. Examples may include doing
                      something better,faster, at a lower cost, more
                      efficiently, or improving quality, customer satisfaction,
                      morale, without setting any specific goal.
                    </td>
                  </tr>
                </v-simple-table>

                <!-- 4 -->

                <h3>4. TEAMWORK</h3>
                <v-simple-table class="table">
                  <tr>
                    <td class="checkBox">
                      <v-checkbox v-model="teamwork1" hide-details></v-checkbox>
                      <!-- <v-checkbox v-model="teamwork1" hide-details></v-checkbox> -->
                    </td>
                    <td>1</td>
                    <td>Willingly does his/her share of responsibility.</td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox v-model="teamwork2" hide-details></v-checkbox>
                    </td>
                    <td>2</td>
                    <td>
                      Promotes collaboration and removes barriers to teamwork
                      and goal accomplishment across the organization.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox v-model="teamwork3" hide-details></v-checkbox>
                    </td>
                    <td>3</td>
                    <td>
                      Applies negotiation principles in arriving at win-win
                      agreements.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox v-model="teamwork4" hide-details></v-checkbox>
                    </td>
                    <td>4</td>
                    <td>Drives consensus and team ownership of decisions.</td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox v-model="teamwork5" hide-details></v-checkbox>
                    </td>
                    <td>5</td>
                    <td>
                      Works constructively and collaboratively with others and
                      across organizations to accomplish organizational goals
                      and objectives.
                    </td>
                  </tr>
                </v-simple-table>

                <!-- 5 -->

                <h3>5. SERVICE ORIENTATION</h3>

                <v-simple-table class="table">
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="serviceOrientation1"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>1</td>
                    <td>
                      Can explain and articulate organizational directions,
                      issues and problems.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="serviceOrientation2"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>2</td>
                    <td>
                      Takes personal responsibility for dealing with and/or
                      correcting customer service issues and concerns.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="serviceOrientation3"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>3</td>
                    <td>
                      Initiates activities that promote advocacy for men and
                      women empowerment.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="serviceOrientation4"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>4</td>
                    <td>
                      Participates in updating office vision, mission, mandates
                      and strategies based on DepEd strategies and directions.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="serviceOrientation5"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>5</td>
                    <td>
                      Develops and adopts services improvement program through
                      simplified procedures that will further enhance service
                      delivery.
                    </td>
                  </tr>
                </v-simple-table>

                <!-- 6 -->

                <h3>6. INNOVATION</h3>

                <v-simple-table class="table">
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="innovation1"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>1</td>
                    <td>
                      Examines the root cause of problems and suggests effective
                      solutions. Foster new ideas, processes and suggests better
                      ways to do things(cost and/or operaional effeciency).
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="innovation2"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>2</td>
                    <td>
                      Demonstrates an ability to think "beyond the box".
                      Continuosly focuses on improving personal productivity to
                      create higher value and results.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="innovation3"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>3</td>
                    <td>
                      Promote a creative climate and inspires co-workers to
                      develop original ideas or solutions.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="innovation4"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>4</td>
                    <td>
                      Translates creative thinking into tangible changes and
                      solutions that improve the work unit and organization.
                    </td>
                  </tr>
                  <tr>
                    <td class="checkBox">
                      <v-checkbox
                        v-model="innovation5"
                        hide-details
                      ></v-checkbox>
                    </td>
                    <td>5</td>
                    <td>
                      Uses ingenious methods to accomplish responsibilities.
                      Demonstrates resourcefulness and the ability to succeed
                      with minimal resources.
                    </td>
                  </tr>
                </v-simple-table>
                <v-row no-gutters>
                  <v-col cols="12" sm="6" md="8"> </v-col>
                  <v-col cols="4" md="4">
                    <v-btn class="float-right mb-4 me-4 mt-5" @click='finalizeEsat'>FINISH</v-btn>
                  </v-col>
                </v-row>
              </v-col>
            </v-row>
          </v-container>
        </v-tab-item>

        <v-tab-item :key="5" value="c5">
          <v-card flat>
            <v-container class="mt-5">
              <h2 class="heading text-center">
                Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
              </h2>

              <h2 class="heading text-center">
                Teacher I-III, SPET I-IV, Instructor I-II, Special Science
                Teacher I-II (Proficient Teachers)
              </h2>

              <!-- showPRINT -->

              <h2 class="heading mt-6 text-decoration-underline">
                PART I. DEMOGRAPHIC PROFILE
              </h2>
              <v-row>
                <v-col>
                  <v-simple-table class="table">
                    <tr>
                      <td>Name of Employee:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Position:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Employment Status:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Age:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Sex:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Number of Years in Teaching:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Specify Highest Degree Obtained:</td>
                      <td>dsfb</td>
                    </tr>
                  </v-simple-table>
                </v-col>
                <v-col>
                  <v-simple-table class="table">
                    <tr>
                      <td>Region:</td>
                      <td>EXAMPLE</td>
                    </tr>
                    <tr>
                      <td>Division:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>School:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Curricular Classification:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Area(s) of Specialization:</td>
                      <td>dsfb</td>
                    </tr>
                    <tr>
                      <td>Subjects(s) Taught:</td>
                      <td>dsfb</td>
                    </tr>
                  </v-simple-table>
                </v-col>
              </v-row>

              <v-container class="mt-5">
                <h2 class="font-weight-bold mt-6 text-decoration-underline">
                  PART II. DEMOGRAPHIC PROFILE
                </h2>
                <v-simple-table class="table">
                  <thead class="font-weight-bold">
                    <tr>
                      <th class="text-center">Objectives</th>
                      <th class="text-left">Level of Capacity</th>
                      <th class="text-left">Priority for Development</th>
                    </tr>
                  </thead>
                  <v-row>
                    <v-col cols="12">
                      <v-card class="pa-2 font-weight-bold" outlined tile>
                        1.Content Knowledge and Pedagogy (PPST Domain 1)
                      </v-card>
                    </v-col>
                  </v-row>

                  <tr>
                    <td>
                      1.1 Applied knowledge of content within and across
                      curriculum teaching areas. (PPST Indicator 1.1.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>
                  <tr>
                    <td>
                      1.2 Ensured the positive use of ICT to facilitate the
                      teaching and learning learning process. (PPST Indicator
                      1.3.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>
                  <tr>
                    <td>
                      1.3 Applied a range of teaching strategies to develop
                      critical and creative thinking, as well as other higher
                      order thinking skills. (PPST Indicator 1.5.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>

                  <v-row>
                    <v-col cols="12">
                      <v-card class="pa-2 font-weight-bold" outlined tile>
                        2. Diversity of Learners & Assessment and Reporting
                        (PPST Domain 2 and Domain 5)
                      </v-card>
                    </v-col>
                  </v-row>

                  <tr>
                    <td>
                      2.1 Established a learner-centered culture by using
                      teaching strategies that respond to their linguistic,
                      cultural, socio-economic and religious backgrounds.
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>
                  <tr>
                    <td>
                      2.2 Planned and delivered teaching strategies that are
                      responsive to the special educational needs of learners in
                      difficult circumstances, including: geographic isolation;
                      chronic illness; displacement due to armed conflict, urban
                      resettlement or disasters; child labor practices. (PPST
                      Indicator 3.4.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>
                  <tr>
                    <td>
                      2.3 Used strategies for providing timely, accurate and
                      constructive feedback to improve learner performance.
                      (PPST Indicator 5.3.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>

                  <v-row>
                    <v-col cols="12">
                      <v-card class="pa-2 font-weight-bold" outlined tile>
                        3. Curriculum and Planning (PPST Domain 4)
                      </v-card>
                    </v-col>
                  </v-row>
                  <tr>
                    <td>
                      3.1 Selected, developed, organized and used appropriate
                      teaching and learning resources, including ICT, to address
                      learning goals. (PPST Indicator 4.5.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>
                  <tr>
                    <td>
                      3.2 Set achievable and appropriate learning outcomes that
                      are aligned with learning competencies. (PPST Indicator
                      4.2.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>

                  <v-row>
                    <v-col cols="12">
                      <v-card class="pa-2 font-weight-bold" outlined tile>
                        4. Community Linkages and Professional Engagement &
                        Personal Growth and Professional Development (PPST
                        Domain 6 and 7)
                      </v-card>
                    </v-col>
                  </v-row>

                  <tr>
                    <td>
                      4.1 Built relationships with parents/guardians and the
                      wider school community to facilitate involvement in the
                      educative process. (PPST Indicator 6.2.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>
                  <tr>
                    <td>
                      4.2 Participates in professional networks to share
                      knowledge and to enhance practice. (PPST Indicator 7.3.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>
                  <tr>
                    <td>
                      4.3 Developed a personal improvement plan based on
                      reflection of one’s practice and ongoing professional
                      learning. (PPST Indicator 7.4.2)
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>

                  <v-row>
                    <v-col cols="12">
                      <v-card class="pa-2 font-weight-bold" outlined tile>
                        PLUS FACTOR
                      </v-card>
                    </v-col>
                  </v-row>
                  <tr>
                    <td>
                      5.1 Performed various related works/activities that
                      contribute to the teaching-learning process.
                    </td>
                    <td>dsfb</td>
                    <td>lorem epsom</td>
                  </tr>
                </v-simple-table>
              </v-container>

              <v-container class="">
                <h2 class="font-weight-bold mt-6 text-decoration-underline">
                  PART III. CORE BEHAVIORAL COMPETENCIES
                </h2>
                <h3 class="mt-5">1. SELF-MANAGEMENT</h3>

                <v-simple-table class="table">
                  <tr>
                    <td>example</td>
                    <td>1</td>
                    <td>
                      Sets personal goals and directions, needs and development.
                    </td>
                  </tr>
                  <tr>
                    <td>dehg</td>
                    <td>2</td>
                    <td>
                      Undertakes personal actions and behavior that are clear
                      and purposive and takes into account personal goals and
                      values congruent to that of the organization.
                    </td>
                  </tr>
                  <tr>
                    <td>dfgfg</td>
                    <td>3</td>
                    <td>
                      Displays emotional maturity and enthusiasm for and is
                      challenged by higher goals.
                    </td>
                  </tr>
                  <tr>
                    <td>bbn</td>
                    <td>4</td>
                    <td>
                      Prioritizes work tasks and schedules (through Gantt
                      charts, checklist, etc) achieve goals.
                    </td>
                  </tr>
                  <tr>
                    <td>bgfnf</td>
                    <td>5</td>
                    <td>
                      Sets high quality, challenging, realistic goals for self
                      and others.
                    </td>
                  </tr>
                </v-simple-table>
                <h3>2.PROFESSIONALISM AND ETHICS</h3>
                <v-simple-table class="table">
                  <tr>
                    <td>example</td>
                    <td>1</td>
                    <td>
                      Demonstrates the values and behavior enshrined in the
                      Norms and Conduct and Ethical Standards for public
                      officials and employees. (RA 6713)
                    </td>
                  </tr>
                  <tr>
                    <td>dehg</td>
                    <td>2</td>
                    <td>
                      Practices ethical and professional behavior and conduct
                      taking into account the impact of his/her actions and
                      decisions.
                    </td>
                  </tr>
                  <tr>
                    <td>dfgfg</td>
                    <td>3</td>
                    <td>
                      Maintains a professional image: being trustworthy,
                      regularity of attendance and punctuality, good grooming
                      and communication.
                    </td>
                  </tr>
                  <tr>
                    <td>bbn</td>
                    <td>4</td>
                    <td>
                      Makes personal sacrifices to meet the organization’s
                      needs.
                    </td>
                  </tr>
                  <tr>
                    <td>bgfnf</td>
                    <td>5</td>
                    <td>
                      Act with a sense of urgency and responsibility to meet the
                      organization’s needs, improve system and help others
                      improve their effectiveness.
                    </td>
                  </tr>
                </v-simple-table>
                <h3>3. RESULTS FOCUS</h3>
                <v-simple-table class="table">
                  <tr>
                    <td>example</td>
                    <td>1</td>
                    <td>
                      Achieves results with optimal use of time and resources
                      most of the time.
                    </td>
                  </tr>
                  <tr>
                    <td>dehg</td>
                    <td>2</td>
                    <td>
                      Avoids rework, mistakes and wastage through effective work
                      methods by placing organizational needs before personal
                      needs.
                    </td>
                  </tr>
                  <tr>
                    <td>dfgfg</td>
                    <td>3</td>
                    <td>
                      Delivers error-free outputs most of the time by conforming
                      to standard operating procedures correctly and
                      consistently. Able to produce very satisfactory quality
                      work in terms of usefulness/acceptability and completeness
                      with no supervision required.
                    </td>
                  </tr>
                  <tr>
                    <td>bbn</td>
                    <td>4</td>
                    <td>
                      Expresses the desire to do better and may express
                      frustration at waste or efficiency. May focus on new or
                      more precise ways of meeting goals set.
                    </td>
                  </tr>
                  <tr>
                    <td>bgfnf</td>
                    <td>5</td>
                    <td>
                      Makes specific changes in the system or in own work
                      methods to improve performance. Examples may include doing
                      something better,faster, at a lower cost, more
                      efficiently, or improving quality, customer satisfaction,
                      morale, without setting any specific goal.
                    </td>
                  </tr>
                </v-simple-table>
                <h3><h3>4. TEAMWORK</h3></h3>
                <v-simple-table class="table">
                  <tr>
                    <td>example</td>
                    <td>1</td>
                    <td>Willingly does his/her share of responsibility.</td>
                  </tr>
                  <tr>
                    <td>dehg</td>
                    <td>2</td>
                    <td>
                      Promotes collaboration and removes barriers to teamwork
                      and goal accomplishment across the organization.
                    </td>
                  </tr>
                  <tr>
                    <td>dfgfg</td>
                    <td>3</td>
                    <td>
                      Applies negotiation principles in arriving at win-win
                      agreements.
                    </td>
                  </tr>
                  <tr>
                    <td>bbn</td>
                    <td>4</td>
                    <td>Drives consensus and team ownership of decisions.</td>
                  </tr>
                  <tr>
                    <td>bgfnf</td>
                    <td>5</td>
                    <td>
                      Works constructively and collaboratively with others and
                      across organizations to accomplish organizational goals
                      and objectives.
                    </td>
                  </tr>
                </v-simple-table>
                <h3>5. SERVICE ORIENTATION</h3>
                <v-simple-table class="table">
                  <tr>
                    <td>example</td>
                    <td>1</td>
                    <td>
                      Can explain and articulate organizational directions,
                      issues and problems.
                    </td>
                  </tr>
                  <tr>
                    <td>dehg</td>
                    <td>2</td>
                    <td>
                      Takes personal responsibility for dealing with and/or
                      correcting customer service issues and concerns.
                    </td>
                  </tr>
                  <tr>
                    <td>dfgfg</td>
                    <td>3</td>
                    <td>
                      Initiates activities that promote advocacy for men and
                      women empowerment.
                    </td>
                  </tr>
                  <tr>
                    <td>bbn</td>
                    <td>4</td>
                    <td>
                      Participates in updating office vision, mission, mandates
                      and strategies based on DepEd strategies and directions.
                    </td>
                  </tr>
                  <tr>
                    <td>bgfnf</td>
                    <td>5</td>
                    <td>
                      Develops and adopts services improvement program through
                      simplified procedures that will further enhance service
                      delivery.
                    </td>
                  </tr>
                </v-simple-table>
                <h3>6. INNOVATION</h3>
                <v-simple-table class="table">
                  <tr>
                    <td>example</td>
                    <td>1</td>
                    <td>
                      Examines the root cause of problems and suggests effective
                      solutions. Foster new ideas, processes and suggests better
                      ways to do things(cost and/or operaional effeciency).
                    </td>
                  </tr>
                  <tr>
                    <td>dehg</td>
                    <td>2</td>
                    <td>
                      Demonstrates an ability to think "beyond the box".
                      Continuosly focuses on improving personal productivity to
                      create higher value and results.
                    </td>
                  </tr>
                  <tr>
                    <td>dfgfg</td>
                    <td>3</td>
                    <td>
                      Promote a creative climate and inspires co-workers to
                      develop original ideas or solutions.
                    </td>
                  </tr>
                  <tr>
                    <td>bbn</td>
                    <td>4</td>
                    <td>
                      Translates creative thinking into tangible changes and
                      solutions that improve the work unit and organization.
                    </td>
                  </tr>
                  <tr>
                    <td>bgfnf</td>
                    <td>5</td>
                    <td>
                      Uses ingenious methods to accomplish responsibilities.
                      Demonstrates resourcefulness and the ability to succeed
                      with minimal resources.
                    </td>
                  </tr>
                </v-simple-table>
                <v-row no-gutters>
                  <v-col cols="12" sm="6" md="8"> </v-col>
                  <v-col cols="4" md="4">
                    <v-btn class="float-right mb-4 me-4 mt-5">FINISH</v-btn>
                    <v-btn class="float-right mb-4 me-4 mt-5">PRINT</v-btn>
                  </v-col>
                </v-row>
              </v-container>
            </v-container>
            <v-row>
              <v-col> </v-col>
            </v-row>
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
      employeeName: "",
      employeeId: "",
      position: "",
      employmentStatus: "",
      employeeAge: "",
      employeeSex: "",

      yearsInTeaching: "",
      highestDegreeObtained: "",
      levelTaught: "",
      gradeLevelTaught: "",


      region: "",
      division: "",
      employeeMunicipality: "",
      schoolId: "",
      schoolName: "",
      schoolType: "",
      schoolSize: "",
      curricularClassification: "",


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
  methods: {
    finalizeEsat: async function () {
     const employeeName = this.employeeName;
     const employeeId = this.employeeId;
     const position = this.position;
     const employmentStatus = this.employmentStatus;
     const employeeAge = this.employeeAge;
     const employeeSex = this.employeeSex;

    const yearsInTeaching = this.yearsInTeaching;
    const highestDegreeObtained = this.highestDegreeObtained;
    const levelTaught = this.levelTaught;
    const gradeLevelTaught = this.gradeLevelTaught;


     const region = this.region;
      const division = this.division;
     const employeeMunicipality = this.employeeMunicipality;
     const schoolId = this.schoolId;
     const schoolName = this.schoolName;
      const schoolType = this.schoolType;
       const schoolSize = this.schoolSize;
        const curricularClassification = this.curricularClassification;
    //  const highestDegreeObtained = this.highestDegreeObtained;
     const english = this.english;
     const filipino = this.filipino;
     const mathematics = this.mathematics;
     const generalScience = this.generalScience;
     const biology = this.biology;
     const chemistry = this.chemistry;
     const physics = this.physics;
     const socialScience = this.socialScience;
     const earlyChildhoodEducation = this.earlyChildhoodEducation;
     const valuesEducation =this.valuesEducation;
     const sped = this.sped;
     const music = this.music;
     const arts = this.arts;
     const physicalEducation = this.physicalEducation;
     const health = this.health;
     const tle_he_tvl = this.tle_he_tvl;
     const specifyAreaofSpecialization = this.specifyAreaofSpecialization;
     const MotherTongue = this.MotherTongue;
     const Filipino = this.Filipino;
     const English = this.English;
     const Mathematics = this.Mathematics;
     const Science = this.Science;
     const AralingPanlipunan = this.AralingPanlipunan;
     const EdukasyonSaPagpapakatao = this.EdukasyonSaPagpapakatao;
     const Mapeh = this.Mapeh;
     const TLE_HE = this.TLE_HE;
     const EPP_LE_HE = this.EPP_LE_HE;
     const specialPrograms = this.specialPrograms;
     const specifySubjectsTaught = this.specifySubjectsTaught;
     const capability1 = this.capability1;
     const development1 = this.development1;
     const capability2 = this.capability2;
     const development2 = this.development2;
     const capability3 = this.capability3;
     const development3 = this.development3;
     const capability4 = this.capability4;
     const development4 = this.development4;
     const capability5 = this.capability5;
     const development5 = this.development5;
     const capability6 = this.capability6;
     const development6 = this.development6;
     const capability7 = this.capability7;
     const development7 = this.development7;
     const capability8 = this.capability8;
     const development8 = this.development8;
     const capability9 = this.capability9;
     const development9 = this.development9;
     const capability10 = this.capability10;
     const development10 = this.development10;
     const capability11 = this.capability11;
     const development11 = this.development11;
     const capability12 = this.capability12;
     const development12 = this.development12;
     const personalComments = this.personalComments;
     const teamwork1 = this.teamwork1;
     const teamwork2 = this.teamwork2;
     const teamwork3 = this.teamwork3;
     const teamwork4 = this.teamwork4;
     const teamwork5 = this.teamwork5;
     const serviceOrientation1 = this.serviceOrientation1;
     const serviceOrientation2 = this.serviceOrientation2;
     const serviceOrientation3 = this.serviceOrientation3;
     const serviceOrientation4 = this.serviceOrientation4;
     const serviceOrientation5 = this.serviceOrientation5;
     const innovation1 = this.innovation1;
     const innovation2 = this.innovation2;
     const innovation3 = this.innovation3;
     const innovation4 = this.innovation4;
     const innovation5 = this.innovation5;

     const user = 1;

    const data = {
        user,
        employeeName,
        employeeId,
        position,
        employmentStatus,
        employeeAge,
        employeeSex,

        yearsInTeaching,
        highestDegreeObtained,
        levelTaught,
        gradeLevelTaught,

        region,
        division,
        employeeMunicipality,
        schoolId,
        schoolName,
        schoolType,
        schoolSize,
        curricularClassification,
        
        english,
        filipino,
        mathematics,
        generalScience,
        biology,
        chemistry,
        physics,
        socialScience,
        earlyChildhoodEducation,
        valuesEducation,
        sped,
        music,
        arts,
        physicalEducation,
        health,
        tle_he_tvl,
        specifyAreaofSpecialization,
        MotherTongue,
        Filipino,
        English,
        Mathematics,
        Science,
        AralingPanlipunan,
        EdukasyonSaPagpapakatao,
        Mapeh,
        TLE_HE,
        EPP_LE_HE,
        specialPrograms,
        specifySubjectsTaught,
        capability1,
        development1,
        capability2,
        development2,
        capability3,
        development3,
        capability4,
        development4,
        capability5,
        development5,
        capability6,
        development6,
        capability7,
        development7,
        capability8,
        development8,
        capability9,
        development9,
        capability10,
        development10,
        capability11,
        development11,
        capability12,
        development12,
        personalComments,
        teamwork1,
        teamwork2,
        teamwork3,
        teamwork4,
        teamwork5,
        serviceOrientation1,
        serviceOrientation2,
        serviceOrientation3,
        serviceOrientation4,
        serviceOrientation5,
        innovation1,
        innovation2,
        innovation3,
        innovation4,
        innovation5,


     }
     console.log(data);


    }

  }
};
</script>
<style scope src="../assets/css/esat.css"></style>
