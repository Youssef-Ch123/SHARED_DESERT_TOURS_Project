<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {

              $table->integer('id');
              $table->date('Date');
              $table->integer('N_Places')->unsigned();

              $table->integer('travler_id');
              $table->index('travler_id');
              $table->foreign('travler_id')->references('id')->on('travlers')
                ->onUpdate('cascade')
                ->onDelete('cascade');

              $table->integer('group_id');
              $table->index('group_id');
              $table->foreign('group_id')->references('id')->on('groups')
                ->onUpdate('cascade')
                ->onDelete('cascade');

              $table->integer('Paiement_id');
              $table->index('Paiement_id');
              $table->foreign('Paiement_id')->references('id')->on('modepaiements')
                ->onUpdate('cascade')
                ->onDelete('cascade');

                
              $table->primary(['id', 'travler_id', 'group_id']);

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
        Schema::dropIfExists('bookings');
    }
}
