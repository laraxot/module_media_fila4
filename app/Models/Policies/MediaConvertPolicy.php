<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Modules\Media\Models\MediaConvert;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)

class MediaConvertPolicy extends MediaBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> 37a2da6 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
=======
    public function view(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> 37a2da6 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> 37a2da6 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
=======
    public function update(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> 37a2da6 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
=======
    public function delete(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> 37a2da6 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
=======
    public function restore(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> 37a2da6 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
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
