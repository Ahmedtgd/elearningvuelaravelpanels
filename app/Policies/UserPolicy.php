<?php
namespace App\Policies;

// app/Policies/UserPolicy.php
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{

    use HandlesAuthorization;


/*

    public function create(User $user)
    {


         if ($user->hasPermissionTo('create User')){
            return true;
        }
        return false;
    }


    public function update (User $user)
    {

         if ($user->hasPermissionTo('update User')){
            return true;
        }
        return false;
    }



    public function view(User $user)
    {

         if ($user->hasPermissionTo('view User')){
            return true;
        }
        return false;
    }



    public function delete(User $user)
    {

        if ($user->hasPermissionTo('delete User')){
            return true;
        }
        return false;
    }
    */

   }









