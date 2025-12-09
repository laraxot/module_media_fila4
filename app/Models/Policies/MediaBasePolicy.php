<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0a466ed (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 37a2da6 (.)
use Modules\Xot\Datas\XotData;

abstract class MediaBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function before(UserContract $user, string $_ability): ?bool
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
    public function before(UserContract $user, string $_ability): null|bool
>>>>>>> 5200b63 (.)
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
<<<<<<< HEAD
=======
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
            return true;
        }

        return null;
    }
}
