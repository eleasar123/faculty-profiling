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
        Schema::create('work_experiences', function (Blueprint $table){
            $table->increments('id');
            $table->string('user');
            $table->string('work_inclusive_dates_from');
            $table->string('work_inclusive_dates_to');
            $table->string('department');
            $table->string('monthly_salary');
            $table->string('salary_grade');
            $table->string('status_of_appointment');
            $table->string('government_service');
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
        Schema::dropIfExists('work_experience');
    }
};
