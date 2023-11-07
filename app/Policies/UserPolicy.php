<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email == 'xinterx1@gmail.com11';
    }

    public function edit(User $user, User $moddel): bool
    {
        return (bool) mt_rand(0,1);
    }

}
