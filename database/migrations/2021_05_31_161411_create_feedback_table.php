<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {

              $table->integer('id')->unsigned();
              $table->integer('N_Stars');
              $table->string('Comment');
              $table->date('Date');

              $table->integer('booking_id');
              $table->index('booking_id');
              $table->foreign('booking_id')->references('id')->on('bookings')
                ->onUpdate('cascade')
                ->onDelete('cascade');

              $table->integer('travler_id');
              $table->index('travler_id');
              $table->foreign('travler_id')->references('id')->on('travlers')
                ->onUpdate('cascade')
                ->onDelete('cascade');

              $table->primary(['id', 'booking_id', 'travler_id']);


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
        Schema::dropIfExists('feedbacks');
    }
}
