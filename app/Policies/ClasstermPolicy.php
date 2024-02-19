<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Classterm;

class ClasstermPolicy
{
      /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Classterm');
    }
*/
   /*
    public function view(User $user, Classterm $classterm): bool
    {
        return $user->can('view Classterm');
    }


    public function create(User $user): bool
    {
        return $user->can('create Classterm');
    }


    public function update(User $user, Classterm $classterm): bool
    {
        return $user->can('update Classterm');
    }


    public function delete(User $user, Classterm $classterm): bool
    {
        return $user->can('delete Classterm');
    }


    public function restore(User $user, Classterm $classterm): bool
    {
        return $user->can('restore Classterm');
    }


    public function forceDelete(User $user, Classterm $classterm): bool
    {
        return $user->can('force-delete Classterm');
    }
    */
}
