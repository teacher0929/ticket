<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transport extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function stationType(): BelongsTo
    {
        return $this->belongsTo(StationType::class);
    }

    public function transportType(): BelongsTo
    {
        return $this->belongsTo(TransportType::class);
    }

    public function routes(): HasMany
    {
        return $this->hasMany(Route::class);
    }

    public function getName()
    {
        return $this->name;
    }
}
