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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
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
=======
>>>>>>> 37a2da6 (.)
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
=======
>>>>>>> 53e059b (.)
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

/** @phpstan-ignore-next-line method.internalClass */
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

expect()->extend('toBeMedia', function (): mixed {
    /** @phpstan-ignore-next-line variable.undefined */
    return $this->toBeInstanceOf(Media::class);
});

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
namespace Modules\Media\Tests;

use Modules\Media\Models\Media;
use Modules\Media\Models\MediaCollection;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 10ef3f7 (.)

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
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 10ef3f7 (.)
    return $this->toBeInstanceOf(Media::class);
});

expect()->extend('toBeMediaCollection', function () {
    return $this->toBeInstanceOf(MediaCollection::class);
});

/*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
    return $this->toBeInstanceOf(\Modules\Media\Models\Media::class);
});

expect()->extend('toBeMediaCollection', function () {
    return $this->toBeInstanceOf(\Modules\Media\Models\MediaCollection::class);
});

/*
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
>>>>>>> 37a2da6 (.)
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
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
>>>>>>> 37a2da6 (.)
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
=======
>>>>>>> 53e059b (.)

/**
 * @param array<string, mixed> $attributes
 */
function createMedia(array $attributes = []): Media
{
    $Media = Media::factory()->create($attributes);
    assert($Media instanceof Media);
    return $Media;
}

/**
 * @param array<string, mixed> $attributes
 */
function makeMedia(array $attributes = []): Media
{
    $Media = Media::factory()->make($attributes);
    assert($Media instanceof Media);
    return $Media;
}

/**
 * @param array<string, mixed> $attributes
 * @return MediaCollection
 * @phpstan-ignore-next-line class.notFound
 */
function createMediaCollection(array $attributes = []): MediaCollection
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<MediaCollection> $factory */
    /** @phpstan-ignore-next-line class.notFound */
    $factory = MediaCollection::factory();

    /** @var MediaCollection $mediaCollection */
    /** @phpstan-ignore-next-line class.notFound */
    $mediaCollection = $factory->create($attributes);

    return $mediaCollection;
}

/**
 * @param array<string, mixed> $attributes
 * @return MediaCollection
 * @phpstan-ignore-next-line class.notFound
 */
function makeMediaCollection(array $attributes = []): MediaCollection
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    return MediaCollection::factory()->make($attributes);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> f5f7069 (.)
=======
    $MediaCollection = MediaCollection::factory()->make($attributes);
    assert($MediaCollection instanceof MediaCollection);
    return $MediaCollection;
>>>>>>> 13d1d7e (.)
=======
=======
>>>>>>> 4ae6f9c (.)
=======
>>>>>>> c5a0539 (.)
=======
>>>>>>> 8e41d16 (.)
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<MediaCollection> $factory */
    /** @phpstan-ignore-next-line class.notFound */
    $factory = MediaCollection::factory();

    /** @var MediaCollection $mediaCollection */
    /** @phpstan-ignore-next-line class.notFound */
    $mediaCollection = $factory->make($attributes);

    return $mediaCollection;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b69c36d (.)
=======
    return MediaCollection::factory()->make($attributes);
>>>>>>> 2a4b5df (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
    $MediaCollection = MediaCollection::factory()->make($attributes);
    assert($MediaCollection instanceof MediaCollection);
    return $MediaCollection;
>>>>>>> e28bed7 (.)
=======
>>>>>>> 4ae6f9c (.)
=======
    return MediaCollection::factory()->make($attributes);
>>>>>>> de4643e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
    $MediaCollection = MediaCollection::factory()->make($attributes);
    assert($MediaCollection instanceof MediaCollection);
    return $MediaCollection;
>>>>>>> 0987d27 (.)
=======
>>>>>>> c5a0539 (.)
=======
    return MediaCollection::factory()->make($attributes);
>>>>>>> dd8be58 (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
=======
>>>>>>> a2b9bd0 (.)
=======
>>>>>>> da2a819 (.)
=======
>>>>>>> 53e059b (.)
=======
    $MediaCollection = MediaCollection::factory()->make($attributes);
    assert($MediaCollection instanceof MediaCollection);
    return $MediaCollection;
>>>>>>> 4b10075 (.)
=======
>>>>>>> 8e41d16 (.)
}
