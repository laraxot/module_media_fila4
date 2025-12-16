<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Modules\Media\Models\MediaConvert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> f1c6d6e (.)
=======
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 146bbc3 (.)
=======
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> f5f7069 (.)
=======
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> fa051fc (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 22b1256 (.)
=======
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37b6a94 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> e5c049f (.)

class MediaConvertPolicy extends MediaBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 10ef3f7 (.)
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> fa051fc (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> 37b6a94 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.viewAny');
>>>>>>> e5c049f (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 10ef3f7 (.)
    public function view(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> fa051fc (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> 37b6a94 (.)
=======
    public function view(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.view');
>>>>>>> e5c049f (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 10ef3f7 (.)
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> fa051fc (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> 37b6a94 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media_convert.create');
>>>>>>> e5c049f (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 10ef3f7 (.)
    public function update(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> fa051fc (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> 37b6a94 (.)
=======
    public function update(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.update');
>>>>>>> e5c049f (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 10ef3f7 (.)
    public function delete(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> fa051fc (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> 37b6a94 (.)
=======
    public function delete(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.delete');
>>>>>>> e5c049f (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 10ef3f7 (.)
    public function restore(ProfileContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> fa051fc (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> 37b6a94 (.)
=======
    public function restore(UserContract $user, MediaConvert $_media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.restore');
>>>>>>> e5c049f (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
    public function forceDelete(UserContract $user, MediaConvert $media_convert): bool
    {
        return $user->hasPermissionTo('media_convert.forceDelete');
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
