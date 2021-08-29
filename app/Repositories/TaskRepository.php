<?php

namespace App\Repositories;


use App\User;
use App\Task;

class TaskRepository
{

    /**
    * Get al the task for a given user.
    *
    * @param User $user
    * @return Collection
    */

    Public function get_all_task_for_a_given_user(User $user)
    {
        return Task::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}


