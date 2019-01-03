<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonCatSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_cat_sub', function (Blueprint $table) {
            $table->increments('ID_CAT_SUB');
            $table->string('SNAME')->nullable();
            $table->integer('ID_CAT');
            $table->integer('IORDER');
            $table->enum('STATUS',['Active','Inactive','Deleted']);
            $table->text('SCONTENTSHORT')->nullable();
            $table->longtext('SCONTENT')->nullable();
            $table->string('PICTURE')->nullable();
            $table->tinyInteger('MN')->nullable()->default(0);
            $table->tinyInteger('HT')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('=common_cat_sub');
    }
}
