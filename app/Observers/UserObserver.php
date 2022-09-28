<?php

namespace App\Observers;

use App\Models\Profile;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function created(User $user)
    {
        $profile = Profile::create([
            'user_id' => $user->id
        ]);
    }
}
