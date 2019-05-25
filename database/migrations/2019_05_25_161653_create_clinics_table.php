<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SR_PCODE');
            $table->string('SR_NAME');
            $table->string('TS_PCODE');
            $table->string('TS_NAME');
            $table->integer('CLINNB');
            $table->integer('CLINGVNB');
            $table->integer('CLINPVNB');
            $table->integer('CLINNGONB');
            $table->integer('CLINTYP01');
            $table->integer('CLINTYP02');
            $table->integer('CLINTYP03');
            $table->integer('CLINTYP04');
            $table->integer('CLINTYP05');
            $table->integer('CLINTYP06');
            $table->integer('CLINTYP07');
            $table->integer('CLINTYP08');
            $table->integer('CLINTYP09');
            $table->integer('CLINTYP10');
            $table->integer('CLINTYP11');
            $table->integer('CLINTYP12');
            $table->integer('CLINTYP13');
            $table->integer('CLINTYP14');
            $table->integer('CLINTYP15');
            $table->integer('CLINTYP16');
            $table->integer('CLINTYP17');
            $table->integer('CLINTYP18');
            $table->integer('CLINTYP19');
            $table->integer('CLINTYP20');
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
        Schema::dropIfExists('clinics');
    }
}
