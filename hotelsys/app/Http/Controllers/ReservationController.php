<?php

namespace App\Http\Controllers;

use Response;
use App\Room;
use Validator;
use App\Hotel;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function makeReservation(Request $request) {

        $validator = Validator::make($request->input(), [
            'uuid' => 'required|exists:rooms|min:36|max:36',
            'name' => 'required',
            'email' => 'required|email',
            'card_number' => 'required|min:16|max:16',
            'card_expiry' => 'required|min:5|max:5',
            'number_beds' => 'required|integer|min:1|max:5',
            'number_nights' => 'required|integer|min:1|max:21',
        ]);
        
        if ($validator->fails()) {
            return Response::json([
                'status' => false,
                'errors' => $validator->errors()->all()
            ], 422);
        }

        $room_uuid = $request->input('uuid');
        $name = $request->input('name');
        $email = $request->input('email');
        $card_number = $request->input('card_number');
        $card_expiry = $request->input('card_expiry');
        $number_beds = $request->input('number_beds');
        $number_nights = $request->input('number_nights');

        try {

            $room = Room::byUuid($room_uuid)->with('Hotel')->first();

            $reservation = new Reservation();
            $reservation->name = $name;
            $reservation->email = $email;
            $reservation->card_number = $card_number;
            $reservation->card_expiry = $card_expiry;
            $reservation->number_nights = intval($number_nights);
            $reservation->number_beds = intval($number_beds);
            $reservation->cost = ($number_nights * $room->price);
            $reservation->save();
        
        } catch (Exception $e) {

            return Response::json([
                'status' => false,
                'errors' => [$e->getMessage()],
            ], 500);
        
        }

        return Response::json([
            'status' => true,
            'reservation' => $reservation->toArray()
        ]);

    }
}
