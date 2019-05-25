<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuralhealtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruralhealts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SR_PCODE');
            $table->string('SR_NAME');
            $table->string('TS_PCODE');
            $table->string('TS_NAME');
            $table->integer('RHCNB');
            $table->integer('RSHCNB');
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
        Schema::dropIfExists('ruralhealts');
    }
}
