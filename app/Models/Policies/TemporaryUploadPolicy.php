<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Modules\Media\Models\TemporaryUpload;
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
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.viewAny');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
    public function view(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.view');
=======
    public function view(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.view');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('temporary_upload.create');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
    public function update(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.update');
=======
    public function update(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.update');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
    public function delete(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.delete');
=======
    public function delete(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.delete');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
    public function restore(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.restore');
=======
    public function restore(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, TemporaryUpload $_temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.restore');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.forceDelete');
=======
    public function forceDelete(ProfileContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> e9b0959 (.)
    public function forceDelete(UserContract $user, TemporaryUpload $temporary_upload): bool
    {
        return $user->hasPermissionTo('temporary_upload.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
