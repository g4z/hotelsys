<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('hotels');
});

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('hotels', ['uses' => 'HotelController@listHotels']);
    Route::post('rooms', ['uses' => 'RoomController@listRooms']);
    Route::post('book', ['uses' => 'ReservationController@makeReservation']);
});
