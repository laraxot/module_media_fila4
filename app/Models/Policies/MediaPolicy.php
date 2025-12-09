<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Modules\Media\Models\Media;
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
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)

class MediaPolicy extends MediaBasePolicy
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
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
        return $user->hasPermissionTo('media.viewAny'); /** @phpstan-ignore method.nonObject */
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
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> fa051fc (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> 37b6a94 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> e5c049f (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.viewAny');
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
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
    public function view(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.view'); /** @phpstan-ignore method.nonObject */
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
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> fa051fc (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> 37b6a94 (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> e5c049f (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
    public function view(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.view');
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
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
        return $user->hasPermissionTo('media.create'); /** @phpstan-ignore method.nonObject */
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
        return $user->hasPermissionTo('media.create');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> fa051fc (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> 37b6a94 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> e5c049f (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('media.create');
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
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
    public function update(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.update'); /** @phpstan-ignore method.nonObject */
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
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> fa051fc (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> 37b6a94 (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> e5c049f (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
    public function update(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.update');
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
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
    public function delete(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.delete'); /** @phpstan-ignore method.nonObject */
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
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> fa051fc (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> 37b6a94 (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> e5c049f (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
    public function delete(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.delete');
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
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
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
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
    public function restore(ProfileContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.restore'); /** @phpstan-ignore method.nonObject */
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
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> fa051fc (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> 22b1256 (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> 37b6a94 (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> e5c049f (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
    public function restore(UserContract $user, Media $_media): bool
    {
        return $user->hasPermissionTo('media.restore');
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
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
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
    public function forceDelete(UserContract $user, Media $media): bool
    {
        return $user->hasPermissionTo('media.forceDelete');
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
=======
>>>>>>> a70c4fa (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> da2a819 (.)
