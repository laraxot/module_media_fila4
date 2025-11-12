<?php

declare(strict_types=1);

namespace Modules\Media\Actions;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Set;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource as FilamentResource;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Modules\UI\Actions\Icon\GetAllIconsAction;
use Modules\Xot\Actions\ModelClass\CountAction;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> 5200b63 (.)
=======
use Illuminate\Support\Facades\Storage;
>>>>>>> f41e45e (.)
use Spatie\MediaLibrary\HasMedia;

use function Safe\file_put_contents;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use function Safe\glob;
>>>>>>> 5200b63 (.)
=======
>>>>>>> f41e45e (.)
use function Safe\tempnam;
use function Safe\unlink;

class SaveAttachmentsAction
{
<<<<<<< HEAD
    /**
     * Save attachments to media library.
     *
     * @param  array<int, string>  $attachments
     * @param  array<string, mixed>  $data
     */
=======
>>>>>>> 5200b63 (.)
    public function execute(HasMedia $record, array $attachments, array $data, string $disk = 'attachments'): void
    {
        $dataAttachments = [];

        foreach ($attachments as $attachment) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($attachment, '['.__LINE__.']['.class_basename(__CLASS__).']');

=======
>>>>>>> 5200b63 (.)
            if (empty($data[$attachment])) {
                continue;
            }

            $path = $data[$attachment];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($path, '['.__LINE__.']['.class_basename(__CLASS__).']');
=======
>>>>>>> 5200b63 (.)
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
=======
            $attachmentKey = is_string($attachment) ? $attachment : (string) $attachment;
            if (empty($data[$attachmentKey])) {
                continue;
            }

            $path = $data[$attachmentKey];
            if (!is_string($path)) {
                continue;
            }
>>>>>>> 13d1d7e (.)
=======
            if (empty($data[$attachment])) {
                continue;
            }

            $path = $data[$attachment];
>>>>>>> 2a4b5df (.)

            // Metodo compatibile con Laravel 9+ e Flysystem 3.x
            $storage = Storage::disk($disk);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $storage->exists($path)) {
=======
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
            
           
            // Metodo compatibile con Laravel 9+ e Flysystem 3.x
            $storage = Storage::disk($disk);
            
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

            // Metodo compatibile con Laravel 9+ e Flysystem 3.x
            $storage = Storage::disk($disk);

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
            if (!$storage->exists($path)) {
>>>>>>> 5200b63 (.)
=======
            if (! $storage->exists($path)) {
>>>>>>> f41e45e (.)
                continue;
            }

            // Ottieni il contenuto del file prima che venga eliminato
            $fileContent = $storage->get($path);
            $tempPath = tempnam(sys_get_temp_dir(), 'media_');

            file_put_contents($tempPath, $fileContent);

            try {
                $media = $record->addMedia($tempPath)->usingFileName(basename($path))->toMediaCollection(
                    $attachment,
                    $disk,
                );

                $dataAttachments[$attachment] = $media->getPathRelativeToRoot();
            } finally {
                // Cleanup del file temporaneo
                if (file_exists($tempPath)) {
                    unlink($tempPath);
                }
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (! empty($dataAttachments)) {
            /** @var array<string, string> $dataAttachments */
=======
        if (!empty($dataAttachments)) {
>>>>>>> 5200b63 (.)
=======
        if (! empty($dataAttachments)) {
>>>>>>> f41e45e (.)
            $record->update($dataAttachments);
        }
    }

<<<<<<< HEAD
    /**
     * @param  array<int, string>  $attachments
     * @param  array<string, mixed>  $data
     */
=======
>>>>>>> 5200b63 (.)
    public function executeOLD(HasMedia $record, array $attachments, array $data, string $disk = 'attachments'): void
    {
        $data_attachments = [];
        foreach ($attachments as $attachment) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($attachment, '['.__LINE__.']['.class_basename(__CLASS__).']');
            $path = $data[$attachment];
            Assert::string($path, '['.__LINE__.']['.class_basename(__CLASS__).']');
=======
            $attachmentKey = is_string($attachment) ? $attachment : (string) $attachment;
            $path = $data[$attachmentKey] ?? null;
            if (!is_string($path)) {
                continue;
            }
>>>>>>> 13d1d7e (.)
=======
            $path = $data[$attachment];
>>>>>>> 2a4b5df (.)
            $full_path = Storage::disk($disk)->path($path);
            // *
=======
            $path = $data[$attachment];
            $full_path = Storage::disk($disk)->path($path);
<<<<<<< HEAD
            //*
>>>>>>> 5200b63 (.)
=======
            // *
>>>>>>> f41e45e (.)
            dddx([
                'exists' => Storage::disk($disk)->exists($path),
                'path' => $path,
                'disk' => $disk,
                'full_path' => Storage::disk($disk)->path($path),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
            // */
            if (! method_exists($record, 'addMediaFromDisk')) {
                throw new Exception('Method addMediaFromDisk not found');
            }
            $fileAdder = $record->addMediaFromDisk($path, $disk);
            // $media=$record->addMediaFromRequest($attachment)

            // $media=$record->addMedia($full_path)
            if ($fileAdder === null) {
                continue;
            }
            /** @phpstan-ignore-next-line - Spatie MediaLibrary fluent API */
            $media = $fileAdder->toMediaCollection($attachment);
            /** @phpstan-ignore-next-line - Spatie MediaLibrary Media model */
            $data_attachments[$attachment] = $media->getPathRelativeToRoot();
        }
        /** @var array<string, string> $data_attachments */
=======
            //*/
            if (!method_exists($record, 'addMediaFromDisk')) {
=======
            // */
            if (! method_exists($record, 'addMediaFromDisk')) {
>>>>>>> f41e45e (.)
                throw new Exception('Method addMediaFromDisk not found');
            }
            $media = $record
                ->addMediaFromDisk($path, $disk)
                // $media=$record->addMediaFromRequest($attachment)

                // $media=$record->addMedia($full_path)
                ->toMediaCollection($attachment);
            $data_attachments[$attachment] = $media->getPathRelativeToRoot();
        }
>>>>>>> 5200b63 (.)
        $record->update($data_attachments);
    }
}
