<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string("SR_PCODE");
            $table->string("SR_NAME");
            $table->string("TS_PCODE");
            $table->string("TS_NAME");
            $table->integer("HOSPNB");
            $table->integer("HOSPBDNB");
            $table->integer("HOSPGVNB");
            $table->integer("HOSPGVBDNB");
            $table->integer("HOSPPVNB");
            $table->integer("HOSPPVBD");
            $table->integer("HOSPTYP01");
            $table->integer("HOSPTYP02");
            $table->integer("HOSPTYP03");
            $table->integer("HOSPTYP04");
            $table->integer("HOSPTYP05");
            $table->integer("HOSPTYP06");
            $table->integer("HOSPTYP07");
            $table->integer("HOSPTYP08");
            $table->integer("HOSPTYP09");
            $table->integer("HOSPTYP10");
            $table->integer("HOSPTYP11");
            $table->integer("HOSPTYP12");
            $table->integer("HOSPTYP13");
            $table->integer("HOSPTYP14");
            $table->integer("HOSPTYP15");
            $table->integer("HOSPTYP16");
            $table->integer("HOSPTYP17");
            $table->integer("HOSPTYP18");
            $table->integer("HOSPTYP19");
            $table->integer("HOSPTYP20");
            $table->integer("HOSPTYP21");
            $table->integer("HOSPTYP22");
            $table->integer("HOSPTYP23");
            $table->integer("HOSPTYP24");
            $table->integer("HOSPTYP25");
            $table->integer("HOSPTYP26");
            $table->integer("HOSPTYP27");
            $table->integer("HOSPTYP28");

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
        Schema::dropIfExists('hospitals');
    }
}
