<?php

namespace App\Policies;

use App\Models\User;

use Illuminate\Auth\Access\Response;

use App\Models\Freelearner;


class FreelearnerPolicy
{
    /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Freelearner');
    }
*/
   /*
    public function view(User $user, Freelearner $freelearner): bool
    {
        return $user->can('view Freelearner');
    }


    public function create(User $user): bool
    {
        return $user->can('create Freelearner');
    }


    public function update(User $user, Freelearner $freelearner): bool
    {
        return $user->can('update Freelearner');
    }


    public function delete(User $user, Freelearner $freelearner): bool
    {
        return $user->can('delete Freelearner');
    }

    public function restore(User $user, Freelearner $freelearner): bool
    {
        return $user->can('restore Freelearner');
    }


    public function forceDelete(User $user, Freelearner $freelearner): bool
    {
        return $user->can('force-delete Freelearner');
    }
    */
}
