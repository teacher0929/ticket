<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransportSeat extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class);
    }

    public function seatClass(): BelongsTo
    {
        return $this->belongsTo(SeatClass::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
