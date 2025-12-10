<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;

class GetVideoDurationAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $disk, string $file): ?int
    {
        if (! Storage::disk($disk)->exists($file)) {
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
    public function execute(string $disk, string $file): null|int
    {
        if (!Storage::disk($disk)->exists($file)) {
>>>>>>> 5200b63 (.)
=======
    public function execute(string $disk, string $file): ?int
    {
        if (! Storage::disk($disk)->exists($file)) {
>>>>>>> f41e45e (.)
            return null;
        } // returns an int

        return FFMpeg::fromDisk($disk)->open($file)->getDurationInSeconds();
    }
}
