<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRememberIngdisabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remember_ingdisabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string("SR_PCODE");
            $table->string("SR_NAME");
            $table->string("TS_PCODE");
            $table->string("TS_NAME");
            $table->string("DISREM_N_T");
            $table->string("DISREM_YSOME_T");
            $table->string("DISREM_YLOT_T");
            $table->string("DISREM_YALL_T");
            $table->string("DISREM_Y_T");
            $table->string("DISREM_TOT_T");
            $table->string("DISREMR_T");
            $table->string("DISREM_N_F");
            $table->string("DISREM_YSOME_F");
            $table->string("DISREM_YLOT_F");
            $table->string("DISREM_YALL_F");
            $table->string("DISREM_Y_F");
            $table->string("DISREM_TOT_F");
            $table->string("DISREMR_F");
            $table->string("DISREM_N_M");
            $table->string("DISREM_YSOME_M");
            $table->string("DISREM_YLOT_M");
            $table->string("DISREM_YALL_M");
            $table->string("DISREM_Y_M");
            $table->string("DISREM_TOT_M");
            $table->string("DISREMR_M");
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
        Schema::dropIfExists('remember_ingdisabilities');
    }
}
