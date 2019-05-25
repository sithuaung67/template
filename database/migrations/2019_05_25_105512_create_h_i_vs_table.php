<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHIVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_i_vs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sr_pcode');
            $table->string('sr_name');
            $table->string('ts_pcode');
            $table->string('ts_name');
            $table->integer('hivaf15_16');
            $table->integer('hivdd15_16');
            $table->integer('hivaf16_17');
            $table->integer('hivdd016_17');

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
        Schema::dropIfExists('h_i_vs');
    }
}
