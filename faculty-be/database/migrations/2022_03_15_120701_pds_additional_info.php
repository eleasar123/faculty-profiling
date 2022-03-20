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
        Schema::create('pds_additional_infos', function (Blueprint $table){
            $table->increments('id');
            $table->string('user');
            $table->string('oath');
            $table->string('government_id');
            $table->string('id_no');
            $table->string('date/place_of_issuance');
            $table->string('signature');
            $table->string('photo');
            $table->string('right_thumbmark');
            $table->string('sworn_date');
            $table->string('person_administering_oath');
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
        Schema::dropIfExists('pds_additional_info');
    }
};
