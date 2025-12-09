<?php

declare(strict_types=1);

namespace Modules\Media\Tests;

<<<<<<< HEAD
use Illuminate\Foundation\Application;
<<<<<<< HEAD
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Media\Providers\MediaServiceProvider;
=======
use Modules\Media\Providers\MediaServiceProvider;
=======
use Modules\Media\Providers\MediaServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> 0a466ed (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD

=======
        
>>>>>>> 0a466ed (.)
        // Seed any required data for Media tests
        $this->artisan('module:seed', ['module' => 'Media']);
    }

    /**
     * Get package providers.
     *
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
<<<<<<< HEAD
     * @param Application $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
     * @param Application $app
>>>>>>> f1c6d6e (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            MediaServiceProvider::class,
        ];
    }
}
