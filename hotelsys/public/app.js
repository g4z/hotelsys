
// Just display the first error
function oops(errstr) {
    $('body').empty();
    $('body').html('Ooops. Gareth broke something. The error was: ' + errstr);
}

function fetchHotelList() {

    $.ajax('/api/v1/hotels', {
        
        success: function (data, status, jqXHR) {

            if (!data.status) {
                oops(data.errors[0]);
                return;
            }

            $('body').empty();

            $.each(data.hotels, function(index, hotel) {
                
                var title  = $('<h3/>').text(hotel.name);
                
                var image  = $('<img/>').attr('src', hotel.image)
                                        .attr('width', '200px');
                
                var amenities = $('<ul/>');

                $.each(JSON.parse(hotel.amenities), function(key, val) {
                    if (val) {
                        var amenity = $('<li/>').text(key);
                        amenities.append(amenity);
                    }
                });

                var details = $('<button/>')
                    .attr('onClick', 'javascript:fetchRoomList("' + hotel.uuid +'")')
                    .text('Details');

                var block = $('<div>')
                                .append($('<hr/>'))
                                .append(title)
                                .append(amenities)
                                .append(image)
                                .append($('<br/>'))
                                .append(details);

                $('body').append(block);
                
            });
        },
        error: function (jqXHR, status, errstr) {
            oops(errstr);
        }
    });
}

function fetchRoomList(hotel_uuid) {

    $.ajax('/api/v1/rooms', {
        method: 'POST',
        data: { uuid: hotel_uuid },
        success: function (data, status, jqXHR) {

            if (!data.status) {
                oops(data.errors[0]);
                return;
            }

            $('body').empty();

            $.each(data.rooms, function(index, room) {
                
                var title  = $('<h3/>').text(room.hotel.name + ' - ' + room.name);
                
                var image  = $('<img/>').attr('src', room.image)
                                        .attr('width', '200px');

                var price  = $('<h3/>').text('Price per night: €' + room.price);

                var book = $('<button/>')
                    .attr('onClick', 'javascript:bookRoom("' + room.uuid +'")')
                    .text('Book');

                var block = $('<div>')
                                .append($('<hr/>'))
                                .append(title)
                                .append(image)
                                .append(price)
                                .append(book);

                $('body').append(block);

           });

            var back = $('<button/>').attr('onClick', 'javascript:fetchHotelList()')
                            .text('<- Go back');

            $('body').append('<br/><br/>').append(back)

        },
        error: function (jqXHR, status, errstr) {
            oops(errstr);
        }
    });
}

$(document).ready(function() {

    // console.log("hello");
    fetchHotelList();

});
