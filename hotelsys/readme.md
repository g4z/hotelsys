
### React components

 * http://adphorus.github.io/react-date-range/

### Routes in Laravel project

```
+--------+----------+---------------------+------+-------------------------------------------------------------+------------+
| Domain | Method   | URI                 | Name | Action                                                      | Middleware |
+--------+----------+---------------------+------+-------------------------------------------------------------+------------+
|        | GET|HEAD | /                   |      | Closure                                                     | web        |
|        | POST     | api/v1/book         |      | App\Http\Controllers\ReservationController@makeReservation  | web        |
|        | GET|HEAD | api/v1/hotels       |      | App\Http\Controllers\HotelController@listHotels             | web        |
|        | GET|HEAD | api/v1/reservations |      | App\Http\Controllers\ReservationController@listReservations | web        |
|        | POST     | api/v1/rooms        |      | App\Http\Controllers\RoomController@listRooms               | web        |
|        | GET|HEAD | booking             |      | Closure                                                     | web        |
|        | GET|HEAD | test1               |      | Closure                                                     | web        |
|        | GET|HEAD | test2               |      | Closure                                                     | web        |
+--------+----------+---------------------+------+-------------------------------------------------------------+------------+

```

### Task Notes

```

In your preferred language write the following function:

1) Write a function that determines if a string starts with an
upper-case letter A-Z

2) Write a function that determines the area of a circle given the
radius

3) Add up all the values in an array

Then develop the following system:

- Develop a webservices using laravel (https://laravel.com/) that expose
the following apis:

1) hotel list (hotel name, hotel image, hotel amenities)

2) For each hotel, room list with availability and prices (room name,
room image, room price, room availability)

3) create a reservation. The reservation data should contains :

A) customer data
B) Credit card data
C) room name, number of beds, price


- Develop a web client written in angular.js that consume the APIs.
(https://angularjs.org/)


For all project use git as version control system. (https://github.com/)

Best regards,

Filippo.

```