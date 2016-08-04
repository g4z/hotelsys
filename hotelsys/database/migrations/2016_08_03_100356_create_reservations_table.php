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
            $table->text('card_number'); // encrypted
            $table->text('card_expiry'); // encrypted
            $table->integer('number_nights');
            $table->integer('number_beds');
            $table->date('from_date');
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
