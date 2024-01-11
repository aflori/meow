<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Meow;

class ViewMeowPolicies
{
    public function seeMeows(User $user, Meow $meow)
    {
        return $user->id === $meow->user_id;
    }
}
