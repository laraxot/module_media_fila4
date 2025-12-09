<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
use FFMpeg\Format\Video\X264;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
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
=======
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use FFMpeg\Format\Video\X264;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)

class ConvertVideoAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $disk_mp4, string $file_mp4, string $file_new): string
    {
        $media = FFMpeg::fromDisk($disk_mp4);

        $openedMedia = $media->open($file_mp4);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        $exportedMedia = $openedMedia->export();

        $format = new X264();
        $format->setKiloBitrate(1000);

        $toDiskMedia = $exportedMedia->toDisk($disk_mp4);
<<<<<<< HEAD

        $formattedMedia = $toDiskMedia->inFormat($format);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $formattedMedia = $toDiskMedia->inFormat($format);

=======
        
        $formattedMedia = $toDiskMedia->inFormat($format);
        
>>>>>>> a12f125f4a (.)
=======

        $formattedMedia = $toDiskMedia->inFormat($format);

>>>>>>> b93ef594b4 (.)
=======
        
        $formattedMedia = $toDiskMedia->inFormat($format);
        
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        $formattedMedia->save($file_new);

        return Storage::disk($disk_mp4)->url($file_new);
    }
}
