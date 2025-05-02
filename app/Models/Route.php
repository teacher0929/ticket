<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'departure_time' => 'datetime',
            'arrival_time' => 'datetime',
        ];
    }

    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class);
    }

    public function fromStation(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'from_station_id');
    }

    public function toStation(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'to_station_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
