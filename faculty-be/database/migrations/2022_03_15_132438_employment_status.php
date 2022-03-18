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
        Schema::create('employment_status', function (Blueprint $table){
            $table->increments('id');
            $table->string('status');
            $table->timestamp('created_at') ->useCurrent();
            $table->timestamp('updated_at') -> nullable() -> useCurrentOnUpdate();
            $table->string('modified_by');
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
        Schema::dropIfExists('employment_status');
    }
};
