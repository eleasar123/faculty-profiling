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
        Schema::create('userProfile', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('given_name');
            $table->string('middle_name');
            $table->string('suffix_name');
            $table->string('birthdate');
            $table->string('item_number');
            $table->string('position');
            $table->string('employee_no');
            $table->string('tin');
            $table->string('gsis_bp');
            $table->string('pag-ibig');
            $table->string('philhealth');
            $table->string('deped_email')->unique();
            $table->string('baccalaureate_degree');
            $table->string('graduate_studies_degree');
            $table->string('major');
            $table->string('years_in_service');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at') ->useCurrent();
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
        //
    }
};
