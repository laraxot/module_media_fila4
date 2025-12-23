<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Modules\Media\Models\Media;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop

class MediaPolicy extends MediaBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
=======
    public function view(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
=======
    public function update(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
=======
    public function delete(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
=======
    public function restore(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.forceDelete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
    }
}
