<?php

namespace App\Http\Controllers;

use Response;
use App\Room;
use App\Hotel;
use Validator;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function listRooms(Request $request) {

        $validator = Validator::make($request->input(), [
            'uuid' => 'required|exists:hotels|min:36|max:36',
        ]);
        
        if ($validator->fails()) {
            return Response::json([
                'status' => false,
                'errors' => $validator->errors()->all()
            ], 422);
        }

        try {

            $uuid = $request->input('uuid');

            $rooms = Hotel::byUuid($uuid)->first()->rooms()->get();
        
        } catch (Exception $e) {
            return Response::json([
                'status' => false,
                'errors' => [$e->getMessage()],
            ], 500);
        }

        return Response::json([
            'status' => true,
            'rooms' => $rooms,
        ]);
    }
}
