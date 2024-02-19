<?php

namespace App\Policies;
use Illuminate\Auth\Access\Response;
use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    /**
     * Create a new policy instance.
     */
/*
        public function viewAny(User $user): bool
        {
            return $user->can('view-any Book');
        }
*/
    /*
        public function view(User $user, Book $book): bool
        {
            return $user->can('view Book');
        }


        public function create(User $user): bool
        {
            return $user->can('create Book');
        }


        public function update(User $user, Book $book): bool
        {
            return $user->can('update Book');
        }

        public function delete(User $user, Book $book): bool
        {
            return $user->can('delete Book');
        }


        public function restore(User $user, Book $book): bool
        {
            return $user->can('restore Book');
        }

        public function forceDelete(User $user, Book $book): bool
        {
            return $user->can('force-delete Book');
        }

        */
    }

