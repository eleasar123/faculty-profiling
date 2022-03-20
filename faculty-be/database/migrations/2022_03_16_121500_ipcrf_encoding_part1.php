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
        Schema::create('ipcrf_encoding_part1s', function (Blueprint $table){
            $table->increments('id');
            $table->string('user');
            $table->string('objective1');
            $table->string('objective2');
            $table->string('objective3');
            $table->string('objective4');
            $table->string('objective5');
            $table->string('subject');
            $table->string('objective6');
            $table->string('objective7');
            $table->string('objective8');
            $table->string('objective9');
            $table->string('objective10');
            $table->string('school_year');
            $table->string('personnel');
            $table->string('date_observed');
            $table->string('final_rating');
            $table->string('adjectival_rating');
            $table->string('approving_authority');
            $table->string('approver_position');
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
        Schema::dropIfExists('ipcrf_encoding_part1');
    }
};
