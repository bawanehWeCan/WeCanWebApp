<?php
/** dev:
    *Stephen Isaac:  ofuzak@gmail.com.
    *Skype: ofuzak
 */

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
	
	public function before(User $user)
	{
		if ($user->isAdmin()) {
			return true;
		}
	}
	
	 /**
     * Determine whether the user can view the DocPost.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function viewAny(User $user, Post $post)
    {
        return $user->hasPermission('viewany.post');
    }

    /**
     * Determine whether the user can view the DocPost.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function view(User $user, Post $post)
    {
		return $user->hasPermission('view.post');
    }

    /**
     * Determine whether the user can create DocDummyPluralModel.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
		return $user->hasPermission('create.post');
    }

    /**
     * Determine whether the user can update the DocPost.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
        return $user->hasPermission('update.post') || $user->id == ($post->user_id??null);
    }

    /**
     * Determine whether the user can delete the DocPost.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function delete(User $user, Post $post)
    {
        return  $user->hasPermission('delete.post')||$user->id == ($post->user_id??null);
    }

    /**
     * Determine whether the user can restore the DocPost.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function restore(User $user, Post $post)
    {
         return $user->hasPermission('restore.post') || $user->id == ($post->user_id??null);
    }

    /**
     * Determine whether the user can permanently delete the DocPost.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return mixed
     */
    public function forceDelete(User $user, Post $post)
    {
        return $user->hasPermission('forcedelete.post') || $user->id == ($post->user_id??null);		
    }
}