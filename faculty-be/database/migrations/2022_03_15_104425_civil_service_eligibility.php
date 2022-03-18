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
        Schema::create('civil_service_eligibilities', function (Blueprint $table){
            $table->increments('id');
            $table->string('user');
            $table->string('career_service');
            $table->string('rating');
            $table->string('date_of_examination');
            $table->string('place_of_examination');
            $table->string('license_number');
            $table->string('license_date_of_validity');
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
        Schema::dropIfExists('civil_service_eligibility');
    }
};
