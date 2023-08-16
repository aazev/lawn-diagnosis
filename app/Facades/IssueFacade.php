<?php

namespace App\Facades;

use App\Models\Issue;

class IssueFacade
{
    public function getCount()
    {
        return Issue::getCount();
    }
}
