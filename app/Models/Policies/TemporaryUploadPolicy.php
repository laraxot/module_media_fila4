<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Modules\Media\Models\TemporaryUpload;
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

class TemporaryUploadPolicy extends MediaBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.viewAny');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.view');
=======
    public function view(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function view(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.view');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.create');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.update');
=======
    public function update(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function update(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.update');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.delete');
=======
    public function delete(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function delete(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.delete');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.restore');
=======
    public function restore(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function restore(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.restore');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.forceDelete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.forceDelete');
=======
    public function forceDelete(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
=======
    public function forceDelete(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.forceDelete');
>>>>>>> 37a2da6 (.)
>>>>>>> laraxot/develop
    }
}
