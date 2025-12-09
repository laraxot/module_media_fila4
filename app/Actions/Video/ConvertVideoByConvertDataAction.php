<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando ConvertData.
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
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
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
use FFMpeg\Format\Video\DefaultVideo;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
=======
=======
=======
use FFMpeg\Format\Video\DefaultVideo;
>>>>>>> b93ef594b4 (.)
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use FFMpeg\Format\Video\DefaultVideo;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Datas\ConvertData;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\FFMpegExporter;
use Spatie\QueueableAction\QueueableAction;
use FFMpeg\Format\Video\DefaultVideo;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Webmozart\Assert\Assert;
>>>>>>> 5200b63 (.)

/**
 * Classe per convertire video utilizzando i dati di conversione specificati.
 */
class ConvertVideoByConvertDataAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(ConvertData $data): string
    {
<<<<<<< HEAD
        if (! $data->exists()) {
=======
        if (!$data->exists()) {
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
            throw new Exception('Il file non esiste');
=======
<<<<<<< HEAD
            throw new Exception('Il file non esiste');
=======
            throw new \Exception('Il file non esiste');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        }

        $format = $data->getFFMpegFormat();
        $file_new = $data->getConvertedFilename();

<<<<<<< HEAD
        if (! $file_new) {
=======
        if (!$file_new) {
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
            throw new Exception('Il nome del file convertito non è stato specificato');
=======
<<<<<<< HEAD
            throw new Exception('Il nome del file convertito non è stato specificato');
=======
            throw new \Exception('Il nome del file convertito non è stato specificato');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        }

        // Instanziamo il formato prima di usarlo
<<<<<<< HEAD
        $formatInstance = new $format;
=======
        $formatInstance = new $format();
>>>>>>> 5200b63 (.)

        // @phpstan-ignore method.notFound
        FFMpeg::fromDisk($data->disk)
            ->open($data->file)
            ->export()
            ->onProgress(function (float $percentage, float $remaining, float $rate): void {
                // Gestione del progresso
                $msg = "{$percentage}% transcoded";
                $msg .= "{$remaining} seconds left at rate: {$rate}";
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
                // Log o notifica del progresso
            })
            ->addFilter('-preset', 'ultrafast')
            // Utilizziamo il formato istanziato come parametro
            ->save($file_new, $formatInstance);

        // Restituisci il percorso del file senza usare il metodo url()
        return $file_new;
    }
}
