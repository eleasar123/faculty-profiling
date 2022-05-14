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
        Schema::create('other_infos', function (Blueprint $table){
            $table->increments('id');
            $table->string('user_id');
            $table->string('special_skills_and_hobbies') -> nullable();
            $table->string('nonacademic_distinctions') -> nullable();
            $table->string('association_members') -> nullable();
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
        Schema::dropIfExists('other_infos');
    }
};
