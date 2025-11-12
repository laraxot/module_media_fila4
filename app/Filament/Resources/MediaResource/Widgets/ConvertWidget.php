<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Widgets;

use FFMpeg\Format\Video\WebM;
use Filament\Notifications\Notification;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Models\Media;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ConvertWidget extends Widget
{
    public Media $record;

    public string $time = '';

    public string $start = '';

    public float $percentage = 0;

    /** @var float */
    public $remaining;

    /** @var float */
    public $rate;

    protected string $view = 'media::filament.widgets.convert';

    protected static string $resource = MediaResource::class;

    public function begin(): void
    {
        $disk_mp4 = $this->record->disk;
        $file_mp4 = $this->record->getPath();

        $disk_path = Storage::disk($disk_mp4)->path('/');
        $file_mp4 = Str::after($file_mp4, $disk_path);

        // dddx($file_mp4);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $format = new WebM;
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)->replaceLast('.mp4', '.'.$extension)->toString();
=======
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)->replaceLast('.mp4', '.' . $extension)->toString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)->replaceLast('.mp4', '.' . $extension)->toString();
=======
        $format = new WebM;
<<<<<<< HEAD
=======
=======
        $format = new \FFMpeg\Format\Video\WebM;
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)
            ->replaceLast('.mp4', '.'.$extension)
            ->toString();
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 47a54fe (.)
=======
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)->replaceLast('.mp4', '.' . $extension)->toString();
<<<<<<< HEAD
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> a80d398 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> f1c6d6e (.)
=======
        $format = new WebM;
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file_mp4)->replaceLast('.mp4', '.'.$extension)->toString();
>>>>>>> f41e45e (.)

        /*
         * -preset ultrafast.
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $exportedMedia = FFMpeg::fromDisk($disk_mp4)
            ->open($file_mp4)
            ->export();
        // ->addFilter(function (VideoFilters $filters) {
        //    $filters->resize(new \FFMpeg\Coordinate\Dimension(640, 480));
        // })
        // ->resize(640, 480)

        $exportedMedia->onProgress(function (float $percentage, float $remaining, float $rate): void {
            $this->percentage = $percentage;
            $this->remaining = $remaining;
            $this->rate = $rate;
            $msg = "{$percentage}% transcoded";
            $msg .= "{$remaining} seconds left at rate: {$rate}";
            Notification::make()
                ->title($msg)
                ->success()
                ->send();
        });

        /** @phpstan-ignore-next-line - FFMpeg fluent API */
        $toDiskMedia = $exportedMedia->toDisk($disk_mp4);
        if ($toDiskMedia === null) {
            throw new \RuntimeException('Failed to export media to disk');
        }

        /** @phpstan-ignore-next-line - FFMpeg fluent API */
        $formattedMedia = $toDiskMedia->inFormat($format);
        if ($formattedMedia === null || ! is_object($formattedMedia)) {
            throw new \RuntimeException('Failed to format media');
        }

        if (! method_exists($formattedMedia, 'save')) {
            throw new \RuntimeException('Formatted media does not have save method');
        }

        $formattedMedia->save($file_new);
=======
        FFMpeg::fromDisk($disk_mp4)
=======
        $ffmpeg = FFMpeg::fromDisk($disk_mp4)
>>>>>>> 13d1d7e (.)
=======
        FFMpeg::fromDisk($disk_mp4)
>>>>>>> 2a4b5df (.)
            ->open($file_mp4)
            ->export()
            // ->addFilter(function (VideoFilters $filters) {
            //    $filters->resize(new \FFMpeg\Coordinate\Dimension(640, 480));
            // })
            // ->resize(640, 480)
            ->onProgress(function (float $percentage, float $remaining, float $rate): void {
                $this->percentage = $percentage;
                $this->remaining = $remaining;
                $this->rate = $rate;
                $msg = "{$percentage}% transcoded";
                $msg .= "{$remaining} seconds left at rate: {$rate}";
                Notification::make()
                    ->title($msg)
                    ->success()
                    ->send();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a4b5df (.)
            })
            ->toDisk($disk_mp4)
            ->inFormat($format)
            ->save($file_new);
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
            });
        }
        
        if (is_object($ffmpeg) && method_exists($ffmpeg, 'toDisk')) {
            $ffmpeg = $ffmpeg->toDisk($disk_mp4);
        }
        
        if (is_object($ffmpeg) && method_exists($ffmpeg, 'inFormat')) {
            $ffmpeg = $ffmpeg->inFormat($format);
        }
        
        if (is_object($ffmpeg) && method_exists($ffmpeg, 'save')) {
            $ffmpeg->save($file_new);
        }
>>>>>>> 13d1d7e (.)
=======
>>>>>>> 2a4b5df (.)

        while ($this->percentage < 100) {
            // Stream the current count to the browser...
            $this->stream(
                to: 'count',
                content: $this->start,
                replace: true,
            );

            // Pause for 1 second between numbers...
            // sleep(1);

            $this->start =
<<<<<<< HEAD
<<<<<<< HEAD
                "{$this->percentage}% transcoded".PHP_EOL."{$this->remaining} seconds left at rate: {$this->rate}";
=======
                "{$this->percentage}% transcoded" . PHP_EOL . "{$this->remaining} seconds left at rate: {$this->rate}";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
            $this->start = "{$this->percentage}% transcoded".PHP_EOL."{$this->remaining} seconds left at rate: {$this->rate}";
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
            $this->start =
                "{$this->percentage}% transcoded" . PHP_EOL . "{$this->remaining} seconds left at rate: {$this->rate}";
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $this->start =
                "{$this->percentage}% transcoded" . PHP_EOL . "{$this->remaining} seconds left at rate: {$this->rate}";
=======
            $this->start = "{$this->percentage}% transcoded".PHP_EOL."{$this->remaining} seconds left at rate: {$this->rate}";
>>>>>>> a12f125f4a (.)
=======
            $this->start =
                "{$this->percentage}% transcoded" . PHP_EOL . "{$this->remaining} seconds left at rate: {$this->rate}";
>>>>>>> b93ef594b4 (.)
=======
            $this->start = "{$this->percentage}% transcoded".PHP_EOL."{$this->remaining} seconds left at rate: {$this->rate}";
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
                "{$this->percentage}% transcoded".PHP_EOL."{$this->remaining} seconds left at rate: {$this->rate}";
>>>>>>> f41e45e (.)

            // Decrement the counter...
            // $this->start = $this->start - 1;
            // $this->start = (string) now();
            // if ('impossible' === $this->start) {
            //    $cond = false;
            // }
        }
    }
}
