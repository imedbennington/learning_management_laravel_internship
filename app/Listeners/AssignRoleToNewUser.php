<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssignRoleToNewUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        // Ensure the 'student' role exists
        $role = 'student';

        // Assign the 'student' role to the newly registered user
        $event->user->assignRole($role);
    }
}
