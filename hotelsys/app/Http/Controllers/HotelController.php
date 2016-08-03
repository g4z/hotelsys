<?php

namespace App\Http\Controllers;

use Response;
use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function listHotels(Request $request) {
        
        try {

            $hotels = Hotel::all();

        } catch (Exception $e) {
            return Response::json([
                'status' => false,
                'errors' => [$e->getMessage()],
            ], 500);
        }

        return Response::json([
            'status' => true,
            'hotels' => $hotels,
        ]);

    }
}
