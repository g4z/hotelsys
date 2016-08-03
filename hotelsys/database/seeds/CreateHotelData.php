<?php

use Illuminate\Database\Seeder;

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
        Hotel::create([
            'name' => 'Hotel A', 
            'image' => 'http://www.ilgiornale.it/sites/default/files/foto/2015/06/25/1435243544-hotel-03.jpg',
            'amenities' => json_encode([
                'swimming_pool' => true,
                'gym' => true,
                'sauna' => false,
            ])
        ]);

        Hotel::create([
            'name' => 'Hotel B', 
            'image' => 'http://www.college-hotel.com/client/cache/contenu/_500____college-hotelp1diapo1_718.jpg',
            'amenities' => json_encode([
                'swimming_pool' => false,
                'gym' => true,
                'sauna' => true,
            ])
        ]);

        Hotel::create([
            'name' => 'Hotel C', 
            'image' => 'https://www.omnihotels.com/-/media/images/hotels/ausctr/pool/ausctr-omni-austin-hotel-downtown-evening-pool.jpg?h=660&la=en&w=1170',
            'amenities' => json_encode([
                'swimming_pool' => true,
                'gym' => false,
                'gokarting' => true,
            ])
        ]);        
    }
}
