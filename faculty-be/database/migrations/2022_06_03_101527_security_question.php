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
        Schema::create('security_question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('question_one');
            $table->string('question_two');
            $table->string('question_three');
            $table->timestamp('created_at')->useCurrent();
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
        Schema::dropIfExists('security_question');
    }
};
