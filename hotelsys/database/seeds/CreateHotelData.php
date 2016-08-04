<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Hotel;

class CreateHotelData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Hotel::create([
            'name' => 'Hotel ' . $faker->company, 
            'image' => 'http://www.ilgiornale.it/sites/default/files/foto/2015/06/25/1435243544-hotel-03.jpg',
            'amenities' => json_encode(['Swimming Pool','Petting Garden','Beauty Parlour'])
        ]);

        Hotel::create([
            'name' => 'Hotel ' . $faker->company, 
            'image' => 'http://www.college-hotel.com/client/cache/contenu/_500____college-hotelp1diapo1_718.jpg',
            'amenities' => json_encode(['Swimming Pool','Gym','Sauna'])
        ]);

        Hotel::create([
            'name' => 'Hotel ' . $faker->company, 
            'image' => 'https://www.omnihotels.com/-/media/images/hotels/ausctr/pool/ausctr-omni-austin-hotel-downtown-evening-pool.jpg?h=660&la=en&w=1170',
            'amenities' => json_encode(['Gym','Sauna','Archery'])
        ]);        
    }
}
