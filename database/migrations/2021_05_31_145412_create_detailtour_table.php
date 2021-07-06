<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtours', function (Blueprint $table) {

            $table->integer('id')->autoIncrement();
            $table->string('Title');
            $table->string('Description');
            $table->integer('tour_id');
            $table->index('tour_id');
            $table->foreign('tour_id')->references('id')->on('tours')
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
        Schema::dropIfExists('detailtours');
    }
}
