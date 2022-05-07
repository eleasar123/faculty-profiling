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
                <!-- Row 5 -->
                <tr>
                  <td colspan="3" style="text-align: left">Age :</td>
                  <td colspan="2">
                    <v-text-field
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
                  <td colspan="3" style="text-align: left">
                    Grade Level Taught:
                  </td>
                  <td colspan="2">
                    <v-text-field
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

                <!-- Row8 -->
                <tr>
                  <td colspan="3" style="text-align: left">Subject Taught:</td>
                  <td colspan="2">
                    <v-text-field
                      placeholder="Subject "
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
          </v-row>
        </v-card>
      </v-tab-item>

      <!-- Encoding Part 2 -->
      <v-tab>Encoding Part 2</v-tab>
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

      <!-- Part 1 Content -->
      <v-tab>Part 1 - Proficient</v-tab>
      <v-tab-item>
        <div id="app">
          <v-app>
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
                      <h6>MFOs</h6></v-card
                    >
                  </v-row>
                  <v-row :key="n" v-if="n === 2">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>MFOs</h6></v-card
                    >
                  </v-row>
                </template>
                
              </v-col>
               -->

              <!-- first row -->
              <v-row no-gutters class="text-center">
                <template v-for="n in 15">
                  <v-col :key="n" v-if="n === 1">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        MFOs <br />
                        <br /><br /></h6
                    ></v-card>
                    <v-card
                      class="pa-2 pt-4"
                      style="height: 500px"
                      outlined
                      tile
                    >
                      <h6>Basic Education Services</h6></v-card
                    >
                  </v-col>

                  <v-col :key="n" v-else-if="n === 2">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        KRAs <br />
                        <br /><br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>1. Content Knowledge and Pedagogy</h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        2. Diversity of Learners and Assessment and Reporting
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>3. Curriculum and Planning</h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        4. Community Linkages and Professional Engagement and
                        Personal Growth and Professional Development
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>5. Plus Factor</h6>
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 3">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Objectives<br />
                        <br /><br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        1. Applied knowledge of content within and across
                        curriculum teaching areas.
                      </h6>
                      <br />
                    </v-card>

                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        2. Ensured the positive use of ICT to facilitate the
                        teaching and learning process
                      </h6>
                      <br />
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        3. Applied a range of teaching strategies to develop
                        critical and creative thinking, as well as other
                        higher-order thinking skills.
                      </h6>
                      <br />
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 4">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Timeline <br />
                        <br /><br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6><br /><br /><br /><br /><br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6><br /><br /><br /><br /><br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6><br /><br /><br /><br /><br /></h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 5">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Weight per KRA<br />
                        <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" v-model="kra1" outlined tile>
                      <h6><br /><br />24.00%<br /><br /><br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" v-model="kra2" outlined tile>
                      <h6><br /><br />24.00%<br /><br /><br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" v-model="kra3" outlined tile>
                      <h6><br /><br />16.00%<br /><br /><br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" v-model="kra4" outlined tile>
                      <h6><br /><br />24.00%<br /><br /><br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" v-model="kra5" outlined tile>
                      <h6><br /><br />12.00%<br /><br /><br /></h6>
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 6">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        QET <br />
                        <br />
                        <br /></h6
                    ></v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6></v-card
                    ><v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    ><v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6
                    ></v-card>
                    <v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    >
                    <v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6
                    ></v-card>
                    <v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    >
                    <v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6></v-card
                    ><v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    ><v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6
                    ></v-card>
                    <v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    >
                    <v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6
                    ></v-card>
                    <v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    >
                    <v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6></v-card
                    ><v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    ><v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6
                    ></v-card>
                    <v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    >
                    <v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6
                    ></v-card>
                    <v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    >
                    <v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6></v-card
                    ><v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    ><v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Quality <br /><br />
                        <br /></h6
                    ></v-card>
                    <v-card class="pa-1" outlined tile>
                      <h6>Efficiency</h6></v-card
                    >
                    <v-card class="pa-1" outlined tile>
                      <h6>Timeliness</h6></v-card
                    >
                  </v-col>

                  <v-col :key="n" v-else-if="n === 7">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Outstanding <br /> <br> 5
                        <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated Level 7 in Objective 1 as shown in COT
                        rating sheets/interobserver agreement forms <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 blank <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Ensured that the ICT used redefine and transform
                        learning experiences and are documented properly and
                        consistently using any referencing style as shown in the
                        submitted learning material <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Applied teaching strategies that challenge learners to
                        draw conclusions and justify their thinking or put parts
                        together to promote deeper understanding of ideas
                        learned as shown in the submitted learning material
                        <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Utilized effective teaching strategies that are
                        appropriate in responding to learners’ linguistic,
                        cultural, socioeconomic, or religious backgrounds at an
                        individual level* as shown in the submitted learning
                        material <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated Level 7 in Objective 5 as shown in COT
                        rating sheets/interobserver agreement forms <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Provided learners with accurate, and specific and
                        directed constructive feedback* as shown in the evidence
                        submitted <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>efficiency black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        MOV submitted shows feedback given within 5 working days
                        from submission** <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated Level 7 in Objective 7 as shown in COT
                        rating sheets/interobserver agreement forms <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        All of the learning outcomes set are aligned with the
                        learning competencies as shown in the MOV submitted
                        <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Sustained engagement with parents/ guardians and/ or
                        wider school community to facilitate involvement in the
                        educative process as evidenced by 2 or more of MOV no. 1
                        or 2 <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>Submitted any 4 of the acceptable MOV*<br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>#4 1 Timeliness black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Participated in any professional network/ activity that
                        requires output* and proof of implementation ** within
                        the school to share knowledge and to enhance practice as
                        evidenced by the submitted MOV <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Submitted 4 different kinds of acceptable MOV***<br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>#4.2 1 Timeliness black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Updated the Development Plan and approved by the rater
                        during Phase II of the RPMS cycle <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Submitted the IPCRF-DP with any 4 of the acceptable
                        Supporting MOV* <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>#4.3 1 Timeliness black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Performed at least 1 related work/activity that
                        contributed to the teaching-learning process beyond the
                        school/ Community Learning Center (CLC) as evidenced by
                        submitted MOV <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>Submitted any 4 of the acceptable MOV* <br /></h6>
                    </v-card>

                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>5.1 Timeliness Black<br /></h6>
                    </v-card>
                  </v-col>


 <!-- START OF Very Satisfactory  -->

                  <v-col :key="n" v-if="n === 8">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Very Satisfactory <br />
                        <br>
                        4
                        <br>
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated Level 6 in Objective 1 as shown in COT rating sheets/interobserver agreement forms <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 blank <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                       Ensured that the ICT used augment and enrich learning experiences and are documented properly and consistently using any referencing style as shown in the submitted learning material<br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Applied teaching strategies that require learners to make connections using ideas learned as shown in the submitted learning material
                        <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Utilized effective teaching strategies that are appropriate in responding to learners’ linguistic, cultural, socioeconomic, or religious backgrounds at a group level* as shown in the submitted learning material <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated Level 6 in Objective 5 as shown in COT rating sheets/interobserver agreement forms<br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                     Provided learners with accurate, and specific constructive feedback as shown in the evidence submitted <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>efficiency black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                       MOV submitted shows feedback given within 6-10 working days from submission**<br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                      Demonstrated Level 6 in Objective 7 as shown in COT rating sheets/interobserver agreement forms <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                       Majority of the learning outcomes set are aligned with the learning competencies as shown in the MOV submitted
                        <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>2 black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Secured collaboration with parents/ guardians and/ or wider school community to facilitate involvement in the educative process as evidenced by one MOV no. 1 or 2 <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>Submitted any 3 of the acceptable MOV*<br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>#4 1 Timeliness black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                       Participated in any professional network/ activity that requires output* and proof of implementation ** within the department/grade level to share knowledge and to enhance practice as evidenced by the submitted MOV<br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Submitted 3 different kinds of acceptable MOV***<br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>#4.2 1 Timeliness black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Discussed progress on the Development Plan with the rater to check whether Development Needs were addressed <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                       Submitted the IPCRF-DP with any 3 of the acceptable Supporting MOV* <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>#4.3 1 Timeliness black <br /></h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                       Performed at least 1 related work/activity that contributed to the teaching-learning process within the school/ Community Learning Center (CLC) as evidenced by submitted MOV <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>Submitted any 3 of the acceptable MOV* <br /></h6>
                    </v-card>

                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>5.1 Timeliness Black<br /></h6>
                    </v-card>
                  </v-col>
                  <!-- END OF VERY Satisfactory -->

<!-- START OF  Satisfactory -->
                  <v-col :key="n" v-else-if="n === 9">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Satisfactory <br />
                        <br />
                        3 <br />
                      </h6>
                    </v-card>
                    <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Demonstrated Level 6 in Objective 1 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>2 blank <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Ensured that the ICT used augment and enrich learning
                          experiences and are documented properly and
                          consistently using any referencing style as shown in
                          the submitted learning material<br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>2 black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Applied teaching strategies that require learners to
                          make connections using ideas learned as shown in the
                          submitted learning material
                          <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>2black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Utilized effective teaching strategies that are
                          appropriate in responding to learners’ linguistic,
                          cultural, socioeconomic, or religious backgrounds at a
                          group level* as shown in the submitted learning
                          material <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>2 black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Demonstrated Level 6 in Objective 5 as shown in COT
                          rating sheets/interobserver agreement forms<br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>2black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Provided learners with accurate, and specific
                          constructive feedback as shown in the evidence
                          submitted <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>efficiency black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          MOV submitted shows feedback given within 6-10 working
                          days from submission**<br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Demonstrated Level 6 in Objective 7 as shown in COT
                          rating sheets/interobserver agreement forms <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>2 black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Majority of the learning outcomes set are aligned with
                          the learning competencies as shown in the MOV
                          submitted
                          <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>2 black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Secured collaboration with parents/ guardians and/ or
                          wider school community to facilitate involvement in
                          the educative process as evidenced by one MOV no. 1 or
                          2 <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>Submitted any 3 of the acceptable MOV*<br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>#4 1 Timeliness black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Participated in any professional network/ activity
                          that requires output* and proof of implementation **
                          within the department/grade level to share knowledge
                          and to enhance practice as evidenced by the submitted
                          MOV<br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Submitted 3 different kinds of acceptable MOV***<br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>#4.2 1 Timeliness black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Discussed progress on the Development Plan with the
                          rater to check whether Development Needs were
                          addressed <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Submitted the IPCRF-DP with any 3 of the acceptable
                          Supporting MOV* <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>#4.3 1 Timeliness black <br /></h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>
                          Performed at least 1 related work/activity that
                          contributed to the teaching-learning process within
                          the school/ Community Learning Center (CLC) as
                          evidenced by submitted MOV <br />
                        </h6>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>Submitted any 3 of the acceptable MOV* <br /></h6>
                      </v-card>

                      <v-card class="pa-2 pt-4" outlined tile>
                        <h6>5.1 Timeliness Black<br /></h6>
                      </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 10">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Unsatisfactory <br /><br />
                        2 <br />
                      </h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 11">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Poor <br />

                        <br />
                        1 <br />
                      </h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 12">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Actual <br />
                        Results <br />
                        <br />
                      </h6>
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 13">
                    <v-card class="pa-10 pt-4" outlined tile>
                      <h6>Rating</h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 14">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Score <br />
                        <br />
                        <br />
                      </h6>
                    </v-card>
                  </v-col>
                </template>
              </v-row>
              <!-- <v-row no-gutters>
                <template v-for="n in 15">
                  <v-col :key="n" v-if="n === 1">
                    <v-card class=" pt-2 pr-2 pl-1 pb-10" outlined tile>
                      <h6>Basic Education Services</h6></v-card
                    >
                  </v-col>

                  <v-col :key="n" v-else-if="n === 2">
                    <v-card class="pt-2 pr-1 pl-2 " outlined tile>
                      <h6>1. Content Knowledge and Pedagogy</h6>
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 3">
                    <v-card class="pt-2 pr-2 pl-1 pt-4" outlined tile>
                      <h6>
                        1. Applied knowledge of content within and across
                        curriculum teaching areas.
                      </h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 4">
                    <v-card class="pa-4 pt-4" outlined tile>
                      <h6><br /><br /><br /></h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 5">
                    <v-card class="pa-4 pt-4" outlined tile>
                      <h6>24%</h6>
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 6">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>Quality</h6></v-card
                    >
                  </v-col>
                  <v-col :key="n" v-else-if="n === 7">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated <br> Level 7 in <br> Objective 1 <br> as shown in <br> COT
                        rating <br> sheets/<br>interobserver <br> agreement forms <br />
                      </h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-if="n === 8">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated <br>Level 6 in<br> Objective 1<br> as shown in<br> COT
                        rating <br>sheets/<br>interobserver <br>agreement <br>forms
                      </h6>
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 9">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated <br />
                        Level 5 in <br />
                        Objective 1 <br />
                        as shown in <br> COT rating <br>sheets/ <br>interobserver<br> agreement<br>
                        forms<br />
                      </h6>
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 10">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated <br>Level 4 in<br> Objective 1<br> as shown in<br> COT
                        rating <br>sheets/<br>interobserver <br>agreement<br> forms<br />
                      </h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 11">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Demonstrated<br> Level 3 in<br> Objective 1<br>as shown in<br> COT
                        rating <br>sheets/<br>interobserver<br> agreement forms or No
                        acceptable<br> evidence was<br> shown
                      </h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 12">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>
                        Actual <br />
                        Results
                      </h6>
                    </v-card>
                  </v-col>

                  <v-col :key="n" v-else-if="n === 13">
                    <v-card class="pa-10 pt-4" outlined tile>
                      <h6>Rating</h6>
                    </v-card>
                  </v-col>
                  <v-col :key="n" v-else-if="n === 14">
                    <v-card class="pa-2 pt-4" outlined tile>
                      <h6>Score</h6>
                    </v-card>
                  </v-col>
                </template>
              </v-row> -->
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
  width: 200px;
  height: 150px;
}
</style>
<script>
export default {
  data: () => ({
    items: ["Foo", "Bar", "Fizz", "Buzz"],
  }),
};
</script>