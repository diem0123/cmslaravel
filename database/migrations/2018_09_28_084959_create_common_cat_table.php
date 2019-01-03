<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_cat', function (Blueprint $table) {
            $table->increments('ID_CAT');
            $table->string('SNAME');
            $table->Integer('ID_TYPE');
            $table->Integer('IORDER');
            $table->enum('STATUS',['Active','Inactive','Deleted']);
            $table->tinyInteger('DISP_ONMN');
            $table->text('SCONTENTSHORT')->nullable();
            $table->longtext('SCONTENTS')->nullable();
            $table->string('PICTURE')->nullable();
            $table->tinyInteger('MN')->nullable()->default(0);
            $table->tinyInteger('HT')->default(0); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('=common_cat');
    }
}
