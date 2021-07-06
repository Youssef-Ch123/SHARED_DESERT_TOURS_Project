<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->string('Tel')->nullable();
            $table->string('Fax')->nullable();
            $table->text('Adress')->nullable();
            $table->string('email');
            $table->string('password');
            $table->longText('image')->nullable();
            $table->string('Email_Verified')->default('false');
            $table->string('Account_confirmed')->default('false');
            $table->timestamps();
            $table->engine='INNODB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
