<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Issue extends Model
{
    use HasFactory;

    public function parameters(): BelongsToMany
    {
        return $this->belongsToMany(Parameter::class)->withTimestamps();
    }

    public static function getCount(): int
    {
        return self::count();
    }
}
