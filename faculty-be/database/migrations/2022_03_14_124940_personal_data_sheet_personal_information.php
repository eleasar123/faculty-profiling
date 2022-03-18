<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personal_data_sheet_personal_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix');
            $table->string('date_of_birth');   
            $table->string('place_of_birth');
            $table->string('sex'); 
            $table->string('height');
            $table->string('weight');
            $table->string('blood_type');
            $table->string('gsis_id_no');
            $table->string('pag-ibig_id_no');
            $table->string('sss_no');
            $table->string('tin_no');
            $table->string('agency_employee_no');
            $table->string('citizenship');
            $table->string('residential_address_house_no');
            $table->string('residential_address_street');
            $table->string('residential_address_subdivision');
            $table->string('residential_address_barangay');
            $table->string('residential_address_city');
            $table->string('residential_address_province');
            $table->string('residential_address_zip_code');
            $table->string('permanent_address_house_no');
            $table->string('permanent_address_street');
            $table->string('permanent_address_subdivision');
            $table->string('permanent_address_barangay');
            $table->string('permanent_address_city');
            $table->string('permanent_address_province');
            $table->string('permanent_address_zip_code');
            $table->string('telephone_no');
            $table->string('mobile_no');
            $table->string('email_address');
            $table->string('signature');
            $table->string('date_signed');
            $table->timestamp('created_at') ->useCurrent();
            $table->timestamp('updated_at') -> nullable() -> useCurrentOnUpdate();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('personal_data_sheet_personal_information');
    }
};
