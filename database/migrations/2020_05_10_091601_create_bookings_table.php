<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{

    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('check_in');
            $table->string('check_out');
            $table->integer('guests');
            $table->integer('rooms');
            $table->boolean('pet');
            $table->boolean('breakfast');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
            
    }
}
