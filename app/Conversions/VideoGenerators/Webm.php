<?php

declare(strict_types=1);

namespace Modules\Media\Conversions\VideoGenerators;

use Illuminate\Support\Collection;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\Conversions\ImageGenerators\ImageGenerator;

class Webm extends ImageGenerator
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function convert(string $file, ?Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME).'/'.pathinfo($file, PATHINFO_FILENAME).'.webmXXX';
=======
    public function convert(string $file, null|Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webmXXX';
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
    public function convert(string $file, null|Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webmXXX';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
    public function convert(string $file, null|Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webmXXX';
=======
    public function convert(string $file, ?Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME).'/'.pathinfo($file, PATHINFO_FILENAME).'.webmXXX';
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 47a54fe (.)
=======
    public function convert(string $file, null|Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webmXXX';
<<<<<<< HEAD
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
    public function convert(string $file, null|Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webmXXX';
>>>>>>> a80d398 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function convert(string $file, ?Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME).'/'.pathinfo($file, PATHINFO_FILENAME).'.webmXXX';
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
    public function convert(string $file, null|Conversion $conversion = null): string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME) . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webmXXX';
>>>>>>> f1c6d6e (.)
        dddx([
            'file' => $file,
            '$pathToImageFile' => ${$pathToImageFile},
            'conversion' => $conversion,
        ]);

        /*
         * $image = imagecreatefromwebp($file);
         *
         * imagepng($image, $pathToImageFile, 9);
         *
         * imagedestroy($image);
         */
        return $pathToImageFile;
    }

    public function requirementsAreInstalled(): bool
    {
        /*
         * if (! function_exists('imagecreatefromwebp')) {
         * return false;
         * }
         *
         * if (! function_exists('imagepng')) {
         * return false;
         * }
         *
         * if (! function_exists('imagedestroy')) {
         * return false;
         * }
         */
        return true;
    }

    public function supportedExtensions(): Collection
    {
        return collect([
            // 'webm',
            // 'mov',
            'mp4',
        ]);
    }

    public function supportedMimeTypes(): Collection
    {
        return collect([
            // 'video/webm',
            'video/mpeg',
            'video/mp4',
            // 'video/quicktime'
        ]);
    }
}
