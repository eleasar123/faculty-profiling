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
            $table->string('user_id');
            $table->string('subject_cot1');
            $table->string('objective_no')-> nullable();
            $table->string('cot_indicator_no')-> nullable();
            $table->string('rating_cot1')-> nullable();
            $table->string('rpms_5pt_scale_cot1')-> nullable();
            $table->string('rating_cot2')-> nullable();
            $table->string('rpms_5pt_scale_cot2')-> nullable();
            $table->string('cot3')-> nullable();
            $table->string('cot4')-> nullable();
            $table->string('average_cot')-> nullable();
            $table->string('ipcrf_numerical_ratings_q')-> nullable();
            $table->string('ipcrf_numerical_ratings_e')-> nullable();
            $table->string('ipcrf_numerical_ratings_t')-> nullable();
            $table->string('ipcrf_numerical_ratings_average')-> nullable();
            $table->string('ipcrf_numerical_ratings_score')-> nullable();
            $table->string('ipcrf_numerical_ratings_adjectival_rating')-> nullable();
            $table->string('school_year');
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
