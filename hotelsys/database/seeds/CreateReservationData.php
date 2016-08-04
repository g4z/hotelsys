<?php

use App\Room;
use App\Reservation;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CreateReservationData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // / grab a random room
        $room = Room::all()->random();

        // Fake number of nights
        $num_nights = $faker->numberBetween(3,14);

        // timestamp 90 days in future
        $maxFutureTimestamp = time() + (60*60*24*90);

        Reservation::create([
            'room_id' => $room->id,
            'name' => $faker->name,
            'email' => $faker->email,
            'card_number' => $faker->creditCardNumber,
            'card_expiry' => $faker->creditCardExpirationDateString,
            'number_nights' => $num_nights,
            'number_beds' => $faker->numberBetween(1,3),
            'from_date' => date('Y-m-d', $maxFutureTimestamp),
            'cost' => ($num_nights * $room->price),
        ]);

    }
}
