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
        Schema::create('ipcrf_development_plans', function (Blueprint $table){
            $table->increments('id');
            $table->string('user_id');
            $table->string('school_year');
            $table->string('ratee');
            $table->string('rater');
            $table->string('strengths_functional');
            $table->string('strengths_core');
            $table->string('development_needs_functional');
            $table->string('development_needs_core');
            $table->string('learning_objectives_functional');
            $table->string('learning_objectives_core');
            $table->string('intervention_functional');
            $table->string('intervention_core');
            $table->string('timeline_functional');
            $table->string('timeline_core');
            $table->string('resources_needed_functional');
            $table->string('resources_needed_core');
            $table->string('feedback');
            $table->string('approving_authority');
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
        Schema::dropIfExists('ipcrf_development_plan');
    }
};
