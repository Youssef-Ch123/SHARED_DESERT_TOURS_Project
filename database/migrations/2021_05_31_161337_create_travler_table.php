<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travlers', function (Blueprint $table) {

            $table->integer('id')->autoIncrement();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Tel')->nullable();
            $table->date('BirthDate')->nullable();
            $table->text('HomeTown')->nullable();
            $table->string('Email');
            $table->string('Password');
            $table->string('Email_Verified')->default('false');
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
        Schema::dropIfExists('travlers');
    }
}
