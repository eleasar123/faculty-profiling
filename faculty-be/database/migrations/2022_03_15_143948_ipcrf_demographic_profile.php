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
        Schema::create('ipcrf_demographic_profiles', function (Blueprint $table){
            $table->increments('id');
            $table->string('user_id');
            $table->string('name_of_employee');
            $table->string('position');
            $table->string('employee_id');
            $table->string('employment_status');
            $table->string('age');
            $table->string('sex');
            $table->string('level_taught');
            $table->string('grade_level_taught');
            $table->string('subject_taught');
            $table->string('rater');
            $table->string('rater_position');
            $table->string('date_of_review');
            $table->string('rating_period');
            $table->string('number_of_years_teaching');
            $table->string('highest_degree_obtained');
            $table->string('area_of_specialization');
            $table->string('region');
            $table->string('division');
            $table->string('district_municipality');
            $table->string('school_id');
            $table->string('school_name');
            $table->string('school_type');
            $table->string('school_size');
            $table->string('curricular_classification');
            $table->string('school_year');
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
        Schema::dropIfExists('ipcrf_demographic_profiles');
    }
};
