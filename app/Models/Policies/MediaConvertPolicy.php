<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Modules\Media\Models\MediaConvert;
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

class MediaConvertPolicy extends MediaBasePolicy
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
        return $user->hasPermissionTo('media_convert.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> 5200b63 (.)
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
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
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
=======
    public function view(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> 5200b63 (.)
=======
    public function view(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
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
        return $user->hasPermissionTo('media_convert.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> 5200b63 (.)
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
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
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
=======
    public function update(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> 5200b63 (.)
=======
    public function update(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
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
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
=======
    public function delete(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> 5200b63 (.)
=======
    public function delete(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
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
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
=======
    public function restore(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> 5200b63 (.)
=======
    public function restore(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
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
    public function forceDelete(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.forceDelete');
=======
    public function forceDelete(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.forceDelete');
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
    public function forceDelete(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.forceDelete');
=======
    public function forceDelete(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function forceDelete(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.forceDelete');
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
