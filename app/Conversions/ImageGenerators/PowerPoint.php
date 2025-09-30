<?php

/**
 * @see https://spatie.be/docs/laravel-medialibrary/v11/converting-other-file-types/creating-a-custom-image-generator
 */

declare(strict_types=1);

namespace Modules\Media\Conversions\ImageGenerators;

use Illuminate\Support\Collection;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\Conversions\ImageGenerators\ImageGenerator;

class PowerPoint extends ImageGenerator
{
    /**
     * This function should return a path to an image representation of the given file.
     */
<<<<<<< HEAD
    public function convert(string $file, null|Conversion $_conversion = null): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function convert(string $file, null|Conversion $_conversion = null): string
=======
    public function convert(string $file, ?Conversion $conversion = null): string
>>>>>>> a12f125f4a (.)
=======
    public function convert(string $file, null|Conversion $_conversion = null): string
>>>>>>> b93ef594b4 (.)
=======
    public function convert(string $file, ?Conversion $conversion = null): string
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        // Here you should convert the file to an image and return generated conversion path.
        // EXAMPLE
        // EXAMPLE
        // EXAMPLE
        // \PowerPoint::convertFileToImage($file)->store($pathToImageFile);

<<<<<<< HEAD
        return pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.jpg';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.jpg';
=======
        return pathinfo($file, PATHINFO_DIRNAME).'/'.pathinfo($file, PATHINFO_FILENAME).'.jpg';
>>>>>>> a12f125f4a (.)
=======
        return pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.jpg';
>>>>>>> b93ef594b4 (.)
=======
        return pathinfo($file, PATHINFO_DIRNAME).'/'.pathinfo($file, PATHINFO_FILENAME).'.jpg';
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }

    public function requirementsAreInstalled(): bool
    {
        return true;
    }

    public function supportedExtensions(): Collection
    {
        return collect(['ppt', 'pptx']);
    }

    public function supportedMimeTypes(): Collection
    {
        return collect([
            'application/vnd.ms-powerpoint',
            'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        ]);
    }
}
