
hotels

$table->string('name')
$table->string('image')
$table->text('amenities')


$table->integer('hotel_id')
$table->string('name')
$table->string('image')
$table->float('price')
$table->boolean('available')

; reservations
$table->room_id('room_id')
$table->string('name')
$table->string('email')
$table->string('card_name')
$table->string('card_number', 24)
$table->string('card_expiry', 5)
$table->integer('number_beds')
$table->string('cost')


