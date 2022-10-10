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
        Schema::create('personal_data_sheet_family_backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('spouse_last_name') -> nullable();
            $table->string('spouse_first_name') -> nullable();
            $table->string('spouse_middle_name') -> nullable();
            $table->string('spouse_suffix') -> nullable();
            $table->string('spouse_occupation') -> nullable();   
            $table->string('spouse_employer') -> nullable();
            $table->string('spouse_business_address') -> nullable(); 
            $table->string('spouse_telephone_no') -> nullable();
            $table->string('first_child') -> nullable();
            $table->string('second_child') -> nullable();
            $table->string('third_child') -> nullable();
            $table->string('fourth_child') -> nullable();
            $table->string('fifth_child') -> nullable();
            $table->string('sixth_child') -> nullable();
            $table->string('spouse_date_of_birth') -> nullable();
            $table->string('father_last_name');
            $table->string('father_first_name');
            $table->string('father_middle_name');
            $table->string('father_suffix')-> nullable();
            $table->date('father_date_of_birth');
            $table->string('mother_maiden_name');
            $table->string('mother_last_name');
            $table->string('mother_first_name');
            $table->string('mother_middle_name');
            $table->date('mother_date_of_birth');
            $table->timestamp('created_at') ->useCurrent();
            $table->timestamp('updated_at') -> nullable() -> useCurrentOnUpdate();
            $table->softDeletesTz();
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
        Schema::dropIfExists('personal_data_sheet_family_background');
    }
};