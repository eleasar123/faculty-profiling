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
        Schema::create('learning_and_developments', function (Blueprint $table){
            $table->increments('id');
            $table->string('user');
            $table->string('learning_and_development_interventions');
            $table->string('learning_inclusive_dates_from');
            $table->string('learning_inclusive_dates_to');
            $table->string('number_of_hours');
            $table->string('type_of_ld');
            $table->string('conducted_by');
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
        Schema::dropIfExists('learning_and_development');
    }
};
