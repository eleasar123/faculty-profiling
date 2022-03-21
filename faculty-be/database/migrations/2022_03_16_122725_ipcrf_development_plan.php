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
            $table->string('user');
            $table->string('ratee');
            $table->string('competency_type');
            $table->string('rater');
            $table->string('strengths');
            $table->string('development_needs');
            $table->string('learning_objectives');
            $table->string('timeline');
            $table->string('resources_needed');
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
