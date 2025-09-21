<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 * Azione per convertire un video utilizzando ConvertData.
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Video;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
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
        if (!$data->exists()) {
<<<<<<< HEAD
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

        if (!$file_new) {
<<<<<<< HEAD
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
        $formatInstance = new $format();

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
