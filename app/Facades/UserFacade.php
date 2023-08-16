<?php

namespace App\Facades;

use App\Models\User;

class UserFacade
{
    public function getCount()
    {
        return User::getCount();
    }
}
