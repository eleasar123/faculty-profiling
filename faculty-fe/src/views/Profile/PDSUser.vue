<template>
  <v-container class="pa-0 ma-0 mr-0 pt-2">
    <v-container v-if="user == 'Admin' && edit == false">
      <v-card>
        <v-card-title>
          Personal Data Sheet
          <v-spacer></v-spacer>
          <v-text-field
            v-model="search"
            append-icon="mdi-magnify"
            label="Search"
            single-line
            hide-details
            dense
            style="width: 50%"
          ></v-text-field>
        </v-card-title>
        <v-data-table
          :headers="headers"
          :items="pds"
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
    <v-btn @click="editPds" class="float-right ma-4">Edit</v-btn>
    <!-- <v-btn @click="print">Print</v-btn> -->
    <v-container
      v-if="create == false && user == 'Teacher' && edit == false"
      id="printMe"
      class="ma-0 mt-6 text-center"
      style=""
    >
      <v-card class="ma-0 text-left" style="border: solid 1px">
        <v-card-title label="Search" single-line hide-details
          ><span>CS Form N0.212</span>
          <v-container fluid class="ml-auto mr-auto px-2">
            <span> Revised 2017</span
            ><span
              class=""
              style="
                font-size: 35px;
                margin-left: 25%;

                font-weight: bolder;
                font-family: fantasy;
              "
              >Personal Data Sheet</span
            ></v-container
          >
        </v-card-title>
        <v-card-subtitle label="Search" single-line hide-details>
          WARNING: Any misrepresentation made in the Personal Data Sheet and the
          Work Experience Sheet shall cause the filing of
          administrative/criminal case/s against the person concerned.
        </v-card-subtitle>
        <v-card-text label="Search" single-line hide-details>
          READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS)
          BEFORE ACCOMPLISHING THE PDS FORM.
        </v-card-text>
      </v-card>
      <b-container
        style="
          border: solid 1px black;
          background-color: rgb(150, 150, 150);
          color: white;
        "
        class="text-left"
      >
        I. PERSONAL INFORMATION</b-container
      >
      <v-simple-table
        class="pa-0 mb-0 text-center pdsA"
        style="border: solid 1px"
        v-for="row in pdsPersonalInfo"
        :key="row.id"
      >
        <colgroup>
          <col width="150px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
        </colgroup>

        <tr style="height: 30px; font-size: 10px">
          <td
            colspan="1"
            style="
              text-align: left;
              font-size: 10px;
              border: solid 1px black;
              border-bottom: none;
              background-color: rgb(234, 234, 234);
            "
          >
            2. SURNAME
          </td>
          <td colspan="7" style="font:size:10px">
            {{ row.last_name }}
          </td>
        </tr>

        <tr style="height: 30px; font-size: 10px">
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              border-top: none;
              border-bottom: none;
              background-color: rgb(234, 234, 234);
              width: 100px;
            "
          >
            FIRST NAME
          </td>
          <td colspan="4">
            {{ row.first_name }}
          </td>
          <td
            colspan="3"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            {{ row.suffix }}
          </td>
        </tr>
        <tr style="height: 30px; font-size: 10px">
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              border-top: none;
              background-color: rgb(234, 234, 234);
            "
          >
            MIDDLE NAME
          </td>
          <td colspan="7">
            {{ row.middle_name }}
          </td>
        </tr>

        <tr style="height: 30px; font-size: 10px">
          <td
            max-width="100px"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            DATE OF BIRTH <br />
            (mm/dd/yyyy)
          </td>
          <td colspan="2">
            {{ row.date_of_birth }}
          </td>
          <td
            colspan="2"
            rowspan="3"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            16.CITIZENSHIP<br />If holder of dual citizenship,<br />please
            indicate the details.
          </td>
          <td colspan="3">
            {{ row.citizenship }}
          </td>
        </tr>
        <tr style="height: 30px; font-size: 10px">
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PLACE OF BIRTH
          </td>
          <td colspan="2">
            {{ row.place_of_birth }}
          </td>

          <td colspan="3">
            {{ row.country_of_citizenship }}
          </td>
        </tr>
        <tr style="height: 30px; font-size: 10px">
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            SEX
          </td>
          <td colspan="2">
            {{ row.sex }}
          </td>
          <td colspan="3">
            {{ row.dual_citizenship }}
          </td>
        </tr>
        <tr style="height: 30px; font-size: 10px">
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
            rowspan="2"
          >
            CIVIL STATUS
          </td>
          <td rowspan="2" colspan="2">
            {{ row.civil_status }}
          </td>
          <td
            rowspan="4"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            RESIDENTIAL<br />
            ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            ZIP CODE
          </td>
          <td rowspan="1" colspan="2" style="border-right: none" class="pa-0">
            <br />
            {{ row.residential_address_house_no }}
            <v-divider></v-divider>
            <span class="text-center">House/Block/Lot No. </span>
          </td>
          <td rowspan="1" colspan="2" style="border-left: none" class="">
            {{ row.residential_address_street }}
            <v-divider></v-divider>
            <span class="text-center" style="font-size: 8px">Street </span>
          </td>
        </tr>
        <tr style="height: 30px; font-size: 10px">
          <td rowspan="1" colspan="2" style="border-right: none">
            {{ row.residential_address_subdivision }}<br />
            <v-divider></v-divider>
            <span class="text-center">Subdivision/Village</span>
          </td>
          <td rowspan="1" colspan="2" style="border-left: none">
            {{ row.residential_address_barangay }}<br />
            <v-divider></v-divider>
            <span class="text-center">Barangay</span>
          </td>
        </tr>

        <tr style="height: 30px; font-size: 10px">
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            HEIGHT (m)
          </td>
          <td colspan="2">
            {{ row.height }}
          </td>
          <td colspan="2" style="border-right: none">
            {{ row.residential_address_city }}<br />
            <v-divider></v-divider>
            <span class="text-center">City/Municipality</span>
          </td>
          <td colspan="2" style="border-left: none">
            {{ row.residential_address_province }}<br />
            <v-divider></v-divider>

            <span class="text-center">Province</span>
          </td>
        </tr>
        <tr>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            WEIGHT (kg)
          </td>
          <td colspan="2">
            {{ row.weight }}
          </td>

          <td colspan="4">
            {{ row.residential_address_zip_code }}
          </td>
        </tr>
        <tr>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            BLOOD TYPE
          </td>
          <td colspan="2">
            {{ row.blood_type }}
          </td>
          <td
            rowspan="4"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PERMANENT ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            ZIP CODE
          </td>
          <td rowspan="1" colspan="2" style="border-right: none" class="pa-2">
            <br />
            {{ row.permanent_address_house_no }}
            <v-divider></v-divider>
            <span class="text-center">House/Block/Lot No. </span>
          </td>
          <td rowspan="1" colspan="2" style="border-left: none">
            {{ row.permanent_address_street }}
            <v-divider></v-divider>
            <span class="text-center">Street </span>
          </td>
        </tr>

        <tr>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            GSIS ID NO.
          </td>
          <td colspan="2">
            {{ row.gsis_id_no }}
          </td>
          <td colspan="2" style="border-right: none">
            {{ row.permanent_address_subdivision }}
          </td>
          <td colspan="2" style="border-left: none">
            {{ row.permanent_address_barangay }}
          </td>
        </tr>
        <tr>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PAG-IBIG ID NO.
          </td>
          <td colspan="2">
            {{ row.pag_ibig_id_no }}
          </td>
          <td colspan="2" style="border-right: none">
            {{ row.permanent_address_city }}
          </td>
          <td colspan="2" style="border-left: none">
            {{ row.permanent_address_province }}
          </td>
        </tr>
        <tr>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PHILHEALTH NO.
          </td>
          <td colspan="2">
            {{ row.philhealth_no }}
          </td>
          <td colspan="4">
            {{ row.permanent_zip_code }}
          </td>
        </tr>
        <tr>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            SSS NO.
          </td>
          <td colspan="2">
            {{ row.sss_no }}
          </td>
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            19.TELEPHONE NO.
          </td>
          <td colspan="4">
            {{ row.telephone_no }}
          </td>
        </tr>
        <tr>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            14.TIN NO.
          </td>
          <td colspan="2">
            {{ row.tin_no }}
          </td>
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            20.MOBILE NO.
          </td>
          <td colspan="4">
            {{ row.mobile_no }}
          </td>
        </tr>
        <tr>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            AGENCY EMPLOYEE NO.
          </td>
          <td colspan="2">
            {{ row.agency_employee_no }}
          </td>
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            21. E-MAIL ADDRESS (if any)
          </td>

          <td colspan="4">
            {{ row.email_address }}
          </td>
        </tr>
      </v-simple-table>
      <v-container
        style="
          border: solid 1px black;
          background-color: rgb(150, 150, 150);
          color: white;
        "
        class="text-left"
      >
        II. FAMILY BACKGROUND</v-container
      >

      <v-simple-table
        fluid
        class="ma-0 pa-0"
        v-for="row in pdsFamilyBackground"
        :key="row.id"
        width="100%"
        style="border: solid 1px black"
      >
        <colgroup>
          <col width="150px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
          <col width="100px" />
        </colgroup>

        <tr style="height: 30px">
          <td
            style="
                    font-weight: normal
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(234, 234, 234);width:100px;
                  "
            class="text-left"
          >
            &nbsp;&nbsp; SPOUSE'S SURNAME
          </td>
          <td colspan="3" style="">
            {{ row.spouse_last_name }}
          </td>
          <td
            colspan="3"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            23. NAME of CHILDREN (Write full name and list all)
          </td>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            DATE OF BIRTH (mm/dd/yyyy)
          </td>
        </tr>

        <tr style="height: 30px">
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            FIRST NAME
          </td>
          <td colspan="2">
            {{ row.spouse_first_name }}
          </td>
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            {{ row.spouse_suffix }}
          </td>
          <td colspan="3">
            {{ row.first_child }}
          </td>
          <td colspan="1">
            {{ row.spouse_date_of_birth }}
          </td>
        </tr>
        <tr style="height: 30px">
          <td
            width="80px"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            MIDDLE NAME
          </td>
          <td colspan="3">
            {{ row.spouse_middle_name }}
          </td>

          <td colspan="3">
            {{ row.second_child }}
          </td>
          <td></td>
        </tr>

        <tr style="height: 30px">
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            OCCUPATION
          </td>
          <td colspan="3">
            {{ row.spouse_occupation }}
          </td>
          <td colspan="3">
            {{ row.third_child }}
          </td>
          <td colspan="1"></td>
        </tr>
        <tr style="height: 30px">
          <td
            max-width="100px"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            EMPLOYER/BUSINESS NAME
          </td>
          <td colspan="3">
            {{ row.spouse_employer }}
          </td>
          <td colspan="3">
            {{ row.fourth_child }}
          </td>
          <td colspan="1"></td>
        </tr>
        <tr style="height: 30px">
          <td
            max-width="100px"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            BUSINESS ADDRESS
          </td>
          <td colspan="3">
            {{ row.spouse_business_address }}
          </td>
          <td colspan="3">
            {{ row.fifth_child }}
          </td>
          <td colspan="1"></td>
        </tr>
        <tr style="height: 30px">
          <td
            max-width="100px"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            TELEPHONE NO.
          </td>
          <td colspan="3">
            {{ row.spouse_telephone_no }}
          </td>
          <td colspan="3">
            {{ row.sixth_child }}
          </td>
          <td colspan="1"></td>
        </tr>

        <tr style="height: 30px">
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            25. FATHER'S SURNAME
          </td>
          <td colspan="3">
            {{ row.father_last_name }}
          </td>
          <td colspan="3"></td>
          <td colspan="1">
            {{ row.father_date_of_birth }}
          </td>
        </tr>
        <tr style="height: 30px">
          <td
            width="80px"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            FIRST NAME
          </td>
          <td colspan="2">
            {{ row.father_first_name }}
          </td>
          <td
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            {{ row.father_suffix }}
          </td>
          <td colspan="3"></td>
          <td colspan="1"></td>
        </tr>
        <tr style="height: 30px">
          <td
            width="80px"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            MIDDLE NAME
          </td>
          <td colspan="3">
            {{ row.father_middle_name }}
          </td>
          <td colspan="3"></td>
          <td colspan="1"></td>
        </tr>
        <tr style="height: 30px">
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            26. MOTHER'S MAIDEN NAME
          </td>
          <td colspan="3">
            {{ row.mother_maiden_name }}
          </td>
          <td colspan="3"></td>
          <td colspan="1">
            {{ row.mother_date_of_birth }}
          </td>
        </tr>
        <tr style="height: 30px">
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            SURNAME
          </td>
          <td colspan="3">
            {{ row.mother_last_name }}
          </td>
          <td colspan="3"></td>
          <td colspan="1"></td>
        </tr>
        <tr style="height: 30px">
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            FIRST NAME
          </td>
          <td colspan="3">
            {{ row.mother_first_name }}
          </td>

          <td colspan="3"></td>
          <td colspan="1"></td>
        </tr>
        <tr style="height: 30px">
          <td
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(211, 211, 211);
            "
          >
            MIDDLE NAME
          </td>
          <td colspan="3">
            {{ row.mother_middle_name }}
          </td>
          <td colspan="3"></td>
          <td colspan="1"></td>
        </tr>
      </v-simple-table>
      <v-container
        clas="pa-0 text-left "
        style="
          border: solid 1px;
          background-color: rgb(160, 160, 160);
          border: solid 1px black;
          color: white;
        "
      >
        III. EDUCATIONAL BACKGROUND
      </v-container>
      <v-simple-table>
        <colgroup>
          <col width="80px" />
          <col width="100px" />
          <col width="100px" />
          <col width="50px" />
          <col width="50px" />
          <col width="50px" />
          <col width="50px" />
          <col width="50px" />
        </colgroup>
        <!-- <colgroup> <col width="50px"><col width="50px"></colgroup> -->
        <thead>
          <tr>
            <th
              rowspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              LEVEL
            </th>
            <th
              rowspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              NAME OF SCHOOL<br />(Write in full)
            </th>
            <th
              rowspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              BASIC EDUCATION/DEGREE/COURSE<br />(Write in full)
            </th>
            <th
              colspan="2"
              rowspan="1"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              PERIOD OF ATTENDANCE<br />
            </th>
            <th
              rowspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              HIGHEST LEVEL/UNITS EARNED (if not graduated)
            </th>
            <th
              rowspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              YEAR GRADUATED
            </th>
            <th
              rowspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              SCHOLARSHIP/ ACADEMIC HONORS RECEIVED
            </th>
          </tr>

          <tr>
            <th
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              From
            </th>
            <th
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              To
            </th>
          </tr>
        </thead>
        <tbody>
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
            <td
              colspan="1"
              style="
                font-size: 12px;
                color: #000000;
                font-weight: bold;
                text-decoration: none;
                font-family: 'docs-Arial Narrow';
                font-style: normal;
                text-decoration-skip-ink: none;
              "
            >
              {{ row.period_of_attendance_from }}
            </td>
            <td
              colspan="1"
              style="
                font-size: 12px;
                color: #000000;
                font-weight: bold;
                text-decoration: none;
                font-family: 'docs-Arial Narrow';
                font-style: normal;
                text-decoration-skip-ink: none;
              "
            >
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
          <tr style="background-color: rgb(211, 211, 211)">
            <td colspan="8"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr style="height: 50px">
            <td
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              SIGNATURE
            </td>
            <td
              colspan="2"
              class="d-initial justify-content-center text-center"
              style="margin: 10px 20px 10px 20px"
            >
              <img
                class=""
                style="width: 100%; height: 100%"
                :src="imageUrl.educationalBackgroundSignature"
                alt="Base64 encoded image"
              />
            </td>

            <td
              colspan="2"
              class="pl-10"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              DATE
            </td>
            <td colspan="2">
              {{ pdsPersonalInfo[0].educational_date_signed }}
            </td>
          </tr>
        </tfoot>
      </v-simple-table>

      <v-simple-table height="auto" class="pa-0 pa-0 ma-0">
        <colgroup>
          <col width="80px" />
          <col width="80px" />
          <col width="60px" />
          <col width="60px" />
          <col width="150px" />
          <col width="50px" />
          <col width="50px" />
          <col width="50px" />
        </colgroup>
        <thead>
          <tr
            clas="pa-0 float-left"
            style="border: solid 1px; background-color: rgb(160, 160, 160)"
          >
            <td
              colspan="8"
              style="text-align: left; border: solid 1px black; color: white"
            >
              IV. CIVIL SERVICE ELIGIBILITY
            </td>
          </tr>

          <tr style="border: solid 1px black">
            <th
              class="civilHeader"
              rowspan="2"
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
                font-size: 11px;
                color: #000000;
                font-weight: normal;
                text-decoration: none;
                font-family: 'docs-Arial Narrow';
                font-style: normal;
                text-decoration-skip-ink: none;
              "
            >
              CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE
              BARANGAY ELIGIBILITY / DRIVER'S LICENSE
            </th>
            <th
              class="civilHeader"
              rowspan="2"
              colspan="1"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              RATING <br />(If Applicable)
            </th>
            <th
              class="civilHeader"
              rowspan="2"
              colspan="1"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              DATE OF EXAMINATION / CONFERMENT
            </th>
            <th
              class="civilHeader"
              rowspan="2"
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              PLACE OF EXAMINATION / CONFERMENT
            </th>
            <th
              class="civilHeader"
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              LICENSE (if applicable)
            </th>
          </tr>
          <tr>
            <th
              class="civilHeader"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              NUMBER
            </th>
            <th
              class="civilHeader"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              Date of Validity
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="row in pdsCivilServiceEligibility" :key="row.id">
            <td colspan="2">
              {{ row.career_service }}
            </td>
            <td colspan="1">
              {{ row.rating }}
            </td>
            <td colspan="1">
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
        <tfoot>
          <tr style="background-color: rgb(211, 211, 211)">
            <td colspan="8" style="height: 25px"></td>
          </tr>
        </tfoot>
      </v-simple-table>

      <v-simple-table>
        <!-- <colgroup><col width="100px"></colgroup> -->
        <colgroup>
          <col width="50px" />
          <col width="50px" />
          <col width="30px" />
          <col width="30px" />
          <col width="30px" />
          <col width="30px" />
          <col width="30px" />
          <col width="30px" />
        </colgroup>
        <thead>
          <tr
            clas="pa-0"
            style="border: solid 1px; background-color: rgb(160, 160, 160)"
          >
            <th
              colspan="8"
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                color: white;
              "
            >
              V. WORK EXPERIENCE <br />
              (Include private employment. Start from your recent work.)
              Description of duties should be indicated in the attached Work
              Experience sheet.
            </th>
          </tr>

          <tr>
            <th
              colspan="2"
              class="tableHeader"
              style="font-size: 8px; text-align: left; border: solid 1px black"
            >
              28. INCLUSIVE DATES <br />(mm/dd/yyyy)
            </th>
            <th
              rowspan="2"
              colspan="1"
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              POSITION TITLE (Write in full/Do not abbreviate)
            </th>
            <th
              rowspan="2"
              colspan="1"
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              DEPARTMENT / AGENCY / OFFICE / COMPANY (Write in full/Do not
              abbreviate)
            </th>
            <th
              rowspan="2"
              colspan="1"
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              MONTHLY SALARY
            </th>
            <th
              colspan="1"
              rowspan="2"
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              SALARY/ JOB/ PAY GRADE (if applicable)& STEP (Format "00-0")/
              INCREMENT
            </th>
            <th
              colspan="1"
              rowspan="2"
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              STATUS OF APPOINTMENT
            </th>
            <th
              colspan="1"
              rowspan="2"
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              GOV'T SERVICE (Y/ N)
            </th>
          </tr>
          <tr>
            <th
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              From
            </th>
            <th
              style="
                font-size: 8px;
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              To
            </th>
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
            <td colspan="1">
              {{ row.position }}
            </td>
            <td colspan="1">
              {{ row.department }}
            </td>
            <td colspan="1">
              {{ row.monthly_salary }}
            </td>
            <td colspan="1">
              {{ row.salary_grade }}
            </td>
            <td colspan="1">
              {{ row.status_of_appointment }}
            </td>
            <td colspan="1">
              {{ row.government_service }}
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr
            clas="pa-0 float-left"
            style="border: solid 1px; background-color: rgb(211, 211, 211)"
          >
            <td colspan="8" style="height: 25px"></td>
          </tr>

          <tr>
            <td
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              SIGNATURE
            </td>
            <td
              colspan="2"
              class="d-initial justify-content-center text-center"
              style="margin: 10px 20px 10px 20px"
            >
              <img
                :src="imageUrl.workExperienceSignature"
                style="width: 100%; height: 100%; border: none"
                alt="Base64 encoded image"
              />

              <v-spacer></v-spacer>
            </td>

            <td
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              DATE
            </td>
            <td colspan="2">
              {{ pdsPersonalInfo[0].work_experience_date_signed }}
            </td>
          </tr>
        </tfoot>
      </v-simple-table>

      <v-simple-table height="auto" class="pa-0 pa-0 ma-0">
        <colgroup>
          <col width="50px" />
          <col width="50px" />
          <col width="30px" />
          <col width="30px" />
          <col width="30px" />
          <col width="30px" />
          <col width="30px" />
          <col width="30px" />
        </colgroup>
        <thead>
          <tr
            clas="pa-0 float-left"
            style="border: solid 1px; background-color: rgb(160, 160, 160)"
          >
            <th
              colspan="8"
              style="text-align: left; border: solid 1px black; color: white"
            >
              VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT /
              PEOPLE / VOLUNTARY ORGANIZATION/S
            </th>
          </tr>

          <tr>
            <th
              rowspan="2"
              colspan="3"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              29. NAME & ADDRESS OF ORGANIZATION (Write in full)
            </th>
            <th
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              INCLUSIVE DATES (mm/dd/yyyy)
            </th>
            <th
              rowspan="2"
              colspan="1"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              NUMBER OF HOURS
            </th>
            <th
              rowspan="2"
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              POSITION / NATURE OF WORK
            </th>
          </tr>
          <tr>
            <th
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              From
            </th>
            <th
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              To
            </th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="row in pdsVoluntaryWorkInvolvement"
            :key="row.id"
            style="border: solid 1px black"
          >
            <td colspan="3">
              {{ row.organization_name_and_address }}
            </td>
            <td colspan="1">
              {{ row.voluntary_inclusive_dates_from }}
            </td>
            <td colspan="1">
              {{ row.voluntary_inclusive_dates_to }}
            </td>
            <td colspan="1">
              {{ row.number_of_hours }}
            </td>
            <td colspan="4">
              {{ row.position }}
            </td>
          </tr>
          <tr
            clas="pa-0 float-left"
            style="border: solid 1px; background-color: rgb(211, 211, 211)"
          >
            <td colspan="8" style="height: 25px"></td>
          </tr>
        </tbody>
      </v-simple-table>
      <v-simple-table style="border: solid 1px solid">
        <colgroup>
          <col width="80px" />
          <col width="80px" />
          <col width="70px" />
          <col width="60px" />
          <col width="60px" />
          <col width="60px" />
          <col width="70px" />
          <col width="70px" />
        </colgroup>
        <thead>
          <tr
            clas="pa-0 float-left"
            style="border: solid 1px; background-color: rgb(160, 160, 160)"
          >
            <th
              colspan="8"
              style="text-align: left; border: solid 1px black; color: white"
            >
              VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING
              PROGRAMS ATTENDED<br />(Start from the most recent L&D/training
              program and include only the relevant L&D/training taken for the
              last five (5) years for Division Chief/Executive/Managerial
              positions)
            </th>
          </tr>

          <tr>
            <th
              rowspan="2"
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              30. TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING
              PROGRAMS (Write in full)
            </th>
            <th
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              INCLUSIVE DATES OF ATTENDANCE (mm/dd/yyyy)
            </th>
            <th
              rowspan="2"
              colspan="1"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              NUMBER OF HOURS
            </th>
            <th
              rowspan="2"
              colspan="1"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              Type of LD ( Managerial/ Supervisory/ Technical/etc)
            </th>
            <th
              rowspan="2"
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              CONDUCTED/ SPONSORED BY (Write in full)
            </th>
          </tr>
          <tr>
            <th
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              From
            </th>
            <th
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              To
            </th>
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
            <td colspan="1">
              {{ row.number_of_hours }}
            </td>
            <td colspan="1">
              {{ row.type_of_ld }}
            </td>
            <td colspan="2">
              {{ row.conducted_by }}
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr
            clas="pa-0 float-left"
            style="border: solid 1px; background-color: rgb(211, 211, 211)"
          >
            <td colspan="8" style="height: 25px"></td>
          </tr>
        </tfoot>
      </v-simple-table>
      <v-container
        clas="pa-0"
        style="
          border: solid 1px;
          background-color: rgb(160, 160, 160);
          text-align: left;
          border: solid 1px black;
          color: white;
        "
      >
        VIII. OTHER INFORMATION
      </v-container>
      <v-simple-table>
        <colgroup>
          <col width="100px" />
          <col width="100px" />
          <col width="70px" />
          <col width="80px" />
          <col width="80px" />
          <col width="70px" />
          <col width="100px" />
          <col width="100px" />
        </colgroup>

        <thead>
          <tr>
            <th
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              SPECIAL SKILLS AND HOBBIES <br />(Write in full)
            </th>
            <th
              colspan="4"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              32. NON-ACADEMIC DISTINCTIONS/RECOGNITION <br />(Write in full)
            </th>
            <th
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION <br />(Write in full)
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="row in pdsOtherInfo" :key="row.id">
            <td colspan="2">
              {{ row.special_skills_and_hobbies }}
            </td>
            <td colspan="4">
              {{ row.nonacademic_distinctions }}
            </td>
            <td colspan="2">
              {{ row.association_members }}
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr
            clas="pa-0"
            style="border: solid 1px; background-color: rgb(211, 211, 211)"
          >
            <td colspan="8" style="height: 25px"></td>
          </tr>
          <tr>
            <td
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              SIGNATURE
            </td>
            <td
              colspan="2"
              class="d-initial justify-content-center text-center"
              style="margin: 10px 20px 10px 20px"
            >
              <img
                :src="imageUrl.otherInfoSignature"
                alt="Base64 encoded image"
                style="height: 100%; width: 100%"
              />
            </td>
            <td
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              DATE
            </td>
            <td colspan="2">
              {{ pdsPersonalInfo[0].other_info_date_signed }}
            </td>
          </tr>
        </tfoot>
      </v-simple-table>

      <v-container
        class="pa-0 ma-0"
        style="border: solid 1px black"
        v-for="row in pdsQuestions"
        :key="row.id"
      >
        <v-row no-gutters class="ma-o">
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0">
            <v-card
              class="pa-0"
              outlined
              tile
              height="70px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              34. Are you related by consanguinity or affinity to the appointing
              or recommending authority, or to the chief of bureau or office or
              to the person who has immediate supervision over you in the
              Office, Bureau or Department where you will be apppointed,<br />
              a. within the third degree? <br />b. within the fourth degree (for
              Local Government Unit - Career Employees)?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left"
            style="border: solid 1px black"
          >
            <v-card class="pa-3" height="70px">
              <span>If YES, give details:</span><br />
              <u>{{ row.question_thirty_four }}</u>
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0">
            <v-card
              class="pa-0"
              outlined
              tile
              height="70px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              35. a. Have you ever been found guilty of any administrative
              offense?<br /><br /><br />
              b. Have you been criminally charged before any court?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left"
            style="border: solid 1px black"
          >
            <v-card class="pa-3" height="70px">
              {{ row.question_thirty_five_a }}
              <span class="ma-3">If YES, give details: </span><br />
              <label>Date Filed:</label>
              {{ row.question_thirty_five_b_date_filed }}<br />
              <label>Status of Case/s:</label>
              {{ row.question_thirty_five_B_status_of_case }}
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0">
            <v-card
              class="pa-0"
              outlined
              tile
              height="60px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              36. Have you ever been convicted of any crime or violation of any
              law, decree, ordinance or regulation by any court or
              tribunal?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left"
            style="border: solid 1px black"
          >
            <v-card class="pa-3" height="60px">
              <span class="ma-3">If YES, give details: </span><br />
              {{ row.question_thirty_six }}
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0">
            <v-card
              class="pa-0"
              outlined
              tile
              height="60px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              37. Have you ever been separated from the service in any of the
              following modes: resignation, retirement, dropped from the rolls,
              dismissal, termination, end of term, finished contract or phased
              out (abolition) in the public or private sector?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left"
            style="border: solid 1px black"
          >
            <v-card class="pa-3" height="60px">
              <span class="ma-3">If YES, give details: </span><br />
              {{ row.question_thirty_seven }}
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0">
            <v-card
              class="pa-0"
              outlined
              tile
              height="65px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              38. a. Have you ever been a candidate in a national or local
              election held within the last year (except Barangay election)?<br /><br />
              b. Have you resigned from the government service during the three
              (3)-month period before the last election to promote/actively
              campaign for a national or local candidate?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left"
            style="border: solid 1px black"
          >
            <v-card class="pa-3" height="65px">
              <span class="ma-3">If YES, give details: </span><br />
              {{ row.question_thirty_eight_a }}
              <span class="ma-3">If YES, give details: </span><br />
              {{ row.question_thirty_eight_a }}
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0">
            <v-card
              class="pa-0"
              outlined
              tile
              height="60px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              39. Have you acquired the status of an immigrant or permanent
              resident of another country?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left"
            style="border: solid 1px black"
          >
            <v-card class="pa-3" height="60px">
              <span class="ma-3">If YES, give details: </span><br />
              {{ row.question_thirty_nine }}
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0">
            <v-card
              class="pa-0"
              outlined
              tile
              height="90px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(211, 211, 211);
              "
            >
              40. 100% 10 C41:F42 Pursuant to: (a) Indigenous People's Act (RA
              8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c)
              Solo Parents Welfare Act of 2000 (RA 8972), please answer the
              following items: Screen reader support enabled.
              <br /><br />a. Are you a member of any indigenous group?<br /><br /><br />
              b. Are you a person with disability? <br /><br /><br />c. Are you
              a solo parent?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left"
            style="border: solid 1px black"
          >
            <v-card class="pa-3" height="90px">
              <span class="ma-3">If YES, please specify: </span>
              <u> {{ row.question_forty_a }} </u><br /><br />
              <span class="ma-3">If YES, please specify ID No: </span>

              <u> {{ row.question_forty_b }} </u><br /><br />
              <span class="ma-3">If YES, please specify ID No: </span>
              <u>{{ row.question_forty_c }} </u>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
      <v-container
        class="pa-0 ma-0"
        style="border: solid 1px black"
        v-for="addInfo in pdsAdditionalInfo"
        :key="addInfo.id"
      >
        <v-row no-gutters class="ma-0">
          <v-col cols="8" sm="8">
            <v-card class="pa-0" outlined tile height="auto">
              <v-card-text
                class="text-subtitle-6"
                style="
                  text-align: left;
                  border: solid 1px black;
                  background-color: rgb(211, 211, 211);
                "
                >REFERENCES
                <span class="text-body-4"
                  >(Person not related by consanguinity or affinity to applicant
                  /appointee)</span
                ></v-card-text
              >

              <v-simple-table>
                <colgroup>
                  <col style="width: 100px" />
                  <col style="width: 100px" />
                  <col style="width: 50px" />
                </colgroup>
                <thead style="font-size: 10px">
                  <tr style="height: 20px">
                    <th
                      style="
                          font-size:10px
                            text-align: left;
                            border: solid 1px black;
                            background-color: rgb(211, 211, 211);
                          "
                    >
                      NAME
                    </th>
                    <th
                      style="
                          font-size:10px
                          ;font-size:10px
                            text-align: left;
                            border: solid 1px black;
                            background-color: rgb(211, 211, 211);
                          "
                    >
                      ADDRESS
                    </th>
                    <th
                      style="
                          font-size:10px
                            text-align: left;
                            border: solid 1px black;
                            background-color: rgb(211, 211, 211);
                          "
                    >
                      TEL. NO.
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    v-for="row in pdsReferences"
                    :key="row.id"
                    style="height: 10px; font-size: 8px"
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

              <v-card
                class=""
                outlined
                tile
                height="auto"
                style="
                  font-size: 10px;
                  text-align: left;
                  border: solid 1px black;
                  background-color: rgb(211, 211, 211);
                "
              >
                42. I declare under oath that I have personally accomplished
                this Personal Data Sheet which is a true, correct and complete
                statement pursuant to the provisions of pertinent laws, rules
                and regulations of the Republic of the Philippines. I authorize
                the agency head/authorized representative to verify/validate the
                contents stated herein. I agree that any misrepresentation made
                in this document and its attachments shall cause the filing of
                administrative/criminal case/s against me.
              </v-card>
            </v-card>
          </v-col>
          <v-col cols="4" sm="4" class="text-center">
            <v-container class="pa-3 text-center" height="300px">
              <v-container
                class="mt-5 ml-auto mr-auto pa-0 text-center d-initial justify-content-center text-center"
                style="border: solid 1px black; width: 150px; height: 150px"
              >
                <img
                  :src="imageUrl.personalPhoto"
                  alt="ID picture taken within the last 6 months 3.5 cm. X 4.5 cm
                    (passport size) With full and handwritten name tag and
                    signature over printed name Computer generated or
                    photocopied picture is not acceptable"
                  style="height: 100%; width: 100%"
              /></v-container>

              <span class="text-center">PHOTO</span>
            </v-container>
          </v-col>
        </v-row>

        <v-row class="pa-0">
          <v-col cols="4" sm="4" style="font-size: 10px">
            <v-card class="pa-0" style="border: solid 1px black">
              <v-container
                fluid
                class="text-center"
                style="
                  font-size: 11px;
                  text-align: left;
                  border: solid 1px black;
                  background-color: rgb(211, 211, 211);
                "
              >
                Government Issued ID
                <small style="font-size: 8px"
                  >(i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.)</small
                >
                PLEASE INDICATE ID Number and Date of Issuance
              </v-container>

              <v-container
                fluid
                class="text-no-wrap text-left pa-0 ma-0"
                height="50px"
                style="
                  font-size: 10px;
                  border-left: solid 1px black;
                  border-right: solid 1px black;
                "
              >
                <!-- <label class="float-left" >
                    
                    </label> -->
                Government Issued ID:
                {{ addInfo.government_id }}
              </v-container>
              <v-container
                class="text-no-wrap text-left pa-0 ma-0"
                style="
                  font-size: 10px;
                  border: solid 1px black;
                  border-right: solid 1px black;
                "
              >
                ID/License/Passport No.:
                {{ addInfo.id_no }}
              </v-container>
              <v-container
                class="text-no-wrap text-left pa-0 ma-0"
                style="
                  font-size: 10px;
                  border: solid 1px black;
                  border-right: solid 1px black;
                "
              >
                Date/Place of Issuance:
                {{ addInfo.date_place_of_issuance }}</v-container
              >
            </v-card>
          </v-col>
          <v-col cols="4" sm="4">
            <v-card style="border: solid 1px black">
              <v-container
                style="height: 95px; border: solid 1px black"
                class="d-flex justify-content-center text-center px-2"
              >
                <img
                  :src="imageUrl.oathSignature"
                  alt="Base64 encoded image"
                  style="height: 30%; width: 30%"
                />

                <!-- <v-spacer></v-spacer> -->
              </v-container>

              <v-card-subtitle
                class="text-center"
                style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(211,211,211);"
                >Signature (Sign inside the box)</v-card-subtitle
              >
              <v-container style="border: solid 1px black">
                {{ addInfo.oath_date_accomplished }}
              </v-container>
              <v-card-subtitle
                class="text-center"
                style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(211,211,211);"
                >Date Accomplished</v-card-subtitle
              >
            </v-card>
          </v-col>
          <v-col cols="4" sm="4">
            <v-card style="border: solid 1px black">
              <v-container
                style="height: 248px; border: solid 1px black"
                class="px-2 d-flex justify-content-center text-center"
                fluid
              >
                <img
                  :src="imageUrl.rightThumbMark"
                  alt="Base64 encoded image"
                  style="height: 30%; width: 30%"
                />
              </v-container>
              <v-card-subtitle
                class="text-center"
                style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(211,211,211);"
                >Right Thumbmark</v-card-subtitle
              >
            </v-card>
          </v-col>
        </v-row>
        <v-row
          style="border-top: solid 1px black; width: 100%"
          fluid
          class="mr-0 ml-0 mt-2"
        >
          <v-col cols="4" sm="4" style="border: none" class="text-right">
            SUBSCRIBED AND SWORN to before me this ,
          </v-col>
          <v-col cols="4" sm="4" md="4" class="text-center d-inline pt-2">
            {{ addInfo.sworn_date }}
          </v-col>
          <v-col cols="4" sm="4" md="4">
            exhibiting his/her validly issued government ID as indicated above.
          </v-col>
        </v-row>
        <v-card
          class="pa-0 text-center mb-6 d-flex justify-content-center text-center"
          width="400px"
          align="center"
          justify="center"
          style="margin-left: auto; margin-right: auto; border: solid 1px black"
        >
          <img
            :src="imageUrl.personAdministeringOath"
            alt="Base64 encoded image"
            style="height: 30%; width: 30%"
          />

          <v-card-subtitle
            class="text-center ma-0"
            style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(211,211,211);"
            >Person Administering Oath</v-card-subtitle
          >
        </v-card>
      </v-container>
    </v-container>
    <v-btn
      v-if="create == false && edit == false"
      class="mt-5"
      v-print="printObj"
      >Print</v-btn
    >
    <div id="loading" v-show="printLoading"></div>
    <v-tabs v-if="create == true || edit == true">
      <v-btn
        v-if="edit == true"
        class="float-right"
        style="float: right"
        @click="edit = false"
        >Back</v-btn
      >
      <v-tab>C1</v-tab>
      <v-tab-item>
        <v-form ref="pdsA">
          <v-simple-table class="pa-0 text-center pdsA" width="80%" light>
            <thead>
              <tr>
                <th colspan="8" class="pa-0">
                  <v-card class="ma-0 text-left" style="border: solid 1px">
                    <v-card-title label="Search" single-line hide-details
                      ><span>CS Form N0.212</span>
                      <v-container fluid class="ml-auto mr-auto px-2">
                        <span> Revised 2017</span
                        ><span
                          class=""
                          style="
                            font-size: 35px;
                            margin-left: 30%;
                            font-weight: bolder;
                            font-family: fantasy;
                          "
                          >Personal Data Sheet</span
                        ></v-container
                      >
                    </v-card-title>
                    <v-card-subtitle label="Search" single-line hide-details>
                      WARNING: Any misrepresentation made in the Personal Data
                      Sheet and the Work Experience Sheet shall cause the filing
                      of administrative/criminal case/s against the person
                      concerned.
                    </v-card-subtitle>
                    <v-card-text label="Search" single-line hide-details>
                      READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA
                      SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.
                    </v-card-text>
                  </v-card>
                </th>
              </tr>
              <tr class="pa-0">
                <th
                  colspan="8"
                  style="
                    border: solid 1px;
                    background-color: rgb(160, 160, 160);
                    color: white;
                  "
                >
                  I. PERSONAL INFORMATION
                </th>
              </tr>
            </thead>
            <tbody class="text-center" color="primary">
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    font-size: 10px;
                    border: solid 1px black;
                    border-bottom: none;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  2. SURNAME
                </td>
                <td colspan="7">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="personalSurname"
                    :rules="required"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    border-top: none;
                    border-bottom: none;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  FIRST NAME
                </td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="personalFirstName"
                    id="personalFirstName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  colspan="3"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  <v-text-field
                    label="NAME EXTENSION (JR., SR)"
                    v-model="personalSuffix"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    border-top: none;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  MIDDLE NAME
                </td>
                <td colspan="7">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="personalMiddleName"
                    id="personalMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td
                  max-width="100px"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  DATE OF BIRTH <br />
                  (mm/dd/yyyy)
                </td>
                <td colspan="2">
                  <v-row>
                    <v-col cols="12" sm="8" md="8" class="text-center">
                      <v-menu
                        v-model="personalDOBMenu"
                        :close-on-content-click="false"
                        :nudge-left="40"
                        transition="scale-transition"
                        offset-y
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="computedDateFormattedPersonalDOB"
                            label=""
                            append-icon="mdi-calendar"
                            readonly
                            :rules="required"
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                          style="border: none"
                          v-model="personalDateOfBirth"
                          scrollable
                          @input="personalDOBMenu = false"
                        >
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </td>
                <td
                  rowspan="3"
                  colspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  16.CITIZENSHIP<br />If holder of dual citizenship,<br />please
                  indicate the details.
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    id="personalCitizenship"
                    v-model="personalCitizenship"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  PLACE OF BIRTH
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="personalPlaceOfBirth"
                    id="personalPOB"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="3">
                  <v-text-field
                    label="Pls. indicate country:"
                    v-model="countryOfCitizenship"
                    id="countryOfCitizenship"
                    :rules="required"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SEX
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    id="personalSex"
                    v-model="personalSex"
                    :rules="required"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    label="Input Dual Citizenship"
                    dense
                    v-model="personalDualCitizenship"
                    id="personalDualCitizenship"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                  rowspan="2"
                >
                  CIVIL STATUS
                </td>
                <td rowspan="2" colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="personalCivilStatus"
                    :rules="required"
                    id="personalCivilStatus"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  rowspan="4"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  permanent<br />
                  ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                  ZIP CODE
                </td>
                <td rowspan="1" colspan="2" style="border-right: none">
                  <v-text-field
                    hint="House/Block/Lot No."
                    persistent-hint
                    id="personalHouseNo"
                    v-model="personalResAddressHouseNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="1" colspan="2" style="border-left: none">
                  <v-text-field
                    hint="Street"
                    persistent-hint
                    v-model="personalResAddressStreet"
                    id="personalStreet"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td rowspan="1" colspan="2" style="border-right: none">
                  <v-text-field
                    hint="Subdivision/Village"
                    persistent-hint
                    v-model="personalResAddressSubdivision"
                    id="personalSubdivision"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="1" colspan="2" style="border-left: none">
                  <v-text-field
                    hint="Barangay"
                    persistent-hint
                    :rules="required"
                    v-model="personalResAddressBarangay"
                    id="personalBarangay"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  HEIGHT (m)
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalHeight"
                    :rules="required"
                    dense
                    id="personalHeight"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2" style="border-right: none">
                  <v-text-field
                    hint="City/Municipality"
                    persistent-hint
                    v-model="personalResAddressCity"
                    :rules="required"
                    dense
                    id="personalCity"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2" style="border-left: none">
                  <v-text-field
                    hint="Province"
                    persistent-hint
                    :rules="required"
                    dense
                    v-model="personalResAddressProvince"
                    id="personalProvince"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  WEIGHT (kg)
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    id="personalWeight"
                    :rules="required"
                    v-model="personalWeight"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    id="personalZipCode"
                    :rules="required"
                    dense
                    v-model="personalZipCode"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  BLOOD TYPE
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalBloodType"
                    id="personalBloodType"
                    :rules="required"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  rowspan="4"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  PERMANENT ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                  ZIP CODE
                </td>
                <td colspan="2" style="border-right: none">
                  <v-text-field
                    hint="House/Block/Lot No."
                    persistent-hint
                    id="permanentHouseNo"
                    v-model="personalPermanentAddHouseNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2" style="border-left: none">
                  <v-text-field
                    hint="Street"
                    v-model="personalPermanentAddStreet"
                    id="permanentStreet"
                    persistent-hint
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  GSIS ID NO.
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalGSISIDNo"
                    :rules="required"
                    id="personalGsisId"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2" style="border-right: none">
                  <v-text-field
                    hint="Subdivision/Village"
                    persistent-hint
                    v-model="personalPermanentAddSubdivision"
                    dense
                    id="permanentSubdivision"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2" style="border-left: none">
                  <v-text-field
                    hint="Barangay"
                    persistent-hint
                    v-model="personalPermanentAddBarangay"
                    :rules="required"
                    id="permanentBarangay"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  PAG-IBIG ID NO.
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalPAGIBIGIDNo"
                    :rules="required"
                    dense
                    id="personalPagibigIdNo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2" style="border-right: none">
                  <v-text-field
                    hint="City/Municipality"
                    persistent-hint
                    v-model="personalPermanentAddCity"
                    :rules="required"
                    dense
                    id="permanentCity"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2" style="border-left: none">
                  <v-text-field
                    hint="Province"
                    persistent-hint
                    :rules="required"
                    v-model="personalPermanentAddProvince"
                    id="permanentProvince"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  PHILHEALTH NO.
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalPHILHEALTHNo"
                    :rules="required"
                    dense
                    id="permanentPhilhealthNo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    v-model="personalPermanentAddZipCode"
                    solo
                    :rules="required"
                    dense
                    id="permanentZipCode"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SSS NO.
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalSSSNo"
                    :rules="required"
                    id="personalSssNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  19.TELEPHONE NO.
                </td>
                <td colspan="4">
                  <v-text-field
                    v-model="personalTelephoneNo"
                    placeholder=""
                    :rules="required"
                    solo
                    id="personalTelephoneNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  14.TIN NO.
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    v-model="personalTinNo"
                    id="personalTinNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  20.MOBILE NO.
                </td>
                <td colspan="4">
                  <v-text-field
                    v-model="personalMobileNo"
                    placeholder=""
                    solo
                    id="personalMobileNo"
                    :rules="required"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  AGENCY EMPLOYEE NO.
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="personalAgencyEmployeeNo"
                    id="personalAgencyEmpNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  21. E-MAIL ADDRESS (if any)
                </td>

                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="personalEmailAddress"
                    id="personalEmailAddress"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr clas="pa-0">
                <td
                  colspan="8"
                  style="
                    border: solid 1px;
                    background-color: rgb(160, 160, 160);
                    color: white;
                  "
                  class="text-left"
                >
                  II. FAMILY BACKGROUND
                </td>
              </tr>

              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SPOUSE'S SURNAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="familySpouseSurname"
                    id="spouseSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  colspan="3"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  23. NAME of CHILDREN (Write full name and list all)
                </td>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  DATE OF BIRTH (mm/dd/yyyy)
                </td>
              </tr>

              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  FIRST NAME
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familySpouseFirstName"
                    id="spouseFirstName"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  <v-text-field
                    label="(JR., SR)"
                    filled
                    v-model="familySpouseSuffix"
                    id="spouseSuffix"
                    dense
                    class="text-center pt-1"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    solo
                    v-model="firstChild"
                    dense
                    class="text-center pt-6 float-left"
                    type="text"
                    style="width: 100%"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-row align="center">
                    <v-col
                      cols="12"
                      sm="12"
                      md="12"
                      class="text-left"
                      justify="space-around"
                    >
                      <v-menu
                        class=""
                        v-model="spouseDOBMenu"
                        :close-on-content-click="false"
                        :nudge-right="-120"
                        transition="scale-transition"
                        offset-y
                        justify="left"
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="computedDateFormattedSpouseDOB"
                            label=""
                            append-icon="mdi-calendar"
                            readonly
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                          v-model="dateOfBirthSpouse"
                          scrollable
                          @input="spouseDOBMenu = false"
                        >
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </td>
              </tr>
              <tr>
                <td
                  width="80px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  MIDDLE NAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="familySpouseMiddleName"
                    id="spouseMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="3">
                  <v-text-field
                    solo
                    v-model="secondChild"
                    dense
                    class="text-center pt-6 float-left"
                    type="text"
                    style="width: 100%"
                  >
                  </v-text-field>
                </td>
                <td></td>
              </tr>

              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  OCCUPATION
                </td>
                <td colspan="3">
                  <v-text-field
                    dense
                    solo
                    v-model="familySpouseOccupation"
                    id="spouseOccupation"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    solo
                    v-model="thirdChild"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1"></td>
              </tr>
              <tr>
                <td
                  max-width="100px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  EMPLOYER/BUSINESS NAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="familyEmployerName"
                    id="employerNameFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    solo
                    v-model="fourthChild"
                    dense
                    class="text-center pt-6"
                    type="text"
                    style="width: 100%"
                  >
                  </v-text-field>
                </td>
                <td colspan="1"></td>
              </tr>
              <tr>
                <td
                  max-width="100px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  BUSINESS ADDRESS
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="familyBusinessAddress"
                    id="businessAddressFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    solo
                    v-model="fifthChild"
                    dense
                    class="text-center pt-6 float-left"
                    type="text"
                    style="width: 100%"
                  >
                  </v-text-field>
                </td>
                <td colspan="1"></td>
              </tr>
              <tr>
                <td
                  max-width="100px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  TELEPHONE NO.
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="familyTelephoneNo"
                    id="telephonNumberFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    solo
                    v-model="sixthChild"
                    dense
                    class="text-center pt-6 float-left"
                    type="text"
                    style="width: 100%"
                  >
                  </v-text-field>
                </td>
                <td colspan="1"></td>
              </tr>

              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  25. FATHER'S SURNAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="familyFatherSurname"
                    id="fatherSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3"></td>
                <td colspan="1">
                  <v-row>
                    <v-col cols="12" sm="12" md="12" class="text-center">
                      <v-menu
                        v-model="fatherDOBMenu"
                        :close-on-content-click="false"
                        :nudge-right="-120"
                        transition="scale-transition"
                        offset-y
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="computedDateFormattedFatherDOB"
                            label=""
                            :rules="required"
                            append-icon="mdi-calendar"
                            readonly
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                          class="float-right"
                          v-model="dateOfBirthFather"
                          scrollable
                          @input="fatherDOBMenu = false"
                        >
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </td>
              </tr>
              <tr>
                <td
                  width="80px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  FIRST NAME
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familyFatherFirstName"
                    :rules="required"
                    id="fatherFirstName"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  <v-text-field
                    label="(JR., SR)"
                    filled
                    id="fatherSuffix"
                    v-model="familyFatherSuffix"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3"></td>
                <td colspan="1"></td>
              </tr>
              <tr>
                <td
                  width="80px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  MIDDLE NAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    v-model="familyFatherMiddleName"
                    id="fatherMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3"></td>
                <td colspan="1"></td>
              </tr>
              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  26. MOTHER'S MAIDEN NAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="familyMotherMaidenName"
                    id="motherMaidenName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3"></td>
                <td colspan="1">
                  <v-row>
                    <v-col cols="12" sm="12" md="12" class="text-center">
                      <v-menu
                        v-model="motherDOBMenu"
                        :close-on-content-click="false"
                        :nudge-right="-120"
                        transition="scale-transition"
                        offset-y
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="computedDateFormattedMotherDOB"
                            label=""
                            append-icon="mdi-calendar"
                            readonly
                            :rules="required"
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                          class="float-right"
                          v-model="dateOfBirthMother"
                          scrollable
                          @input="motherDOBMenu = false"
                        >
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </td>
              </tr>
              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SURNAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="familyMotherSurname"
                    :rules="required"
                    id="motherSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3"></td>
                <td colspan="1"></td>
              </tr>
              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  FIRST NAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="familyMotherFirstName"
                    id="motherFirstName"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="3"></td>
                <td colspan="1"></td>
              </tr>
              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  MIDDLE NAME
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="familyMotherMiddleName"
                    id="motherMiddleName"
                    class="text-center pt-6"
                    :rules="required"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3"></td>
                <td colspan="1"></td>
              </tr>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(160, 160, 160)"
              >
                <td
                  colspan="8"
                  class="text-left"
                  style="border: solid 1px black; color: white"
                >
                  III. EDUCATIONAL BACKGROUND
                </td>
              </tr>
              <tr>
                <td
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  LEVEL
                </td>
                <td
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  NAME OF SCHOOL<br />(Write in full)
                </td>
                <td
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  BASIC EDUCATION/DEGREE/COURSE<br />(Write in full)
                </td>
                <td
                  colspan="2"
                  rowspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  PERIOD OF ATTENDANCE<br />
                </td>
                <td
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  HIGHEST LEVEL/UNITS EARNED (if not graduated)
                </td>
                <td
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  YEAR GRADUATED
                </td>
                <td
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SCHOLARSHIP/ ACADEMIC HONORS RECEIVED
                  <button
                    class="material-icons"
                    @click.prevent="addRow('educationalBackground')"
                  >
                    add_circle
                  </button>
                </td>
              </tr>

              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  From
                </td>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  To
                </td>
              </tr>

              <tr v-for="row in educationalBackground" :key="row.id">
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="row.educBackgroundLevel"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="row.educBackgroundNameOfSchool"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    dense
                    placeholder=""
                    v-model="row.educBackgroundBasicEducation"
                    solo
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    dense
                    placeholder=""
                    :rules="required"
                    v-model="row.educBackgroundPeriodOfAttendanceFrom"
                    solo
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    dense
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="row.educBackgroundPeriodOfAttendanceTo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    dense
                    placeholder=""
                    solo
                    v-model="row.educBackgroundHighestLevel"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    dense
                    placeholder=""
                    solo
                    v-model="row.educBackgroundYearGraduated"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    dense
                    style="width: 80%"
                    v-model="row.educBackgroundScholarship"
                    solo
                    class="text-center pt-6 float-left"
                    type="text"
                  >
                  </v-text-field>
                  <button
                    class="material-icons float-right mt-7"
                    @click.prevent="removeRow('educationalBackground', row)"
                  >
                    remove_circle
                  </button>
                </td>
              </tr>
              <tr style="background-color: rgb(211, 211, 211)">
                <td colspan="8"></td>
              </tr>
              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SIGNATURE
                </td>
                <td colspan="2">
                  <v-file-input
                    :rules="[
                      (value) =>
                        !value ||
                        value.size < 5000000 ||
                        'Avatar size should be less than 5 MB!',
                    ]"
                    dense
                    counter
                    show-size
                    chips
                    solo
                    accept="image/png, image/jpeg, image/bmp"
                    v-model="educBackgroundSignature"
                    id="signaturePart1"
                    class="text-center pt-6"
                  >
                  </v-file-input>
                </td>

                <td
                  colspan="2"
                  class="pl-10"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  DATE
                </td>
                <td colspan="3">
                  <v-row>
                    <v-col cols="12" sm="8" md="8" class="text-center">
                      <v-menu
                        v-model="educBackgroundDOSMenu"
                        :close-on-content-click="false"
                        :nudge-right="40"
                        transition="scale-transition"
                        offset-y
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="computedDateFormattedEducBackgroundDOS"
                            append-icon="mdi-calendar"
                            readonly
                            :rules="required"
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                          v-model="educBackgroundDateOfSignature"
                          scrollable
                          @input="educBackgroundDOSMenu = false"
                        >
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </td>
              </tr></tbody
          ></v-simple-table>
        </v-form>
      </v-tab-item>
      <v-tab>C2</v-tab>
      <v-tab-item>
        <v-form ref="pdsB">
          <v-simple-table height="auto" class="pa-0 pa-0 ma-0">
            <thead>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(160, 160, 160)"
              >
                <td
                  colspan="9"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    color: white;
                  "
                >
                  IV. CIVIL SERVICE ELIGIBILITY
                </td>
              </tr>

              <tr style="border: solid 1px black">
                <th
                  rowspan="2"
                  colspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/
                  CSEE BARANGAY ELIGIBILITY / DRIVER'S LICENSE
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  RATING <br />(If Applicable)
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  DATE OF EXAMINATION / CONFERMENT
                </th>
                <th
                  rowspan="2"
                  colspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  PLACE OF EXAMINATION / CONFERMENT
                </th>
                <th
                  colspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  LICENSE (if applicable)
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  <button
                    class="material-icons"
                    @click.prevent="addRow('civilServiceEligibility')"
                  >
                    add_circle
                  </button>
                </th>
              </tr>
              <tr>
                <th
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  NUMBER
                </th>
                <th
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  Date of Validity
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="row in civilServiceEligibility" :key="row.id">
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="row.careerService"
                    value=""
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    v-model="row.rating"
                    solo
                    :rules="required"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    dense
                    v-model="row.dateOfExamination"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    v-model="row.placeOfExamination"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    v-model="row.licenseNumber"
                    solo
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="row.dateOfValidity"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <button
                    class="material-icons"
                    @click.prevent="removeRow('civilServiceEligibility', row)"
                  >
                    remove_circle
                  </button>
                </td>
              </tr>
              <tr style="background-color: rgb(211, 211, 211)">
                <td colspan="9" style="height: 25px"></td>
              </tr>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(160, 160, 160)"
              >
                <th
                  colspan="9"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    color: white;
                  "
                >
                  V. WORK EXPERIENCE <br />
                  (Include private employment. Start from your recent work.)
                  Description of duties should be indicated in the attached Work
                  Experience sheet.
                </th>
              </tr>

              <tr>
                <th
                  colspan="2"
                  style="text-align: left; border: solid 1px black"
                >
                  28. INCLUSIVE DATES (mm/dd/yyyy)
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  POSITION TITLE (Write in full/Do not abbreviate)
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  DEPARTMENT / AGENCY / OFFICE / COMPANY (Write in full/Do not
                  abbreviate)
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  MONTHLY SALARY
                </th>
                <th
                  colspan="1"
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SALARY/ JOB/ PAY GRADE (if applicable)& STEP (Format "00-0")/
                  INCREMENT
                </th>
                <th
                  colspan="1"
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  STATUS OF APPOINTMENT
                </th>
                <th
                  colspan="1"
                  rowspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  GOV'T SERVICE (Y/ N)
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  <button
                    class="material-icons"
                    @click.prevent="addRow('workExperience')"
                  >
                    add_circle
                  </button>
                </th>
              </tr>
              <tr>
                <th
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  From
                </th>
                <th
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  To
                </th>
              </tr>

              <tr v-for="row in workExperience" :key="row.id">
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="row.inclusiveDateFromWorkExperience"
                    value=""
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="row.inclusiveDateToWorkExperience"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    dense
                    v-model="row.positionTitleWorkExperience"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="row.departmentWorkExperience"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    dense
                    v-model="row.monthlySalaryWorkExperience"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="row.salaryGradeWorkExperience"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="row.statusOfAppointmentWorkExperience"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    :rules="required"
                    v-model="row.governmentServiceWorkExperience"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <button
                    class="material-icons"
                    @click.prevent="removeRow('workExperience', row)"
                  >
                    remove_circle
                  </button>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(211, 211, 211)"
              >
                <td colspan="9" style="height: 25px"></td>
              </tr>

              <tr>
                <td
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SIGNATURE
                </td>
                <td colspan="3">
                  <v-file-input
                    solo
                    show-size
                    counter
                    :rules="required"
                    accept="image/png, image/jpeg, image/bmp"
                    v-model="workExperienceSignature"
                    id="signaturePart1"
                    class="text-center pt-6"
                    chips
                  >
                  </v-file-input>
                </td>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  DATE
                </td>
                <td colspan="4">
                  <v-row>
                    <v-col cols="12" sm="8" md="8" class="text-center">
                      <v-menu
                        v-model="workExpDOSMenu"
                        :close-on-content-click="false"
                        :nudge-right="40"
                        transition="scale-transition"
                        offset-y
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="computedDateFormattedWorkExpDOS"
                            label=""
                            :rules="required"
                            append-icon="mdi-calendar"
                            readonly
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                          class="float-right"
                          v-model="workExperienceDateOfSignature"
                          scrollable
                          @input="workExpDOSMenu = false"
                        >
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </td>
              </tr>
            </tfoot>
          </v-simple-table>
        </v-form>
      </v-tab-item>
      <v-tab>C3</v-tab>
      <v-tab-item>
        <v-form ref="pdsC3">
          <v-simple-table height="auto" class="pa-0 pa-0 ma-0">
            <thead>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(160, 160, 160)"
              >
                <th
                  colspan="11"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    color: white;
                  "
                >
                  VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT /
                  PEOPLE / VOLUNTARY ORGANIZATION/S
                </th>
              </tr>

              <tr>
                <th
                  rowspan="2"
                  colspan="3"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  29. NAME & ADDRESS OF ORGANIZATION (Write in full)
                </th>
                <th
                  colspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  INCLUSIVE DATES (mm/dd/yyyy)
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  NUMBER OF HOURS
                </th>
                <th
                  rowspan="2"
                  colspan="4"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  POSITION / NATURE OF WORK
                </th>
                <th
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  <button
                    class="material-icons"
                    @click.prevent="addRow('voluntaryWorkInvolvement')"
                  >
                    add_circle
                  </button>
                </th>
              </tr>
              <tr>
                <th
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  From
                </th>
                <th
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  To
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="row in voluntaryWorkInvolvement" :key="row.id">
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    v-model="row.nameAndAddressOfOrgVolWork"
                    dense
                    class="text-center pt-6"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    :rules="required"
                    dense
                    v-model="row.inclusiveDatesFromVolWork"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    dense
                    v-model="row.inclusiveDatesToVolWork"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    v-model="row.numberOfHoursVolWork"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    v-model="row.positionOfWorkVolWork"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="1">
                  <button
                    class="material-icons"
                    @click.prevent="removeRow('voluntaryWorkInvolvement', row)"
                  >
                    remove_circle
                  </button>
                </td>
              </tr>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(211, 211, 211)"
              >
                <td colspan="11" style="height: 25px"></td>
              </tr>

              <tr></tr>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(160, 160, 160)"
              >
                <th
                  colspan="11"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    color: white;
                  "
                >
                  VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING
                  PROGRAMS ATTENDED<br />(Start from the most recent
                  L&D/training program and include only the relevant
                  L&D/training taken for the last five (5) years for Division
                  Chief/Executive/Managerial positions)
                </th>
              </tr>

              <tr>
                <td
                  rowspan="2"
                  colspan="4"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  30. TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING
                  PROGRAMS (Write in full)
                </td>
                <td
                  colspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  INCLUSIVE DATES OF ATTENDANCE (mm/dd/yyyy)
                </td>
                <td
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  NUMBER OF HOURS
                </td>
                <td
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  Type of LD ( Managerial/ Supervisory/ Technical/etc)
                </td>
                <td
                  rowspan="2"
                  colspan="2"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  CONDUCTED/ SPONSORED BY (Write in full)
                </td>

                <td
                  rowspan="2"
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  <button
                    class="material-icons"
                    @click.prevent="addRow('learningAndDevelopment')"
                  >
                    add_circle
                  </button>
                </td>
              </tr>
              <tr>
                <th
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  From
                </th>
                <th
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  To
                </th>
              </tr>

              <tr v-for="row in learningAndDevelopment" :key="row.id">
                <td colspan="4">
                  <v-text-field
                    :rules="required"
                    placeholder=""
                    solo
                    dense
                    v-model="row.learningAndDevelopmentInterventions"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    v-model="row.learningAndDevelopmentInclusiveDatesFrom"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    v-model="row.learningAndDevelopmentInclusiveDatesTo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    dense
                    v-model="row.learningAndDevelopmentNumberOfHours"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    solo
                    dense
                    v-model="row.learningAndDevelopmentTypeOfLD"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    :rules="required"
                    v-model="row.learningAndDevelopmentConductedBy"
                    solo
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <button
                    class="material-icons"
                    @click.prevent="removeRow('learningAndDevelopment', row)"
                  >
                    remove_circle
                  </button>
                </td>
              </tr>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(211, 211, 211)"
              >
                <td colspan="11" style="height: 25px"></td>
              </tr>

              <tr></tr>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(160, 160, 160)"
              >
                <th
                  colspan="11"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    color: white;
                  "
                >
                  VIII. OTHER INFORMATION
                </th>
              </tr>
              <tr>
                <td
                  colspan="3"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SPECIAL SKILLS AND HOBBIES <br />(Write in full)
                </td>
                <td
                  colspan="4"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  32. NON-ACADEMIC DISTINCTIONS/RECOGNITION <br />(Write in
                  full)
                </td>
                <td
                  colspan="3"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION <br />(Write in
                  full)
                </td>

                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  <button
                    class="material-icons"
                    @click.prevent="addRow('otherInfo')"
                  >
                    add_circle
                  </button>
                </td>
              </tr>
              <tr v-for="row in otherInfo" :key="row.id">
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="row.otherInfoSpecialSkills"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="row.otherInfoNonacademicDistinctions"
                    dense
                    class="text-center pa-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="row.otherInfoAssociationMembers"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="1">
                  <button
                    class="material-icons"
                    @click.prevent="removeRow('otherInfo', row)"
                  >
                    remove_circle
                  </button>
                </td>
              </tr>
              <tr
                clas="pa-0 float-left"
                style="border: solid 1px; background-color: rgb(211, 211, 211)"
              >
                <td colspan="11" style="height: 25px"></td>
              </tr>

              <tr></tr>
              <tr>
                <td
                  colspan="3"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  SIGNATURE
                </td>
                <td colspan="3">
                  <v-file-input
                    solo
                    show-size
                    :rules="required"
                    counter
                    accept="image/png, image/jpeg, image/bmp"
                    v-model="otherInfoSignature"
                    id="signaturePart1"
                    class="text-center pt-6"
                    chips
                  >
                  </v-file-input>
                </td>
                <td
                  colspan="1"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  DATE
                </td>
                <td colspan="4">
                  <v-row>
                    <v-col cols="12" sm="8" md="8" class="text-center">
                      <v-menu
                        v-model="otherInfoDOSMenu"
                        :close-on-content-click="false"
                        :nudge-right="40"
                        transition="scale-transition"
                        offset-y
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            v-model="computedDateFormattedOtherInfoDOS"
                            label=""
                            append-icon="mdi-calendar"
                            readonly
                            :rules="required"
                            v-bind="attrs"
                            v-on="on"
                          ></v-text-field>
                        </template>
                        <v-date-picker
                          class="float-right"
                          v-model="otherInfoDateOfSignature"
                          scrollable
                          @input="otherInfoDOSMenu = false"
                        >
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>
                </td>
              </tr>
            </tbody>
          </v-simple-table>
        </v-form>

        <!-- </v-container>
        </v-form> -->
      </v-tab-item>
      <v-tab>C4</v-tab>
      <v-tab-item>
        <v-container
          class="pa-0 ma-0 d-print-block"
          style="border: solid 1px black"
        >
          <v-form ref="pds">
            <v-row no-gutters>
              <v-col cols="12" sm="6" class="ma-0 mr-0">
                <v-card
                  class="pa-4"
                  outlined
                  tile
                  height="145px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  34. Are you related by consanguinity or affinity to the
                  appointing or recommending authority, or to the chief of
                  bureau or office or to the person who has immediate
                  supervision over you in the Office, Bureau or Department where
                  you will be apppointed,<br />
                  a. within the third degree? <br />b. within the fourth degree
                  (for Local Government Unit - Career Employees)?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="fit-content">
                  <v-textarea
                    auto-grow
                    rows="4"
                    placeholder=""
                    class=""
                    label="If YES, give details:"
                    dense
                    v-model="questionThirtyFour"
                    type="text"
                  >
                  </v-textarea>
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6" class="ma-0">
                <v-card
                  class="pa-4"
                  outlined
                  tile
                  height="220px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  35. a. Have you ever been found guilty of any administrative
                  offense?<br /><br /><br /><br /><br />
                  b. Have you been criminally charged before any court?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-2" outlined tile height="auto">
                  <v-textarea
                    placeholder=""
                    auto-grow
                    rows="2"
                    class="mx-1"
                    label="If YES, give details:"
                    dense
                    v-model="questionThirtyFiveA"
                    max-width="50px"
                    type="text"
                  >
                  </v-textarea>
                  <span class="ma-3">If YES, give details: </span><br /><br />

                  <v-text-field
                    label="Date Filed: "
                    dense
                    type="text"
                    v-model="questionThirtyFiveDateFiled"
                  >
                  </v-text-field>
                  <v-text-field
                    label="Status of Case/s: "
                    dense
                    type="text"
                    v-model="questionThirtyFiveCaseStatus"
                  >
                  </v-text-field>
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card
                  class="pa-6"
                  outlined
                  tile
                  height="88px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  36. Have you ever been convicted of any crime or violation of
                  any law, decree, ordinance or regulation by any court or
                  tribunal?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-2" outlined tile height="fit-content">
                  <v-textarea
                    auto-grow
                    placeholder=""
                    rows="2"
                    class="mx-2"
                    label="If YES, give details:"
                    dense
                    v-model="questionThirtySix"
                    type="text"
                  >
                  </v-textarea>
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card
                  class="pa-6"
                  outlined
                  tile
                  height="96px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  37. Have you ever been separated from the service in any of
                  the following modes: resignation, retirement, dropped from the
                  rolls, dismissal, termination, end of term, finished contract
                  or phased out (abolition) in the public or private
                  sector?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="fit-content">
                  <v-textarea
                    auto-grow
                    rows="2"
                    placeholder=""
                    class="mx-2"
                    label="If YES, give details:"
                    dense
                    v-model="questionThirtySeven"
                  >
                  </v-textarea>
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card
                  class="pa-6"
                  outlined
                  tile
                  height="176px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  38. a. Have you ever been a candidate in a national or local
                  election held within the last year (except Barangay
                  election)?<br /><br /><br />
                  b. Have you resigned from the government service during the
                  three (3)-month period before the last election to
                  promote/actively campaign for a national or local
                  candidate?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-2" outlined tile height="fit-content">
                  <v-textarea
                    auto-grow
                    rows="2"
                    placeholder=""
                    class="mx-2"
                    label="If YES, give details:"
                    dense
                    v-model="questionThirtyEightA"
                    type="text"
                  >
                  </v-textarea>
                  <br />
                  <v-textarea
                    auto-grow
                    rows="2"
                    placeholder=""
                    class="mx-2"
                    label="If YES, give details:"
                    dense
                    v-model="questionThirtyEightB"
                    type="text"
                  >
                  </v-textarea>
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card
                  class="pa-6"
                  outlined
                  tile
                  height="96px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  39. Have you acquired the status of an immigrant or permanent
                  resident of another country?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="fit-content">
                  <v-textarea
                    auto-grow
                    rows="2"
                    placeholder=""
                    class="mx-2"
                    label="If YES, give details:"
                    dense
                    v-model="questionThirtyNine"
                    type="text"
                  >
                  </v-textarea>
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters>
              <v-col cols="12" sm="6">
                <v-card
                  class="pa-6"
                  outlined
                  tile
                  height="242px"
                  style="
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(211, 211, 211);
                  "
                >
                  40. 100% 10 C41:F42 Pursuant to: (a) Indigenous People's Act
                  (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and
                  (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer
                  the following items: Screen reader support enabled.
                  <br /><br />a. Are you a member of any indigenous group?<br /><br /><br />
                  b. Are you a person with disability? <br /><br /><br />c. Are
                  you a solo parent?</v-card
                >
              </v-col>
              <v-col cols="12" sm="6">
                <v-card class="pa-3" outlined tile height="fit-content">
                  <v-textarea
                    auto-grow
                    placeholder=""
                    rows="2"
                    class="mx-2"
                    label=" If YES, give details:"
                    dense
                    type="text"
                    v-model="questionFourtyA"
                  >
                  </v-textarea
                  ><br />
                  <v-textarea
                    auto-grow
                    rows="1"
                    placeholder=""
                    class="mx-2"
                    label="If YES, please specify ID No:"
                    dense
                    v-model="questionFourtyB"
                    type="text"
                  >
                  </v-textarea
                  ><br />
                  <v-textarea
                    auto-grow
                    rows="1"
                    placeholder=""
                    class="mx-2"
                    v-model="questionFourtyC"
                    label="If YES, please specify ID No:"
                    dense
                    type="text"
                  >
                  </v-textarea>
                </v-card>
              </v-col>
            </v-row>
            <v-row no-gutters class="ma-0">
              <v-col cols="12" sm="8">
                <v-card class="pa-0" outlined tile height="auto">
                  <v-card-text
                    class="text-subtitle-2"
                    style="
                      text-align: left;
                      border: solid 1px black;
                      background-color: rgb(211, 211, 211);
                    "
                    >REFERENCES
                    <span class="text-body-2"
                      >(Person not related by consanguinity or affinity to
                      applicant /appointee)</span
                    ></v-card-text
                  >

                  <v-simple-table>
                    <thead>
                      <tr>
                        <th
                          style="
                            text-align: left;
                            border: solid 1px black;
                            background-color: rgb(211, 211, 211);
                          "
                        >
                          NAME
                        </th>
                        <th
                          style="
                            text-align: left;
                            border: solid 1px black;
                            background-color: rgb(211, 211, 211);
                          "
                        >
                          ADDRESS
                        </th>
                        <th
                          style="
                            text-align: left;
                            border: solid 1px black;
                            background-color: rgb(211, 211, 211);
                          "
                        >
                          TEL. NO.
                        </th>
                        <th rowspan="1" colspan="1" style="text-align: left">
                          <button
                            class="material-icons"
                            @click.prevent="addRow('references')"
                          >
                            add_circle
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        height="10px"
                        v-for="row in references"
                        :key="row.name"
                      >
                        <td>
                          <v-text-field
                            dense
                            v-model="row.name"
                            :rules="required"
                          >
                          </v-text-field>
                        </td>
                        <td>
                          <v-text-field
                            dense
                            v-model="row.address"
                            :rules="required"
                          >
                          </v-text-field>
                        </td>
                        <td>
                          <v-text-field
                            dense
                            v-model="row.telephoneNo"
                            :rules="required"
                          >
                          </v-text-field>
                        </td>
                        <td colspan="1">
                          <button
                            class="material-icons"
                            @click.prevent="removeRow('references', row)"
                          >
                            remove_circle
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </v-simple-table>

                  <v-card
                    class=""
                    outlined
                    tile
                    height="auto"
                    style="
                      font-size: 12px;
                      text-align: left;
                      border: solid 1px black;
                      background-color: rgb(211, 211, 211);
                    "
                  >
                    42. I declare under oath that I have personally accomplished
                    this Personal Data Sheet which is a true, correct and
                    complete statement pursuant to the provisions of pertinent
                    laws, rules and regulations of the Republic of the
                    Philippines. I authorize the agency head/authorized
                    representative to verify/validate the contents stated
                    herein. I agree that any misrepresentation made in this
                    document and its attachments shall cause the filing of
                    administrative/criminal case/s against me.
                  </v-card>
                </v-card>
              </v-col>
              <v-col cols="12" sm="4">
                <v-container class="pa-3 text-center" height="300px">
                  <v-container
                    class="mt-5 ml-auto mr-auto pa-0 text-center"
                    style="border: solid 1px black; width: 150px; height: 150px"
                    >ID picture taken within the last 6 months 3.5 cm. X 4.5 cm
                    (passport size) With full and handwritten name tag and
                    signature over printed name Computer generated or
                    photocopied picture is not acceptable</v-container
                  >
                  <v-container class="">
                    <v-file-input
                      solo
                      show-size
                      counter
                      accept="image/png, image/jpeg, image/bmp"
                      v-model="personalPhotoAttachment"
                      class="text-center pt-6"
                      label="Insert Picture"
                      :rules="required"
                      dense
                      chips
                      @change="handleFileInput"
                    >
                    </v-file-input>
                  </v-container>
                  <span class="text-center ma-0">PHOTO</span>
                </v-container>
              </v-col>
            </v-row>

            <v-row class="pa-0">
              <v-col cols="12" sm="4" style="font-size: 10px">
                <v-card class="pa-0" style="border: solid 1px black">
                  <v-container
                    fluid
                    class="text-center"
                    style="
                      font-size: 11px;
                      text-align: left;
                      border: solid 1px black;
                      background-color: rgb(211, 211, 211);
                    "
                  >
                    Government Issued ID
                    <small style="font-size: 8px"
                      >(i.e.Passport, GSIS, SSS, PRC, Driver's License,
                      etc.)</small
                    >
                    PLEASE INDICATE ID Number and Date of Issuance
                  </v-container>

                  <v-container
                    fluid
                    class="text-no-wrap text-left pa-0 ma-0"
                    height="50px"
                    style="
                      font-size: 10px;
                      border-left: solid 1px black;
                      border-right: solid 1px black;
                    "
                  >
                    <!-- <label class="float-left" >
                    
                    </label> -->
                    <v-text-field
                      dense
                      filled
                      label="Government Issued ID:"
                      class="ma-0"
                      v-model="governmentIssuedID"
                      :rules="required"
                    ></v-text-field
                  ></v-container>
                  <v-container
                    class="text-no-wrap text-left pa-0 ma-0"
                    style="
                      font-size: 10px;
                      border: solid 1px black;
                      border-right: solid 1px black;
                    "
                  >
                    <v-text-field
                      dense
                      filled
                      class="ma-0"
                      label="ID/License/Passport No.:"
                      :rules="required"
                      v-model="governmentIssuedIDNo"
                    ></v-text-field
                  ></v-container>
                  <v-container
                    class="text-no-wrap text-left pa-0 ma-0"
                    style="
                      font-size: 10px;
                      border: solid 1px black;
                      border-right: solid 1px black;
                    "
                  >
                    <v-text-field
                      dense
                      filled
                      class="ma-0"
                      label="Date/Place of Issuance:"
                      :rules="required"
                      v-model="governmentIDDateOrPlaceIssued"
                    ></v-text-field
                  ></v-container>
                </v-card>
              </v-col>
              <v-col cols="12" sm="4">
                <v-card style="border: solid 1px black">
                  <v-container
                    style="height: 95px; border: solid 1px black"
                    class="px-2"
                    fluid
                  >
                    <v-file-input
                      solo
                      show-size
                      :rules="required"
                      counter
                      accept="image/png, image/jpeg, image/bmp"
                      v-model="oathSignature"
                      class="text-center pt-6"
                      label="Insert Picture"
                      style=""
                      dense
                      chips
                      @change="handleFileInput"
                    >
                    </v-file-input>
                  </v-container>
                  <v-card-subtitle
                    class="text-center"
                    style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(211,211,211);"
                    >Signature (Sign inside the box)</v-card-subtitle
                  >
                  <v-container style="border: solid 1px black">
                    <v-row>
                      <v-col cols="12" sm="12" md="12" class="text-center">
                        <v-menu
                          v-model="oathDateMenu"
                          :close-on-content-click="false"
                          :nudge-right="40"
                          transition="scale-transition"
                          offset-y
                          min-width="auto"
                        >
                          <template v-slot:activator="{ on, attrs }">
                            <v-text-field
                              v-model="computedDateFormattedOathDate"
                              append-icon="mdi-calendar"
                              readonly
                              :rules="required"
                              v-bind="attrs"
                              v-on="on"
                            ></v-text-field>
                          </template>
                          <v-date-picker
                            class="float-right"
                            v-model="oathDateAccomplished"
                            scrollable
                            @input="oathDateMenu = false"
                          >
                          </v-date-picker>
                        </v-menu>
                      </v-col>
                    </v-row>
                  </v-container>
                  <v-card-subtitle
                    class="text-center"
                    style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(211,211,211);"
                    >Date Accomplished</v-card-subtitle
                  >
                </v-card>
              </v-col>
              <v-col cols="12" sm="4">
                <v-card style="border: solid 1px black">
                  <v-container
                    style="height: 248px; border: solid 1px black"
                    class="px-2"
                    fluid
                  >
                    <v-file-input
                      solo
                      :rules="required"
                      show-size
                      counter
                      accept="image/png, image/jpeg, image/bmp"
                      v-model="rightThumbMark"
                      class="text-center pt-6"
                      label="Insert Picture"
                      dense
                      chips
                      @change="handleFileInput"
                    >
                    </v-file-input>
                  </v-container>
                  <v-card-subtitle
                    class="text-center"
                    style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(211,211,211);"
                    >Right Thumbmark</v-card-subtitle
                  >
                </v-card>
              </v-col>
            </v-row>
            <v-row
              style="border-top: solid 1px black; width: 100%"
              fluid
              class="mr-0 ml-0 mt-2"
            >
              <v-col cols="12" sm="4" style="border: none" class="text-right">
                SUBSCRIBED AND SWORN to before me this ,
              </v-col>
              <v-col cols="12" sm="4" md="4" class="text-center d-inline pt-2">
                <v-menu
                  v-model="swornDateMenu"
                  :close-on-content-click="false"
                  :nudge-right="40"
                  transition="scale-transition"
                  offset-y
                  min-width="auto"
                >
                  <template v-slot:activator="{ on, attrs }">
                    <v-text-field
                      v-model="computedDateFormattedSwornDate"
                      label=""
                      append-icon="mdi-calendar"
                      readonly
                      class="d-inline"
                      :rules="required"
                      v-bind="attrs"
                      v-on="on"
                    ></v-text-field>
                  </template>
                  <v-date-picker
                    class="float-right"
                    v-model="subscribedAndSwornDate"
                    scrollable
                    @input="swornDateMenu = false"
                  >
                  </v-date-picker>
                </v-menu>
              </v-col>
              <v-col sm="4" md="4">
                exhibiting his/her validly issued government ID as indicated
                above.
              </v-col>
            </v-row>
            <v-card
              class="pa-0 text-center mb-6"
              width="400px"
              align="center"
              justify="center"
              style="
                margin-left: auto;
                margin-right: auto;
                border: solid 1px black;
              "
            >
              <v-card-subtitle
                class="text-center ma-0"
                style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(211,211,211);"
                >Person Administering Oath</v-card-subtitle
              >
            </v-card>
          </v-form>
        </v-container>
        <!-- </tbody>
        
        </v-simple-table> -->
        <v-btn class="primary ma-4" @click.prevent="finalizePds"
          >Finalize C1-4</v-btn
        >
      </v-tab-item>
    </v-tabs>
  </v-container>
</template>
<!-- >
              <v-file-input
                solo
                counter
                show-size
                accept="image/png, image/jpeg, image/bmp"
                v-model="personAdministeringOath"
                class="text-center pt-6"
                label="Insert Picture"
                dense
                chips
                @change="handleFileInput"
              >
              </v-file-input> -->
<script>
//local instruction
//  import print from 'vue-print-nb'
// directives: {
//     print
// }
import moment from "moment";
// import vue from 'vue';
export default {
  data() {
    return {
      printLoading: true,
      printObj: {
        id: "printMe",
        preview: false,
        previewPrintBtnLabel: "Print",
        previewTitle: "Printing Preview", // The title of the preview window. The default is 打印预览
        popTitle: "good print",
        extraCss:
          "https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.compat.css, https://cdn.bootcdn.net/ajax/libs/hover.css/2.3.1/css/hover-min.css",

        extraHead: '<meta http-equiv="Content-Language"content="en-us"/>',
        previewBeforeOpenCallback() {
          console.log("正在加载预览窗口");
        },
        previewOpenCallback() {
          console.log("已经加载完预览窗口");
        },
        beforeOpenCallback() {
          //.printLoading = true
          console.log("打开之前");
        },
        openCallback() {
          // .printLoading = false
          console.log("执行了打印");
        },
        closeCallback() {
          console.log("关闭了打印工具");
        },
      },
      educBackgroundDOSMenu: false,
      oathDateMenu: false,
      swornDateMenu: false,
      workExpDOSMenu: false,

      date: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
        .toISOString()
        .substr(0, 10),
      dateFormatted: this.formatDate(
        new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
          .toISOString()
          .substr(0, 10)
      ),
      dateFormattedPersonalDOB: this.formatDate(
        new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
          .toISOString()
          .substr(0, 10)
      ),
      otherInfoDOSMenu: false,
      personalDOBMenu: false,
      spouseDOBMenu: false,
      fatherDOBMenu: false,
      motherDOBMenu: false,
      search: "",
      items: ["Foo", "Bar", "Fizz", "Buzz"],
      headers: [
        { text: "ID", value: "user_id" },
        {
          text: "Last Name",
          align: "start",
          sortable: false,
          value: "last_name",
        },
        { text: "Middle Name", value: "middle_name" },
        { text: "First Name", value: "first_name" },
        { text: "Date of Birth", value: "date_of_birth" },
        { text: "Sex", value: "sex" },
        { text: "Blood Type", value: "blood_type" },
        { text: "Actions", value: "actions", sortable: false },
      ],
      create: false,
      edit: false,
      loading: false,

      personalSurname: "",
      personalFirstName: "",
      personalMiddleName: "",
      personalSuffix: "",
      personalDateOfBirth: new Date(
        Date.now() - new Date().getTimezoneOffset() * 60000
      )
        .toISOString()
        .substr(0, 10),
      personalPlaceOfBirth: "",
      personalCitizenship: "",
      personalDualCitizenship: "",
      countryOfCitizenship: "",
      personalSex: "",
      personalCivilStatus: "",
      personalHeight: "",
      personalWeight: "",
      personalBloodType: "",
      personalGSISIDNo: "",
      personalResAddressHouseNo: "",
      personalResAddressStreet: "",
      personalResAddressSubdivision: "",
      personalResAddressBarangay: "",
      personalResAddressCity: "",
      personalResAddressProvince: "",
      personalZipCode: "",
      personalPAGIBIGIDNo: "",
      personalPHILHEALTHNo: "",
      personalPermanentAddHouseNo: "",
      personalPermanentAddStreet: "",
      personalPermanentAddSubdivision: "",
      personalPermanentAddBarangay: "",
      personalPermanentAddCity: "",
      personalPermanentAddProvince: "",
      personalPermanentAddZipCode: "",
      personalSSSNo: "",
      personalTelephoneNo: "",
      personalTinNo: "",
      personalMobileNo: "",
      personalAgencyEmployeeNo: "",
      personalEmailAddress: "",
      familySpouseSurname: "",
      familySpouseFirstName: "",
      familySpouseMiddleName: "",
      familySpouseSuffix: "",
      familySpouseOccupation: "",
      familyEmployerName: "",
      familyBusinessAddress: "",
      familyTelephoneNo: "",
      familyFatherSurname: "",
      familyFatherFirstName: "",
      familyFatherMiddleName: "",
      familyFatherSuffix: "",
      familyMotherMaidenName: "",
      familyMotherSurname: "",
      familyMotherFirstName: "",
      familyMotherMiddleName: "",
      dateOfBirthSpouse: "",
      dateOfBirthFather: new Date(
        Date.now() - new Date().getTimezoneOffset() * 60000
      )
        .toISOString()
        .substr(0, 10),
      dateOfBirthMother: new Date(
        Date.now() - new Date().getTimezoneOffset() * 60000
      )
        .toISOString()
        .substr(0, 10),

      educBackgroundLevel: "",
      educBackgroundNameOfSchool: "",
      educBackgroundBasicEducation: "",
      educBackgroundPeriodOfAttendanceFrom: "",
      educBackgroundPeriodOfAttendanceTo: "",
      educBackgroundHighestLevel: "",
      educBackgroundYearGraduated: "",
      educBackgroundScholarship: "",
      educBackgroundSignature: new Blob(),
      educBackgroundDateOfSignature: new Date(
        Date.now() - new Date().getTimezoneOffset() * 60000
      )
        .toISOString()
        .substr(0, 10),
      careerService: "",
      rating: "",
      dateOfExamination: "",
      placeOfExamination: "",
      licenseNumber: "",
      dateOfValidity: "",
      inclusiveDateFromWorkExperience: "",
      inclusiveDateToWorkExperience: "",
      positionTitleWorkExperience: "",
      departmentWorkExperience: "",
      monthlySalaryWorkExperience: "",
      salaryGradeWorkExperience: "",
      statusOfAppointmentWorkExperience: "",
      governmentServiceWorkExperience: "",
      workExperienceSignature: "",
      workExperienceDateOfSignature: new Date(
        Date.now() - new Date().getTimezoneOffset() * 60000
      )
        .toISOString()
        .substr(0, 10),
      nameAndAddressOfOrgVolWork: "",
      inclusiveDatesFromVolWork: "",
      inclusiveDatesToVolWork: "",
      numberOfHoursVolWork: "",
      positionOfWorkVolWork: "",
      learningAndDevelopmentInterventions: "",
      learningAndDevelopmentInclusiveDatesFrom: "",
      learningAndDevelopmentInclusiveDatesTo: "",
      learningAndDevelopmentNumberOfHours: "",
      learningAndDevelopmentTypeOfLD: "",
      learningAndDevelopmentConductedBy: "",
      otherInformationSpecialSkills: "",
      otherInformationNonacademicDistinctions: "",
      otherInformationAssociationMembers: "",
      otherInfoSignature: "",
      otherInfoDateOfSignature: new Date(
        Date.now() - new Date().getTimezoneOffset() * 60000
      )
        .toISOString()
        .substr(0, 10),
      questionThirtyFour: "",
      questionThirtyFiveA: "",
      questionThirtyFiveDateFiled: "",
      questionThirtyFiveCaseStatus: "",
      questionThirtySix: "",
      questionThirtySeven: "",
      questionThirtyEightA: "",
      questionThirtyEightB: "",
      questionThirtyNine: "",
      questionFourtyA: "",
      questionFourtyB: "",
      questionFourtyC: "",
      idList: [],
      referenceNameFirst: "",
      referenceAddressFirst: "",
      referenceTelNoFirst: "",
      referenceNameSecond: "",
      referenceAddressSecond: "",
      referenceTelNoSecond: "",
      referenceNameThird: "",
      referenceAddressThird: "",
      referenceTelNoThird: "",
      personalPhotoAttachment: "",
      governmentIssuedID: "",
      governmentIssuedIDNo: "",
      governmentIDDateOrPlaceIssued: "",
      oathSignature: "",

      oathDateAccomplished: new Date(
        Date.now() - new Date().getTimezoneOffset() * 60000
      )
        .toISOString()
        .substr(0, 10),
      rightThumbMark: "",
      subscribedAndSwornDate: new Date(
        Date.now() - new Date().getTimezoneOffset() * 60000
      )
        .toISOString()
        .substr(0, 10),
      personAdministeringOath: "",
      civilServiceEligibility: [
        {
          careerService: "",
          rating: "",
          dateOfExamination: "",
          placeOfExamination: "",
          licenseNumber: "",
          dateOfValidity: "",
        },
      ],
      workExperience: [
        {
          inclusiveDateFromWorkExperience: "",
          inclusiveDateToWorkExperience: "",
          positionTitleWorkExperience: "",
          departmentWorkExperience: "",
          monthlySalaryWorkExperience: "",
          salaryGradeWorkExperience: "",
          statusOfAppointmentWorkExperience: "",
          governmentServiceWorkExperience: "",
        },
      ], //the declared array
      voluntaryWorkInvolvement: [
        {
          nameAdAddressOfOrgVolWork: "",
          inclusiveDatesFromVolWork: "",
          inclusiveDatesToVolWork: "",
          numberOfHoursVolWork: "",
          positionOfWorkVolWork: "",
        },
      ],
      learningAndDevelopment: [
        {
          learningAndDevelopmentInterventions: "",
          learningAndDevelopmentInclusiveDatesFrom: "",
          learningAndDevelopmentInclusiveDatesTo: "",
          learningAndDevelopmentNumberOfHours: "",
          learningAndDevelopmentTypeOfLD: "",
          learningAndDevelopmentConductedBy: "",
        },
      ],
      educationalBackground: [
        {
          id: "",
          educBackgroundLevel: "",
          educBackgroundNameOfSchool: "",
          educBackgroundBasicEducation: "",
          educBackgroundPeriodOfAttendanceFrom: "",
          educBackgroundPeriodOfAttendanceTo: "",
          educBackgroundHighestLevel: "",
          educBackgroundYearGraduated: "",
          educBackgroundScholarship: "",
        },
      ],
      otherInfo: [
        {
          id: "",
          otherInformationSpecialSkills: "",
          otherInformationNonacademicDistinctions: "",
          otherInformationAssociationMembers: "",
        },
      ],

      references: [
        {
          name: "",
          address: "",
          telephoneNo: "",
        },
      ],
      name: "",
      address: "",
      telephoneNo: "",
      pds: [],
      pdsPersonalInfo: [],
      pdsFamilyBackground: [],
      pdsEducationalBackground: [],
      pdsCivilServiceEligibility: [],
      pdsWorkExperience: [],
      pdsVoluntaryWorkInvolvement: [],
      pdsLearningAndDevelopment: [],
      pdsOtherInfo: [],
      // pdsOtherInfoNonacademicDistinctions: [],
      // pdsOtherInfoAssociationMembers: [],
      pdsQuestions: [],
      pdsAdditionalInfo: [],
      pdsReferences: [],
      pdsChildren: [],
      editedIndex: "",
      firstChild: "",
      secondChild: "",
      thirdChild: "",
      fourthChild: "",
      fifthChild: "",
      sixthChild: "",
      // childName: "",
      // children: [
      //   {
      //     childName: "",
      //   },
      // ],

      user: JSON.parse(sessionStorage.getItem("user_session")).role,
      imageUrl: [],
      imageData: "",
      personalInfoId: "",
      pdsAdditionalInfoId: "",
      required: [(v) => !!v || "Field is required"],
    };
  },

  computed: {
    computedDateFormattedPersonalDOB() {
      return this.formatDate(this.personalDateOfBirth);
    },
    computedDateFormattedSpouseDOB() {
      return this.formatDate(this.dateOfBirthSpouse);
    },
    computedDateFormattedFatherDOB() {
      return this.formatDate(this.dateOfBirthFather);
    },
    computedDateFormattedMotherDOB() {
      return this.formatDate(this.dateOfBirthMother);
    },
    computedDateFormattedEducBackgroundDOS() {
      return this.formatDate(this.educBackgroundDateOfSignature);
    },
    computedDateFormattedWorkExpDOS() {
      return this.formatDate(this.workExperienceDateOfSignature);
    },
    computedDateFormattedOtherInfoDOS() {
      return this.formatDate(this.otherInfoDateOfSignature);
    },
    computedDateFormattedOathDate() {
      return this.formatDate(this.oathDateAccomplished);
    },
    computedDateFormattedSwornDate() {
      return this.formatDate(this.subscribedAndSwornDate);
    },
    // height () {
    //     switch (this.$vuetify.breakpoint.name) {
    //       case 'xs': return '220px'
    //       case 'sm': return '400px'
    //       case 'md': return '500px'
    //       case 'lg': return '600px'
    //       case 'xl': return '800px'
    //     }
    // }
  },
  watch: {
    date(val) {
      this.dateFormatted = this.formatDate(this.date);
      console.log(val);
    },
    personalDOBDate(val) {
      this.dateFormattedPersonalDOB = this.formatDate(this.personalDateOfBirth);
      console.log(val);
    },
  },
  created() {
    this.retrievePds();
    console.log(this.editedItem);
    if (this.edit == true) {
      console.log(this.edit);
    }
    const reader = new FileReader();

    reader.addEventListener(
      "load",
      () => {
        this.educBackgroundSignature = reader.result;
      },
      false
    );

    reader.readAsDataURL(this.educBackgroundSignature);
  },
  methods: {
    viewItem(item) {
      let data = "";
      let pdsPersonalInfo = "";
      let pdsFamilyBackground = "";
      let pdsEducationalBackground = "";
      let pdsCivilServiceEligibility = "";
      let pdsWorkExperience = "";
      let pdsVoluntaryWorkInvolvement = "";
      let pdsLearningAndDevelopment = "";
      let pdsOtherInfoSpecialSkills = "";
      let pdsOtherInfoNonacademicDistinctions = "";
      let pdsOtherInfoAssociationMembers = "";
      let pdsReferences = "";
      let pdsQuestions = "";
      let pdsAdditionalInfo = "";
      let children = "";
      this.editedIndex = this.pds.indexOf(item);
      this.editedItem = Object.assign({}, item);
      console.log(item, this.editedIndex, this.editedItem);
      // console.log(this.$store.getters.pdsInfosAll)
      data = this.$store.getters.pdsInfosAll;
      pdsPersonalInfo = data[0][0].personalInfo[this.editedIndex];
      pdsFamilyBackground = data[1][0].familyBackground[this.editedIndex];
      pdsEducationalBackground =
        data[2][0].educationalBackground[this.editedIndex];
      pdsCivilServiceEligibility =
        data[3][0].civilServiceEligibility[this.editedIndex];
      pdsWorkExperience = data[4][0].workExperience[this.editedIndex];
      pdsVoluntaryWorkInvolvement =
        data[5][0].voluntaryWorkInvolvement[this.editedIndex];
      pdsLearningAndDevelopment =
        data[6][0].learningAndDevelopment[this.editedIndex];
      pdsOtherInfoSpecialSkills =
        data[7][0].otherInfoSpecialSkills[this.editedIndex];
      pdsOtherInfoNonacademicDistinctions =
        data[8][0].otherInfoNonacademicDistinctions[this.editedIndex];
      pdsOtherInfoAssociationMembers =
        data[9][0].otherInfoAssociationMembers[this.editedIndex];
      pdsReferences = data[10][0].references[this.editedIndex];
      pdsQuestions = data[11][0].pdsQuestions[this.editedIndex];
      pdsAdditionalInfo = data[12][0].pdsAdditionalInfo[this.editedIndex];
      children = data[13][0].children[this.editedIndex];
      data = [];
      data.push(pdsPersonalInfo);
      data.push(pdsFamilyBackground);
      data.push(pdsEducationalBackground);
      data.push(pdsCivilServiceEligibility);
      data.push(pdsWorkExperience);
      data.push(pdsVoluntaryWorkInvolvement);
      data.push(pdsLearningAndDevelopment);
      data.push(pdsOtherInfoSpecialSkills);
      data.push(pdsOtherInfoNonacademicDistinctions);
      data.push(pdsOtherInfoAssociationMembers);
      data.push(pdsReferences);
      data.push(pdsQuestions);
      data.push(pdsAdditionalInfo);
      data.push(children);
      sessionStorage.setItem(
        "pdsPersonalInfo",
        JSON.stringify(pdsPersonalInfo)
      );
      sessionStorage.setItem(
        "pdsFamilyBackground",
        JSON.stringify(pdsFamilyBackground)
      );
      sessionStorage.setItem(
        "pdsEducationalBackground",
        JSON.stringify(pdsEducationalBackground)
      );
      sessionStorage.setItem(
        "pdsCivilServiceEligibility",
        JSON.stringify(pdsCivilServiceEligibility)
      );
      sessionStorage.setItem(
        "pdsWorkExperience",
        JSON.stringify(pdsWorkExperience)
      );
      sessionStorage.setItem(
        "pdsVoluntaryWorkInvolvement",
        JSON.stringify(pdsVoluntaryWorkInvolvement)
      );
      sessionStorage.setItem(
        "pdsLearningAndDevelopment",
        JSON.stringify(pdsLearningAndDevelopment)
      );
      sessionStorage.setItem(
        "pdsOtherInfoSpecialSkills",
        JSON.stringify(pdsOtherInfoSpecialSkills)
      );
      sessionStorage.setItem(
        "pdsOtherInfoNonacademicDistinctions",
        JSON.stringify(pdsOtherInfoNonacademicDistinctions)
      );
      sessionStorage.setItem(
        "pdsOtherInfoAssociationMembers",
        JSON.stringify(pdsOtherInfoAssociationMembers)
      );
      sessionStorage.setItem("pdsReferences", JSON.stringify(pdsReferences));
      sessionStorage.setItem("pdsQuestions", JSON.stringify(pdsQuestions));
      sessionStorage.setItem(
        "pdsAdditionalInfo",
        JSON.stringify(pdsAdditionalInfo)
      );
      sessionStorage.setItem("children", JSON.stringify(children));
      this.$router.push({ path: "/viewPds", query: { pdsData: data } }); // -> /user
    },

    //retrieve
    async retrievePds() {
      console.log(this.user);
      this.loading = true;

      if (this.user == "Admin") {
        const returnedAllData = await this.$store.dispatch("retrievePdsInfo");
        console.log("reached");
        //this.$store.getters.pdsInfosAll = returnedAllData.data
        this.pds =
          returnedAllData.data[0][0].personalInfo != undefined
            ? returnedAllData.data[0][0].personalInfo
            : [];
        this.loading = false;
      } else if (this.user == "Teacher") {
        const returnedData = await this.$store.dispatch("retrievePdsInfoById");
        const imageUrl = await this.$store.dispatch("getImageUrl");
        this.pds = returnedData.data;
        this.imageUrl = imageUrl.data;
        console.log(returnedData);
        if (this.pds[0][0].personalInfo[0] == undefined) {
          this.create = true;
        } else {
          this.create = false;
          this.pdsPersonalInfo = [];
          this.pdsFamilyBackground = [];
          this.pdsEducationalBackground = [];
          this.pdsCivilServiceEligibility = [];
          this.pdsWorkExperience = [];
          this.pdsVoluntaryWorkInvolvement = [];
          this.pdsLearningAndDevelopment = [];
          this.pdsOtherInfo = [];

          this.references = [];
          this.pdsQuestions = [];
          this.pdsAdditionalInfo = [];
          this.pdsPersonalInfo.push(this.pds[0][0].personalInfo[0]);

          // console.log(this.pdsPersonalInfo);
          this.pdsFamilyBackground.push(this.pds[1][0].familyBackground[0]);

          for (let educ of this.pds[2][0].educationalBackground) {
            this.pdsEducationalBackground.push(educ);
          }
          for (let civil of this.pds[3][0].civilServiceEligibility) {
            this.pdsCivilServiceEligibility.push(civil);
          }
          for (let work of this.pds[4][0].workExperience) {
            this.pdsWorkExperience.push(work);
          }

          for (let voluntary of this.pds[5][0].voluntaryWorkInvolvement) {
            this.pdsVoluntaryWorkInvolvement.push(voluntary);
          }
          for (let learning of this.pds[6][0].learningAndDevelopment) {
            this.pdsLearningAndDevelopment.push(learning);
          }
          for (let other of this.pds[7][0].otherInfo) {
            this.pdsOtherInfo.push(other);
          }

          for (let references of this.pds[8][0].references) {
            this.pdsReferences.push(references);
          }

          this.pdsQuestions.push(this.pds[9][0].pdsQuestions[0]);
          this.pdsAdditionalInfo.push(this.pds[10][0].pdsAdditionalInfo[0]);
          // for (const child of this.pds[10][0].children) {
          //   this.pdsChildren.push(child);
          // }
        }
      } else {
        this.pds = [];
      }

      // this.pds=this.$store.getters.pdsInfosAll;
      // console.log(this.pds)
      //   console.log(this.pds)
    },
    formatDate(date) {
      if (!date) return null;

      const [year, month, day] = date.split("-");
      return `${month}/${day}/${year}`;
    },
    parseDate(date) {
      if (!date) return null;

      const [month, day, year] = date.split("/");
      return `${year}-${month.padStart(2, "0")}-${day.padStart(2, "0")}`;
    },
    addRow: function (array) {
      console.log(array);
      let newRow = [];
      switch (array) {
        case "civilServiceEligibility":
          newRow = {
            id: "",
            careerService: "",
            rating: "",
            dateOfExamination: "",
            placeOfExamination: "",
            licenseNumber: "",
            dateOfValidity: "",
          };
          this.civilServiceEligibility.push(newRow);
          break;
        case "voluntaryWorkInvolvement":
          newRow = {
            id: "",
            nameAdAddressOfOrgVolWork: "",
            inclusiveDatesFromVolWork: "",
            inclusiveDatesToVolWork: "",
            numberOfHoursVolWork: "",
            positionOfWorkVolWork: "",
          };
          this.voluntaryWorkInvolvement.push(newRow);
          break;
        case "educationalBackground":
          newRow = {
            id: "",
            educBackgroundLevel: "",
            educBackgroundNameOfSchool: "",
            educBackgroundBasicEducation: "",
            educBackgroundPeriodOfAttendanceFrom: "",
            educBackgroundPeriodOfAttendanceTo: "",
            educBackgroundHighestLevel: "",
            educBackgroundYearGraduated: "",
            educBackgroundScholarship: "",
          };
          this.educationalBackground.push(newRow);
          break;
        case "learningAndDevelopment":
          newRow = {
            id: "",
            learningAndDevelopmentInterventions: "",
            learningAndDevelopmentInclusiveDatesFrom: "",
            learningAndDevelopmentInclusiveDatesTo: "",
            learningAndDevelopmentNumberOfHours: "",
            learningAndDevelopmentTypeOfLD: "",
            learningAndDevelopmentConductedBy: "",
          };
          this.learningAndDevelopment.push(newRow);
          break;
        case "otherInfo":
          newRow = {
            id: "",
            otherInfoSpecialSkills: "",
            otherInfoNonacademicDistinctions: "",
            otherInfoAssociationMembers: "",
          };
          this.otherInfo.push(newRow);
          break;

        case "workExperience":
          newRow = {
            id: "",
            inclusiveDateFromWorkExperience: "",
            inclusiveDateToWorkExperience: "",
            positionTitleWorkExperience: "",
            departmentWorkExperience: "",
            monthlySalaryWorkExperience: "",
            salaryGradeWorkExperience: "",
            statusOfAppointmentWorkExperience: "",
            governmentServiceWorkExperience: "",
          };
          this.workExperience.push(newRow);
          break;
        case "references":
          console.log("reached");
          newRow = {
            id: "",
            name: "",
            address: "",
            telephoneNo: "",
          };
          this.references.push(newRow);
          break;
        case "children":
          console.log("reached");
          newRow = {
            id: "",
            childName: "",
          };
          this.children.push(newRow);
          break;
        default:
          return "Something went wrong!";
      }
    },
    removeRow: function (array, row) {
      console.log(array, row);
      switch (array) {
        case "educationalBackground":
          this.educationalBackground.splice(row, 1);
          break;
        case "workExperience":
          this.workExperience.splice(row, 1);
          break;
        case "civilServiceEligibility":
          this.civilServiceEligibility.splice(row, 1);
          break;
        case "voluntaryWorkInvolvement":
          this.voluntaryWorkInvolvement.splice(row, 1);
          break;
        case "learningAndDevelopment":
          this.learningAndDevelopment.splice(row, 1);
          break;
        case "otherInfo":
          this.otherInfo.splice(row, 1);
          break;
        // case "otherInfoNonacademicDistinctions":
        //   this.otherInfoNonacademicDistinctions.splice(row, 1);
        //   break;
        // case "otherInfoAssociationMembers":
        //   this.otherInfoAssociationMembers.splice(row, 1);
        //   break;
        case "references":
          this.references.splice(row, 1);
          break;
        case "children":
          this.children.splice(row, 1);
          break;
        default:
          return "Something went wrong!";
      }
    },
    editPds: function () {
      console.log("reached");
      this.create = false;
      this.edit = true;
      //pass the value from backend to individual variables in data
      console.log(this.pdsPersonalInfo);
      (this.personalSurname = this.pdsPersonalInfo[0].last_name),
        (this.personalFirstName = this.pdsPersonalInfo[0].first_name);
      this.personalMiddleName = this.pdsPersonalInfo[0].middle_name;
      this.personalSuffix = this.pdsPersonalInfo[0].last_name;
      this.personalDateOfBirth = this.pdsPersonalInfo[0].date_of_birth;
      this.personalPlaceOfBirth = this.pdsPersonalInfo[0].place_of_birth;
      this.personalCitizenship = this.pdsPersonalInfo[0].citizenship;
      this.personalDualCitizenship = this.pdsPersonalInfo[0].dual_citizenship;
      this.countryOfCitizenship =
        this.pdsPersonalInfo[0].country_of_citizenship;
      this.personalSex = this.pdsPersonalInfo[0].sex;
      this.personalCivilStatus = this.pdsPersonalInfo[0].civil_status;
      this.personalHeight = this.pdsPersonalInfo[0].height;
      this.personalWeight = this.pdsPersonalInfo[0].weight;
      this.personalBloodType = this.pdsPersonalInfo[0].blood_type;
      this.personalGSISIDNo = this.pdsPersonalInfo[0].gsis_id_no;
      this.personalResAddressHouseNo =
        this.pdsPersonalInfo[0].residential_address_house_no;
      this.personalResAddressStreet =
        this.pdsPersonalInfo[0].residential_address_street;
      this.personalResAddressSubdivision =
        this.pdsPersonalInfo[0].residential_address_subdivision;
      this.personalResAddressBarangay =
        this.pdsPersonalInfo[0].residential_address_barangay;
      this.personalResAddressCity =
        this.pdsPersonalInfo[0].residential_address_city;
      this.personalResAddressProvince =
        this.pdsPersonalInfo[0].residential_address_province;
      this.personalZipCode =
        this.pdsPersonalInfo[0].residential_address_zip_code;
      this.personalPAGIBIGIDNo = this.pdsPersonalInfo[0].pag_ibig_id_no;
      this.personalPHILHEALTHNo = this.pdsPersonalInfo[0].philhealth_no;
      this.personalPermanentAddHouseNo =
        this.pdsPersonalInfo[0].permanent_address_house_no;
      this.personalPermanentAddStreet =
        this.pdsPersonalInfo[0].permanent_address_street;
      this.personalPermanentAddSubdivision =
        this.pdsPersonalInfo[0].permanent_address_subdivison;
      this.personalPermanentAddBarangay =
        this.pdsPersonalInfo[0].permanent_address_barangay;
      this.personalPermanentAddCity =
        this.pdsPersonalInfo[0].permanent_address_city;
      this.personalPermanentAddProvince =
        this.pdsPersonalInfo[0].permanent_address_province;
      this.personalPermanentAddZipCode =
        this.pdsPersonalInfo[0].permanent_address_zip_code;
      this.personalSSSNo = this.pdsPersonalInfo[0].sss_no;
      this.personalTelephoneNo = this.pdsPersonalInfo[0].telephone_no;
      this.personalTinNo = this.pdsPersonalInfo[0].tin_no;
      this.personalMobileNo = this.pdsPersonalInfo[0].mobile_no;
      this.personalAgencyEmployeeNo =
        this.pdsPersonalInfo[0].agency_employee_no;
      this.personalEmailAddress = this.pdsPersonalInfo[0].email_address;

      this.familySpouseSurname = this.pdsFamilyBackground[0].spouse_last_name;
      this.familySpouseFirstName =
        this.pdsFamilyBackground[0].spouse_first_name;
      this.familySpouseMiddleName =
        this.pdsFamilyBackground[0].spouse_middle_name;
      this.familySpouseSuffix = this.pdsFamilyBackground[0].spouse_suffix;
      this.familySpouseOccupation =
        this.pdsFamilyBackground[0].spouse_occupation;
      this.familyEmployerName = this.pdsFamilyBackground[0].spouse_employer;
      this.firstChild = this.pdsFamilyBackground[0].first_child;
      this.secondChild = this.pdsFamilyBackground[0].second_child;
      this.thirdChild = this.pdsFamilyBackground[0].third_child;
      this.fourthChild = this.pdsFamilyBackground[0].fourth_child;
      this.fifthChild = this.pdsFamilyBackground[0].fifth_child;
      this.sixthChild = this.pdsFamilyBackground[0].sixth_child;
      this.familyBusinessAddress =
        this.pdsFamilyBackground[0].spouse_business_address;
      this.familyTelephoneNo = this.pdsFamilyBackground[0].spouse_telephone_no;
      this.familyFatherSurname = this.pdsFamilyBackground[0].father_last_name;
      this.familyFatherFirstName =
        this.pdsFamilyBackground[0].father_first_name;
      this.familyFatherMiddleName =
        this.pdsFamilyBackground[0].father_middle_name;
      this.familyFatherSuffix = this.pdsFamilyBackground[0].father_suffix;
      this.familyMotherMaidenName =
        this.pdsFamilyBackground[0].mother_maiden_name;
      this.familyMotherSurname = this.pdsFamilyBackground[0].mother_last_name;
      this.familyMotherFirstName =
        this.pdsFamilyBackground[0].mother_first_name;
      this.familyMotherMiddleName =
        this.pdsFamilyBackground[0].mother_middle_name;
      this.dateOfBirthSpouse = this.pdsFamilyBackground[0].spouse_date_of_birth;
      this.dateOfBirthFather = this.pdsFamilyBackground[0].father_date_of_birth;
      this.dateOfBirthMother = this.pdsFamilyBackground[0].mother_date_of_birth;
      console.log(this.pdsEducationalBackground);
      this.educationalBackground = [];
      for (const [index, item] of this.pdsEducationalBackground.entries()) {
        console.log(index);
        const newRow = {
          id: item.id,
          educBackgroundLevel: item.level,
          educBackgroundNameOfSchool: item.name_of_school,
          educBackgroundBasicEducation: item.basic_education_course,
          educBackgroundPeriodOfAttendanceFrom: item.period_of_attendance_from,
          educBackgroundPeriodOfAttendanceTo: item.period_of_attendance_to,
          educBackgroundHighestLevel: item.highest_level_units_earned,
          educBackgroundYearGraduated: item.year_graduated,
          educBackgroundScholarship: item.academic_honors_received,
        };
        this.educationalBackground.push(newRow);
      }
      console.log(this.educationalBackground);
      this.civilServiceEligibility = [];
      console.log(this.pdsCivilServiceEligibility);
      for (const [index, item] of this.pdsCivilServiceEligibility.entries()) {
        console.log(index);
        const newRow = {
          id: item.id,
          careerService: item.career_service,
          rating: item.rating,
          dateOfExamination: item.date_of_examination,
          placeOfExamination: item.place_of_examination,
          licenseNumber: item.license_number,
          dateOfValidity: item.license_date_of_validity,
        };
        this.civilServiceEligibility.push(newRow);
      }
      console.log(this.pdsWorkExperience);
      this.workExperience = [];
      for (const [index, item] of this.pdsWorkExperience.entries()) {
        console.log(index);
        const newRow = {
          id: item.id,
          inclusiveDateFromWorkExperience: item.work_inclusive_dates_from,
          inclusiveDateToWorkExperience: item.work_inclusive_dates_to,
          positionTitleWorkExperience: item.position,
          departmentWorkExperience: item.department,
          monthlySalaryWorkExperience: item.monthly_salary,
          salaryGradeWorkExperience: item.salary_grade,
          statusOfAppointmentWorkExperience: item.status_of_appointment,
          governmentServiceWorkExperience: item.government_service,
        };
        this.workExperience.push(newRow);
      }
      console.log(this.pdsVoluntaryWorkInvolvement);
      this.voluntaryWorkInvolvement = [];
      for (const [index, item] of this.pdsVoluntaryWorkInvolvement.entries()) {
        console.log(index);
        const newRow = {
          id: item.id,
          nameAndAddressOfOrgVolWork: item.organization_name_and_address,
          inclusiveDatesFromVolWork: item.voluntary_inclusive_dates_from,
          inclusiveDatesToVolWork: item.voluntary_inclusive_dates_to,
          numberOfHoursVolWork: item.number_of_hours,
          positionOfWorkVolWork: item.position,
        };
        this.voluntaryWorkInvolvement.push(newRow);
      }
      console.log(this.pdsLearningAndDevelopment);
      this.learningAndDevelopment = [];
      for (const [index, item] of this.pdsLearningAndDevelopment.entries()) {
        console.log(index);
        const newRow = {
          id: item.id,
          learningAndDevelopmentInterventions:
            item.learning_and_development_interventions,
          learningAndDevelopmentInclusiveDatesFrom:
            item.learning_inclusive_dates_from,
          learningAndDevelopmentInclusiveDatesTo:
            item.learning_inclusive_dates_to,
          learningAndDevelopmentNumberOfHours: item.number_of_hours,
          learningAndDevelopmentTypeOfLD: item.type_of_ld,
          learningAndDevelopmentConductedBy: item.conducted_by,
        };
        this.learningAndDevelopment.push(newRow);
      }
      console.log(this.pdsOtherInfoSpecialSkills);
      this.otherInfo = [];
      for (const [index, item] of this.pdsOtherInfo.entries()) {
        console.log(index);
        const newRow = {
          id: item.id,
          otherInfoSpecialSkills: item.special_skills_and_hobbies,
          otherInfoNonacademicDistinctions: item.nonacademic_distinctions,
          otherInfoAssociationMembers: item.association_members,
        };
        this.otherInfo.push(newRow);
      }

      console.log(this.pdsQuestions);
      this.questionThirtyFour = this.pdsQuestions[0].question_thirty_four;
      this.questionThirtyFiveA = this.pdsQuestions[0].question_thirty_five_a;
      this.questionThirtyFiveDateFiled =
        this.pdsQuestions[0].question_thirty_five_b_date_filed;
      this.questionThirtyFiveCaseStatus =
        this.pdsQuestions[0].question_thirty_five_B_status_of_case;
      this.questionThirtySix = this.pdsQuestions[0].question_thirty_six;
      this.questionThirtySeven = this.pdsQuestions[0].question_thirty_seven;
      this.questionThirtyEightA = this.pdsQuestions[0].question_thirty_eight_a;
      this.questionThirtyEightB = this.pdsQuestions[0].question_thirty_eight_b;
      this.questionThirtyNine = this.pdsQuestions[0].question_thirty_nine;
      this.questionFourtyA = this.pdsQuestions[0].question_fourty_a;
      this.questionFourtyB = this.pdsQuestions[0].question_fourty_b;
      this.questionFourtyB = this.pdsQuestions[0].question_fourty_b;
      console.log(this.pdsReferences);
      this.references = [];
      for (const [index, item] of this.pdsReferences.entries()) {
        console.log(index);
        const newRow = {
          id: item.id,
          name: item.reference_name,
          address: item.reference_address,
          telephoneNo: item.reference_tel_no,
        };
        this.references.push(newRow);
      }
      //console.log(this.pdsChildren);
      //this.children = [];
      // for (const [index, item] of this.pdsChildren.entries()) {
      //   console.log(index);
      //   const newRow = {
      //     id: item.id,
      //     childName: item.child_name,
      //   };
      //   this.children.push(newRow);
      // }
      console.log(this.pdsAdditionalInfo);

      this.personalInfoId = this.pdsPersonalInfo[0].id;
      this.pdsAdditionalInfoId = this.pdsAdditionalInfo[0].id;
      this.personalPhotoAttachment = this.pdsAdditionalInfo[0].photo;
      this.governmentIssuedID = this.pdsAdditionalInfo[0].government_id;
      this.governmentIssuedIDNo = this.pdsAdditionalInfo[0].id_no;
      this.governmentIDDateOrPlaceIssued =
        this.pdsAdditionalInfo[0].date_place_of_issuance;
      this.oathSignature = this.pdsAdditionalInfo[0].signature;
      this.oathDateAccomplished =
        this.pdsAdditionalInfo[0].oath_date_accomplished;
      this.rightThumbMark = this.pdsAdditionalInfo[0].right_thumbmark;
      this.personAdministeringOath =
        this.pdsAdditionalInfo[0].person_administering_oath;
      this.subscribedAndSwornDate = this.pdsAdditionalInfo[0].sworn_date;
      console.log(this.pdsPersonalInfo);
      this.educBackgroundSignature =
        this.imageUrl.educationalBackgroundSignature;
      this.workExperienceSignature =
        this.pdsPersonalInfo[0].work_experience_signature;
      this.otherInfoSignature = this.pdsPersonalInfo[0].other_info_signature;
      this.idList = {
        personalInfoId: this.pdsPersonalInfo[0].id,
        familyBackgroundId: this.pdsFamilyBackground[0].id,
        pdsQuestionsId: this.pdsQuestions[0].id,
        pdsAdditionalInfo: this.pdsAdditionalInfoId,
      };
      console.log(this.educBackgroundSignature);
    },
    async print() {
      // Pass the element id here
      await this.$htmlToPaper("printMe");
    },
    finalizePds: async function () {
      console.log(this.dateOfBirthSpouse);
      if (
        this.$refs.pds.validate() &&
        this.$refs.pdsA.validate() &&
        this.$refs.pdsB.validate() &&
        this.$refs.pdsC3.validate()
      ) {
        const personalSurname = this.personalSurname;
        const personalFirstName = this.personalFirstName;
        const personalMiddleName = this.personalMiddleName;
        const personalSuffix = this.personalSuffix;
        const personalDateOfBirth = moment(this.personalDateOfBirth).format(
          "YYYY-MM-DD"
        );
        const personalPlaceOfBirth = this.personalPlaceOfBirth;
        const personalCitizenship = this.personalCitizenship;
        const personalDualCitizenship = this.personalDualCitizenship;
        const countryOfCitizenship = this.countryOfCitizenship;
        const personalSex = this.personalSex;
        const personalCivilStatus = this.personalCivilStatus;
        const personalHeight = this.personalHeight;
        const personalWeight = this.personalWeight;
        const personalBloodType = this.personalBloodType;
        const personalGSISIDNo = this.personalGSISIDNo;
        const personalResAddressHouseNo = this.personalResAddressHouseNo;
        const personalResAddressStreet = this.personalResAddressStreet;
        const personalResAddressSubdivision =
          this.personalResAddressSubdivision;
        const personalResAddressBarangay = this.personalResAddressBarangay;
        const personalResAddressCity = this.personalResAddressCity;
        const personalResAddressProvince = this.personalResAddressProvince;
        const personalZipCode = this.personalZipCode;
        const personalPAGIBIGIDNo = this.personalPAGIBIGIDNo;
        const personalPHILHEALTHNo = this.personalPHILHEALTHNo;
        const personalPermanentAddHouseNo = this.personalPermanentAddHouseNo;
        const personalPermanentAddStreet = this.personalPermanentAddStreet;
        const personalPermanentAddSubdivision =
          this.personalPermanentAddSubdivision;
        const personalPermanentAddBarangay = this.personalPermanentAddBarangay;
        const personalPermanentAddCity = this.personalPermanentAddCity;
        const personalPermanentAddProvince = this.personalPermanentAddProvince;
        const personalPermanentAddZipCode = this.personalPermanentAddZipCode;
        const personalSSSNo = this.personalSSSNo;
        const personalTelephoneNo = this.personalTelephoneNo;
        const personalTinNo = this.personalTinNo;
        const personalMobileNo = this.personalMobileNo;
        const personalAgencyEmployeeNo = this.personalAgencyEmployeeNo;
        const personalEmailAddress = this.personalEmailAddress;
        const familySpouseSurname = this.familySpouseSurname;
        const familySpouseFirstName = this.familySpouseFirstName;
        const familySpouseMiddleName = this.familySpouseMiddleName;
        const familySpouseSuffix = this.familySpouseSuffix;
        const familySpouseOccupation = this.familySpouseOccupation;
        const familyEmployerName = this.familyEmployerName;
        const familyBusinessAddress = this.familyBusinessAddress;
        const familyTelephoneNo = this.familyTelephoneNo;
        const familyFatherSurname = this.familyFatherSurname;
        const familyFatherFirstName = this.familyFatherFirstName;
        const familyFatherMiddleName = this.familyFatherMiddleName;
        const familyFatherSuffix = this.familyFatherSuffix;
        const familyMotherMaidenName = this.familyMotherMaidenName;
        const familyMotherSurname = this.familyMotherSurname;
        const familyMotherFirstName = this.familyMotherFirstName;
        const familyMotherMiddleName = this.familyMotherMiddleName;
        const firstChild = this.firstChild;
        const secondChild = this.secondChild;
        const thirdChild = this.thirdChild;
        const fourthChild = this.fourthChild;
        const fifthChild = this.fifthChild;
        const sixthChild = this.sixthChild;
        const dateOfBirthSpouse =
          this.dateOfBirthSpouse == null
            ? null
            : moment(this.dateOfBirthSpouse).format("YYYY-MM-DD");
        const dateOfBirthFather = moment(this.dateOfBirthFather).format(
          "YYYY-MM-DD"
        );
        const dateOfBirthMother = moment(this.dateOfBirthMother).format(
          "YYYY-MM-DD"
        );
        for (let date of this.educationalBackground) {
          date.educBackgroundPeriodOfAttendanceFrom = moment(
            date.educBackgroundPeriodOfAttendanceFrom
          ).format("YYYY-MM-DD");
          date.educBackgroundPeriodOfAttendanceTo = moment(
            date.educBackgroundPeriodOfAttendanceTo
          ).format("YYYY-MM-DD");
        }
        const educationalBackground = this.educationalBackground;
        const educBackgroundSignature = this.educBackgroundSignature;
        const educBackgroundDateOfSignature = moment(
          this.educBackgroundDateOfSignature
        ).format("YYYY-MM-DD");
        for (let date of this.civilServiceEligibility) {
          date.dateOfExamination = moment(date.dateOfExamination).format(
            "YYYY-MM-DD"
          );
        }
        const civilServiceEligibility = this.civilServiceEligibility;
        for (let date of this.workExperience) {
          date.inclusiveDateFromWorkExperience = moment(
            date.inclusiveDateFromWorkExperience
          ).format("YYYY-MM-DD");
          date.inclusiveDateToWorkExperience = moment(
            date.inclusiveDateToWorkExperience
          ).format("YYYY-MM-DD");
        }
        const workExperience = this.workExperience;
        const workExperienceSignature = this.workExperienceSignature;
        const workExperienceDateOfSignature = moment(
          this.workExperienceDateOfSignature
        ).format("YYYY-MM-DD");
        for (let date of this.voluntaryWorkInvolvement) {
          date.inclusiveDatesFromVolWork = moment(
            date.inclusiveDatesFromVolWork
          ).format("YYYY-MM-DD");
          date.inclusiveDatesToVolWork = moment(
            date.inclusiveDatesToVolWork
          ).format("YYYY-MM-DD");
        }
        const voluntaryWorkInvolvement = this.voluntaryWorkInvolvement;
        for (let date of this.learningAndDevelopment) {
          date.learningAndDevelopmentInclusiveDatesFrom = moment(
            date.learningAndDevelopmentInclusiveDatesFrom
          ).format("YYYY-MM-DD");
          date.learningAndDevelopmentInclusiveDatesTo = moment(
            date.learningAndDevelopmentInclusiveDatesTo
          ).format("YYYY-MM-DD");
        }
        const learningAndDevelopment = this.learningAndDevelopment;

        const otherInfo = this.otherInfo;
        const otherInfoSignature = this.otherInfoSignature;
        const otherInfoDateOfSignature = moment(
          this.otherInfoDateOfSignature
        ).format("YYYY-MM-DD");
        const questionThirtyFour = this.questionThirtyFour;
        const questionThirtyFiveA = this.questionThirtyFiveA;
        const questionThirtyFiveBDateFiled = this.questionThirtyFiveDateFiled;
        const questionThirtyFiveBStatusOfCase =
          this.questionThirtyFiveCaseStatus;
        const questionThirtySix = this.questionThirtySix;
        const questionThirtySeven = this.questionThirtySeven;
        const questionThirtyEightA = this.questionThirtyEightA;
        const questionThirtyEightB = this.questionThirtyEightB;
        const questionThirtyNine = this.questionThirtyNine;
        const questionFourtyA = this.questionFourtyA;
        const questionFourtyB = this.questionFourtyB;
        const questionFourtyC = this.questionFourtyC;
        const references = this.references;
        const personalPhotoAttachment = this.personalPhotoAttachment;
        const governmentIssuedID = this.governmentIssuedID;
        const governmentIssuedIDNo = this.governmentIssuedIDNo;
        const governmentIDDateOrPlaceIssued =
          this.governmentIDDateOrPlaceIssued;
        const oathSignature = this.oathSignature;
        const oathDateAccomplished = moment(this.oathDateAccomplished).format(
          "YYYY-MM-DD"
        );
        const rightThumbMark = this.rightThumbMark;
        const subscribedAndSwornDate = moment(
          this.subscribedAndSwornDate
        ).format("YYYY-MM-DD");
        const personAdministeringOath = this.personAdministeringOath;
        //const user = JSON.parse(sessionStorage.getItem('user_session')).id
        const user = JSON.parse(sessionStorage.user_session).id;
        const idList = this.idList;
        let formData = new FormData();
        formData.append("educBackgroundSignature", educBackgroundSignature);
        formData.append("workExperienceSignature", workExperienceSignature);
        formData.append("otherInfoSignature", otherInfoSignature);
        formData.append("personalPhotoAttachment", personalPhotoAttachment);
        formData.append("oathSignature", oathSignature);
        formData.append("rightThumbMark", rightThumbMark);
        formData.append("personAdministeringOath", personAdministeringOath);
        formData.append("user", user);
        const data = {
          user,
          idList,
          personalSurname,
          personalFirstName,
          personalMiddleName,
          personalSuffix,
          personalDateOfBirth,
          personalPlaceOfBirth,
          personalCitizenship,
          countryOfCitizenship,
          personalDualCitizenship,
          personalSex,
          personalCivilStatus,
          personalHeight,
          personalWeight,
          personalBloodType,
          personalGSISIDNo,
          personalResAddressHouseNo,
          personalResAddressStreet,
          personalResAddressSubdivision,
          personalResAddressBarangay,
          personalResAddressCity,
          personalResAddressProvince,
          personalZipCode,
          personalPAGIBIGIDNo,
          personalPHILHEALTHNo,
          personalPermanentAddHouseNo,
          personalPermanentAddStreet,
          personalPermanentAddSubdivision,
          personalPermanentAddBarangay,
          personalPermanentAddCity,
          personalPermanentAddProvince,
          personalPermanentAddZipCode,
          personalSSSNo,
          personalTelephoneNo,
          personalTinNo,
          personalMobileNo,
          personalAgencyEmployeeNo,
          personalEmailAddress,
          familySpouseSurname,
          familySpouseFirstName,
          familySpouseMiddleName,
          familySpouseSuffix,
          familySpouseOccupation,
          familyEmployerName,
          familyBusinessAddress,
          familyTelephoneNo,
          familyFatherSurname,
          familyFatherFirstName,
          familyFatherMiddleName,
          familyFatherSuffix,
          familyMotherMaidenName,
          familyMotherSurname,
          familyMotherFirstName,
          familyMotherMiddleName,
          firstChild,
          secondChild,
          thirdChild,
          fourthChild,
          fifthChild,
          sixthChild,
          dateOfBirthSpouse,
          dateOfBirthFather,
          dateOfBirthMother,
          educationalBackground,
          educBackgroundDateOfSignature,
          civilServiceEligibility,
          workExperience,

          workExperienceDateOfSignature,
          voluntaryWorkInvolvement,
          learningAndDevelopment,
          otherInfo,

          otherInfoDateOfSignature,
          questionThirtyFour,
          questionThirtyFiveA,
          questionThirtyFiveBDateFiled,
          questionThirtyFiveBStatusOfCase,
          questionThirtySix,
          questionThirtySeven,
          questionThirtyEightA,
          questionThirtyEightB,
          questionThirtyNine,
          questionFourtyA,
          questionFourtyB,
          questionFourtyC,
          references,

          governmentIssuedID,
          governmentIssuedIDNo,
          governmentIDDateOrPlaceIssued,

          oathDateAccomplished,
          rightThumbMark,
          subscribedAndSwornDate,
        };
        if (this.create == true) {
          /*formDataEducationalBackground,workExperienceSignature,otherInfoSignature,personalPhotoAttachment,oathSignature,personAdministeringOath,*/
          const returnedData = await this.$store.dispatch("createPds", data);
          console.log(returnedData);
          let personalInfoId = returnedData.data[0][0].personalInfoId[0].id;
          let pdsAdditionalInfoId =
            returnedData.data[1][0].pdsAdditionalInfoId[0].id;
          let message = returnedData.data[2][0].message;
          console.log(personalInfoId, pdsAdditionalInfoId, message);
          formData.append("personalInfoId", personalInfoId);

          formData.append("pdsAdditionalInfoId", pdsAdditionalInfoId);
          if (message == "success") {
            const fileUpload = await this.$store.dispatch(
              "uploadFile",
              formData
            );
            if (fileUpload.data == "success") {
              this.pds = this.$store.getters.pdsInfosAll;
              this.create = false;
              this.retrievePds();
            }
            //this.pds = this.$store.getters.pdsInfosAll;
            //this.retrievePds()
          }
        } else if (this.edit == true) {
          formData.append("personalInfoId", this.personalInfoId);

          formData.append("pdsAdditionalInfoId", this.pdsAdditionalInfoId);
          const returnedData = await this.$store.dispatch(
            "updatePdsInfo",
            data
          );

          const fileUpload = await this.$store.dispatch("uploadFile", formData);
          console.log(returnedData, fileUpload);

          this.edit = false;
          this.retrievePds();
        }
      }
    },
    download: async function () {
      let formData = new FormData();
      formData.append("fileName", "sung_jin_woo_by_hkiddo_ddsq3y4-pre.jpg");
      formData.append("file", this.file);
      formData.append("path", "employee/other-data/");
      this.$store.dispatch("downloadAttachment", formData);
    },
    handleFileInput: function (event) {
      console.log(event);
      let formData = new FormData();
      // formDataEducationalBackground.append("fileName", event.name);
      formData.append("fileEducBackgroundSignature", event);
      formData.append("user", 1);

      if (event) {
        var reader = new FileReader();
        // Define a callback function to run, when FileReader finishes its job
        reader.onload = (e) => {
          // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
          // Read image as base64 and set to imageData
          this.imageData = e.target.result;
        };
        // Start the reader job - read file as a data url (base64 format)
        reader.readAsDataURL(event);
      }
      // console.log(formDataEducationalBackground);
      //  this.$store.dispatch("uploadFile", formData);
      //   let fileReader = new fileReader();
      // fileReader.readAsDataUrl(imageFile)
      // fileReader.addEventListener('load', () => {
      //   imageUrl.value;
      // })
    },
  },
  // watch(imageFile, ()=> {

  // })
};
</script>

<style scoped src="../../assets/css/main.css" crossorigin="anonymous">
* {
  font-size: 10px;
  font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
}
.pdsA,
td,
th,
tr {
  font-size: 10px;
  word-wrap: none;
}
</style>
