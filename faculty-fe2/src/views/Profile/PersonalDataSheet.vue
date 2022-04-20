<template>
  <v-main class="pa-0 pa-0 ma-12">
    <v-container class="">
      <v-container><button class="material-icons">keyboard_arrow_left</button>
      <span>1</span>
      <button class="material-icons">keyboard_arrow_right</button>
      </v-container>
      
       <v-container class="" >Names</v-container> 
    </v-container>
   
      <v-tabs v-if="edit==false">
       
          <v-tab>Part 1</v-tab>
      <v-tab-item>
        <v-card-title
          v-model="headerText"
          label="Search"
          single-line
          hide-details
          ><span>CS Form N0.212<br />Revised 2017</span>
          <span>Personal Data Sheet</span>
        </v-card-title>
        <v-card-subtitle
          v-model="subtitleText"
          label="Search"
          single-line
          hide-details
        >
          WARNING: Any misrepresentation made in the Personal Data Sheet and the
          Work Experience Sheet shall cause the filing of
          administrative/criminal case/s against the person concerned.
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
            <tbody class="text-center" color="secondary" >
              <!-- v-for="info of personalInfo" :key="info.personalSurname" -->
              <tr>
                <td width="50px" colspan="2" style="text-align: left">
                  2. SURNAME
                </td>
                <td colspan="7">
                  {{personalSurname}}
                </td>
              </tr>

              <tr>
                <td width="50px" colspan="2" style="text-align: left">
                  FIRST NAME
                </td>
                <td colspan="4">
                  <v-text-field
                    placeholder="FIRST NAME"
                    solo
                    dense
                    v-model="personalFirstName"
                    id="personalFirstName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="4">
                  <v-text-field
                    placeholder="NAME EXTENSION (JR., SR)"
                    solo
                    v-model="personalSuffix"
                    id="suffix"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td width="80px" colspan="2" style="text-align: left">
                  MIDDLE NAME
                </td>
                <td colspan="8">
                  <v-text-field
                    placeholder="MIDDLE NAME"
                    solo
                    v-model="personalMiddleName"
                    id="personalMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td max-width="100px" colspan="2" style="text-align: left">
                  DATE OF BIRTH <br />
                  (mm/dd/yyyy)
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalDateOfBirth"
                    dense
                    id="personalDOB"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="3" colspan="2">
                  16.CITIZENSHIP<br />If holder of dual citizenship,<br />please
                  indicate the details.
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
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
                <td colspan="2" style="text-align: left">PLACE OF BIRTH</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
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
                    placeholder="Pls. indicate country:"
                    solo
                    v-model="personalDualCitizenship"
                    id="countryOfCitizenship"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">SEX</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Hello World"
                    solo
                    id="personalSex"
                    v-model="personalSex"
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
                    id="personalDualCitizenship"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left" rowspan="2">
                  CIVIL STATUS
                </td>
                <td rowspan="2" colspan="2">
                  <v-text-field
                    placeholder="Hello World"
                    solo
                    dense
                    v-model="personalCivilStatus"
                    id="personalCivilStatus"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="4">
                  RESIDENTIAL<br />
                  ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                  ZIP CODE
                </td>
                <td rowspan="1" colspan="2">
                  <v-text-field
                    placeholder="House/Block/Lot No."
                    solo
                    id="personalHouseNo"
                    v-model="personalResAddressHouseNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="1" colspan="2">
                  <v-text-field
                    placeholder="Street"
                    v-model="personalResAddressStreet"
                    solo
                    id="personalStreet"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td rowspan="1" colspan="2">
                  <v-text-field
                    placeholder="Subdivision/Village"
                    solo
                    v-model="personalResAddressSubdivision"
                    id="personalSubdivision"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="1" colspan="2">
                  <v-text-field
                    placeholder="Barangay"
                    solo
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
                <td colspan="2" style="text-align: left">HEIGHT (m)</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Height"
                    solo
                    v-model="personalHeight"
                    dense
                    id="personalHeight"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="City/Municipality"
                    solo
                    v-model="personalResAddressCity"
                    dense
                    id="personalCity"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Province"
                    solo
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
                <td colspan="2" style="text-align: left">WEIGHT (kg)</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Weight"
                    solo
                    id="personalWeight"
                    v-model="personalWeight"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="3">
                  <v-text-field
                    placeholder="Zip Code"
                    solo
                    id="personalZipCode"
                    dense
                    v-model="personalZipCode"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">BLOOD TYPE</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Blood Type"
                    solo
                    v-model="personalBloodType"
                    id="personalBloodType"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="4">
                  PERMANENT ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                  ZIP CODE
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="House/Block/Lot No."
                    solo
                    id="permanentHouseNo"
                    v-model="personalPermanentAddHouseNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Street"
                    solo
                    v-model="personalPermanentAddStreet"
                    id="permanentStreet"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">GSIS ID NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="GSIS ID NO."
                    solo
                    v-model="personalGSISIDNo"
                    id="personalGsisId"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Subdivision/Village"
                    solo
                    v-model="personalPermanentAddSubdivision"
                    dense
                    id="permanentSubdivision"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Barangay"
                    solo
                    v-model="personalPermanentAddBarangay"
                    id="permanentBarangay"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">PAG-IBIG ID NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="PAG-IBIG ID NO."
                    solo
                    v-model="personalPAGIBIGIDNo"
                    dense
                    id="personalPagibigIdNo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="City/Municipality"
                    solo
                    v-model="personalPermanentAddCity"
                    dense
                    id="permanentCity"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="Province"
                    solo
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
                <td colspan="2" style="text-align: left">PHILHEALTH NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="PHILHEALTH NO."
                    solo
                    v-model="personalPHILHEALTHNo"
                    dense
                    id="permanentPhilhealthNo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder="Zip Code"
                    v-model="personalPermanentAddZipCode"
                    solo
                    dense
                    id="permanentZipCode"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">SSS NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="SSS NO."
                    solo
                    v-model="personalSSSNo"
                    id="personalSssNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td>19.TELEPHONE NO.</td>
                <td colspan="3">
                  <v-text-field
                    v-model="personalTelephoneNo"
                    placeholder="TELEPHONE NO."
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
                <td colspan="2" style="text-align: left">14.TIN NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder="TIN NO."
                    solo
                    v-model="personalTinNo"
                    id="personalTinNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td>20.MOBILE NO.</td>
                <td colspan="3">
                  <v-text-field
                    v-model="personalMobileNo"
                    placeholder="MOBILE NO."
                    solo
                    id="personalMobileNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">
                  AGENCY EMPLOYEE NO.
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder="AGENCY EMPLOYEE NO."
                    solo
                    v-model="personalAgencyEmployeeNo"
                    id="personalAgencyEmpNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td>21. E-MAIL ADDRESS (if any)</td>

                <td colspan="3">
                  <v-text-field
                    placeholder="Email Address"
                    solo
                    dense
                    v-model="personalEmailAddress"
                    id="personalEmailAddress"
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
            <thead>
              <tr clas="pa-0">
                <th colspan="5">II. FAMILY BACKGROUND</th>
              </tr>
            </thead>
            <tbody class="" color="secondary">
              <tr>
                <td width="50px">SPOUSE'S SURNAME</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="SPOUSE'S SURNAME"
                    solo
                    v-model="familySpouseSurname"
                    id="spouseSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td>23. NAME of CHILDREN (Write full name and list all)</td>
                <td>DATE OF BIRTH (mm/dd/yyyy)</td>
              </tr>

              <tr>
                <td width="80px">FIRST NAME</td>
                <td colspan="3">
                  <v-text-field
                    placeholder="First Name"
                    solo
                    v-model="familySpouseFirstName"
                    id="spouseFirstName"
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
                    v-model="familySpouseSuffix"
                    id="spouseSuffix"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="N/A"
                    solo
                    v-model="nameOfChildrenOne"
                    id="childrenFullname1"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Child Date of Birth"
                    solo
                    v-model="dateOfBirthOne"
                    id="childDOB1"
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
                    placeholder="MIDDLE NAME"
                    solo
                    v-model="familySpouseMiddleName"
                    id="spouseMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenTwo"
                    id="childFullName2"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Child Date of Birth"
                    id="childDOB2"
                    v-model="dateOfBirthTwo"
                    solo
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td max-width="100px">OCCUPATION</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="OCCUPATION"
                    solo
                    v-model="familySpouseOccupation"
                    id="spouseOccupation"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenThree"
                    id="childFullName3"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Child Date of Birth"
                    id="childDOB3"
                    solo
                    v-model="dateOfBirthThree"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td max-width="100px">EMPLOYER/BUSINESS NAME</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="EMPLOYER/BUSINESS NAME"
                    solo
                    v-model="familyEmployerName"
                    id="employerNameFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Child full name"
                    solo
                    v-model="nameOfChildrenFour"
                    id="childFullName4"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthFour"
                    id="childDOB4"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td max-width="100px">BUSINESS ADDRESS</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="BUSINESS ADDRESS"
                    solo
                    v-model="familyBusinessAddress"
                    id="businessAddressFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Full name of Child"
                    id="childFullName5"
                    solo
                    v-model="nameOfChildrenFive"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthFive"
                    id="childDOB5"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td max-width="100px">TELEPHONE NO.</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="TELEPHONE NO."
                    solo
                    v-model="familyTelephoneNo"
                    id="telephonNumberFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Full Name of Child"
                    solo
                    v-model="nameOfChildrenSix"
                    id="childFullName6"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthSix"
                    id="childDOB6"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td>25. FATHER'S SURNAME</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="FATHER'S SURNAME"
                    solo
                    v-model="familyFatherSurname"
                    id="fatherSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Full Name of Child"
                    solo
                    v-model="nameOfChildrenSeven"
                    id="childFullName7"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthSeven"
                    id="childDOB7"
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
                    placeholder="FIRST NAME"
                    solo
                    v-model="familyFatherFirstName"
                    id="fatherFirstName"
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
                    id="fatherSuffix"
                    v-model="familyFatherSuffix"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Full Name of Child"
                    solo
                    v-model="nameOfChildrenEight"
                    id="childFullName8"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthEight"
                    id="childDOB8"
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
                    placeholder="MIDDLE NAME"
                    solo
                    v-model="familyFatherMiddleName"
                    id="fatherMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Full Name of Child"
                    solo
                    v-model="nameOfChildrenNine"
                    id="childFullName9"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthNine"
                    id="childDOB9"
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
                    placeholder="MAIDEN NAME"
                    solo
                    v-model="familyMotherMaidenName"
                    id="motherMaidenName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Full Name of Child"
                    solo
                    v-model="nameOfChildrenTen"
                    id="childFullName10"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthTen"
                    id="childDOB"
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
                    placeholder="SURNAME"
                    solo
                    v-model="familyMotherSurname"
                    id="motherSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Full Name of Child"
                    solo
                    v-model="nameOfChildrenEleven"
                    id="childFullName11"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthEleven"
                    id="childDOB11"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td width="80px">FIRST NAME</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="FIRST NAME"
                    solo
                    v-model="familyMotherFirstName"
                    id="motherFirstName"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="1">
                  <v-text-field
                    placeholder="Full Name of Child"
                    solo
                    v-model="nameOfChildrenTwelve"
                    id="childFullName12"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    id="childDOB12"
                    dense
                    v-model="dateOfBirthTwelve"
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
                    placeholder="MIDDLE NAME"
                    solo
                    v-model="familyMotherMiddleName"
                    id="motherMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Full Name of Child"
                    solo
                    v-model="nameOfChildrenThirteen"
                    id="childFullName13"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder="Date of Birth"
                    solo
                    v-model="dateOfBirthThirteen"
                    id="childDOB13"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
            </tbody>
          </template>
        </v-simple-table>
        <br />
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
          <template v-slot:default>
            <thead cols="4">
              <tr clas="pa-0">
                <th colspan="4">III. EDUCATIONAL BACKGROUND</th>
              </tr>
            </thead>
            <tbody class="text-center" color="secondary">
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
                <td rowspan="2">
                  <button
                    class="material-icons"
                    @click="addRow('educationalBackground')"
                  >
                    add_circle
                  </button>
                </td>
              </tr>

              <tr>
                <td>From</td>
                <td>To</td>
              </tr>

              <tr
                v-for="row in educationalBackground"
                :key="row.educBackgroundLevel"
              >
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
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
                    v-model="row.educBackgroundNameOfSchool"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
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
                    placeholder=""
                    v-model="row.educBackgroundPeriodOfAttendanceFrom"
                    solo
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="row.educBackgroundPeriodOfAttendanceTo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
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
                    v-model="row.educBackgroundScholarship"
                    solo
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <button
                    class="material-icons"
                    @click="removeRow('educationalBackground', row)"
                  >
                    remove_circle
                  </button>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>SIGNATURE</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="SIGNATURE"
                    solo
                    v-model="educBackgroundSignature"
                    id="signaturePart1"
                    class="text-center pt-6"
                    type="file"
                  >
                  </v-text-field>
                </td>
                <td colspan="1" class="pl-10">DATE</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="educBackgroundDateOfSignature"
                    id="dateOfSignaturePart1"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
            </tfoot>
          </template>
        </v-simple-table>
      </v-tab-item>
      <v-tab>Part 2</v-tab>
      <v-tab-item>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
          <thead>
            <tr>
              <th colspan="8" style="text-align: left">
                IV. CIVIL SERVICE ELIGIBILITY
              </th>
            </tr>

            <tr>
              <th rowspan="2" colspan="2" style="text-align: left">
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
              <th rowspan="2" colspan="2" style="text-align: left">
                <button
                  class="material-icons"
                  @click="addRow('civilServiceEligibility')"
                >
                  add_circle
                </button>
              </th>
            </tr>
            <tr>
              <th style="text-align: left">NUMBER</th>
              <th style="text-align: left">Date of Validity</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="row in civilServiceEligibility" :key="row.careerService">
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.careerService"
                  value=""
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  v-model="row.rating"
                  solo
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
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
                  v-model="row.dateOfValidity"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('civilServiceEligibility', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
        </v-simple-table>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
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
              <th colspan="2" style="text-align: left">GOV'T SERVICE (Y/ N)</th>
              <th rowspan="2" colspan="2" style="text-align: left">
                <button class="material-icons" @click="addRow(workExperience)">
                  add_circle
                </button>
              </th>
            </tr>
            <tr>
              <th style="text-align: left">From</th>
              <th style="text-align: left">To</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="row in workExperience"
              :key="row.inclusiveDateFromWorkExperience"
            >
              <td colspan="1">
                <v-text-field
                  placeholder=""
                  solo
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
                  v-model="row.inclusiveDatToWorkExperience"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.positionTitleWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.departmentWorkExperience"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.monthlySalaryWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.salaryGradeWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.statusOfAppointmentWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.governmentServiceWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('workExperience', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>SIGNATURE</td>
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  v-model="workExperienceSignature"
                  solo
                  class="text-center pt-6"
                  type="file"
                >
                </v-text-field>
              </td>
              <td colspan="1">DATE</td>
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="workExperienceDateOfSignature"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
            </tr>
          </tfoot>
        </v-simple-table>
      </v-tab-item>
      <v-tab>Part 3</v-tab>
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
              <th rowspan="2" colspan="2" style="text-align: left">
                <button
                  class="material-icons"
                  @click="addRow('voluntaryWorkInvolvement')"
                >
                  add_circle
                </button>
              </th>
            </tr>
            <tr>
              <th style="text-align: left">From</th>
              <th style="text-align: left">To</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="row in voluntaryWorkInvolvement"
              :key="row.nameAndAddressOfOrgVolWork"
            >
              <td colspan="1">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.nameAndAddressOfOrgVolWork"
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
                  v-model="row.inclusiveDatesFromVolWork"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.inclusiveDatesToVolWork"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.numberOfHoursVolWork"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.positionOfWorkVolWork"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>

              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('voluntaryWorkInvolvement', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
        </v-simple-table>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
          <thead>
            <tr>
              <th colspan="8" style="text-align: left">
                VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING
                PROGRAMS ATTENDED<br />(Start from the most recent L&D/training
                program and include only the relevant L&D/training taken for the
                last five (5) years for Division Chief/Executive/Managerial
                positions)
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

              <th rowspan="2" colspan="2" style="text-align: left">
                <button
                  class="material-icons"
                  @click="addRow(learningAndDevelopment)"
                >
                  add_circle
                </button>
              </th>
            </tr>
            <tr>
              <th style="text-align: left">From</th>
              <th style="text-align: left">To</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="row in learningAndDevelopment"
              :key="row.learningAndDevelopmentInterventions"
            >
              <td colspan="1">
                <v-text-field
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
                  solo
                  v-model="row.learningAndDevelopmentInclusiveDatesFrom"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.learningAndDevelopmentInclusiveDatesTo"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.learningAndDevelopmentNumberOfHours"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
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
                  v-model="row.learningAndDevelopmentConductedBy"
                  solo
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('learningAndDevelopment', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
        </v-simple-table>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
          <thead>
            <tr>
              <th colspan="8" style="text-align: left">
                VIII. OTHER INFORMATION
              </th>
            </tr>

            <tr>
              <th colspan="3" style="text-align: left">
                31. SPECIAL SKILLS AND HOBBIES
              </th>
              <th colspan="3" style="text-align: left">
                32. NON-ACADEMIC DISTINCTIONS/RECOGNITION<br />
                (Write in full)
              </th>
              <th colspan="3" style="text-align: left">
                33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br />
                (Write in full)
              </th>
              <th colspan="2" style="text-align: left">
                <button
                  class="material-icons"
                  @click="addRow('otherInformation')"
                >
                  add_circle
                </button>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="row in otherInformation"
              :key="row.otherInformationSpecialSkills"
            >
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.otherInformationSpecialSkills"
                  value=""
                  class="text-center pt-5"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  v-model="row.otherInformationNonacademicDistinctions"
                  solo
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.otherInformationAssociationMembers"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('otherInformation', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
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
              <td colspan="1">DATE</td>
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
          </tfoot>
        </v-simple-table>
      </v-tab-item>
      <v-tab>Part 4</v-tab>
      <v-tab-item>
        <v-container fluid>
          <v-row no-gutters>
            <v-col cols="12" sm="6">
              <v-card class="pa-6" outlined tile height="200px">
                34. Are you related by consanguinity or affinity to the
                appointing or recommending authority, or to the chief of bureau
                or office or to the person who has immediate supervision over
                you in the Office, Bureau or Department where you will be
                apppointed, a. within the third degree? b. within the fourth
                degree (for Local Government Unit - Career Employees)?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-3" outlined tile height="200px">
                <v-textarea
                  auto-grow
                  placeholder=""
                  class="mx-2"
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
            <v-col cols="12" sm="6">
              <v-card class="pa-4" outlined tile height="280px">
                35. a. Have you ever been found guilty of any administrative
                offense?<br />
                b. Have you been criminally charged before any court?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-4" outlined tile height="280px">
                <v-textarea
                  placeholder=""
                  auto-grow
                  class="mx-2"
                  label="If YES, give details:"
                  dense
                  v-model="questionThirtyFiveA"
                  max-width="50px"
                  type="text"
                >
                </v-textarea>
                <span class="ma-3">If YES, give details: </span><br />

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
              <v-card class="pa-6" outlined tile height="150px">
                36. Have you ever been convicted of any crime or violation of
                any law, decree, ordinance or regulation by any court or
                tribunal?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-3" outlined tile height="150px">
                <v-textarea
                  auto-grow
                  placeholder=""
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
              <v-card class="pa-6" outlined tile height="150px">
                37. Have you ever been separated from the service in any of the
                following modes: resignation, retirement, dropped from the
                rolls, dismissal, termination, end of term, finished contract or
                phased out (abolition) in the public or private sector?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-3" outlined tile height="150px">
                <v-textarea
                  auto-grow
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
                <v-textarea
                  auto-grow
                  placeholder=""
                  class="mx-2"
                  label="If YES, give details:"
                  dense
                  v-model="questionThirtyEight"
                  type="text"
                >
                </v-textarea>
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
                <v-textarea
                  auto-grow
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
              <v-card class="pa-6" outlined tile height="330px">
                40. 100% 10 C41:F42 Pursuant to: (a) Indigenous People's Act (RA
                8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c)
                Solo Parents Welfare Act of 2000 (RA 8972), please answer the
                following items: Screen reader support enabled. Pursuant to: (a)
                Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled
                Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA
                8972), please answer the following items: Turn on screen reader
                support a. Are you a member of any indigenous group? b. Are you
                a person with disability? c. Are you a solo parent?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-3" outlined tile height="330px">
                <v-textarea
                  auto-grow
                  placeholder=""
                  class="mx-2"
                  label=" If YES, give details:"
                  dense
                  type="text"
                  v-model="questionFourtyA"
                >
                </v-textarea
                ><br />
                <v-text-field
                  auto-grow
                  placeholder=""
                  class="mx-2"
                  label="If YES, please specify ID No:"
                  dense
                  v-model="questionFourtyB"
                  type="text"
                >
                </v-text-field
                ><br />
                <v-text-field
                  auto-grow
                  placeholder=""
                  class="mx-2"
                  v-model="questionFourtyC"
                  label="If YES, please specify ID No:"
                  dense
                  type="text"
                >
                </v-text-field
                ><br />
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
                    <tr height="10px">
                      <td>
                        {{referenceNameFirst}}
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceAddressFirst">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceTelNoFirst">
                        </v-text-field>
                      </td>
                    </tr>
                    <tr height="10px">
                      <td>
                        <v-text-field dense v-model="referenceNameSecond">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceAddressSecond">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceTelNoSecond">
                        </v-text-field>
                      </td>
                    </tr>
                    <tr height="10px">
                      <td>
                        <v-text-field dense v-model="referenceNameThird">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceAddressThird">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceTelNoThird">
                        </v-text-field>
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
                  signature over printed name Computer generated or photocopied
                  picture is not acceptable</v-card-text
                >
                <v-container class="">
                  <v-file-input
                    auto-grow
                    placeholder=""
                    class="mx-2"
                    v-model="personalPhotoAttachment"
                    label="Insert Picture"
                    dense
                  >
                  </v-file-input>
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
                and regulations of the Republic of the Philippines. I authorize
                the agency head/authorized representative to verify/validate the
                contents stated herein. I agree that any misrepresentation made
                in this document and its attachments shall cause the filing of
                administrative/criminal case/s against me.
              </v-card>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" sm="4">
              <v-card class="pa-1">
                <v-card-subtitle class="text-center">
                  Government Issued ID (i.e.Passport, GSIS, SSS, PRC, Driver's
                  License, etc.) PLEASE INDICATE ID Number and Date of Issuance
                </v-card-subtitle>

                <v-container
                  class="text-no-wrap"
                  height="10px"
                  style="font-size: 10px"
                  >Government Issued ID:
                  <v-text-field
                    dense
                    v-model="governmentIssuedID"
                  ></v-text-field
                ></v-container>
                <v-container height="10px" style="font-size: 10px"
                  >ID/License/Passport No.:
                  <v-text-field
                    dense
                    v-model="governmentIssuedIDNo"
                  ></v-text-field
                ></v-container>
                <v-container height="10px" style="font-size: 10px"
                  >Date/Place of Issuance:
                  <v-text-field
                    dense
                    width="10px"
                    v-model="governmentIDDateOrPlaceIssued"
                  ></v-text-field
                ></v-container>
              </v-card>
            </v-col>
            <v-col cols="12" sm="4">
              <v-card>
                <v-container
                  ><v-file-input dense v-model="oathSignature"></v-file-input
                ></v-container>
                <v-card-subtitle
                  >Signature (Sign inside the box)</v-card-subtitle
                >
                <v-container
                  ><v-text-field
                    dense
                    v-model="oathDateAccomplished"
                  ></v-text-field
                ></v-container>
                <v-card-subtitle>Date Accomplished</v-card-subtitle>
              </v-card>
            </v-col>
            <v-col cols="12" sm="4">
              <v-card>
                <v-container
                  ><v-file-input dense v-model="rightThumbMark"></v-file-input
                ></v-container>
                <v-card-subtitle>Right Thumbmark</v-card-subtitle>
              </v-card>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" sm="12" style="border: none">
              SUBSCRIBED AND SWORN to before me this ,
              <span width="200px"
                ><v-text-field
                  type="date"
                  class="pa-1 text-center"
                  width="100px"
                  v-model="subscribedAndSwornDate"
                ></v-text-field
              ></span>
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
            <v-file-input
              dense
              v-model="personAdministeringOath"
            ></v-file-input>
            <span>Person Administering Oath</span>
          </v-card>
        </v-container>
        <!-- </tbody>
        
        </v-simple-table> -->
        <v-btn class="primary" @click="finalizePds('create')"
          >Finalize Part 1-4</v-btn
        >
      </v-tab-item>
      </v-tabs>
    <v-tabs v-if="edit==true">
      <v-tab>Part 1</v-tab>
      <v-tab-item>
        <v-card-title
          v-model="headerText"
          label="Search"
          single-line
          hide-details
          ><span>CS Form N0.212<br />Revised 2017</span>
          <span>Personal Data Sheet</span>
        </v-card-title>
        <v-card-subtitle
          v-model="subtitleText"
          label="Search"
          single-line
          hide-details
        >
          WARNING: Any misrepresentation made in the Personal Data Sheet and the
          Work Experience Sheet shall cause the filing of
          administrative/criminal case/s against the person concerned.
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
                <td width="50px" colspan="2" style="text-align: left">
                  2. SURNAME
                </td>
                <td colspan="7">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalSurname"
                    id="personalSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td width="50px" colspan="2" style="text-align: left">
                  FIRST NAME
                </td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="personalFirstName"
                    id="personalFirstName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="4">
                  <v-text-field
                    label="NAME EXTENSION (JR., SR)"
                    
                    v-model="personalSuffix"
                    id="suffix"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td width="80px" colspan="2" style="text-align: left">
                  MIDDLE NAME
                </td>
                <td colspan="8">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalMiddleName"
                    id="personalMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td max-width="100px" colspan="2" style="text-align: left">
                  DATE OF BIRTH <br />
                  (mm/dd/yyyy)
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalDateOfBirth"
                    dense
                    id="personalDOB"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="3" colspan="2">
                  16.CITIZENSHIP<br />If holder of dual citizenship,<br />please
                  indicate the details.
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
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
                <td colspan="2" style="text-align: left">PLACE OF BIRTH</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
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
                    
                    v-model="personalDualCitizenship"
                    id="countryOfCitizenship"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">SEX</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    id="personalSex"
                    v-model="personalSex"
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
                    id="personalDualCitizenship"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left" rowspan="2">
                  CIVIL STATUS
                </td>
                <td rowspan="2" colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    dense
                    v-model="personalCivilStatus"
                    id="personalCivilStatus"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="4">
                  RESIDENTIAL<br />
                  ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                  ZIP CODE
                </td>
                <td rowspan="1" colspan="2">
                  <v-text-field
                    label="House/Block/Lot No."
                   
                    id="personalHouseNo"
                    v-model="personalResAddressHouseNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="1" colspan="2">
                  <v-text-field
                    label="Street"
                    v-model="personalResAddressStreet"
                    filled
                    id="personalStreet"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td rowspan="1" colspan="2">
                  <v-text-field
                    label="Subdivision/Village"
                    filled
                    v-model="personalResAddressSubdivision"
                    id="personalSubdivision"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="1" colspan="2">
                  <v-text-field
                  label="Barangay"
                    filled
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
                <td colspan="2" style="text-align: left">HEIGHT (m)</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalHeight"
                    dense
                    id="personalHeight"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    label="City/Municipality"
                    filled
                    v-model="personalResAddressCity"
                    dense
                    id="personalCity"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    label="Province"
                    filled
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
                <td colspan="2" style="text-align: left">WEIGHT (kg)</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    id="personalWeight"
                    v-model="personalWeight"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>

                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    solo
                    id="personalZipCode"
                    dense
                    v-model="personalZipCode"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">BLOOD TYPE</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalBloodType"
                    id="personalBloodType"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td rowspan="4">
                  PERMANENT ADDRESS<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                  ZIP CODE
                </td>
                <td colspan="2">
                  <v-text-field
                    label="House/Block/Lot No."
                    filled
                    id="permanentHouseNo"
                    v-model="personalPermanentAddHouseNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    label="Street"
                    filled
                    v-model="personalPermanentAddStreet"
                    id="permanentStreet"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">GSIS ID NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalGSISIDNo"
                    id="personalGsisId"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    label="Subdivision/Village"
                    filled
                    v-model="personalPermanentAddSubdivision"
                    dense
                    id="permanentSubdivision"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    label="Barangay"
                    filled
                    v-model="personalPermanentAddBarangay"
                    id="permanentBarangay"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">PAG-IBIG ID NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalPAGIBIGIDNo"
                    dense
                    id="personalPagibigIdNo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    label="City/Municipality"
                    filled
                    v-model="personalPermanentAddCity"
                    dense
                    id="permanentCity"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="2">
                  <v-text-field
                    label="Province"
                    filled
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
                <td colspan="2" style="text-align: left">PHILHEALTH NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalPHILHEALTHNo"
                    dense
                    id="permanentPhilhealthNo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    v-model="personalPermanentAddZipCode"
                    solo
                    dense
                    id="permanentZipCode"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">SSS NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalSSSNo"
                    id="personalSssNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td>19.TELEPHONE NO.</td>
                <td colspan="3">
                  <v-text-field
                    v-model="personalTelephoneNo"
                    placeholder=""
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
                <td colspan="2" style="text-align: left">14.TIN NO.</td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="personalTinNo"
                    id="personalTinNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td>20.MOBILE NO.</td>
                <td colspan="3">
                  <v-text-field
                    v-model="personalMobileNo"
                    placeholder=""
                    solo
                    id="personalMobileNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: left">
                  AGENCY EMPLOYEE NO.
                </td>
                <td colspan="2">
                  <v-text-field
                    placeholder=""
                    filled
                    v-model="personalAgencyEmployeeNo"
                    id="personalAgencyEmpNo"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td>21. E-MAIL ADDRESS (if any)</td>

                <td colspan="3">
                  <v-text-field
                    placeholder=""
                    filled
                    dense
                    v-model="personalEmailAddress"
                    id="personalEmailAddress"
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
            <thead>
              <tr clas="pa-0">
                <th colspan="5">II. FAMILY BACKGROUND</th>
              </tr>
            </thead>
            <tbody class="" color="secondary">
              <tr>
                <td width="50px">SPOUSE'S SURNAME</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familySpouseSurname"
                    id="spouseSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td>23. NAME of CHILDREN (Write full name and list all)</td>
                <td>DATE OF BIRTH (mm/dd/yyyy)</td>
              </tr>

              <tr>
                <td width="80px">FIRST NAME</td>
                <td colspan="3">
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
                <td colspan="1">
                  <v-text-field
                    label="NAME EXTENSION (JR., SR)"
                    filled
                    v-model="familySpouseSuffix"
                    id="spouseSuffix"
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
                    v-model="nameOfChildrenOne"
                    id="childrenFullname1"
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
                    v-model="dateOfBirthOne"
                    id="childDOB1"
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
                    placeholder=""
                    solo
                    v-model="familySpouseMiddleName"
                    id="spouseMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenTwo"
                    id="childFullName2"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    id="childDOB2"
                    v-model="dateOfBirthTwo"
                    solo
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td max-width="100px">OCCUPATION</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familySpouseOccupation"
                    id="spouseOccupation"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenThree"
                    id="childFullName3"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    id="childDOB3"
                    solo
                    v-model="dateOfBirthThree"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td max-width="100px">EMPLOYER/BUSINESS NAME</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familyEmployerName"
                    id="employerNameFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenFour"
                    id="childFullName4"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="dateOfBirthFour"
                    id="childDOB4"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td max-width="100px">BUSINESS ADDRESS</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familyBusinessAddress"
                    id="businessAddressFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    id="childFullName5"
                    solo
                    v-model="nameOfChildrenFive"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="dateOfBirthFive"
                    id="childDOB5"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td max-width="100px">TELEPHONE NO.</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familyTelephoneNo"
                    id="telephonNumberFamilyBackground"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenSix"
                    id="childFullName6"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="dateOfBirthSix"
                    id="childDOB6"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>

              <tr>
                <td>25. FATHER'S SURNAME</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familyFatherSurname"
                    id="fatherSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenSeven"
                    id="childFullName7"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="dateOfBirthSeven"
                    id="childDOB7"
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
                    placeholder=""
                    solo
                    v-model="familyFatherFirstName"
                    id="fatherFirstName"
                    dense
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    label="NAME EXTENSION (JR., SR)"
                    filled
                    id="fatherSuffix"
                    v-model="familyFatherSuffix"
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
                    v-model="nameOfChildrenEight"
                    id="childFullName8"
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
                    v-model="dateOfBirthEight"
                    id="childDOB8"
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
                    placeholder=""
                    solo
                    v-model="familyFatherMiddleName"
                    id="fatherMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenNine"
                    id="childFullName9"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="dateOfBirthNine"
                    id="childDOB9"
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
                    placeholder=""
                    solo
                    v-model="familyMotherMaidenName"
                    id="motherMaidenName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenTen"
                    id="childFullName10"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="dateOfBirthTen"
                    id="childDOB"
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
                    placeholder=""
                    solo
                    v-model="familyMotherSurname"
                    id="motherSurname"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="nameOfChildrenEleven"
                    id="childFullName11"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="dateOfBirthEleven"
                    id="childDOB11"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
              <tr>
                <td width="80px">FIRST NAME</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="familyMotherFirstName"
                    id="motherFirstName"
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
                    v-model="nameOfChildrenTwelve"
                    id="childFullName12"
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
                    id="childDOB12"
                    dense
                    v-model="dateOfBirthTwelve"
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
                    placeholder=""
                    solo
                    v-model="familyMotherMiddleName"
                    id="motherMiddleName"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=" "
                    solo
                    v-model="nameOfChildrenThirteen"
                    id="childFullName13"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="dateOfBirthThirteen"
                    id="childDOB13"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
            </tbody>
          </template>
        </v-simple-table>
        <br />
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
          <template v-slot:default>
            <thead cols="4">
              <tr clas="pa-0">
                <th colspan="4">III. EDUCATIONAL BACKGROUND</th>
              </tr>
            </thead>
            <tbody class="text-center" color="secondary">
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
                <td rowspan="2">
                  <button
                    class="material-icons"
                    @click="addRow('educationalBackground')"
                  >
                    add_circle
                  </button>
                </td>
              </tr>

              <tr>
                <td>From</td>
                <td>To</td>
              </tr>

              <tr
                v-for="row in educationalBackground"
                :key="row.educBackgroundLevel"
              >
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
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
                    v-model="row.educBackgroundNameOfSchool"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
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
                    placeholder=""
                    v-model="row.educBackgroundPeriodOfAttendanceFrom"
                    solo
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="row.educBackgroundPeriodOfAttendanceTo"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <v-text-field
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
                    v-model="row.educBackgroundScholarship"
                    solo
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
                <td colspan="1">
                  <button
                    class="material-icons"
                    @click="removeRow('educationalBackground', row)"
                  >
                    remove_circle
                  </button>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>SIGNATURE</td>
                <td colspan="4">
                  <v-text-field
                    placeholder="SIGNATURE"
                    solo
                    v-model="educBackgroundSignature"
                    id="signaturePart1"
                    class="text-center pt-6"
                    type="file"
                  >
                  </v-text-field>
                </td>
                <td colspan="1" class="pl-10">DATE</td>
                <td colspan="4">
                  <v-text-field
                    placeholder=""
                    solo
                    v-model="educBackgroundDateOfSignature"
                    id="dateOfSignaturePart1"
                    class="text-center pt-6"
                    type="text"
                  >
                  </v-text-field>
                </td>
              </tr>
            </tfoot>
          </template>
        </v-simple-table>
      </v-tab-item>
      <v-tab>Part 2</v-tab>
      <v-tab-item>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
          <thead>
            <tr>
              <th colspan="8" style="text-align: left">
                IV. CIVIL SERVICE ELIGIBILITY
              </th>
            </tr>

            <tr>
              <th rowspan="2" colspan="2" style="text-align: left">
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
              <th rowspan="2" colspan="2" style="text-align: left">
                <button
                  class="material-icons"
                  @click="addRow('civilServiceEligibility')"
                >
                  add_circle
                </button>
              </th>
            </tr>
            <tr>
              <th style="text-align: left">NUMBER</th>
              <th style="text-align: left">Date of Validity</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="row in civilServiceEligibility" :key="row.careerService">
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.careerService"
                  value=""
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  v-model="row.rating"
                  solo
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
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
                  v-model="row.dateOfValidity"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('civilServiceEligibility', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
        </v-simple-table>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
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
              <th colspan="2" style="text-align: left">GOV'T SERVICE (Y/ N)</th>
              <th rowspan="2" colspan="2" style="text-align: left">
                <button class="material-icons" @click="addRow(workExperience)">
                  add_circle
                </button>
              </th>
            </tr>
            <tr>
              <th style="text-align: left">From</th>
              <th style="text-align: left">To</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="row in workExperience"
              :key="row.inclusiveDateFromWorkExperience"
            >
              <td colspan="1">
                <v-text-field
                  placeholder=""
                  solo
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
                  v-model="row.inclusiveDatToWorkExperience"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.positionTitleWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.departmentWorkExperience"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.monthlySalaryWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.salaryGradeWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.statusOfAppointmentWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.governmentServiceWorkExperience"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('workExperience', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>SIGNATURE</td>
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  v-model="workExperienceSignature"
                  solo
                  class="text-center pt-6"
                  type="file"
                >
                </v-text-field>
              </td>
              <td colspan="1">DATE</td>
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="workExperienceDateOfSignature"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
            </tr>
          </tfoot>
        </v-simple-table>
      </v-tab-item>
      <v-tab>Part 3</v-tab>
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
              <th rowspan="2" colspan="2" style="text-align: left">
                <button
                  class="material-icons"
                  @click="addRow('voluntaryWorkInvolvement')"
                >
                  add_circle
                </button>
              </th>
            </tr>
            <tr>
              <th style="text-align: left">From</th>
              <th style="text-align: left">To</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="row in voluntaryWorkInvolvement"
              :key="row.nameAndAddressOfOrgVolWork"
            >
              <td colspan="1">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.nameAndAddressOfOrgVolWork"
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
                  v-model="row.inclusiveDatesFromVolWork"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.inclusiveDatesToVolWork"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.numberOfHoursVolWork"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.positionOfWorkVolWork"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>

              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('voluntaryWorkInvolvement', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
        </v-simple-table>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
          <thead>
            <tr>
              <th colspan="8" style="text-align: left">
                VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING
                PROGRAMS ATTENDED<br />(Start from the most recent L&D/training
                program and include only the relevant L&D/training taken for the
                last five (5) years for Division Chief/Executive/Managerial
                positions)
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

              <th rowspan="2" colspan="2" style="text-align: left">
                <button
                  class="material-icons"
                  @click="addRow(learningAndDevelopment)"
                >
                  add_circle
                </button>
              </th>
            </tr>
            <tr>
              <th style="text-align: left">From</th>
              <th style="text-align: left">To</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="row in learningAndDevelopment"
              :key="row.learningAndDevelopmentInterventions"
            >
              <td colspan="1">
                <v-text-field
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
                  solo
                  v-model="row.learningAndDevelopmentInclusiveDatesFrom"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.learningAndDevelopmentInclusiveDatesTo"
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.learningAndDevelopmentNumberOfHours"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <v-text-field
                  placeholder=""
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
                  v-model="row.learningAndDevelopmentConductedBy"
                  solo
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('learningAndDevelopment', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
        </v-simple-table>
        <v-simple-table height="auto" class="pa-0 pa-0 ma-12" width="80vw">
          <thead>
            <tr>
              <th colspan="8" style="text-align: left">
                VIII. OTHER INFORMATION
              </th>
            </tr>

            <tr>
              <th colspan="3" style="text-align: left">
                31. SPECIAL SKILLS AND HOBBIES
              </th>
              <th colspan="3" style="text-align: left">
                32. NON-ACADEMIC DISTINCTIONS/RECOGNITION<br />
                (Write in full)
              </th>
              <th colspan="3" style="text-align: left">
                33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br />
                (Write in full)
              </th>
              <th colspan="2" style="text-align: left">
                <button
                  class="material-icons"
                  @click="addRow('otherInformation')"
                >
                  add_circle
                </button>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="row in otherInformation"
              :key="row.otherInformationSpecialSkills"
            >
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  solo
                  v-model="row.otherInformationSpecialSkills"
                  value=""
                  class="text-center pt-5"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  v-model="row.otherInformationNonacademicDistinctions"
                  solo
                  dense
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="3">
                <v-text-field
                  placeholder=""
                  solo
                  dense
                  v-model="row.otherInformationAssociationMembers"
                  class="text-center pt-6"
                  type="text"
                >
                </v-text-field>
              </td>
              <td colspan="2">
                <button
                  class="material-icons"
                  @click="removeRow('otherInformation', row)"
                >
                  remove_circle
                </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
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
              <td colspan="1">DATE</td>
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
          </tfoot>
        </v-simple-table>
      </v-tab-item>
      <v-tab>Part 4</v-tab>
      <v-tab-item>
        <v-container fluid>
          <v-row no-gutters>
            <v-col cols="12" sm="6">
              <v-card class="pa-6" outlined tile height="200px">
                34. Are you related by consanguinity or affinity to the
                appointing or recommending authority, or to the chief of bureau
                or office or to the person who has immediate supervision over
                you in the Office, Bureau or Department where you will be
                apppointed, a. within the third degree? b. within the fourth
                degree (for Local Government Unit - Career Employees)?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-3" outlined tile height="200px">
                <v-textarea
                  auto-grow
                  placeholder=""
                  class="mx-2"
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
            <v-col cols="12" sm="6">
              <v-card class="pa-4" outlined tile height="280px">
                35. a. Have you ever been found guilty of any administrative
                offense?<br />
                b. Have you been criminally charged before any court?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-4" outlined tile height="280px">
                <v-textarea
                  placeholder=""
                  auto-grow
                  class="mx-2"
                  label="If YES, give details:"
                  dense
                  v-model="questionThirtyFiveA"
                  max-width="50px"
                  type="text"
                >
                </v-textarea>
                <span class="ma-3">If YES, give details: </span><br />

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
              <v-card class="pa-6" outlined tile height="150px">
                36. Have you ever been convicted of any crime or violation of
                any law, decree, ordinance or regulation by any court or
                tribunal?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-3" outlined tile height="150px">
                <v-textarea
                  auto-grow
                  placeholder=""
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
              <v-card class="pa-6" outlined tile height="150px">
                37. Have you ever been separated from the service in any of the
                following modes: resignation, retirement, dropped from the
                rolls, dismissal, termination, end of term, finished contract or
                phased out (abolition) in the public or private sector?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-3" outlined tile height="150px">
                <v-textarea
                  auto-grow
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
                <v-textarea
                  auto-grow
                  placeholder=""
                  class="mx-2"
                  label="If YES, give details:"
                  dense
                  v-model="questionThirtyEight"
                  type="text"
                >
                </v-textarea>
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
                <v-textarea
                  auto-grow
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
              <v-card class="pa-6" outlined tile height="330px">
                40. 100% 10 C41:F42 Pursuant to: (a) Indigenous People's Act (RA
                8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c)
                Solo Parents Welfare Act of 2000 (RA 8972), please answer the
                following items: Screen reader support enabled. Pursuant to: (a)
                Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled
                Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA
                8972), please answer the following items: Turn on screen reader
                support a. Are you a member of any indigenous group? b. Are you
                a person with disability? c. Are you a solo parent?</v-card
              >
            </v-col>
            <v-col cols="12" sm="6">
              <v-card class="pa-3" outlined tile height="330px">
                <v-textarea
                  auto-grow
                  placeholder=""
                  class="mx-2"
                  label=" If YES, give details:"
                  dense
                  type="text"
                  v-model="questionFourtyA"
                >
                </v-textarea
                ><br />
                <v-text-field
                  auto-grow
                  placeholder=""
                  class="mx-2"
                  label="If YES, please specify ID No:"
                  dense
                  v-model="questionFourtyB"
                  type="text"
                >
                </v-text-field
                ><br />
                <v-text-field
                  auto-grow
                  placeholder=""
                  class="mx-2"
                  v-model="questionFourtyC"
                  label="If YES, please specify ID No:"
                  dense
                  type="text"
                >
                </v-text-field
                ><br />
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
                    <tr height="10px">
                      <td>
                        <v-text-field dense v-model="referenceNameFirst">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceAddressFirst">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceTelNoFirst">
                        </v-text-field>
                      </td>
                    </tr>
                    <tr height="10px">
                      <td>
                        <v-text-field dense v-model="referenceNameSecond">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceAddressSecond">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceTelNoSecond">
                        </v-text-field>
                      </td>
                    </tr>
                    <tr height="10px">
                      <td>
                        <v-text-field dense v-model="referenceNameThird">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceAddressThird">
                        </v-text-field>
                      </td>
                      <td>
                        <v-text-field dense v-model="referenceTelNoThird">
                        </v-text-field>
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
                  signature over printed name Computer generated or photocopied
                  picture is not acceptable</v-card-text
                >
                <v-container class="">
                  <v-file-input
                    auto-grow
                    placeholder=""
                    class="mx-2"
                    v-model="personalPhotoAttachment"
                    label="Insert Picture"
                    dense
                  >
                  </v-file-input>
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
                and regulations of the Republic of the Philippines. I authorize
                the agency head/authorized representative to verify/validate the
                contents stated herein. I agree that any misrepresentation made
                in this document and its attachments shall cause the filing of
                administrative/criminal case/s against me.
              </v-card>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" sm="4">
              <v-card class="pa-1">
                <v-card-subtitle class="text-center">
                  Government Issued ID (i.e.Passport, GSIS, SSS, PRC, Driver's
                  License, etc.) PLEASE INDICATE ID Number and Date of Issuance
                </v-card-subtitle>

                <v-container
                  class="text-no-wrap"
                  height="10px"
                  style="font-size: 10px"
                  >Government Issued ID:
                  <v-text-field
                    dense
                    v-model="governmentIssuedID"
                  ></v-text-field
                ></v-container>
                <v-container height="10px" style="font-size: 10px"
                  >ID/License/Passport No.:
                  <v-text-field
                    dense
                    v-model="governmentIssuedIDNo"
                  ></v-text-field
                ></v-container>
                <v-container height="10px" style="font-size: 10px"
                  >Date/Place of Issuance:
                  <v-text-field
                    dense
                    width="10px"
                    v-model="governmentIDDateOrPlaceIssued"
                  ></v-text-field
                ></v-container>
              </v-card>
            </v-col>
            <v-col cols="12" sm="4">
              <v-card>
                <v-container
                  ><v-file-input dense v-model="oathSignature"></v-file-input
                ></v-container>
                <v-card-subtitle
                  >Signature (Sign inside the box)</v-card-subtitle
                >
                <v-container
                  ><v-text-field
                    dense
                    v-model="oathDateAccomplished"
                  ></v-text-field
                ></v-container>
                <v-card-subtitle>Date Accomplished</v-card-subtitle>
              </v-card>
            </v-col>
            <v-col cols="12" sm="4">
              <v-card>
                <v-container
                  ><v-file-input dense v-model="rightThumbMark"></v-file-input
                ></v-container>
                <v-card-subtitle>Right Thumbmark</v-card-subtitle>
              </v-card>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" sm="12" style="border: none">
              SUBSCRIBED AND SWORN to before me this ,
              <span width="200px"
                ><v-text-field
                  type="date"
                  class="pa-1 text-center"
                  width="100px"
                  v-model="subscribedAndSwornDate"
                ></v-text-field
              ></span>
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
            <v-file-input
              dense
              v-model="personAdministeringOath"
            ></v-file-input>
            <span>Person Administering Oath</span>
          </v-card>
        </v-container>
        <!-- </tbody>
        
        </v-simple-table> -->
        <v-btn class="primary" @click="finalizePds('create')"
          >Finalize Part 1-4</v-btn
        >
      </v-tab-item>
    </v-tabs>
  </v-main>
</template>

<script>
export default {
  data() {
    return {
      edit:true,
      personalSurname: "",
      personalFirstName: "",
      personalMiddleName: "",
      personalSuffix: "",
      personalDateOfBirth: "",
      personalPlaceOfBirth: "",
      personalCitizenship: "",
      personalDualCitizenship: "",
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
      nameOfChildrenOne: "",
      nameOfChildrenTwo: "",
      nameOfChildrenThree: "",
      nameOfChildrenFour: "",
      nameOfChildrenFive: "",
      nameOfChildrenSix: "",
      nameOfChildrenSeven: "",
      nameOfChildrenEight: "",
      nameOfChildrenNine: "",
      nameOfChildrenTen: "",
      nameOfChildrenEleven: "",
      nameOfChildrenTwelve: "",
      nameOfChildrenThirteen: "",
      dateOfBirthOne: "",
      dateOfBirthTwo: "",
      dateOfBirthThree: "",
      dateOfBirthFour: "",
      dateOfBirthFive: "",
      dateOfBirthSix: "",
      dateOfBirthSeven: "",
      dateOfBirthEight: "",
      dateOfBirthNine: "",
      dateOfBirthTen: "",
      dateOfBirthEleven: "",
      dateOfBirthTwelve: "",
      dateOfBirthThirteen: "",
      educBackgroundLevel: "",
      educBackgroundNameOfSchool: "",
      educBackgroundBasicEducation: "",
      educBackgroundPeriodOfAttendanceFrom: "",
      educBackgroundPeriodOfAttendanceTo: "",
      educBackgroundHighestLevel: "",
      educBackgroundYearGraduated: "",
      educBackgroundScholarship: "",
      educBackgroundSignature: "",
      educBackgroundDateOfSignature: "",
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
      workExperienceDateOfSignature: "",
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
      questionThirtyFour: "",
      questionThirtyFiveA: "",
      questionThirtyFiveDateFiled: "",
      questionThirtyFiveCaseStatus: "",
      questionThirtySix: "",
      questionThirtySeven: "",
      questionThirtyEight: "",
      questionThirtyNine: "",
      questionFourtyA: "",
      questionFourtyB: "",
      questionFourtyC: "",
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
      oathDateAccomplished: "",
      rightThumbMark: "",
      subscribedAndSwornDate: "",
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
      otherInformation: [
        {
          otherInformationSpecialSkills: "",
          otherInformationNonacademicDistinctions: "",
          otherInformationAssociationMembers: "",
        },
      ],
    };
  },
  methods: {
    addRow: function (array) {
      let newRow = [];
      switch (array) {
        case "civilServiceEligibility":
          newRow = {
            careerService: this.careerService,
            rating: this.rating,
            dateOfExamination: this.dateOfExamination,
            placeOfExamination: this.placeOfExamination,
            licenseNumber: this.licenseNumber,
            dateOfValidity: this.dateOfValidity,
          };
          this.civilServiceEligibility.push(newRow);
          break;
        case "voluntaryWorkInvolvement":
          newRow = {
            nameAdAddressOfOrgVolWork: this.nameAdAddressOfOrgVolWork,
            inclusiveDatesFromVolWork: this.inclusiveDatesFromVolWork,
            inclusiveDatesToVolWork: this.inclusiveDatesToVolWork,
            numberOfHoursVolWork: this.numberOfHoursVolWork,
            positionOfWorkVolWork: this.positionOfWorkVolWork,
          };
          this.voluntaryWorkInvolvement.push(newRow);
          break;
        case "educationalBackground":
          newRow = {
            educBackgroundLevel: this.educBackgroundLevel,
            educBackgroundNameOfSchool: this.educBackgroundNameOfSchool,
            educBackgroundBasicEducation: this.educBackgroundBasicEducation,
            educBackgroundPeriodOfAttendanceFrom:
              this.educBackgroundPeriodOfAttendanceFrom,
            educBackgroundPeriodOfAttendanceTo:
              this.educBackgroundPeriodOfAttendanceTo,
            educBackgroundHighestLevel: this.educBackgroundHighestLevel,
            educBackgroundYearGraduated: this.educBackgroundYearGraduated,
            educBackgroundScholarship: this.educBackgroundScholarship,
          };
          this.educationalBackground.push(newRow);
          break;
        case "learningAndDevelopment":
          newRow = {
            learningAndDevelopmentInterventions:
              this.learningAndDevelopmentInterventions,
            learningAndDevelopmentInclusiveDatesFrom:
              this.learningAndDevelopmentInclusiveDatesFrom,
            learningAndDevelopmentInclusiveDatesTo:
              this.learningAndDevelopmentInclusiveDatesTo,
            learningAndDevelopmentNumberOfHours:
              this.learningAndDevelopmentNumberOfHours,
            learningAndDevelopmentTypeOfLD: this.learningAndDevelopmentTypeOfLD,
            learningAndDevelopmentConductedBy:
              this.learningAndDevelopmentConductedBy,
          };
          this.learningAndDevelopment.push(newRow);
          break;
        case "otherInformation":
          newRow = {
            otherInformationSpecialSkills: this.otherInformationSpecialSkills,
            otherInformationNonacademicDistinctions:
              this.otherInformationNonacademicDistinctions,
            otherInformationAssociationMembers:
              this.otherInformationAssociationMembers,
          };
          this.otherInformation.push(newRow);
          break;
        case "workExperience":
          newRow = {
            inclusiveDateFromWorkExperience:
              this.inclusiveDateFromWorkExperience,
            inclusiveDateToWorkExperience: this.inclusiveDateToWorkExperience,
            positionTitleWorkExperience: this.positionTitleWorkExperience,
            departmentWorkExperience: this.departmentWorkExperience,
            monthlySalaryWorkExperience: this.monthlySalaryWorkExperience,
            salaryGradeWorkExperience: this.salaryGradeWorkExperience,
            statusOfAppointmentWorkExperience:
              this.statusOfAppointmentWorkExperience,
            governmentServiceWorkExperience:
              this.governmentServiceWorkExperience,
          };
          this.workExperience.push(newRow);
          break;
        default:
          return "Something went wrong!";
      }
    },
    removeRow: function (array, row) {
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
        case "otherInformation":
          this.otherInformation.splice(row, 1);
          break;
        default:
          return "Something went wrong!";
      }
    },

    finalizePds: async function (method) {
      console.log(method, this.personalCivilStatus);
      const personalSurname = this.personalSurname;
      const personalFirstName = this.personalFirstName;
      const personalMiddleName = this.personalMiddleName;
      const personalSuffix = this.personalSuffix;
      const personalDateOfBirth = this.personalDateOfBirth;
      const personalPlaceOfBirth = this.personalPlaceOfBirth;
      const personalCitizenship = this.personalCitizenship;
      const personalDualCitizenship = this.personalDualCitizenship;
      const personalSex = this.personalSex;
      const personalCivilStatus = personalCivilStatus;
      const personalHeight = this.personalHeight;
      const personalWeight = this.personalWeight;
      const personalBloodType = this.personalBloodType;
      const personalGSISIDNo = this.personalGSISIDNo;
      const personalResAddressHouseNo = personalResAddressHouseNo;
      const personalResAddressStreet = this.personalResAddressStreet;
      const personalResAddressSubdivision = this.personalResAddressSubdivision;
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
      const nameOfChildrenOne = this.nameOfChildrenOne;
      const nameOfChildrenTwo = this.nameOfChildrenTwo;
      const nameOfChildrenThree = this.nameOfChildrenThree;
      const nameOfChildrenFour = this.nameOfChildrenFour;
      const nameOfChildrenFive = this.nameOfChildrenFive;
      const nameOfChildrenSix = this.nameOfChildrenSix;
      const nameOfChildrenSeven = this.nameOfChildrenSeven;
      const nameOfChildrenEight = this.nameOfChildrenEight;
      const nameOfChildrenNine = this.nameOfChildrenNine;
      const nameOfChildrenTen = this.nameOfChildrenTen;
      const nameOfChildrenEleven = this.nameOfChildrenEleven;
      const nameOfChildrenTwelve = this.nameOfChildrenTwelve;
      const nameOfChildrenThirteen = this.nameOfChildrenThirteen;
      const dateOfBirthOne = this.dateOfBirthOne;
      const dateOfBirthTwo = this.dateOfBirthTwo;
      const dateOfBirthThree = this.dateOfBirthThree;
      const dateOfBirthFour = this.dateOfBirthFour;
      const dateOfBirthFive = this.dateOfBirthFive;
      const dateOfBirthSix = this.dateOfBirthSix;
      const dateOfBirthSeven = this.dateOfBirthSeven;
      const dateOfBirthEight = this.dateOfBirthEight;
      const dateOfBirthNine = this.dateOfBirthNine;
      const dateOfBirthTen = this.dateOfBirthTen;
      const dateOfBirthEleven = this.dateOfBirthEleven;
      const dateOfBirthTwelve = this.dateOfBirthTwelve;
      const dateOfBirthThirteen = this.dateOfBirthThirteen;
      const educationalBackground = this.educationalBackground;
      const educBackgroundSignature = this.educBackgroundSignature;
      const educBackgroundDateOfSignature = this.educBackgroundDateOfSignature;
      const civilServiceEligibility = this.civilServiceEligibility;
      const workExperience = this.workExperience;
      const workExperienceSignature = this.workExperienceSignature;
      const workExperienceDateOfSignature = this.workExperienceDateOfSignature;
      const voluntaryWorkInvolvement = this.voluntaryWorkInvolvement;
      const learningAndDevelopment = this.learningAndDevelopment;
      const otherInformation = this.otherInformation;
      const questionThirtyFour = this.questionThirtyFour;
      const questionThirtyFiveA = this.questionThirtyFiveA;
      const questionThirtyFiveDateFiled = this.questionThirtyFiveDateFiled;
      const questionThirtyFiveCaseStatus = this.questionThirtyFiveCaseStatus;
      const questionThirtySix = this.questionThirtySix;
      const questionThirtySeven = this.questionThirtySeven;
      const questionThirtyEight = this.questionThirtyEight;
      const questionThirtyNine = this.questionThirtyNine;
      const questionFourtyA = this.questionFourtyA;
      const questionFourtyB = this.questionFourtyB;
      const questionFourtyC = this.questionFourtyC;
      const referenceNameFirst = this.referenceNameFirst;
      const referenceAddressFirst = this.referenceAddressFirst;
      const referenceTelNoFirst = this.referenceTelNoFirst;
      const referenceNameSecond = this.referenceNameSecond;
      const referenceAddressSecond = this.referenceAddressSecond;
      const referenceTelNoSecond = this.referenceTelNoSecond;
      const referenceNameThird = this.referenceNameThird;
      const referenceAddressThird = this.referenceAddressThird;
      const referenceTelNoThird = this.referenceTelNoThird;
      const personalPhotoAttachment = this.personalPhotoAttachment;
      const governmentIssuedID = this.governmentIssuedID;
      const governmentIssuedIDNo = this.governmentIssuedIDNo;
      const governmentIDDateOrPlaceIssued = this.governmentIDDateOrPlaceIssued;
      const oathSignature = this.oathSignature;
      const oathDateAccomplished = this.oathDateAccomplished;
      const rightThumbMark = this.rightThumbMark;
      const subscribedAndSwornDate = this.subscribedAndSwornDate;
      const personAdministeringOath = this.personAdministeringOath;
      // const user = sessionStorage.userData.ID
      const user = 1;
      const data = {
        user,
        personalSurname,
        personalFirstName,
        personalMiddleName,
        personalSuffix,
        personalDateOfBirth,
        personalPlaceOfBirth,
        personalCitizenship,
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
        nameOfChildrenOne,
        nameOfChildrenTwo,
        nameOfChildrenThree,
        nameOfChildrenFour,
        nameOfChildrenFive,
        nameOfChildrenSix,
        nameOfChildrenSeven,
        nameOfChildrenEight,
        nameOfChildrenNine,
        nameOfChildrenTen,
        nameOfChildrenEleven,
        nameOfChildrenTwelve,
        nameOfChildrenThirteen,
        dateOfBirthOne,
        dateOfBirthTwo,
        dateOfBirthThree,
        dateOfBirthFour,
        dateOfBirthFive,
        dateOfBirthSix,
        dateOfBirthSeven,
        dateOfBirthEight,
        dateOfBirthNine,
        dateOfBirthTen,
        dateOfBirthEleven,
        dateOfBirthTwelve,
        dateOfBirthThirteen,
        educationalBackground,
        educBackgroundSignature,
        educBackgroundDateOfSignature,
        civilServiceEligibility,
        workExperience,
        workExperienceSignature,
        workExperienceDateOfSignature,
        voluntaryWorkInvolvement,
        learningAndDevelopment,
        otherInformation,
        questionThirtyFour,
        questionThirtyFiveA,
        questionThirtyFiveDateFiled,
        questionThirtyFiveCaseStatus,
        questionThirtySix,
        questionThirtySeven,
        questionThirtyEight,
        questionThirtyNine,
        questionFourtyA,
        questionFourtyB,
        questionFourtyC,
        referenceNameFirst,
        referenceAddressFirst,
        referenceTelNoFirst,
        referenceNameSecond,
        referenceAddressSecond,
        referenceTelNoSecond,
        referenceNameThird,
        referenceAddressThird,
        referenceTelNoThird,
        personalPhotoAttachment,
        governmentIssuedID,
        governmentIssuedIDNo,
        governmentIDDateOrPlaceIssued,
        oathSignature,
        oathDateAccomplished,
        rightThumbMark,
        subscribedAndSwornDate,
        personAdministeringOath,
      };
      const returnedData = await this.$store.dispatch("createPds", data);
      console.log(returnedData);
      if (returnedData == "success") {
        console.log("success ");
      }
    },
  },
};
</script>

<style scoped></style>
