<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('d_name', 100);
            ////////////////////
            $table->string('d_username', 100);
            $table->string('d_password', 100);
            $table->string('d_spe', 100);
            $table->integer('d_balans');
            $table->string('d_mo', 100);
            $table->integer('d_phone');
            $table->string('d_city', 100);
            $table->string('d_address', 100);
            $table->integer('d_mark');
            $table->integer('d_flag');
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
        Schema::dropIfExists('doctor');
    }
}
