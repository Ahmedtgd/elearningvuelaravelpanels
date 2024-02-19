<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Lesson;

class LessonPolicy
{
     /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Lesson');
    }
*/
   /*
    public function view(User $user, Lesson $lesson): bool
    {
        return $user->can('view Lesson');
    }


    public function create(User $user): bool
    {
        return $user->can('create Lesson');
    }


    public function update(User $user, Lesson $lesson): bool
    {
        return $user->can('update Lesson');
    }

    public function delete(User $user, Lesson $lesson): bool
    {
        return $user->can('delete Lesson');
    }


    public function restore(User $user, Lesson $lesson): bool
    {
        return $user->can('restore Lesson');
    }


    public function forceDelete(User $user, Lesson $lesson): bool
    {
        return $user->can('force-delete Lesson');
    }
    */
}
