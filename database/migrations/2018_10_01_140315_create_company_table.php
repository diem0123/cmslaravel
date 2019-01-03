<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('ID_COM');
            $table->string('COM_NAME')->nullable();
            $table->string('SHORT_NAME')->nullable();
            $table->longtext('DESCRIPTION')->nullable();
            $table->string('EMAIL')->nullable();
            $table->string('TEL')->nullable();
            $table->string('FAX')->nullable();
            $table->string('WEBSITE')->nullable();
            $table->text('ADDRESS')->nullable();
            $table->enum('STATUS',['Active','Inactive','Deleted']);
            $table->time('DATE_JOIN');
            $table->time('DATE_UPDATE');
            $table->string('LOGO')->nullable();
            $table->integer('COUNTCOM')->nullable();
            $table->text('HOTNEWS')->nullable();
            $table->integer('ID_PROVINCE')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
