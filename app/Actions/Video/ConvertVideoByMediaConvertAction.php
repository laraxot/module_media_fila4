<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando il modello MediaConvert.
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Media\Datas\ConvertData;
use Modules\Media\Models\MediaConvert;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
use FFMpeg\Format\Video\DefaultVideo;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> f41e45e (.)
use Modules\Media\Datas\ConvertData;
use Modules\Media\Models\MediaConvert;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
>>>>>>> 5200b63 (.)
=======
>>>>>>> f41e45e (.)

/**
 * Classe per convertire video utilizzando MediaConvert e tenere traccia del progresso.
 */
class ConvertVideoByMediaConvertAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(ConvertData $data, MediaConvert $record): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $data->exists()) {
=======
        if (!$data->exists()) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
        if (! $data->exists()) {
>>>>>>> f41e45e (.)
            throw new Exception('Il file non esiste');
        }

        $format = $data->getFFMpegFormat();
        $file_new = $record->converted_file;

<<<<<<< HEAD
<<<<<<< HEAD
        if (! $file_new) {
=======
        if (!$file_new) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
        if (! $file_new) {
>>>>>>> f41e45e (.)
            throw new Exception('Il nome del file convertito non è stato specificato');
        }

        // Instanziamo il formato prima di usarlo
<<<<<<< HEAD
<<<<<<< HEAD
        $formatInstance = new $format;
=======
        $formatInstance = new $format();
>>>>>>> 5200b63 (.)
=======
        $formatInstance = new $format;
>>>>>>> f41e45e (.)

        // @phpstan-ignore method.notFound
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate) use ($record): void {
                $record->update([
                    'percentage' => $percentage,
                    'remaining' => $remaining,
                    'rate' => $rate,
                ]);
            })
            ->addFilter('-preset', 'ultrafast')
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);

        $record->update([
            'status' => 'completed',
        ]);

        return $file_new;
    }
}
