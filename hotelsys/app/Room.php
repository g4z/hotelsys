<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Observers\RoomModelObserver;

class Room extends Model
{
    protected $hidden = [
        'id', 'hotel_id', 'created_at', 'updated_at'
    ];

    protected static function boot() {
        parent::boot();
        static::observe(new RoomModelObserver());
    }

    public function scopeByUuid($query, $uuid) {
        return $query->where('uuid', $uuid);
    }

    public function getPriceAttribute($value) {
        return number_format($value, 2);
    }

    public function hotel() {
        return $this->belongsTo('App\Hotel');
    }

}
