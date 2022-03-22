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
        Schema::create('personal_data_sheet_educational_backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('level');
            $table->string('name_of_school');
            $table->string('basic_education/course');
            $table->string('period_of_attendance_from');
            $table->string('period_of_attendance_to');
            $table->string('highest_level/units_earned');
            $table->string('year_graduated');
            $table->string('academic_honors_received');
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
        Schema::dropIfExists('personal_data_sheet_educational_background');
    }
};
