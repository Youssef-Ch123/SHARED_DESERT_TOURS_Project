<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {

              $table->integer('id');
              $table->integer('Group_Size')->unsigned();
              $table->float('Prix');
              $table->longText('Cutoff_Time_Booking');
              $table->longText('Cutoff_Time_RmBooking');

              $table->integer('tour_id');
              $table->foreign('tour_id')->references('id')->on('tours')
                ->onUpdate('cascade')
                ->onDelete('cascade');

              $table->integer('moy_id');
              $table->foreign('moy_id')->references('id')->on('moytransports')
                ->onUpdate('cascade')
                ->onDelete('cascade');

                $table->primary(['id', 'tour_id', 'moy_id']);

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
        Schema::dropIfExists('groups');
    }
}
