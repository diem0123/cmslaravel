<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant', function (Blueprint $table) {
            $table->increments('ID_CONSULTANT');
            $table->string('TITLE')->nullable();
            $table->string('FULL_NAME')->nullable();
            $table->string('TEL');
            $table->string('EMAIL')->nullable();
            $table->string('PASSWORD')->nullable();
            $table->time('JOIN_DATE');
            $table->enum('STATUS',['Active','Inactive','Deleted']);
            $table->time('CREATED_DATE');
            $table->time('UPDATED_DATE');
            $table->string('ADDRESS');
            $table->string('WEBSITE');
            $table->string('MOBI');
            $table->string('USER_NAME');
            $table->string('AVATAR')->nullable();
            $table->string('CODE_FORGOT');
            $table->string('CODE_ACTIVE');
            $table->enum('GENDER',['Nam','Nữ'])->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultant');
    }
}
