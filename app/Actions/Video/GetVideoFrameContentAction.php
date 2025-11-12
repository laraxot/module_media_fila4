<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;

class GetVideoFrameContentAction
{
    use QueueableAction;

    /**
     * Execute the action.
     *
     * @return string|null
     */
    public function execute(string $disk_mp4, string $file_mp4, int $time)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! Storage::disk($disk_mp4)->exists($file_mp4)) {
=======
        if (!Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        if (!Storage::disk($disk_mp4)->exists($file_mp4)) {
=======
        if (! Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        if (!Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
            return '';
        }

        $seconds = 3600;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $cache_key = Str::slug($disk_mp4.' '.$file_mp4.' '.$time.' 1');
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
        $cache_key = Str::slug($disk_mp4 . ' ' . $file_mp4 . ' ' . $time . ' 1');
>>>>>>> 5200b63 (.)

        return Cache::store('file')->remember($cache_key, $seconds, static function () use (
            $disk_mp4,
            $file_mp4,
            $time,
        ) {
            try {
                return FFMpeg::fromDisk($disk_mp4)
                    ->open($file_mp4)
                    ->getFrameFromSeconds($time)
                    ->export()
                    ->getFrameContents();
            } catch (Exception) {
                return Storage::disk('public_html')->get('img/video_not_exists.jpg');
            }
        });
<<<<<<< HEAD
=======
        $cache_key = Str::slug($disk_mp4.' '.$file_mp4.' '.$time.' 1');

        return Cache::store('file')->remember(
            $cache_key,
            $seconds,
            static function () use ($disk_mp4, $file_mp4, $time) {
                try {
                    return FFMpeg::fromDisk($disk_mp4)
                        ->open($file_mp4)
                        ->getFrameFromSeconds($time)
                        ->export()
                        ->getFrameContents();
                } catch (Exception) {
                    return Storage::disk('public_html')->get('img/video_not_exists.jpg');
                }
            }
        );
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    }
}
