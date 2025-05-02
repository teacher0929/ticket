<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Station extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function stationType(): BelongsTo
    {
        return $this->belongsTo(StationType::class);
    }

    public function routesFrom(): HasMany
    {
        return $this->hasMany(Station::class, 'from_station_id');
    }

    public function routesTo(): HasMany
    {
        return $this->hasMany(Station::class, 'to_station_id');
    }
}
