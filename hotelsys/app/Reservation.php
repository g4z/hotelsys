<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Observers\ReservationModelObserver;

class Reservation extends Model
{
    protected $hidden = [
        'id', 'created_at', 'updated_at', 'card_number', 'card_expiry'
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

}
