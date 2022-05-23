<template>
<v-container>
  <v-container v-if="showTable==true">

    <v-card>
     
        <v-card-title>
         <p > Individual Performance and Commitment and Review Form</p>
          <v-spacer></v-spacer>
           <v-text-field 
        
            label="Search"

           style="width:50px; margin-top:10px"
             append-icon="mdi-magnify"
               v-model="search"
            filled
            rounded
            dense
          ></v-text-field>
          <!-- <v-text-field
            v-model="search"
            append-icon="mdi-magnify"
            label="Search"
            single-line
            hide-details
            dense
            style="width: 50%"
          ></v-text-field> -->
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
  <v-container class="pa-4" v-if="show == true">
    
    <!-- START OF ENCODING -->
    <!--  -->
    <!-- END OF ENCODING -->
    <!-- start of part 1 display -->
    <v-tabs>
      <v-tab>Part 1 - Proficient</v-tab>
      <v-tab-item>
    <table id="table" style="width: 100%" >
      <tr class="row1">
        <td id="tdata" colspan="6" class="pt-4" style="background-color: #ddd9c3">
          <p style="text-align: center">
            <b
              >INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW FORM (IPCRF) for Teacher
              I-III, SPET I-IV, Special Science Teacher I-II</b
            >
          </p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" style="line-height: 5px">
          <p>Name of Employee:</p>
        </td>
        <td id="tdata" style="width: 20%">
          <p>{{ipcrfDemographicProfile.name_of_employee}}</p>
        </td>
        <td id="tdata" style="line-height: 5px">
          <p>Name of Rater:</p>
        </td>
        <td id="tdata" style="width: 20%">
          <p>{{ipcrfDemographicProfile.rater}}</p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" style="line-height: 5px">
          <p>Position:</p>
        </td>
        <td id="tdata" style="line-height: 5px">
          <p>{{ipcrfDemographicProfile.position}}</p>
        </td>
        <td id="tdata" style="line-height: 5px">
          <p>Position:</p>
        </td>
        <td id="tdata" style="">
          <p>{{ipcrfDemographicProfile.rater_position}}</p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" style="line-height: 5px">
          <p>Bureau/Center/Service/Division:</p>
        </td>
        <td id="tdata" style="line-height: 5px">
          <p>{{ipcrfDemographicProfile.division}}</p>
        </td>
        <td id="tdata" style="line-height: 5px">
          <p>Date of Review::</p>
        </td>
        <td id="tdata" style="line-height: 5px">
          <p>{{ipcrfDemographicProfile.date_of_review}}</p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" style="line-height: 5px">
          <p>Rating Period: </p>
        </td>
        <td id="tdata" style="line-height: 5px">
          <p>{{ipcrfDemographicProfile.rating_period}}</p>
        </td>
        <td id="tdata" colspan="2" style="line-height: 5px"></td>
      </tr>
    </table>
    <br />
    <table id="table" style="width: 100%; text-align: center; font-weight: bold">
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
        <td id="tdata" colspan="6" rowspan="1" style="line-height: 5px">
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
            1. Applied knowledge of content within and across curriculum teaching areas.
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
            sheets/interobserver agreement forms or No acceptable evidence was shown
          </p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score1">
          <p></p>
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
        <td id="tdata" colspan="2" class="eff6 pa-1 blue-grey darken-4">
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
        <td id="tdata" colspan="2" class="timeline6 blue-grey darken-4">
          <p></p>
        </td>
      </tr>
      <!-- end of row1 -->
      <!-- start of row 2 -->
      <tr>
        <td id="tdata" rowspan="3">
          <p>
            2. Ensured the positive use of ICT to facilitate the teaching and learning
            process
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
            Ensured that the ICT used redefine and transform learning experiences and are
            documented properly and consistently using any referencing style as shown in
            the submitted learning material
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Ensured that the ICT used augment and enrich learning experiences and are
            documented properly and consistently using any referencing style as shown in
            the submitted learning material
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Ensured that the ICT used modify processes and improve learning experiences
            and are documented properly and consistently using any referencing style as
            shown in the submitted learning material
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Ensured that ICT are used but do not create a new learning experience and/or
            are documented but not consistent with one referencing style as shown in the
            submitted learning material
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q2">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e2 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t2 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave2">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score2">
          <p></p>
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
        <td id="tdata" colspan="2" class="eff6 pa-1 blue-grey darken-4">
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
            3. Applied a range of teaching strategies to develop critical and creative
            thinking, as well as other higher-order thinking skills.
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
            Ensured that the ICT used redefine and transform learning experiences and are
            documented properly and consistently using any referencing style as shown in
            the submitted learning material
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Ensured that the ICT used augment and enrich learning experiences and are
            documented properly and consistently using any referencing style as shown in
            the submitted learning material
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Ensured that the ICT used modify processes and improve learning experiences
            and are documented properly and consistently using any referencing style as
            shown in the submitted learning material
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Ensured that ICT are used but do not create a new learning experience and/or
            are documented but not consistent with one referencing style as shown in the
            submitted learning material
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q2">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e2 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t2 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave2">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score3">
          <p></p>
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
        <td id="tdata" colspan="2" class="eff6 pa-1 blue-grey darken-4">
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
            4. Established a learnercentered culture by using teaching strategies that
            respond to their linguistic, cultural, socioeconomic and religious backgrounds
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
            Utilized effective teaching strategies that are appropriate in responding to
            learners’ linguistic, cultural, socioeconomic, or religious backgrounds at an
            individual level* as shown in the submitted learning material
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Utilized effective teaching strategies that are appropriate in responding to
            learners’ linguistic, cultural, socioeconomic, or religious backgrounds at a
            group level* as shown in the submitted learning material
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Utilized an effective teaching strategy that is appropriate in responding to
            learners’ linguistic, cultural, socioeconomic, or religious backgrounds as
            shown in the submitted learning material
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Utilized a teaching strategy or strategies that partially respond to learners’
            linguistic, cultural, socioeconomic, or religious backgrounds as shown in the
            submitted learning material
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score4">
          <p></p>
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
        <td id="tdata" colspan="2" class="eff6 pa-1 blue-grey darken-4">
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
        <td id="tdata" colspan="2" class="timeline6 blue-grey darken-4">
          <p></p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" class="timelineObj1" rowspan="3">
          <p>
            5. Planned and delivered teaching strategies that are responsive to the
            special educational needs of learners in difficult circumstances*, including:
            geographic isolation; chronic illness; displacement due to armed conflict,
            urban resettlement or disasters; child abuse and child labor practices
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
            Utilized effective teaching strategies that are appropriate in responding to
            learners’ linguistic, cultural, socioeconomic, or religious backgrounds at a
            group level* as shown in the submitted learning material
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Utilized an effective teaching strategy that is appropriate in responding to
            learners’ linguistic, cultural, socioeconomic, or religious backgrounds as
            shown in the submitted learning material
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Utilized a teaching strategy or strategies that partially respond to learners’
            linguistic, cultural, socioeconomic, or religious backgrounds as shown in the
            submitted learning material
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score6">
          <p></p>
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
        <td id="tdata" colspan="2" class="eff6 pa-1 blue-grey darken-4">
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
        <td id="tdata" colspan="2" class="timeline6 blue-grey darken-4">
          <p></p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" class="timelineObj1" rowspan="3">
          <p>
            6. Used strategies for providing timely, accurate and constructive feedback to
            improve learner performance
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
            Provided learners with accurate, and specific and directed constructive
            feedback* as shown in the evidence submitted
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Provided learners with accurate, and specific constructive feedback as shown
            in the evidence submitted
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Provided learners with accurate, and general constructive feedback as shown in
            the evidence submitted
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Provided learners with inaccurate and/or destructive feedback as shown in the
            evidence submitted
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score7">
          <p></p>
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
        <td id="tdata" colspan="2" class="eff6 pa-1 blue-grey darken-4">
          <p></p>
        </td>
      </tr>
      <tr>
        <td id="tdata" class="timeline1 pa-1">
          <p>Timeliness</p>
        </td>
        <td id="tdata" class="timeline2 pa-1">
          <p>
            MOV submitted shows feedback given within 5 working days from submission**
          </p>
        </td>
        <td id="tdata" class="timeline2 pa-1">
          <p>
            MOV submitted shows feedback given within 6-10 working days from submission**
          </p>
        </td>
        <td id="tdata" class="timeline4 pa-1">
          <p>
            MOV submitted shows feedback given within 11-20 working days from submission**
          </p>
        </td>
        <td id="tdata" class="timeline5 pa-1">
          <p>
            MOV submitted shows feedback given beyond 20 working days from submission**
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
            7. Selected, developed, organized and used appropriate teaching and learning
            resources, including ICT, to address learning goals
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
            sheets/interobserver agreement forms or No acceptable evidence was shown
          </p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" colspan="1" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score8">
          <p></p>
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
        <td id="tdata" colspan="2" class="eff6 pa-1 blue-grey darken-4">
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
        <td id="tdata" colspan="2" class="timeline6 blue-grey darken-4">
          <p></p>
        </td>
      </tr>
      <!-- End Number7 -->

      <!-- Start Number 8 -->
      <tr class="row1">
        <td id="tdata" class="timelineObj1" rowspan="3">
          <p>
            8. Set achievable and appropriate learning outcomes that are aligned with
            learning competencies
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
            All of the learning outcomes set are aligned with the learning competencies as
            shown in the MOV submitted
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Majority of the learning outcomes set are aligned with the learning
            competencies as shown in the MOV submitted
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Half of the learning outcomes set are aligned with the learning competencies
            as shown in the MOV submitted
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Less than half of the learning outcomes set are aligned with the learning
            competencies as shown in the MOV submitted
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score10">
          <p></p>
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
        <td id="tdata" colspan="2" class="eff6 pa-1 blue-grey darken-4">
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
        <td id="tdata" colspan="2" class="timeline6 blue-grey darken-4">
          <p></p>
        </td>
      </tr>
      <!-- End Number 3 -->
      <!-- Start Number 4 -->

      <tr class="row1">
        <td id="tdata" rowspan="9">
          <p>
            4. Community Linkages and Professional Engagement & Personal Growth and
            Professional Development
          </p>
        </td>
        <td id="tdata" class="timelineObj1" rowspan="3">
          <p>
            9. Built relationships with parents/ guardians and the wider school community
            to facilitate involvement in the educative process
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
            Sustained engagement with parents/ guardians and/ or wider school community to
            facilitate involvement in the educative process as evidenced by 2 or more of
            MOV no. 1 or 2
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Secured collaboration with parents/ guardians and/ or wider school community
            to facilitate involvement in the educative process as evidenced by one MOV no.
            1 or 2
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Communicated with and obtained response from parents/ guardians and/ or wider
            school community to facilitate involvement in the educative process as
            evidenced by MOV No. 3
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Communicated with parents/ guardians and/or wider school community to
            facilitate involvement in the educative process but received no response/reply
            as evidenced by MOV No. 3
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3">
          <p></p>
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
        <td id="tdata" colspan="2" class="timeline6 blue-grey darken-4">
          <p></p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" class="timelineObj1" rowspan="3">
          <p>
            10. Participated in professional networks to share knowledge and to enhance
            practice
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
            Participated in any professional network/ activity that requires output* and
            proof of implementation ** within the school to share knowledge and to enhance
            practice as evidenced by the submitted MOV
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Participated in any professional network/ activity that requires output* and
            proof of implementation ** within the department/grade level to share
            knowledge and to enhance practice as evidenced by the submitted MOV
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Participated in any professional network/ activity that requires output* to
            share knowledge and to enhance practice as evidenced by the submitted MOV
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Participated in any professional network/ activity that does not require
            output to share knowledge and to enhance practice as evidenced by the
            submitted MOV
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score13">
          <p></p>
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
        <td id="tdata" colspan="2" class="timeline6 blue-grey darken-4">
          <p></p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" class="timelineObj1" rowspan="3">
          <p>
            11. Developed a personal improvement plan based on reflection of one’s
            practice and ongoing professional learning
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
            Updated the Development Plan and approved by the rater during Phase II of the
            RPMS cycle
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Discussed progress on the Development Plan with the rater to check whether
            Development Needs were addressed
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Accomplished the Development Plan from learning objectives up to resources
            needed to address Development Needs during Phase I of the RPMS cycle
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Accomplished the Strengths and Development Needs portion of the Development
            Plan after self-assessment at the beginning of the school year
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score13">
          <p></p>
        </td>
      </tr>
      <tr>
        <td id="tdata" class="eff1 pa-1">
          <p>Efficiency</p>
        </td>
        <td id="tdata" class="eff2 pa-1">
          <p>Submitted the IPCRF-DP with any 4 of the acceptable Supporting MOV*</p>
        </td>
        <td id="tdata" class="eff2 pa-1">
          <p>Submitted the IPCRF-DP with any 3 of the acceptable Supporting MOV*</p>
        </td>
        <td id="tdata" class="eff4 pa-1">
          <p>Submitted the IPCRF-DP with any 2 of the acceptable Supporting MOV*</p>
        </td>
        <td id="tdata" class="eff5 pa-1">
          <p>Submitted the IPCRF-DP with any 1 of the acceptable Supporting MOV</p>
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
        <td id="tdata" colspan="2" class="timeline6 blue-grey darken-4">
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
            12. Performed various related works/ activities that contribute to the
            teaching-learning process
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
            Performed at least 1 related work/activity that contributed to the
            teaching-learning process beyond the school/ Community Learning Center (CLC)
            as evidenced by submitted MOV
          </p>
        </td>
        <td id="tdata" class="verySatisfactory1">
          <p>
            Performed at least 1 related work/activity that contributed to the
            teaching-learning process within the school/ Community Learning Center (CLC)
            as evidenced by submitted MOV
          </p>
        </td>
        <td id="tdata" class="satisfactory1">
          <p>
            Performed at least 1 related work/activity that contributed to the
            teaching-learning process within the learning area/ department as evidenced by
            submitted MOV
          </p>
        </td>
        <td id="tdata" class="unsatisfactory1">
          <p>
            Performed at least 1 related work/activity that contributed to the
            teaching-learning process within the class as evidenced by submitted MOV
          </p>
        </td>
        <td id="tdata" class="poor1">
          <p>No acceptable evidence was shown</p>
        </td>
        <td id="tdata" rowspan="1" class="actualResult">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="q1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="e1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="t1 blue-grey darken-4">
          <p></p>
        </td>
        <td id="tdata" colspan="1" rowspan="3" class="ave1">
          <p></p>
        </td>
        <td id="tdata" rowspan="3" class="score8">
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
          <p style="float: right" class="mr-2 mt-2">Rating for Overall Accomplishment</p>
        </td>
        <td id="tdata" class="ratingTotal" colspan="4">
          <p></p>
        </td>
        <td id="tdata" class="ratingAverage">
          <p></p>
        </td>
      </tr>
      <!-- End of Ratingfor overall accomplishment -->
    </table>
    <br />
    <br />

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
            v-model="part_ratee"
            readonly
            style="width: 200px; height: 100px; margin-left: 80px"
          >
          </v-text-field>

          <h5 class="pa-2" style="margin-left: 80px">Ratee</h5>
        </v-col>
        <v-col>
          <v-text-field
          readonly
            v-model="part_rater"
            style="width: 200px; height: 100px; margin-left: 40px"
          >
          </v-text-field>

          <h5 class="pa-2" style="margin-right: 10px">Rater</h5>
        </v-col>

        <v-col>
          <v-text-field readonly style="width: 200px; height: 100px; margin-left: 40px">
            <!-- <p class="mt-6">{{ part_approvingAuthority }}</p> -->
          </v-text-field>

          <h5 class="pa-2" style="margin-left: -20px">Approving Authority</h5>
        </v-col>
      </v-row>
    </div>
    <br /><br />
    </v-tab-item>
    <v-tab>Part II</v-tab>
    <v-tab-item>
    <!-- End of Display Signatures  -->

    <!-- end of part 1 display -->
    <!-- start of part 2 display -->
   
    <table id="table" style="width: 100%" >
      <tr class="row1">
        <td
          id="tdata"
          colspan="6"
          class="grey lighten-2 pt-4 pb-0"
          style="line-height: 5px"
        >
          <p style="text-align: center"><b>PART II: COMPETENCIES</b></p>
        </td>
      </tr>

      <tr class="row1">
        <td id="tdata" colspan="6" style="line-height: 5px">
          <p>
            Instructions: Please indicate the number of competency indicators that you
            demonstrated during the performance cycle.
          </p>
        </td>
      </tr>
      <tr class="row1">
        <td id="tdata" colspan="6">
          <p><b>CORE BEHAVIORAL COMPETENCIES</b></p>
        </td>
      </tr>
      <tr>
        <td id="tdata" colspan="2">
          <b>Self-Management</b> <br />
          1. Sets personal goals and
          directions, needs and development. <br />
           2. Undertakes personal
          actions and behavior that are clear and purposive and takes into account
          personal goals and values congruent to that of the organization. <br />
           3. Displays emotional
          maturity and enthusiasm for and is challenged by higher goals. <br />
           4. Prioritizes work tasks
          and schedules (through Gantt chants, checklists, etc.) to achieve goals.
          <br />
           5. Sets high quality,
          challenging, realistic goals for self and others.
        </td>

        <td id="tdata" colspan="2" style="width: 15%; text-align: center">{{countSelfManagement}}</td>
        <td id="tdata" colspan="1">
          <b> Teamwork</b> <br />
           1. Willingly does his/her share of
          responsibility. <br />
           2. Promotes collaboration and
          removes barrier to teamwork and goal accomplishment across the organization.
          <br />
           3. Applies negotiation principles
          in arriving at win-win agreements.
          <br />
           4. Drives consensus and team
          ownership of decisions.
          <br />
          5. Works constructively and
          collaboratively with others and across organizations to accomplish organization
          goals and objectives.
        </td>
        <td id="tdata" colspan="2" style="width: 15%; text-align: center">{{countTeamwork}}</td>
      </tr>
      <tr>
        <td id="tdata" colspan="2">
          <b>Professionalism and Ethics</b> <br />
           1. Demonstrates the values
          and behavior enshrined in the Norms and Conduct and Ethical Standards for Public
          Officials and Employees (RA 6713). <br />
           2. Practices ethical and
          professional behavior and conduct taking into account the impact of his/her
          actions and decisions. <br />
          3. Maintains a professional image: being trustworthy, regularity of attendance
          and punctuality, good grooming and communication. <br />
          4. Makes personal
          sacrifices to meet the organization’s needs.
          <br />
          5. Acts with a sense of
          urgency and responsibility to meet the organization’s needs, improve system and
          help others improve their effectiveness.
        </td>

        <td id="tdata" colspan="2" style="width: 15%; text-align: center">countProfessional</td>
        <td id="tdata" colspan="1">
          <b> Service Orientation</b> <br />
           1. Can explain and
          articulate organizational directions, issues and problems.
          <br />
           2. Takes personal
          responsibility for dealing with and/or correcting customer service issues and
          concerns. <br />3.
          Initiates activities that promote advocacy for men and women empowerment.
          <br />
          4. Participates in
          updating office vision, mission, mandates and strategies based on DepEd
          strategies and directions.
          <br />
           5. Develops and adopts
          service improvement program through simplified procedures that will further
          enhance service delivery.
        </td>
        <td id="tdata" colspan="2" style="width: 15%; text-align: center">{{countService}}</td>
      </tr>

      <tr>
        <td id="tdata" colspan="2">
          <b>Results Focus</b> <br />
          1. Achieves results with optimal use of time and resources most of the time.
          <br />
          2. Avoids rework, mistakes and wastage through effective work methods by placing
          organizational needs before personal needs.
          <br />3. Delivers error-free outputs most of the time by conforming to standard
          operating procedures correctly and consistently. Able to produce very
          satisfactory quality work in terms of usefulness/acceptability and completeness
          with no supervision required. <br />
          4. Expresses a desire to do better and may express frustration at waste or
          inefficiency. May focus on new or more precise ways of meeting goals set.
          <br />
          5. Makes specific changes in the system or in own work methods to improve
          performance. Examples may include doing something better, faster, at a lower
          cost, more efficiently, or improving quality, customer satisfaction, morale,
          without setting any specific goal.
        </td>

        <td id="tdata" colspan="2" style="width: 15%; text-align: center">{{countResults}}</td>
        <td id="tdata" colspan="1">
          <b> Innovation</b> <br />
          1. Examines the root cause of problems and suggests effective solutions. Foster
          new ideas, processes and suggests better ways to do things (cost and/or
          operational efficiency). <br />
          2. Demonstrates an ability to think “beyond the box”. Continuously focuses on
          improving personal productivity to create higher value and results.
          <br />3. Promotes a creative climate and inspires co-workers to develop original
          ideas or solutions.
          <br />
          4. Translates creative thinking into tangible changes and solutions that improve
          the work unit and organization.
          <br />
          5. Uses ingenious methods to accomplish responsibilities. Demonstrates
          resourcefulness and the ability to succeed with minimal resources.
        </td>
        <td id="tdata" colspan="2" style="width: 15%; text-align: center">{{countInnovation}}</td>
      </tr>
      <tr class="row1">
        <td id="tdata" colspan="6">
          <p>
            Note: The assessment in the demonstration of competencies shall not be
            reflected in the final rating. These competencies are monitored to inform
            professional development plans (DepEd Order No. 2, s. 2015, p. 9).
          </p>
        </td>
      </tr>
    </table>
    </v-tab-item>
    <v-tab>Part 3</v-tab>
    <v-tab-item>
    <br />
    <!-- start of part 3 competencies -->
    <table id="table">
      <tr class="row1">
        <td id="tdata" colspan="6" class="grey lighten-2 pt-4 pb-0">
          <p style="text-align: center">
            <b>
              Teacher I-III, SPET I-IV, Special Science Teacher I-II (Proficient
              Teacher)</b
            >
          </p>
        </td>
      </tr>
    </table>

    <table id="table" class="pa-0" style="width: 100%; text-align: left">
      <tr>
        <td id="tdata" rowspan="2" colspan="1">
          <p>Name of Employee:</p>
          <p>Position:</p>
          <p>Bureau/Center/Service/Division:</p>
          <p>Rating Period:</p>
        </td>
      </tr>
      <tr>
        <td id="tdata" rowspan="2" colspan="2">
          <p>Name of Rater:</p>
          <p>Position:</p>

          <p>Date of Review:</p>
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
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="blank2">
        <td id="tdata">24%</td>

        <td id="tdata">Objective 2</td>
        <td id="tdata">8%</td>

        <td id="tdata"></td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="blank2">
        <td id="tdata">24%</td>

        <td id="tdata">Objective 2</td>
        <td id="tdata">8%</td>

        <td id="tdata"></td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="displayKra2">
        <td id="tdata" rowspan="3">KRA 2</td>
        <td id="tdata">24%</td>

        <td id="tdata">Objective 3</td>
        <td id="tdata">8%</td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="kra2Blank1">
        <td id="tdata">24%</td>

        <td id="tdata">Objective 2</td>
        <td id="tdata">8%</td>

        <td id="tdata"></td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="kra2Blank2">
        <td id="tdata">24%</td>

        <td id="tdata">Objective 2</td>
        <td id="tdata">8%</td>

        <td id="tdata"></td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="displayKra2">
        <td id="tdata" rowspan="2">KRA 3</td>
        <td id="tdata">24%</td>

        <td id="tdata">Objective 3</td>
        <td id="tdata">8%</td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="kra3Blank1">
        <td id="tdata">24%</td>

        <td id="tdata">Objective 2</td>
        <td id="tdata">8%</td>

        <td id="tdata"></td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="displayKra4">
        <td id="tdata" rowspan="3">KRA 4</td>
        <td id="tdata">24%</td>

        <td id="tdata">Objective 3</td>
        <td id="tdata">8%</td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="kra4Blank1">
        <td id="tdata">24%</td>

        <td id="tdata">Objective 2</td>
        <td id="tdata">8%</td>

        <td id="tdata"></td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="kra4Blank2">
        <td id="tdata">24%</td>

        <td id="tdata">Objective 2</td>
        <td id="tdata">8%</td>

        <td id="tdata"></td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <tr class="displayKra4">
        <td id="tdata">Plus Factor</td>
        <td id="tdata">24%</td>

        <td id="tdata">Objective 3</td>
        <td id="tdata">8%</td>
        <td id="tdata">
          <p></p>
        </td>

        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
        <td id="tdata">
          <p></p>
        </td>
      </tr>
      <!-- Final Rating Area -->
      <tr class="finalRating light-green lighten-2">
        <td id="tdata" colspan="2" rowspan="2">FINAL PERFORMANCE RESULTS</td>
        <td id="tdata" colspan="4" rowspan="2">Accomplishments of KRAs and Objectives</td>

        <td id="tdata" colspan="2">Final Rating</td>
        <td id="tdata" colspan="2">Adjectival Rating</td>
      </tr>
      <tr class="finalRating light-green lighten-2">
        <td id="tdata" colspan="2"><p></p></td>
        <td id="tdata" colspan="2"><p></p></td>
      </tr>
    </table>
    <br />

    <!-- Part 3 Display Signatures -->

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
          <v-text-field style="width: 200px; height: 100px; margin-left: 40px">
            <p class="mt-6">{{ part_approvingAuthority }}</p>
          </v-text-field>

          <h5 class="pa-2" style="margin-left: -20px">Approving Authority</h5>
        </v-col>
      </v-row>
    </div>
    <br /><br />

    </v-tab-item>
    <v-tab>Part 4</v-tab>
    <v-tab-item>
    <!-- End of Part 3 Display -->
    <div>
      <p style="text-align: center"><b>PART IV: DEVELOPMENTAL PLANS</b></p>
      <table id="table" style="width: 100%">
        <tbody>
          <td id="tdata" rowspan="2" colspan="2">
            <p>
              <b>NOTE:</b> <br />
              This sheet shall be accomplished during: i) Phase I: Performance Planning
              and Commitment, based on the results of e-SAT; and ii) Phase II: Performance
              Monitoring and Coaching, based on the agreements on the Performance
              Monitoring and Coaching Form and Mid-year Review Form; and iii) Phase IV:
              Performance Rewarding and Development Planning, based on the actual results
              of IPCRF.
              <br />
              The Ratee can modify the cell (i.e., add rows) to reflect his/her
              development needs and strengths.
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
          <td id="tdata" colspan="6" class="pt-4 grey lighten-2" style="line-height: 5px">
            <p>A. Core Competencies</p>
          </td>
        </tr>
        <!-- Start of functional content -->
        <tr style="height: 100px">
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
        </tr>
        <!-- End of functional content -->
        <tr>
          <td id="tdata" colspan="6" class="grey lighten-2" style="line-height: 5px">
            <p>B. Core Behavioral</p>
          </td>
        </tr>
        <!-- Start of Core Behavioral -->
        <tr style="height: 100px">
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
          <td id="tdata">
            <p></p>
          </td>
        </tr>
        <!-- End of Core Behavioral -->
        <tr style="height: 100px">
          <td id="tdata" colspan="6" class="mt-4">
            <p>Feedback:</p>
          </td>
        </tr>
      </table>
      <!-- This is the signature part in part 4 -->
      <div class="pa-10 ml-9" style="text-align: center">
        <v-row>
          <v-col>
            <v-text-field
              v-model="part_ratee"
              style="width: 200px; height: 100px; margin-left: 80px"
            >
            </v-text-field>

            <h5 class="pa-2" style="margin-left: 80px">RATEE</h5>
          </v-col>
          <v-col>
            <v-text-field
              v-model="part_rater"
              style="width: 200px; height: 100px; margin-left: 40px"
            >
            </v-text-field>

            <h5 class="pa-2" style="margin-right: 10px">RATER</h5>
          </v-col>

          <v-col>
            <v-text-field style="width: 200px; height: 100px; margin-left: 40px">
              <p class="mt-6">{{ part_approvingAuthority }}</p>
            </v-text-field>

            <h5 class="pa-2" style="margin-left: -20px">APPROVING AUTHORITY</h5>
          </v-col>
        </v-row>
      </div>
      <br />
      <table id="table" style="width: 100%">
        <tbody>
          <td id="tdata" rowspan="2" colspan="2">
            <p>
              <b>NOTE:</b> <br />
              When all Parts of the IPCRF are accomplished, the Ratee must submit the file
              copy of his or her IPCRF electronic form to the Department Head or School
              Head for the school-wide consolidation. He or she must print all the pages
              of this form and submit to the Personnel Division of the school to be
              attached to his or her 201 personnel file.
            </p>
          </td>
        </tbody>
      </table>
    </div>
      </v-tab-item>


      </v-tabs>
      <v-btn class=" ma-6 float-left" @click="back">Back</v-btn>
    <v-btn class=" ma-6 float-right" @click="editItems">Edit</v-btn>
  </v-container>

<!--Container for rendering the view for update and create in ipctf -->
<v-container v-if="create==true || edit==true">
  <!--start for create and fill up encoding-->
  <v-card class="pa-0 pa-0 ma-5">
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
              and dispose of your personal information in accordance with the Data Privacy
              Act of 2012.<br />

              <b> INSTRUCTIONS: </b> <br />
              Part 1 shall be accomplished by the Rater during the Phase III: Performance
              Review and Evaluation of the RPMS Cycle. <br />
              Fill in empty cells (white) with needed information about the teacher,
              school and division. <br />

              COT Rating<br />
              Encode the COT rating per observation period by doing the following
              steps:<br />
              1) Select the subject for COT; 2) Input the COT rating per objective; and 3)
              Lock COT once finished. <br />

              QET Rating<br />
              Once all available COT ratings are inputted, encode your rating for
              Efficiency and Timeliness. <br />

              Note: This form automatically transmutes the COT rating to its corresponding
              in the RPMS 5-point scale. <br />

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
                     <v-row>
                    <v-col cols="12" sm="12" md="12" class="text-center">
                      <v-menu
                        v-model="empDateReviewMenu"
                        :close-on-content-click="false"
                        :nudge-right="40"
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
                    <v-select
                    :items="ratingPeriodItems"
                      v-model="empRatingPeriod"
                      placeholder="Rating Period"
                      solo
                      dense
                      class="text-center pt-5"
                      type="text"
                    >
                    </v-select>
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
                  <td colspan="3" style="text-align: left">No. of Years in Teaching:</td>
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
                  <td colspan="1" style="text-align: left">Curricular Classification:</td>
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
        </v-card>   


           <!-- START OF KRA TABLE -->
           <v-container fluid v-if="user=='Admin'">
        <v-simple-table>
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
          <td id="tdata" colspan="2" rowspan="1"> <v-select
                      :items="subjectTaughtItems"
                      v-model="cot1SubjectsTaught"
                      label="Subject"
                      dense
                      solo
                      class="text-center pt-6"
                    ></v-select></td>
          <td id="tdata" colspan="2" rowspan="1"><v-select
                      :items="subjectTaughtItems"
                      v-model="cot2SubjectsTaught"
                      label="Subject"
                      dense
                      solo
                      class="text-center pt-6"
                    ></v-select></td>
          <td id="tdata" colspan="2" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="2" rowspan="1" class="grey darken-2"><p></p></td>
        </tr>
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Rating</p></td>
          <td id="tdata" colspan="1" rowspan="1"><p>RPMS 5-pt</p></td>
          <td id="tdata" colspan="1" rowspan="1"><p>Rating</p></td>
          <td id="tdata" colspan="1" rowspan="1"><p>RPMS 5-pt</p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
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
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 1</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1IndicatorObjNo1"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1RatingObjNo1"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field>
    </td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1RpmsObjNo1"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot2RatingObjNo1"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot2RpmsObjNo1"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="calculateObjectivesAverageNo1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ1"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="calculateNumericalRatingsAverageNo1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 2 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 2</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ2"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
           <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve2"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore2"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating2"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 3 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 3</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ3"
                        placeholder=""
                        solo
                        dense
                      
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
           <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve3"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore3"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating3"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 4 -->
        <tr>
          <td id="tdata" rowspan="3"><p>KRA 2</p></td>
          <td id="tdata" rowspan="3">
            <p>24%</p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 4</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ4"
                        placeholder=""
                        solo
                        dense
                      
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
           <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve4"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore4"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating4"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 5 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 5</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1IndicatorObjNo5"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1RatingObjNo5"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1RpmsObjNo5"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot2RatingObjNo5"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot2RpmsObjNo5"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAverageObjNo5"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ5"
                        placeholder=""
                        solo
                        dense
                     
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve5"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore5"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating5"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 6 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 6</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ6"
                        placeholder=""
                        solo
                        dense
                  
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalT6"
                        placeholder=""
                        solo
                        dense
                     
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
           <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve6"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore6"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating6"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 7 -->
        <tr>
          <td id="tdata" rowspan="2"><p>KRA 3</p></td>
          <td id="tdata" rowspan="2">
            <p>24%</p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 7</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1IndicatorObjNo7"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="cot1RatingObjNo7"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="cot1RpmsObjNo7"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="cot2RatingObjNo7"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="cot2RpmsObjNo7"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAverageObjNo7"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ7"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve7"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore7"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating7"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 8 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 8</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ8"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve8"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore8"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating8"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 4 -->
        <tr>
          <td id="tdata" rowspan="3"><p>KRA 4</p></td>
          <td id="tdata" rowspan="3">
            <p>24%</p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 9</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ9"
                        placeholder=""
                        solo
                        dense
                     
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalE9"
                        placeholder=""
                        solo
                        dense
                    
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve9"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore9"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating9"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 10 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 10</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ10"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalE10"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve10"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore10"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating10"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 11 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 11</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ11"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalE11"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve11"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore11"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating11"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 12 -->
        <tr>
          <td id="tdata" rowspan="1"><p>PLUS FACTOR</p></td>
          <td id="tdata" rowspan="1">
            <p>24%</p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 12</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ12"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalE12"
                        placeholder=""
                        solo
                        dense
                        
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve12"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore12"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating12"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <tr>
          <td id="tdata" colspan="5" rowspan="1">
            <p style="float: right">Date Observed:</p>
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
                            readonly
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
                  </v-row></td>
          <td id="tdata" colspan="2" rowspan="1"><v-row>
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
                            readonly
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
                  </v-row></td>
          <td id="tdata" colspan="2" rowspan="1"><p></p></td>
          <td id="tdata" colspan="2" rowspan="1"><p></p></td>
          <td id="tdata" colspan="5" rowspan="1">
            <p style="float: right">Final Rating:</p>
          </td>
          <td id="tdata" colspan="2" rowspan="1"><v-text-field
                        v-model="empFinalRating"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                  
                      >
                      </v-text-field></td>
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
          <td id="tdata" colspan="2" rowspan="1"><v-text-field
                        v-model="empFinalAdjRating"
                        placeholder=""
                        solo
                        dense
                       
                        class="text-center ml-auto mr-auto"
                  
                      >
                      </v-text-field></td>
        </tr>
        </v-simple-table>  

          <br />
          <div style="margin-left: 350px">
            <v-col class="pa-0">
              <h5 class="pa-2" style="margin-left: 70px">Approving Authority</h5>

              <v-text-field
                v-model="part1ApprovingAuthority"
                placeholder="Enter Approving Authority"
                solo
                dense
                class="mb-0"
                style="width: 300px"
              >
              </v-text-field>
            <v-divider  style="width: 300px"></v-divider>
                <v-select
                      :items="approvingAuthorityPosition"
                      v-model="approvingAuthPosition"
                      label=""
                      dense
                      solo
                      style="width: 300px"
                      class="text-center pt-6"
                    ></v-select>
              
            </v-col>
          </div>
           </v-container>

           <!-- table for teacher view only mode -->
           <v-container fluid v-if="user=='Teacher'">
             <v-simple-table>
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
          <td id="tdata" colspan="2" rowspan="1"> <v-select
                      :items="subjectTaughtItems"
                      v-model="cot1SubjectsTaught"
                      label="Subject"
                      dense
                      readonly
                      solo
                      class="text-center pt-6"
                    ></v-select></td>
          <td id="tdata" colspan="2" rowspan="1"><v-select
                      :items="subjectTaughtItems"
                      v-model="cot2SubjectsTaught"
                      label="Subject"
                      dense
                      readonly
                      solo
                      class="text-center pt-6"
                    ></v-select></td>
          <td id="tdata" colspan="2" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="2" rowspan="1" class="grey darken-2"><p></p></td>
        </tr>
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Rating</p></td>
          <td id="tdata" colspan="1" rowspan="1"><p>RPMS 5-pt</p></td>
          <td id="tdata" colspan="1" rowspan="1"><p>Rating</p></td>
          <td id="tdata" colspan="1" rowspan="1"><p>RPMS 5-pt</p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
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
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 1</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1IndicatorObjNo1"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1RatingObjNo1"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field>
    </td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1RpmsObjNo1"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot2RatingObjNo1"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot2RpmsObjNo1"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAverageObjNo1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating1"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 2 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 2</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ2"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
           <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve2"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore2"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating2"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 3 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 3</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ3"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
           <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve3"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore3"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating3"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 4 -->
        <tr>
          <td id="tdata" rowspan="3"><p>KRA 2</p></td>
          <td id="tdata" rowspan="3">
            <p>24%</p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 4</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ4"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
           <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve4"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore4"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating4"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 5 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 5</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1IndicatorObjNo5"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1RatingObjNo5"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1RpmsObjNo5"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot2RatingObjNo5"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot2RpmsObjNo5"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAverageObjNo5"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ5"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve5"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore5"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating5"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 6 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 6</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ6"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalT6"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
           <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve6"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore6"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating6"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 7 -->
        <tr>
          <td id="tdata" rowspan="2"><p>KRA 3</p></td>
          <td id="tdata" rowspan="2">
            <p>24%</p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 7</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"> <v-text-field
                        v-model="cot1IndicatorObjNo7"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="cot1RatingObjNo7"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="cot1RpmsObjNo7"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="cot2RatingObjNo7"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="cot2RpmsObjNo7"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAverageObjNo7"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ7"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve7"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore7"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating7"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 8 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 8</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ8"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve8"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore8"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating8"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 4 -->
        <tr>
          <td id="tdata" rowspan="3"><p>KRA 4</p></td>
          <td id="tdata" rowspan="3">
            <p>24%</p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 9</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ9"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalE9"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve9"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore9"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating9"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 10 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 10</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ10"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalE10"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve10"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore10"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating10"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 11 -->
        <tr>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 11</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ11"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalE11"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve11"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore11"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating11"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <!-- OBJ 12 -->
        <tr>
          <td id="tdata" rowspan="1"><p>PLUS FACTOR</p></td>
          <td id="tdata" rowspan="1">
            <p>24%</p>
          </td>
          <td id="tdata" colspan="1" rowspan="1"><p>Objective 12</p></td>
          <td id="tdata" colspan="1" rowspan="1">
            <p>8%</p>
            <p></p>
          </td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalQ12"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfNumericalE12"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1" class="grey darken-2"><p></p></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingIpcrfRatingAve12"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingScore12"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
          <td id="tdata" colspan="1" rowspan="1"><v-text-field
                        v-model="encodingAdjectivalRating12"
                        placeholder=""
                        solo
                        dense
                        readonly
                        class="text-center ml-auto mr-auto"
                        
                      >
                      </v-text-field></td>
        </tr>
        <tr>
          <td id="tdata" colspan="5" rowspan="1">
            <p style="float: right">Date Observed:</p>
          </td>
          <td id="tdata" colspan="2" rowspan="1">
                    
                          <v-text-field
                            v-model="computedDateFormattedCot1DateObserved"
                            append-icon="mdi-calendar"
                            readonly
                            :rules="required"
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                        </td>
          <td id="tdata" colspan="2" rowspan="1">
                          <v-text-field
                            v-model="computedDateFormattedCot2DateObserved"
                            append-icon="mdi-calendar"
                            readonly
                            :rules="required"
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                      </td>
          <td id="tdata" colspan="2" rowspan="1"><p></p></td>
          <td id="tdata" colspan="2" rowspan="1"><p></p></td>
          <td id="tdata" colspan="5" rowspan="1">
            <p style="float: right">Final Rating:</p>
          </td>
          <td id="tdata" colspan="2" rowspan="1"><v-text-field
                        v-model="empFinalRating"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                  
                      >
                      </v-text-field></td>
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
          <td id="tdata" colspan="2" rowspan="1"><v-text-field
                        v-model="empFinalAdjRating"
                        placeholder=""
                        solo
                        dense
                       readonly
                        class="text-center ml-auto mr-auto"
                  
                      >
                      </v-text-field></td>
        </tr>
        </v-simple-table>  

          <br />
          <div style="margin-left: 350px">
            <v-col class="pa-0">
              <h5 class="pa-2" style="margin-left: 70px">Approving Authority</h5>

              <v-text-field
                v-model="part1ApprovingAuthority"
                placeholder="Enter Approving Authority"
                solo
                readonly
                dense
                class="mb-0"
                style="width: 300px"
              >
              </v-text-field>
            <v-divider  style="width: 300px"></v-divider>
                <v-select
                      :items="approvingAuthorityPosition"
                      v-model="approvingAuthPosition"
                      label=""
                      dense
                      readonly
                      solo
                      style="width: 300px"
                      class="text-center pt-6"
                    ></v-select>
              
            </v-col>
          </div>
           </v-container>
          <v-card class="mx-auto" max-width="600">
            <v-card-text>
              <div class="text--primary">
                <b> NOTE:</b><br />

                When COT and QET ratings are encoded, click Finalize Part 1. Give the file
                copy to the teacher concerned. The teacher shall accomplish Parts 2 & 4.
              </div>
            </v-card-text>
          </v-card>
          <v-btn @click="finalizePart1" class="text-center ml-auto mr-auto justify-content-center">Finalize Part1</v-btn>
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
                  that you demonstrated during the performance cycle. The results of your
                  assessment can be found in the PART 2 sheet.
                </div>
              </v-card-text>
            </v-card>
            <br />


            <v-container fluid v-if="user=='Admin'">
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
              readonly
            ></v-checkbox>  
                    
                                       <v-checkbox
              label="2.Undertakes personal actions and behavior that are clear and
                        purposive and takes into account personal goals and values
                        congruent to that of the organization."
              color="black"
              v-model="selfManagement2"
              hide-details
              readonly
            ></v-checkbox> 
               
                                               <v-checkbox
              label="3.Displays emotional maturity and enthusiasm for and is challenged
                        by higher goals."
              color="black"
              v-model="selfManagement3"
              hide-details
              readonly
            ></v-checkbox> 
                    
                           <v-checkbox
              label="4.Prioritizes work tasks and schedules (through Gantt chants,
                        checklists, etc.) to achieve goals."
              color="black"
              v-model="selfManagement4"
              hide-details
              readonly
            ></v-checkbox> 
              
                          <v-checkbox
              label=" 5.Sets high quality, challenging, realistic goals for self and
                        others. "
              color="black"
              v-model="selfManagement5"
              hide-details
              readonly
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
              readonly
            ></v-checkbox> 
                   <v-checkbox
              label="2.Promotes collaboration and removes barrier to teamwork and goal
                        accomplishment across the organization."
              color="black"
              v-model="teamwork2"
              hide-details
              readonly
            ></v-checkbox> 
                       <v-checkbox
              label="3.Applies negotiation principles in arriving at win-win
                        agreements."
              color="black"
              v-model="teamwork3"
              hide-details
              readonly
            ></v-checkbox> 
              <v-checkbox
              label="4. Drives consensus and team ownership of decisions."
              color="black"
              v-model="teamwork4"
              hide-details
              readonly
            ></v-checkbox> 
                      <v-checkbox
              label=" 5. Works constructively and collaboratively with others and across
                        organizations to accomplish organization goals and objectives."
              color="black"
              v-model="teamwork5"

              hide-details
              readonly
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
              readonly
            ></v-checkbox>   
                        <v-checkbox
              label=" 2.Practices ethical and professional behavior and conduct taking
                        into account the impact of his/her actions and decisions."
              color="black"
              v-model="prof2"

              hide-details
              readonly
            ></v-checkbox>   
                       <v-checkbox
              label=" 3.Maintains a professional image: being trustworthy, regularity of
                        attendance and punctuality, good grooming and communication."
              color="black"
              v-model="prof3"
              hide-details
              readonly
            ></v-checkbox>   
                      <v-checkbox
              label=" 4.Makes personal sacrifices to meet the organization’s needs."
              color="black"
              v-model="prof4"
              hide-details
              readonly
            ></v-checkbox>     
               <v-checkbox
              label="  5.Acts with a sense of urgency and responsibility to meet the
                        organization’s needs, improve system and help others improve their
                        effectiveness."
              color="black"
              v-model="prof5"
              hide-details
              readonly
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
              readonly
            ></v-checkbox> 
                     <v-checkbox
              label="  2. Takes personal responsibility for dealing with and/or
                        correcting customer service issues and concerns."
              color="black"
              v-model="service2"
      
              hide-details
              readonly
            ></v-checkbox>   
                          <v-checkbox
              label=" 3. Initiates activities that promote advocacy for men and women
                        empowerment."
              color="black"
              v-model="service3"
          
              hide-details
              readonly
            ></v-checkbox>   
                      <v-checkbox
              label=" 4. Participates in updating office vision, mission, mandates and
                        strategies based on DepEd strategies and directions. 
                       "
              color="black"
              v-model="service4"
              hide-details
              readonly
            ></v-checkbox> 
             <v-checkbox
              label=" 5. Develops and adopts service improvement program through
                        simplified procedures that will further enhance service delivery.
                       "
              color="black"
              v-model="service5"
              hide-details
              readonly
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
              readonly
            ></v-checkbox>
                   <v-checkbox
              label=" 2. Avoids rework, mistakes and wastage through effective work
                        methods by placing organizational needs before personal needs.
                       "
              color="black"
              v-model="results2"
              hide-details
              readonly
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
              readonly
            ></v-checkbox>
                      <v-checkbox
              label=" 4. Expresses a desire to do better and may express frustration at
                        waste or inefficiency. May focus on new or more precise ways of
                        meeting goals set.
                       "
              color="black"
              v-model="results4"
  
              hide-details
              readonly
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
              readonly
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
              readonly
            ></v-checkbox>   
                       <v-checkbox
              label=" 2. Demonstrates an ability to think “beyond the box”. Continuously
                        focuses on improving personal productivity to create higher value
                        and results.
                       "
              color="black"
              v-model="innovation2"
              hide-details
              readonly
            ></v-checkbox>   
                      <v-checkbox
              label=" 3. Promotes a creative climate and inspires co-workers to develop
                        original ideas or solutions.
                       "
              color="black"
              v-model="innovation3"
              hide-details
              readonly
              
            ></v-checkbox>   
                       <v-checkbox
              label=" 4. Translates creative thinking into tangible changes and
                        solutions that improve the work unit and organization.
                       "
              color="black"
              v-model="innovation4"
              hide-details
              readonly
              
            ></v-checkbox>   
                   <v-checkbox
              label=" 5. Uses ingenious methods to accomplish responsibilities.
                        Demonstrates resourcefulness and the ability to succeed with
                        minimal resources.
                       "
              color="black"
              v-model="innovation5"
              hide-details
              readonly
            ></v-checkbox> 
                        
                        <br /><br />
                        <br />
                      </div>
                    </v-card-text>
                  </v-card>
                </v-flex>
              </v-col>
            </v-row>
            </v-container>

            <v-container fluid v-if="user=='Teacher'">
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
              
            ></v-checkbox>  
                    
                                       <v-checkbox
              label="2.Undertakes personal actions and behavior that are clear and
                        purposive and takes into account personal goals and values
                        congruent to that of the organization."
              color="black"
              v-model="selfManagement2"
              hide-details
              
            ></v-checkbox> 
               
                                               <v-checkbox
              label="3.Displays emotional maturity and enthusiasm for and is challenged
                        by higher goals."
              color="black"
              v-model="selfManagement3"
              hide-details
              
            ></v-checkbox> 
                    
                           <v-checkbox
              label="4.Prioritizes work tasks and schedules (through Gantt chants,
                        checklists, etc.) to achieve goals."
              color="black"
              v-model="selfManagement4"
              hide-details
              
            ></v-checkbox> 
              
                          <v-checkbox
              label=" 5.Sets high quality, challenging, realistic goals for self and
                        others. "
              color="black"
              v-model="selfManagement5"
              hide-details
              
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
              
            ></v-checkbox> 
                   <v-checkbox
              label="2.Promotes collaboration and removes barrier to teamwork and goal
                        accomplishment across the organization."
              color="black"
              v-model="teamwork2"
              hide-details
              
            ></v-checkbox> 
                       <v-checkbox
              label="3.Applies negotiation principles in arriving at win-win
                        agreements."
              color="black"
              v-model="teamwork3"
              hide-details
              
            ></v-checkbox> 
              <v-checkbox
              label="4. Drives consensus and team ownership of decisions."
              color="black"
              v-model="teamwork4"
              hide-details
              
            ></v-checkbox> 
                      <v-checkbox
              label=" 5. Works constructively and collaboratively with others and across
                        organizations to accomplish organization goals and objectives."
              color="black"
              v-model="teamwork5"

              hide-details
              
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
              
            ></v-checkbox>   
                        <v-checkbox
              label=" 2.Practices ethical and professional behavior and conduct taking
                        into account the impact of his/her actions and decisions."
              color="black"
              v-model="prof2"

              hide-details
              
            ></v-checkbox>   
                       <v-checkbox
              label=" 3.Maintains a professional image: being trustworthy, regularity of
                        attendance and punctuality, good grooming and communication."
              color="black"
              v-model="prof3"
              hide-details
              
            ></v-checkbox>   
                      <v-checkbox
              label=" 4.Makes personal sacrifices to meet the organization’s needs."
              color="black"
              v-model="prof4"
              hide-details
              
            ></v-checkbox>     
               <v-checkbox
              label="  5.Acts with a sense of urgency and responsibility to meet the
                        organization’s needs, improve system and help others improve their
                        effectiveness."
              color="black"
              v-model="prof5"
              hide-details
              
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
              
            ></v-checkbox> 
                     <v-checkbox
              label="  2. Takes personal responsibility for dealing with and/or
                        correcting customer service issues and concerns."
              color="black"
              v-model="service2"
      
              hide-details
              
            ></v-checkbox>   
                          <v-checkbox
              label=" 3. Initiates activities that promote advocacy for men and women
                        empowerment."
              color="black"
              v-model="service3"
          
              hide-details
              
            ></v-checkbox>   
                      <v-checkbox
              label=" 4. Participates in updating office vision, mission, mandates and
                        strategies based on DepEd strategies and directions. 
                       "
              color="black"
              v-model="service4"
              hide-details
              
            ></v-checkbox> 
             <v-checkbox
              label=" 5. Develops and adopts service improvement program through
                        simplified procedures that will further enhance service delivery.
                       "
              color="black"
              v-model="service5"
              hide-details
              
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
              
            ></v-checkbox>
                   <v-checkbox
              label=" 2. Avoids rework, mistakes and wastage through effective work
                        methods by placing organizational needs before personal needs.
                       "
              color="black"
              v-model="results2"
              hide-details
              
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
              
            ></v-checkbox>
                      <v-checkbox
              label=" 4. Expresses a desire to do better and may express frustration at
                        waste or inefficiency. May focus on new or more precise ways of
                        meeting goals set.
                       "
              color="black"
              v-model="results4"
  
              hide-details
              
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
              
            ></v-checkbox>   
                       <v-checkbox
              label=" 2. Demonstrates an ability to think “beyond the box”. Continuously
                        focuses on improving personal productivity to create higher value
                        and results.
                       "
              color="black"
              v-model="innovation2"
              hide-details
              
            ></v-checkbox>   
                      <v-checkbox
              label=" 3. Promotes a creative climate and inspires co-workers to develop
                        original ideas or solutions.
                       "
              color="black"
              v-model="innovation3"
              hide-details
              
              
            ></v-checkbox>   
                       <v-checkbox
              label=" 4. Translates creative thinking into tangible changes and
                        solutions that improve the work unit and organization.
                       "
              color="black"
              v-model="innovation4"
              hide-details
              
              
            ></v-checkbox>   
                   <v-checkbox
              label=" 5. Uses ingenious methods to accomplish responsibilities.
                        Demonstrates resourcefulness and the ability to succeed with
                        minimal resources.
                       "
              color="black"
              v-model="innovation5"
              hide-details
              
            ></v-checkbox> 
                        
                        <br /><br />
                        <br />
                      </div>
                    </v-card-text>
                  </v-card>
                </v-flex>
              </v-col>
            </v-row>
            </v-container>
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
             <v-btn @click="finalizePart2" class="text-center justify-content-center">Finalize Part2</v-btn>
            <!-- <div class="pa-2" align="center">
              <v-btn color="primary"> PREVIOUS </v-btn>
              <v-btn color="primary" class="ml-2"> NEXT </v-btn>
            </div> -->
                 
    
          </v-container>
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
                  <v-card v-if="n === 1" class="pa-4" outlined tile style="height: 220px">
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
                            4. Community Linkages and Professional Engagement and Personal
                            Growth and Professional Development
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
                            2. Ensured the positive use of ICT to facilitate the teaching
                            and learning process
                          </h5>
                          <br />
                        </v-card>
                        <v-card class="pa-2 pt-4" style="height: 190px" outlined tile>
                          <h5 class="font-weight-regular">
                            3. Applied a range of teaching strategies to develop critical
                            and creative thinking, as well as other higher-order thinking
                            skills.
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
                            11. Developed a personal improvement plan based on reflection
                            of one’s practice and ongoing professional learning
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
                        v-model="kra_1"
                        outlined
                        tile
                      >
                        <h5 class="font-weight-regular"><br />24.00%<br /><br /></h5>
                      </v-card>
                      <v-card
                        class="pa-2 pt-4 kra2"
                        style="height: 503px"
                        v-model="kra_2"
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
                        v-model="kra_3"
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
                        v-model="kra_4"
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
                        v-model="kra_5"
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
                          conclusions and justify their thinking or put parts together to
                          promote deeper understanding of ideas learned as shown in the
                          submitted learning material
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 59px" outlined tile>
                        <h5>2black <br /></h5>
                      </v-card>

                      <v-card class="pa-2 pt-4 part1Outstanding" outlined tile>
                        <h5>
                          Utilized effective teaching strategies that are appropriate in
                          responding to learners’ linguistic, cultural, socioeconomic, or
                          religious backgrounds at an individual level* as shown in the
                          submitted learning material <br />
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
                          constructive feedback* as shown in the evidence submitted <br />
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
                          Participated in any professional network/ activity that requires
                          output* and proof of implementation ** within the school to
                          share knowledge and to enhance practice as evidenced by the
                          submitted MOV <br />
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
                          responding to learners’ linguistic, cultural, socioeconomic, or
                          religious backgrounds at a group level* as shown in the
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
                          MOV submitted shows feedback given within 6-10 working days from
                          submission**<br />
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
                          Participated in any professional network/ activity that requires
                          output* and proof of implementation ** within the
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
                          Ensured that the ICT used modify processes and improve learning
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
                          responding to learners’ linguistic, cultural, socioeconomic, or
                          religious backgrounds as shown in the submitted learning
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
                          Half of the learning outcomes set are aligned with the learning
                          competencies as shown in the MOV submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Communicated with and obtained response from parents/ guardians
                          and/ or wider school community to facilitate involvement in the
                          educative process as evidenced by MOV No. 3 <br />
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
                          Participated in any professional network/ activity that requires
                          output* to share knowledge and to enhance practice as evidenced
                          by the submitted MOV<br />
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
                          Accomplished the Development Plan from learning objectives up to
                          resources needed to address Development Needs during Phase I of
                          the RPMS cycle<br />
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
                          referencing style as shown in the submitted learning material<br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Applied teaching strategies that lead learners along a single
                          path of inquiry and/or to simple recall and rote memorization of
                          concepts as shown in the submitted learning material
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
                          Provided learners with inaccurate and/or destructive feedback as
                          shown in the evidence submitted
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
                          Less than half of the learning outcomes set are aligned with the
                          learning competencies as shown in the MOV submitted
                          <br />
                        </h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" style="height: 60px" outlined tile>
                        <h5>2 black <br /></h5>
                      </v-card>
                      <v-card class="pa-2 pt-4" outlined tile>
                        <h5>
                          Communicated with parents/ guardians and/or wider school
                          community to facilitate involvement in the educative process but
                          received no response/reply as evidenced by MOV No. 3 <br />
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
                          Participated in any professional network/ activity that does not
                          require output to share knowledge and to enhance practice as
                          evidenced by the submitted MOV<br />
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
                          Accomplished the Strengths and Development Needs portion of the
                          Development Plan after self-assessment at the beginning of the
                          school year<br />
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
                            <v-spacer class="ml-4 pr-4"><p>Q</p></v-spacer>
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
                    <v-text-field style="width: 200px; height: 100px; margin-left: 40px">
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
                      purposive and takes into account personal goals and values congruent
                      to that of the organization.<br />
                      3. Displays emotional maturity and enthusiasm for and is challenged
                      by higher goals.<br />
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
                      3. Applies negotiation principles in arriving at win-win agreements.
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
                      Conduct and Ethical Standards for Public Officials and Employees (RA
                      6713).<br />
                      2. Practices ethical and professional behavior and conduct taking
                      into account the impact of his/her actions and decisions.<br />
                      3. Maintains a professional image: being trustworthy, regularity of
                      attendance and punctuality, good grooming and communication.<br />
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
                      1. Can explain and articulate organizational directions, issues and
                      problems.<br />
                      2. Takes personal responsibility for dealing with and/or correcting
                      customer service issues and concerns.<br />
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
                      meeting goals set. 5. Makes specific changes in the system or in own
                      work methods to improve performance. Examples may include doing
                      something better, faster, at a lower cost, more efficiently, or
                      improving quality, customer satisfaction, morale, without setting
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
                      1. Can explain and articulate organizational directions, issues and
                      problems.<br />
                      2. Takes personal responsibility for dealing with and/or correcting
                      customer service issues and concerns.<br />
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
                  Note: The assessment in the demonstration of competencie s shall not be
                  reflected in the final rating. These competencies are monitored to
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

            <v-card v-else-if="n === 2" class="pa-4" outlined tile style="height: 220px">
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
              <v-col :key="n" v-if="n === 1" class="ePartCol2" style="margin-left: -25px">
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
                  v-model="part3Kra1"
                  outlined
                  tile
                >
                  <h5 class="font-weight-regular"><br />24.00%<br /><br /></h5>
                </v-card>
                <v-card
                  class="pa-2 pt-4 kra2"
                  style="height: 150px"
                  v-model="part3Kra2"
                  outlined
                  tile
                >
                  <h5 class="font-weight-regular"><br />24.00%<br /><br /><br /></h5>
                </v-card>
                <v-card
                  class="pa-2 pt-4 kra3"
                  style="height: 100px"
                  v-model="part3Kra3"
                  outlined
                  tile
                >
                  <h5 class="font-weight-regular"><br />16.00%<br /><br /><br /></h5>
                </v-card>
                <v-card
                  class="pa-2 pt-4 kra4"
                  style="height: 150px"
                  v-model="part3Kra4"
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
                  v-model="part3Kra5"
                  outlined
                  tile
                >
                  <h5 class="font-weight-regular">12.00%<br /><br /><br /></h5>
                </v-card>
                <v-card class="pa-1" style="height: 54px" v-model="part3Kra_5" outlined tile>
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
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ10 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ11 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumericalQ12 }}</h5>

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
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E1 }}</h5>
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
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E2 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E3 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E4 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E5 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E6 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E7 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E8 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E9 }}</h5>

                    <br />
                  </v-card>
                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E10 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E11 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_E12 }}</h5>

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
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T1 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T2 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T3 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T4 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T5 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T6 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T7 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T8 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T9 }}</h5>

                    <br />
                  </v-card>
                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T10 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T11 }}</h5>

                    <br />
                  </v-card>

                  <v-card class="pa-1" style="height: 50px" outlined tile>
                    <h5 class="font-weight-regular">{{ encoding_ipcrfNumerical_T12 }}</h5>

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
                    ><h5 class="font-weight-regular">{{ encoding_ipcrfRatingAve10 }}</h5>

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
                    v-model="part3Encoding_7"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_8"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_9"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_10"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_11"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_12"
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
                    v-model="part3Encoding_AdjectivalRating1"
                    outlined
                    tile
                  >
                    <h5></h5>

                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating2"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating3"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating4"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating5"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating6"
                    outlined
                    tile
                  >
                    <h5></h5>

                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating7"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating8"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating9"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating10"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating11"
                    outlined
                    tile
                  >
                    <h5></h5>
                    <br />
                  </v-card>

                  <v-card
                    class="pa-4"
                    style="height: 50px"
                    v-model="part3Encoding_AdjectivalRating12"
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
                  v-model="part3EmpAdjRating1"
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
                  v-model="part3EmpAdjRating2"
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
                  v-model="part3EmpFinalRating"
                  style="width: 240px; height: 50px"
                >
                  <h5>
                    <br />
                  </h5>
                </v-card>
                <v-card
                  class="pa-4"
                  style="height: 50px"
                  v-model="part3EmpAdjRating"
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
                    Phase II: Performance Monitoring and Coaching, based on the agreements
                    on the Performance Monitoring and Coaching Form
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

              <div class="d-flex flex-column mb-6" v-if="user=='Teacher'">
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
                               
                              flat
                              v-model="developmentNeedsFunctional"
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
                               v-model="developmentCore"
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
                               v-model="learningObjectivesCore"
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
                              v-model="interventionCore"
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
                               v-model="resourcesNeededCore"
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
                           v-model="feedback"
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
                       
                        class="pa-2"
                        style="width: 250px; height: 100px; margin-left: 20px"
                      >
                       <v-text-field dense solo flat v-model="rateePart4"  >

                       </v-text-field>
                      </v-card>
                      <h5 class="pa-2" style="margin-left: 30px">RATEE</h5>
                    </v-col>

                    <v-col>
                      <v-card
                        v-model="part4_rater"
                        class="pa-2"
                        style="width: 250px; height: 100px; margin-left: 15px"
                      >
                       <v-text-field dense solo flat v-model="raterPart4"  >

                       </v-text-field>
                      </v-card>
                      <h5 class="pa-2" style="margin-right: 10px">RATER</h5>
                    </v-col>

                    <v-col>
                      <v-card class="pa-2" style="width: 250px; height: 100px">
                         <v-text-field dense solo flat v-model="approvingAuthorityPart4"  >

                       </v-text-field>
                      </v-card>
                      <h5 class="pa-2" style="margin-left: -70px">APPROVING AUTHORITY</h5>
                    </v-col>
                  </v-row>
                </div>
                <div class="ml-9"></div>
              </div>

              <div class="d-flex flex-column mb-6" v-if="user=='Admin'">
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
                              readonly
                              solo
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
                               readonly
                              flat
                              v-model="developmentNeedsFunctional"
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
                              v-model="learningObjectivesFunctional"
                               readonly
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
                               readonly
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
                              v-model="timelineFunctional"
                              solo
                               readonly
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
                              v-model="resourcesNeededFunctional"
                               readonly
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
                              readonly
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
                              readonly
                               v-model="developmentCore"
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
                               v-model="learningObjectivesCore"
                              solo
                              readonly
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
                              readonly
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
                              readonly
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
                               v-model="resourcesNeededCore"
                              solo
                              readonly
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
                           v-model="feedback"
                          solo
                          readonly
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
                        style="width: 250px; height: 100px; margin-left: 20px"
                      >
                       <v-text-field dense solo flat v-model="rateePart4"  readonly>

                       </v-text-field>
                      </v-card>
                      <h5 class="pa-2" style="margin-left: 30px">RATEE</h5>
                    </v-col>

                    <v-col>
                      <v-card
                        v-model="part4_rater"
                        class="pa-2"
                        style="width: 250px; height: 100px; margin-left: 15px"
                      >
                       <v-text-field dense solo flat v-model="raterPart4" readonly >

                       </v-text-field>
                      </v-card>
                      <h5 class="pa-2" style="margin-right: 10px">RATER</h5>
                    </v-col>

                    <v-col>
                      <v-card class="pa-2" style="width: 250px; height: 100px">
                         <v-text-field dense solo flat v-model="approvingAuthorityPart4" readonly >

                       </v-text-field>
                      </v-card>
                      <h5 class="pa-2" style="margin-left: -70px">APPROVING AUTHORITY</h5>
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
                    Head or School Head for the school-wide consolidation. He or she must
                    print all the pages of this form and submit to the Personnel Division
                    of the school to be attached to his or her 201 personnel file.
                  </div>
                </v-card-text> </v-card
              ><br />
              <v-btn @click="finalizePart4" class="ml-auto mr-auto text-center">Finalize Part 4</v-btn>
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

<script src="../../node_modules\excel-formula\dist\excel-formula.js" />
<script>
import formula from 'excel-formula';
// import * as excel from 'excel-formula'
//  var formattedFormula = excelFormulaUtilities.formatFormulaHTML('IF(1+1=2,"true","false")');
//         alert(formattedFormula)
export default {
   
  data() {
    return {
      //user:JSON.parse(sessionStorage.getItem('user_session')).role,
      create:false,
      edit:false,
      show:false,
      user: JSON.parse(sessionStorage.getItem("user_session")).role,
      userId: JSON.parse(sessionStorage.getItem("user_session")).id,
      inputType:'',
      ipcrf:[],
      search:'',
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
      ratingPeriodItems:[
        "SY 2020-2021",
        "SY 2021-2022",
        "SY 2022-2023",
        "SY 2023-2024",
        "SY 2024-2025",
        "SY 2025-2026",
        "SY 2027-2028",
        "SY 2028-2029",
        "SY 2029-2030"
      ],

      approvingAuthorityPosition:[
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
          "Teacher-in-Charge"
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
        "College"
      ],
      highestDegreeObtainedItems: [
        "Bachelor's Degree",
        "Master's Degree",
        "Doctorate Degree",
      ],
      schoolSizeItems: ["Small", "Medium", "Large", "Very Large"],
      gradeLevelTaughtItems: ["Kinder", 
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
           "Grade 12",],
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
      cot1IndicatorObjNo5: "",
      cot1IndicatorObjNo7: "",
      

      cot1RatingObjNo1: "",
      cot1RatingObjNo5: "",
      cot1RatingObjNo7: "",


      cot1RpmsObjNo1: "",
      cot1RpmsObjNo5: "",
      cot1RpmsObjNo7: "",


//cot 2 part 1 variables
cot2IndicatorObjNo1: "",
      cot2IndicatorObjNo5: "",
      cot2IndicatorObjNo7: "",
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
      approvingAuthPosition:"",
      cot1DateMenu: false,
      cot2DateMenu:false,
      dateOfReviewMenu:false,

  //part 2 encoding
      selfManagement1:false,
      selfManagement2:false,
      selfManagement3:false,
      selfManagement4:false,
      selfManagement5:false,
      teamwork1:false,
      teamwork2:false,
      teamwork3:false,
      teamwork4:false,
      teamwork5:false,
      prof1:false,
      prof2:false,
      prof3:false,
      prof4:false,
      prof5:false,
      service1:false,
      service2:false,
      service3:false,
      service4:false,
      service5:false,
      results1:false,
      results2:false,
      results3:false,
      results4:false,
      results5:false,
      innovation1:false,
      innovation2:false,
      innovation3:false,
      innovation4:false,
      innovation5:false,


    //part 4 encoding
      strengthsFunctional: "",
      developmentNeedsFunctional: "",
      learningObjectivesFunctional: "",
      interventionFunctional: "",
      timelineFunctional: "",
      resourcesNeededFunctional:"",
      strengthsCore: "",
      developmentCore: "",
      learningObjectivesCore: "",
      interventionCore: "",
      timelineCore: "",
      resourcesNeededCore:"",
      feedback:"",
      rateePart4: "",
      raterPart4: "",
      approvingAuthorityPart4: "",
      showTable:false,
      ipcrfDemographicProfile:[],
      ipcrfEncodingPart1:[],
      ipcrfEncodingPart2:[],
      ipcrfDevelopmentlan: [],
      countSelfManagement:'',
      countTeamwork:0,
      countProfessional:0,
      countService:0,
      countResults:0,
      countInnovation:0,
      loading:false,
    
    };
  },
  created(){
    console.log(this.user)
    this.retrieveIpcrf();
    var formattedFormula = excelFormulaUtilities.formula2JavaScript('=ROUND(IFERROR(SUM(B2,D2,F2,H2)/INDEX(FREQUENCY((D3,E3,F3,G3),0),2),0),3)')
     console.log(formattedFormula)   
    var formatted = formula.toJavaScript('=ROUND(IFERROR(SUM(B2,D2,F2,H2)/INDEX(FREQUENCY((D3,E3,F3,G3),0),2),0),3)');
    console.log(formatted);
  },
  computed:{

    calculateObjectivesAverageNo7(){
      this.encodingAverageObjNo7 = this.cot1RpmsObjNo1+this.cot2RpmsObjNo7/2
    },
     calculateObjectivesAverageNo5(){
      this.encodingAverageObjNo5 = this.cot1RpmsObjNo1+this.cot2RpmsObjNo5/2
    },
     calculateObjectivesAverageNo1(){
      this.encodingAverageObjNo1 = this.cot1RpmsObjNo1+this.cot2RpmsObjNo1/2
    },


    calculateNumericalRatingsAverageNo1(){
      this.encodingIpcrfRatingAve1 = this.encodingIpcrfNumericalQ1
    },
      calculateNumericalRatingsAverageNo2(){
      this.encodingIpcrfRatingAve2 = this.encodingIpcrfNumericalQ2
    },
     calculateNumericalRatingsAverageNo3(){
      this.encodingIpcrfRatingAve3 = this.encodingIpcrfNumericalQ3
    },
     calculateNumericalRatingsAverageNo4(){
      this.encodingIpcrfRatingAve4 = this.encodingIpcrfNumericalQ4
    },
     calculateNumericalRatingsAverageNo5(){
      this.encodingIpcrfRatingAve5 = this.encodingIpcrfNumericalQ5
    },
     calculateNumericalRatingsAverageNo6(){
      this.encodingIpcrfRatingAve6 = this.encodingIpcrfNumericalQ6+this.encodingIpcrfNumericalT6/2
    },
     calculateNumericalRatingsAverageNo7(){
      this.encodingIpcrfRatingAve7 = this.encodingIpcrfNumericalQ7
    },
     calculateNumericalRatingsAverageNo8(){
      this.encodingIpcrfRatingAve8 = this.encodingIpcrfNumericalQ8
    },
     calculateNumericalRatingsAverageNo9(){
      this.encodingIpcrfRatingAve9 = this.encodingIpcrfNumericalQ9+this.encodingIpcrfNumericalE9/2
    },
    
     calculateNumericalRatingsAverageNo10(){
      this.encodingIpcrfRatingAve10 = this.encodingIpcrfNumericalQ10+this.encodingIpcrfNumericalE10/2
    },
     calculateNumericalRatingsAverageNo11(){
      this.encodingIpcrfRatingAve11 = this.encodingIpcrfNumericalQ11+this.encodingIpcrfNumericalE11/2
    },
     calculateNumericalRatingsAverageNo12(){
      this.encodingIpcrfRatingAve12 = this.encodingIpcrfNumericalQ12+this.encodingIpcrfNumericalE12/2
    },

ifAdmin(){
  return this.user=='Admin'
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
     formatDate(date) {
      if (!date) return null;

      const [year, month, day] = date.split("-");
      return `${month}/${day}/${year}`;
    },
    async retrieveIpcrf() {
      if(this.user=='Admin'){
        
        this.ipcrfDemographicProfile =[]
        // this.ipcrfEncodingPart1 = []
        // this.ipcrfEncodingPart2 =[]
        const returnedAllData =await this.$store.dispatch('retrieveIpcrfInfo')
        console.log(returnedAllData.data.ipcrfDemographicProfile)
        this.ipcrfDemographicProfile = returnedAllData.data.ipcrfDemographicProfile
        //this.ipcrfEncodingPart1 = returnedAllData.data.ipcrfEncodingPart1
        this.showTable = true
        
      }else if(this.user=='Teacher'){
        this.ipcrfDemographicProfile =[]
         const returnedAllData = await this.$store.dispatch('retrieveIpcrfInfoById',this.userId)
        console.log(returnedAllData.data.ipcrfDemographicProfile)
         this.ipcrfDemographicProfile = returnedAllData.data.ipcrfDemographicProfile
          
        console.log(this.ipcrfDemographicProfile.length)
        if(this.ipcrfDemographicProfile.length==0){
          this.create=true
          this.showTable=false
        }else{
          this.showTable = true
          this.show = true
        }
      }
      // const returnedIpcrfData = await this.$store.dispatch("retrieveIpcrfInfoById");
    },

    async viewItem(item){
      this.showTable = false
      
      this.show = true
      console.log(item)
      const user = item.user_id
      const schoolYear = item.rating_period
      const data = {
        user,
        schoolYear
      }
    const returnedData = await this.$store.dispatch('retrieveIpcrfInfoBySchoolYear', data);

      console.log(returnedData)
      this.ipcrfDemographicProfile = returnedData.data.ipcrfDemographicProfile[0]
      this.ipcrfDevelopmentPlan = returnedData.data.ipcrfDevelopmentPlan[0]
      this.ipcrfEncodingPart1 = returnedData.data.ipcrfEncodingPart1
      this.ipcrfEncodingPart2 = returnedData.data.ipcrfEncodingPart2[0]
      console.log(this.ipcrfEncodingPart2)
      let selfManagement = this.ipcrfEncodingPart2.self_management.split(",")
      selfManagement = selfManagement.splice("",1)
      let teamwork = this.ipcrfEncodingPart2.teamwork.split(",")
      this.countSelfManagement = selfManagement.length
      this.countSelfTeamwork = teamwork.length
      /*innovation: (...)
professional_and_ethics: (...)
results_focus: (...)
school_year: (...)
self_management: (...)
service_orientation: (...)
teamwork: (...)*/ 
      let professionalAndEthics = this.ipcrfEncodingPart2.professional_and_ethics.split(",")
      let innovation = this.ipcrfEncodingPart2.innovation.split(",")
      let service = this.ipcrfEncodingPart2.service_orientation.split(',')
      let results = this.ipcrfEncodingPart2.results_focus.split(',')
       professionalAndEthics = professionalAndEthics.splice("",1)
        innovation = innovation.splice("",1)
         service = service.splice("",1)
          results = results.splice("",1)
         this.countProfessional = professionalAndEthics.length
          this.countInnovation = innovation.length
           this.countService = service.length
           this.countResults = results.length
  
    },
    editItems(){
      console.log(this.ipcrfDemographicProfile)
      this.empName = this.ipcrfDemographicProfile.name_of_employee
      this.empRater = this.ipcrfDemographicProfile.rater
      this.empRegion = this.ipcrfDemographicProfile.region
      this.empPosition = this.ipcrfDemographicProfile.position
      this.empRaterPosition = this.ipcrfDemographicProfile.rater_position
      this.empDivision = this.ipcrfDemographicProfile.division
      this.empId = this.ipcrfDemographicProfile.employee_id
      this.empDateReview = this.ipcrfDemographicProfile.date_of_review
      this.empDistrict = this.ipcrfDemographicProfile.district_municipality
      this.empStatus = this.ipcrfDemographicProfile.employment_status
      this.empRatingPeriod = this.ipcrfDemographicProfile.rating_period
      this.empSchoolId = this.ipcrfDemographicProfile.school_id
      this.empAge = this.ipcrfDemographicProfile.age
      this.empSchoolName = this.ipcrfDemographicProfile.school_name
      this.empSex = this.ipcrfDemographicProfile.sex
      this.empLevelTaught = this.ipcrfDemographicProfile.level_taught
      this.empYearsOfTeaching = this.ipcrfDemographicProfile.number_of_years_teaching
      this.empSchoolType = this.ipcrfDemographicProfile.school_type
      this.empGradeLevelTaught = this.ipcrfDemographicProfile.grade_level_taught
      this.empDegree = this.ipcrfDemographicProfile.highest_degree_obtained
      this.empSchoolSize = this.ipcrfDemographicProfile.school_size
      this.empSubjectTaught = this.ipcrfDemographicProfile.subject_taught
      this.empSpecialization = this.ipcrfDemographicProfile.area_of_specialization
      this.empCurricularClassification = this.ipcrfDemographicProfile.
      empSchoolYear = this.ipcrfDemographicProfile.rating_period
      this.show = false
      this.edit = true
    },
   
    back(){
      this.show=false
      this.showTable=true
    },
  

    finalizePart1: async function (){
      const user = JSON.parse(sessionStorage.user_session).id;
      const role = JSON.parse(sessionStorage.user_session).role;
      const empName = this.empName
      const empRater = this.empRater
      const empRegion = this.empRegion
      const empPosition = this.empPosition
      const empRaterPosition = this.empRaterPosition
      const empDivision = this.empDivision
      const empId = this.empId
      const empDateReview = this.empDateReview
      const empDistrict = this.empDistrict
      const empStatus = this.empStatus
      const empRatingPeriod = this.empRatingPeriod
      const empSchoolId = this.empSchoolId
      const empAge = this.empAge
      const empSchoolName = this.empSchoolName
      const empSex = this.empSex
      const empLevelTaught = this.empLevelTaught
      const empYearsOfTeaching = this.empYearsOfTeaching
      const empSchoolType = this.empSchoolType
      const empGradeLevelTaught = this.empGradeLevelTaught
      const empDegree = this.empDegree
      const empSchoolSize = this.empSchoolSize
      const empSubjectTaught = this.empSubjectTaught
      const empSpecialization = this.empSpecialization
      const empCurricularClassification = this.empCurricularClassification
      const empSchoolYear = this.schoolYear

//part 2 fields to be filled out by admin
      const cot1SubjectsTaught = this.cot1SubjectsTaught
      const cot2SubjectsTaught = this.cot2SubjectsTaught
      //cot 1 part 1 variables
      const cot1DateObserved = this.cot1DateObserved
      const cot2DateObserved = this.cot2DateObserved
      const cot1IndicatorObjNo1 = this.cot1IndicatorObjNo1
      const cot1IndicatorObjNo5 = this.cot1IndicatorObjNo5
      const cot1IndicatorObjNo7 = this.cot1IndicatorObjNo7

      const cot1RatingObjNo1 = this.cot1RatingObjNo1
      const cot1RatingObjNo5 = this.cot1RatingObjNo5
      const cot1RatingObjNo7 = this.cot1RatingObjNo7

      const cot1RpmsObjNo1 = this.cot1RpmsObjNo1
      const cot1RpmsObjNo5 = this.cot1RpmsObjNo5
      const cot1RpmsObjNo7 = this.cot1RpmsObjNo7

      //cot 2 part 1 variables
      const cot2IndicatorObjNo1 = this.cot2IndicatorObjNo1
      const cot2IndicatorObjNo5 = this.cot2IndicatorObjNo5
      const cot2IndicatorObjNo7 = this.cot2IndicatorObjNo7
      const cot2RatingObjNo1 = this.cot2RatingObjNo1
      const cot2RatingObjNo5 = this.cot2RatingObjNo5
      const cot2RatingObjNo7 = this.cot2RatingObjNo7
      const cot2RpmsObjNo1 = this.cot2RpmsObjNo1
      const cot2RpmsObjNo5 = this.cot2RpmsObjNo5
      const cot2RpmsObjNo7 = this.cot2RpmsObjNo7

      const encodingAverageObjNo1 = this.encodingAverageObjNo1
      const encodingAverageObjNo5 = this.encodingAverageObjNo5
      const encodingAverageObjNo7 = this.encodingAverageObjNo7

      const encodingIpcrfNumericalQ1 = this.encodingIpcrfNumericalQ1
      const encodingIpcrfNumericalQ2 = this.encodingIpcrfNumericalQ2
      const encodingIpcrfNumericalQ3 = this.encodingIpcrfNumericalQ3
      const encodingIpcrfNumericalQ4 = this.encodingIpcrfNumericalQ4
      const encodingIpcrfNumericalQ5 = this.encodingIpcrfNumericalQ5
      const encodingIpcrfNumericalQ6 = this.encodingIpcrfNumericalQ6
      const encodingIpcrfNumericalQ7 = this.encodingIpcrfNumericalQ7
      const encodingIpcrfNumericalQ8 = this.encodingIpcrfNumericalQ8
      const encodingIpcrfNumericalQ9 = this.encodingIpcrfNumericalQ9
      const encodingIpcrfNumericalQ10 = this.encodingIpcrfNumericalQ10
      const encodingIpcrfNumericalQ11 = this.encodingIpcrfNumericalQ11
      const encodingIpcrfNumericalQ12 = this.encodingIpcrfNumericalQ12

 
//       const encodingIpcrfNumericalE9 = this.encodingIpcrfNumericalE9
//       const encodingIpcrfNumericalE10 = this.encodingIpcrfNumericalE10
//       const encodingIpcrfNumericalE11 = this.encodingIpcrfNumericalE11
//       const encodingIpcrfNumericalE12 = this.encodingIpcrfNumericalE12

//       const encodingIpcrfNumericalT6 = this.encodingIpcrfNumericalT6
     
      const encodingIpcrfRatingAve1 = this.encodingIpcrfRatingAve1
      const encodingIpcrfRatingAve2 = this.encodingIpcrfRatingAve2
      const encodingIpcrfRatingAve3 = this.encodingIpcrfRatingAve3
      const encodingIpcrfRatingAve4 = this.encodingIpcrfRatingAve4
      const encodingIpcrfRatingAve5 = this.encodingIpcrfRatingAve5
      const encodingIpcrfRatingAve6 = this.encodingIpcrfRatingAve6
      const encodingIpcrfRatingAve7 = this.encodingIpcrfRatingAve7
      const encodingIpcrfRatingAve8 = this.encodingIpcrfRatingAve8
      const encodingIpcrfRatingAve9 = this.encodingIpcrfRatingAve9
      const encodingIpcrfRatingAve10 = this.encodingIpcrfRatingAve10
      const encodingIpcrfRatingAve11 = this.encodingIpcrfRatingAve11
      const encodingIpcrfRatingAve12 = this.encodingIpcrfRatingAve12

      const encodingScore1 = this.encodingScore1
      const encodingScore2 = this.encodingScore2
      const encodingScore3 = this.encodingScore3
      const encodingScore4 = this.encodingScore4
      const encodingScore5 = this.encodingScore5
      const encodingScore6 = this.encodingScore6
      const encodingScore7 = this.encodingScore7
      const encodingScore8 = this.encodingScore8
      const encodingScore9 = this.encodingScore9
      const encodingScore10 = this.encodingScore10
      const encodingScore11 = this.encodingScore11
      const encodingScore12 = this.encodingScore12

      const encodingAdjectivalRating1 = this.encodingAdjectivalRating1
      const encodingAdjectivalRating2 = this.encodingAdjectivalRating2
      const encodingAdjectivalRating3 = this.encodingAdjectivalRating3
      const encodingAdjectivalRating4 = this.encodingAdjectivalRating4
      const encodingAdjectivalRating5 = this.encodingAdjectivalRating5
      const encodingAdjectivalRating6 = this.encodingAdjectivalRating6
      const encodingAdjectivalRating7 = this.encodingAdjectivalRating7
      const encodingAdjectivalRating8 = this.encodingAdjectivalRating8
      const encodingAdjectivalRating9 = this.encodingAdjectivalRating9
      const encodingAdjectivalRating10 = this.encodingAdjectivalRating10
      const encodingAdjectivalRating11 = this.encodingAdjectivalRating11
      const encodingAdjectivalRating12 = this.encodingAdjectivalRating12

      // empAdjRating1 = this.
      // empAdjRating2 = this.

      const empFinalRating = this.empFinalRating
      const empFinalAdjRating = this.empFinalAdjRating

      const part1ApprovingAuthority = this.part1ApprovingAuthority
      const approvingAuthPosition = this.approvingAuthPosition
      const data ={
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

 
//       encodingIpcrfNumericalE9,
//       encodingIpcrfNumericalE10,
//       encodingIpcrfNumericalE11,
//       encodingIpcrfNumericalE12,

//       encodingIpcrfNumericalT6,
     
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
      }
      if(this.create == true){
        const returnedData = await this.$store.dispatch("createIpcrfPart1", data)
        console.log(returnedData)
      }else{
        const returnedData = await this.$store.dispatch("updateIpcrfPart1", data)
        console.log(returnedData)
      }
      
      
    },

    finalizePart2: async function (){
      const selfManagement1 = this.selfManagement1
      const selfManagement2 = this.selfManagement2
      const selfManagement3 = this.selfManagement3
      const selfManagement4 = this.selfManagement4
      const selfManagement5 = this.selfManagement5
      const teamwork1 = this.teamwork1
      const teamwork2 = this.teamwork2
      const teamwork3 = this.teamwork3
      const teamwork4 = this.teamwork4
      const teamwork5 = this.teamwork5
      const prof1 = this.prof1
      const prof2 = this.prof2
      const prof3 = this.prof3
      const prof4 = this.prof4
      const prof5 = this.prof5
      const service1 = this.service1
      const service2 = this.service2
      const service3 = this.service3
      const service4 = this.service4
      const service5 = this.service5
      const results1 =this.results1
      const results2 = this.results2
      const results3 = this.results3
      const results4 = this.results4
      const results5 = this.results5
      const innovation1 = this.innovation1
      const innovation2 = this.innovation2
      const innovation3 = this.innovation3
      const innovation4 = this.innovation4
      const innovation5 = this.innovation5
    const user = JSON.parse(sessionStorage.getItem('user_session')).id
   
     const data ={ 
       user,
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
      innovation5
      }
      console.log(data)
    
    const returnedData = await this.$store.dispatch('createIpcrfPart2', data);
    console.log(returnedData)
    },

    finalizePart4: async function (){
        const user = JSON.parse(sessionStorage.user_session).id;
      const role = JSON.parse(sessionStorage.user_session).role;
      const strengthsFunctional = this.strengthsFunctional
      const developmentNeedsFunctional = this.developmentNeedsFunctional
      const learningObjectivesFunctional = this.learningObjectivesFunctional
      const interventionFunctional = this.interventionFunctional
      const timelineFunctional = this.timelineFunctional
      const resourcesNeededFunctional = this.resourcesNeededFunctional
      const strengthsCore = this.strengthsCore
      const developmentCore = this.developmentCore
      const learningObjectivesCore = this.learningObjectivesCore
      const interventionCore = this.interventionCore
      const timelineCore = this.timelineCore
      const resourcesNeededCore = this.resourcesNeededCore
      const feedback = this.feedback
      const rateePart4 = this.rateePart4
      const raterPart4 = this.raterPart4
      const approvingAuthorityPart4 = this.approvingAuthorityPart4
      const empRatingPeriod = this.empRatingPeriod

    const data = {
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
    
    }
  console.log(data)
    const returnedIpcrfData = await this.$store.dispatch("createIpcrfPart4", data);
    console.log(returnedIpcrfData)
    }
  }
};
</script>