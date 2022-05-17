<template>
  <v-container>
    <v-card>
      <v-tabs
        mt-5
        v-model="tab"
        background-color="blue accent-4"
        centered
        dark
        icons-and-text
      >
        <!-- <v-tabs-slider></v-tabs-slider> -->

        <v-tab href="#subscribe"> Home </v-tab>
        <v-tab href="#privacy"> Privacy Note </v-tab>

        <v-tab href="#part1"> Part I </v-tab>

        <v-tab href="#part2"> Part II </v-tab>

        <v-tab href="#part3"> Part III </v-tab>
        <v-tab href="#show_print"> Show Print </v-tab>
        <v-tab href="#esat_card"> esatCard </v-tab>
      </v-tabs>

      <v-tabs-items v-model="tab">
        <v-tab-item :key="1" value="subscribe" v-if="disclosure">
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
                    <v-container id="esatTxt">
                      <h1
                        style="font-size: 20px"
                        class="text-center font-weight-bold"
                      >
                        ELECTRONIC SELF-ASSESSMENT TOOL
                      </h1>
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
                <v-card-text class="font-weight-medium mb-5">
                  Please accomplish this tool individually and submit the file
                  to copy to the School Head or Department Head for the
                  school-wide consolidation. Please print a copy of the result
                  for the preparation of your IPCRF-DP.

                  <v-btn
                    class="float-right mt-5 mb-4 font-weight-black"
                    @click="
                      goToPrivacy(), (disclosure = false), (privacyNote = true)
                    "
                    ><h3>START</h3></v-btn
                  >
                </v-card-text>
              </v-container>
            </v-container>
          </v-card>
        </v-tab-item>

        <v-tab-item :key="1.1" value="privacy" v-if="privacyNote">
          <v-container class="container pa-5 px-3">
            <v-container class="container">
              <h1 style="font-size: 30px" class="text-center font-weight-bold">
                ELECTRONIC SELF-ASSESSMENT TOOL
              </h1>
              <h1 style="font-size: 20px" class="text-center font-weight-bold">
                SY 2020-2021
              </h1>
            </v-container>

            <v-container id="disclosure" class="mt-5 pa-3">
              <h1 class="text-center" id="privacyNote">PRIVACY NOTE</h1>
              <v-card-text class="font-weight-medium mb-5">
                <p id="privacy">
                  I Authorize the personnel of Department of Education to
                  collect, process, retain, and dispose my personal information
                  in accordance with the Data Privacy Act of 2012.
                </p>
              </v-card-text>
            </v-container>
            <v-btn
              class="float-left mt-5 mb-5 ml-5 font-weight-black"
              @click="
                returnDisclosure(), (privacyNote = false), (disclosure = true)
              "
              ><h3>DISAGREE</h3></v-btn
            >

            <v-btn
              class="float-right mt-5 mb-5 mr-5 font-weight-black"
              @click="
                goToPart1(),
                  (disclosure = false),
                  (privacyNote = false),
                  (showPart1 = true)
              "
              ><h3>AGREE</h3></v-btn
            >
          </v-container>
        </v-tab-item>

        <v-tab-item :key="2" value="part1" v-if="showPart1">
          <v-container class="bgContainer mt-5">
            <h1 class="heading text-center">
              Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
            </h1>

            <h2 class="heading text-center">
              Teacher I-III, SPET I-IV, Instructor I-II, Special Science Teacher
              I-II (Proficient Teachers)
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
                  <v-select
                    solo
                    class="mt-6"
                    v-model="yearsInTeaching"
                    :items="yearsItems"
                  ></v-select>
                </td>
                <td rowspan="8"></td>
                <td>Region:</td>
                <td>
                  <v-select
                    solo
                    class="mt-6"
                    :items="regionItems"
                    v-model="region"
                  ></v-select>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Employee ID:</td>
                <td>
                  <v-text-field
                    class="mt-6"
                    v-model="employeeId"
                    solo
                    dense
                  ></v-text-field>
                </td>
                <td rowspan="2">Highest Degree Obtained:</td>
                <td>
                  <v-select
                    solo
                    class="mt-6"
                    v-model="highestDegreeObtained"
                    :items="highestDegreeItems"
                  ></v-select>
                </td>
                <td>Division:</td>
                <td>
                  <v-select
                    solo
                    class="mt-6"
                    :items="divisionItems"
                    v-model="division"
                  ></v-select>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Position:</td>
                <td>
                  <v-select
                    :items="positionItems"
                    solo
                    class="mt-6"
                    v-model="position"
                  ></v-select>
                </td>
                <td>
                  <v-select
                    v-model="specifiedHighestDegreeObtained"
                    :items="highestDegreeItems"
                    class="mt-6"
                    solo
                    dense
                  ></v-select>
                </td>
                <td>District/Municipality:</td>
                <td>
                  <v-text-field
                    v-model="employeeMunicipality"
                    class="mt-6"
                    solo
                    dense
                  ></v-text-field>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Employment Status:</td>
                <td>
                  <v-select
                    solo
                    class="mt-6"
                    v-model="employmentStatus"
                    :items="statusItems"
                  ></v-select>
                </td>
                <td>Level Taught:</td>
                <td>
                  <v-select
                    solo
                    class="mt-6"
                    v-model="levelTaught"
                    :items="levelTaughtItems"
                  ></v-select>
                </td>
                <td>School ID:</td>
                <td>
                  <v-text-field
                    v-model="schoolId"
                    class="mt-6"
                    solo
                    dense
                  ></v-text-field>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Age:</td>
                <td>
                  <v-select
                    :items="ageitems"
                    solo
                    class="mt-6"
                    v-model="employeeAge"
                  ></v-select>
                </td>
                <td>Grade Level taught:</td>
                <td>
                  <v-select
                    solo
                    class="mt-6"
                    v-model="gradeLevelTaught"
                    :items="gLevelTaughtItems"
                  ></v-select>
                </td>
                <td>School Name:</td>
                <td>
                  <v-text-field
                    v-model="schoolName"
                    class="mt-6"
                    solo
                    dense
                  ></v-text-field>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Sex:</td>
                <td>
                  <v-select
                    solo
                    class="mt-6"
                    v-model="employeeSex"
                    :items="sexItems"
                  ></v-select>
                </td>
                <td colspan="2"></td>
                <td>School Type:</td>
                <td>
                  <v-select
                    solo
                    class="mt-6"
                    :items="schoolTypeItems"
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
                    class="mt-6"
                    :items="schoolSizeItems"
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
                    class="mt-6"
                    :items="classificationItems"
                    v-model="curricularClassification"
                    label="Curricular Classification"
                  ></v-select>
                </td>
              </tr>
            </v-simple-table>

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
                                v-model="otherSpecialized"
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
                                v-model="otherSubTaught"
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
                  <v-btn
                    class="float-right mb-4 me-4 mt-5"
                    @click="
                      goToPart2(), (showPart1 = false), (showPart2 = true)
                    "
                    >NEXT</v-btn
                  >
                  <v-btn
                    class="float-right mb-4 me-4 mt-5"
                    @click="
                      returnPrivacyNote(),
                        (showPart1 = false),
                        (privacyNote = true),
                        (disclosure = false)
                    "
                    >CANCEL</v-btn
                  >
                </v-col>
              </v-row>
            </v-container>
          </v-container>
        </v-tab-item>

        <v-tab-item :key="3" value="part2" v-if="showPart2">
          <v-container class="bgContainer mt-5">
            <h1 class="heading text-center">
              Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
            </h1>

            <h2 class="heading text-center">
              Teacher I-III, SPET I-IV, Instructor I-II, Special Science Teacher
              I-II (Proficient Teachers)
            </h2>
            <v-container class="container">
              <h2 class="heading mt-6">PART II. OBJECTIVES</h2>
              <v-row>
                <v-col>
                  <v-container class="part2Instruction">
                    INSTRUCTIONS: There are two columns for every objective.
                    Please click one circle in each column corresponding to how
                    you rate your<b> [1] level of capability </b> and
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
                  1.1 Applied knowledge of content within and across curriculum
                  teaching areas. (PPST Indicator 1.1.2)
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
                  1.2 Ensured the positive use of ICT to facilitate the teaching
                  and learning learning process. (PPST Indicator 1.3.2)
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
                  1.3 Applied a range of teaching strategies to develop critical
                  and creative thinking, as well as other higher order thinking
                  skills. (PPST Indicator 1.5.2)
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
                  3.2 Set achievable and appropriate learning outcomes that are
                  aligned with learning competencies. (PPST Indicator 4.2.2)
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
                    4. Community Linkages and Professional Engagement & Personal
                    Growth and Professional Development (PPST Domain 6 and 7)
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
                  4.3 Developed a personal improvement plan based on reflection
                  of one’s practice and ongoing professional learning. (PPST
                  Indicator 7.4.2)
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
                  5.1 Performed various related works/activities that contribute
                  to the teaching-learning process.
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
                  <v-btn
                    class="float-right mb-4 me-4 mt-5"
                    @click="
                      goToPart3(), (showPart2 = false), (showPart3 = true)
                    "
                    >NEXT</v-btn
                  >
                  <v-btn
                    class="float-right mb-4 me-4 mt-5"
                    @click="
                      returnPart1(), (showPart2 = false), (showPart1 = true)
                    "
                    >BACK</v-btn
                  >
                </v-col>
              </v-col>
            </v-row>
          </v-container>
        </v-tab-item>

        <v-tab-item :key="4" value="part3" v-if="showPart3">
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
                    <v-btn
                      class="float-right mb-4 me-4 mt-5"
                      v-if="saveInfos"
                      @click="finalizeEsat"
                      >SAVE</v-btn
                    >
                    <v-btn
                      class="float-right mb-4 me-4 mt-5"
                      v-if="updateInfos"
                      @click="updateInfo"
                      >UPDATE</v-btn
                    >
                    <v-btn
                      class="float-right mb-4 me-4 mt-5"
                      @click="
                        returnPart2(), (showPart3 = false), (showPart2 = true)
                      "
                      >BACK</v-btn
                    >
                  </v-col>
                </v-row>
              </v-col>
            </v-row>
          </v-container>
        </v-tab-item>

        <v-tab-item :key="5" value="show_print" v-if="showPrint">
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

              <v-simple-table class="table mt-6">
                <template v-slot:default>
                  <thead>
                    <tr>
                      <th colspan="5">
                        <h2
                          style="color: black"
                          class="font-weight-bold text-decoration-underline"
                        >
                          PART I. DEMOGRAPHIC PROFILE
                        </h2>
                      </th>
                    </tr>
                  </thead>
                  <tbody
                    style="color: black"
                    v-for="row in esatDemographicProfile"
                    :key="row.id"
                  >
                    <tr>
                      <td class="esatPrint">Name of Employee:</td>
                      <td class="showDataPart1">{{ row.name_of_employee }}</td>
                      <td rowspan="7"></td>
                      <td class="esatPrint">Region:</td>
                      <td class="showDataPart1">{{ row.region }}</td>
                    </tr>
                    <tr>
                      <td class="esatPrint">Position:</td>
                      <td class="showDataPart1">{{ row.position }}</td>
                      <td class="esatPrint">School:</td>
                      <td class="showDataPart1">
                        {{ row.school_id }} - {{ row.school_name }}
                      </td>
                    </tr>
                    <tr>
                      <td class="esatPrint">Employment Status:</td>
                      <td class="showDataPart1">{{ row.employment_status }}</td>
                      <td class="esatPrint">Division:</td>
                      <td class="showDataPart1">{{ row.division }}</td>
                    </tr>
                    <tr>
                      <td class="esatPrint">Age:</td>
                      <td class="showDataPart1">{{ row.age }}</td>
                      <td class="esatPrint">Curricular Classification:</td>
                      <td class="showDataPart1">
                        {{ row.curricular_classification }}
                      </td>
                    </tr>
                    <tr>
                      <td class="esatPrint">Sex:</td>
                      <td class="showDataPart1">{{ row.sex }}</td>
                      <td class="esatPrint">Area(s) of Specialization:</td>
                      <td class="showDataPart1">
                        {{ row.area_of_specialization }}
                      </td>
                    </tr>
                    <tr>
                      <td class="esatPrint">Number of Years in Teaching:</td>
                      <td class="showDataPart1">{{ row.years_in_teaching }}</td>
                      <td class="esatPrint">Subjects(s) Taught:</td>
                      <td class="showDataPart1">{{ row.subjects_taught }}</td>
                    </tr>
                    <tr>
                      <td class="esatPrint">
                        Specify Highest Degree Obtained:
                      </td>
                      <td class="showDataPart1">
                        {{ row.highest_degree_obtained }} -
                        {{ row.specified_highest_degree_obtained }}
                      </td>
                    </tr>
                  </tbody>
                </template>
              </v-simple-table>

              <v-container class="mt-5">
                <h2 class="font-weight-bold mt-6 text-decoration-underline">
                  PART II. FUNCTIONAL OBJECTOVES
                </h2>
                <v-simple-table class="table">
                  <template v-slot:default>
                    <thead class="font-weight-bold">
                      <tr>
                        <th
                          colspan="2"
                          style="
                            color: black;
                            font-size: 15px;
                            border: black 0.5px solid;
                          "
                          class="text-center"
                        >
                          Objectives
                        </th>
                        <th
                          style="
                            color: black;
                            font-size: 15px;
                            border: black 0.5px solid;
                          "
                          class="text-left"
                        >
                          Level of Capacity
                        </th>
                        <th
                          style="
                            color: black;
                            font-size: 15px;
                            border: black 0.5px solid;
                          "
                          class="text-left"
                        >
                          Priority for Development
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td colspan="4">
                          <h3>
                            1.Content Knowledge and Pedagogy (PPST Domain 1)
                          </h3>
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">1.1</td>
                        <td>
                          Applied knowledge of content within and across
                          curriculum teaching areas. (PPST Indicator 1.1.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[0].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[0].priority_for_development }}
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">1.2</td>
                        <td>
                          Ensured the positive use of ICT to facilitate the
                          teaching and learning learning process. (PPST
                          Indicator 1.3.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[1].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[1].priority_for_development }}
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">1.3</td>
                        <td>
                          Applied a range of teaching strategies to develop
                          critical and creative thinking, as well as other
                          higher order thinking skills. (PPST Indicator 1.5.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[2].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[2].priority_for_development }}
                        </td>
                      </tr>

                      <tr>
                        <td colspan="4">
                          <h3>
                            2. Diversity of Learners & Assessment and Reporting
                            (PPST Domain 2 and Domain 5)
                          </h3>
                        </td>
                      </tr>

                      <tr>
                        <td class="objNo">2.1</td>
                        <td>
                          Established a learner-centered culture by using
                          teaching strategies that respond to their linguistic,
                          cultural, socio-economic and religious backgrounds.
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[3].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[3].priority_for_development }}
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">2.2</td>
                        <td>
                          Planned and delivered teaching strategies that are
                          responsive to the special educational needs of
                          learners in difficult circumstances, including:
                          geographic isolation; chronic illness; displacement
                          due to armed conflict, urban resettlement or
                          disasters; child labor practices. (PPST Indicator
                          3.4.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[4].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[4].priority_for_development }}
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">2.3</td>
                        <td>
                          Used strategies for providing timely, accurate and
                          constructive feedback to improve learner performance.
                          (PPST Indicator 5.3.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[5].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[5].priority_for_development }}
                        </td>
                      </tr>

                      <tr>
                        <td colspan="4">
                          <h3>3. Curriculum and Planning (PPST Domain 4)</h3>
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">3.1</td>
                        <td>
                          Selected, developed, organized and used appropriate
                          teaching and learning resources, including ICT, to
                          address learning goals. (PPST Indicator 4.5.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[6].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[6].priority_for_development }}
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">3.2</td>
                        <td>
                          Set achievable and appropriate learning outcomes that
                          are aligned with learning competencies. (PPST
                          Indicator 4.2.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[7].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[7].priority_for_development }}
                        </td>
                      </tr>

                      <tr>
                        <td colspan="4">
                          <h3>
                            4. Community Linkages and Professional Engagement &
                            Personal Growth and Professional Development (PPST
                            Domain 6 and 7)
                          </h3>
                        </td>
                      </tr>

                      <tr>
                        <td class="objNo">4.1</td>
                        <td>
                          Built relationships with parents/guardians and the
                          wider school community to facilitate involvement in
                          the educative process. (PPST Indicator 6.2.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[8].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[8].priority_for_development }}
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">4.2</td>
                        <td>
                          Participates in professional networks to share
                          knowledge and to enhance practice. (PPST Indicator
                          7.3.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[9].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[9].priority_for_development }}
                        </td>
                      </tr>
                      <tr>
                        <td class="objNo">4.3</td>
                        <td>
                          Developed a personal improvement plan based on
                          reflection of one’s practice and ongoing professional
                          learning. (PPST Indicator 7.4.2)
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[10].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{
                            functionalObjectives[10].priority_for_development
                          }}
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4"><h3>PLUS FACTOR</h3></td>
                      </tr>
                      <tr>
                        <td class="objNo">5.1</td>
                        <td>
                          Performed various related works/activities that
                          contribute to the teaching-learning process.
                        </td>
                        <td class="text-center">
                          {{ functionalObjectives[11].level_of_capability }}
                        </td>
                        <td class="text-center">
                          {{
                            functionalObjectives[11].priority_for_development
                          }}
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4">
                          <h3>Personal Comments</h3>
                        </td>
                      </tr>
                      <tr v-for="row in esatDemographicProfile" :key="row.id">
                        <td colspan="4">{{ row.personal_comments }}</td>
                      </tr>
                    </tbody>
                  </template>
                </v-simple-table>
              </v-container>

              <v-container class="">
                <v-simple-table class="table" style="color: black">
                  <template>
                    <thead>
                      <tr>
                        <th colspan="3">
                          <h2
                            style="color: black"
                            class="font-weight-bold mt-6 text-decoration-underline"
                          >
                            PART III. CORE BEHAVIORAL COMPETENCIES
                          </h2>
                        </th>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <h3 style="color: black" class="mt-5">
                            1. SELF-MANAGEMENT
                          </h3>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          {{
                            coreBehavioralCompetencies[0].check_status === "1"
                              ? "✔"
                              : ""
                          }}
                        </td>

                        <td>1</td>
                        <td>
                          Sets personal goals and directions, needs and
                          development.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            coreBehavioralCompetencies[1].check_status === "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>2</td>
                        <td>
                          Undertakes personal actions and behavior that are
                          clear and purposive and takes into account personal
                          goals and values congruent to that of the
                          organization.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            coreBehavioralCompetencies[2].check_status === "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>3</td>
                        <td>
                          Displays emotional maturity and enthusiasm for and is
                          challenged by higher goals.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            coreBehavioralCompetencies[3].check_status === "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>4</td>
                        <td>
                          Prioritizes work tasks and schedules (through Gantt
                          charts, checklist, etc) achieve goals.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[4].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>5</td>
                        <td>
                          Sets high quality, challenging, realistic goals for
                          self and others.
                        </td>
                      </tr>

                      <tr>
                        <td colspan="3">
                          <h3>2.PROFESSIONALISM AND ETHICS</h3>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[5].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>1</td>
                        <td>
                          Demonstrates the values and behavior enshrined in the
                          Norms and Conduct and Ethical Standards for public
                          officials and employees. (RA 6713)
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[6].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>2</td>
                        <td>
                          Practices ethical and professional behavior and
                          conduct taking into account the impact of his/her
                          actions and decisions.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[7].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>3</td>
                        <td>
                          Maintains a professional image: being trustworthy,
                          regularity of attendance and punctuality, good
                          grooming and communication.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[8].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>4</td>
                        <td>
                          Makes personal sacrifices to meet the organization’s
                          needs.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[9].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>5</td>
                        <td>
                          Act with a sense of urgency and responsibility to meet
                          the organization’s needs, improve system and help
                          others improve their effectiveness.
                        </td>
                      </tr>

                      <tr>
                        <td colspan="3"><h3>3. RESULTS FOCUS</h3></td>
                      </tr>

                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[10].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>1</td>
                        <td>
                          Achieves results with optimal use of time and
                          resources most of the time.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[11].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>2</td>
                        <td>
                          Avoids rework, mistakes and wastage through effective
                          work methods by placing organizational needs before
                          personal needs.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[12].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>3</td>
                        <td>
                          Delivers error-free outputs most of the time by
                          conforming to standard operating procedures correctly
                          and consistently. Able to produce very satisfactory
                          quality work in terms of usefulness/acceptability and
                          completeness with no supervision required.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[13].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>4</td>
                        <td>
                          Expresses the desire to do better and may express
                          frustration at waste or efficiency. May focus on new
                          or more precise ways of meeting goals set.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[14].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>5</td>
                        <td>
                          Makes specific changes in the system or in own work
                          methods to improve performance. Examples may include
                          doing something better,faster, at a lower cost, more
                          efficiently, or improving quality, customer
                          satisfaction, morale, without setting any specific
                          goal.
                        </td>
                      </tr>

                      <tr>
                        <td colspan="3">
                          <h3>4. TEAMWORK</h3>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[15].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>1</td>
                        <td>Willingly does his/her share of responsibility.</td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[16].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>2</td>
                        <td>
                          Promotes collaboration and removes barriers to
                          teamwork and goal accomplishment across the
                          organization.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[17].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>3</td>
                        <td>
                          Applies negotiation principles in arriving at win-win
                          agreements.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[18].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>4</td>
                        <td>
                          Drives consensus and team ownership of decisions.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[19].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>5</td>
                        <td>
                          Works constructively and collaboratively with others
                          and across organizations to accomplish organizational
                          goals and objectives.
                        </td>
                      </tr>

                      <tr>
                        <td colspan="3">
                          <h3>5. SERVICE ORIENTATION</h3>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[20].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>1</td>
                        <td>
                          Can explain and articulate organizational directions,
                          issues and problems.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[21].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>2</td>
                        <td>
                          Takes personal responsibility for dealing with and/or
                          correcting customer service issues and concerns.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[22].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>3</td>
                        <td>
                          Initiates activities that promote advocacy for men and
                          women empowerment.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[23].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>4</td>
                        <td>
                          Participates in updating office vision, mission,
                          mandates and strategies based on DepEd strategies and
                          directions.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[24].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>5</td>
                        <td>
                          Develops and adopts services improvement program
                          through simplified procedures that will further
                          enhance service delivery.
                        </td>
                      </tr>

                      <tr>
                        <td colspan="3">
                          <h3>6. INNOVATION</h3>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[25].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>1</td>
                        <td>
                          Examines the root cause of problems and suggests
                          effective solutions. Foster new ideas, processes and
                          suggests better ways to do things(cost and/or
                          operaional effeciency).
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[26].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>2</td>
                        <td>
                          Demonstrates an ability to think "beyond the box".
                          Continuosly focuses on improving personal productivity
                          to create higher value and results.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[27].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>3</td>
                        <td>
                          Promote a creative climate and inspires co-workers to
                          develop original ideas or solutions.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[28].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>4</td>
                        <td>
                          Translates creative thinking into tangible changes and
                          solutions that improve the work unit and organization.
                        </td>
                      </tr>
                      <tr>
                        <td>
                          {{
                            this.coreBehavioralCompetencies[29].check_status ===
                            "1"
                              ? "✔"
                              : ""
                          }}
                        </td>
                        <td>5</td>
                        <td>
                          Uses ingenious methods to accomplish responsibilities.
                          Demonstrates resourcefulness and the ability to
                          succeed with minimal resources.
                        </td>
                      </tr>
                    </tbody>
                  </template>
                </v-simple-table>
                <v-row no-gutters>
                  <v-col cols="12" sm="6" md="8"> </v-col>
                  <v-col cols="4" md="4">
                    <v-btn class="float-right mb-4 me-4 mt-5">PRINT</v-btn>
                    <v-btn
                      class="float-right mb-4 me-4 mt-5"
                      @click="
                        goToEsatCard(), (esatCard = true), (showPrint = false)
                      "
                      >FINISH</v-btn
                    >
                    <v-btn class="float-right mb-4 me-4 mt-5" @click="editInfo"
                      >EDIT</v-btn
                    >
                  </v-col>
                </v-row>
              </v-container>
            </v-container>
            <v-row>
              <v-col> </v-col>
            </v-row>
          </v-card>
        </v-tab-item>

        <v-tab-item :key="6" value="esat_card">
          <v-container class="mt-5 mb-5 p-5">
            <v-card class="bgCard pa-2" id="cardEsat">
              <h2 class="heading ml-5">ELECTRONIC SELF-ASSESMENT TOOL</h2>
              <v-row no-gutters>
                <v-col cols="2">
                  <v-img
                    id="esatLogocard"
                    :src="require('../assets/esatlogo.png')"
                  ></v-img>
                </v-col>
                <v-col cols="5" class="ml=2">
                  <v-container id="esatTxt">
                    <h3 class="text-left font-weight-bold">SY 2020-2021</h3>
                  </v-container>
                </v-col>
              </v-row>

              <h3 class="heading mt-2" id="ecard">Survey Completed</h3>

              <p class="font-weight-regular font-italic">
                Submit this file to you Department Head for consolidation.
              </p>

              <v-row>
                <v-col>
                  <v-simple-table class="table ml-5">
                    <template>
                      <tbody>
                        <tr>
                          <td class="esatCard">Name:</td>
                          <td colspan="2">
                            {{
                              this.esatDemographicProfile[0].name_of_employee
                            }}
                          </td>
                        </tr>
                        <tr>
                          <td class="esatCard">School:</td>
                          <td colspan="2">
                            {{ this.esatDemographicProfile[0].school_name }}
                          </td>
                        </tr>
                        <tr>
                          <td class="esatCard">School Year:</td>
                          <td>SY 2021-2022</td>
                          <td rowspan="2" class="text-center">
                            <v-btn dense @click="viewPrint"> View </v-btn>
                          </td>
                        </tr>
                        <tr>
                          <td class="esatCard">Date:</td>
                          <td>12/8/2021</td>
                        </tr>
                      </tbody>
                    </template>
                  </v-simple-table>
                </v-col>
                <v-col> </v-col>
              </v-row>
            </v-card>
          </v-container>
        </v-tab-item>
      </v-tabs-items>
    </v-card>
  </v-container>
</template>

<script>
// @ is an alias to /src
export default {
  // methods: {},
  data() {
    return {
      goToPrivacy() {
        this.tab = "privacy";
      },
      returnDisclosure() {
        this.tab = "subscribe";
      },
      returnPrivacyNote() {
        this.tab = "privacy";
      },
      goToPart1() {
        this.tab = "part1";
      },
      returnPart1() {
        this.tab = "part1";
      },
      goToPart2() {
        this.tab = "part2";
      },
      returnPart2() {
        this.tab = "part2";
      },
      goToPart3() {
        this.tab = "part3";
      },
      returnPart3() {
        this.tab = "part3";
      },

      goToEsatCard() {
        this.tab = "esat_card";
      },
      // returnEsatCard() {
      //   this.tab = "esat_card";
      // },

      disclosure: true,
      privacyNote: false,
      showPart1: false,
      showPart2: false,
      showPart3: false,
      showPrint: false,
      // esatCard: false,
      saveInfos: true,
      updateInfos: false,
      positionItems: [
        "Teacher I",
        "Teacher II",
        "Teacher III",
        "SPET I",
        "SPET II",
        "SPET III",
        "SPET IV",
        "SPET V",
        "Instructor I",
        "Instructor II",
        "Special Science Teacher I",
        "Special Science Teacher II",
        "Special Science Teacher III",
        "Special Science Teacher IV",
        "Special Science Teacher v",
        "Master Teacher I",
        "Master Teacher II",
        "Master Teacher III",
        "Master Teacher IV",
      ],
      statusItems: [
        "Regular Permanent",
        "Provisional",
        "Substitute",
        "Contractual",
      ],
      ageitems: [
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
      yearsItems: ["0-3 years", "4-10 years", "More than 10 years"],
      highestDegreeItems: [
        "Bachelor`s Degree",
        "Master`s Degree",
        "Doctorate Degree",
      ],
      levelTaughtItems: [
        "Grade 7",
        "Grade 8",
        "Grade 9",
        "Grade 10",
        "Grade 11",
        "Grade 12",
      ],
      gLevelTaughtItems: [
        "Grade 7",
        "Grade 8",
        "Grade 9",
        "Grade 10",
        "Grade 11",
        "Grade 12",
      ],
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
      divisionItems: [
        "Bohol",
        "Cebu",
        "Negros Oriental",
        "Siquijor",
        "Bais City",
        "Bayawan City",
        "Bogo City",
        "Carcar City",
        "Cebu City",
        "Danao City",
        "Dumaguete City",
        "Guihulngan City",
        "Lapu-Lapu City",
        "Mandaue City",
        "Naga City",
        "Tagbilaran City",
        "Talisay City",
        "Tanjay City",
        "Toledo City",
      ],
      schoolTypeItems: ["Urban", "Rural"],
      schoolSizeItems: ["Small", "Medium", "Large"],
      classificationItems: [
        "Community-based Learning Center",
        "Grade 11-12",
        "Grade 7-10; Grade 11-12",
        "Grade 7-10",
        "Grade 1-6; Grade 7-10; Grade 11-12",
        "Grade 1-6; Grade 11-12",
        "Grade 1-6; Grade 7-10",
        "Grade 1-6",
        "Kindergarten; Grade 11-12",
        "Kindergarten; Grade 7-10; Grade 11-12",
        "Kindergarten; Grade 7-10",
        "Kinder to Grade 12 attached to Tertiary",
        "Kinder to Grade 10 attached to Tertiary",
        "Kinder to Grade 6; Grade 11-12",
        "Kinder to Grade 12",
        "Kinder to Grade 10",
        "Kinder to Grade 6",
        "Kindergarten",
      ],

      employeeName: "",
      employeeId: "",
      position: "",
      employmentStatus: "",
      employeeAge: "",
      employeeSex: "",

      yearsInTeaching: "",
      highestDegreeObtained: "",
      specifiedHighestDegreeObtained: "",
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
      TLE_HE_TVL: "",
      selected: "",
      otherSpecialized: "",

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
      selected1: "",
      otherSubTaught: "",

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

      selfManagement1: "",
      selfManagement2: "",
      selfManagement3: "",
      selfManagement4: "",
      selfManagement5: "",

      professionalAndEthics1: "",
      professionalAndEthics2: "",
      professionalAndEthics3: "",
      professionalAndEthics4: "",
      professionalAndEthics5: "",

      resultsFocus1: "",
      resultsFocus2: "",
      resultsFocus3: "",
      resultsFocus4: "",
      resultsFocus5: "",

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
      esatDemographicProfile: [],
      coreBehavioralCompetencies: [],
      functionalObjectives: [],
    };
  },
  created() {
    // if (
    //   this.esatDemographicProfile.length == 0 &&
    //   this.coreBehavioralCompetencies.length == 0 &&
    //   this.functionalObjectives.length == 0
    // ) {
    //   this.tab = "subscribe";
    // } else {
    this.retrieveEsat();
    //   this.tab = "esat_card";
    //   this.esatCard = true;
    // }
  },

  methods: {
    async retrieveEsat() {
      const returnedData = await this.$store.dispatch("retrieveEsatInfoById");

      this.esatDemographicProfile = [];
      this.coreBehavioralCompetencies = [];
      this.functionalObjectives = [];

      for (let value of returnedData.data[0][0].esatDemographicProfile) {
        this.esatDemographicProfile.push(value);
      }

      for (let core of returnedData.data[1][0].esatCoreBehavioralCompetencies) {
        this.coreBehavioralCompetencies.push(core);
      }

      for (let func of returnedData.data[2][0].esatFunctionalObjectives) {
        this.functionalObjectives.push(func);
      }
    },
    finalizeEsat: async function () {
      (this.tab = "esat_card"), (this.esatCard = true);
      const employeeName = this.employeeName;
      const employeeId = this.employeeId;
      const position = this.position;
      const employmentStatus = this.employmentStatus;
      const employeeAge = this.employeeAge;
      const employeeSex = this.employeeSex;

      const yearsInTeaching = this.yearsInTeaching;
      const highestDegreeObtained = this.highestDegreeObtained;
      const specifiedHighestDegreeObtained = this.highestDegreeObtained;
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
      const openComments = this.openComments;
      //  const highestDegreeObtained = this.highestDegreeObtained;
      const english = this.english == null ? "" : this.english;
      const filipino = this.filipino == null ? "" : this.filipino;
      const mathematics = this.mathematics == null ? "" : this.mathematics;
      const generalScience =
        this.generalScience == null ? "" : this.generalScience;
      const biology = this.biology == null ? "" : this.biology;
      const chemistry = this.chemistry == null ? "" : this.chemistry;
      const physics = this.physics == null ? "" : this.physics;
      const socialScience =
        this.socialScience == null ? "" : this.socialScience;
      const earlyChildhoodEducation =
        this.earlyChildhoodEducation == null
          ? ""
          : this.earlyChildhoodEducation;
      const valuesEducation =
        this.valuesEducation == null ? "" : this.valuesEducation;
      const sped = this.sped == null ? "" : this.sped;
      const music = this.music == null ? "" : this.music;
      const arts = this.arts == null ? "" : this.arts;
      const physicalEducation =
        this.physicalEducation == null ? "" : this.physicalEducation;
      const health = this.health == null ? "" : this.health;
      const TLE_HE_TVL = this.TLE_HE_TVL == null ? "" : this.TLE_HE_TVL;
      const selected = this.selected;
      const otherSpecializedSub =
        this.otherSpecialized == null ? "" : this.otherSpecialized;

      let specifyAreaofSpecialization = "";
      let specialization = [
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
        TLE_HE_TVL,
        otherSpecializedSub,
      ];

      for (let sub of specialization) {
        if (sub == "") {
          continue;
        } else {
          specifyAreaofSpecialization += sub + ", ";
        }
      }

      let specializeSplitLen =
        specifyAreaofSpecialization.split(",").length - 1;
      let specializeSubSplit = specifyAreaofSpecialization.split(
        ",",
        specializeSplitLen
      );
      let specializeSubSplitJoin = specializeSubSplit.join();
      specifyAreaofSpecialization = specializeSubSplitJoin;

      const MotherTongue = this.MotherTongue == null ? "" : this.MotherTongue;
      const Filipino = this.Filipino == null ? "" : this.Filipino;
      const English = this.English == null ? "" : this.English;
      const Mathematics = this.Mathematics == null ? "" : this.Mathematics;
      const Science = this.Science == null ? "" : this.Science;
      const AralingPanlipunan =
        this.AralingPanlipunan == null ? "" : this.AralingPanlipunan;
      const EdukasyonSaPagpapakatao =
        this.EdukasyonSaPagpapakatao == null
          ? ""
          : this.EdukasyonSaPagpapakatao;
      const Mapeh = this.Mapeh == null ? "" : this.Mapeh;
      const TLE_HE = this.TLE_HE == null ? "" : this.TLE_HE;
      const EPP_LE_HE = this.EPP_LE_HE == null ? "" : this.EPP_LE_HE;
      const specialPrograms =
        this.specialPrograms == null ? "" : this.specialPrograms;
      const selected1 = this.selected1;
      const otherSubjectTaught =
        this.otherSubTaught == null ? "" : this.otherSubTaught;

      let specifySubjectsTaught = "";
      let subjectTaught = [
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
        otherSubjectTaught,
      ];

      for (let subTaught of subjectTaught) {
        if (subTaught == "") {
          continue;
        } else {
          specifySubjectsTaught += subTaught + ",";
        }
      }

      let splitSpecifiedSubLen = specifySubjectsTaught.split(",").length - 1;
      let specifiedSubSplit = specifySubjectsTaught.split(
        ",",
        splitSpecifiedSubLen
      );
      let specifiedSubSplitJoin = specifiedSubSplit.join();
      specifySubjectsTaught = specifiedSubSplitJoin;

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

      const selfManagement1 = this.selfManagement1;
      const selfManagement2 = this.selfManagement2;
      const selfManagement3 = this.selfManagement3;
      const selfManagement4 = this.selfManagement4;
      const selfManagement5 = this.selfManagement5;

      const professionalAndEthics1 = this.professionalAndEthics1;
      const professionalAndEthics2 = this.professionalAndEthics2;
      const professionalAndEthics3 = this.professionalAndEthics3;
      const professionalAndEthics4 = this.professionalAndEthics4;
      const professionalAndEthics5 = this.professionalAndEthics5;

      const resultsFocus1 = this.resultsFocus1;
      const resultsFocus2 = this.resultsFocus2;
      const resultsFocus3 = this.resultsFocus3;
      const resultsFocus4 = this.resultsFocus4;
      const resultsFocus5 = this.resultsFocus5;

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

      const userId = 1;
      const functionalObjectives = [
        {
          userID: userId,
          objectiveNo: "1.1",
          capability: capability1,
          priority: development1,
        },
        {
          userID: userId,
          objectiveNo: "1.2",
          capability: capability2,
          priority: development2,
        },
        {
          userID: userId,
          objectiveNo: "1.3",
          capability: capability3,
          priority: development3,
        },
        {
          userID: userId,
          objectiveNo: "2.1",
          capability: capability4,
          priority: development4,
        },
        {
          userID: userId,
          objectiveNo: "2.2",
          capability: capability5,
          priority: development5,
        },
        {
          userID: userId,
          objectiveNo: "2.3",
          capability: capability6,
          priority: development6,
        },
        {
          userID: userId,
          objectiveNo: "3.1",
          capability: capability7,
          priority: development7,
        },
        {
          userID: userId,
          objectiveNo: "3.2",
          capability: capability8,
          priority: development8,
        },
        {
          userID: userId,
          objectiveNo: "4.1",
          capability: capability9,
          priority: development9,
        },
        {
          userID: userId,
          objectiveNo: "4.2",
          capability: capability10,
          priority: development10,
        },
        {
          userID: userId,
          objectiveNo: "4.3",
          capability: capability11,
          priority: development11,
        },
        {
          userID: userId,
          objectiveNo: "5.1",
          capability: capability12,
          priority: development12,
        },
      ];
      const coreBehavioralCompetencies = [
        {
          userID: userId,
          objectiveNo: "1.1",
          value: selfManagement1,
        },
        {
          userID: userId,
          objectiveNo: "1.2",
          value: selfManagement2,
        },
        {
          userID: userId,
          objectiveNo: "1.3",
          value: selfManagement3,
        },
        {
          userID: userId,
          objectiveNo: "1.4",
          value: selfManagement4,
        },
        {
          userID: userId,
          objectiveNo: "1.5",
          value: selfManagement5,
        },
        {
          userID: userId,
          objectiveNo: "2.1",
          value: professionalAndEthics1,
        },
        {
          userID: userId,
          objectiveNo: "2.2",
          value: professionalAndEthics2,
        },
        {
          userID: userId,
          objectiveNo: "2.3",
          value: professionalAndEthics3,
        },
        {
          userID: userId,
          objectiveNo: "2.4",
          value: professionalAndEthics4,
        },
        {
          userID: userId,
          objectiveNo: "2.5",
          value: professionalAndEthics5,
        },
        {
          userID: userId,
          objectiveNo: "3.1",
          value: resultsFocus1,
        },
        {
          userID: userId,
          objectiveNo: "3.2",
          value: resultsFocus2,
        },
        {
          userID: userId,
          objectiveNo: "3.3",
          value: resultsFocus3,
        },
        {
          userID: userId,
          objectiveNo: "3.4",
          value: resultsFocus4,
        },
        {
          userID: userId,
          objectiveNo: "3.5",
          value: resultsFocus5,
        },
        {
          userID: userId,
          objectiveNo: "4.1",
          value: teamwork1,
        },
        {
          userID: userId,
          objectiveNo: "4.2",
          value: teamwork2,
        },
        {
          userID: userId,
          objectiveNo: "4.3",
          value: teamwork3,
        },
        {
          userID: userId,
          objectiveNo: "4.4",
          value: teamwork4,
        },
        {
          userID: userId,
          objectiveNo: "4.5",
          value: teamwork5,
        },
        {
          userID: userId,
          objectiveNo: "5.1",
          value: serviceOrientation1,
        },
        {
          userID: userId,
          objectiveNo: "5.2",
          value: serviceOrientation2,
        },
        {
          userID: userId,
          objectiveNo: "5.3",
          value: serviceOrientation3,
        },
        {
          userID: userId,
          objectiveNo: "5.4",
          value: serviceOrientation4,
        },
        {
          userID: userId,
          objectiveNo: "5.5",
          value: serviceOrientation5,
        },
        {
          userID: userId,
          objectiveNo: "6.1",
          value: innovation1,
        },
        {
          userID: userId,
          objectiveNo: "6.2",
          value: innovation2,
        },
        {
          userID: userId,
          objectiveNo: "6.3",
          value: innovation3,
        },
        {
          userID: userId,
          objectiveNo: "6.4",
          value: innovation4,
        },
        {
          userID: userId,
          objectiveNo: "6.5",
          value: innovation5,
        },
      ];
      const data = {
        userId,
        employeeName,
        employeeId,
        position,
        employmentStatus,
        employeeAge,
        employeeSex,

        yearsInTeaching,
        highestDegreeObtained,
        specifiedHighestDegreeObtained,
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
        openComments,
        functionalObjectives,
        coreBehavioralCompetencies,

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
        TLE_HE_TVL,
        selected,
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
        selected1,
        specifySubjectsTaught,
        personalComments,
      };
      const returnedData = await this.$store.dispatch("createEsat", data);
      // const returnedData = await this.post("createEsat", data);
      console.log(returnedData);
      if (returnedData == "success") {
        console.log("success");
      }
    },
    editInfo: async function () {
      this.tab = "part1";
      this.showPrint = false;
      this.showPart1 = true;
      this.updateInfos = true;
      this.saveInfos = false;
      // console.log("Edit");

      (this.employeeName = this.esatDemographicProfile[0].name_of_employee),
        (this.employeeId = this.esatDemographicProfile[0].employee_id),
        (this.position = this.esatDemographicProfile[0].position),
        (this.employmentStatus =
          this.esatDemographicProfile[0].employment_status),
        (this.employeeAge = this.esatDemographicProfile[0].age),
        (this.employeeSex = this.esatDemographicProfile[0].sex),
        (this.yearsInTeaching =
          this.esatDemographicProfile[0].years_in_teaching),
        (this.highestDegreeObtained =
          this.esatDemographicProfile[0].highest_degree_obtained),
        (this.specifiedHighestDegreeObtained =
          this.esatDemographicProfile[0].specified_highest_degree_obtained),
        (this.region = this.esatDemographicProfile[0].region),
        (this.division = this.esatDemographicProfile[0].division),
        (this.employeeMunicipality =
          this.esatDemographicProfile[0].employee_Municipality),
        (this.schoolId = this.esatDemographicProfile[0].school_id),
        (this.schoolName = this.esatDemographicProfile[0].school_name),
        (this.schoolType = this.esatDemographicProfile[0].school_type),
        (this.schoolSize = this.esatDemographicProfile[0].school_size),
        (this.curricularClassification =
          this.esatDemographicProfile[0].curricular_classification),
        (this.gradeLevelTaught =
          this.esatDemographicProfile[0].grade_level_taught),
        (this.levelTaught = this.esatDemographicProfile[0].level_taught),
        (this.personalComments =
          this.esatDemographicProfile[0].personal_comments);

      let splitSpecializedLen =
        this.esatDemographicProfile[0].area_of_specialization.split(",").length;
      let splitSpecialize =
        this.esatDemographicProfile[0].area_of_specialization.split(
          ", ",
          splitSpecializedLen
        );

      for (let sub in splitSpecialize) {
        splitSpecialize[sub] == "English"
          ? (this.english = splitSpecialize[sub])
          : splitSpecialize[sub] == "Filipino"
          ? (this.filipino = splitSpecialize[sub])
          : splitSpecialize[sub] == "Mathematics"
          ? (this.mathematics = splitSpecialize[sub])
          : splitSpecialize[sub] == "General Science"
          ? (this.generalScience = splitSpecialize[sub])
          : splitSpecialize[sub] == "Biology"
          ? (this.biology = splitSpecialize[sub])
          : splitSpecialize[sub] == "Chemistry"
          ? (this.chemistry = splitSpecialize[sub])
          : splitSpecialize[sub] == "Physics"
          ? (this.physics = splitSpecialize[sub])
          : splitSpecialize[sub] == "Social Science"
          ? (this.socialScience = splitSpecialize[sub])
          : splitSpecialize[sub] == "Early Childhood Education"
          ? (this.earlyChildhoodEducation = splitSpecialize[sub])
          : splitSpecialize[sub] == "Values Education"
          ? (this.valuesEducation = splitSpecialize[sub])
          : splitSpecialize[sub] == "SPED"
          ? (this.sped = splitSpecialize[sub])
          : splitSpecialize[sub] == "Music"
          ? (this.music = splitSpecialize[sub])
          : splitSpecialize[sub] == "Arts"
          ? (this.arts = splitSpecialize[sub])
          : splitSpecialize[sub] == "Physical Education"
          ? (this.physicalEducation = splitSpecialize[sub])
          : splitSpecialize[sub] == "Health"
          ? (this.health = splitSpecialize[sub])
          : splitSpecialize[sub] == "TLE/HE/TVL"
          ? (this.TLE_HE_TVL = splitSpecialize[sub])
          : (this.otherSpecialized = splitSpecialize[sub]),
          (this.selected = "Others");
      }

      let splitSubTaughtLen =
        this.esatDemographicProfile[0].subjects_taught.split(",").length;
      let splitSubTaught = this.esatDemographicProfile[0].subjects_taught.split(
        ",",
        splitSubTaughtLen
      );

      for (let subTaught in splitSubTaught) {
        splitSubTaught[subTaught] == "Mother Tongue"
          ? (this.MotherTongue = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "Filipino"
          ? (this.Filipino = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "English"
          ? (this.English = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "Mathematics"
          ? (this.Mathematics = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "Science"
          ? (this.Science = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "Araling Panlipunan"
          ? (this.AralingPanlipunan = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "Edukasyoon sa Pagpapakatao"
          ? (this.EdukasyonSaPagpapakatao = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "MAPEH"
          ? (this.Mapeh = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "TLE/HE"
          ? (this.TLE_HE = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "EPP-LE/HE"
          ? (this.EPP_LE_HE = splitSubTaught[subTaught])
          : splitSubTaught[subTaught] == "Special Programs"
          ? (this.specialPrograms = splitSubTaught[subTaught])
          : (this.otherSubTaught = splitSubTaught[subTaught]),
          (this.selected1 = "Others");
      }

      this.capability1 = this.functionalObjectives[0].level_of_capability;
      this.development1 = this.functionalObjectives[0].priority_for_development;

      this.capability2 = this.functionalObjectives[1].level_of_capability;
      this.development2 = this.functionalObjectives[1].priority_for_development;

      this.capability3 = this.functionalObjectives[2].level_of_capability;
      this.development3 = this.functionalObjectives[2].priority_for_development;

      this.capability4 = this.functionalObjectives[3].level_of_capability;
      this.development4 = this.functionalObjectives[3].priority_for_development;

      this.capability5 = this.functionalObjectives[4].level_of_capability;
      this.development5 = this.functionalObjectives[4].priority_for_development;

      this.capability6 = this.functionalObjectives[5].level_of_capability;
      this.development6 = this.functionalObjectives[5].priority_for_development;

      this.capability7 = this.functionalObjectives[6].level_of_capability;
      this.development7 = this.functionalObjectives[6].priority_for_development;

      this.capability8 = this.functionalObjectives[7].level_of_capability;
      this.development8 = this.functionalObjectives[7].priority_for_development;

      this.capability9 = this.functionalObjectives[8].level_of_capability;
      this.development9 = this.functionalObjectives[8].priority_for_development;

      this.capability10 = this.functionalObjectives[9].level_of_capability;
      this.development10 =
        this.functionalObjectives[9].priority_for_development;

      this.capability11 = this.functionalObjectives[10].level_of_capability;
      this.development11 =
        this.functionalObjectives[10].priority_for_development;

      this.capability12 = this.functionalObjectives[11].level_of_capability;
      this.development12 =
        this.functionalObjectives[11].priority_for_development;

      this.selfManagement1 = this.coreBehavioralCompetencies[0].check_status;
      this.selfManagement2 = this.coreBehavioralCompetencies[1].check_status;
      this.selfManagement3 = this.coreBehavioralCompetencies[2].check_status;
      this.selfManagement4 = this.coreBehavioralCompetencies[3].check_status;
      this.selfManagement5 = this.coreBehavioralCompetencies[4].check_status;

      this.professionalAndEthics1 =
        this.coreBehavioralCompetencies[5].check_status;
      this.professionalAndEthics2 =
        this.coreBehavioralCompetencies[6].check_status;
      this.professionalAndEthics3 =
        this.coreBehavioralCompetencies[7].check_status;
      this.professionalAndEthics4 =
        this.coreBehavioralCompetencies[8].check_status;
      this.professionalAndEthics5 =
        this.coreBehavioralCompetencies[9].check_status;

      this.resultsFocus1 = this.coreBehavioralCompetencies[10].check_status;
      this.resultsFocus2 = this.coreBehavioralCompetencies[11].check_status;
      this.resultsFocus3 = this.coreBehavioralCompetencies[12].check_status;
      this.resultsFocus4 = this.coreBehavioralCompetencies[13].check_status;
      this.resultsFocus5 = this.coreBehavioralCompetencies[14].check_status;

      this.teamwork1 = this.coreBehavioralCompetencies[15].check_status;
      this.teamwork2 = this.coreBehavioralCompetencies[16].check_status;
      this.teamwork3 = this.coreBehavioralCompetencies[17].check_status;
      this.teamwork4 = this.coreBehavioralCompetencies[18].check_status;
      this.teamwork5 = this.coreBehavioralCompetencies[19].check_status;

      this.serviceOrientation1 =
        this.coreBehavioralCompetencies[20].check_status;
      this.serviceOrientation2 =
        this.coreBehavioralCompetencies[21].check_status;
      this.serviceOrientation3 =
        this.coreBehavioralCompetencies[22].check_status;
      this.serviceOrientation4 =
        this.coreBehavioralCompetencies[23].check_status;
      this.serviceOrientation5 =
        this.coreBehavioralCompetencies[24].check_status;

      this.innovation1 = this.coreBehavioralCompetencies[25].check_status;
      this.innovation2 = this.coreBehavioralCompetencies[26].check_status;
      this.innovation3 = this.coreBehavioralCompetencies[27].check_status;
      this.innovation4 = this.coreBehavioralCompetencies[28].check_status;
      this.innovation5 = this.coreBehavioralCompetencies[29].check_status;
    },
    updateInfo: async function () {
      // console.log("Update")((this.tab = "esat_card")), (this.esatCard = true);
      const employeeName = this.employeeName;
      console.log(employeeName);
      const employeeId = this.employeeId;
      const position = this.position;
      const employmentStatus = this.employmentStatus;
      const employeeAge = this.employeeAge;
      const employeeSex = this.employeeSex;

      const yearsInTeaching = this.yearsInTeaching;
      const highestDegreeObtained = this.highestDegreeObtained;
      const specifiedHighestDegreeObtained = this.highestDegreeObtained;
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
      const openComments = this.openComments;
      //  const highestDegreeObtained = this.highestDegreeObtained;
      const english = this.english == null ? "" : this.english;
      const filipino = this.filipino == null ? "" : this.filipino;
      const mathematics = this.mathematics == null ? "" : this.mathematics;
      const generalScience =
        this.generalScience == null ? "" : this.generalScience;
      const biology = this.biology == null ? "" : this.biology;
      const chemistry = this.chemistry == null ? "" : this.chemistry;
      const physics = this.physics == null ? "" : this.physics;
      const socialScience =
        this.socialScience == null ? "" : this.socialScience;
      const earlyChildhoodEducation =
        this.earlyChildhoodEducation == null
          ? ""
          : this.earlyChildhoodEducation;
      const valuesEducation =
        this.valuesEducation == null ? "" : this.valuesEducation;
      const sped = this.sped == null ? "" : this.sped;
      const music = this.music == null ? "" : this.music;
      const arts = this.arts == null ? "" : this.arts;
      const physicalEducation =
        this.physicalEducation == null ? "" : this.physicalEducation;
      const health = this.health == null ? "" : this.health;
      const TLE_HE_TVL = this.TLE_HE_TVL == null ? "" : this.TLE_HE_TVL;
      const selected = this.selected;
      const otherSpecializedSub =
        this.otherSpecialized == null ? "" : this.otherSpecialized;

      let specifyAreaofSpecialization = "";
      let specialization = [
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
        TLE_HE_TVL,
        otherSpecializedSub,
      ];

      for (let sub of specialization) {
        if (sub == "") {
          continue;
        } else {
          specifyAreaofSpecialization += sub + ", ";
        }
      }

      let specializeSplitLen =
        specifyAreaofSpecialization.split(",").length - 1;
      let specializeSubSplit = specifyAreaofSpecialization.split(
        ",",
        specializeSplitLen
      );
      let specializeSubSplitJoin = specializeSubSplit.join();
      specifyAreaofSpecialization = specializeSubSplitJoin;

      const MotherTongue = this.MotherTongue == null ? "" : this.MotherTongue;
      const Filipino = this.Filipino == null ? "" : this.Filipino;
      const English = this.English == null ? "" : this.English;
      const Mathematics = this.Mathematics == null ? "" : this.Mathematics;
      const Science = this.Science == null ? "" : this.Science;
      const AralingPanlipunan =
        this.AralingPanlipunan == null ? "" : this.AralingPanlipunan;
      const EdukasyonSaPagpapakatao =
        this.EdukasyonSaPagpapakatao == null
          ? ""
          : this.EdukasyonSaPagpapakatao;
      const Mapeh = this.Mapeh == null ? "" : this.Mapeh;
      const TLE_HE = this.TLE_HE == null ? "" : this.TLE_HE;
      const EPP_LE_HE = this.EPP_LE_HE == null ? "" : this.EPP_LE_HE;
      const specialPrograms =
        this.specialPrograms == null ? "" : this.specialPrograms;
      const selected1 = this.selected1;
      const otherSubjectTaught =
        this.otherSubTaught == null ? "" : this.otherSubTaught;

      let specifySubjectsTaught = "";
      let subjectTaught = [
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
        otherSubjectTaught,
      ];

      for (let subTaught of subjectTaught) {
        if (subTaught == "") {
          continue;
        } else {
          specifySubjectsTaught += subTaught + ",";
        }
      }

      let splitSpecifiedSubLen = specifySubjectsTaught.split(",").length - 1;
      let specifiedSubSplit = specifySubjectsTaught.split(
        ",",
        splitSpecifiedSubLen
      );
      let specifiedSubSplitJoin = specifiedSubSplit.join();
      specifySubjectsTaught = specifiedSubSplitJoin;

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

      const selfManagement1 = this.selfManagement1;
      const selfManagement2 = this.selfManagement2;
      const selfManagement3 = this.selfManagement3;
      const selfManagement4 = this.selfManagement4;
      const selfManagement5 = this.selfManagement5;

      const professionalAndEthics1 = this.professionalAndEthics1;
      const professionalAndEthics2 = this.professionalAndEthics2;
      const professionalAndEthics3 = this.professionalAndEthics3;
      const professionalAndEthics4 = this.professionalAndEthics4;
      const professionalAndEthics5 = this.professionalAndEthics5;

      const resultsFocus1 = this.resultsFocus1;
      const resultsFocus2 = this.resultsFocus2;
      const resultsFocus3 = this.resultsFocus3;
      const resultsFocus4 = this.resultsFocus4;
      const resultsFocus5 = this.resultsFocus5;

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

      const userId = 1;
      const functionalObjectives = [
        {
          userID: userId,
          objectiveNo: "1.1",
          capability: capability1,
          priority: development1,
        },
        {
          userID: userId,
          objectiveNo: "1.2",
          capability: capability2,
          priority: development2,
        },
        {
          userID: userId,
          objectiveNo: "1.3",
          capability: capability3,
          priority: development3,
        },
        {
          userID: userId,
          objectiveNo: "2.1",
          capability: capability4,
          priority: development4,
        },
        {
          userID: userId,
          objectiveNo: "2.2",
          capability: capability5,
          priority: development5,
        },
        {
          userID: userId,
          objectiveNo: "2.3",
          capability: capability6,
          priority: development6,
        },
        {
          userID: userId,
          objectiveNo: "3.1",
          capability: capability7,
          priority: development7,
        },
        {
          userID: userId,
          objectiveNo: "3.2",
          capability: capability8,
          priority: development8,
        },
        {
          userID: userId,
          objectiveNo: "4.1",
          capability: capability9,
          priority: development9,
        },
        {
          userID: userId,
          objectiveNo: "4.2",
          capability: capability10,
          priority: development10,
        },
        {
          userID: userId,
          objectiveNo: "4.3",
          capability: capability11,
          priority: development11,
        },
        {
          userID: userId,
          objectiveNo: "5.1",
          capability: capability12,
          priority: development12,
        },
      ];
      const coreBehavioralCompetencies = [
        {
          userID: userId,
          objectiveNo: "1.1",
          value: selfManagement1,
        },
        {
          userID: userId,
          objectiveNo: "1.2",
          value: selfManagement2,
        },
        {
          userID: userId,
          objectiveNo: "1.3",
          value: selfManagement3,
        },
        {
          userID: userId,
          objectiveNo: "1.4",
          value: selfManagement4,
        },
        {
          userID: userId,
          objectiveNo: "1.5",
          value: selfManagement5,
        },
        {
          userID: userId,
          objectiveNo: "2.1",
          value: professionalAndEthics1,
        },
        {
          userID: userId,
          objectiveNo: "2.2",
          value: professionalAndEthics2,
        },
        {
          userID: userId,
          objectiveNo: "2.3",
          value: professionalAndEthics3,
        },
        {
          userID: userId,
          objectiveNo: "2.4",
          value: professionalAndEthics4,
        },
        {
          userID: userId,
          objectiveNo: "2.5",
          value: professionalAndEthics5,
        },
        {
          userID: userId,
          objectiveNo: "3.1",
          value: resultsFocus1,
        },
        {
          userID: userId,
          objectiveNo: "3.2",
          value: resultsFocus2,
        },
        {
          userID: userId,
          objectiveNo: "3.3",
          value: resultsFocus3,
        },
        {
          userID: userId,
          objectiveNo: "3.4",
          value: resultsFocus4,
        },
        {
          userID: userId,
          objectiveNo: "3.5",
          value: resultsFocus5,
        },
        {
          userID: userId,
          objectiveNo: "4.1",
          value: teamwork1,
        },
        {
          userID: userId,
          objectiveNo: "4.2",
          value: teamwork2,
        },
        {
          userID: userId,
          objectiveNo: "4.3",
          value: teamwork3,
        },
        {
          userID: userId,
          objectiveNo: "4.4",
          value: teamwork4,
        },
        {
          userID: userId,
          objectiveNo: "4.5",
          value: teamwork5,
        },
        {
          userID: userId,
          objectiveNo: "5.1",
          value: serviceOrientation1,
        },
        {
          userID: userId,
          objectiveNo: "5.2",
          value: serviceOrientation2,
        },
        {
          userID: userId,
          objectiveNo: "5.3",
          value: serviceOrientation3,
        },
        {
          userID: userId,
          objectiveNo: "5.4",
          value: serviceOrientation4,
        },
        {
          userID: userId,
          objectiveNo: "5.5",
          value: serviceOrientation5,
        },
        {
          userID: userId,
          objectiveNo: "6.1",
          value: innovation1,
        },
        {
          userID: userId,
          objectiveNo: "6.2",
          value: innovation2,
        },
        {
          userID: userId,
          objectiveNo: "6.3",
          value: innovation3,
        },
        {
          userID: userId,
          objectiveNo: "6.4",
          value: innovation4,
        },
        {
          userID: userId,
          objectiveNo: "6.5",
          value: innovation5,
        },
      ];
      const data = {
        userId,
        employeeName,
        employeeId,
        position,
        employmentStatus,
        employeeAge,
        employeeSex,

        yearsInTeaching,
        highestDegreeObtained,
        specifiedHighestDegreeObtained,
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
        openComments,
        functionalObjectives,
        coreBehavioralCompetencies,

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
        TLE_HE_TVL,
        selected,
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
        selected1,
        specifySubjectsTaught,
        personalComments,
      };
      const returnedData = await this.$store.dispatch("updateEsatInfo", data);
      // const returnedData = await this.post("createEsat", data);
      console.log(returnedData);
      if (returnedData.statusText == "OK") {
        console.log("success");
      }
    },
    viewPrint: async function () {
      if (this.coreBehavioralCompetencies.length == 0) {
        alert("No Records Yet!");
        this.tab = "subscribe";
        this.showPrint = false;
      } else {
        this.tab = "show_print";
        this.showPrint = true;
      }
    },
  },
};
</script>
<style scope src="../assets/css/esat.css"></style>
