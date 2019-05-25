<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthcarePerPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthcare_per_people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SR_PCODE');
            $table->string('SR_NAME');
            $table->string('TS_PCODE');
            $table->string('TS_NAME');
            $table->integer('POP');
            $table->integer('PHYSNB');
            $table->string('PHYSR');
            $table->integer('NURSNB');
            $table->string('NURSR');
            $table->integer('HSNB');
            $table->string('HSR');
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
        Schema::dropIfExists('healthcare_per_people');
    }
}
