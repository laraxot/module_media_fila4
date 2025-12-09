<?php

declare(strict_types=1);

namespace Modules\Media\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function configureEmailVerification(): void {}
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
    protected function configureEmailVerification(): void
    {
    }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
    protected function configureEmailVerification(): void
    {
    }
=======
    protected function configureEmailVerification(): void {}
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 47a54fe (.)
=======
    protected function configureEmailVerification(): void
    {
    }
<<<<<<< HEAD
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> a80d398 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    protected function configureEmailVerification(): void {}
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> f1c6d6e (.)
=======
    protected function configureEmailVerification(): void {}
>>>>>>> f41e45e (.)
}
