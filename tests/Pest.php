<?php

declare(strict_types=1);

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

pest()->extend(TestCase::class)->in('Feature', 'Unit', 'Filament');

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

/** @phpstan-ignore-next-line property.nonObject, variable.undefined */
expect()->extend('toBeMedia', fn () => expect($this->value)->toBeInstanceOf(Media::class));

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

/**
 * @param array<string, mixed> $attributes
 * @return Media
 */
function createMedia(array $attributes = []): Media
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<Media> $factory */
    $factory = Media::factory();

    /** @var Media $media */
    $media = $factory->create($attributes);

    return $media;
}

/**
 * @param array<string, mixed> $attributes
 * @return Media
 */
function makeMedia(array $attributes = []): Media
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<Media> $factory */
    $factory = Media::factory();

    /** @var Media $media */
    $media = $factory->make($attributes);

    return $media;
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
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<MediaCollection> $factory */
    /** @phpstan-ignore-next-line class.notFound */
    $factory = MediaCollection::factory();

    /** @var MediaCollection $mediaCollection */
    /** @phpstan-ignore-next-line class.notFound */
    $mediaCollection = $factory->make($attributes);

    return $mediaCollection;
}
