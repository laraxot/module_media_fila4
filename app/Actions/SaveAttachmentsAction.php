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
    public function execute(HasMedia $record, array $attachments, array $data, string $disk = 'attachments'): void
    {
        $dataAttachments = [];

        foreach ($attachments as $attachment) {
            $attachmentKey = is_string($attachment) ? $attachment : (string) $attachment;
            if (empty($data[$attachmentKey])) {
                continue;
            }

            $path = $data[$attachmentKey];
            if (!is_string($path)) {
                continue;
            }

            // Metodo compatibile con Laravel 9+ e Flysystem 3.x
            $storage = Storage::disk($disk);

            if (! $storage->exists($path)) {
                continue;
            }

            // Ottieni il contenuto del file prima che venga eliminato
            $fileContent = $storage->get($path);
            $tempPath = tempnam(sys_get_temp_dir(), 'media_');

            file_put_contents($tempPath, $fileContent);

            try {
                $media = $record->addMedia($tempPath)->usingFileName(basename($path))->toMediaCollection(
                    $attachmentKey,
                    $disk,
                );

                $dataAttachments[$attachmentKey] = $media->getPathRelativeToRoot();
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

    public function executeOLD(HasMedia $record, array $attachments, array $data, string $disk = 'attachments'): void
    {
        $data_attachments = [];
        foreach ($attachments as $attachment) {
            $attachmentKey = is_string($attachment) ? $attachment : (string) $attachment;
            $path = $data[$attachmentKey] ?? null;
            if (!is_string($path)) {
                continue;
            }
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
            $media = $record
                ->addMediaFromDisk($path, $disk);
            
            if (is_object($media) && method_exists($media, 'toMediaCollection')) {
                $media = $media->toMediaCollection($attachmentKey);
            }
            
            if (is_object($media) && method_exists($media, 'getPathRelativeToRoot')) {
                $data_attachments[$attachmentKey] = $media->getPathRelativeToRoot();
            }
        }
        $record->update($data_attachments);
    }
}
