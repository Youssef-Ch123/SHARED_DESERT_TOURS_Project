<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoytransportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moytransports', function (Blueprint $table) {

              $table->integer('id')->autoIncrement();
              $table->string('moyTrans');
              $table->longText('image')->nullable();
              $table->engine='INNODB';
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
        Schema::dropIfExists('moytransports');
    }
}
