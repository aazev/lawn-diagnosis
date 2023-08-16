<?php

namespace App\Facades;

use App\Models\Quote;

class QuoteFacade
{
    public function getRandom()
    {
        return Quote::getRandom();
    }
}
