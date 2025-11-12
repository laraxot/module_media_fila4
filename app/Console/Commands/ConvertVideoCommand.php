<?php

declare(strict_types=1);

namespace Modules\Media\Console\Commands;

use FFMpeg\Format\Video\WebM;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Webmozart\Assert\Assert;

class ConvertVideoCommand extends Command
{
    protected $signature = 'media:convert-video {disk} {file}';

    protected $description = 'Convert Video';

    public function handle(): string
    {
        Assert::string($disk = $this->argument('disk'));
        Assert::string($file = $this->argument('file'));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->info('disk: '.print_r($disk, true));
        $this->info('file: '.print_r($file, true));

        if (! Storage::disk($disk)->exists($file)) {
            $this->error('['.$disk.'] file ['.$file.'] Not Exists');
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
        $this->info('disk: ' . print_r($disk, true));
        $this->info('file: ' . print_r($file, true));

        if (!Storage::disk($disk)->exists($file)) {
            $this->error('[' . $disk . '] file [' . $file . '] Not Exists');
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
=======
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
        $this->info('disk: '.print_r($disk, true));
        $this->info('file: '.print_r($file, true));

        if (! Storage::disk($disk)->exists($file)) {
            $this->error('['.$disk.'] file ['.$file.'] Not Exists');
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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->info('disk: ' . print_r($disk, true));
        $this->info('file: ' . print_r($file, true));

        if (!Storage::disk($disk)->exists($file)) {
            $this->error('[' . $disk . '] file [' . $file . '] Not Exists');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)

            return '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $format = new WebM;
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file)->replaceLast('.mp4', '.'.$extension)->toString();
=======
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file)->replaceLast('.mp4', '.' . $extension)->toString();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file)->replaceLast('.mp4', '.' . $extension)->toString();
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
        $format = new WebM;
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file)
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
        $file_new = Str::of($file)->replaceLast('.mp4', '.' . $extension)->toString();
<<<<<<< HEAD
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        $format = new WebM();
        $extension = mb_strtolower(class_basename($format));
        $file_new = Str::of($file)->replaceLast('.mp4', '.' . $extension)->toString();
>>>>>>> a80d398 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)

        $media = FFMpeg::fromDisk($disk)->open($file);
        $export = $media->export();

        $export->onProgress(function (float $percentage, float $remaining, float $rate): void {
            $this->info("{$percentage}% transcoded");
            $this->info("{$remaining} seconds left at rate: {$rate}");
        });
        // @phpstan-ignore method.nonObject, method.nonObject
<<<<<<< HEAD
        $export
            ->toDisk($disk)
            // @phpstan-ignore method.nonObject
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $export
            ->toDisk($disk)
            // @phpstan-ignore method.nonObject
=======
        $export->toDisk($disk)
        // @phpstan-ignore method.nonObject
>>>>>>> a12f125f4a (.)
=======
        $export
            ->toDisk($disk)
            // @phpstan-ignore method.nonObject
>>>>>>> b93ef594b4 (.)
=======
        $export->toDisk($disk)
        // @phpstan-ignore method.nonObject
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            ->inFormat($format)
            // @phpstan-ignore method.nonObject
            ->save($file_new);

        return Storage::disk($disk)->url($file_new);
    }
}
