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
                      v-model="empName"
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
                      v-model="empRater"
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
                      v-model="empRegion"
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
                      v-model="empPosition"
                      label="Position"
                      dense
                      solo
                      class="text-center pt-5"
                    ></v-select>
                  </v-col>
                  <td colspan="2" style="text-align: left">Position:</td>

                  <td colspan="3">
                    <v-text-field
                      v-model="raterPosition"
                      placeholder="Rater Position"
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
                      v-model="empDivision"
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
                  <td colspan="1" style="text-align: left">
                    Disttrict/Municipality:
                  </td>
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
                  <td colspan="3" style="text-align: left">
                    Employment Status:
                  </td>
                  <td colspan="2">
                    <v-text-field
                      v-model="empStatus"
                      placeholder="Status"
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
                      v-model="smpSchoolId"
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
                    <v-text-field
                      v-model="empAge"
                      placeholder="Age"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
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
                    <v-text-field
                      v-model="empSex"
                      placeholder="Sex"
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
                  <td colspan="3" style="text-align: left">Level Taught:</td>
                  <td colspan="2">
                    <v-text-field
                      v-model="empLevelTaught"
                      placeholder="Level "
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
                      v-model="empYearsOfTeaching"
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
                      v-model="empSchoolType"
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
                  <td colspan="3" style="text-align: left">
                    Grade Level Taught:
                  </td>
                  <td colspan="2">
                    <v-text-field
                      v-model="empLevelTaught"
                      placeholder="Grade Level "
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
                      v-model="empDegree"
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
                      v-model="empSchoolSize"
                      placeholder="School Size"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                </tr>

                <!-- Row8 -->
                <tr>
                  <td colspan="3" style="text-align: left">Subject Taught:</td>
                  <td colspan="2">
                    <v-text-field
                      v-model="empSubTaught"
                      placeholder="Subject Taught"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>

                  <td colspan="3" style="text-align: left">
                    Area of Specialization:
                  </td>
                  <td colspan="3">
                    <v-text-field
                      v-model="empSpecialization"
                      placeholder=" Area of Specialization"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-text-field>
                  </td>
                  <td colspan="1" style="text-align: left">
                    Curricular Classification:
                  </td>
                  <td colspan="1">
                    <v-text-field
                      v-model="empCurricular"
                      placeholder="Curricular "
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
          <!-- first row -->

          <v-row no-gutters class="text-center">
            <div class="encodingDiv">
              <template v-for="n in 14">
                <v-col :key="n" v-if="n === 1">
                  <v-card class="pa-2 pt-4" outlined tile>
                    KRA <br /><br
                  /></v-card>
                </v-col>

                <v-col :key="n" v-else-if="n === 2">
                  <v-card class="pa-2 pt-4" outlined tile
                    >Weight per <br />
                    KRA
                  </v-card>
                </v-col>

                <v-col :key="n" v-else-if="n === 3">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Objectives <br />
                    <br
                  /></v-card>
                </v-col>
                <v-col :key="n" v-else-if="n === 4">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Weight per Objective
                  </v-card>
                </v-col>
                <v-col :key="n" v-else-if="n === 5">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Numerical Ratings
                  </v-card>
                </v-col>

                <v-col :key="n" v-else-if="n === 6">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Score <br />
                    <br
                  /></v-card>
                </v-col>
                <v-col :key="n" v-else-if="n === 7">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Adjectival <br />
                    Rating
                  </v-card>
                </v-col>
                <v-col :key="n" v-if="n === 8">
                  <v-card class="pa-2 pt-4" outlined tile>
                    KRA <br /><br
                  /></v-card>
                </v-col>

                <v-col :key="n" v-else-if="n === 9">
                  <v-card class="pa-2 pt-4" outlined tile
                    >Weight per <br />
                    KRA
                  </v-card>
                </v-col>

                <v-col :key="n" v-else-if="n === 10">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Objectives <br />
                    <br
                  /></v-card>
                </v-col>
                <v-col :key="n" v-else-if="n === 11">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Weight per Objective
                  </v-card>
                </v-col>
                <v-col :key="n" v-else-if="n === 12">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Numerical Ratings
                  </v-card>
                </v-col>

                <v-col :key="n" v-else-if="n === 13">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Score <br />
                    <br
                  /></v-card>
                </v-col>
                <v-col :key="n" v-else-if="n === 14">
                  <v-card class="pa-2 pt-4" outlined tile>
                    Adjectival <br />
                    Rating
                  </v-card>
                </v-col>
              </template>
            </div>
          </v-row>
        </v-card>
      </v-tab-item>

      <!-- Encoding Part 2 -->
      <v-tab>Encoding Part 2</v-tab>
      <v-tab-item>
        <div id="encoding2">
          <v-app>
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
              <v-row no-gutters>
                <v-col v-for="n in 2" :key="n" class="text-justify">
                  <v-flex md11 sm6>
                    <v-card v-if="n === 1" class="mx-auto" max-width="500">
                      <v-card-text>
                        <div class="text--primary">
                          <b>Self- Management</b><br />
                          1.Sets personal goals and directions, needs and
                          development. <br />
                          2.Undertakes personal actions and behavior that are
                          clear and purposive and takes into account personal
                          goals and values congruent to that of the
                          organization. <br />
                          3.Displays emotional maturity and enthusiasm for and
                          is challenged by higher goals. <br />
                          4.Prioritizes work tasks and schedules (through Gantt
                          chants, checklists, etc.) to achieve goals. <br />
                          5.Sets high quality, challenging, realistic goals for
                          self and others. <br />
                        </div>
                      </v-card-text>
                    </v-card>

                    <v-card v-if="n === 2" class="mx-auto" max-width="500">
                      <v-card-text>
                        <div class="text--primary">
                          <b>Teamwork</b><br />
                          1. Willingly does his/her share of responsibility.
                          <br />
                          2.Promotes collaboration and removes barrier to
                          teamwork and goal accomplishment across the
                          organization. <br />
                          3.Applies negotiation principles in arriving at
                          win-win agreements. <br />
                          4. Drives consensus and team ownership of decisions.
                          <br />
                          5. Works constructively and collaboratively with
                          others and across organizations to accomplish
                          organization goals and objectives.
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
                          1.Demonstrates the values and behavior enshrined in
                          the Norms and Conduct and Ethical Standards for Public
                          Officials and Employees (RA 6713). <br />
                          2.Practices ethical and professional behavior and
                          conduct taking into account the impact of his/her
                          actions and decisions. <br />
                          3.Maintains a professional image: being trustworthy,
                          regularity of attendance and punctuality, good
                          grooming and communication. <br />
                          4.Makes personal sacrifices to meet the organization’s
                          needs. <br />
                          5.Acts with a sense of urgency and responsibility to
                          meet the organization’s needs, improve system and help
                          others improve their effectiveness.
                        </div>
                      </v-card-text>
                    </v-card>

                    <v-card v-if="n === 2" class="mx-auto" max-width="500">
                      <v-card-text>
                        <div class="text--primary">
                          <b>Service Orientation</b><br />
                          1. Can explain and articulate organizational
                          directions, issues and problems. <br />
                          2. Takes personal responsibility for dealing with
                          and/or correcting customer service issues and
                          concerns. <br />
                          3. Initiates activities that promote advocacy for men
                          and women empowerment. <br />
                          4. Participates in updating office vision, mission,
                          mandates and strategies based on DepEd strategies and
                          directions. <br />
                          5. Develops and adopts service improvement program
                          through simplified procedures that will further
                          enhance service delivery.
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
                          1. Achieves results with optimal use of time and
                          resources most of the time.<br />
                          2. Avoids rework, mistakes and wastage through
                          effective work methods by placing organizational needs
                          before personal needs. <br />
                          3. Delivers error-free outputs most of the time by
                          conforming to standard operating procedures correctly
                          and consistently. Able to produce very satisfactory
                          quality work in terms of usefulness/acceptability and
                          completeness with no supervision required. <br />
                          4. Expresses a desire to do better and may express
                          frustration at waste or inefficiency. May focus on new
                          or more precise ways of meeting goals set. <br />
                          5. Makes specific changes in the system or in own work
                          methods to improve performance. Examples may include
                          doing something better, faster, at a lower cost, more
                          efficiently, or improving quality, customer
                          satisfaction, morale, without setting any specific
                          goal.
                        </div>
                      </v-card-text>
                    </v-card>

                    <v-card v-if="n === 2" class="mx-auto" max-width="500">
                      <v-card-text>
                        <div class="text--primary">
                          <b>Innovation</b><br />
                          1. Examines the root cause of problems and suggests
                          effective solutions. Foster new ideas, processes and
                          suggests better ways to do things (cost and/or
                          operational efficiency). <br />
                          2. Demonstrates an ability to think “beyond the box”.
                          Continuously focuses on improving personal
                          productivity to create higher value and results.
                          <br />
                          3. Promotes a creative climate and inspires co-workers
                          to develop original ideas or solutions.<br />
                          4. Translates creative thinking into tangible changes
                          and solutions that improve the work unit and
                          organization. <br />
                          5. Uses ingenious methods to accomplish
                          responsibilities. Demonstrates resourcefulness and the
                          ability to succeed with minimal resources.
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

                    Click Finalize Part 2 to save your data. You can now proceed
                    to the preparation of the Part IV: Development Plan, based
                    on the results of Part 1 and Part 2 of the IPCRF.
                  </div>
                </v-card-text>
              </v-card>
              <br />

              <div class="pa-2" align="center">
                <v-btn color="primary"> PREVIOUS </v-btn>
                <v-btn color="primary" class="ml-2"> NEXT </v-btn>
              </div>
            </v-container>
          </v-app>
        </div>
      </v-tab-item>

      <!-- START OF Part 1 Content -->

      <v-tab>Part 1 - Proficient</v-tab>

      <v-tab-item>
        <div id=" encodingPart1 ">
          <v-app id="encodingContent">
            <v-container class="grey lighten-5" style="height: 100%">
              <v-card
                class="pa-2 text-center"
                color="grey lighten-2"
                outlined
                tile
              >
                <b
                  >INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM (IPCRF) for
                  Teacher I-III, SPET I-IV, Special Science Teacher I-II</b
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
                        <v-subheader>
                          Bureau/Center/Service/Division:</v-subheader
                        >
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
              <v-card
                class="pa-2 text-center"
                color="grey lighten-2"
                outlined
                tile
              >
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 180px"
                        outlined
                        tile
                      >
                        <h5>
                          KRAs <br />
                          <br />
                        </h5>
                      </v-card>
                      <div style="text-align: left">
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 520px"
                          outlined
                          tile
                        >
                          <h5>1. Content Knowledge and Pedagogy</h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 503px"
                          outlined
                          tile
                        >
                          <h5>
                            2. Diversity of Learners and Assessment and
                            Reporting
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 291px"
                          outlined
                          tile
                        >
                          <h5>3. Curriculum and Planning</h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 661px"
                          outlined
                          tile
                        >
                          <h5>
                            4. Community Linkages and Professional Engagement
                            and Personal Growth and Professional Development
                          </h5>
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 217px"
                          outlined
                          tile
                        >
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
                      <v-card
                        class="pa-2 pt-4"
                        outlined
                        tile
                        style="width: 300px"
                      >
                        <h5>
                          Objectives<br />
                          <br />
                        </h5>
                      </v-card>
                      <div style="text-align: center">
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 150px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            1. Applied knowledge of content within <br />
                            and across curriculum teaching areas.
                          </h5>
                          <br />
                        </v-card>

                        <v-card
                          class="pa-2 pt-4"
                          style="height: 180px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            2. Ensured the positive use of ICT to facilitate the
                            teaching and learning process
                          </h5>
                          <br />
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 190px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            3. Applied a range of teaching strategies to develop
                            critical and creative thinking, as well as other
                            higher-order thinking skills.
                          </h5>
                          <br />
                        </v-card>
                        <v-card
                          class="pa-2 pt-8"
                          style="height: 185px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            4. Established a learnercentered culture by using
                            teaching strategies that respond to their
                            linguistic, cultural, socioeconomic and religious
                            backgrounds
                          </h5>
                          <br />
                        </v-card>

                        <v-card
                          class="pa-2"
                          style="height: 146px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            5. Planned and delivered teaching strategies that
                            are responsive to the special educational needs of
                            learners in difficult circumstances*, including:
                            geographic isolation; chronic illness; displacement
                            due to armed conflict, urban resettlement or
                            disasters; child abuse and child labor practices
                          </h5>
                          <br />
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 172px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            6. Used strategies for providing timely, accurate
                            and constructive feedback to improve learner
                            performance
                          </h5>
                          <br />
                        </v-card>
                        <v-card
                          class="pa-1"
                          style="height: 145px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            7. Selected, developed, organized and used
                            appropriate teaching and learning resources,
                            including ICT, to address learning goals
                          </h5>
                          <br />
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 146px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            8. Set achievable and appropriate learning outcomes
                            that are aligned with learning competencies
                          </h5>
                          <br />
                        </v-card>

                        <v-card
                          class="pa-2 pt-4"
                          style="height: 217px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            9. Built relationships with parents/ guardians and
                            the wider school community to facilitate involvement
                            in the educative process
                          </h5>
                          <br />
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 247px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            10. Participated in professional networks to share
                            knowledge and to enhance practice
                          </h5>
                          <br />
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 197px"
                          outlined
                          tile
                        >
                          <h5 class="font-weight-regular">
                            11. Developed a personal improvement plan based on
                            reflection of one’s practice and ongoing
                            professional learning
                          </h5>
                          <br />
                        </v-card>
                        <v-card
                          class="pa-2 pt-4"
                          style="height: 217px"
                          outlined
                          tile
                        >
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 100px"
                        outlined
                        tile
                      >
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 140px"
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
                        style="height: 520px"
                        v-model="kra1"
                        outlined
                        tile
                      >
                        <h5 class="font-weight-regular">
                          <br />24.00%<br /><br />
                        </h5>
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 100px"
                        outlined
                        tile
                      >
                        <h5>
                          QET <br />
                          <br /></h5
                      ></v-card>
                      <v-card
                        class="pa-2 pt-4 qet"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5 class="font-weight-regular">
                          <br />
                          Quality<br />
                          <br /></h5></v-card
                      ><v-card class="pa-1" outlined tile>
                        <h5 class="font-weight-regular">Efficiency</h5></v-card
                      ><v-card class="pa-1 pb-2" outlined tile>
                        <h5 class="font-weight-regular">Timeliness</h5></v-card
                      >
                      <v-card
                        class="pa-2 pt-4 qet"
                        style="height: 125px"
                        outlined
                        tile
                      >
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
                      <v-card
                        class="pa-2 pt-4 qet"
                        style="height: 126px"
                        outlined
                        tile
                      >
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
                      <v-card
                        class="pa-2 pt-4 qet"
                        style="height: 125px"
                        outlined
                        tile
                      >
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
                      <v-card
                        class="pa-2 pt-4 qet"
                        style="height: 86px"
                        outlined
                        tile
                      >
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
                      <v-card
                        class="pa-6 pt-4 qet"
                        style="height: 125px"
                        outlined
                        tile
                      >
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
                      <v-card
                        class="pa-2 pt-4 qet"
                        style="height: 136px"
                        outlined
                        tile
                      >
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
                      <v-card
                        class="pa-6 qet"
                        style="height: 125px"
                        outlined
                        tile
                      >
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
                          Demonstrated Level 7 in Objective 1 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-4" style="height: 64px" outlined tile>
                        <h5>2 blank</h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Ensured that the ICT used redefine and transform
                          learning experiences and are documented properly and
                          consistently using any referencing style as shown in
                          the submitted learning material <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Applied teaching strategies that challenge learners to
                          draw conclusions and justify their thinking or put
                          parts together to promote deeper understanding of
                          ideas learned as shown in the submitted learning
                          material
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>

                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Utilized effective teaching strategies that are
                          appropriate in responding to learners’ linguistic,
                          cultural, socioeconomic, or religious backgrounds at
                          an individual level* as shown in the submitted
                          learning material <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Demonstrated Level 7 in Objective 5 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Provided learners with accurate, and specific and
                          directed constructive feedback* as shown in the
                          evidence submitted <br />
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
                          MOV submitted shows feedback given within 5 working
                          days from submission** <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Demonstrated Level 7 in Objective 7 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          All of the learning outcomes set are aligned with the
                          learning competencies as shown in the MOV submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Sustained engagement with parents/ guardians and/ or
                          wider school community to facilitate involvement in
                          the educative process as evidenced by 2 or more of MOV
                          no. 1 or 2 <br />
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
                          Participated in any professional network/ activity
                          that requires output* and proof of implementation **
                          within the school to share knowledge and to enhance
                          practice as evidenced by the submitted MOV <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4 part1Outstanding"
                        style="height: 65px"
                        outlined
                        tile
                      >
                        <h5>
                          Submitted 4 different kinds of acceptable MOV***<br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>#4.2 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Updated the Development Plan and approved by the rater
                          during Phase II of the RPMS cycle <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Submitted the IPCRF-DP with any 4 of the acceptable
                          Supporting MOV* <br />
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
                          Performed at least 1 related work/activity that
                          contributed to the teaching-learning process beyond
                          the school/ Community Learning Center (CLC) as
                          evidenced by submitted MOV <br />
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 290px"
                        outlined
                        tile
                      >
                        <h5>
                          Very Satisfactory <br />

                          4
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 6 in Objective 1 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 64px"
                        outlined
                        tile
                      >
                        <h5>2 blank <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Ensured that the ICT used augment and enrich learning
                          experiences and are documented properly and
                          consistently using any referencing style as shown in
                          the submitted learning material<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 126px"
                        outlined
                        tile
                      >
                        <h5>
                          Applied teaching strategies that require learners to
                          make connections using ideas learned as shown in the
                          submitted learning material
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>
                          Utilized effective teaching strategies that are
                          appropriate in responding to learners’ linguistic,
                          cultural, socioeconomic, or religious backgrounds at a
                          group level* as shown in the submitted learning
                          material
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 6 in Objective 5 as shown in COT
                          rating sheets/interobserver agreement forms<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Provided learners with accurate, and specific
                          constructive feedback as shown in the evidence
                          submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-1" style="height: 30px" outlined tile>
                        <h5>efficiency black <br /></h5>
                      </v-card>
                      <v-card class="pa-2" style="height: 56px" outlined tile>
                        <h5>
                          MOV submitted shows feedback given within 6-10 working
                          days from submission**<br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 6 in Objective 7 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          Majority of the learning outcomes set are aligned with
                          the learning competencies as shown in the MOV
                          submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>
                          Secured collaboration with parents/ guardians and/ or
                          wider school community to facilitate involvement in
                          the educative process as evidenced by one MOV no. 1 or
                          2
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 46px"
                        outlined
                        tile
                      >
                        <h5>Submitted any 3 of the acceptable MOV*<br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 46px"
                        outlined
                        tile
                      >
                        <h5>#4 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card class="pa-2" style="height: 136px" outlined tile>
                        <h5>
                          Participated in any professional network/ activity
                          that requires output* and proof of implementation **
                          within the department/grade level to share knowledge
                          and to enhance practice as evidenced by the submitted
                          MOV<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 65px"
                        outlined
                        tile
                      >
                        <h5>
                          Submitted 3 different kinds of acceptable MOV***<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 46px"
                        outlined
                        tile
                      >
                        <h5>#4.2 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          Discussed progress on the Development Plan with the
                          rater to check whether Development Needs were
                          addressed
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Submitted the IPCRF-DP with any 3 of the acceptable
                          Supporting MOV* <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>#4.3 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>
                          Performed at least 1 related work/activity that
                          contributed to the teaching-learning process within
                          the school/ Community Learning Center (CLC) as
                          evidenced by submitted MOV <br />
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 290px"
                        outlined
                        tile
                      >
                        <h5>
                          Satisfactory <br />

                          3 <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 5 in Objective 1 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 64px"
                        outlined
                        tile
                      >
                        <h5>2 blank <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Ensured that the ICT used modify processes and improve
                          learning experiences and are documented properly and
                          consistently using any referencing style as shown in
                          the submitted learning material<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 126px"
                        outlined
                        tile
                      >
                        <h5>
                          Applied teaching strategies that require learners to
                          describe and explain ideas learned as shown in the
                          submitted learning material
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>
                          Utilized an effective teaching strategy that is
                          appropriate in responding to learners’ linguistic,
                          cultural, socioeconomic, or religious backgrounds as
                          shown in the submitted learning material<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 5 in Objective 5 as shown in COT
                          rating sheets/interobserver agreement forms<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Provided learners with accurate, and general
                          constructive feedback as shown in the evidence
                          submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-1" outlined tile>
                        <h5>efficiency black <br /></h5>
                      </v-card>
                      <v-card class="pa-2" style="height: 56px" outlined tile>
                        <h5>
                          MOV submitted shows feedback given within 11-20
                          working days from submission**<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          Demonstrated Level 5 in Objective 7 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          Half of the learning outcomes set are aligned with the
                          learning competencies as shown in the MOV submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Communicated with and obtained response from parents/
                          guardians and/ or wider school community to facilitate
                          involvement in the educative process as evidenced by
                          MOV No. 3 <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>Submitted any 2 of the acceptable MOV*<br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>#4 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 136px"
                        outlined
                        tile
                      >
                        <h5>
                          Participated in any professional network/ activity
                          that requires output* to share knowledge and to
                          enhance practice as evidenced by the submitted MOV<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 65px"
                        outlined
                        tile
                      >
                        <h5>
                          Submitted 2 different kinds of acceptable MOV***<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 46px"
                        outlined
                        tile
                      >
                        <h5>#4.2 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card class="pa-1" style="height: 86px" outlined tile>
                        <h5>
                          Accomplished the Development Plan from learning
                          objectives up to resources needed to address
                          Development Needs during Phase I of the RPMS cycle<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 65px"
                        outlined
                        tile
                      >
                        <h5>
                          Submitted the IPCRF-DP with any 2 of the acceptable
                          Supporting MOV* <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>#4.3 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>
                          Performed at least 1 related work/activity that
                          contributed to the teaching-learning process within
                          the learning area/ department as evidenced by
                          submitted MOV<br />
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 290px"
                        outlined
                        tile
                      >
                        <h5>
                          Unsatisfactory <br />
                          2 <br />
                        </h5>
                      </v-card>

                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 4 in Objective 1 as shown in COT
                          rating sheets/interobserver agreement forms<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 64px"
                        outlined
                        tile
                      >
                        <h5>2 blank <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Ensured that ICT are used but do not create a new
                          learning experience and/or are documented but not
                          consistent with one referencing style as shown in the
                          submitted learning material<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Applied teaching strategies that lead learners along a
                          single path of inquiry and/or to simple recall and
                          rote memorization of concepts as shown in the
                          submitted learning material
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Utilized a teaching strategy or strategies that
                          partially respond to learners’ linguistic, cultural,
                          socioeconomic, or religious backgrounds as shown in
                          the submitted learning material<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 4 in Objective 5 as shown in COT
                          rating sheets/interobserver agreement forms<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Provided learners with inaccurate and/or destructive
                          feedback as shown in the evidence submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-1" outlined tile>
                        <h5>efficiency black <br /></h5>
                      </v-card>
                      <v-card class="pa-2" style="height: 56px" outlined tile>
                        <h5>
                          MOV submitted shows feedback given beyond 20 working
                          days from submission**<br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 4 in Objective 7 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          Less than half of the learning outcomes set are
                          aligned with the learning competencies as shown in the
                          MOV submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Communicated with parents/ guardians and/or wider
                          school community to facilitate involvement in the
                          educative process but received no response/reply as
                          evidenced by MOV No. 3 <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>Submitted any 1 of the acceptable MOV<br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>#4 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 136px"
                        outlined
                        tile
                      >
                        <h5>
                          Participated in any professional network/ activity
                          that does not require output to share knowledge and to
                          enhance practice as evidenced by the submitted MOV<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 65px"
                        outlined
                        tile
                      >
                        <h5>Submitted 1 of the acceptable MOV<br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>#4.2 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card class="pa-1" style="height: 86px" outlined tile>
                        <h5>
                          Accomplished the Strengths and Development Needs
                          portion of the Development Plan after self-assessment
                          at the beginning of the school year<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 65px"
                        outlined
                        tile
                      >
                        <h5>
                          Submitted the IPCRF-DP with any 1 of the acceptable
                          Supporting MOV <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>#4.3 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>
                          Performed at least 1 related work/activity that
                          contributed to the teaching-learning process within
                          the class as evidenced by submitted MOV<br />
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 295px"
                        outlined
                        tile
                      >
                        <h5>
                          Poor <br />

                          1 <br />
                        </h5>
                      </v-card>

                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Demonstrated Level 3 in Objective 1 as shown in COT
                          rating sheets/interobserver agreement forms or No
                          acceptable evidence was shown<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 64px"
                        outlined
                        tile
                      >
                        <h5>2 blank <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-10"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown<br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-10"
                        style="height: 126px"
                        outlined
                        tile
                      >
                        <h5>
                          No acceptable evidence was shown
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-10"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown<br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          Demonstrated Level 3 in Objective 5 as shown in COT
                          rating sheets/interobserver agreement forms or No
                          acceptable evidence was shown<br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          No acceptable evidence was shown
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-1" outlined tile>
                        <h5>efficiency black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 56px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown<br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          Demonstrated Level 3 in Objective 7 as shown in COT
                          rating sheets/interobserver agreement forms or No
                          acceptable evidence was shown <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 59px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>
                          No acceptable evidence was shown
                          <br />
                        </h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 46px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown<br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 46px"
                        outlined
                        tile
                      >
                        <h5>#4 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-8"
                        style="height: 136px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown<br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 65px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown<br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 46px"
                        outlined
                        tile
                      >
                        <h5>#4.2 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 86px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown<br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 66px"
                        outlined
                        tile
                      >
                        <h5>No acceptable evidence was shown <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>#4.3 1 Timeliness black <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
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
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 200px"
                        outlined
                        tile
                      >
                        <h5>
                          Actual Results <br />
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" v-model="actual1" outlined tile>
                        <h5 >
                          <br />
                        </h5>
                      </v-card>
                      <v-card v-model="actual1_blank"
                        class="pa-2 pt-4"
                        style="height: 64px"
                        outlined
                        tile
                      >
                        <h5> <br /></h5>
                      </v-card>
                      <v-card v-model="actual2"
                        class="pa-2 pt-10"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5><br /></h5>
                      </v-card>
                      <v-card v-model="actual2_blank"
                        class="pa-2 pt-4"
                        style="height: 60px"
                        outlined
                        tile
                      >
                        <h5> <br /></h5>
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
                        <h5> <br /></h5>
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
                        <h5> <br /></h5>
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
                      <v-card  v-model="actual6_blank" class="pa-1" outlined tile>
                        <h5> <br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 56px"
                        outlined
                        tile
                      >
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
                        <h5> <br /></h5>
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
                        <h5> <br /></h5>
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
                        <h5> <br /></h5>
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
                        <h5> <br /></h5>
                      </v-card>
                      <v-card
                       v-model="actual11_blank" class="pa-2 pt-4" outlined tile>
                        <h5><br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4"
                        style="height: 125px"
                        outlined
                        tile
                      >
                        <h5><br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5><br /></h5>
                      </v-card>

                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5><br /></h5>
                      </v-card>
                    </v-col>

                    <v-col
                      :key="n"
                      v-else-if="n === 13"
                      style="margin-left: -25px"
                    >
                      <v-card
                        class="pa-10 pt-4"
                        style="width: 260px"
                        outlined
                        tile
                      >
                        <h5>Rating</h5>
                      </v-card>

                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                      <v-card class="pa-2 pt-4" outlined tile> </v-card>
                    </v-col>
                    <v-col
                      :key="n"
                      v-else-if="n === 14"
                      style="margin-left: -25px"
                    >
                      <v-card
                        class="pa-2 pt-4"
                        style="width: 200px"
                        outlined
                        tile
                      >
                        <h5>
                          Score <br />
                          <br />
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                      <v-card class="pa-2 pt-4 part1Score" outlined tile>
                      </v-card>
                    </v-col>
                  </template>
                </div>
              </v-row>
              <br />

              <!-- START OF RATING AREA  -->
              <div style="width: 600px; margin: auto">
                <v-card
                  class="pa-2 text-center"
                  color="grey lighten-2"
                  outlined
                  tile
                >
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
              <!-- END OF RATING CRITERIA -->
            </v-container>
          </v-app>
        </div>
      </v-tab-item>

      <!-- Part 2 Content -->
      <v-tab>Part 2</v-tab>

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
                <b>PART II: COMPETENCIES</b>
              </v-card>

              <v-card class="pa-2" outlined tile>
                <h5 class="font-weight-regular">
                  Instructions: Please indicate the number of competency
                  indicators that you demonstrated during the performance cycle.
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
                      1. Sets personal goals and directions, needs and
                      development.<br />
                      2. Undertakes personal actions and behavior that are clear
                      and purposive and takes into account personal goals and
                      values congruent to that of the organization.<br />
                      3. Displays emotional maturity and enthusiasm for and is
                      challenged by higher goals.<br />
                      4. Prioritizes work tasks and schedules (through Gantt
                      chants, checklists, etc.) to achieve goals.<br />
                      5. Sets high quality, challenging, realistic goals for
                      self and others.<br />
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
                      2. Promotes collaboration and removes barrier to teamwork
                      and goal accomplishment across the organization. <br />
                      3. Applies negotiation principles in arriving at win-win
                      agreements. <br />
                      4. Drives consensus and team ownership of decisions.
                      <br />
                      5. Works constructively and collaboratively with others
                      and across organizations to accomplish organization goals
                      and objectives.
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
                      1. Demonstrates the values and behavior enshrined in the
                      Norms and Conduct and Ethical Standards for Public
                      Officials and Employees (RA 6713).<br />
                      2. Practices ethical and professional behavior and conduct
                      taking into account the impact of his/her actions and
                      decisions.<br />
                      3. Maintains a professional image: being trustworthy,
                      regularity of attendance and punctuality, good grooming
                      and communication.<br />
                      4. Makes personal sacrifices to meet the organization’s
                      needs.<br />
                      5. Acts with a sense of urgency and responsibility to meet
                      the organization’s needs, improve system and help others
                      improve their effectiveness.<br />
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
                      1. Can explain and articulate organizational directions,
                      issues and problems.<br />
                      2. Takes personal responsibility for dealing with and/or
                      correcting customer service issues and concerns.<br />
                      3. Initiates activities that promote advocacy for men and
                      women empowerment.<br />
                      4. Participates in updating office vision, mission,
                      mandates and strategies based on DepEd strategies and
                      directions.<br />
                      5. Develops and adopts service improvement program through
                      simplified procedures that will further enhance service
                      delivery.
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
                      1. Achieves results with optimal use of time and resources
                      most of the time.<br />
                      2. Avoids rework, mistakes and wastage through effective
                      work methods by placing organizational needs before
                      personal needs.<br />
                      3. Delivers error-free outputs most of the time by
                      conforming to standard operating procedures correctly and
                      consistently. Able to produce very satisfactory quality
                      work in terms of usefulness/acceptability and completeness
                      with no supervision required.<br />
                      4. Expresses a desire to do better and may express
                      frustration at waste or inefficiency. May focus on new or
                      more precise ways of meeting goals set. 5. Makes specific
                      changes in the system or in own work methods to improve
                      performance. Examples may include doing something better,
                      faster, at a lower cost, more efficiently, or improving
                      quality, customer satisfaction, morale, without setting
                      any specific goal.<br />
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
                      1. Can explain and articulate organizational directions,
                      issues and problems.<br />
                      2. Takes personal responsibility for dealing with and/or
                      correcting customer service issues and concerns.<br />
                      3. Initiates activities that promote advocacy for men and
                      women empowerment.<br />
                      4. Participates in updating office vision, mission,
                      mandates and strategies based on DepEd strategies and
                      directions.<br />
                      5. Develops and adopts service improvement program through
                      simplified procedures that will further enhance service
                      delivery.
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
                  Note: The assessment in the demonstration of competencie s
                  shall not be reflected in the final rating. These competencies
                  are monitored to inform professional development plans (DepEd
                  Order No. 2, s. 2015, p. 9).
                </h5>
              </v-card>
            </v-container>
          </v-app>
        </div>
      </v-tab-item>

      <!-- Part 3 content here -->
      <v-tab>Part 3</v-tab>

      <v-tab-item>
        <v-card class="pa-2 text-center" tile
          ><br />
          <b
            >INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM (IPCRF) SUMMARY
            SHEET</b
          >
          <h5 class="text-center font-weight-regular">
            <b
              >Teacher I-III, SPET I-IV, Special Science Teacher I-II
              (Proficient Teacher)</b
            >
          </h5>
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
        <!-- first row -->
        <v-row no-gutters class="text-center">
          <template v-for="n in 7">
            <v-col :key="n" v-if="n === 1">
              <v-card class="pa-2 pt-4" outlined tile> KRA <br /><br /></v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 2">
              <v-card class="pa-2 pt-4" outlined tile
                >Weight per <br />
                KRA
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 3">
              <v-card class="pa-2 pt-4" outlined tile>
                Objectives <br />
                <br
              /></v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 4">
              <v-card class="pa-2 pt-4" outlined tile>
                Weight per Objective
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 5" md="4">
              <v-card class="pa-2 pt-4" outlined tile>
                Numerical Ratings
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 6">
              <v-card class="pa-2 pt-4" outlined tile>
                Score <br />
                <br
              /></v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 7">
              <v-card class="pa-2 pt-4" outlined tile>
                Adjectival <br />
                Rating
              </v-card>
            </v-col>
          </template>
        </v-row>

        <!-- second row -->
        <v-row no-gutters>
          <template v-for="n in 7">
            <v-col :key="n" v-if="n === 1">
              <v-card class="pa-2 pb-5 text-center" outlined tile
                ><br /><br />
                KRA 1 <br /><br
              /></v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 2">
              <v-card class="pa-2 pb-5 text-center" outlined tile
                ><br /><br />
                24% <br /><br />
              </v-card>
            </v-col>
            <!-- 1st objective -->
            <v-col :key="n" v-else-if="n === 3">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">Objective 1</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">Objective 2<br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">Objective 3</div>
              </v-card>
            </v-col>

            <!-- 1st weight per objective -->
            <v-col :key="n" v-else-if="n === 4">
              <v-card class="pb-1 text-center" outlined tile>
                <div class="pa-2">8%</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">8% <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">8%</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 5" md="4" cols="12">
              <v-card class="pa-0" outlined tile>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10 mb-1"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 6">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">saba dha</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">saba dha <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">saba dha</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 7">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">saba dha</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">saba dha <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">saba dha</div>
              </v-card>
            </v-col>
          </template>
        </v-row>
        <!-- third row -->

        <v-row no-gutters>
          <template v-for="n in 7">
            <v-col :key="n" v-if="n === 1">
              <v-card class="pa-2 pb-5 text-center" outlined tile
                ><br /><br />
                KRA 2 <br /><br
              /></v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 2">
              <v-card class="pa-2 pb-5 text-center" outlined tile
                ><br /><br />
                24% <br /><br />
              </v-card>
            </v-col>
            <!-- pt-13 pb-12 -->
            <v-col :key="n" v-else-if="n === 3">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">Objecive 4</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">Objecive 5 <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">Objecive 6</div>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 4">
              <v-card class="pb-1 text-center" outlined tile>
                <div class="pa-2">8%</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">8% <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">8%</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 5" md="4" cols="12">
              <v-card class="pa-0" outlined tile>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10 mb-1"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 6">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">saba dha</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">saba dha <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">saba dha</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 7">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">saba dha</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">saba dha <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">saba dha</div>
              </v-card>
            </v-col>
          </template>
        </v-row>

        <!-- third row -->
        <v-row no-gutters>
          <template v-for="n in 7">
            <v-col :key="n" v-if="n === 1">
              <v-card class="pa-2 pb-8 text-center" outlined tile
                ><br />
                KRA 3 <br
              /></v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 2">
              <v-card class="pa-2 pb-8 text-center" outlined tile
                ><br />
                16% <br
              /></v-card>
            </v-col>
            <!-- pt-13 pb-12 -->
            <v-col :key="n" v-else-if="n === 3">
              <v-card class="pb-0" outlined tile>
                <div class="pa-2">Objective 7</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-3 mt-1">Objective 8</div>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 4">
              <v-card class="pb-0 text-center" outlined tile>
                <div class="pa-2">8%</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-3 mt-1">8%</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 5" md="4" cols="12">
              <v-card class="pa-0" outlined tile>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>

                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-6 pl-9"></div>
                </v-row>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 6">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">saba dha</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2 mt-1">saba dha <br /></div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 7">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">saba dha</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2 mb-1">saba dha <br /></div>
              </v-card>
            </v-col>
          </template>
        </v-row>
        <!-- fourth row -->
        <v-row no-gutters>
          <template v-for="n in 7">
            <v-col :key="n" v-if="n === 1">
              <v-card class="pa-2 pb-5 text-center" outlined tile
                ><br /><br />
                KRA 4 <br /><br
              /></v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 2">
              <v-card class="pa-2 pb-5 text-center" outlined tile
                ><br /><br />
                24% <br /><br />
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 3">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">Objective 9</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">Objective 10 <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">Objective 11</div>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 4">
              <v-card class="pb-1 text-center" outlined tile>
                <div class="pa-2">8%</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">8% <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">8%</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 5" md="4" cols="12">
              <v-card class="pa-0" outlined tile>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9 mb-1"></div>
                </v-row>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 6">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">1 dha</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">saba dha <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">saba dha</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 7">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">1 dha</div>
                <v-divider></v-divider>
                <div class="pa-2 pb-2">2 dha <br /></div>
                <v-divider></v-divider>
                <div class="pa-2 pb-1" style="height: 38px">saba dha</div>
              </v-card>
            </v-col>
          </template>
        </v-row>

        <!-- second row -->
        <v-row no-gutters>
          <template v-for="n in 7">
            <v-col :key="n" v-if="n === 1">
              <v-card class="pa-2 pb-3 text-center" outlined tile>
                Plus Factor <br
              /></v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 2">
              <v-card class="pa-2 pb-3 text-center" outlined tile>
                12% <br />
              </v-card>
            </v-col>
            <!-- pt-13 pb-12 -->
            <v-col :key="n" v-else-if="n === 3">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">Objective 12</div>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 4">
              <v-card class="pb-1 text-center" outlined tile>
                <div class="pa-2">12%</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 5" md="4" cols="12">
              <v-card class="pa-0" outlined tile>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 pl-10 mt-1"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-10"></div>
                  <v-divider class="mx-4" vertical></v-divider>
                  <div class="pa-5 pl-9"></div>
                </v-row>
              </v-card>
            </v-col>

            <v-col :key="n" v-else-if="n === 6">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">saba dha</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-else-if="n === 7">
              <v-card class="pb-1" outlined tile>
                <div class="pa-2">saba dha</div>
              </v-card>
            </v-col>
          </template>
        </v-row>
        <v-row no-gutters>
          <template v-for="n in 5">
            <v-col :key="n" v-if="n === 1">
              <v-card class="mr-5" outlined tile>
                <v-row no-gutters class="pa-0">
                  <div class="pa-5 mt-1 text-center">
                    FINAL PERFORMANCE <br />
                    RESULT
                  </div>
                </v-row>
              </v-card>
            </v-col>
            <v-col :key="n" v-if="n === 2">
              <div class="pa-5 mt-1 text-center">
                Accomplishments of KRAs and Objectives
              </div>
            </v-col>
            <v-col :key="n" v-if="n === 3" class="ml-12 text-center">
              <div>Final Rating</div>

              <v-card class="pa-2" outlined tile>
                <div>Adjectival Rating</div>
              </v-card>
            </v-col>
            <v-col :key="n" v-if="n === 4" class="ml-10">
              <v-card class="pa-2 text-center" outlined tile>
                <div>0.000</div>
              </v-card>
              <v-card class="pa-2 text-center" outlined tile>
                <div>POOR</div>
              </v-card>
            </v-col>
          </template>
        </v-row>
      </v-tab-item>

      <!-- Part 4 -->
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
                    Performance Planning and Commitment, based on the results of
                    e-SAT; and ii)
                    <br />
                    Phase II: Performance Monitoring and Coaching, based on the
                    agreements on the Performance Monitoring and Coaching Form
                    <br />and Mid-year Review Form; and iii) Phase IV:
                    Performance Rewarding and Development Planning, based on the
                    actual results of IPCRF.<br />
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
                    Strengths
                  </v-card>
                  <v-card v-else-if="n === 2" class="pa-2" outlined tile
                    ><br />
                    Development Needs
                  </v-card>
                  <v-card
                    v-else-if="n === 3"
                    class="pa-2 text-center"
                    outlined
                    tile
                  >
                    Action Plan <br />
                    (Recommended Developmental Intervention) <br />
                    <v-card class="d-inline pa-2" outlined tile>
                      Learning Objectives
                    </v-card>
                    <v-card class="d-inline pa-2" outlined tile>
                      Intervention
                    </v-card>
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
                <div class="pa-10 ml-9">
                  ________________________________________
                  ________________________________________
                  ________________________________________
                </div>
                <div class="ml-9"></div>
              </div>
              <v-card class="mx-auto" max-width="800">
                <v-card-text>
                  <div class="text--primary">
                    <b> NOTE:</b><br />
                    When all Parts of the IPCRF are accomplished, the Ratee must
                    submit the file copy of his or her IPCRF electronic form to
                    the Department Head or School Head for the school-wide
                    consolidation. He or she must print all the pages of this
                    form and submit to the Personnel Division of the school to
                    be attached to his or her 201 personnel file.
                  </div>
                </v-card-text> </v-card
              ><br />
            </v-container>
          </v-app>
        </div>
      </v-tab-item>
    </v-tabs>
  </v-card>
</template>
<style >
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
  data: () => ({
    empName: "",
  }),

  // data: () => ({
  //   items: ["Foo", "Bar", "Fizz", "Buzz"],
  // }),
};
</script>