<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Issue extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'issue-facade';
    }
}
