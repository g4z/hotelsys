<?php

namespace App;

use Crypt;
use Illuminate\Database\Eloquent\Model;
use App\Observers\ReservationModelObserver;

class Reservation extends Model
{
    protected $hidden = [
        'id', 'created_at', 'updated_at', 'room_id', 'card_number', 'card_expiry'
    ];
    
    protected static function boot() {
        parent::boot();
        static::observe(new ReservationModelObserver());
    }

    public function scopeByUuid($query, $uuid) {
        return $query->where('uuid', $uuid);
    }

    public function room() {
        return $this->belongsTo('App\Room');
    }

    public function getCostAttribute($value) {
        return number_format($value, 2);
    }

    public function getDecryptedCardNumber() {
        return Crypt::decrypt($this->card_number);   
    }

    public function getDecryptedCardExpiry() {
        return Crypt::decrypt($this->card_expiry);   
    }
}
