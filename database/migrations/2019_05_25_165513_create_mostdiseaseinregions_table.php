<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMostdiseaseinregionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mostdiseaseinregions', function (Blueprint $table) {
            $table->increments('id');
            $table->string("SR_PCODE");
            $table->string("SR_NAME");
            $table->string("TS_PCODE");
            $table->string("TS_NAME");
            $table->integer("DISAF01");
            $table->integer("DISDD01");
            $table->integer("DISAF02");
            $table->integer("DISDD02");
            $table->integer("DISAF03");
            $table->integer("DISDD03");
            $table->integer("DISAF04");
            $table->integer("DISDD04");
            $table->integer("DISAF05");
            $table->integer("DISDD05");
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
        Schema::dropIfExists('mostdiseaseinregions');
    }
}
