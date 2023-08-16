<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    public static function getRandom(): ?self
    {
        return self::inRandomOrder()->first();
    }

    public static function getCount(): int
    {
        return self::count();
    }
}
