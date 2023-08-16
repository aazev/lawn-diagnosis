<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Parameter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'parameter-facade';
    }
}
