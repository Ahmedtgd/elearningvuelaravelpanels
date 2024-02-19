<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;
use App\Models\Classnumber;

class ClassnumberPolicy
{
     /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any ClassNumber');
    }
*/
  /*
    public function view(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('view ClassNumber');
    }


    public function create(User $user): bool
    {
        return $user->can('create ClassNumber');
    }


    public function update(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('update ClassNumber');
    }


    public function delete(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('delete ClassNumber');
    }

    public function restore(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('restore ClassNumber');
    }


    public function forceDelete(User $user, ClassNumber $classNumber): bool
    {
        return $user->can('force-delete ClassNumber');
    }
*/
}
