<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SeatClass extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function transportSeats(): HasMany
    {
        return $this->hasMany(TransportSeat::class);
    }
}
