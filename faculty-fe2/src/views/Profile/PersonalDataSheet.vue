
<template>
 <v-card class="pa-0 pa-0 ma-12">
   
  <v-tabs >
    <v-tab >Part 1</v-tab>
      <v-tab-item>
    <v-card-title v-model="headerText" label="Search" single-line hide-details
      ><span>CS Form N0.212<br />Revised 2017</span>
      <span
        >Personal Data Sheet</span
      >
    </v-card-title>
    <v-card-subtitle
      v-model="subtitleText"
      label="Search"
      single-line
      hide-details
    >
      WARNING: Any misrepresentation made in the Personal Data Sheet and the
      Work Experience Sheet shall cause the filing of administrative/criminal
      case/s against the person concerned.
    </v-card-subtitle>
    <v-card-text v-model="cardText" label="Search" single-line hide-details>
      READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS)
      BEFORE ACCOMPLISHING THE PDS FORM.
    </v-card-text>

    <v-simple-table height="auto" class="pa-0 pa-0 ma-12" max-width="60vw">
      <template v-slot:default>
        <thead cols="4">
          <tr clas="pa-0">
            <th colspan="8">I. PERSONAL INFORMATION</th>
         
          </tr>
        </thead>
        <tbody class="text-center" color="secondary">
          <tr>
            <td width="50px" colspan="2" style="text-align:left">2. SURNAME</td>
            <td colspan="7">
              <v-text-field
                placeholder="SURNAME"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>

          <tr>
            <td width="50px" colspan="2" style="text-align:left">FIRST NAME</td>
            <td colspan="4">
              <v-text-field
                placeholder="FIRST NAME"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="4">
              <v-text-field
                placeholder="NAME EXTENSION (JR., SR)"
                solo
                dense
                class="text-center pt-6"
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td width="80px" colspan="2" style="text-align:left">MIDDLE NAME</td>
            <td colspan="8">
              <v-text-field
                placeholder="MIDDLE NAME"
                solo
                class="text-center pt-6"
                type="text" >
              </v-text-field>
            </td>
          </tr>

          <tr>
            <td max-width="100px" colspan="2" style="text-align:left">
              DATE OF BIRTH <br />
              (mm/dd/yyyy)
            </td>
            <td colspan="2">
              <v-text-field
                placeholder="DATE OF BIRTH"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td rowspan="3" colspan="2" >
              16.CITIZENSHIP<br />If holder of dual citizenship,<br />please
              indicate the details.
            </td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">PLACE OF BIRTH</td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>

            <td colspan="3">
              <v-text-field
                placeholder="Pls. indicate country:"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">SEX</td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr >
            <td colspan="2" style="text-align:left" rowspan="2">CIVIL STATUS</td>
            <td rowspan="2" colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td rowspan="4">
              RESIDENTIAL<br> ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
              ZIP CODE
            </td>
            <td rowspan="2" colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td rowspan="2" colspan="2">
              <v-text-field
                placeholder="Pls. indicate country:"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <br>
          <tr>
            <td colspan="2" style="text-align:left">HEIGHT (m)</td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">WEIGHT (kg)</td>
            <td >
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td >
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">BLOOD TYPE</td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td rowspan="4">
              RESIDENTIAL ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
              ZIP CODE
            </td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">GSIS ID NO.</td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">PAG-IBIG ID NO.</td>
             <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">PHILHEALTH NO.</td>
             <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">SSS NO.</td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td>19.TELEPHONE NO.</td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">14.TIN NO.</td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td>20.MOBILE NO.</td>
             <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left">AGENCY EMPLOYEE NO.</td>
            <td colspan="2">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td>21. E-MAIL ADDRESS (if any)</td>
            <td>
              <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
        </tbody>
      </template>
    </v-simple-table>
     <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
      <template v-slot:default>
        <thead >
          <tr clas="pa-0">
            <th colspan="5">II. FAMILY BACKGROUND</th>
    
          </tr>
        </thead>
        <tbody class="" color="secondary">
          <tr>
            <td width="50px">SPOUSE'S SURNAME</td>
            <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td>23. NAME of CHILDREN  (Write full name and list all)</td>
            <td>DATE OF BIRTH (mm/dd/yyyy) </td>
          </tr>

          <tr>
            <td width="80px">FIRST NAME</td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="1">
              <v-text-field
                placeholder="NAME EXTENSION (JR., SR)"
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
                dense
                class="text-center pt-6"
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td width="80px">MIDDLE NAME</td>
            <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>

          <tr>
            <td max-width="100px">
              OCCUPATION
            </td>
           <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
             <td max-width="100px">
              EMPLOYER/BUSINESS NAME
            </td>
           <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td max-width="100px">
              TELEPHONE NO.
            </td>
           <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td>25. FATHER'S SURNAME</td>
             <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
             <td width="80px">FIRST NAME</td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="1">
              <v-text-field
                placeholder="NAME EXTENSION (JR., SR)"
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
                dense
                class="text-center pt-6"
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
             <td width="80px">MIDDLE NAME</td>
            <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td>26. MOTHER'S MAIDEN NAME</td>
             <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td>SURNAME</td>
             <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
             <td width="80px">FIRST NAME</td>
            <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                dense
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
            <td colspan="1">
              <v-text-field
                placeholder="NAME EXTENSION (JR., SR)"
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
                dense
                class="text-center pt-6"
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
             <td width="80px">MIDDLE NAME</td>
            <td colspan="4">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
           <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
        </tbody>
      </template>
    </v-simple-table> 
    <br> 
     <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
      <template v-slot:default>
        <thead cols="4">
          <tr clas="pa-0">
            <th colspan="4">III. EDUCATIONAL BACKGROUND</th>
    
          </tr>
        </thead>
        <tbody class="text-center" color="secondary">
          <tr>
            <td  rowspan="2">LEVEL</td>
            <td  rowspan="2">NAME OF SCHOOL<br>(Write in full)</td>
            <td  rowspan="2">BASIC EDUCATION/DEGREE/COURSE<br>(Write in full)</td>
            <td  colspan="2">PERIOD OF ATTENDANCE<br>From To</td>
            <td  rowspan="2">HIGHEST LEVEL/UNITS EARNED (if not graduated)</td>
            <td  rowspan="2">YEAR GRADUATED</td>
            <td  rowspan="2">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</td>
          </tr>

          <tr>
            <td>From</td>
            <td>To</td>
          </tr>
          <tr>
            <td>ELEMENTARY</td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>

         <tr>
            <td>SECONDARY</td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td>VOCATIONAL/TRADE COURSE</td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td>COLLEGE</td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td></td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td>GRADUATE STUDIES</td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
          </tr>
          <tr>
            <td>SIGNATURE</td>
             <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="file"
              >
              </v-text-field>
            </td>
             <td colspan="1">
              DATE
            </td>
             <td colspan="3">
              <v-text-field
                placeholder="Hello World"
                solo
                class="text-center pt-6"
                
                type="text"
              >
              </v-text-field>
            </td>
             
          </tr>
        </tbody>
      </template>
    </v-simple-table>   
  
</v-tab-item>
    <v-tab>Part 2</v-tab>
    <v-tab-item>

      <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
        <thead>
          <tr>
          <th  colspan="8" style="text-align:left">IV. CIVIL SERVICE ELIGIBILITY</th>
          </tr>
       
          <tr>
          <th rowspan ="2" colspan="2" style="text-align:left">CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE                                                    BARANGAY ELIGIBILITY / DRIVER'S LICENSE</th>
          <th rowspan ="2" colspan="2" style="text-align:left">RATING <br>(If Applicable)</th>
          <th rowspan ="2" colspan="2" style="text-align:left">DATE OF EXAMINATION / CONFERMENT</th>
          <th rowspan ="2" colspan="2" style="text-align:left">PLACE OF EXAMINATION / CONFERMENT</th> 
          <th colspan="2" style="text-align:left">LICENSE (if applicable)</th> 
          </tr>
          <tr>
              <th  style="text-align:left">NUMBER</th> 
              <th style="text-align:left">Date of Validity</th> 
          </tr>
        
        </thead>
         <tbody>
            <tr>
              
            </tr>
          </tbody>
      </v-simple-table>
    </v-tab-item>
    <v-tab>Part 3</v-tab>
    <v-tab>Part 4</v-tab>
  </v-tabs>
  <!-- <v-toolbar>
  <v-toolbar-side-icon></v-toolbar-side-icon>
          <v-toolbar-title>Scroll Down</v-toolbar-title>
        </v-toolbar>
          <v-btn
            v-scroll="onScroll"
            v-show="fab"
            fab
            dark
            fixed
            bottom
            right
            color="primary"
            @click="toTop"
          >
            <v-icon>keyboard_arrow_up</v-icon>
          </v-btn> -->
</v-card> 

</template>


<script>
export default {
  data() {
    return {
      tab: null,
      desserts: [
        {
          name: "Frozen Yogurt",
          calories: 159,
        },
        {
          name: "Ice cream sandwich",
          calories: 237,
        },
        {
          name: "Eclair",
          calories: 262,
        },
        {
          name: "Cupcake",
          calories: 305,
        },
        {
          name: "Gingerbread",
          calories: 356,
        },
        {
          name: "Jelly bean",
          calories: 375,
        },
        {
          name: "Lollipop",
          calories: 392,
        },
        {
          name: "Honeycomb",
          calories: 408,
        },
        {
          name: "Donut",
          calories: 452,
        },
        {
          name: "KitKat",
          calories: 518,
        },
      ],
      model: "tab-2",
      text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      headerText: "",
      subtitleText: "",
      cardText: "",
    };
  },
};
</script>

<style scoped></style>
