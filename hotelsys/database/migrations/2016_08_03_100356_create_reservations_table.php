<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('room_id');
            $table->string('uuid');
            $table->string('name');
            $table->string('email');
            $table->string('card_number', 24);
            $table->string('card_expiry', 5);
            $table->integer('number_nights');
            $table->integer('number_beds');
            $table->float('cost', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservations');
    }
}
