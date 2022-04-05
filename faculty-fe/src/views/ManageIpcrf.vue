<template>
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
              and dispose of your personal information in accordance with the
              Data Privacy Act of 2012.<br />

              <b> INSTRUCTIONS: </b> <br />
              Part 1 shall be accomplished by the Rater during the Phase III:
              Performance Review and Evaluation of the RPMS Cycle. <br />
              Fill in empty cells (white) with needed information about the
              teacher, school and division. <br />

              COT Rating<br />
              Encode the COT rating per observation period by doing the
              following steps:<br />
              1) Select the subject for COT; 2) Input the COT rating per
              objective; and 3) Lock COT once finished. <br />

              QET Rating<br />
              Once all available COT ratings are inputted, encode your rating
              for Efficiency and Timeliness. <br />

              Note: This form automatically transmutes the COT rating to its
              corresponding in the RPMS 5-point scale. <br />

              When COT and QET ratings are encoded, click Finalize Part 1. Give
              the file copy to the teacher concerned.<br />
              The teacher shall accomplish Parts 2 & 4. <br />
            </div>
          </v-card-text> </v-card
        ><br />
        <v-card>
          <v-simple-table height="auto" class="pa-0 pa-0 ma-5" max-width="60vw">
            <template v-slot:default>
              <tbody class="text-center" color="secondary">
                <!-- row 1 -->
                <tr>
                  <td colspan="3" style="text-align: left">
                    Name of Employee:
                  </td>
                  <td colspan="2">
                    <v-text-field
                      placeholder="Name"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="3" style="text-align: left">Rater:</td>
                  <td colspan="3">
                    <v-text-field
                      placeholder="Rater"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="1" style="text-align: left">Region:</td>
                  <td colspan="1">
                    <v-text-field
                      placeholder="Region"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                </tr>
                <!-- Row 2 -->
                <tr>
                  <td colspan="3" style="text-align: left">Position:</td>
                  <v-col class="d-flex" cols="12" sm="20">
                    <v-select
                      :items="items"
                      label="Position"
                      dense
                      solo
                      class="text-center pt-5"
                    ></v-select>
                  </v-col>
                  <td colspan="2" style="text-align: left">Position:</td>

                  <td colspan="3">
                    <v-text-field
                      placeholder="Position"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="3" style="text-align: center">Division:</td>
                  <td colspan="2">
                    <v-text-field
                      placeholder="Division"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                </tr>
                <!-- Row 3 -->
                <tr>
                  <td colspan="3" style="text-align: left">Employee ID#:</td>
                  <td colspan="2">
                    <v-text-field
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
                      placeholder="Date of Review"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="1" style="text-align: left">
                    Disttrict/Municipality:
                  </td>
                  <td colspan="1">
                    <v-text-field
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
                  <td colspan="3" style="text-align: left">
                    Employment Status:
                  </td>
                  <td colspan="2">
                    <v-text-field
                      placeholder="Position"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="3" style="text-align: left">Rating Period:</td>
                  <td colspan="3">
                    <v-text-field
                      placeholder="Position"
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
                      placeholder="School ID"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                </tr>
                <!-- row 5 -->
                <tr>
                  <td>Age:</td>
                  <td colspan="9">
                    <v-text-field
                      placeholder="Age"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td>School Name:</td>
                  <td colspan="3">
                    <v-text-field
                      placeholder="School Name"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                </tr>
                <!-- Row 6 -->
                <tr>
                  <td colspan="3" style="text-align: left">Sex:</td>
                  <td colspan="2">
                    <v-text-field
                      placeholder="Sex"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="3" style="text-align: left">
                    No. of Years in Teaching:
                  </td>
                  <td colspan="3">
                    <v-text-field
                      placeholder="Years of Teaching"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="1" style="text-align: left">School Type:</td>
                  <td colspan="1">
                    <v-text-field
                      placeholder="School Type"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                </tr>
                <!-- Row 7 -->
                <tr>
                  <td colspan="3" style="text-align: left">Level Taught:</td>
                  <td colspan="2">
                    <v-text-field
                      placeholder="Level Taught"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="3" style="text-align: left">
                    Highest Degree Obtained:
                  </td>
                  <td colspan="3">
                    <v-text-field
                      placeholder="Degree Obtained"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="1" style="text-align: left">School Size:</td>
                  <td colspan="1">
                    <v-text-field
                      placeholder="School Size"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                </tr>
              </tbody>
            </template>
          </v-simple-table>
        </v-card>
      </v-tab-item>
      <!-- Part 1 Content -->
      <v-tab>Part 1 - Proficient</v-tab>
      <v-tab-item>
        <v-card-title
          v-model="headerText"
          label="Search"
          single-line
          hide-details
          class="justify-center"
        >
          <h6>
            INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM (IPCRF) for
            Teacher I-III, SPET I-IV, Special Science Teacher I-II
          </h6>
        </v-card-title>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-5" max-width="60vw">
          <template v-slot:default>
            <tbody class="text-center" color="secondary">
              <!-- row 1 -->
              <tr>
                <td colspan="3" style="text-align: left">Name of Employee:</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Name of Employee"
                    solo
                    dense
                    class="text-center pt-5"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3" style="text-align: left">Name of Rater:</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Name of Rater"
                    solo
                    dense
                    class="text-center pt-5"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td colspan="3" style="text-align: left">Position:</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Position"
                    solo
                    dense
                    class="text-center pt-5"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3" style="text-align: left">Position:</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Position"
                    solo
                    dense
                    class="text-center pt-5"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td colspan="3" style="text-align: left">
                  Bureau/Center/Service/Division::
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Bureau/Center/Service/Division:"
                    solo
                    dense
                    class="text-center pt-5"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3" style="text-align: left">Date of Review::</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Date of Review:"
                    solo
                    dense
                    class="text-center pt-5"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td colspan="3" style="text-align: left">Rating Period:</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Rating Period"
                    solo
                    dense
                    class="text-center pt-5"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3" style="text-align: left"></td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    class="emptyField text-center rounded-0 pt-5"
                    type="text "
                  >
                  </v-text-field>
                </td>
              </tr>
            </tbody>
          </template>
        </v-simple-table>
      </v-tab-item>
      <!-- Part 2 Content -->
      <v-tab>Part 2</v-tab>
      <v-tab-item>
        <v-container style="border">
          
        </v-container>
      </v-tab-item>
      <v-tab>Part 3</v-tab>
        <v-tab-item>
        <v-container>
          <v-row>
            <v-col cols="12" sm="6" md="3">
              <v-text-field label="Solo" solo></v-text-field>
            </v-col>
          </v-row>
        </v-container>
      </v-tab-item>
      <v-tab>Part 4</v-tab>
      <v-tab-item>
        <v-card-title
          v-model="headerText"
          label="Search"
          single-line
          hide-details
          class="justify-center"
        >
          <h5 class="text-center">
            <b> PART IV: DEVELOPMENT PLANS</b>
          </h5>
        </v-card-title>
        <v-card class="mx-auto" max-width="800">
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
              IPCRF.<br />The Ratee can modify the cell (i.e., add rows) to
              reflect his/her development needs and strengths.
            </div>
          </v-card-text>
        </v-card>
      </v-tab-item>
    </v-tabs>
  </v-card>
</template>
<style scoped>
</style>
<script>
export default {
  data: () => ({
    items: ["Foo", "Bar", "Fizz", "Buzz"],
  }),
};
</script>