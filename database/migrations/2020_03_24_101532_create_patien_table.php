<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('p_name', 100);
            $table->string('p_username', 100);
            $table->string('e_mail', 100); 
            $table->string('p_password', 100);
            $table->string('p_gender', 100);
            $table->integer('p_barthday');
            /////
            $table->integer('p_phone');

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
        Schema::dropIfExists('patien');
    }
}
