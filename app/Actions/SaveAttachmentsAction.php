<?php

declare(strict_types=1);

namespace Modules\Media\Actions;

use Exception;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
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
use Spatie\MediaLibrary\HasMedia;
use Webmozart\Assert\Assert;

use function Safe\file_put_contents;
<<<<<<< HEAD
=======
use function Safe\glob;
>>>>>>> 5200b63 (.)
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

<<<<<<< HEAD
=======
use Filament\Forms\Set;
use function Safe\glob;
use Filament\Forms\Form;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\SubNavigationPosition;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Modules\UI\Actions\Icon\GetAllIconsAction;
use Modules\Xot\Actions\ModelClass\CountAction;
use Filament\Resources\Resource as FilamentResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use function Safe\tempnam;
use function Safe\file_put_contents;
use function Safe\unlink;


/**
 *
 */
class SaveAttachmentsAction
{

    public function execute(HasMedia $record, array $attachments, array $data, string $disk = 'attachments'): void
    {
        $dataAttachments = [];
        
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
        foreach ($attachments as $attachment) {
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
            Assert::string($path, '['.__LINE__.']['.class_basename(__CLASS__).']');
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)

            // Metodo compatibile con Laravel 9+ e Flysystem 3.x
            $storage = Storage::disk($disk);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $storage->exists($path)) {
=======
=======
=======
>>>>>>> 98c37f4 (.)
=======
            
           
            // Metodo compatibile con Laravel 9+ e Flysystem 3.x
            $storage = Storage::disk($disk);
            
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
            if (!$storage->exists($path)) {
>>>>>>> 5200b63 (.)
                continue;
            }

            // Ottieni il contenuto del file prima che venga eliminato
            $fileContent = $storage->get($path);
            $tempPath = tempnam(sys_get_temp_dir(), 'media_');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)

            file_put_contents($tempPath, $fileContent);

            try {
                $media = $record->addMedia($tempPath)->usingFileName(basename($path))->toMediaCollection(
                    $attachment,
                    $disk,
                );

<<<<<<< HEAD
=======
            
            file_put_contents($tempPath, $fileContent);

            try {
                $media = $record->addMedia($tempPath)
                    ->usingFileName(basename($path))
                    ->toMediaCollection($attachment,$disk);
                
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
                $dataAttachments[$attachment] = $media->getPathRelativeToRoot();
            } finally {
                // Cleanup del file temporaneo
                if (file_exists($tempPath)) {
                    unlink($tempPath);
                }
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
           
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
        }

<<<<<<< HEAD
        if (! empty($dataAttachments)) {
            /** @var array<string, string> $dataAttachments */
=======
        if (!empty($dataAttachments)) {
>>>>>>> 5200b63 (.)
            $record->update($dataAttachments);
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)

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
            Assert::string($attachment, '['.__LINE__.']['.class_basename(__CLASS__).']');
            $path = $data[$attachment];
            Assert::string($path, '['.__LINE__.']['.class_basename(__CLASS__).']');
            $full_path = Storage::disk($disk)->path($path);
            // *
=======
            $path = $data[$attachment];
            $full_path = Storage::disk($disk)->path($path);
            //*
>>>>>>> 5200b63 (.)
            dddx([
                'exists' => Storage::disk($disk)->exists($path),
                'path' => $path,
                'disk' => $disk,
                'full_path' => Storage::disk($disk)->path($path),
            ]);
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
                throw new Exception('Method addMediaFromDisk not found');
            }
            $media = $record
                ->addMediaFromDisk($path, $disk)
                //$media=$record->addMediaFromRequest($attachment)

                // $media=$record->addMedia($full_path)
                ->toMediaCollection($attachment);
            $data_attachments[$attachment] = $media->getPathRelativeToRoot();
        }
>>>>>>> 5200b63 (.)
        $record->update($data_attachments);
<<<<<<< HEAD
=======
    /**
     *
     */
    public function executeOLD(HasMedia $record,array $attachments,array $data, string $disk='attachments'): void
    {
        $data_attachments = [];
        foreach ($attachments as $attachment) {
                $path=$data[$attachment];
                $full_path=Storage::disk($disk)->path($path);
                //*
                dddx([
                    'exists'=>Storage::disk($disk)->exists($path),
                    'path'=>$path,
                    'disk'=>$disk,
                    'full_path'=>Storage::disk($disk)->path($path),
                ]);
                //*/
                if(!method_exists($record,'addMediaFromDisk')){
                    throw new Exception('Method addMediaFromDisk not found');
                }
                $media=$record->addMediaFromDisk($path,$disk)
                //$media=$record->addMediaFromRequest($attachment)

               // $media=$record->addMedia($full_path)
                    ->toMediaCollection($attachment);
                $data_attachments[$attachment]=$media->getPathRelativeToRoot();

        }
        $record->update($data_attachments); 
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    }
}
