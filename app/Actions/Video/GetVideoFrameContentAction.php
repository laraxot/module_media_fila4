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
     */
    public function execute(string $disk_mp4, string $file_mp4, int $time): ?string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        if (!Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> a80d398 (.)
=======
        if (!Storage::disk($disk_mp4)->exists($file_mp4)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!Storage::disk($disk_mp4)->exists($file_mp4)) {
=======
        if (! Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> a12f125f4a (.)
=======
        if (!Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
        if (!Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> f1c6d6e (.)
=======
        if (! Storage::disk($disk_mp4)->exists($file_mp4)) {
>>>>>>> f41e45e (.)
            return '';
        }

        $seconds = 3600;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $cache_key = Str::slug($disk_mp4 . ' ' . $file_mp4 . ' ' . $time . ' 1');
>>>>>>> 5200b63 (.)
=======
        $cache_key = Str::slug($disk_mp4.' '.$file_mp4.' '.$time.' 1');
>>>>>>> f41e45e (.)

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
    }
}
