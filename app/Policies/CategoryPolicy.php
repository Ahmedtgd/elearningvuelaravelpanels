<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Category;
use App\Models\User;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
   /*
     public function viewAny(User $user): bool
    {
        return $user->can('view-any Category');
    }
*/
    /*
    public function view(User $user, Category $category): bool
    {
        return $user->can('view Category');
    }

    public function create(User $user): bool
    {
        return $user->can('create Category');
    }


    public function update(User $user, Category $category): bool
    {
        return $user->can('update Category');
    }


    public function delete(User $user, Category $category): bool
    {
        return $user->can('delete Category');
    }


    public function restore(User $user, Category $category): bool
    {
        return $user->can('restore Category');
    }

    public function forceDelete(User $user, Category $category): bool
    {
        return $user->can('force-delete Category');
    }
    */
}
