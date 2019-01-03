<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common', function (Blueprint $table) {
            $table->increments('ID_COMMON');
            $table->string('STITLE')->nullable();
            $table->text('SCONTENTSHORT')->nullable();
            $table->longtext('SCONTENTS')->nullable();
            $table->integer('ID_TYPE');
            $table->enum('STATUS',['Active','Inactive','Deleted']);
            $table->time('DATE_POST');
            $table->time('DATE_UPDATED');
            $table->smallInteger('POST_BY');
            $table->integer('ID_CAT');
            $table->integer('ID_CAT_SUB')->nullable();
            $table->tinyInteger('HOME')->nullable()->default(0);
            $table->tinyInteger('TIEUDIEM')->nullable()->default(0);
            $table->integer('COUNTVIEW')->nullable()->default(0);
            $table->string('PICTURE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common');
    }
}
