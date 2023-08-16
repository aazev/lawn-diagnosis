<?php

namespace App\Models;

use App\Values\ParameterValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Parameter extends Model
{
    use HasFactory;

    // this doesn't seem to work after adding parameters to the values json.
    protected $casts = [
        'possible_values' => ParameterValue::class,
        'allow_multiple' => 'boolean'
    ];

    public function issues(): BelongsToMany
    {
        return $this->belongsToMany(Issue::class)->withTimestamps();
    }

    public static function getCount(): int
    {
        return self::count();
    }
}
