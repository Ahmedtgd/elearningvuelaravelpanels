<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Educationalstage;

class EducationalstagePolicy
{
      /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Educationalstage');
    }
*/
    /*
    public function view(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('view Educationalstage');
    }


    public function create(User $user): bool
    {
        return $user->can('create Educationalstage');
    }


    public function update(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('update Educationalstage');
    }


    public function delete(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('delete Educationalstage');
    }

    public function restore(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('restore Educationalstage');
    }


    public function forceDelete(User $user, Educationalstage $educationalstage): bool
    {
        return $user->can('force-delete Educationalstage');
    }
    */
}
