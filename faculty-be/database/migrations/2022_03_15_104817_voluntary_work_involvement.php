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
        Schema::create('voluntary_work_involvements', function (Blueprint $table){
            $table->increments('id');
            $table->string('user');
            $table->string('organization_name_and_address');
            $table->string('voluntary_inclusive_dates_from');
            $table->string('voluntary_inclusive_dates_to');
            $table->string('number_of_hours');
            $table->string('position');
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
        Schema::dropIfExists('voluntary_work_involvement');
    }
};
