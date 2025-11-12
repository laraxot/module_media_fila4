<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
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
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
use Modules\Media\Models\Media;
use Modules\Media\Models\MediaCollection;
use Modules\Media\Tests\TestCase;

/*
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | The closure you provide to your test functions is always bound to a specific PHPUnit test
 * | case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
 * | need to change it using the "pest()" function to bind a different classes or traits.
 * |
 */

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | When you're writing tests, you often need to check that values meet certain conditions. The
 * | "expect()" function gives you access to a set of "expectations" methods that you can use
 * | to assert different things. Of course, you may extend the Expectation API at any time.
 * |
 */

expect()->extend('toBeMedia', fn () => $this->toBeInstanceOf(Media::class));

expect()->extend('toBeMediaCollection', fn () => $this->toBeInstanceOf(MediaCollection::class));

/*
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | While Pest is very powerful out-of-the-box, you may have some testing code specific to your
 * | project that you don't want to repeat in every file. Here you can also expose helpers as
 * | global functions to help you to reduce the number of lines of code in your test files.
 * |
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
=======
=======
namespace Modules\Media\Tests;

=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
use Modules\Media\Models\Media;
use Modules\Media\Models\MediaCollection;
use Modules\Media\Tests\TestCase;

/*
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | The closure you provide to your test functions is always bound to a specific PHPUnit test
 * | case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
 * | need to change it using the "pest()" function to bind a different classes or traits.
 * |
 */

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | When you're writing tests, you often need to check that values meet certain conditions. The
 * | "expect()" function gives you access to a set of "expectations" methods that you can use
 * | to assert different things. Of course, you may extend the Expectation API at any time.
 * |
 */

expect()->extend('toBeMedia', fn () => $this->toBeInstanceOf(Media::class));

expect()->extend('toBeMediaCollection', fn () => $this->toBeInstanceOf(MediaCollection::class));

/*
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Media\Tests\TestCase;
=======
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
namespace Modules\Media\Tests;

use Modules\Media\Models\Media;
use Modules\Media\Models\MediaCollection;
<<<<<<< HEAD
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "pest()" function to bind a different classes or traits.
|
*/

pest()->extend(TestCase::class)
    ->in('Feature', 'Unit');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeMedia', function () {
<<<<<<< HEAD
<<<<<<< HEAD
    return $this->toBeInstanceOf(\Modules\Media\Models\Media::class);
});

expect()->extend('toBeMediaCollection', function () {
    return $this->toBeInstanceOf(\Modules\Media\Models\MediaCollection::class);
});

/*
>>>>>>> origin/develop
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 5200b63 (.)
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | While Pest is very powerful out-of-the-box, you may have some testing code specific to your
 * | project that you don't want to repeat in every file. Here you can also expose helpers as
 * | global functions to help you to reduce the number of lines of code in your test files.
 * |
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
namespace Modules\Media\Tests;

use Modules\Media\Models\Media;
use Modules\Media\Models\MediaCollection;
=======
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
=======
=======
namespace Modules\Media\Tests;

=======
>>>>>>> b93ef594b4 (.)
use Modules\Media\Models\Media;
use Modules\Media\Models\MediaCollection;
use Modules\Media\Tests\TestCase;

/*
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | The closure you provide to your test functions is always bound to a specific PHPUnit test
 * | case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
 * | need to change it using the "pest()" function to bind a different classes or traits.
 * |
 */

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | When you're writing tests, you often need to check that values meet certain conditions. The
 * | "expect()" function gives you access to a set of "expectations" methods that you can use
 * | to assert different things. Of course, you may extend the Expectation API at any time.
 * |
 */

expect()->extend('toBeMedia', fn() => $this->toBeInstanceOf(Media::class));

expect()->extend('toBeMediaCollection', fn() => $this->toBeInstanceOf(MediaCollection::class));

/*
<<<<<<< HEAD
=======
use Modules\Media\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "pest()" function to bind a different classes or traits.
|
*/

pest()->extend(TestCase::class)
    ->in('Feature', 'Unit');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeMedia', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
    return $this->toBeInstanceOf(Media::class);
});

expect()->extend('toBeMediaCollection', function () {
    return $this->toBeInstanceOf(MediaCollection::class);
});

/*
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
    return $this->toBeInstanceOf(\Modules\Media\Models\Media::class);
});

expect()->extend('toBeMediaCollection', function () {
    return $this->toBeInstanceOf(\Modules\Media\Models\MediaCollection::class);
});

/*
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> b8fda23 (.)
>>>>>>> a12f125f4a (.)
=======
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | While Pest is very powerful out-of-the-box, you may have some testing code specific to your
 * | project that you don't want to repeat in every file. Here you can also expose helpers as
 * | global functions to help you to reduce the number of lines of code in your test files.
 * |
 */
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)

function createMedia(array $attributes = []): Media
{
    return Media::factory()->create($attributes);
}

function makeMedia(array $attributes = []): Media
{
    return Media::factory()->make($attributes);
}

function createMediaCollection(array $attributes = []): MediaCollection
{
    return MediaCollection::factory()->create($attributes);
}

function makeMediaCollection(array $attributes = []): MediaCollection
{
    return MediaCollection::factory()->make($attributes);
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
=======

function createMedia(array $attributes = []): \Modules\Media\Models\Media
{
    return \Modules\Media\Models\Media::factory()->create($attributes);
}

function makeMedia(array $attributes = []): \Modules\Media\Models\Media
{
    return \Modules\Media\Models\Media::factory()->make($attributes);
}

function createMediaCollection(array $attributes = []): \Modules\Media\Models\MediaCollection
{
    return \Modules\Media\Models\MediaCollection::factory()->create($attributes);
}

function makeMediaCollection(array $attributes = []): \Modules\Media\Models\MediaCollection
{
    return \Modules\Media\Models\MediaCollection::factory()->make($attributes);
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> b8fda23 (.)
}
