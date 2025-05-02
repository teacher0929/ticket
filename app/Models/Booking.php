<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function route(): BelongsTo
    {
        return $this->belongsTo(Route::class);
    }

    public function transportSeat(): BelongsTo
    {
        return $this->belongsTo(TransportSeat::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
