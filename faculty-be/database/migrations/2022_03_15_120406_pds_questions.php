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
        Schema::create('pds_questions', function (Blueprint $table){
            $table->increments('id');
            $table->string('user_id');
            $table->text('question_thirty_four');
            $table->text('question_thirty_five_a');
            $table->text('question_thirty_five_b_date_filed');
            $table->text('question_thirty_five_B_status_of_case');
            $table->text('question_thirty_six');
            $table->text('question_thirty_seven');
            $table->text('question_thirty_eight');
            $table->text('question_thirty_nine');
            $table->text('question_forty_a');
            $table->string('question_forty_b');
            $table->string('question_forty_c');
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
        Schema::dropIfExists('pds_questions');
    }
};
