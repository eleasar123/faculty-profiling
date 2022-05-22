<template >

   <v-container fluid style="" class="pa-0 ma-0 text-center">
      <v-btn @click="back" class="float-right">Back</v-btn>
    
     <v-container
      id="printMe"
      class="ma-0 mt-6 text-center"
      style=""
    >
       <v-tabs
  >
  <v-tab>C1</v-tab>
  <v-tab-item >
    <v-container fluid class="ma-0 pa-0" id="printMeC1">
      <v-container fluid
        class="ma-0 pa-0 text-left pdsContainer"
        style="border: solid 1px; height: fit-content"
      >
        <span>CS Form N0.212</span>
        <v-container fluid class="ml-auto mr-auto mt-0">
          <span class="spanPdsThree" style="font-weight:bold"> Revised 2017</span
          ><span
            class="headerPds"
           
            >Personal Data Sheet</span
          ></v-container
        >

        <span
          label="Search"
          single-line
          hide-details
          class="spanPdsOne"
        >
          WARNING: Any misrepresentation made in the Personal Data Sheet and the
          Work Experience Sheet shall cause the filing of
          administrative/criminal case/s against the person concerned.
        </span>
        <span
          label="Search"
          single-line
          hide-details
          class="spanPdsOne"
        >
          READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS)
          BEFORE ACCOMPLISHING THE PDS FORM.</span
        ><br />
        <span class="spanPdsTwo"
          >Print legibly. Tick appropriate boxes ( ) and use separate sheet if
          necessary. Indicate N/A if not applicable. </span><span class="spanPdsOne">DO NOT ABBREVIATE.</span><span class="spanPdsThree"> 1. CS ID
          No. </span><span class="spanPdsThree">(Do not fill up. For CSC use only)</span>
        
      </v-container>
      <v-container
        style="
          border: solid 1px black;
          background-color: rgb(150, 150, 150);
          color: white;
        "
        class="text-left header"
      >
        I. PERSONAL INFORMATION</v-container
      >
      <v-simple-table
        id="pdsA"
        class="pa-0 mb-0 text-center"
        style="border: solid 1px"
        v-for="row in pdsPersonalInfo"
        :key="row.id"
      >
        <colgroup>
          <col  id="colsPersonalInfoOne"/>
          <col  id="colsPersonalInfoTwo"/>
          <!-- <col width="80px" style="background-color:yellow !important;border:solid 2px yellow"/> -->
          <col  id="colsPersonalInfoThree"/>
          <col  id="colsPersonalInfoFour"/>
          <col  id="colsPersonalInfoFive"/>
          <col  id="colsPersonalInfoSix"/>
          <col id="colsPersonalInfoSeven"/>
        </colgroup>

        <tr class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              border-bottom: none;
              background-color: rgb(234, 234, 234);
            "
          >
            2. SURNAME
          </td>
          <td colspan="7"  class="tableData">
            {{ row.last_name }}
          </td>
        </tr>

        <tr class="tableRow">
          <td
            class="tableHeader"
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
          <td colspan="4" class="tableData">
            {{ row.first_name }}
          </td>
          <td
            class="tableData"
            colspan="3"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            <span
              class="
               suffix
              "
              >NAME EXTENSION (JR., SR)
            </span>

            {{ row.suffix }}
          </td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
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
          <td colspan="7" class="tableData">
            {{ row.middle_name }}
          </td>
        </tr>

        <tr class="tableRow">
          <td
            class="tableHeader"
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
          <td colspan="2" class="tableData">
            {{ row.date_of_birth }}
          </td>
          <td
            class="tableHeader"
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
          <td colspan="3" class="tableData">
            {{ row.citizenship }}
          </td>
        </tr>
        <tr style="height: 20px; font-size: 10px" class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PLACE OF BIRTH
          </td>
          <td colspan="2" class="tableData">
            {{ row.place_of_birth }}
          </td>

          <td colspan="3" class="tableData">
            {{ row.country_of_citizenship }}
          </td>
        </tr>
        <tr style="height: 20px; font-size: 10px" class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            SEX
          </td>
          <td colspan="2" class="tableData">
            {{ row.sex }}
          </td>
          <td colspan="3" class="tableData">
            {{ row.dual_citizenship }}
          </td>
        </tr>
        <tr style="height: 20px; font-size: 10px" class="tableRow">
          <td
            class="tableHeader"
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
          <td rowspan="2" colspan="2" class="tableData">
            {{ row.civil_status }}
          </td>
          <td
            class="tableHeader"
            rowspan="4"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            RESIDENTIAL<br />
            ADDRESS<br /><br /><br /><br /><br /><br>
            ZIP CODE
          </td>
          <td
            rowspan="1"
            colspan="2"
            style="border-right: none"
            class="pa-0 tableData"
          >
            <br v-if="row.residential_address_house_no == null" />
            {{ row.residential_address_house_no }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">House/Block/Lot No. </span>
          </td>
          <td
            rowspan="1"
            colspan="2"
            style="border-left: none"
            class="tableData"
          >
            <br v-if="row.residential_address_street == null" />
            {{ row.residential_address_street }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">Street </span>
          </td>
        </tr>
        <tr class="tableRow">
          <td
            rowspan="1"
            colspan="2"
            style="border-right: none"
            class="tableData"
          >
          <br v-if="row.residential_address_subdivision == null" />
            {{ row.residential_address_subdivision }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">Subdivision/Village</span>
          </td>
          <td
            rowspan="1"
            colspan="2"
            style="border-left: none"
            class="tableData"
          >
            {{ row.residential_address_barangay }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">Barangay</span>
          </td>
        </tr>

        <tr class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            HEIGHT (m)
          </td>
          <td colspan="2" class="tableData">
            {{ row.height }}
          </td>
          <td colspan="2" style="border-right: none" class="tableData">
            {{ row.residential_address_city }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">City/Municipality</span>
          </td>
          <td colspan="2" style="border-left: none" class="tableData">
            {{ row.residential_address_province }}
            <v-divider></v-divider>

            <span class="text-center locationLabel">Province</span>
          </td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            WEIGHT (kg)
          </td>
          <td colspan="2" class="tableData">
            {{ row.weight }}
          </td>

          <td colspan="4" class="tableData">
            {{ row.residential_address_zip_code }}
          </td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            BLOOD TYPE
          </td>
          <td colspan="2" class="tableData">
            {{ row.blood_type }}
          </td>
          <td
            class="tableHeader"
            rowspan="4"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PERMANENT ADDRESS<br /><br /><br /><br /><br /><br /><br />
            ZIP CODE
          </td>
          <td
            rowspan="1"
            colspan="2"
            style="border-right: none"
            class="tableData"
          >
            <br v-if="row.permanent_address_house_no == null" />
            {{ row.permanent_address_house_no }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">House/Block/Lot No. </span>
          </td>
          <td
            rowspan="1"
            colspan="2"
            style="border-left: none"
            class="tableData"
          >
            <br v-if="row.permanent_address_street == null" />
            {{ row.permanent_address_street }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">Street </span>
          </td>
        </tr>

        <tr class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            GSIS ID NO.
          </td>
          <td colspan="2" class="tableData">
            {{ row.gsis_id_no }}
          </td>
          <td colspan="2" style="border-right: none" class="tableData">
            <br v-if="row.permanent_address_subdivision == null" />
            {{ row.permanent_address_subdivision }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">Subdivision/Village </span>
          </td>
          <td colspan="2" style="border-left: none" class="tableData">
            {{ row.permanent_address_barangay }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">Barangay</span>
          </td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PAG-IBIG ID NO.
          </td>
          <td colspan="2" class="tableData">
            {{ row.pag_ibig_id_no }}
          </td>
          <td colspan="2" style="border-right: none" class="tableData">
            {{ row.permanent_address_city }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">City/Municipality </span>
          </td>
          <td colspan="2" style="border-left: none" class="tableData">
            {{ row.permanent_address_province }}
            <v-divider></v-divider>
            <span class="text-center locationLabel">Province</span>
          </td>
        </tr>
        <tr class="tableRow">
          <td class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PHILHEALTH NO.
          </td>
          <td colspan="2" class="tableData">
            {{ row.philhealth_no }}
          </td>
          <td colspan="4" class="tableData">
            {{ row.permanent_zip_code }}
          </td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            SSS NO.
          </td>
          <td colspan="2" class="tableData">
            {{ row.sss_no }}
          </td>
          <td
            class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            19.TELEPHONE NO.
          </td>
          <td colspan="4" class="tableData">
            {{ row.telephone_no }}
          </td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            14.TIN NO.
          </td>
          <td colspan="2" class="tableData">
            {{ row.tin_no }}
          </td>
          <td
            class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            20.MOBILE NO.
          </td>
          <td colspan="4" class="tableData">
            {{ row.mobile_no }}
          </td>
        </tr>
        <tr class="tableRow">
          <td class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            AGENCY EMPLOYEE NO.
          </td>
          <td colspan="2" class="tableData">
            {{ row.agency_employee_no }}
          </td>
          <td
            class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            21. E-MAIL ADDRESS (if any)
          </td>

          <td colspan="4" class="tableData">
            {{ row.email_address }}
          </td>
        </tr>
      </v-simple-table>
      <v-container
        class="header text-left header"
        style="
          border: solid 1px black;
          background-color: rgb(150, 150, 150);
          color: white;
        "
      >
        II. FAMILY BACKGROUND</v-container
      >

      <v-simple-table
        fluid
        class="ma-0 pa-0"
        v-for="row in pdsFamilyBackground"
        :key="row.id"
        style="border: solid 1px black"
      >
        <colgroup>
          <col  id="colsFamilyOne"/>
          <col  id="colsFamilyTwo"/>
          <col  id="colsFamilyThree"/>
          <col  id="colsFamilyFour"/>
          <col  id="colsFamilyFive"/>
          <col  id="colsFamilySix"/>
          <col  id="colsFamilySeven"/>
          <col  id="colsFamilyEight"/>
        </colgroup>

        <tr class="tableRow">
          <td class="tableHeader"
            style="
    
                    text-align: left;
                    border: solid 1px black;
                    background-color: rgb(234, 234, 234);width:100px;
                  "
          >
            22. SPOUSE'S SURNAME
          </td>
          <td colspan="3" style="" class="tableData">
            {{ row.spouse_last_name }}
          </td>
          <td class="tableHeader"
            colspan="3"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            23. NAME of CHILDREN (Write full name and list all)
          </td>
          <td class="tableHeader"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            DATE OF BIRTH (mm/dd/yyyy)
          </td>
        </tr>

        <tr class="tableRow">
          <td class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            FIRST NAME
          </td>
          <td colspan="2" class="tableData">
            {{ row.spouse_first_name }}
          </td>
          <td class="tableData"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
          <span
              class="
               suffix
              "
              >NAME EXTENSION (JR., SR)
            </span>&nbsp;
            {{ row.spouse_suffix }}
          </td>
          <td colspan="3" class="tableData">
            {{ row.first_child }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.spouse_date_of_birth }}
          </td>
        </tr>
        <tr class="tableRow">
          <td class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            MIDDLE NAME
          </td>
          <td colspan="3" class="tableData">
            {{ row.spouse_middle_name }}
          </td>

          <td colspan="3" class="tableData">
            {{ row.second_child }}
          </td>
          <td class="tableData"></td>
        </tr>

        <tr class="tableRow">
          <td class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            OCCUPATION
          </td>
          <td colspan="3" class="tableData">
            {{ row.spouse_occupation }}
          </td>
          <td colspan="3" class="tableData">
            {{ row.third_child }}
          </td>
          <td colspan="1" class="tableData"></td>
        </tr>
        <tr class="tableRow">
          <td
          class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            EMPLOYER/BUSINESS NAME
          </td>
          <td colspan="3" class="tableData">
            {{ row.spouse_employer }}
          </td>
          <td colspan="3" class="tableData">
            {{ row.fourth_child }}
          </td>
          <td colspan="1" class="tableData"></td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            BUSINESS ADDRESS
          </td>
          <td colspan="3" class="tableData">
            {{ row.spouse_business_address }}
          </td>
          <td colspan="3" class="tableData">
            {{ row.fifth_child }}
          </td>
          <td colspan="1" class="tableData"></td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            TELEPHONE NO.
          </td>
          <td colspan="3" class="tableData">
            {{ row.spouse_telephone_no }}
          </td>
          <td colspan="3" class="tableData">
            {{ row.sixth_child }}
          </td>
          <td colspan="1" class="tableData"></td>
        </tr>

        <tr class="tableRow">
          <td class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            25. FATHER'S SURNAME
          </td>
          <td colspan="3" class="tableData">
            {{ row.father_last_name }}
          </td>
          <td colspan="3" class="tableData"></td>
          <td colspan="1" class="tableData">
            {{ row.father_date_of_birth }}
          </td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            FIRST NAME
          </td>
          <td colspan="2" class="tableData">
            {{ row.father_first_name }}
          </td>
          <td class="tableData"
            colspan="1"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
          <span
              class="
               suffix
              "
              >NAME EXTENSION (JR., SR)&nbsp;
            </span>
            {{ row.father_suffix }}
          </td>
          <td colspan="3" class="tableData"></td>
          <td colspan="1" class="tableData"></td>
        </tr>
        <tr class="tableRow">
          <td
            class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            MIDDLE NAME
          </td>
          <td colspan="3" class="tableData">
            {{ row.father_middle_name }}
          </td>
          <td colspan="3" class="tableData"></td>
          <td colspan="1" class="tableData"></td>
        </tr>
        <tr class="tableRow">
          <td class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            26. MOTHER'S MAIDEN NAME
          </td>
          <td colspan="3" class="tableData">
            {{ row.mother_maiden_name }}
          </td>
          <td colspan="3" class="tableData"></td>
          <td colspan="1" class="tableData">
            {{ row.mother_date_of_birth }}
          </td>
        </tr>
        <tr class="tableRow">
          <td class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            SURNAME
          </td>
          <td colspan="3" class="tableData">
            {{ row.mother_last_name }}
          </td>
          <td colspan="3" class="tableData"></td>
          <td colspan="1" class="tableData"></td>
        </tr>
        <tr class="tableRow">
          <td class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            FIRST NAME
          </td>
          <td colspan="3" class="tableData">
            {{ row.mother_first_name }}
          </td>

          <td colspan="3" class="tableData"></td>
          <td colspan="1" class="tableData"></td>
        </tr>
        <tr class="tableRow">
          <td class="tableHeader"
            style="
              text-align: left;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            MIDDLE NAME
          </td>
          <td colspan="3" class="tableData">
            {{ row.mother_middle_name }}
          </td>
          <td colspan="3" class="tableData"></td>
          <td colspan="1" class="tableData"></td>
        </tr>
      </v-simple-table>
      <v-container
        class="pa-0 text-left header"
        style="
          border: solid 1px;
          background-color: rgb(150, 150, 150);
          border: solid 1px black;
          color: white;
        "
      >
        III. EDUCATIONAL BACKGROUND
      </v-container>
      <v-simple-table>
        <colgroup>
          <col width="80px" id="colsEducOne"/>
          <col width="100px" id="colsEducTwo"/>
          <col width="100px" id="colsEducThree"/>
          <col width="50px" id="colsEducFour"/>
          <col width="50px" id="colsEducFive"/>
          <col width="50px" id="colsEducSix"/>
          <col width="50px" id="colsEducSeven"/>
          <col width="50px" id="colsEducEight"/>
        </colgroup>
        <!-- <colgroup> <col width="50px"><col width="50px"></colgroup> -->

        <tr class="tableRow">
          <th class="tableHeader"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            LEVEL
          </th>
          <th class="tableHeader"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            NAME OF SCHOOL<br />(Write in full)
          </th>
          <th class="tableHeader"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            BASIC EDUCATION/DEGREE/COURSE<br />(Write in full)
          </th>
          <th class="tableHeader"
            colspan="2"
            rowspan="1"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PERIOD OF ATTENDANCE<br />
          </th>
          <th class="tableHeader"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            HIGHEST LEVEL/UNITS EARNED (if not graduated)
          </th>
          <th class="tableHeader"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            YEAR GRADUATED
          </th>
          <th class="tableHeader"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            SCHOLARSHIP/ ACADEMIC HONORS RECEIVED
          </th>
        </tr>

        <tr class="tableRow">
          <th class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            From
          </th>
          <th class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            To
          </th>
        </tr>

        <tr v-for="row in pdsEducationalBackground" :key="row.id" class="tableRow">
          <td colspan="1" class="tableData">
            {{ row.level }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.name_of_school }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.basic_education_course }}
          </td>
          <td class="tableData"
            colspan="1"
          >
            {{ row.period_of_attendance_from }}
          </td>
          <td class="tableData"
            colspan="1"
      
          >
            {{ row.period_of_attendance_to }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.highest_level_units_earned }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.year_graduated }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.academic_honors_received }}
          </td>
        </tr>
        
        <tfoot>
          <tr style=""  class="pdsDivider">
          <td colspan="8" class="tableData"></td>
        </tr>
          <tr class="tableRow">
            <td class="tableHeader"
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              SIGNATURE
            </td>
            <td
              colspan="2"
              class="imageContainer  d-initial justify-content-center text-center"
              style=""
            >
              <img
                class="image"
                :src="imageUrl.educationalBackgroundSignature"
                alt="Base64 encoded image"
              />
            </td>

            <td class="tableHeader pl-10"
              colspan="2"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              DATE
            </td>
            <td colspan="3" class="tableData">
              {{ pdsPersonalInfo[0].educational_date_signed }}
            </td>
          </tr>
        </tfoot>
      </v-simple-table>
      
    </v-container>
    <v-btn
     
      class="mt-5"
      v-print="printObjC1"
      >Print</v-btn
    >
    <div id="loading" v-show="printLoading"></div>
      </v-tab-item>
      <v-tab>C2</v-tab>
      <v-tab-item >
        <v-container id="printMeC2">
<v-container
        class="pa-0 text-left header"
        style="
          border: solid 1px;
          background-color: rgb(150, 150, 150);
          border: solid 1px black;
          color: white;
        "
      >
        IV. CIVIL SERVICE ELIGIBILITY
      </v-container>
      <v-simple-table height="auto" class="pa-0 pa-0 ma-0">
        <colgroup>
          <col id="colsCivilOne"/>
          <col id="colsCivilTwo"/>
          <col id="colsCivilThree"/>
          <col id="colsCivilFour"/>
          <col id="colsCivilFive"/>
          <col id="colsCivilSix"/>
          <col id="colsCivilSeven"/>
          <col id="colsCivilEight"/>
        </colgroup>


        <tr class="tableRow">
          <th
            class="tableHeader"
            rowspan="2"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE
            BARANGAY ELIGIBILITY / DRIVER'S LICENSE
          </th>
          <th
            class="tableHeader"
            rowspan="2"
            colspan="1"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            RATING <br />(If Applicable)
          </th>
          <th
            class="tableHeader"
            rowspan="2"
            colspan="1"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            DATE OF EXAMINATION / CONFERMENT
          </th>
          <th
            class="tableHeader"
            rowspan="2"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            PLACE OF EXAMINATION / CONFERMENT
          </th>
          <th
            class="tableHeader"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            LICENSE (if applicable)
          </th>
        </tr>
        <tr>
          <th
            class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            NUMBER
          </th>
          <th
            class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            Date of Validity
          </th>
        </tr>

        <tr v-for="row in pdsCivilServiceEligibility" :key="row.id" class="tableRow">
          <td colspan="2" class="tableData">
            {{ row.career_service }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.rating }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.date_of_examination }}
          </td>
          <td colspan="2" class="tableData">
            {{ row.place_of_examination }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.license_number }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.license_date_of_validity }}
          </td>
        </tr>

        <tfoot>
          <tr style="background-color: rgb(234, 234, 234)" class="pdsDivider">
            <td colspan="8" class="tableData" ></td>
          </tr>
        </tfoot>
      </v-simple-table>
<v-container
        class="pa-0 text-left header headerWork"
        style="
          border: solid 1px;
          background-color: rgb(150, 150, 150);
          border: solid 1px black;
          color: white;
          height:auto;
        "
      >
        V. WORK EXPERIENCE <br />
            <span class="spanWork">(Include private employment. Start from your recent work.)
            Description of duties should be indicated in the attached Work
            Experience sheet.</span>
      </v-container>
      <v-simple-table>
        <!-- <colgroup><col width="100px"></colgroup> -->
        <colgroup>
          <col id="colsWorkOne"/>
          <col id="colsWorkTwo"/>
          <col id="colsWorkThree"/>
          <col id="colsWorkFour"/>
          <col id="colsWorkFive"/>
          <col id="colsWorkSix"/>
          <col id="colsWorkSeven"/>
          <col id="colsWorkEight"/>
        </colgroup>

        <tr class="tableRow">
          <th
            colspan="2"
            class="tableHeader"
            style="
              font-size: 12px;
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            28. INCLUSIVE DATES <br />(mm/dd/yyyy)
          </th>
          <th class="tableHeader"
            rowspan="2"
            colspan="1"
            style="
    
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            POSITION TITLE (Write in full/Do not abbreviate)
          </th>
          <th class="tableHeader"
            rowspan="2"
            colspan="1"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            DEPARTMENT / AGENCY / OFFICE / COMPANY (Write in full/Do not
            abbreviate)
          </th>
          <th class="tableHeader"
            rowspan="2"
            colspan="1"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            MONTHLY SALARY
          </th>
          <th class="tableHeader"
            colspan="1"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            SALARY/ JOB/ PAY GRADE (if applicable)& STEP (Format "00-0")/
            INCREMENT
          </th>
          <th class="tableHeader"
            colspan="1"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            STATUS OF APPOINTMENT
          </th>
          <th class="tableHeader"
            colspan="1"
            rowspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            GOV'T SERVICE (Y/ N)
          </th>
        </tr>
        <tr class="tableRow">
          <th class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            From
          </th>
          <th class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            To
          </th>
        </tr>

        <tr v-for="row in pdsWorkExperience" :key="row.id" class="tableRow">
          <td colspan="1" class="tableData">
            {{ row.work_inclusive_dates_from }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.work_inclusive_dates_to }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.position }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.department }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.monthly_salary }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.salary_grade }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.status_of_appointment }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.government_service }}
          </td>
        </tr>

        <tfoot>
          <tr
            class="pdsDivider"
            style="border: solid 1px; background-color: rgb(234, 234, 234)"
          >
            <td colspan="8" class="tableData"></td>
          </tr>

          <tr class="tableRow">
            <td class="tableHeader"
              colspan="2"
              style="
                text-align: center;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              SIGNATURE
            </td>
            <td
              colspan="2"
              class="d-initial justify-content-center text-center imageContainer" 
            >
              <img
                :src="imageUrl.workExperienceSignature"
                class="image"
                style=""
                alt="Base64 encoded image"
              />
            </td>

            <td class="tableHeader"
              colspan="2"
              style="
                text-align: center;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              DATE
            </td>
            <td colspan="3">
              {{ pdsPersonalInfo[0].work_experience_date_signed }}
            </td>
          </tr>
        </tfoot>
      </v-simple-table>
     
    </v-container>
     <v-btn
     
      class="mt-5"
      v-print="printObjC2"
      >Print</v-btn
    >
    <div id="loading" v-show="printLoading"></div>
      </v-tab-item>
      <v-tab>C3</v-tab>
      <v-tab-item >
        <v-container id="printMeC3">
<v-container
        class="pa-0 text-left header headerWork"
        style="
          border: solid 1px;
          background-color: rgb(150, 150, 150);
          border: solid 1px black;
          color: white;
          height:auto;
        "
      >
       VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE
            / VOLUNTARY ORGANIZATION/S
      </v-container>
      <v-simple-table height="auto" class="pa-0 pa-0 ma-0">
        <colgroup>
          <col id="colsVolOne"/>
          <col id="colsVolTwo"/>
          <col id="colsVolThree"/>
          <col id="colsVolFour"/>
          <col id="colsVolFive"/>
          <col id="colsVolSix"/>
          <col id="colsVolSeven"/>
          <col id="colsVolEight"/>
        </colgroup>

        <tr class="tableRow">
          <th class="tableHeader"
            rowspan="2"
            colspan="3"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            29. NAME & ADDRESS OF ORGANIZATION (Write in full)
          </th>
          <th class="tableHeader"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            INCLUSIVE DATES (mm/dd/yyyy)
          </th>
          <th class="tableHeader"
            rowspan="2"
            colspan="1"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            NUMBER OF HOURS
          </th>
          <th class="tableHeader"
            rowspan="2"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            POSITION / NATURE OF WORK
          </th>
        </tr>
        <tr>
          <th class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            From
          </th>
          <th class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            To
          </th>
        </tr>

        <tr class="tableRow"
          v-for="row in pdsVoluntaryWorkInvolvement"
          :key="row.id"
          style="border: solid 1px black"
        >
          <td colspan="3" class="tableData">
            {{ row.organization_name_and_address }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.voluntary_inclusive_dates_from }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.voluntary_inclusive_dates_to }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.number_of_hours }}
          </td>
          <td colspan="4" class="tableData">
            {{ row.position }}
          </td>
        </tr>
        <tr
          class="pa-0 pdsDivider"
          style="border: solid 1px; background-color: rgb(234, 234, 234)"
        >
          <td colspan="8" style="height: 25px" class="tableData"></td>
        </tr>
      </v-simple-table>
      <v-container
        class="pa-0 text-left header headerWork"
        style="
          border: solid 1px;
          background-color: rgb(150, 150, 150);
          border: solid 1px black;
          color: white;
          height:auto;
        "
      >
      VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS
            ATTENDED<br /><span class="spanLearning">(Start from the most recent L&D/training program and
            include only the relevant L&D/training taken for the last five (5)
            years for Division Chief/Executive/Managerial positions)</span>
      </v-container>
      <v-simple-table style="border: solid 1px solid">
        <colgroup>
          <col  id="colsLearningOne"/>
          <col  id="colsLearningTwo"/>
          <col  id="colsLearningThree"/>
          <col  id="colsLearningFour"/>
          <col  id="colsLearningFive"/>
          <col  id="colsLearningSix"/>
          <col  id="colsLearningSeven"/>
          <col  id="colsLearningEight"/>
        </colgroup>

        <tr class="tableRow">
          <th class="tableHeader"
            rowspan="2"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            30. TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING
            PROGRAMS (Write in full)
          </th>
          <th class="tableHeader"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            INCLUSIVE DATES OF ATTENDANCE (mm/dd/yyyy)
          </th>
          <th class="tableHeader"
            rowspan="2"
            colspan="1"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            NUMBER OF HOURS
          </th>
          <th class="tableHeader"
            rowspan="2"
            colspan="1"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            Type of LD ( Managerial/ Supervisory/ Technical/etc)
          </th>
          <th class="tableHeader"
            rowspan="2"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            CONDUCTED/ SPONSORED BY (Write in full)
          </th>
        </tr>
        <tr class="tableRow">
          <th class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            From
          </th>
          <th class="tableHeader"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            To
          </th>
        </tr>

        <tr v-for="row in pdsLearningAndDevelopment" :key="row.id" class="tableRow">
          <td colspan="2" class="tableData">
            {{ row.learning_and_development_interventions }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.learning_inclusive_dates_from }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.learning_inclusive_dates_to }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.number_of_hours }}
          </td>
          <td colspan="1" class="tableData">
            {{ row.type_of_ld }}
          </td>
          <td colspan="2" class="tableData">
            {{ row.conducted_by }}
          </td>
        </tr>
        <tfoot>
          <tr
            class="pa-0 pdsDivider"
            style="border: solid 1px; background-color: rgb(234, 234, 234)"
          >
            <td colspan="8" class="tableData"></td>
          </tr>
        </tfoot>
      </v-simple-table>
      <v-container
        class="pa-0 header"
        style="
          border: solid 1px;
          background-color: rgb(150, 150, 150);
          text-align: left;
          border: solid 1px black;
          color: white;
        "
      >
        VIII. OTHER INFORMATION
      </v-container>
      <v-simple-table>
        <colgroup>
          <col  id="colsOtherOne"/>
          <col  id="colsOtherTwo"/>
          <col id="colsOtherThree"/>
          <col id="colsOtherFour"/>
          <col id="colsOtherFive"/>
          <col id="colsOtherSix"/>
          <col  id="colsOtherSeven"/>
          <col  id="colsOtherEight"/>
        </colgroup>

        <tr class="tableRow">
          <th class="tableHeader"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            SPECIAL SKILLS AND HOBBIES <br />(Write in full)
          </th>
          <th class="tableHeader"
            colspan="4"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            32. NON-ACADEMIC DISTINCTIONS/RECOGNITION <br />(Write in full)
          </th>
          <th class="tableHeader"
            colspan="2"
            style="
              text-align: center;
              border: solid 1px black;
              background-color: rgb(234, 234, 234);
            "
          >
            33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION <br />(Write in full)
          </th>
        </tr>

        <tr v-for="row in pdsOtherInfo" :key="row.id" class="tableRow">
          <td colspan="2" class="tableData">
            {{ row.special_skills_and_hobbies }}
          </td>
          <td colspan="4" class="tableData">
            {{ row.nonacademic_distinctions }}
          </td>
          <td colspan="2" class="tableData">
            {{ row.association_members }}
          </td>
        </tr>
        <tfoot>
          <tr
            clas="pa-0 pdsDivider"
            style="border: solid 1px; background-color: rgb(234, 234, 234)"
          >
            <td colspan="8" class="tableData"></td>
          </tr>
          <tr class="tableRow">
            <td class="tableHeader"
              colspan="2"
              style="
                text-align: center;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              SIGNATURE
            </td>
            <td  
              colspan="2"
              class="d-initial justify-content-center text-center imageContainer"
              style="margin: 10px 20px 10px 20px"
            >
              <img
                :src="imageUrl.otherInfoSignature"
                alt="Base64 encoded image"
                class="image"
              />
            </td>
            <td class="tableHeader"
              colspan="2"
              style="
                text-align: center;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              DATE
            </td>
            <td colspan="3" class="tableData">
              {{ pdsPersonalInfo[0].other_info_date_signed }}
            </td>
          </tr>
        </tfoot>
      </v-simple-table>
     
    </v-container>
     <v-btn
     
      class="mt-5"
      v-print="printObjC3"
      >Print</v-btn
    >
    <div id="loading" v-show="printLoading"></div>
</v-tab-item>
<v-tab>C4</v-tab>
<v-tab-item >
  <v-container id="printMeC4">
      <v-container
        class="pa-0 ma-0 pdsContainerParent"
        style="border: solid 1px black"
        v-for="row in pdsQuestions"
        :key="row.id"
      >
        <v-row no-gutters class="ma-0 pa-0" cols="12">
          <v-col cols="8" sm="8"  class="ma-0 mr-0 pdsContainerQ34" >
            <v-card
              class="pa-0 ma-0 questionText"
              tile
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              34. Are you related by consanguinity or affinity to the appointing
              or recommending authority, or to the chief of bureau or office or
              to the person who has immediate supervision over you in the
              Office, Bureau or Department where you will be apppointed,<br />
              a. within the third degree? <br />b. within the fourth degree (for
              Local Government Unit - Career Employees)?<br /><br /><br /></v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
          
            class="text-left pdsContainerA34"
            style="border: solid 1px black"
          >
            <v-card class="pl-3 answerText" height="118px">
              <span class="questionText">If YES, give details:</span><br />
              <u>{{ row.question_thirty_four }}</u>
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8"  class="ma-0 mr-0 pdsContainerQ35">
            <v-card
            height="70px"
              class="pa-0 questionText"
              outlined
              tile
              
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              35. a. Have you ever been found guilty of any administrative
              offense?<br /><br />
              b. Have you been criminally charged before any court?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left pdsContainerA35"
            style="border: solid 1px black"
          >
            <v-card height="68px" class="pl-2 answerText" tile>
              <u>{{ row.question_thirty_five_a }}</u>
              <span class="pl-3 questionText">If YES, give details: </span><br />
              <label class="pl-3 questionText">Date Filed:</label>
              <u>{{ row.question_thirty_five_b_date_filed }}</u><br />
              <label class="pl-3 questionText">Status of Case/s:</label>
              <u>{{ row.question_thirty_five_B_status_of_case }}</u>
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 pb-2 mr-0 pdsContainerQ36" style="border: solid 1px black;">
            <v-card
              
              class="pa-0 questionText"
              height="65px"
              tile
              
              style="
                text-align: left;
                
                background-color: rgb(234, 234, 234);
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
            class="text-left pdsContainerA36"
            height="65px"
            style="border: solid 1px black"
          >
            <v-card  class="pl-3 answerText mb-0" height="65px" tile>
              <span class="pl-3 questionText">If YES, give details: </span><br />
              {{ row.question_thirty_six }}
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0 pdsContainerQ37">
            <v-card
              class="pa-0 questionText"
              outlined
              tile
              height="60px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
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
            class="text-left pdsContainerA37"
            style="border: solid 1px black"
          >
            <v-card class="pl-3 answerText" height="60px">
              <span class="ma-3 questionText">If YES, give details: </span><br />
              <u>{{ row.question_thirty_seven }}</u>
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0 pdsContainerQ38">
            <v-card
              class="pa-0 questionText"
              outlined
              tile
             
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
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
            class="text-left pdsContainerA38"
            style="border: solid 1px black"
          >
            <v-card class="pa-3 answerText" height="80px">
              <span class="pl-3 questionText">If YES, give details: </span><br />
              <u>{{ row.question_thirty_eight_a }}</u>
              <span class="pl-3 questionText">If YES, give details: </span><br />
              <u>{{ row.question_thirty_eight_a }}</u>
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0 pdsContainerQ39">
            <v-card
              class="pa-0 questionText"
              outlined
              tile
              height="60px"
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
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
            class="text-left pdsContainerA39"
            style="border: solid 1px black"
          >
            <v-card class="pl-3 answerText" height="60px">
              <span class="pl-3 questionText">If YES, give details: </span><br />
              {{ row.question_thirty_nine }}
            </v-card>
          </v-col>
        </v-row>
        <v-row no-gutters>
          <v-col cols="8" sm="8" md="8" class="ma-0 mr-0 pdsContainerQ40">
            <v-card
              class="pa-0 questionText"
              outlined
              tile
              
              style="
                text-align: left;
                border: solid 1px black;
                background-color: rgb(234, 234, 234);
              "
            >
              40. 100% 10 C41:F42 Pursuant to: (a) Indigenous People's Act (RA
              8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c)
              Solo Parents Welfare Act of 2000 (RA 8972), please answer the
              following items: Screen reader support enabled.
              <br />a. Are you a member of any indigenous group?<br />
              b. Are you a person with disability? <br />c. Are you
              a solo parent?</v-card
            >
          </v-col>
          <v-col
            cols="4"
            sm="4"
            md="4"
            class="text-left pdsContainerA40"
            style="border: solid 1px black"
          >
            <v-card class="pl-3 answerText" height="95px" tile>
              <span class="pl-3 questionText">If YES, please specify: </span>
              <u> {{ row.question_forty_a }} </u><br />
              <span class="pl-3 questionText">If YES, please specify ID No: </span>

              <u> {{ row.question_forty_b }} </u><br />
              <span class="pl-3 questionText">If YES, please specify ID No: </span><br>
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
                  background-color: rgb(234, 234, 234);
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
                            background-color: rgb(234, 234, 234);
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
                            background-color: rgb(234, 234, 234);
                          "
                    >
                      ADDRESS
                    </th>
                    <th
                      style="
                          font-size:10px
                            text-align: left;
                            border: solid 1px black;
                            background-color: rgb(234, 234, 234);
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
                  background-color: rgb(234, 234, 234);
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
                  background-color: rgb(234, 234, 234);
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
                style="height: 90px; border: solid 1px black"
                class="d-initial justify-content-center text-center"
              >
                <img
                  :src="imageUrl.oathSignature"
                  alt="Base64 encoded image"
                  style="height: 30%; width: 30%"
                />

                <!-- <v-spacer></v-spacer> -->
              </v-container>

              <span
                class="text-center"
                style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(234, 234, 234);"
                >Signature (Sign inside the box)</span
              >
              <v-container style="border: solid 1px black">
                {{ addInfo.oath_date_accomplished }}
              </v-container>
              <span
                class="text-center"
                style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(234, 234, 234);"
                >Date Accomplished</span
              >
            </v-card>
          </v-col>
          <v-col cols="4" sm="4">
            <v-card style="border: solid 1px black">
              <v-container
                style="height: 130px; border: solid 1px black"
                class="px-2 d-initial justify-content-center text-center"
                fluid
              >
                <!-- <img
                  :src="imageUrl.rightThumbMark"
                  alt="Base64 encoded image"
                  style="height: 30%; width: 30%"
                /> -->
              </v-container>
              <span
                class="text-center"
                style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(234, 234, 234);"
                >Right Thumbmark</span
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
            <!-- {{ addInfo.sworn_date }} -->
          </v-col>
          <v-col cols="4" sm="4" md="4">
            exhibiting his/her validly issued government ID as indicated above.
          </v-col>
        </v-row>
        <v-row>
          <v-card
            cols="4"
            sm="4"
            class="pa-0 text-center mb-6 d-flex justify-content-center text-center"
            height="100px"
            width="150px"
            align="center"
            justify="center"
            style="
              margin-left: auto;
              margin-right: auto;
              border: solid 1px black;
            "
          >
            <!-- <img
            :src="imageUrl.personAdministeringOath"
            alt="Base64 encoded image"
            style="height: 30%; width: 30%"
          /> -->
            <span
              class="text-center ma-0 mt-12"
              style="font-size: 10px;border: solid 1px black; border-right: solid 1px black;black;background-color:rgb(234, 234, 234);height:20px"
              >Person Administering Oath
            </span>
          </v-card>
        </v-row>
      </v-container>
      </v-container>
      <v-btn
     
      class="mt-5"
      v-print="printObjC4"
      >Print</v-btn
    >
    <div id="loading" v-show="printLoading4"></div>
    </v-tab-item>
    </v-tabs>
    </v-container>
    
      </v-container>
</template>
<script>
export default {
  data() {
    return{
      printLoading: true,
      printObjC1: {
        id: "printMeC1",
        // preview: true,
        // previewTitle: "print Title", // The title of the preview window. The default is 打印预览
        // popTitle: "good print",
        extraCss: "https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.compat.css, https://cdn.bootcdn.net/ajax/libs/hover.css/2.3.1/css/hover-min.css",

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
       printObjC2: {
        id: "printMeC2",
        // preview: true,
        // previewTitle: "print Title", // The title of the preview window. The default is 打印预览
        // popTitle: "good print",
        extraCss: "https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.compat.css, https://cdn.bootcdn.net/ajax/libs/hover.css/2.3.1/css/hover-min.css",

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
       printObjC3: {
        id: "printMeC3",
        // preview: true,
        // previewTitle: "print Title", // The title of the preview window. The default is 打印预览
        // popTitle: "good print",
        extraCss: "https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.compat.css, https://cdn.bootcdn.net/ajax/libs/hover.css/2.3.1/css/hover-min.css",

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
      printLoading4: true,
       printObjC4: {
        id: "printMeC4",
        // preview: true,
        // previewTitle: "print Title", // The title of the preview window. The default is 打印预览
        // popTitle: "good print",
        extraCss: "https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.compat.css, https://cdn.bootcdn.net/ajax/libs/hover.css/2.3.1/css/hover-min.css",

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
      children: [],
      imageUrl:[],
    };
  },
  async created() {
    console.log(this.$route.query.pdsData)
    const pds = JSON.parse(sessionStorage.getItem('pdsPersonalInfo'))
    console.log(pds)
    const image = await this.$store.dispatch("getImageUrl", pds.user_id);
    this.imageUrl = image.data
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

<style scoped src="../../assets/css/main.css" crossorigin="anonymous">
