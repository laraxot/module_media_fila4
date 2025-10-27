<?php

declare(strict_types=1);

namespace Modules\Media\Actions;

use Exception;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;

use function Safe\file_put_contents;
use function Safe\tempnam;
use function Safe\unlink;

class SaveAttachmentsAction
{
    /**
     * @param  array<int, string>  $attachments
     * @param  array<string, string>  $data
     */
    public function execute(HasMedia $record, array $attachments, array $data, string $disk = 'attachments'): void
    {
        $dataAttachments = [];

        foreach ($attachments as $attachment) {
            if (empty($data[$attachment])) {
                continue;
            }

            /** @var string $path */
            $path = $data[$attachment];

            // Metodo compatibile con Laravel 9+ e Flysystem 3.x
            $storage = Storage::disk($disk);

            if (! $storage->exists($path)) {
                continue;
            }

            // Ottieni il contenuto del file prima che venga eliminato
            /** @var string $fileContent */
            $fileContent = $storage->get($path);
            $tempPath = tempnam(sys_get_temp_dir(), 'media_');

            file_put_contents($tempPath, $fileContent);

            try {
                $media = $record->addMedia($tempPath)
                    ->usingFileName(basename($path))
                    ->toMediaCollection($attachment, $disk);

                $dataAttachments[$attachment] = $media->getPathRelativeToRoot();
            } finally {
                // Cleanup del file temporaneo
                if (file_exists($tempPath)) {
                    unlink($tempPath);
                }
            }
        }

        if (! empty($dataAttachments)) {
            $record->update($dataAttachments);
        }
    }

    /**
     * @param  array<int, string>  $attachments
     * @param  array<string, string>  $data
     */
    public function executeOLD(HasMedia $record, array $attachments, array $data, string $disk = 'attachments'): void
    {
        /** @var array<string, string> $data_attachments */
        $data_attachments = [];
        foreach ($attachments as $attachment) {
            /** @var string $path */
            $path = $data[$attachment];
            $full_path = Storage::disk($disk)->path($path);
            // *
            dddx([
                'exists' => Storage::disk($disk)->exists($path),
                'path' => $path,
                'disk' => $disk,
                'full_path' => Storage::disk($disk)->path($path),
            ]);
            // */
            if (! method_exists($record, 'addMediaFromDisk')) {
                throw new Exception('Method addMediaFromDisk not found');
            }
            /** @var \Spatie\MediaLibrary\MediaCollections\FileAdder $mediaAdder */
            $mediaAdder = $record->addMediaFromDisk($path, $disk);
            if ($mediaAdder === null) {
                continue;
            }
            /** @var \Spatie\MediaLibrary\MediaCollections\Models\Media $media */
            $media = $mediaAdder->toMediaCollection($attachment);
            $data_attachments[$attachment] = $media->getPathRelativeToRoot();
        }
        $record->update($data_attachments);
    }
}
