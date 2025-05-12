<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StationType extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function stations(): HasMany
    {
        return $this->hasMany(Station::class);
    }

    public function transports(): HasMany
    {
        return $this->hasMany(Transport::class);
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
