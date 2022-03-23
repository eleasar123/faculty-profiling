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
        Schema::create('esat_functional_objectives', function (Blueprint $table){
            $table->increments('id');
            $table->string('user_id');
            $table->string('objectives_no');
            $table->string('objectives_details');
            $table->string('level_of_capability');
            $table->string('priority_for_development');
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
        Schema::dropIfExists('esat_functional_objectives');
    }
};
