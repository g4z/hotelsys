<?php

use Illuminate\Database\Seeder;
use App\Hotel;
use App\Room;

class CreateRoomData extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $images = [
            'https://www.marinabaysands.com/content/dam/singapore/marinabaysands/master/main/home/hotel/deluxe1500x930.jpg',
            'https://texasstation.sclv.com/~/media/Images/Page-Background-Images/Texas/TS_Hotel_King_lowrez.jpg?h=630&la=en&w=1080',
            'http://www.hotel-r.net/im/hotel/es/hotel-room-12.jpg',
            'http://www.hotel-icon.com/~/media/Images/Hotel_ICON_revamp/rooms/Above%20and%20Beyond/club-38-harbour_1.ashx',
            'http://www.hotel-r.net/im/hotel/es/hotel-room.jpg',
            'https://blog.laterooms.com/wp-content/uploads/2011/10/LuxuryUpgrade.jpg',
            'http://www.hotel-r.net/im/hotel/es/hotel-room-10.jpg',
            'https://palacestation.sclv.com/~/media/Images/Page-Background-Images/Palace/Hotel/PS_Hotel_KingRoom_new.jpg?h=630&la=en&w=1080',
            'http://dannykennedyfitness.com/wp-content/uploads/2016/04/KingRoom.jpg',
            'http://socialnewsdaily.com/wp-content/uploads/2016/06/Hotel-room-renaissance-columbus-ohio.jpg',
        ];

        $hotel_ids = Hotel::all()->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            
            $hotel_id = $hotel_ids->random();
            $name = 'Room ' . ($i + 1);
            $image = $images[$i];
            Room::create([
                'hotel_id' => $hotel_id,
                'name' => $name,
                'image' => $image,
                'price' => (float) '' . rand(20, 300) . '.' . rand(0, 99),
                'availability' => 'xxx'
            ]);

        }
    }
}
