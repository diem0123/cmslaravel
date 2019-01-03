<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommonTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_type', function (Blueprint $table) {
            $table->increments('ID_TYPE');
            $table->string('SNAME');
            $table->Integer('IORDER');
            $table->enum('STATUS',['Active','Inactive','Deleted']);
            $table->text('SCONTENTSHORT')->nullable();
            $table->longtext('SCONTENTS')->nullable();
            $table->tinyInteger('MN')->nullable()->default(0);
            $table->text('PICTURE')->nullable();
            $table->tinyInteger('HT')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_type');
    }
}
