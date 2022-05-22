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
        Schema::create('ipcrf_encoding_part2s', function (Blueprint $table){
            $table->increments('id');
            $table->string('user_id');
            $table->string('self_management')-> nullable();
            $table->string('teamwork')-> nullable();
            $table->string('professional_and_ethics')-> nullable();
            $table->string('service_orientation')-> nullable();
            $table->string('results_focus')-> nullable();
            $table->string('innovation')-> nullable();
            $table->string('school_year')-> nullable();
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
        Schema::dropIfExists('ipcrf_encoding_part2s');
    }
};
