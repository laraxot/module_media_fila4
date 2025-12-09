<?php

declare(strict_types=1);

namespace Modules\Media\Tests;

use Illuminate\Foundation\Application;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Media\Providers\MediaServiceProvider;
=======
use Modules\Media\Providers\MediaServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
>>>>>>> 5200b63 (.)
=======
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Media\Providers\MediaServiceProvider;
>>>>>>> 1634e53 (.)
use Modules\Xot\Tests\CreatesApplication;

/**
 * Base test case for Media module tests.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Media module specific configurations
        $this->loadLaravelMigrations();

        // Seed any required data for Media tests
        $this->artisan('module:seed', ['module' => 'Media']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Application  $app
=======
     * @param Application $app
>>>>>>> 5200b63 (.)
=======
     * @param Application $app
=======
     * @param Application $app
>>>>>>> 1d21a10 (.)
=======
     * @param Application $app
>>>>>>> b8fda23 (.)
=======
<<<<<<< HEAD
     * @param Application $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
=======
     * @param Application $app
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 1d21a10 (.)
=======
     * @param Application $app
>>>>>>> 146bbc3 (.)
=======
>>>>>>> b8fda23 (.)
=======
     * @param Application $app
>>>>>>> f5f7069 (.)
=======
     * @param  Application  $app
>>>>>>> 1634e53 (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            MediaServiceProvider::class,
        ];
    }
}
