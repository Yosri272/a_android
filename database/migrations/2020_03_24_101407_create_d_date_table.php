<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_date', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('d_dayofwork', 100);
              $table->string('d_timeofwork', 100);
              $table->string('d_timeofwork1', 100);
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
        Schema::dropIfExists('d_date');
    }
}
