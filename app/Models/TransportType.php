<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransportType extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function transports(): HasMany
    {
        return $this->hasMany(Transport::class);
    }
}
