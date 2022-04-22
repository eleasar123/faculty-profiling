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
                <v-col
                  v-for="n in 4"
                  :key="n"
                  :cols="n === 1 || 3 ? 3 : undefined"
                  class=""
                >
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
                <v-col
                  v-for="n in 4"
                  :key="n"
                  :cols="n === 1 || 3 ? 3 : undefined"
                  class=""
                >
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
                    class="pa-2 text-center card-12 text-justify"
                    outlined
                    tile
                    label="0"
                    style="overflow-y: auto; height: 570px"
                    ><br /><br /><br /><br /><br /><br /><br />
                    0
                  </v-card>
                </v-col>
              </v-row>
              <v-card class="pa-2" outlined tile>
                <h5 class="font-weight-regular">
                  Note: The assessment in the demonstration of competencies
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
              style="height: 260px"
            >
              <tr>
                <v-row>
                  <v-subheader> Name of Employee: </v-subheader>
                  <v-text-field
                    placeholder="Name"
                    solo
                    class="pa-2"
                    style="width: 100"
                    dense
                    type="text"
                  >
                  </v-text-field
                ></v-row>
              </tr>
              <tr>
                <v-row>
                  <v-subheader> Position : </v-subheader>
                  <v-text-field
                    placeholder="Name"
                    solo
                    class="pa-2"
                    style="width: 100"
                    dense
                    type="text"
                  >
                  </v-text-field
                ></v-row>
              </tr>
              <tr>
                <v-row>
                  <v-subheader> Bureau/Center/Service/Division: </v-subheader>
                  <v-text-field
                    placeholder="Name"
                    solo
                    class="pa-2"
                    style="width: 50"
                    dense
                    type="text"
                  >
                  </v-text-field
                ></v-row>
              </tr>
              <tr>
                <v-row>
                  <v-subheader> Rating Period: </v-subheader>
                  <v-text-field
                    placeholder="Name"
                    solo
                    class="pa-2"
                    style="width: 100"
                    dense
                    type="text"
                  >
                  </v-text-field
                ></v-row>
              </tr>
            </v-card>

            <v-card
             
                v-else-if="n === 2"
              class="pa-2 card-3 "
              outlined
              tile
              style="height: 260px"
            >
              <tr>  
                <v-row>
                  <v-subheader> Name of Rater: </v-subheader>
                  <v-text-field
                    placeholder="Name"
                    solo
                    class="pa-2"
                    style="width: 100"
                    dense
                    type="text"
                  >
                  </v-text-field
                ></v-row>
              </tr>
              <tr>
                <v-row>
                  <v-subheader> Position : </v-subheader>
                  <v-text-field
                    placeholder="Name"
                    solo
                    class="pa-2"
                    style="width: 100"
                    dense
                    type="text"
                  >
                  </v-text-field
                ></v-row>
              </tr>
              <tr>
                <v-row>
                  <v-subheader> Date of Review: </v-subheader>
                  <v-text-field
                    placeholder="Name"
                    solo
                    class="pa-2"
                    style="width: 50"
                    dense
                    type="text"
                  >
                  </v-text-field
                ></v-row>
              </tr>
            </v-card>
          </v-col>
        </v-row>
       

        <div id="app">
          <v-app id="inspire">
            <v-container class="grey lighten-5">
              <v-row no-gutters>
                <v-col v-for="n in 4" :key="n" class="text-center">
                  <v-card v-if="n === 1" class="pa-2" outlined tile>
                    Strengths
                  </v-card>
                  <v-card v-else-if="n === 2" class="pa-2" outlined tile>
                    Development Needs
                  </v-card>

                  <v-card v-else-if="n === 3" class="pa-2" outlined tile>
                    Timeline
                  </v-card>
                  <v-card v-else-if="n === 4" class="pa-2" outlined tile>
                    Resources Needed
                  </v-card>
                </v-col>
              </v-row>
            </v-container>
          </v-app>
        </div>
      </v-tab-item>
      <!-- Part 4 -->
      <v-tab>Part 4</v-tab>
      <v-tab-item>
        <v-card-title
          v-model="headerText"
          single-line
          hide-details
          class="justify-center"
        >
          <h5 class="text-center">
            <b> PART IV: DEVELOPMENT PLANS</b>
          </h5>
        </v-card-title>
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
            <v-card v-if="n === 1" class="pa-8" outlined tile>
              Strengths
            </v-card>
            <v-card v-else-if="n === 2" class="pa-2" outlined tile
              ><br />
              Development Needs
            </v-card>
            <v-card v-else-if="n === 3" class="pa-2 text-center" outlined tile>
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
              submit the file copy of his or her IPCRF electronic form to the
              Department Head or School Head for the school-wide consolidation.
              He or she must print all the pages of this form and submit to the
              Personnel Division of the school to be attached to his or her 201
              personnel file.
            </div>
          </v-card-text> </v-card
        ><br />
      </v-tab-item>
    </v-tabs>
  </v-card>
</template>
<style >
</style>
<script>
export default {
  data: () => ({
    items: ["Foo", "Bar", "Fizz", "Buzz"],
  }),
};
</script>