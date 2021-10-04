<?php

namespace App\Policies;

use App\User;
use App\Vacante;
use Illuminate\Auth\Access\HandlesAuthorization;

class VacantePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Vacante $vacante, User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vacante  $vacante
     * @return mixed
     */
    public function view(User $user, Vacante $vacante)
    {
        return $user->id === $vacante->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vacante  $vacante
     * @return mixed
     */
    public function update(User $user, Vacante $vacante)
    {
        return $user->id === $vacante->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vacante  $vacante
     * @return mixed
     */
    public function delete(User $user, Vacante $vacante)
    {
        return $user->id === $vacante->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vacante  $vacante
     * @return mixed
     */
    public function restore(User $user, Vacante $vacante)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vacante  $vacante
     * @return mixed
     */
    public function forceDelete(User $user, Vacante $vacante)
    {
        //
    }
}
