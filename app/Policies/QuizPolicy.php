<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Quiz;

class QuizPolicy
{
   /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Quiz');
    }
*/
   /*
    public function view(User $user, Quiz $quiz): bool
    {
        return $user->can('view Quiz');
    }


    public function create(User $user): bool
    {
        return $user->can('create Quiz');
    }


    public function update(User $user, Quiz $quiz): bool
    {
        return $user->can('update Quiz');
    }


    public function delete(User $user, Quiz $quiz): bool
    {
        return $user->can('delete Quiz');
    }


    public function restore(User $user, Quiz $quiz): bool
    {
        return $user->can('restore Quiz');
    }

    public function forceDelete(User $user, Quiz $quiz): bool
    {
        return $user->can('force-delete Quiz');
    }
    */
}
