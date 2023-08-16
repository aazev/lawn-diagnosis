<?php

namespace App\Facades;

use App\Models\Parameter;

class ParameterFacade
{
    public function getCount()
    {
        return Parameter::getCount();
    }
}
