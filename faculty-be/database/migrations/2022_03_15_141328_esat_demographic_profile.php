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
        Schema::create('esat_demographic_profiles', function (Blueprint $table){
            $table->increments('id');
            $table->string('user_id');
            $table->string('name_of_employee');
            $table->string('employee_id');
            $table->string('position');
            $table->string('employment_status');
            $table->string('age');
            $table->string('sex');

            $table->string('school_year');
            $table->string('years_in_teaching');
            $table->string('highest_degree_obtained');
            $table->string('specified_highest_degree_obtained');
            $table->string('level_taught');
            $table->string('grade_level_taught');

            $table->string('region');
            $table->string('division');
            $table->string('employee_municipality');
            $table->string('school_id');
            $table->string('school_name');
            $table->string('school_type');
            $table->string('school_size');
            $table->string('curricular_classification');
            $table->string('area_of_specialization');
            $table->string('subjects_taught');
            $table->string('personal_comments')-> nullable();
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
        Schema::dropIfExists('esat_demographic_profile');
    }
};
