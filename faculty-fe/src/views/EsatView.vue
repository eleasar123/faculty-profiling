<template>
  <v-container>
    <v-tabs transparent background-color="white" centered dark>
      <v-btn v-if="createBtn" class="mr-5 float-right" @click="createEsat()"
        >Create</v-btn
      >
      <v-btn v-if="clickEsat" class="mr-5 float-right" @click="goToEsatCard()"
        >Esat Card</v-btn
      >
    </v-tabs>

    <v-tabs-items v-model="tab">
      <v-tab-item :key="1" value="subscribe" v-if="disclosure">
        <v-card flat>
          <p class="text-center">
            <v-alert elevation="24" outlined>
              <h1 id="disclosureText">Disclosure</h1>
            </v-alert>
          </p>

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
                Please accomplish this tool individually and submit the file to
                copy to the School Head or Department Head for the school-wide
                consolidation. Please print a copy of the result for the
                preparation of your IPCRF-DP.

                <v-btn
                  class="float-right mt-5 mb-4 font-weight-black"
                  @click="
                    goToPrivacy(), (disclosure = false), (privacyNote = true)
                  "
                >
                  <h3>START</h3>
                </v-btn>
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
                I Authorize the personnel of Department of Education to collect,
                process, retain, and dispose my personal information in
                accordance with the Data Privacy Act of 2012.
              </p>
            </v-card-text>
          </v-container>
          <v-btn
            class="float-left mt-5 mb-5 ml-5 font-weight-black"
            @click="
              returnDisclosure(), (privacyNote = false), (disclosure = true)
            "
          >
            <h3>DISAGREE</h3>
          </v-btn>

          <v-btn
            class="float-right mt-5 mb-5 mr-5 font-weight-black"
            @click="
              goToPart1(),
                (disclosure = false),
                (privacyNote = false),
                (showPart1 = true)
            "
          >
            <h3>AGREE</h3>
          </v-btn>
        </v-container>
      </v-tab-item>

      <v-tab-item :key="2" value="part1" v-if="showPart1">
        <v-container id="alert" v-if="saveData">
          <v-alert id="alertMsg" elevation="24" type="error" dismissible>
            <h1 id="disclosureText">Unsuccessful!</h1>
          </v-alert>
        </v-container>
        <v-form ref="demo" v-model="valid" lazy-validation>
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
                <td>Name of Employee: <span class="fieldRequire">*</span></td>
                <td>
                  <v-text-field
                    class="textField mt-5"
                    solo
                    dense
                    flat
                    :rules="demoRequired"
                    required
                    v-model="employeeName"
                  ></v-text-field>
                </td>
                <td rowspan="8"></td>

                <td>School Year: <span class="fieldRequire">*</span></td>
                <td>
                  <v-text-field
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    v-model="schoolYear"
                  ></v-text-field>
                </td>
                <td rowspan="8"></td>
                <td>Region: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    :items="regionItems"
                    v-model="region"
                  ></v-autocomplete>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Employee ID: <span class="fieldRequire">*</span></td>
                <td>
                  <v-text-field
                    :rules="demoRequired"
                    required
                    class="mt-6"
                    v-model="employeeId"
                    solo
                    dense
                  ></v-text-field>
                </td>
                <td>
                  Number of Years in Teaching:
                  <span class="fieldRequire">*</span>
                </td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    v-model="yearsInTeaching"
                    :items="yearsItems"
                  ></v-autocomplete>
                </td>

                <td>Division: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    :items="divisionItems"
                    v-model="division"
                  ></v-autocomplete>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Position: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    :items="positionItems"
                    solo
                    dense
                    class="mt-6"
                    v-model="position"
                  ></v-autocomplete>
                </td>
                <td rowspan="2">
                  Highest Degree Obtained: <span class="fieldRequire">*</span>
                </td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    v-model="highestDegreeObtained"
                    :items="highestDegreeItems"
                  ></v-autocomplete>
                </td>

                <td>
                  District/Municipality: <span class="fieldRequire">*</span>
                </td>
                <td>
                  <v-text-field
                    :rules="demoRequired"
                    required
                    v-model="employeeMunicipality"
                    class="mt-6"
                    solo
                    dense
                  ></v-text-field>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Employment Status: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    v-model="employmentStatus"
                    :items="statusItems"
                  ></v-autocomplete>
                </td>
                <td>
                  <v-text-field
                    :rules="demoRequired"
                    required
                    v-model="specifiedHighestDegreeObtained"
                    class="mt-6"
                    solo
                    dense
                  ></v-text-field>
                </td>

                <td>School ID: <span class="fieldRequire">*</span></td>
                <td>
                  <v-text-field
                    :rules="demoRequired"
                    required
                    v-model="schoolId"
                    class="mt-6"
                    solo
                    dense
                  ></v-text-field>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Age: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    :items="ageitems"
                    solo
                    dense
                    class="mt-6"
                    v-model="employeeAge"
                  ></v-autocomplete>
                </td>

                <td>Level Taught: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    v-model="levelTaught"
                    :items="levelTaughtItems"
                  ></v-autocomplete>
                </td>
                <td>School Name: <span class="fieldRequire">*</span></td>
                <td>
                  <v-text-field
                    :rules="demoRequired"
                    required
                    v-model="schoolName"
                    class="mt-6"
                    solo
                    dense
                  ></v-text-field>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>Sex: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    v-model="employeeSex"
                    :items="sexItems"
                  ></v-autocomplete>
                </td>

                <td>Grade Level taught: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    v-model="gradeLevelTaught"
                    :items="gLevelTaughtItems"
                  ></v-autocomplete>
                </td>
                <td>School Type: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    :items="schoolTypeItems"
                    v-model="schoolType"
                  ></v-autocomplete>
                </td>
              </tr>
              <tr class="infoDetails">
                <td colspan="6" rowspan="2"></td>
                <td>School Size: <span class="fieldRequire">*</span></td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    :items="schoolSizeItems"
                    v-model="schoolSize"
                  ></v-autocomplete>
                </td>
              </tr>
              <tr class="infoDetails">
                <td>
                  Curricular Classification: <span class="fieldRequire">*</span>
                </td>
                <td>
                  <v-autocomplete
                    :rules="demoRequired"
                    required
                    solo
                    dense
                    class="mt-6"
                    :items="classificationItems"
                    v-model="curricularClassification"
                  ></v-autocomplete>
                </td>
              </tr>
            </v-simple-table>

            <v-container class="mt-5">
              <v-row>
                <v-col>
                  <v-card
                    style="
                      background-color: rgb(211, 238, 158);
                      border: black 1px solid;
                    "
                    class="bgCard pa-2"
                    outlined
                    tile
                  >
                    <h4 class="text-center">AREA(S) OF SPECIALIZATION</h4>
                    <h5 class="text-center">
                      Please tick all the boxes that apply.
                    </h5>

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

                            <v-text-field
                              v-model="otherSpecialized"
                              label="If others, please specify"
                              solo
                              dense
                            ></v-text-field>
                          </v-col>
                          <v-col>
                            <!-- <v-container v-if="specialized" id="checkRequired">
                              <p style="font-size: 20px">
                                <v-alert elevation="24" type="error" dismissible
                                  ><h3>Select at least 1 subject!</h3></v-alert
                                >
                              </p>
                            </v-container> -->
                          </v-col>
                        </v-row>
                      </v-container>
                    </v-card-text>
                  </v-card>
                </v-col>

                <v-col order="12">
                  <v-card
                    class="pa-2"
                    outlined
                    tile
                    style="
                      background-color: rgb(211, 238, 158);
                      border: black 1px solid;
                    "
                  >
                    <h4 class="text-center">SUBJECT(S) TAUGHT</h4>
                    <h5 class="text-center">
                      Please tick all the boxes that appply.
                    </h5>

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

                            <v-text-field
                              v-model="otherSubTaught"
                              dense
                              label="If others, please specify"
                              solo
                            ></v-text-field>
                          </v-col>
                        </v-row>
                      </v-container>
                    </v-card-text>
                    <br />
                    <br /><br />
                    <!-- <v-container v-if="subs" id="checkRequired">
                      <p>
                        <v-alert elevation="24" type="error" dismissible
                          ><h3>Select at least 1 subject!</h3></v-alert
                        >
                      </p> </v-container> -->
                    <br /><br /><br />
                  </v-card>
                </v-col>
              </v-row>
              <v-row no-gutters>
                <v-col cols="12" sm="6" md="8"> </v-col>
                <v-col cols="4" md="4">
                  <v-btn
                    :disabled="!valid"
                    class="float-right mb-4 me-4 mt-5"
                    @click="goToPart2"
                    >NEXT</v-btn
                  >
                  <v-btn
                    v-if="editCancelBtn"
                    color="error"
                    class="float-right mb-4 me-4 mt-5"
                    @click="
                      returnPrivacyNote(),
                        (showPart1 = false),
                        (privacyNote = true),
                        (disclosure = false),
                        (specialized = false),
                        (subs = false)
                    "
                    >CANCEL</v-btn
                  >
                </v-col>
              </v-row>
            </v-container>
          </v-container>
        </v-form>
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

          <v-form ref="partII">
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
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability1"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development1"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
              </tr>
              <tr>
                <td>
                  1.2 Ensured the positive use of ICT to facilitate the teaching
                  and learning learning process. (PPST Indicator 1.3.2)
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability2"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development2"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
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
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability3"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td>
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development3"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
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
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability4"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development4"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
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
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability5"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development5"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
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
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability6"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development6"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
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
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability7"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development7"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
              </tr>
              <tr>
                <td>
                  3.2 Set achievable and appropriate learning outcomes that are
                  aligned with learning competencies. (PPST Indicator 4.2.2)
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability8"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development8"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
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
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability9"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development9"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
              </tr>
              <tr>
                <td>
                  4.2 Participates in professional networks to share knowledge
                  and to enhance practice. (PPST Indicator 7.3.2)
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability10"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development10"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
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
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability11"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development11"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
              </tr>
            </v-simple-table>

            <!-- 5 -->
            <v-simple-table class="table">
              <tr>
                <td colspan="3" class="head">
                  <h2>PLUS FACTOR</h2>
                </td>
              </tr>
              <tr>
                <td>
                  5.1 Performed various related works/activities that contribute
                  to the teaching-learning process.
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="capability12"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
                <td class="radio">
                  <v-radio-group
                    id="radioBtn"
                    :rules="required"
                    v-model="development12"
                    row
                  >
                    <v-radio label="" value="Low"></v-radio>
                    <v-radio label="" value="Moderate"></v-radio>
                    <v-radio label="" value="High"></v-radio>
                    <v-radio label="" value="Very High"></v-radio>
                  </v-radio-group>
                </td>
              </tr>
            </v-simple-table>
          </v-form>
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
                <v-btn class="float-right mb-4 me-4 mt-5" @click="goToPart3()"
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
        <v-container v-if="part3Table" class="bgContainer mt-5">
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
              <v-form ref="partIII"></v-form>
              <v-simple-table class="table">
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="selfManagement1"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="selfManagement2"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>2</td>
                  <td>
                    Undertakes personal actions and behavior that are clear and
                    purposive and takes into account personal goals and values
                    congruent to that of the organization.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="selfManagement3"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="selfManagement4"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>4</td>
                  <td>
                    Prioritizes work tasks and schedules (through Gantt charts,
                    checklist, etc) achieve goals.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="selfManagement5"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>5</td>
                  <td>
                    Sets high quality, challenging, realistic goals for self and
                    others.
                  </td>
                </tr>
              </v-simple-table>

              <!-- 2 -->
              <h3>2.PROFESSIONALISM AND ETHICS</h3>

              <v-simple-table class="table">
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="professionalAndEthics1"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>1</td>
                  <td>
                    Demonstrates the values and behavior enshrined in the Norms
                    and Conduct and Ethical Standards for public officials and
                    employees. (RA 6713)
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="professionalAndEthics2"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="professionalAndEthics3"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>3</td>
                  <td>
                    Maintains a professional image: being trustworthy,
                    regularity of attendance and punctuality, good grooming and
                    communication.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="professionalAndEthics4"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>4</td>
                  <td>
                    Makes personal sacrifices to meet the organization’s needs.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="professionalAndEthics5"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>5</td>
                  <td>
                    Act with a sense of urgency and responsibility to meet the
                    organization’s needs, improve system and help others improve
                    their effectiveness.
                  </td>
                </tr>
              </v-simple-table>
              <!-- 3 -->
              <h3>3. RESULTS FOCUS</h3>
              <v-simple-table class="table">
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="resultsFocus1"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>1</td>
                  <td>
                    Achieves results with optimal use of time and resources most
                    of the time.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="resultsFocus2"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="resultsFocus3"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>3</td>
                  <td>
                    Delivers error-free outputs most of the time by conforming
                    to standard operating procedures correctly and consistently.
                    Able to produce very satisfactory quality work in terms of
                    usefulness/acceptability and completeness with no
                    supervision required.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="resultsFocus4"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>4</td>
                  <td>
                    Expresses the desire to do better and may express
                    frustration at waste or efficiency. May focus on new or more
                    precise ways of meeting goals set.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="resultsFocus5"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>5</td>
                  <td>
                    Makes specific changes in the system or in own work methods
                    to improve performance. Examples may include doing something
                    better,faster, at a lower cost, more efficiently, or
                    improving quality, customer satisfaction, morale, without
                    setting any specific goal.
                  </td>
                </tr>
              </v-simple-table>

              <!-- 4 -->

              <h3>4. TEAMWORK</h3>
              <v-simple-table class="table">
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="teamwork1"
                      hide-details
                      value="true"
                    ></v-checkbox>
                    <!-- <v-checkbox
                    :rules="required" v-model="teamwork1" hide-details value="true"></v-checkbox> -->
                  </td>
                  <td>1</td>
                  <td>Willingly does his/her share of responsibility.</td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="teamwork2"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>2</td>
                  <td>
                    Promotes collaboration and removes barriers to teamwork and
                    goal accomplishment across the organization.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="teamwork3"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>3</td>
                  <td>
                    Applies negotiation principles in arriving at win-win
                    agreements.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="teamwork4"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>4</td>
                  <td>Drives consensus and team ownership of decisions.</td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="teamwork5"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>5</td>
                  <td>
                    Works constructively and collaboratively with others and
                    across organizations to accomplish organizational goals and
                    objectives.
                  </td>
                </tr>
              </v-simple-table>

              <!-- 5 -->

              <h3>5. SERVICE ORIENTATION</h3>

              <v-simple-table class="table">
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="serviceOrientation1"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>1</td>
                  <td>
                    Can explain and articulate organizational directions, issues
                    and problems.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="serviceOrientation2"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="serviceOrientation3"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>3</td>
                  <td>
                    Initiates activities that promote advocacy for men and women
                    empowerment.
                  </td>
                </tr>
                <tr>
                  <td class="checkBox">
                    <v-checkbox
                      :rules="required"
                      v-model="serviceOrientation4"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="serviceOrientation5"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="innovation1"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="innovation2"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="innovation3"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="innovation4"
                      hide-details
                      value="true"
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
                      :rules="required"
                      v-model="innovation5"
                      hide-details
                      value="true"
                    ></v-checkbox>
                  </td>
                  <td>5</td>
                  <td>
                    Uses ingenious methods to accomplish responsibilities.
                    Demonstrates resourcefulness and the ability to succeed with
                    minimal resources.
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
                    @click="updateEsat"
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
        <v-container v-if="saveLoad" class="text-center">
          <v-progress-circular
            :size="150"
            width="10"
            color="primary"
            indeterminate
          ></v-progress-circular>
        </v-container>
      </v-tab-item>

      <v-tab-item :key="5" value="show_print" v-if="showPrint">
        <v-card flat>
          <v-container id="printMeEsat">
            <v-container style="padding: 10px">
              <v-container style="text-align: center">
                <h2 class="heading">
                  Electronic Self-Assessment Tool(e-SAT)SY 2020-2021
                </h2>

                <h2 class="heading">
                  Teacher I-III, SPET I-IV, Instructor I-II, Special Science
                  Teacher I-II (Proficient Teachers)
                </h2>
              </v-container>

              <!-- showPRINT -->
              <h2 class="printParts font-weight-bold text-decoration-underline">
                PART I. DEMOGRAPHIC PROFILE
              </h2>
              <v-simple-table id="printPart1" class="table">
                <template v-slot:default>
                  <colgroup>
                    <col id="colgroup1" />
                    <col id="colgroup2" />
                    <col id="colgroup3" />
                    <col id="colgroup4" />
                    <col id="colgroup5" />
                  </colgroup>
                  <tbody
                    style="color: black"
                    v-for="item of printEsatInfo[0]"
                    :key="item.id"
                  >
                    <tr class="tRow">
                      <td class="esatPrint">
                        <span class="part1FontSize">Name of Employee:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">{{
                          item.name_of_employee
                        }}</span>
                      </td>
                      <td id="emptyCol" rowspan="7"></td>
                      <td class="esatPrint">
                        <span class="part1FontSize">Region:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">{{ item.region }}</span>
                      </td>
                    </tr>
                    <tr class="tRow">
                      <td class="esatPrint">
                        <span class="part1FontSize">Position:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">{{ item.position }}</span>
                      </td>
                      <td class="esatPrint">
                        <span class="part1FontSize">Division:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">{{ item.division }}</span>
                      </td>
                    </tr>
                    <tr class="tRow">
                      <td class="esatPrint">
                        <span class="part1FontSize">Employment Status:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">{{
                          item.employment_status
                        }}</span>
                      </td>
                      <td class="esatPrint">
                        <span class="part1FontSize">School:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize"
                          >{{ item.school_id }} - {{ item.school_name }}</span
                        >
                      </td>
                    </tr>
                    <tr class="tRow">
                      <td class="esatPrint">
                        <span class="part1FontSize">Age:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">{{ item.age }}</span>
                      </td>
                      <td class="esatPrint">
                        <span class="part1FontSize"
                          >Curricular Classification:</span
                        >
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">{{
                          item.curricular_classification
                        }}</span>
                      </td>
                    </tr>
                    <tr class="tRow">
                      <td class="esatPrint">
                        <span class="part1FontSize">Sex:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">{{ item.sex }}</span>
                      </td>
                      <td class="esatPrint">
                        <span class="part1FontSize">Grade Level Taught:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize"
                          >{{ item.grade_level_taught }}
                        </span>
                      </td>
                    </tr>
                    <tr class="tRow">
                      <td class="esatPrint">
                        <span class="part1FontSize"
                          >Number of Years in Teaching:</span
                        >
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize"
                          >{{ item.years_in_teaching }}
                        </span>
                      </td>
                      <td class="esatPrint">
                        <span class="part1FontSize"
                          >Area(s) of Specialization:</span
                        >
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize"
                          >{{ item.area_of_specialization }}
                        </span>
                      </td>
                    </tr>
                    <tr class="tRow">
                      <td class="esatPrint">
                        <span class="part1FontSize"
                          >Highest Degree Obtained:</span
                        >
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize">
                          {{ item.highest_degree_obtained }} -
                          {{ item.specified_highest_degree_obtained }}
                        </span>
                      </td>
                      <td class="esatPrint">
                        <span class="part1FontSize">Subjects(s) Taught:</span>
                      </td>
                      <td class="showDataPart1">
                        <span class="part1FontSize"
                          >{{ item.subjects_taught }}
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </template>
              </v-simple-table>
            </v-container>

            <v-container class="mt-5" style="padding: 10px">
              <h2
                class="printParts font-weight-bold mt-6 text-decoration-underline"
              >
                PART II. FUNCTIONAL OBJECTIVES
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
                        <span class="part2TblHead"> Objectives </span>
                      </th>
                      <th
                        style="
                          color: black;
                          font-size: 15px;
                          border: black 0.5px solid;
                        "
                        class="text-left"
                      >
                        <span class="part2TblHead"> Level of Capacity</span>
                      </th>
                      <th
                        style="
                          color: black;
                          font-size: 15px;
                          border: black 0.5px solid;
                        "
                        class="text-left"
                      >
                        <span class="part2TblHead">
                          Priority for Development</span
                        >
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="obsHeadHght" colspan="4">
                        <h3 class="objsHead">
                          1.Content Knowledge and Pedagogy (PPST Domain 1)
                        </h3>
                      </td>
                    </tr>

                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">1.1</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Applied knowledge of content within and across
                          curriculum teaching areas (PPST Indicator 1.1.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][0].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][0].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">1.2</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Ensured the positive use of ICT to facilitate the
                          teaching and learning learning process. (PPST
                          Indicator 1.3.2)</span
                        >
                      </td>

                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][1].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][1].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">1.3</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Applied a range of teaching strategies to develop
                          critical and creative thinking, as well as other
                          higher order thinking skills. (PPST Indicator
                          1.5.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][2].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][2].priority_for_development }}
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="obsHeadHght" colspan="4">
                        <h3 class="objsHead">
                          2. Diversity of Learners & Assessment and Reporting
                          (PPST Domain 2 and Domain 5)
                        </h3>
                      </td>
                    </tr>

                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">2.1</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Established a learner-centered culture by using
                          teaching strategies that respond to their linguistic,
                          cultural, socio-economic and religious
                          backgrounds.</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][3].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][3].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">2.2</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Planned and delivered teaching strategies that are
                          responsive to the special educational needs of
                          learners in difficult circumstances, including:
                          geographic isolation; chronic illness; displacement
                          due to armed conflict, urban resettlement or
                          disasters; child labor practices. (PPST Indicator
                          3.4.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][4].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][4].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">2.3</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Used strategies for providing timely, accurate and
                          constructive feedback to improve learner performance.
                          (PPST Indicator 5.3.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][5].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][5].priority_for_development }}
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="obsHeadHght" colspan="4">
                        <h3 class="objsHead">
                          3. Curriculum and Planning (PPST Domain 4)
                        </h3>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">3.1</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Selected, developed, organized and used appropriate
                          teaching and learning resources, including ICT, to
                          address learning goals. (PPST Indicator 4.5.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][6].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][6].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">3.2</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Set achievable and appropriate learning outcomes that
                          are aligned with learning competencies. (PPST
                          Indicator 4.2.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][7].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][7].priority_for_development }}
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="obsHeadHght" colspan="4">
                        <h3 class="objsHead">
                          4. Community Linkages and Professional Engagement &
                          Personal Growth and Professional Development (PPST
                          Domain 6 and 7)
                        </h3>
                      </td>
                    </tr>

                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">4.1</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Built relationships with parents/guardians and the
                          wider school community to facilitate involvement in
                          the educative process. (PPST Indicator 6.2.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][8].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][8].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">4.2</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Participates in professional networks to share
                          knowledge and to enhance practice. (PPST Indicator
                          7.3.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][9].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][9].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">4.3</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Developed a personal improvement plan based on
                          reflection of one’s practice and ongoing professional
                          learning. (PPST Indicator 7.4.2)</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][10].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][10].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="obsHeadHght" colspan="4">
                        <h3 class="objsHead">PLUS FACTOR</h3>
                      </td>
                    </tr>
                    <tr>
                      <td class="objNo">
                        <span class="part2FontSize">5.1</span>
                      </td>
                      <td class="objDes">
                        <span class="part2FontSize">
                          Performed various related works/activities that
                          contribute to the teaching-learning process.</span
                        >
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][11].level_of_capability }}
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="part2FontSize">
                          {{ printEsatInfo[2][11].priority_for_development }}
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="obsHeadHght" colspan="4">
                        <h3 class="objsHead">Personal Comments</h3>
                      </td>
                    </tr>
                    <tr v-for="item in printEsatInfo[0]" :key="item.id">
                      <td colspan="4"><span class="part2FontSize">{{ item.personal_comments }}</span></td>
                    </tr>
                  </tbody>
                </template>
              </v-simple-table>
            </v-container>

            <v-container class="" style="padding: 10px">
              <h2
                id="part3"
                class="printParts font-weight-bold mt-6 text-decoration-underline"
              >
                PART III. CORE BEHAVIORAL COMPETENCIES
              </h2>
              <v-simple-table class="table" style="color: black">
                <template v-slot:default>
                  <thead>
                    <tr>
                      <td class="coreHeadHght" colspan="3">
                        <h3 class="coreHead">1. SELF-MANAGEMENT</h3>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][0].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">1</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Sets personal goals and directions, needs and
                          development.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][1].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">2</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Undertakes personal actions and behavior that are
                          clear and purposive and takes into account personal
                          goals and values congruent to that of the
                          organization.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][2].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">3</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Displays emotional maturity and enthusiasm for and is
                          challenged by higher goals.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][3].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">4</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Prioritizes work tasks and schedules (through Gantt
                          charts, checklist, etc) achieve goals.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][4].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">5</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Sets high quality, challenging, realistic goals for
                          self and others.
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="coreHeadHght" colspan="3">
                        <h3 class="coreHead">2.PROFESSIONALISM AND ETHICS</h3>
                      </td>
                    </tr>

                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][5].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">1</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Demonstrates the values and behavior enshrined in the
                          Norms and Conduct and Ethical Standards for public
                          officials and employees. (RA 6713)
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][6].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">2</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Practices ethical and professional behavior and
                          conduct taking into account the impact of his/her
                          actions and decisions.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][7].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">3</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Maintains a professional image: being trustworthy,
                          regularity of attendance and punctuality, good
                          grooming and communication.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][8].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">4</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Makes personal sacrifices to meet the organization’s
                          needs.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][9].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">5</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Act with a sense of urgency and responsibility to meet
                          the organization’s needs, improve system and help
                          others improve their effectiveness.
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="coreHeadHght" colspan="3">
                        <h3 class="coreHead">3. RESULTS FOCUS</h3>
                      </td>
                    </tr>

                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][10].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">1</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Achieves results with optimal use of time and
                          resources most of the time.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][11].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">2</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Avoids rework, mistakes and wastage through effective
                          work methods by placing organizational needs before
                          personal needs.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][12].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">3</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Delivers error-free outputs most of the time by
                          conforming to standard operating procedures correctly
                          and consistently. Able to produce very satisfactory
                          quality work in terms of usefulness/acceptability and
                          completeness with no supervision required.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][13].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">4</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Expresses the desire to do better and may express
                          frustration at waste or efficiency. May focus on new
                          or more precise ways of meeting goals set.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][14].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">5</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Makes specific changes in the system or in own work
                          methods to improve performance. Examples may include
                          doing something better,faster, at a lower cost, more
                          efficiently, or improving quality, customer
                          satisfaction, morale, without setting any specific
                          goal.
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="coreHeadHght" colspan="3">
                        <h3 class="coreHead">4. TEAMWORK</h3>
                      </td>
                    </tr>

                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][15].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">1</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize"
                          >Willingly does his/her share of responsibility.</span
                        >
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][16].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">2</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Promotes collaboration and removes barriers to
                          teamwork and goal accomplishment across the
                          organization.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][17].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">3</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Applies negotiation principles in arriving at win-win
                          agreements.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][18].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">4</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize"
                          >Drives consensus and team ownership of
                          decisions.</span
                        >
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][19].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">5</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Works constructively and collaboratively with others
                          and across organizations to accomplish organizational
                          goals and objectives.
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="coreHeadHght" colspan="3">
                        <h3 class="coreHead">5. SERVICE ORIENTATION</h3>
                      </td>
                    </tr>

                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][20].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">1</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Can explain and articulate organizational directions,
                          issues and problems.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][21].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">2</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Takes personal responsibility for dealing with and/or
                          correcting customer service issues and concerns.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][22].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">3</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Initiates activities that promote advocacy for men and
                          women empowerment.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][23].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">4</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Participates in updating office vision, mission,
                          mandates and strategies based on DepEd strategies and
                          directions.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][24].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">5</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Develops and adopts services improvement program
                          through simplified procedures that will further
                          enhance service delivery.
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="coreHeadHght" colspan="3">
                        <h3 class="coreHead">6. INNOVATION</h3>
                      </td>
                    </tr>

                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][25].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">1</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Examines the root cause of problems and suggests
                          effective solutions. Foster new ideas, processes and
                          suggests better ways to do things(cost and/or
                          operaional effeciency).
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][26].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">2</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Demonstrates an ability to think "beyond the box".
                          Continuosly focuses on improving personal productivity
                          to create higher value and results.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][27].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">3</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Promote a creative climate and inspires co-workers to
                          develop original ideas or solutions.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][28].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">4</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Translates creative thinking into tangible changes and
                          solutions that improve the work unit and organization.
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          {{
                            printEsatInfo[1][29].check_status == "true"
                              ? "✔"
                              : ""
                          }}
                        </span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">5</span>
                      </td>
                      <td class="part3TdHght">
                        <span class="part3FontSize">
                          Uses ingenious methods to accomplish responsibilities.
                          Demonstrates resourcefulness and the ability to
                          succeed with minimal resources.
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </template>
              </v-simple-table>
            </v-container>
          </v-container>
          <v-container>
            <v-btn v-print="printEsat" class="float-right mb-4 me-4 mt-5"
              >PRINT</v-btn
            >
            <v-btn
              class="float-right mb-4 me-4 mt-5"
              @click="goToEsatCard(), (esatCard = true)"
              >FINISH</v-btn
            >
            <v-btn
              v-if="editBtn"
              class="float-right mb-4 me-4 mt-5"
              @click="editInfo(printEsatInfo)"
              >EDIT</v-btn
            >
          </v-container>
        </v-card>
      </v-tab-item>

      <v-tab-item :key="6" value="esat_card" v-if="esatCard">
        <v-container class="p-5" v-if="noData">
          <v-alert elevation="24" color="info">
            <h1
              style="
                font-size: 30px;
                text-align: center;
                padding-top: 10px;
                padding-bottom: 10px;
              "
            >
              No Data Yet!
            </h1>
          </v-alert>
        </v-container>
        <v-container>
          <v-container class="mb-5 p-5" v-if="(role = 'Teacher')">
            <v-row>
              <v-col
                fluid
                v-for="row in this.esatInfo[0]"
                :key="row.id"
                cols="6"
              >
                <v-card class="bgCard pa-2" id="cardEsat">
                  <v-row>
                    <v-col>
                      <h2 class="heading ml-5 text-center">
                        ELECTRONIC SELF-ASSESMENT TOOL
                      </h2>
                      <v-row no-gutter>
                        <v-col cols="4">
                          <v-img
                            id="esatLogocard"
                            :src="require('../assets/esatlogo.png')"
                          ></v-img>
                        </v-col>
                        <v-col cols="5" class="ml=2">
                          <v-container id="esatTxt">
                            <h3 class="text-left font-weight-bold">
                              SY 2020-2021
                            </h3>
                          </v-container>
                        </v-col>
                      </v-row>

                      <h3 class="heading mt-2" id="ecard">Survey Completed</h3>

                      <p class="font-weight-regular font-italic text-center">
                        Submit this file to you Department Head for
                        consolidation.
                      </p>
                      <v-simple-table class="table overflow-hidden">
                        <template>
                          <tbody>
                            <tr>
                              <td class="esatCard">Name:</td>
                              <td colspan="2">
                                {{ row.name_of_employee }}
                              </td>
                            </tr>
                            <tr>
                              <td class="esatCard">School:</td>
                              <td colspan="2">
                                {{ row.school_name }}
                              </td>
                            </tr>
                            <tr>
                              <td class="esatCard">School Year:</td>
                              <td>{{ row.school_year }}</td>
                              <td rowspan="2" class="text-center">
                                <!-- <v-btn dense @click="viewPrint(esatInfo)"> View </v-btn> -->
                                <v-btn
                                  dense
                                  @click="
                                    viewPrint(
                                      esatInfo,
                                      row.school_year,
                                      row.name_of_employee
                                    )
                                  "
                                >
                                  View
                                </v-btn>
                              </td>
                            </tr>
                            <tr>
                              <td class="esatCard">Date:</td>
                              <td>{{ dateCreate(row.created_at) }}</td>
                            </tr>
                          </tbody>
                        </template>
                      </v-simple-table>
                    </v-col>
                  </v-row>
                </v-card>
              </v-col>
            </v-row>
          </v-container>
          <v-container class="mt-5 mb-5 p-5" v-else>
            <v-row>
              <v-col v-for="row in this.esatInfo[0]" :key="row.id" cols="6">
                <v-card class="bgCard pa-2" id="cardEsat">
                  <v-row>
                    <v-col>
                      <h2 class="heading ml-5 text-center">
                        ELECTRONIC SELF-ASSESMENT TOOL
                      </h2>
                      <v-row no-gutter>
                        <v-col cols="4">
                          <v-img
                            id="esatLogocard"
                            :src="require('../assets/esatlogo.png')"
                          ></v-img>
                        </v-col>
                        <v-col cols="5" class="ml=2">
                          <v-container id="esatTxt">
                            <h3 class="text-left font-weight-bold">
                              SY 2020-2021
                            </h3>
                          </v-container>
                        </v-col>
                      </v-row>

                      <h3 class="heading mt-2" id="ecard">Survey Completed</h3>

                      <p class="font-weight-regular text-center font-italic">
                        Submit this file to you Department Head for
                        consolidation.
                      </p>
                      <v-simple-table class="table">
                        <template>
                          <tbody>
                            <tr>
                              <td class="esatCard">Name:</td>
                              <td colspan="2">
                                {{ row.name_of_employee }}
                              </td>
                            </tr>
                            <tr>
                              <td class="esatCard">School:</td>
                              <td colspan="2">
                                {{ row.school_name }}
                              </td>
                            </tr>
                            <tr>
                              <td class="esatCard">School Year:</td>
                              <td>{{ row.school_year }}</td>
                              <td rowspan="2" class="text-center">
                                <!-- <v-btn dense @click="viewPrint(esatInfo)"> View </v-btn> -->
                                <v-btn
                                  dense
                                  @click="
                                    viewPrint(
                                      esatInfo,
                                      row.school_year,
                                      row.name_of_employee
                                    )
                                  "
                                >
                                  View
                                </v-btn>
                              </td>
                            </tr>
                            <tr>
                              <td class="esatCard">Date:</td>
                              <td>{{ dateCreate(row.created_at) }}</td>
                            </tr>
                          </tbody>
                        </template>
                      </v-simple-table>
                    </v-col>
                  </v-row>
                </v-card>
              </v-col>
            </v-row>
          </v-container>
        </v-container>
      </v-tab-item>
    </v-tabs-items>
  </v-container>
</template>

<script>
// @ is an alias to /src
import moment from "moment";
import PromptAlert from "@/utils/Prompt";
export default {
  // methods: {},
  data: () => ({
    // return {
    mixins: [PromptAlert],
    value: String,
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
    returnPart2() {
      this.tab = "part2";
    },
    goToPart3() {
      console.log("to part 3");
      this.saveLoad = false;
      // (this.showPart2 = false);
      this.showPart3 = true;
      this.tab = "part3";
    },
    returnPart3() {
      this.tab = "part3";
    },
    printEsat: {
      id: "printMeEsat",
      // preview: true,
      // previewTitle: "print Title", // The title of the preview window. The default is 打印预览
      // popTitle: "good print",
      extraCss:
        "https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.compat.css, https://cdn.bootcdn.net/ajax/libs/hover.css/2.3.1/css/hover-min.css",

      extraHead:
        '<meta http-equiv="Content-Language"content="en-us"/>, <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">',
      // previewBeforeOpenCallback() {
      //   console.log("正在加载预览窗口");
      // },
      // previewOpenCallback() {
      //   console.log("已经加载完预览窗口");
      // },
      // beforeOpenCallback() {
      //   //.printLoading = true
      //   console.log("打开之前");
      // },
      // openCallback() {
      //   // .printLoading = false
      //   console.log("执行了打印");
      // },
      // closeCallback() {
      //   console.log("关闭了打印工具");
      // },
    },
    createEsat() {
      this.tab = "part1";
      this.showPart1 = true;
      this.createBtn = false;
      this.clickEsat = true;
      this.editCancelBtn = false;
    },
    goToEsatCard() {
      this.$router.go();
      // this.resetFields();
      // this.retrieveEsat();
      this.tab = "esat_card";
      this.clickEsat = false;
      this.createBtn = false;
    },

    valid: true,
    disclosure: false,
    privacyNote: false,
    showPart1: false,
    showPart2: false,
    showPart3: false,
    showPrint: false,
    esatCard: true,
    saveInfos: true,
    updateInfos: false,
    createBtn: false,
    clickEsat: false,
    editBtn: true,
    noData: false,
    saveData: false,
    part3Table: true,
    saveLoad: false,
    specialized: false,
    subs: false,
    editCancelBtn: true,
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
      "Junior High School",
      "Senior High School",
      "Multigrade",
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

    schoolYear: "",
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
    esatInfo: [],
    viewEsatDemo: [],
    viewEsatCore: [],
    viewEsatFunc: [],
    printEsatInfo: [],
    editId: "",
    core_ids: [],
    funct_ids: [],
    role: "",
    required: [(v) => !!v || "Field is required"],
    demoRequired: [(v) => !!v || "Field is required!"],
    // };
  }),
  created() {
    this.retrieveEsat();
    // this.resetFields();
  },

  methods: {
    dateCreate: function (date) {
      return moment(date).format("MM/DD/YYYY");
    },
    showErrorResponse(title, message) {
      this.$swal.fire({
        icon: "error",
        title: title,
        text: message,
      });
    },

    goToPart2() {
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
          specifySubjectsTaught += subTaught + ", ";
        }
      }

      let splitSpecifiedSubLen = specifySubjectsTaught.split(",").length - 1;
      let specifiedSubSplit = specifySubjectsTaught.split(
        ",",
        splitSpecifiedSubLen
      );
      let specifiedSubSplitJoin = specifiedSubSplit.join();
      specifySubjectsTaught = specifiedSubSplitJoin;
      // console.log(this.english)
      // (this.showPart1 = false), (this.showPart2 = true), (this.tab = "part2");
      this.$refs.demo.validate();

      if (
        this.$refs.demo.validate() != false &&
        specializeSubSplitJoin != "" &&
        specifiedSubSplitJoin != ""
      ) {
        this.specialized = false;
        this.subs = false;
        (this.showPart1 = false), (this.showPart2 = true), (this.tab = "part2");
      } else {
        if (specializeSubSplitJoin == "" && specifiedSubSplitJoin == "") {
          this.showErrorResponse(
            "Opppsss",
            "Select at least 1 subject in Area of Specialization and in Subject Taught!"
          );
        } else {
          if (specializeSubSplitJoin == "") {
            this.showErrorResponse(
              "Opppsss",
              "Select at least 1 subject in Area of Specialization!"
            );
          }
          if (specifiedSubSplitJoin == "") {
            this.showErrorResponse(
              "Opppsss",
              "Select at least 1 subject in Subject Taught!"
            );
          }
        }
      }
    },
    async retrieveEsat() {
      this.employeeName = JSON.parse(sessionStorage.user_session).name;
      this.role = JSON.parse(sessionStorage.user_session).role;

      this.esatInfo = [];
      this.esatDemographicProfile = [];
      this.coreBehavioralCompetencies = [];
      this.functionalObjectives = [];
      if (this.role == "Admin") {
        this.createBtn = false;
        this.editBtn = false;
        const returnedData = await this.$store.dispatch("retrieveEsatInfos");

        if (returnedData.data[0][0].esatDemographicProfile.length > 0) {
          for (let value of returnedData.data[0][0].esatDemographicProfile) {
            this.esatDemographicProfile.push(value);
          }

          for (let core of returnedData.data[1][0]
            .esatCoreBehavioralCompetencies) {
            this.coreBehavioralCompetencies.push(core);
          }

          for (let func of returnedData.data[2][0].esatFunctionalObjectives) {
            this.functionalObjectives.push(func);
          }

          this.esatInfo.push(this.esatDemographicProfile);
          this.esatInfo.push(this.coreBehavioralCompetencies);
          this.esatInfo.push(this.functionalObjectives);
          console.log("admin side");
          this.disclosure = true;
          this.tab = "esat_card";
        } else {
          this.tab = "esat_card";
          this.noData = true;
          this.esatCard = true;
        }
      } else {
        const returnedData = await this.$store.dispatch("retrieveEsatInfoById");
        if (returnedData.data[0][0].esatDemographicProfile.length > 0) {
          this.tab = "esat_card";
          this.disclosure = false;
          this.createBtn = true;
          for (let value of returnedData.data[0][0].esatDemographicProfile) {
            this.esatDemographicProfile.push(value);
          }

          for (let core of returnedData.data[1][0]
            .esatCoreBehavioralCompetencies) {
            this.coreBehavioralCompetencies.push(core);
          }

          for (let func of returnedData.data[2][0].esatFunctionalObjectives) {
            this.functionalObjectives.push(func);
          }

          this.esatInfo.push(this.esatDemographicProfile);
          this.esatInfo.push(this.coreBehavioralCompetencies);
          this.esatInfo.push(this.functionalObjectives);
        } else {
          this.tab = "subscribe";
          this.disclosure = true;
        }
      }
    },

    // async resetFields() {
    //   this.employeeId = null;
    //   this.position = null;
    //   this.employmentStatus = null;
    //   this.employeeAge = null;
    //   this.employeeSex = null;
    //   this.schoolYear = null;
    //   this.yearsInTeaching = null;
    //   this.highestDegreeObtained = null;
    //   this.specifiedHighestDegreeObtained = null;
    //   this.region = null;
    //   this.division = null;
    //   this.employeeMunicipality = null;
    //   this.schoolId = null;
    //   this.schoolName = null;
    //   this.schoolType = null;
    //   this.schoolSize = null;
    //   this.curricularClassification = null;
    //   this.gradeLevelTaught = null;
    //   this.levelTaught = null;
    //   this.personalComments = null;

    //   this.english = null;
    //   this.filipino = null;
    //   this.mathematics = null;
    //   this.generalScience = null;
    //   this.biology = null;
    //   this.chemistry = null;
    //   this.physics = null;
    //   this.socialScience = null;
    //   this.earlyChildhoodEducation = null;
    //   this.valuesEducation = null;
    //   this.sped = null;
    //   this.music = null;
    //   this.arts = null;
    //   this.physicalEducation = null;
    //   this.health = null;
    //   this.TLE_HE_TVL = null;

    //   this.otherSpecialized = null;

    //   this.MotherTongue = null;
    //   this.Filipino = null;
    //   this.English = null;
    //   this.Mathematics = null;
    //   this.Science = null;
    //   this.AralingPanlipunan = null;
    //   this.EdukasyonSaPagpapakatao = null;
    //   this.Mapeh = null;
    //   this.TLE_HE = null;
    //   this.EPP_LE_HE = null;
    //   this.specialPrograms = null;
    //   this.otherSubTaught = null;
    //   this.capability1 = null;
    //   this.development1 = null;
    //   this.capability2 = null;
    //   this.development2 = null;
    //   this.capability3 = null;
    //   this.development3 = null;
    //   this.capability4 = null;
    //   this.development4 = null;
    //   this.capability5 = null;
    //   this.development5 = null;
    //   this.capability6 = null;
    //   this.development6 = null;
    //   this.capability7 = null;
    //   this.development7 = null;
    //   this.capability8 = null;
    //   this.development8 = null;
    //   this.capability9 = null;
    //   this.development9 = null;
    //   this.capability10 = null;
    //   this.development10 = null;
    //   this.capability11 = null;
    //   this.development11 = null;
    //   this.capability12 = null;
    //   this.development12 = null;
    //   this.personalComments = null;

    //   this.selfManagement1 = null;
    //   this.selfManagement2 = null;
    //   this.selfManagement3 = null;
    //   this.selfManagement4 = null;
    //   this.selfManagement5 = null;

    //   this.professionalAndEthics1 = null;
    //   this.professionalAndEthics2 = null;
    //   this.professionalAndEthics3 = null;
    //   this.professionalAndEthics4 = null;
    //   this.professionalAndEthics5 = null;

    //   this.resultsFocus1 = null;
    //   this.resultsFocus2 = null;
    //   this.resultsFocus3 = null;
    //   this.resultsFocus4 = null;
    //   this.resultsFocus5 = null;

    //   this.teamwork1 = null;
    //   this.teamwork2 = null;
    //   this.teamwork3 = null;
    //   this.teamwork4 = null;
    //   this.teamwork5 = null;

    //   this.serviceOrientation1 = null;
    //   this.serviceOrientation2 = null;
    //   this.serviceOrientation3 = null;
    //   this.serviceOrientation4 = null;
    //   this.serviceOrientation5 = null;

    //   this.innovation1 = null;
    //   this.innovation2 = null;
    //   this.innovation3 = null;
    //   this.innovation4 = null;
    //   this.innovation5 = null;
    // },

    finalizeEsat: async function () {
      this.clickEsat = false;
      this.part3Table = false;
      this.saveLoad = true;
      console.log("created");

      {
        const employeeName = this.employeeName;
        const employeeId = this.employeeId;
        const position = this.position;
        const employmentStatus = this.employmentStatus;
        const employeeAge = this.employeeAge;
        const employeeSex = this.employeeSex;

        const schoolYear = this.schoolYear;
        const yearsInTeaching = this.yearsInTeaching;
        const highestDegreeObtained = this.highestDegreeObtained;
        const specifiedHighestDegreeObtained =
          this.specifiedHighestDegreeObtained;
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
            specifySubjectsTaught += subTaught + ", ";
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

        const selfManagement1 =
          this.selfManagement1 == null ? "" : this.selfManagement1;
        const selfManagement2 =
          this.selfManagement2 == null ? "" : this.selfManagement2;
        const selfManagement3 =
          this.selfManagement3 == null ? "" : this.selfManagement3;
        const selfManagement4 =
          this.selfManagement4 == null ? "" : this.selfManagement4;
        const selfManagement5 =
          this.selfManagement5 == null ? "" : this.selfManagement5;

        const professionalAndEthics1 =
          this.professionalAndEthics1 == null
            ? ""
            : this.professionalAndEthics1;
        const professionalAndEthics2 =
          this.professionalAndEthics2 == null
            ? ""
            : this.professionalAndEthics2;
        const professionalAndEthics3 =
          this.professionalAndEthics3 == null
            ? ""
            : this.professionalAndEthics3;
        const professionalAndEthics4 =
          this.professionalAndEthics4 == null
            ? ""
            : this.professionalAndEthics4;
        const professionalAndEthics5 =
          this.professionalAndEthics5 == null
            ? ""
            : this.professionalAndEthics5;

        const resultsFocus1 =
          this.resultsFocus1 == null ? "" : this.resultsFocus1;
        const resultsFocus2 =
          this.resultsFocus2 == null ? "" : this.resultsFocus2;
        const resultsFocus3 =
          this.resultsFocus3 == null ? "" : this.resultsFocus3;
        const resultsFocus4 =
          this.resultsFocus4 == null ? "" : this.resultsFocus4;
        const resultsFocus5 =
          this.resultsFocus5 == null ? "" : this.resultsFocus5;

        const teamwork1 = this.teamwork1 == null ? "" : this.teamwork1;
        const teamwork2 = this.teamwork2 == null ? "" : this.teamwork2;
        const teamwork3 = this.teamwork3 == null ? "" : this.teamwork3;
        const teamwork4 = this.teamwork4 == null ? "" : this.teamwork4;
        const teamwork5 = this.teamwork5 == null ? "" : this.teamwork5;

        const serviceOrientation1 =
          this.serviceOrientation1 == null ? "" : this.serviceOrientation1;
        const serviceOrientation2 =
          this.serviceOrientation2 == null ? "" : this.serviceOrientation2;
        const serviceOrientation3 =
          this.serviceOrientation3 == null ? "" : this.serviceOrientation3;
        const serviceOrientation4 =
          this.serviceOrientation4 == null ? "" : this.serviceOrientation4;
        const serviceOrientation5 =
          this.serviceOrientation5 == null ? "" : this.serviceOrientation5;

        const innovation1 = this.innovation1 == null ? "" : this.innovation1;
        const innovation2 = this.innovation2 == null ? "" : this.innovation2;
        const innovation3 = this.innovation3 == null ? "" : this.innovation3;
        const innovation4 = this.innovation4 == null ? "" : this.innovation4;
        const innovation5 = this.innovation5 == null ? "" : this.innovation5;

        const userId = JSON.parse(sessionStorage.user_session).id;
        const functionalObjectives = [
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "1.1",
            capability: capability1,
            priority: development1,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "1.2",
            capability: capability2,
            priority: development2,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "1.3",
            capability: capability3,
            priority: development3,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "2.1",
            capability: capability4,
            priority: development4,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "2.2",
            capability: capability5,
            priority: development5,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "2.3",
            capability: capability6,
            priority: development6,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "3.1",
            capability: capability7,
            priority: development7,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "3.2",
            capability: capability8,
            priority: development8,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "4.1",
            capability: capability9,
            priority: development9,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "4.2",
            capability: capability10,
            priority: development10,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "4.3",
            capability: capability11,
            priority: development11,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "5.1",
            capability: capability12,
            priority: development12,
          },
        ];
        console.log(functionalObjectives);
        const coreBehavioralCompetencies = [
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "1.1",
            value: selfManagement1,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "1.2",
            value: selfManagement2,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "1.3",
            value: selfManagement3,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "1.4",
            value: selfManagement4,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "1.5",
            value: selfManagement5,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "2.1",
            value: professionalAndEthics1,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "2.2",
            value: professionalAndEthics2,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "2.3",
            value: professionalAndEthics3,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "2.4",
            value: professionalAndEthics4,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "2.5",
            value: professionalAndEthics5,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "3.1",
            value: resultsFocus1,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "3.2",
            value: resultsFocus2,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "3.3",
            value: resultsFocus3,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "3.4",
            value: resultsFocus4,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "3.5",
            value: resultsFocus5,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "4.1",
            value: teamwork1,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "4.2",
            value: teamwork2,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "4.3",
            value: teamwork3,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "4.4",
            value: teamwork4,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "4.5",
            value: teamwork5,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "5.1",
            value: serviceOrientation1,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "5.2",
            value: serviceOrientation2,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "5.3",
            value: serviceOrientation3,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "5.4",
            value: serviceOrientation4,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "5.5",
            value: serviceOrientation5,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "6.1",
            value: innovation1,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "6.2",
            value: innovation2,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "6.3",
            value: innovation3,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "6.4",
            value: innovation4,
          },
          {
            userID: userId,
            school_year: schoolYear,
            objectiveNo: "6.5",
            value: innovation5,
          },
        ];
        console.log(coreBehavioralCompetencies);
        const data = {
          userId,
          employeeName,
          employeeId,
          position,
          employmentStatus,
          employeeAge,
          employeeSex,

          schoolYear,
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
          personalComments,
        };
        const returnedData = await this.$store.dispatch("createEsat", data);
        console.log(returnedData);
        if (returnedData.status == 200) {
          console.log("success");
          window.location.reload();
          // this.retrieveEsat();
          // this.resetFields();
        } else {
          this.saveData = true;
          this.part3Table = false;
          {
            window.location = "http://localhost:8082/esat";
          }
          50000;
        }
      }
    },
    // editInfo: async function (editEsatDemo,editEsatCore,editEsatFunc) {
    editInfo: async function (editInfo) {
      console.log("edit");
      console.log(this.role);
      console.log(editInfo);
      this.tab = "part1";
      this.clickEsat = true;
      this.showPrint = false;
      this.showPart1 = true;
      this.updateInfos = true;
      this.saveInfos = false;
      this.editCancelBtn = false;

      (this.editId = editInfo[0][0].id),
        (this.employeeName = editInfo[0][0].name_of_employee),
        (this.employeeId = editInfo[0][0].employee_id),
        (this.position = editInfo[0][0].position),
        (this.employmentStatus = editInfo[0][0].employment_status),
        (this.employeeAge = editInfo[0][0].age),
        (this.employeeSex = editInfo[0][0].sex),
        (this.schoolYear = editInfo[0][0].school_year),
        (this.yearsInTeaching = editInfo[0][0].years_in_teaching),
        (this.highestDegreeObtained = editInfo[0][0].highest_degree_obtained),
        (this.specifiedHighestDegreeObtained =
          editInfo[0][0].specified_highest_degree_obtained),
        (this.region = editInfo[0][0].region),
        (this.division = editInfo[0][0].division),
        (this.employeeMunicipality = editInfo[0][0].employee_municipality),
        (this.schoolId = editInfo[0][0].school_id),
        (this.schoolName = editInfo[0][0].school_name),
        (this.schoolType = editInfo[0][0].school_type),
        (this.schoolSize = editInfo[0][0].school_size),
        (this.curricularClassification =
          editInfo[0][0].curricular_classification),
        (this.gradeLevelTaught = editInfo[0][0].grade_level_taught),
        (this.levelTaught = editInfo[0][0].level_taught),
        (this.personalComments = editInfo[0][0].personal_comments);

      let splitSpecializedLen =
        editInfo[0][0].area_of_specialization.split(",").length;
      let splitSpecialize = editInfo[0][0].area_of_specialization.split(
        ", ",
        splitSpecializedLen
      );

      console.log(splitSpecialize);

      for (let specializeSub in splitSpecialize) {
        splitSpecialize[specializeSub] == "English"
          ? (this.english = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Filipino"
          ? (this.filipino = "Filipino")
          : splitSpecialize[specializeSub] == "Mathematics"
          ? (this.mathematics = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "General Science"
          ? (this.generalScience = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Biology"
          ? (this.biology = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Chemistry"
          ? (this.chemistry = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Social Science"
          ? (this.socialScience = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Early Childhood Education"
          ? (this.earlyChildhoodEducation = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Values Education"
          ? (this.valuesEducation = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "SPED"
          ? (this.sped = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Music"
          ? (this.music = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Arts"
          ? (this.arts = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Physical Education"
          ? (this.physicalEducation = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "Health"
          ? (this.health = splitSpecialize[specializeSub])
          : splitSpecialize[specializeSub] == "TLE/HE/TVL"
          ? (this.TLE_HE_TVL = splitSpecialize[specializeSub])
          : (this.otherSpecialized = splitSpecialize[specializeSub]);
      }
      let splitSubjectTaughtLen =
        editInfo[0][0].subjects_taught.split(",").length;
      let splitSubjectTaught = editInfo[0][0].subjects_taught.split(
        ", ",
        splitSubjectTaughtLen
      );

      console.log(this.fsilipino);

      for (let subTaught in splitSubjectTaught) {
        splitSubjectTaught[subTaught] == "Mother Tongue"
          ? (this.MotherTongue = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "Filipino"
          ? (this.Filipino = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "English"
          ? (this.English = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "Mathematics"
          ? (this.Mathematics = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "Science"
          ? (this.Science = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "Araling Panlipunan"
          ? (this.AralingPanlipunan = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "Edukasyon sa Pagpapakatao"
          ? (this.EdukasyonSaPagpapakatao = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "MAPEH"
          ? (this.Mapeh = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "TLE/HE"
          ? (this.TLE_HE = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "EPP-LE/HE"
          ? (this.EPP_LE_HE = splitSubjectTaught[subTaught])
          : splitSubjectTaught[subTaught] == "Special Programs"
          ? (this.specialPrograms = splitSubjectTaught[subTaught])
          : (this.otherSubTaught = splitSubjectTaught[subTaught]);
      }

      console.log(splitSubjectTaughtLen);

      for (let item in editInfo[2]) {
        this.funct_ids.push(editInfo[2][item].id);
      }
      console.log(this.funct_ids);
      this.capability1 = editInfo[2][0].level_of_capability;
      this.development1 = editInfo[2][0].priority_for_development;

      this.capability2 = editInfo[2][1].level_of_capability;
      this.development2 = editInfo[2][1].priority_for_development;

      this.capability3 = editInfo[2][2].level_of_capability;
      this.development3 = editInfo[2][2].priority_for_development;

      this.capability4 = editInfo[2][3].level_of_capability;
      this.development4 = editInfo[2][3].priority_for_development;

      this.capability5 = editInfo[2][4].level_of_capability;
      this.development5 = editInfo[2][4].priority_for_development;

      this.capability6 = editInfo[2][5].level_of_capability;
      this.development6 = editInfo[2][5].priority_for_development;

      this.capability7 = editInfo[2][6].level_of_capability;
      this.development7 = editInfo[2][6].priority_for_development;

      this.capability8 = editInfo[2][7].level_of_capability;
      this.development8 = editInfo[2][7].priority_for_development;

      this.capability9 = editInfo[2][8].level_of_capability;
      this.development9 = editInfo[2][8].priority_for_development;

      this.capability10 = editInfo[2][9].level_of_capability;
      this.development10 = editInfo[2][9].priority_for_development;

      this.capability11 = editInfo[2][10].level_of_capability;
      this.development11 = editInfo[2][10].priority_for_development;

      this.capability12 = editInfo[2][11].level_of_capability;
      this.development12 = editInfo[2][11].priority_for_development;

      for (let item in editInfo[1]) {
        this.core_ids.push(editInfo[1][item].id);
      }
      console.log(this.core_ids);
      this.selfManagement1 = editInfo[1][0].check_status;
      this.selfManagement2 = editInfo[1][1].check_status;
      this.selfManagement3 = editInfo[1][2].check_status;
      this.selfManagement4 = editInfo[1][3].check_status;
      this.selfManagement5 = editInfo[1][4].check_status;

      this.professionalAndEthics1 = editInfo[1][5].check_status;
      this.professionalAndEthics2 = editInfo[1][6].check_status;
      this.professionalAndEthics3 = editInfo[1][7].check_status;
      this.professionalAndEthics4 = editInfo[1][8].check_status;
      this.professionalAndEthics5 = editInfo[1][9].check_status;

      this.resultsFocus1 = editInfo[1][10].check_status;
      this.resultsFocus2 = editInfo[1][11].check_status;
      this.resultsFocus3 = editInfo[1][12].check_status;
      this.resultsFocus4 = editInfo[1][13].check_status;
      this.resultsFocus5 = editInfo[1][14].check_status;

      this.teamwork1 = editInfo[1][15].check_status;
      this.teamwork2 = editInfo[1][16].check_status;
      this.teamwork3 = editInfo[1][17].check_status;
      this.teamwork4 = editInfo[1][18].check_status;
      this.teamwork5 = editInfo[1][19].check_status;

      this.serviceOrientation1 = editInfo[1][20].check_status;
      this.serviceOrientation2 = editInfo[1][21].check_status;
      this.serviceOrientation3 = editInfo[1][22].check_status;
      this.serviceOrientation4 = editInfo[1][23].check_status;
      this.serviceOrientation5 = editInfo[1][24].check_status;

      this.innovation1 = editInfo[1][25].check_status;
      this.innovation2 = editInfo[1][26].check_status;
      this.innovation3 = editInfo[1][27].check_status;
      this.innovation4 = editInfo[1][28].check_status;
      this.innovation5 = editInfo[1][29].check_status;
    },

    updateEsat: async function () {
      this.clickEsat = false;
      this.part3Table = false;
      this.saveLoad = true;
      console.log("Update");
      console.log(this.funct_ids);
      console.log(this.core_ids);
      // (this.showPart3 = false),
      // (this.tab = "esat_card");
      let rowId = this.editId;
      let coreBehavioralCompetenciesID = this.core_ids;
      let funcObjectivesID = this.funct_ids;
      const employeeName = this.employeeName;
      const employeeId = this.employeeId;
      const position = this.position;
      const employmentStatus = this.employmentStatus;
      const employeeAge = this.employeeAge;
      const employeeSex = this.employeeSex;

      const schoolYear = this.schoolYear;
      const yearsInTeaching = this.yearsInTeaching;
      const highestDegreeObtained = this.highestDegreeObtained;
      const specifiedHighestDegreeObtained =
        this.specifiedHighestDegreeObtained;
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

      console.log("specialization: " + specifyAreaofSpecialization);

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
      const otherSubjectTaught =
        this.otherSubTaught == null ? "" : this.otherSubTaught;

      let specifySubjectsTaught = [];
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
          specifySubjectsTaught += subTaught + ", ";
        }
      }
      // console.log(specifySubjectsTaught)

      let splitSpecifiedSubLen = specifySubjectsTaught.split(",").length - 1;
      let specifiedSubSplit = specifySubjectsTaught.split(
        ",",
        splitSpecifiedSubLen
      );
      let specifiedSubSplitJoin = specifiedSubSplit.join();
      specifySubjectsTaught = specifiedSubSplitJoin;
      console.log(subjectTaught);
      console.log("subTuaght: " + specifySubjectsTaught);

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

      const userId = JSON.parse(sessionStorage.user_session).id;
      const functionalObjectives = [
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "1.1",
          capability: capability1,
          priority: development1,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "1.2",
          capability: capability2,
          priority: development2,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "1.3",
          capability: capability3,
          priority: development3,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "2.1",
          capability: capability4,
          priority: development4,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "2.2",
          capability: capability5,
          priority: development5,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "2.3",
          capability: capability6,
          priority: development6,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "3.1",
          capability: capability7,
          priority: development7,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "3.2",
          capability: capability8,
          priority: development8,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "4.1",
          capability: capability9,
          priority: development9,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "4.2",
          capability: capability10,
          priority: development10,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "4.3",
          capability: capability11,
          priority: development11,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "5.1",
          capability: capability12,
          priority: development12,
        },
      ];
      console.log(functionalObjectives);

      const coreBehavioralCompetencies = [
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "1.1",
          value: selfManagement1,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "1.2",
          value: selfManagement2,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "1.3",
          value: selfManagement3,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "1.4",
          value: selfManagement4,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "1.5",
          value: selfManagement5,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "2.1",
          value: professionalAndEthics1,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "2.2",
          value: professionalAndEthics2,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "2.3",
          value: professionalAndEthics3,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "2.4",
          value: professionalAndEthics4,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "2.5",
          value: professionalAndEthics5,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "3.1",
          value: resultsFocus1,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "3.2",
          value: resultsFocus2,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "3.3",
          value: resultsFocus3,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "3.4",
          value: resultsFocus4,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "3.5",
          value: resultsFocus5,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "4.1",
          value: teamwork1,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "4.2",
          value: teamwork2,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "4.3",
          value: teamwork3,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "4.4",
          value: teamwork4,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "4.5",
          value: teamwork5,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "5.1",
          value: serviceOrientation1,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "5.2",
          value: serviceOrientation2,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "5.3",
          value: serviceOrientation3,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "5.4",
          value: serviceOrientation4,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "5.5",
          value: serviceOrientation5,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "6.1",
          value: innovation1,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "6.2",
          value: innovation2,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "6.3",
          value: innovation3,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "6.4",
          value: innovation4,
        },
        {
          userID: userId,
          school_year: schoolYear,
          objectiveNo: "6.5",
          value: innovation5,
        },
      ];
      console.log(coreBehavioralCompetencies);
      const data = {
        rowId,
        coreBehavioralCompetenciesID,
        funcObjectivesID,
        userId,
        employeeName,
        employeeId,
        position,
        employmentStatus,
        employeeAge,
        employeeSex,

        schoolYear,
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
        personalComments,
      };
      const returnedData = await this.$store.dispatch("updateEsatInfo", data);
      // const returnedData = await this.post("createEsat", data);
      console.log(data);
      console.log(returnedData);
      if (returnedData.status == 200) {
        console.log("success");
        //
        // this.retrieveEsat();
        // this.resetFields();
        window.location.reload();
      }
    },
    viewPrint: async function (array, schoolYear, name) {
      this.createBtn = false;
      console.log("View");
      console.log(this.role);
      console.log(array[0]);
      console.log(schoolYear);
      console.log(name);
      this.viewEsatDemo = [];
      this.viewEsatCore = [];
      this.viewEsatFunc = [];
      this.printEsatInfo = [];
      (this.tab = "show_print"), (this.showPrint = true);

      for (let a in array[0]) {
        if (
          array[0][a].school_year == schoolYear &&
          array[0][a].name_of_employee == name
        ) {
          this.viewEsatDemo.push(array[0][a]);
        }
      }

      for (let b in array[1]) {
        if (array[1][b].school_year == schoolYear) {
          this.viewEsatCore.push(array[1][b]);
        }
      }

      for (let c in array[2]) {
        if (array[2][c].school_year == schoolYear) {
          this.viewEsatFunc.push(array[2][c]);
        }
      }
      this.printEsatInfo.push(this.viewEsatDemo);
      this.printEsatInfo.push(this.viewEsatCore);
      this.printEsatInfo.push(this.viewEsatFunc);
    },
  },
};
</script>

<style scope src="../assets/css/esat.css"></style>
