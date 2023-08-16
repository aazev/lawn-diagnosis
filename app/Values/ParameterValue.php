<?php

namespace App\Values;

use App\Casts\ParameterValueCast;
use Illuminate\Contracts\Database\Eloquent\Castable;

class ParameterValue implements Castable
{
    public $value;
    public $score;
    public $recommendation;
    public $allow_multiple;

    public static function castUsing(array $arguments)
    {
        return ParameterValueCast::class;
    }
}
