<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Modules\Media\Models\Media;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)

class MediaPolicy extends MediaBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> 5200b63 (.)
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
=======
    public function view(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> 5200b63 (.)
=======
    public function view(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> 5200b63 (.)
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
=======
    public function update(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> 5200b63 (.)
=======
    public function update(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
=======
    public function delete(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> 5200b63 (.)
=======
    public function delete(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
=======
    public function restore(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> 5200b63 (.)
=======
    public function restore(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
    public function forceDelete(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function forceDelete(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.forceDelete');
>>>>>>> 37a2da6 (.)
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
