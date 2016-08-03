<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Observers\HotelModelObserver;

class Hotel extends Model
{
    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    protected static function boot() {
        parent::boot();
        static::observe(new HotelModelObserver());
    }

    public function scopeByUuid($query, $uuid) {
        return $query->where('uuid', $uuid);
    }

    public function rooms() {
        return $this->hasMany('App\Room');
    }
}
