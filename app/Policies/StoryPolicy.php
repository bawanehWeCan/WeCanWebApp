<?php
/** dev:
    *Stephen Isaac:  ofuzak@gmail.com.
    *Skype: ofuzak
 */

namespace App\Policies;

use App\Models\Story;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StoryPolicy
{
    use HandlesAuthorization;
	
	public function before(User $user)
	{
		if ($user->isAdmin()) {
			return true;
		}
	}
	
	 /**
     * Determine whether the user can view the DocStory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Story  $story
     * @return mixed
     */
    public function viewAny(User $user, Story $story)
    {
        return $user->hasPermission('viewany.story');
    }

    /**
     * Determine whether the user can view the DocStory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Story  $story
     * @return mixed
     */
    public function view(User $user, Story $story)
    {
		return $user->hasPermission('view.story');
    }

    /**
     * Determine whether the user can create DocDummyPluralModel.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
		return $user->hasPermission('create.story');
    }

    /**
     * Determine whether the user can update the DocStory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Story  $story
     * @return mixed
     */
    public function update(User $user, Story $story)
    {
        return $user->hasPermission('update.story') || $user->id == ($story->user_id??null);
    }

    /**
     * Determine whether the user can delete the DocStory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Story  $story
     * @return mixed
     */
    public function delete(User $user, Story $story)
    {
        return  $user->hasPermission('delete.story')||$user->id == ($story->user_id??null);
    }

    /**
     * Determine whether the user can restore the DocStory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Story  $story
     * @return mixed
     */
    public function restore(User $user, Story $story)
    {
         return $user->hasPermission('restore.story') || $user->id == ($story->user_id??null);
    }

    /**
     * Determine whether the user can permanently delete the DocStory.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Story  $story
     * @return mixed
     */
    public function forceDelete(User $user, Story $story)
    {
        return $user->hasPermission('forcedelete.story') || $user->id == ($story->user_id??null);		
    }
}