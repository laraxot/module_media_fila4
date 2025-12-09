<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use FFMpeg\Format\Video\X264;
use Illuminate\Support\Facades\Storage;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use ProtoneMedia\LaravelFFMpeg\Exporters\MediaExporter;
>>>>>>> 1634e53 (.)
=======
>>>>>>> 21a9aec (.)
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
=======
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
=======
=======
=======
use FFMpeg\Format\Video\X264;
>>>>>>> b93ef594b4 (.)
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use FFMpeg\Format\Video\X264;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 47a54fe (.)
=======
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use FFMpeg\Format\Video\X264;
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> f41e45e (.)

class ConvertVideoAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $disk_mp4, string $file_mp4, string $file_new): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21a9aec (.)
        $media = FFMpeg::fromDisk($disk_mp4);

        $openedMedia = $media->open($file_mp4);

        $exportedMedia = $openedMedia->export();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $format = new X264;
        $format->setKiloBitrate(1000);

        /** @phpstan-ignore-next-line - FFMpeg fluent API */
        $toDiskMedia = $exportedMedia->toDisk($disk_mp4);

        /** @phpstan-ignore-next-line - FFMpeg fluent API */
        $formattedMedia = $toDiskMedia->inFormat($format);

        /** @phpstan-ignore-next-line - FFMpeg fluent API */
=======
        $format = new X264();
=======
        $format = new X264;
>>>>>>> f41e45e (.)
        $format->setKiloBitrate(1000);

        $toDiskMedia = $exportedMedia->toDisk($disk_mp4);
=======
        $format = new X264;
        $format->setKiloBitrate(1000);

        $exporter = FFMpeg::fromDisk($disk_mp4)
            ->open($file_mp4)
            ->export();
>>>>>>> 1634e53 (.)
=======
        $format = new X264;
        $format->setKiloBitrate(1000);

        $toDiskMedia = $exportedMedia->toDisk($disk_mp4);
>>>>>>> 21a9aec (.)

        $formattedMedia = $toDiskMedia->inFormat($format);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $formattedMedia = $toDiskMedia->inFormat($format);

>>>>>>> 47a54fe (.)
=======
        
        $formattedMedia = $toDiskMedia->inFormat($format);
        
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 47a54fe (.)
=======

        $formattedMedia = $toDiskMedia->inFormat($format);

<<<<<<< HEAD
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        $formattedMedia = $toDiskMedia->inFormat($format);
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        $formattedMedia->save($file_new);
=======
        if (is_object($formattedMedia) && method_exists($formattedMedia, 'save')) {
            $formattedMedia->save($file_new);
        } else {
            throw new \Exception('Cannot save formatted media');
        }
>>>>>>> 13d1d7e (.)
=======
        $formattedMedia->save($file_new);
>>>>>>> 2a4b5df (.)
=======
        $toDisk = $exporter->toDisk($disk_mp4);

        if (! is_object($toDisk) || ! method_exists($toDisk, 'inFormat')) {
            throw new \Exception('Failed to set disk');
        }

        $formatted = $toDisk->inFormat($format);

        if (! is_object($formatted) || ! method_exists($formatted, 'save')) {
            throw new \Exception('Failed to set format');
        }

        $formatted->save($file_new);
>>>>>>> 1634e53 (.)
=======
        $formattedMedia->save($file_new);
>>>>>>> 21a9aec (.)

        return Storage::disk($disk_mp4)->url($file_new);
    }
}
