<?php

namespace App\Policies;

use App\Models\User;


use Illuminate\Auth\Access\Response;

use App\Models\Quizform;

class QuizformPolicy
{
     /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Quizform');
    }
*/
  /*
    public function view(User $user, Quizform $quizform): bool
    {
        return $user->can('view Quizform');
    }


    public function create(User $user): bool
    {
        return $user->can('create Quizform');
    }


    public function update(User $user, Quizform $quizform): bool
    {
        return $user->can('update Quizform');
    }


    public function delete(User $user, Quizform $quizform): bool
    {
        return $user->can('delete Quizform');
    }

    public function restore(User $user, Quizform $quizform): bool
    {
        return $user->can('restore Quizform');
    }


    public function forceDelete(User $user, Quizform $quizform): bool
    {
        return $user->can('force-delete Quizform');
    }
    */
}
