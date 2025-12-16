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
    protected function configureEmailVerification(): void {}
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
    protected function configureEmailVerification(): void
    {
    }
=======
    protected function configureEmailVerification(): void {}
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
}
