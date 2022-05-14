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
            $table->text('question_thirty_four') -> nullable();
            $table->text('question_thirty_five_a') -> nullable();
            $table->text('question_thirty_five_b_date_filed') -> nullable();
            $table->text('question_thirty_five_B_status_of_case') -> nullable();
            $table->text('question_thirty_six') -> nullable();
            $table->text('question_thirty_seven') -> nullable();
            $table->text('question_thirty_eight_a') -> nullable();
            $table->text('question_thirty_eight_b') -> nullable();
            $table->text('question_thirty_nine') -> nullable();
            $table->text('question_forty_a') -> nullable();
            $table->string('question_forty_b') -> nullable();
            $table->string('question_forty_c') -> nullable();
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
