<template>
  <v-form v-model="valid">
    <v-card class="pa-0 pa-0 ma-5">
      <v-tabs>
        <!-- Encoding Page -->
        <v-tab> Encoding</v-tab>
        <v-tab-item>
          <v-card-title
            v-model="headerText"
            label="Search"
            single-line
            hide-details
            class="justify-center"
          >
            <h5 class="text-center">
              IPCRF Rating Encoding Form <br />
              Teacher I-III, SPET I-IV (Proficient Teacher) <br />PART 1: INDIVIDUAL
              PERFORMANCE COMMITMENT AND REVIEW FORM
            </h5>
          </v-card-title>
          <v-card class="mx-auto" max-width="800">
            <v-card-text>
              <div class="text--primary">
                <b> PRIVACY NOTICE:</b><br />
                By using this tool, you agree to authorize the Department of Education to
                collect, process, retain, <br />
                and dispose of your personal information in accordance with the Data
                Privacy Act of 2012.<br />

                <b> INSTRUCTIONS: </b> <br />
                Part 1 shall be accomplished by the Rater during the Phase III:
                Performance Review and Evaluation of the RPMS Cycle. <br />
                Fill in empty cells (white) with needed information about the teacher,
                school and division. <br />

                COT Rating<br />
                Encode the COT rating per observation period by doing the following
                steps:<br />
                1) Select the subject for COT; 2) Input the COT rating per objective; and
                3) Lock COT once finished. <br />

                QET Rating<br />
                Once all available COT ratings are inputted, encode your rating for
                Efficiency and Timeliness. <br />

                Note: This form automatically transmutes the COT rating to its
                corresponding in the RPMS 5-point scale. <br />

                When COT and QET ratings are encoded, click Finalize Part 1. Give the file
                copy to the teacher concerned.<br />
                The teacher shall accomplish Parts 2 & 4. <br />
              </div>
            </v-card-text> </v-card
          ><br />
          <v-card>
            <v-simple-table height="auto" class="pa-0 pa-0 ma-5" max-width="100vw">
              <template v-slot:default>
                <tbody class="text-center" color="secondary">
                  <!-- row 1 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Name of Employee:</td>
                    <td colspan="2">
                      <v-text-field
                        v-model="empName"
                        placeholder="Name"
                        solo
                        dense
                        class="text-center pt-5"
                        type="text"
                        :rules="nameRules"
                        required
                      >
                      </v-text-field>
                    </td>
                    <td colspan="3" style="text-align: left">Rater:</td>
                    <td colspan="3">
                      <v-text-field
                        v-model="empRater"
                        placeholder="Rater"
                        solo
                        dense
                        class="text-center pt-5"
                        type="text"
                        :rules="nameRules"
                        required
                      >
                      </v-text-field>
                    </td>
                    <td colspan="1" style="text-align: left">Region:</td>
                    <td colspan="1">
                      <v-select
                        :items="regionItems"
                        v-model="empRegion"
                        label="Position"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                  </tr>
                  <!-- Row 2 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Position:</td>
                    <td colspan="2">
                      <v-select
                        :items="empPositionItems"
                        v-model="empPosition"
                        label="Position"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="3" style="text-align: left">Position:</td>
                    <td colspan="3">
                      <v-select
                        :items="raterPositionItems"
                        v-model="empRaterPosition"
                        label="Rater Position"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="1" style="text-align: left">Division:</td>
                    <td colspan="1">
                      <v-select
                        :items="divisionItems"
                        v-model="empDivision"
                        label="Division"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="3" style="text-align: left">Employee ID#:</td>
                    <td colspan="2">
                      <v-text-field
                        v-model="empId"
                        placeholder="Employee ID#"
                        solo
                        dense
                        class="text-center pt-5"
                        type="text"
                      >
                      </v-text-field>
                    </td>
                    <td colspan="3" style="text-align: left">Date of Review:</td>
                    <td colspan="3">
                      <v-text-field
                        v-model="empDateReview"
                        placeholder="Date of Review"
                        solo
                        dense
                        class="text-center pt-5"
                        type="text"
                      >
                      </v-text-field>
                    </td>
                    <td colspan="1" style="text-align: left">District/Municipality:</td>
                    <td colspan="1">
                      <v-text-field
                        v-model="empDistrict"
                        placeholder="District"
                        solo
                        dense
                        class="text-center pt-5"
                        type="text"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- Row 4 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Employment Status:</td>
                    <td colspan="2">
                      <v-select
                        :items="employmentStatusItems"
                        v-model="empStatus"
                        label="Status"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="3" style="text-align: left">Rating Period:</td>
                    <td colspan="3">
                      <v-text-field
                        v-model="empRatingPeriod"
                        placeholder="Rating Period"
                        solo
                        dense
                        class="text-center pt-5"
                        type="text"
                      >
                      </v-text-field>
                    </td>
                    <td colspan="1" style="text-align: left">School ID:</td>
                    <td colspan="1">
                      <v-text-field
                        v-model="empSchoolId"
                        placeholder="School ID"
                        solo
                        dense
                        class="text-center pt-5"
                        type="text"
                      >
                      </v-text-field>
                    </td>
                  </tr>
                  <!-- Row 5 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Age :</td>
                    <td colspan="2">
                      <v-select
                        :items="ageItems"
                        v-model="empAge"
                        label="Age"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="3" style="text-align: left">School Name:</td>
                    <td colspan="3">
                      <v-text-field
                        v-model="empSchoolName"
                        placeholder="School Name"
                        solo
                        dense
                        class="text-center pt-5"
                        type="text"
                      >
                      </v-text-field>
                    </td>
                    <td colspan="1" style="text-align: left">Sex:</td>
                    <td colspan="1">
                      <v-select
                        :items="sexItems"
                        v-model="empSex"
                        label="Sex"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                  </tr>
                  <!-- Row 6 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Level Taught:</td>
                    <td colspan="2">
                      <v-select
                        :items="levelTaughtItems"
                        v-model="empLevelTaught"
                        label="Level Taught"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="3" style="text-align: left">
                      No. of Years in Teaching:
                    </td>
                    <td colspan="3">
                      <v-select
                        :items="noYrsTeachingItems"
                        v-model="empYearsOfTeaching"
                        label="Years of Teaching"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="1" style="text-align: left">School Type:</td>
                    <td colspan="1">
                      <v-select
                        :items="schoolTypeItems"
                        v-model="empSchoolType"
                        label="School Type"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                  </tr>
                  <!-- Row 7 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Grade Level Taught:</td>
                    <td colspan="2">
                      <v-select
                        :items="gradeLevelTaughtItems"
                        v-model="empGradeLevelTaught"
                        label="Grade Level"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="3" style="text-align: left">Highest Degree Obtained:</td>
                    <td colspan="3">
                      <v-select
                        :items="highestDegreeObtainedItems"
                        v-model="empDegree"
                        label="Grade Level"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="1" style="text-align: left">School Size:</td>
                    <td colspan="1">
                      <v-select
                        :items="schoolSizeItems"
                        v-model="empSchoolSize"
                        label="School Size"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                  </tr>

                  <!-- Row 6 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Level Taught:</td>
                    <td colspan="2">
                      <v-select
                        :items="levelTaughtItems"
                        v-model="empLevelTaught"
                        label="Level Taught"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="3" style="text-align: left">
                      No. of Years in Teaching:
                    </td>
                    <td colspan="3">
                      <v-select
                        :items="noYrsTeachingItems"
                        v-model="empYearsOfTeaching"
                        label="Years of Teaching"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="1" style="text-align: left">School Type:</td>
                    <td colspan="1">
                      <v-select
                        :items="schoolTypeItems"
                        v-model="empSchoolType"
                        label="School Type"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                  </tr>
                  <!-- Row 7 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Grade Level Taught:</td>
                    <td colspan="2">
                      <v-select
                        :items="gradeLevelTaughtItems"
                        v-model="empGradeLevelTaught"
                        label="Grade Level"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="3" style="text-align: left">Highest Degree Obtained:</td>
                    <td colspan="3">
                      <v-select
                        :items="highestDegreeObtainedItems"
                        v-model="empDegree"
                        label="Grade Level"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="1" style="text-align: left">School Size:</td>
                    <td colspan="1">
                      <v-select
                        :items="schoolSizeItems"
                        v-model="empSchoolSize"
                        label="School Size"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                  </tr>

                  <!-- Row8 -->
                  <tr>
                    <td colspan="3" style="text-align: left">Subject Taught:</td>
                    <td colspan="2">
                      <v-select
                        :items="subjectTaughtItems"
                        v-model="empSubjectTaught"
                        label="Subject Taught"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>

                    <td colspan="3" style="text-align: left">Area of Specialization:</td>
                    <td colspan="3">
                      <v-select
                        :items="areaofSpecializationItems"
                        v-model="empSpecialization"
                        label="Area of Specialization"
                        dense
                        solo
                        class="text-center pt-5"
                      ></v-select>
                    </td>
                    <td colspan="1" style="text-align: left">
                      Curricular Classification:
                    </td>
                    <td colspan="1">
                      <v-select
                        :items="curricularClassificationItems"
                        v-model="empCurricularClassification"
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

            <!-- START OF KRA COLUMN -->
            <v-row class="text-center">
              <div class="ePart1">
                <template v-for="n in 22">
                  <v-col
                    :key="n"
                    v-if="n === 1"
                    class="ePartCol2"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      style="width: 140px; height: 120px"
                      outlined
                      tile
                    >
                      <h5>
                        KRA <br />
                        <br />
                      </h5>
                    </v-card>
                    <div style="text-align: center">
                      <v-card class="pa-2 pt-6" style="height: 150px" outlined tile>
                        <h5>KRA 1</h5>
                      </v-card>
                      <v-card class="pa-2 pt-6" style="height: 150px" outlined tile>
                        <h5>KRA 2</h5>
                      </v-card>
                      <v-card class="pa-2 pt-6" style="height: 100px" outlined tile>
                        <h5>KRA 3</h5>
                      </v-card>
                      <v-card class="pa-2 pt-6" style="height: 150px" outlined tile>
                        <h5>KRA 4</h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 51px" outlined tile>
                        <h5>Plus Factor</h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 pl-4" style="height: 54px" outlined tile>
                        <h5>Date Observed</h5>
                      </v-card>
                    </div>
                  </v-col>

                  <!-- END OF BASIC EDUCATION COLUMN -->
                  <!-- Start of encoding weighted per kra -->
                  <v-col
                    :key="n"
                    v-else-if="n === 2"
                    class="ePartCol5"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      style="width: 140px; height: 120px"
                      outlined
                      tile
                    >
                      <h5>
                        Weight per KRA<br />
                        <br />
                      </h5>
                    </v-card>
                    <v-card
                      class="pa-2 pt-4 kra1"
                      style="height: 150px"
                      v-model="kra1"
                      outlined
                      tile
                    >
                      <h5 class="font-weight-regular"><br />24.00%<br /><br /></h5>
                    </v-card>
                    <v-card
                      class="pa-2 pt-4 kra2"
                      style="height: 150px"
                      v-model="kra2"
                      outlined
                      tile
                    >
                      <h5 class="font-weight-regular"><br />24.00%<br /><br /><br /></h5>
                    </v-card>
                    <v-card
                      class="pa-2 pt-4 kra3"
                      style="height: 100px"
                      v-model="kra3"
                      outlined
                      tile
                    >
                      <h5 class="font-weight-regular"><br />16.00%<br /><br /><br /></h5>
                    </v-card>
                    <v-card
                      class="pa-2 pt-4 kra4"
                      style="height: 150px"
                      v-model="kra4"
                      outlined
                      tile
                    >
                      <h5 class="font-weight-regular">
                        <br /><br />24.00%<br /><br /><br />
                      </h5>
                    </v-card>
                    <v-card
                      class="pa-4 kra5"
                      style="height: 51px"
                      v-model="kra5"
                      outlined
                      tile
                    >
                      <h5 class="font-weight-regular">12.00%<br /><br /><br /></h5>
                    </v-card>
                    <v-card
                      class="pa-1"
                      style="height: 54px"
                      v-model="dateObserved"
                      outlined
                      tile
                    >
                      <v-text-field style="mb-8"></v-text-field>
                    </v-card>
                  </v-col>
                  <!-- START OF OBJECTIVES COLUMN -->

                  <v-col
                    :key="n"
                    v-else-if="n === 3"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 120px; height: 120px"
                    >
                      <h5>
                        Objectives<br />
                        <br />
                      </h5>
                    </v-card>
                    <div style="text-align: center">
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 1</h5>
                        <br />
                      </v-card>

                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 2</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 3</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 4</h5>
                        <br />
                      </v-card>

                      <v-card class="pa-2" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 5</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 6</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 7</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 8</h5>
                        <br />
                      </v-card>

                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 9</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 10</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 11</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">Objective 12</h5>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- END OF OBJECTIVES COLUMN -->
                  <!-- START OF OBJECTIVES COLUMN -->

                  <v-col
                    :key="n"
                    v-else-if="n === 4"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 120px; height: 120px"
                    >
                      <h5>
                        Weight per <br />
                        Objectives
                        <br />
                      </h5>
                    </v-card>
                    <div style="text-align: center">
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>

                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>

                      <v-card class="pa-2" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>

                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                        <h5 class="font-weight-regular">8 %</h5>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- END OF encoding weighted per OBJECTIVE -->
                  <!-- Start of encoding COT indicator -->
                  <v-col
                    :key="n"
                    v-else-if="n === 5"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 120px; height: 120px"
                    >
                      <h5>
                        COT Indicator No.
                        <br />
                      </h5>
                    </v-card>
                    <div style="text-align: center">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="cotIndicatorNo12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- End of encoding COT indicator -->
                  <!-- Start of encoding COT 1 -->
                  <v-col
                    :key="n"
                    v-else-if="n === 6"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 130px; height: 120px"
                    >
                      <h5>
                        COT 1
                        <br />
                        <v-select
                          :items="items"
                          v-model="kra_cot1Rating1"
                          label=""
                          dense
                          solo
                          class="text-center"
                        ></v-select>
                        <v-card
                          no-gutters
                          style="
                            width: 60px;
                            height: 20px;
                            border-radius: 0;
                            margin-top: -3px;
                            margin-left: -7px;
                          "
                          >Rating
                        </v-card>
                        <v-card
                          no-gutters
                          style="
                            width: 65px;
                            height: 20px;
                            border-radius: 0;
                            margin-top: -20px;
                            margin-left: 55px;
                          "
                          >RPMS 5pt
                        </v-card>
                      </h5>
                    </v-card>
                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <v-text-field
                          v-model="kra_cot1Rating3"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating4"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating13"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1Rating14"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>

                  <!-- End of cot 1 -->
                  <!-- Start of encoding COT 1 Rpms -->

                  <v-col
                    :key="n"
                    v-else-if="n === 7"
                    class="ePartCol3"
                    style="margin-left: -85px"
                  >
                    <br /><br /><br />
                    <br /><br />

                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>

                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- End of COT Rpms -->

                  <!-- Start of encoding COT 2 -->
                  <v-col
                    :key="n"
                    v-else-if="n === 8"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 130px; height: 120px"
                    >
                      <h5>
                        COT 2
                        <br />
                        <v-select
                          :items="items"
                          v-model="kra_cot2Rating1"
                          label=""
                          dense
                          solo
                          class="text-center"
                        ></v-select>
                        <v-card
                          no-gutters
                          style="
                            width: 60px;
                            height: 20px;
                            border-radius: 0;
                            margin-top: -3px;
                            margin-left: -7px;
                          "
                          >Rating
                        </v-card>
                        <v-card
                          no-gutters
                          style="
                            width: 65px;
                            height: 20px;
                            border-radius: 0;
                            margin-top: -20px;
                            margin-left: 55px;
                          "
                          >RPMS 5pt
                        </v-card>
                      </h5>
                    </v-card>
                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <v-text-field
                          v-model="kra_cot2Rating1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot2Rating12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>

                  <!-- End of cot 1 -->
                  <!-- Start of encoding COT 1 Rpms -->

                  <v-col
                    :key="n"
                    v-else-if="n === 9"
                    class="ePartCol3"
                    style="margin-left: -85px"
                  >
                    <br /><br /><br />
                    <br /><br />

                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>

                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot1RpmsObj12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- End of COT 2 -->

                  <!-- Start of encoding COT 3 -->
                  <v-col
                    :key="n"
                    v-else-if="n === 10"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 130px; height: 120px"
                    >
                      <h5>
                        COT 3
                        <br />
                        <v-select
                          :items="cot2Rating"
                          v-model="kra_cot3Rating1"
                          label=""
                          dense
                          solo
                          class="text-center"
                        ></v-select>
                        <v-card
                          no-gutters
                          style="
                            width: 60px;
                            height: 20px;
                            border-radius: 0;
                            margin-top: -3px;
                            margin-left: -7px;
                          "
                          >Rating
                        </v-card>
                        <v-card
                          no-gutters
                          style="
                            width: 65px;
                            height: 20px;
                            border-radius: 0;
                            margin-top: -20px;
                            margin-left: 55px;
                          "
                          >RPMS 5pt
                        </v-card>
                      </h5>
                    </v-card>
                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <v-text-field
                          v-model="kra_cot3Rating1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rating12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>

                  <!-- End of cot3 rating -->
                  <!-- Start of encoding COT 3 Rpms -->

                  <v-col
                    :key="n"
                    v-else-if="n === 11"
                    class="ePartCol3"
                    style="margin-left: -85px"
                  >
                    <br /><br /><br />
                    <br /><br />

                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>

                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot3Rpms12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- End of COT  3 Rpms -->

                  <!-- Start of encoding COT 4 -->
                  <v-col
                    :key="n"
                    v-else-if="n === 12"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 130px; height: 120px"
                    >
                      <h5>
                        COT 4
                        <br />
                        <v-select
                          :items="cot4Rating"
                          v-model="kra_cot4Rating1"
                          label=""
                          dense
                          solo
                          class="text-center"
                        ></v-select>
                        <v-card
                          no-gutters
                          style="
                            width: 60px;
                            height: 20px;
                            border-radius: 0;
                            margin-top: -3px;
                            margin-left: -7px;
                          "
                          >Rating
                        </v-card>
                        <v-card
                          no-gutters
                          style="
                            width: 65px;
                            height: 20px;
                            border-radius: 0;
                            margin-top: -20px;
                            margin-left: 55px;
                          "
                          >RPMS 5pt
                        </v-card>
                      </h5>
                    </v-card>
                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <v-text-field
                          v-model="kra_cot4Rating1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rating12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>

                  <!-- End of cot 3 -->
                  <!-- Start of encoding COT 4 Rpms -->

                  <v-col
                    :key="n"
                    v-else-if="n === 13"
                    class="ePartCol3"
                    style="margin-left: -85px"
                  >
                    <br /><br /><br />
                    <br /><br />

                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>

                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="kra_cot4Rpms12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- End of COT 4  -->

                  <!-- Start of encoding average -->
                  <v-col
                    :key="n"
                    v-else-if="n === 14"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 120px; height: 120px"
                    >
                      <h5>
                        AVE
                        <br />
                      </h5>
                    </v-card>
                    <div style="text-align: center; width: 120px">
                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage1"
                        outlined
                        tile
                      >
                        <h5></h5>

                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage2"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage3"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage4"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage5"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage6"
                        outlined
                        tile
                      >
                        <h5></h5>

                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage7"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage8"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage9"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage10"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage11"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encodingAverage12"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>
                    </div>
                  </v-col>

                  <!-- End of encoding Average-->

                  <!-- Start of IPCRF  NUMERICAL RATING -->
                  <v-col
                    :key="n"
                    v-else-if="n === 15"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 260px; height: 120px"
                    >
                      <h5>
                        IPCRF NUMERICAL RATING
                        <br />
                      </h5>
                      <v-card
                        no-gutters
                        style="
                          width: 57px;
                          height: 20px;
                          border-radius: 0;
                          margin-top: 62px;
                          margin-left: -7px;
                        "
                        >Q
                      </v-card>
                      <v-card
                        no-gutters
                        style="
                          width: 57px;
                          height: 20px;
                          border-radius: 0;
                          margin-top: -20px;
                          margin-left: 57px;
                        "
                        >E
                      </v-card>
                      <v-card
                        no-gutters
                        style="
                          width: 57px;
                          height: 20px;
                          border-radius: 0;
                          margin-top: -20px;
                          margin-left: 120px;
                        "
                        >T
                      </v-card>
                      <v-card
                        no-gutters
                        style="
                          width: 65px;
                          height: 20px;
                          border-radius: 0;
                          margin-top: -20px;
                          margin-left: 185px;
                        "
                      >
                        AVE
                      </v-card>
                    </v-card>
                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumericalQ12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>

                  <!-- End of cot 3 -->
                  <!-- Start of IPCRF (E) -->

                  <v-col
                    :key="n"
                    v-else-if="n === 16"
                    class="ePartCol3"
                    style="margin-left: -220px"
                  >
                    <br /><br /><br />
                    <br /><br />

                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>

                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_E12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- END OF IPCRF (E) -->
                  <!-- Start of IPCRF (T) -->

                  <v-col
                    :key="n"
                    v-else-if="n === 17"
                    class="ePartCol3"
                    style="margin-left: -20px"
                  >
                    <br /><br /><br />
                    <br /><br />

                    <div style="text-align: center; width: 60px">
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T1"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>

                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T2"
                          placeholder=""
                          solo
                          dense
                          style="width: 100px"
                          class="text-center"
                          type="text"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T3"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T4"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T5"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T6"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T7"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T8"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T9"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T10"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T11"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>

                      <v-card class="pa-1" style="height: 50px" outlined tile>
                        <v-text-field
                          v-model="encoding_ipcrfNumerical_T12"
                          placeholder=""
                          solo
                          dense
                          class="text-center"
                          type="text"
                          style="width: 100px"
                        >
                        </v-text-field>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- END OF IPCRF (T) -->
                  <!-- Start of IPCRF (RATING AVERAGE) -->

                  <v-col
                    :key="n"
                    v-else-if="n === 18"
                    class="ePartCol3"
                    style="margin-left: -20px"
                  >
                    <br /><br /><br />
                    <br /><br />

                    <div style="text-align: center; width: 68px">
                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve1"
                        outlined
                        tile
                      >
                        <h5></h5>

                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve2"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve3"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve4"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve5"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve6"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve7"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve8"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve9"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>
                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve10"
                        outlined
                        tile
                      >
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve11"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-1"
                        style="height: 50px"
                        v-model="encoding_ipcrfRatingAve12"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>
                    </div>
                  </v-col>
                  <!-- END OF IPCRF (average) -->
                  <!-- Start of encoding SCORE -->
                  <v-col
                    :key="n"
                    v-else-if="n === 19"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 120px; height: 120px"
                    >
                      <h5>
                        SCORE
                        <br />
                      </h5>
                    </v-card>
                    <div style="text-align: center; width: 120px">
                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_1"
                        outlined
                        tile
                      >
                        <h5></h5>

                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_2"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_3"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_4"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_5"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_6"
                        outlined
                        tile
                      >
                        <h5></h5>

                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_7"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_8"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_9"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_10"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_11"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_12"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>
                    </div>
                  </v-col>

                  <!-- End of encoding SCORE-->
                  <!-- Start of encoding SCORE -->
                  <v-col
                    :key="n"
                    v-else-if="n === 20"
                    class="ePartCol3"
                    style="margin-left: -25px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      style="width: 120px; height: 120px"
                    >
                      <h5>
                        Adjectival Rating
                        <br />
                      </h5>
                    </v-card>
                    <div style="text-align: center; width: 120px">
                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating1"
                        outlined
                        tile
                      >
                        <h5></h5>

                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating2"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating3"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating4"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating5"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating6"
                        outlined
                        tile
                      >
                        <h5></h5>

                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating7"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating8"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating9"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating10"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating11"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>

                      <v-card
                        class="pa-4"
                        style="height: 50px"
                        v-model="encoding_AdjectivalRating12"
                        outlined
                        tile
                      >
                        <h5></h5>
                        <br />
                      </v-card>
                    </div>
                  </v-col>

                  <!-- End of encoding ADJECTIVAL RATING-->
                  <!-- Start of encoding SCORE -->
                  <v-col
                    :key="n"
                    v-else-if="n === 21"
                    class="ePartCol3"
                    style="margin-left: -641px; margin-top: 720px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      v-model="empAdjRating1"
                      style="width: 379px; height: 50px"
                    >
                      <h5>
                        Final Rating
                        <br />
                      </h5>
                    </v-card>
                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="empAdjRating12"
                      outlined
                      tile
                    >
                      <h5>Adjectival Rating</h5>
                      <br />
                    </v-card>
                  </v-col>

                  <!-- End of encoding bottom ADJECTIVAL RATING-->
                  <!-- Start of encoding SCORE -->
                  <v-col
                    :key="n"
                    v-else-if="n === 22"
                    class="ePartCol3"
                    style="margin-left: -25px; margin-top: 720px"
                  >
                    <v-card
                      class="pa-2 pt-4"
                      outlined
                      tile
                      v-model="empFinalRating"
                      style="width: 240px; height: 50px"
                    >
                      <h5>
                        <br />
                      </h5>
                    </v-card>
                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="empAdjRating"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>
                  </v-col>

                  <!-- End of encoding ADJECTIVAL RATING-->
                </template>
              </div>
            </v-row>
            <br />
            <div style="margin-left: 350px">
              <v-col>
                <h5 class="pa-2" style="margin-left: 70px">Approving Authority</h5>

                <v-text-field
                  v-model="part_approvingAuthority"
                  placeholder="Enter Approving Authority"
                  solo
                  dense
                  type="text"
                  style="width: 300px"
                >
                </v-text-field>
              </v-col>
            </div>

            <v-card class="mx-auto" max-width="600">
              <v-card-text>
                <div class="text--primary">
                  <b> NOTE:</b><br />

                  When COT and QET ratings are encoded, click Finalize Part 1. Give the
                  file copy to the teacher concerned. The teacher shall accomplish Parts 2
                  & 4.
                </div>
              </v-card-text>
            </v-card>
            <br /><br />
            <v-container class="grey lighten-5">
              <v-card class="pa-2 text-center" color="grey lighten-2" outlined tile>
                <b>PART 2: CORE BEHAVIORAL COMPETENCIES</b>
              </v-card>
              <br />
              <v-card class="mx-auto" max-width="900">
                <v-card-text>
                  <div class="text--primary">
                    <b> INSTRUCTIONS:</b><br />

                    &nbsp;&nbsp; Part 2 shall be acomplished by the Ratee after the Rater
                    accomplishes Part 1. Please tick the box of the competency indicators
                    that you demonstrated during the performance cycle. The results of
                    your assessment can be found in the PART 2 sheet.
                  </div>
                </v-card-text>
              </v-card>
              <br />
              <v-row no-gutters>
                <v-col v-for="n in 2" :key="n" class="text-justify">
                  <v-flex md11 sm6>
                    <v-card v-if="n === 1" class="mx-auto" max-width="500">
                      <v-card-text>
                        <div class="text--primary">
                          <b>Self- Management</b><br />
                          1.Sets personal goals and directions, needs and development.
                          <br />
                          2.Undertakes personal actions and behavior that are clear and
                          purposive and takes into account personal goals and values
                          congruent to that of the organization. <br />
                          3.Displays emotional maturity and enthusiasm for and is
                          challenged by higher goals. <br />
                          4.Prioritizes work tasks and schedules (through Gantt chants,
                          checklists, etc.) to achieve goals. <br />
                          5.Sets high quality, challenging, realistic goals for self and
                          others. <br />
                        </div>
                      </v-card-text>
                    </v-card>

                    <v-card v-if="n === 2" class="mx-auto" max-width="500">
                      <v-card-text>
                        <div class="text--primary">
                          <b>Teamwork</b><br />
                          1. Willingly does his/her share of responsibility.
                          <br />
                          2.Promotes collaboration and removes barrier to teamwork and
                          goal accomplishment across the organization. <br />
                          3.Applies negotiation principles in arriving at win-win
                          agreements. <br />
                          4. Drives consensus and team ownership of decisions.
                          <br />
                          5. Works constructively and collaboratively with others and
                          across organizations to accomplish organization goals and
                          objectives.
                          <br /><br /><br />
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
                          1.Demonstrates the values and behavior enshrined in the Norms
                          and Conduct and Ethical Standards for Public Officials and
                          Employees (RA 6713). <br />
                          2.Practices ethical and professional behavior and conduct taking
                          into account the impact of his/her actions and decisions. <br />
                          3.Maintains a professional image: being trustworthy, regularity
                          of attendance and punctuality, good grooming and communication.
                          <br />
                          4.Makes personal sacrifices to meet the organization’s needs.
                          <br />
                          5.Acts with a sense of urgency and responsibility to meet the
                          organization’s needs, improve system and help others improve
                          their effectiveness.
                        </div>
                      </v-card-text>
                    </v-card>

                    <v-card v-if="n === 2" class="mx-auto" max-width="500">
                      <v-card-text>
                        <div class="text--primary">
                          <b>Service Orientation</b><br />
                          1. Can explain and articulate organizational directions, issues
                          and problems. <br />
                          2. Takes personal responsibility for dealing with and/or
                          correcting customer service issues and concerns. <br />
                          3. Initiates activities that promote advocacy for men and women
                          empowerment. <br />
                          4. Participates in updating office vision, mission, mandates and
                          strategies based on DepEd strategies and directions. <br />
                          5. Develops and adopts service improvement program through
                          simplified procedures that will further enhance service
                          delivery.
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
                          1. Achieves results with optimal use of time and resources most
                          of the time.<br />
                          2. Avoids rework, mistakes and wastage through effective work
                          methods by placing organizational needs before personal needs.
                          <br />
                          3. Delivers error-free outputs most of the time by conforming to
                          standard operating procedures correctly and consistently. Able
                          to produce very satisfactory quality work in terms of
                          usefulness/acceptability and completeness with no supervision
                          required. <br />
                          4. Expresses a desire to do better and may express frustration
                          at waste or inefficiency. May focus on new or more precise ways
                          of meeting goals set. <br />
                          5. Makes specific changes in the system or in own work methods
                          to improve performance. Examples may include doing something
                          better, faster, at a lower cost, more efficiently, or improving
                          quality, customer satisfaction, morale, without setting any
                          specific goal.
                        </div>
                      </v-card-text>
                    </v-card>

                    <v-card v-if="n === 2" class="mx-auto" max-width="500">
                      <v-card-text>
                        <div class="text--primary">
                          <b>Innovation</b><br />
                          1. Examines the root cause of problems and suggests effective
                          solutions. Foster new ideas, processes and suggests better ways
                          to do things (cost and/or operational efficiency). <br />
                          2. Demonstrates an ability to think “beyond the box”.
                          Continuously focuses on improving personal productivity to
                          create higher value and results.
                          <br />
                          3. Promotes a creative climate and inspires co-workers to
                          develop original ideas or solutions.<br />
                          4. Translates creative thinking into tangible changes and
                          solutions that improve the work unit and organization. <br />
                          5. Uses ingenious methods to accomplish responsibilities.
                          Demonstrates resourcefulness and the ability to succeed with
                          minimal resources.
                          <br /><br />
                          <br /><br />
                        </div>
                      </v-card-text>
                    </v-card>
                  </v-flex>
                </v-col>
              </v-row>
              <br />
              <v-card class="mx-auto" max-width="600">
                <v-card-text>
                  <div class="text--primary">
                    <b> NOTE:</b><br />

                    Click Finalize Part 2 to save your data. You can now proceed to the
                    preparation of the Part IV: Development Plan, based on the results of
                    Part 1 and Part 2 of the IPCRF.
                  </div>
                </v-card-text>
              </v-card>
              <br />

              <div class="pa-2" align="center">
                <v-btn color="primary"> PREVIOUS </v-btn>
                <v-btn color="primary" class="ml-2"> NEXT </v-btn>
              </div>
            </v-container>
          </v-card>
        </v-tab-item>
        <!-- End of Encoding part 1 -->

        <!-- START OF Part 1 Content -->

        <v-tab ref="#tab3">Part 1 - Proficient</v-tab>

        <v-tab-item>
          <div id=" encodingPart1 ">
            <v-app id="encodingContent">
              <v-container class="grey lighten-5" style="height: 100%">
                <v-card class="pa-2 text-center" color="grey lighten-2" outlined tile>
                  <b
                    >INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM (IPCRF) for Teacher
                    I-III, SPET I-IV, Special Science Teacher I-II</b
                  >
                </v-card>

                <v-row no-gutters>
                  <v-col v-for="n in 2" :key="n" class="">
                    <v-card
                      v-if="n === 1"
                      class="pa-4"
                      outlined
                      tile
                      style="height: 220px"
                    >
                      <tr>
                        <td colspan="3" style="text-align: left">
                          <v-subheader>
                            Name of Employee :
                            <b class="ml-10">&nbsp;{{ empName }} </b>
                          </v-subheader>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" style="text-align: left">
                          <v-subheader> Position: </v-subheader>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" style="text-align: left">
                          <v-subheader> Bureau/Center/Service/Division:</v-subheader>
                        </td>
                        <v-row> </v-row>
                      </tr>
                      <tr>
                        <td colspan="3" style="text-align: left">
                          <v-subheader> Rating Period: </v-subheader>
                        </td>
                      </tr>
                    </v-card>

                    <v-card
                      v-else-if="n === 2"
                      class="pa-4"
                      outlined
                      tile
                      style="height: 220px"
                    >
                      <tr>
                        <td colspan="3" style="text-align: left">
                          <v-subheader>Name of Rater: </v-subheader>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" style="text-align: left">
                          <v-subheader> Position: </v-subheader>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" style="text-align: left">
                          <v-subheader> Date of Review:</v-subheader>
                        </td>
                      </tr>
                    </v-card>
                  </v-col>
                </v-row>
                <v-card class="pa-2 text-center" color="grey lighten-2" outlined tile>
                  <b>TO BE FILLED OUT DURING PLANNING </b>
                </v-card>
                <!-- ePart2 row 1 -->

                <!-- <v-col no-gutters class="text-center" >
                <template v-for="n in 15">
                  <v-row :key="n" v-if="n === 1">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h5>MFOs</h5></v-card
                    >
                  </v-row>
                  <v-row :key="n" v-if="n === 2">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h5>MFOs</h5></v-card
                    >
                  </v-row>
                </template>
                
              </v-col>
               -->

                <!-- first row -->

                <!-- START OF MFO COLUMN -->
                <v-row class="text-center">
                  <div class="ePart1">
                    <template v-for="n in 15">
                      <v-col :key="n" v-if="n === 1" class="ePartCol1">
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            MFOs <br />
                            <br /></h5
                        ></v-card>

                        <!-- END OF MFO COLUMN -->

                        <!-- START OF BASIC EDUCATION COLUMN -->
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 97.05%; width: 100px"
                          outlined
                          tile
                        >
                          <h5>Basic Education Services</h5></v-card
                        >
                      </v-col>

                      <v-col
                        :key="n"
                        v-else-if="n === 2"
                        class="ePartCol2"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 180px" outlined tile>
                          <h5>
                            KRAs <br />
                            <br />
                          </h5>
                        </v-card>
                        <div style="text-align: left">
                          <v-card class="pa-2 pt-4" style="height: 520px" outlined tile>
                            <h5>1. Content Knowledge and Pedagogy</h5>
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 503px" outlined tile>
                            <h5>2. Diversity of Learners and Assessment and Reporting</h5>
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 291px" outlined tile>
                            <h5>3. Curriculum and Planning</h5>
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 661px" outlined tile>
                            <h5>
                              4. Community Linkages and Professional Engagement and
                              Personal Growth and Professional Development
                            </h5>
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 217px" outlined tile>
                            <h5>5. Plus Factor</h5>
                          </v-card>
                        </div>
                      </v-col>

                      <!-- END OF BASIC EDUCATION COLUMN -->
                      <!-- START OF OBJECTIVES COLUMN -->

                      <v-col
                        :key="n"
                        v-else-if="n === 3"
                        class="ePartCol3"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" outlined tile style="width: 300px">
                          <h5>
                            Objectives<br />
                            <br />
                          </h5>
                        </v-card>
                        <div style="text-align: center">
                          <v-card class="pa-2 pt-4" style="height: 150px" outlined tile>
                            <h5 class="font-weight-regular">
                              1. Applied knowledge of content within <br />
                              and across curriculum teaching areas.
                            </h5>
                            <br />
                          </v-card>

                          <v-card class="pa-2 pt-4" style="height: 180px" outlined tile>
                            <h5 class="font-weight-regular">
                              2. Ensured the positive use of ICT to facilitate the
                              teaching and learning process
                            </h5>
                            <br />
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 190px" outlined tile>
                            <h5 class="font-weight-regular">
                              3. Applied a range of teaching strategies to develop
                              critical and creative thinking, as well as other
                              higher-order thinking skills.
                            </h5>
                            <br />
                          </v-card>
                          <v-card class="pa-2 pt-8" style="height: 185px" outlined tile>
                            <h5 class="font-weight-regular">
                              4. Established a learnercentered culture by using teaching
                              strategies that respond to their linguistic, cultural,
                              socioeconomic and religious backgrounds
                            </h5>
                            <br />
                          </v-card>

                          <v-card class="pa-2" style="height: 146px" outlined tile>
                            <h5 class="font-weight-regular">
                              5. Planned and delivered teaching strategies that are
                              responsive to the special educational needs of learners in
                              difficult circumstances*, including: geographic isolation;
                              chronic illness; displacement due to armed conflict, urban
                              resettlement or disasters; child abuse and child labor
                              practices
                            </h5>
                            <br />
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 172px" outlined tile>
                            <h5 class="font-weight-regular">
                              6. Used strategies for providing timely, accurate and
                              constructive feedback to improve learner performance
                            </h5>
                            <br />
                          </v-card>
                          <v-card class="pa-1" style="height: 145px" outlined tile>
                            <h5 class="font-weight-regular">
                              7. Selected, developed, organized and used appropriate
                              teaching and learning resources, including ICT, to address
                              learning goals
                            </h5>
                            <br />
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 146px" outlined tile>
                            <h5 class="font-weight-regular">
                              8. Set achievable and appropriate learning outcomes that are
                              aligned with learning competencies
                            </h5>
                            <br />
                          </v-card>

                          <v-card class="pa-2 pt-4" style="height: 217px" outlined tile>
                            <h5 class="font-weight-regular">
                              9. Built relationships with parents/ guardians and the wider
                              school community to facilitate involvement in the educative
                              process
                            </h5>
                            <br />
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 247px" outlined tile>
                            <h5 class="font-weight-regular">
                              10. Participated in professional networks to share knowledge
                              and to enhance practice
                            </h5>
                            <br />
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 197px" outlined tile>
                            <h5 class="font-weight-regular">
                              11. Developed a personal improvement plan based on
                              reflection of one’s practice and ongoing professional
                              learning
                            </h5>
                            <br />
                          </v-card>
                          <v-card class="pa-2 pt-4" style="height: 217px" outlined tile>
                            <h5 class="font-weight-regular">
                              12. Performed various related works/ activities that
                              contribute to the teaching-learning process
                            </h5>
                            <br />
                          </v-card>
                        </div>
                      </v-col>
                      <!-- END OF OBJECTIVES COLUMN -->
                      <!-- START OF TIMELINE COLUMN -->

                      <v-col
                        :key="n"
                        v-else-if="n === 4"
                        class="ePartCol4"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 100px" outlined tile>
                          <h5>
                            Timeline <br />
                            <br />
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 150px"
                          v-model="timeline1"
                          outlined
                          tile
                        >
                          <h5 class="timeline01"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 180px"
                          v-model="timeline2"
                          outlined
                          tile
                        >
                          <h5 class="timeline02"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 190px"
                          v-model="timeline3"
                          outlined
                          tile
                        >
                          <h5 class="timeline03"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 185px"
                          v-model="timeline4"
                          outlined
                          tile
                        >
                          <h5 class="timeline04"></h5>
                        </v-card>

                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 146px"
                          v-model="timeline5"
                          outlined
                          tile
                        >
                          <h5 class="timeline05"></h5>
                        </v-card>

                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 172px"
                          v-model="timeline6"
                          outlined
                          tile
                        >
                          <h5 class="timeline06"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 145px"
                          v-model="timeline7"
                          outlined
                          tile
                        >
                          <h5 class="timeline07"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 146px"
                          v-model="timeline8"
                          outlined
                          tile
                        >
                          <h5 class="timeline08"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 217px"
                          v-model="timeline9"
                          outlined
                          tile
                        >
                          <h5 class="timeline09"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 247px"
                          v-model="timeline10"
                          outlined
                          tile
                        >
                          <h5 class="timeline010"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 197px"
                          v-model="timeline11"
                          outlined
                          tile
                        >
                          <h5 class="timeline11"></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 timeline"
                          style="height: 217px"
                          v-model="timeline12"
                          outlined
                          tile
                        >
                          <h5 class="timeline12"></h5>
                        </v-card>
                      </v-col>
                      <v-col
                        :key="n"
                        v-else-if="n === 5"
                        class="ePartCol5"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 140px" outlined tile>
                          <h5>
                            Weight per KRA<br />
                            <br />
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 kra1"
                          style="height: 520px"
                          v-model="kra1"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular"><br />24.00%<br /><br /></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 kra2"
                          style="height: 503px"
                          v-model="kra2"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            <br />24.00%<br /><br /><br />
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 kra3"
                          style="height: 291px"
                          v-model="kra3"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            <br />16.00%<br /><br /><br />
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 kra4"
                          style="height: 661px"
                          v-model="kra4"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            <br /><br />24.00%<br /><br /><br />
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 kra5"
                          style="height: 217px"
                          v-model="kra5"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            <br />12.00%<br /><br /><br />
                          </h5>
                        </v-card>
                      </v-col>

                      <v-col
                        :key="n"
                        v-else-if="n === 6"
                        class="ePartCol6"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 100px" outlined tile>
                          <h5>
                            QET <br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-2 pt-4 qet" style="height: 86px" outlined tile>
                          <h5 class="font-weight-regular">
                            <br />
                            Quality<br />
                            <br /></h5></v-card
                        ><v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        ><v-card class="pa-1 pb-2" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" style="height: 125px" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        >
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" style="height: 126px" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        >
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" style="height: 125px" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5></v-card
                        ><v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        ><v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        >
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        >
                        <v-card class="pa-1" style="height: 56px" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" style="height: 86px" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5></v-card
                        ><v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        ><v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        >
                        <v-card class="pa-1" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-6 pt-4 qet" style="height: 125px" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-4" style="height: 46px" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        >
                        <v-card class="pa-2" style="height: 46px" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" style="height: 136px" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5></v-card
                        ><v-card class="pa-4" style="height: 65px" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        ><v-card class="pa-3" style="height: 46px" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-2 pt-4 qet" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-4" style="height: 65px" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        >
                        <v-card class="pa-4" style="height: 46px" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                        <v-card class="pa-6 qet" style="height: 125px" outlined tile>
                          <h5 class="font-weight-regular">
                            Quality <br /><br />
                            <br /></h5
                        ></v-card>
                        <v-card class="pa-4" style="height: 46px" outlined tile>
                          <h5 class="font-weight-regular">Efficiency</h5></v-card
                        >
                        <v-card class="pa-4" style="height: 46px" outlined tile>
                          <h5 class="font-weight-regular">Timeliness</h5></v-card
                        >
                      </v-col>
                      <!-- START OF OUTSTANDING -->
                      <v-col
                        :key="n"
                        v-else-if="n === 7"
                        class="ePartCol7"
                        style="margin-left: -25px"
                      >
                        <v-card
                          class="pa-2 pt-4 part1Outstanding"
                          style="width: 290px"
                          outlined
                          tile
                        >
                          <h5>
                            Outstanding <br />
                            5
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Demonstrated Level 7 in Objective 1 as shown in COT rating
                            sheets/interobserver agreement forms <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-4" style="height: 64px" outlined tile>
                          <h5>2 blank</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Ensured that the ICT used redefine and transform learning
                            experiences and are documented properly and consistently using
                            any referencing style as shown in the submitted learning
                            material <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Applied teaching strategies that challenge learners to draw
                            conclusions and justify their thinking or put parts together
                            to promote deeper understanding of ideas learned as shown in
                            the submitted learning material
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>

                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Utilized effective teaching strategies that are appropriate in
                            responding to learners’ linguistic, cultural, socioeconomic,
                            or religious backgrounds at an individual level* as shown in
                            the submitted learning material <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Demonstrated Level 7 in Objective 5 as shown in COT rating
                            sheets/interobserver agreement forms <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Provided learners with accurate, and specific and directed
                            constructive feedback* as shown in the evidence submitted
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-1" style="height: 30px" outlined tile>
                          <h5>efficiency black <br /></h5>
                        </v-card>
                        <v-card
                          class="pa-2 part1Outstanding"
                          style="height: 56px"
                          outlined
                          tile
                        >
                          <h5>
                            MOV submitted shows feedback given within 5 working days from
                            submission** <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Demonstrated Level 7 in Objective 7 as shown in COT rating
                            sheets/interobserver agreement forms <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            All of the learning outcomes set are aligned with the learning
                            competencies as shown in the MOV submitted
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Sustained engagement with parents/ guardians and/ or wider
                            school community to facilitate involvement in the educative
                            process as evidenced by 2 or more of MOV no. 1 or 2 <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>Submitted any 4 of the acceptable MOV*<br /></h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4 1 Timeliness black <br /></h5>
                        </v-card>

                        <v-card
                          class="pa-2 part1Outstanding"
                          style="height: 136px"
                          outlined
                          tile
                        >
                          <h5>
                            Participated in any professional network/ activity that
                            requires output* and proof of implementation ** within the
                            school to share knowledge and to enhance practice as evidenced
                            by the submitted MOV <br />
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Outstanding"
                          style="height: 65px"
                          outlined
                          tile
                        >
                          <h5>Submitted 4 different kinds of acceptable MOV***<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4.2 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Updated the Development Plan and approved by the rater during
                            Phase II of the RPMS cycle <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>
                            Submitted the IPCRF-DP with any 4 of the acceptable Supporting
                            MOV* <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4.3 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Outstanding"
                          style="height: 125px"
                          outlined
                          tile
                        >
                          <h5>
                            Performed at least 1 related work/activity that contributed to
                            the teaching-learning process beyond the school/ Community
                            Learning Center (CLC) as evidenced by submitted MOV <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                          <h5>Submitted any 4 of the acceptable MOV* <br /></h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>5.1 Timeliness Black<br /></h5>
                        </v-card>
                      </v-col>

                      <!-- START OF Very Satisfactory  -->

                      <v-col
                        :key="n"
                        v-if="n === 8"
                        class="ePart8"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 290px" outlined tile>
                          <h5>
                            Very Satisfactory <br />

                            4
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 6 in Objective 1 as shown in COT rating
                            sheets/interobserver agreement forms <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 64px" outlined tile>
                          <h5>2 blank <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Ensured that the ICT used augment and enrich learning
                            experiences and are documented properly and consistently using
                            any referencing style as shown in the submitted learning
                            material<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 126px" outlined tile>
                          <h5>
                            Applied teaching strategies that require learners to make
                            connections using ideas learned as shown in the submitted
                            learning material
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5>
                            Utilized effective teaching strategies that are appropriate in
                            responding to learners’ linguistic, cultural, socioeconomic,
                            or religious backgrounds at a group level* as shown in the
                            submitted learning material
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 6 in Objective 5 as shown in COT rating
                            sheets/interobserver agreement forms<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Provided learners with accurate, and specific constructive
                            feedback as shown in the evidence submitted
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-1" style="height: 30px" outlined tile>
                          <h5>efficiency black <br /></h5>
                        </v-card>
                        <v-card class="pa-2" style="height: 56px" outlined tile>
                          <h5>
                            MOV submitted shows feedback given within 6-10 working days
                            from submission**<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 6 in Objective 7 as shown in COT rating
                            sheets/interobserver agreement forms <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            Majority of the learning outcomes set are aligned with the
                            learning competencies as shown in the MOV submitted
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5>
                            Secured collaboration with parents/ guardians and/ or wider
                            school community to facilitate involvement in the educative
                            process as evidenced by one MOV no. 1 or 2
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 46px" outlined tile>
                          <h5>Submitted any 3 of the acceptable MOV*<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 46px" outlined tile>
                          <h5>#4 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2" style="height: 136px" outlined tile>
                          <h5>
                            Participated in any professional network/ activity that
                            requires output* and proof of implementation ** within the
                            department/grade level to share knowledge and to enhance
                            practice as evidenced by the submitted MOV<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 65px" outlined tile>
                          <h5>Submitted 3 different kinds of acceptable MOV***<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 46px" outlined tile>
                          <h5>#4.2 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            Discussed progress on the Development Plan with the rater to
                            check whether Development Needs were addressed
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Submitted the IPCRF-DP with any 3 of the acceptable Supporting
                            MOV* <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4.3 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5>
                            Performed at least 1 related work/activity that contributed to
                            the teaching-learning process within the school/ Community
                            Learning Center (CLC) as evidenced by submitted MOV <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Submitted any 3 of the acceptable MOV* <br /></h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>5.1 Timeliness Black<br /></h5>
                        </v-card>
                      </v-col>
                      <!-- END OF VERY Satisfactory -->

                      <!-- START OF  Satisfactory -->
                      <v-col
                        :key="n"
                        v-else-if="n === 9"
                        class="ePartCol9"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 290px" outlined tile>
                          <h5>
                            Satisfactory <br />

                            3 <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 5 in Objective 1 as shown in COT rating
                            sheets/interobserver agreement forms <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 64px" outlined tile>
                          <h5>2 blank <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Ensured that the ICT used modify processes and improve
                            learning experiences and are documented properly and
                            consistently using any referencing style as shown in the
                            submitted learning material<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 126px" outlined tile>
                          <h5>
                            Applied teaching strategies that require learners to describe
                            and explain ideas learned as shown in the submitted learning
                            material
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5>
                            Utilized an effective teaching strategy that is appropriate in
                            responding to learners’ linguistic, cultural, socioeconomic,
                            or religious backgrounds as shown in the submitted learning
                            material<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 5 in Objective 5 as shown in COT rating
                            sheets/interobserver agreement forms<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Provided learners with accurate, and general constructive
                            feedback as shown in the evidence submitted
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-1" outlined tile>
                          <h5>efficiency black <br /></h5>
                        </v-card>
                        <v-card class="pa-2" style="height: 56px" outlined tile>
                          <h5>
                            MOV submitted shows feedback given within 11-20 working days
                            from submission**<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            Demonstrated Level 5 in Objective 7 as shown in COT rating
                            sheets/interobserver agreement forms <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            Half of the learning outcomes set are aligned with the
                            learning competencies as shown in the MOV submitted
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Communicated with and obtained response from parents/
                            guardians and/ or wider school community to facilitate
                            involvement in the educative process as evidenced by MOV No. 3
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Submitted any 2 of the acceptable MOV*<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 136px" outlined tile>
                          <h5>
                            Participated in any professional network/ activity that
                            requires output* to share knowledge and to enhance practice as
                            evidenced by the submitted MOV<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 65px" outlined tile>
                          <h5>Submitted 2 different kinds of acceptable MOV***<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 46px" outlined tile>
                          <h5>#4.2 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-1" style="height: 86px" outlined tile>
                          <h5>
                            Accomplished the Development Plan from learning objectives up
                            to resources needed to address Development Needs during Phase
                            I of the RPMS cycle<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 65px" outlined tile>
                          <h5>
                            Submitted the IPCRF-DP with any 2 of the acceptable Supporting
                            MOV* <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4.3 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5>
                            Performed at least 1 related work/activity that contributed to
                            the teaching-learning process within the learning area/
                            department as evidenced by submitted MOV<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Submitted any 2 of the acceptable MOV* <br /></h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>5.1 Timeliness Black<br /></h5>
                        </v-card>
                      </v-col>

                      <!-- END OF Satisfactory  -->
                      <!-- START OF Unsatisfactory  -->
                      <v-col
                        :key="n"
                        v-else-if="n === 10"
                        class="ePartCol10"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 290px" outlined tile>
                          <h5>
                            Unsatisfactory <br />
                            2 <br />
                          </h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 4 in Objective 1 as shown in COT rating
                            sheets/interobserver agreement forms<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 64px" outlined tile>
                          <h5>2 blank <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Ensured that ICT are used but do not create a new learning
                            experience and/or are documented but not consistent with one
                            referencing style as shown in the submitted learning
                            material<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Applied teaching strategies that lead learners along a single
                            path of inquiry and/or to simple recall and rote memorization
                            of concepts as shown in the submitted learning material
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Utilized a teaching strategy or strategies that partially
                            respond to learners’ linguistic, cultural, socioeconomic, or
                            religious backgrounds as shown in the submitted learning
                            material<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 4 in Objective 5 as shown in COT rating
                            sheets/interobserver agreement forms<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Provided learners with inaccurate and/or destructive feedback
                            as shown in the evidence submitted
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-1" outlined tile>
                          <h5>efficiency black <br /></h5>
                        </v-card>
                        <v-card class="pa-2" style="height: 56px" outlined tile>
                          <h5>
                            MOV submitted shows feedback given beyond 20 working days from
                            submission**<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 4 in Objective 7 as shown in COT rating
                            sheets/interobserver agreement forms <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            Less than half of the learning outcomes set are aligned with
                            the learning competencies as shown in the MOV submitted
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Communicated with parents/ guardians and/or wider school
                            community to facilitate involvement in the educative process
                            but received no response/reply as evidenced by MOV No. 3
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Submitted any 1 of the acceptable MOV<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 136px" outlined tile>
                          <h5>
                            Participated in any professional network/ activity that does
                            not require output to share knowledge and to enhance practice
                            as evidenced by the submitted MOV<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 65px" outlined tile>
                          <h5>Submitted 1 of the acceptable MOV<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4.2 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-1" style="height: 86px" outlined tile>
                          <h5>
                            Accomplished the Strengths and Development Needs portion of
                            the Development Plan after self-assessment at the beginning of
                            the school year<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 65px" outlined tile>
                          <h5>
                            Submitted the IPCRF-DP with any 1 of the acceptable Supporting
                            MOV <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4.3 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5>
                            Performed at least 1 related work/activity that contributed to
                            the teaching-learning process within the class as evidenced by
                            submitted MOV<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Submitted any 1 of the acceptable MOV <br /></h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>5.1 Timeliness Black<br /></h5>
                        </v-card>
                      </v-col>

                      <!-- END Unsatisfactory HERE -->
                      <!-- START POOR STATUS HERE -->
                      <v-col
                        :key="n"
                        v-else-if="n === 11"
                        class="ePartCol"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 295px" outlined tile>
                          <h5>
                            Poor <br />

                            1 <br />
                          </h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>
                            Demonstrated Level 3 in Objective 1 as shown in COT rating
                            sheets/interobserver agreement forms or No acceptable evidence
                            was shown<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 64px" outlined tile>
                          <h5>2 blank <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-10" style="height: 125px" outlined tile>
                          <h5>No acceptable evidence was shown<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-10" style="height: 126px" outlined tile>
                          <h5>
                            No acceptable evidence was shown
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-10" style="height: 125px" outlined tile>
                          <h5>No acceptable evidence was shown<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            Demonstrated Level 3 in Objective 5 as shown in COT rating
                            sheets/interobserver agreement forms or No acceptable evidence
                            was shown<br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            No acceptable evidence was shown
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-1" outlined tile>
                          <h5>efficiency black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 56px" outlined tile>
                          <h5>No acceptable evidence was shown<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            Demonstrated Level 3 in Objective 7 as shown in COT rating
                            sheets/interobserver agreement forms or No acceptable evidence
                            was shown <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>
                            No acceptable evidence was shown
                            <br />
                          </h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                          <h5>2 black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5>No acceptable evidence was shown <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 46px" outlined tile>
                          <h5>No acceptable evidence was shown<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 46px" outlined tile>
                          <h5>#4 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-8" style="height: 136px" outlined tile>
                          <h5>No acceptable evidence was shown<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 65px" outlined tile>
                          <h5>No acceptable evidence was shown<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 46px" outlined tile>
                          <h5>#4.2 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 86px" outlined tile>
                          <h5>No acceptable evidence was shown<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 66px" outlined tile>
                          <h5>No acceptable evidence was shown <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>#4.3 1 Timeliness black <br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5>No acceptable evidence was shown<br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>No acceptable evidence was shown <br /></h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>5.1 Timeliness Black<br /></h5>
                        </v-card>
                      </v-col>

                      <!-- END OF POOR HERE -->
                      <!-- START OF ACTUAL RESULTS HERE -->

                      <v-col
                        :key="n"
                        v-else-if="n === 12"
                        class="ePartCol12"
                        style="margin-left: -25px"
                      >
                        <v-card class="pa-2 pt-4" style="width: 200px" outlined tile>
                          <h5>
                            Actual Results <br />
                            <br />
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 86px"
                          v-model="actual1"
                          outlined
                          tile
                        >
                          <h5>
                            <br />
                          </h5>
                        </v-card>
                        <v-card
                          v-model="actual1_blank"
                          class="pa-2 pt-4"
                          style="height: 64px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual2"
                          class="pa-2 pt-10"
                          style="height: 125px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual2_blank"
                          class="pa-2 pt-4"
                          style="height: 60px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual3"
                          class="pa-2 pt-10"
                          style="height: 126px"
                          outlined
                          tile
                        >
                          <h5>
                            <br />
                          </h5>
                        </v-card>
                        <v-card
                          v-model="actual3_blank"
                          class="pa-2 pt-4"
                          style="height: 59px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual4"
                          class="pa-2 pt-10"
                          style="height: 125px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual4_blank"
                          class="pa-2 pt-4"
                          style="height: 60px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual5"
                          class="pa-2 pt-4"
                          style="height: 86px"
                          outlined
                          tile
                        >
                          <h5>
                            <br />
                          </h5>
                        </v-card>
                        <v-card
                          v-model="actual5_blank"
                          class="pa-2 pt-4"
                          style="height: 60px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual6"
                          class="pa-2 pt-4"
                          style="height: 86px"
                          outlined
                          tile
                        >
                          <h5>
                            <br />
                          </h5>
                        </v-card>
                        <v-card v-model="actual6_blank" class="pa-1" outlined tile>
                          <h5><br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 56px" outlined tile>
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual6_timeliness"
                          class="pa-2 pt-4"
                          style="height: 86px"
                          outlined
                          tile
                        >
                          <h5>
                            <br />
                          </h5>
                        </v-card>

                        <v-card
                          v-model="actual7"
                          class="pa-2 pt-4"
                          style="height: 59px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual7_blank"
                          class="pa-2 pt-4"
                          style="height: 86px"
                          outlined
                          tile
                        >
                          <h5>
                            <br />
                          </h5>
                        </v-card>
                        <v-card
                          v-model="actual8"
                          class="pa-2 pt-4"
                          style="height: 60px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual9"
                          class="pa-2 pt-4"
                          style="height: 125px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual9_efficiency"
                          class="pa-2 pt-4"
                          style="height: 46px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual9_blank"
                          class="pa-2 pt-4"
                          style="height: 46px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual10"
                          class="pa-2 pt-8"
                          style="height: 136px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual10_efficiency"
                          class="pa-2 pt-4"
                          style="height: 65px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual10_blank"
                          class="pa-2 pt-4"
                          style="height: 46px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual11"
                          class="pa-2 pt-4"
                          style="height: 86px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card
                          v-model="actual11_efficiency"
                          class="pa-2 pt-4"
                          style="height: 66px"
                          outlined
                          tile
                        >
                          <h5><br /></h5>
                        </v-card>
                        <v-card v-model="actual11_blank" class="pa-2 pt-4" outlined tile>
                          <h5><br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 125px" outlined tile>
                          <h5><br /></h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5><br /></h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5><br /></h5>
                        </v-card>
                      </v-col>

                      <v-col :key="n" v-else-if="n === 13" style="margin-left: -25px">
                        <v-card
                          class="pa-10 pt-4"
                          style="width: 260px; height: 66px"
                          outlined
                          tile
                        >
                          <h5>
                            Rating <br />
                            <br />

                            <v-row>
                              <v-spacer class="ml-n4 pr-4"><p>Q</p></v-spacer>
                              <v-divider class="mx-4" vertical></v-divider>
                              <v-spacer class="ml-4 mr-2"><p>E</p></v-spacer>
                              <v-divider class="mx-4" vertical></v-divider>
                              <v-spacer class="ml-4 mr-2"><p>T</p></v-spacer>
                              <v-divider class="mx-4" vertical></v-divider>
                              <v-spacer><p>AVE</p></v-spacer>
                            </v-row>
                          </h5>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4 pa-0"
                              style="height: 148px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4 pa-0"
                              style="height: 183px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4 pa-0"
                              style="height: 183px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>

                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4 pa-0"
                              style="height: 183px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4"
                              style="height: 144px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4"
                              style="height: 170px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4"
                              style="height: 143px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4"
                              style="height: 144px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4"
                              style="height: 215px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4"
                              style="height: 245px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4"
                              style="height: 195px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <v-row>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider
                              class="mx-4"
                              style="height: 215px"
                              vertical
                            ></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                            <v-divider class="mx-4" vertical></v-divider>
                            <v-spacer
                              ><p>{{ empRater }}</p></v-spacer
                            >
                          </v-row>
                        </v-card>
                      </v-col>
                      <v-col :key="n" v-else-if="n === 14" style="margin-left: -25px">
                        <v-card
                          class="pa-2 pt-4"
                          style="width: 200px; height: 66px"
                          outlined
                          tile
                        >
                          <h5>
                            Score <br />
                            <br />
                            <br />
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 150px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 185px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 185px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 185px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 146px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 172px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 145px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 146px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 217px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 247px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 197px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4 part1Score"
                          style="height: 217px"
                          outlined
                          tile
                        >
                          <h5></h5>
                        </v-card>
                      </v-col>
                    </template>
                  </div>
                </v-row>
                <br />
                <br />

                <!-- START OF Adjectival RATING AREA  -->
                <div style="width: 600px; margin: auto">
                  <v-card class="pa-2 text-center" color="grey lighten-2" outlined tile>
                    <b>ADJECTIVAL RATING EQUIVALENCES</b>
                  </v-card>
                  <v-row no-gutters class="text-center">
                    <template v-for="n in 2">
                      <v-col :key="n" v-if="n === 1">
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>RANGE</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>4.500 – 5.000</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>3.500 – 4.499</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>2.500 – 3.499</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>1.500 – 2.499</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>below 1.499</h5>
                        </v-card>
                      </v-col>

                      <v-col :key="n" v-else-if="n === 2">
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>ADJECTIVAL RATING</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Outstanding</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Very Satisfactory</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Satisfactory</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Unsatisfactory</h5>
                        </v-card>
                        <v-card class="pa-2 pt-4" outlined tile>
                          <h5>Poor</h5>
                        </v-card>
                      </v-col>
                    </template>
                  </v-row>
                </div>
                <br />
                <!-- END OF Adjective RATING CRITERIA -->

                <!-- START OF PART 1 SIGNATURES -->
                <!-- This is the signature part in part 4 -->
                <div class="pa-10 ml-9" style="text-align: center">
                  <v-row>
                    <v-col>
                      <v-text-field
                        v-model="part_ratee"
                        style="width: 200px; height: 100px; margin-left: 80px"
                      >
                      </v-text-field>

                      <h5 class="pa-2" style="margin-left: 80px">Ratee</h5>
                    </v-col>
                    <v-col>
                      <v-text-field
                        v-model="part_rater"
                        style="width: 200px; height: 100px; margin-left: 40px"
                      >
                      </v-text-field>

                      <h5 class="pa-2" style="margin-right: 10px">Rater</h5>
                    </v-col>

                    <v-col>
                      <v-text-field
                        style="width: 200px; height: 100px; margin-left: 40px"
                      >
                        <p class="mt-6">{{ part_approvingAuthority }}</p>
                      </v-text-field>

                      <h5 class="pa-2" style="margin-left: -20px">Approving Authority</h5>
                    </v-col>
                  </v-row>
                </div>
              </v-container>
            </v-app>
          </div>
        </v-tab-item>
        <!-- End of encoding Part 2 -->
        <!-- Start of Part 2 Content -->
        <v-tab>Part 2</v-tab>

        <v-tab-item>
          <div id="app">
            <v-app>
              <v-container class="grey lighten-5">
                <v-card class="pa-2 text-center" color="grey lighten-2" outlined tile>
                  <b>PART II: COMPETENCIES</b>
                </v-card>

                <v-card class="pa-2" outlined tile>
                  <h5 class="font-weight-regular">
                    Instructions: Please indicate the number of competency indicators that
                    you demonstrated during the performance cycle.
                  </h5>
                </v-card>
                <v-card class="pa-2" outlined tile>
                  <h5 class="font-weight-regular">
                    <b> CORE BEHAVIORAL COMPETENCIES</b>
                  </h5>
                </v-card>
                <v-row no-gutters>
                  <v-col v-for="n in 4" :key="n">
                    <v-card
                      v-if="n === 1"
                      class="pa-2 card-1 text-justify"
                      outlined
                      tile
                      style="overflow-y: auto; height: 360px"
                    >
                      <h5 class="font-weight-regular">
                        <b> Self-Management</b> <br />
                        1. Sets personal goals and directions, needs and development.<br />
                        2. Undertakes personal actions and behavior that are clear and
                        purposive and takes into account personal goals and values
                        congruent to that of the organization.<br />
                        3. Displays emotional maturity and enthusiasm for and is
                        challenged by higher goals.<br />
                        4. Prioritizes work tasks and schedules (through Gantt chants,
                        checklists, etc.) to achieve goals.<br />
                        5. Sets high quality, challenging, realistic goals for self and
                        others.<br />
                      </h5>
                    </v-card>
                    <v-card
                      v-else-if="n === 2"
                      class="pa-2 text-center card-2"
                      style="overflow-y: auto; height: 360px"
                      outlined
                      tile
                      label="0"
                      ><br /><br /><br /><br /><br /><br /><br />
                      0
                    </v-card>
                    <v-card
                      v-else-if="n === 3"
                      class="pa-2 card-3 text-justify"
                      outlined
                      tile
                      style="overflow-y: auto; height: 360px"
                    >
                      <h5 class="font-weight-regular">
                        <b>Teamwork</b> <br />
                        1. Willingly does his/her share of responsibility. <br />
                        2. Promotes collaboration and removes barrier to teamwork and goal
                        accomplishment across the organization. <br />
                        3. Applies negotiation principles in arriving at win-win
                        agreements.
                        <br />
                        4. Drives consensus and team ownership of decisions.
                        <br />
                        5. Works constructively and collaboratively with others and across
                        organizations to accomplish organization goals and objectives.
                      </h5>
                    </v-card>
                    <v-card
                      v-else-if="n === 4"
                      class="pa-2 text-center card-4"
                      style="overflow-y: auto; height: 360px"
                      outlined
                      tile
                      label="0"
                      ><br /><br /><br /><br /><br /><br /><br />
                      0
                    </v-card>
                  </v-col>
                </v-row>
                <v-row no-gutters>
                  <v-col
                    v-for="n in 4"
                    :key="n"
                    :cols="n === 1 || 3 ? 3 : undefined"
                    class=""
                  >
                    <v-card
                      v-if="n === 1"
                      class="pa-2 card-5 text-justify"
                      outlined
                      tile
                      style="overflow-y: auto; height: 440px"
                    >
                      <h5 class="font-weight-regular">
                        <b> Professionalism and Ethics</b><br />
                        1. Demonstrates the values and behavior enshrined in the Norms and
                        Conduct and Ethical Standards for Public Officials and Employees
                        (RA 6713).<br />
                        2. Practices ethical and professional behavior and conduct taking
                        into account the impact of his/her actions and decisions.<br />
                        3. Maintains a professional image: being trustworthy, regularity
                        of attendance and punctuality, good grooming and communication.<br />
                        4. Makes personal sacrifices to meet the organization’s needs.<br />
                        5. Acts with a sense of urgency and responsibility to meet the
                        organization’s needs, improve system and help others improve their
                        effectiveness.<br />
                      </h5>
                    </v-card>
                    <v-card
                      v-else-if="n === 2"
                      class="pa-2 text-center card-6"
                      style="overflow-y: auto; height: 440px"
                      outlined
                      tile
                      label="0"
                      ><br /><br /><br /><br /><br /><br /><br />
                      0
                    </v-card>
                    <v-card
                      v-else-if="n === 3"
                      class="pa-2 card-7 text-justify"
                      outlined
                      tile
                      style="overflow-y: auto; height: 440px"
                    >
                      <h5 class="font-weight-regular">
                        <b> Service Orientation</b> <br />
                        1. Can explain and articulate organizational directions, issues
                        and problems.<br />
                        2. Takes personal responsibility for dealing with and/or
                        correcting customer service issues and concerns.<br />
                        3. Initiates activities that promote advocacy for men and women
                        empowerment.<br />
                        4. Participates in updating office vision, mission, mandates and
                        strategies based on DepEd strategies and directions.<br />
                        5. Develops and adopts service improvement program through
                        simplified procedures that will further enhance service delivery.
                      </h5>
                    </v-card>
                    <v-card
                      v-else-if="n === 4"
                      class="pa-2 text-center card-8"
                      height="200"
                      outlined
                      tile
                      label="0"
                      style="overflow-y: auto; height: 440px"
                      ><br /><br /><br /><br /><br /><br /><br />
                      0
                    </v-card>
                  </v-col>
                </v-row>
                <v-row no-gutters>
                  <v-col v-for="n in 4" :key="n">
                    <v-card
                      v-if="n === 1"
                      class="pa-2 card-9 text-justify"
                      outlined
                      tile
                      style="overflow-y: auto; height: 570px"
                    >
                      <h5 class="font-weight-regular">
                        <b>Results Focus</b> <br />
                        1. Achieves results with optimal use of time and resources most of
                        the time.<br />
                        2. Avoids rework, mistakes and wastage through effective work
                        methods by placing organizational needs before personal needs.<br />
                        3. Delivers error-free outputs most of the time by conforming to
                        standard operating procedures correctly and consistently. Able to
                        produce very satisfactory quality work in terms of
                        usefulness/acceptability and completeness with no supervision
                        required.<br />
                        4. Expresses a desire to do better and may express frustration at
                        waste or inefficiency. May focus on new or more precise ways of
                        meeting goals set. 5. Makes specific changes in the system or in
                        own work methods to improve performance. Examples may include
                        doing something better, faster, at a lower cost, more efficiently,
                        or improving quality, customer satisfaction, morale, without
                        setting any specific goal.<br />
                      </h5>
                    </v-card>
                    <v-card
                      v-else-if="n === 2"
                      class="pa-2 text-center card-10"
                      style="overflow-y: auto; height: 570px"
                      outlined
                      tile
                      label="0"
                      ><br /><br /><br /><br /><br /><br /><br />
                      0
                    </v-card>
                    <v-card
                      v-else-if="n === 3"
                      class="pa-2 card-11 text-justify"
                      outlined
                      tile
                      style="overflow-y: auto; height: 570px"
                    >
                      <h5 class="font-weight-regular">
                        <b> Service Orientation<br /></b>
                        1. Can explain and articulate organizational directions, issues
                        and problems.<br />
                        2. Takes personal responsibility for dealing with and/or
                        correcting customer service issues and concerns.<br />
                        3. Initiates activities that promote advocacy for men and women
                        empowerment.<br />
                        4. Participates in updating office vision, mission, mandates and
                        strategies based on DepEd strategies and directions.<br />
                        5. Develops and adopts service improvement program through
                        simplified procedures that will further enhance service delivery.
                      </h5>
                    </v-card>
                    <v-card
                      v-else-if="n === 4"
                      class="pa-2 text-center card-12"
                      style="overflow-y: auto; height: 570px"
                      outlined
                      tile
                      label="0"
                      ><br /><br /><br /><br /><br /><br /><br />
                      0
                    </v-card>
                  </v-col>
                </v-row>
                <v-card class="pa-2" outlined tile>
                  <h5 class="font-weight-regular">
                    Note: The assessment in the demonstration of competencie s shall not
                    be reflected in the final rating. These competencies are monitored to
                    inform professional development plans (DepEd Order No. 2, s. 2015, p.
                    9).
                  </h5>
                </v-card>
              </v-container>
            </v-app>
          </div>
        </v-tab-item>

        <!-- Part 3 content here -->
        <v-tab ref="#tab5">Part 3</v-tab>

        <v-tab-item>
          <v-card class="pa-2 text-center" tile
            ><br />
            <b>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM (IPCRF) SUMMARY SHEET</b>
            <h5 class="text-center font-weight-regular">
              <b
                >Teacher I-III, SPET I-IV, Special Science Teacher I-II (Proficient
                Teacher)</b
              >
            </h5>
          </v-card>

          <v-row no-gutters>
            <v-col v-for="n in 2" :key="n" class="">
              <v-card v-if="n === 1" class="pa-4" outlined tile style="height: 220px">
                <tr>
                  <td colspan="3" style="text-align: left">
                    <v-subheader> Name of Employee: </v-subheader>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: left">
                    <v-subheader> Position: </v-subheader>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: left">
                    <v-subheader> Bureau/Center/Service/Division:</v-subheader>
                  </td>
                  <v-row> </v-row>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: left">
                    <v-subheader> Rating Period: </v-subheader>
                  </td>
                </tr>
              </v-card>

              <v-card
                v-else-if="n === 2"
                class="pa-4"
                outlined
                tile
                style="height: 220px"
              >
                <tr>
                  <td colspan="3" style="text-align: left">
                    <v-subheader>Name of Rater: </v-subheader>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: left">
                    <v-subheader> Position: </v-subheader>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: left">
                    <v-subheader> Date of Review:</v-subheader>
                  </td>
                </tr>
              </v-card>
            </v-col>
          </v-row>

          <v-card class="pa-2 text-center" color="grey lighten-2" outlined tile>
            <b>PART III. SUMMARY OF RATINGS FOR DISCUSSION</b>
          </v-card>
          <!-- START OF Part 3 KRA COLUMN -->
          <v-row class="text-center">
            <div class="ePart1">
              <template v-for="n in 13">
                <v-col
                  :key="n"
                  v-if="n === 1"
                  class="ePartCol2"
                  style="margin-left: -25px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    style="width: 140px; height: 120px"
                    outlined
                    tile
                  >
                    <h5>
                      KRA <br />
                      <br />
                    </h5>
                  </v-card>
                  <div style="text-align: center">
                    <v-card class="pa-2 pt-6" style="height: 150px" outlined tile>
                      <h5>KRA 1</h5>
                    </v-card>
                    <v-card class="pa-2 pt-6" style="height: 150px" outlined tile>
                      <h5>KRA 2</h5>
                    </v-card>
                    <v-card class="pa-2 pt-6" style="height: 100px" outlined tile>
                      <h5>KRA 3</h5>
                    </v-card>
                    <v-card class="pa-2 pt-6" style="height: 150px" outlined tile>
                      <h5>KRA 4</h5>
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 51px" outlined tile>
                      <h5>Plus Factor</h5>
                    </v-card>
                    <v-card class="pa-2 pt-4 pl-4" style="height: 54px" outlined tile>
                      <h5>Date Observed</h5>
                    </v-card>
                  </div>
                </v-col>

                <!-- END OF BASIC EDUCATION COLUMN -->
                <!-- Start of encoding weighted per kra -->
                <v-col
                  :key="n"
                  v-else-if="n === 2"
                  class="ePartCol5"
                  style="margin-left: -25px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    style="width: 140px; height: 120px"
                    outlined
                    tile
                  >
                    <h5>
                      Weight per KRA<br />
                      <br />
                    </h5>
                  </v-card>
                  <v-card
                    class="pa-2 pt-4 kra1"
                    style="height: 150px"
                    v-model="kra1"
                    outlined
                    tile
                  >
                    <h5 class="font-weight-regular"><br />24.00%<br /><br /></h5>
                  </v-card>
                  <v-card
                    class="pa-2 pt-4 kra2"
                    style="height: 150px"
                    v-model="kra2"
                    outlined
                    tile
                  >
                    <h5 class="font-weight-regular"><br />24.00%<br /><br /><br /></h5>
                  </v-card>
                  <v-card
                    class="pa-2 pt-4 kra3"
                    style="height: 100px"
                    v-model="kra3"
                    outlined
                    tile
                  >
                    <h5 class="font-weight-regular"><br />16.00%<br /><br /><br /></h5>
                  </v-card>
                  <v-card
                    class="pa-2 pt-4 kra4"
                    style="height: 150px"
                    v-model="kra4"
                    outlined
                    tile
                  >
                    <h5 class="font-weight-regular">
                      <br /><br />24.00%<br /><br /><br />
                    </h5>
                  </v-card>
                  <v-card
                    class="pa-4 kra5"
                    style="height: 51px"
                    v-model="kra5"
                    outlined
                    tile
                  >
                    <h5 class="font-weight-regular">12.00%<br /><br /><br /></h5>
                  </v-card>
                  <v-card class="pa-1" style="height: 54px" v-model="kra5" outlined tile>
                    <v-text-field style="mb-8"></v-text-field>
                  </v-card>
                </v-col>
                <!-- START OF OBJECTIVES COLUMN -->

                <v-col
                  :key="n"
                  v-else-if="n === 3"
                  class="ePartCol3"
                  style="margin-left: -25px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    outlined
                    tile
                    style="width: 120px; height: 120px"
                  >
                    <h5>
                      Objectives<br />
                      <br />
                    </h5>
                  </v-card>
                  <div style="text-align: center">
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 1</h5>
                      <br />
                    </v-card>

                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 2</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 3</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 4</h5>
                      <br />
                    </v-card>

                    <v-card class="pa-2" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 5</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 6</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 7</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 8</h5>
                      <br />
                    </v-card>

                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 9</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 10</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 11</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">Objective 12</h5>
                      <br />
                    </v-card>
                  </div>
                </v-col>
                <!-- END OF OBJECTIVES COLUMN -->
                <!-- START OF OBJECTIVES COLUMN -->

                <v-col
                  :key="n"
                  v-else-if="n === 4"
                  class="ePartCol3"
                  style="margin-left: -25px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    outlined
                    tile
                    style="width: 120px; height: 120px"
                  >
                    <h5>
                      Weight per <br />
                      Objectives
                      <br />
                    </h5>
                  </v-card>
                  <div style="text-align: center">
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>

                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>

                    <v-card class="pa-2" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>

                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">8 %</h5>
                      <br />
                    </v-card>
                  </div>
                </v-col>
                <!-- END OF encoding weighted per OBJECTIVE - -->
                <!-- Start of IPCRF  NUMERICAL RATING -->
                <v-col
                  :key="n"
                  v-else-if="n === 5"
                  class="ePartCol3"
                  style="margin-left: -25px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    outlined
                    tile
                    style="width: 260px; height: 120px"
                  >
                    <h5>
                      IPCRF NUMERICAL RATING
                      <br />
                    </h5>
                    <v-card
                      no-gutters
                      style="
                        width: 57px;
                        height: 20px;
                        border-radius: 0;
                        margin-top: 62px;
                        margin-left: -7px;
                      "
                      >Q
                    </v-card>
                    <v-card
                      no-gutters
                      style="
                        width: 57px;
                        height: 20px;
                        border-radius: 0;
                        margin-top: -20px;
                        margin-left: 57px;
                      "
                      >E
                    </v-card>
                    <v-card
                      no-gutters
                      style="
                        width: 57px;
                        height: 20px;
                        border-radius: 0;
                        margin-top: -20px;
                        margin-left: 120px;
                      "
                      >T
                    </v-card>
                    <v-card
                      no-gutters
                      style="
                        width: 65px;
                        height: 20px;
                        border-radius: 0;
                        margin-top: -20px;
                        margin-left: 185px;
                      "
                    >
                      AVE
                    </v-card>
                  </v-card>
                  <div style="text-align: center; width: 60px">
                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ1 }}</h5>
                      <!-- <v-text-field
                        v-model="encoding_ipcrfNumericalQ1"
                        placeholder=""
                        solo
                        dense
                        style="width: 100px"
                        class="text-center"
                        type="text"
                      >
                      </v-text-field> 
                      <v-text-field
                        v-model="encoding_ipcrfNumericalQ1"
                        placeholder=""
                        solo
                        dense
                        style="width: 100px"
                        class="text-center"
                        type="text"
                      >
                      </v-text-field>-->
                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ2 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ3 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ4 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ5 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ6 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ7 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ8 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ9 }}</h5>

                      <br />
                    </v-card>
                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumericalQ10 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumericalQ11 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumericalQ12 }}
                      </h5>

                      <br />
                    </v-card>
                  </div>
                </v-col>

                <!-- End of cot 3 -->
                <!-- Start of IPCRF (E) -->

                <v-col
                  :key="n"
                  v-else-if="n === 6"
                  class="ePartCol3"
                  style="margin-left: -220px"
                >
                  <br /><br /><br />
                  <br /><br />

                  <div style="text-align: center; width: 60px">
                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E1 }}
                      </h5>
                      <!-- <v-text-field
                        v-model="encoding_ipcrfNumerical_E1"
                        placeholder=""
                        solo
                        dense
                        style="width: 100px"
                        class="text-center"
                        type="text"
                      >
                      </v-text-field> -->

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E2 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E3 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E4 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E5 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E6 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E7 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E8 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E9 }}
                      </h5>

                      <br />
                    </v-card>
                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E10 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E11 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_E12 }}
                      </h5>

                      <br />
                    </v-card>
                  </div>
                </v-col>
                <!-- END OF IPCRF (E) -->
                <!-- Start of IPCRF (T) -->

                <v-col
                  :key="n"
                  v-else-if="n === 7"
                  class="ePartCol3"
                  style="margin-left: -40px"
                >
                  <br /><br /><br />
                  <br /><br />

                  <div style="text-align: center; width: 60px">
                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T1 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T2 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T3 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T4 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T5 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T6 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T7 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T8 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T9 }}
                      </h5>

                      <br />
                    </v-card>
                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T10 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T11 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">
                        {{ encoding_ipcrfNumerical_T12 }}
                      </h5>

                      <br />
                    </v-card>
                  </div>
                </v-col>
                <!-- END OF IPCRF (T) -->
                <!-- Start of IPCRF (RATING AVERAGE) -->

                <v-col
                  :key="n"
                  v-else-if="n === 8"
                  class="ePartCol3"
                  style="margin-left: -40px"
                >
                  <br /><br /><br />
                  <br /><br />

                  <div style="text-align: center; width: 68px">
                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve1 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve2 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve3 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve4 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve5 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve6 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve7 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve8 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve9 }}</h5>

                      <br />
                    </v-card>
                    <v-card class="pa-1" style="height: 50px" outlined tile
                      ><h5 class="font-weight-regular">
                        {{ encoding_ipcrfRatingAve10 }}
                      </h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve11 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-1" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve12 }}</h5>

                      <br />
                    </v-card>
                  </div>
                </v-col>
                <!-- END OF IPCRF (average) -->
                <!-- Start of encoding SCORE -->
                <v-col
                  :key="n"
                  v-else-if="n === 9"
                  class="ePartCol3"
                  style="margin-left: -35px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    outlined
                    tile
                    style="width: 120px; height: 120px"
                  >
                    <h5>
                      SCORE
                      <br />
                    </h5>
                  </v-card>
                  <div style="text-align: center; width: 120px">
                    <v-card class="pa-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_1 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_2 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_3 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_4 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-4" style="height: 50px" outlined tile>
                      <h5 class="font-weight-regular">{{ encoding_5 }}</h5>

                      <br />
                    </v-card>

                    <v-card class="pa-4" style="height: 50px" outlined tile>
                      <h5></h5>

                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_7"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_8"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_9"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_10"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_11"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_12"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>
                  </div>
                </v-col>

                <!-- End of encoding SCORE-->
                <!-- Start of encoding Adjectival Rating -->
                <v-col
                  :key="n"
                  v-else-if="n === 10"
                  class="ePartCol3"
                  style="margin-left: -25px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    outlined
                    tile
                    style="width: 150px; height: 120px"
                  >
                    <h5>
                      Adjectival Rating
                      <br />
                    </h5>
                  </v-card>
                  <div style="text-align: center; width: 150px">
                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating1"
                      outlined
                      tile
                    >
                      <h5></h5>

                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating2"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating3"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating4"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating5"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating6"
                      outlined
                      tile
                    >
                      <h5></h5>

                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating7"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating8"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating9"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating10"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating11"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>

                    <v-card
                      class="pa-4"
                      style="height: 50px"
                      v-model="encoding_AdjectivalRating12"
                      outlined
                      tile
                    >
                      <h5></h5>
                      <br />
                    </v-card>
                  </div>
                </v-col>
                <!-- Start of encoding SCORE -->
                <v-col
                  :key="n"
                  v-else-if="n === 11"
                  class="ePartCol3"
                  style="margin-left: -641px; margin-top: 720px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    outlined
                    tile
                    v-model="empAdjRating1"
                    style="width: 379px; height: 50px"
                  >
                    <h5>
                      Final Rating
                      <br />
                    </h5>
                  </v-card>
                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="empAdjRating12"
                    outlined
                    tile
                  >
                    <h5>Adjectival Rating</h5>
                    <br />
                  </v-card>
                </v-col>

                <!-- End of encoding bottom ADJECTIVAL RATING-->
                <!-- Start of encoding SCORE -->
                <v-col
                  :key="n"
                  v-else-if="n === 12"
                  class="ePartCol3"
                  style="margin-left: -25px; margin-top: 720px"
                >
                  <v-card
                    class="pa-2 pt-4"
                    outlined
                    tile
                    v-model="empFinalRating"
                    style="width: 240px; height: 50px"
                  >
                    <h5>
                      <br />
                    </h5>
                  </v-card>
                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="empAdjRating"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>
                </v-col>

                <!-- End of encoding ADJECTIVAL RATING-->
              </template>
            </div>
          </v-row>
          <!-- first row -->
        </v-tab-item>

        <!-- Part 4 -->
        <v-tab>Part 4</v-tab>
        <v-tab-item>
          <div id="app">
            <v-app>
              <v-container class="grey lighten-5">
                <v-card class="pa-2 text-center" color="grey lighten-2" outlined tile>
                  <b> PART IV: DEVELOPMENT PLANS</b>
                </v-card>

                <br />

                <v-card class="mx-auto" max-width="900">
                  <v-card-text>
                    <div class="text--primary">
                      <b> NOTE:</b><br />
                      This sheet shall be accomplished during: i) Phase I: Performance
                      Planning and Commitment, based on the results of e-SAT; and ii)
                      <br />
                      Phase II: Performance Monitoring and Coaching, based on the
                      agreements on the Performance Monitoring and Coaching Form
                      <br />and Mid-year Review Form; and iii) Phase IV: Performance
                      Rewarding and Development Planning, based on the actual results of
                      IPCRF.<br />
                      <br />The Ratee can modify the cell (i.e., add rows) to reflect
                      his/her development needs and strengths.
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
                    <v-card v-if="n === 1" class="pa-8" outlined tile> Strengths </v-card>
                    <v-card v-else-if="n === 2" class="pa-2" outlined tile
                      ><br />
                      Development Needs
                    </v-card>
                    <v-card v-else-if="n === 3" class="pa-2 text-center" outlined tile>
                      Action Plan <br />
                      (Recommended Developmental Intervention) <br />
                      Learning Objectives | Intervention
                      <!-- <v-card class="d-inline pa-2" outlined tile>
                      Learning Objectives
                    </v-card>
                    <v-card class="d-inline pa-2" outlined tile>
                      Intervention
                    </v-card> -->
                    </v-card>
                    <v-card v-else-if="n === 4" class="pa-8" outlined tile>
                      Timeline
                    </v-card>
                    <v-card v-else-if="n === 5" class="pa-5" outlined tile>
                      Resources Needed
                    </v-card>
                  </v-col>
                </v-row>

                <div class="d-flex flex-column mb-6">
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
                                solo
                                class="ma-0 pa-0"
                                hide-details
                                row-height="15"
                              ></v-textarea>
                            </v-col>
                          </v-row>
                        </v-container>
                      </v-card>
                      <v-card v-else-if="n === 3" class="text-center" outlined tile>
                        <v-container>
                          <v-row>
                            <v-col>
                              <v-textarea
                                auto-grow
                                flat
                                solo
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
                                flat
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
                                solo
                                class="ma-0 pa-0"
                                hide-details
                                row-height="15"
                              ></v-textarea>
                            </v-col>
                          </v-row>
                        </v-container>
                      </v-card>
                      <v-card v-else-if="n === 3" class="text-center" outlined tile>
                        <v-container>
                          <v-row>
                            <v-col>
                              <v-textarea
                                auto-grow
                                flat
                                solo
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
                  <!-- Feedback  -->
                  <v-card class="pa-2" outlined tile>
                    Feedback:
                    <v-container>
                      <v-row>
                        <v-col>
                          <v-textarea
                            auto-grow
                            flat
                            solo
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
                          v-model="part_ratee"
                          class="pa-2"
                          style="width: 250px; height: 100px; margin-left: 20px"
                        >
                          <p>{{ part_ratee }}</p>
                        </v-card>
                        <h5 class="pa-2" style="margin-left: 30px">Rater</h5>
                      </v-col>

                      <v-col>
                        <v-card
                          v-model="part4_rater"
                          class="pa-2"
                          style="width: 250px; height: 100px; margin-left: 15px"
                        >
                          <p>{{ part_rater }}</p>
                        </v-card>
                        <h5 class="pa-2" style="margin-right: 10px">Rater</h5>
                      </v-col>

                      <v-col>
                        <v-card class="pa-2" style="width: 250px; height: 100px">
                          <p class="mt-6">{{ part_approvingAuthority }}</p>
                        </v-card>
                        <h5 class="pa-2" style="margin-left: -70px">
                          Approving Authority
                        </h5>
                      </v-col>
                    </v-row>
                  </div>
                  <div class="ml-9"></div>
                </div>
                <v-card class="mx-auto" max-width="800">
                  <v-card-text>
                    <div class="text--primary">
                      <b> NOTE:</b><br />
                      When all Parts of the IPCRF are accomplished, the Ratee must submit
                      the file copy of his or her IPCRF electronic form to the Department
                      Head or School Head for the school-wide consolidation. He or she
                      must print all the pages of this form and submit to the Personnel
                      Division of the school to be attached to his or her 201 personnel
                      file.
                    </div>
                  </v-card-text> </v-card
                ><br />
              </v-container>
            </v-app>
          </div>
        </v-tab-item>
      </v-tabs>
    </v-card>
  </v-form>
</template>
<style>
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
.encodingDiv {
  display: flex;
  overflow-x: auto;
}
/* FOR PART 1 QET */

/* FOR PART 1 SCORE */
.part1Score {
  height: 127px;
}
</style>
<script>
export default {
  data() {
    return {
      valid: false,

      nameRules: [(v) => !!v || "This field is required"],
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
      levelTaughtItems: ["", "", ""],
      highestDegreeObtainedItems: [
        "Bachelor's Degree",
        "Master's Degree",
        "Doctorate Degree",
      ],
      schoolSizeItems: ["Small", "Medium", "Large", "Very Large"],
      gradeLevelTaughtItems: ["", "", ""],
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

      kra1: "",
      kra2: "",
      kra3: "",
      kra4: "",
      kra5: "",
      dateObserved: "",

      cotIndicatorNo1: "",
      cotIndicatorNo2: "",
      cotIndicatorNo3: "",
      cotIndicatorNo4: "",
      cotIndicatorNo5: "",
      cotIndicatorNo6: "",
      cotIndicatorNo7: "",
      cotIndicatorNo8: "",
      cotIndicatorNo9: "",
      cotIndicatorNo10: "",
      cotIndicatorNo11: "",
      cotIndicatorNo12: "",

      cotIndicatorNo13: "",
      kra_cot1RpmsObj1: "",
      kra_cot1Rating2: "",
      kra_cot1Rating3: "",
      kra_cot1Rating4: "",
      kra_cot1Rating5: "",
      kra_cot1Rating6: "",
      kra_cot1Rating7: "",
      kra_cot1Rating8: "",
      kra_cot1Rating9: "",
      kra_cot1Rating10: "",
      kra_cot1Rating11: "",
      kra_cot1Rating12: "",
      kra_cot1Rating13: "",
      kra_cot1Rating14: "",

      // kra_cot1RpmsObj1: "",
      kra_cot1RpmsObj2: "",
      kra_cot1RpmsObj3: "",
      kra_cot1RpmsObj4: "",
      kra_cot1RpmsObj5: "",
      kra_cot1RpmsObj6: "",
      kra_cot1RpmsObj7: "",
      kra_cot1RpmsObj8: "",
      kra_cot1RpmsObj9: "",
      kra_cot1RpmsObj10: "",
      kra_cot1RpmsObj11: "",
      kra_cot1RpmsObj12: "",

      kra_cot2Rating1: "",
      kra_cot2Rating2: "",
      kra_cot2Rating3: "",
      kra_cot2Rating4: "",
      kra_cot2Rating5: "",
      kra_cot2Rating6: "",
      kra_cot2Rating7: "",
      kra_cot2Rating8: "",
      kra_cot2Rating9: "",
      kra_cot2Rating10: "",
      kra_cot2Rating11: "",
      kra_cot2Rating12: "",
      kra_cot2Rating13: "",
      kra_cot2Rating14: "",

      kra_cot2RpmsObj1: "",
      kra_cot2RpmsObj2: "",
      kra_cot2RpmsObj3: "",
      kra_cot2RpmsObj4: "",
      kra_cot2RpmsObj5: "",
      kra_cot2RpmsObj6: "",
      kra_cot2RpmsObj7: "",
      kra_cot2RpmsObj8: "",
      kra_cot2RpmsObj9: "",
      kra_cot2RpmsObj10: "",
      kra_cot2RpmsObj11: "",
      kra_cot2RpmsObj12: "",

      tf_kra_cot3Rating1: "",
      kra_cot3Rating1: "",
      kra_cot3Rating2: "",
      kra_cot3Rating3: "",
      kra_cot3Rating4: "",
      kra_cot3Rating5: "",
      kra_cot3Rating6: "",
      kra_cot3Rating7: "",
      kra_cot3Rating8: "",
      kra_cot3Rating9: "",
      kra_cot3Rating10: "",
      kra_cot3Rating11: "",
      kra_cot3Rating12: "",
      kra_cot3Rating13: "",

      kra_cot3Rpms1: "",
      kra_cot3Rpms2: "",
      kra_cot3Rpms3: "",
      kra_cot3Rpms4: "",
      kra_cot3Rpms5: "",
      kra_cot3Rpms6: "",
      kra_cot3Rpms7: "",
      kra_cot3Rpms8: "",
      kra_cot3Rpms9: "",
      kra_cot3Rpms10: "",
      kra_cot3Rpms11: "",
      kra_cot3Rpms12: "",

      tf_kra_cot4Rating1: "",
      kra_cot4Rating1: "",
      kra_cot4Rating2: "",
      kra_cot4Rating3: "",
      kra_cot4Rating4: "",
      kra_cot4Rating5: "",
      kra_cot4Rating6: "",
      kra_cot4Rating7: "",
      kra_cot4Rating8: "",
      kra_cot4Rating9: "",
      kra_cot4Rating10: "",
      kra_cot4Rating11: "",
      kra_cot4Rating12: "",
      kra_cot4Rating13: "",

      kra_cot4Rpms1: "",
      kra_cot4Rpms2: "",
      kra_cot4Rpms3: "",
      kra_cot4Rpms4: "",
      kra_cot4Rpms5: "",
      kra_cot4Rpms6: "",
      kra_cot4Rpms7: "",
      kra_cot4Rpms8: "",
      kra_cot4Rpms9: "",
      kra_cot4Rpms10: "",
      kra_cot4Rpms11: "",
      kra_cot4Rpms12: "",

      encodingAverage1: "",
      encodingAverage2: "",
      encodingAverage3: "",
      encodingAverage4: "",
      encodingAverage5: "",
      encodingAverage6: "",
      encodingAverage7: "",
      encodingAverage8: "",
      encodingAverage9: "",
      encodingAverage10: "",
      encodingAverage11: "",
      encodingAverage12: "",

      encoding_ipcrfNumericalQ1: "",
      encoding_ipcrfNumericalQ2: "",
      encoding_ipcrfNumericalQ3: "",
      encoding_ipcrfNumericalQ4: "",
      encoding_ipcrfNumericalQ5: "",
      encoding_ipcrfNumericalQ6: "",
      encoding_ipcrfNumericalQ7: "",
      encoding_ipcrfNumericalQ8: "",
      encoding_ipcrfNumericalQ9: "",
      encoding_ipcrfNumericalQ10: "",
      encoding_ipcrfNumericalQ11: "",
      encoding_ipcrfNumericalQ12: "",
      encoding_ipcrfNumericalQ13: "",

      encoding_ipcrfNumerical_E1: "",
      encoding_ipcrfNumerical_E2: "",
      encoding_ipcrfNumerical_E3: "",
      encoding_ipcrfNumerical_E4: "",
      encoding_ipcrfNumerical_E5: "",
      encoding_ipcrfNumerical_E6: "",
      encoding_ipcrfNumerical_E7: "",
      encoding_ipcrfNumerical_E8: "",
      encoding_ipcrfNumerical_E9: "",
      encoding_ipcrfNumerical_E10: "",
      encoding_ipcrfNumerical_E11: "",
      encoding_ipcrfNumerical_E12: "",

      encoding_ipcrfNumerical_T1: "",
      encoding_ipcrfNumerical_T2: "",
      encoding_ipcrfNumerical_T3: "",
      encoding_ipcrfNumerical_T4: "",
      encoding_ipcrfNumerical_T5: "",
      encoding_ipcrfNumerical_T6: "",
      encoding_ipcrfNumerical_T7: "",
      encoding_ipcrfNumerical_T8: "",
      encoding_ipcrfNumerical_T9: "",
      encoding_ipcrfNumerical_T10: "",
      encoding_ipcrfNumerical_T11: "",
      encoding_ipcrfNumerical_T12: "",

      encoding_ipcrfRatingAve1: "",
      encoding_ipcrfRatingAve2: "",
      encoding_ipcrfRatingAve3: "",
      encoding_ipcrfRatingAve4: "",
      encoding_ipcrfRatingAve5: "",
      encoding_ipcrfRatingAve6: "",
      encoding_ipcrfRatingAve7: "",
      encoding_ipcrfRatingAve8: "",
      encoding_ipcrfRatingAve9: "",
      encoding_ipcrfRatingAve10: "",
      encoding_ipcrfRatingAve11: "",
      encoding_ipcrfRatingAve12: "",

      encoding_1: "",
      encoding_2: "",
      encoding_3: "",
      encoding_4: "",
      encoding_5: "",
      encoding_6: "",
      encoding_7: "",
      encoding_8: "",
      encoding_9: "",
      encoding_10: "",
      encoding_11: "",
      encoding_12: "",

      encoding_AdjectivalRating1: "",
      encoding_AdjectivalRating2: "",
      encoding_AdjectivalRating3: "",
      encoding_AdjectivalRating4: "",
      encoding_AdjectivalRating5: "",
      encoding_AdjectivalRating6: "",
      encoding_AdjectivalRating7: "",
      encoding_AdjectivalRating8: "",
      encoding_AdjectivalRating9: "",
      encoding_AdjectivalRating10: "",
      encoding_AdjectivalRating11: "",
      encoding_AdjectivalRating12: "",

      empAdjRating1: "",
      empAdjRating2: "",

      empFinalRating: "",
      empAdjRating: "",

      part_approvingAuthority: "",

      timeline1: "",
      timeline2: "",
      timeline3: "",
      timeline4: "",
      timeline5: "",
      timeline6: "",
      timeline7: "",
      timeline8: "",
      timeline9: "",
      timeline10: "",
      timeline11: "",
      timeline12: "",

      kra_1: "",
      kra_2: "",
      kra_3: "",
      kra_4: "",
      kra_5: "",

      actual1: "",
      actual1_blank: "",
      actual2: "",
      actual2_blank: "",
      actual3: "",
      actual3_blank: "",
      actual4: "",
      actual4_blank: "",
      actual5: "",
      actual5_blank: "",
      actual6: "",
      actual6_blank: "",
      actual6_timeliness: "",
      actual7: "",
      actual7_blank: "",
      actual8: "",
      actual9: "",
      actual9_efficiency: "",
      actual9_blank: "",
      actual10: "",
      actual10_efficiency: "",
      actual10_blank: "",
      actual11: "",
      actual11_efficiency: "",
      actual11_blank: "",

      part3Kra1: "",
      part3Kra2: "",
      part3Kra3: "",
      part3Kra4: "",
      part3Kra5: "",
      part3Kra_5: "",

      part3Encoding_7: "",
      part3Encoding_8: "",
      part3Encoding_9: "",
      part3Encoding_10: "",
      part3Encoding_11: "",
      part3Encoding_12: "",

      part3Encoding_AdjectivalRating1: "",
      part3Encoding_AdjectivalRating2: "",
      part3Encoding_AdjectivalRating3: "",
      part3Encoding_AdjectivalRating4: "",
      part3Encoding_AdjectivalRating5: "",
      part3Encoding_AdjectivalRating6: "",
      part3Encoding_AdjectivalRating7: "",
      part3Encoding_AdjectivalRating8: "",
      part3Encoding_AdjectivalRating9: "",
      part3Encoding_AdjectivalRating10: "",
      part3Encoding_AdjectivalRating11: "",
      part3Encoding_AdjectivalRating12: "",

      part3EmpAdjRating1: "",
      part3EmpAdjRating2: "",
      part3EmpFinalRating: "",
      part3EmpAdjRating: "",
    };
  },

  methods: {
    // async retrieveIpcrf() {
    //   console.log("jgkjk");
    //   // const returnedIpcrfData = await this.$store.dispatch("retrieveIpcrfInfoById");
    // },
    // finalizeIpcrf() {
    //   const empName = this.empName;
    //   const empRater = this.empRater;
    //   const empRegion = this.empRegion;
    //   const empPosition = this.empPosition;
    //   const empRaterPosition = this.empRaterPosition;
    //   const empDivision = this.empDivision;
    //   const empId = this.empId;
    //   const empDateReview = this.empDateReview;
    //   const empDistrict = this.empDistrict;
    //   const empStatus = this.empStatus;
    //   const empRatingPeriod = this.empRatingPeriod;
    //   const empSchoolId = this.empSchoolId;
    //   const empAge = this.empAge;
    //   const empSchoolName = this.empSchoolName;
    //   const empSex = this.empSex;
    //   const empLevelTaught = this.empLevelTaught;
    //   const empYearsOfTeaching = this.empYearsOfTeaching;
    //   const empSchoolType = this.empSchoolType;
    //   const empGradeLevelTaught = this.empLevelTaught;
    //   const empDegree = this.empDegree;
    //   const empSchoolSize = this.empSchoolSize;
    //   const empSubjectTaught = this.empSubjectTaught;
    //   const empSpecialization = this.empSpecialization;
    //   const empCurricularClassification = this.empCurricularClassification;
    //   const kra1 = this.kra1;
    //   const kra2 = this.kra2;
    //   const kra3 = this.kra3;
    //   const kra4 = this.kra4;
    //   const kra5 = this.kra5;
    //   const dateObserved = this.dateObserved;
    //   const cotIndicatorNo1 = this.cotIndicatorNo1;
    //   const cotIndicatorNo2 = this.cotIndicatorNo2;
    //   const cotIndicatorNo3 = this.cotIndicatorNo3;
    //   const cotIndicatorNo4 = this.cotIndicatorNo4;
    //   const cotIndicatorNo5 = this.cotIndicatorNo5;
    //   const cotIndicatorNo6 = this.cotIndicatorNo6;
    //   const cotIndicatorNo7 = this.cotIndicatorNo7;
    //   const cotIndicatorNo8 = this.cotIndicatorNo8;
    //   const cotIndicatorNo9 = this.cotIndicatorNo9;
    //   const cotIndicatorNo10 = this.cotIndicatorNo10;
    //   const cotIndicatorNo11 = this.cotIndicatorNo11;
    //   const cotIndicatorNo12 = this.cotIndicatorNo12;
    //   const cotIndicatorNo13 = this.cotIndicatorNo13;
    //   const kra_cot1RpmsObj1 = this.kra_cot1RpmsObj1;
    //   const kra_cot1Rating2 = this.kra_cot1Rating2;
    //   const kra_cot1Rating3 = this.kra_cot1Rating3;
    //   const kra_cot1Rating4 = this.kra_cot1Rating4;
    //   const kra_cot1Rating5 = this.kra_cot1Rating5;
    //   const kra_cot1Rating6 = this.kra_cot1Rating6;
    //   const kra_cot1Rating7 = this.kra_cot1Rating7;
    //   const kra_cot1Rating8 = this.kra_cot1Rating8;
    //   const kra_cot1Rating9 = this.kra_cot1Rating9;
    //   const kra_cot1Rating10 = this.kra_cot1Rating10;
    //   const kra_cot1Rating11 = this.kra_cot1Rating11;
    //   const kra_cot1Rating12 = this.kra_cot1Rating12;
    //   const kra_cot1Rating13 = this.kra_cot1Rating13;
    //   const kra_cot1Rating14 = this.kra_cot1Rating14;
    //   const kra_cot1RpmsObj2 = this.kra_cot1RpmsObj2;
    //   const kra_cot1RpmsObj3 = this.kra_cot1RpmsObj3;
    //   const kra_cot1RpmsObj4 = this.kra_cot1RpmsObj4;
    //   const kra_cot1RpmsObj5 = this.kra_cot1RpmsObj5;
    //   const kra_cot1RpmsObj6 = this.kra_cot1RpmsObj6;
    //   const kra_cot1RpmsObj7 = this.kra_cot1RpmsObj7;
    //   const kra_cot1RpmsObj8 = this.kra_cot1RpmsObj8;
    //   const kra_cot1RpmsObj9 = this.kra_cot1RpmsObj9;
    //   const kra_cot1RpmsObj10 = this.kra_cot1RpmsObj10;
    //   const kra_cot1RpmsObj11 = this.kra_cot1RpmsObj11;
    //   const kra_cot1RpmsObj12 = this.kra_cot1RpmsObj12;
    //   const kra_cot2Rating1 = this.kra_cot2Rating1;
    //   const kra_cot2Rating2 = this.kra_cot2Rating2;
    //   const kra_cot2Rating3 = this.kra_cot2Rating3;
    //   const kra_cot2Rating4 = this.kra_cot2Rating4;
    //   const kra_cot2Rating5 = this.kra_cot2Rating5;
    //   const kra_cot2Rating6 = this.kra_cot2Rating6;
    //   const kra_cot2Rating7 = this.kra_cot2Rating7;
    //   const kra_cot2Rating8 = this.kra_cot2Rating8;
    //   const kra_cot2Rating9 = this.kra_cot2Rating9;
    //   const kra_cot2Rating10 = this.kra_cot2Rating10;
    //   const kra_cot2Rating11 = this.kra_cot2Rating11;
    //   const kra_cot2Rating12 = this.kra_cot2Rating12;
    //   const kra_cot2Rating13 = this.kra_cot2Rating13;
    //   const kra_cot2Rating14 = this.kra_cot2Rating14;
    //   const kra_cot2RpmsObj1 = this.kra_cot2RpmsObj1;
    //   const kra_cot2RpmsObj2 = this.kra_cot2RpmsObj2;
    //   const kra_cot2RpmsObj3 = this.kra_cot2RpmsObj3;
    //   const kra_cot2RpmsObj4 = this.kra_cot2RpmsObj4;
    //   const kra_cot2RpmsObj5 = this.kra_cot2RpmsObj5;
    //   const kra_cot2RpmsObj6 = this.kra_cot2RpmsObj6;
    //   const kra_cot2RpmsObj7 = this.kra_cot2RpmsObj7;
    //   const kra_cot2RpmsObj8 = this.kra_cot2RpmsObj8;
    //   const kra_cot2RpmsObj9 = this.kra_cot2RpmsObj9;
    //   const kra_cot2RpmsObj10 = this.kra_cot2RpmsObj10;
    //   const kra_cot2RpmsObj11 = this.kra_cot2RpmsObj11;
    //   const kra_cot2RpmsObj12 = this.kra_cot2RpmsObj12;
    //   const tf_kra_cot3Rating1 = this.tf_kra_cot3Rating1;
    //   const kra_cot3Rating1 = this.kra_cot3Rating1;
    //   const kra_cot3Rating2 = this.kra_cot3Rating2;
    //   const kra_cot3Rating3 = this.kra_cot3Rating3;
    //   const kra_cot3Rating4 = this.kra_cot3Rating4;
    //   const kra_cot3Rating5 = this.kra_cot3Rating5;
    //   const kra_cot3Rating6 = this.kra_cot3Rating6;
    //   const kra_cot3Rating7 = this.kra_cot3Rating7;
    //   const kra_cot3Rating8 = this.kra_cot3Rating8;
    //   const kra_cot3Rating9 = this.kra_cot3Rating9;
    //   const kra_cot3Rating10 = this.kra_cot3Rating10;
    //   const kra_cot3Rating11 = this.kra_cot3Rating11;
    //   const kra_cot3Rating12 = this.kra_cot3Rating12;
    //   const kra_cot3Rating13 = this.kra_cot3Rating13;
    //   const kra_cot3Rpms1 = this.kra_cot3Rpms1;
    //   const kra_cot3Rpms2 = this.kra_cot3Rpms2;
    //   const kra_cot3Rpms3 = this.kra_cot3Rpms3;
    //   const kra_cot3Rpms4 = this.kra_cot3Rpms4;
    //   const kra_cot3Rpms5 = this.kra_cot3Rpms5;
    //   const kra_cot3Rpms6 = this.kra_cot3Rpms6;
    //   const kra_cot3Rpms7 = this.kra_cot3Rpms7;
    //   const kra_cot3Rpms8 = this.kra_cot3Rpms8;
    //   const kra_cot3Rpms9 = this.kra_cot3Rpms9;
    //   const kra_cot3Rpms10 = this.kra_cot3Rpms10;
    //   const kra_cot3Rpms11 = this.kra_cot3Rpms11;
    //   const kra_cot3Rpms12 = this.kra_cot3Rpms12;
    //   const tf_kra_cot4Rating1 = this.tf_kra_cot4Rating1;
    //   const kra_cot4Rating1 = this.kra_cot4Rating1;
    //   const kra_cot4Rating2 = this.kra_cot4Rating2;
    //   const kra_cot4Rating3 = this.kra_cot4Rating3;
    //   const kra_cot4Rating4 = this.kra_cot4Rating4;
    //   const kra_cot4Rating5 = this.kra_cot4Rating5;
    //   const kra_cot4Rating6 = this.kra_cot4Rating6;
    //   const kra_cot4Rating7 = this.kra_cot4Rating7;
    //   const kra_cot4Rating8 = this.kra_cot4Rating8;
    //   const kra_cot4Rating9 = this.kra_cot4Rating9;
    //   const kra_cot4Rating10 = this.kra_cot4Rating10;
    //   const kra_cot4Rating11 = this.kra_cot4Rating11;
    //   const kra_cot4Rating12 = this.kra_cot4Rating12;
    //   const kra_cot4Rating13 = this.kra_cot4Rating13;
    //   const kra_cot4Rpms1 = this.kra_cot4Rpms1;
    //   const kra_cot4Rpms2 = this.kra_cot4Rpms2;
    //   const kra_cot4Rpms3 = this.kra_cot4Rpms3;
    //   const kra_cot4Rpms4 = this.kra_cot4Rpms4;
    //   const kra_cot4Rpms5 = this.kra_cot4Rpms5;
    //   const kra_cot4Rpms6 = this.kra_cot4Rpms6;
    //   const kra_cot4Rpms7 = this.kra_cot4Rpms7;
    //   const kra_cot4Rpms8 = this.kra_cot4Rpms8;
    //   const kra_cot4Rpms9 = this.kra_cot4Rpms9;
    //   const kra_cot4Rpms10 = this.kra_cot4Rpms10;
    //   const kra_cot4Rpms11 = this.kra_cot4Rpms11;
    //   const kra_cot4Rpms12 = this.kra_cot4Rpms12;
    //   const encodingAverage1 = this.encodingAverage1;
    //   const encodingAverage2 = this.encodingAverage2;
    //   const encodingAverage3 = this.encodingAverage3;
    //   const encodingAverage4 = this.encodingAverage4;
    //   const encodingAverage5 = this.encodingAverage5;
    //   const encodingAverage6 = this.encodingAverage6;
    //   const encodingAverage7 = this.encodingAverage7;
    //   const encodingAverage8 = this.encodingAverage8;
    //   const encodingAverage9 = this.encodingAverage9;
    //   const encodingAverage10 = this.encodingAverage10;
    //   const encodingAverage11 = this.encodingAverage11;
    //   const encodingAverage12 = this.encodingAverage12;
    //   const encoding_ipcrfNumericalQ1 = this.encoding_ipcrfNumericalQ1;
    //   const encoding_ipcrfNumericalQ2 = this.encoding_ipcrfNumericalQ2;
    //   const encoding_ipcrfNumericalQ3 = this.encoding_ipcrfNumericalQ3;
    //   const encoding_ipcrfNumericalQ4 = this.encoding_ipcrfNumericalQ4;
    //   const encoding_ipcrfNumericalQ5 = this.encoding_ipcrfNumericalQ5;
    //   const encoding_ipcrfNumericalQ6 = this.encoding_ipcrfNumericalQ6;
    //   const encoding_ipcrfNumericalQ7 = this.encoding_ipcrfNumericalQ7;
    //   const encoding_ipcrfNumericalQ8 = this.encoding_ipcrfNumericalQ8;
    //   const encoding_ipcrfNumericalQ9 = this.encoding_ipcrfNumericalQ9;
    //   const encoding_ipcrfNumericalQ10 = this.encoding_ipcrfNumericalQ10;
    //   const encoding_ipcrfNumericalQ11 = this.encoding_ipcrfNumericalQ11;
    //   const encoding_ipcrfNumericalQ12 = this.encoding_ipcrfNumericalQ12;
    //   const encoding_ipcrfNumericalQ13 = this.encoding_ipcrfNumericalQ13;
    //   const encoding_ipcrfNumerical_E1 = this.encoding_ipcrfNumerical_E1;
    //   const encoding_ipcrfNumerical_E2 = this.encoding_ipcrfNumerical_E2;
    //   const encoding_ipcrfNumerical_E3 = this.encoding_ipcrfNumerical_E3;
    //   const encoding_ipcrfNumerical_E4 = this.encoding_ipcrfNumerical_E4;
    //   const encoding_ipcrfNumerical_E5 = this.encoding_ipcrfNumerical_E5;
    //   const encoding_ipcrfNumerical_E6 = this.encoding_ipcrfNumerical_E6;
    //   const encoding_ipcrfNumerical_E7 = this.encoding_ipcrfNumerical_E7;
    //   const encoding_ipcrfNumerical_E8 = this.encoding_ipcrfNumerical_E8;
    //   const encoding_ipcrfNumerical_E9 = this.encoding_ipcrfNumerical_E9;
    //   const encoding_ipcrfNumerical_E10 = this.encoding_ipcrfNumerical_E10;
    //   const encoding_ipcrfNumerical_E11 = this.encoding_ipcrfNumerical_E11;
    //   const encoding_ipcrfNumerical_E12 = this.encoding_ipcrfNumerical_E12;
    //   const encoding_ipcrfNumerical_T1 = this.encoding_ipcrfNumerical_T1;
    //   const encoding_ipcrfNumerical_T2 = this.encoding_ipcrfNumerical_T2;
    //   const encoding_ipcrfNumerical_T3 = this.encoding_ipcrfNumerical_T3;
    //   const encoding_ipcrfNumerical_T4 = this.encoding_ipcrfNumerical_T4;
    //   const encoding_ipcrfNumerical_T5 = this.encoding_ipcrfNumerical_T5;
    //   const encoding_ipcrfNumerical_T6 = this.encoding_ipcrfNumerical_T6;
    //   const encoding_ipcrfNumerical_T7 = this.encoding_ipcrfNumerical_T7;
    //   const encoding_ipcrfNumerical_T8 = this.encoding_ipcrfNumerical_T8;
    //   const encoding_ipcrfNumerical_T9 = this.encoding_ipcrfNumerical_T9;
    //   const encoding_ipcrfNumerical_T10 = this.encoding_ipcrfNumerical_T10;
    //   const encoding_ipcrfNumerical_T11 = this.encoding_ipcrfNumerical_T11;
    //   const encoding_ipcrfNumerical_T12 = this.encoding_ipcrfNumerical_T12;
    //   const encoding_ipcrfRatingAve1 = this.encoding_ipcrfRatingAve1;
    //   const encoding_ipcrfRatingAve2 = this.encoding_ipcrfRatingAve2;
    //   const encoding_ipcrfRatingAve3 = this.encoding_ipcrfRatingAve3;
    //   const encoding_ipcrfRatingAve4 = this.encoding_ipcrfRatingAve4;
    //   const encoding_ipcrfRatingAve5 = this.encoding_ipcrfRatingAve5;
    //   const encoding_ipcrfRatingAve6 = this.encoding_ipcrfRatingAve6;
    //   const encoding_ipcrfRatingAve7 = this.encoding_ipcrfRatingAve7;
    //   const encoding_ipcrfRatingAve8 = this.encoding_ipcrfRatingAve8;
    //   const encoding_ipcrfRatingAve9 = this.encoding_ipcrfRatingAve9;
    //   const encoding_ipcrfRatingAve10 = this.encoding_ipcrfRatingAve10;
    //   const encoding_ipcrfRatingAve11 = this.encoding_ipcrfRatingAve11;
    //   const encoding_ipcrfRatingAve12 = this.encoding_ipcrfRatingAve12;
    //   const encoding_1 = this.encoding_1;
    //   const encoding_2 = this.encoding_2;
    //   const encoding_3 = this.encoding_3;
    //   const encoding_4 = this.encoding_4;
    //   const encoding_5 = this.encoding_5;
    //   const encoding_6 = this.encoding_6;
    //   const encoding_7 = this.encoding_7;
    //   const encoding_8 = this.encoding_8;
    //   const encoding_9 = this.encoding_9;
    //   const encoding_10 = this.encoding_10;
    //   const encoding_11 = this.encoding_11;
    //   const encoding_12 = this.encoding_12;
    //   const encoding_AdjectivalRating1 = this.encoding_AdjectivalRating1;
    //   const encoding_AdjectivalRating2 = this.encoding_AdjectivalRating2;
    //   const encoding_AdjectivalRating3 = this.encoding_AdjectivalRating3;
    //   const encoding_AdjectivalRating4 = this.encoding_AdjectivalRating4;
    //   const encoding_AdjectivalRating5 = this.encoding_AdjectivalRating5;
    //   const encoding_AdjectivalRating6 = this.encoding_AdjectivalRating6;
    //   const encoding_AdjectivalRating7 = this.encoding_AdjectivalRating7;
    //   const encoding_AdjectivalRating8 = this.encoding_AdjectivalRating8;
    //   const encoding_AdjectivalRating9 = this.encoding_AdjectivalRating9;
    //   const encoding_AdjectivalRating10 = this.encoding_AdjectivalRating10;
    //   const encoding_AdjectivalRating11 = this.encoding_AdjectivalRating11;
    //   const encoding_AdjectivalRating12 = this.encoding_AdjectivalRating12;
    //   const empAdjRating1 = this.empAdjRating1;
    //   const empAdjRating2 = this.empAdjRating2;
    //   const empFinalRating = this.empFinalRating;
    //   const empAdjRating = this.empAdjRating;
    //   const part_approvingAuthority = this.part_approvingAuthority;
    //   const timeline1 = this.timeline1;
    //   const timeline2 = this.timeline2;
    //   const timeline3 = this.timeline3;
    //   const timeline4 = this.timeline4;
    //   const timeline5 = this.timeline5;
    //   const timeline6 = this.timeline6;
    //   const timeline7 = this.timeline7;
    //   const timeline8 = this.timeline8;
    //   const timeline9 = this.timeline9;
    //   const timeline10 = this.timeline10;
    //   const timeline11 = this.timeline11;
    //   const timeline12 = this.timeline12;
    //   const kra_1 = this.kra_1;
    //   const kra_2 = this.kra_2;
    //   const kra_3 = this.kra_3;
    //   const kra_4 = this.kra_4;
    //   const kra_5 = this.kra_5;
    //   const actual1 = this.actual1;
    //   const actual1_blank = this.actual1_blank;
    //   const actual2 = this.actual2;
    //   const actual2_blank = this.actual2_blank;
    //   const actual3 = this.actual3;
    //   const actual3_blank = this.actual3_blank;
    //   const actual4 = this.actual4;
    //   const actual4_blank = this.actual4_blank;
    //   const actual5 = this.actual5;
    //   const actual5_blank = this.actual5_blank;
    //   const actual6 = this.actual6;
    //   const actual6_blank = this.actual6_blank;
    //   const actual6_timeliness = this.actual6_timeliness;
    //   const actual7 = this.actual7;
    //   const actual7_blank = this.actual7_blank;
    //   const actual8 = this.actual8;
    //   const actual9 = this.actual9;
    //   const actual9_efficiency = this.actual9_efficiency;
    //   const actual9_blank = this.actual9_blank;
    //   const actual10 = this.actual10;
    //   const actual10_efficiency = this.actual10_efficiency;
    //   const actual10_blank = this.actual10_blank;
    //   const actual11 = this.actual11;
    //   const actual11_efficiency = this.actual11_efficiency;
    //   const actual11_blank = this.actual11_blank;
    //   const part3Kra1 = this.part3Kra1;
    //   const part3Kra2 = this.part3Kra2;
    //   const part3Kra3 = this.part3Kra3;
    //   const part3Kra4 = this.part3Kra4;
    //   const part3Kra5 = this.part3Kra5;
    //   const part3Kra_5 = this.part3Kra_5;
    //   const part3Encoding_7 = this.part3Encoding_7;
    //   const part3Encoding_8 = this.part3Encoding_8;
    //   const part3Encoding_9 = this.part3Encoding_9;
    //   const part3Encoding_10 = this.part3Encoding_10;
    //   const part3Encoding_11 = this.part3Encoding_11;
    //   const part3Encoding_12 = this.part3Encoding_12;
    //   const part3Encoding_AdjectivalRating1 = this.part3Encoding_AdjectivalRating1;
    //   const part3Encoding_AdjectivalRating2 = this.part3Encoding_AdjectivalRating2;
    //   const part3Encoding_AdjectivalRating3 = this.part3Encoding_AdjectivalRating3;
    //   const part3Encoding_AdjectivalRating4 = this.part3Encoding_AdjectivalRating4;
    //   const part3Encoding_AdjectivalRating5 = this.part3Encoding_AdjectivalRating5;
    //   const part3Encoding_AdjectivalRating6 = this.part3Encoding_AdjectivalRating6;
    //   const part3Encoding_AdjectivalRating7 = this.part3Encoding_AdjectivalRating7;
    //   const part3Encoding_AdjectivalRating8 = this.part3Encoding_AdjectivalRating8;
    //   const part3Encoding_AdjectivalRating9 = this.part3Encoding_AdjectivalRating9;
    //   const part3Encoding_AdjectivalRating10 = this.part3Encoding_AdjectivalRating10;
    //   const part3Encoding_AdjectivalRating11 = this.part3Encoding_AdjectivalRating11;
    //   const part3Encoding_AdjectivalRating12 = this.part3Encoding_AdjectivalRating12;
    //   const part3EmpAdjRating1 = this.part3EmpAdjRating1;
    //   const part3EmpAdjRating2 = this.part3EmpAdjRating2;
    //   const part3EmpFinalRating = this.part3EmpFinalRating;
    //   const part3EmpAdjRating = this.part3EmpAdjRating;
    //   const data = {
    //     empName,
    //     empRater,
    //     empRegion,
    //     empPosition,
    //     empRaterPosition,
    //     empDivision,
    //     empId,
    //     empDateReview,
    //     empDistrict,
    //     empStatus,
    //     empRatingPeriod,
    //     empSchoolId,
    //     empAge,
    //     empSchoolName,
    //     empSex,
    //     empLevelTaught,
    //     empYearsOfTeaching,
    //     empSchoolType,
    //     empGradeLevelTaught,
    //     empDegree,
    //     empSchoolSize,
    //     empSubjectTaught,
    //     empSpecialization,
    //     empCurricularClassification,
    //     kra1,
    //     kra2,
    //     kra3,
    //     kra4,
    //     kra5,
    //     dateObserved,
    //     cotIndicatorNo1,
    //     cotIndicatorNo2,
    //     cotIndicatorNo3,
    //     cotIndicatorNo4,
    //     cotIndicatorNo5,
    //     cotIndicatorNo6,
    //     cotIndicatorNo7,
    //     cotIndicatorNo8,
    //     cotIndicatorNo9,
    //     cotIndicatorNo10,
    //     cotIndicatorNo11,
    //     cotIndicatorNo12,
    //     cotIndicatorNo13,
    //     kra_cot1Rating2,
    //     kra_cot1Rating3,
    //     kra_cot1Rating4,
    //     kra_cot1Rating5,
    //     kra_cot1Rating6,
    //     kra_cot1Rating7,
    //     kra_cot1Rating8,
    //     kra_cot1Rating9,
    //     kra_cot1Rating10,
    //     kra_cot1Rating11,
    //     kra_cot1Rating12,
    //     kra_cot1Rating13,
    //     kra_cot1Rating14,
    //     kra_cot1RpmsObj1,
    //     kra_cot1RpmsObj2,
    //     kra_cot1RpmsObj3,
    //     kra_cot1RpmsObj4,
    //     kra_cot1RpmsObj5,
    //     kra_cot1RpmsObj6,
    //     kra_cot1RpmsObj7,
    //     kra_cot1RpmsObj8,
    //     kra_cot1RpmsObj9,
    //     kra_cot1RpmsObj10,
    //     kra_cot1RpmsObj11,
    //     kra_cot1RpmsObj12,
    //     kra_cot2Rating1,
    //     kra_cot2Rating2,
    //     kra_cot2Rating3,
    //     kra_cot2Rating4,
    //     kra_cot2Rating5,
    //     kra_cot2Rating6,
    //     kra_cot2Rating7,
    //     kra_cot2Rating8,
    //     kra_cot2Rating9,
    //     kra_cot2Rating10,
    //     kra_cot2Rating11,
    //     kra_cot2Rating12,
    //     kra_cot2Rating13,
    //     kra_cot2Rating14,
    //     kra_cot2RpmsObj1,
    //     kra_cot2RpmsObj2,
    //     kra_cot2RpmsObj3,
    //     kra_cot2RpmsObj4,
    //     kra_cot2RpmsObj5,
    //     kra_cot2RpmsObj6,
    //     kra_cot2RpmsObj7,
    //     kra_cot2RpmsObj8,
    //     kra_cot2RpmsObj9,
    //     kra_cot2RpmsObj10,
    //     kra_cot2RpmsObj11,
    //     kra_cot2RpmsObj12,
    //     tf_kra_cot3Rating1,
    //     kra_cot3Rating1,
    //     kra_cot3Rating2,
    //     kra_cot3Rating3,
    //     kra_cot3Rating4,
    //     kra_cot3Rating5,
    //     kra_cot3Rating6,
    //     kra_cot3Rating7,
    //     kra_cot3Rating8,
    //     kra_cot3Rating9,
    //     kra_cot3Rating10,
    //     kra_cot3Rating11,
    //     kra_cot3Rating12,
    //     kra_cot3Rating13,
    //     kra_cot3Rpms1,
    //     kra_cot3Rpms2,
    //     kra_cot3Rpms3,
    //     kra_cot3Rpms4,
    //     kra_cot3Rpms5,
    //     kra_cot3Rpms6,
    //     kra_cot3Rpms7,
    //     kra_cot3Rpms8,
    //     kra_cot3Rpms9,
    //     kra_cot3Rpms10,
    //     kra_cot3Rpms11,
    //     kra_cot3Rpms12,
    //     tf_kra_cot4Rating1,
    //     kra_cot4Rating1,
    //     kra_cot4Rating2,
    //     kra_cot4Rating3,
    //     kra_cot4Rating4,
    //     kra_cot4Rating5,
    //     kra_cot4Rating6,
    //     kra_cot4Rating7,
    //     kra_cot4Rating8,
    //     kra_cot4Rating9,
    //     kra_cot4Rating10,
    //     kra_cot4Rating11,
    //     kra_cot4Rating12,
    //     kra_cot4Rating13,
    //     kra_cot4Rpms1,
    //     kra_cot4Rpms2,
    //     kra_cot4Rpms3,
    //     kra_cot4Rpms4,
    //     kra_cot4Rpms5,
    //     kra_cot4Rpms6,
    //     kra_cot4Rpms7,
    //     kra_cot4Rpms8,
    //     kra_cot4Rpms9,
    //     kra_cot4Rpms10,
    //     kra_cot4Rpms11,
    //     kra_cot4Rpms12,
    //     encodingAverage1,
    //     encodingAverage2,
    //     encodingAverage3,
    //     encodingAverage4,
    //     encodingAverage5,
    //     encodingAverage6,
    //     encodingAverage7,
    //     encodingAverage8,
    //     encodingAverage9,
    //     encodingAverage10,
    //     encodingAverage11,
    //     encodingAverage12,
    //     encoding_ipcrfNumericalQ1,
    //     encoding_ipcrfNumericalQ2,
    //     encoding_ipcrfNumericalQ3,
    //     encoding_ipcrfNumericalQ4,
    //     encoding_ipcrfNumericalQ5,
    //     encoding_ipcrfNumericalQ6,
    //     encoding_ipcrfNumericalQ7,
    //     encoding_ipcrfNumericalQ8,
    //     encoding_ipcrfNumericalQ9,
    //     encoding_ipcrfNumericalQ10,
    //     encoding_ipcrfNumericalQ11,
    //     encoding_ipcrfNumericalQ12,
    //     encoding_ipcrfNumericalQ13,
    //     encoding_ipcrfNumerical_E1,
    //     encoding_ipcrfNumerical_E2,
    //     encoding_ipcrfNumerical_E3,
    //     encoding_ipcrfNumerical_E4,
    //     encoding_ipcrfNumerical_E5,
    //     encoding_ipcrfNumerical_E6,
    //     encoding_ipcrfNumerical_E7,
    //     encoding_ipcrfNumerical_E8,
    //     encoding_ipcrfNumerical_E9,
    //     encoding_ipcrfNumerical_E10,
    //     encoding_ipcrfNumerical_E11,
    //     encoding_ipcrfNumerical_E12,
    //     encoding_ipcrfNumerical_T1,
    //     encoding_ipcrfNumerical_T2,
    //     encoding_ipcrfNumerical_T3,
    //     encoding_ipcrfNumerical_T4,
    //     encoding_ipcrfNumerical_T5,
    //     encoding_ipcrfNumerical_T6,
    //     encoding_ipcrfNumerical_T7,
    //     encoding_ipcrfNumerical_T8,
    //     encoding_ipcrfNumerical_T9,
    //     encoding_ipcrfNumerical_T10,
    //     encoding_ipcrfNumerical_T11,
    //     encoding_ipcrfNumerical_T12,
    //     encoding_ipcrfRatingAve1,
    //     encoding_ipcrfRatingAve2,
    //     encoding_ipcrfRatingAve3,
    //     encoding_ipcrfRatingAve4,
    //     encoding_ipcrfRatingAve5,
    //     encoding_ipcrfRatingAve6,
    //     encoding_ipcrfRatingAve7,
    //     encoding_ipcrfRatingAve8,
    //     encoding_ipcrfRatingAve9,
    //     encoding_ipcrfRatingAve10,
    //     encoding_ipcrfRatingAve11,
    //     encoding_ipcrfRatingAve12,
    //     encoding_1,
    //     encoding_2,
    //     encoding_3,
    //     encoding_4,
    //     encoding_5,
    //     encoding_6,
    //     encoding_7,
    //     encoding_8,
    //     encoding_9,
    //     encoding_10,
    //     encoding_11,
    //     encoding_12,
    //     encoding_AdjectivalRating1,
    //     encoding_AdjectivalRating2,
    //     encoding_AdjectivalRating3,
    //     encoding_AdjectivalRating4,
    //     encoding_AdjectivalRating5,
    //     encoding_AdjectivalRating6,
    //     encoding_AdjectivalRating7,
    //     encoding_AdjectivalRating8,
    //     encoding_AdjectivalRating9,
    //     encoding_AdjectivalRating10,
    //     encoding_AdjectivalRating11,
    //     encoding_AdjectivalRating12,
    //     empAdjRating1,
    //     empAdjRating2,
    //     empFinalRating,
    //     empAdjRating,
    //     part_approvingAuthority,
    //     timeline1,
    //     timeline2,
    //     timeline3,
    //     timeline4,
    //     timeline5,
    //     timeline6,
    //     timeline7,
    //     timeline8,
    //     timeline9,
    //     timeline10,
    //     timeline11,
    //     timeline12,
    //     kra_1,
    //     kra_2,
    //     kra_3,
    //     kra_4,
    //     kra_5,
    //     actual1,
    //     actual1_blank,
    //     actual2,
    //     actual2_blank,
    //     actual3,
    //     actual3_blank,
    //     actual4,
    //     actual4_blank,
    //     actual5,
    //     actual5_blank,
    //     actual6,
    //     actual6_blank,
    //     actual6_timeliness,
    //     actual7,
    //     actual7_blank,
    //     actual8,
    //     actual9,
    //     actual9_blank,
    //     actual9_efficiency,
    //     actual10,
    //     actual10_blank,
    //     actual10_efficiency,
    //     actual11,
    //     actual11_blank,
    //     actual11_efficiency,
    //     part3Kra1,
    //     part3Kra2,
    //     part3Kra3,
    //     part3Kra4,
    //     part3Kra5,
    //     part3Kra_5,
    //     part3Encoding_7,
    //     part3Encoding_8,
    //     part3Encoding_9,
    //     part3Encoding_10,
    //     part3Encoding_11,
    //     part3Encoding_12,
    //     part3Encoding_AdjectivalRating1,
    //     part3Encoding_AdjectivalRating2,
    //     part3Encoding_AdjectivalRating3,
    //     part3Encoding_AdjectivalRating4,
    //     part3Encoding_AdjectivalRating5,
    //     part3Encoding_AdjectivalRating6,
    //     part3Encoding_AdjectivalRating7,
    //     part3Encoding_AdjectivalRating8,
    //     part3Encoding_AdjectivalRating9,
    //     part3Encoding_AdjectivalRating10,
    //     part3Encoding_AdjectivalRating11,
    //     part3Encoding_AdjectivalRating12,
    //     part3EmpAdjRating1,
    //     part3EmpAdjRating2,
    //     part3EmpFinalRating,
    //     part3EmpAdjRating,
    //   },
    //console.log(data);
    //}
  },
};
</script>
