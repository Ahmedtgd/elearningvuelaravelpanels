<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Course;

class CoursePolicy
{
     /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Course');
    }
*/
    /*
    public function view(User $user, Course $course): bool
    {
        return $user->can('view Course');
    }

    public function create(User $user): bool
    {
        return $user->can('create Course');
    }


    public function update(User $user, Course $course): bool
    {
        return $user->can('update Course');
    }


    public function delete(User $user, Course $course): bool
    {
        return $user->can('delete Course');
    }

    public function restore(User $user, Course $course): bool
    {
        return $user->can('restore Course');
    }

    public function forceDelete(User $user, Course $course): bool
    {
        return $user->can('force-delete Course');
    }

    */
}
