<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use FFMpeg\Format\Video\X264;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Exporters\MediaExporter;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;

class ConvertVideoAction
{
    use QueueableAction;

    /**
     * Execute the action.
     *
     * @throws \Exception
     */
    public function execute(string $disk_mp4, string $file_mp4, string $file_new): string
    {
        $format = new X264;
        $format->setKiloBitrate(1000);

        $exporter = FFMpeg::fromDisk($disk_mp4)
            ->open($file_mp4)
            ->export();

        if (! $exporter instanceof MediaExporter) {
            throw new \Exception('Failed to create exporter');
        }

        $toDisk = $exporter->toDisk($disk_mp4);

        if (! is_object($toDisk) || ! method_exists($toDisk, 'inFormat')) {
            throw new \Exception('Failed to set disk');
        }

        $formatted = $toDisk->inFormat($format);

        if (! is_object($formatted) || ! method_exists($formatted, 'save')) {
            throw new \Exception('Failed to set format');
        }

        $formatted->save($file_new);

        return Storage::disk($disk_mp4)->url($file_new);
    }
}
