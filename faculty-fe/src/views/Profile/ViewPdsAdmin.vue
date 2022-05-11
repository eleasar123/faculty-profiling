<template >
<v-main>
   <v-container fluid style="border:solid 1px black" class="pa-0 text-center">
      <v-btn @click="back" class="float-left">Back</v-btn>
    
      <v-tabs >
        <v-tab>C1</v-tab>
        <v-tab-item>
          <v-card-title label="Search" single-line hide-details
            ><span>CS Form N0.212<br />Revised 2017</span>
            <span>Personal Data Sheet</span>
          </v-card-title>
          <v-card-subtitle label="Search" single-line hide-details>
            WARNING: Any misrepresentation made in the Personal Data Sheet and
            the Work Experience Sheet shall cause the filing of
            administrative/criminal case/s against the person concerned.
          </v-card-subtitle>
          <v-card-text label="Search" single-line hide-details>
            READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS)
            BEFORE ACCOMPLISHING THE PDS FORM.
          </v-card-text>

          <v-simple-table
            height="auto"
            class="pa-0  ma-0"
            max-width="100vw"
          >
            <template v-slot:default>
              <thead cols="4">
                <tr clas="pa-0">
                  <th colspan="8">I. PERSONAL INFORMATION</th>
                </tr>
              </thead>
              <tbody
                class="text-center"
                color="secondary"
                v-for="row in pdsPersonalInfo"
                :key="row.id"
              >
                <tr>
                  <td width="50px" colspan="2" style="text-align: left">
                    2. SURNAME
                  </td>
                  <td colspan="8">
                    {{ row.last_name }}
                  </td>
                </tr>

                <tr>
                  <td width="50px" colspan="2" style="text-align: left">
                    FIRST NAME
                  </td>
                  <td colspan="4">
                    {{ row.first_name }}
                  </td>
                  <td colspan="4">
                    {{ row.suffix }}
                  </td>
                </tr>
                <tr>
                  <td width="80px" colspan="2" style="text-align: left">
                    MIDDLE NAME
                  </td>
                  <td colspan="8">
                    {{ row.middle_name }}
                  </td>
                </tr>

                <tr>
                  <td max-width="100px" colspan="2" style="text-align: left">
                    DATE OF BIRTH <br />
                    (mm/dd/yyyy)
                  </td>
                  <td colspan="2">
                    {{ row.date_of_birth }}
                  </td>
                  <td rowspan="3" colspan="2">
                    16.CITIZENSHIP<br />If holder of dual citizenship,<br />please
                    indicate the details.
                  </td>
                  <td colspan="4">
                    {{ row.citizenship }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">PLACE OF BIRTH</td>
                  <td colspan="2">
                    {{ row.place_of_birth }}
                  </td>

                  <td colspan="4">
                    {{ row.dual_citizenship }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">SEX</td>
                  <td colspan="2">
                    {{ row.sex }}
                  </td>
                  <td colspan="4">
                    {{ row.dual_citizenship }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left" rowspan="2">
                    CIVIL STATUS
                  </td>
                  <td rowspan="2" colspan="2">
                    {{ row.civil_status }}
                  </td>
                  <td rowspan="4" colspan="2">
                    RESIDENTIAL<br />
                    ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                    ZIP CODE
                  </td>
                  <td rowspan="1" colspan="2">
                    {{ row.residential_address_house_no }}
                  </td>
                  <td rowspan="1" colspan="2">
                    {{ row.residential_address_street }}
                  </td>
                </tr>

                <tr>
                  <td rowspan="1" colspan="2">
                    {{ row.residential_address_subdivision }}
                  </td>
                  <td rowspan="1" colspan="2">
                    {{ row.residential_address_barangay }}
                  </td>
                </tr>

                <tr>
                  <td colspan="2" style="text-align: left">HEIGHT (m)</td>
                  <td colspan="2">
                    {{ row.height }}
                  </td>
                  <td colspan="2">
                    {{ row.residential_address_city }}
                  </td>
                  <td colspan="2">
                    {{ row.residential_address_province }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">WEIGHT (kg)</td>
                  <td colspan="2">
                    {{ row.weight }}
                  </td>

                  <td colspan="4">
                    {{ row.residential_address_zip_code }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">BLOOD TYPE</td>
                  <td rowspan="1" colspan="2">
                    {{ row.blood_type }}
                  </td>
                  <td rowspan="4" colspan="2">
                    PERMANENT ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                    ZIP CODE
                  </td>
                  <td colspan="2">
                    {{ row.permanent_address_house_no }}
                  </td>
                  <td colspan="2">
                    {{ row.permanent_address_street }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">GSIS ID NO.</td>
                  <td colspan="2">
                    {{ row.gsis_id_no }}
                  </td>
                  <td colspan="2">
                    {{ row.permanent_address_subdivision }}
                  </td>
                  <td colspan="2">
                    {{ row.permanent_address_barangay }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">PAG-IBIG ID NO.</td>
                  <td colspan="2">
                    {{ row.pag_ibig_id_no }}
                  </td>
                  <td colspan="2">
                    {{ row.permanent_address_city }}
                  </td>
                  <td colspan="2">
                    {{ row.permanent_address_province }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">PHILHEALTH NO.</td>
                  <td colspan="2">
                    {{ row.philhealth_no }}
                  </td>
                  <td colspan="3">
                    {{ row.permanent_zip_code }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">SSS NO.</td>
                  <td colspan="2">
                    {{ row.sss_no }}
                  </td>
                  <td>19.TELEPHONE NO.</td>
                  <td colspan="4">
                    {{ row.telephone_no }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">14.TIN NO.</td>
                  <td colspan="2">
                    {{ row.tin_no }}
                  </td>
                  <td>20.MOBILE NO.</td>
                  <td colspan="4">
                    {{ row.mobile_no }}
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align: left">
                    AGENCY EMPLOYEE NO.
                  </td>
                  <td colspan="2">
                    {{ row.agency_employee_no }}
                  </td>
                  <td>21. E-MAIL ADDRESS (if any)</td>

                  <td colspan="4">
                    {{ row.email_address }}
                  </td>
                </tr>
              </tbody>
            </template>
          </v-simple-table>
         <v-simple-table height="auto" class="pa-0 pa-0 ma-0" width="100vw">
            <template v-slot:default>
              <thead>
                <tr clas="pa-0">
                  <th colspan="5">II. FAMILY BACKGROUND</th>
                </tr>
              </thead>
              <tbody
                class=""
                color="secondary"
                v-for="row in pdsFamilyBackground"
                :key="row.id"
              >
                <tr>
                  <td width="50px">SPOUSE'S SURNAME</td>
                  <td colspan="4">
                    {{ row.spouse_last_name }}
                  </td>
                  <td>
                    23. NAME of CHILDREN <br />(Write full name and list all)
                  </td>
                  <td>DATE OF BIRTH (mm/dd/yyyy)</td>
                </tr>

                <tr>
                  <td width="80px">FIRST NAME</td>
                  <td colspan="3">
                    {{ row.spouse_first_name }}
                  </td>
                  <td colspan="1">
                    {{ row.spouse_suffix }}
                  </td>
                  <td rowspan="6">
                    <v-container
                      v-for="child in children"
                      :key="child.id"
                      class="grey lighten-5"
                    >
                      <v-col cols="12" sm="8">{{ child.child_name }} </v-col>
                    </v-container>
                  </td>
                  <td colspan="2">
                    {{ row.spouse_date_of_birth }}
                  </td>
                </tr>
                <tr>
                  <td width="80px">MIDDLE NAME</td>
                  <td colspan="4">
                    {{ row.spouse_middle_name }}
                  </td>

                  <td colspan="1"></td>
                </tr>

                <tr>
                  <td max-width="100px">OCCUPATION</td>
                  <td colspan="4">
                    {{ row.spouse_occupation }}
                  </td>

                  <td colspan="1"></td>
                </tr>
                <tr>
                  <td max-width="100px">EMPLOYER/BUSINESS NAME</td>
                  <td colspan="4">
                    {{ row.spouse_employer }}
                  </td>

                  <td colspan="1"></td>
                </tr>
                <tr>
                  <td max-width="100px">BUSINESS ADDRESS</td>
                  <td colspan="4">
                    {{ row.spouse_business_address }}
                  </td>

                  <td colspan="1"></td>
                </tr>
                <tr>
                  <td max-width="100px">TELEPHONE NO.</td>
                  <td colspan="4">
                    {{ row.spouse_telephone_no }}
                  </td>
                  <td colspan="1"></td>
                </tr>

                <tr>
                  <td>25. FATHER'S SURNAME</td>
                  <td colspan="4">
                    {{ row.father_last_name }}
                  </td>
                  <td colspan="1"></td>
                  <td colspan="1">
                    {{ row.father_date_of_birth }}
                  </td>
                </tr>
                <tr>
                  <td width="80px">FIRST NAME</td>
                  <td colspan="3">
                    {{ row.father_first_name }}
                  </td>
                  <td colspan="1">
                    {{ row.father_suffix }}
                  </td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
                <tr>
                  <td width="80px">MIDDLE NAME</td>
                  <td colspan="4">
                    {{ row.father_middle_name }}
                  </td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
                <tr>
                  <td>26. MOTHER'S MAIDEN NAME</td>
                  <td colspan="4">
                    {{ row.mother_maiden_name }}
                  </td>
                  <td colspan="1"></td>
                  <td colspan="1">
                    {{ row.mother_date_of_birth }}
                  </td>
                </tr>
                <tr>
                  <td>SURNAME</td>
                  <td colspan="4">
                    {{ row.mother_last_name }}
                  </td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
                <tr>
                  <td width="80px">FIRST NAME</td>
                  <td colspan="4">
                    {{ row.mother_first_name }}
                  </td>

                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
                <tr>
                  <td width="80px">MIDDLE NAME</td>
                  <td colspan="4">
                    {{ row.mother_middle_name }}
                  </td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
              </tbody>
            </template>
          </v-simple-table>
          <v-simple-table height="auto" class="pa-0 pa-0 ma-0" width="100vw">
            <template v-slot:default>
              <thead cols="4">
                <tr clas="pa-0">
                  <th colspan="4">III. EDUCATIONAL BACKGROUND</th>
                </tr>
                <tr>
                  <td rowspan="2">LEVEL</td>
                  <td rowspan="2">NAME OF SCHOOL<br />(Write in full)</td>
                  <td rowspan="2">
                    BASIC EDUCATION/DEGREE/COURSE<br />(Write in full)
                  </td>
                  <td colspan="2">PERIOD OF ATTENDANCE<br />From To</td>
                  <td rowspan="2">
                    HIGHEST LEVEL/UNITS EARNED (if not graduated)
                  </td>
                  <td rowspan="2">YEAR GRADUATED</td>
                  <td rowspan="2">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</td>
                </tr>

                <tr>
                  <td>From</td>
                  <td>To</td>
                </tr>
              </thead>
              <tbody class="text-center" color="secondary">
                <tr v-for="row in pdsEducationalBackground" :key="row.id">
                  <td colspan="1">
                    {{ row.level }}
                  </td>
                  <td colspan="1">
                    {{ row.name_of_school }}
                  </td>
                  <td colspan="1">
                    {{ row.basic_education_course }}
                  </td>
                  <td colspan="1">
                    {{ row.period_of_attendance_from }}
                  </td>
                  <td colspan="1">
                    {{ row.period_of_attendance_to }}
                  </td>
                  <td colspan="1">
                    {{ row.highest_level_units_earned }}
                  </td>
                  <td colspan="1">
                    {{ row.year_graduated }}
                  </td>
                  <td colspan="1">
                    {{ row.academic_honors_received }}
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td>SIGNATURE</td>
                  <td colspan="4">
                    {{ pdsPersonalInfo[0].signature }}
                  </td>
                  <td colspan="1" class="pl-10">DATE</td>
                  <td colspan="4">
                    {{ pdsPersonalInfo[0].date_signed }}
                  </td>
                </tr>
              </tfoot>
            </template>
          </v-simple-table>
        </v-tab-item>
        <v-tab>C2</v-tab>
        <v-tab-item>
          <v-simple-table height="auto" class="pa-0 pa-0 ma-0" width="100vw">
            <thead>
              <tr>
                <th colspan="8" style="text-align: left">
                  IV. CIVIL SERVICE ELIGIBILITY
                </th>
              </tr>

              <tr>
                <th
                  rowspan="2"
                  colspan="2"
                  style="text-align: left"
                  class="text-wrap"
                >
                  CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/
                  CSEE BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  RATING <br />(If Applicable)
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  DATE OF EXAMINATION / CONFERMENT
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  PLACE OF EXAMINATION / CONFERMENT
                </th>
                <th colspan="2" style="text-align: left">
                  LICENSE (if applicable)
                </th>
              </tr>
              <tr>
                <th style="text-align: left">NUMBER</th>
                <th style="text-align: left">Date of Validity</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="row in pdsCivilServiceEligibility" :key="row.id">
                <td colspan="2">
                  {{ row.career_service }}
                </td>
                <td colspan="2">
                  {{ row.rating }}
                </td>
                <td colspan="2">
                  {{ row.date_of_examination }}
                </td>
                <td colspan="2">
                  {{ row.place_of_examination }}
                </td>
                <td colspan="1">
                  {{ row.license_number }}
                </td>
                <td colspan="1">
                  {{ row.license_date_of_validity }}
                </td>
              </tr>
            </tbody>
          </v-simple-table>
          <v-simple-table height="auto" class="pa-0 pa-0 ma-0" width="100vw">
            <thead>
              <tr>
                <th colspan="8" style="text-align: left">
                  V. WORK EXPERIENCE <br />
                  (Include private employment. Start from your recent work.)
                  Description of duties should be indicated in the attached Work
                  Experience sheet.
                </th>
              </tr>

              <tr>
                <th colspan="2" style="text-align: left">
                  28. INCLUSIVE DATES (mm/dd/yyyy)
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  POSITION TITLE (Write in full/Do not abbreviate)
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  DEPARTMENT / AGENCY / OFFICE / COMPANY (Write in full/Do not
                  abbreviate)
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  MONTHLY SALARY
                </th>
                <th colspan="2" style="text-align: left">
                  SALARY/ JOB/ PAY GRADE (if applicable)& STEP (Format "00-0")/
                  INCREMENT
                </th>
                <th colspan="2" style="text-align: left">
                  STATUS OF APPOINTMENT
                </th>
                <th colspan="2" style="text-align: left">
                  GOV'T SERVICE (Y/ N)
                </th>
              </tr>
              <tr>
                <th style="text-align: left">From</th>
                <th style="text-align: left">To</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="row in pdsWorkExperience" :key="row.id">
                <td colspan="1">
                  {{ row.work_inclusive_dates_from }}
                </td>
                <td colspan="1">
                  {{ row.work_inclusive_dates_to }}
                </td>
                <td colspan="2">
                  {{ row.position }}
                </td>
                <td colspan="2">
                  {{ row.department }}
                </td>
                <td colspan="2">
                  {{ row.monthly_salary }}
                </td>
                <td colspan="2">
                  {{ row.salary_grade }}
                </td>
                <td colspan="2">
                  {{ row.status_of_appointment }}
                </td>
                <td colspan="2">
                  {{ row.government_service }}
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>SIGNATURE</td>
                <td colspan="3"></td>
                <td colspan="1">DATE</td>
                <td colspan="3"></td>
              </tr>
            </tfoot>
          </v-simple-table>
        </v-tab-item>
        <v-tab>C3</v-tab>
        <v-tab-item>
          <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
            <thead>
              <tr>
                <th colspan="8" style="text-align: left">
                  VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT /
                  PEOPLE / VOLUNTARY ORGANIZATION/S
                </th>
              </tr>

              <tr>
                <th rowspan="2" colspan="2" style="text-align: left">
                  29. NAME & ADDRESS OF ORGANIZATION (Write in full)
                </th>
                <th colspan="2" style="text-align: left">
                  INCLUSIVE DATES (mm/dd/yyyy)
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  NUMBER OF HOURS
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  POSITION / NATURE OF WORK
                </th>
              </tr>
              <tr>
                <th style="text-align: left">From</th>
                <th style="text-align: left">To</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="row in pdsVoluntaryWorkInvolvement" :key="row.id">
                <td colspan="2">
                  {{ row.organization_name_and_address }}
                </td>
                <td colspan="1">
                  {{ row.voluntary_inclusive_dates_from }}
                </td>
                <td colspan="1">
                  {{ row.voluntary_inclusive_dates_to }}
                </td>
                <td colspan="2">
                  {{ row.number_of_hours }}
                </td>
                <td colspan="2">
                  {{ row.position }}
                </td>
              </tr>
            </tbody>
          </v-simple-table>
          <v-simple-table height="auto" class="pa-0 pa-0 ma-0" width="100vw">
            <thead>
              <tr>
                <th colspan="8" style="text-align: left">
                  VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING
                  PROGRAMS ATTENDED<br />(Start from the most recent
                  L&D/training program and include only the relevant
                  L&D/training taken for the last five (5) years for Division
                  Chief/Executive/Managerial positions)
                </th>
              </tr>

              <tr>
                <th rowspan="2" colspan="2" style="text-align: left">
                  30. TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING
                  PROGRAMS (Write in full)
                </th>
                <th colspan="2" style="text-align: left">
                  INCLUSIVE DATES OF ATTENDANCE (mm/dd/yyyy)
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  NUMBER OF HOURS
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  Type of LD ( Managerial/ Supervisory/ Technical/etc)
                </th>
                <th rowspan="2" colspan="2" style="text-align: left">
                  CONDUCTED/ SPONSORED BY (Write in full)
                </th>
              </tr>
              <tr>
                <th style="text-align: left">From</th>
                <th style="text-align: left">To</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="row in pdsLearningAndDevelopment" :key="row.id">
                <td colspan="2">
                  {{ row.learning_and_development_interventions }}
                </td>
                <td colspan="1">
                  {{ row.learning_inclusive_dates_from }}
                </td>
                <td colspan="1">
                  {{ row.learning_inclusive_dates_to }}
                </td>
                <td colspan="2">
                  {{ row.number_of_hours }}
                </td>
                <td colspan="2">
                  {{ row.type_of_ld }}
                </td>
                <td colspan="2">
                  {{ row.conducted_by }}
                </td>
              </tr>
            </tbody>
          </v-simple-table>

          <v-container class="grey lighten-5">
            <v-row
              ><v-col cols="12" class="sm-12"
                >VIII. OTHER INFORMATION</v-col
              ></v-row
            >
            <v-row no-gutters>
              <v-col cols="12" sm="4">
                <v-card class="pa-2" outlined tile>
                  <v-card-title class="text-caption">
                    31. SPECIAL SKILLS AND HOBBIES <br />(Write in full)
                  </v-card-title>
                  <v-card-text>
                    <v-container>
                      <v-container
                        v-for="row in pdsOtherInfoSpecialSkills"
                        :key="row.id"
                      >
                        <v-container>
                          {{ row.special_skills_and_hobbies }}</v-container
                        >
                      </v-container>
                    </v-container>
                  </v-card-text>
                </v-card>
              </v-col>
              <v-col cols="12" sm="4">
                <v-card class="pa-2" outlined tile>
                  <v-card-title class="text-caption">
                    32. NON-ACADEMIC DISTINCTIONS/RECOGNITION <br />(Write in
                    full)
                  </v-card-title>
                  <v-card-text>
                    <v-container>
                      <v-container
                        v-for="row in pdsOtherInfoNonacademicDistinctions"
                        :key="row.id"
                      >
                        <v-container>{{
                          row.non_academic_distinctions
                        }}</v-container>
                      </v-container>
                    </v-container>
                  </v-card-text>
                </v-card>
              </v-col>
              <v-col cols="12" sm="4">
                <v-card class="pa-2" outlined tile>
                  <v-card-title class="text-caption text-wrap">
                    33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION <br />(Write in
                    full)
                  </v-card-title>
                  <v-card-text class="text-center">
                    <v-container>
                      <v-container
                        v-for="row in pdsOtherInfoAssociationMembers"
                        :key="row.id"
                      >
                        <v-container>{{ row.association_members }}</v-container>
                      </v-container>
                    </v-container>
                  </v-card-text>
                </v-card>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" sm="3"> SIGNATURE </v-col>
              <v-col cols="12" sm="3"> </v-col>
              <v-col cols="12" sm="3"> DATE </v-col>
              <v-col cols="12" sm="3"> </v-col>
            </v-row>
          </v-container>
        </v-tab-item>
        <v-tab>C4</v-tab>
        <v-tab-item v-for="addInfo in pdsAdditionalInfo" :key="addInfo.id">
          <v-container fluid v-for="row in pdsQuestions" :key="row.id">
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card class="pa-6" outlined tile height="200px">
                  34. Are you related by consanguinity or affinity to the
                  appointing or recommending authority, or to the chief of
                  bureau or office or to the person who has immediate
                  supervision over you in the Office, Bureau or Department where
                  you will be apppointed, a. within the third degree? b. within
                  the fourth degree (for Local Government Unit - Career
                  Employees)?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="200px">
                  <span>If YES, give details:</span><br />
                  {{ row.question_thirty_four }}
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card class="pa-4" outlined tile height="auto">
                  35. a. Have you ever been found guilty of any administrative
                  offense?<br />
                  b. Have you been criminally charged before any court?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-4" outlined tile height="auto">
                  {{ row.question_thirty_five_a }}<br><br>
                  <span class="ma-3">If YES, give details: </span><br />
                  <label>Date Filed:</label>
                  {{ row.question_thirty_five_b_date_filed }}<br />
                  <label>Status of Case/s:</label>
                  {{ row.question_thirty_five_B_status_of_case }}
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card class="pa-6" outlined tile height="150px">
                  36. Have you ever been convicted of any crime or violation of
                  any law, decree, ordinance or regulation by any court or
                  tribunal?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="150px">
                  {{ row.question_thirty_six }}
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card class="pa-6" outlined tile height="150px">
                  37. Have you ever been separated from the service in any of
                  the following modes: resignation, retirement, dropped from the
                  rolls, dismissal, termination, end of term, finished contract
                  or phased out (abolition) in the public or private
                  sector?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="150px">
                  {{ row.question_thirty_seven }}
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card class="pa-6" outlined tile height="200px">
                  38. a. Have you ever been a candidate in a national or local
                  election held within the last year (except Barangay
                  election)?<br />
                  b. Have you resigned from the government service during the
                  three (3)-month period before the last election to
                  promote/actively campaign for a national or local
                  candidate?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="200px">
                  {{ row.question_thirty_eight }}
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card class="pa-6" outlined tile height="150px">
                  39. Have you acquired the status of an immigrant or permanent
                  resident of another country?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="150px">
                  {{ row.question_thirty_nine }}
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card class="pa-6" outlined tile height="330px">
                  40. 100% 10 C41:F42 Pursuant to: (a) Indigenous People's Act
                  (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and
                  (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer
                  the following items: Screen reader support enabled. Pursuant
                  to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for
                  Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act
                  of 2000 (RA 8972), please answer the following items: Turn on
                  screen reader support a. Are you a member of any indigenous
                  group? b. Are you a person with disability? c. Are you a solo
                  parent?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="330px">
                  {{ row.question_forty_a }}<br />
                  {{ row.question_forty_b }}<br />
                  {{ row.question_forty_c }}<br />
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters class="ma-0">
              <v-col cols="12" sm="8">
                <v-card class="pa-6" outlined tile height="auto">
                  <v-card-text class="text-subtitle-2"
                    >REFERENCES
                    <span class="text-body-2" style="color: red"
                      >(Person not related by consanguinity or affinity to
                      applicant /appointee)</span
                    ></v-card-text
                  >

                  <v-simple-table>
                    <thead>
                      <tr>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>TEL. NO.</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        height="10px"
                        v-for="row in pdsReferences"
                        :key="row.id"
                      >
                        <td>
                          {{ row.reference_name }}
                        </td>
                        <td>
                          {{ row.reference_address }}
                        </td>
                        <td>
                          {{ row.reference_tel_no }}
                        </td>
                      </tr>
                    </tbody>
                  </v-simple-table>
                </v-card>
              </v-col>
              <v-col cols="12" sm="4">
                <v-card class="pa-3" outlined tile height="300px">
                  <v-card-text class="ma-5 pa-10 text-wrap"
                    >ID picture taken within the last 6 months 3.5 cm. X 4.5 cm
                    (passport size) With full and handwritten name tag and
                    signature over printed name Computer generated or
                    photocopied picture is not acceptable</v-card-text
                  >
                  <v-container class="">
                    {{ addInfo.photo }}
                  </v-container>
                </v-card>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" sm="8">
                <v-card
                  class=""
                  outlined
                  tile
                  height="auto"
                  style="font-size: 12px"
                >
                  I declare under oath that I have personally accomplished this
                  Personal Data Sheet which is a true, correct and complete
                  statement pursuant to the provisions of pertinent laws, rules
                  and regulations of the Republic of the Philippines. I
                  authorize the agency head/authorized representative to
                  verify/validate the contents stated herein. I agree that any
                  misrepresentation made in this document and its attachments
                  shall cause the filing of administrative/criminal case/s
                  against me.
                </v-card>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" sm="4">
                <v-card class="pa-1">
                  <v-card-subtitle class="text-center">
                    Government Issued ID (i.e.Passport, GSIS, SSS, PRC, Driver's
                    License, etc.) PLEASE INDICATE ID Number and Date of
                    Issuance
                  </v-card-subtitle>

                  <v-container
                    class="text-no-wrap"
                    height="10px"
                    style="font-size: 10px"
                    >Government Issued ID:
                    {{ addInfo.government_id }}
                  </v-container>
                  <v-container height="10px" style="font-size: 10px"
                    >ID/License/Passport No.:
                    {{ addInfo.id_no }}
                  </v-container>
                  <v-container height="10px" style="font-size: 10px"
                    >Date/Place of Issuance:
                    {{ addInfo.date_place_of_issuance }}</v-container
                  >
                </v-card>
              </v-col>
              <v-col cols="12" sm="4">
                <v-card>
                  <v-container>
                    {{ addInfo.signature }}
                  </v-container>
                  <v-card-subtitle
                    >Signature (Sign inside the box)</v-card-subtitle
                  >
                  <v-container>{{
                    addInfo.oath_date_accomplished
                  }}</v-container>
                  <v-card-subtitle>Date Accomplished</v-card-subtitle>
                </v-card>
              </v-col>
              <v-col cols="12" sm="4">
                <v-card>
                  <v-container>{{ addInfo.right_thumbmark }}</v-container>
                  <v-card-subtitle>Right Thumbmark</v-card-subtitle>
                </v-card>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" sm="12" style="border: none">
                SUBSCRIBED AND SWORN to before me this ,
                <span width="200px">{{ addInfo.sworn_date }}</span>
                exhibiting his/her validly issued government ID as indicated
                above.
              </v-col>
            </v-row>
            <v-card
              class="pa-5 text-center"
              width="400px"
              align="center"
              justify="center"
              style="margin-left: auto; margin-right: auto"
            >
              {{ addInfo.person_administering_oath }}
              <span>Person Administering Oath</span>
            </v-card>
          </v-container>
          <!-- </tbody>
        
        </v-simple-table> -->
          <v-btn class="primary" @click="finalizePds('create')"
            >Print C1-4</v-btn
          >
        </v-tab-item>
      </v-tabs>
      </v-container>
      </v-main>
</template>
<script>
export default {
  data() {
    return{
      pds:[],
      pdsPersonalInfo: [],
      pdsFamilyBackground: [],
      pdsEducationalBackground:[],
      pdsCivilServiceEligibility: [],
      pdsWorkExperience: [],
      pdsVoluntaryWorkInvolvement: [],
      pdsLearningAndDevelopment: [],
      pdsOtherInfoSpecialSkills: [],
      pdsOtherInfoNonacademicDistinctions: [],
      pdsOtherInfoAssociationMembers: [],
      pdsReferences: [],
      pdsQuestions: [],
      pdsAdditionalInfo: [],
      children: []
    };
  },
  created() {
    console.log(this.$route.query.pdsData)
    
    console.log(sessionStorage.getItem('pdsPersonalInfo'))
    this.pdsPersonalInfo.push(JSON.parse(sessionStorage.getItem('pdsPersonalInfo')))
    this.pdsFamilyBackground.push(JSON.parse(sessionStorage.getItem('pdsFamilyBackground')))
    this.pdsEducationalBackground.push(JSON.parse(sessionStorage.getItem('pdsEducationalBackground')))
    this.pdsCivilServiceEligibility.push(JSON.parse(sessionStorage.getItem('pdsCivilServiceEligibility')))
    this.pdsWorkExperience.push(JSON.parse(sessionStorage.getItem('pdsWorkExperience')))
    this.pdsVoluntaryWorkInvolvement.push(JSON.parse(sessionStorage.getItem('pdsVoluntaryWorkInvolvement')))
    this.pdsLearningAndDevelopment.push(JSON.parse(sessionStorage.getItem('pdsLearningAndDevelopment')))
    this.pdsOtherInfoSpecialSkills.push(JSON.parse(sessionStorage.getItem('pdsOtherInfoSpecialSkills')))
    this.pdsOtherInfoNonacademicDistinctions.push(JSON.parse(sessionStorage.getItem('pdsOtherInfoNonacademicDistinctions')))
    this.pdsOtherInfoAssociationMembers.push(JSON.parse(sessionStorage.getItem('pdsOtherInfoAssociationMembers')))
    this.pdsReferences.push(JSON.parse(sessionStorage.getItem('pdsReferences')))
    this.pdsQuestions.push(JSON.parse(sessionStorage.getItem('pdsQuestions')))
    this.pdsAdditionalInfo.push(JSON.parse(sessionStorage.getItem('pdsAdditionalInfo')))
    this.children.push(JSON.parse(sessionStorage.getItem('children')))
    console.log(this.pdsFamilyBackground)
  },

  methods: {
    back: function(){
      this.$router.push("/personalDataSheet")
    },
    },
  };
</script>
