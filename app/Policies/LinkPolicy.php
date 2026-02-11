<?php

namespace App\Policies;

use App\Models\Links;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Links $links): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Links $links)
    {
        $pivote = $links->sharedUsers()->where('user_id', $user->id)->first();

        dd([
            'user_id' => $user->id,
            'link_id' => $links->id,
            'pivot' => $pivote ? $pivote->pivot : null
        ]);

        return ($pivote && $pivote->pivot->permission === 'editor')
            ? Response::allow()
            : Response::deny("Vous n'avez pas acces pour modifier ce lien");
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Links $links)
    {
        $pivote = $links->sharedUsers()->where('user_id' , $user->id)->first();
        return ($pivote && $pivote->pivot->permission === 'editor') ? Response::allow() : Response::deny(`Vous n'avez pas acces pour supprimer ce lien`);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Links $links): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Links $links): bool
    {
        return false;
    }
}
