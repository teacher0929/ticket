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

    public function routes(): HasMany
    {
        return $this->hasMany(Route::class);
    }

    public function getName()
    {
        $locale = app()->getLocale();
        if ($locale == 'ru') {
            return $this->name_ru ?: $this->name;
        } else {
            return $this->name;
        }
    }
}
