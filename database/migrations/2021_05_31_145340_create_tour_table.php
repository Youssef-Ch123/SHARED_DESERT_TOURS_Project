<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('Title');
            $table->date('Start_Date');
            $table->time('Start_Time');
            $table->integer('Duration')->unsigned();
            $table->longText('Start_Address');
            $table->longText('image');
            $table->integer('agency_id');
            $table->index('agency_id');
            $table->foreign('agency_id')->references('id')->on('agencies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tours');
    }
}
